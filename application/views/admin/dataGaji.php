<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">NIK</th>
            <th class="text-center">Nama Pegawai</th>
            <th class="text-center">Jenis Kelamin</th>
            <th class="text-center">Jabatan</th>
            <th class="text-center">Gaji Pokok</th>
            <th class="text-center">Tj. Transport</th>
            <th class="text-center">Uang Makan</th>
            <th class="text-center">Potongan</th>
            <th class="text-center">Total Gaji</th>
        </tr>

        <?php $no=1; foreach($gaji as $g) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $g->nik ?></td>
            <td><?php echo $g->nama_pegawai ?></td>
            <td><?php echo $g->jenis_kelamin ?></td>
            <td><?php echo $g->nama_jabatan ?></td>
            <td>Rp <?php echo number_format($g->gaji_pokok, 0, ',', '.')?></td>
            <td>Rp <?php echo number_format($g->tj_transport, 0, ',', '.')?></td>
            <td>Rp <?php echo number_format($g->uang_makan, 0, ',', '.')?></td>
            <td>Rp <?php echo number_format($g->potongan, 0, ',', '.')?></td>
            <td>Rp <?php echo number_format($g->gaji_pokok + $g->tj_transport + $g->uang_makan - $g->potongan, 0, ',', '.')?></td>
        </tr>

        <?php endforeach; ?>
    </table>
</div>
</div>