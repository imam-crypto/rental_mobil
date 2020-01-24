<div class="main-content">

<section class="section">

    <div class="section-header">

    <h1> Data mobil</h1>
    </div>

    <a href="<?= base_url('admin/tambah_mobil') ?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Tambah Mobil Baru</a>
    <br><br>
    <table class="table table-sm table-bordered table-hover table-striped" id="table-datatable">
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
                <td> <?= $m->status ?> </td>
                <td width="40px" onclick="javascript:return confirm('yakin data di edit?')">  <?= anchor('admin/mobil_edit/'.$m->id_mobil, '<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>') ?>
                    
                </td>
                <td width="40px" onclick="javascript:return confirm('yakin data di edit?')"><?= anchor('admin/mobil_hapus/'.$m->id_mobil,'<div class="btn btn-sm btn-primary"><i class="fas fa-trash-alt"></i></div>') ?>
                    
                </td>
            </tr>

        <?php endforeach; ?>
        

    </table>

</section>

</div>