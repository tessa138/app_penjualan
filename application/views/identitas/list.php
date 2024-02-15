<div id="identitas">
	<h3 style="margin-bottom:12px" >Data Identitas</h3>
	<button style="margin-bottom:12px; "data-toggle="modal" data-target="#tmbhidentitas" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span>Tambah Identitas</button>

<div class="table">
	<table class="table table-striped table-bordered table-hover" id="dataTables-example">
		<thead>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
            <th>Alamat</th>
            <th>No. Telp</th>
			<th>Aksi</th>
		</thead>
		<tbody>
		<?php $no = 1; foreach($identitas as $s) { ?>
			<tr class="gradeU">
				<td><?php echo $no++ ?></td>
				<td><?php echo $s->nama ?></td>
				<td><?php echo $s->email ?></td>
                <td><?php echo $s->alamat ?></td>
                <td><?php
				if (!empty($s->no_telp)){
					$whatsappLink = 'https://wa.me/' . preg_replace('/[^\d]+/', '', $s->no_telp);
					echo '<a href="' . $whatsappLink . '" target="_blank">'. $s->no_telp . '</a>';
				} else {
					echo 'No Telepon not provided';
				}
				?></td>
				<td><?php echo anchor('identitas/edit/'.$s->id_identitas,'Edit',array('class'=>'btn btn-warning')); ?>  ||  <?php echo anchor('identitas/hapus/'.$s->id_identitas,'Hapus',array('class'=>'btn btn-danger')); ?></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>

	<div id="tmbhidentitas" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Tambah Identitas Baru</h4>
				</div>
				<div class="modal-body">
					<form action="<?php echo base_url('identitas/tambah'); ?>" method="POST">
						<div class="form-group">
							<label>Nama </label>
							<input name="nama" type="text" class="form-control" placeholder="Nama Identitas ..">
						</div>
                        <div class="form-group">
							<label>Email</label>
							<input name="email" type="text" class="form-control" placeholder="Email ..">
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<input name="alamat" type="text" class="form-control" placeholder="Alamat ..">
						</div>
                        <div class="form-group">
							<label>No. Telp</label>
							<input name="no_telp" type="text" class="form-control" placeholder="No. Telp ..">
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