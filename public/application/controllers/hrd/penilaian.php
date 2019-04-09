<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Penilaian extends CI_Controller {

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
		$data['data']	= $this->model_data_user->login_hrd();
		$data['isi']	= $this->model_data_man_power->ulang_tahun(); 
		$data['content']='hrd/data_penilaian/tampilan_penilaian';
		$this->load->view('hrd/tampilan_home',$data);
	}
	





}

