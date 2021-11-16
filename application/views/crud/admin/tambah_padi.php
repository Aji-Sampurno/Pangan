<?php
$getId = $this->session->userdata('session_id');
$getProvinsi = $this->session->userdata('session_provinsi');
$getKabkota = $this->session->userdata('session_kabkota');
$getKecamatan = $this->session->userdata('session_kecamatan');
$getNama = $this->session->userdata('session_nama');
$getUser = $this->session->userdata('session_user');
?>

<?php echo $this->session->flashdata('pesan');?>
<?php echo form_open_multipart ('Admin/tambah_padi');?>
<input type="hidden" name="admin" value="<?php echo $getNama; ?>">
<input type="hidden" name="id_admin" value="<?php echo $getId; ?>">
<input type="hidden" name="provinsi" value="<?php echo $getProvinsi; ?>">
<input type="hidden" name="kabkota" value="<?php echo $getKabkota; ?>">
<input type="hidden" name="kecamatan" value="<?php echo $getKecamatan; ?>">
<div class="row">
    <div class="col-sm-12 mb-3 text-center"> 
	    <h2 class="m-0 fint-weight-bold text-primary">Jenis Padi</h2>
    </div>
</div>
<div class="row">
	<div class="col-sm-6 mb-3"> 
        <div class="card border-primary mb-3">
            <div class="card-header">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Padi Hibrida</label>
                        <input type="hidden" name="padi[]" value="Hibrida">
                    </div>
                    <div class="col-sm-6">
                        <label>Bantuan Pemerintah</label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="Bantuan Pemerintah">
                    </div>
                </div>
            </div>    
            <div class="card-body text-primary">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Lahan</label>
                        <input type="text" readonly class="form-control" name="lahan[]" value="Sawah">
                    </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Yang Lalu</label>
                        <input type="number" class="form-control" name="laporan_lalu[]" value='0'>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen</label>
                        <input type="number" class="form-control" name="panen[]" value='0'> 
                    </div>
                    <div class="col-sm-6">
                        <label>Tanam</label>
                        <input type="number" class="form-control" name="tanam[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Puso/Rusak</label>
                            <input type="number" class="form-control" name="puso[]" value='0'> 
                        </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Laporan</label>
                        <input type="number" class="form-control" name="laporan[]" value='0'> 
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-primary mb-3">
            <div class="card-header">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Padi Hibrida</label>
                        <input type="hidden" name="padi[]" value="Hibrida">
                    </div>
                    <div class="col-sm-6">
                        <label>Bantuan Pemerintah</label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="Bantuan Pemerintah">
                    </div>
                </div>
            </div>    
            <div class="card-body text-primary">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Lahan</label>
                        <input type="text" readonly class="form-control" name="lahan[]" value="Bukan Sawah">
                    </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Yang Lalu</label>
                        <input type="number" class="form-control" name="laporan_lalu[]" value='0'>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen</label>
                        <input type="number" class="form-control" name="panen[]" value='0'> 
                    </div>
                    <div class="col-sm-6">
                        <label>Tanam</label>
                        <input type="number" class="form-control" name="tanam[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Puso/Rusak</label>
                            <input type="number" class="form-control" name="puso[]" value='0'> 
                        </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Laporan</label>
                        <input type="number" class="form-control" name="laporan[]" value='0'> 
                    </div>
                </div>
            </div>
        </div> 
        <div class="card border-primary mb-3">
            <div class="card-header">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Padi Inbrida</label>
                        <input type="hidden" name="padi[]" value="Inbrida">
                    </div>
                    <div class="col-sm-6">
                        <label>Bantuan Pemerintah</label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="Bantuan Pemerintah">
                    </div>
                </div>
            </div>    
            <div class="card-body text-primary">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Lahan</label>
                        <input type="text" readonly class="form-control" name="lahan[]" value="Sawah">
                    </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Yang Lalu</label>
                        <input type="number" class="form-control" name="laporan_lalu[]" value='0'>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen</label>
                        <input type="number" class="form-control" name="panen[]" value='0'> 
                    </div>
                    <div class="col-sm-6">
                        <label>Tanam</label>
                        <input type="number" class="form-control" name="tanam[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Puso/Rusak</label>
                            <input type="number" class="form-control" name="puso[]" value='0'> 
                        </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Laporan</label>
                        <input type="number" class="form-control" name="laporan[]" value='0'> 
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-primary mb-3">
            <div class="card-header">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Padi Inbrida</label>
                        <input type="hidden" name="padi[]" value="Inbrida">
                    </div>
                    <div class="col-sm-6">
                        <label>Bantuan Pemerintah</label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="Bantuan Pemerintah">
                    </div>
                </div>
            </div>    
            <div class="card-body text-primary">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Lahan</label>
                        <input type="text" readonly class="form-control" name="lahan[]" value="Bukan Sawah">
                    </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Yang Lalu</label>
                        <input type="number" class="form-control" name="laporan_lalu[]" value='0'>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen</label>
                        <input type="number" class="form-control" name="panen[]" value='0'> 
                    </div>
                    <div class="col-sm-6">
                        <label>Tanam</label>
                        <input type="number" class="form-control" name="tanam[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Puso/Rusak</label>
                            <input type="number" class="form-control" name="puso[]" value='0'> 
                        </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Laporan</label>
                        <input type="number" class="form-control" name="laporan[]" value='0'> 
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="col-sm-6 mb-3"> 
        <div class="card border-primary mb-3">
            <div class="card-header">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Padi Hibrida</label>
                        <input type="hidden" name="padi[]" value="Hibrida">
                    </div>
                    <div class="col-sm-6">
                        <label>Non Bantuan Pemerintah</label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="Non Bantuan Pemerintah">
                    </div>
                </div>
            </div>    
            <div class="card-body text-primary">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Lahan</label>
                        <input type="text" readonly class="form-control" name="lahan[]" value="Sawah">
                    </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Yang Lalu</label>
                        <input type="number" class="form-control" name="laporan_lalu[]" value='0'>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen</label>
                        <input type="number" class="form-control" name="panen[]" value='0'> 
                    </div>
                    <div class="col-sm-6">
                        <label>Tanam</label>
                        <input type="number" class="form-control" name="tanam[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Puso/Rusak</label>
                            <input type="number" class="form-control" name="puso[]" value='0'> 
                        </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Laporan</label>
                        <input type="number" class="form-control" name="laporan[]" value='0'> 
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-primary mb-3">
            <div class="card-header">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Padi Hibrida</label>
                        <input type="hidden" name="padi[]" value="Hibrida">
                    </div>
                    <div class="col-sm-6">
                        <label>Non Bantuan Pemerintah</label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="Non Bantuan Pemerintah">
                    </div>
                </div>
            </div>    
            <div class="card-body text-primary">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Lahan</label>
                        <input type="text" readonly class="form-control" name="lahan[]" value="Bukan Sawah">
                    </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Yang Lalu</label>
                        <input type="number" class="form-control" name="laporan_lalu[]" value='0'>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen</label>
                        <input type="number" class="form-control" name="panen[]" value='0'> 
                    </div>
                    <div class="col-sm-6">
                        <label>Tanam</label>
                        <input type="number" class="form-control" name="tanam[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Puso/Rusak</label>
                            <input type="number" class="form-control" name="puso[]" value='0'> 
                        </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Laporan</label>
                        <input type="number" class="form-control" name="laporan[]" value='0'> 
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-primary mb-3">
            <div class="card-header">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Padi Inbrida</label>
                        <input type="hidden" name="padi[]" value="Inbrida">
                    </div>
                    <div class="col-sm-6">
                        <label>Non Bantuan Pemerintah</label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="Non Bantuan Pemerintah">
                    </div>
                </div>
            </div>    
            <div class="card-body text-primary">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Lahan</label>
                        <input type="text" readonly class="form-control" name="lahan[]" value="Sawah">
                    </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Yang Lalu</label>
                        <input type="number" class="form-control" name="laporan_lalu[]" value='0'>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen</label>
                        <input type="number" class="form-control" name="panen[]" value='0'> 
                    </div>
                    <div class="col-sm-6">
                        <label>Tanam</label>
                        <input type="number" class="form-control" name="tanam[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Puso/Rusak</label>
                            <input type="number" class="form-control" name="puso[]" value='0'> 
                        </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Laporan</label>
                        <input type="number" class="form-control" name="laporan[]" value='0'> 
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-primary mb-3">
            <div class="card-header">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Padi Inbrida</label>
                        <input type="hidden" name="padi[]" value="Inbrida">
                    </div>
                    <div class="col-sm-6">
                        <label>Non Bantuan Pemerintah</label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="Non Bantuan Pemerintah">
                    </div>
                </div>
            </div>    
            <div class="card-body text-primary">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Lahan</label>
                        <input type="text" readonly class="form-control" name="lahan[]" value="Bukan Sawah">
                    </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Yang Lalu</label>
                        <input type="number" class="form-control" name="laporan_lalu[]" value='0'>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen</label>
                        <input type="number" class="form-control" name="panen[]" value='0'> 
                    </div>
                    <div class="col-sm-6">
                        <label>Tanam</label>
                        <input type="number" class="form-control" name="tanam[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Puso/Rusak</label>
                            <input type="number" class="form-control" name="puso[]" value='0'> 
                        </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Laporan</label>
                        <input type="number" class="form-control" name="laporan[]" value='0'> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 mb-3 text-center"> 
	    <h2 class="m-0 fint-weight-bold text-primary">Jenis Pengairan</h2>
    </div>
