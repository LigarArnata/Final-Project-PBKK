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
        <h2>Daftar Pegawai Aktif</h2>
    </center>

    <table class="table table-bordered table-striped">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">NIK</th>
            <th class="text-center">Nama Pegawai</th>
            <th class="text-center">Jenis Kelamin</th>
            <th class="text-center">Jabatan</th>
        </tr>

        <?php $no=1; foreach($cetakPegawai as $p) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $p->nik ?></td>
            <td><?php echo $p->nama_pegawai ?></td>
            <td><?php echo $p->jenis_kelamin ?></td>
            <td><?php echo $p->nama_jabatan ?></td>
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