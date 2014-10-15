<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model("clique");
    }
	public function index()
	{
		$this->load->view('includes/top');
		$data['ideias'] = $this->clique->apresentaIdeias();
		$this->load->view('includes/home',$data);
		$this->load->view('includes/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */