<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array("Posts_model"));
    }

    public function index() {
        $dados['menu'] = $this->Posts_model->getMenu();
        $dados['posts'] = $this->Posts_model->getPosts();
        $dados['conteudo'] = "home.php";
        $this->load->view('master', $dados);
    }
}

?>