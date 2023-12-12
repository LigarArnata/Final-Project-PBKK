<?php 

class LaporanPegawai extends CI_Controller{

    public function index(){
        $data['title'] = "Laporan Daftar Pegawai";
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/laporanPegawai', $data);
        $this->load->view('templates_admin/footer');
    }

    public function cetakDaftarPegawai(){
        $data['title'] = 'Cetak Daftar Pegawai';
        $data['cetakPegawai'] = $this->db->query("SELECT data_pegawai.nik, data_pegawai.nama_pegawai, data_pegawai.jenis_kelamin,
        data_jabatan.nama_jabatan
        FROM data_pegawai
        INNER JOIN data_jabatan ON data_jabatan.nama_jabatan=data_pegawai.jabatan
        ORDER BY data_pegawai.nama_pegawai ASC")->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('admin/cetakDataPegawai', $data);
    }
}

?>