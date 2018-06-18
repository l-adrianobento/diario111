<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Posts_model extends MY_Model {

    //Tabela a qual o model pertence
    protected $_table    = "posts";

    //Campo id da tabela
    protected $_table_id = "post_id";

    //Apelidos e campos da tabela
    protected $_fields   = array(
                               "Slug"           => "desc_slug",
                               "HashImagemCapa" => "hash_imagem_capa",
                               "TxtPost"       => "txt_post",
                               "DtModified"     => "dt_modified",
                               "DtCreated"      => "dt_created",
                               "FlgAtivo"       => "flg_ativo",
                               "LocalidadeId"   => "localidade_id",
                           );

    public function __construct() {

        //Chama o método pai
        parent::__construct();

        //Adiciona os joins
        $this->_joins = array(
            "Localidades" => array(
                "foreign_key" => $this->_fields["LocalidadeId"],
                "model"       => "Localidades_model",
                "alias"       => "loc",
                "type"        => "left",
            ),

            "Paises" => array(
                "model" => "Paises_model",
                "alias" => "pais",
                "type"  => "LEFT",
                "foreign_key" => false,
            ),
        );

        //Seta o join de UsuarioAnimais
        parent::setJoin("Paises", "conditions", "pais.".parent::getFieldFromAlias("PaisId", "Localidades")." = loc.".parent::getFieldFromAlias("PaisId", "Localidades"));

    }


    public function getBySlug($slug) {

        $this->use_join = true;

        //Monta a query
        $params = array(
                "fields" => array('Slug', 'TxtPost', 'DtCreated', 'Localidade', 'Pais'),
                "where"  => $this->_fields['Slug']." LIKE '".$slug."' AND ".$this->_fields['FlgAtivo']." = 'S'",
                "limit"  => array("num" => 1)
        );

        //Executa a busca
        $dados = $this->Get($params);

        //Valida o que foi recebido
        if(!$dados)
            return false;

        //Retorna o registro
        return $dados[0];
    }

    public function getAllPosts() {

        $this->use_join = true;

        //Monta a query
        $params = array(
                "fields" => array('Slug', 'HashImagemCapa', 'DtCreated', 'Localidade', 'Pais'),
                "where"  => $this->_fields['FlgAtivo']." = 'S'",
        );

        //Executa a busca
        $dados = $this->Get($params);

        //Valida o que foi recebido
        if(!$dados)
            return false;

        //Retorna o registro
        return $dados;
    }

}
?>
