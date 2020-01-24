
<html lang="en"><head>
    <title>Laporan</title>
</head><body>

    <h2 style="text-align: center">Laporan Data Mobil</h2>
    <br> <br>
<table border="1" style="width: 100%">
        <tr>
            <th>NO</th>
            <th>Merk</th>
            <th>Plat_nomor</th>
            <th>Tahun</th>
            <th>Warna</th`>
            <th>Status</th>
            
        </tr>

        <?php 
        $no=1;
        foreach ($mobil as $m): ?>

            <tr>
                <td> <?= $no++ ?> </td>
                <td> <?= $m->merk ?> </td>
                <td> <?= $m->plat_nomor ?> </td>
                <td> <?= $m->tahun ?> </td>
                <td> <?= $m->warna ?> </td>
                <td> <?= $m->status ?> </td>
                
            </tr>

        <?php endforeach; ?>
        

    </table>



</body></html>