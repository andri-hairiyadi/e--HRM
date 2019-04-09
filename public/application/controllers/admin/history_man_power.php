<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class History_man_power extends CI_Controller {

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
		$data['data']	= $this->model_data_user->login_admin();
		$data['isi']	= $this->model_data_man_power->tampil();
		$data['content']='admin/history_man_power/tampilan_history_man_power';
		$this->load->view('admin/tampilan_home',$data);
	}
	

		public function history($id)
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_admin();
		$data['detail']	= $this->model_data_man_power->detail($id);
				$data['area']	= $this->model_data_area_kerja->tampil();
  		$data['lowongan'] = $this->model_data_lowongan_kerja->tampil();
		$data['riwayat']	= $this->model_data_man_power->riwayat($id);
		$data['content']='admin/history_man_power/tampil_history';
		$this->load->view('admin/tampilan_home',$data);

	}



		public function simpan_history()
  {
    $key = $this->input->post('id_riwayat');
    $data['id_riwayat']       = $this->input->post('id_riwayat');
    $data['id_man_power']     = $this->input->post('id_man_power');
    $data['id_area_kerja']    = $this->input->post('id_area_kerja');
    $data['penghargaan']      = $this->input->post('penghargaan'); 
    $data['pelanggaran']      = $this->input->post('pelanggaran'); 
    $data['keterangan']       = $this->input->post('keterangan'); 
  
    $this->load->model('model_data_man_power');
    $query = $this->model_data_man_power->cek_riwayatkerja($key);
		
		if ($query->num_rows()>0)
		{
			$this->model_data_man_power->ubah_riwayatkerja($key,$data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Ubah!!</div></div>");
   
		}
		
		else
		{
			$this->model_data_man_power->simpan_riwayatkerja($data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Tambahkan!!</div></div>");
   
		}
    $id_mp = $this->input->post('id_man_power');

    $kembali ="admin/history_man_power/history/$id_mp";
    redirect($kembali);

  }

 	    public function hapus_history($id) {

	$this->load->model('model_data_man_power');


	 $query = $this->model_data_man_power->cek_hapus_riwayat($id);
     $row = $query->row();
     $id_mp = $row->id_man_power;

$this->model_data_man_power->hapus_riwayatkerja($id);

	$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\"><b>Data berhasil di hapus</b></div></div>");
     
    
  $kembali ="admin/history_man_power/history/$id_mp";
   redirect($kembali);
	}
}

