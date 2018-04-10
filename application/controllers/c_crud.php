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
		$this->load->view('page3');
	}

	public function do_insert(){
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
            $data = array('upload_data' => $this->upload->data());

            $judul 			= $_POST['judul'];
			$penulis 		= $_POST['penulis'];
			$isi			= $_POST['isi'];
			$img			= $this->upload->data('file_name');
			
			$data_insert	= array(
									'judul' 	=> $judul,
									'tgl'		=> $tgl,
									'author'	=> $author,
									'isi' 		=> $isi,
									'gambar'		=> $img
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
	
	public function upload(){
	 	$this->load->view('upload_form', array('error' => ' ' ));
	}

	public function do_upload()
        {
                $config['upload_path']          = 'images/uploaded/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('sukses', $data);
                }
        }
	


}
