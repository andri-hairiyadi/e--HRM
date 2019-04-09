<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Beranda extends CI_Controller {

public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('masuk');
		}
	$this->load->library('leaflet');
		$this->load->helper('text');
	}

	public function index()
	{

		$data['jumlah_man_power']	= $this->model_data_man_power->tampil_aktif();
		$data['jumlah_area_kerja']	= $this->model_data_area_kerja->tampil();
		$data['bpjs_ket']	=	$this->model_data_man_power->bpjs_ket();
		$data['bpjs_kes']	=	$this->model_data_man_power->bpjs_kes();
		$data['limit_man_power']	= $this->model_data_man_power->tampil_non_aktif();
		$data['lowongan_kerja']		= $this->model_data_lowongan_kerja->tampil();
		$data['lamaran_masuk']		= $this->model_data_pelamar->jumlah_lamaran_masuk();
		$data['interview']			= $this->model_data_pelamar->jumlah_interview();
		$data['training']			= $this->model_data_pelamar->jumlah_training();
		$data['ulang_tahun']		= $this->model_data_man_power->ulang_tahun();
		$data['nama'] 				= $this->session->userdata('nama');
		$data['id_user']			= $this->session->userdata('id_user');
		$data['data']				= $this->model_data_user->login_hrd();
		$data['content']			='hrd/tampilan_beranda';
		$this->load->view('hrd/tampilan_home',$data);
	}
		public function ubah()
	{
		$key = $this->input->post('id_user');
		$data['id_user']	 	= $this->input->post('id_user');
		$data['upload']	 		= $this->input->post('upload');
		$this->load->model('model_data_user');
		$query = $this->model_data_user->getdata($key);

		if ($query->num_rows()>0)
		{
			$this->model_data_user->getupdate($key,$data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Iklan Berhasil di Aktifkan!!</div></div>");
		}
		else
		{
			$this->model_data_user->getinsert($data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Di tambahkan!!</div></div>");

		}

		redirect('admin/home');

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