</div>
<div class="row">
	<div class="col-sm-6 mb-3"> 
        <div class="card border-primary mb-3">
            <div class="card-header">
                Sawah Irigasi
                <input type="hidden" name="jenis_pengairan[]" value="Sawah Irigasi">
            </div>    
            <div class="card-body text-primary">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Lahan</label>
                        <input type="text" readonly class="form-control" name="lahan[]" value="Sawah">
                    </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Yang Lalu</label>
                        <input type="number" class="form-control" name="laporan_lalu[]" value='0'>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen</label>
                        <input type="number" class="form-control" name="panen_air[]" value='0'> 
                    </div>
                    <div class="col-sm-6">
                        <label>Tanam</label>
                        <input type="number" class="form-control" name="tanam_air[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Puso/Rusak</label>
                            <input type="number" class="form-control" name="puso_air[]" value='0'> 
                        </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Laporan</label>
                        <input type="number" class="form-control" name="laporan_air[]" value='0'> 
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-primary mb-3">
            <div class="card-header">
                Sawah Tadah Hujan
                <input type="hidden" name="jenis_pengairan[]" value="Sawah tadah Hujan">
            </div>    
            <div class="card-body text-primary">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Lahan</label>
                        <input type="text" readonly class="form-control" name="lahan[]" value="Sawah">
                    </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Yang Lalu</label>
                        <input type="number" class="form-control" name="laporan_lalu[]" value='0'>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen</label>
                        <input type="number" class="form-control" name="panen_air[]" value='0'> 
                    </div>
                    <div class="col-sm-6">
                        <label>Tanam</label>
                        <input type="number" class="form-control" name="tanam_air[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Puso/Rusak</label>
                            <input type="number" class="form-control" name="puso_air[]" value='0'> 
                        </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Laporan</label>
                        <input type="number" class="form-control" name="laporan_air[]" value='0'> 
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="col-sm-6 mb-3"> 
        <div class="card border-primary mb-3">
            <div class="card-header">
                Sawah Rawa Pasang Surut
                <input type="hidden" name="jenis_pengairan[]" value="Sawah Rawa Pasang Surut">
            </div>    
            <div class="card-body text-primary">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Lahan</label>
                        <input type="text" readonly class="form-control" name="lahan[]" value="Sawah">
                    </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Yang Lalu</label>
                        <input type="number" class="form-control" name="laporan_lalu[]" value='0'>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen</label>
                        <input type="number" class="form-control" name="panen_air[]" value='0'> 
                    </div>
                    <div class="col-sm-6">
                        <label>Tanam</label>
                        <input type="number" class="form-control" name="tanam_air[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Puso/Rusak</label>
                            <input type="number" class="form-control" name="puso_air[]" value='0'> 
                        </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Laporan</label>
                        <input type="number" class="form-control" name="laporan_air[]" value='0'> 
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-primary mb-3">
            <div class="card-header">
                Sawah Rawa Lebak
                <input type="hidden" name="jenis_pengairan[]" value="Sawah Rawa Lebak">
            </div>    
            <div class="card-body text-primary">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Lahan</label>
                        <input type="text" readonly class="form-control" name="lahan[]" value="Sawah">
                    </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Yang Lalu</label>
                        <input type="number" class="form-control" name="laporan_lalu[]" value='0'>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen</label>
                        <input type="number" class="form-control" name="panen_air[]" value='0'> 
                    </div>
                    <div class="col-sm-6">
                        <label>Tanam</label>
                        <input type="number" class="form-control" name="tanam_air[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Puso/Rusak</label>
                            <input type="number" class="form-control" name="puso_air[]" value='0'> 
                        </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Laporan</label>
                        <input type="number" class="form-control" name="laporan_air[]" value='0'> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 mb-3 text-center"> 
	    <h2 class="m-0 fint-weight-bold text-primary">Rehab Jaringan Irigasi Tersier</h2>
    </div>
</div>
<div class="row">
	<div class="col-sm-12 mb-3"> 
        <div class="card border-primary mb-3">
            <div class="card-header">
                Rehab Jaringan Irigasi Tersier
            </div>    
            <div class="card-body text-primary">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen</label>
                        <input type="number" class="form-control" name="panen_rehab[]" value='0'> 
                    </div>
                    <div class="col-sm-6">
                        <label>Tanam</label>
                        <input type="number" class="form-control" name="tanam_rehab[]" value='0'> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-success btn-icon-split">
    <span class="text">Tambah</span>
</button>      
</form><hr> 