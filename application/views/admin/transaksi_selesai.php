<div class="main-content">

<section class="section">

    <div class="section-header">

    <h1>Transaksi</h1>
    </div>

    <?php foreach($transaksi as $t){ ?>
<form action="<?php echo base_url().'admin/transaksi_selesai_act' ?>" method="post"> 
	<input type="hidden" name="id" value="<?php echo $t->id_transaksi ?>">		
	<input type="hidden" name="mobil" value="<?php echo $t->transaksi_mobil ?>">		
	<input type="hidden" name="tgl_kembali" value="<?php echo $t->transaksi_tgl_kembali ?>">		
	<input type="hidden" name="denda" value="<?php echo $t->transaksi_denda ?>">

	<div class="form-group">
		<label>Penyewa</label>
		<select class="form-control" name="penyewa" disabled>
			<option value="">-Pilih Kostumer-</option>
			<?php foreach($penyewa as $p){ ?>
			<option <?php if($t->transaksi_penyewa == $k->id_penyewa){echo "selected='selected'";} ?> value="<?php echo $k->id_penyewa; ?>"><?php echo $k->nama; ?></option>
			<?php } ?>
		</select>		
	</div>		

	<div class="form-group">
		<label>Mobil</label>
		<select class="form-control" name="mobil" disabled>
			<option value="">-Pilih Mobil-</option>
			<?php foreach($mobil as $m){ ?>
			<option <?php if($t->transaksi_mobil == $m->id_mobil){echo "selected='selected'";} ?> value="<?php echo $m->id_mobil; ?>"><?php echo $m->merk; ?></option>
			<?php } ?>
		</select>		
	</div>

	<div class="form-group">
		<label>Tanggal Pinjam</label>
		<input class="form-control" type="date" name="tgl_pinjam" value="<?php echo $t->transaksi_tgl_pinjam ?>" disabled>	
	</div>

	<div class="form-group">
		<label>Tanggal Kembali</label>
		<input class="form-control" type="date" name="tgl_kembali" value="<?php echo $t->transaksi_tgl_kembali ?>" disabled>	
	</div>

	<div class="form-group">
		<label>Harga</label>
		<input class="form-control" type="number" name="harga" value="<?php echo $t->transaksi_harga ?>" disabled>
	</div>

	<div class="form-group">
		<label>Harga Denda / Hari</label>
		<input class="form-control" type="text" name="denda" value="<?php echo $t->transaksi_denda ?>" disabled>	
	</div>

	<div class="form-group">
		<label>Tanggal Dikembalikan Oleh Kostumer</label>
		<input class="form-control" type="date" name="tgl_dikembalikan">	
		<?php echo form_error('tgl_dikembalikan'); ?>
	</div>

	<div class="form-group">
		<input type="submit" value="Simpan" class="btn btn-primary btn-sm">
	</div>
</form>
<?php } ?>


</section>
</div>