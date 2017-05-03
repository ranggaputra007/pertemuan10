<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		
	}

	public function index()
	{
		$this->load->view('register');
		
	}

	public function daftar()
	{
		$this->load->model('user');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|callback_cekUsername');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if($this->form_validation->run()==false){
			$this->load->view('register');
		}else{
			$this->user->daftar();
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Username dan Password baru berhasil di tambah !!</div></div>");
			redirect('register');
		}
	}

	public function cekUsername($username)
	{
	$this->load->library('form_validation');
    $this->load->model('user');
    $is_exist = $this->user->select_username($username);

    if ($is_exist) {
        $this->form_validation->set_message('cekUsername', 'Username Sudah di pakai.');    
        return false;
    } else {
        return true;
    }
	}

}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */
