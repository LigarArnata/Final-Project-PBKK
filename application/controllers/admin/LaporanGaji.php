<?php 

class LaporanGaji extends CI_Controller{

    public function index(){
        $data['title'] = "Laporan Gaji Pegawai";
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/laporanGaji', $data);
        $this->load->view('templates_admin/footer');
    }

    public function cetakLaporanGaji(){
        $data['title'] = 'Cetak Laporan Gaji Pegawai';
        $data['cetakGaji'] = $this->db->query("SELECT data_pegawai.nik, data_pegawai.nama_pegawai, data_pegawai.jenis_kelamin,
        data_jabatan.nama_jabatan, data_jabatan.gaji_pokok, data_jabatan.tj_transport, data_jabatan.uang_makan, data_pegawai.potongan
        FROM data_pegawai
        INNER JOIN data_jabatan ON data_jabatan.nama_jabatan=data_pegawai.jabatan
        ORDER BY data_pegawai.nama_pegawai ASC")->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('admin/cetakDataGaji', $data);
    }
}

?>