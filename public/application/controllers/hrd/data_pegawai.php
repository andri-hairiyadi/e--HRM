<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Data_pegawai extends CI_Controller {

public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('masuk');
		}

		$this->load->helper('text');
	}


	public function index()
	{	
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['isi']	= $this->model_data_pegawai->tampil();
		$data['data']	= $this->model_data_user->login_admin_yayasan();
		$data['content']='admin_yayasan/data_pegawai/tampilan_data_pegawai';
		$this->load->view('admin_yayasan/tampilan_home',$data);
	}

		
	public function tambah()
	{	
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['data']	= $this->model_data_user->login_admin_yayasan();
		$data['content']='admin_yayasan/data_pegawai/tampilan_tambah_data_pegawai';
		$this->load->view('admin_yayasan/tampilan_home',$data);
	}
	
		public function ubah($id)
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_admin_yayasan();
		$data['edit']	= $this->model_data_pegawai->view_by($id);
		$data['content']='admin_yayasan/data_pegawai/ubah_data_pegawai';
		$this->load->view('admin_yayasan/tampilan_home',$data);

	}

	public function simpan()
    {
    $key = $this->input->post('id_pegawai');
    $data['id_pegawai']            = $this->input->post('id_pegawai');
    $data['id_sekolah']            = $this->input->post('id_sekolah');
    $data['nama_pegawai']      	   = $this->input->post('nama_pegawai'); 
    $data['nip']      	   		   = $this->input->post('nip'); 
    $data['jenis_kelamin']    	   = $this->input->post('jenis_kelamin'); 
    $data['pendidikan_terakhir']   = $this->input->post('pendidikan_terakhir'); 
    $data['status_kepegawaian']    = $this->input->post('status_kepegawaian'); 
    $data['jabatan']       		   = $this->input->post('jabatan'); 
    $data['status_sertifikasi']    = $this->input->post('status_sertifikasi'); 
    $data['no_hp']   	 		   = $this->input->post('no_hp'); 
    $data['alamat'] 		       = $this->input->post('alamat'); 
    $data['email'] 		       	   = $this->input->post('email'); 
    $data['tempat_lahir'] 		   = $this->input->post('tempat_lahir'); 
    $data['tanggal_lahir'] 		   = $this->input->post('tanggal_lahir'); 
   
    $this->load->model('model_data_pegawai');
    $query = $this->model_data_pegawai->getdata($key);
		
		if ($query->num_rows()>0)
		{
			$this->model_data_pegawai->getupdate($key,$data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Ubah!!</div></div>");
   
		}
		
		else
		{
			$this->model_data_pegawai->getinsert($data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Tambahkan!!</div></div>");
   
		}
    redirect('admin_yayasan/data_pegawai');

  }
    public function hapus($id) {
	$this->load->model('model_data_pegawai');
	$this->model_data_pegawai->delete($id);
	$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\"><b>Data berhasil di hapus</b></div></div>");
     
	redirect('admin_yayasan/data_pegawai');
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */