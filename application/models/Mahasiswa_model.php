<?php
//digunakan untuk membuat kelas
class Mahasiswa_model extends CI_Model{
	
	//digunakan untuk mendapatkan nilai data dari dalam array
	public function get_data(){
		//membuat nilai array
		$data_mahasiswa =[
			["nama"=>"Kim Jefry","prodi"=>"MIF"],
			["nama"=>"Ahmad Kurniawan","prodi"=>"TKK"],
			["nama"=>"Budi Sudarsono","prodi"=>"TIF"]
		];
		//digunakan untuk mengembalikan nilai
		return $data_mahasiswa;
	}

	//digunakan untuk mendapatkan data yang terdapat dalam database
	function getALL(){
		$this -> db -> select('*');//digunakan untuk memilih data dari database
		$this -> db -> from('tm_user');//untuk menentukan asal data yang dipilih
		$this -> db -> join('tm_grup','tm_user.grup = tm_grup.id_grup');//untuk menggabung nilai dalam database
		$query = $this -> db -> get();//untuk menyimpan nilai yang diambil
		return $query;//untuk mengembalikan nilai
	}

	//digunakan untuk melakukan input data kedalam database
	function input_data($data,$table){
		$this->db->insert($table,$data);//untuk memasukkan data
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
	//untuk membuat function login dan mengambil data dari database
	function login($user,$pass,$table){
		$this->db->select('*');
		$this->db->from('tm_user');
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		$query = $this->db->get();
		return $query;
	}
}
?>
