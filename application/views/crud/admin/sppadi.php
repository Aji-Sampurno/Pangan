<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');
?>
<div class="card shadow mb-4">
	<div class="card-header py-3 py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 fint-weight-bold text-primary"><?php echo $title; ?></h6>
        <a href="<?php echo base_url('Barang_Penjual/tambah')?>" class="btn btn-success btn-icon-split">
			<span class="text">Tambah Produk</span>
		</a>
	</div>
	<div class="card-body"><div class="table-responsive">
		<?php echo $this->session->flashdata('pesan');?>
		<table class="table table-bordered" id="dataTabe" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th>No</th>
					<th>Jenis Statistik</th>
					<th>Provinsi</th>
					<th>Kab./Kota</th>
					<th>Kecamatan</th>
					<th>Bulan</th>
					<th>tahun</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1;
					foreach($padi as $baris){
				?>
				<tr>
					<td width='20px'><?php echo $no++ ?></td>
					<td><?php echo $baris -> nama_statistik; ?></td>
					<td><?php echo $baris -> provinsi; ?></td>
					<td><?php echo $baris -> kabkota; ?></td>
					<td><?php echo $baris -> kecamatan; ?></td>
					<td><?php echo $baris -> bulan; ?></td>
					<td><?php echo $baris -> tahun; ?></td>
					<td>
					<?php
						if($getGrup==1){
							echo '<a href="'.base_url('Admin/detail_padi/'.$baris->id_statistik).'"class="fa fa-eye"></a>';
							echo " ";
							// echo '<a href="'.base_url('Barang_Penjual/edit/'.$baris->id_statistik).'"class="fa fa-edit"></a>';
							// echo " ";
							// echo '<a href="'.base_url('Barang_Penjual/hapus/'.$baris->id_statistik).'"class="fa fa-times"></a>';
						}
					?>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
    </div>
</div>
