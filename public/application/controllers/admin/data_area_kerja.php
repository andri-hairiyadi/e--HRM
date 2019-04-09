<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Data_area_kerja extends CI_Controller {

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
		$data['data']	= $this->model_data_user->login_admin();
		$data['isi']	= $this->model_data_area_kerja->tampil();
		$data['content']='admin/data_area_kerja/tampilan_data_area_kerja';
		$this->load->view('admin/tampilan_home',$data);
	}
	

	public function tambah()
	{	
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_admin();
		$data['content']='admin/data_area_kerja/tampilan_tambah_data_area_kerja';
		$this->load->view('admin/tampilan_home',$data);
	}
	
		public function ubah($id)
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_admin();
		$data['edit']	= $this->model_data_area_kerja->view_by($id);
		$data['content']='admin/data_area_kerja/ubah_data_area_kerja';
		$this->load->view('admin/tampilan_home',$data);

	}
	
		public function detail($id)
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_admin();
		$data['detail']	= $this->model_data_area_kerja->view_by($id);
		$data['content']='admin/data_area_kerja/detail_data_area_kerja';
		$this->load->view('admin/tampilan_home',$data);

	}

	    public function hapus($id) {
	$this->load->model('model_data_area_kerja');
	$this->model_data_area_kerja->delete($id);
	$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\"><b>Data berhasil di hapus</b></div></div>");
     
	redirect('admin/data_area_kerja/');
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
  
    $this->load->model('model_data_area_kerja');
    $query = $this->model_data_area_kerja->getdata($key);
		
		if ($query->num_rows()>0)
		{
			$this->model_data_area_kerja->getupdate($key,$data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Ubah!!</div></div>");
   
		}
		
		else
		{
			$this->model_data_area_kerja->getinsert($data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Tambahkan!!</div></div>");
   
		}
    redirect('admin/data_area_kerja');

  }
   public function cetak_area_kerja()
  { 
   	$data['isi']	= $this->model_data_area_kerja->tampil();
    ob_start();
    $content = $this->load->view('admin/data_area_kerja/tampilan_cetak_data_area_kerja',$data);
    $content = ob_get_clean();    
    $this->load->library('html2pdf');
    try
    {
      $html2pdf = new HTML2PDF('L', 'A4', 'fr');
      $html2pdf->pdf->SetDisplayMode('fullpage');
      $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
      $html2pdf->Output('Data_Area_Kerja.pdf');
    }
    catch(HTML2PDF_exception $e) {
      echo $e;
      exit;
    }
  }


}

