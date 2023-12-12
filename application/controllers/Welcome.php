<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$data['title'] = 'Form Login';
			$this->load->view('formLogin');
			$this->load->view('templates_admin/header', $data);
		}else{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$cek = $this->penggajianModel->cek_login($username, $password);

			if($cek == FALSE){
				redirect('welcome');
			}else{
				switch ($cek->hak_akses){
					case 1 : redirect('admin/dashboard');
						break;
					case 2 : redirect('pegawai/dashboard');
						break;	
					default :
						break;	
				}
			}
		}
	}

	public function _rules(){
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('welcome');
	}
}
