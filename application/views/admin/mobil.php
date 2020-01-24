
<div class="container-fluid">
<div class="table-responsive btn-hover" >
</div>
    <table class="table table-sm table-bordered table-hover table-striped" >
        <tr>
            <th>NO</th>
            <th>Merk</th>
            <th>Plat_nomor</th>
            <th>Tahun</th>
            <th>Warna</th`>
            <th>Status</th>
            <th>Aksi</th>
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
                <td> <?php
					if($m->mobil_status == "1"){
						echo "Tersedia";
					}else if($m->mobil_status == "2"){
						echo "Sedang Di Rental";
					}
					?>					
                 </td>
                <td width="30px">  <?= anchor('admin/update/'.$m->id, '<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>') ?>
                    
                </td>
                <td width="30px"><?= anchor('admin/delete/'.$m->id,'<div class="btn btn-sm btn-primary"><i class="fas fa-trash-alt"></i></div>') ?>
                    
                </td>
            </tr>

        <?php endforeach; ?>
        

    </table>

</div>
</div>