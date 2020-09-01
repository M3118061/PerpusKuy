<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dasbor_pengunjung extends CI_Controller {
	
	// Index login
	public function __construct(){
				parent::__construct();

                $this->load->model(array());

                $this->load->database();

	}


	public function index() {
		
		$data = array(	'title'	=> 'Halaman Dasbor Pengunjung',
						'isi'	=> 'Dashboard Pengunjung',
						'judul' => 'Dashboard');
		// $this->load->view('dasbor_view',$data);
		$this->template2->display('pengunjung/dashboard/index',$data); 
	}
	// Fungsi lain
	/*public function tampil_data()
	{
		/*$this->simple_login->cek_login();
        $query = $this->Admin_model->get_all();
        $data['query'] = $query;
        $data['kelola_kamar'] = $this->dasbor_m->hitungaset();
        $this->template->display('pengunjung/layout/konten',$data); 
	} */

}