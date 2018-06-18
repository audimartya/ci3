<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_cat extends CI_Controller {

	public function index(){
		$data['result'] = $this->m_cat>GetArtikel();
		$limit_per_page = 4;
		// URI segment untuk mendeteksi "halaman ke berapa" dari URL
		$start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;
		// Dapatkan jumlah data 
		$total_records = $this->m_cat->get_total();
		
		if ($total_records > 0) {
			// Dapatkan data pada halaman yg dituju
			$data['result'] = $this->m_cat->GetArtikel($limit_per_page, $start_index);
			
			// Konfigurasi pagination
			$config['base_url'] = base_url() . 'c_cat/index';
			$config['total_rows'] = $total_records;
			$config['per_page'] = $limit_per_page;
			$config["uri_segment"] = 3;
			
			$this->pagination->initialize($config);
				
			// Buat link pagination
			$data["links"] = $this->pagination->create_links();
		 $this->load->model('m_cat');
        $artikel['result'] = $this->m_cat->get_all_artikel();
		}
	} 

	public function do_preview($id_cat=''){
		$this->load->model('m_cat');

		$data['isi'] = $this->c_cat->GetPreview($id_cat);

		

		$this->load->view('', $data);

		//$this->load->view('page2');
	}


	public function do_delete($id){
		$this->load->model('m_cat');
		$where 	= array('id_cat' => $id);
		$res 	= $this->m_crud->DeleteData('categories',$where);
		if($res>=1){
			$this->session->set_flashdata('pesan','Delete Data Sukses');
			redirect('c_cat/index');
			}
	}

	public function add_categories(){
		$this->load->view('form_categories');
	}


	public function create_categories(){
		$this->load->helper('form');
		$this->load->library('form_validation');

			$this->form_validation->set_rules('id_cat', 'Id_cat', 
			array(
				'required' 		=> 'ID CATEGORY MASIH KOSONG, ISI!',
					
			));
			$this->form_validation->set_rules('judul_cat', 'Judul_cat', 
			array(
				'required' 		=> 'JUDUL CATEGORY MASIH KOSONG, ISI!',
						
			));

			$this->form_validation->set_rules('isi_cat', 'Isi_cat',
			array(
				'required' 		=> 'ISI CATEGORY MASIH KOSONG, ISI!',
					
			));
		
	if ($this->form_validation->run() === FALSE)
	    {
			$this->load->view('form_categories');
	    } else {
		
		$config['upload_path']          = 'images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        //buat upload
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
        	//nampilin error
                $error = array('error' => $this->upload->display_errors());

               print_r($error);
        }
        else
        {
	            $data = array('upload_data' => $this->upload->data());
	            $Id_cat  		=$_POST['id_cat'];
	            $judul_cat 			= $_POST['judul_cat'];
				$isi_cat		= $_POST['isi_cat'];
				
				$data_insert	= array(
										'id_cat'		=> $id_cat,
										'judul_cat' 	=> $judul_cat,
										'isi_cat' 		=> $isi_cat
										
									);

				$this->load->model('m_cat');
				$res = $this->m_crud->InsertData('categories', $data_insert);
				
				if($res>=1){
					$this->session->set_flashdata('pesan','Tambah Data Sukses');
					redirect('c_cat/index');
				}else{
					echo "<h2>Insert Data Gagal</h2>";	
				}
	        }
	       }
	}

}