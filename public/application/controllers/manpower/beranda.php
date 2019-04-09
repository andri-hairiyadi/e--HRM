<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Beranda extends CI_Controller {

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
		$data['isi']	= $this->model_data_user->login_manpower();
		$data['pendidikan']	= $this->model_data_man_power->pendidikan($id);
		$data['riwayat']	= $this->model_data_man_power->riwayat($id);
		$data['pengalaman']	= $this->model_data_man_power->pengalaman($id);
		$data['anak']	= $this->model_data_man_power->anak($id);
		$data['saudara']	= $this->model_data_man_power->saudara($id);
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_manpower();
		$data['isi']	= $this->model_data_user->login_manpower();
		$data['content']='manpower/tampilan_beranda';
		$this->load->view('manpower/tampilan_home',$data);
	}
	

		public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('beranda');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */