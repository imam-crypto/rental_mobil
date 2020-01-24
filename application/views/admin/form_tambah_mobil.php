<div class="main-content">

<section class="section">

    <div class="section-header">

    <h1 class="text-centered"> Tambah mobil</h1>
    </div>

    <form action="<?= base_url('admin/mobil_aksi_tambah') ?>" method="POST">

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input type="hidden" name="id" class="form-control">
            <div class="form-group">
               <label>Merk</label>
                <input type="text" name="merk" class="form-control" required >
            </div>
            <div class="form-group">
                <label>Plat Nomor</label>
                <input type="text" name="plat_nomor" class="form-control" required >
            </div>
            <div class="form-group">    
            <label>Tahun</label>
                <input type="text" name="tahun" class="form-control" required >
            </div>
            <div class="form-group">
            <label>Warna</label>
                <input type="text" name="warna" class="form-control" required >
            </div>
            <div class="form-group">
            <label>Status</label>
                <input type="text" name="status" class="form-control" required >
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