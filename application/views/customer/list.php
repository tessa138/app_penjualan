<div id="customer">
	<h3 style="margin-bottom:12px" >Data Customer</h3>
	<button style="margin-bottom:12px; "data-toggle="modal" data-target="#tmbhcustomer" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span>   Tambah Customer</button>

<div class="table">
	<table class="table table-striped table-bordered table-hover" id="dataTables-example">
		<thead>
			<th>No</th>
			<th>Nama Customer</th>
			<th>Alamat</th>
            <th>No. Telp</th>
			<th>Aksi</th>
		</thead>
		<tbody>
		<?php $no = 1; foreach($customer as $s) { ?>
			<tr class="gradeU">
				<td><?php echo $no++ ?></td>
				<td><?php echo $s->nama_customer ?></td>
				<td><?php echo $s->alamat ?></td>
                <td><?php echo $s->no_telepon ?></td>
				<td><?php echo anchor('customer/edit/'.$s->id_customer,'Edit',array('class'=>'btn btn-warning')); ?> || <?php echo anchor('customer/hapus/'.$s->id_customer,'Hapus',array('class'=>'btn btn-danger')); ?>
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>

	<div id="tmbhcustomer" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Tambah Customer Baru</h4>
				</div>
				<div class="modal-body">
					<form action="<?php echo base_url('customer/tambah'); ?>" method="POST">
						<div class="form-group">
							<label>Nama Customer</label>
							<input name="nama_customer" type="text" class="form-control" placeholder="Nama Customer ..">
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<input name="alamat" type="text" class="form-control" placeholder="Alamat ..">
						</div>
                        <div class="form-group">
							<label>No. Telp</label>
							<input name="no_telepon" type="text" class="form-control" placeholder="No. Telp ..">
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