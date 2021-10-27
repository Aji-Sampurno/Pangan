<div class="row">
	<div class="col-lg-7">
		<div class="p-5">
			
			<!-- untuk memposisikan teks berada di tengah-->
			<div class="text-center">
				<!-- untuk membuat teks dengan heading 1-->
				<h1 class="h4 text-gray-900 mb-4">Tambah User</h1>
			</div>
				<!-- untuk membuat form -->
				<form class="user" action="<?php echo base_url('Grup/input_grup');?>" method="POST">
					<div class="form-group">
						<!-- untuk membuat tempat input data -->
						<input type="text" class="form-control form-control-user" id="nameGrup" name="nameGrup" placeholder="Create New Grup..." require>
					</div>
					<input type="submit" class="btn btn-success btn-icon-split p-2" name="submit" value="Create">
				</form>
				<hr>
				<!-- untuk membuat tombol kembali -->
				<div class="text-center">
					<a class="small" href="<?= base_url(); ?>Mahasiswa/index">Kembali</a>
				</div>
			</div>
		</div>
	</div>
