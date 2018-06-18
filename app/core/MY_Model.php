<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Carrega o CRUD_Model
 *
 */
if (!class_exists('CRUD_Model')) {
    load_class('CRUD_Model', 'libraries', '', false);
}

/**
 * Extensão do model CRUD
 *
 * Para manter uma consistência entre os dados, todos os Models passarão por esta classe
 *
 *
 * @author  Henrique de Castro
 * @since   08/2008
 */
abstract class MY_Model extends CRUD_Model {

    /**
     * listaAssociativa
     *
     * Retorna uma listagem associativa
     *
     * @access public
     * @author Henrique de Castro
     * @since  03/2009
     * @param  string   Campo a ser mostrado como label
     * @param  boolean
     * @param  boolean
     * @param  string   Campo a ser inserido como índice, o id da tabela é default
     * @return array||boolean
     */
    public function listaAssociativa($field, $use_join = false, $where = false, $field_index = false, $order = false) {

        //Adiciona o use_join
        $this->use_join = $use_join;

        //Verifica se o parâmetro de índice foi passado, se não, utiliza valores padrão
        if($field_index)
            //O campo passado como parâmetro será buscado na query, e inserido como os índices da lista
            $field_index_search = parent::getFieldFromAlias($field_index);
        else{
            //Busca o campo ID da tabela do model, recebendo o nome junto de seu alias
            $field_index_search = $this->getTableId();

            //Recebe o nome do campo ID da tabela, para colocar como índice da lista
            $field_index = $this->_table_id;
        }

        //Busca o order
        if(!$order)
            $order = $field;

        //Executa a busca
        $dados = parent::Get(array("fields" => array("DISTINCT( ".$field_index_search." ) AS ".$field_index, $field), "where" => $where, "order" => array("field" => $order)));

        //Associa os dados (se necessário)
        $_ret = array("" => "--Selecione--");
        if($dados) {
            foreach($dados as $value)
                $_ret[$value[$field_index]] = $value[$order];
        }

        //Limpa a memória e retorna os dados
        unset($dados);
        return $_ret;
    }

}
?>
