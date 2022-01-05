<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');

$tahun = $this->input->get('tahun',true);
$tahun1 = $this->input->get('tahun1',true);
$kecamatan = $this->input->get('kecamatan',true);

$panenpadi1  = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='$kecamatan' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','1')")->row_array();
$panenpadi2  = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='$kecamatan' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','2')")->row_array();
$panenpadi3  = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='$kecamatan' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','3')")->row_array();
$panenpadi4  = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='$kecamatan' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','4')")->row_array();
$panenpadi5  = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='$kecamatan' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','5')")->row_array();
$panenpadi6  = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='$kecamatan' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','6')")->row_array();
$panenpadi7  = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='$kecamatan' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','7')")->row_array();
$panenpadi8  = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='$kecamatan' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','8')")->row_array();
$panenpadi9  = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='$kecamatan' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','9')")->row_array();
$panenpadi10 = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='$kecamatan' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','10')")->row_array();
$panenpadi11 = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='$kecamatan' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','11')")->row_array();
$panenpadi12 = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='$kecamatan' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','12')")->row_array();

$panen1  = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun1','/','1')")->row_array();
$panen2  = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun1','/','2')")->row_array();
$panen3  = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun1','/','3')")->row_array();
$panen4  = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun1','/','4')")->row_array();
$panen5  = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun1','/','5')")->row_array();
$panen6  = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun1','/','6')")->row_array();
$panen7  = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun1','/','7')")->row_array();
$panen8  = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun1','/','8')")->row_array();
$panen9  = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun1','/','9')")->row_array();
$panen10 = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun1','/','10')")->row_array();
$panen11 = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun1','/','11')")->row_array();
$panen12 = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun1','/','12')")->row_array();
?>

<script>
    window.onload = function () 
    {;
        // Bar Chart Example
        var myBarChart = new Chart("myBarChart", {
        type: 'bar',
        data: {
            labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
            datasets: [{
            label: "Revenue",
            backgroundColor: "#4e73df",
            backgroundColor:  [
                'rgba(255, 99, 132)',
			    'rgba(54, 162, 235)',
			    'rgba(255, 206, 86)',
			    'rgba(75, 192, 192)',
			    'rgba(153, 102, 255)',
			    'rgba(255, 159, 64)',
                'rgba(255, 99, 132)',
			    'rgba(54, 162, 235)',
			    'rgba(255, 206, 86)',
			    'rgba(75, 192, 192)',
			    'rgba(153, 102, 255)',
			    'rgba(255, 159, 64)'
                ],
			borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
                ],
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
                maxTicksLimit: 33
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

        var myLineChart = new Chart("myLineChart", {
        type: 'line',
        data: {
            labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
            datasets: [{
            lineTension: 0.3,
            backgroundColor: "rgba(78, 115, 223, 0.05)",
            borderColor: "rgba(78, 115, 223, 1)",
            pointRadius: 3,
            pointBackgroundColor: "rgba(78, 115, 223, 1)",
            pointBorderColor: "rgba(78, 115, 223, 1)",
            pointHoverRadius: 3,
            pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
            pointHoverBorderColor: "rgba(78, 115, 223, 1)",
            pointHitRadius: 10,
            pointBorderWidth: 2,
            data: [ <?= $panen1['total']?>,
                    <?= $panen2['total']?>,
                    <?= $panen3['total']?>,
                    <?= $panen4['total']?>,
                    <?= $panen5['total']?>,
                    <?= $panen6['total']?>,
                    <?= $panen7['total']?>,
                    <?= $panen8['total']?>,
                    <?= $panen9['total']?>,
                    <?= $panen10['total']?>,
                    <?= $panen11['total']?>,
                    <?= $panen12['total']?>],
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
                maxTicksLimit: 33
                },
                maxBarThickness: 25,
            }],
            yAxes: [{
                ticks: {
                min: 0,
                padding: 10,
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
        myLineChart.render();
    }
</script>

<form method="get">
<div class="row">
    <!-- Grafik Padi -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <div class="col-lg-6 col-sm-auto h9 font-weight-bold text-primary text-uppercase mb-1">Panen Padi Kecamatan <?php echo $kecamatan ; ?> Tahun <?php echo $tahun ; ?></div>
                <div class="col-lg-2 col-sm-auto">
                    <select class="form-control w-100" name="tahun">
                        <option selected>
                            <?php 
                                if (empty($tahun)) {echo 'Pilih Tahun';} 
                                else {echo $tahun;}
                            ?> 
                        </option>
                        <?php foreach ($datatahun as $key) { ?>
                            <option value='<?php echo $key->tahun ?>'><?php echo $key->tahun ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-lg-2 col-sm-auto">
                    <select class="form-control w-100" name="kecamatan">
                        <option selected>
                            <?php 
                                if (empty($kecamatan)) {echo 'Pilih Kecamatan';} 
                                else {echo $kecamatan;}
                            ?> 
                        </option>
                        <?php foreach ($datakec as $key) { ?>
                            <option value='<?php echo $key->nama_kecamatan ?>'><?php echo $key->nama_kecamatan ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-auto m-2">
                    <button type="submit" class="btn btn-success btn-icon-split">
                        <span class="text">Tampilkan</span>
                    </button>   
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myBarChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <!-- Grafik Padi -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <div class="col-lg-8 col-sm-auto h9 font-weight-bold text-primary text-uppercase mb-1">Panen Padi Kabupaten Malang Tahun <?php echo $tahun1 ; ?></div>
                <div class="col-lg-2 col-sm-auto">
                    <select class="form-control w-100" name="tahun1">
                        <option selected>
                            <?php 
                                if (empty($tahun1)) {echo 'Pilih Tahun';} 
                                else {echo $tahun1;}
                            ?> 
                        </option>
                        <?php foreach ($datatahun as $key) { ?>
                            <option value='<?php echo $key->tahun ?>'><?php echo $key->tahun ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-auto m-2">
                    <button type="submit" class="btn btn-success btn-icon-split">
                        <span class="text">Tampilkan</span>
                    </button>   
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myLineChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
</form>