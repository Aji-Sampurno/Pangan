<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');

$panenpadi = $this->M_Admin->countPanenPadi()->row_array();
$pusopadi = $this->M_Admin->countPusoPadi()->row_array();
$tanampadi = $this->M_Admin->countTanamPadi()->row_array();
$panenpalawija = $this->M_Admin->countPanenPalawija()->row_array();
$pusopalawija = $this->M_Admin->countPusoPalawija()->row_array();
$tanampalawija = $this->M_Admin->countTanamPalawija()->row_array();

$panenpadiampelgading   = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Ampelgading'         AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpadibantur        = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Bantur'              AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpadibululawang    = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Bululawang'          AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpadidampit        = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Dampit'              AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpadidau           = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Dau'                 AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpadidonomulyo     = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Donomulyo'           AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpadigedangan      = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Gedangan'            AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpadigondanglegi   = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Gondanglegi'         AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpadijabung        = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Jabung'              AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpadikalipare      = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Kalipare'            AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpadikarangploso   = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Karangploso'         AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpadikasembon      = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Kasembon'            AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpadikepanjen      = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Kepanjen'            AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpadikromengan     = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Kromengan'           AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpadilawang        = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Lawang'              AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpadingajum        = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Ngajum'              AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpadingantang      = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Ngantang'            AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpadipagak         = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Pagak'               AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpadipagelaran     = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Pagelaran'           AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpadipakis         = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Pakis'               AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpadipakisaji      = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Pakisaji'            AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpadiponcokusumo   = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Poncokusumo'         AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpadipujon         = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Pujon'               AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpadisingosari     = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Singosari'           AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpadisumawe        = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Sumbermanjing Wetan' AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpadisumberpucung  = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Sumberpucung'        AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpaditajinan       = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Tajinan'             AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpaditirtoyudo     = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Tirtoyudo'           AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpaditumpang       = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Tumpang'             AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpadituren         = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Turen'               AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpadiwagir         = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Wagir'               AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpadiwajak         = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Wajak'               AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();
$panenpadiwonosari      = $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE kecamatan='Wonosari'            AND (YEAR(tgl_laporan))=(YEAR(NOW()))")->row_array();

$panenpalawijaampelgading   = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Ampelgading' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();

$panenpalawijabantur        = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Bantur' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();

$panenpalawijabululawang    = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Bululawang' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();

$panenpalawijadampit        = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Dampit' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();

$panenpalawijadau           = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Dau' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();
$panenpalawijadonomulyo     = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Donomulyo' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();
$panenpalawijagedangan      = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Gedangan' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();
$panenpalawijagondanglegi   = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Gondanglegi' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();
$panenpalawijajabung        = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Jabung' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();
$panenpalawijakalipare      = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Kalipare' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();
$panenpalawijakarangploso   = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Karangploso' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();
$panenpalawijakasembon      = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Kasembon' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();
$panenpalawijakepanjen      = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Kepanjen' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();
$panenpalawijakromengan     = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Kromengan' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();
$panenpalawijalawang        = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Lawang' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();
$panenpalawijangajum        = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Ngajum' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();
$panenpalawijangantang      = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Ngantang' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();
$panenpalawijapagak         = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Pagak' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();
$panenpalawijapagelaran     = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Pagelaran' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();
$panenpalawijapakis         = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Pakis' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();
$panenpalawijapakisaji      = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Pakisaji' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();
$panenpalawijaponcokusumo   = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Poncokusumo' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();
$panenpalawijapujon         = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Pujon' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();
$panenpalawijasingosari     = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Singosari' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();
$panenpalawijasumawe        = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Sumbermanjingwetan' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();
$panenpalawijasumberpucung  = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Pucung' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();
$panenpalawijatajinan       = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Tajinan' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();
$panenpalawijatirtoyudo     = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Tirtoyudo' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();
$panenpalawijatumpang       = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Tumpang' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();
$panenpalawijaturen         = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Turen' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();
$panenpalawijawagir         = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Wagir' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();
$panenpalawijawajak         = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a 
    JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Wajak' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();
