<div class="container-fluid">
    <div class="card mx-auto" style="width: 35%; margin: auto; text-align: center;">
        <div class="card-header bg-primary text-white">
            Cetak Daftar Pegawai
        </div>
    <form method="post" action="<?php echo base_url('admin/laporanPegawai/cetakDaftarPegawai') ?>">
        <div class="card-body">
            <p style="text-align: center;">Peringatan: Hak akses terbatas! Hanya admin yang memiliki izin untuk melakukan pencetakan daftar pegawai. 
                Jika dilakukan oleh jabatan lain, maka konsekuensi dan skorsing akan diterapkan. 
                Jika Anda mengalami kesulitan atau memerlukan bantuan, hubungi tim dukungan teknis.</p>
        </div>
        <button type="submit" class="btn btn-primary" style="width: 50%; margin: auto; display: block; margin-bottom: 20px;">
            <i class="fas fa-print"></i> Cetak Laporan
        </button>
        </form>
    </div>
    
</div>