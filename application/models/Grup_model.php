<?php 
//digunakan untuk membuat kelas
class Grup_model extends CI_Model {
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
	public function getAllGrup(){
		$this->db->select('*');//digunakan untuk memilih data dari database
		$this->db->from('tm_grup');//untuk menentukan asal data yang dipilih
		$query = $this->db->get();//untuk menyimpan nilai yang diambil
		return $query;//untuk mengembalikan nilai
	}

	//digunakan untuk melakukan input data kedalam database
	public function input_data_grup($data,$table)
	{
		$this->db->insert($table,$data);//untuk memasukkan data
	}

	//digunakan untuk melakukan edit data kedalam database
	public function edit_data_grup($where,$table){
		return $this->db->get_where($table,$where);//untuk mendapatkan data dari database
	} 

	//digunakan untuk melakukan update data kedalam database
	public function update_data_grup($where,$data,$table){
		$this->db->where($where);//untuk mendapatkan data dari database
		$this->db->update($table,$data);//update data di database
	}

	//digunakan untuk melakukan hapus data dari database
	public function hapus_data_grup($where,$table)
	{
		$this->db->where($where);//untuk mendapatkan data dari database
		$this->db->delete($table);//delete data di database
	} 
}
?>
