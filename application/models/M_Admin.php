<?php
class M_Admin extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_data($where, $table){
		return $this -> db -> get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	function login($user,$pass,$table){
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		$query = $this->db->get();
		return $query;
	}
	
	function profil(){
        $this->db->where('admin.id_admin',$this->session->userdata('session_id'));
		return $this -> db -> get('admin');
	}

    function data_petugas(){
        return $this -> db -> query("SELECT * FROM admin WHERE status='petugas'");
	}

    function petugas($where,$table){
        return $this -> db -> get_where($table,$where);
	}

    function data_approval(){
        return $this -> db -> query("SELECT * FROM admin WHERE status='pending'");
	}

    function approve($where,$table){
        return $this -> db -> get_where($table,$where);
	}

    function dataprov(){
        return $this -> db -> query("SELECT * FROM provinsi");
	}

    function datakab(){
        return $this -> db -> query("SELECT * FROM kabkota");
	}

    function datakec(){
        return $this -> db -> query("SELECT * FROM kecamatan");
	}

    function datatahun(){
        return $this -> db -> query("SELECT tahun,bulan FROM statistik GROUP BY tahun");
	}

    function tahunini(){
        return $this -> db -> query("SELECT tahun FROM statistik WHERE (YEAR(tgl_laporan))=(YEAR(NOW())) GROUP BY tahun");
	}

