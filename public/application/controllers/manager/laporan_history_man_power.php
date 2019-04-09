<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Laporan_history_man_power extends CI_Controller {

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
		 $data['isi']	= $this->model_data_man_power->tampil();
		$data['content']='manager/laporan_history_man_power/tampilan_laporan_history_man_power';
		$this->load->view('manager/tampilan_home',$data);
	}

	public function history($id)
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_manager();
		$data['detail']	= $this->model_data_man_power->detail($id);
		$data['area']	= $this->model_data_area_kerja->tampil();
  		$data['lowongan'] = $this->model_data_lowongan_kerja->tampil();
		$data['riwayat']	= $this->model_data_man_power->riwayat($id);
		$data['content']='manager/laporan_history_man_power/tampil_history';
		$this->load->view('manager/tampilan_home',$data);

	}

	 public function cetak_history($id)
  { 
   $data['riwayat']	= $this->model_data_man_power->riwayat($id);

    ob_start();
    $content = $this->load->view('manager/laporan_history_man_power/tampilan_cetak_laporan_history_man_power',$data);
    $content = ob_get_clean();    
    $this->load->library('html2pdf');
    try
    {
      $html2pdf = new HTML2PDF('L', 'A4', 'fr');
      $html2pdf->pdf->SetDisplayMode('fullpage');
      $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
      $html2pdf->Output('history_man_power.pdf');
    }
    catch(HTML2PDF_exception $e) {
      echo $e;
      exit;
    }
  }

	 public function cetak()
  { 
     $data['isi']	= $this->model_data_man_power->history_man_power();

    ob_start();
    $content = $this->load->view('manager/laporan_history_man_power/tampilan_cetak_laporan_history_man_power',$data);
    $content = ob_get_clean();    
    $this->load->library('html2pdf');
    try
    {
      $html2pdf = new HTML2PDF('L', 'A4', 'fr');
      $html2pdf->pdf->SetDisplayMode('fullpage');
      $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
      $html2pdf->Output('Data_Man_Power.pdf');
    }
    catch(HTML2PDF_exception $e) {
      echo $e;
      exit;
    }
  }
	


}

