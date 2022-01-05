<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');

$tahun = $this->input->get('tahun',true);
$bulan = $this->input->get('bulan',true);

$panenpadiampelgading   = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Ampelgading'         AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpadibantur        = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Bantur'              AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpadibululawang    = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Bululawang'          AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpadidampit        = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Dampit'              AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpadidau           = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Dau'                 AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpadidonomulyo     = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Donomulyo'           AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpadigedangan      = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Gedangan'            AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpadigondanglegi   = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Gondanglegi'         AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpadijabung        = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Jabung'              AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpadikalipare      = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Kalipare'            AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpadikarangploso   = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Karangploso'         AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpadikasembon      = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Kasembon'            AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpadikepanjen      = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Kepanjen'            AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpadikromengan     = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Kromengan'           AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpadilawang        = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Lawang'              AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpadingajum        = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Ngajum'              AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpadingantang      = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Ngantang'            AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpadipagak         = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Pagak'               AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpadipagelaran     = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Pagelaran'           AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpadipakis         = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Pakis'               AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpadipakisaji      = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Pakisaji'            AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpadiponcokusumo   = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Poncokusumo'         AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpadipujon         = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Pujon'               AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpadisingosari     = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Singosari'           AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpadisumawe        = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Sumbermanjing Wetan' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpadisumberpucung  = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Sumberpucung'        AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpaditajinan       = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Tajinan'             AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpaditirtoyudo     = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Tirtoyudo'           AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpaditumpang       = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Tumpang'             AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpadituren         = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Turen'               AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpadiwagir         = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Wagir'               AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpadiwajak         = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Wajak'               AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenpadiwonosari      = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Wonosari'            AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

$pusopadi1  = $this->db->query("SELECT SUM(pusosawah+pusobukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','1')")->row_array();
$pusopadi2  = $this->db->query("SELECT SUM(pusosawah+pusobukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','2')")->row_array();
$pusopadi3  = $this->db->query("SELECT SUM(pusosawah+pusobukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','3')")->row_array();
$pusopadi4  = $this->db->query("SELECT SUM(pusosawah+pusobukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','4')")->row_array();
$pusopadi5  = $this->db->query("SELECT SUM(pusosawah+pusobukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','5')")->row_array();
$pusopadi6  = $this->db->query("SELECT SUM(pusosawah+pusobukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','6')")->row_array();
$pusopadi7  = $this->db->query("SELECT SUM(pusosawah+pusobukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','7')")->row_array();
$pusopadi8  = $this->db->query("SELECT SUM(pusosawah+pusobukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','8')")->row_array();
$pusopadi9  = $this->db->query("SELECT SUM(pusosawah+pusobukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','9')")->row_array();
$pusopadi10 = $this->db->query("SELECT SUM(pusosawah+pusobukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','10')")->row_array();
$pusopadi11 = $this->db->query("SELECT SUM(pusosawah+pusobukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','11')")->row_array();
$pusopadi12 = $this->db->query("SELECT SUM(pusosawah+pusobukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','12')")->row_array();
?>

