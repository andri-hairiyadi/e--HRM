<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Kpi extends CI_Controller {

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
		$data['area']	= $this->model_data_area_kerja->tampil();
		$data['isi']	= $this->model_data_man_power->kpi_tampil();


		$data['content']='hrd/kpi/tampilan_kpi';
		$this->load->view('hrd/tampilan_home',$data);
	}
	

	    public function area()
  { 
    $key           = $this->input->post('area');
    $data['nama'] = $this->session->userdata('nama');
    $data['id_user'] = $this->session->userdata('id_user');
    $data['isi']  = $this->model_data_lowongan_kerja->lihat_berdasarkan_lowongan($key);
	$data['isi']	= $this->model_data_man_power->kpi_tampil_area($key);
	$data['area']	= $this->model_data_area_kerja->tampil();   
    $data['data'] = $this->model_data_user->login_hrd();
    $data['content']='hrd/kpi/tampilan_kpi_area';
    $this->load->view('hrd/tampilan_home',$data);
  }

   public function cetak_data_kpi()
  { 
   	$data['isi']	= $this->model_data_man_power->kpi_tampil();
    ob_start();
    $content = $this->load->view('hrd/kpi/tampilan_cetak_data_kpi',$data);
    $content = ob_get_clean();    
    $this->load->library('html2pdf');
    try
    {
      $html2pdf = new HTML2PDF('L', 'A4', 'fr');
      $html2pdf->pdf->SetDisplayMode('fullpage');
      $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
      $html2pdf->Output('Data_Lamaran_Masuk.pdf');
    }
    catch(HTML2PDF_exception $e) {
      echo $e;
      exit;
    }
  }




}

