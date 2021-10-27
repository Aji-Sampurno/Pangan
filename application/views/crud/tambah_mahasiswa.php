<!-- untuk membuat tag div -->
<div class="row">
	<!-- untuk membuat tag div -->
	<div class="col-lg-7"> 
	<!-- untuk membuat tag div -->
	<div class="p-5"> 
	<!-- untuk membuat tag div -->
	<div class="text-center"> 
	<!-- untuk membuat tag heading 1 -->
	<h1 class="h4 text-gray-900 mb-4">Tambah User</h1></div> 
	<!-- untuk membuat tag form dengan action base url function input dari class Mahasiswa -->
	<form class="user" action="<?php echo base_url('Mahasiswa/input');?>" method="post"> 
		<!-- untuk membuat tag div -->
		<div class="form-group"> 
			<!-- untuk membuat tag input yang berguna untuk melakukan inputan username -->
			<input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username Maximal 10 Character" require> 
		<!-- akhiran tag div -->
		</div> 
		<!-- untuk membuat tag div -->
		<div class="form-group"> 
			<!-- untuk membuat tag input yang berguna untuk melakukan inputan password -->
			<input type="password" class="form-control form-control-user" id="pass" name="pass" placeholder="Password Maximal 6 Character" require> 
		<!-- akhiran tag div -->
		</div>
		<!-- untuk membuat tag div -->
		<div class="form-group">
			<!-- untuk membuat tag input yang berguna untuk melakukan inputan nama -->
			<input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="nama Maximal 20 Character" require> 
		<!-- akhiran tag div -->
		</div> 
		<!-- untuk membuat tag div -->
		<div class="form-group"> 
			<!-- untuk membuat tag select yang berguna untuk memberi inputan berupa pilihan -->
			<select id="grup" class="form-control" name="grup" require> 
				<!-- untuk membuat option -->
				<option value="0">Pilih Grup User</option>
				<!-- untuk membuat option -->
				<option value="1">Admin</option>
				<!-- untuk membuat option -->
				<option value="2">User</option> 
			<!-- untuk membuat tag div -->
			</select> 
		<!-- akhiran tag div -->
		</div> 
		<!-- untuk membuat inputan button yang akan melakukan submit -->
		<input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Tambah"> 
	<!-- akhir tah form-->
	</form><hr> 
	<!-- untuk membuat tag div -->
	<div class="text-center"> 
	<!-- untuk membuat tag div -->
	<a class="small" href="index">Kembali</a>
<!-- akhiran tag div -->
</div></div></div></div>
