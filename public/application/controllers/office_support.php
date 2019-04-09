<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Office_support extends CI_Controller {

	public function index()
	{

		$data['content']='tampilan_office_support';
		$this->load->view('tampilan_home',$data);
	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */