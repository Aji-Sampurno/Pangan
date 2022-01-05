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

<?php echo form_open_multipart ('Admin/tambah_padi');?>
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
                    <h2 class="text-primary">LAPORAN LUAS TANAMAN PADI</h2>
                    <h6 class="text-primary">(Isian dalam hektar bilangan desimal satu angka dibelakang koma)</h6>
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
                            <div class="col-lg-4 col-sm-auto">
                                <input type="text" class="form-control" name="provinsi" value="<?php echo $getProvinsi; ?>">  
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row justify-content-end">
                            <div class="col-auto mr-3">
                                <h6 class="p-2 text-primary">BULAN</h6>
                            </div>
                            <div class="col-lg-4 col-sm-auto">
                                <select class="form-control w-100" name="bulan">
                                    <option selected>
                                        <?php
                                            if (empty($bulan)) {echo 'Pilih Bulan';} 
                                            else {echo $bulan;}
                                        ?> 
                                    </option>
                                    <option value="Januari">Januari</option>
                                    <option value="Februari">Februari</option>
                                    <option value="Maret" >Maret</option>
                                    <option value="April" >April</option>
                                    <option value="Mei" >Mei</option>
                                    <option value="Juni" >Juni</option>
                                    <option value="Juli" >Juli</option>
                                    <option value="Agustus" >Agustus</option>
                                    <option value="September" >September</option>
                                    <option value="Oktober" >Oktober</option>
                                    <option value="November" >November</option>
                                    <option value="Desember" >Desember</option>
                                </select>
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
                            <div class="col-lg-4 col-sm-auto">
                                <input type="text" class="form-control" name="kabkota" value="<?php echo $getKabkota; ?>"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row justify-content-end">
                            <div class="col-auto mr-3">
                                <h6 class="p-2 text-primary">TAHUN</h6>
                            </div>
                            <div class="col-lg-4 col-sm-auto">
                                <input type="number" class="form-control" name="tahun">
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
                            <div class="col-lg-4 col-sm-auto">
                                <input type="text" class="form-control" name="kecamatan" value="<?php echo $getKecamatan; ?>"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row justify-content-end">
                            <div class="col-auto mr-3">
                            </div>
                            <div class="col-lg-4 col-sm-auto">
                                <button type="submit" class="btn btn-success btn-icon-split">
                                    <span class="text">Tambah Laporan</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
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
                                <!--jumlah padi fixed-->
                                <tr>
                                    <td></td>
                                    <td class="text-left">JUMLAH PADI(1a+1b)</td>
                                    <td>
                                        <input type="number" class="form-control" id="lalutotal1" name="lalutotal1" value="0" readonly>  
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="panentotal1" name="panentotal1" value="0" readonly> 
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="tanamtotal1" name="tanamtotal1" value="0" readonly>   
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="pusototal1" name="pusototal1" value="0" readonly>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="laporantotal1" name="laporantotal1" value="0" readonly>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="lalutotal2" name="lalutotal2" value="0" readonly> 
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="panentotal2" name="panentotal2" value="0" readonly> 
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="tanamtotal2" name="tanamtotal2" value="0" readonly>   
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="pusototal2" name="pusototal2" value="0" readonly>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="laporantotal2" name="laporantotal2" value="0" readonly>
                                    </td>
                                </tr>
                                <!--jenis padi fixed-->
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
                                <!--hibrida fixed-->
                                <tr>
                                    <td></td>
                                    <td class="text-left">a.Hibrida</td>
                                    <td>
                                        <input type="number" class="form-control" id="laluhibrida1"     name="laluhibrida1"     value="0" readonly>  
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="panenhibrida1"    name="panenhibrida1"    value="0" readonly> 
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="tanamhibrida1"    name="tanamhibrida1"    value="0" readonly>   
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="pusohibrida1"     name="pusohibrida1"     value="0" readonly>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="laporanhibrida1"  name="laporanhibrida1"  value="0" readonly>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="laluhibrida2"     name="laluhibrida2"     value="0" readonly> 
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="panenhibrida2"    name="panenhibrida2"    value="0" readonly> 
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="tanamhibrida2"    name="tanamhibrida2"    value="0" readonly>   
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="pusohibrida2"     name="pusohibrida2"     value="0" readonly>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="laporanhibrida2" name="laporanhibrida2" value="0" readonly>
                                    </td>
                                </tr>
                                <!-- hibrida bantuan pemerintah fixed-->
                                <tr>
                                    <td></td>
                                    <td class="text-left">1). Bantuan Pemerintah</td>
                                    <td>
                                        <input type="number" class="form-control" id="lalu1"    name="lalu1"    value="0"   onchange="lalutotalsawah(),laporantotalsawah()">  
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="panen1"   name="panen1"   value="0"   onchange="panentotalsawah(),laporantotalsawah()"> 
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="tanam1"   name="tanam1"   value="0"   onchange="tanamtotalsawah(),laporantotalsawah()">   
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="puso1"    name="puso1"    value="0"   onchange="pusototalsawah(),laporantotalsawah()">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="laporan1" name="laporan1" value="0"   readonly>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="lalu2"    name="lalu2"    value="0"   onchange="lalutotalbukan(),laporantotalbukan()"> 
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="panen2"   name="panen2"   value="0"   onchange="panentotalbukan(),laporantotalbukan()"> 
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="tanam2"   name="tanam2"   value="0"   onchange="tanamtotalbukan(),laporantotalbukan()">   
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="puso2"    name="puso2"    value="0"   onchange="pusototalbukan(),laporantotalbukan()">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="laporan2" name="laporan2" value="0"   readonly>
                                    </td>
                                </tr>
                                <!-- hibrida non bantuan pemerintah fixed-->
                                <tr>
                                    <td></td>
                                    <td class="text-left">2).Non Bantuan Pemerintah</td>
                                    <td>
                                        <input type="number" class="form-control" id="lalu3"    name="lalu3"    value="0" onchange="lalutotalsawah(),laporantotalsawah()">  
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="panen3"   name="panen3"   value="0" onchange="panentotalsawah(),laporantotalsawah()"> 
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="tanam3"   name="tanam3"   value="0" onchange="tanamtotalsawah(),laporantotalsawah()">   
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="puso3"    name="puso3"    value="0" onchange="pusototalsawah(),laporantotalsawah()">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="laporan3" name="laporan3" value="0" readonly>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="lalu4"    name="lalu4"    value="0" onchange="lalutotalbukan(),laporantotalbukan()"> 
                                    </td>
                                    <td>
                                        <input type="number" class="form-control"id="panen4"    name="panen4"   value="0" onchange="panentotalbukan(),laporantotalbukan()"> 
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="tanam4"   name="tanam4"   value="0" onchange="tanamtotalbukan(),laporantotalbukan()">   
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="puso4"    name="puso4"    value="0" onchange="pusototalbukan(),laporantotalbukan()">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="laporan4" name="laporan4" value="0" readonly>
                                    </td>
                                </tr>
                                <!--inbridia fixed-->
                                <tr>
                                    <td></td>
                                    <td class="text-left">b. Inbrida</td>
                                    <td>
                                        <input type="number" class="form-control" id="laluinbrida1"     name="laluinbrida1" value="0" readonly>  
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="paneninbrida1"    name="paneninbrida1" value="0" readonly> 
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="tanaminbrida1"    name="tanaminbrida1" value="0" readonly>   
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="pusoinbrida1"     name="pusoinbrida1" value="0" readonly>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="laporaninbrida1"  name="laporaninbrida1" value="0" readonly>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="laluinbrida2"     name="laluinbrida2" value="0" readonly> 
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="paneninbrida2"    name="paneninbrida2" value="0" readonly> 
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="tanaminbrida2"    name="tanaminbrida2" value="0" readonly>   
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="pusoinbrida2"     name="pusoinbrida2" value="0" readonly>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="laporaninbrida2"  name="laporaninbrida2" value="0" readonly>
                                    </td>
                                </tr>
                                <!-- inbrida bantuan pemerintah fixed-->
                                <tr>
                                    <td></td>
                                    <td class="text-left">1).Bantuan Pemerintah</td>
                                    <td>
                                        <input type="number" class="form-control" id="lalu5"    name="lalu5"    value="0" onchange="lalutotalsawah(),laporantotalsawah()">  
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="panen5"   name="panen5"   value="0" onchange="panentotalsawah(),laporantotalsawah()"> 
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="tanam5"   name="tanam5"   value="0" onchange="tanamtotalsawah(),laporantotalsawah()">   
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="puso5"    name="puso5"    value="0" onchange="pusototalsawah(),laporantotalsawah()">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="laporan5" name="laporan5" value="0" readonly>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="lalu6"    name="lalu6"    value="0" onchange="lalutotalbukan(),laporantotalbukan()"> 
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="panen6"   name="panen6"   value="0" onchange="panentotalbukan(),laporantotalbukan()"> 
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="tanam6"   name="tanam6"   value="0" onchange="tanamtotalbukan(),laporantotalbukan()">   
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="puso6"    name="puso6"    value="0" onchange="pusototalbukan(),laporantotalbukan()">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="laporan6" name="laporan6" value="0" readonly>
                                    </td>
                                </tr>
                                <!-- inbrida non bantuan pemerintah fixed-->
                                <tr>
                                    <td></td>
                                    <td class="text-left">2).Non Bantuan Pemerintah</td>
                                    <td>
                                        <input type="number" class="form-control" id="lalu7"    name="lalu7"    value="0" onchange="lalutotalsawah(),laporantotalsawah()">  
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="panen7"   name="panen7"   value="0" onchange="panentotalsawah(),laporantotalsawah()"> 
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="tanam7"   name="tanam7"   value="0" onchange="tanamtotalsawah(),laporantotalsawah()">   
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="puso7"    name="puso7"    value="0" onchange="pusototalsawah(),laporantotalsawah()">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="laporan7" name="laporan7" value="0" readonly>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="lalu8"    name="lalu8"    value="0" onchange="lalutotalbukan(),laporantotalbukan()"> 
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="panen8"   name="panen8"   value="0" onchange="panentotalbukan(),laporantotalbukan()"> 
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="tanam8"   name="tanam8"   value="0" onchange="tanamtotalbukan(),laporantotalbukan()">   
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="puso8"    name="puso8"    value="0" onchange="pusototalbukan(),laporantotalbukan()">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="laporan8" name="laporan8" value="0" readonly>
                                    </td>
                                </tr>
                                <!-- jenis pengairan fixed-->
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
                                <!-- sawah irigasi fixed-->
                                <tr>
                                    <td></td>
                                    <td class="text-left">a. Sawah Irigasi</td>
                                    <td>
                                        <input type="number" class="form-control" id="lalu9" name="lalu9" value="0" onchange="laporanirigasi()">  
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="panen9" name="panen9" value="0" onchange="laporanirigasi()"> 
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="tanam9" name="tanam9" value="0" onchange="laporanirigasi()">   
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="puso9" name="puso9" value="0" onchange="laporanirigasi()">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="laporan9" name="laporan9" value="0" readonly>
                                    </td>
                                    <td class="table-dark"></td>
                                    <td class="table-dark"></td>
                                    <td class="table-dark"></td>
                                    <td class="table-dark"></td>
                                    <td class="table-dark"></td>
                                </tr>
                                <!-- sawah tadah hujan fixed-->
                                <tr>
                                    <td></td>
                                    <td class="text-left">b. Sawah Tadah Hujan</td>
                                    <td>
                                        <input type="number" class="form-control" id="lalu10" name="lalu10" value="0" onchange="laporantadah()">  
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="panen10" name="panen10" value="0" onchange="laporantadah()"> 
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="tanam10" name="tanam10" value="0" onchange="laporantadah()">   
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="puso10" name="puso10" value="0" onchange="laporantadah()">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="laporan10" name="laporan10" value="0" readonly>
                                    </td>
                                    <td class="table-dark"></td>
                                    <td class="table-dark"></td>
                                    <td class="table-dark"></td>
                                    <td class="table-dark"></td>
                                    <td class="table-dark"></td>
                                </tr>
                                <!-- sawah rawa pasang surut fixed-->
                                <tr>
                                    <td></td>
                                    <td class="text-left">c. Sawah Rawa Pasang Surut</td>
                                    <td>
                                        <input type="number" class="form-control" id="lalu11" name="lalu11" value="0" onchange="laporanpasang()">  
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="panen11" name="panen11" value="0" onchange="laporanpasang()"> 
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="tanam11" name="tanam11" value="0" onchange="laporanpasang()">   
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="puso11" name="puso11" value="0" onchange="laporanpasang()">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="laporan11" name="laporan11" value="0" readonly>
                                    </td>
                                    <td class="table-dark"></td>
                                    <td class="table-dark"></td>
                                    <td class="table-dark"></td>
                                    <td class="table-dark"></td>
                                    <td class="table-dark"></td>
                                </tr>
                                <!-- sawah rawa lebak fixed-->
                                <tr>
                                    <td></td>
                                    <td class="text-left">d. Sawah Rawa Lebak</td>
                                    <td>
                                        <input type="number" class="form-control" id="lalu12" name="lalu12" value="0" onchange="laporanrawa()">  
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="panen12" name="panen12" value="0" onchange="laporanrawa()"> 
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="tanam12" name="tanam12" value="0" onchange="laporanrawa()">   
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="puso12" name="puso12" value="0" onchange="laporanrawa()">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="laporan12" name="laporan12" value="0" readonly>
                                    </td>
                                    <td class="table-dark"></td>
                                    <td class="table-dark"></td>
                                    <td class="table-dark"></td>
                                    <td class="table-dark"></td>
                                    <td class="table-dark"></td>
                                </tr>
                                <!-- rehab jaringan irigasi tersier fixed-->
                                <tr>
                                    <td>3</td>
                                    <td class="text-left">Rehab Jaringan Irigasi Tersier</td>
                                    <td class="table-dark"></td>
                                    <td>
                                        <input type="number" class="form-control" id="panen13" name="panen13" value="0"> 
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="tanam13" name="tanam13" value="0">   
                                    </td>
                                    <td class="table-dark"></td>
                                    <td class="table-dark"></td>
                                    <td class="table-dark"></td>
                                    <td class="table-dark"></td>
                                    <td class="table-dark"></td>
                                    <td class="table-dark"></td>
                                    <td class="table-dark"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</form>
