<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <style type="text/css">
        body{
            font-family: Arial;
            color: black;
        }

    </style>
</head>
<body>

    <center>
        <h1>Arnata Company</h1>
        <h2>Daftar Gaji Pegawai</h2>
    </center>

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

        <?php $no=1; foreach($cetakGaji as $g) : ?>

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
    <table width="100%">
        <tr>
            <td></td>
            <td width="200px">
                <p>Surabaya, <?php echo date("d M Y") ?> <br> CEO Arnata Company</p>
                <br>
                <br>
                <p>___________________</p>
            </td>
        </tr>
    </table>
        
</body>
</html>

<script type="text/javascript">
    window.print();
</script>