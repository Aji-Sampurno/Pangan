<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');

$tahun = $this->input->get('tahun',true);
$kecamatan = $this->input->get('kecamatan',true);

$panenpalawija1 = $this->db->query("SELECT SUM(
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
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan) 
    AS total FROM jumlah_jagung a 
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
    WHERE kecamatan='$kecamatan' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','1')")->row_array();
$panenpalawija2 = $this->db->query("SELECT SUM(
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
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan) 
    AS total FROM jumlah_jagung a 
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
    WHERE kecamatan='$kecamatan' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','2')")->row_array();
$panenpalawija3 = $this->db->query("SELECT SUM(
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
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan) 
    AS total FROM jumlah_jagung a 
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
    WHERE kecamatan='$kecamatan' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','3')")->row_array();
$panenpalawija4 = $this->db->query("SELECT SUM(
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
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan) 
    AS total FROM jumlah_jagung a 
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
    WHERE kecamatan='$kecamatan' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','4')")->row_array();
$panenpalawija5 = $this->db->query("SELECT SUM(
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
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan) 
    AS total FROM jumlah_jagung a 
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
    WHERE kecamatan='$kecamatan' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','5')")->row_array();
$panenpalawija6 = $this->db->query("SELECT SUM(
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
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan) 
    AS total FROM jumlah_jagung a 
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
    WHERE kecamatan='$kecamatan' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','6')")->row_array();
$panenpalawija7 = $this->db->query("SELECT SUM(
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
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan) 
    AS total FROM jumlah_jagung a 
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
    WHERE kecamatan='$kecamatan' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','7')")->row_array();
$panenpalawija8 = $this->db->query("SELECT SUM(
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
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan) 
    AS total FROM jumlah_jagung a 
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
    WHERE kecamatan='$kecamatan' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','8')")->row_array();
$panenpalawija9 = $this->db->query("SELECT SUM(
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
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan) 
    AS total FROM jumlah_jagung a 
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
    WHERE kecamatan='$kecamatan' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','9')")->row_array();
$panenpalawija10 = $this->db->query("SELECT SUM(
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
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan) 
    AS total FROM jumlah_jagung a 
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
    WHERE kecamatan='$kecamatan' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','10')")->row_array();
$panenpalawija11 = $this->db->query("SELECT SUM(
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
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan) 
    AS total FROM jumlah_jagung a 
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
    WHERE kecamatan='$kecamatan' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','11')")->row_array();
$panenpalawija12 = $this->db->query("SELECT SUM(
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
    k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan) 
    AS total FROM jumlah_jagung a 
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
    WHERE kecamatan='$kecamatan' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=('$tahun','/','12')")->row_array();
?>

<script>
    window.onload = function () 
    {;
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
            data: [ <?= $panenpalawija1   ['total']?>,
                    <?= $panenpalawija2   ['total']?>,
                    <?= $panenpalawija3   ['total']?>,
                    <?= $panenpalawija4   ['total']?>,
                    <?= $panenpalawija5   ['total']?>,
                    <?= $panenpalawija6   ['total']?>,
                    <?= $panenpalawija7   ['total']?>,
                    <?= $panenpalawija8   ['total']?>,
                    <?= $panenpalawija9   ['total']?>,
                    <?= $panenpalawija10   ['total']?>,
                    <?= $panenpalawija11   ['total']?>,
                    <?= $panenpalawija12   ['total']?>,
                    ],
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
                <div class="col-lg-6 col-sm-auto h9 font-weight-bold text-primary text-uppercase mb-1">Panen Palawija Tahunan Kabupaten Malang</div>
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
                    <canvas id="myLineChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
</form>