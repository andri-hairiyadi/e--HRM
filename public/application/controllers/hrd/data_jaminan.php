<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class data_jaminan extends CI_Controller {

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
  		$data['isi'] = $this->model_data_man_power->bpjs_ket();
  		$data['lowongan'] = $this->model_data_lowongan_kerja->tampil();
		$data['content']='hrd/data_man_power/tampilan_bpjs_ket';
		$this->load->view('hrd/tampilan_home',$data);
	}

	public function bpjs_kes()
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_hrd();
			$data['isi'] = $this->model_data_man_power->bpjs_kes();
			$data['lowongan'] = $this->model_data_lowongan_kerja->tampil();
		$data['content']='hrd/data_man_power/tampilan_bpjs_kes';
		$this->load->view('hrd/tampilan_home',$data);
	}





}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
