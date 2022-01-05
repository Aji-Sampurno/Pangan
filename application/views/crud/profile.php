<div class="row justify-content-center">
	<div class="col-sm-8 mb-3"> 
        <div class="card border-primary mb-3">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <div class="h9 font-weight-bold text-primary text-uppercase mb-1">PROFILE</div>
                <!-- <a class="text-xs font-weight-bold text-primary text-uppercase mb-1" href="<?= base_url('Admin/edit_profile') ?>">Edit Profile</a> -->
            </div>    
            <div class="card-body text-primary">
                <?php foreach ($profile as $key){ ?>
                    <div class="col-sm-12">
                        <div>    
                            <div class="row">
                                <div class="col-4">
                                    <div class="row justify-content-start">
                                        <div class="col-12">
                                            <!-- <img class="img-profile" width="250px" src="<?php echo base_url().'/gambar/'.$key->foto ?>"> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="row justify-content-end">
                                        <div class="col-12">
                                            <table class="table table-borderless" id="dataTabe" width="100%" cellspacing="0">
                                                <tbody>
                                                    <tr>
                                                        <td>Username</td>
                                                        <td>:</td>
                                                        <td><?php echo $key->username?></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="30%">Nama Lengkap</td>
                                                        <td>:</td>
                                                        <td><?php echo $key->nama_admin?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>jabatan</td>
                                                        <td>:</td>
                                                        <td><?php echo $key->jabatan?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>NIP</td>
                                                        <td>:</td>
                                                        <td><?php echo $key->nip?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>No.Telp/HP</td>
                                                        <td>:</td>
                                                        <td><?php echo $key->telp?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Provinsi</td>
                                                        <td>:</td>
                                                        <td><?php echo $key->provinsiadmin?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kabupaten</td>
                                                        <td>:</td>
                                                        <td><?php echo $key->kabkotaadmin?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kecamatan</td>
                                                        <td>:</td>
                                                        <td><?php echo $key->kecamatanadmin?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>