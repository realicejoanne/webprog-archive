<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Model_user extends CI_Model {			
		public function input($biodata, $users){
			if($this->db->insert('biodata', $biodata) && $this->db->insert('users', $users)){
				return TRUE;
			} 
			else {
				return FALSE;
			}
		}

		public function tampilAll(){
			$query = $this->db->get('biodata');
			return $query;
		}

		public function pilih($nip){
			$query = $this->db->get_where('biodata', array('nip' => $nip))->row();
			return $query;
		}
			
		public function update($nip, $nama, $jk, $alamat, $tempat_lahir, $tgl_lahir, $email){
			$data = array(
				'nip' => $nip,
				'nama' => $nama,
				'jk' => $jk,
				'alamat' => $alamat,
				'tempat_lahir' => $tempat_lahir,
				'tgl_lahir' => $tgl_lahir,
				'email' => $email
			);
			$this->db->where('nip',$nip);
			$this->db->update('biodata', $data);
		}

		public function delete($nip){
			$this->db->delete('biodata', array('nip' => $nip));
			$this->db->delete('users', array('nip' => $nip));
		}
	}
?>