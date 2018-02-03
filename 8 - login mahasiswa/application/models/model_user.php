<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Model_user extends CI_Model {			
		public function input($identitas, $users){
			if($this->db->insert('identitas', $identitas) && $this->db->insert('users', $users)){
				return TRUE;
			} 
			else {
				return FALSE;
			}
		}

		public function tampilAll(){
			$query = $this->db->get('identitas');
			return $query;
		}

		public function pilih($npm){
			$query = $this->db->get_where('identitas', array('npm' => $npm))->row();
			return $query;
		}
			
		public function update($npm, $nama, $jk, $alamat, $tgl_lhr, $email){
			$data = array(
				'npm' => $npm,
				'nama' => $nama,
				'jk' => $jk,
				'alamat' => $alamat,
				'tgl_lhr' => $tgl_lhr,
				'email' => $email
			);
			$this->db->where('npm',$npm);
			$this->db->update('identitas', $data);
		}

		public function delete($npm){
			$this->db->delete('identitas', array('npm' => $npm));
			$this->db->delete('users', array('npm' => $npm));
		}
	}
?>