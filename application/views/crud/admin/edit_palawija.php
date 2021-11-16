<div class="row">
	<div class="col-sm-12">
		<div class="p-5">
			<div class="text-center"> 
				<h1 class="h4 text-gray-900 mb-4"><?php echo $title; ?></h1> 
				</div><?php foreach($palawija as $baris){ ?>
                    <!-- kondisi data -->
                    <div class="col-sm-12">
                        <div>    
                            <div class="row">
                                <div class="col-6">
                                    <div class="row justify-content-start">
                                        <div class="col-auto mr-4">
                                            <h6 class="p-2 text-primary"> Provinsi <?= $baris -> provinsi?></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row justify-content-end">
                                        <div class="col-auto mr-4">
                                            <h6 class="p-2 text-primary">Nama Admin <?= $baris->admin?></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div>    
                            <div class="row">
                                <div class="col-6">
                                    <div class="row justify-content-start">
                                        <div class="col-auto mr-3">
                                            <h6 class="p-2 text-primary">KAB./KOTA</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row justify-content-end">
                                        <div class="col-auto mr-4">
                                            <h6 class="p-2 text-primary">PROVINSI</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div>    
                            <div class="row">
                                <div class="col-6">
                                    <div class="row justify-content-start">
                                        <div class="col-auto">
                                            <h6 class="p-2 text-primary">KECAMATAN</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div> 
				<form class="user" action="<?php echo base_url('Admin/update_palawija');?>" method="post"> 	
					<div class="form-group"> 
                        <div class="card border-primary mb-3">
                            <div class="card-header">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label><?= $baris->jenis_tanaman; ?></label>
                                        <input type="hidden" name="tanaman" value="<?= $baris->tanaman; ?>">
                                        <input type="hidden" name="jenis_tanaman" value="<?= $baris->jenis_tanaman; ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <label><?= $baris->bantuan; ?></label>
                                        <input type="hidden" class="form-control" name="bantuan" value="<?= $baris->bantuan; ?>">
                                    </div>
                                </div>
                            </div>    
                            <div class="card-body text-primary">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Lahan</label>
                                        <input type="text" readonly class="form-control" name="lahan" value="<?= $baris->lahan; ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Tanaman Akhir Bulan Yang Lalu</label>
                                        <input type="number" class="form-control" name="laporan_lalu" value='<?= $baris->laporan_lalu; ?>'>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Panen</label>
                                        <input type="number" class="form-control" name="panen" value='<?= $baris->panen; ?>'> 
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Panen Muda</label>
                                        <input type="number" class="form-control" name="panen_muda" value='<?= $baris->panen_muda; ?>'> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Panen Untuk Hijauan Pakan Ternak</label>
                                            <input type="number" class="form-control" name="panen_ternak" value='<?= $baris->pakan_ternak; ?>'> 
                                        </div>
                                    <div class="col-sm-6">
                                        <label>Tanam</label>
                                        <input type="number" class="form-control" name="tanam" value='<?= $baris->tanam; ?>'> 
                                    </div>
                                    </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>puso/Rusak</label>
                                            <input type="number" class="form-control" name="puso" value='<?= $baris->puso; ?>'> 
                                        </div>
                                    <div class="col-sm-6">
                                        <label>Tanaman Akhir Bulan Laporan</label>
                                        <input type="number" class="form-control" name="laporan" value='<?= $baris->laporan; ?>'> 
                                    </div>
                                </div>
                            </div>
                        </div>
						<input type="hidden" name="id" value="<?php echo $baris->id_palawija; ?>"> 
                      </div>
					<input type="submit" class="btn btn-success btn-icon-split p-2" name="submit" value="Update"> 
				</form><?php } ?>
				<hr> 
				<div class="text-center"><a class="small" href="<?php echo base_url('Admin/detail_data_kosong')?>">Kembali</a> 
				</div>
			</div>
		</div>
	</div>
