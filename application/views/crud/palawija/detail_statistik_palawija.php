<?php
$getId = $this->session->userdata('session_id');
$getProvinsi = $this->session->userdata('session_provinsi');
$getKabkota = $this->session->userdata('session_kabkota');
$getKecamatan = $this->session->userdata('session_kecamatan');
$getNama = $this->session->userdata('session_nama');
$getJabatan = $this->session->userdata('session_jabatan');
$getNip = $this->session->userdata('session_nip');
$getTelp = $this->session->userdata('session_telp');
$getUser = $this->session->userdata('session_user');
?>
<?php echo $this->session->flashdata('pesan');?>
<?php echo form_open_multipart ('Admin/update_palawija');?>
<?php
    foreach($petugas as $baris){
?>
<input type="hidden" class="form-control" name="id" value="<?php echo $baris -> id_statistik; ?>">
<input type="hidden" name="id" value="<?php echo $getId; ?>">
<input type="hidden" name="admin" value="<?php echo $getNama; ?>">
<input type="hidden" name="jabatan" value="<?php echo $getJabatan; ?>">
<input type="hidden" name="nip" value="<?php echo $getNip; ?>">
<input type="hidden" name="telp" value="<?php echo $getTelp; ?>">
<input type="hidden" name="id_admin" value="<?php echo $getId; ?>">
<input type="hidden" name="provinsi" value="<?php echo $getProvinsi; ?>">
<input type="hidden" name="kabkota" value="<?php echo $getKabkota; ?>">
<input type="hidden" name="kecamatan" value="<?php echo $getKecamatan; ?>">
<div class="row">
    <!-- judul data -->
    <div class="col-sm-12"> 
	    <div class="mb-3"> 
	        <div class="text-center"> 
	            <h2 class="text-primary">LAPORAN LUAS TANAMAN PALAWIJA</h2>
	        </div>
        </div>
    </div>
    <!-- kondisi data -->
    <div class="col-sm-12">
        <div class="px-3">    
            <div class="row">
                <div class="col-6">
                    <div class="row justify-content-start">
                        <div class="col-auto mr-4">
                            <h6 class="p-2 text-primary">PROVINSI</h6>
                        </div>
                        <div class="col-auto">
                            <h6 class="p-2 text-primary">:</h6>
                        </div>
                        <div class="col-lg-4 col-sm-auto">
                            <h6 class="p-2 text-primary"><?php echo $baris -> provinsi; ?></h6>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row justify-content-end">
                        <div class="col-auto mr-3">
                            <h6 class="p-2 text-primary">BULAN</h6>
                        </div>
                        <div class="col-auto">
                            <h6 class="p-2 text-primary">:</h6>
                        </div>
                        <div class="col-lg-4 col-sm-auto">
                            <h6 class="p-2 text-primary"><?php echo $baris -> bulan; ?></h6>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
    <div class="col-sm-12">
        <div class="px-3">    
            <div class="row">
                <div class="col-6">
                    <div class="row justify-content-start">
                        <div class="col-auto mr-3">
                            <h6 class="p-2 text-primary">KAB./KOTA</h6>
                        </div>
                        <div class="col-auto">
                            <h6 class="p-2 text-primary">:</h6>
                        </div>
                        <div class="col-lg-4 col-sm-auto">
                            <h6 class="p-2 text-primary"><?php echo $baris -> kabkota; ?></h6>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row justify-content-end">
                        <div class="col-auto mr-3">
                            <h6 class="p-2 text-primary">TAHUN</h6>
                        </div>
                        <div class="col-auto">
                            <h6 class="p-2 text-primary">:</h6>
                        </div>
                        <div class="col-lg-4 col-sm-auto">
                            <h6 class="p-2 text-primary"><?php echo $baris -> tahun; ?></h6>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
    <div class="col-sm-12">
        <div class="px-3">    
            <div class="row">
                <div class="col-6">
                    <div class="row justify-content-start">
                        <div class="col-auto">
                            <h6 class="p-2 text-primary">KECAMATAN</h6>
                        </div>
                        <div class="col-auto">
                            <h6 class="p-2 text-primary">:</h6>
                        </div>
                        <div class="col-lg-4 col-sm-auto">
                            <h6 class="p-2 text-primary">Kecamatan <?php echo $baris -> kecamatan; ?></h6>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row justify-content-end">
                        <div class="col-auto mr-3">
                        </div>
                        <div class="col-lg-4 col-sm-auto">
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
<?php } ?>
    <!-- tabel data -->
	<div class="col"> 
	    <div class="p-0"> 
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table-bordered text-center" width="100%" id="dataTabe" cellspacing="2">
                        <thead>
                            <tr>
                                <th width="2%" rowspan="2">No</th>
                                <th width="17%" rowspan="2">Uraian</th>
                                <th width="35%"colspan="7">Lahan Sawah</th>
                                <th width="35%"colspan="7">Lahan Bukan Sawah</th>
                                <th width="8%" rowspan="2">Produksi di Lahan Sawah dan Lahan Bukan Sawah (Ton)</th>
                            </tr>
                            <tr>
                                <th>Tanaman Akhir Bulan Yang Lalu</th>
                                <th>Panen *)</th>
                                <th>Panen Muda **)</th>
                                <th>Panen Untuk Hijauan Pakan Ternak ***)</th>
                                <th>Tanam</th>
                                <th>Puso/Rusak</th>
                                <th>Tanaman Akhir Bulan Laporan</th>
                                <th>Tanaman Akhir Bulan Yang Lalu</th>
                                <th>Panen *)</th>
                                <th>Panen Muda **)</th>
                                <th>Panen Untuk Hijauan Pakan Ternak ***)</th>
                                <th>Tanam</th>
                                <th>Puso/Rusak</th>
                                <th>Tanaman Akhir Bulan Laporan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td>6</td>
                                <td>7</td>
                                <td>8</td>
                                <td>9</td>
                                <td>10</td>
                                <td>11</td>
                                <td>12</td>
                                <td>13</td>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                                <td>17</td>
                            </tr>

                            <tr>
                                <?php
                                    foreach($jumlahjagung as $baris){
                                ?>
                                <td>1.</td>
                                <td  class="text-left">JUMLAH JAGUNG</td>
                                <td><?php echo $baris -> lalusawah; ?></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> mudasawah; ?></td>
                                <td><?php echo $baris -> ternaksawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td><?php echo $baris -> pusosawah; ?></td>
                                <td><?php echo $baris -> laporansawah; ?></td>
                                <td><?php echo $baris -> lalubukan; ?></td>
                                <td><?php echo $baris -> panenbukan; ?></td>
                                <td><?php echo $baris -> mudabukan; ?></td>
                                <td><?php echo $baris -> ternakbukan; ?></td>
                                <td><?php echo $baris -> tanambukan; ?></td>
                                <td><?php echo $baris -> pusobukan; ?></td>
                                <td><?php echo $baris -> laporanbukan; ?></td>
                                <td><?php echo $baris -> produksi; ?></td>
						        <?php } ?>
                            </tr>

                            <tr>
                                <?php
                                    foreach($jagunghibrida as $baris){
                                ?>
                                <td></td>
                                <td  class="text-left">1. Hibrida</td>
                                <td><?php echo $baris -> lalusawah; ?></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> mudasawah; ?></td>
                                <td><?php echo $baris -> ternaksawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td><?php echo $baris -> pusosawah; ?></td>
                                <td><?php echo $baris -> laporansawah; ?></td>
                                <td><?php echo $baris -> lalubukan; ?></td>
                                <td><?php echo $baris -> panenbukan; ?></td>
                                <td><?php echo $baris -> mudabukan; ?></td>
                                <td><?php echo $baris -> ternakbukan; ?></td>
                                <td><?php echo $baris -> tanambukan; ?></td>
                                <td><?php echo $baris -> pusobukan; ?></td>
                                <td><?php echo $baris -> laporanbukan; ?></td>
                                <td><?php echo $baris -> produksi; ?></td>
						        <?php } ?>
                            </tr>

                            <tr>
                                <?php
                                    foreach($jagunghibridabantuan as $baris){
                                ?>
                                <td></td>
                                <td  class="text-left">1). Bantuan Pemerintah</td>
                                <td><?php echo $baris -> lalusawah; ?></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> mudasawah; ?></td>
                                <td><?php echo $baris -> ternaksawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td><?php echo $baris -> pusosawah; ?></td>
                                <td><?php echo $baris -> laporansawah; ?></td>
                                <td><?php echo $baris -> lalubukan; ?></td>
                                <td><?php echo $baris -> panenbukan; ?></td>
                                <td><?php echo $baris -> mudabukan; ?></td>
                                <td><?php echo $baris -> ternakbukan; ?></td>
                                <td><?php echo $baris -> tanambukan; ?></td>
                                <td><?php echo $baris -> pusobukan; ?></td>
                                <td><?php echo $baris -> laporanbukan; ?></td>
                                <td><?php echo $baris -> produksi; ?></td>
						        <?php } ?>
                            </tr>

                            <tr>
                                <?php
                                    foreach($jagunghibridanon as $baris){
                                ?>
                                <td></td>
                                <td  class="text-left">2). Non Bantuan Pemerintah</td>
                                <td><?php echo $baris -> lalusawah; ?></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> mudasawah; ?></td>
                                <td><?php echo $baris -> ternaksawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td><?php echo $baris -> pusosawah; ?></td>
                                <td><?php echo $baris -> laporansawah; ?></td>
                                <td><?php echo $baris -> lalubukan; ?></td>
                                <td><?php echo $baris -> panenbukan; ?></td>
                                <td><?php echo $baris -> mudabukan; ?></td>
                                <td><?php echo $baris -> ternakbukan; ?></td>
                                <td><?php echo $baris -> tanambukan; ?></td>
                                <td><?php echo $baris -> pusobukan; ?></td>
                                <td><?php echo $baris -> laporanbukan; ?></td>
                                <td><?php echo $baris -> produksi; ?></td>
						        <?php } ?>
                            </tr>

                            <tr>
                                <?php
                                    foreach($jagungkomposit as $baris){
                                ?>
                                <td></td>
                                <td  class="text-left">b. Komposit</td>
                                <td><?php echo $baris -> lalusawah; ?></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> mudasawah; ?></td>
                                <td><?php echo $baris -> ternaksawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td><?php echo $baris -> pusosawah; ?></td>
                                <td><?php echo $baris -> laporansawah; ?></td>
                                <td><?php echo $baris -> lalubukan; ?></td>
                                <td><?php echo $baris -> panenbukan; ?></td>
                                <td><?php echo $baris -> mudabukan; ?></td>
                                <td><?php echo $baris -> ternakbukan; ?></td>
                                <td><?php echo $baris -> tanambukan; ?></td>
                                <td><?php echo $baris -> pusobukan; ?></td>
                                <td><?php echo $baris -> laporanbukan; ?></td>
                                <td><?php echo $baris -> produksi; ?></td>
						        <?php } ?>
                            </tr>

                            <tr>
                                <?php
                                    foreach($jagunglokal as $baris){
                                ?>
                                <td></td>
                                <td  class="text-left">c. Lokal</td>
                                <td><?php echo $baris -> lalusawah; ?></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> mudasawah; ?></td>
                                <td><?php echo $baris -> ternaksawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td><?php echo $baris -> pusosawah; ?></td>
                                <td><?php echo $baris -> laporansawah; ?></td>
                                <td><?php echo $baris -> lalubukan; ?></td>
                                <td><?php echo $baris -> panenbukan; ?></td>
                                <td><?php echo $baris -> mudabukan; ?></td>
                                <td><?php echo $baris -> ternakbukan; ?></td>
                                <td><?php echo $baris -> tanambukan; ?></td>
                                <td><?php echo $baris -> pusobukan; ?></td>
                                <td><?php echo $baris -> laporanbukan; ?></td>
                                <td><?php echo $baris -> produksi; ?></td>
						        <?php } ?>
                            </tr>

                            <tr>
                                <?php
                                    foreach($jumlahkedelai as $baris){
                                ?>
                                <td>2.</td>
                                <td  class="text-left">KEDELAI</td>
                                <td><?php echo $baris -> lalusawah; ?></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> mudasawah; ?></td>
                                <td><?php echo $baris -> ternaksawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td><?php echo $baris -> pusosawah; ?></td>
                                <td><?php echo $baris -> laporansawah; ?></td>
                                <td><?php echo $baris -> lalubukan; ?></td>
                                <td><?php echo $baris -> panenbukan; ?></td>
                                <td><?php echo $baris -> mudabukan; ?></td>
                                <td><?php echo $baris -> ternakbukan; ?></td>
                                <td><?php echo $baris -> tanambukan; ?></td>
                                <td><?php echo $baris -> pusobukan; ?></td>
                                <td><?php echo $baris -> laporanbukan; ?></td>
                                <td><?php echo $baris -> produksi; ?></td>
						        <?php } ?>
                            </tr>

                            <tr>
                                <?php
                                    foreach($kedelaibantuan as $baris){
                                ?>
                                <td></td>
                                <td  class="text-left">a. Bantuan Pemerintah</td>
                                <td><?php echo $baris -> lalusawah; ?></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> mudasawah; ?></td>
                                <td><?php echo $baris -> ternaksawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td><?php echo $baris -> pusosawah; ?></td>
                                <td><?php echo $baris -> laporansawah; ?></td>
                                <td><?php echo $baris -> lalubukan; ?></td>
                                <td><?php echo $baris -> panenbukan; ?></td>
                                <td><?php echo $baris -> mudabukan; ?></td>
                                <td><?php echo $baris -> ternakbukan; ?></td>
                                <td><?php echo $baris -> tanambukan; ?></td>
                                <td><?php echo $baris -> pusobukan; ?></td>
                                <td><?php echo $baris -> laporanbukan; ?></td>
                                <td><?php echo $baris -> produksi; ?></td>
						        <?php } ?>
                            </tr>

                            <tr>
                                <?php
                                    foreach($kedelainon as $baris){
                                ?>
                                <td></td>
                                <td  class="text-left">b. Non Bantuan Pemerintah</td>
                                <td><?php echo $baris -> lalusawah; ?></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> mudasawah; ?></td>
                                <td><?php echo $baris -> ternaksawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td><?php echo $baris -> pusosawah; ?></td>
                                <td><?php echo $baris -> laporansawah; ?></td>
                                <td><?php echo $baris -> lalubukan; ?></td>
                                <td><?php echo $baris -> panenbukan; ?></td>
                                <td><?php echo $baris -> mudabukan; ?></td>
                                <td><?php echo $baris -> ternakbukan; ?></td>
                                <td><?php echo $baris -> tanambukan; ?></td>
                                <td><?php echo $baris -> pusobukan; ?></td>
                                <td><?php echo $baris -> laporanbukan; ?></td>
                                <td><?php echo $baris -> produksi; ?></td>
						        <?php } ?>
                            </tr>

                            <tr>
                                <?php
                                    foreach($kacangtanah as $baris){
                                ?>
                                <td>3.</td>
                                <td  class="text-left">KACANG TANAH</td>
                                <td><?php echo $baris -> lalusawah; ?></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> mudasawah; ?></td>
                                <td><?php echo $baris -> ternaksawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td><?php echo $baris -> pusosawah; ?></td>
                                <td><?php echo $baris -> laporansawah; ?></td>
                                <td><?php echo $baris -> lalubukan; ?></td>
                                <td><?php echo $baris -> panenbukan; ?></td>
                                <td><?php echo $baris -> mudabukan; ?></td>
                                <td><?php echo $baris -> ternakbukan; ?></td>
                                <td><?php echo $baris -> tanambukan; ?></td>
                                <td><?php echo $baris -> pusobukan; ?></td>
                                <td><?php echo $baris -> laporanbukan; ?></td>
                                <td><?php echo $baris -> produksi; ?></td>
						        <?php } ?>
                            </tr>

                            <tr>
                                <?php
                                    foreach($jumlahsingkong as $baris){
                                ?>
                                <td>4.</td>
                                <td  class="text-left">JUMLAH UBI KAYU/SINGKONG</td>
                                <td><?php echo $baris -> lalusawah; ?></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> mudasawah; ?></td>
                                <td><?php echo $baris -> ternaksawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td><?php echo $baris -> pusosawah; ?></td>
                                <td><?php echo $baris -> laporansawah; ?></td>
                                <td><?php echo $baris -> lalubukan; ?></td>
                                <td><?php echo $baris -> panenbukan; ?></td>
                                <td><?php echo $baris -> mudabukan; ?></td>
                                <td><?php echo $baris -> ternakbukan; ?></td>
                                <td><?php echo $baris -> tanambukan; ?></td>
                                <td><?php echo $baris -> pusobukan; ?></td>
                                <td><?php echo $baris -> laporanbukan; ?></td>
                                <td><?php echo $baris -> produksi; ?></td>
						        <?php } ?>
                            </tr>

                            <tr>
                                <?php
                                    foreach($singkongbantuan as $baris){
                                ?>
                                <td></td>
                                <td  class="text-left">a. Bantuan Pemerintah</td>
                                <td><?php echo $baris -> lalusawah; ?></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> mudasawah; ?></td>
                                <td><?php echo $baris -> ternaksawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td><?php echo $baris -> pusosawah; ?></td>
                                <td><?php echo $baris -> laporansawah; ?></td>
                                <td><?php echo $baris -> lalubukan; ?></td>
                                <td><?php echo $baris -> panenbukan; ?></td>
                                <td><?php echo $baris -> mudabukan; ?></td>
                                <td><?php echo $baris -> ternakbukan; ?></td>
                                <td><?php echo $baris -> tanambukan; ?></td>
                                <td><?php echo $baris -> pusobukan; ?></td>
                                <td><?php echo $baris -> laporanbukan; ?></td>
                                <td><?php echo $baris -> produksi; ?></td>
						        <?php } ?>
                            </tr>

                            <tr>
                                <?php
                                    foreach($singkongnon as $baris){
                                ?>
                                <td></td>
                                <td  class="text-left">b. Non Bantuan Pemerintah</td>
                                <td><?php echo $baris -> lalusawah; ?></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> mudasawah; ?></td>
                                <td><?php echo $baris -> ternaksawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td><?php echo $baris -> pusosawah; ?></td>
                                <td><?php echo $baris -> laporansawah; ?></td>
                                <td><?php echo $baris -> lalubukan; ?></td>
                                <td><?php echo $baris -> panenbukan; ?></td>
                                <td><?php echo $baris -> mudabukan; ?></td>
                                <td><?php echo $baris -> ternakbukan; ?></td>
                                <td><?php echo $baris -> tanambukan; ?></td>
                                <td><?php echo $baris -> pusobukan; ?></td>
                                <td><?php echo $baris -> laporanbukan; ?></td>
                                <td><?php echo $baris -> produksi; ?></td>
						        <?php } ?>
                            </tr>

                            <tr>
                                <?php
                                    foreach($ubijalar as $baris){
                                ?>
                                <td>5.</td>
                                <td  class="text-left">UBI JALAR/KETELA RAMBAT</td>
                                <td><?php echo $baris -> lalusawah; ?></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> mudasawah; ?></td>
                                <td><?php echo $baris -> ternaksawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td><?php echo $baris -> pusosawah; ?></td>
                                <td><?php echo $baris -> laporansawah; ?></td>
                                <td><?php echo $baris -> lalubukan; ?></td>
                                <td><?php echo $baris -> panenbukan; ?></td>
                                <td><?php echo $baris -> mudabukan; ?></td>
                                <td><?php echo $baris -> ternakbukan; ?></td>
                                <td><?php echo $baris -> tanambukan; ?></td>
                                <td><?php echo $baris -> pusobukan; ?></td>
                                <td><?php echo $baris -> laporanbukan; ?></td>
                                <td><?php echo $baris -> produksi; ?></td>
						        <?php } ?>
                            </tr>

                            <tr>
                                <?php
                                    foreach($kacanghijau as $baris){
                                ?>
                                <td>6.</td>
                                <td  class="text-left">KACANG HIJAU</td>
                                <td><?php echo $baris -> lalusawah; ?></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> mudasawah; ?></td>
                                <td><?php echo $baris -> ternaksawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td><?php echo $baris -> pusosawah; ?></td>
                                <td><?php echo $baris -> laporansawah; ?></td>
                                <td><?php echo $baris -> lalubukan; ?></td>
                                <td><?php echo $baris -> panenbukan; ?></td>
                                <td><?php echo $baris -> mudabukan; ?></td>
                                <td><?php echo $baris -> ternakbukan; ?></td>
                                <td><?php echo $baris -> tanambukan; ?></td>
                                <td><?php echo $baris -> pusobukan; ?></td>
                                <td><?php echo $baris -> laporanbukan; ?></td>
                                <td><?php echo $baris -> produksi; ?></td>
						        <?php } ?>
                            </tr>

                            <tr>
                                <?php
                                    foreach($sorgum as $baris){
                                ?>
                                <td>7.</td>
                                <td  class="text-left">SORGUM/CANTEL</td>
                                <td><?php echo $baris -> lalusawah; ?></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> mudasawah; ?></td>
                                <td><?php echo $baris -> ternaksawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td><?php echo $baris -> pusosawah; ?></td>
                                <td><?php echo $baris -> laporansawah; ?></td>
                                <td><?php echo $baris -> lalubukan; ?></td>
                                <td><?php echo $baris -> panenbukan; ?></td>
                                <td><?php echo $baris -> mudabukan; ?></td>
                                <td><?php echo $baris -> ternakbukan; ?></td>
                                <td><?php echo $baris -> tanambukan; ?></td>
                                <td><?php echo $baris -> pusobukan; ?></td>
                                <td><?php echo $baris -> laporanbukan; ?></td>
                                <td><?php echo $baris -> produksi; ?></td>
						        <?php } ?>
                            </tr>

                            <tr>
                                <?php
                                    foreach($gandum as $baris){
                                ?>
                                <td>8.</td>
                                <td  class="text-left"> GANDUM</td>
                                <td><?php echo $baris -> lalusawah; ?></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> mudasawah; ?></td>
                                <td><?php echo $baris -> ternaksawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td><?php echo $baris -> pusosawah; ?></td>
                                <td><?php echo $baris -> laporansawah; ?></td>
                                <td><?php echo $baris -> lalubukan; ?></td>
                                <td><?php echo $baris -> panenbukan; ?></td>
                                <td><?php echo $baris -> mudabukan; ?></td>
                                <td><?php echo $baris -> ternakbukan; ?></td>
                                <td><?php echo $baris -> tanambukan; ?></td>
                                <td><?php echo $baris -> pusobukan; ?></td>
                                <td><?php echo $baris -> laporanbukan; ?></td>
                                <td><?php echo $baris -> produksi; ?></td>
						        <?php } ?>
                            </tr>

                            <tr>
                                <?php
                                    foreach($talas as $baris){
                                ?>
                                <td>9.</td>
                                <td  class="text-left">TALAS</td>
                                <td><?php echo $baris -> lalusawah; ?></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> mudasawah; ?></td>
                                <td><?php echo $baris -> ternaksawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td><?php echo $baris -> pusosawah; ?></td>
                                <td><?php echo $baris -> laporansawah; ?></td>
                                <td><?php echo $baris -> lalubukan; ?></td>
                                <td><?php echo $baris -> panenbukan; ?></td>
                                <td><?php echo $baris -> mudabukan; ?></td>
                                <td><?php echo $baris -> ternakbukan; ?></td>
                                <td><?php echo $baris -> tanambukan; ?></td>
                                <td><?php echo $baris -> pusobukan; ?></td>
                                <td><?php echo $baris -> laporanbukan; ?></td>
                                <td><?php echo $baris -> produksi; ?></td>
						        <?php } ?>
                            </tr>

                            <tr>
                                <?php
                                    foreach($ganyong as $baris){
                                ?>
                                <td>10.</td>
                                <td  class="text-left">GANYONG</td>
                                <td><?php echo $baris -> lalusawah; ?></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> mudasawah; ?></td>
                                <td><?php echo $baris -> ternaksawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td><?php echo $baris -> pusosawah; ?></td>
                                <td><?php echo $baris -> laporansawah; ?></td>
                                <td><?php echo $baris -> lalubukan; ?></td>
                                <td><?php echo $baris -> panenbukan; ?></td>
                                <td><?php echo $baris -> mudabukan; ?></td>
                                <td><?php echo $baris -> ternakbukan; ?></td>
                                <td><?php echo $baris -> tanambukan; ?></td>
                                <td><?php echo $baris -> pusobukan; ?></td>
                                <td><?php echo $baris -> laporanbukan; ?></td>
                                <td><?php echo $baris -> produksi; ?></td>
						        <?php } ?>
                            </tr>

                            <tr>
                                <?php
                                    foreach($umbilain as $baris){
                                ?>
                                <td>11.</td>
                                <td  class="text-left">UMBI LAINNYA</td>
                                <td><?php echo $baris -> lalusawah; ?></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> mudasawah; ?></td>
                                <td><?php echo $baris -> ternaksawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td><?php echo $baris -> pusosawah; ?></td>
                                <td><?php echo $baris -> laporansawah; ?></td>
                                <td><?php echo $baris -> lalubukan; ?></td>
                                <td><?php echo $baris -> panenbukan; ?></td>
                                <td><?php echo $baris -> mudabukan; ?></td>
                                <td><?php echo $baris -> ternakbukan; ?></td>
                                <td><?php echo $baris -> tanambukan; ?></td>
                                <td><?php echo $baris -> pusobukan; ?></td>
                                <td><?php echo $baris -> laporanbukan; ?></td>
                                <td><?php echo $baris -> produksi; ?></td>
						        <?php } ?>
                            </tr>
                        </tbody>
		            </table>
                    <div class="col-sm-12">
                        <div class="px-3">    
                            <div class="row">
                                <div class="col-12">
                                    <div class="row justify-content-end">
                                        <div class="col-auto">
                                            <h6 class="text-primary"></h6>
                                            <table class="" id="dataTabe" width="100%" cellspacing="0">
                                                <tbody>
                                                    <?php
                                                        foreach($petugas as $baris){
                                                    ?>
                                                    <tr>
                                                        <td>Kecamatan <?php echo $baris -> kecamatan; ?>, </td>
                                                        <td><?php echo $baris -> kabkota; ?>, </td>
                                                        <td><?php echo $baris -> provinsi; ?>, </td>
                                                        <td><?php echo $baris -> tgl_laporan; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <td width="40%">Petugas Pengumpul data </td>
                                                        <td width="2%"></td>
                                                        <td>:</td>
                                                    </tr>
                                                </thead>
                                            </table>
                                            <table class="" id="dataTabe" width="100%" cellspacing="0">
                                                <tbody>
                                                    <tr>
                                                        <td width="30%">Nama Lengkap</td>
                                                        <td>:</td>
                                                        <td><?php echo $baris -> nama_admin; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>jabatan</td>
                                                        <td>:</td>
                                                        <td><?php echo $baris -> jabatan; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>NIP</td>
                                                        <td>:</td>
                                                        <td><?php echo $baris -> nip; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>No.Telp/HP</td>
                                                        <td>:</td>
                                                        <td><?php echo $baris -> telp; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td height="120px">Tanda Tangan</td>
                                                        <td>:</td>
                                                        <td></td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>
</form>