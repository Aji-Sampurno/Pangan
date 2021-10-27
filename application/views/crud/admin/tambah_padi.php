<?php
$getId = $this->session->userdata('session_id');
$getProvinsi = $this->session->userdata('session_provinsi');
$getKabkota = $this->session->userdata('session_kabkota');
$getKecamatan = $this->session->userdata('session_kecamatan');
$getNama = $this->session->userdata('session_nama');
$getUser = $this->session->userdata('session_user');
?>

<?php echo form_open_multipart ('Admin/tambah_padi');?>
<div class="row">
	<div class="col-sm-6 mb-3"> 
        <div class="card border-primary mb-3">
            <div class="card-header">
                Padi Hibrida
                <input type="hidden" name="padi[]" value="Hibrida">
                <input type="hidden" name="provinsi" value="<?php echo $getProvinsi; ?>">
                <input type="hidden" name="kabkota" value="<?php echo $getKabkota; ?>">
                <input type="hidden" name="kecamatan" value="<?php echo $getKecamatan; ?>">
            </div>    
            <div class="card-body text-primary">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Lahan Sawah</label>
                        <input type="hidden" class="form-control" name="lahan[]" value="Sawah">
                    </div>
                    <div class="col-sm-6">
                        <label>Bantuan Pemerintah</label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="Bantuan Pemerintah">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen</label>
                        <input type="number" class="form-control" name="panen[]" placeholder="Panen" required=""> 
                    </div>
                    <div class="col-sm-6">
                        <label>Tanam</label>
                        <input type="number" class="form-control" name="tanam[]" placeholder="Tanam" required=""> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Puso/Rusak</label>
                            <input type="number" class="form-control" name="puso[]" placeholder="Puso/Rusak" required=""> 
                        </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Laporan</label>
                        <input type="number" class="form-control" name="laporan[]" placeholder="Tanaman Akhir Bulan Lalu" required=""> 
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-primary mb-3">
            <div class="card-header">
                Padi Hibrida
                <input type="hidden" name="padi[]" value="Hibrida">
                <input type="hidden" name="provinsi" value="<?php echo $getProvinsi; ?>">
                <input type="hidden" name="kabkota" value="<?php echo $getKabkota; ?>">
                <input type="hidden" name="kecamatan" value="<?php echo $getKecamatan; ?>">
            </div>    
            <div class="card-body text-primary">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Lahan Bukan Sawah</label>
                        <input type="hidden" class="form-control" name="lahan[]" value="Bukan Sawah">
                    </div>
                    <div class="col-sm-6">
                        <label>Bantuan Pemerintah</label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="Bantuan Pemerintah">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen</label>
                        <input type="number" class="form-control" name="panen[]" placeholder="Panen" required=""> 
                    </div>
                    <div class="col-sm-6">
                        <label>Tanam</label>
                        <input type="number" class="form-control" name="tanam[]" placeholder="Tanam" required=""> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Puso/Rusak</label>
                            <input type="number" class="form-control" name="puso[]" placeholder="Puso/Rusak" required=""> 
                        </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Laporan</label>
                        <input type="number" class="form-control" name="laporan[]" placeholder="Tanaman Akhir Bulan Lalu" required=""> 
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-primary mb-3">
            <div class="card-header">
                Padi Inbrida
                <input type="hidden" name="padi[]" value="Inbrida">
                <input type="hidden" name="provinsi" value="<?php echo $getProvinsi; ?>">
                <input type="hidden" name="kabkota" value="<?php echo $getKabkota; ?>">
                <input type="hidden" name="kecamatan" value="<?php echo $getKecamatan; ?>">
            </div>    
            <div class="card-body text-primary">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Lahan Sawah</label>
                        <input type="hidden" class="form-control" name="lahan[]" value="Sawah">
                    </div>
                    <div class="col-sm-6">
                        <label>Bantuan Pemerintah</label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="Bantuan Pemerintah">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen</label>
                        <input type="number" class="form-control" name="panen[]" placeholder="Panen" required=""> 
                    </div>
                    <div class="col-sm-6">
                        <label>Tanam</label>
                        <input type="number" class="form-control" name="tanam[]" placeholder="Tanam" required=""> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Puso/Rusak</label>
                            <input type="number" class="form-control" name="puso[]" placeholder="Puso/Rusak" required=""> 
                        </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Laporan</label>
                        <input type="number" class="form-control" name="laporan[]" placeholder="Tanaman Akhir Bulan Lalu" required=""> 
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-primary mb-3">
            <div class="card-header">
                Padi Inbrida
                <input type="hidden" name="padi[]" value="Inbrida">
                <input type="hidden" name="provinsi" value="<?php echo $getProvinsi; ?>">
                <input type="hidden" name="kabkota" value="<?php echo $getKabkota; ?>">
                <input type="hidden" name="kecamatan" value="<?php echo $getKecamatan; ?>">
            </div>    
            <div class="card-body text-primary">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Lahan Bukan Sawah</label>
                        <input type="hidden" class="form-control" name="lahan[]" value="Bukan Sawah">
                    </div>
                    <div class="col-sm-6">
                        <label>Bantuan Pemerintah</label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="Bantuan Pemerintah">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen</label>
                        <input type="number" class="form-control" name="panen[]" placeholder="Panen" required=""> 
                    </div>
                    <div class="col-sm-6">
                        <label>Tanam</label>
                        <input type="number" class="form-control" name="tanam[]" placeholder="Tanam" required=""> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Puso/Rusak</label>
                            <input type="number" class="form-control" name="puso[]" placeholder="Puso/Rusak" required=""> 
                        </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Laporan</label>
                        <input type="number" class="form-control" name="laporan[]" placeholder="Tanaman Akhir Bulan Lalu" required=""> 
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="col-sm-6 mb-3"> 
        <div class="card border-primary mb-3">
            <div class="card-header">
                Padi Hibrida
                <input type="hidden" name="padi[]" value="Hibrida">
                <input type="hidden" name="provinsi" value="<?php echo $getProvinsi; ?>">
                <input type="hidden" name="kabkota" value="<?php echo $getKabkota; ?>">
                <input type="hidden" name="kecamatan" value="<?php echo $getKecamatan; ?>">
            </div>    
            <div class="card-body text-primary">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Lahan Sawah</label>
                        <input type="hidden" class="form-control" name="lahan[]" value="Sawah">
                    </div>
                    <div class="col-sm-6">
                        <label>Non Bantuan Pemerintah</label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="Non Bantuan Pemerintah">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen</label>
                        <input type="number" class="form-control" name="panen[]" placeholder="Panen" required=""> 
                    </div>
                    <div class="col-sm-6">
                        <label>Tanam</label>
                        <input type="number" class="form-control" name="tanam[]" placeholder="Tanam" required=""> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Puso/Rusak</label>
                            <input type="number" class="form-control" name="puso[]" placeholder="Puso/Rusak" required=""> 
                        </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Laporan</label>
                        <input type="number" class="form-control" name="laporan[]" placeholder="Tanaman Akhir Bulan Lalu" required=""> 
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-primary mb-3">
            <div class="card-header">
                Padi Hibrida
                <input type="hidden" name="padi[]" value="Hibrida">
                <input type="hidden" name="provinsi" value="<?php echo $getProvinsi; ?>">
                <input type="hidden" name="kabkota" value="<?php echo $getKabkota; ?>">
                <input type="hidden" name="kecamatan" value="<?php echo $getKecamatan; ?>">
            </div>    
            <div class="card-body text-primary">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Lahan Bukan Sawah</label>
                        <input type="hidden" class="form-control" name="lahan[]" value="Bukan Sawah">
                    </div>
                    <div class="col-sm-6">
                        <label>Non Bantuan Pemerintah</label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="Non Bantuan Pemerintah">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen</label>
                        <input type="number" class="form-control" name="panen[]" placeholder="Panen" required=""> 
                    </div>
                    <div class="col-sm-6">
                        <label>Tanam</label>
                        <input type="number" class="form-control" name="tanam[]" placeholder="Tanam" required=""> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Puso/Rusak</label>
                            <input type="number" class="form-control" name="puso[]" placeholder="Puso/Rusak" required=""> 
                        </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Laporan</label>
                        <input type="number" class="form-control" name="laporan[]" placeholder="Tanaman Akhir Bulan Lalu" required=""> 
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-primary mb-3">
            <div class="card-header">
                Padi Inbrida
                <input type="hidden" name="padi[]" value="Inbrida">
                <input type="hidden" name="provinsi" value="<?php echo $getProvinsi; ?>">
                <input type="hidden" name="kabkota" value="<?php echo $getKabkota; ?>">
                <input type="hidden" name="kecamatan" value="<?php echo $getKecamatan; ?>">
            </div>    
            <div class="card-body text-primary">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Lahan Sawah</label>
                        <input type="hidden" class="form-control" name="lahan[]" value="Sawah">
                    </div>
                    <div class="col-sm-6">
                        <label>Non Bantuan Pemerintah</label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="Non Bantuan Pemerintah">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen</label>
                        <input type="number" class="form-control" name="panen[]" placeholder="Panen" required=""> 
                    </div>
                    <div class="col-sm-6">
                        <label>Tanam</label>
                        <input type="number" class="form-control" name="tanam[]" placeholder="Tanam" required=""> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Puso/Rusak</label>
                            <input type="number" class="form-control" name="puso[]" placeholder="Puso/Rusak" required=""> 
                        </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Laporan</label>
                        <input type="number" class="form-control" name="laporan[]" placeholder="Tanaman Akhir Bulan Lalu" required=""> 
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-primary mb-3">
            <div class="card-header">
                Padi Inbrida
                <input type="hidden" name="padi[]" value="Inbrida">
                <input type="hidden" name="provinsi" value="<?php echo $getProvinsi; ?>">
                <input type="hidden" name="kabkota" value="<?php echo $getKabkota; ?>">
                <input type="hidden" name="kecamatan" value="<?php echo $getKecamatan; ?>">
            </div>    
            <div class="card-body text-primary">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Lahan Bukan Sawah</label>
                        <input type="hidden" class="form-control" name="lahan[]" value="Bukan Sawah">
                    </div>
                    <div class="col-sm-6">
                        <label>Non Bantuan Pemerintah</label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="Non Bantuan Pemerintah">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen</label>
                        <input type="number" class="form-control" name="panen[]" placeholder="Panen" required=""> 
                    </div>
                    <div class="col-sm-6">
                        <label>Tanam</label>
                        <input type="number" class="form-control" name="tanam[]" placeholder="Tanam" required=""> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Puso/Rusak</label>
                            <input type="number" class="form-control" name="puso[]" placeholder="Puso/Rusak" required=""> 
                        </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Laporan</label>
                        <input type="number" class="form-control" name="laporan[]" placeholder="Tanaman Akhir Bulan Lalu" required=""> 
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