$panenpalawijawonosari      = $this->db->query("SELECT SUM(
    a.panensawah+a.mudasawah+a.ternaksawah+a.panenbukan+a.mudabukan+a.ternakbukan+
    b.panensawah+b.mudasawah+b.ternaksawah+b.panenbukan+b.mudabukan+b.ternakbukan+
    c.panensawah+c.mudasawah+c.ternaksawah+c.panenbukan+c.mudabukan+c.ternakbukan+
    d.panensawah+d.mudasawah+d.ternaksawah+d.panenbukan+d.mudabukan+d.ternakbukan+
    e.panensawah+e.mudasawah+e.ternaksawah+e.panenbukan+e.mudabukan+e.ternakbukan+
    f.panensawah+f.mudasawah+f.ternaksawah+f.panenbukan+f.mudabukan+f.ternakbukan+
    g.panensawah+g.mudasawah+g.ternaksawah+g.panenbukan+g.mudabukan+g.ternakbukan+
    h.panensawah+h.mudasawah+h.ternaksawah+h.panenbukan+h.mudabukan+h.ternakbukan+
    i.panensawah+i.mudasawah+i.ternaksawah+i.panenbukan+i.mudabukan+i.ternakbukan+
    j.panensawah+j.mudasawah+j.ternaksawah+j.panenbukan+j.mudabukan+j.ternakbukan+
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan ) 
    AS total 
    FROM jumlah_jagung a JOIN jumlah_kedelai b ON a.id_statistik=b.id_statistik 
    JOIN kacang_tanah c ON a.id_statistik=c.id_statistik 
    JOIN jumlah_singkong d ON a.id_statistik=d.id_statistik 
    JOIN ubi_jalar e ON a.id_statistik=e.id_statistik 
    JOIN kacang_hijau f ON a.id_statistik=f.id_statistik 
    JOIN sorgum g ON a.id_statistik=g.id_statistik 
    JOIN gandum h ON a.id_statistik=h.id_statistik 
    JOIN talas i ON a.id_statistik=i.id_statistik 
    JOIN ganyong j ON a.id_statistik=j.id_statistik 
    JOIN umbi_lain k ON a.id_statistik=k.id_statistik 
    INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik 
    WHERE kecamatan='Wonosari' 
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))")->row_array();


?>

