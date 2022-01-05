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
<?php echo form_open_multipart ('Admin/tambah_palawija');?>
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
                            <!-- jumlah jagung fixed -->
                            <tr>
                                <td>1.</td>
                                <td  class="text-left">JUMLAH JAGUNG</td>
                                <td>
                                    <input type="number" class="form-control" id="lalu1" name="lalu1" value="0" readonly>
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen1" name="panen1" value="0" readonly>  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda1" name="muda1" value="0" readonly>
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak1" name="ternak1" value="0" readonly>  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam1" name="tanam1" value="0" readonly>
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso1" name="puso1" value="0" readonly>  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan1" name="laporan1" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="lalu2" name="lalu2" value="0" readonly>
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen2" name="panen2" value="0" readonly>  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda2" name="muda2" value="0" readonly>
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak2" name="ternak2" value="0" readonly>  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam2" name="tanam2" value="0" readonly>
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso2" name="puso2" value="0" readonly>  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan2" name="laporan2" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="produksi1" name="produksi1" value="0">
                                </td>
                            </tr>
                            <!-- jagung hibrida fixed -->
                            <tr>
                                <td></td>
                                <td  class="text-left">1. Hibrida</td>
                                <td>
                                    <input type="number" class="form-control" id="lalu3" name="lalu3" value="0" readonly>
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen3" name="panen3" value="0" readonly>  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda3" name="muda3" value="0" readonly>
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak3" name="ternak3" value="0" readonly>  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam3" name="tanam3" value="0" readonly>
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso3" name="puso3" value="0" readonly>  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan3" name="laporan3" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="lalu4" name="lalu4" value="0" readonly>
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen4" name="panen4" value="0" readonly>  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda4" name="muda4" value="0" readonly>
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak4" name="ternak4" value="0" readonly>  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam4" name="tanam4" value="0" readonly>
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso4" name="puso4" value="0" readonly>  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan4" name="laporan4" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="produksi2" name="produksi2" value="0">
                                </td>
                            </tr>
                            <!-- Jagung Hibrida Bantuan Pemerintah fixed -->
                            <tr>
                                <td></td>
                                <td  class="text-left">1). Bantuan Pemerintah</td>
                                <td>
                                    <input type="number" class="form-control" id="lalu5" name="lalu5" value="0" onchange="lalujagungsawah(),laporanjagungsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen5" name="panen5" value="0" onchange="panenjagungsawah(),laporanjagungsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda5" name="muda5" value="0" onchange="mudajagungsawah(),laporanjagungsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak5" name="ternak5" value="0" onchange="ternakjagungsawah(),laporanjagungsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam5" name="tanam5" value="0" onchange="tanamjagungsawah(),laporanjagungsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso5" name="puso5" value="0" onchange="pusojagungsawah(),laporanjagungsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan5" name="laporan5" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="lalu6" name="lalu6" value="0" onchange="lalujagungbukan(),laporanjagungbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen6" name="panen6" value="0" onchange="panenjagungbukan(),laporanjagungbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda6" name="muda6" value="0" onchange="mudajagungbukan(),laporanjagungbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak6" name="ternak6" value="0" onchange="ternakjagungbukan(),laporanjagungbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam6" name="tanam6" value="0" onchange="tanamjagungbukan(),laporanjagungbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso6" name="puso6" value="0" onchange="pusojagungsawah(),laporanjagungbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan6" name="laporan6" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="produksi3" name="produksi3" value="0">
                                </td>
                            </tr>
                            <!-- Jagung Hibrida Non Bantuan Pemerintah fixed -->
                            <tr>
                                <td></td>
                                <td  class="text-left">2). Non Bantuan Pemerintah</td>
                                <td>
                                    <input type="number" class="form-control" id="lalu7" name="lalu7" value="0" onchange="lalujagungsawah(),laporanjagungsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen7" name="panen7" value="0" onchange="panenjagungsawah(),laporanjagungsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda7" name="muda7" value="0" onchange="mudajagungsawah(),laporanjagungsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak7" name="ternak7" value="0" onchange="ternakjagungsawah(),laporanjagungsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam7" name="tanam7" value="0" onchange="tanamjagungsawah(),laporanjagungsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso7" name="puso7" value="0" onchange="pusojagungsawah(),laporanjagungsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan7" name="laporan7" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="lalu8" name="lalu8" value="0" onchange="lalujagungbukan(),laporanjagungbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen8" name="panen8" value="0" onchange="panenjagungbukan(),laporanjagungbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda8" name="muda8" value="0" onchange="mudajagungbukan(),laporanjagungbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak8" name="ternak8" value="0" onchange="ternakjagungbukan(),laporanjagungbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam8" name="tanam8" value="0" onchange="tanamjagungbukan(),laporanjagungbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso8" name="puso8" value="0" onchange="pusojagungbukan(),laporanjagungbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan8" name="laporan8" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="produksi4" name="produksi4" value="0">
                                </td>
                            </tr>
                            <!-- Jagung Komposit fixed -->
                            <tr>
                                <td></td>
                                <td  class="text-left">b. Komposit</td>
                                <td>
                                    <input type="number" class="form-control" id="lalu9" name="lalu9" value="0" onchange="lalujagungsawah(),laporanjagungsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen9" name="panen9" value="0" onchange="panenjagungsawah(),laporanjagungsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda9" name="muda9" value="0" onchange="mudajagungsawah(),laporanjagungsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak9" name="ternak9" value="0" onchange="ternakjagungsawah(),laporanjagungsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam9" name="tanam9" value="0" onchange="tanamjagungsawah(),laporanjagungsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso9" name="puso9" value="0" onchange="pusojagungsawah(),laporanjagungsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan9" name="laporan9" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="lalu10" name="lalu10" value="0" onchange="lalujagungbukan(),laporanjagungbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen10" name="panen10" value="0" onchange="panenjagungbukan(),laporanjagungbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda10" name="muda10" value="0" onchange="mudajagungbukan(),laporanjagungbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak10" name="ternak10" value="0" onchange="ternakjagungbukan(),laporanjagungbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam10" name="tanam10" value="0" onchange="tanamjagungbukan(),laporanjagungbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso10" name="puso10" value="0" onchange="pusojagungbukan(),laporanjagungbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan10" name="laporan10" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="produksi5" name="produksi5" value="0">
                                </td>
                            </tr>
                            <!-- Jagung Lokal fixed -->
                            <tr>
                                <td></td>
                                <td  class="text-left">c. Lokal</td>
                                <td>
                                    <input type="number" class="form-control" id="lalu11" name="lalu11" value="0" onchange="lalujagungsawah(),laporanjagungsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen11" name="panen11" value="0" onchange="panenjagungsawah(),laporanjagungsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda11" name="muda11" value="0" onchange="mudajagungsawah(),laporanjagungsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak11" name="ternak11" value="0" onchange="ternakjagungsawah(),laporanjagungsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam11" name="tanam11" value="0" onchange="tanamjagungsawah(),laporanjagungsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso11" name="puso11" value="0" onchange="pusojagungsawah(),laporanjagungsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan11" name="laporan11" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="lalu12" name="lalu12" value="0" onchange="lalujagungbukan(),laporanjagungbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen12" name="panen12" value="0" onchange="panenjagungbukan(),laporanjagungbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda12" name="muda12" value="0" onchange="mudajagungbukan(),laporanjagungbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak12" name="ternak12" value="0" onchange="ternakjagungbukan(),laporanjagungbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam12" name="tanam12" value="0" onchange="tanamjagungbukan(),laporanjagungbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso12" name="puso12" value="0" onchange="pusojagungbukan(),laporanjagungbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan12" name="laporan12" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="produksi6" name="produksi6" value="0">
                                </td>
                            </tr>
                            <!-- Jumlah Kedelai fixed -->
                            <tr>
                                <td>2.</td>
                                <td  class="text-left">KEDELAI</td>
                                <td>
                                    <input type="number" class="form-control" id="lalu13" name="lalu13" value="0" readonly>
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen13" name="panen13" value="0" readonly>  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda13" name="muda13" value="0" readonly>
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak13" name="ternak13" value="0" readonly>  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam13" name="tanam13" value="0" readonly>
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso13" name="puso13" value="0" readonly>  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan13" name="laporan13" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="lalu14" name="lalu14" value="0" readonly>
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen14" name="panen14" value="0" readonly>  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda14" name="muda14" value="0" readonly>
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak14" name="ternak14" value="0" readonly>  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam14" name="tanam14" value="0" readonly>
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso14" name="puso14" value="0" readonly>  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan14" name="laporan14" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="produksi7" name="produksi7" value="0">
                                </td>
                            </tr>
                            <!-- Kedelai Bantuan Pemerintah fixed -->
                            <tr>
                                <td></td>
                                <td  class="text-left">a. Bantuan Pemerintah</td>
                                <td>
                                    <input type="number" class="form-control" id="lalu15" name="lalu15" value="0" onchange="lalukedelaisawah(),laporankedelaisawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen15" name="panen15" value="0" onchange="panenkedelaisawah(),laporankedelaisawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda15" name="muda15" value="0" onchange="mudakedelaisawah(),laporankedelaisawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak15" name="ternak15" value="0" onchange="ternakkedelaisawah(),laporankedelaisawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam15" name="tanam15" value="0" onchange="tanamkedelaisawah(),laporankedelaisawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso15" name="puso15" value="0" onchange="pusokedelaisawah(),laporankedelaisawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan15" name="laporan15" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="lalu16" name="lalu16" value="0" onchange="lalukedelaibukan(),laporankedelaibukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen16" name="panen16" value="0" onchange="panenkedelaibukan(),laporankedelaibukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda16" name="muda16" value="0" onchange="mudakedelaibukan(),laporankedelaibukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak16" name="ternak16" value="0" onchange="ternakkedelaibukan(),laporankedelaibukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam16" name="tanam16" value="0" onchange="tanamkedelaibukan(),laporankedelaibukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso16" name="puso16" value="0" onchange="pusokedelaibukan(),laporankedelaibukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan16" name="laporan16" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="produksi8" name="produksi8" value="0">
                                </td>
                            </tr>
                            <!-- Kedelai Non Bantuan Pemerintah fixed-->
                            <tr>
                                <td></td>
                                <td  class="text-left">b. Non Bantuan Pemerintah</td>
                                <td>
                                    <input type="number" class="form-control" id="lalu17" name="lalu17" value="0" onchange="lalukedelaisawah(),laporankedelaisawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen17" name="panen17" value="0" onchange="panenkedelaisawah(),laporankedelaisawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda17" name="muda17" value="0" onchange="mudakedelaisawah(),laporankedelaisawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak17" name="ternak17" value="0" onchange="ternakkedelaisawah(),laporankedelaisawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam17" name="tanam17" value="0" onchange="tanamkedelaisawah(),laporankedelaisawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso17" name="puso17" value="0" onchange="pusokedelaisawah(),laporankedelaisawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan17" name="laporan17" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="lalu18" name="lalu18" value="0" onchange="lalukedelaibukan(),laporankedelaibukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen18" name="panen18" value="0" onchange="panenkedelaibukan(),laporankedelaibukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda18" name="muda18" value="0" onchange="mudakedelaibukan(),laporankedelaibukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak18" name="ternak18" value="0" onchange="ternakkedelaibukan(),laporankedelaibukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam18" name="tanam18" value="0" onchange="tanamkedelaibukan(),laporankedelaibukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso18" name="puso18" value="0" onchange="pusokedelaibukan(),laporankedelaibukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan18" name="laporan18" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="produksi9" name="produksi9" value="0">
                                </td>
                            </tr>
                            <!-- Kacang Tanah fixed -->
                            <tr>
                                <td>3.</td>
                                <td  class="text-left">KACANG TANAH</td>
                                <td>
                                    <input type="number" class="form-control" id="lalu19" name="lalu19" value="0" onchange="laporankacangtanahsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen19" name="panen19" value="0" onchange="laporankacangtanahsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda19" name="muda19" value="0" onchange="laporankacangtanahsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak19" name="ternak19" value="0" onchange="laporankacangtanahsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam19" name="tanam19" value="0" onchange="laporankacangtanahsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso19" name="puso19" value="0" onchange="laporankacangtanahsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan19" name="laporan19" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="lalu20" name="lalu20" value="0" onchange="laporankacangtanahbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen20" name="panen20" value="0" onchange="laporankacangtanahbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda20" name="muda20" value="0" onchange="laporankacangtanahbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak20" name="ternak20" value="0" onchange="laporankacangtanahbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam20" name="tanam20" value="0" onchange="laporankacangtanahbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso20" name="puso20" value="0" onchange="laporankacangtanahbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan20" name="laporan20" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="produksi10" name="produksi10" value="0">
                                </td>
                            </tr>
                            <!-- Jumlah Ubi Kayu/Singkong fixed -->
                            <tr>
                                <td>4.</td>
                                <td  class="text-left">JUMLAH UBI KAYU/SINGKONG</td>
                                <td>
                                    <input type="number" class="form-control" id="lalu21" name="lalu21" value="0" readonly>
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen21" name="panen21" value="0" readonly>  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda21" name="muda21" value="0" readonly>
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak21" name="ternak21" value="0" readonly>  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam21" name="tanam21" value="0" readonly>
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso21" name="puso21" value="0" readonly>  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan21" name="laporan21" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="lalu22" name="lalu22" value="0" readonly>
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen22" name="panen22" value="0" readonly>  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda22" name="muda22" value="0" readonly>
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak22" name="ternak22" value="0" readonly>  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam22" name="tanam22" value="0" readonly>
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso22" name="puso22" value="0" readonly>  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan22" name="laporan22" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="produksi11" name="produksi11" value="0">
                                </td>
                            </tr>
                            <!-- Ubi Kayu/Singkong Bantuan Pemerintah fixed -->
                            <tr>
                                <td></td>
                                <td  class="text-left">a. Bantuan Pemerintah</td>
                                <td>
                                    <input type="number" class="form-control" id="lalu23" name="lalu23" value="0" value="0" onchange="lalusingkongsawah(),laporansingkongsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen23" name="panen23" value="0" onchange="panensingkongsawah(),laporansingkongsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda23" name="muda23" value="0" onchange="mudasingkongsawah(),laporansingkongsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak23" name="ternak23" value="0" onchange="ternaksingkongsawah(),laporansingkongsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam23" name="tanam23" value="0" onchange="tanamsingkongsawah(),laporansingkongsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso23" name="puso23" value="0" onchange="pusosingkongsawah(),laporansingkongsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan23" name="laporan23" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="lalu24" name="lalu24" value="0" onchange="lalusingkongbukan(),laporansingkongbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen24" name="panen24" value="0" onchange="panensingkongbukan(),laporansingkongbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda24" name="muda24" value="0" onchange="mudasingkongbukan(),laporansingkongbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak24" name="ternak24" value="0" onchange="ternaksingkongbukan(),laporansingkongbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam24" name="tanam24" value="0" onchange="tanamsingkongbukan(),laporansingkongbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso24" name="puso24" value="0" onchange="pusosingkongbukan(),laporansingkongbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan24" name="laporan24" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="produksi21" name="produksi12" value="0">
                                </td>
                            </tr>
                            <!-- Ubi Kayu/Singkong Non Bantuan Pemerintah fixed -->
                            <tr>
                                <td></td>
                                <td  class="text-left">b. Non Bantuan Pemerintah</td>
                                <td>
                                    <input type="number" class="form-control" id="lalu25" name="lalu25" value="0" onchange="lalusingkongsawah(),laporansingkongsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen25" name="panen25" value="0" onchange="panensingkongsawah(),laporansingkongsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda25" name="muda25" value="0" onchange="mudasingkongsawah(),laporansingkongsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak25" name="ternak25" value="0" onchange="ternaksingkongsawah(),laporansingkongsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam25" name="tanam25" value="0" onchange="tanamsingkongsawah(),laporansingkongsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso25" name="puso25" value="0" onchange="pusosingkongsawah(),laporansingkongsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan25" name="laporan25" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="lalu26" name="lalu26" value="0" onchange="lalusingkongbukan(),laporansingkongbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen26" name="panen26" value="0" onchange="panensingkongbukan(),laporansingkongbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda26" name="muda26" value="0" onchange="mudasingkongbukan(),laporansingkongbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak26" name="ternak26" value="0" onchange="ternaksingkongbukan(),laporansingkongbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam26" name="tanam26" value="0" onchange="tanamsingkongbukan(),laporansingkongbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso26" name="puso26" value="0" onchange="pusosingkongbukan(),laporansingkongbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan26" name="laporan26" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="produksi13" name="produksi13" value="0">
                                </td>
                            </tr>
                            <!-- Ubi Jalar/Ketela Rambat fixed -->
                            <tr>
                                <td>5.</td>
                                <td  class="text-left">UBI JALAR/KETELA RAMBAT</td>
                                <td>
                                    <input type="number" class="form-control" id="lalu27" name="lalu27" value="0" onchange="laporanubijalarsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen27" name="panen27" value="0" onchange="laporanubijalarsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda27" name="muda27" value="0" onchange="laporanubijalarsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak27" name="ternak27" value="0" onchange="laporanubijalarsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam27" name="tanam27" value="0" onchange="laporanubijalarsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso27" name="puso27" value="0" onchange="laporanubijalarsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan27" name="laporan27" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="lalu28" name="lalu28" value="0" onchange="laporanubijalarbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen28" name="panen28" value="0" onchange="laporanubijalarbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda28" name="muda28" value="0" onchange="laporanubijalarbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak28" name="ternak28" value="0" onchange="laporanubijalarbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam28" name="tanam28" value="0" onchange="laporanubijalarbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso28" name="puso28" value="0" onchange="laporanubijalarbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan28" name="laporan28" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="produksi14" name="produksi14" value="0">
                                </td>
                            </tr>
                            <!-- Kacang Hijau fixed -->
                            <tr>
                                <td>6.</td>
                                <td  class="text-left">KACANG HIJAU</td>
                                <td>
                                    <input type="number" class="form-control" id="lalu29" name="lalu29" value="0" onchange="laporankacanghijausawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen29" name="panen29" value="0" onchange="laporankacanghijausawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda29" name="muda29" value="0" onchange="laporankacanghijausawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak29" name="ternak29" value="0" onchange="laporankacanghijausawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam29" name="tanam29" value="0" onchange="laporankacanghijausawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso29" name="puso29" value="0" onchange="laporankacanghijausawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan29" name="laporan29" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="lalu30" name="lalu30" value="0" onchange="laporankacanghijaubukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen30" name="panen30" value="0" onchange="laporankacanghijaubukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda30" name="muda30" value="0" onchange="laporankacanghijaubukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak30" name="ternak30" value="0" onchange="laporankacanghijaubukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam30" name="tanam30" value="0" onchange="laporankacanghijaubukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso30" name="puso30" value="0" onchange="laporankacanghijaubukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan30" name="laporan30" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="produksi15" name="produksi15" value="0">
                                </td>
                            </tr>
                            <!-- Sorgum fixed -->
                            <tr>
                                <td>7.</td>
                                <td  class="text-left">SORGUM/CANTEL</td>
                                <td>
                                    <input type="number" class="form-control" id="lalu31" name="lalu31" value="0" onchange="laporansorgumsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen31" name="panen31" value="0" onchange="laporansorgumsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda31" name="muda31" value="0" onchange="laporansorgumsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak31" name="ternak31" value="0" onchange="laporansorgumsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam31" name="tanam31" value="0" onchange="laporansorgumsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso31" name="puso31" value="0" onchange="laporansorgumsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan31" name="laporan31" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="lalu32" name="lalu32" value="0" onchange="laporansorgumbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen32" name="panen32" value="0" onchange="laporansorgumbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda32" name="muda32" value="0" onchange="laporansorgumbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak32" name="ternak32" value="0" onchange="laporansorgumbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam32" name="tanam32" value="0" onchange="laporansorgumbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso32" name="puso32" value="0" onchange="laporansorgumbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan32" name="laporan32" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="produksi16" name="produksi16" value="0">
                                </td>
                            </tr>
                            <!-- Gandum fixed -->
                            <tr>
                                <td>8.</td>
                                <td  class="text-left"> GANDUM</td>
                                <td>
                                    <input type="number" class="form-control" id="lalu33" name="lalu33" value="0" onchange="laporangandumsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen33" name="panen33" value="0" onchange="laporangandumsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda33" name="muda33" value="0" onchange="laporangandumsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak33" name="ternak33" value="0" onchange="laporangandumsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam33" name="tanam33" value="0" onchange="laporangandumsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso33" name="puso33" value="0" onchange="laporangandumsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan33" name="laporan33" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="lalu34" name="lalu34" value="0" onchange="laporangandumbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen34" name="panen34" value="0" onchange="laporangandumbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda34" name="muda34" value="0" onchange="laporangandumbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak34" name="ternak34" value="0" onchange="laporangandumbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam34" name="tanam34" value="0" onchange="laporangandumbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso34" name="puso34" value="0" onchange="laporangandumbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan34" name="laporan34" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="produksi17" name="produksi17" value="0">
                                </td>
                            </tr>
                            <!-- Talas fixed -->
                            <tr>
                                <td>9.</td>
                                <td  class="text-left">TALAS</td>
                                <td>
                                    <input type="number" class="form-control" id="lalu35" name="lalu35" value="0" onchange="laporantalassawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen35" name="panen35" value="0" onchange="laporantalassawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda35" name="muda35" value="0" onchange="laporantalassawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak35" name="ternak35" value="0" onchange="laporantalassawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam35" name="tanam35" value="0" onchange="laporantalassawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso35" name="puso35" value="0" onchange="laporantalassawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan35" name="laporan35" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="lalu36" name="lalu36" value="0" onchange="laporantalasbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen36" name="panen36" value="0" onchange="laporantalasbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda36" name="muda36" value="0" onchange="laporantalasbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak36" name="ternak36" value="0" onchange="laporantalasbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam36" name="tanam36" value="0" onchange="laporantalasbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso36" name="puso36" value="0" onchange="laporantalasbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan36" name="laporan36" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="produksi18" name="produksi18" value="0">
                                </td>
                            </tr>
                            <!-- Ganyong fixed -->
                            <tr>
                                <td>10.</td>
                                <td  class="text-left">GANYONG</td>
                                <td>
                                    <input type="number" class="form-control" id="lalu37" name="lalu37" value="0" onchange="laporanganyongsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen37" name="panen37" value="0" onchange="laporanganyongsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda37" name="muda37" value="0" onchange="laporanganyongsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak37" name="ternak37" value="0" onchange="laporanganyongsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam37" name="tanam37" value="0" onchange="laporanganyongsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso37" name="puso37" value="0" onchange="laporanganyongsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan37" name="laporan37" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="lalu38" name="lalu38" value="0" onchange="laporanganyongbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen38" name="panen38" value="0" onchange="laporanganyongbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda38" name="muda38" value="0" onchange="laporanganyongbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak38" name="ternak38" value="0" onchange="laporanganyongbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam38" name="tanam38" value="0" onchange="laporanganyongbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso38" name="puso38" value="0" onchange="laporanganyongbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan38" name="laporan38" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="produksi19" name="produksi19" value="0">
                                </td>
                            </tr>
                            <!-- Umbi Lainnya fixed -->
                            <tr>
                                <td>11.</td>
                                <td  class="text-left">UMBI LAINNYA</td>
                                <td>
                                    <input type="number" class="form-control" id="lalu39" name="lalu39" value="0" onchange="laporanumbilainsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen39" name="panen39" value="0" onchange="laporanumbilainsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda39" name="muda39" value="0" onchange="laporanumbilainsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak39" name="ternak39" value="0" onchange="laporanumbilainsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam39" name="tanam39" value="0" onchange="laporanumbilainsawah()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso39" name="puso39" value="0" onchange="laporanumbilainsawah()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan39" name="laporan39" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="lalu40" name="lalu40" value="0" onchange="laporanumbilainbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="panen40" name="panen40" value="0" onchange="laporanumbilainbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="muda40" name="muda40" value="0" onchange="laporanumbilainbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="ternak40" name="ternak40" value="0" onchange="laporanumbilainbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="tanam40" name="tanam40" value="0" onchange="laporanumbilainbukan()">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="puso40" name="puso40" value="0" onchange="laporanumbilainbukan()">  
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="laporan40" name="laporan40" value="0" readonly>   
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="produksi20" name="produksi20" value="0">
                                </td>
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
    //hitung jumlah jagung
    function lalujagungsawah() {
        var jumlah_1        = document.getElementById('lalu5').value - 0;
        var jumlah_2        = document.getElementById('lalu7').value - 0;
        var jumlah_3        = document.getElementById('lalu9').value - 0;
        var jumlah_4        = document.getElementById('lalu11').value - 0;
        var jumlah_total    = jumlah_1 + jumlah_2 + jumlah_3 + jumlah_4;
        var jumlah_hibrida  = jumlah_1 + jumlah_2;
        document.getElementById('lalu1').value = jumlah_total;
        document.getElementById('lalu3').value = jumlah_hibrida;
        }

    function panenjagungsawah() {
        var jumlah_1        = document.getElementById('panen5').value - 0;
        var jumlah_2        = document.getElementById('panen7').value - 0 ;
        var jumlah_3        = document.getElementById('panen9').value - 0;
        var jumlah_4        = document.getElementById('panen11').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2 + jumlah_3 + jumlah_4;
        var jumlah_hibrida  = jumlah_1 + jumlah_2;
        document.getElementById('panen1').value = jumlah_total;
        document.getElementById('panen3').value = jumlah_hibrida;
        }

    function mudajagungsawah() {
        var jumlah_1        = document.getElementById('muda5').value - 0;
        var jumlah_2        = document.getElementById('muda7').value - 0 ;
        var jumlah_3        = document.getElementById('muda9').value - 0;
        var jumlah_4        = document.getElementById('muda11').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2 + jumlah_3 + jumlah_4;
        var jumlah_hibrida  = jumlah_1 + jumlah_2;
        document.getElementById('muda1').value = jumlah_total;
        document.getElementById('muda3').value = jumlah_hibrida;
        }

    function ternakjagungsawah() {
        var jumlah_1        = document.getElementById('ternak5').value - 0;
        var jumlah_2        = document.getElementById('ternak7').value - 0 ;
        var jumlah_3        = document.getElementById('ternak9').value - 0;
        var jumlah_4        = document.getElementById('ternak11').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2 + jumlah_3 + jumlah_4;
        var jumlah_hibrida  = jumlah_1 + jumlah_2;
        document.getElementById('ternak1').value = jumlah_total;
        document.getElementById('ternak3').value = jumlah_hibrida;
        }

    function tanamjagungsawah() {
        var jumlah_1        = document.getElementById('tanam5').value - 0;
        var jumlah_2        = document.getElementById('tanam7').value - 0 ;
        var jumlah_3        = document.getElementById('tanam9').value - 0;
        var jumlah_4        = document.getElementById('tanam11').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2 + jumlah_3 + jumlah_4;
        var jumlah_hibrida  = jumlah_1 + jumlah_2;
        document.getElementById('tanam1').value = jumlah_total;
        document.getElementById('tanam3').value = jumlah_hibrida;
        }

    function pusojagungsawah() {
        var jumlah_1        = document.getElementById('puso5').value - 0;
        var jumlah_2        = document.getElementById('puso7').value - 0 ;
        var jumlah_3        = document.getElementById('puso9').value - 0;
        var jumlah_4        = document.getElementById('puso11').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2 + jumlah_3 + jumlah_4;
        var jumlah_hibrida  = jumlah_1 + jumlah_2;
        document.getElementById('puso1').value = jumlah_total;
        document.getElementById('puso3').value = jumlah_hibrida;
        }

    function laporanjagungsawah() {
        var jumlah_1        = document.getElementById('lalu5').value - 0;
        var jumlah_2        = document.getElementById('lalu7').value - 0 ;
        var jumlah_3        = document.getElementById('lalu9').value - 0;
        var jumlah_4        = document.getElementById('lalu11').value - 0 ;
        
        var jumlah_5        = document.getElementById('panen5').value - 0;
        var jumlah_6        = document.getElementById('panen7').value - 0 ;
        var jumlah_7        = document.getElementById('panen9').value - 0;
        var jumlah_8        = document.getElementById('panen11').value - 0 ;
        
        var jumlah_9        = document.getElementById('muda5').value - 0;
        var jumlah_10        = document.getElementById('muda7').value - 0 ;
        var jumlah_11        = document.getElementById('muda9').value - 0;
        var jumlah_12        = document.getElementById('muda11').value - 0 ;
        
        var jumlah_13        = document.getElementById('ternak5').value - 0;
        var jumlah_14        = document.getElementById('ternak7').value - 0 ;
        var jumlah_15        = document.getElementById('ternak9').value - 0;
        var jumlah_16        = document.getElementById('ternak11').value - 0 ;
        
        var jumlah_17        = document.getElementById('tanam5').value - 0;
        var jumlah_18        = document.getElementById('tanam7').value - 0 ;
        var jumlah_19        = document.getElementById('tanam9').value - 0;
        var jumlah_20        = document.getElementById('tanam11').value - 0 ;
        
        var jumlah_21        = document.getElementById('puso5').value - 0;
        var jumlah_22        = document.getElementById('puso7').value - 0 ;
        var jumlah_23        = document.getElementById('puso9').value - 0;
        var jumlah_24        = document.getElementById('puso11').value - 0 ;

        var jumlah_total            = (jumlah_1 - jumlah_5 - jumlah_9 - jumlah_13 + jumlah_17 - jumlah_21) + (jumlah_2 - jumlah_6 - jumlah_10 - jumlah_14 + jumlah_18 - jumlah_22) + (jumlah_3 - jumlah_7 - jumlah_11 - jumlah_15 + jumlah_19 - jumlah_23) + (jumlah_4 - jumlah_8 - jumlah_12 - jumlah_16 + jumlah_20 - jumlah_24);
        var jumlah_laporan_hibrida  = (jumlah_1 - jumlah_5 - jumlah_9 - jumlah_13 + jumlah_17 - jumlah_21) + (jumlah_2 - jumlah_6 - jumlah_10 - jumlah_14 + jumlah_18 - jumlah_22);
        var jumlah_laporan_bantuan  = jumlah_1 - jumlah_5 - jumlah_9 - jumlah_13 + jumlah_17 - jumlah_21;
        var jumlah_laporan_non      = jumlah_2 - jumlah_6 - jumlah_10 - jumlah_14 + jumlah_18 - jumlah_22;
        var jumlah_laporan_komposit = jumlah_3 - jumlah_7 - jumlah_11 - jumlah_15 + jumlah_19 - jumlah_23;
        var jumlah_laporan_lokal    = jumlah_4 - jumlah_8 - jumlah_12 - jumlah_16 + jumlah_20 - jumlah_24;
                
        document.getElementById('laporan1').value = jumlah_total;
        document.getElementById('laporan3').value = jumlah_laporan_hibrida;
        document.getElementById('laporan5').value = jumlah_laporan_bantuan;
        document.getElementById('laporan7').value = jumlah_laporan_non;
        document.getElementById('laporan9').value = jumlah_laporan_komposit;
        document.getElementById('laporan11').value = jumlah_laporan_lokal;
        }
    function lalujagungbukan() {
        var jumlah_1        = document.getElementById('lalu6').value - 0;
        var jumlah_2        = document.getElementById('lalu8').value - 0 ;
        var jumlah_3        = document.getElementById('lalu10').value - 0;
        var jumlah_4        = document.getElementById('lalu12').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2 + jumlah_3 + jumlah_4;
        var jumlah_hibrida  = jumlah_1 + jumlah_2;
        document.getElementById('lalu2').value = jumlah_total;
        document.getElementById('lalu4').value = jumlah_hibrida;
        }

    function panenjagungbukan() {
        var jumlah_1        = document.getElementById('panen6').value - 0;
        var jumlah_2        = document.getElementById('panen8').value - 0 ;
        var jumlah_3        = document.getElementById('panen10').value - 0;
        var jumlah_4        = document.getElementById('panen12').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2 + jumlah_3 + jumlah_4;
        var jumlah_hibrida  = jumlah_1 + jumlah_2;
        document.getElementById('panen2').value = jumlah_total;
        document.getElementById('panen4').value = jumlah_hibrida;
        }

    function mudajagungbukan() {
        var jumlah_1        = document.getElementById('muda6').value - 0;
        var jumlah_2        = document.getElementById('muda8').value - 0 ;
        var jumlah_3        = document.getElementById('muda10').value - 0;
        var jumlah_4        = document.getElementById('muda12').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2 + jumlah_3 + jumlah_4;
        var jumlah_hibrida  = jumlah_1 + jumlah_2;
        document.getElementById('muda2').value = jumlah_total;
        document.getElementById('muda4').value = jumlah_hibrida;
        }

    function ternakjagungbukan() {
        var jumlah_1        = document.getElementById('ternak6').value - 0;
        var jumlah_2        = document.getElementById('ternak8').value - 0 ;
        var jumlah_3        = document.getElementById('ternak10').value - 0;
        var jumlah_4        = document.getElementById('ternak12').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2 + jumlah_3 + jumlah_4;
        var jumlah_hibrida  = jumlah_1 + jumlah_2;
        document.getElementById('ternak2').value = jumlah_total;
        document.getElementById('ternak4').value = jumlah_hibrida;
        }

    function tanamjagungbukan() {
        var jumlah_1        = document.getElementById('tanam6').value - 0;
        var jumlah_2        = document.getElementById('tanam8').value - 0 ;
        var jumlah_3        = document.getElementById('tanam10').value - 0;
        var jumlah_4        = document.getElementById('tanam12').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2 + jumlah_3 + jumlah_4;
        var jumlah_hibrida  = jumlah_1 + jumlah_2;
        document.getElementById('tanam2').value = jumlah_total;
        document.getElementById('tanam4').value = jumlah_hibrida;
        }

    function pusojagungbukan() {
        var jumlah_1        = document.getElementById('puso6').value - 0;
        var jumlah_2        = document.getElementById('puso8').value - 0 ;
        var jumlah_3        = document.getElementById('puso10').value - 0;
        var jumlah_4        = document.getElementById('puso12').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2 + jumlah_3 + jumlah_4;
        var jumlah_hibrida  = jumlah_1 + jumlah_2;
        document.getElementById('puso2').value = jumlah_total;
        document.getElementById('puso4').value = jumlah_hibrida;
        }

    function laporanjagungbukan() {
        var jumlah_1        = document.getElementById('lalu6').value - 0;
        var jumlah_2        = document.getElementById('lalu8').value - 0 ;
        var jumlah_3        = document.getElementById('lalu10').value - 0;
        var jumlah_4        = document.getElementById('lalu12').value - 0 ;
        
        var jumlah_5        = document.getElementById('panen6').value - 0;
        var jumlah_6        = document.getElementById('panen8').value - 0 ;
        var jumlah_7        = document.getElementById('panen10').value - 0;
        var jumlah_8        = document.getElementById('panen12').value - 0 ;
        
        var jumlah_9        = document.getElementById('muda6').value - 0;
        var jumlah_10        = document.getElementById('muda8').value - 0 ;
        var jumlah_11        = document.getElementById('muda10').value - 0;
        var jumlah_12        = document.getElementById('muda12').value - 0 ;
        
        var jumlah_13        = document.getElementById('ternak6').value - 0;
        var jumlah_14        = document.getElementById('ternak8').value - 0 ;
        var jumlah_15        = document.getElementById('ternak10').value - 0;
        var jumlah_16        = document.getElementById('ternak12').value - 0 ;
        
        var jumlah_17        = document.getElementById('tanam6').value - 0;
        var jumlah_18        = document.getElementById('tanam8').value - 0 ;
        var jumlah_19        = document.getElementById('tanam10').value - 0;
        var jumlah_20        = document.getElementById('tanam12').value - 0 ;
        
        var jumlah_21        = document.getElementById('puso6').value - 0;
        var jumlah_22        = document.getElementById('puso8').value - 0 ;
        var jumlah_23        = document.getElementById('puso10').value - 0;
        var jumlah_24        = document.getElementById('puso12').value - 0 ;
        
        var jumlah_total            = (jumlah_1 - jumlah_5 - jumlah_9 - jumlah_13 + jumlah_17 - jumlah_21) + (jumlah_2 - jumlah_6 - jumlah_10 - jumlah_14 + jumlah_18 - jumlah_22) + (jumlah_3 - jumlah_7 - jumlah_11 - jumlah_15 + jumlah_19 - jumlah_23) + (jumlah_4 - jumlah_8 - jumlah_12 - jumlah_16 + jumlah_20 - jumlah_24);
        var jumlah_laporan_hibrida  = (jumlah_1 - jumlah_5 - jumlah_9 - jumlah_13 + jumlah_17 - jumlah_21) + (jumlah_2 - jumlah_6 - jumlah_10 - jumlah_14 + jumlah_18 - jumlah_22);
        var jumlah_laporan_bantuan  = jumlah_1 - jumlah_5 - jumlah_9 - jumlah_13 + jumlah_17 - jumlah_21;
        var jumlah_laporan_non      = jumlah_2 - jumlah_6 - jumlah_10 - jumlah_14 + jumlah_18 - jumlah_22;
        var jumlah_laporan_komposit = jumlah_3 - jumlah_7 - jumlah_11 - jumlah_15 + jumlah_19 - jumlah_23;
        var jumlah_laporan_lokal    = jumlah_4 - jumlah_8 - jumlah_12 - jumlah_16 + jumlah_20 - jumlah_24;
        
        document.getElementById('laporan2').value = jumlah_total;
        document.getElementById('laporan4').value = jumlah_laporan_hibrida;
        document.getElementById('laporan6').value = jumlah_laporan_bantuan;
        document.getElementById('laporan8').value = jumlah_laporan_non;
        document.getElementById('laporan10').value = jumlah_laporan_komposit;
        document.getElementById('laporan12').value = jumlah_laporan_lokal;
        }

    //hitung jumlah kedelai
    function lalukedelaisawah() {
        var jumlah_1        = document.getElementById('lalu15').value - 0;
        var jumlah_2        = document.getElementById('lalu17').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2;
        document.getElementById('lalu13').value = jumlah_total;
        }

    function panenkedelaisawah() {
        var jumlah_1        = document.getElementById('panen15').value - 0;
        var jumlah_2        = document.getElementById('panen17').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2;
        document.getElementById('panen13').value = jumlah_total;
        }

    function mudakedelaisawah() {
        var jumlah_1        = document.getElementById('muda15').value - 0;
        var jumlah_2        = document.getElementById('muda17').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2;
        document.getElementById('muda13').value = jumlah_total;
        }

    function ternakkedelaisawah() {
        var jumlah_1        = document.getElementById('ternak15').value - 0;
        var jumlah_2        = document.getElementById('ternak17').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2;
        document.getElementById('ternak13').value = jumlah_total;
        }

    function tanamkedelaisawah() {
        var jumlah_1        = document.getElementById('tanam15').value - 0;
        var jumlah_2        = document.getElementById('tanam17').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2;
        document.getElementById('tanam13').value = jumlah_total;
        }

    function pusokedelaisawah() {
        var jumlah_1        = document.getElementById('puso15').value - 0;
        var jumlah_2        = document.getElementById('puso17').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2;
        document.getElementById('puso13').value = jumlah_total;
        }

    function laporankedelaisawah() {
        var jumlah_1        = document.getElementById('lalu15').value - 0;
        var jumlah_2        = document.getElementById('lalu17').value - 0 ;
        
        var jumlah_3        = document.getElementById('panen15').value - 0;
        var jumlah_4        = document.getElementById('panen17').value - 0 ;
        
        var jumlah_5        = document.getElementById('muda15').value - 0;
        var jumlah_6        = document.getElementById('muda17').value - 0 ;
        
        var jumlah_7        = document.getElementById('ternak15').value - 0;
        var jumlah_8        = document.getElementById('ternak17').value - 0 ;
        
        var jumlah_9        = document.getElementById('tanam15').value - 0;
        var jumlah_10        = document.getElementById('tanam17').value - 0 ;
        
        var jumlah_11        = document.getElementById('puso15').value - 0;
        var jumlah_12        = document.getElementById('puso17').value - 0 ;

        var jumlah_bantuan  = jumlah_1 - jumlah_3 - jumlah_5 - jumlah_7 + jumlah_9 - jumlah_11; 
        var jumlah_non      = jumlah_2 - jumlah_4 - jumlah_6 - jumlah_8 + jumlah_10 - jumlah_12;
        var jumlah_total    = (jumlah_1 - jumlah_3 - jumlah_5 - jumlah_7 + jumlah_9 - jumlah_11) + (jumlah_2 - jumlah_4 - jumlah_6 - jumlah_8 + jumlah_10 - jumlah_12);
        
        document.getElementById('laporan13').value = jumlah_total;
        document.getElementById('laporan15').value = jumlah_bantuan;
        document.getElementById('laporan17').value = jumlah_non;
        }
    function lalukedelaibukan() {
        var jumlah_1        = document.getElementById('lalu16').value - 0;
        var jumlah_2        = document.getElementById('lalu18').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2;
        document.getElementById('lalu14').value = jumlah_total;
        }

    function panenkedelaibukan() {
        var jumlah_1        = document.getElementById('panen16').value - 0;
        var jumlah_2        = document.getElementById('panen18').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2;
        document.getElementById('panen14').value = jumlah_total;
        }

    function mudakedelaibukan() {
        var jumlah_1        = document.getElementById('muda16').value - 0;
        var jumlah_2        = document.getElementById('muda18').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2;
        document.getElementById('muda14').value = jumlah_total;
        }

    function ternakkedelaibukan() {
        var jumlah_1        = document.getElementById('ternak16').value - 0;
        var jumlah_2        = document.getElementById('ternak18').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2;
        document.getElementById('ternak14').value = jumlah_total;
        }

    function tanamkedelaibukan() {
        var jumlah_1        = document.getElementById('tanam16').value - 0;
        var jumlah_2        = document.getElementById('tanam18').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2;
        document.getElementById('tanam14').value = jumlah_total;
        }

    function pusokedelaibukan() {
        var jumlah_1        = document.getElementById('puso16').value - 0;
        var jumlah_2        = document.getElementById('puso18').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2;
        document.getElementById('puso14').value = jumlah_total;
        }

    function laporankedelaibukan() {
        var jumlah_1        = document.getElementById('lalu16').value - 0;
        var jumlah_2        = document.getElementById('lalu18').value - 0 ;
        
        var jumlah_3        = document.getElementById('panen16').value - 0;
        var jumlah_4        = document.getElementById('panen18').value - 0 ;
        
        var jumlah_5        = document.getElementById('muda16').value - 0;
        var jumlah_6        = document.getElementById('muda18').value - 0 ;
        
        var jumlah_7        = document.getElementById('ternak16').value - 0;
        var jumlah_8        = document.getElementById('ternak18').value - 0 ;
        
        var jumlah_9        = document.getElementById('tanam16').value - 0;
        var jumlah_10        = document.getElementById('tanam18').value - 0 ;
        
        var jumlah_11        = document.getElementById('puso16').value - 0;
        var jumlah_12        = document.getElementById('puso18').value - 0 ;
        
        var jumlah_bantuan  = jumlah_1 - jumlah_3 - jumlah_5 - jumlah_7 + jumlah_9 - jumlah_11; 
        var jumlah_non      = jumlah_2 - jumlah_4 - jumlah_6 - jumlah_8 + jumlah_10 - jumlah_12;
        var jumlah_total    = (jumlah_1 - jumlah_3 - jumlah_5 - jumlah_7 + jumlah_9 - jumlah_11) + (jumlah_2 - jumlah_4 - jumlah_6 - jumlah_8 + jumlah_10 - jumlah_12);
        
        document.getElementById('laporan14').value = jumlah_total;
        document.getElementById('laporan16').value = jumlah_bantuan;
        document.getElementById('laporan18').value = jumlah_non;
        }

    //hitung jumlah kacang tanah
    function laporankacangtanahsawah() {
        var jumlah_1        = document.getElementById('lalu19').value - 0;
        var jumlah_2        = document.getElementById('panen19').value - 0 ;
        var jumlah_3        = document.getElementById('muda19').value - 0 ;
        var jumlah_4        = document.getElementById('ternak19').value - 0 ;
        var jumlah_5        = document.getElementById('tanam19').value - 0 ;
        var jumlah_6        = document.getElementById('puso19').value - 0 ;

        var jumlah_total  = jumlah_1 - jumlah_2 - jumlah_3 - jumlah_4 + jumlah_5 - jumlah_6;

        document.getElementById('laporan19').value = jumlah_total;
        }

    function laporankacangtanahbukan() {
        var jumlah_1        = document.getElementById('lalu20').value - 0;
        var jumlah_2        = document.getElementById('panen20').value - 0 ;
        var jumlah_3        = document.getElementById('muda20').value - 0 ;
        var jumlah_4        = document.getElementById('ternak20').value - 0 ;
        var jumlah_5        = document.getElementById('tanam20').value - 0 ;
        var jumlah_6        = document.getElementById('puso20').value - 0 ;

        var jumlah_total  = jumlah_1 - jumlah_2 - jumlah_3 - jumlah_4 + jumlah_5 - jumlah_6;

        document.getElementById('laporan20').value = jumlah_total;
        }

    //hitung jumlah ubi kayu/singkong
    function lalusingkongsawah() {
        var jumlah_1        = document.getElementById('lalu23').value - 0;
        var jumlah_2        = document.getElementById('lalu25').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2;
        document.getElementById('lalu21').value = jumlah_total;
        }

    function panensingkongsawah() {
        var jumlah_1        = document.getElementById('panen23').value - 0;
        var jumlah_2        = document.getElementById('panen25').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2;
        document.getElementById('panen21').value = jumlah_total;
        }

    function mudasingkongsawah() {
        var jumlah_1        = document.getElementById('muda23').value - 0;
        var jumlah_2        = document.getElementById('muda25').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2;
        document.getElementById('muda21').value = jumlah_total;
        }

    function ternaksingkongsawah() {
        var jumlah_1        = document.getElementById('ternak23').value - 0;
        var jumlah_2        = document.getElementById('ternak25').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2;
        document.getElementById('ternak21').value = jumlah_total;
        }

    function tanamsingkongsawah() {
        var jumlah_1        = document.getElementById('tanam23').value - 0;
        var jumlah_2        = document.getElementById('tanam25').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2;
        document.getElementById('tanam21').value = jumlah_total;
        }

    function pusosingkongsawah() {
        var jumlah_1        = document.getElementById('puso23').value - 0;
        var jumlah_2        = document.getElementById('puso25').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2;
        document.getElementById('puso21').value = jumlah_total;
        }

    function laporansingkongsawah() {
        var jumlah_1        = document.getElementById('lalu23').value - 0;
        var jumlah_2        = document.getElementById('lalu25').value - 0 ;
        
        var jumlah_3        = document.getElementById('panen23').value - 0;
        var jumlah_4        = document.getElementById('panen25').value - 0 ;
        
        var jumlah_5        = document.getElementById('muda23').value - 0;
        var jumlah_6        = document.getElementById('muda25').value - 0 ;
        
        var jumlah_7        = document.getElementById('ternak23').value - 0;
        var jumlah_8        = document.getElementById('ternak25').value - 0 ;
        
        var jumlah_9        = document.getElementById('tanam23').value - 0;
        var jumlah_10        = document.getElementById('tanam25').value - 0 ;
        
        var jumlah_11        = document.getElementById('puso23').value - 0;
        var jumlah_12        = document.getElementById('puso25').value - 0 ;
        
        var jumlah_bantuan  = jumlah_1 - jumlah_3 - jumlah_5 - jumlah_7 + jumlah_9 - jumlah_11; 
        var jumlah_non      = jumlah_2 - jumlah_4 - jumlah_6 - jumlah_8 + jumlah_10 - jumlah_12;
        var jumlah_total    = (jumlah_1 - jumlah_3 - jumlah_5 - jumlah_7 + jumlah_9 - jumlah_11) + (jumlah_2 - jumlah_4 - jumlah_6 - jumlah_8 + jumlah_10 - jumlah_12);
        
        document.getElementById('laporan21').value = jumlah_total;
        document.getElementById('laporan23').value = jumlah_bantuan;
        document.getElementById('laporan25').value = jumlah_non;
        }
    function lalusingkongbukan() {
        var jumlah_1        = document.getElementById('lalu24').value - 0;
        var jumlah_2        = document.getElementById('lalu26').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2;
        document.getElementById('lalu22').value = jumlah_total;
        }

    function panensingkongbukan() {
        var jumlah_1        = document.getElementById('panen24').value - 0;
        var jumlah_2        = document.getElementById('panen26').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2;
        document.getElementById('panen22').value = jumlah_total;
        }

    function mudasingkongbukan() {
        var jumlah_1        = document.getElementById('muda24').value - 0;
        var jumlah_2        = document.getElementById('muda26').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2;
        document.getElementById('muda22').value = jumlah_total;
        }

    function ternaksingkongbukan() {
        var jumlah_1        = document.getElementById('ternak24').value - 0;
        var jumlah_2        = document.getElementById('ternak26').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2;
        document.getElementById('ternak22').value = jumlah_total;
        }

    function tanamsingkongbukan() {
        var jumlah_1        = document.getElementById('tanam24').value - 0;
        var jumlah_2        = document.getElementById('tanam26').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2;
        document.getElementById('tanam22').value = jumlah_total;
        }

    function pusosingkongbukan() {
        var jumlah_1        = document.getElementById('puso6').value - 0;
        var jumlah_2        = document.getElementById('puso8').value - 0 ;
        var jumlah_total    = jumlah_1 + jumlah_2;
        document.getElementById('puso22').value = jumlah_total;
        }

    function laporansingkongbukan() {
        var jumlah_1        = document.getElementById('lalu24').value - 0;
        var jumlah_2        = document.getElementById('lalu26').value - 0 ;
        
        var jumlah_3        = document.getElementById('panen24').value - 0;
        var jumlah_4        = document.getElementById('panen26').value - 0 ;
        
        var jumlah_5        = document.getElementById('muda24').value - 0;
        var jumlah_6        = document.getElementById('muda26').value - 0 ;
        
        var jumlah_7        = document.getElementById('ternak24').value - 0;
        var jumlah_8        = document.getElementById('ternak26').value - 0 ;
        
        var jumlah_9        = document.getElementById('tanam24').value - 0;
        var jumlah_10        = document.getElementById('tanam26').value - 0 ;
        
        var jumlah_11        = document.getElementById('puso24').value - 0;
        var jumlah_12        = document.getElementById('puso26').value - 0 ;
        
        var jumlah_bantuan  = jumlah_1 - jumlah_3 - jumlah_5 - jumlah_7 + jumlah_9 - jumlah_11; 
        var jumlah_non      = jumlah_2 - jumlah_4 - jumlah_6 - jumlah_8 + jumlah_10 - jumlah_12;
        var jumlah_total    = (jumlah_1 - jumlah_3 - jumlah_5 - jumlah_7 + jumlah_9 - jumlah_11) + (jumlah_2 - jumlah_4 - jumlah_6 - jumlah_8 + jumlah_10 - jumlah_12);
        
        document.getElementById('laporan22').value = jumlah_total;
        document.getElementById('laporan24').value = jumlah_bantuan;
        document.getElementById('laporan26').value = jumlah_non;
        }

    //hitung jumlah ubi jalar
    function laporanubijalarsawah() {
        var jumlah_1        = document.getElementById('lalu27').value - 0;
        var jumlah_2        = document.getElementById('panen27').value - 0 ;
        var jumlah_3        = document.getElementById('muda27').value - 0 ;
        var jumlah_4        = document.getElementById('ternak27').value - 0 ;
        var jumlah_5        = document.getElementById('tanam27').value - 0 ;
        var jumlah_6        = document.getElementById('puso27').value - 0 ;

        var jumlah_total  = jumlah_1 - jumlah_2 - jumlah_3 - jumlah_4 + jumlah_5 - jumlah_6;

        document.getElementById('laporan27').value = jumlah_total;
        }
    function laporanubijalarbukan() {
        var jumlah_1        = document.getElementById('lalu28').value - 0;
        var jumlah_2        = document.getElementById('panen28').value - 0 ;
        var jumlah_3        = document.getElementById('muda28').value - 0 ;
        var jumlah_4        = document.getElementById('ternak28').value - 0 ;
        var jumlah_5        = document.getElementById('tanam28').value - 0 ;
        var jumlah_6        = document.getElementById('puso28').value - 0 ;

        var jumlah_total  = jumlah_1 - jumlah_2 - jumlah_3 - jumlah_4 + jumlah_5 - jumlah_6;

        document.getElementById('laporan28').value = jumlah_total;
        }

    //hitung jumlah kacang hijau
    function laporankacanghijausawah() {
        var jumlah_1        = document.getElementById('lalu29').value - 0;
        var jumlah_2        = document.getElementById('panen29').value - 0 ;
        var jumlah_3        = document.getElementById('muda29').value - 0 ;
        var jumlah_4        = document.getElementById('ternak29').value - 0 ;
        var jumlah_5        = document.getElementById('tanam29').value - 0 ;
        var jumlah_6        = document.getElementById('puso29').value - 0 ;

        var jumlah_total  = jumlah_1 - jumlah_2 - jumlah_3 - jumlah_4 + jumlah_5 - jumlah_6;

        document.getElementById('laporan29').value = jumlah_total;
        }
    
    function laporankacanghijaubukan() {
        var jumlah_1        = document.getElementById('lalu30').value - 0;
        var jumlah_2        = document.getElementById('panen30').value - 0 ;
        var jumlah_3        = document.getElementById('muda30').value - 0 ;
        var jumlah_4        = document.getElementById('ternak30').value - 0 ;
        var jumlah_5        = document.getElementById('tanam30').value - 0 ;
        var jumlah_6        = document.getElementById('puso30').value - 0 ;

        var jumlah_total  = jumlah_1 - jumlah_2 - jumlah_3 - jumlah_4 + jumlah_5 - jumlah_6;

        document.getElementById('laporan30').value = jumlah_total;
        }

    //hitung jumlah sorgum
    function laporansorgumsawah() {
        var jumlah_1        = document.getElementById('lalu31').value - 0;
        var jumlah_2        = document.getElementById('panen31').value - 0 ;
        var jumlah_3        = document.getElementById('muda31').value - 0 ;
        var jumlah_4        = document.getElementById('ternak31').value - 0 ;
        var jumlah_5        = document.getElementById('tanam31').value - 0 ;
        var jumlah_6        = document.getElementById('puso31').value - 0 ;

        var jumlah_total  = jumlah_1 - jumlah_2 - jumlah_3 - jumlah_4 + jumlah_5 - jumlah_6;

        document.getElementById('laporan31').value = jumlah_total;
        }

    function laporansorgumbukan() {
        var jumlah_1        = document.getElementById('lalu32').value - 0;
        var jumlah_2        = document.getElementById('panen32').value - 0 ;
        var jumlah_3        = document.getElementById('muda32').value - 0 ;
        var jumlah_4        = document.getElementById('ternak32').value - 0 ;
        var jumlah_5        = document.getElementById('tanam32').value - 0 ;
        var jumlah_6        = document.getElementById('puso32').value - 0 ;

        var jumlah_total  = jumlah_1 - jumlah_2 - jumlah_3 - jumlah_4 + jumlah_5 - jumlah_6;

        document.getElementById('laporan32').value = jumlah_total;
        }

    //hitung jumlah gandum
    function laporangandumsawah() {
        var jumlah_1        = document.getElementById('lalu33').value - 0;
        var jumlah_2        = document.getElementById('panen33').value - 0 ;
        var jumlah_3        = document.getElementById('muda33').value - 0 ;
        var jumlah_4        = document.getElementById('ternak33').value - 0 ;
        var jumlah_5        = document.getElementById('tanam33').value - 0 ;
        var jumlah_6        = document.getElementById('puso33').value - 0 ;

        var jumlah_total  = jumlah_1 - jumlah_2 - jumlah_3 - jumlah_4 + jumlah_5 - jumlah_6;

        document.getElementById('laporan33').value = jumlah_total;
        }

    function laporangandumbukan() {
        var jumlah_1        = document.getElementById('lalu34').value - 0;
        var jumlah_2        = document.getElementById('panen34').value - 0 ;
        var jumlah_3        = document.getElementById('muda34').value - 0 ;
        var jumlah_4        = document.getElementById('ternak34').value - 0 ;
        var jumlah_5        = document.getElementById('tanam34').value - 0 ;
        var jumlah_6        = document.getElementById('puso34').value - 0 ;

        var jumlah_total  = jumlah_1 - jumlah_2 - jumlah_3 - jumlah_4 + jumlah_5 - jumlah_6;

        document.getElementById('laporan34').value = jumlah_total;
        }
        
    //hitung jumlah talas
    function laporantalassawah() {
        var jumlah_1        = document.getElementById('lalu35').value - 0;
        var jumlah_2        = document.getElementById('panen35').value - 0 ;
        var jumlah_3        = document.getElementById('muda35').value - 0 ;
        var jumlah_4        = document.getElementById('ternak35').value - 0 ;
        var jumlah_5        = document.getElementById('tanam35').value - 0 ;
        var jumlah_6        = document.getElementById('puso35').value - 0 ;

        var jumlah_total  = jumlah_1 - jumlah_2 - jumlah_3 - jumlah_4 + jumlah_5 - jumlah_6;

        document.getElementById('laporan35').value = jumlah_total;
        }

    function laporantalasbukan() {
        var jumlah_1        = document.getElementById('lalu36').value - 0;
        var jumlah_2        = document.getElementById('panen36').value - 0 ;
        var jumlah_3        = document.getElementById('muda36').value - 0 ;
        var jumlah_4        = document.getElementById('ternak36').value - 0 ;
        var jumlah_5        = document.getElementById('tanam36').value - 0 ;
        var jumlah_6        = document.getElementById('puso36').value - 0 ;

        var jumlah_total  = jumlah_1 - jumlah_2 - jumlah_3 - jumlah_4 + jumlah_5 - jumlah_6;

        document.getElementById('laporan36').value = jumlah_total;
        }
        
    //hitung jumlah ganyong
    function laporanganyongsawah() {
        var jumlah_1        = document.getElementById('lalu37').value - 0;
        var jumlah_2        = document.getElementById('panen37').value - 0 ;
        var jumlah_3        = document.getElementById('muda37').value - 0 ;
        var jumlah_4        = document.getElementById('ternak37').value - 0 ;
        var jumlah_5        = document.getElementById('tanam37').value - 0 ;
        var jumlah_6        = document.getElementById('puso37').value - 0 ;

        var jumlah_total  = jumlah_1 - jumlah_2 - jumlah_3 - jumlah_4 + jumlah_5 - jumlah_6;

        document.getElementById('laporan37').value = jumlah_total;
        }

    function laporanganyongbukan() {
        var jumlah_1        = document.getElementById('lalu38').value - 0;
        var jumlah_2        = document.getElementById('panen38').value - 0 ;
        var jumlah_3        = document.getElementById('muda38').value - 0 ;
        var jumlah_4        = document.getElementById('ternak38').value - 0 ;
        var jumlah_5        = document.getElementById('tanam38').value - 0 ;
        var jumlah_6        = document.getElementById('puso38').value - 0 ;

        var jumlah_total  = jumlah_1 - jumlah_2 - jumlah_3 - jumlah_4 + jumlah_5 - jumlah_6;

        document.getElementById('laporan38').value = jumlah_total;
        }
        
    //hitung jumlah umbi lain
    function laporanumbilainsawah() {
        var jumlah_1        = document.getElementById('lalu39').value - 0;
        var jumlah_2        = document.getElementById('panen39').value - 0 ;
        var jumlah_3        = document.getElementById('muda39').value - 0 ;
        var jumlah_4        = document.getElementById('ternak39').value - 0 ;
        var jumlah_5        = document.getElementById('tanam39').value - 0 ;
        var jumlah_6        = document.getElementById('puso39').value - 0 ;

        var jumlah_total  = jumlah_1 - jumlah_2 - jumlah_3 - jumlah_4 + jumlah_5 - jumlah_6;

        document.getElementById('laporan39').value = jumlah_total;
        }

    function laporanumbilainbukan() {
        var jumlah_1        = document.getElementById('lalu40').value - 0;
        var jumlah_2        = document.getElementById('panen40').value - 0 ;
        var jumlah_3        = document.getElementById('muda40').value - 0 ;
        var jumlah_4        = document.getElementById('ternak40').value - 0 ;
        var jumlah_5        = document.getElementById('tanam40').value - 0 ;
        var jumlah_6        = document.getElementById('puso40').value - 0 ;

        var jumlah_total  = jumlah_1 - jumlah_2 - jumlah_3 - jumlah_4 + jumlah_5 - jumlah_6;

        document.getElementById('laporan40').value = jumlah_total;
        }

</script>