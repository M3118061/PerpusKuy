<?php
class template2 {
	protected $_ci;
	
	function __construct()
	{
		$this->_ci =&get_instance();
	}

	function display($template2,$data=null)
	{
		$data['_content']=$this->_ci->load->view($template2,$data, true);
		
		$this->_ci->load->view('pengunjung/index.php',$data);
		// $data['nama']='yoga';
		// $this->template->display('template.php',$data);
	}
}