    function tahun(){
        return $this -> db -> query("SELECT * FROM statistik WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
	}

    function statistik(){
        $this->db->select('*');
        $this->db->from('statistik');
        // $this -> db -> query("SELECT * FROM statistik");
        return $this->db->get();
	}

    function statistikPadi($limit, $offset){
        $this->db->select('*');
        $this->db->from('statistik');
        // $this -> db -> query("SELECT * FROM statistik");
        $this->db->limit($limit, $offset);
        return $this->db->get();
	}

    function statistik_palawija(){
        return $this -> db -> query("SELECT * FROM statistik_palawija");
	}

    function statistikPalawija($limit, $offset){
        $this->db->select('*');
        $this->db->from('statistik_palawija');
        // return $this -> db -> query("SELECT * FROM statistik_palawija");
        $this->db->limit($limit, $offset);
        return $this->db->get();
	}

	function datapadi($where, $table){
		return $this -> db -> get_where($table,$where);
	}

    function padi(){
		$this->db->select('*');
		$this->db->from('statistik');
		$query = $this->db->get();
		return $query;
	}

    function laporan_padi(){
		return $this -> db -> get('admin') -> result();
	}

	function data_padi(){
        return $this -> db -> query("SELECT * FROM jumlah_padi INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0'
        UNION ALL
        SELECT * FROM padi_hibrida INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0'
        UNION ALL
        SELECT * FROM padi_hibrida_bantuan INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0'
        UNION ALL
        SELECT * FROM padi_hibrida_non INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0'
        UNION ALL
        SELECT * FROM padi_inbrida INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0'
        UNION ALL
        SELECT * FROM padi_inbrida_bantuan INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0'
        UNION ALL
        SELECT * FROM padi_inbrida_non INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0'
        ");
	}

	function data_palawija(){
        return $this->db->query("SELECT * FROM jumlah_jagung INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM jagung_hibrida INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM jagung_hibrida_bantuan INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM jagung_hibrida_non INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM jagung_komposit INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM jagung_lokal INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM jumlah_kedelai INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM kedelai_bantuan INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM kedelai_non INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM kacang_tanah INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM jumlah_singkong INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM singkong_bantuan INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM singkong_non INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM ubi_jalar INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM kacang_hijau INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM sorgum INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM gandum INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM talas INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM ganyong INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM umbi_lain INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'");
    }

	function data(){
        return $this -> db -> query("SELECT * FROM jumlah_padi INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0'
        UNION ALL
        SELECT * FROM padi_hibrida INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0'
        UNION ALL
        SELECT * FROM padi_hibrida_bantuan INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0'
        UNION ALL
        SELECT * FROM padi_hibrida_non INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0'
        UNION ALL
        SELECT * FROM padi_inbrida INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0'
        UNION ALL
        SELECT * FROM padi_inbrida_bantuan INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0'
        UNION ALL
        SELECT * FROM padi_inbrida_non INNER JOIN statistik USING (id_statistik)
        WHERE lalusawah='0' OR panensawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0'
        ");
	}

	public function countDataApprove()
    {
        return $this->db->query("SELECT * FROM admin WHERE status='pending' ");
    }

	public function countDataKosong()
    {
        return $this->db->query("SELECT * FROM jumlah_padi
        WHERE lalusawah='0' OR panensawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0'
        UNION ALL
        SELECT * FROM padi_hibrida
        WHERE lalusawah='0' OR panensawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0'
        UNION ALL
        SELECT * FROM padi_hibrida_bantuan
        WHERE lalusawah='0' OR panensawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0'
        UNION ALL
        SELECT * FROM padi_hibrida_non
        WHERE lalusawah='0' OR panensawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0'
        UNION ALL
        SELECT * FROM padi_inbrida
        WHERE lalusawah='0' OR panensawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0'
        UNION ALL
        SELECT * FROM padi_inbrida_bantuan
        WHERE lalusawah='0' OR panensawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0'
        UNION ALL
        SELECT * FROM padi_inbrida_non
        WHERE lalusawah='0' OR panensawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0'
        ");
    }

	public function countDataPalawijaKosong()
    {
        return $this->db->query("SELECT * FROM jumlah_jagung
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM jagung_hibrida
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM jagung_hibrida_bantuan
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM jagung_hibrida_non
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM jagung_komposit
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM jagung_lokal
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM jumlah_kedelai
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM kedelai_bantuan
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM kedelai_non
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM kacang_tanah
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM jumlah_singkong
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM singkong_bantuan
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM singkong_non
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM ubi_jalar
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM kacang_hijau
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM sorgum
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM gandum
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM talas
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM ganyong
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'
        UNION ALL
        SELECT * FROM umbi_lain
        WHERE lalusawah='0' OR panensawah='0' OR mudasawah='0' OR ternaksawah='0' OR tanamsawah='0' OR pusosawah='0' OR laporansawah='0' OR lalubukan='0' OR panenbukan='0' OR mudabukan='0' OR ternakbukan='0' OR tanambukan='0' OR pusobukan='0' OR laporanbukan='0' OR produksi='0'");
    }

	public function countPanenPadi()
    {
        return $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }

	public function countPusoPadi()
    {
        return $this->db->query("SELECT SUM(pusosawah+pusobukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }

	public function countTanamPadi()
    {
        return $this->db->query("SELECT SUM(tanamsawah+tanambukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }

	public function countPanenPalawija()
    {
        return $this->db->query("SELECT SUM(
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
            k.panensawah+k.mudasawah+k.ternaksawah+k.panenbukan+k.mudabukan+k.ternakbukan
        ) AS total 
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
        INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }

	public function countPusoPalawija()
    {
        return $this->db->query("SELECT SUM(a.pusosawah+a.pusobukan+b.pusosawah+b.pusobukan+c.pusosawah+c.pusobukan+d.pusosawah+d.pusobukan+e.pusosawah+e.pusobukan+f.pusosawah+f.pusobukan+g.pusosawah+g.pusobukan+h.pusosawah+h.pusobukan+i.pusosawah+i.pusobukan+j.pusosawah+j.pusobukan+k.pusosawah+k.pusobukan) AS total 
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
        INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }

	public function countTanamPalawija()
    {
        return $this->db->query("SELECT SUM(a.tanamsawah+a.tanambukan+b.tanamsawah+b.tanambukan+c.tanamsawah+c.tanambukan+d.tanamsawah+d.tanambukan+e.tanamsawah+e.tanambukan+f.tanamsawah+f.tanambukan+g.tanamsawah+g.tanambukan+h.tanamsawah+h.tanambukan+i.tanamsawah+i.tanambukan+j.tanamsawah+j.tanambukan+k.tanamsawah+k.tanambukan) AS total 
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
        INNER JOIN statistik_palawija l ON a.id_statistik=l.id_statistik WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }

	public function countPanenPadi1()
    {
        return $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/','1')");
    }

	public function countPanenPadi2()
    {
        return $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/','2')");
    }

	public function countPanenPadi3()
    {
        return $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/','3')");
    }

	public function countPanenPadi4()
    {
        return $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/','4')");
    }

	public function countPanenPadi5()
    {
        return $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/','5')");
    }

	public function countPanenPadi6()
    {
        return $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/','6')");
    }

	public function countPanenPadi7()
    {
        return $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/','7')");
    }

	public function countPanenPadi8()
    {
        return $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/','8')");
    }

	public function countPanenPadi9()
    {
        return $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/','9')");
    }

	public function countPanenPadi10()
    {
        return $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/','10')");
    }

	public function countPanenPadi11()
    {
        return $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/','11')");
    }

	public function countPanenPadi12()
    {
        return $this->db->query("SELECT SUM(panensawah+panenbukan) AS total FROM jumlah_padi INNER JOIN statistik USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/','12')");
    }

	public function countPanenJagung()
    {
        return $this->db->query("SELECT SUM(panensawah+mudasawah+ternaksawah+panenbukan+mudabukan+ternakbukan) AS total FROM jumlah_jagung INNER JOIN statistik_palawija USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }

	public function countPanenKedelai()
    {
        return $this->db->query("SELECT SUM(panensawah+mudasawah+ternaksawah+panenbukan+mudabukan+ternakbukan) AS total FROM jumlah_kedelai INNER JOIN statistik_palawija USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }

	public function countPanenKacangTanah()
    {
        return $this->db->query("SELECT SUM(panensawah+mudasawah+ternaksawah+panenbukan+mudabukan+ternakbukan) AS total FROM kacang_tanah INNER JOIN statistik_palawija USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }

	public function countPanenSingkong()
    {
        return $this->db->query("SELECT SUM(panensawah+mudasawah+ternaksawah+panenbukan+mudabukan+ternakbukan) AS total FROM jumlah_singkong INNER JOIN statistik_palawija USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }

	public function countPanenUbiJalar()
    {
        return $this->db->query("SELECT SUM(panensawah+mudasawah+ternaksawah+panenbukan+mudabukan+ternakbukan) AS total FROM ubi_jalar INNER JOIN statistik_palawija USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }

	public function countPanenKacangHijau()
    {
        return $this->db->query("SELECT SUM(panensawah+mudasawah+ternaksawah+panenbukan+mudabukan+ternakbukan) AS total FROM kacang_hijau INNER JOIN statistik_palawija USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }

	public function countPanenSorgum()
    {
        return $this->db->query("SELECT SUM(panensawah+mudasawah+ternaksawah+panenbukan+mudabukan+ternakbukan) AS total FROM sorgum INNER JOIN statistik_palawija USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }

	public function countPanenGandum()
    {
        return $this->db->query("SELECT SUM(panensawah+mudasawah+ternaksawah+panenbukan+mudabukan+ternakbukan) AS total FROM gandum INNER JOIN statistik_palawija USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }

	public function countPanenTalas()
    {
        return $this->db->query("SELECT SUM(panensawah+mudasawah+ternaksawah+panenbukan+mudabukan+ternakbukan) AS total FROM talas INNER JOIN statistik_palawija USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }

	public function countPanenGanyong()
    {
        return $this->db->query("SELECT SUM(panensawah+mudasawah+ternaksawah+panenbukan+mudabukan+ternakbukan) AS total FROM ganyong INNER JOIN statistik_palawija USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }

	public function countPanenUmbiLain()
    {
        return $this->db->query("SELECT SUM(panensawah+mudasawah+ternaksawah+panenbukan+mudabukan+ternakbukan) AS total FROM umbi_lain INNER JOIN statistik_palawija USING (id_statistik) WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }
}
?>
