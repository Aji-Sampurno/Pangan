<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');

$bulan = $this->input->get('bulan', true);
$tahun = $this->input->get('tahun',true);
$provinsi = $this->input->get('provinsi',true);
$kabkota = $this->input->get('kabkota',true);
$kecamatan = $this->input->get('kecamatan',true);

// jumlah padi sawah
$panens = $this->db->query("SELECT SUM(panen) as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='sawah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanams = $this->db->query("SELECT SUM(tanam) as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='sawah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusos = $this->db->query("SELECT SUM(puso) as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='sawah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// jumlah padi bukan sawah
$panenb = $this->db->query("SELECT SUM(panen) as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='bukan sawah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamb = $this->db->query("SELECT SUM(tanam) as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='bukan sawah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusob = $this->db->query("SELECT SUM(puso) as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='bukan sawah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// hibrida sawah
$panenhs = $this->db->query("SELECT SUM(panen) as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='sawah' AND jenis_padi='hibrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamhs = $this->db->query("SELECT SUM(tanam) as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='sawah' AND jenis_padi='hibrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusohs = $this->db->query("SELECT SUM(puso) as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='sawah' AND jenis_padi='hibrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// hibrida bukan sawah
$panenhb = $this->db->query("SELECT SUM(panen) as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='bukan sawah' AND jenis_padi='hibrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamhb = $this->db->query("SELECT SUM(tanam) as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='bukan sawah' AND jenis_padi='hibrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusohb = $this->db->query("SELECT SUM(puso) as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='bukan sawah' AND jenis_padi='hibrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// inbrida sawah
$panenis = $this->db->query("SELECT SUM(panen) as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='sawah' AND jenis_padi='inbrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamis = $this->db->query("SELECT SUM(tanam) as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='sawah' AND jenis_padi='inbrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusois = $this->db->query("SELECT SUM(puso) as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='sawah' AND jenis_padi='inbrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// inbrida bukan sawah
$panenib = $this->db->query("SELECT SUM(panen) as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='bukan sawah' AND jenis_padi='inbrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamib = $this->db->query("SELECT SUM(tanam) as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='bukan sawah' AND jenis_padi='inbrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusoib = $this->db->query("SELECT SUM(puso) as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='bukan sawah' AND jenis_padi='inbrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// jenis padi sawah
$panenhsb = $this->db->query("SELECT panen as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='sawah' AND jenis_bantuan='bantuan pemerintah' AND jenis_padi='hibrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenhsn = $this->db->query("SELECT panen as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='sawah' AND jenis_bantuan='non bantuan pemerintah' AND jenis_padi='hibrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenisb = $this->db->query("SELECT panen as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='sawah' AND jenis_bantuan='bantuan pemerintah' AND jenis_padi='inbrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenisn = $this->db->query("SELECT panen as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='sawah' AND jenis_bantuan='non bantuan pemerintah' AND jenis_padi='inbrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

$tanamhsb = $this->db->query("SELECT tanam as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='sawah' AND jenis_bantuan='bantuan pemerintah' AND jenis_padi='hibrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamhsn = $this->db->query("SELECT tanam as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='sawah' AND jenis_bantuan='non bantuan pemerintah' AND jenis_padi='hibrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamisb = $this->db->query("SELECT tanam as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='sawah' AND jenis_bantuan='bantuan pemerintah' AND jenis_padi='inbrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamisn = $this->db->query("SELECT tanam as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='sawah' AND jenis_bantuan='non bantuan pemerintah' AND jenis_padi='inbrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

$pusohsb = $this->db->query("SELECT puso as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='sawah' AND jenis_bantuan='bantuan pemerintah' AND jenis_padi='hibrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusohsn = $this->db->query("SELECT puso as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='sawah' AND jenis_bantuan='non bantuan pemerintah' AND jenis_padi='hibrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusoisb = $this->db->query("SELECT puso as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='sawah' AND jenis_bantuan='bantuan pemerintah' AND jenis_padi='inbrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusoisn = $this->db->query("SELECT puso as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='sawah' AND jenis_bantuan='non bantuan pemerintah' AND jenis_padi='inbrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// jenis padi bukan sawah
$panenhbb = $this->db->query("SELECT panen as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='bukan sawah' AND jenis_bantuan='bantuan pemerintah' AND jenis_padi='hibrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenhbn = $this->db->query("SELECT panen as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='bukan sawah' AND jenis_bantuan='non bantuan pemerintah' AND jenis_padi='hibrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenibb = $this->db->query("SELECT panen as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='bukan sawah' AND jenis_bantuan='bantuan pemerintah' AND jenis_padi='inbrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenibn = $this->db->query("SELECT panen as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='bukan sawah' AND jenis_bantuan='non bantuan pemerintah' AND jenis_padi='inbrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

$tanamhbb = $this->db->query("SELECT tanam as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='bukan sawah' AND jenis_bantuan='bantuan pemerintah' AND jenis_padi='hibrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamhbn = $this->db->query("SELECT tanam as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='bukan sawah' AND jenis_bantuan='non bantuan pemerintah' AND jenis_padi='hibrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamibb = $this->db->query("SELECT tanam as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='bukan sawah' AND jenis_bantuan='bantuan pemerintah' AND jenis_padi='inbrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamibn = $this->db->query("SELECT tanam as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='bukan sawah' AND jenis_bantuan='non bantuan pemerintah' AND jenis_padi='inbrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

$pusohbb = $this->db->query("SELECT puso as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='bukan sawah' AND jenis_bantuan='bantuan pemerintah' AND jenis_padi='hibrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusohbn = $this->db->query("SELECT puso as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='bukan sawah' AND jenis_bantuan='non bantuan pemerintah' AND jenis_padi='hibrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusoibb = $this->db->query("SELECT puso as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='bukan sawah' AND jenis_bantuan='bantuan pemerintah' AND jenis_padi='inbrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusoibn = $this->db->query("SELECT puso as total FROM padi WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_lahan='bukan sawah' AND jenis_bantuan='non bantuan pemerintah' AND jenis_padi='inbrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// jenis pengairan
$panenirigasi = $this->db->query("SELECT panen as total FROM pengairan WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_pengairan='sawah irigasi' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenhujan = $this->db->query("SELECT panen as total FROM pengairan WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_pengairan='sawah tadah hujan' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panensurut = $this->db->query("SELECT panen as total FROM pengairan WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_pengairan='sawah rawa pasang surut' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenlebak = $this->db->query("SELECT panen as total FROM pengairan WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_pengairan='sawah rawa lebak' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

$tanamirigasi = $this->db->query("SELECT tanam as total FROM pengairan WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_pengairan='sawah irigasi' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamhujan = $this->db->query("SELECT tanam as total FROM pengairan WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_pengairan='sawah tadah hujan' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamsurut = $this->db->query("SELECT tanam as total FROM pengairan WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_pengairan='sawah rawa pasang surut' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamlebak = $this->db->query("SELECT tanam as total FROM pengairan WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_pengairan='sawah rawa lebak' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

$pusoirigasi = $this->db->query("SELECT puso as total FROM pengairan WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_pengairan='sawah irigasi' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusohujan = $this->db->query("SELECT puso as total FROM pengairan WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_pengairan='sawah tadah hujan' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusosurut = $this->db->query("SELECT puso as total FROM pengairan WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_pengairan='sawah rawa pasang surut' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusolebak = $this->db->query("SELECT puso as total FROM pengairan WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND jenis_pengairan='sawah rawa lebak' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// rehab jaringan irigasi tersier
$panenrehab = $this->db->query("SELECT panen_rehab as total FROM rehab WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamrehab = $this->db->query("SELECT tanam_rehab as total FROM rehab WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

?>
<form method="get">
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
                            <select class="form-control w-100" name="provinsi">
                                <option selected>
                                    <?php
                                        if (empty($provinsi)) {echo 'Pilih Provinsi';} 
                                        else {echo $provinsi;}
                                    ?>   
                                </option>
                                <option value="Jawa Timur" >Jawa Timur</option>
                            </select>
                            <!-- <input type="text" class="form-control" name="provinsi" value=> -->
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row justify-content-end">
                        <div class="col-auto">
                            <h6 class="p-2 text-primary">BULAN</h6>
                        </div>
                        <div class="col-lg-4 col-sm-auto">
                            <select class="form-control w-100" name="bulan">
                                <option selected>
                                    <?php
                                        if (empty($bulan)) {echo 'Pilih Bulan';} 
                                        elseif ($bulan=='1') {echo 'Januari';}
                                        elseif ($bulan=='2') {echo 'Februari';}
                                        elseif ($bulan=='3') {echo 'Maret';}
                                        elseif ($bulan=='4') {echo 'April';}
                                        elseif ($bulan=='5') {echo 'Mei';}
                                        elseif ($bulan=='6') {echo 'Juni';}
                                        elseif ($bulan=='7') {echo 'Juli';}
                                        elseif ($bulan=='8') {echo 'Agustus';}
                                        elseif ($bulan=='9') {echo 'September';}
                                        elseif ($bulan=='10') {echo 'Oktober';}
                                        elseif ($bulan=='11') {echo 'November';}
                                        else {echo 'Desember';}
                                    ?>   
                                </option>
                                <option value="1" >Januari</option>
                                <option value="2" >Februari</option>
                                <option value="3" >Maret</option>
                                <option value="4" >April</option>
                                <option value="5" >Mei</option>
                                <option value="6" >Juni</option>
                                <option value="7" >Juli</option>
                                <option value="8" >Agustus</option>
                                <option value="9" >September</option>
                                <option value="10" >Oktober</option>
                                <option value="11" >November</option>
                                <option value="12" >Desember</option>
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
                            <select class="form-control w-100" name="kabkota">
                                <option selected>
                                    <?php
                                        if (empty($kabkota)) {echo 'Pilih Kab./Kota';} 
                                        else {echo $kabkota;}
                                    ?> 
                                </option>
                                <option value="Kabupaten Malang" >Kabupaten Malang</option>
                            </select>
                            <!-- <input type="text" class="form-control" name="kabkota" value=> -->
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row justify-content-end">
                        <div class="col-auto">
                            <h6 class="p-2 text-primary">TAHUN</h6>
                        </div>
                        <div class="col-auto">
                            <input type="number" class="form-control" name="tahun" value=<?= $tahun ?>>
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
                            <select class="form-control w-100" name="kecamatan">
                                <option selected>
                                    <?php
                                        if (empty($kecamatan)) {echo 'Pilih Kecamatan';} 
                                        else {echo $kecamatan;}
                                    ?> 
                                </option>
                                <option value="Kecamatan Kepanjen" >Kecamatan Kepanjen</option>
                            </select>
                            <!-- <input type="text" class="form-control" name="kecamatan" value=<?= $kecamatan ?>> -->
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row justify-content-end">
                        <div class="col-auto m-2">
                            <button type="submit" class="btn btn-success btn-icon-split">
                                <span class="text">Tampilkan</span>
                            </button>   
                        </div>
                        <div class="col-auto m-2">
                            <button type="submit" class="btn btn-success btn-icon-split">
                                <span class="text">Cetak</span>
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
                            <!--jumlah padi-->
                            <tr>
                                <td></td>
                                <td class="text-left">JUMLAH PADI(1a+1b)</td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panens['total'])) {echo '0';} 
                                        else {
                                            echo $panens['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanams['total'])) {echo '0';} 
                                        else {
                                            echo $tanams['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusos['total'])) {echo '0';} 
                                        else {
                                            echo $pusos['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenb['total'])) {echo '0';} 
                                        else {
                                            echo $panenb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamb['total'])) {echo '0';} 
                                        else {
                                            echo $tanamb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusob['total'])) {echo '0';} 
                                        else {
                                            echo $pusob['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
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
                            <!--hibridia-->
                            <tr>
                                <td></td>
                                <td class="text-left">a.Hibrida</td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenhs['total'])) {echo '0';} 
                                        else {
                                            echo $panenhs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamhs['total'])) {echo '0';} 
                                        else {
                                            echo $tanamhs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusohs['total'])) {echo '0';} 
                                        else {
                                            echo $pusohs['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenhb['total'])) {echo '0';} 
                                        else {
                                            echo $panenhb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamhb['total'])) {echo '0';} 
                                        else {
                                            echo $tanamhb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusohb['total'])) {echo '0';} 
                                        else {
                                            echo $pusohb['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td class="text-left">1). Bantuan Pemerintah</td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenhsb['total'])) {echo '0';} 
                                        else {
                                            echo $panenhsb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamhsb['total'])) {echo '0';} 
                                        else {
                                            echo $tanamhsb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusohsb['total'])) {echo '0';} 
                                        else {
                                            echo $pusohsb['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenhbb['total'])) {echo '0';} 
                                        else {
                                            echo $panenhbb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamhbb['total'])) {echo '0';} 
                                        else {
                                            echo $tanamhbb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusohbb['total'])) {echo '0';} 
                                        else {
                                            echo $pusohbb['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td class="text-left">2).Non Bantuan Pemerintah</td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenhsn['total'])) {echo '0';} 
                                        else {
                                            echo $panenhsn['total'];
                                        }
                                    ?>  
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamhsn['total'])) {echo '0';} 
                                        else {
                                            echo $tanamhsn['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusohsn['total'])) {echo '0';} 
                                        else {
                                            echo $pusohsn['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenhbb['total'])) {echo '0';} 
                                        else {
                                            echo $panenhbb['total'];
                                        }
                                    ?>  
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamhbn['total'])) {echo '0';} 
                                        else {
                                            echo $tanamhbn['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusohbn['total'])) {echo '0';} 
                                        else {
                                            echo $pusohbn['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                            </tr>
                            <!--inbridia-->
                            <tr>
                                <td></td>
                                <td class="text-left">b. Inbrida</td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenis['total'])) {echo '0';} 
                                        else {
                                            echo $panenis['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamis['total'])) {echo '0';} 
                                        else {
                                            echo $tanamis['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusois['total'])) {echo '0';} 
                                        else {
                                            echo $pusois['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenib['total'])) {echo '0';} 
                                        else {
                                            echo $panenib['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamib['total'])) {echo '0';} 
                                        else {
                                            echo $tanamib['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusoib['total'])) {echo '0';} 
                                        else {
                                            echo $pusoib['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td class="text-left">1).Bantuan Pemerintah</td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenisb['total'])) {echo '0';} 
                                        else {
                                            echo $panenisb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamisb['total'])) {echo '0';} 
                                        else {
                                            echo $tanamisb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusoisb['total'])) {echo '0';} 
                                        else {
                                            echo $pusoisb['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenibb['total'])) {echo '0';} 
                                        else {
                                            echo $panenibb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamibb['total'])) {echo '0';} 
                                        else {
                                            echo $tanamibb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusoibb['total'])) {echo '0';} 
                                        else {
                                            echo $pusoibb['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td class="text-left">2).Non Bantuan Pemerintah</td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenisn['total'])) {echo '0';} 
                                        else {
                                            echo $panenisn['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamisn['total'])) {echo '0';} 
                                        else {
                                            echo $tanamisn['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusoisn['total'])) {echo '0';} 
                                        else {
                                            echo $pusoisn['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenibn['total'])) {echo '0';} 
                                        else {
                                            echo $panenibn['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamibn['total'])) {echo '0';} 
                                        else {
                                            echo $tanamibn['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusoibn['total'])) {echo '0';} 
                                        else {
                                            echo $pusoibn['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                            </tr>

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

                            <tr>
                                <td></td>
                                <td class="text-left">a. Sawah Irigasi</td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenirigasi['total'])) {echo '0';} 
                                        else {
                                            echo $panenirigasi['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamirigasi['total'])) {echo '0';} 
                                        else {
                                            echo $tanamirigasi['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusoirigasi['total'])) {echo '0';} 
                                        else {
                                            echo $pusoirigasi['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td class="text-left">b. Sawah Tadah Hujan</td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenhujan['total'])) {echo '0';} 
                                        else {
                                            echo $panenhujan['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamhujan['total'])) {echo '0';} 
                                        else {
                                            echo $tanamhujan['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusohujan['total'])) {echo '0';} 
                                        else {
                                            echo $pusohujan['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td class="text-left">c. Sawah Rawa Pasang Surut</td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panensurut['total'])) {echo '0';} 
                                        else {
                                            echo $panensurut['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamsurut['total'])) {echo '0';} 
                                        else {
                                            echo $tanamsurut['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusosurut['total'])) {echo '0';} 
                                        else {
                                            echo $pusosurut['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td class="text-left">d. Sawah Rawa Lebak</td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenlebak['total'])) {echo '0';} 
                                        else {
                                            echo $panenlebak['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamlebak['total'])) {echo '0';} 
                                        else {
                                            echo $tanamlebak['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusolebak['total'])) {echo '0';} 
                                        else {
                                            echo $pusolebak['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                                <td class="table-dark"></td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td class="text-left">Rehab Jaringan Irigasi Tersier</td>
                                <td class="table-dark"></td>
                                <td>
                                    <?php
                                        if (empty($panenrehab['total'])) {echo '0';} 
                                        else {
                                            echo $panenrehab['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamrehab['total'])) {echo '0';} 
                                        else {
                                            echo $tanamrehab['total'];
                                        }
                                    ?>   
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
                    <div class="col-sm-12">
                        <div class="px-3">    
                            <div class="row">
                                <div class="col-12">
                                    <div class="row justify-content-end">
                                        <div class="col-auto">
                                            <h6 class="text-primary"></h6>
<pre>
<?php echo $provinsi.", " .$kabkota.", ".$kecamatan.", ".$bulan.", ".$tahun ?>

Petugas Pengumpul Data  :
1. Nama Lengkap         :
2. jabatan              :
3. NIP                  :
4. No.Telp/HP           :


5. Tanda Tangan         :
</pre>
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