<script type="text/javascript">
    function lalutotalsawah() {
        var jumlah_1        = document.getElementById('lalu1').value - 0;
        var jumlah_2        = document.getElementById('lalu3').value - 0 ;
        var jumlah_3        = document.getElementById('lalu5').value - 0;
        var jumlah_4        = document.getElementById('lalu7').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2 + jumlah_3 + jumlah_4;
        var jumlah_hibrida    = jumlah_1 + jumlah_2;
        var jumlah_inbrida    = jumlah_3 + jumlah_4;
        document.getElementById('lalutotal1').value = jumlah_total;
        document.getElementById('laluhibrida1').value = jumlah_hibrida;
        document.getElementById('laluinbrida1').value = jumlah_inbrida;
    }
    function panentotalsawah() {
        var jumlah_1        = document.getElementById('panen1').value - 0;
        var jumlah_2        = document.getElementById('panen3').value - 0 ;
        var jumlah_3        = document.getElementById('panen5').value - 0;
        var jumlah_4        = document.getElementById('panen7').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2 + jumlah_3 + jumlah_4;
        var jumlah_hibrida    = jumlah_1 + jumlah_2;
        var jumlah_inbrida    = jumlah_3 + jumlah_4;
        document.getElementById('panentotal1').value = jumlah_total;
        document.getElementById('panenhibrida1').value = jumlah_hibrida;
        document.getElementById('paneninbrida1').value = jumlah_inbrida;
    }
    function tanamtotalsawah() {
        var jumlah_1        = document.getElementById('tanam1').value - 0;
        var jumlah_2        = document.getElementById('tanam3').value - 0 ;
        var jumlah_3        = document.getElementById('tanam5').value - 0;
        var jumlah_4        = document.getElementById('tanam7').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2 + jumlah_3 + jumlah_4;
        var jumlah_hibrida    = jumlah_1 + jumlah_2;
        var jumlah_inbrida    = jumlah_3 + jumlah_4;
        document.getElementById('tanamtotal1').value = jumlah_total;
        document.getElementById('tanamhibrida1').value = jumlah_hibrida;
        document.getElementById('tanaminbrida1').value = jumlah_inbrida;
    }
    function pusototalsawah() {
        var jumlah_1        = document.getElementById('puso1').value - 0;
        var jumlah_2        = document.getElementById('puso3').value - 0 ;
        var jumlah_3        = document.getElementById('puso5').value - 0;
        var jumlah_4        = document.getElementById('puso7').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2 + jumlah_3 + jumlah_4;
        var jumlah_hibrida    = jumlah_1 + jumlah_2;
        var jumlah_inbrida    = jumlah_3 + jumlah_4;
        document.getElementById('pusototal1').value = jumlah_total;
        document.getElementById('pusohibrida1').value = jumlah_hibrida;
        document.getElementById('pusoinbrida1').value = jumlah_inbrida;
    }
    function laporantotalsawah() {
        var jumlah_1        = document.getElementById('lalu1').value - 0;
        var jumlah_2        = document.getElementById('lalu3').value - 0 ;
        var jumlah_3        = document.getElementById('lalu5').value - 0;
        var jumlah_4        = document.getElementById('lalu7').value - 0 ;
        
        var jumlah_5        = document.getElementById('panen1').value - 0;
        var jumlah_6        = document.getElementById('panen3').value - 0 ;
        var jumlah_7        = document.getElementById('panen5').value - 0;
        var jumlah_8        = document.getElementById('panen7').value - 0 ;
        
        var jumlah_9        = document.getElementById('tanam1').value - 0;
        var jumlah_10        = document.getElementById('tanam3').value - 0 ;
        var jumlah_11        = document.getElementById('tanam5').value - 0;
        var jumlah_12        = document.getElementById('tanam7').value - 0 ;
        
        var jumlah_13        = document.getElementById('puso1').value - 0;
        var jumlah_14        = document.getElementById('puso3').value - 0 ;
        var jumlah_15        = document.getElementById('puso5').value - 0;
        var jumlah_16        = document.getElementById('puso7').value - 0 ;

        var jumlah_total        = (jumlah_1 - jumlah_5 + jumlah_9 - jumlah_13) + (jumlah_2 - jumlah_6 + jumlah_10 - jumlah_14) + (jumlah_3 - jumlah_7 + jumlah_11 - jumlah_15) + (jumlah_4 - jumlah_8 + jumlah_12 - jumlah_16);
        var jumlah_laporan_1    = jumlah_1 - jumlah_5 + jumlah_9 - jumlah_13;
        var jumlah_laporan_3    = jumlah_2 - jumlah_6 + jumlah_10 - jumlah_14;
        var jumlah_laporan_5    = jumlah_3 - jumlah_7 + jumlah_11 - jumlah_15;
        var jumlah_laporan_7    = jumlah_4 - jumlah_8 + jumlah_12 - jumlah_16;
        var jumlah_hibrida      = (jumlah_1 - jumlah_5 + jumlah_9 - jumlah_13) + (jumlah_2 - jumlah_6 + jumlah_10 - jumlah_14);
        var jumlah_inbrida      = (jumlah_3 - jumlah_7 + jumlah_11 - jumlah_15) + (jumlah_4 - jumlah_8 + jumlah_12 - jumlah_16);
        
        document.getElementById('laporan1').value        = jumlah_laporan_1;
        document.getElementById('laporan3').value        = jumlah_laporan_3;
        document.getElementById('laporan5').value        = jumlah_laporan_5;
        document.getElementById('laporan7').value        = jumlah_laporan_7;
        document.getElementById('laporanhibrida1').value = jumlah_hibrida;
        document.getElementById('laporaninbrida1').value = jumlah_inbrida;
        document.getElementById('laporantotal1').value   = jumlah_total;
    }
    function lalutotalbukan() {
        var jumlah_1        = document.getElementById('lalu2').value - 0;
        var jumlah_2        = document.getElementById('lalu4').value - 0 ;
        var jumlah_3        = document.getElementById('lalu6').value - 0;
        var jumlah_4        = document.getElementById('lalu8').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2 + jumlah_3 + jumlah_4;
        var jumlah_hibrida    = jumlah_1 + jumlah_2;
        var jumlah_inbrida    = jumlah_3 + jumlah_4;
        document.getElementById('lalutotal2').value = jumlah_total;
        document.getElementById('laluhibrida2').value = jumlah_hibrida;
        document.getElementById('laluinbrida2').value = jumlah_inbrida;
    }
    function panentotalbukan() {
        var jumlah_1        = document.getElementById('panen2').value - 0;
        var jumlah_2        = document.getElementById('panen4').value - 0 ;
        var jumlah_3        = document.getElementById('panen6').value - 0;
        var jumlah_4        = document.getElementById('panen8').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2 + jumlah_3 + jumlah_4;
        var jumlah_hibrida    = jumlah_1 + jumlah_2;
        var jumlah_inbrida    = jumlah_3 + jumlah_4;
        document.getElementById('panentotal2').value = jumlah_total;
        document.getElementById('panenhibrida2').value = jumlah_hibrida;
        document.getElementById('paneninbrida2').value = jumlah_inbrida;
    }
    function tanamtotalbukan() {
        var jumlah_1        = document.getElementById('tanam2').value - 0;
        var jumlah_2        = document.getElementById('tanam4').value - 0 ;
        var jumlah_3        = document.getElementById('tanam6').value - 0;
        var jumlah_4        = document.getElementById('tanam8').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2 + jumlah_3 + jumlah_4;
        var jumlah_hibrida    = jumlah_1 + jumlah_2;
        var jumlah_inbrida    = jumlah_3 + jumlah_4;
        document.getElementById('tanamtotal2').value = jumlah_total;
        document.getElementById('tanamhibrida2').value = jumlah_hibrida;
        document.getElementById('tanaminbrida2').value = jumlah_inbrida;
    }
    function pusototalbukan() {
        var jumlah_1        = document.getElementById('puso2').value - 0;
        var jumlah_2        = document.getElementById('puso4').value - 0 ;
        var jumlah_3        = document.getElementById('puso6').value - 0;
        var jumlah_4        = document.getElementById('puso8').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2 + jumlah_3 + jumlah_4;
        var jumlah_hibrida    = jumlah_1 + jumlah_2;
        var jumlah_inbrida    = jumlah_3 + jumlah_4;
        document.getElementById('pusototal2').value = jumlah_total;
        document.getElementById('pusohibrida2').value = jumlah_hibrida;
        document.getElementById('pusoinbrida2').value = jumlah_inbrida;
    }
    function laporantotalbukan() {
        var jumlah_1        = document.getElementById('lalu2').value - 0;
        var jumlah_2        = document.getElementById('lalu4').value - 0 ;
        var jumlah_3        = document.getElementById('lalu6').value - 0;
        var jumlah_4        = document.getElementById('lalu8').value - 0 ;
        
        var jumlah_5        = document.getElementById('panen2').value - 0;
        var jumlah_6        = document.getElementById('panen4').value - 0 ;
        var jumlah_7        = document.getElementById('panen6').value - 0;
        var jumlah_8        = document.getElementById('panen8').value - 0 ;

        var jumlah_9        = document.getElementById('tanam2').value - 0;
        var jumlah_10       = document.getElementById('tanam4').value - 0 ;
        var jumlah_11       = document.getElementById('tanam6').value - 0;
        var jumlah_12       = document.getElementById('tanam8').value - 0 ;

        var jumlah_13       = document.getElementById('puso2').value - 0;
        var jumlah_14       = document.getElementById('puso4').value - 0 ;
        var jumlah_15       = document.getElementById('puso6').value - 0;
        var jumlah_16       = document.getElementById('puso8').value - 0 ;

        var jumlah_total        = (jumlah_1 - jumlah_5 + jumlah_9 - jumlah_13) + (jumlah_2 - jumlah_6 + jumlah_10 - jumlah_14) + (jumlah_3 - jumlah_7 + jumlah_11 - jumlah_15) + (jumlah_4 - jumlah_8 + jumlah_12 - jumlah_16);
        var jumlah_laporan_2    = jumlah_1 - jumlah_5 + jumlah_9 - jumlah_13;
        var jumlah_laporan_4    = jumlah_2 - jumlah_6 + jumlah_10 - jumlah_14;
        var jumlah_laporan_6    = jumlah_3 - jumlah_7 + jumlah_11 - jumlah_15;
        var jumlah_laporan_8    = jumlah_4 - jumlah_8 + jumlah_12 - jumlah_16;
        var jumlah_hibrida      = (jumlah_1 - jumlah_5 + jumlah_9 - jumlah_13) + (jumlah_2 - jumlah_6 + jumlah_10 - jumlah_14);
        var jumlah_inbrida      = (jumlah_3 - jumlah_7 + jumlah_11 - jumlah_15) + (jumlah_4 - jumlah_8 + jumlah_12 - jumlah_16);

        document.getElementById('laporan2').value        = jumlah_laporan_2;
        document.getElementById('laporan4').value        = jumlah_laporan_4;
        document.getElementById('laporan6').value        = jumlah_laporan_6;
        document.getElementById('laporan8').value        = jumlah_laporan_8;
        document.getElementById('laporanhibrida2').value = jumlah_hibrida;
        document.getElementById('laporaninbrida2').value = jumlah_inbrida;
        document.getElementById('laporantotal2').value   = jumlah_total;
    }
    function laporanirigasi() {
        var jumlah_1        = document.getElementById('lalu9').value - 0;
        var jumlah_2        = document.getElementById('panen9').value - 0 ;
        var jumlah_3        = document.getElementById('tanam9').value - 0;
        var jumlah_4        = document.getElementById('puso9').value - 0 ;
        var jumlah_total    = jumlah_1 - jumlah_2 + jumlah_3 - jumlah_4;
        document.getElementById('laporan9').value = jumlah_total;
    }
    function laporantadah() {
        var jumlah_1        = document.getElementById('lalu10').value - 0;
        var jumlah_2        = document.getElementById('panen10').value - 0 ;
        var jumlah_3        = document.getElementById('tanam10').value - 0;
        var jumlah_4        = document.getElementById('puso10').value - 0 ;
        var jumlah_total    = jumlah_1 - jumlah_2 + jumlah_3 - jumlah_4;
        document.getElementById('laporan10').value = jumlah_total;
    }
    function laporanpasang() {
        var jumlah_1        = document.getElementById('lalu11').value - 0;
        var jumlah_2        = document.getElementById('panen11').value - 0 ;
        var jumlah_3        = document.getElementById('tanam11').value - 0;
        var jumlah_4        = document.getElementById('puso11').value - 0 ;
        var jumlah_total    = jumlah_1 - jumlah_2 + jumlah_3 - jumlah_4;
        document.getElementById('laporan11').value = jumlah_total;
    }
    function laporanrawa() {
        var jumlah_1        = document.getElementById('lalu12').value - 0;
        var jumlah_2        = document.getElementById('panen12').value - 0 ;
        var jumlah_3        = document.getElementById('tanam12').value - 0;
        var jumlah_4        = document.getElementById('puso12').value - 0 ;
        var jumlah_total    = jumlah_1 - jumlah_2 + jumlah_3 - jumlah_4;
        document.getElementById('laporan12').value = jumlah_total;
    }
</script>