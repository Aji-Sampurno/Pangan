<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');
?>
 <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3">Ketahanan Pangan</sup></div>
            </a>

            <?php 
				if($getGrup==1){
					echo'<!-- Divider -->
                    <hr class="sidebar-divider my-0">
        
                    <!-- Dashboard -->
                    <li class="nav-item">
                        <a class="nav-link" href='.base_url('Admin').'>
                            <i class="fas fa-fw fa-home"></i>
                            <span>Dashboard</span></a>
                    </li>
        
                    <!-- Divider -->
                    <hr class="sidebar-divider">
        
                    <!-- Heading -->
                    <div class="sidebar-heading">
                        Interface
                    </div>

                    <li class="nav-item">
                        <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseTwo" 
                            aria-expanded="true" aria-controls="collapseTwo" href="">
                            <i class="fas fa-fw fa-clipboard"></i>
                            <span>Laporan</span></a>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <h6 class="collapse-header">Laporan:</h6>
                                    <a class="collapse-item" href='.base_url('Admin/sppadi').'>SP-PADI</a>
                                    <a class="collapse-item" href='.base_url('Admin/sppalawija').'>SP-PALAWIJA</a>
                                 </div>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseTree" 
                            aria-expanded="true" aria-controls="collapseTwo" href="">
                            <i class="fas fa-fw fa-clipboard"></i>
                            <span>Statistik Pertanian</span></a>
                            <div id="collapseTree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <h6 class="collapse-header">Laporan:</h6>
                                    <a class="collapse-item" href='.base_url('Admin/home_padi').'>SP-PADI</a>
                                    <a class="collapse-item" href='.base_url('Admin/sppalawija').'>SP-PALAWIJA</a>
                                 </div>
                            </div>
                        </a>
                    </li>';
				}
                elseif($getGrup==2){
                    echo'<!-- Divider -->
                    <hr class="sidebar-divider my-0">
        
                    <!-- Dashboard -->
                    <li class="nav-item">
                        <a class="nav-link" href='.base_url('Penjual').'>
                            <i class="fas fa-fw fa-home"></i>
                            <span>Dashboard</span></a>
                    </li>
        
                    <!-- Divider -->
                    <hr class="sidebar-divider">
        
                    <!-- Heading -->
                    <div class="sidebar-heading">
                        Interface
                    </div>

                    <!-- Toko -->
                    <li class="nav-item">
                        <a class="nav-link" href='.base_url('Ikanku').'>
                            <i class="fas fa-fw fa-store-alt"></i>
                            <span>Toko</span></a>
                    </li>
                    
                    <!-- Laporan -->
                    <li class="nav-item">
                        <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseTwo" 
                            aria-expanded="true" aria-controls="collapseTwo" href="">
                            <i class="fas fa-fw fa-clipboard"></i>
                            <span>Laporan</span></a>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <h6 class="collapse-header">Laporan:</h6>
                                    <a class="collapse-item" href='.base_url('Laporan_Penjual').'>Laporan Pendapatan</a>
                                    <a class="collapse-item" href='.base_url('Laporan_Pesanan_Penjual').'>Laporan Pesanan Baru</a>
                                    <a class="collapse-item" href='.base_url('Laporan_Pesanan_Penjual/dikirim').'>Laporan Pesanan Dikirim</a>
                                    <a class="collapse-item" href='.base_url('Laporan_Pesanan_Penjual/selesai').'>Laporan Pesanan Selesai</a>
                                </div>
                            </div>
                        </a>
                    </li>
        
                    <!-- Produk -->
                    <li class="nav-item">
                        <a class="nav-link" href='.base_url('Penjual/produk').'>
                            <i class="fas fa-fw fa-archive"></i>
                            <span>Produk</span></a>
                    </li>
        
                    <!-- Chat -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
                            <i class="fas fa-fw fa-comments"></i>
                            <span>Chat</span></a>
                    </li>
        
                    <!-- Edukasi -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
                            <i class="fas fa-fw fa-book"></i>
                            <span>Edukasi</span></a>
                    </li>';
                }
			?>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
