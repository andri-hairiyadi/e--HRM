<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Data_kontrak_kerja extends CI_Controller {

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
		$query = $this->model_data_user->login_area();
		$row = $query->row();
		$id = $row->id_area_kerja;
		
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_area();
		$data['isi']	= $this->model_data_kontrak_kerja->kontrak_kerja_area($id);
		$data['content']='area/data_kontrak_kerja/tampilan_data_kontrak_kerja';
		$this->load->view('area/tampilan_home',$data);
	}
	

	public function tambah()
	{	
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_area();
		$data['content']='area/data_kontrak_kerja/tampilan_tambah_data_kontrak_kerja';
		$this->load->view('area/tampilan_home',$data);
	}
	

		public function detail($id)
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_area();
		$data['detail']	= $this->model_data_kontrak_kerja->detail($id);
		$data['content']='area/data_kontrak_kerja/detail_data_kontrak_kerja';
		$this->load->view('area/tampilan_home',$data);

	}

 public function cetak_kontrak_kerja()
  { 
	$query = $this->model_data_user->login_area();
	$row = $query->row();
	$id = $row->id_area_kerja;

	$data['isi']	= $this->model_data_kontrak_kerja->kontrak_kerja_area($id);
    
    ob_start();
    $content = $this->load->view('area/data_kontrak_kerja/tampilan_cetak_data_kontrak_kerja',$data);
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

