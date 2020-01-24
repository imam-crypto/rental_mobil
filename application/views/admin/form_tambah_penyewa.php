<div class="main-content">

<section class="section">

    <div class="section-header">

    <h1 class="text-centered"> Tambah Penyewa</h1>
    </div>


    <form action="<?= base_url('admin/penyewa_aksi_tambah') ?>" method="POST">

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <input type="hidden" name="id" class="form-control">
        <div class="form-group">
           <label>Nama</label>
            <input type="text" name="nama" class="form-control" required >
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" required >
        </div>
        <div class="form-group">    
        <label>Jenis Kelamin</label>
            <input type="text" name="jk" class="form-control" required >
        </div>
        <div class="form-group">
        <label>No KTP</label>
            <input type="text" name="no_ktp" class="form-control" required >
        </div>
        <div class="form-group">
        <label>No hp</label>
            <input type="text" name="no_hp" class="form-control" required >
        </div>
        <div class="form-group " >
        <button type="submit" class="btn btn-primary pull-right" > Simpan </button>
        <button type="reset" class="btn btn-info pull-right" > Reset </button>
        </div>

        </div>
    </div>
</div>


</form>



</section>
</div>