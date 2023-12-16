<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
</div>
<table class="table table-striped table-bordered">
    <tr>
        <th>Gaji Pokok</th>
        <th>Tj. Trasnportasi</th>
        <th>Uang Makan</th>
        <th>Potongan</th>
        <th>Total Gaji</th>
    </tr>
    <?php foreach($gaji as $g) : ?>
    <tr>
        <td>Rp <?php echo number_format($g->gaji_pokok,0,',','.') ?></td>
        <td>Rp <?php echo number_format($g->tj_transport,0,',','.') ?></td>
        <td>Rp <?php echo number_format($g->uang_makan,0,',','.') ?></td>
        <td>Rp <?php echo number_format($g->potongan,0,',','.') ?></td>
        <td>Rp <?php echo number_format($g->gaji_pokok + $g->tj_transport + $g->uang_makan - $g->potongan, 0, ',', '.')?></td>
    </tr>
    <?php endforeach; ?>
</table>
</div>