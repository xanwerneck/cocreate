<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model("main_model");
    }
	public function index()
	{
		$this->load->view('includes/top');
		$data['ideias'] = $this->main_model->getIdeas();
		$this->load->view('includes/home',$data);
		$this->load->view('includes/footer');
	}

	public function publicar(){
		$nome = $this->input->post('titulo');
		$conteudo = $this->input->post('conteudo');
		$retorno = $this->main_model->insertNewIdea($nome,$conteudo);
		if ($retorno == true) {
			echo 1;
		}else{
			echo 0;
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */