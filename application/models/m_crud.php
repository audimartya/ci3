<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_Model {
	
	public function GetArtikel($limit = FALSE, $offset = FALSE){
		if ( $limit ) {
            $this->db->limit($limit, $offset);
        }
        
		$this->db->order_by('artikel.post_date', 'DESC');
		$this->db->join('artikel', 'categories.id_cat = artikel.fk_id_cat');
		$data=$this->db->get('artikel');
	
		return $data->result_array();
	}

	public function get_total(){
		return $this->db->count_all("artikel")
	}
	public function GetPreview($id=''){
		$isi = $this->db->query('SELECT id,judul,penulis,isi,gambar FROM artikel where id = '.$id);
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
		$data = $this->db->query('SELECT id,judul,penulis,isi,gambar FROM artikel where id = '.$id);
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