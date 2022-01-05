<?php
$getId = $this->session->userdata('session_id');
$getProvinsi = $this->session->userdata('session_provinsi');
$getKabkota = $this->session->userdata('session_kabkota');
$getKecamatan = $this->session->userdata('session_kecamatan');
$getNama = $this->session->userdata('session_nama');
$getUser = $this->session->userdata('session_user');
?>
<div class="row">
<?php
    foreach($petugas as $baris){
?>
    <!-- judul data -->
    <div class="col-sm-12"> 
	    <div class="mb-3"> 
	        <div class="text-center"> 
	            <h2 class="text-primary">LAPORAN LUAS TANAMAN PADI</h2>
                <h6 class="text-primary">(Isian dalam hektar bilangan desimal satu angka dibelakang koma)</h6>
	        </div>
        </div>
    </div>
    <!-- kondisi data -->
    <div class="col-sm-12">
        <div class="px-3">    
            <div class="row">
                <div class="col-8">
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
                <div class="col-4">
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
                <div class="col-8">
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
                <div class="col-4">
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
                <div class="col-8">
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
                <div class="col-4">
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
	<div class="col-sm-12"> 
	    <div class="p-0"> 
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table-bordered text-center" id="dataTabe" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th rowspan="2" width="2%">No</th>
                                <th rowspan="2" width="20%">Uraian</th>
                                <th colspan="5">Lahan Sawah</th>
                                <th colspan="5">Lahan Bukan Sawah</th>
                            </tr>
                            <tr>
                                <th width="9%">Tanaman Akhir Bulan Yang Lalu</th>
                                <th width="7%">Panen</th>
                                <th width="7%">Tanam</th>
                                <th width="7%">Puso/Rusak</th>
                                <th width="9%">Tanaman Akhir Bulan Laporan</th>
                                <th width="9%">Tanaman Akhir Bulan Yang Lalu</th>
                                <th width="7%">Panen</th>
                                <th width="7%">Tanam</th>
                                <th width="7%">Puso/Rusak</th>
                                <th width="9%">Tanaman Akhir Bulan Laporan</th>
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
                            </tr>
                            <!--jumlah padi-->
                            <tr>
                                <?php
                                    foreach($jumlahpadi as $baris){
                                ?>
                                <td></td>
                                <td class="text-left">JUMLAH PADI(1a+1b)</td>
                                <td><?php echo $baris -> lalusawah; ?></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td><?php echo $baris -> pusosawah; ?></td>
                                <td><?php echo $baris -> laporansawah; ?></td>
                                <td><?php echo $baris -> lalubukan; ?></td>
                                <td><?php echo $baris -> panenbukan; ?></td>
                                <td><?php echo $baris -> tanambukan; ?></td>
                                <td><?php echo $baris -> pusobukan; ?></td>
                                <td><?php echo $baris -> laporanbukan; ?></td>
						        <?php } ?>
                            </tr>
                            <!--jenis padi-->
                            <tr>
                                <td>1</td>
                                <td class="text-left">Jenis Padi</td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                            </tr>
                            <!--hibrida-->
                            <tr>
                                <?php
                                    foreach($padihibrida as $baris){
                                ?>
                                <td></td>
                                <td class="text-left">a.Hibrida</td>
                                <td><?php echo $baris -> lalusawah; ?></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td><?php echo $baris -> pusosawah; ?></td>
                                <td><?php echo $baris -> laporansawah; ?></td>
                                <td><?php echo $baris -> lalubukan; ?></td>
                                <td><?php echo $baris -> panenbukan; ?></td>
                                <td><?php echo $baris -> tanambukan; ?></td>
                                <td><?php echo $baris -> pusobukan; ?></td>
                                <td><?php echo $baris -> laporanbukan; ?></td>
						        <?php } ?>
                            </tr>
                            <!-- hibrida bantuan pemerintah -->
                            <tr>
                                <?php
                                    foreach($padihibridabantuan as $baris){
                                ?>
                                <td></td>
                                <td class="text-left">1). Bantuan Pemerintah</td>
                                <td><?php echo $baris -> lalusawah; ?></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td><?php echo $baris -> pusosawah; ?></td>
                                <td><?php echo $baris -> laporansawah; ?></td>
                                <td><?php echo $baris -> lalubukan; ?></td>
                                <td><?php echo $baris -> panenbukan; ?></td>
                                <td><?php echo $baris -> tanambukan; ?></td>
                                <td><?php echo $baris -> pusobukan; ?></td>
                                <td><?php echo $baris -> laporanbukan; ?></td>
						        <?php } ?>
                            </tr>
                            <!-- hibrida non bantuan pemerintah -->
                            <tr>
                                <?php
                                    foreach($padihibridanon as $baris){
                                ?>
                                <td></td>
                                <td class="text-left">2).Non Bantuan Pemerintah</td>
                                <td><?php echo $baris -> lalusawah; ?></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td><?php echo $baris -> pusosawah; ?></td>
                                <td><?php echo $baris -> laporansawah; ?></td>
                                <td><?php echo $baris -> lalubukan; ?></td>
                                <td><?php echo $baris -> panenbukan; ?></td>
                                <td><?php echo $baris -> tanambukan; ?></td>
                                <td><?php echo $baris -> pusobukan; ?></td>
                                <td><?php echo $baris -> laporanbukan; ?></td>
						        <?php } ?>
                            </tr>
                            <!--inbridia-->
                            <tr>
                                <?php
                                    foreach($padiinbrida as $baris){
                                ?>
                                <td></td>
                                <td class="text-left">b. Inbrida</td>
                                <td><?php echo $baris -> lalusawah; ?></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td><?php echo $baris -> pusosawah; ?></td>
                                <td><?php echo $baris -> laporansawah; ?></td>
                                <td><?php echo $baris -> lalubukan; ?></td>
                                <td><?php echo $baris -> panenbukan; ?></td>
                                <td><?php echo $baris -> tanambukan; ?></td>
                                <td><?php echo $baris -> pusobukan; ?></td>
                                <td><?php echo $baris -> laporanbukan; ?></td>
						        <?php } ?>
                            </tr>
                            <!-- inbrida bantuan pemerintah -->
                            <tr>
                                <?php
                                    foreach($padiinbridabantuan as $baris){
                                ?>
                                <td></td>
                                <td class="text-left">1).Bantuan Pemerintah</td>
                                <td><?php echo $baris -> lalusawah; ?></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td><?php echo $baris -> pusosawah; ?></td>
                                <td><?php echo $baris -> laporansawah; ?></td>
                                <td><?php echo $baris -> lalubukan; ?></td>
                                <td><?php echo $baris -> panenbukan; ?></td>
                                <td><?php echo $baris -> tanambukan; ?></td>
                                <td><?php echo $baris -> pusobukan; ?></td>
                                <td><?php echo $baris -> laporanbukan; ?></td>
						        <?php } ?>
                            </tr>
                            <!-- inbrida non bantuan pemerintah -->
                            <tr>
                                <?php
                                    foreach($padiinbridanon as $baris){
                                ?>
                                <td></td>
                                <td class="text-left">2).Non Bantuan Pemerintah</td>
                                <td><?php echo $baris -> lalusawah; ?></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td><?php echo $baris -> pusosawah; ?></td>
                                <td><?php echo $baris -> laporansawah; ?></td>
                                <td><?php echo $baris -> lalubukan; ?></td>
                                <td><?php echo $baris -> panenbukan; ?></td>
                                <td><?php echo $baris -> tanambukan; ?></td>
                                <td><?php echo $baris -> pusobukan; ?></td>
                                <td><?php echo $baris -> laporanbukan; ?></td>
						        <?php } ?>
                            </tr>
                            <!-- jenis pengairan -->
                            <tr>
                                <td>2</td>
                                <td class="text-left">Jenis Pengairan</td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                            </tr>
                            <!-- sawah irigasi -->
                            <tr>
                                <?php
                                    foreach($sawahirigasi as $baris){
                                ?>
                                <td></td>
                                <td class="text-left">a. Sawah Irigasi</td>
                                <td><?php echo $baris -> lalusawah; ?></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td><?php echo $baris -> pusosawah; ?></td>
                                <td><?php echo $baris -> laporansawah; ?></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
						        <?php } ?>
                            </tr>
                            <!-- sawah tadah hujan -->
                            <tr>
                                <?php
                                    foreach($sawahtadahhujan as $baris){
                                ?>
                                <td></td>
                                <td class="text-left">b. Sawah Tadah Hujan</td>
                                <td><?php echo $baris -> lalusawah; ?></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td><?php echo $baris -> pusosawah; ?></td>
                                <td><?php echo $baris -> laporansawah; ?></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
						        <?php } ?>
                            </tr>
                            <!-- sawah rawa pasang surut -->
                            <tr>
                                <?php
                                    foreach($sawahrawapasangsurut as $baris){
                                ?>
                                <td></td>
                                <td class="text-left">c. Sawah Rawa Pasang Surut</td>
                                <td><?php echo $baris -> lalusawah; ?></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td><?php echo $baris -> pusosawah; ?></td>
                                <td><?php echo $baris -> laporansawah; ?></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
						        <?php } ?>
                            </tr>
                            <!-- sawah rawa lebak -->
                            <tr>
                                <?php
                                    foreach($sawahrawalebak as $baris){
                                ?>
                                <td></td>
                                <td class="text-left">d. Sawah Rawa Lebak</td>
                                <td><?php echo $baris -> lalusawah; ?></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td><?php echo $baris -> pusosawah; ?></td>
                                <td><?php echo $baris -> laporansawah; ?></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
						        <?php } ?>
                            </tr>
                            <!-- rehab jaringan irigasi tersier -->
                            <tr>
                                <?php
                                    foreach($rehabjaringan as $baris){
                                ?>
                                <td>3</td>
                                <td class="text-left">Rehab Jaringan Irigasi Tersier</td>
                                <td class="table-dark"></td>
                                <td><?php echo $baris -> panensawah; ?></td>
                                <td><?php echo $baris -> tanamsawah; ?></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
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