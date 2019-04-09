<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Data_man_power extends CI_Controller {

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
		$data['isi']	= $this->model_data_man_power->tampil_mp_area($id);
		$data['content']='area/data_man_power/tampilan_data_man_power';
		$this->load->view('area/tampilan_home',$data);
	}
	

		public function detail($id)
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_area();
		$data['pendidikan']	= $this->model_data_man_power->pendidikan($id);
		$data['riwayat']	= $this->model_data_man_power->riwayat($id);
		$data['pengalaman']	= $this->model_data_man_power->pengalaman($id);
		$data['anak']	= $this->model_data_man_power->anak($id);
		$data['saudara']	= $this->model_data_man_power->saudara($id);
		$data['detail']	= $this->model_data_man_power->detail($id);
		$data['content']='area/data_man_power/detail_data_man_power';
		$this->load->view('area/tampilan_home',$data);

	}


	 public function cetak_man_power()
  {
  			$query = $this->model_data_user->login_area();
		$row = $query->row();
		$id = $row->id_area_kerja;
			$data['isi']	= $this->model_data_man_power->tampil_mp_area($id);



    ob_start();
    $content = $this->load->view('area/data_man_power/tampilan_cetak_data_man_power',$data);
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
