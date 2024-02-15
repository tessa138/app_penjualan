<h3 style="margin-bottom:12px">Edit Barang</h3>
<?php foreach($barang as $s) { ?>
	<form action="<?php echo base_url('barang/load_edit') ?>" method="POST">
		<div class="form-group">
			<label>Nama Barang</label>
			<input name="id_barang" type="hidden" value="<?php echo $s->id_barang ?>">
			<input name="nama_barang" type="text" class="form-control" value="<?php echo $s->nama_barang ?>">
		</div>
		<div class="form-group">
			<label>Harga</label>
			<input name="harga" type="text" class="form-control" value="<?php echo $s->harga ?>">
		</div>
		<?php echo anchor('barang','Kembali',array('class'=>'btn btn-warning'))?> || <input type="submit" class="btn btn-primary" value="Simpan">
	</form>
<?php } ?>