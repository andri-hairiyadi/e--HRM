<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Limit_kerja extends CI_Controller {

public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('masuk');
		} 
		$this->load->helper('tgl_indonesia');

		$this->load->helper('text');
	}
  
	public function index() 
	{		
		$query = $this->model_data_user->login_area();
		$row = $query->row();
		$area = $row->id_area_kerja;

		$data['isi']	= $this->model_data_man_power->limit_area($area);

		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_area();
		$data['content']='area/data_man_power/tampilan_limit_kerja';
		$this->load->view('area/tampilan_home',$data);
	}
	





}

