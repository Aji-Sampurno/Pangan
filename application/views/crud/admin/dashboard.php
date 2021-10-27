<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title; ?></h1>
</div>

<div class="row">

    <!-- Pendapatan -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow mb-4">
            <div class="card border-left-primary">
                <!-- Header -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <div class="h9 font-weight-bold text-primary text-uppercase mb-1">Pendapatan</div>
                    <a class="text-xs font-weight-bold text-primary text-uppercase mb-1" href="Laporan_Penjual">Lihat Detail</a>
                </div>
                <!-- Body -->
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-gray-800">RP. </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-wallet fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pesanan Baru -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow mb-4">
            <div class="card border-left-primary">
                <!-- Header -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <div class="h9 font-weight-bold text-primary text-uppercase mb-1">Pesanan Baru</div>
                    <a class="text-xs font-weight-bold text-primary text-uppercase mb-1" href="Laporan_Pesanan_Penjual">Lihat Detail</a>
                </div>
                <!-- Body -->
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pesanan Selesai -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow mb-4">
            <div class="card border-left-primary">
                <!-- Header -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <div class="h9 font-weight-bold text-primary text-uppercase mb-1">Pesanan Selesai</div>
                    <a class="text-xs font-weight-bold text-primary text-uppercase mb-1" href="#">Lihat Detail</a>
                </div>
                <!-- Body -->
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jenis Produk -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow mb-4">
            <div class="card border-left-primary">
                <!-- Header -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <div class="h9 font-weight-bold text-primary text-uppercase mb-1">Jenis Produk</div>
                    <a class="text-xs font-weight-bold text-primary text-uppercase mb-1" href="Barang_Penjual">Lihat Detail</a>
                </div>
                <!-- Body -->
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
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
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Header -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <div class="h9 font-weight-bold text-primary text-uppercase mb-1">Pendapatan</div>
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

    <!-- Grafik Pesanan Baru -->
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <div class="h9 font-weight-bold text-primary text-uppercase mb-1">Pesanan Terbaru</div>
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Lihat Detail</div>
            </div>
            <!-- Body -->
            <div class="card-body">
                <div class="chart-area">
                    
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                                <tr>
                                    <th style='width:40px'>No</th>
                                    <th>Kode Transaksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    
                </div>
            </div>
        </div>
    </div>

</div>
