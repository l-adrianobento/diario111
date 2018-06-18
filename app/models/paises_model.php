<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Paises_model extends MY_Model {

    //Tabela a qual o model pertence
    protected $_table    = "paises";

    //Campo id da tabela
    protected $_table_id = "pais_id";

    //Apelidos e campos da tabela
    protected $_fields   = array(
                               "Pais"         => "desc_pais",
                           );



}
?>
