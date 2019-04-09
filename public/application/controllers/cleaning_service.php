<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cleaning_service extends CI_Controller {

	public function index()
	{

		$data['content']='tampilan_cleaning_service';
		$this->load->view('tampilan_home',$data);
	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */