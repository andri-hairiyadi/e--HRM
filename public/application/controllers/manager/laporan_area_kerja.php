<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Laporan_area_kerja extends CI_Controller {

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

		$data['data']	= $this->model_data_user->login_manager();
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');;
		$data['isi']	= $this->model_data_area_kerja->tampil();
		$data['content']='manager/laporan_data_area_kerja/tampilan_laporan_data_area_kerja';
		$this->load->view('manager/tampilan_home',$data);
	}

    public function detail($id)
  {
    $data['nama'] = $this->session->userdata('nama');
    $data['id_user'] = $this->session->userdata('id_user');
    $data['data'] = $this->model_data_user->login_manager();
    $data['detail'] = $this->model_data_area_kerja->view_by($id);
    $data['content']='manager/laporan_data_area_kerja/detail_data_area_kerja';
    $this->load->view('manager/tampilan_home',$data);

  }

	   public function cetak()
  { 
   	$data['isi']	= $this->model_data_area_kerja->tampil();
    ob_start();
    $content = $this->load->view('hrd/data_area_kerja/tampilan_cetak_data_area_kerja',$data);
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

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */