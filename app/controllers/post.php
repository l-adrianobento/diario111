<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Post extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array("Posts_model"));
    }

    public function index($slug) {
        $dados['menu'] = $this->Posts_model->getMenu();
        $dados['post'] = $this->Posts_model->getBySlug($slug);
        $dados['conteudo'] = "post.php";
        
        $this->load->view('master', $dados);
    }
}

?>