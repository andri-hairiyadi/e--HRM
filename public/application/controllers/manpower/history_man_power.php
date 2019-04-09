<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class History_man_power extends CI_Controller {

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
		$data['riwayat']	= $this->model_data_man_power->riwayat($id);
		$data['content']='manpower/history_man_power/tampilan_history_man_power';
		$this->load->view('manpower/tampilan_home',$data);
	}
	

	public function tambah()
	{	
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_manpower();
		$data['content']='manpower/history_man_power/tampilan_tambah_history_man_power';
		$this->load->view('manpower/tampilan_home',$data);
	}
	
		public function ubah($id)
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_manpower();
		$data['edit']	= $this->model_data_man_power->view_by($id);
		$data['content']='manpower/history_man_power/ubah_history_man_power';
		$this->load->view('manpower/tampilan_home',$data);

	}
	
		public function detail($id)
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_manpower();
		$data['detail']	= $this->model_data_man_power->view_by($id);
		$data['content']='manpower/history_man_power/detail_history_man_power';
		$this->load->view('manpower/tampilan_home',$data);

	}

	    public function hapus($id) {
	$this->load->model('model_data_man_power');
	$this->model_data_man_power->delete($id);
	$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\"><b>Data berhasil di hapus</b></div></div>");
     
	redirect('manpower/history_man_power/');
	}


		public function simpan()
  {
    $key = $this->input->post('id_area_kerja');
    $data['id_area_kerja']    = $this->input->post('id_area_kerja');
    $data['nama_area']        = $this->input->post('nama_area');
    $data['alamat_area']      = $this->input->post('alamat_area'); 
    $data['kota_area']     	  = $this->input->post('kota_area'); 
    $data['email_area']       = $this->input->post('email_area'); 
    $data['no_hp_area']       = $this->input->post('no_hp_area'); 
    $data['jenis_area']       = $this->input->post('jenis_area'); 
    $data['nama_manajer']     = $this->input->post('nama_manajer'); 
    $data['email_manajer']    = $this->input->post('email_manajer'); 
    $data['no_manajer']       = $this->input->post('no_manajer'); 
    $data['long']             = $this->input->post('long'); 
    $data['late']             = $this->input->post('late'); 
  
    $this->load->model('model_data_man_power');
    $query = $this->model_data_man_power->getdata($key);
		
		if ($query->num_rows()>0)
		{
			$this->model_data_man_power->getupdate($key,$data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Ubah!!</div></div>");
   
		}
		
		else
		{
			$this->model_data_man_power->getinsert($data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Tambahkan!!</div></div>");
   
		}
    redirect('manpower/history_man_power');

  }


}

