<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pencarian extends CI_Controller {

	public function index()
	{
		$data['skripsi'] = $this->model_data_skripsi->jumlah_skripsi();
		$data['plk'] = $this->model_data_skripsi->jumlah_plk();
		$data['riset'] = $this->model_data_skripsi->jumlah_riset();
		$data['isi']=$this->db->get('skripsi');
		$data['content']='tampilan_pencarian';
		$this->load->view('tampilan_home',$data);
	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */