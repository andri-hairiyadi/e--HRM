<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Laporan_limit_kerja extends CI_Controller {

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
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_manager();
		$data['isi']	= $this->model_data_man_power->limit(); 
		$data['content']='manager/laporan_data_man_power/tampilan_limit_kerja';
		$this->load->view('manager/tampilan_home',$data);
	}
	





}

