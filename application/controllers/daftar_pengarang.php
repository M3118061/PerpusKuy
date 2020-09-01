<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class daftar_pengarang extends CI_Controller {
	
	// Index login
	public function __construct(){
				parent::__construct();

                $this->load->model(array());

                $this->load->database();

	}


	public function index() {
		// $this->load->view('DasborA_view');
		
		$data = array(	'title'	=> 'Daftar Pengarang',
						'isi'	=> 'index',
						'judul' => 'Daftar Pengarang',
						'title_list' => 'Daftar Pengarang'
							);
		// $this->load->view('dasbor_view',$data);
		$this->template->display('pengunjung/pengarang/index',$data); 
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