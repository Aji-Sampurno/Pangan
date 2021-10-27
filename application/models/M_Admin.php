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

	function data_padi($statistik,$table){
		$this -> db -> where($table,$statistik);
		$this -> db -> where('jenis_lahan','sawah');
		$query = $this->db->get();
		return $query;

	}
}
?>
