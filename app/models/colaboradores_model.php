<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Colaboradores_model extends MY_Model {

    //Tabela a qual o model pertence
    protected $_table    = "colaboradores";

    //Campo id da tabela
    protected $_table_id = "colaborador_id";

    //Apelidos e campos da tabela
    protected $_fields   = array(
                               "Colaborador"           => "desc_colaborador",
                           );


}
?>
