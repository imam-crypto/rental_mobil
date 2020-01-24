<div class="main-content">

<section class="section">

    <div class="section-header">

    <h1>Update Data Penyewa</h1>
    </div>

    <?php foreach($penyewa as $p){ ?>
<form action="<?php echo base_url().'admin/penyewa_update' ?>" method="post"> 
	<div class="form-group">
		<label>Nama Penyewa</label>
		<input type="text" name="nama" value="<?php echo $p->nama; ?>" class="form-control">
		<input type="hidden" name="id" value="<?php echo $p->id_penyewa; ?>" class="form-control">
		<?php echo form_error('nama'); ?>
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat" class="form-control"><?php echo $p->alamat; ?></textarea>
	</div>
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<select name="jk" class="form-control">
			<option value="L">Laki-laki</option>
			<option value="P">Perempuan</option>
		</select>
	</div>	
	<div class="form-group">
		<label>No KTP</label>
		<input type="number" name="no_ktp" value="<?php echo $p->no_ktp; ?>" class="form-control">
	</div>
	<div class="form-group">
		<label>No Hp</label>
		<input type="text" name="no_hp" value="<?php echo $p->no_hp; ?>" class="form-control">	
	</div>	
	<div class="form-group">
		<input type="submit" value="Simpan" class="btn btn-primary">
	</div>
</form>
<?php } ?>


</section>
</div>