<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cat extends CI_Model {
	
	public function GetArtikel(){
		
		$this->db->select('id_cat,judul_cat,isi_cat');
		$this->db->from('categories');
		$data=$this->db->get();
	
		return $data->result_array();
	}
	public function GetPreview($id=''){
		$isi = $this->db->query('SELECT id_cat,judul_cat,isi_cat FROM categories where id_cat = '.$id);
		return $isi->result_array();
	}

	public function InsertData($tabelNama,$data){
		$res = $this->db->insert($tabelNama,$data);
		return $res;
		}

	public function DeleteData($tabelNama,$where){
		$res = $this->db->delete($tabelNama,$where);
		return $res;
		}

	public function getedit($id=''){
		$data = $this->db->query('SELECT id_cat,judul_cat,isi_cat FROM categories where id_cat = '.$id);
		return $data->result_array();
	}

	public function UpdateData($tabelNama,$data,$where){
		$res = $this->db->update($tabelNama,$data,$where);
		return $res;
		}

		public function InsertCategori($tabelNama,$data){
		$res = $this->db->insert($tabelNama,$data);
		return $res;
		}

}