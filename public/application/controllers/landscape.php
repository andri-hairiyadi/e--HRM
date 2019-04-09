<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Landscape extends CI_Controller {

	public function index()
	{

		$data['content']='tampilan_landscape';
		$this->load->view('tampilan_home',$data);
	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */