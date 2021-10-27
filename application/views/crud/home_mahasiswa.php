<?php
//digunakan untuk mendapatkan data session login
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');
?>
<!-- untuk membuat tag div -->
<div class="card shadow mb-4">
	<!-- untuk membuat tag div -->
	<div class="card-header py-3">
		<!-- untuk membuat tag heading 6 -->
		<h6 class="m-0 fint-weight-bold text-primary">Data Tables User</h6>
	<!-- akhiran tag tfoot -->
	</div>
	<!-- untuk membuat tag div -->
	<div class="card-body"><div class="table-responsive">
		<!-- untuk membuat tag table -->
		<table class="table table-bordered" id="dataTabe" width="100%" cellspacing="0">
			<!-- untuk membuat tag table head -->
			<thead>
				<!-- untuk membuat tag tr yang digunakan untuk membuat baris dalam tabel -->
				<tr>
					<!-- untuk membuat table heading yang berguna dalam membuat judul dalam table -->
					<th>No</th>
					<th>Username</th>
					<th>Nama</th>
					<th>Grup</th>
					<th></th>
				<!-- akhiran tag tr -->
				</tr>
			<!-- akhiran tag thead -->
			</thead>
			<!-- untuk membuat tag table foot -->
			<tfoot>
				<!-- untuk membuat tag tr yang berguna untuk membuat baris dalam tabel -->
				<tr>
					<!-- untuk membuat table heading yang berguna dalam membuat judul dalam table -->
					<th>No</th>
					<th>Username</th>
					<th>Nama</th>
					<th>Grup</th>
					<th></th>
				<!-- akhiran tag tr -->
				</tr>
			<!-- akhiran tag tfoot -->
			</tfoot>
			<!-- untuk membuat tag table body -->
			<tbody>
				<!-- megambil nilai atau data dari database -->
				<?php $no = 1;
					foreach($user as $baris){
				?>
				<tr>
					<!-- untuk menampilkan outputan nomer yang penentuan nya auto increment -->
					<td><?php echo $no++ ?></td>
					<!-- untuk menampilkan output username yang didapat dari database -->
					<td><?php echo $baris -> username; ?></td>
					<!-- untuk menampilkan output nama yang didapat dari database -->
					<td><?php echo $baris -> nama; ?></td>
					<!-- untuk menampilkan output grup yang didapat dari database -->
					<td><?php echo $baris -> grup; ?></td>
					<td>
					<!-- untuk memberikan akses edit dan hapus data terhadap admin -->
					<?php
						if($getGrup==1){
							echo '<a href="'.base_url('Mahasiswa/edit/'.$baris->id).'"class="fa fa-edit"></a>';
							echo " ";
							echo '<a href="'.base_url('Mahasiswa/hapus/'.$baris->id).'"class="fa fa-times"></a>';
						}
					?>
					</td>
				</tr>
				<?php } ?>
			<!-- akhiran tag tbody -->
			</tbody>
		<!-- akhiran tag table -->
		</table>
		<!-- untuk membuat button tambah mahasiswa yang akan memanggil function tambah dari class mahasiswa setelah di klik -->
		<a href="<?php echo base_url('Mahasiswa/tambah')?>" class="btn btn-success btn-icon-split">
		<span class="text">Tambah Data</span>
		</a>

		<!-- Welcome Modal-->
		<!-- membuat pop up modal -->
		<div class="modal fade text-center" id="WelcomeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">WELCOME BACK</h5>
						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<!-- untuk mendapatkan data user atau admin yang melakukan login dan menampilkan username yang sesuai -->
					<div class="modal-body">
						<h5 class="modal-title" id="exampleModalLabel"><?php echo $getUser; ?></h5>
					</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">OK</button>
					</div>
				</div>
			</div>
		</div>

<!-- akhiran tag div -->
</div></div></div>
