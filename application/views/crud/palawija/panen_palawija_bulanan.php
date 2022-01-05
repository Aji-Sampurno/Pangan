<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');

$tahun = $this->input->get('tahun',true);
$bulan = $this->input->get('bulan',true);

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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();

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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
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
    AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','$bulan')")->row_array();
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
                    <?= $panenpalawijawonosari      ['total']?>  ],
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
                <div class="col-lg-6 col-sm-auto h9 font-weight-bold text-primary text-uppercase mb-1">Panen Palawija Bulanan Kabupaten Malang</div>
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