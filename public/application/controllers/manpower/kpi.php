<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Kpi extends CI_Controller {

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
		$query = $this->model_data_user->login_manpower();
		$row = $query->row();
		$id = $row->id_man_power;

		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_manpower();
		$data['kpi']	= $this->model_data_man_power->kpi($id);
			$data['detail']	= $this->model_data_man_power->detail($id);
		$data['content']='manpower/kpi/tampilan_kpi';
		$this->load->view('manpower/tampilan_home',$data);
	}
	



}