<script>
    window.onload = function () 
    {
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
        myBarChart.render();

        var myLineChart = new Chart("myLineChart", {
        type: 'line',
        data: {
            labels: ["Ampelgading", "Bantur", "Bululawang", "Dampit", "Dau", "Donomulyo", "Gedangan", "Gondanglegi", "Jabung", "Kalipare", "Karangploso", "Kasembon", "Kepanjen", "Kromengan", "Lawang", "Ngajum", "Ngantang", "Pagak", "Pagelaran", "Pakis", "Pakisaji", "Poncokusumo", "Pujon", "Singosari", "Sumbermanjing Wetan", "Sumberpucung", "Tajinan", "Tirtoyudo", "Tumpang", "Turen", "Wagir", "Wajak", "Wonosari"],
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
            data: [ <?= $panenpalawijaampelgading   ['total']?>,
                    <?= $panenpalawijabantur        ['total']?>,
                    <?= $panenpalawijabululawang    ['total']?>,
                    <?= $panenpalawijadampit        ['total']?>,
                    <?= $panenpalawijadau           ['total']?>,
                    <?= $panenpalawijadonomulyo     ['total']?>,
                    <?= $panenpalawijagedangan      ['total']?>,
                    <?= $panenpalawijagondanglegi   ['total']?>,
                    <?= $panenpalawijajabung        ['total']?>,
                    <?= $panenpalawijakalipare      ['total']?>,
                    <?= $panenpalawijakarangploso   ['total']?>,
                    <?= $panenpalawijakasembon      ['total']?>,
                    <?= $panenpalawijakepanjen      ['total']?>,
                    <?= $panenpalawijakromengan     ['total']?>,
                    <?= $panenpalawijalawang        ['total']?>,
                    <?= $panenpalawijangajum        ['total']?>,
                    <?= $panenpalawijangantang      ['total']?>,
                    <?= $panenpalawijapagak         ['total']?>,
                    <?= $panenpalawijapagelaran     ['total']?>,
                    <?= $panenpalawijapakis         ['total']?>,
                    <?= $panenpalawijapakisaji      ['total']?>,
                    <?= $panenpalawijaponcokusumo   ['total']?>,
                    <?= $panenpalawijapujon         ['total']?>,
                    <?= $panenpalawijasingosari     ['total']?>,
                    <?= $panenpalawijasumawe        ['total']?>,
                    <?= $panenpalawijasumberpucung  ['total']?>,
                    <?= $panenpalawijatajinan       ['total']?>,
                    <?= $panenpalawijatirtoyudo     ['total']?>,
                    <?= $panenpalawijatumpang       ['total']?>,
                    <?= $panenpalawijaturen         ['total']?>,
                    <?= $panenpalawijawagir         ['total']?>,
                    <?= $panenpalawijawajak         ['total']?>,
                    <?= $panenpalawijawonosari      ['total']?>],
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

<div class="row">

    <!-- Panen Padi -->
    <div class="col-xl-2 col-md-6 mb-4">
        <div class="card border-left-primary shadow mb-4">
            <!-- Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Panen Padi Bulan <?php $i=0; foreach ($tahun as $key)  if ($i < 1)  { echo $key->bulan; $i +=1; } ?></div>
                <a class="text-xs font-weight-bold text-primary text-uppercase mb-1" href='<?= base_url('Admin/panen_padi_bulanan') ?>'>Lihat Detail</a>
            </div>
            <!-- Body -->
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php if ($panenpadi['total']==null) 
                            {echo '0';} else {
                                echo $panenpadi['total'];
                            }?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-seedling fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Puso Padi -->
    <div class="col-xl-2 col-md-6 mb-4">
        <div class="card border-left-primary shadow mb-4">
            <!-- Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Puso Padi Bulan <?php $i=0; foreach ($tahun as $key)  if ($i < 1)  { echo $key->bulan; $i +=1; } ?></div>
                <a class="text-xs font-weight-bold text-primary text-uppercase mb-1" href='<?= base_url('Admin/puso_padi_bulanan') ?>'>Lihat Detail</a>
            </div>
            <!-- Body -->
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php if ($pusopadi['total']==null) 
                            {echo '0';} else {
                                echo $pusopadi['total'];
                            }?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-seedling fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tanam Padi -->
    <div class="col-xl-2 col-md-6 mb-4">
        <div class="card border-left-primary shadow mb-4">
            <!-- Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tanam Padi Bulan <?php $i=0; foreach ($tahun as $key)  if ($i < 1)  { echo $key->bulan; $i +=1; } ?></div>
                <a class="text-xs font-weight-bold text-primary text-uppercase mb-1" href='<?= base_url('Admin/tanam_padi_bulanan') ?>'>Lihat Detail</a>
            </div>
            <!-- Body -->
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php if ($tanampadi['total']==null) 
                            {echo '0';} else {
                                echo $tanampadi['total'];
                            }?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-seedling fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Panen Palawija -->
    <div class="col-xl-2 col-md-6 mb-4">
        <div class="card border-left-primary shadow mb-4">
            <!-- Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Panen Palawija Bulan <?php $i=0; foreach ($tahun as $key)  if ($i < 1)  { echo $key->bulan; $i +=1; } ?></div>
                <a class="text-xs font-weight-bold text-primary text-uppercase mb-1" href='<?= base_url('Admin/panen_palawija_bulanan') ?>'>Lihat Detail</a>
            </div>
            <!-- Body -->
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php 
                                if ($panenpalawija['total']==null) {echo '0';} 
                                else {echo $panenpalawija['total'];
                            }?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-leaf fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Puso Palawija -->
    <div class="col-xl-2 col-md-6 mb-4">
        <div class="card border-left-primary shadow mb-4">
            <!-- Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Puso Palawija Bulan <?php $i=0; foreach ($tahun as $key)  if ($i < 1)  { echo $key->bulan; $i +=1; } ?></div>
                <a class="text-xs font-weight-bold text-primary text-uppercase mb-1" href='<?= base_url('Admin/puso_palawija_bulanan') ?>'>Lihat Detail</a>
            </div>
            <!-- Body -->
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php 
                                if ($pusopalawija['total']==null) {echo '0';} 
                                else {echo $pusopalawija['total'];
                            }?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-leaf fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tanam Palawija -->
    <div class="col-xl-2 col-md-6 mb-4">
        <div class="card border-left-primary shadow mb-4">
            <!-- Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tanam Palawija Bulan <?php $i=0; foreach ($tahun as $key)  if ($i < 1)  { echo $key->bulan; $i +=1; } ?></div>
                <a class="text-xs font-weight-bold text-primary text-uppercase mb-1" href='<?= base_url('Admin/tanam_palawija_bulanan') ?>'>Lihat Detail</a>
            </div>
            <!-- Body -->
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php 
                                if ($tanampalawija['total']==null) {echo '0';} 
                                else {echo $tanampalawija['total'];
                            }?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-leaf fa-2x text-gray-300"></i>
                    </div>
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
                <div class="h9 font-weight-bold text-primary text-uppercase mb-1">Panen Padi Tahun <?php $i=0; foreach ($tahun as $key)  if ($i < 1)  { echo $key->tahun; $i +=1; } ?></div>
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

    <!-- Grafik Padi -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <div class="h9 font-weight-bold text-primary text-uppercase mb-1">Panen Palawija Tahun <?php $i=0; foreach ($tahun as $key)  if ($i < 1)  { echo $key->tahun; $i +=1; } ?></div>
                <a class="text-xs font-weight-bold text-primary text-uppercase mb-1" href='<?= base_url('Admin/detail_panen_palawija') ?>'>Lihat Detail</a>
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