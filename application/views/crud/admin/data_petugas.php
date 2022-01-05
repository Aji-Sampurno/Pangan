<?php
$getUser = $this->session->userdata('session_user');
$getId = $this->session->userdata('session_id');
$getGrup = $this->session->userdata('session_grup');
?>
<?php echo $this->session->flashdata('pesan');?>
<div class="card shadow mb-4">
	<div class="card-header py-3 py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 fint-weight-bold text-primary">Data Padi Kosong</h6>
	</div>
	<div class="row">
		<div class="col-lg">
			<div class="card-body table-responsive">
				<table class="table table-bordered" id="dataTabe" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Petugas</th>
							<th>Kecamatan</th>
							<th>Akses</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
							foreach($petugas as $baris){
						?>
						<tr>
							<td width='20px'><?php echo $no++ ?></td>
							<td><?php echo $baris -> nama_admin; ?></td>
							<td><?php echo $baris -> kecamatanadmin; ?></td>
							<td>
							<?php
								echo '<a href="'.base_url('Admin/detail_petugas/'.$baris->id_admin).'"class="fa fa-eye"></a>';
								echo '';
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