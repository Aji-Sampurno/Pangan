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
			$data['title'] = 'Dashboard';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this->template->views('crud/admin/dashboard',$data);
		}

        public function login(){
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
                    $password = $row->password;
					$grup = $row->grup;
					$provinsi = $row->provinsi;
					$kabkota = $row->kabkota;
					$kecamatan = $row->kecamatan;
				}
				$this->session->set_userdata('session_user',$user);
                $this->session->set_userdata('session_id',$id_admin);
				$this->session->set_userdata('session_nama',$nama_admin);
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
			$data['title'] = 'Registrasi Penjual';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this->load->view('crud/admin/daftar');
		}

        public function daftar_admin(){
			$username = $this->input->post('username');
			$password = $this->input->post('pass');
			$nama_admin = $this->input->post('nama');
			$alamat_penjual = $this->input->post('alamat');
			$nama_toko = $this->input->post('toko');

			$data = array(
				'username' => $username,
				'password' => $password,
				'nama_admin' => $nama_admin,
				);
			$this->M_Admin->input_data($data,'admin');
			redirect('Admin/login');
		}

        public function home_padi(){
            $data['padi'] = $this->M_Admin->padi()->result();
			$data['title'] = 'SP-PADI';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this->template->views('crud/admin/sppadi',$data);
        }

        public function sppadi(){
            $data['title'] = 'SP-PADI';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this->template->views('crud/admin/tambah_padi');
		}

        public function tambah_padi(){
            date_default_timezone_set('Asia/Jakarta');
            $provinsi = $this->input->post('provinsi');
            $kabkota = $this->input->post('kabkota');
            $kecamatan = $this->input->post('kecamatan');
            $jenis_lahan = $this->input->post('lahan');
            $jenis_padi = $this->input->post('padi');
			$jenis_bantuan = $this->input->post('bantuan');
			$panen = $this->input->post('panen');
			$tanam = $this->input->post('tanam');
			$puso = $this->input->post('puso');
            $laporan = $this->input->post('laporan');

			$statistik = array(
                'provinsi' => $provinsi,
				'kabkota' => $kabkota,
				'kecamatan' => $kecamatan,
				'bulan' => date('Y-m-d H:i:s'),
				'tahun' => date('Y-m-d H:i:s'),
				);

			$this->db->insert('statistik',$statistik);
				
			$id_statistik = $this->db->insert_id();

			$result = array();
			foreach ($_POST['panen'] as $key => $val) {
				$result[] = array(
					'statistik' => $id_statistik,
					'provinsi' => $provinsi,
					'kabkota' => $kabkota,
					'kecamatan' => $kecamatan,
					'bulan' => date('Y-m-d H:i:s'),
					'tahun' => date('Y-m-d H:i:s'),
					'jenis_lahan' => $_POST['lahan'][$key],
					'jenis_padi' => $_POST['padi'][$key],
					'jenis_bantuan' => $_POST['bantuan'][$key],
					'panen' => $_POST['panen'][$key],
					'tanam' => $_POST['tanam'][$key],
					'puso' => $_POST['puso'][$key],
					'laporan' => $_POST['laporan'][$key],
					'tgl_laporan' => date('Y-m-d H:i:s'),      
				);      
			}      
			$this->db->insert_batch('padi',$result);


			// $data = array(
			// 	'statistik'=>$id_statistik,
            //     'provinsi' => $provinsi,
			// 	'kabkota' => $kabkota,
			// 	'kecamatan' => $kecamatan,
			// 	'bulan' => date('Y-m-d H:i:s'),
			// 	'tahun' => date('Y-m-d H:i:s'),
			// 	'jenis_lahan' => $jenis_lahan,
			// 	'jenis_padi' => $jenis_padi,
			// 	'jenis_bantuan' => $jenis_bantuan,
			// 	'panen' => $panen,
			// 	'tanam' => $tanam,
			// 	'puso' => $puso,
			// 	'laporan' => $laporan,
            //     'tgl_laporan' => date('Y-m-d H:i:s'),
			// 	);

				

			// $this->M_Admin->input_data($data,'padi');
			redirect('Admin/sppadi');
		}

		public function detail_padi(){
			// $statistik = array('statistik' => $id_statistik);
			// // $lahan = array('jenis_lahan' => 'bukan sawah');
			// $data['padisbp'] = $this -> M_Admin -> data_padi($statistik,'padi') -> result();
			$data['title'] = 'Detail Statistik';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this -> template -> views('crud/admin/detail_padi',$data);
		}

        public function sppalawija(){
            $data['title'] = 'SP-PALAWIJA';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this->template->views('crud/admin/tambah_palawija');
		}

        public function tambah_produk(){
            $data['title'] = 'Tambah Produk';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this->template->views('crud/admin/tambah_produk');
		}

        function tambahprdk(){
			$config['upload_path']          = './gambar/';
			$config['allowed_types']        = 'gif|jpg|png|PNG';
			$config['max_size']             = 10000;
			$config['max_width']            = 10000;
			$config['max_height']           = 10000;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('userfile'))
			{
					echo "gagal tambah";
			}
			else
			{
					$gambar = $this->upload->data();
					$gambar = $gambar['file_name'];
					$idpenjual = $this->input->post('idpenjual');
					$nama_barang = $this->input->post('nama_barang');
					$harga = $this->input->post('harga');
					$stok = $this->input->post('stok');
					$kategori = $this->input->post('kategori');
					$deskripsi = $this->input->post('deskripsi');

					$data = array(
						'idpenjual' => $idpenjual,
						'nama_barang' => $nama_barang,
						'harga' => $harga,
						'stok' => $stok,
						'kategori' => $kategori,
						'deskripsi' => $deskripsi,
						'gambar' => $gambar,
						);
						$this->db->insert('barang', $data);
						$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert"> Data Berhasil Ditambahkan </div>');
						redirect('Penjual/produk');
			}
		}

        public function edit_produk($id_barang){
			$where = array('id_barang' => $id_barang);
			$data['barang'] = $this -> M_Admin -> edit_data($where,'barang') -> result();
			$data['title'] = 'Edit Produk';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this -> template -> views('crud/penjual/edit_produk',$data);
		}

		public function update_produk(){
			$id_barang = $this->input->post('id_barang');
			$nama_barang = $this->input->post('nama_barang');
			$kategori = $this->input->post('kategori');
			$stok = $this->input->post('stok');
			$harga= $this->input->post('harga');
			$deskripsi = $this->input->post('deskripsi');

			$data = array(
				'nama_barang' => $nama_barang,
				'kategori' => $kategori,
				'stok' => $stok,
				'harga' => $harga,
				'deskripsi' => $deskripsi,
			);

			$where = array(
				'id_barang' => $id_barang
			);

			$this->M_Admin->update_data($where,$data,'barang');
			$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert"> Data Berhasil Diedit </div>');
			redirect('Penjual/produk');
		}

		public  function hapus_produk($id_barang){
			$where = array('id_barang' => $id_barang);
			$this->M_Admin->hapus_data($where,'barang');
			$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert"> Data Berhasil Dihapus </div>');
			redirect('Penjual/produk');
		}
	}
