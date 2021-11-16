<?php
class M_Admin extends CI_Model{

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

    function barang_user(){
		$this->db->where('barang.idpenjual',$this->session->userdata('session_id'));
		return $this -> db -> get('barang') -> result();
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
        return $this -> db -> query("SELECT * FROM padi WHERE laporan_lalu='0' OR panen='0' OR tanam='0' OR puso='0' OR laporan='0'");
	}

	function data_palawija(){
        return $this -> db -> query("SELECT * FROM palawija WHERE laporan_lalu='0' OR panen='0' OR panen_muda='0' OR pakan_ternak='0' OR tanam='0' OR puso='0' OR laporan='0'");
	}

	function data(){
        return $this -> db -> query("SELECT * FROM padi where laporan_lalu='0' OR panen='0' OR tanam='0' OR puso='0' OR laporan='0'");
	}

	public function countDataKosong()
    {
        return $this->db->query("SELECT * FROM padi WHERE laporan_lalu='0' OR panen='0' OR tanam='0' OR puso='0' OR laporan='0'");
    }

	public function countDataPalawijaKosong()
    {
        return $this->db->query("SELECT * FROM palawija WHERE laporan_lalu='0' OR panen='0' OR panen_muda='0' OR pakan_ternak='0'  OR tanam='0' OR puso='0' OR laporan='0'");
    }

	public function countPanenPadi()
    {
        return $this->db->query("SELECT SUM(panen) AS total FROM padi WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }

	public function countPusoPadi()
    {
        return $this->db->query("SELECT SUM(puso) AS total FROM padi WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }

	public function countPanenPalawija()
    {
        return $this->db->query("SELECT SUM(panen) AS total FROM palawija WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }

	public function countPusoPalawija()
    {
        return $this->db->query("SELECT SUM(puso) AS total FROM palawija WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }

	public function countPanenPadi1()
    {
        return $this->db->query("SELECT SUM(panen) AS total FROM padi WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/','1')");
    }

	public function countPanenPadi2()
    {
        return $this->db->query("SELECT SUM(panen) AS total FROM padi WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/','2')");
    }

	public function countPanenPadi3()
    {
        return $this->db->query("SELECT SUM(panen) AS total FROM padi WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/','3')");
    }

	public function countPanenPadi4()
    {
        return $this->db->query("SELECT SUM(panen) AS total FROM padi WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/','4')");
    }

	public function countPanenPadi5()
    {
        return $this->db->query("SELECT SUM(panen) AS total FROM padi WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/','5')");
    }

	public function countPanenPadi6()
    {
        return $this->db->query("SELECT SUM(panen) AS total FROM padi WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/','6')");
    }

	public function countPanenPadi7()
    {
        return $this->db->query("SELECT SUM(panen) AS total FROM padi WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/','7')");
    }

	public function countPanenPadi8()
    {
        return $this->db->query("SELECT SUM(panen) AS total FROM padi WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/','8')");
    }

	public function countPanenPadi9()
    {
        return $this->db->query("SELECT SUM(panen) AS total FROM padi WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/','9')");
    }

	public function countPanenPadi10()
    {
        return $this->db->query("SELECT SUM(panen) AS total FROM padi WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/','10')");
    }

	public function countPanenPadi11()
    {
        return $this->db->query("SELECT SUM(panen) AS total FROM padi WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/','11')");
    }

	public function countPanenPadi12()
    {
        return $this->db->query("SELECT SUM(panen) AS total FROM padi WHERE (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/','12')");
    }

	public function countPanenJagung()
    {
        return $this->db->query("SELECT SUM(panen) AS total FROM palawija WHERE tanaman='jagung' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }

	public function countPanenKedelai()
    {
        return $this->db->query("SELECT SUM(panen) AS total FROM palawija WHERE tanaman='kedelai' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }

	public function countPanenKacangTanah()
    {
        return $this->db->query("SELECT SUM(panen) AS total FROM palawija WHERE tanaman='kacang tanah' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }

	public function countPanenSingkong()
    {
        return $this->db->query("SELECT SUM(panen) AS total FROM palawija WHERE tanaman='singkong' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }

	public function countPanenUbiJalar()
    {
        return $this->db->query("SELECT SUM(panen) AS total FROM palawija WHERE tanaman='ubi jalar' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }

	public function countPanenKacangHijau()
    {
        return $this->db->query("SELECT SUM(panen) AS total FROM palawija WHERE tanaman='kacang hijau' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }

	public function countPanenSorgum()
    {
        return $this->db->query("SELECT SUM(panen) AS total FROM palawija WHERE tanaman='sorgum' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }

	public function countPanenGandum()
    {
        return $this->db->query("SELECT SUM(panen) AS total FROM palawija WHERE tanaman='gandum' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }

	public function countPanenTalas()
    {
        return $this->db->query("SELECT SUM(panen) AS total FROM palawija WHERE tanaman='talas' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }

	public function countPanenGanyong()
    {
        return $this->db->query("SELECT SUM(panen) AS total FROM palawija WHERE tanaman='ganyong' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }

	public function countPanenUmbiLain()
    {
        return $this->db->query("SELECT SUM(panen) AS total FROM palawija WHERE tanaman='umbi lainnya' AND (YEAR(tgl_laporan),'/',MONTH(tgl_laporan))=(YEAR(NOW()),'/',MONTH(NOW()))");
    }
}
?>
