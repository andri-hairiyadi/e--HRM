<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Data_profil extends CI_Controller {

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
		$data['isi']	= $this->model_data_user->login_manager();
		$data['content']='manager/data_profil/tampilan_data_profil';
		$this->load->view('manager/tampilan_home',$data);
	}
	

	public function tambah()
	{	
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_manager();
		$data['content']='manager/data_profil/tampilan_tambah_data_profil';
		$this->load->view('manager/tampilan_home',$data);
	}
	
		public function ubah($id)
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_manager();
		$data['edit']	= $this->model_data_user->view_by($id);
		$data['content']='manager/data_profil/ubah_data_profil';
		$this->load->view('manager/tampilan_home',$data);

	}
	
		public function detail($id)
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_manager();
		$data['detail']	= $this->model_data_user->view_by($id);
		$data['content']='manager/data_profil/detail_data_profil';
		$this->load->view('manager/tampilan_home',$data);

	}

	    public function hapus($id) {
	$this->load->model('model_data_user');
	$this->model_data_user->delete($id);
	$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\"><b>Data berhasil di hapus</b></div></div>");
     
	redirect('manager/data_profil/');
	}


		public function simpan()
  {
    $key = $this->input->post('id_manager_kerja');
    $data['id_manager_kerja']    = $this->input->post('id_manager_kerja');
    $data['nama_manager']        = $this->input->post('nama_manager');
    $data['alamat_manager']      = $this->input->post('alamat_manager'); 
    $data['kota_manager']     	  = $this->input->post('kota_manager'); 
    $data['email_manager']       = $this->input->post('email_manager'); 
    $data['no_hp_manager']       = $this->input->post('no_hp_manager'); 
    $data['jenis_manager']       = $this->input->post('jenis_manager'); 
    $data['nama_manajer']     = $this->input->post('nama_manajer'); 
    $data['email_manajer']    = $this->input->post('email_manajer'); 
    $data['no_manajer']       = $this->input->post('no_manajer'); 
    $data['long']             = $this->input->post('long'); 
    $data['late']             = $this->input->post('late'); 
  
    $this->load->model('model_data_user');
    $query = $this->model_data_user->getdata($key);
		
		if ($query->num_rows()>0)
		{
			$this->model_data_user->getupdate($key,$data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Ubah!!</div></div>");
   
		}
		
		else
		{
			$this->model_data_user->getinsert($data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Tambahkan!!</div></div>");
   
		}
    redirect('manager/data_profil');

  }


}

