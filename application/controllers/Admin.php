<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
	class Admin extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('M_Admin');
            $this -> load -> helper('url');
			$this -> load -> library('form_validation');
		}

		public function index(){
			$data['kosong'] = $this -> M_Admin -> data() -> result();
			$data['title'] = 'Dashboard';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this->template->views('crud/admin/dashboard',$data, TRUE);
		}

        public function login(){
			$data['title'] = 'Login';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this->load->view('crud/admin/login');
		}

		public function cek_log(){
			$username = $this->input->post('txt_user');
			$password = $this->input->post('txt_pass');
			$cek = $this->M_Admin->login($username,$password,'admin')->result();
			if($cek != FALSE){
				foreach ($cek as $row){
					$user = $row->username;
                    $id_admin = $row->id_admin;
                    $nama_admin = $row->nama_admin;
                    $jabatan = $row->jabatan;
                    $nip = $row->nip;
                    $telp = $row->telp;
                    $password = $row->password;
					$grup = $row->grup;
					$provinsi = $row->provinsi;
					$kabkota = $row->kabkota;
					$kecamatan = $row->kecamatan;
				}
				$this->session->set_userdata('session_user',$user);
                $this->session->set_userdata('session_id',$id_admin);
				$this->session->set_userdata('session_nama',$nama_admin);
				$this->session->set_userdata('session_jabatan',$jabatan);
				$this->session->set_userdata('session_nip',$nip);
				$this->session->set_userdata('session_telp',$telp);
				$this->session->set_userdata('session_password',$password);
				$this->session->set_userdata('session_provinsi',$provinsi);
				$this->session->set_userdata('session_kabkota',$kabkota);
				$this->session->set_userdata('session_kecamatan',$kecamatan);
				$this->session->set_userdata('session_grup',$grup);
				redirect('Admin');
			}else{
				$this->load->view('crud/admin/login');
			}
		}

		public function logout(){
            $this->session->sess_destroy();
			redirect('Admin/login');
        }

        public function daftar(){
			$data['title'] = 'Registrasi';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this->load->view('crud/admin/daftar');
		}

        public function daftar_admin(){
			$username = $this->input->post('username');
			$password = $this->input->post('pass');
			$nama_admin = $this->input->post('nama');
			$jabatan = $this->input->post('jabatan');
			$nip = $this->input->post('nip');
			$telp = $this->input->post('telp');
			$nama_toko = $this->input->post('toko');
			$provinsi = $this->input->post('provinsi');
			$kabkota = $this->input->post('kabkota');
			$kecamatan = $this->input->post('kecamatan');

			$data = array(
				'username' => $username,
				'password' => $password,
				'nama_admin' => $nama_admin,
				'jabatan' => $jabatan,
				'nip' => $nip,
				'telp' => $telp,
				'provinsi' => $provinsi,
				'kabkota' => $kabkota,
				'kecamatan' => $kecamatan,
				);
			$this->M_Admin->input_data($data,'admin');
			redirect('Admin/login');
		}

        public function home_padi(){
			$data['kosong'] = $this -> M_Admin -> data() -> result();
            $data['padi'] = $this->M_Admin->padi()->result();
			$data['title'] = 'SP-PADI';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this->template->views('crud/admin/detail_padi',$data);
        }

        public function sppadi(){
			$data['kosong'] = $this -> M_Admin -> data() -> result();
            $data['title'] = 'SP-PADI';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this->template->views('crud/admin/tambah_padi');
		}

        public function tambah_padi(){
			$data['kosong'] = $this -> M_Admin -> data() -> result();

            date_default_timezone_set('Asia/Jakarta');
			$admin=$this->input->post('admin');
			$idadmin=$this->input->post('id_admin');
            $provinsi = $this->input->post('provinsi');
            $kabkota = $this->input->post('kabkota');
            $kecamatan = $this->input->post('kecamatan');
            $jenis_lahan = $this->input->post('lahan');
            $jenis_padi = $this->input->post('padi');
			$jenis_bantuan = $this->input->post('bantuan');
			$laporan_lalu = $this->input->post('laporan_lalu');
			$panen = $this->input->post('panen');
			$tanam = $this->input->post('tanam');
			$puso = $this->input->post('puso');
            $laporan = $this->input->post('laporan');

			$result = array();
			foreach ($_POST['panen'] as $key => $val) {
				$result[] = array(
					'admin' => $admin,
					'id_admin' => $idadmin,
					'provinsi' => $provinsi,
					'kabkota' => $kabkota,
					'kecamatan' => $kecamatan,
					'jenis_lahan' => $_POST['lahan'][$key],
					'jenis_padi' => $_POST['padi'][$key],
					'jenis_bantuan' => $_POST['bantuan'][$key],
					'laporan_lalu' => $_POST['laporan_lalu'][$key],
					'panen' => $_POST['panen'][$key],
					'tanam' => $_POST['tanam'][$key],
					'puso' => $_POST['puso'][$key],
					'laporan' => $_POST['laporan'][$key],
					'tgl_laporan' => date('Y-m-d H:i:s'),      
				);      
			}      
			$this->db->insert_batch('padi',$result);

			$air = array();
			foreach ($_POST['jenis_pengairan'] as $key => $val) {
				$air[] = array(
					'admin' => $admin,
					'provinsi' => $provinsi,
					'kabkota' => $kabkota,
					'kecamatan' => $kecamatan,
					'jenis_pengairan' => $_POST['jenis_pengairan'][$key],
					'laporan_lalu' => $_POST['laporan_lalu'][$key],
					'panen' => $_POST['panen_air'][$key],
					'tanam' => $_POST['tanam_air'][$key],
					'puso' => $_POST['puso_air'][$key],
					'laporan' => $_POST['laporan_air'][$key],
					'tgl_laporan' => date('Y-m-d H:i:s'),      
				);      
			}      
			$this->db->insert_batch('pengairan',$air);

			$rehab = array();
			foreach ($_POST['panen_rehab'] as $key => $val) {
				$rehab[] = array(
					'admin' => $admin,
					'provinsi' => $provinsi,
					'kabkota' => $kabkota,
					'kecamatan' => $kecamatan,
					'panen_rehab' => $_POST['panen_rehab'][$key],
					'tanam_rehab' => $_POST['tanam_rehab'][$key],
					'tgl_laporan' => date('Y-m-d H:i:s'),      
				);      
			}      
			$this->db->insert_batch('rehab',$rehab);
			
			$this->session->set_flashdata('pesan','<div class="alert alert-success text-center" role="alert"> Data Berhasil Ditambahkan </div>');
			redirect('Admin/sppadi');
		}

		public function detail_data_kosong(){
			$data['kosong'] = $this -> M_Admin -> data() -> result();
			$data['padi'] = $this -> M_Admin -> data_padi() -> result();
			$data['palawija'] = $this -> M_Admin -> data_palawija() -> result();
			$data['title'] = 'Detail Data Kosong';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this -> template -> views('crud/admin/sppadi',$data);
		}

		public function edit_data_kosong($id_padi){
			$data['kosong'] = $this -> M_Admin -> data() -> result();

			$where = array('id_padi' => $id_padi);
			$data['padi'] = $this -> M_Admin -> edit_data($where,'padi') -> result();
			$data['title'] = 'Edit Data';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this -> template -> views('crud/admin/edit_padi',$data);
		}

		public function edit_palawija_kosong($id_palawija){
			$data['kosong'] = $this -> M_Admin -> data() -> result();

			$where = array('id_palawija' => $id_palawija);
			$data['palawija'] = $this -> M_Admin -> edit_data($where,'palawija') -> result();
			$data['title'] = 'Edit Data';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this -> template -> views('crud/admin/edit_palawija',$data);
		}

		public function update_padi()
		{
			$data['kosong'] = $this -> M_Admin -> data() -> result();

			$id = $this->input->POST('id');
			$laporanlalu = $this->input->POST('laporanlalu');
			$panen = $this->input->POST('panen');
			$tanam = $this->input->POST('tanam');
			$puso = $this->input->POST('puso');
			$laporan = $this->input->POST('laporan');

			$where = array('id_padi'=>$id);
			$data = array(
				'laporan_lalu' => $laporanlalu,
				'panen' => $panen,
				'tanam' => $tanam,
				'puso' => $puso,
				'laporan' => $laporan,
			);
			$this->M_Admin->update_data($where,$data,'padi');
			$this->session->set_flashdata('pesan','<div class="alert alert-success text-center" role="alert"> Data Berhasil Diedit </div>');
			redirect('Admin/detail_data_kosong');
		}

        public function home_palawija(){
			$data['kosong'] = $this -> M_Admin -> data() -> result();
			$data['title'] = 'SP-PALAWIJA';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this->template->views('crud/admin/detail_palawija',$data);
        }

        public function sppalawija(){
			$data['kosong'] = $this -> M_Admin -> data() -> result();
            $data['title'] = 'SP-PALAWIJA';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this->template->views('crud/admin/tambah_palawija');
		}

        public function tambah_palawija(){
			$data['kosong'] = $this -> M_Admin -> data() -> result();

            date_default_timezone_set('Asia/Jakarta');
			$admin=$this->input->post('admin');
            $provinsi = $this->input->post('provinsi');
            $kabkota = $this->input->post('kabkota');
            $kecamatan = $this->input->post('kecamatan');

			$result = array();
			foreach ($_POST['panen'] as $key => $val) {
				$result[] = array(
					'admin' => $admin,
					'provinsi' => $provinsi,
					'kabkota' => $kabkota,
					'kecamatan' => $kecamatan,
					'lahan' => $_POST['lahan'][$key],
					'tanaman' => $_POST['tanaman'][$key],
					'jenis_tanaman' => $_POST['jenis_tanaman'][$key],
					'bantuan' => $_POST['bantuan'][$key],
					'laporan_lalu' => $_POST['laporan_lalu'][$key],
					'panen' => $_POST['panen'][$key],
					'panen_muda' => $_POST['panen_muda'][$key],
					'pakan_ternak' => $_POST['panen_ternak'][$key],
					'tanam' => $_POST['tanam'][$key],
					'puso' => $_POST['puso'][$key],
					'laporan' => $_POST['laporan'][$key],
					'tgl_laporan' => date('Y-m-d H:i:s'),      
				);      
			}      
			$this->db->insert_batch('palawija',$result);
			$this->session->set_flashdata('pesan','<div class="alert alert-success text-center" role="alert"> Data Berhasil Ditambahkan </div>');
			redirect('Admin/sppalawija');
		}

		public function update_palawija()
		{
			$data['kosong'] = $this -> M_Admin -> data() -> result();

			$id = $this->input->POST('id');
			$laporanlalu = $this->input->POST('laporan_lalu');
			$panenmuda = $this->input->POST('panen_muda');
			$panenternak = $this->input->POST('panen_ternak');
			$panen = $this->input->POST('panen');
			$tanam = $this->input->POST('tanam');
			$puso = $this->input->POST('puso');
			$laporan = $this->input->POST('laporan');

			$where = array('id_palawija'=>$id);
			$data = array(
				'laporan_lalu' => $laporanlalu,
				'panen' => $panen,
				'panen_muda' => $panenmuda,
				'pakan_ternak' => $panenternak,
				'tanam' => $tanam,
				'puso' => $puso,
				'laporan' => $laporan,
			);
			$this->M_Admin->update_data($where,$data,'palawija');
			$this->session->set_flashdata('pesan','<div class="alert alert-success text-center" role="alert"> Data Berhasil Diedit </div>');
			redirect('Admin/detail_data_kosong');
		}

		public function detail_panen_padi(){
			$data['kosong'] = $this -> M_Admin -> data() -> result();
			$data['title'] = 'Detail Panen Padi';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this -> template -> views('crud/admin/detail_panen_padi',$data);
		}

        public function tambah_produk(){
            $data['title'] = 'Tambah Produk';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this->template->views('crud/admin/tambah_produk');
		}

		// API

		public function ApiDataKosong(){
			$data = $this->M_Admin->data();
			echo json_encode($data->result_array());
		}
	}