<script>
    window.onload = function () 
    {;
        // Bar Chart Example
        var myBarChart = new Chart("myBarChart", {
        type: 'bar',
        data: {
            labels: ["Ampelgading", "Bantur", "Bululawang", "Dampit", "Dau", "Donomulyo", "Gedangan", "Gondanglegi", "Jabung", "Kalipare", "Karangploso", "Kasembon", "Kepanjen", "Kromengan", "Lawang", "Ngajum", "Ngantang", "Pagak", "Pagelaran", "Pakis", "Pakisaji", "Poncokusumo", "Pujon", "Singosari", "Sumbermanjing Wetan", "Sumberpucung", "Tajinan", "Tirtoyudo", "Tumpang", "Turen", "Wagir", "Wajak", "Wonosari"],
            datasets: [{
            label: "Revenue",
            // backgroundColor: "#4e73df",
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
			    'rgba(255, 159, 64)',
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
			    'rgba(255, 159, 64)',
                'rgba(255, 99, 132)',
			    'rgba(54, 162, 235)',
			    'rgba(255, 206, 86)',
			    'rgba(75, 192, 192)',
			    'rgba(153, 102, 255)',
			    'rgba(255, 159, 64)',
                'rgba(255, 99, 132)',
			    'rgba(54, 162, 235)',
			    'rgba(255, 206, 86)',
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
            // borderColor: "#4e73df",
            data: [ <?= $panenpadiampelgading   ['total']?>,
                    <?= $panenpadibantur        ['total']?>,
                    <?= $panenpadibululawang    ['total']?>,
                    <?= $panenpadidampit        ['total']?>,
                    <?= $panenpadidau           ['total']?>,
                    <?= $panenpadidonomulyo     ['total']?>,
                    <?= $panenpadigedangan      ['total']?>,
                    <?= $panenpadigondanglegi   ['total']?>,
                    <?= $panenpadijabung        ['total']?>,
                    <?= $panenpadikalipare      ['total']?>,
                    <?= $panenpadikarangploso   ['total']?>,
                    <?= $panenpadikasembon      ['total']?>,
                    <?= $panenpadikepanjen      ['total']?>,
                    <?= $panenpadikromengan     ['total']?>,
                    <?= $panenpadilawang        ['total']?>,
                    <?= $panenpadingajum        ['total']?>,
                    <?= $panenpadingantang      ['total']?>,
                    <?= $panenpadipagak         ['total']?>,
                    <?= $panenpadipagelaran     ['total']?>,
                    <?= $panenpadipakis         ['total']?>,
                    <?= $panenpadipakisaji      ['total']?>,
                    <?= $panenpadiponcokusumo   ['total']?>,
                    <?= $panenpadipujon         ['total']?>,
                    <?= $panenpadisingosari     ['total']?>,
                    <?= $panenpadisumawe        ['total']?>,
                    <?= $panenpadisumberpucung  ['total']?>,
                    <?= $panenpaditajinan       ['total']?>,
                    <?= $panenpaditirtoyudo     ['total']?>,
                    <?= $panenpaditumpang       ['total']?>,
                    <?= $panenpadituren         ['total']?>,
                    <?= $panenpadiwagir         ['total']?>,
                    <?= $panenpadiwajak         ['total']?>,
                    <?= $panenpadiwonosari      ['total']?>  ],
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
    }
</script>

<form method="get">
<div class="row">
    <!-- Grafik Padi -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <div class="col-lg-6 col-sm-auto h9 font-weight-bold text-primary text-uppercase mb-1">Panen Padi Bulanan Kabupaten Malang</div>
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
                    <select class="form-control w-100" name="bulan">
                        <option selected>
                            <?php 
                                if (empty($bulan)) {echo 'Pilih Bulan';} 
                                else { if ($bulan==1) { echo'Januari';}
                                       elseif ($bulan==2)   { echo 'Februari';}
                                       elseif ($bulan==3)   { echo 'Maret';}
                                       elseif ($bulan==4)   { echo 'April';}
                                       elseif ($bulan==5)   { echo 'Mei';}
                                       elseif ($bulan==6)   { echo 'Juni';}
                                       elseif ($bulan==7)   { echo 'Juli';}
                                       elseif ($bulan==8)   { echo 'Agustus';}
                                       elseif ($bulan==9)   { echo 'September';}
                                       elseif ($bulan==10)  { echo 'Oktober';}
                                       elseif ($bulan==11)  { echo 'November';}
                                       elseif ($bulan==12)  { echo 'Desember';}
                                       else { echo $bulan; } 
                                     }
                            ?> 
                        </option>
                                <option value="1">Januari</option>
                                <option value="2">Februari</option>
                                <option value="3" >Maret</option>
                                <option value="4" >April</option>
                                <option value="5" >Mei</option>
                                <option value="6" >Juni</option>
                                <option value="7" >Juli</option>
                                <option value="8" >Agustus</option>
                                <option value="9" >September</option>
                                <option value="10" >Oktober</option>
                                <option value="11" >November</option>
                                <option value="12" >Desember</option>
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
</form>