<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Laporan_kontrak_kerja extends CI_Controller {

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
	$data['isi']	= $this->model_data_kontrak_kerja->tampil();
	$data['content']='manager/laporan_data_kontrak_kerja/tampilan_data_kontrak_kerja';
	$this->load->view('manager/tampilan_home',$data);
	}

			public function detail($id)
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_manager();
		$data['detail']	= $this->model_data_kontrak_kerja->detail($id);
		$data['content']='manager/laporan_data_kontrak_kerja/detail_data_kontrak_kerja';
		$this->load->view('manager/tampilan_home',$data);

	}

 public function cetak()
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

}
