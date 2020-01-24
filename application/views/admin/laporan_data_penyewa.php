<!DOCTYPE html>
<html lang="en"><head>
    
    <title>Laporan</title>
</head><body>

<h2 style="text-align: center">Laporan Data Penyewa</h2>
    <br> <br>
<table border="1" style="width: 100%">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>No KTP</th`>
            <th>No Hp</th>
            
        </tr>

        <?php 
        $no=1;
        foreach ($penyewa as $p): ?>

            <tr>
                <td> <?= $no++ ?> </td>
                <td> <?= $p->nama ?> </td>
                <td> <?= $p->alamat ?> </td>
                <td> <?= $p->jk ?> </td>
                <td> <?= $p->no_ktp ?> </td>
                <td> <?= $p->no_hp ?> </td>
                
            </tr>

        <?php endforeach; ?>
        

    </table>


</body></html>