<div class="main-content">

<section class="section">

    <div class="section-header">

    <h1> Data Penyewa</h1>
    </div>

    <a href="<?= base_url('admin/tambah_penyewa') ?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Tambah Penyewa</a>
    <br><br>
    <table class="table table-sm table-bordered table-hover table-striped" id="table-datatable">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>No KTP</th`>
            <th>No Hp</th>
            <th>Aksi</th>
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
                <td width="30px"   onclick="javascript:return confirm('yakin data di edit?')">  <?= anchor('admin/penyewa_edit/'.$p->id_penyewa, '<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>') ?>
                    
                </td>
                <td width="30px"   onclick="javascript:return confirm('yakin data di hapus?')"><?= anchor('admin/penyewa_hapus/'.$p->id_penyewa,'<div class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></div>') ?>
                    
                </td>
            </tr>

        <?php endforeach; ?>
        

    </table>

</section>

</div>