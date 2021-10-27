<?php 
	//untuk mendapatkan informasi session
    $getUser = $this->session->userdata('session_user');
    $getGrup = $this->session->userdata('session_grup');
 ?>
<!-- mengatur Tampilan Untuk Home Mahasiswa -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">DataTables User</h6>
	</div>
	<!-- Membuat badan untuk tabel -->
		<div class="card-body">
			<!-- untuk membuat tabel responsive-->
			<div class="table-responsive">
				<!-- untuk Membuat Tabel -->
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No</th>
						<th>Keterangan</th>
						<th>Action</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>No</th>
						<th>Keterangan</th>
						<th>Action</th>
					</tr>
				</tfoot>
				<tbody>
					<!-- memanggil data dari data base yang dimana sudah di simpan di variabel $data dalam controller -->
					<?php 
						$no = 1; //deklarasi variabel untuk memulai tabel
						// membuat looping untuk menampilkan data array
						foreach($admin as $baris) : //memanggil index array dengan menggunakan elemen yang ada di variabel $data
					?>
					<tr>
						<!-- untuk menampilkan username -->
						<td><?php echo $no++; ?></td>
						<!-- untuk menampilkan nama -->
						<td><?php echo $baris->grup; ?></td>
						<td class="text-center">
							<!-- untuk membuat kondisi ketika admin yang login-->
							<?php if ($getGrup==1) { ?>
								<a href="<?php echo base_url('Grup/edit_grup/'.$baris->id_grup);?>" class="fa fa-edit mr-4"> 							
								<a href="<?php echo base_url('Grup/hapus_grup/'.$baris->id_grup);?>" class="fa fa-times">
							<?php } ?>
						</td>
					</tr>
					<!-- mengakhiri looping -->
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<!-- untuk membuat button tambah grup yang akan memanggil function tambah dari class Grup setelah di klik -->
		<a href="<?= base_url('Grup/tambah_grup'); ?>" class="btn btn-success btn-icon-split">
			<span class="text">Tambah Data</span>
		</a>
	</div>
</div>
