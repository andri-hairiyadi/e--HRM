<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Data_training extends CI_Controller {

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
    $nama_area = $row->nama_area;
    
    $data['nama'] = $this->session->userdata('nama');
    $data['id_user'] = $this->session->userdata('id_user');
    $data['data'] = $this->model_data_user->login_area();
    $data['isi']  = $this->model_data_pelamar->tampil_training_area($nama_area);
    $data['content']='area/data_training/tampilan_data_training';
    $this->load->view('area/tampilan_home',$data);
  }
  
  public function detail($id)
  {
    $data['nama'] = $this->session->userdata('nama');
    $data['id_user'] = $this->session->userdata('id_user');
    $data['data'] = $this->model_data_user->login_area();
    $data['detail'] = $this->model_data_pelamar->view_by($id);
    $data['content']='area/data_training/tampilan_detail_training';
    $this->load->view('area/tampilan_home',$data);

  }


   public function cetak_man_power()
  { 
        $query = $this->model_data_user->login_area();
    $row = $query->row();
    $nama_area = $row->nama_area;
        $data['isi']  = $this->model_data_pelamar->tampil_training_area($nama_area);


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

