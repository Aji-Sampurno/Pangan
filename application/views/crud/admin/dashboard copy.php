<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');
$panenpadi = $this->M_Admin->countPanenPadi()->row_array();
$pusopadi = $this->M_Admin->countPusoPadi()->row_array();
$panenpalawija = $this->M_Admin->countPanenPalawija()->row_array();
$pusopalawija = $this->M_Admin->countPusoPalawija()->row_array();
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-primary"><?php echo $title; ?></h1>
</div>

<div class="row">

    <!-- Panen Padi -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow mb-4">
            <div class="card border-left-primary">
                <!-- Header -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <div class="h9 font-weight-bold text-primary text-uppercase mb-1">Panen Padi</div>
                    <a class="text-xs font-weight-bold text-primary text-uppercase mb-1" href="Laporan_Penjual">Lihat Detail</a>
                </div>
                <!-- Body -->
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $panenpadi['total']?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-wallet fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Puso Padi -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow mb-4">
            <div class="card border-left-primary">
                <!-- Header -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <div class="h9 font-weight-bold text-primary text-uppercase mb-1">Puso Padi</div>
                    <a class="text-xs font-weight-bold text-primary text-uppercase mb-1" href="Laporan_Pesanan_Penjual">Lihat Detail</a>
                </div>
                <!-- Body -->
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pusopadi['total']?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Panen Palawija -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow mb-4">
            <div class="card border-left-primary">
                <!-- Header -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <div class="h9 font-weight-bold text-primary text-uppercase mb-1">Panen Palawija</div>
                    <a class="text-xs font-weight-bold text-primary text-uppercase mb-1" href="#">Lihat Detail</a>
                </div>
                <!-- Body -->
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $panenpalawija['total']?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Puso Palawija -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow mb-4">
            <div class="card border-left-primary">
                <!-- Header -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <div class="h9 font-weight-bold text-primary text-uppercase mb-1">Puso Palawija</div>
                    <a class="text-xs font-weight-bold text-primary text-uppercase mb-1" href="Barang_Penjual">Lihat Detail</a>
                </div>
                <!-- Body -->
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pusopalawija['total']?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-archive fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">

    <!-- Grafik Pendapatan -->
    <div class="col-xl-7 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <div class="h9 font-weight-bold text-primary text-uppercase mb-1">Padi</div>
                <a class="text-xs font-weight-bold text-primary text-uppercase mb-1" href="Laporan_Penjual">Lihat Detail</a>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie Chart -->
    <div class="col-xl-5 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <div class="h9 font-weight-bold text-primary text-uppercase mb-1">Palawija</div>
                <a class="text-xs font-weight-bold text-primary text-uppercase mb-1" href="Laporan_Penjual">Lihat Detail</a>
            </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>
                    </div>
                <div class="mt-4 text-center small">
                    <span class="mr-3">
                        <i class="fas fa-circle text-jagung"></i> Jagung
                    </span>
                    <span class="mr-3">
                        <i class="fas fa-circle text-kedelai"></i> Kedelai
                    </span>
                    <span class="mr-3">
                        <i class="fas fa-circle text-kacangtanah"></i> Kacang Tanah
                    </span>
                    <span class="mr-3">
                        <i class="fas fa-circle text-singkong"></i> Singkong
                    </span>
                    <span class="mr-3">
                        <i class="fas fa-circle text-ubijalar"></i> Ubi Jalar
                    </span>
                    <span class="mr-3">
                        <i class="fas fa-circle text-kacanghijau"></i> Kacang Hijau
                    </span>
                    <span class="mr-3">
                        <i class="fas fa-circle text-sorgum"></i> Sorgum
                    </span>
                    <span class="mr-3">
                        <i class="fas fa-circle text-gandum"></i> Gandum
                    </span>
                    <span class="mr-3">
                        <i class="fas fa-circle text-talas"></i> Talas
                    </span>
                    <span class="mr-3">
                        <i class="fas fa-circle text-ganyong"></i> Ganyong
                    </span>
                    <span class="mr-3">
                        <i class="fas fa-circle text-umbilain"></i> Umbi Lainnya
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
