<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profil extends CI_Controller {

public function __construct() {
		parent::__construct();
	
		$this->load->helper('tgl_indonesia');
		$this->load->helper('text');
	}
	public function index()
	{
	
		$data['content']='tampilan_profil';
		$this->load->view('tampilan_home',$data); 
	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */