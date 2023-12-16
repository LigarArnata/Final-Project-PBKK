<?php

class UbahPassword extends CI_Controller{

    public function index(){
        $data['title'] = "Ubah Password";
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('formUbahPassword', $data);
        $this->load->view('templates_admin/footer');
    }

    public function ubahPasswordAksi(){
        $passBaru = $this->input->post('passBaru');
        $ulangPass = $this->input->post('ulangPass');

        $this->form_validation->set_rules('passBaru', 'password baru', 'required|matches[ulangPass]');
        $this->form_validation->set_rules('ulangPass', 'ulangi password', 'required');

        if($this->form_validation->run() != FALSE){
            $data = array('password' => $passBaru);
            $id = array('id_pegawai' => $this->session->userdata('id_pegawai'));

            $this->penggajianModel->update_data('data_pegawai', $data, $id);
            redirect('welcome');

        }else{
            $data['title'] = "Ubah Password";
            $this->load->view('templates_admin/header', $data);
            $this->load->view('templates_admin/sidebar');
            $this->load->view('formUbahPassword', $data);
            $this->load->view('templates_admin/footer');
        }
    }
}

?>