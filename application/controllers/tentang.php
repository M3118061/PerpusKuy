<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tentang extends CI_Controller {
	
	// Index login
	public function __construct(){
				parent::__construct();

                $this->load->model(array());

                $this->load->database();

	}


	public function index() {
		// $this->load->view('DasborA_view');
		
		$data = array(	'title'	=> 'Tentang Perpustakaan',
						'isi'	=> 'index',
						'judul' => 'Tentang Perpustakaan',
						'title_list' => 'Tentang Perpustakaan'
							);
		// $this->load->view('dasbor_view',$data);
		$this->template->display('pengunjung/tentang/index',$data); 
	}
	// Fungsi lain
	// public function tampil_data()
	// {
	// 	/*$this->simple_login->cek_login();*/
 //        $query = $this->Admin_model->get_all();
 //        $data['query'] = $query;
 //        $data['kelola_kamar'] = $this->dasbor_m->hitungaset();
 //        $this->template->display('layout/konten',$data); 
	// }

}