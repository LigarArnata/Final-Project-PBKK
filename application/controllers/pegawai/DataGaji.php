<?php

class DataGaji extends CI_Controller{
    public function index(){
        $data['title'] = "Data Gaji";
        $id = $this->session->userdata('id_pegawai');
        $data['gaji'] = $this->db->query("SELECT data_pegawai.nama_pegawai, data_pegawai.nik, 
        data_jabatan.gaji_pokok, data_jabatan.tj_transport, data_jabatan.uang_makan, data_pegawai.potongan 
        FROM data_pegawai 
        INNER JOIN data_jabatan ON data_jabatan.nama_jabatan = data_pegawai.jabatan
        WHERE data_pegawai.id_pegawai = '$id'")->result();
        $this->load->view('templates_pegawai/header', $data);
        $this->load->view('templates_pegawai/sidebar');
        $this->load->view('pegawai/dataGaji', $data);
        $this->load->view('templates_pegawai/footer');
    }
}

?>