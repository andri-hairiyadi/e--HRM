<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Security extends CI_Controller {

	public function index()
	{

		$data['content']='tampilan_security';
		$this->load->view('tampilan_home',$data);
	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */