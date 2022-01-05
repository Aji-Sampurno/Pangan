<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
	class Admin extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('M_Admin');
            $this -> load -> helper(array('url'));
			$this -> load -> library('form_validation');
			$this -> load -> library('pagination');
		}

		public function index(){
			$data['tahun'] = $this -> M_Admin -> tahun() -> result();
			$data['title'] = 'Dashboard';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this->template->views('crud/dashboard',$data, TRUE);
		}
		
		public function pending(){
			$data['title'] = 'Menunggu Persetujuan';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this->load->view('crud/pendingpage');
			// $this->load->view('Admin/_Template/footer');
		}

        public function login(){
			$data['title'] = 'Login';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this->load->view('crud/login');
		}

		public function cek_log(){
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			$username = $_POST['txt_user'];
			$password = $_POST['txt_pass'];
			// $username = $this->input->post('txt_user');
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
					$provinsi = $row->provinsiadmin;
					$kabkota = $row->kabkotaadmin;
					$kecamatan = $row->kecamatanadmin;
					$status = $row->status;
				}
				if ($status != 'pending') {
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
					$this->session->set_userdata('session_status',$status);
					redirect('Admin');
				}
				else {
					redirect('Admin/pending');
				}
			}else{
				$this->session->set_flashdata('pesan','<div class="alert alert-danger text-center" role="alert"> Username atau password salah </div>');
				redirect('Admin/login');
			}
		}

		public function logout(){
            $this->session->sess_destroy();
			redirect('Admin/login');
        }

        public function daftar(){
			$data['dataprov'] = $this -> M_Admin -> dataprov() -> result();
			$data['datakab'] = $this -> M_Admin -> datakab() -> result();
            $data['datakec'] = $this->M_Admin->datakec()->result();
			$data['title'] = 'Registrasi';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this->load->view('crud/daftar');
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
					'username'			=> $username,
					'password' 			=> $password,
					'nama_admin' 		=> $nama_admin,
					'jabatan' 			=> $jabatan,
					'nip' 				=> $nip,
					'telp' 				=> $telp,
					'provinsiadmin'		=> $provinsi,
					'kabkotaadmin'		=> $kabkota,
					'kecamatanadmin'	=> $kecamatan,
					'status'			=>'pending',
					);
				$this->M_Admin->input_data($data,'admin');
				redirect('Admin/login');
		}

        public function profile(){
			$data['profile'] = $this -> M_Admin -> profil() -> result();
			$data['title'] = 'Profile';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this->template->views('crud/profile');
		}

        public function home_padi(){
			$offset = $this->uri->segment(3);
			$config['base_url'] = base_url() .'index.php/Admin/home_padi';
			$config['total_rows'] = $this->M_Admin->statistik()->num_rows();
			$config["per_page"] = 10;
			$config["uri_segment"] = 3;
			// $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['offset'] = $offset;
			$data['statistik'] = $this->M_Admin->statistikPadi($config["per_page"], $offset)->result();
			
			$config['first_link']       = 'First';
			$config['last_link']        = 'Last';
			$config['next_link']        = 'Next';
			$config['prev_link']        = 'Prev';
			$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
			$config['full_tag_close']   = '</ul></nav></div>';
			$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
			$config['num_tag_close']    = '</span></li>';
			$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
			$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
			$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
			$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['prev_tagl_close']  = '</span>Next</li>';
			$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
			$config['first_tagl_close'] = '</span></li>';
			$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['last_tagl_close']  = '</span></li>';

			$this->pagination->initialize($config);
			$data["links"] = $this->pagination->create_links();
            
			$data['padi'] = $this->M_Admin->padi()->result();
            $data['datakec'] = $this->M_Admin->datakec()->result();
            // $data['statistik'] = $this->M_Admin->statistik()->result();
			$data['title'] = 'SP-PADI';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this->template->views('crud/padi/statistik_padi',$data);
        }

		public function detail_padi_kosong(){
			$data['padi'] = $this -> M_Admin -> data_padi() -> result();
			$data['title'] = 'Detail Data Kosong';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this -> template -> views('crud/padi/data_padi_kosong',$data);
		}

		public function lihat_statistik_padi($id_statistik){
			$where = array('id_statistik' => $id_statistik);
			$data['jumlahpadi'] 		  = $this -> M_Admin -> datapadi($where,'jumlah_padi') -> result();
			$data['padihibrida'] 		  = $this -> M_Admin -> datapadi($where,'padi_hibrida') -> result();
			$data['padihibridabantuan']   = $this -> M_Admin -> datapadi($where,'padi_hibrida_bantuan') -> result();
			$data['padihibridanon'] 	  = $this -> M_Admin -> datapadi($where,'padi_hibrida_non') -> result();
			$data['padiinbrida'] 		  = $this -> M_Admin -> datapadi($where,'padi_inbrida') -> result();
			$data['padiinbridabantuan']   = $this -> M_Admin -> datapadi($where,'padi_inbrida_bantuan') -> result();
			$data['padiinbridanon'] 	  = $this -> M_Admin -> datapadi($where,'padi_inbrida_non') -> result();
			$data['sawahirigasi']		  = $this -> M_Admin -> datapadi($where,'sawah_irigasi') -> result();
			$data['sawahtadahhujan'] 	  = $this -> M_Admin -> datapadi($where,'sawah_tadah_hujan') -> result();
			$data['sawahrawapasangsurut'] = $this -> M_Admin -> datapadi($where,'sawah_rawa_pasang_surut') -> result();
			$data['sawahrawalebak'] 	  = $this -> M_Admin -> datapadi($where,'sawah_rawa_lebak') -> result();
			$data['rehabjaringan'] 		  = $this -> M_Admin -> datapadi($where,'rehab_jaringan') -> result();
			$data['petugas'] 			  = $this -> M_Admin -> datapadi($where,'statistik') -> result();
			$data['title'] 				  = 'Edit Data';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this -> template -> views('crud/padi/detail_statistik_padi',$data);
		}

		public function print_statistik_padi($id_statistik){
			$where = array('id_statistik' => $id_statistik);
			$data['jumlahpadi'] 		  = $this -> M_Admin -> datapadi($where,'jumlah_padi') -> result();
			$data['padihibrida'] 		  = $this -> M_Admin -> datapadi($where,'padi_hibrida') -> result();
			$data['padihibridabantuan']   = $this -> M_Admin -> datapadi($where,'padi_hibrida_bantuan') -> result();
			$data['padihibridanon'] 	  = $this -> M_Admin -> datapadi($where,'padi_hibrida_non') -> result();
			$data['padiinbrida'] 		  = $this -> M_Admin -> datapadi($where,'padi_inbrida') -> result();
			$data['padiinbridabantuan']   = $this -> M_Admin -> datapadi($where,'padi_inbrida_bantuan') -> result();
			$data['padiinbridanon'] 	  = $this -> M_Admin -> datapadi($where,'padi_inbrida_non') -> result();
			$data['sawahirigasi']		  = $this -> M_Admin -> datapadi($where,'sawah_irigasi') -> result();
			$data['sawahtadahhujan'] 	  = $this -> M_Admin -> datapadi($where,'sawah_tadah_hujan') -> result();
			$data['sawahrawapasangsurut'] = $this -> M_Admin -> datapadi($where,'sawah_rawa_pasang_surut') -> result();
			$data['sawahrawalebak'] 	  = $this -> M_Admin -> datapadi($where,'sawah_rawa_lebak') -> result();
			$data['rehabjaringan'] 		  = $this -> M_Admin -> datapadi($where,'rehab_jaringan') -> result();
			$data['petugas'] 			  = $this -> M_Admin -> datapadi($where,'statistik') -> result();
			$data['title'] 				  = 'Print Data';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this -> load -> view('crud/padi/print_statistik_padi',$data);
		}

		public function edit_statistik_padi($id_statistik){
			$where = array('id_statistik' => $id_statistik);
			$data['jumlahpadi'] 		  = $this -> M_Admin -> datapadi($where,'jumlah_padi') -> result();
			$data['padihibrida'] 		  = $this -> M_Admin -> datapadi($where,'padi_hibrida') -> result();
			$data['padihibridabantuan']   = $this -> M_Admin -> datapadi($where,'padi_hibrida_bantuan') -> result();
			$data['padihibridanon'] 	  = $this -> M_Admin -> datapadi($where,'padi_hibrida_non') -> result();
			$data['padiinbrida'] 		  = $this -> M_Admin -> datapadi($where,'padi_inbrida') -> result();
			$data['padiinbridabantuan']   = $this -> M_Admin -> datapadi($where,'padi_inbrida_bantuan') -> result();
			$data['padiinbridanon'] 	  = $this -> M_Admin -> datapadi($where,'padi_inbrida_non') -> result();
			$data['sawahirigasi']		  = $this -> M_Admin -> datapadi($where,'sawah_irigasi') -> result();
			$data['sawahtadahhujan'] 	  = $this -> M_Admin -> datapadi($where,'sawah_tadah_hujan') -> result();
			$data['sawahrawapasangsurut'] = $this -> M_Admin -> datapadi($where,'sawah_rawa_pasang_surut') -> result();
			$data['sawahrawalebak'] 	  = $this -> M_Admin -> datapadi($where,'sawah_rawa_lebak') -> result();
			$data['rehabjaringan'] 		  = $this -> M_Admin -> datapadi($where,'rehab_jaringan') -> result();
			$data['petugas'] 			  = $this -> M_Admin -> datapadi($where,'statistik') -> result();
			$data['title'] 				  = 'Edit Data';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this -> template -> views('crud/padi/edit_laporan_padi',$data);
		}

        public function tambah_statistik_padi(){
			$data['dataprov'] = $this -> M_Admin -> dataprov() -> result();
			$data['datakab'] = $this -> M_Admin -> datakab() -> result();
            $data['datakec'] = $this->M_Admin->datakec()->result();
            $data['title'] = 'SP-PADI';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this->template->views('crud/padi/tambah_laporan_padi');
		}

        public function tambah_padi(){
            date_default_timezone_set('Asia/Jakarta');
			$statistik = array(
                'id_admin'		=> $this->input->post('id'),
                'nama_admin'	=> $this->input->post('admin'),
                'jabatan'		=> $this->input->post('jabatan'),
                'nip'			=> $this->input->post('nip'),
                'telp'			=> $this->input->post('telp'),
                'provinsi'		=> $this->input->post('provinsi'),
				'kabkota'		=> $this->input->post('kabkota'),
				'kecamatan'		=> $this->input->post('kecamatan'),
				'bulan'			=> $this->input->post('bulan'),
				'tahun'			=> $this->input->post('tahun'),
				'tgl_laporan'	=> date('Y-m-d H:i:s'),   
				);
			$this->db->insert('statistik',$statistik);
				
			$id_statistik = $this->db->insert_id();

			$jumlahpadi = array(
				'id_statistik' => $id_statistik,
                'lalusawah'		=> $this->input->post('lalutotal1'),
				'panensawah'	=> $this->input->post('panentotal1'),
				'tanamsawah'	=> $this->input->post('tanamtotal1'),
				'pusosawah'		=> $this->input->post('pusototal1'),
				'laporansawah'	=> $this->input->post('laporantotal1'), 
                'lalubukan'		=> $this->input->post('lalutotal2'),
				'panenbukan'	=> $this->input->post('panentotal2'),
				'tanambukan'	=> $this->input->post('tanamtotal2'),
				'pusobukan'		=> $this->input->post('pusototal2'),
				'laporanbukan'	=> $this->input->post('laporantotal2'),  
				);
			$this->db->insert('jumlah_padi',$jumlahpadi);

			$padihibrida = array(
				'id_statistik' => $id_statistik,
                'lalusawah'		=> $this->input->post('laluhibrida1'),
				'panensawah'	=> $this->input->post('panenhibrida1'),
				'tanamsawah'	=> $this->input->post('tanamhibrida1'),
				'pusosawah'		=> $this->input->post('pusohibrida1'),
				'laporansawah'	=> $this->input->post('laporanhibrida1'), 
                'lalubukan'		=> $this->input->post('laluhibrida2'),
				'panenbukan'	=> $this->input->post('panenhibrida2'),
				'tanambukan'	=> $this->input->post('tanamhibrida2'),
				'pusobukan'		=> $this->input->post('pusohibrida2'),
				'laporanbukan'	=> $this->input->post('laporanhibrida2'),  
				);
			$this->db->insert('padi_hibrida',$padihibrida);

			$padihibridabantuan = array(
				'id_statistik' => $id_statistik,
                'lalusawah'		=> $this->input->post('lalu1'),
				'panensawah'	=> $this->input->post('panen1'),
				'tanamsawah'	=> $this->input->post('tanam1'),
				'pusosawah'		=> $this->input->post('puso1'),
				'laporansawah'	=> $this->input->post('laporan1'), 
                'lalubukan'		=> $this->input->post('lalu2'),
				'panenbukan'	=> $this->input->post('panen2'),
				'tanambukan'	=> $this->input->post('tanam2'),
				'pusobukan'		=> $this->input->post('puso2'),
				'laporanbukan'	=> $this->input->post('laporan2'),  
				);
			$this->db->insert('padi_hibrida_bantuan',$padihibridabantuan);

			$padihibridanon = array(
				'id_statistik' => $id_statistik,
                'lalusawah'		=> $this->input->post('lalu3'),
				'panensawah'	=> $this->input->post('panen3'),
				'tanamsawah'	=> $this->input->post('tanam3'),
				'pusosawah'		=> $this->input->post('puso3'),
				'laporansawah'	=> $this->input->post('laporan3'), 
                'lalubukan'		=> $this->input->post('lalu4'),
				'panenbukan'	=> $this->input->post('panen4'),
				'tanambukan'	=> $this->input->post('tanam4'),
				'pusobukan'		=> $this->input->post('puso4'),
				'laporanbukan'	=> $this->input->post('laporan4'),  
				);
			$this->db->insert('padi_hibrida_non',$padihibridanon);

			$padiinbrida = array(
				'id_statistik' => $id_statistik,
                'lalusawah'		=> $this->input->post('laluinbrida1'),
				'panensawah'	=> $this->input->post('paneninbrida1'),
				'tanamsawah'	=> $this->input->post('tanaminbrida1'),
				'pusosawah'		=> $this->input->post('pusoinbrida1'),
				'laporansawah'	=> $this->input->post('laporaninbrida1'), 
                'lalubukan'		=> $this->input->post('laluinbrida2'),
				'panenbukan'	=> $this->input->post('paneninbrida2'),
				'tanambukan'	=> $this->input->post('tanaminbrida2'),
				'pusobukan'		=> $this->input->post('pusoinbrida2'),
				'laporanbukan'	=> $this->input->post('laporaninbrida2'),  
				);
			$this->db->insert('padi_inbrida',$padiinbrida);

			$padiinbridabantuan = array(
				'id_statistik' => $id_statistik,
                'lalusawah'		=> $this->input->post('lalu5'),
				'panensawah'	=> $this->input->post('panen5'),
				'tanamsawah'	=> $this->input->post('tanam5'),
				'pusosawah'		=> $this->input->post('puso5'),
				'laporansawah'	=> $this->input->post('laporan5'), 
                'lalubukan'		=> $this->input->post('lalu6'),
				'panenbukan'	=> $this->input->post('panen6'),
				'tanambukan'	=> $this->input->post('tanam6'),
				'pusobukan'		=> $this->input->post('puso6'),
				'laporanbukan'	=> $this->input->post('laporan6'),  
				);
			$this->db->insert('padi_inbrida_bantuan',$padiinbridabantuan);

			$padiinbridanon = array(
				'id_statistik' => $id_statistik,
                'lalusawah'		=> $this->input->post('lalu7'),
				'panensawah'	=> $this->input->post('panen7'),
				'tanamsawah'	=> $this->input->post('tanam7'),
				'pusosawah'		=> $this->input->post('puso7'),
				'laporansawah'	=> $this->input->post('laporan7'), 
                'lalubukan'		=> $this->input->post('lalu8'),
				'panenbukan'	=> $this->input->post('panen8'),
				'tanambukan'	=> $this->input->post('tanam8'),
				'pusobukan'		=> $this->input->post('puso8'),
				'laporanbukan'	=> $this->input->post('laporan8'),  
				);
			$this->db->insert('padi_inbrida_non',$padiinbridanon);

			$sawahirigasi = array(
				'id_statistik' => $id_statistik,
                'lalusawah'		=> $this->input->post('lalu9'),
				'panensawah'	=> $this->input->post('panen9'),
				'tanamsawah'	=> $this->input->post('tanam9'),
				'pusosawah'		=> $this->input->post('puso9'),
				'laporansawah'	=> $this->input->post('laporan9'), 
				);
			$this->db->insert('sawah_irigasi',$sawahirigasi);

			$sawahtadahhujan = array(
				'id_statistik' => $id_statistik,
                'lalusawah'		=> $this->input->post('lalu10'),
				'panensawah'	=> $this->input->post('panen10'),
				'tanamsawah'	=> $this->input->post('tanam10'),
				'pusosawah'		=> $this->input->post('puso10'),
				'laporansawah'	=> $this->input->post('laporan10'),
				);
			$this->db->insert('sawah_tadah_hujan',$sawahtadahhujan);

			$sawahrawapasangsurut = array(
				'id_statistik' => $id_statistik,
                'lalusawah'		=> $this->input->post('lalu11'),
				'panensawah'	=> $this->input->post('panen11'),
				'tanamsawah'	=> $this->input->post('tanam11'),
				'pusosawah'		=> $this->input->post('puso11'),
				'laporansawah'	=> $this->input->post('laporan11'), 
				);
			$this->db->insert('sawah_rawa_pasang_surut',$sawahrawapasangsurut);

			$sawahrawalebak = array(
				'id_statistik' => $id_statistik,
                'lalusawah'		=> $this->input->post('lalu12'),
				'panensawah'	=> $this->input->post('panen12'),
				'tanamsawah'	=> $this->input->post('tanam12'),
				'pusosawah'		=> $this->input->post('puso12'),
				'laporansawah'	=> $this->input->post('laporan12'),
				);
			$this->db->insert('sawah_rawa_lebak',$sawahrawalebak);

			$rehabjaringan = array(
				'id_statistik' => $id_statistik,
				'panensawah'	=> $this->input->post('panen13'),
				'tanamsawah'	=> $this->input->post('tanam13'),
				);
			$this->db->insert('rehab_jaringan',$rehabjaringan);
			
			$this->session->set_flashdata('pesan','<div class="alert alert-success text-center" role="alert"> Data Berhasil Ditambahkan </div>');
			redirect('Admin/home_padi');
		}

		public function update_padi(){
			$id = $this->input->POST('id');
			$where = array('id_statistik'=>$id);

			$jumlahpadi = array(
                'lalusawah'		=> $this->input->post('lalutotal1'),
				'panensawah'	=> $this->input->post('panentotal1'),
				'tanamsawah'	=> $this->input->post('tanamtotal1'),
				'pusosawah'		=> $this->input->post('pusototal1'),
				'laporansawah'	=> $this->input->post('laporantotal1'), 
                'lalubukan'		=> $this->input->post('lalutotal2'),
				'panenbukan'	=> $this->input->post('panentotal2'),
				'tanambukan'	=> $this->input->post('tanamtotal2'),
				'pusobukan'		=> $this->input->post('pusototal2'),
				'laporanbukan'	=> $this->input->post('laporantotal2'),  
				);
			$this->M_Admin->update_data($where,$jumlahpadi,'jumlah_padi');

			$padihibrida = array(
                'lalusawah'		=> $this->input->post('laluhibrida1'),
				'panensawah'	=> $this->input->post('panenhibrida1'),
				'tanamsawah'	=> $this->input->post('tanamhibrida1'),
				'pusosawah'		=> $this->input->post('pusohibrida1'),
				'laporansawah'	=> $this->input->post('laporanhibrida1'), 
                'lalubukan'		=> $this->input->post('laluhibrida2'),
				'panenbukan'	=> $this->input->post('panenhibrida2'),
				'tanambukan'	=> $this->input->post('tanamhibrida2'),
				'pusobukan'		=> $this->input->post('pusohibrida2'),
				'laporanbukan'	=> $this->input->post('laporanhibrida2'),  
				);
			$this->M_Admin->update_data($where,$padihibrida,'padi_hibrida');

			$padihibridabantuan = array(
                'lalusawah'		=> $this->input->post('lalu1'),
				'panensawah'	=> $this->input->post('panen1'),
				'tanamsawah'	=> $this->input->post('tanam1'),
				'pusosawah'		=> $this->input->post('puso1'),
				'laporansawah'	=> $this->input->post('laporan1'), 
                'lalubukan'		=> $this->input->post('lalu2'),
				'panenbukan'	=> $this->input->post('panen2'),
				'tanambukan'	=> $this->input->post('tanam2'),
				'pusobukan'		=> $this->input->post('puso2'),
				'laporanbukan'	=> $this->input->post('laporan2'),  
				);
			$this->M_Admin->update_data($where,$padihibridabantuan,'padi_hibrida_bantuan');

			$padihibridanon = array(
                'lalusawah'		=> $this->input->post('lalu3'),
				'panensawah'	=> $this->input->post('panen3'),
				'tanamsawah'	=> $this->input->post('tanam3'),
				'pusosawah'		=> $this->input->post('puso3'),
				'laporansawah'	=> $this->input->post('laporan3'), 
                'lalubukan'		=> $this->input->post('lalu4'),
				'panenbukan'	=> $this->input->post('panen4'),
				'tanambukan'	=> $this->input->post('tanam4'),
				'pusobukan'		=> $this->input->post('puso4'),
				'laporanbukan'	=> $this->input->post('laporan4'),  
				);
			$this->M_Admin->update_data($where,$padihibridanon,'padi_hibrida_non');

			$padiinbrida = array(
                'lalusawah'		=> $this->input->post('laluinbrida1'),
				'panensawah'	=> $this->input->post('paneninbrida1'),
				'tanamsawah'	=> $this->input->post('tanaminbrida1'),
				'pusosawah'		=> $this->input->post('pusoinbrida1'),
				'laporansawah'	=> $this->input->post('laporaninbrida1'), 
                'lalubukan'		=> $this->input->post('laluinbrida2'),
				'panenbukan'	=> $this->input->post('paneninbrida2'),
				'tanambukan'	=> $this->input->post('tanaminbrida2'),
				'pusobukan'		=> $this->input->post('pusoinbrida2'),
				'laporanbukan'	=> $this->input->post('laporaninbrida2'),  
				);
			$this->M_Admin->update_data($where,$padiinbrida,'padi_inbrida');

			$padiinbridabantuan = array(
                'lalusawah'		=> $this->input->post('lalu5'),
				'panensawah'	=> $this->input->post('panen5'),
				'tanamsawah'	=> $this->input->post('tanam5'),
				'pusosawah'		=> $this->input->post('puso5'),
				'laporansawah'	=> $this->input->post('laporan5'), 
                'lalubukan'		=> $this->input->post('lalu6'),
				'panenbukan'	=> $this->input->post('panen6'),
				'tanambukan'	=> $this->input->post('tanam6'),
				'pusobukan'		=> $this->input->post('puso6'),
				'laporanbukan'	=> $this->input->post('laporan6'),  
				);
			$this->M_Admin->update_data($where,$padiinbridabantuan,'padi_inbrida_bantuan');

			$padiinbridanon = array(
                'lalusawah'		=> $this->input->post('lalu7'),
				'panensawah'	=> $this->input->post('panen7'),
				'tanamsawah'	=> $this->input->post('tanam7'),
				'pusosawah'		=> $this->input->post('puso7'),
				'laporansawah'	=> $this->input->post('laporan7'), 
                'lalubukan'		=> $this->input->post('lalu8'),
				'panenbukan'	=> $this->input->post('panen8'),
				'tanambukan'	=> $this->input->post('tanam8'),
				'pusobukan'		=> $this->input->post('puso8'),
				'laporanbukan'	=> $this->input->post('laporan8'),  
				);
			$this->M_Admin->update_data($where,$padiinbridanon,'padi_inbrida_non');

			$sawahirigasi = array(
                'lalusawah'		=> $this->input->post('lalu9'),
				'panensawah'	=> $this->input->post('panen9'),
				'tanamsawah'	=> $this->input->post('tanam9'),
				'pusosawah'		=> $this->input->post('puso9'),
				'laporansawah'	=> $this->input->post('laporan9'), 
				);
			$this->M_Admin->update_data($where,$sawahirigasi,'sawah_irigasi');

			$sawahtadahhujan = array(
                'lalusawah'		=> $this->input->post('lalu10'),
				'panensawah'	=> $this->input->post('panen10'),
				'tanamsawah'	=> $this->input->post('tanam10'),
				'pusosawah'		=> $this->input->post('puso10'),
				'laporansawah'	=> $this->input->post('laporan10'),
				);
			$this->M_Admin->update_data($where,$sawahtadahhujan,'sawah_tadah_hujan');

			$sawahrawapasangsurut = array(
                'lalusawah'		=> $this->input->post('lalu11'),
				'panensawah'	=> $this->input->post('panen11'),
				'tanamsawah'	=> $this->input->post('tanam11'),
				'pusosawah'		=> $this->input->post('puso11'),
				'laporansawah'	=> $this->input->post('laporan11'), 
				);
			$this->M_Admin->update_data($where,$sawahrawapasangsurut,'sawah_rawa_pasang_surut');

			$sawahrawalebak = array(
                'lalusawah'		=> $this->input->post('lalu12'),
				'panensawah'	=> $this->input->post('panen12'),
				'tanamsawah'	=> $this->input->post('tanam12'),
				'pusosawah'		=> $this->input->post('puso12'),
				'laporansawah'	=> $this->input->post('laporan12'),
				);
			$this->M_Admin->update_data($where,$sawahrawalebak,'sawah_rawa_lebak');

			$rehabjaringan = array(
				'panensawah'	=> $this->input->post('panen13'),
				'tanamsawah'	=> $this->input->post('tanam13'),
				);
			$this->M_Admin->update_data($where,$rehabjaringan,'rehab_jaringan');
			$this->session->set_flashdata('pesan','<div class="alert alert-success text-center" role="alert"> Data Berhasil Diedit </div>');
			redirect('Admin/detail_data_kosong');
		}

		public function detail_data_kosong(){
			$data['padi'] = $this -> M_Admin -> data_padi() -> result();
			$data['palawija'] = $this -> M_Admin -> data_palawija() -> result();
			$data['title'] = 'Detail Data Kosong';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this -> template -> views('crud/data_kosong',$data);
		}

		public function detail_data_petugas(){
			$data['petugas'] = $this -> M_Admin -> data_petugas() -> result();
			$data['title'] = 'Detail Data Petugas';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this -> template -> views('crud/admin/data_petugas',$data);
		}

		public function detail_petugas($id_admin){
			$where = array('id_admin' => $id_admin);
			$data['petugas'] = $this -> M_Admin -> petugas($where,'admin') -> result();
			$data['title'] = 'Detail Data Petugas';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this -> template -> views('crud/admin/detail_data_petugas',$data);
		}

		public function detail_data_approval(){
			$data['petugas'] = $this -> M_Admin -> data_approval() -> result();
			$data['title'] = 'Detail Data Menunggu Approval';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this -> template -> views('crud/admin/data_approval',$data);
		}

		public function data_approval($id_admin){
			$where = array('id_admin' => $id_admin);
			$data['petugas'] = $this -> M_Admin -> approve($where,'admin') -> result();
			$data['title'] = 'Detail Data Petugas';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this -> template -> views('crud/admin/approval_petugas',$data);
		}

		public function approval_petugas(){
			$id = $this->input->POST('id');
			$where = array('id_admin'=>$id);

			$data = array(
                'status'		=> 'petugas',
				);
			$this->M_Admin->update_data($where,$data,'admin');
			
			$this->session->set_flashdata('pesan','<div class="alert alert-success text-center" role="alert"> Data Berhasil Diedit </div>');
			redirect('Admin/detail_data_approval');
		}

        public function home_palawija(){
			$offset = $this->uri->segment(3);
			$config['base_url'] = base_url() .'index.php/Admin/home_palawija';
			$config['total_rows'] = $this->M_Admin->statistik_palawija()->num_rows();
			$config["per_page"] = 10;
			$config["uri_segment"] = 3;
			// $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['offset'] = $offset;
			$data['statistik'] = $this->M_Admin->statistikPalawija($config["per_page"], $offset)->result();
			
			$config['first_link']       = 'First';
			$config['last_link']        = 'Last';
			$config['next_link']        = 'Next';
			$config['prev_link']        = 'Prev';
			$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
			$config['full_tag_close']   = '</ul></nav></div>';
			$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
			$config['num_tag_close']    = '</span></li>';
			$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
			$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
			$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
			$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['prev_tagl_close']  = '</span>Next</li>';
			$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
			$config['first_tagl_close'] = '</span></li>';
			$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['last_tagl_close']  = '</span></li>';

			$this->pagination->initialize($config);
			$data["links"] = $this->pagination->create_links();
			
            $data['padi'] = $this->M_Admin->padi()->result();
            $data['datakec'] = $this->M_Admin->datakec()->result();
            // $data['statistik'] = $this->M_Admin->statistik_palawija()->result();
			$data['title'] = 'SP-PALAWIJA';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this->template->views('crud/palawija/statistik_palawija',$data);
        }

		public function detail_palawija_kosong(){
			$data['palawija'] = $this -> M_Admin -> data_palawija() -> result();
			$data['title'] = 'Detail Data Kosong';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this -> template -> views('crud/palawija/data_palawija_kosong',$data);
		}

		public function lihat_statistik_palawija($id_statistik){
			$where = array('id_statistik' => $id_statistik);
			$data['jumlahjagung'] 		  = $this -> M_Admin -> datapadi($where,'jumlah_jagung') -> result();
			$data['jagunghibrida'] 		  = $this -> M_Admin -> datapadi($where,'jagung_hibrida') -> result();
			$data['jagunghibridabantuan'] = $this -> M_Admin -> datapadi($where,'jagung_hibrida_bantuan') -> result();
			$data['jagunghibridanon'] 	  = $this -> M_Admin -> datapadi($where,'jagung_hibrida_non') -> result();
			$data['jagungkomposit'] 	  = $this -> M_Admin -> datapadi($where,'jagung_komposit') -> result();
			$data['jagunglokal']   		  = $this -> M_Admin -> datapadi($where,'jagung_lokal') -> result();
			$data['jumlahkedelai'] 	 	  = $this -> M_Admin -> datapadi($where,'jumlah_kedelai') -> result();
			$data['kedelaibantuan']		  = $this -> M_Admin -> datapadi($where,'kedelai_bantuan') -> result();
			$data['kedelainon'] 	  	  = $this -> M_Admin -> datapadi($where,'kedelai_non') -> result();
			$data['kacangtanah'] 		  = $this -> M_Admin -> datapadi($where,'kacang_tanah') -> result();
			$data['jumlahsingkong'] 	  = $this -> M_Admin -> datapadi($where,'jumlah_singkong') -> result();
			$data['singkongbantuan'] 	  = $this -> M_Admin -> datapadi($where,'singkong_bantuan') -> result();
			$data['singkongnon'] 	  	  = $this -> M_Admin -> datapadi($where,'singkong_non') -> result();
			$data['ubijalar'] 	  		  = $this -> M_Admin -> datapadi($where,'ubi_jalar') -> result();
			$data['kacanghijau'] 	  	  = $this -> M_Admin -> datapadi($where,'kacang_hijau') -> result();
			$data['sorgum'] 	  		  = $this -> M_Admin -> datapadi($where,'sorgum') -> result();
			$data['gandum'] 	  		  = $this -> M_Admin -> datapadi($where,'gandum') -> result();
			$data['talas'] 	  			  = $this -> M_Admin -> datapadi($where,'talas') -> result();
			$data['ganyong'] 	  		  = $this -> M_Admin -> datapadi($where,'ganyong') -> result();
			$data['umbilain'] 	  		  = $this -> M_Admin -> datapadi($where,'umbi_lain') -> result();
			$data['petugas'] 			  = $this -> M_Admin -> datapadi($where,'statistik') -> result();
			$data['title'] 				  = 'SP-PALAWIJA';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this -> template -> views('crud/palawija/detail_statistik_palawija',$data);
		}

		public function print_statistik_palawija($id_statistik){
			$where = array('id_statistik' => $id_statistik);
			$data['jumlahjagung'] 		  = $this -> M_Admin -> datapadi($where,'jumlah_jagung') -> result();
			$data['jagunghibrida'] 		  = $this -> M_Admin -> datapadi($where,'jagung_hibrida') -> result();
			$data['jagunghibridabantuan'] = $this -> M_Admin -> datapadi($where,'jagung_hibrida_bantuan') -> result();
			$data['jagunghibridanon'] 	  = $this -> M_Admin -> datapadi($where,'jagung_hibrida_non') -> result();
			$data['jagungkomposit'] 	  = $this -> M_Admin -> datapadi($where,'jagung_komposit') -> result();
			$data['jagunglokal']   		  = $this -> M_Admin -> datapadi($where,'jagung_lokal') -> result();
			$data['jumlahkedelai'] 	 	  = $this -> M_Admin -> datapadi($where,'jumlah_kedelai') -> result();
			$data['kedelaibantuan']		  = $this -> M_Admin -> datapadi($where,'kedelai_bantuan') -> result();
			$data['kedelainon'] 	  	  = $this -> M_Admin -> datapadi($where,'kedelai_non') -> result();
			$data['kacangtanah'] 		  = $this -> M_Admin -> datapadi($where,'kacang_tanah') -> result();
			$data['jumlahsingkong'] 	  = $this -> M_Admin -> datapadi($where,'jumlah_singkong') -> result();
			$data['singkongbantuan'] 	  = $this -> M_Admin -> datapadi($where,'singkong_bantuan') -> result();
			$data['singkongnon'] 	  	  = $this -> M_Admin -> datapadi($where,'singkong_non') -> result();
			$data['ubijalar'] 	  		  = $this -> M_Admin -> datapadi($where,'ubi_jalar') -> result();
			$data['kacanghijau'] 	  	  = $this -> M_Admin -> datapadi($where,'kacang_hijau') -> result();
			$data['sorgum'] 	  		  = $this -> M_Admin -> datapadi($where,'sorgum') -> result();
			$data['gandum'] 	  		  = $this -> M_Admin -> datapadi($where,'gandum') -> result();
			$data['talas'] 	  			  = $this -> M_Admin -> datapadi($where,'talas') -> result();
			$data['ganyong'] 	  		  = $this -> M_Admin -> datapadi($where,'ganyong') -> result();
			$data['umbilain'] 	  		  = $this -> M_Admin -> datapadi($where,'umbi_lain') -> result();
			$data['petugas'] 			  = $this -> M_Admin -> datapadi($where,'statistik') -> result();
			$data['title'] 				  = 'Print Data';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this ->  load -> view('crud/palawija/print_statistik_palawija',$data);
		}

		public function edit_statistik_palawija($id_statistik){
			$where = array('id_statistik' => $id_statistik);
			$data['jumlahjagung'] 		  = $this -> M_Admin -> datapadi($where,'jumlah_jagung') -> result();
			$data['jagunghibrida'] 		  = $this -> M_Admin -> datapadi($where,'jagung_hibrida') -> result();
			$data['jagunghibridabantuan'] = $this -> M_Admin -> datapadi($where,'jagung_hibrida_bantuan') -> result();
			$data['jagunghibridanon'] 	  = $this -> M_Admin -> datapadi($where,'jagung_hibrida_non') -> result();
			$data['jagungkomposit'] 	  = $this -> M_Admin -> datapadi($where,'jagung_komposit') -> result();
			$data['jagunglokal']   		  = $this -> M_Admin -> datapadi($where,'jagung_lokal') -> result();
			$data['jumlahkedelai'] 	 	  = $this -> M_Admin -> datapadi($where,'jumlah_kedelai') -> result();
			$data['kedelaibantuan']		  = $this -> M_Admin -> datapadi($where,'kedelai_bantuan') -> result();
			$data['kedelainon'] 	  	  = $this -> M_Admin -> datapadi($where,'kedelai_non') -> result();
			$data['kacangtanah'] 		  = $this -> M_Admin -> datapadi($where,'kacang_tanah') -> result();
			$data['jumlahsingkong'] 	  = $this -> M_Admin -> datapadi($where,'jumlah_singkong') -> result();
			$data['singkongbantuan'] 	  = $this -> M_Admin -> datapadi($where,'singkong_bantuan') -> result();
			$data['singkongnon'] 	  	  = $this -> M_Admin -> datapadi($where,'singkong_non') -> result();
			$data['ubijalar'] 	  		  = $this -> M_Admin -> datapadi($where,'ubi_jalar') -> result();
			$data['kacanghijau'] 	  	  = $this -> M_Admin -> datapadi($where,'kacang_hijau') -> result();
			$data['sorgum'] 	  		  = $this -> M_Admin -> datapadi($where,'sorgum') -> result();
			$data['gandum'] 	  		  = $this -> M_Admin -> datapadi($where,'gandum') -> result();
			$data['talas'] 	  			  = $this -> M_Admin -> datapadi($where,'talas') -> result();
			$data['ganyong'] 	  		  = $this -> M_Admin -> datapadi($where,'ganyong') -> result();
			$data['umbilain'] 	  		  = $this -> M_Admin -> datapadi($where,'umbi_lain') -> result();
			$data['petugas'] 			  = $this -> M_Admin -> datapadi($where,'statistik') -> result();
			$data['title'] 				  = 'Edit Data';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this -> template -> views('crud/palawija/edit_laporan_palawija',$data);
		}

        public function tambah_statistik_palawija(){
			$data['dataprov'] = $this -> M_Admin -> dataprov() -> result();
			$data['datakab'] = $this -> M_Admin -> datakab() -> result();
            $data['datakec'] = $this->M_Admin->datakec()->result();
            $data['title'] = 'SP-PALAWIJA';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this->template->views('crud/palawija/tambah_laporan_palawija');
		}

        public function tambah_palawija(){
            date_default_timezone_set('Asia/Jakarta');
			$statistik = array(
                'id_admin'		=> $this->input->post('id'),
                'nama_admin'	=> $this->input->post('admin'),
                'jabatan'		=> $this->input->post('jabatan'),
                'nip'			=> $this->input->post('nip'),
                'telp'			=> $this->input->post('telp'),
                'provinsi'		=> $this->input->post('provinsi'),
				'kabkota'		=> $this->input->post('kabkota'),
				'kecamatan'		=> $this->input->post('kecamatan'),
				'bulan'			=> $this->input->post('bulan'),
				'tahun'			=> $this->input->post('tahun'),
				'tgl_laporan'	=> date('Y-m-d H:i:s'),   
				);
			$this->db->insert('statistik_palawija',$statistik);
				
			$id_statistik = $this->db->insert_id();

			$jumlahjagung = array(
				'id_statistik' => $id_statistik,
                'lalusawah'		=> $this->input->post('lalu1'),
				'panensawah'	=> $this->input->post('panen1'),
				'mudasawah'		=> $this->input->post('muda1'),
				'ternaksawah'	=> $this->input->post('ternak1'),
				'tanamsawah'	=> $this->input->post('tanam1'),
				'pusosawah'		=> $this->input->post('puso1'),
				'laporansawah'	=> $this->input->post('laporan1'), 
                'lalubukan'		=> $this->input->post('lalu2'),
				'panenbukan'	=> $this->input->post('panen2'),
				'mudabukan'		=> $this->input->post('muda2'),
				'ternakbukan'	=> $this->input->post('ternak2'),
				'tanambukan'	=> $this->input->post('tanam2'),
				'pusobukan'		=> $this->input->post('puso2'),
				'laporanbukan'	=> $this->input->post('laporan2'),  
				'produksi'		=> $this->input->post('produksi1'),  
				);
			$this->db->insert('jumlah_jagung',$jumlahjagung);

			$jagung_hibrida = array(
				'id_statistik' => $id_statistik,
                'lalusawah'		=> $this->input->post('lalu3'),
				'panensawah'	=> $this->input->post('panen3'),
				'mudasawah'		=> $this->input->post('muda3'),
				'ternaksawah'	=> $this->input->post('ternak3'),
				'tanamsawah'	=> $this->input->post('tanam3'),
				'pusosawah'		=> $this->input->post('puso3'),
				'laporansawah'	=> $this->input->post('laporan3'), 
                'lalubukan'		=> $this->input->post('lalu4'),
				'panenbukan'	=> $this->input->post('panen4'),
				'mudabukan'		=> $this->input->post('muda4'),
				'ternakbukan'	=> $this->input->post('ternak4'),
				'tanambukan'	=> $this->input->post('tanam4'),
				'pusobukan'		=> $this->input->post('puso4'),
				'laporanbukan'	=> $this->input->post('laporan4'),  
				'produksi'		=> $this->input->post('produksi2'),  
				);
			$this->db->insert('jagung_hibrida',$jagung_hibrida);

			$jagung_hibrida_bantuan = array(
				'id_statistik' => $id_statistik,
                'lalusawah'		=> $this->input->post('lalu5'),
				'panensawah'	=> $this->input->post('panen5'),
				'mudasawah'		=> $this->input->post('muda5'),
				'ternaksawah'	=> $this->input->post('ternak5'),
				'tanamsawah'	=> $this->input->post('tanam5'),
				'pusosawah'		=> $this->input->post('puso5'),
				'laporansawah'	=> $this->input->post('laporan5'), 
                'lalubukan'		=> $this->input->post('lalu6'),
				'panenbukan'	=> $this->input->post('panen6'),
				'mudabukan'		=> $this->input->post('muda6'),
				'ternakbukan'	=> $this->input->post('ternak6'),
				'tanambukan'	=> $this->input->post('tanam6'),
				'pusobukan'		=> $this->input->post('puso6'),
				'laporanbukan'	=> $this->input->post('laporan6'),  
				'produksi'		=> $this->input->post('produksi3'),  
				);
			$this->db->insert('jagung_hibrida_bantuan',$jagung_hibrida_bantuan);

			$jagung_hibrida_non = array(
				'id_statistik' => $id_statistik,
                'lalusawah'		=> $this->input->post('lalu7'),
				'panensawah'	=> $this->input->post('panen7'),
				'mudasawah'		=> $this->input->post('muda7'),
				'ternaksawah'	=> $this->input->post('ternak7'),
				'tanamsawah'	=> $this->input->post('tanam7'),
				'pusosawah'		=> $this->input->post('puso7'),
				'laporansawah'	=> $this->input->post('laporan7'), 
                'lalubukan'		=> $this->input->post('lalu8'),
				'panenbukan'	=> $this->input->post('panen8'),
				'mudabukan'		=> $this->input->post('muda8'),
				'ternakbukan'	=> $this->input->post('ternak8'),
				'tanambukan'	=> $this->input->post('tanam8'),
				'pusobukan'		=> $this->input->post('puso8'),
				'laporanbukan'	=> $this->input->post('laporan8'),  
				'produksi'		=> $this->input->post('produksi4'),  
				);
			$this->db->insert('jagung_hibrida_non',$jagung_hibrida_non);

			$jagung_komposit = array(
				'id_statistik' => $id_statistik,
                'lalusawah'		=> $this->input->post('lalu9'),
				'panensawah'	=> $this->input->post('panen9'),
				'mudasawah'		=> $this->input->post('muda9'),
				'ternaksawah'	=> $this->input->post('ternak9'),
				'tanamsawah'	=> $this->input->post('tanam9'),
				'pusosawah'		=> $this->input->post('puso9'),
				'laporansawah'	=> $this->input->post('laporan9'), 
                'lalubukan'		=> $this->input->post('lalu10'),
				'panenbukan'	=> $this->input->post('panen10'),
				'mudabukan'		=> $this->input->post('muda10'),
				'ternakbukan'	=> $this->input->post('ternak10'),
				'tanambukan'	=> $this->input->post('tanam10'),
				'pusobukan'		=> $this->input->post('puso10'),
				'laporanbukan'	=> $this->input->post('laporan10'),  
				'produksi'		=> $this->input->post('produksi5'),  
				);
			$this->db->insert('jagung_komposit',$jagung_komposit);

			$jagung_lokal = array(
				'id_statistik' => $id_statistik,
                'lalusawah'		=> $this->input->post('lalu11'),
				'panensawah'	=> $this->input->post('panen11'),
				'mudasawah'		=> $this->input->post('muda11'),
				'ternaksawah'	=> $this->input->post('ternak11'),
				'tanamsawah'	=> $this->input->post('tanam11'),
				'pusosawah'		=> $this->input->post('puso11'),
				'laporansawah'	=> $this->input->post('laporan11'), 
                'lalubukan'		=> $this->input->post('lalu12'),
				'panenbukan'	=> $this->input->post('panen12'),
				'mudabukan'		=> $this->input->post('muda12'),
				'ternakbukan'	=> $this->input->post('ternak12'),
				'tanambukan'	=> $this->input->post('tanam12'),
				'pusobukan'		=> $this->input->post('puso12'),
				'laporanbukan'	=> $this->input->post('laporan12'),  
				'produksi'		=> $this->input->post('produksi6'),  
				);
			$this->db->insert('jagung_lokal',$jagung_lokal);

			$jumlah_kedelai = array(
				'id_statistik' => $id_statistik,
                'lalusawah'		=> $this->input->post('lalu13'),
				'panensawah'	=> $this->input->post('panen13'),
				'mudasawah'		=> $this->input->post('muda13'),
				'ternaksawah'	=> $this->input->post('ternak13'),
				'tanamsawah'	=> $this->input->post('tanam13'),
				'pusosawah'		=> $this->input->post('puso13'),
				'laporansawah'	=> $this->input->post('laporan13'), 
                'lalubukan'		=> $this->input->post('lalu14'),
				'panenbukan'	=> $this->input->post('panen14'),
				'mudabukan'		=> $this->input->post('muda14'),
				'ternakbukan'	=> $this->input->post('ternak14'),
				'tanambukan'	=> $this->input->post('tanam14'),
				'pusobukan'		=> $this->input->post('puso14'),
				'laporanbukan'	=> $this->input->post('laporan14'),  
				'produksi'		=> $this->input->post('produksi7'),  
				);
			$this->db->insert('jumlah_kedelai',$jumlah_kedelai);

			$kedelai_bantuan = array(
				'id_statistik' => $id_statistik,
                'lalusawah'		=> $this->input->post('lalu15'),
				'panensawah'	=> $this->input->post('panen15'),
				'mudasawah'		=> $this->input->post('muda15'),
				'ternaksawah'	=> $this->input->post('ternak15'),
				'tanamsawah'	=> $this->input->post('tanam15'),
				'pusosawah'		=> $this->input->post('puso15'),
				'laporansawah'	=> $this->input->post('laporan15'), 
                'lalubukan'		=> $this->input->post('lalu16'),
				'panenbukan'	=> $this->input->post('panen16'),
				'mudabukan'		=> $this->input->post('muda16'),
				'ternakbukan'	=> $this->input->post('ternak16'),
				'tanambukan'	=> $this->input->post('tanam16'),
				'pusobukan'		=> $this->input->post('puso16'),
				'laporanbukan'	=> $this->input->post('laporan16'),  
				'produksi'		=> $this->input->post('produksi8'),  
				);
			$this->db->insert('kedelai_bantuan',$kedelai_bantuan);

			$kedelai_non = array(
				'id_statistik' => $id_statistik,
                'lalusawah'		=> $this->input->post('lalu17'),
				'panensawah'	=> $this->input->post('panen17'),
				'mudasawah'		=> $this->input->post('muda17'),
				'ternaksawah'	=> $this->input->post('ternak17'),
				'tanamsawah'	=> $this->input->post('tanam17'),
				'pusosawah'		=> $this->input->post('puso17'),
				'laporansawah'	=> $this->input->post('laporan17'), 
                'lalubukan'		=> $this->input->post('lalu18'),
				'panenbukan'	=> $this->input->post('panen18'),
				'mudabukan'		=> $this->input->post('muda18'),
				'ternakbukan'	=> $this->input->post('ternak18'),
				'tanambukan'	=> $this->input->post('tanam18'),
				'pusobukan'		=> $this->input->post('puso18'),
				'laporanbukan'	=> $this->input->post('laporan18'),  
				'produksi'		=> $this->input->post('produksi9'),  
				);
			$this->db->insert('kedelai_non',$kedelai_non);

			$kacang_tanah = array(
				'id_statistik' => $id_statistik,
                'lalusawah'		=> $this->input->post('lalu19'),
				'panensawah'	=> $this->input->post('panen19'),
				'mudasawah'		=> $this->input->post('muda19'),
				'ternaksawah'	=> $this->input->post('ternak19'),
				'tanamsawah'	=> $this->input->post('tanam19'),
				'pusosawah'		=> $this->input->post('puso19'),
				'laporansawah'	=> $this->input->post('laporan19'), 
                'lalubukan'		=> $this->input->post('lalu20'),
				'panenbukan'	=> $this->input->post('panen20'),
				'mudabukan'		=> $this->input->post('muda20'),
				'ternakbukan'	=> $this->input->post('ternak20'),
				'tanambukan'	=> $this->input->post('tanam20'),
				'pusobukan'		=> $this->input->post('puso20'),
				'laporanbukan'	=> $this->input->post('laporan20'),  
				'produksi'		=> $this->input->post('produksi10'),  
				);
			$this->db->insert('kacang_tanah',$kacang_tanah);

			$jumlah_singkong = array(
				'id_statistik' => $id_statistik,
                'lalusawah'		=> $this->input->post('lalu21'),
				'panensawah'	=> $this->input->post('panen21'),
				'mudasawah'		=> $this->input->post('muda21'),
				'ternaksawah'	=> $this->input->post('ternak21'),
				'tanamsawah'	=> $this->input->post('tanam21'),
				'pusosawah'		=> $this->input->post('puso21'),
				'laporansawah'	=> $this->input->post('laporan21'), 
                'lalubukan'		=> $this->input->post('lalu22'),
				'panenbukan'	=> $this->input->post('panen22'),
				'mudabukan'		=> $this->input->post('muda22'),
				'ternakbukan'	=> $this->input->post('ternak22'),
				'tanambukan'	=> $this->input->post('tanam22'),
				'pusobukan'		=> $this->input->post('puso22'),
				'laporanbukan'	=> $this->input->post('laporan22'),  
				'produksi'		=> $this->input->post('produksi11'),  
				);
			$this->db->insert('jumlah_singkong',$jumlah_singkong);

			$singkong_bantuan = array(
				'id_statistik' => $id_statistik,
                'lalusawah'		=> $this->input->post('lalu23'),
				'panensawah'	=> $this->input->post('panen23'),
				'mudasawah'		=> $this->input->post('muda23'),
				'ternaksawah'	=> $this->input->post('ternak23'),
				'tanamsawah'	=> $this->input->post('tanam23'),
				'pusosawah'		=> $this->input->post('puso23'),
				'laporansawah'	=> $this->input->post('laporan23'), 
                'lalubukan'		=> $this->input->post('lalu24'),
				'panenbukan'	=> $this->input->post('panen24'),
				'mudabukan'		=> $this->input->post('muda24'),
				'ternakbukan'	=> $this->input->post('ternak24'),
				'tanambukan'	=> $this->input->post('tanam24'),
				'pusobukan'		=> $this->input->post('puso24'),
				'laporanbukan'	=> $this->input->post('laporan24'),  
				'produksi'		=> $this->input->post('produksi12'),  
				);
			$this->db->insert('singkong_bantuan',$singkong_bantuan);

			$singkong_non = array(
				'id_statistik' => $id_statistik,
                'lalusawah'		=> $this->input->post('lalu25'),
				'panensawah'	=> $this->input->post('panen25'),
				'mudasawah'		=> $this->input->post('muda25'),
				'ternaksawah'	=> $this->input->post('ternak25'),
				'tanamsawah'	=> $this->input->post('tanam25'),
				'pusosawah'		=> $this->input->post('puso25'),
				'laporansawah'	=> $this->input->post('laporan25'), 
                'lalubukan'		=> $this->input->post('lalu26'),
				'panenbukan'	=> $this->input->post('panen26'),
				'mudabukan'		=> $this->input->post('muda26'),
				'ternakbukan'	=> $this->input->post('ternak26'),
				'tanambukan'	=> $this->input->post('tanam26'),
				'pusobukan'		=> $this->input->post('puso26'),
				'laporanbukan'	=> $this->input->post('laporan26'),  
				'produksi'		=> $this->input->post('produksi13'),  
				);
			$this->db->insert('singkong_non',$singkong_non);

			$ubi_jalar = array(
				'id_statistik' => $id_statistik,
                'lalusawah'		=> $this->input->post('lalu27'),
				'panensawah'	=> $this->input->post('panen27'),
				'mudasawah'		=> $this->input->post('muda27'),
				'ternaksawah'	=> $this->input->post('ternak27'),
				'tanamsawah'	=> $this->input->post('tanam27'),
				'pusosawah'		=> $this->input->post('puso27'),
				'laporansawah'	=> $this->input->post('laporan27'), 
                'lalubukan'		=> $this->input->post('lalu28'),
				'panenbukan'	=> $this->input->post('panen28'),
				'mudabukan'		=> $this->input->post('muda28'),
				'ternakbukan'	=> $this->input->post('ternak28'),
				'tanambukan'	=> $this->input->post('tanam28'),
				'pusobukan'		=> $this->input->post('puso28'),
				'laporanbukan'	=> $this->input->post('laporan28'),  
				'produksi'		=> $this->input->post('produksi14'),  
				);
			$this->db->insert('ubi_jalar',$ubi_jalar);

			$kacang_hijau = array(
				'id_statistik' => $id_statistik,
                'lalusawah'		=> $this->input->post('lalu29'),
				'panensawah'	=> $this->input->post('panen29'),
				'mudasawah'		=> $this->input->post('muda29'),
				'ternaksawah'	=> $this->input->post('ternak29'),
				'tanamsawah'	=> $this->input->post('tanam29'),
				'pusosawah'		=> $this->input->post('puso29'),
				'laporansawah'	=> $this->input->post('laporan29'), 
                'lalubukan'		=> $this->input->post('lalu30'),
				'panenbukan'	=> $this->input->post('panen30'),
				'mudabukan'		=> $this->input->post('muda30'),
				'ternakbukan'	=> $this->input->post('ternak30'),
				'tanambukan'	=> $this->input->post('tanam30'),
				'pusobukan'		=> $this->input->post('puso30'),
				'laporanbukan'	=> $this->input->post('laporan30'),  
				'produksi'		=> $this->input->post('produksi15'),  
				);
			$this->db->insert('kacang_hijau',$kacang_hijau);

			$sorgum = array(
				'id_statistik' => $id_statistik,
                'lalusawah'		=> $this->input->post('lalu31'),
				'panensawah'	=> $this->input->post('panen31'),
				'mudasawah'		=> $this->input->post('muda31'),
				'ternaksawah'	=> $this->input->post('ternak31'),
				'tanamsawah'	=> $this->input->post('tanam31'),
				'pusosawah'		=> $this->input->post('puso31'),
				'laporansawah'	=> $this->input->post('laporan31'), 
                'lalubukan'		=> $this->input->post('lalu32'),
				'panenbukan'	=> $this->input->post('panen32'),
				'mudabukan'		=> $this->input->post('muda32'),
				'ternakbukan'	=> $this->input->post('ternak32'),
				'tanambukan'	=> $this->input->post('tanam32'),
				'pusobukan'		=> $this->input->post('puso32'),
				'laporanbukan'	=> $this->input->post('laporan32'),  
				'produksi'		=> $this->input->post('produksi16'),  
				);
			$this->db->insert('sorgum',$sorgum);

			$gandum = array(
				'id_statistik' => $id_statistik,
                'lalusawah'		=> $this->input->post('lalu33'),
				'panensawah'	=> $this->input->post('panen33'),
				'mudasawah'		=> $this->input->post('muda33'),
				'ternaksawah'	=> $this->input->post('ternak33'),
				'tanamsawah'	=> $this->input->post('tanam33'),
				'pusosawah'		=> $this->input->post('puso33'),
				'laporansawah'	=> $this->input->post('laporan33'), 
                'lalubukan'		=> $this->input->post('lalu34'),
				'panenbukan'	=> $this->input->post('panen34'),
				'mudabukan'		=> $this->input->post('muda34'),
				'ternakbukan'	=> $this->input->post('ternak34'),
				'tanambukan'	=> $this->input->post('tanam34'),
				'pusobukan'		=> $this->input->post('puso34'),
				'laporanbukan'	=> $this->input->post('laporan34'),  
				'produksi'		=> $this->input->post('produksi17'),  
				);
			$this->db->insert('gandum',$gandum);

			$talas = array(
				'id_statistik' => $id_statistik,
                'lalusawah'		=> $this->input->post('lalu35'),
				'panensawah'	=> $this->input->post('panen35'),
				'mudasawah'		=> $this->input->post('muda35'),
				'ternaksawah'	=> $this->input->post('ternak35'),
				'tanamsawah'	=> $this->input->post('tanam35'),
				'pusosawah'		=> $this->input->post('puso35'),
				'laporansawah'	=> $this->input->post('laporan35'), 
                'lalubukan'		=> $this->input->post('lalu36'),
				'panenbukan'	=> $this->input->post('panen36'),
				'mudabukan'		=> $this->input->post('muda36'),
				'ternakbukan'	=> $this->input->post('ternak36'),
				'tanambukan'	=> $this->input->post('tanam36'),
				'pusobukan'		=> $this->input->post('puso36'),
				'laporanbukan'	=> $this->input->post('laporan36'),  
				'produksi'		=> $this->input->post('produksi18'),  
				);
			$this->db->insert('talas',$talas);

			$ganyong = array(
				'id_statistik' => $id_statistik,
                'lalusawah'		=> $this->input->post('lalu37'),
				'panensawah'	=> $this->input->post('panen37'),
				'mudasawah'		=> $this->input->post('muda37'),
				'ternaksawah'	=> $this->input->post('ternak37'),
				'tanamsawah'	=> $this->input->post('tanam37'),
				'pusosawah'		=> $this->input->post('puso37'),
				'laporansawah'	=> $this->input->post('laporan37'), 
                'lalubukan'		=> $this->input->post('lalu38'),
				'panenbukan'	=> $this->input->post('panen38'),
				'mudabukan'		=> $this->input->post('muda38'),
				'ternakbukan'	=> $this->input->post('ternak38'),
				'tanambukan'	=> $this->input->post('tanam38'),
				'pusobukan'		=> $this->input->post('puso38'),
				'laporanbukan'	=> $this->input->post('laporan38'),  
				'produksi'		=> $this->input->post('produksi19'),  
				);
			$this->db->insert('ganyong',$ganyong);

			$umbi_lain = array(
				'id_statistik' => $id_statistik,
                'lalusawah'		=> $this->input->post('lalu39'),
				'panensawah'	=> $this->input->post('panen39'),
				'mudasawah'		=> $this->input->post('muda39'),
				'ternaksawah'	=> $this->input->post('ternak39'),
				'tanamsawah'	=> $this->input->post('tanam39'),
				'pusosawah'		=> $this->input->post('puso39'),
				'laporansawah'	=> $this->input->post('laporan39'), 
                'lalubukan'		=> $this->input->post('lalu40'),
				'panenbukan'	=> $this->input->post('panen40'),
				'mudabukan'		=> $this->input->post('muda40'),
				'ternakbukan'	=> $this->input->post('ternak40'),
				'tanambukan'	=> $this->input->post('tanam40'),
				'pusobukan'		=> $this->input->post('puso40'),
				'laporanbukan'	=> $this->input->post('laporan40'),  
				'produksi'		=> $this->input->post('produksi20'),  
				);
			$this->db->insert('umbi_lain',$umbi_lain);
			
			$this->session->set_flashdata('pesan','<div class="alert alert-success text-center" role="alert"> Data Berhasil Ditambahkan </div>');
			redirect('Admin/home_palawija');
		}

		public function update_palawija(){
			$id = $this->input->POST('id');
			$where = array('id_statistik'=>$id);

			$jumlahjagung = array(
                'lalusawah'		=> $this->input->post('lalu1'),
				'panensawah'	=> $this->input->post('panen1'),
				'mudasawah'		=> $this->input->post('muda1'),
				'ternaksawah'	=> $this->input->post('ternak1'),
				'tanamsawah'	=> $this->input->post('tanam1'),
				'pusosawah'		=> $this->input->post('puso1'),
				'laporansawah'	=> $this->input->post('laporan1'), 
                'lalubukan'		=> $this->input->post('lalu2'),
				'panenbukan'	=> $this->input->post('panen2'),
				'mudabukan'		=> $this->input->post('muda2'),
				'ternakbukan'	=> $this->input->post('ternak2'),
				'tanambukan'	=> $this->input->post('tanam2'),
				'pusobukan'		=> $this->input->post('puso2'),
				'laporanbukan'	=> $this->input->post('laporan2'),  
				'produksi'		=> $this->input->post('produksi1'),  
				);
			$this->M_Admin->update_data($where,$jumlahjagung,'jumlah_jagung');

			$jagung_hibrida = array(
                'lalusawah'		=> $this->input->post('lalu3'),
				'panensawah'	=> $this->input->post('panen3'),
				'mudasawah'		=> $this->input->post('muda3'),
				'ternaksawah'	=> $this->input->post('ternak3'),
				'tanamsawah'	=> $this->input->post('tanam3'),
				'pusosawah'		=> $this->input->post('puso3'),
				'laporansawah'	=> $this->input->post('laporan3'), 
                'lalubukan'		=> $this->input->post('lalu4'),
				'panenbukan'	=> $this->input->post('panen4'),
				'mudabukan'		=> $this->input->post('muda4'),
				'ternakbukan'	=> $this->input->post('ternak4'),
				'tanambukan'	=> $this->input->post('tanam4'),
				'pusobukan'		=> $this->input->post('puso4'),
				'laporanbukan'	=> $this->input->post('laporan4'),  
				'produksi'		=> $this->input->post('produksi2'),  
				);
			$this->M_Admin->update_data($where,$jagung_hibrida,'jagung_hibrida');

			$jagung_hibrida_bantuan = array(
                'lalusawah'		=> $this->input->post('lalu5'),
				'panensawah'	=> $this->input->post('panen5'),
				'mudasawah'		=> $this->input->post('muda5'),
				'ternaksawah'	=> $this->input->post('ternak5'),
				'tanamsawah'	=> $this->input->post('tanam5'),
				'pusosawah'		=> $this->input->post('puso5'),
				'laporansawah'	=> $this->input->post('laporan5'), 
                'lalubukan'		=> $this->input->post('lalu6'),
				'panenbukan'	=> $this->input->post('panen6'),
				'mudabukan'		=> $this->input->post('muda6'),
				'ternakbukan'	=> $this->input->post('ternak6'),
				'tanambukan'	=> $this->input->post('tanam6'),
				'pusobukan'		=> $this->input->post('puso6'),
				'laporanbukan'	=> $this->input->post('laporan6'),  
				'produksi'		=> $this->input->post('produksi3'),  
				);
			$this->M_Admin->update_data($where,$jagung_hibrida_bantuan,'jagung_hibrida_bantuan');

			$jagung_hibrida_non = array(
                'lalusawah'		=> $this->input->post('lalu7'),
				'panensawah'	=> $this->input->post('panen7'),
				'mudasawah'		=> $this->input->post('muda7'),
				'ternaksawah'	=> $this->input->post('ternak7'),
				'tanamsawah'	=> $this->input->post('tanam7'),
				'pusosawah'		=> $this->input->post('puso7'),
				'laporansawah'	=> $this->input->post('laporan7'), 
                'lalubukan'		=> $this->input->post('lalu8'),
				'panenbukan'	=> $this->input->post('panen8'),
				'mudabukan'		=> $this->input->post('muda8'),
				'ternakbukan'	=> $this->input->post('ternak8'),
				'tanambukan'	=> $this->input->post('tanam8'),
				'pusobukan'		=> $this->input->post('puso8'),
				'laporanbukan'	=> $this->input->post('laporan8'),  
				'produksi'		=> $this->input->post('produksi4'),  
				);
			$this->M_Admin->update_data($where,$jagung_hibrida_non,'jagung_hibrida_non');

			$jagung_komposit = array(
                'lalusawah'		=> $this->input->post('lalu9'),
				'panensawah'	=> $this->input->post('panen9'),
				'mudasawah'		=> $this->input->post('muda9'),
				'ternaksawah'	=> $this->input->post('ternak9'),
				'tanamsawah'	=> $this->input->post('tanam9'),
				'pusosawah'		=> $this->input->post('puso9'),
				'laporansawah'	=> $this->input->post('laporan9'), 
                'lalubukan'		=> $this->input->post('lalu10'),
				'panenbukan'	=> $this->input->post('panen10'),
				'mudabukan'		=> $this->input->post('muda10'),
				'ternakbukan'	=> $this->input->post('ternak10'),
				'tanambukan'	=> $this->input->post('tanam10'),
				'pusobukan'		=> $this->input->post('puso10'),
				'laporanbukan'	=> $this->input->post('laporan10'),  
				'produksi'		=> $this->input->post('produksi5'),  
				);
			$this->M_Admin->update_data($where,$jagung_komposit,'jagung_komposit');

			$jagung_lokal = array(
                'lalusawah'		=> $this->input->post('lalu11'),
				'panensawah'	=> $this->input->post('panen11'),
				'mudasawah'		=> $this->input->post('muda11'),
				'ternaksawah'	=> $this->input->post('ternak11'),
				'tanamsawah'	=> $this->input->post('tanam11'),
				'pusosawah'		=> $this->input->post('puso11'),
				'laporansawah'	=> $this->input->post('laporan11'), 
                'lalubukan'		=> $this->input->post('lalu12'),
				'panenbukan'	=> $this->input->post('panen12'),
				'mudabukan'		=> $this->input->post('muda12'),
				'ternakbukan'	=> $this->input->post('ternak12'),
				'tanambukan'	=> $this->input->post('tanam12'),
				'pusobukan'		=> $this->input->post('puso12'),
				'laporanbukan'	=> $this->input->post('laporan12'),  
				'produksi'		=> $this->input->post('produksi6'),  
				);
			$this->M_Admin->update_data($where,$jagung_lokal,'jagung_lokal');

			$jumlah_kedelai = array(
                'lalusawah'		=> $this->input->post('lalu13'),
				'panensawah'	=> $this->input->post('panen13'),
				'mudasawah'		=> $this->input->post('muda13'),
				'ternaksawah'	=> $this->input->post('ternak13'),
				'tanamsawah'	=> $this->input->post('tanam13'),
				'pusosawah'		=> $this->input->post('puso13'),
				'laporansawah'	=> $this->input->post('laporan13'), 
                'lalubukan'		=> $this->input->post('lalu14'),
				'panenbukan'	=> $this->input->post('panen14'),
				'mudabukan'		=> $this->input->post('muda14'),
				'ternakbukan'	=> $this->input->post('ternak14'),
				'tanambukan'	=> $this->input->post('tanam14'),
				'pusobukan'		=> $this->input->post('puso14'),
				'laporanbukan'	=> $this->input->post('laporan14'),  
				'produksi'		=> $this->input->post('produksi7'),  
				);
			$this->M_Admin->update_data($where,$jumlah_kedelai,'jumlah_kedelai');

			$kedelai_bantuan = array(
                'lalusawah'		=> $this->input->post('lalu15'),
				'panensawah'	=> $this->input->post('panen15'),
				'mudasawah'		=> $this->input->post('muda15'),
				'ternaksawah'	=> $this->input->post('ternak15'),
				'tanamsawah'	=> $this->input->post('tanam15'),
				'pusosawah'		=> $this->input->post('puso15'),
				'laporansawah'	=> $this->input->post('laporan15'), 
                'lalubukan'		=> $this->input->post('lalu16'),
				'panenbukan'	=> $this->input->post('panen16'),
				'mudabukan'		=> $this->input->post('muda16'),
				'ternakbukan'	=> $this->input->post('ternak16'),
				'tanambukan'	=> $this->input->post('tanam16'),
				'pusobukan'		=> $this->input->post('puso16'),
				'laporanbukan'	=> $this->input->post('laporan16'),  
				'produksi'		=> $this->input->post('produksi8'),  
				);
			$this->M_Admin->update_data($where,$kedelai_bantuan,'kedelai_bantuan');

			$kedelai_non = array(
                'lalusawah'		=> $this->input->post('lalu17'),
				'panensawah'	=> $this->input->post('panen17'),
				'mudasawah'		=> $this->input->post('muda17'),
				'ternaksawah'	=> $this->input->post('ternak17'),
				'tanamsawah'	=> $this->input->post('tanam17'),
				'pusosawah'		=> $this->input->post('puso17'),
				'laporansawah'	=> $this->input->post('laporan17'), 
                'lalubukan'		=> $this->input->post('lalu18'),
				'panenbukan'	=> $this->input->post('panen18'),
				'mudabukan'		=> $this->input->post('muda18'),
				'ternakbukan'	=> $this->input->post('ternak18'),
				'tanambukan'	=> $this->input->post('tanam18'),
				'pusobukan'		=> $this->input->post('puso18'),
				'laporanbukan'	=> $this->input->post('laporan18'),  
				'produksi'		=> $this->input->post('produksi9'),  
				);
			$this->M_Admin->update_data($where,$kedelai_non,'kedelai_non');

			$kacang_tanah = array(
                'lalusawah'		=> $this->input->post('lalu19'),
				'panensawah'	=> $this->input->post('panen19'),
				'mudasawah'		=> $this->input->post('muda19'),
				'ternaksawah'	=> $this->input->post('ternak19'),
				'tanamsawah'	=> $this->input->post('tanam19'),
				'pusosawah'		=> $this->input->post('puso19'),
				'laporansawah'	=> $this->input->post('laporan19'), 
                'lalubukan'		=> $this->input->post('lalu20'),
				'panenbukan'	=> $this->input->post('panen20'),
				'mudabukan'		=> $this->input->post('muda20'),
				'ternakbukan'	=> $this->input->post('ternak20'),
				'tanambukan'	=> $this->input->post('tanam20'),
				'pusobukan'		=> $this->input->post('puso20'),
				'laporanbukan'	=> $this->input->post('laporan20'),  
				'produksi'		=> $this->input->post('produksi10'),  
				);
			$this->M_Admin->update_data($where,$kacang_tanah,'kacang_tanah');

			$jumlah_singkong = array(
                'lalusawah'		=> $this->input->post('lalu21'),
				'panensawah'	=> $this->input->post('panen21'),
				'mudasawah'		=> $this->input->post('muda21'),
				'ternaksawah'	=> $this->input->post('ternak21'),
				'tanamsawah'	=> $this->input->post('tanam21'),
				'pusosawah'		=> $this->input->post('puso21'),
				'laporansawah'	=> $this->input->post('laporan21'), 
                'lalubukan'		=> $this->input->post('lalu22'),
				'panenbukan'	=> $this->input->post('panen22'),
				'mudabukan'		=> $this->input->post('muda22'),
				'ternakbukan'	=> $this->input->post('ternak22'),
				'tanambukan'	=> $this->input->post('tanam22'),
				'pusobukan'		=> $this->input->post('puso22'),
				'laporanbukan'	=> $this->input->post('laporan22'),  
				'produksi'		=> $this->input->post('produksi11'),  
				);
			$this->M_Admin->update_data($where,$jumlah_singkong,'jumlah_singkong');

			$singkong_bantuan = array(
                'lalusawah'		=> $this->input->post('lalu23'),
				'panensawah'	=> $this->input->post('panen23'),
				'mudasawah'		=> $this->input->post('muda23'),
				'ternaksawah'	=> $this->input->post('ternak23'),
				'tanamsawah'	=> $this->input->post('tanam23'),
				'pusosawah'		=> $this->input->post('puso23'),
				'laporansawah'	=> $this->input->post('laporan23'), 
                'lalubukan'		=> $this->input->post('lalu24'),
				'panenbukan'	=> $this->input->post('panen24'),
				'mudabukan'		=> $this->input->post('muda24'),
				'ternakbukan'	=> $this->input->post('ternak24'),
				'tanambukan'	=> $this->input->post('tanam24'),
				'pusobukan'		=> $this->input->post('puso24'),
				'laporanbukan'	=> $this->input->post('laporan24'),  
				'produksi'		=> $this->input->post('produksi12'),  
				);
			$this->M_Admin->update_data($where,$singkong_bantuan,'singkong_bantuan');

			$singkong_non = array(
                'lalusawah'		=> $this->input->post('lalu25'),
				'panensawah'	=> $this->input->post('panen25'),
				'mudasawah'		=> $this->input->post('muda25'),
				'ternaksawah'	=> $this->input->post('ternak25'),
				'tanamsawah'	=> $this->input->post('tanam25'),
				'pusosawah'		=> $this->input->post('puso25'),
				'laporansawah'	=> $this->input->post('laporan25'), 
                'lalubukan'		=> $this->input->post('lalu26'),
				'panenbukan'	=> $this->input->post('panen26'),
				'mudabukan'		=> $this->input->post('muda26'),
				'ternakbukan'	=> $this->input->post('ternak26'),
				'tanambukan'	=> $this->input->post('tanam26'),
				'pusobukan'		=> $this->input->post('puso26'),
				'laporanbukan'	=> $this->input->post('laporan26'),  
				'produksi'		=> $this->input->post('produksi13'),  
				);
			$this->M_Admin->update_data($where,$singkong_non,'singkong_non');

			$ubi_jalar = array(
                'lalusawah'		=> $this->input->post('lalu27'),
				'panensawah'	=> $this->input->post('panen27'),
				'mudasawah'		=> $this->input->post('muda27'),
				'ternaksawah'	=> $this->input->post('ternak27'),
				'tanamsawah'	=> $this->input->post('tanam27'),
				'pusosawah'		=> $this->input->post('puso27'),
				'laporansawah'	=> $this->input->post('laporan27'), 
                'lalubukan'		=> $this->input->post('lalu28'),
				'panenbukan'	=> $this->input->post('panen28'),
				'mudabukan'		=> $this->input->post('muda28'),
				'ternakbukan'	=> $this->input->post('ternak28'),
				'tanambukan'	=> $this->input->post('tanam28'),
				'pusobukan'		=> $this->input->post('puso28'),
				'laporanbukan'	=> $this->input->post('laporan28'),  
				'produksi'		=> $this->input->post('produksi14'),  
				);
			$this->M_Admin->update_data($where,$ubi_jalar,'ubi_jalar');

			$kacang_hijau = array(
                'lalusawah'		=> $this->input->post('lalu29'),
				'panensawah'	=> $this->input->post('panen29'),
				'mudasawah'		=> $this->input->post('muda29'),
				'ternaksawah'	=> $this->input->post('ternak29'),
				'tanamsawah'	=> $this->input->post('tanam29'),
				'pusosawah'		=> $this->input->post('puso29'),
				'laporansawah'	=> $this->input->post('laporan29'), 
                'lalubukan'		=> $this->input->post('lalu30'),
				'panenbukan'	=> $this->input->post('panen30'),
				'mudabukan'		=> $this->input->post('muda30'),
				'ternakbukan'	=> $this->input->post('ternak30'),
				'tanambukan'	=> $this->input->post('tanam30'),
				'pusobukan'		=> $this->input->post('puso30'),
				'laporanbukan'	=> $this->input->post('laporan30'),  
				'produksi'		=> $this->input->post('produksi15'),  
				);
			$this->M_Admin->update_data($where,$kacang_hijau,'kacang_hijau');

			$sorgum = array(
                'lalusawah'		=> $this->input->post('lalu31'),
				'panensawah'	=> $this->input->post('panen31'),
				'mudasawah'		=> $this->input->post('muda31'),
				'ternaksawah'	=> $this->input->post('ternak31'),
				'tanamsawah'	=> $this->input->post('tanam31'),
				'pusosawah'		=> $this->input->post('puso31'),
				'laporansawah'	=> $this->input->post('laporan31'), 
                'lalubukan'		=> $this->input->post('lalu32'),
				'panenbukan'	=> $this->input->post('panen32'),
				'mudabukan'		=> $this->input->post('muda32'),
				'ternakbukan'	=> $this->input->post('ternak32'),
				'tanambukan'	=> $this->input->post('tanam32'),
				'pusobukan'		=> $this->input->post('puso32'),
				'laporanbukan'	=> $this->input->post('laporan32'),  
				'produksi'		=> $this->input->post('produksi16'),  
				);
			$this->M_Admin->update_data($where,$sorgum,'sorgum');

			$gandum = array(
                'lalusawah'		=> $this->input->post('lalu33'),
				'panensawah'	=> $this->input->post('panen33'),
				'mudasawah'		=> $this->input->post('muda33'),
				'ternaksawah'	=> $this->input->post('ternak33'),
				'tanamsawah'	=> $this->input->post('tanam33'),
				'pusosawah'		=> $this->input->post('puso33'),
				'laporansawah'	=> $this->input->post('laporan33'), 
                'lalubukan'		=> $this->input->post('lalu34'),
				'panenbukan'	=> $this->input->post('panen34'),
				'mudabukan'		=> $this->input->post('muda34'),
				'ternakbukan'	=> $this->input->post('ternak34'),
				'tanambukan'	=> $this->input->post('tanam34'),
				'pusobukan'		=> $this->input->post('puso34'),
				'laporanbukan'	=> $this->input->post('laporan34'),  
				'produksi'		=> $this->input->post('produksi17'),  
				);
			$this->M_Admin->update_data($where,$gandum,'gandum');

			$talas = array(
                'lalusawah'		=> $this->input->post('lalu35'),
				'panensawah'	=> $this->input->post('panen35'),
				'mudasawah'		=> $this->input->post('muda35'),
				'ternaksawah'	=> $this->input->post('ternak35'),
				'tanamsawah'	=> $this->input->post('tanam35'),
				'pusosawah'		=> $this->input->post('puso35'),
				'laporansawah'	=> $this->input->post('laporan35'), 
                'lalubukan'		=> $this->input->post('lalu36'),
				'panenbukan'	=> $this->input->post('panen36'),
				'mudabukan'		=> $this->input->post('muda36'),
				'ternakbukan'	=> $this->input->post('ternak36'),
				'tanambukan'	=> $this->input->post('tanam36'),
				'pusobukan'		=> $this->input->post('puso36'),
				'laporanbukan'	=> $this->input->post('laporan36'),  
				'produksi'		=> $this->input->post('produksi18'),  
				);
			$this->M_Admin->update_data($where,$talas,'talas');

			$ganyong = array(
                'lalusawah'		=> $this->input->post('lalu37'),
				'panensawah'	=> $this->input->post('panen37'),
				'mudasawah'		=> $this->input->post('muda37'),
				'ternaksawah'	=> $this->input->post('ternak37'),
				'tanamsawah'	=> $this->input->post('tanam37'),
				'pusosawah'		=> $this->input->post('puso37'),
				'laporansawah'	=> $this->input->post('laporan37'), 
                'lalubukan'		=> $this->input->post('lalu38'),
				'panenbukan'	=> $this->input->post('panen38'),
				'mudabukan'		=> $this->input->post('muda38'),
				'ternakbukan'	=> $this->input->post('ternak38'),
				'tanambukan'	=> $this->input->post('tanam38'),
				'pusobukan'		=> $this->input->post('puso38'),
				'laporanbukan'	=> $this->input->post('laporan38'),  
				'produksi'		=> $this->input->post('produksi19'),  
				);
			$this->M_Admin->update_data($where,$ganyong,'ganyong');

			$umbi_lain = array(
                'lalusawah'		=> $this->input->post('lalu39'),
				'panensawah'	=> $this->input->post('panen39'),
				'mudasawah'		=> $this->input->post('muda39'),
				'ternaksawah'	=> $this->input->post('ternak39'),
				'tanamsawah'	=> $this->input->post('tanam39'),
				'pusosawah'		=> $this->input->post('puso39'),
				'laporansawah'	=> $this->input->post('laporan39'), 
                'lalubukan'		=> $this->input->post('lalu40'),
				'panenbukan'	=> $this->input->post('panen40'),
				'mudabukan'		=> $this->input->post('muda40'),
				'ternakbukan'	=> $this->input->post('ternak40'),
				'tanambukan'	=> $this->input->post('tanam40'),
				'pusobukan'		=> $this->input->post('puso40'),
				'laporanbukan'	=> $this->input->post('laporan40'),  
				'produksi'		=> $this->input->post('produksi20'),  
				);
			$this->M_Admin->update_data($where,$umbi_lain,'umbi_lain');
			
			$this->session->set_flashdata('pesan','<div class="alert alert-success text-center" role="alert"> Data Berhasil Diedit </div>');
			redirect('Admin/detail_data_kosong');
		}

		public function detail_panen_padi(){
            $data['tahunini'] = $this->M_Admin->tahunini()->result();
            $data['datatahun'] = $this->M_Admin->datatahun()->result();
            $data['datakec'] = $this->M_Admin->datakec()->result();
			$data['title'] = 'Detail Panen Padi';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this -> template -> views('crud/padi/detail_panen_padi',$data);
		}

		public function panen_padi_bulanan(){
            $data['tahunini'] = $this->M_Admin->tahunini()->result();
            $data['datatahun'] = $this->M_Admin->datatahun()->result();
			$data['title'] = 'Detail Panen Padi';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this -> template -> views('crud/padi/panen_padi_bulanan',$data);
		}

		public function puso_padi_bulanan(){
            $data['tahunini'] = $this->M_Admin->tahunini()->result();
            $data['datatahun'] = $this->M_Admin->datatahun()->result();
			$data['title'] = 'Detail Puso Padi';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this -> template -> views('crud/padi/puso_padi_bulanan',$data);
		}

		public function tanam_padi_bulanan(){
            $data['tahunini'] = $this->M_Admin->tahunini()->result();
            $data['datatahun'] = $this->M_Admin->datatahun()->result();
			$data['title'] = 'Detail Tanam Padi';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this -> template -> views('crud/padi/tanam_padi_bulanan',$data);
		}

		public function detail_panen_palawija(){
            $data['tahunini'] = $this->M_Admin->tahunini()->result();
            $data['datatahun'] = $this->M_Admin->datatahun()->result();
            $data['datakec'] = $this->M_Admin->datakec()->result();
			$data['title'] = 'Detail Panen Palawija';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this -> template -> views('crud/palawija/detail_panen_palawija',$data);
		}

		public function panen_palawija_bulanan(){
            $data['tahunini'] = $this->M_Admin->tahunini()->result();
            $data['datatahun'] = $this->M_Admin->datatahun()->result();
			$data['title'] = 'Detail Panen Palawija';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this -> template -> views('crud/palawija/panen_palawija_bulanan',$data);
		}

		public function puso_palawija_bulanan(){
            $data['tahunini'] = $this->M_Admin->tahunini()->result();
            $data['datatahun'] = $this->M_Admin->datatahun()->result();
			$data['title'] = 'Detail Puso Palawija';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this -> template -> views('crud/palawija/puso_palawija_bulanan',$data);
		}

		public function tanam_palawija_bulanan(){
            $data['tahunini'] = $this->M_Admin->tahunini()->result();
            $data['datatahun'] = $this->M_Admin->datatahun()->result();
			$data['title'] = 'Detail Tanam Palawija';
			$this->load->view('Admin/_Template/head', $data, TRUE);
			$this -> template -> views('crud/palawija/tanam_palawija_bulanan',$data);
		}

	}
?>