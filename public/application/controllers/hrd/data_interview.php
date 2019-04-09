<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class data_interview extends CI_Controller {
 
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
  		$data['isi'] = $this->model_data_pelamar->tampil_interview();
  		$data['lowongan'] = $this->model_data_lowongan_kerja->tampil();
		$data['content']='hrd/data_interview/tampilan_data_interview';
		$this->load->view('hrd/tampilan_home',$data);
	}

   public function posisi()
  { 
    $key           = $this->input->post('posisi_lowongan');
    $data['nama'] = $this->session->userdata('nama');
    $data['id_user'] = $this->session->userdata('id_user');
    $data['isi']  = $this->model_data_lowongan_kerja->lihat_berdasarkan_lowongan($key);
  	$data['lowongan'] = $this->model_data_lowongan_kerja->tampil();
    
    $data['data'] = $this->model_data_user->login_hrd();
    $data['content']='hrd/data_interview/tampilan_posisi_data_interview';
    $this->load->view('hrd/tampilan_home',$data);
  }

	public function detail($id)
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_hrd();
		$data['detail']	= $this->model_data_pelamar->view_by($id);
		$data['content']='hrd/data_interview/tampilan_detail_interview';
		$this->load->view('hrd/tampilan_home',$data);

	}
public function catatan_hrd()
  {

    $key = $this->input->post('id_pelamar');
    $data['id_pelamar']    = $this->input->post('id_pelamar');
    $data['catatan_hrd']  = $this->input->post('catatan_hrd');
    $data['status']      = '3';

    $this->load->model('model_data_pelamar');
    $query = $this->model_data_pelamar->getdata($key);
    
    $this->model_data_pelamar->diterima($key,$data);

     

    $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Interview Telah Selesai!!</div></div>");
   
     redirect('hrd/data_interview/');

  }

		public function status_diterima()
  {
    $key = $this->input->post('id_pelamar');
    $data['id_pelamar']                = $this->input->post('id_pelamar');
    $data['tanggal_training']          = $this->input->post('tanggal_training');
    $data['tanggal_training_selesai']  = $this->input->post('tanggal_training_selesai');
    $data['jam_training']              = $this->input->post('jam_training');
    $data['status']                    = '4';

    $this->load->model('model_data_pelamar');
    $query = $this->model_data_pelamar->getdata($key);
		
	$this->model_data_pelamar->diterima($key,$data);

   //sms
              $nama = $this->input->post('nama_pelamar'); 
              $id_pendaftaran = $this->input->post('no_pendaftaran');
              $tanggal1 = tgl_indo($this->input->post('tanggal_training'));
              $tanggal2= tgl_indo($this->input->post('tanggal_training_selesai'));
              $jam = $this->input->post('jam_training');

              $mobile = $this->input->post('no_hp');
              $message = "(PEMBERITAHUAN JADWAL TRAINING). Pelamar atas Nama : $nama . ID Pendaftaran : $id_pendaftaran. Proses Training akan dilaksanakan pada $tanggal1 sampai $tangga2, Pukul : $jam. (HRD)";
              $data = $this->input->post();
              unset($data['submit']);
              $msgencode = urlencode($message);
              $userkey = "rw486b";
              $passkey = "9gpjb5zc09";
              $router = "";

              $postdata = array('authkey'=>$userkey,
                        'mobile'=>$mobile,
                        'message'=>$msgencode,
                        'router'=>$router
                        );
              $url = "https://reguler.zenziva.net/apps/smsapi.php?userkey=$userkey&passkey=$passkey&nohp=$mobile&pesan=$msgencode";

              $ch  = curl_init();
                  curl_setopt_array($ch,array(
                              CURLOPT_URL => $url,
                              CURLOPT_RETURNTRANSFER => TRUE,
                              CURLOPT_POST => TRUE,
                              CURLOPT_POSTFIELDS => $postdata
                    ));

              curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
              curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
         
              $output = curl_exec($ch);
              if (curl_errno($ch)) {
                echo "error". curl_error($ch);
              }
              curl_close($ch);
          
        //sms
	$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Pelamar Di Terima!!</div></div>");
   
	redirect('hrd/data_training/');

  }

	 public function status_ditolak()
  {
    $key = $this->input->post('id_pelamar');
    $data['id_pelamar']    = $this->input->post('id_pelamar');
    $data['catatan_hrd']  = $this->input->post('catatan_hrd');
    $data['status']      = '1';

    $this->load->model('model_data_pelamar');
    $query = $this->model_data_pelamar->getdata($key);
    
    $this->model_data_pelamar->ditolak($key,$data);

   //sms
              $nama = $this->input->post('nama_pelamar'); 
              $id_pendaftaran = $this->input->post('no_pendaftaran');
              $catatan = $this->input->post('catatan_hrd');
              $mobile = $this->input->post('no_hp');
              $message = "(PEMBERITAHUAN). Pelamar Atas Nama : $nama . ID Pendaftaran : $id_pendaftaran. Anda dinyatakan gagal dalam seleksi penerimaan karyawan PT. Andesta Mandiri Indonesia. (Catatan HRD : $catatan)";
              $data = $this->input->post();
              unset($data['submit']);
              $msgencode = urlencode($message);
              $userkey = "rw486b";
              $passkey = "9gpjb5zc09";
              $router = "";

              $postdata = array('authkey'=>$userkey,
                        'mobile'=>$mobile,
                        'message'=>$msgencode,
                        'router'=>$router
                        );
              $url = "https://reguler.zenziva.net/apps/smsapi.php?userkey=$userkey&passkey=$passkey&nohp=$mobile&pesan=$msgencode";

              $ch  = curl_init();
                  curl_setopt_array($ch,array(
                              CURLOPT_URL => $url,
                              CURLOPT_RETURNTRANSFER => TRUE,
                              CURLOPT_POST => TRUE,
                              CURLOPT_POSTFIELDS => $postdata
                    ));

              curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
              curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
         
              $output = curl_exec($ch);
              if (curl_errno($ch)) {
                echo "error". curl_error($ch);
              }
              curl_close($ch);
          
        //sms
  $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Ubah!!</div></div>");
   
  redirect('hrd/data_interview/');

  }

   public function cetak_data_interview()
  { 
   	$data['isi'] = $this->model_data_pelamar->tampil_interview();
    ob_start();
    $content = $this->load->view('hrd/data_interview/tampilan_cetak_data_interview',$data);
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

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */