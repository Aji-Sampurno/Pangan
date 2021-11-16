<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');
$getNama = $this->session->userdata('session_nama');

$datakosong = $this->M_Admin->countDataKosong()->num_rows();
$datapalawijakosong = $this->M_Admin->countDataPalawijaKosong()->num_rows();
?>
<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-primary topbar mb-4 static-top shadow">

    <img class="img-fluid m-1" src="<?= base_url(); ?>/assets/img/Kementerian-Pertanian-Logo.png">
    <span class="text-white m-1">Statistik Pertanian</span>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href='<?= base_url('Admin') ?>'>
                <span class="mr-2 d-none d-lg-inline text-white">Dashboard</span>
            </a>    
        </li>

        <!-- Laporan -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white">Tambah Laporan</span>
            </a>
                        
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header"> Tambah Laporan </h6>
                <a class="dropdown-item text-center text-black-1000" href='<?= base_url('Admin/sppadi')?>'>SP-PADI</a>
                <a class="dropdown-item text-center text-black-1000" href='<?= base_url('Admin/sppalawija')?>'>SP-PALAWIJA</a>
            </div>
        </li>

        <!-- Statistik Pertanian -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white">Statistik Pertanian</span>
            </a>
            
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header"> Statistik Pertanian </h6>
                <a class="dropdown-item text-center text-black-1000" href='<?= base_url('Admin/home_padi') ?>'>SP-PADI</a>
                <a class="dropdown-item text-center text-black-1000" href='<?= base_url('Admin/home_palawija') ?>'>SP-PALAWIJA</a>
            </div>
        </li>

        <!-- Data Kosong -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white">Data Kosong</span>

                <!-- Notifikasi Data Kosong -->
                <span class="badge badge-danger badge-counter">
                    <?= $datakosong+$datapalawijakosong ?>
                </span>
            </a>
            
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header"> Data Kosong </h6>
                <?php $i=0; foreach ($kosong as $data) if ($i < 5){?>
                <a class="dropdown-item d-flex align-items-center" href="<?= base_url('Admin/edit_data_kosong/'.$data->id_padi)?>">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="<?= base_url(); ?>/assets/img/undraw_profile_1.svg" alt="">
                        <div class="status-indicator bg-success"></div>
                    </div>
                    <div class="font-weight-bold">
                        <div class="text-truncate"><?php echo $data -> admin;?></div>
                        <div class="small text-gray-500"><?php echo $data -> kecamatan.' || '.$data -> tgl_laporan; ?></div>
                    </div>
                </a>
                <?php $i +=1;} ?>
                <a class="dropdown-item text-center small text-gray-500" href="<?= base_url('Admin/detail_data_kosong')?>">Tampilkan Lainnya</a>
            </div>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white small"><?php echo $getNama; ?></span>
                <img class="img-profile rounded-circle" src="<?= base_url(); ?>/assets/img/undraw_profile.svg">
            </a>
            
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                </a>
            
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="Admin" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>