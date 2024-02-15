<div id="barang">
	<h3 style="margin-bottom:12px" >Data Barang</h3>
	<button style="margin-bottom:12px;" data-toggle="modal" data-target="#tmbhbarang" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span>   Tambah Barang</button>

<div class="table">
	<table class="table table-striped table-bordered table-hover" id="dataTables-example">
		<thead>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Harga</th>
			<th>Aksi</th>
		</thead>
		<tbody>
		<?php $no = 1; foreach($barang as $s) { ?>
			<tr class="gradeU">
				<td><?php echo $no++ ?></td>
				<td><?php echo $s->nama_barang ?></td>
				<td>Rp. <?php echo number_format($s->harga,2) ?></td>
				<td><?php echo anchor('barang/edit/'.$s->id_barang,'Edit',array('class'=>'btn btn-warning')); ?> || <?php echo anchor('barang/hapus/'.$s->id_barang,'Hapus',array('class'=>'btn btn-danger')); ?>
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>

	<div id="tmbhbarang" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Tambah Barang Baru</h4>
				</div>
				<div class="modal-body">
					<form action="<?php echo base_url('barang/tambah'); ?>" method="POST">
						<div class="form-group">
							<label>Nama Barang</label>
							<input name="nama_barang" type="text" class="form-control" placeholder="Nama Barang ..">
						</div>
						<div class="form-group">
							<label>Harga</label>
							<input name="harga" type="text" class="form-control" placeholder="Harga ..">
						</div>																	
				</div>
					<div class="modal-footer">
							<button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
							<input type="submit" class="btn btn-primary" value="Simpan">
					</div>
					</form>
			</div>
		</div>
	</div>
</div>