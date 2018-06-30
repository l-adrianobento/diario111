<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Paises_model extends MY_Model {

    //Tabela a qual o model pertence
    protected $_table    = "paises";

    //Campo id da tabela
    protected $_table_id = "pais_id";

    //Apelidos e campos da tabela
    protected $_fields   = array(
                               "Pais"         => "desc_pais",
                               "HashBandeira" => "hash_bandeira",
                               "Slug"         => "desc_slug",
                           );

    public function __construct() {

        //Chama o método pai
        parent::__construct();

        //Adiciona os joins
        $this->_joins = array(
            "Localidades" => array(
                "model"       => "Localidades_model",
                "type"        => "left",
            )
        );

    }

    public function getAllCountries() {

        $this->use_join = true;

        //Monta a query
        $params = array(
                "fields" => array('Pais', 'HashBandeira', 'Slug', 'count(l.'.parent::getFieldFromAlias($this->_table_id, "Localidades").') AS TotalLugares'),
                "order"  => array("field" => $this->_fields['Pais'], "dir" =>  "ASC"),
                "group"  => array("field" => "p.".$this->_table_id)
        );

        //Executa a busca
        $dados = $this->Get($params);

        //Valida o que foi recebido
        if(!$dados)
            return false;

        //Trata os dados
        foreach($dados as &$value) {

            if(isset($value['TotalLugares']) && $value['TotalLugares'])
                $value['TotalLugares'] = 'ativo';
            else
                $value['TotalLugares'] = '';
                
        }
        unset($value);

        //Retorna o registro
        return $dados;
    }



}
?>
