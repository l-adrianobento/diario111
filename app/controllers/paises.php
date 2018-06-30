<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Paises extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array("Paises_model", "Posts_model"));
    }

    public function index() {
        $dados['menu'] = $this->Posts_model->getMenu();
        $dados['paises'] = $this->Paises_model->getAllCountries();
        $dados['conteudo'] = "paises.php";
        
        $this->load->view('master', $dados);
    }

    public function por_pais($slug) {
        $dados['menu'] = $this->Posts_model->getMenu();
        $dados['posts'] = $this->Posts_model->getPosts($slug);
        $dados['conteudo'] = "home.php";
        
        $this->load->view('master', $dados);
    }
}

?>