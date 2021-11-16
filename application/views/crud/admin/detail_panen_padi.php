<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');

$panenpadi = $this->M_Admin->countPanenPadi()->row_array();
$pusopadi = $this->M_Admin->countPusoPadi()->row_array();
$panenpalawija = $this->M_Admin->countPanenPalawija()->row_array();
$pusopalawija = $this->M_Admin->countPusoPalawija()->row_array();

$panenpadi1 = $this->M_Admin->countPanenPadi1()->row_array();
$panenpadi2 = $this->M_Admin->countPanenPadi2()->row_array();
$panenpadi3 = $this->M_Admin->countPanenPadi3()->row_array();
$panenpadi4 = $this->M_Admin->countPanenPadi4()->row_array();
$panenpadi5 = $this->M_Admin->countPanenPadi5()->row_array();
$panenpadi6 = $this->M_Admin->countPanenPadi6()->row_array();
$panenpadi7 = $this->M_Admin->countPanenPadi7()->row_array();
$panenpadi8 = $this->M_Admin->countPanenPadi8()->row_array();
$panenpadi9 = $this->M_Admin->countPanenPadi9()->row_array();
$panenpadi10 = $this->M_Admin->countPanenPadi10()->row_array();
$panenpadi11 = $this->M_Admin->countPanenPadi11()->row_array();
$panenpadi12 = $this->M_Admin->countPanenPadi12()->row_array();

$panenjagung = $this->M_Admin->countPanenJagung()->row_array();
$panenkedelai = $this->M_Admin->countPanenKedelai()->row_array();
$panenkacangtanah = $this->M_Admin->countPanenKacangTanah()->row_array();
$panensingkong = $this->M_Admin->countPanenSingkong()->row_array();
$panenubijalar = $this->M_Admin->countPanenUbiJalar()->row_array();
$panenkacanghijau = $this->M_Admin->countPanenKacangHijau()->row_array();
$panensorgum = $this->M_Admin->countPanenSorgum()->row_array();
$panengandum = $this->M_Admin->countPanenGandum()->row_array();
$panentalas = $this->M_Admin->countPanenTalas()->row_array();
$panenganyong = $this->M_Admin->countPanenGanyong()->row_array();
$panenumbilain = $this->M_Admin->countPanenUmbiLain()->row_array();
?>

<script>
    window.onload = function () 
    {
        var myPieChart = new Chart("myPieChart", {
        type: 'doughnut',
        data: {
            labels: ["Jagung", "Kedelai", "Kacang Tanah", "Singkong", "Ubi Jalar", "Kacang Hijau", "Sorgum", "Gandum", "Talas ", "Ganyong", "Umbi Lainnya"],
            datasets: [{
            data: [ <?= $panenjagung['total']?>, 
                    <?= $panenkedelai['total']?>, 
                    <?= $panenkacangtanah['total']?>, 
                    <?= $panensingkong['total']?>,
                    <?= $panenubijalar['total']?>, 
                    <?= $panenkacanghijau['total']?>, 
                    <?= $panensorgum['total']?>, 
                    <?= $panengandum['total']?>, 
                    <?= $panentalas['total']?>, 
                    <?= $panenganyong['total']?>, 
                    <?= $panenumbilain['total']?>],
            backgroundColor: ['#17e822', '#fc0305', '#e4f20d', '#4a08f7','#b304fb', '#34aacb', '#ff00cd', '#29d6ad', '#faba05', '#987167',''],
            hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf', '#17a673', '#2e59d9', '#17a673', '#2c9faf', '#17a673', '#17a673', '#2c9faf', '#17a673'],
            hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
            },
            legend: {
            display: false
            },
            cutoutPercentage: 80,
        },
        });
        myPieChart.render();
    
        // Bar Chart Example
        var myBarChart = new Chart("myBarChart", {
        type: 'bar',
        data: {
            labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
            datasets: [{
            label: "Revenue",
            backgroundColor: "#4e73df",
            hoverBackgroundColor: "#2e59d9",
            borderColor: "#4e73df",
            data: [ <?= $panenpadi1['total']?>,
                    <?= $panenpadi2['total']?>,
                    <?= $panenpadi3['total']?>,
                    <?= $panenpadi4['total']?>,
                    <?= $panenpadi5['total']?>,
                    <?= $panenpadi6['total']?>,
                    <?= $panenpadi7['total']?>,
                    <?= $panenpadi8['total']?>,
                    <?= $panenpadi9['total']?>,
                    <?= $panenpadi10['total']?>,
                    <?= $panenpadi11['total']?>,
                    <?= $panenpadi12['total']?>  ],
            }],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
            padding: {
                left: 10,
                right: 25,
                top: 25,
                bottom: 0
            }
            },
            scales: {
            xAxes: [{
                time: {
                unit: 'month'
                },
                gridLines: {
                display: false,
                drawBorder: false
                },
                ticks: {
                maxTicksLimit: 12
                },
                maxBarThickness: 25,
            }],
            yAxes: [{
                ticks: {
                min: 0,
                //max: 100,
                //maxTicksLimit: 5,
                padding: 10,
                // Include a dollar sign in the ticks
                callback: function(value, index, values) {
                    return number_format(value);
                }
                },
                gridLines: {
                color: "rgb(234, 236, 244)",
                zeroLineColor: "rgb(234, 236, 244)",
                drawBorder: false,
                borderDash: [2],
                zeroLineBorderDash: [2]
                }
            }],
            },
            legend: {
            display: false
            },
            tooltips: {
            titleMarginBottom: 10,
            titleFontColor: '#6e707e',
            titleFontSize: 14,
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
            callbacks: {
                label: function(tooltipItem, chart) {
                var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                return number_format(tooltipItem.yLabel);
                }
            }
            },
        }
        });
        myBarChart.render();
    }
</script>

<div class="row">

    <!-- Grafik Padi -->
    <div class="col-xl-7 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <div class="h9 font-weight-bold text-primary text-uppercase mb-1">Panen Padi Tahunan</div>
                <a class="text-xs font-weight-bold text-primary text-uppercase mb-1" href='<?= base_url('Admin/detail_panen_padi') ?>'>Lihat Detail</a>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myBarChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Diagram Palawija -->
    <div class="col-xl-5 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <div class="h9 font-weight-bold text-primary text-uppercase mb-1">Panen Palawija Tahunan</div>
                <a class="text-xs font-weight-bold text-primary text-uppercase mb-1" href="Laporan_Penjual">Lihat Detail</a>
            </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>
                    </div>
                <div class="mt-1 text-center small">
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