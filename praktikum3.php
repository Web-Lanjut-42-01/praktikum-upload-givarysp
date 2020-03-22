<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class praktikum3 extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }
	public function index()
	{
		$data= $this->mod->GetTable('menu');
		$this->load->view('menu', array('data'=>$data));
	}
	public function tambahmenu()
	{
		if(isset($_POST['submit'])){
			$nama = $this->input->post('nama');
			$bahan = $this->input->post('bahan');
			$harga = $this->input->post('harga');
			$foto = $this->input->post('foto');
			$data = array('nama'=>$nama, 'bahan'=>$bahan, 'harga'=>$harga, 'foto'=>$foto); //data yang akan di insert
			$this->mod->InsertData('menu', $data); //memasukan data melalui fungsi insertdata pada models mod.php
			redirect('praktikum3'); //
		}else{
			$this->load->view('tambahmenu');
		}
	}
    public function upload()
    {
		$config['upload_path']          = 'gambar/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
 
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('fotor'))
		{
			echo "anda gagal upload";
		}else{

			$nama = $this->input->post('nama');
			$bahan = $this->input->post('bahan');
			$harga = $this->input->post('harga');
			$file = $this->upload->data();
			$gambar = $file('file_name');
 			
 			$this->praktikum3->insert(array(
			        'nama' => $nama,
			        'bahan' => $bahan,
			        'harga' => $harga,
			        'foto' => $gambar
				));
				$this->session->set_flashdata('msg','data berhasil di upload');
				redirect('prakikum3');
            }		
	}
}