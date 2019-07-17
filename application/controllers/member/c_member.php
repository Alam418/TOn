<?php
class C_member extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('auth');
		}
		$this->load->helper('text');
		$this->load->model('product_model');
	}
	public function index() {
		$data["products"] = $this->product_model->getAll();
		
		$data['username'] = $this->session->userdata('username');
		$this->load->view('member/index', $data);
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('auth');
	}
	
}
?>