<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Post_imagens_model extends MY_Model {

    //Tabela a qual o model pertence
    protected $_table    = "post_imagens";

    //Campo id da tabela
    protected $_table_id = "post_imagem_id";

    //Apelidos e campos da tabela
    protected $_fields   = array(
                               "PostId"         => "post_id",
                               "HashImagem"     => "hash_imagem",
                               "DtModified"     => "dt_modified",
                               "DtCreated"      => "dt_created",
                           );



}
?>
