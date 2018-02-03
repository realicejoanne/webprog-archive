<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Login extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('model_user');
		}

		public function index(){
			$this->load->view('form');
		}

		public function input_data(){
			$rawdate = htmlentities($_POST['tgl_lahir']);
			$tgl_lahir = date('Y-m-d', strtotime($rawdate));
			$user_biodata = array(
				'nip' => $this->input->post('nip'),
				'nama' => $this->input->post('nama'),
				'jk' => $this->input->post('jk'),
				'alamat' => $this->input->post('alamat'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tgl_lahir' => $tgl_lahir,
				'email' => $this->input->post('email')	
			);
			$user_users = array(
				'nama_user' => $this->input->post('nama_user'),
				'password' => sha1( $this->input->post('password') ),
				'nip' => $this->input->post('nip')
			);

			if($this->model_user->input($user_biodata, $user_users)){
				redirect(base_url('index.php/login/tampil_data'));
			} 
			else {
				$this->load->view('form');
			}
		}

		public function tampil_data(){
			$data["peg"] = $this->model_user->tampilAll();
			$this->load->view('tampil_data', $data);
		}

		public function edit_data(){
			$nip = $this->uri->segment(3);
			$this->load->model('model_user');
			$data["peg"] = $this->model_user->pilih($nip);
			$this->load->view('edit', $data);
		}

		public function update_data(){
			$nip = $this->input->post('nip');
			$nama = $this->input->post('nama');
			$jk = $this->input->post('jk');
			$alamat = $this->input->post('alamat');
			$tempat_lahir = $this->input->post('tempat_lahir');
			$rawdate = htmlentities($_POST['tgl_lahir']);
			$tgl_lahir = date('Y-m-d', strtotime($rawdate));
			$email = $this->input->post('email');	

			$this->load->model('model_user');
			$this->model_user->update($nip, $nama, $jk, $alamat, $tempat_lahir, $tgl_lahir, $email);
			redirect(base_url("index.php/login/tampil_data"));
		}

		public function delete_data(){
			$nip = $this->uri->segment(3);
			$this->load->model('model_user');
			$this->model_user->delete($nip);
				redirect(base_url("index.php/login/tampil_data"));
		}
	}
