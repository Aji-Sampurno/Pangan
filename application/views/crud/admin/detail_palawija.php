<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');

$bulan = $this->input->get('bulan', true);
$tahun = $this->input->get('tahun',true);
$provinsi = $this->input->get('provinsi',true);
$kabkota = $this->input->get('kabkota',true);
$kecamatan = $this->input->get('kecamatan',true);

// jumlah jagung sawah
$panenjs = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='jagung' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudajs = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='jagung' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakjs = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='jagung' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamjs = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='jagung' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusojs = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='jagung' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// jumlah jagung bukan sawah
$panenjb = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='jagung' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudajb = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='jagung' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakjb = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='jagung' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamjb = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='jagung' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusojb = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='jagung' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// jagung hibrida sawah
$panenjhs = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='jagung' AND jenis_tanaman='jagung hibrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudajhs = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='jagung' AND jenis_tanaman='jagung hibrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakjhs = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='jagung' AND jenis_tanaman='jagung hibrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamjhs = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='jagung' AND jenis_tanaman='jagung hibrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusojhs = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='jagung' AND jenis_tanaman='jagung hibrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// jagung hibrida bukan sawah
$panenjhb = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='jagung' AND jenis_tanaman='jagung hibrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudajhb = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='jagung' AND jenis_tanaman='jagung hibrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakjhb = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='jagung' AND jenis_tanaman='jagung hibrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamjhb = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='jagung' AND jenis_tanaman='jagung hibrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusojhb = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='jagung' AND jenis_tanaman='jagung hibrida' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// jagung hibrida bantuan pemerintah sawah
$panenjhbs = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='jagung' AND jenis_tanaman='jagung hibrida' AND bantuan='bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudajhbs = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='jagung' AND jenis_tanaman='jagung hibrida' AND bantuan='bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakjhbs = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='jagung' AND jenis_tanaman='jagung hibrida' AND bantuan='bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamjhbs = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='jagung' AND jenis_tanaman='jagung hibrida' AND bantuan='bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusojhbs = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='jagung' AND jenis_tanaman='jagung hibrida' AND bantuan='bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// jagung hibrida bantuan pemerintah bukan sawah
$panenjhbb = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='jagung' AND jenis_tanaman='jagung hibrida' AND bantuan='bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudajhbb = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='jagung' AND jenis_tanaman='jagung hibrida' AND bantuan='bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakjhbb = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='jagung' AND jenis_tanaman='jagung hibrida' AND bantuan='bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamjhbb = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='jagung' AND jenis_tanaman='jagung hibrida' AND bantuan='bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusojhbb = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='jagung' AND jenis_tanaman='jagung hibrida' AND bantuan='bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// jagung hibrida non bantuan pemerintah sawah
$panenjhns = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='jagung' AND jenis_tanaman='jagung hibrida' AND bantuan='non bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudajhns = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='jagung' AND jenis_tanaman='jagung hibrida' AND bantuan='non bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakjhns = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='jagung' AND jenis_tanaman='jagung hibrida' AND bantuan='non bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamjhns = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='jagung' AND jenis_tanaman='jagung hibrida' AND bantuan='non bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusojhns = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='jagung' AND jenis_tanaman='jagung hibrida' AND bantuan='non bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// jagung hibrida non bantuan pemerintah bukan sawah
$panenjhnb = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='jagung' AND jenis_tanaman='jagung hibrida' AND bantuan='non bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudajhnb = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='jagung' AND jenis_tanaman='jagung hibrida' AND bantuan='non bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakjhnb = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='jagung' AND jenis_tanaman='jagung hibrida' AND bantuan='non bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamjhnb = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='jagung' AND jenis_tanaman='jagung hibrida' AND bantuan='non bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusojhnb = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='jagung' AND jenis_tanaman='jagung hibrida' AND bantuan='non bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// jagung komposit sawah
$panenjks = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='jagung' AND jenis_tanaman='jagung komposit'  AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudajks = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='jagung' AND jenis_tanaman='jagung komposit' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakjks = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='jagung' AND jenis_tanaman='jagung komposit'  AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamjks = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='jagung' AND jenis_tanaman='jagung komposit'  AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusojks = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='jagung' AND jenis_tanaman='jagung komposit' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// jagung komposit bukan sawah
$panenjkb = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='jagung' AND jenis_tanaman='jagung komposit' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudajkb = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='jagung' AND jenis_tanaman='jagung komposit' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakjkb = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='jagung' AND jenis_tanaman='jagung komposit' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamjkb = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='jagung' AND jenis_tanaman='jagung komposit'  AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusojkb = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='jagung' AND jenis_tanaman='jagung komposit' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// jagung lokal sawah
$panenjls = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='jagung' AND jenis_tanaman='jagung lokal'  AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudajls = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='jagung' AND jenis_tanaman='jagung lokal' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakjls = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='jagung' AND jenis_tanaman='jagung lokal'  AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamjls = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='jagung' AND jenis_tanaman='jagung lokal'  AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusojls = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='jagung' AND jenis_tanaman='jagung lokal' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// jagung lokal bukan sawah
$panenjlb = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='jagung' AND jenis_tanaman='jagung lokal' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudajlb = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='jagung' AND jenis_tanaman='jagung lokal' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakjlb = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='jagung' AND jenis_tanaman='jagung lokal' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamjlb = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='jagung' AND jenis_tanaman='jagung lokal'  AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusojlb = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='jagung' AND jenis_tanaman='jagung lokal' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// kedelai sawah
$panenks = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='kedelai' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudaks = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='kedelai' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakks = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='kedelai' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamks = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='kedelai' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusoks = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='kedelai' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// kedelai bukan sawah
$panenkb = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='kedelai' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudakb = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='kedelai' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakkb = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='kedelai' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamkb = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='kedelai' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusokb = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='kedelai' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// kedelai bantuan pemerintah sawah
$panenkbs = $this->db->query("SELECT panen as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='kedelai' AND bantuan='bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudakbs = $this->db->query("SELECT panen_muda as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='kedelai' AND bantuan='bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakkbs = $this->db->query("SELECT pakan_ternak as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='kedelai' AND bantuan='bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamkbs = $this->db->query("SELECT tanam as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='kedelai' AND bantuan='bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusokbs = $this->db->query("SELECT puso as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='kedelai'AND bantuan='bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// kedelai bantuan pemerintah bukan sawah
$panenkbb = $this->db->query("SELECT panen as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='kedelai' AND bantuan='bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudakbb = $this->db->query("SELECT panen_muda as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='kedelai' AND bantuan='bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakkbb = $this->db->query("SELECT pakan_ternak as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='kedelai' AND bantuan='bantuan pemerintah'  AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamkbb = $this->db->query("SELECT tanam as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='kedelai' AND bantuan='bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusokbb = $this->db->query("SELECT puso as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='kedelai' AND bantuan='bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// kedelai non bantuan pemerintah sawah
$panenkns = $this->db->query("SELECT panen as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='kedelai' AND bantuan='non bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudakns = $this->db->query("SELECT panen_muda as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='kedelai' AND bantuan='non bantuan pemerintah'AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakkns = $this->db->query("SELECT pakan_ternak as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='kedelai' AND bantuan='non bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamkns = $this->db->query("SELECT tanam as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='kedelai' AND bantuan='non bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusokns = $this->db->query("SELECT puso as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='kedelai' AND bantuan='non bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// kedelai non bantuan pemerintah bukan sawah
$panenknb = $this->db->query("SELECT panen as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='kedelai' AND bantuan='non bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudaknb = $this->db->query("SELECT panen_muda as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='kedelai' AND bantuan='non bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakknb = $this->db->query("SELECT pakan_ternak as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='kedelai' AND bantuan='non bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamknb = $this->db->query("SELECT tanam as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='kedelai' AND bantuan='non bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusoknb = $this->db->query("SELECT puso as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='kedelai' AND bantuan='non bantuan pemerintah'AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// kacang tanah sawah
$panenkts = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='kacang tanah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudakts = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='kacang tanah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakkts = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='kacang tanah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamkts = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='kacang tanah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusokts = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='kacang tanah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// kacang tanah bukan sawah
$panenktb = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='kacang tanah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudaktb = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='kacang tanah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakktb = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='kacang tanah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamktb = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='kacang tanah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusoktb = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='kacang tanah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// singkong sawah
$panenss = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='singkong' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudass = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='singkong' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakss = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='singkong' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamss = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='singkong' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusoss = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='singkong' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// singkong bukan sawah
$panensb = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='singkong' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudasb = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='singkong' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternaksb = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='singkong' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamsb = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='singkong' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusosb = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='singkong' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// singkong bantuan pemerintah sawah
$panensbs = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='singkong' AND bantuan='bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudasbs = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='singkong' AND bantuan='bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternaksbs = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='singkong' AND bantuan='bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamsbs = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='singkong' AND bantuan='bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusosbs = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='singkong' AND bantuan='bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// singkong bantuan pemerintah bukan sawah
$panensbb = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='singkong' AND bantuan='bantuan pemerintah'AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudasbb = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='singkong' AND bantuan='bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternaksbb = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='singkong' AND bantuan='bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamsbb = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='singkong' AND bantuan='bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusosbb = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='singkong' AND bantuan='bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// singkong non bantuan pemerintah sawah
$panensns = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='singkong' AND bantuan='non bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudasns = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='singkong' AND bantuan='non bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternaksns = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='singkong' AND bantuan='non bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamsns = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='singkong' AND bantuan='non bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusosns = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='singkong' AND bantuan='non bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// singkong non bantuan pemerintah bukan sawah
$panensnb = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='singkong' AND bantuan='non bantuan pemerintah'AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudasnb = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='singkong' AND bantuan='non bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternaksnb = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='singkong' AND bantuan='non bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamsnb = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='singkong' AND bantuan='non bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusosnb = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='singkong' AND bantuan='non bantuan pemerintah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// ubi jalar sawah
$panenus = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='ubi jalar' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudaus = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='ubi jalar' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakus = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='ubi jalar' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamus = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='ubi jalar' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusous = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='ubi jalar' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// ubi jalar bukan sawah
$panenub = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='ubi jalar' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudaub = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='ubi jalar' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakub = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='ubi jalar' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamub = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='ubi jalar' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusoub = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='ubi jalar' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// kacang hijau sawah
$panenkhs = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='kacang hijau' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudakhs = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='kacang hijau' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakkhs = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='kacang hijau' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamkhs = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='kacang hijau' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusokhs = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='kacang hijau' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// kacang hijau bukan sawah
$panenkhb = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='kacang hijau' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudakhb = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='kacang hijau' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakkhb = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='kacang hijau' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamkhb = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='kacang hijau' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusokhb = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='kacang hijau' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// sorgum sawah
$panencs = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='sorgum' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudacs = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='sorgum' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakcs = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='sorgum' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamcs = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='sorgum' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusocs = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='sorgum' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// sorgum bukan sawah
$panencb = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='sorgum' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudacb = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='sorgum' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakcb = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='sorgum' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamcb = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='sorgum' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusocb = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='sorgum' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// gandum sawah
$panengs = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='gandum' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudags = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='gandum' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakgs = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='gandum' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamgs = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='gandum' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusogs = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='gandum' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// gandum bukan sawah
$panengb = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='gandum' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudagb = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='gandum' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakgb = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='gandum' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamgb = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='gandum' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusogb = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='gandum' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// talas sawah
$panents = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='talas' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudats = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='talas' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakts = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='talas' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamgts = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='talas' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusogts = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='talas' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// talas bukan sawah
$panentb = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='talas' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudatb = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='talas' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternaktb = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='talas' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamtb = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='talas' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusotb = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='talas' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// ganyong sawah
$panengys = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='ganyong' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudagys = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='ganyong' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakgys = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='ganyong' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamggys = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='ganyong' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusogys = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='ganyong' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// ganyong bukan sawah
$panengyb = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='ganyong' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudagyb = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='ganyong' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakgyb = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='ganyong' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamgyb = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='ganyong' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusogyb = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='ganyong' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// umbi lainnya sawah
$panenuls = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='umbi lainnya' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudaguls = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='umbi lainnya' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakuls = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='umbi lainnya' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamuls = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='umbi lainnya' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusouls = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='sawah' AND tanaman='umbi lainnya' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

// umbi lainnya bukan sawah
$panenulb = $this->db->query("SELECT SUM(panen) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='umbi lainnya' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenmudaulb = $this->db->query("SELECT SUM(panen_muda) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='umbi lainnya' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$panenternakulb = $this->db->query("SELECT SUM(pakan_ternak) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='umbi lainnya' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$tanamulb = $this->db->query("SELECT SUM(tanam) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='umbi lainnya' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
$pusoulb = $this->db->query("SELECT SUM(puso) as total FROM palawija WHERE provinsi='$provinsi' AND kabkota='$kabkota' AND kecamatan='$kecamatan'  AND lahan='bukan sawah' AND tanaman='umbi lainnya' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

?>
<form method="get">
<div class="row">
    <!-- judul data -->
    <div class="col-sm-12"> 
	    <div class="mb-3"> 
	        <div class="text-center"> 
	            <h2 class="text-primary">LAPORAN LUAS TANAMAN PALAWIJA</h2>
	        </div>
        </div>
    </div>
    <!-- kondisi data -->
    <div class="col-sm-12">
        <div class="px-3">    
            <div class="row">
                <div class="col-6">
                    <div class="row justify-content-start">
                        <div class="col-auto mr-4">
                            <h6 class="p-2 text-primary">PROVINSI</h6>
                        </div>
                        <div class="col-lg-4 col-sm-auto">
                            <select class="form-control w-100" name="provinsi">
                                <option selected>
                                    <?php
                                        if (empty($provinsi)) {echo 'Pilih Provinsi';} 
                                        else {echo $provinsi;}
                                    ?>   
                                </option>
                                <option value="Jawa Timur" >Jawa Timur</option>
                            </select>
                            <!-- <input type="text" class="form-control" name="provinsi" value=> -->
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row justify-content-end">
                        <div class="col-auto">
                            <h6 class="p-2 text-primary">BULAN</h6>
                        </div>
                        <div class="col-lg-4 col-sm-auto">
                            <select class="form-control w-100" name="bulan">
                                <option selected>
                                    <?php
                                        if (empty($bulan)) {echo 'Pilih Bulan';} 
                                        elseif ($bulan=='1') {echo 'Januari';}
                                        elseif ($bulan=='2') {echo 'Februari';}
                                        elseif ($bulan=='3') {echo 'Maret';}
                                        elseif ($bulan=='4') {echo 'April';}
                                        elseif ($bulan=='5') {echo 'Mei';}
                                        elseif ($bulan=='6') {echo 'Juni';}
                                        elseif ($bulan=='7') {echo 'Juli';}
                                        elseif ($bulan=='8') {echo 'Agustus';}
                                        elseif ($bulan=='9') {echo 'September';}
                                        elseif ($bulan=='10') {echo 'Oktober';}
                                        elseif ($bulan=='11') {echo 'Nobember';}
                                        else {echo 'Desember';}
                                    ?>   
                                </option>
                                <option value="1" >Januari</option>
                                <option value="2" >Februari</option>
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
                    </div>
                </div>
            </div>   
        </div>
    </div>
    <div class="col-sm-12">
        <div class="px-3">    
            <div class="row">
                <div class="col-6">
                    <div class="row justify-content-start">
                        <div class="col-auto mr-3">
                            <h6 class="p-2 text-primary">KAB./KOTA</h6>
                        </div>
                        <div class="col-lg-4 col-sm-auto">
                            <select class="form-control w-100" name="kabkota">
                                <option selected>
                                    <?php
                                        if (empty($kabkota)) {echo 'Pilih Kab./Kota';} 
                                        else {echo $kabkota;}
                                    ?> 
                                </option>
                                <option value="Malang" >Kabupaten Malang</option>
                            </select>
                            <!-- <input type="text" class="form-control" name="kabkota" value=> -->
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row justify-content-end">
                        <div class="col-auto">
                            <h6 class="p-2 text-primary">TAHUN</h6>
                        </div>
                        <div class="col-auto">
                            <input type="number" class="form-control" name="tahun" value=<?= $tahun ?>>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
    <div class="col-sm-12">
        <div class="px-3">    
            <div class="row">
                <div class="col-6">
                    <div class="row justify-content-start">
                        <div class="col-auto">
                            <h6 class="p-2 text-primary">KECAMATAN</h6>
                        </div>
                        <div class="col-lg-4 col-sm-auto">
                            <select class="form-control w-100" name="kecamatan">
                                <option selected>
                                    <?php
                                        if (empty($kecamatan)) {echo 'Pilih Kecamatan';} 
                                        else {echo $kecamatan;}
                                    ?> 
                                </option>
                                <option value="Kepanjen" >Kecamatan Kepanjen</option>
                            </select>
                            <!-- <input type="text" class="form-control" name="kecamatan" value=<?= $kecamatan ?>> -->
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row justify-content-end">
                        <div class="col-auto m-2">
                            <button type="submit" class="btn btn-success btn-icon-split">
                                <span class="text">Tampilkan</span>
                            </button>   
                        </div>
                        <div class="col-auto m-2">
                            <button type="submit" class="btn btn-success btn-icon-split">
                                <span class="text">Cetak</span>
                            </button>   
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
    <!-- tabel data -->
	<div class="col"> 
	    <div class="p-0"> 
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table-bordered text-center" id="dataTabe" cellspacing="2">
                        <thead>
                            <tr>
                                <th width="30px" rowspan="2">No</th>
                                <th width="250px" rowspan="2">Uraian</th>
                                <th width="800px" colspan="7">Lahan Sawah</th>
                                <th width="800px" colspan="7">Lahan Bukan Sawah</th>
                                <th width="90px" rowspan="2">Produksi di Lahan Sawah dan Lahan Bukan Sawah (Ton)</th>
                            </tr>
                            <tr>
                                <th>Tanaman Akhir Bulan Yang Lalu</th>
                                <th>Panen *)</th>
                                <th>Panen Muda **)</th>
                                <th>Panen Untuk Hijauan Pakan Ternak ***)</th>
                                <th>Tanam</th>
                                <th>Puso/Rusak</th>
                                <th>Tanaman Akhir Bulan Laporan</th>
                                <th>Tanaman Akhir Bulan Yang Lalu</th>
                                <th>Panen *)</th>
                                <th>Panen Muda **)</th>
                                <th>Panen Untuk Hijauan Pakan Ternak ***)</th>
                                <th>Tanam</th>
                                <th>Puso/Rusak</th>
                                <th>Tanaman Akhir Bulan Laporan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td>6</td>
                                <td>7</td>
                                <td>8</td>
                                <td>9</td>
                                <td>10</td>
                                <td>11</td>
                                <td>12</td>
                                <td>13</td>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                                <td>17</td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td  class="text-left">JUMLAH JAGUNG</td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenjs['total'])) {echo '0';} 
                                        else {
                                            echo $panenjs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudajs['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudajs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakjs['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakjs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamjs['total'])) {echo '0';} 
                                        else {
                                            echo $tanamjs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusojs['total'])) {echo '0';} 
                                        else {
                                            echo $pusojs['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenjb['total'])) {echo '0';} 
                                        else {
                                            echo $panenjb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudajb['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudajb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakjb['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakjb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamjb['total'])) {echo '0';} 
                                        else {
                                            echo $tanamjb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusojb['total'])) {echo '0';} 
                                        else {
                                            echo $pusojb['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td  class="text-left">1. Hibrida</td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenjhs['total'])) {echo '0';} 
                                        else {
                                            echo $panenjhs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudajhs['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudajhs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakjhs['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakjhs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamjhs['total'])) {echo '0';} 
                                        else {
                                            echo $tanamjhs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusojhs['total'])) {echo '0';} 
                                        else {
                                            echo $pusojhs['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenjhb['total'])) {echo '0';} 
                                        else {
                                            echo $panenjhb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudajhb['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudajhb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakjhb['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakjhb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamjhb['total'])) {echo '0';} 
                                        else {
                                            echo $tanamjhb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusojhb['total'])) {echo '0';} 
                                        else {
                                            echo $pusojhb['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td  class="text-left">1). Bantuan Pemerintah</td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenjhbs['total'])) {echo '0';} 
                                        else {
                                            echo $panenjhbs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudajhbs['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudajhbs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakjhbs['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakjhbs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamjhbs['total'])) {echo '0';} 
                                        else {
                                            echo $tanamjhbs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusojhbs['total'])) {echo '0';} 
                                        else {
                                            echo $pusojhbs['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenjhbb['total'])) {echo '0';} 
                                        else {
                                            echo $panenjhbb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudajhbb['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudajhbb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakjhbb['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakjhbb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamjhbb['total'])) {echo '0';} 
                                        else {
                                            echo $tanamjhbb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusojhbb['total'])) {echo '0';} 
                                        else {
                                            echo $pusojhbb['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td  class="text-left">2). Non Bantuan Pemerintah</td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenjhns['total'])) {echo '0';} 
                                        else {
                                            echo $panenjhns['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudajhns['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudajhns['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakjhns['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakjhns['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamjhns['total'])) {echo '0';} 
                                        else {
                                            echo $tanamjhns['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusojhns['total'])) {echo '0';} 
                                        else {
                                            echo $pusojhns['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenjhnb['total'])) {echo '0';} 
                                        else {
                                            echo $panenjhnb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudajhnb['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudajhnb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakjhnb['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakjhnb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamjhnb['total'])) {echo '0';} 
                                        else {
                                            echo $tanamjhnb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusojhnb['total'])) {echo '0';} 
                                        else {
                                            echo $pusojhnb['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td  class="text-left">b. Komposit</td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenjks['total'])) {echo '0';} 
                                        else {
                                            echo $panenjks['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudajks['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudajks['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakjks['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakjks['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamjks['total'])) {echo '0';} 
                                        else {
                                            echo $tanamjks['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusojks['total'])) {echo '0';} 
                                        else {
                                            echo $pusojks['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenjkb['total'])) {echo '0';} 
                                        else {
                                            echo $panenjkb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudajkb['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudajkb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakjkb['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakjkb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamjkb['total'])) {echo '0';} 
                                        else {
                                            echo $tanamjkb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusojkb['total'])) {echo '0';} 
                                        else {
                                            echo $pusojkb['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td  class="text-left">c. Lokal</td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenjls['total'])) {echo '0';} 
                                        else {
                                            echo $panenjls['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudajls['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudajls['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakjls['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakjls['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamjls['total'])) {echo '0';} 
                                        else {
                                            echo $tanamjls['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusojls['total'])) {echo '0';} 
                                        else {
                                            echo $pusojls['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenjlb['total'])) {echo '0';} 
                                        else {
                                            echo $panenjlb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudajlb['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudajlb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakjlb['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakjlb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamjlb['total'])) {echo '0';} 
                                        else {
                                            echo $tanamjlb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusojlb['total'])) {echo '0';} 
                                        else {
                                            echo $pusojlb['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td  class="text-left">KEDELAI</td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenks['total'])) {echo '0';} 
                                        else {
                                            echo $panenks['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudaks['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudaks['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakks['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakks['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamks['total'])) {echo '0';} 
                                        else {
                                            echo $tanamks['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusoks['total'])) {echo '0';} 
                                        else {
                                            echo $pusoks['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenkb['total'])) {echo '0';} 
                                        else {
                                            echo $panenkb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudakb['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudakb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakkb['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakkb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamkb['total'])) {echo '0';} 
                                        else {
                                            echo $tanamkb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusokb['total'])) {echo '0';} 
                                        else {
                                            echo $pusokb['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td  class="text-left">a. Bantuan Pemerintah</td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenkbs['total'])) {echo '0';} 
                                        else {
                                            echo $panenkbs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudakbs['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudakbs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakkbs['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakkbs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamkbs['total'])) {echo '0';} 
                                        else {
                                            echo $tanamkbs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusokbs['total'])) {echo '0';} 
                                        else {
                                            echo $pusokbs['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenkbb['total'])) {echo '0';} 
                                        else {
                                            echo $panenkbb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudakbb['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudakbb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakkbb['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakkbb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamkbb['total'])) {echo '0';} 
                                        else {
                                            echo $tanamkbb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusokbb['total'])) {echo '0';} 
                                        else {
                                            echo $pusokbb['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td  class="text-left">b. Non Bantuan Pemerintah</td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenkns['total'])) {echo '0';} 
                                        else {
                                            echo $panenkns['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudakns['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudakns['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakkns['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakkns['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamkns['total'])) {echo '0';} 
                                        else {
                                            echo $tanamkns['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusokns['total'])) {echo '0';} 
                                        else {
                                            echo $pusokns['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenknb['total'])) {echo '0';} 
                                        else {
                                            echo $panenknb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudaknb['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudaknb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakknb['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakknb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamknb['total'])) {echo '0';} 
                                        else {
                                            echo $tanamknb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusoknb['total'])) {echo '0';} 
                                        else {
                                            echo $pusoknb['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td  class="text-left">KACANG TANAH</td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenkts['total'])) {echo '0';} 
                                        else {
                                            echo $panenkts['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudakts['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudakts['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakkts['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakkts['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamkts['total'])) {echo '0';} 
                                        else {
                                            echo $tanamkts['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusokts['total'])) {echo '0';} 
                                        else {
                                            echo $pusokts['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenktb['total'])) {echo '0';} 
                                        else {
                                            echo $panenktb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudaktb['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudaktb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakktb['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakktb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamktb['total'])) {echo '0';} 
                                        else {
                                            echo $tanamktb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusoktb['total'])) {echo '0';} 
                                        else {
                                            echo $pusoktb['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td  class="text-left">JUMLAH UBI KAYU/SINGKONG</td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenss['total'])) {echo '0';} 
                                        else {
                                            echo $panenss['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudass['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudass['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakss['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakss['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamss['total'])) {echo '0';} 
                                        else {
                                            echo $tanamss['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusoss['total'])) {echo '0';} 
                                        else {
                                            echo $pusoss['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panensb['total'])) {echo '0';} 
                                        else {
                                            echo $panensb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudasb['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudasb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternaksb['total'])) {echo '0';} 
                                        else {
                                            echo $panenternaksb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamsb['total'])) {echo '0';} 
                                        else {
                                            echo $tanamsb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusosb['total'])) {echo '0';} 
                                        else {
                                            echo $pusosb['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td  class="text-left">a. Bantuan Pemerintah</td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panensbs['total'])) {echo '0';} 
                                        else {
                                            echo $panensbs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudasbs['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudasbs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternaksbs['total'])) {echo '0';} 
                                        else {
                                            echo $panenternaksbs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamsbs['total'])) {echo '0';} 
                                        else {
                                            echo $tanamsbs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusosbs['total'])) {echo '0';} 
                                        else {
                                            echo $pusosbs['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panensbb['total'])) {echo '0';} 
                                        else {
                                            echo $panensbb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudasbb['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudasbb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternaksbb['total'])) {echo '0';} 
                                        else {
                                            echo $panenternaksbb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamsbb['total'])) {echo '0';} 
                                        else {
                                            echo $tanamsbb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusosbb['total'])) {echo '0';} 
                                        else {
                                            echo $pusosbb['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td  class="text-left">b. Non Bantuan Pemerintah</td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panensns['total'])) {echo '0';} 
                                        else {
                                            echo $panensns['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudasns['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudasns['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternaksns['total'])) {echo '0';} 
                                        else {
                                            echo $panenternaksns['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamsns['total'])) {echo '0';} 
                                        else {
                                            echo $tanamsns['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusosns['total'])) {echo '0';} 
                                        else {
                                            echo $pusosns['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panensnb['total'])) {echo '0';} 
                                        else {
                                            echo $panensnb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudasnb['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudasnb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternaksnb['total'])) {echo '0';} 
                                        else {
                                            echo $panenternaksnb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamsnb['total'])) {echo '0';} 
                                        else {
                                            echo $tanamsnb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusosnb['total'])) {echo '0';} 
                                        else {
                                            echo $pusosnb['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td  class="text-left">UBI JALAR/KETELA RAMBAT</td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenus['total'])) {echo '0';} 
                                        else {
                                            echo $panenus['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudaus['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudaus['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakus['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakus['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamus['total'])) {echo '0';} 
                                        else {
                                            echo $tanamus['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusous['total'])) {echo '0';} 
                                        else {
                                            echo $pusous['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenub['total'])) {echo '0';} 
                                        else {
                                            echo $panenub['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudaub['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudaub['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakub['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakub['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamub['total'])) {echo '0';} 
                                        else {
                                            echo $tanamub['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusoub['total'])) {echo '0';} 
                                        else {
                                            echo $pusoub['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>6.</td>
                                <td  class="text-left">KACANG HIJAU</td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenkhs['total'])) {echo '0';} 
                                        else {
                                            echo $panenkhs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudakhs['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudakhs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakkhs['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakkhs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamkhs['total'])) {echo '0';} 
                                        else {
                                            echo $tanamkhs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusokhs['total'])) {echo '0';} 
                                        else {
                                            echo $pusokhs['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenkhb['total'])) {echo '0';} 
                                        else {
                                            echo $panenkhb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudakhb['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudakhb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakkhb['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakkhb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamkhb['total'])) {echo '0';} 
                                        else {
                                            echo $tanamkhb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusokhb['total'])) {echo '0';} 
                                        else {
                                            echo $pusokhb['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>7.</td>
                                <td  class="text-left">SORGUM/CANTEL</td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panencs['total'])) {echo '0';} 
                                        else {
                                            echo $panencs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudacs['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudacs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakcs['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakcs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamcs['total'])) {echo '0';} 
                                        else {
                                            echo $tanamcs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusocs['total'])) {echo '0';} 
                                        else {
                                            echo $pusocs['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panencb['total'])) {echo '0';} 
                                        else {
                                            echo $panencb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudacb['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudacb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakcb['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakcb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamcb['total'])) {echo '0';} 
                                        else {
                                            echo $tanamcb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusocb['total'])) {echo '0';} 
                                        else {
                                            echo $pusocb['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>8.</td>
                                <td  class="text-left"> GANDUM</td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panengs['total'])) {echo '0';} 
                                        else {
                                            echo $panengs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudags['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudags['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakgs['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakgs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamgs['total'])) {echo '0';} 
                                        else {
                                            echo $tanamgs['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusogs['total'])) {echo '0';} 
                                        else {
                                            echo $pusogs['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panengb['total'])) {echo '0';} 
                                        else {
                                            echo $panengb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudagb['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudagb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakgb['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakgb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamgb['total'])) {echo '0';} 
                                        else {
                                            echo $tanamgb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusogb['total'])) {echo '0';} 
                                        else {
                                            echo $pusogb['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>9.</td>
                                <td  class="text-left">TALAS</td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panents['total'])) {echo '0';} 
                                        else {
                                            echo $panents['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudats['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudats['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakts['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakts['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamts['total'])) {echo '0';} 
                                        else {
                                            echo $tanamts['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusots['total'])) {echo '0';} 
                                        else {
                                            echo $pusots['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panentb['total'])) {echo '0';} 
                                        else {
                                            echo $panentb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudatb['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudatb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternaktb['total'])) {echo '0';} 
                                        else {
                                            echo $panenternaktb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamtb['total'])) {echo '0';} 
                                        else {
                                            echo $tanamtb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusotb['total'])) {echo '0';} 
                                        else {
                                            echo $pusotb['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>10.</td>
                                <td  class="text-left">GANYONG</td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panengys['total'])) {echo '0';} 
                                        else {
                                            echo $panengys['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudagys['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudagys['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakgys['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakgys['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamgys['total'])) {echo '0';} 
                                        else {
                                            echo $tanamgys['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusogys['total'])) {echo '0';} 
                                        else {
                                            echo $pusogys['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panengyb['total'])) {echo '0';} 
                                        else {
                                            echo $panengyb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudagyb['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudagyb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakgyb['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakgyb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamgyb['total'])) {echo '0';} 
                                        else {
                                            echo $tanamgyb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusogyb['total'])) {echo '0';} 
                                        else {
                                            echo $pusogyb['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>11.</td>
                                <td  class="text-left">UMBI LAINNYA</td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenuls['total'])) {echo '0';} 
                                        else {
                                            echo $panenuls['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudauls['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudauls['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakuls['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakuls['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamuls['total'])) {echo '0';} 
                                        else {
                                            echo $tanamuls['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusouls['total'])) {echo '0';} 
                                        else {
                                            echo $pusouls['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?php
                                        if (empty($panenulb['total'])) {echo '0';} 
                                        else {
                                            echo $panenulb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenmudaulb['total'])) {echo '0';} 
                                        else {
                                            echo $panenmudaulb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($panenternakulb['total'])) {echo '0';} 
                                        else {
                                            echo $panenternakulb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($tanamulb['total'])) {echo '0';} 
                                        else {
                                            echo $tanamulb['total'];
                                        }
                                    ?>   
                                </td>
                                <td>
                                    <?php
                                        if (empty($pusoulb['total'])) {echo '0';} 
                                        else {
                                            echo $pusoulb['total'];
                                        }
                                    ?>   
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
		            </table>
                </div> 
            </div>
        </div>
    </div>
</div>
</form>