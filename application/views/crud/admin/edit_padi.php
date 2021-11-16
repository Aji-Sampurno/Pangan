<div class="row">
	<div class="col-lg">
		<div class="p-5">
			<div class="text-center"> 
				<h1 class="h4 text-gray-900 mb-4"><?php echo $title; ?></h1> 
				</div><?php foreach($padi as $baris){ ?> 
                    <!-- kondisi data -->
                    <div class="col-sm-12">
                        <div>    
                            <div class="row">
                                <div class="col-6">
                                    <div class="row justify-content-start">
                                        <div class="col-lg-3">
                                            <h6 class="p-2 text-primary">PROVINSI</h6>
                                        </div>
                                        <div class="col-lg-4 col-sm-auto">
                                            <h6 class="p-2 text-primary"><?= $baris -> provinsi?></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row justify-content-end">
                                        <div class="col-auto">
                                            <h6 class="p-2 text-primary">ADMIN</h6>
                                        </div>
                                        <div class="col-auto">
                                            <h6 class="p-2 text-primary"><?= $baris -> admin?></h6>
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
                                        <div class="col-lg-3">
                                            <h6 class="p-2 text-primary">KAB. /KOTA</h6>
                                        </div>
                                        <div class="col-lg-4 col-sm-auto">
                                            <h6 class="p-2 text-primary"><?= $baris -> kabkota?></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row justify-content-end">
                                        <div class="col-auto">
                                            <h6 class="p-2 text-primary">TANGGAL LAPORAN</h6>
                                        </div>
                                        <div class="col-auto">
                                            <h6 class="p-2 text-primary"><?= $baris -> tgl_laporan?></h6>
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
                                        <div class="col-lg-3">
                                            <h6 class="p-2 text-primary">KECAMATAN</h6>
                                        </div>
                                        <div class="col-lg-4 col-sm-auto">
                                            <h6 class="p-2 text-primary"><?= $baris -> kecamatan?></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div> 
				<form class="user" action="<?php echo base_url('Admin/update_padi');?>" method="post"> 	
					<div class="form-group"> 
                        <div class="card border-primary mb-3">
                            <div class="card-header">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Padi <?php echo $baris->jenis_padi; ?></label>
                                        <input type="hidden" name="padi" value="<?php echo $baris->jenis_padi; ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <label><?php echo $baris->jenis_bantuan; ?></label>
                                        <input type="hidden" class="form-control" name="bantuan" value="<?php echo $baris->jenis_bantuan; ?>">
                                    </div>
                                </div>
                            </div>    
                            <div class="card-body text-primary">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Lahan</label>
                                        <input type="text" readonly class="form-control" name="lahan" value="<?php echo $baris->jenis_lahan; ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Tanaman Akhir Bulan Yang Lalu</label>
                                        <input type="number" class="form-control" name="laporanlalu" value='<?php echo $baris->laporan_lalu; ?>'>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Panen</label>
                                        <input type="number" class="form-control" name="panen" value='<?php echo $baris->panen; ?>'> 
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Tanam</label>
                                        <input type="number" class="form-control" name="tanam" value='<?php echo $baris->tanam; ?>'> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Puso/Rusak</label>
                                        <input type="number" class="form-control" name="puso" value='<?php echo $baris->puso; ?>'> 
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Tanaman Akhir Bulan Laporan</label>
                                        <input type="number" class="form-control" name="laporan" value='<?php echo $baris->laporan; ?>'> 
                                    </div>
                                </div>
                            </div>
                        </div>
						<input type="hidden" name="id" value="<?php echo $baris->id_padi; ?>"> 
                      </div>
					<input type="submit" class="btn btn-success btn-icon-split p-2" name="submit" value="Update"> 
				</form><?php } ?>
				<hr> 
				<div class="text-center"><a class="small" href="<?php echo base_url('Admin/detail_data_kosong')?>">Kembali</a> 
				</div>
			</div>
		</div>
	</div>
