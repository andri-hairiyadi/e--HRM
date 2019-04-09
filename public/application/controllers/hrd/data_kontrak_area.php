<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Data_kontrak_area extends CI_Controller {

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
  	$data['lowongan'] = $this->model_data_lowongan_kerja->tampil();
	$data['area']	= $this->model_data_area_kerja->tampil();
	$data['isi']	= $this->model_data_kontrak_kerja->tampil_kontrak_area();
	$data['content']='hrd/data_kontrak_kerja/tampilan_kontrak_area';
	$this->load->view('hrd/tampilan_home',$data);
	}


	public function detail_mp_area($id)
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_hrd();
		$data['isi']	= $this->model_data_kontrak_kerja->detail_mp_area($id);
		$data['content']='hrd/data_kontrak_kerja/tampilan_detail_mp_area';
		$this->load->view('hrd/tampilan_home',$data);

	}


	public function area()
  {
    $key           = $this->input->post('id_area_kerja');
    $data['nama'] = $this->session->userdata('nama');
    $data['id_user'] = $this->session->userdata('id_user');
	$data['area']	= $this->model_data_area_kerja->tampil();

    $data['isi']  = $this->model_data_kontrak_kerja->lihat_berdasarkan_area($key);
  	$data['lowongan'] = $this->model_data_lowongan_kerja->tampil();
    $data['data'] = $this->model_data_user->login_hrd();
    $data['content']='hrd/data_kontrak_kerja/tampilan_area_data_kontrak_kerja';
    $this->load->view('hrd/tampilan_home',$data);
  }



}
