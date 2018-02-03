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
			$rawdate = htmlentities($_POST['tgl_lhr']);
			$tgl_lahir = date('Y-m-d', strtotime($rawdate));
			$user_identitas = array(
				'npm' => $this->input->post('npm'),
				'nama' => $this->input->post('nama'),
				'jk' => $this->input->post('jk'),
				'alamat' => $this->input->post('alamat'),
				'tgl_lhr' => $tgl_lhr,
				'email' => $this->input->post('email')	
			);
			$user_users = array(
				'username' => $this->input->post('username'),
				'password' => sha1( $this->input->post('password') ),
				'npm' => $this->input->post('npm')
			);

			if($this->model_user->input($user_identitas, $user_users)){
				redirect(base_url('index.php/login/tampil_data'));
			} 
			else {
				$this->load->view('form');
			}
		}

		public function tampil_data(){
			$data["mhs"] = $this->model_user->tampilAll();
			$this->load->view('tampil_data', $data);
		}

		public function edit_data(){
			$npm = $this->uri->segment(3);
			$this->load->model('model_user');
			$data["mhs"] = $this->model_user->pilih($npm);
			$this->load->view('edit', $data);
		}

		public function update_data(){
			$npm = $this->input->post('npm');
			$nama = $this->input->post('nama');
			$jk = $this->input->post('jk');
			$alamat = $this->input->post('alamat');
			$rawdate = htmlentities($_POST['tgl_lhr']);
			$tgl_lhr = date('Y-m-d', strtotime($rawdate));
			$email = $this->input->post('email');	

			$this->load->model('model_user');
			$this->model_user->update($npm, $nama, $jk, $alamat, $tgl_lhr, $email);
			redirect(base_url("index.php/login/tampil_data"));
		}

		public function delete_data(){
			$npm = $this->uri->segment(3);
			$this->load->model('model_user');
			$this->model_user->delete($npm);
				redirect(base_url("index.php/login/tampil_data"));
		}
	}
