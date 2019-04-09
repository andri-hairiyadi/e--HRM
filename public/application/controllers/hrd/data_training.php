<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class data_training extends CI_Controller {

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
  		$data['isi'] = $this->model_data_pelamar->tampil_training();
  	$data['lowongan'] = $this->model_data_lowongan_kerja->tampil();
        $data['area'] = $this->model_data_area_kerja->tampil();

		$data['content']='hrd/data_training/tampilan_data_training';
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
    $data['content']='hrd/data_training/tampilan_posisi_data_training';
    $this->load->view('hrd/tampilan_home',$data);
  }

	public function detail($id)
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_hrd();
		$data['detail']	= $this->model_data_pelamar->view_by($id);
		$data['content']='hrd/data_training/tampilan_detail_training';
		$this->load->view('hrd/tampilan_home',$data);

	}

			public function status_diterima()
  {
    $key = $this->input->post('id_pelamar');
    $data['id_pelamar']    = $this->input->post('id_pelamar');
    $data['tanggal_interview']  = $this->input->post('tanggal_interview');
    $data['jam_interview']      = $this->input->post('jam_interview');
    $data['status']      = '7';

    $this->load->model('model_data_pelamar');
    $query = $this->model_data_pelamar->getdata($key);
		
	$this->model_data_pelamar->diterima($key,$data);

			$key1 = $this->input->post('id_man_power');
	       	$data1['id_man_power']             = $this->input->post('id_man_power');

    $data1['posisi_pilihan']        = $this->input->post('posisi');  
    $data1['no_identitas']        = $this->input->post('nomor_ktp');  
    $data1['nama_mp']             = $this->input->post('nama_pelamar');  
    $data1['tempat_lahir_mp']     = $this->input->post('tempat_lahir'); 
    $data1['tanggal_lahir_mp']    = $this->input->post('tanggal_lahir'); 
    $data1['jk_mp']               = $this->input->post('jenis_kelamin'); 
    $data1['agama']               = $this->input->post('agama'); 
    $data1['status_menikah']      = $this->input->post('status_pernikahan'); 
    $data1['no_hp_mp']            = $this->input->post('no_hp'); 
    $data1['alamat_mp']           = $this->input->post('alamat'); 
    $data1['hoby_mp']             = $this->input->post('hobi'); 
    $data1['gol_darah']           = $this->input->post('golongan_darah'); 
    $data1['tinggi_badan']        = $this->input->post('tinggi_badan'); 
    $data1['berat_badan']         = $this->input->post('berat_badan'); 
    $data1['penyakit']            = $this->input->post('penyakit'); 
    $data1['nama_pasangan']       = $this->input->post('nama_suami_istri'); 
    $data1['nama_ayah']           = $this->input->post('nama_ayah'); 
    $data1['nama_ibu']            = $this->input->post('nama_ibu'); 
    $data1['alamat_ayah']         = $this->input->post('alamat_ortu'); 
    $data1['alamat_ayah']         = $this->input->post('alamat_ortu'); 
    $data1['no_rekening']         = $this->input->post('no_rekening'); 
    $data1['nama_bank']           = $this->input->post('nama_bank'); 
    $data1['file_photo']           =  $this->input->post('file_photo'); 
  
    
    $this->load->model('model_data_man_power');
    $query = $this->model_data_man_power->getdata1($key1); 
   
    $this->model_data_man_power->getinsert1($data1);

//sms
              $nama = $this->input->post('nama_pelamar'); 
              $id_pendaftaran = $this->input->post('no_pendaftaran');
              $keterangan = $this->input->post('keterangan');
       
              $mobile = $this->input->post('no_hp');
              $message = "(PEMBERITAHUAN PENERIMAAN KARYAWAN). Pelamar atas Nama : $nama . ID Pendaftaran : $id_pendaftaran. $keterangan. (HRD)";
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
   
	redirect('hrd/kontrak_kerja/');

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
   
  redirect('hrd/data_training/');

  }


  public function tahap_1()
  {
    $key = $this->input->post('id_pelamar');
    $data['id_pelamar']    = $this->input->post('id_pelamar');
    $data['catatan_tahap1']   = $this->input->post('catatan_hrd');
    $data['status']        = '5';

    $this->load->model('model_data_pelamar');
    $query = $this->model_data_pelamar->getdata($key);
    
    $this->model_data_pelamar->diterima($key,$data);  

  $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Training Tahap Pertama Selesai!!</div></div>");
   
  redirect('hrd/data_training');

  }


  public function tahap_2()
  {
    $key = $this->input->post('id_pelamar');
    $data['id_pelamar']    = $this->input->post('id_pelamar');
    $data['nama_area_tahap2']   = $this->input->post('nama_area');
    $data['tanggal_training']   = $this->input->post('tanggal_training');
    $data['tanggal_training_selesai']   = $this->input->post('tanggal_training_selesai');
    $data['jam_interview']   = $this->input->post('jam_training');
    $data['status']        = '6';

    $this->load->model('model_data_pelamar');
    $query = $this->model_data_pelamar->getdata($key);
    
    $this->model_data_pelamar->diterima($key,$data);  

//sms
              $nama = $this->input->post('nama_pelamar'); 
              $id_pendaftaran = $this->input->post('no_pendaftaran');
              $tanggal1 = tgl_indo($this->input->post('tanggal_training'));
              $tanggal2 = tgl_indo($this->input->post('tanggal_training_selesai'));
              $area = $this->input->post('nama_area');
              $jam = $this->input->post('jam_training');
       
              $mobile = $this->input->post('no_hp');
              $message = "(PEMBERITAHUAN JADWAL TRAINING AREA). Pelamar atas Nama : $nama . ID Pendaftaran : $id_pendaftaran. Proses Training akan dilaksanakan pada $tanggal1 sampai $tanggal2, Pukul : $jam, Lokasi : $area. (HRD)";
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
   
  redirect('hrd/data_training');

  }

  public function cetak_data_training()
  { 
      $data['isi'] = $this->model_data_pelamar->tampil_training();
    ob_start();
    $content = $this->load->view('hrd/data_training/tampilan_cetak_data_training',$data);
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