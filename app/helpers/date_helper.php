<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Date Helpers
 *
 * Contém os helpers de data exclusivos para casos brasileiros
 *
 * @author Henrique de Castro
 * @since  11/2008
 */

/**
 * data_pt_para_mysql
 *
 * Transforma a Data em português em uma data aceita pelo MySQL
 *
 * @access public
 * @author Henrique de Castro
 * @since  11/2008
 * @param  string  Data e/ou hora
 * @return string  Data e hora formatados
 */
if (!function_exists('data_pt_para_mysql')) {
    function data_pt_para_mysql($datetime) {

        //Verifica a data
        if(!$datetime)
            return false;

        //Busca a data e a hora
        $date = explode(" ", $datetime);
        $time = (isset($date[1]) ? $date[1] : "");
        $date = $date[0];

        //Busca o separador
        if(strpos($date, "/")) {

            //Separa a data
            $x = explode("/",$date);

            //Valida a data
            if(in_array("00", $x))
                return false;

            //Monta o timestamp (considerando que a data esteja no padrão dd/mm/yy ou dd/mm/yyyy
            $timestamp = mktime(0, 0, 0, $x[1], $x[0], $x[2]);
        }
        else {
            //Separa a data
            $x = explode("-",$date);

            //Valida a data
            if(in_array("00", $x))
                return false;

            //Monta o timestamp
            $timestamp = strtotime($date);
        }

        //Retorna a data formatada concatenando o tempo
        return trim(date("Y-m-d", $timestamp). " " . $time);
    }
}

/**
 * busca_opcoes_horario
 *
 * Retorna um array com as horas, os minutos e os segundos
 *
 * @access public
 * @author Henrique de Castro
 * @since  12/2008
 * @return array
 */
if (!function_exists('busca_opcoes_horario')) {
    function busca_opcoes_horario() {

        //Monta a hora
        $hr = range(0, 23);
        array_walk($hr, '__array_str_pad');

        //Monta os minutos
        $min = range(0, 59);
        array_walk($min, '__array_str_pad');

        //Retorna os valores
        return array(
                "horas"    => $hr,
                "minutos"  => $min,
                "segundos" => array("00" => "00", "15" => "15", "30" => "30", "45" => "45")
            );
    }
}

/**
 * __array_str_pad
 *
 * Executa o str_pad a cada item do array
 * (Usado apenas na função busca_opcoes_horario)
 *
 * @access private
 * @author Henrique de Castro
 * @since  12/2008
 * @see    busca_opcoes_horario
 * @param  array reference
 * @return void
 */
if (!function_exists('__array_str_pad')) {
    function __array_str_pad(&$item) {
        $item = str_pad($item, 2, "0", STR_PAD_LEFT);
    }
}

/**
 * formata_data
 *
 * Formata a data conforme a localidade e o formato passado
 *
 * @access public
 * @author Henrique de Castro
 * @since  12/2008
 * @param  string
 * @param  string
 * @return string
 */
if (!function_exists('formata_data')) {
    function formata_data($data_hora, $formato="%c") {

        //Mapea os tipos mais comuns
        $mapping = array(
	        '%c' => '%d/%m/%Y %H:%M.%S',
	        '%X' => '%H:%M.%S',
	        '%x' => '%d/%m/%Y',
    	);

	    //Substitui
        $formato = str_replace(
    	    array_keys($mapping),
	        array_values($mapping),
    	    $formato
	    );

        //Retorna a data formatada
        return ($data_hora ? iconv('ISO-8859-1', 'UTF-8', strftime($formato, strtotime($data_hora))) : "");
    }
}

/**
 * retorna_meses_portugues
 *
 * Retorna um array com os meses em português
 *
 * @access public
 * @author Henrique de Castro
 * @since  04/2009
 * @return array
 */
if (!function_exists('retorna_meses_portugues')) {
    function retorna_meses_portugues() {

        return array(
                1 => "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
                "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
            );
    }
}

/**
 * retorna_horas_com_intervalo
 *
 * Retorna um array com as horas e os minutos em um intervalo de 30 em 30 minutos
 *
 * @access public
 * @author Henrique de Castro
 * @since  11/2014
 * @param  integer
 * @param  integer
 * @return array
 */
if (!function_exists('retorna_horas_com_intervalo')) {
    function retorna_horas_com_intervalo($hora_inicial = 0, $hora_final = 23) {
        
        //Monta uma array com horario de 30 em 30 minutos
        foreach(range($hora_inicial, $hora_final) as $item) {
           $_horario[$item.":00"] = $item.":00";
           $_horario[$item.":30"] = $item.":30";       
        }
        
        //retorna horario
        return $_horario;
    }
}

?>