<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_crud extends CI_Controller {

	public function index(){
		$this->load->model('m_crud');

		$data['result'] = $this->m_crud->GetArtikel();

		$this->load->view('page1', $data);
	} 

	public function do_preview($id=''){
		$this->load->model('m_crud');

		$data['isi'] = $this->m_crud->GetPreview($id);

		

		$this->load->view('page2', $data);

		//$this->load->view('page2');
	}

	public function add_data(){
		$this->load->view('form_add');
	}

	public function do_insert(){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('penulis', 'Penulis', 'required|is_unique[blogs.post_title]',
			array(
				'required' 		=> 'PENULIS MASIH KOSONG, ISI!',
							));

			$this->form_validation->set_rules('judul', 'Judul', 'required|is_unique[blogs.post_title]',
			array(
				'required' 		=> 'JUDUL MASIH KOSONG, ISI!',
				'is_unique' 	=> 'Judul <strong>' .$this->input->post('Judul'). '</strong> SUDAH ADA!'		
			));

			$this->form_validation->set_rules('isi', 'Isi', 'required|is_unique[blogs.post_title]',
			array(
				'required' 		=> 'ISI MASIH KOSONG, ISI!',
							));
			$this->form_validation->set_rules('userfile', 'Userfile', 'required|is_unique[blogs.post_title]',
			array(
				'required' 		=> 'FOTO MASIH KOSONG, ISI!',
							));
 		if ($this->form_validation->run() === FALSE)
	    {
			$this->load->view('form_add');
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

	            $judul 			= $_POST['judul'];
				$penulis 		= $_POST['penulis'];
				$isi			= $_POST['isi'];
				$gambar			= $this->upload->data('file_name');
				$data_insert	= array(
										'judul' 	=> $judul,
										'penulis'	=> $penulis,
										'isi' 		=> $isi,
										'gambar'	=> $gambar
									);

				$this->load->model('m_crud');
				$res = $this->m_crud->InsertData('artikel', $data_insert);
				
				if($res>=1){
					$this->session->set_flashdata('pesan','Tambah Data Sukses');
					redirect('c_crud/index');
				}else{
					echo "<h2>Insert Data Gagal</h2>";	
				}
	        }
	       }
	}
	
	
	
public function edit_data($id='',$gambar=''){
		$this->load->model('m_crud');
		$artikel = $this->m_crud->getedit($id);
		$data = array(
			"id" 		=> $artikel[0]['id'],
			"judul" 	=> $artikel[0]['judul'],
			"penulis"	=> $artikel[0]['penulis'],
			"isi" 		=> $artikel[0]['isi'],
			"gambar"	=> $artikel[0]['gambar']
		);
		$this->load->view('form_update',$data);
	}

	public function do_update($id='',$gambar=''){

		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('penulis', 'Penulis', 'required',
			array(
				'required' 		=> 'PENULIS MASIH KOSONG, ISI!',
							));

			$this->form_validation->set_rules('judul', 'Judul', 'required|is_unique[artikel.judul]',
			array(
				'required' 		=> 'JUDUL MASIH KOSONG, ISI!',
				'is_unique' 	=> 'Judul <strong>' .$this->input->post('judul'). '</strong> SUDAH ADA!'		
			));

			$this->form_validation->set_rules('isi', 'Isi', 'required',
			array(
				'required' 		=> 'ISI MASIH KOSONG, ISI!',
							));
			$this->form_validation->set_rules('userfile', 'Userfile', 'required',
			array(
				'required' 		=> 'FOTO MASIH KOSONG, ISI!',
							));
 		if ($this->form_validation->run() === FALSE)
	    {
			$this->load->view('form_update');
	    } else {
		
		$config['upload_path']          = 'images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
                $error = array('error' => $this->upload->display_errors());

               print_r($error);
        }
        else
        {
			$result_upload=$this->upload->data();
				
			$id 			= $_POST['id'];
			$judul 			= $_POST['judul'];
			$penulis		= $_POST['penulis'];
			$isi			= $_POST['isi'];
			$gambar 		= $result_upload['file_name']; 
			$data_update 	= array(
				'judul' 		=> $judul,
				'penulis' 		=> $penulis,
				'isi' 			=> $isi,
				'gambar'		=> $gambar);
			$this->load->model('m_crud');
			$where = array('id' => $id);
			$res = $this->m_crud->UpdateData('artikel',$data_update,$where);
			if($res>=1){
				$this->session->set_flashdata('pesan','Update Data Sukses');
				redirect('c_crud/index');
			}
		}
	}
}

	public function do_delete($id){
		$this->load->model('m_crud');
		$where 	= array('id' => $id);
		$res 	= $this->m_crud->DeleteData('artikel',$where);
		if($res>=1){
			$this->session->set_flashdata('pesan','Delete Data Sukses');
			redirect('c_crud/index');
			}
	}
}
