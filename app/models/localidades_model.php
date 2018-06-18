<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Localidades_model extends MY_Model {

    //Tabela a qual o model pertence
    protected $_table    = "localidades";

    //Campo id da tabela
    protected $_table_id = "localidade_id";

    //Apelidos e campos da tabela
    protected $_fields   = array(
                               "Localidade"         => "desc_localidade",
                               "PaisId"     => "pais_id",
                           );



}
?>
