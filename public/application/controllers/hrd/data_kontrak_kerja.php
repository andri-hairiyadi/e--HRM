<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Data_kontrak_kerja extends CI_Controller {

public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('masuk');
		}
        $this->load->helper('countdown');
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
	$data['isi']	= $this->model_data_kontrak_kerja->tampil();
	$data['content']='hrd/data_kontrak_kerja/tampilan_data_kontrak_kerja';
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


	public function tambah()
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_hrd();
		$data['content']='hrd/data_kontrak_kerja/tampilan_tambah_data_kontrak_kerja';
		$this->load->view('hrd/tampilan_home',$data);
	}

		public function ubah($id)
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_hrd();
		$data['edit']	= $this->model_data_kontrak_kerja->view_by($id);
		$data['content']='hrd/data_kontrak_kerja/ubah_data_kontrak_kerja';
		$this->load->view('hrd/tampilan_home',$data);

	}

		public function detail($id)
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_hrd();
		$data['detail']	= $this->model_data_kontrak_kerja->detail($id);
		$data['content']='hrd/data_kontrak_kerja/detail_data_kontrak_kerja';
		$this->load->view('hrd/tampilan_home',$data);

	}

	    public function hapus($id) {
	$this->load->model('model_data_kontrak_kerja');
	$this->model_data_kontrak_kerja->delete($id);
	$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\"><b>Data berhasil di hapus</b></div></div>");
	redirect('hrd/data_kontrak_kerja/');
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

    $this->load->model('model_data_kontrak_kerja');
    $query = $this->model_data_kontrak_kerja->getdata($key);

		if ($query->num_rows()>0)
		{
			$this->model_data_kontrak_kerja->getupdate($key,$data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Ubah!!</div></div>");

		}

		else
		{
			$this->model_data_kontrak_kerja->getinsert($data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Tambahkan!!</div></div>");

		}
    redirect('hrd/data_kontrak_kerja');

  }



 public function cetak_kontrak_kerja()
  {
	$data['isi']	= $this->model_data_kontrak_kerja->tampil();
    ob_start();
    $content = $this->load->view('hrd/data_kontrak_kerja/tampilan_cetak_data_kontrak_kerja',$data);
    $content = ob_get_clean();
    $this->load->library('html2pdf');
    try
    {
      $html2pdf = new HTML2PDF('L', 'A4', 'fr');
      $html2pdf->pdf->SetDisplayMode('fullpage');
      $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
      $html2pdf->Output('Data_Kontrak_Kerja.pdf');
    }
    catch(HTML2PDF_exception $e) {
      echo $e;
      exit;
    }
  }


 public function cetak_surat_perjanjian($id)
  {
	$data['detail']	= $this->model_data_kontrak_kerja->detail($id);

    ob_start();
    $content = $this->load->view('hrd/data_kontrak_kerja/tampilan_cetak_surat_perjanjian',$data);
    $content = ob_get_clean();
    $this->load->library('html2pdf');
    try
    {
      $html2pdf = new HTML2PDF('P', 'A4', 'fr');
      $html2pdf->pdf->SetDisplayMode('fullpage');
      $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
      $html2pdf->Output('Data_Kontrak_Kerja.pdf');
    }
    catch(HTML2PDF_exception $e) {
      echo $e;
      exit;
    }
  }


	public function kontrak_baru()
  {
    $key = $this->input->post('id_kontrak');
    $data['id_kontrak']      = $this->input->post('id_kontrak');
    $data['id_area_kerja']   = $this->input->post('id_area_kerja');
    $data['id_man_power']    = $this->input->post('id_man_power');
    $data['tgl_mulai']       = $this->input->post('tgl_mulai');
    $data['tgl_selesai']     = $this->input->post('tgl_selesai');
    $data['posisi_tugas']    = $this->input->post('posisi_tugas');

    $this->load->model('model_data_kontrak_kerja');
    $query = $this->model_data_kontrak_kerja->getdata($key);


	$this->model_data_kontrak_kerja->getupdate($key, $data);




			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Kontrak Kerja Berhasil Di Ubah!!</div></div>");


    redirect('hrd/data_kontrak_kerja');

  }


}
