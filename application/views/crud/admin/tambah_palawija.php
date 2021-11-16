<?php
$getId = $this->session->userdata('session_id');
$getProvinsi = $this->session->userdata('session_provinsi');
$getKabkota = $this->session->userdata('session_kabkota');
$getKecamatan = $this->session->userdata('session_kecamatan');
$getNama = $this->session->userdata('session_nama');
$getUser = $this->session->userdata('session_user');
?>

<?php echo $this->session->flashdata('pesan');?>
<?php echo form_open_multipart ('Admin/tambah_palawija');?>
<input type="hidden" name="admin" value="<?php echo $getNama; ?>">
<input type="hidden" name="provinsi" value="<?php echo $getProvinsi; ?>">
<input type="hidden" name="kabkota" value="<?php echo $getKabkota; ?>">
<input type="hidden" name="kecamatan" value="<?php echo $getKecamatan; ?>">
<div class="row">
    <div class="col-sm-12 mb-3 text-center"> 
	    <h2 class="m-0 fint-weight-bold text-primary">Jagung</h2>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 mb-3">
        <div class="card border-primary mb-3">
            <div class="card-header">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Jagung Hibrida</label>
                        <input type="hidden" name="tanaman[]" value="Jagung">
                        <input type="hidden" name="jenis_tanaman[]" value="Jagung Hibrida">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value='0'> 
                        </div>
                    <div class="col-sm-6">
                        <label>Tanam</label>
                        <input type="number" class="form-control" name="tanam[]" value='0'> 
                    </div>
                    </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>puso/Rusak</label>
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
                        <label>Jagung Hibrida</label>
                        <input type="hidden" name="tanaman[]" value="Jagung">
                        <input type="hidden" name="jenis_tanaman[]" value="Jagung Hibrida">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value='0'> 
                        </div>
                    <div class="col-sm-6">
                        <label>Tanam</label>
                        <input type="number" class="form-control" name="tanam[]" value='0'> 
                    </div>
                    </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Puso/Rusak</label>
                            <input type="number" class="form-control" name="puso[]" value="0"> 
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
                        <label>Jagung Komposit</label>
                        <input type="hidden" name="tanaman[]" value="Jagung">
                        <input type="hidden" name="jenis_tanaman[]" value="Jagung Komposit">
                    </div>
                    <div class="col-sm-6">
                        <label></label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value='0'> 
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
                        <label>Jagung Lokal</label>
                        <input type="hidden" name="tanaman[]" value="Jagung">
                        <input type="hidden" name="jenis_tanaman[]" value="Jagung Lokal">
                    </div>
                    <div class="col-sm-6">
                        <label></label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value='0'> 
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
                        <label>Jagung Hibrida</label>
                        <input type="hidden" name="tanaman[]" value="Jagung">
                        <input type="hidden" name="jenis_tanaman[]" value="Jagung Hibrida">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value='0'> 
                        </div>
                    <div class="col-sm-6">
                        <label>Tanam</label>
                        <input type="number" class="form-control" name="tanam[]" value='0'> 
                    </div>
                    </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>puso/Rusak</label>
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
                        <label>Jagung Hibrida</label>
                        <input type="hidden" name="tanaman[]" value="Jagung">
                        <input type="hidden" name="jenis_tanaman[]" value="Jagung Hibrida">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value='0'> 
                        </div>
                    <div class="col-sm-6">
                        <label>Tanam</label>
                        <input type="number" class="form-control" name="tanam[]" value='0'> 
                    </div>
                    </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Puso/Rusak</label>
                            <input type="number" class="form-control" name="puso[]" value="0"> 
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
                        <label>Jagung Komposit</label>
                        <input type="hidden" name="tanaman[]" value="Jagung">
                        <input type="hidden" name="jenis_tanaman[]" value="Jagung Komposit">
                    </div>
                    <div class="col-sm-6">
                        <label></label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value='0'> 
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
                        <label>Jagung Lokal</label>
                        <input type="hidden" name="tanaman[]" value="Jagung">
                        <input type="hidden" name="jenis_tanaman[]" value="Jagung Lokal">
                    </div>
                    <div class="col-sm-6">
                        <label></label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value='0'> 
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
	    <h2 class="m-0 fint-weight-bold text-primary">Kedelai</h2>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 mb-3">
        <div class="card border-primary mb-3">
            <div class="card-header">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Kedelai</label>
                        <input type="hidden" name="tanaman[]" value="Kedelai">
                        <input type="hidden" name="jenis_tanaman[]" value="kedelai">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value="0"> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value="0"> 
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
                        <input type="number" class="form-control" name="laporan[]" value="0"> 
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-primary mb-3">
            <div class="card-header">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Kedelai</label>
                        <input type="hidden" name="tanaman[]" value="Kedelai">
                        <input type="hidden" name="jenis_tanaman[]" value="Kedelai">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value='0'> 
                        </div>
                    <div class="col-sm-6">
                        <label>Tanam</label>
                        <input type="number" class="form-control" name="tanam[]" value='0'> 
                    </div>
                    </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>puso/Rusak</label>
                            <input type="number" class="form-control" name="puso[]" value='0'> 
                        </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Laporan</label>
                        <input type="number" class="form-control" name="laporan[]" value="0"> 
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
                        <label>Kedelai</label>
                        <input type="hidden" name="tanaman[]" value="Kedelai">
                        <input type="hidden" name="jenis_tanaman[]" value="kedelai">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value="0"> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value="0"> 
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
                        <input type="number" class="form-control" name="laporan[]" value="0"> 
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-primary mb-3">
            <div class="card-header">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Kedelai</label>
                        <input type="hidden" name="tanaman[]" value="Kedelai">
                        <input type="hidden" name="jenis_tanaman[]" value="Kedelai">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value='0'> 
                        </div>
                    <div class="col-sm-6">
                        <label>Tanam</label>
                        <input type="number" class="form-control" name="tanam[]" value='0'> 
                    </div>
                    </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>puso/Rusak</label>
                            <input type="number" class="form-control" name="puso[]" value='0'> 
                        </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Laporan</label>
                        <input type="number" class="form-control" name="laporan[]" value="0"> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 mb-3 text-center"> 
	    <h2 class="m-0 fint-weight-bold text-primary">Kacang Tanah</h2>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 mb-3">
        <div class="card border-primary mb-3">
            <div class="card-header">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Kacang Tanah</label>
                        <input type="hidden" name="tanaman[]" value="Kacang Tanah">
                        <input type="hidden" name="jenis_tanaman[]" value="Kacang Tanah">
                    </div>
                    <div class="col-sm-6">
                        <label></label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="">
                    </div>
                </div>
            </div>    
            <div class="card-body text-primary">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Lahan</label>
                        <input type="text" readonly class="form-control" name="lahan[]" value="Lahan Sawah">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value='0'> 
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
                        <label>Kacang Tanah</label>
                        <input type="hidden" name="tanaman[]" value="Kacang Tanah">
                        <input type="hidden" name="jenis_tanaman[]" value="Kacang Tanah">
                    </div>
                    <div class="col-sm-6">
                        <label></label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value='0'> 
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
	    <h2 class="m-0 fint-weight-bold text-primary">Singkong</h2>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 mb-3">
        <div class="card border-primary mb-3">
            <div class="card-header">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Jumlah Ubi kayu/Singkong</label>
                        <input type="hidden" name="tanaman[]" value="Singkong">
                        <input type="hidden" name="jenis_tanaman[]" value="Singkong">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value="0"> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value="0"> 
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
                        <input type="number" class="form-control" name="laporan[]" value="0"> 
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-primary mb-3">
            <div class="card-header">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Jumlah Ubi Kayu/Singkong</label>
                        <input type="hidden" name="tanaman[]" value="Singkong">
                        <input type="hidden" name="jenis_tanaman[]" value="Singkong">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value='0'> 
                        </div>
                    <div class="col-sm-6">
                        <label>Tanam</label>
                        <input type="number" class="form-control" name="tanam[]" value='0'> 
                    </div>
                    </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>puso/Rusak</label>
                            <input type="number" class="form-control" name="puso[]" value='0'> 
                        </div>
                    <div class="col-sm-6">
                        <label>Tanaman Akhir Bulan Laporan</label>
                        <input type="number" class="form-control" name="laporan[]" value="0"> 
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
                        <label>Jumlah Ubi Kayu/Singkong</label>
                        <input type="hidden" name="tanaman[]" value="Singkong">
                        <input type="hidden" name="jenis_tanaman[]" value="Singkong">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value="0"> 
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
                        <input type="number" class="form-control" name="laporan[]" value="0"> 
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-primary mb-3">
            <div class="card-header">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Jumlah Ubi kayu/Singkong</label>
                        <input type="hidden" name="tanaman[]" value="Singkong">
                        <input type="hidden" name="jenis_tanaman[]" value="Singkong">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value='0'> 
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
	    <h2 class="m-0 fint-weight-bold text-primary">Ubi Jalar</h2>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 mb-3">
        <div class="card border-primary mb-3">
            <div class="card-header">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Ubi Jalar/ketela Rambat</label>
                        <input type="hidden" name="tanaman[]" value="Ubi Jalar">
                        <input type="hidden" name="jenis_tanaman[]" value="Ubi Jalar">
                    </div>
                    <div class="col-sm-6">
                        <label></label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value='0'> 
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
                        <label>Ubi Jalar/Ketela Rambat</label>
                        <input type="hidden" name="tanaman[]" value="Ubi Jalar">
                        <input type="hidden" name="jenis_tanaman[]" value="Ubi Jalar">
                    </div>
                    <div class="col-sm-6">
                        <label></label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value='0'> 
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
	    <h2 class="m-0 fint-weight-bold text-primary">Kacang Hijau</h2>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 mb-3">
        <div class="card border-primary mb-3">
            <div class="card-header">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Kacang Hijau</label>
                        <input type="hidden" name="tanaman[]" value="Kacang Hijau">
                        <input type="hidden" name="jenis_tanaman[]" value="Kacang Hijau">
                    </div>
                    <div class="col-sm-6">
                        <label></label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value='0'> 
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
                        <label>Kacang Hijau</label>
                        <input type="hidden" name="tanaman[]" value="Kacang Hijau">
                        <input type="hidden" name="jenis_tanaman[]" value="Kacang Hijau">
                    </div>
                    <div class="col-sm-6">
                        <label></label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value='0'> 
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
	    <h2 class="m-0 fint-weight-bold text-primary">Sorgum</h2>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 mb-3">
        <div class="card border-primary mb-3">
            <div class="card-header">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Sorgum/Cantel</label>
                        <input type="hidden" name="tanaman[]" value="Sorgum">
                        <input type="hidden" name="jenis_tanaman[]" value="">
                    </div>
                    <div class="col-sm-6">
                        <label></label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="Sorgum">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value='0'> 
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
                        <label>Sorgum/Cantel</label>
                        <input type="hidden" name="tanaman[]" value="Sorgum">
                        <input type="hidden" name="jenis_tanaman[]" value="Sorgum">
                    </div>
                    <div class="col-sm-6">
                        <label></label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value='0'> 
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
	    <h2 class="m-0 fint-weight-bold text-primary">Gandum</h2>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 mb-3">
        <div class="card border-primary mb-3">
            <div class="card-header">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Gandum</label>
                        <input type="hidden" name="tanaman[]" value="Gandum">
                        <input type="hidden" name="jenis_tanaman[]" value="Gandum">
                    </div>
                    <div class="col-sm-6">
                        <label></label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value='0'> 
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
                        <input type="number" class="form-control" name="laporan]" value='0'> 
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
                        <label>Gandum</label>
                        <input type="hidden" name="tanaman[]" value="Gandum">
                        <input type="hidden" name="jenis_tanaman[]" value="Gandum">
                    </div>
                    <div class="col-sm-6">
                        <label></label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value='0'> 
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
	    <h2 class="m-0 fint-weight-bold text-primary">Talas</h2>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 mb-3">
        <div class="card border-primary mb-3">
            <div class="card-header">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Talas</label>
                        <input type="hidden" name="tanaman[]" value="Talas">
                        <input type="hidden" name="jenis_tanaman[]" value="Talas">
                    </div>
                    <div class="col-sm-6">
                        <label></label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value='0'> 
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
                        <label>Talas</label>
                        <input type="hidden" name="tanaman[]" value="Talas">
                        <input type="hidden" name="jenis_tanaman[]" value="Talas">
                    </div>
                    <div class="col-sm-6">
                        <label></label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value='0'> 
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
	    <h2 class="m-0 fint-weight-bold text-primary">Ganyong</h2>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 mb-3">
        <div class="card border-primary mb-3">
            <div class="card-header">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Ganyong</label>
                        <input type="hidden" name="tanaman[]" value="Ganyong">
                        <input type="hidden" name="jenis_tanaman[]" value="Ganyong">
                    </div>
                    <div class="col-sm-6">
                        <label></label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value='0'> 
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
                        <label>Ganyong</label>
                        <input type="hidden" name="tanaman[]" value="Ganyong">
                        <input type="hidden" name="jenis_tanaman[]" value="Ganyong">
                    </div>
                    <div class="col-sm-6">
                        <label></label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value='0'> 
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
	    <h2 class="m-0 fint-weight-bold text-primary">Umbi Lainnya</h2>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 mb-3">
        <div class="card border-primary mb-3">
            <div class="card-header">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Umbi Lainnya</label>
                        <input type="hidden" name="tanaman[]" value="Umbi Lainnya">
                        <input type="hidden" name="jenis_tanaman[]" value="Umbi Lainnya">
                    </div>
                    <div class="col-sm-6">
                        <label></label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value='0'> 
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
                        <label>Umbi Lainnya</label>
                        <input type="hidden" name="tanaman[]" value="Umbi Lainnya">
                        <input type="hidden" name="jenis_tanaman[]" value="Umbi Lainnya">
                    </div>
                    <div class="col-sm-6">
                        <label></label>
                        <input type="hidden" class="form-control" name="bantuan[]" value="">
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
                        <label>Panen Muda</label>
                        <input type="number" class="form-control" name="panen_muda[]" value='0'> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                            <input type="number" class="form-control" name="panen_ternak[]" value='0'> 
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
<button type="submit" class="btn btn-success btn-icon-split">
    <span class="text">Tambah</span>
</button>      
</form><hr> 