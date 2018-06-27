<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sobre extends MY_Controller {

       public function __construct() {
        parent::__construct();
        $this->load->model(array("Posts_model"));
    }

    public function index() {
        $dados['posts'] = $this->Posts_model->getAllPosts();
        $dados['conteudo'] = "sobre.php";
        $this->load->view('master', $dados);
    }
}

?>