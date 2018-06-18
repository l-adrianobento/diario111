<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array("Posts_model"));
    }

    public function index() {
        // busca os dados da banda
        $dados['posts'] = $this->Posts_model->getAllPosts();
        $dados['conteudo'] = "home.php";

        $this->load->view('master', $dados);
    }
}

?>