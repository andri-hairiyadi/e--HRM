<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {


  

	public function index()
	{
	
		$data['content']='tampilan_register';
		$this->load->view('tampilan_home',$data);
	}


	public function simpan()
  {
  
    $kode_untuk_sekolah = $this->input->post('sekolah'); 
 
    $data['kode_aktivasi']               = "$kode_untuk_sekolah".time();
    $data['nama_lengkap']                = $this->input->post('nama_lengkap');  
    $data['no_hp']                	     = $this->input->post('no_hp');  
    $data['jenis_kelamin']               = $this->input->post('jk'); 
    $data['sekolah'] 		                 = $this->input->post('sekolah'); 
    $data['tanggal_daftar']              = date('y-m-d'); 
    $data['jam_daftar']                  = date("H:i:s", time()+60*60*5);

    $this->load->model('model_register');

	  $this->model_register->getinsert($data);

    //sms
      $nama = $this->input->post('nama_lengkap'); 
      $id_pendaftaran = "$kode_untuk_sekolah".time();
      $mobile = $this->input->post('no_hp');
      $message = "Selamat, Registrasi Pendaftran PT. Andesta Mandiri Indonesia berhasil. Nama Anda : $nama. ID Registrasi : $id_pendaftaran. Silahkan Mengisi Form Formulir di darel-hikmah.com/daftar. (ADMIN YAYASAN)";
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
    $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Anda Berhasil Melakukan Registrasi!!</div></div>");
     
    $lokasi = $this->db->insert_id();
    $tujuan = "register/selesai/$lokasi";

    redirect($tujuan);

  }

		public function selesai($id)
	{
    $this->load->helper('tgl_indonesia');
		$data['nama_lengkap'] = $this->input->post('nama_lengkap');  
		$data['isi'] 		  = $this->model_register->view_by($id);
		$data['content']	  ='tampilan_register_selesai';
		$this->load->view('tampilan_home',$data);
	}

 public function cetak($id)
  { 
     $this->load->helper('tgl_indonesia');
    $this->load->model('model_register');
    $data['isi'] = $this->model_register->view_by($id);

    ob_start();
    $content = $this->load->view('cetak_kartu_aktivasi',$data);
    $content = ob_get_clean();    
    $this->load->library('html2pdf');
    try
    {
      $html2pdf = new HTML2PDF('P', 'A4', 'fr');
      $html2pdf->pdf->SetDisplayMode('fullpage');
      $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
      $html2pdf->Output('Kartu_Aktivasi.pdf');
    }
    catch(HTML2PDF_exception $e) {
      echo $e;
      exit;
    }
  }

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */