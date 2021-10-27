<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
	//untuk membuat kelas
	class Login extends CI_Controller{
		//untuk melakukan load mahasiswa model setiap kali menjalankan class
		function __construct(){
			parent::__construct();
			$this->load->model('Mahasiswa_model');//load Mahasiswa_model dari folder model
		}

		//membuat function index 
		public function index(){
			$this->load->view('crud/login');//load login dari folder crud
		}

		public function cek_log(){
			$username = $this->input->post('txt_user');//untuk melakukan post dari inputan username
			$password = $this->input->post('txt_pass');//untuk melakukan post dari inputan password
			$cek = $this->Mahasiswa_model->Login($username,$password,'tm_user')->result();
			//membuat kondisi if else untuk melakukan cek data apakah sudah sesuai dengan data yang ada
			if($cek != FALSE){
				foreach ($cek as $row){
					$user = $row->username;
					$grup = $row->grup;
				}
				$this->session->set_userdata('session_user',$user);
				$this->session->set_userdata('session_grup',$grup);
				redirect('Mahasiswa');//jika kondisi terpenuhi akan diarahkan ke index yang ada di class Mahasiswa
			}else{
				$this->load->view('crud/login');//jika kondisi tidak terpenuhi maka akan kembali ke halaman login
			}
		}
		public function logout()
			{
				// menghilangkan atau menghapus session yang ada
				$this->session->sess_destroy();
				redirect('Login');//digunakan untuk mengarahkan ke index yang ada di class Login
			}
	}
