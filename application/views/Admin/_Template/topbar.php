<?php
$getUser = $this->session->userdata('session_user');
$getStatus = $this->session->userdata('session_status');
$getNama = $this->session->userdata('session_nama');

$data = $this->M_Admin->countDataApprove()->num_rows();
$datakosong = $this->M_Admin->countDataKosong()->num_rows();
$datapalawijakosong = $this->M_Admin->countDataPalawijaKosong()->num_rows();
?>
<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-primary topbar mb-4 static-top shadow">

    <img class="img-fluid m-1" src="<?= base_url(); ?>/assets/img/Kementerian-Pertanian-Logo.png">
    <span class="text-white m-1">Statistik Pertanian</span>

    <?php 
        if ($getStatus=='admin') {
            echo '<!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
        
                <!-- Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href='.base_url('Admin').'>
                        <span class="mr-2 d-none d-lg-inline text-white">Dashboard</span>
                    </a>    
                </li>
        
                <!-- Statistik Pertanian -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-white">Statistik Pertanian</span>
                    </a>
                    
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header"> Statistik Pertanian </h6>
                        <a class="dropdown-item text-center text-black-1000" href='.base_url('Admin/home_padi').'>SP-PADI</a>
                        <a class="dropdown-item text-center text-black-1000" href='.base_url('Admin/home_palawija').'>SP-PALAWIJA</a>
                    </div>
                </li>
        
                <!-- Data Petugas -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link" href='.base_url('Admin/detail_data_petugas').'>
                        <span class="mr-2 d-none d-lg-inline text-white">Data Petugas</span>
                    </a>
                </li>
        
                <!-- Approval Pendaftar-->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link" href='.base_url('Admin/detail_data_approval').'>
                        <span class="mr-2 d-none d-lg-inline text-white">Approval Pendaftar</span>
        
                        <!-- Notifikasi Data Kosong -->
                        <span class="badge badge-danger badge-counter">
                            '.$data.'
                        </span>
                    </a>
                </li>
        
                <div class="topbar-divider d-none d-sm-block"></div>
        
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-white small">'.$getNama.'</span>
                    </a>
                    
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href='.base_url('Admin/profile/').'>
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                    
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="Admin" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>';
        } elseif ($getStatus=='petugas') {
            echo '<!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
        
                <!-- Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href='.base_url('Admin').'>
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
                        <a class="dropdown-item text-center text-black-1000" href='.base_url('Admin/tambah_statistik_padi').'>SP-PADI</a>
                        <a class="dropdown-item text-center text-black-1000" href='.base_url('Admin/tambah_statistik_palawija').'>SP-PALAWIJA</a>
                    </div>
                </li>
        
                <!-- Statistik Pertanian -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-white">Statistik Pertanian</span>
                    </a>
                    
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header"> Statistik Pertanian </h6>
                        <a class="dropdown-item text-center text-black-1000" href='.base_url('Admin/home_padi').'>SP-PADI</a>
                        <a class="dropdown-item text-center text-black-1000" href='.base_url('Admin/home_palawija').'>SP-PALAWIJA</a>
                    </div>
                </li>
        
                <!-- Data Padi Kosong -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link" href='.base_url('Admin/detail_padi_kosong').'>
                        <span class="mr-2 d-none d-lg-inline text-white">Data Padi Kosong</span>
        
                        <!-- Notifikasi Data Kosong -->
                        <span class="badge badge-danger badge-counter">
                            '. $datakosong .'
                        </span>
                    </a>
                </li>
        
                <!-- Data Palawija Kosong -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link" href='.base_url('Admin/detail_palawija_kosong').'>
                        <span class="mr-2 d-none d-lg-inline text-white">Data Palawija Kosong</span>
        
                        <!-- Notifikasi Data Kosong -->
                        <span class="badge badge-danger badge-counter">
                            '. $datapalawijakosong .'
                        </span>
                    </a>
                </li>
        
                <div class="topbar-divider d-none d-sm-block"></div>
        
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-white">'.$getNama.'</span>
                    </a>
                    
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href='.base_url('Admin/profile/').'>
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="Admin" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>';
        }
    ?>

    <!-- Topbar Navbar -->
    <!-- <ul class="navbar-nav ml-auto"> -->

        <!-- Dashboard -->
        <!-- <li class="nav-item">
            <a class="nav-link" href='<?= base_url('Admin') ?>'>
                <span class="mr-2 d-none d-lg-inline text-white">Dashboard</span>
            </a>    
        </li> -->

        <!-- Laporan -->
        <!-- <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white">Tambah Laporan</span>
            </a>
                        
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header"> Tambah Laporan </h6>
                <a class="dropdown-item text-center text-black-1000" href='<?= base_url('Admin/tambah_statistik_padi')?>'>SP-PADI</a>
                <a class="dropdown-item text-center text-black-1000" href='<?= base_url('Admin/tambah_statistik_palawija')?>'>SP-PALAWIJA</a>
            </div>
        </li> -->

        <!-- Statistik Pertanian -->
        <!-- <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white">Statistik Pertanian</span>
            </a>
            
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header"> Statistik Pertanian </h6>
                <a class="dropdown-item text-center text-black-1000" href='<?= base_url('Admin/home_padi') ?>'>SP-PADI</a>
                <a class="dropdown-item text-center text-black-1000" href='<?= base_url('Admin/home_palawija') ?>'>SP-PALAWIJA</a>
            </div>
        </li> -->

        <!-- Data Kosong -->
        <!-- <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link" href="<?= base_url('Admin/detail_data_kosong')?>">
                <span class="mr-2 d-none d-lg-inline text-white">Data Kosong</span> -->

                <!-- Notifikasi Data Kosong -->
                <!-- <span class="badge badge-danger badge-counter">
                    <?= $datakosong+$datapalawijakosong ?>
                </span>
            </a>
        </li> -->

        <!-- <div class="topbar-divider d-none d-sm-block"></div> -->

        <!-- Nav Item - User Information -->
        <!-- <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white small"><?php echo $getNama; ?></span>
                <img class="img-profile rounded-circle" src="<?= base_url(); ?>/assets/img/undraw_profile.svg">
            </a> -->
            
            <!-- Dropdown - User Information -->
            <!-- <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= base_url('Admin/profile/')?>">
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
    </ul> -->
</nav>