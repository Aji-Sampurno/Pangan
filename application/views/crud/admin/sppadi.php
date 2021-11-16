<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');
?>
<?php echo $this->session->flashdata('pesan');?>
<div class="card shadow mb-4">
	<div class="card-header py-3 py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 fint-weight-bold text-primary"><?php echo $title; ?></h6>
	</div>
	<div class="row">
		<div class="col-6">
			<div class="card-body table-responsive">
				<table class="table table-bordered" id="dataTabe" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Petugas</th>
							<th>Kecamatan</th>
							<th>Tanggal laporan</th>
							<th>Edit Data</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
							foreach($padi as $baris){
						?>
						<tr>
							<td width='20px'><?php echo $no++ ?></td>
							<td><?php echo $baris -> admin; ?></td>
							<td><?php echo $baris -> kecamatan; ?></td>
							<td><?php echo $baris -> tgl_laporan; ?></td>
							<td>
							<?php
								echo '<a href="'.base_url('Admin/edit_data_kosong/'.$baris->id_padi).'"class="fa fa-edit"></a>';
								echo " ";
							?>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-6">
			<div class="card-body table-responsive">
				<table class="table table-bordered" id="dataTabe" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Petugas</th>
							<th>Kecamatan</th>
							<th>Tanggal laporan</th>
							<th>Edit Data</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
							foreach($palawija as $baris){
						?>
						<tr>
							<td width='20px'><?php echo $no++ ?></td>
							<td><?php echo $baris -> admin; ?></td>
							<td><?php echo $baris -> kecamatan; ?></td>
							<td><?php echo $baris -> tgl_laporan; ?></td>
							<td>
							<?php
								echo '<a href="'.base_url('Admin/edit_palawija_kosong/'.$baris->id_palawija).'"class="fa fa-edit"></a>';
								echo " ";
							?>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
