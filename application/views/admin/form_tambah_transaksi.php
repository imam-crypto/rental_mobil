<div class="main-content">

<section class="section">

    <div class="section-header">

    <h1 class="text-centered"> Data Transaksi</h1>
    </div>

    
<form action="<?php echo base_url().'admin/transaksi_add_act' ?>" method="post"> 
	<div class="form-group">
		<label>Penyewa</label>
		<select name="penyewa" class="form-control">
			<option value="">-Pilih penyewa-</option>
			<?php foreach($penyewa as $p){ ?>
			<option value="<?php echo $p->id_penyewa; ?>"><?php echo $p->nama; ?></option>
			<?php } ?>
		</select>	
		<?php echo form_error('kostumer'); ?>
	</div>

	<div class="form-group">
		<label>Mobil</label>
		<select name="mobil" class="form-control">
			<option value="">-Pilih Mobil-</option>
			<?php foreach($mobil as $m){ ?>
			<option value="<?php echo $m->id_mobil; ?>"><?php echo $m->merk; ?></option>
			<?php } ?>
		</select>	
		<?php echo form_error('mobil'); ?>
	</div>

	<div class="form-group">
		<label>Tanggal Pinjam</label>
		<input type="date" name="tgl_pinjam" class="form-control">	
		<?php echo form_error('tgl_pinjam'); ?>
	</div>	

	<div class="form-group">
		<label>Tanggal Kembali</label>
		<input type="date" name="tgl_kembali" class="form-control">	
		<?php echo form_error('tgl_kembali'); ?>
	</div>	

	<div class="form-group">
		<label>Harga</label>
		<input type="number" name="harga" class="form-control">
		<?php echo form_error('harga'); ?>
	</div>

	<div class="form-group">
		<label>Harga Denda / Hari</label>
		<input type="text" name="denda" class="form-control">	
		<?php echo form_error('denda'); ?>
	</div>	
	<div class="form-group">
		<input type="submit" value="Simpan" class="btn btn-primary btn-sm">
	</div>
</form>

    
</section>
</div>