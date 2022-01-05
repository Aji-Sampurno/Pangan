<?php
$getId = $this->session->userdata('session_id');
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');
?>
<?php echo $this->session->flashdata('pesan');?>
<div class="card shadow mb-4">
	<div class="card-header py-3 py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 fint-weight-bold text-primary">Data Palawija</h6>
	</div>
	<div class="row">
		<div class="col-lg">
			<div class="card-body table-responsive">
				<div class="row">
					<div class="col-10">
					</div>
					<div class="col-2">
						<?php echo $links; ?>
					</div>
				</div>
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
						<?php $no = $this->uri->segment('3') + 1;
							foreach($statistik as $baris){
						?>
						<tr>
							<td width='1%'><?php echo $no++ ?></td>
							<td width='30%'><?php echo $baris -> nama_admin; ?></td>
							<td><?php echo $baris -> kecamatan; ?></td>
							<td><?php echo $baris -> tgl_laporan; ?></td>
							<td>
							<?php
								// echo '<a href="'.base_url('Admin/edit_statistik_padi/'.$baris->id_statistik).'"class="fa fa-edit"></a>';
								echo '<a href="'.base_url('Admin/lihat_statistik_palawija/'.$baris->id_statistik).'"class="fa fa-eye">&nbspLihat Detail</a>&nbsp';
								echo '<a href="'.base_url('Admin/print_statistik_palawija/'.$baris->id_statistik).'"class="fa fa-print">&nbspCetak Laporan</a>';
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