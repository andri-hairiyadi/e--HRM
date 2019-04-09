<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Info_lowongan extends CI_Controller {

public function __construct() {
		parent::__construct();
	$this->load->helper('tgl_indonesia');
		$this->load->helper('text');
	}

	public function index()
	{
		$data['isi'] = $this->model_data_lowongan_kerja->tampil_lowongan();
		$data['deskripsi'] = $this->model_data_lowongan_kerja->tampil_deskripsi_awal();
		$data['persyaratan'] = $this->model_data_lowongan_kerja->tampil_persyaratan_awal();
		$data['lowongan'] = $this->model_data_lowongan_kerja->tampil();
		$data['content']='tampilan_info_lowongan';
		$this->load->view('tampilan_home',$data);
	}

	public function cara_pendaftaran()
	{

		$data['content']='tampilan_cara_pendaftaran';
		$this->load->view('tampilan_home',$data);
	}

		public function pilih($id)
	{
		
		$data['lowongan'] = $this->model_data_lowongan_kerja->tampil();
		$data['deskripsi'] = $this->model_data_lowongan_kerja->tampil_deskripsi($id);
		$data['persyaratan'] = $this->model_data_lowongan_kerja->tampil_persyaratan($id);
		$data['isi'] = $this->model_data_lowongan_kerja->tampil_halaman_lowongan($id);
		$data['content']='tampilan_halaman_lowongan';
		$this->load->view('tampilan_home',$data);
	}

		public function daftar($id)
	{
		
		$data['lowongan'] = $this->model_data_lowongan_kerja->tampil();
		$data['deskripsi'] = $this->model_data_lowongan_kerja->tampil_deskripsi($id);
		$data['persyaratan'] = $this->model_data_lowongan_kerja->tampil_persyaratan($id);
		$data['isi'] = $this->model_data_lowongan_kerja->tampil_halaman_lowongan($id);
		$data['content']='tampilan_daftar_lowongan';
		$this->load->view('tampilan_home',$data);
	}

	

	public function cek_data_pendaftaran()
	{
	
		$data['content']='tampilan_cek_data_pendaftaran';
		$this->load->view('tampilan_home',$data);
	}

       public function cek_pendaftaran()
    {

        $key            = $this->input->post('nomor_pendaftaran');
        $query = $this->model_register->cek_pendaftaran($key);

            $row = $query->row();
            $tampil = $row->id_pelamar;
            $nama_pelamar = $row->nama_pelamar;
            $cek = $row->status;

   		if ($cek == '0') {
   			$abc = "info_lowongan/cek_data_pendaftaran/$tampil";
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Pendaftaran Belum Diperiksa!!</div></div>");
            redirect($abc);
   		}
   		
   		elseif ($cek == '1') {
   			$abc = "info_lowongan/cek_data_pendaftaran/$tampil";
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Selamat Anda Dinyatakan Lulus!!</div></div>");
            redirect($abc);
   		} 

   		 elseif ($cek == '2') {
   			$abc = "info_lowongan/cek_data_pendaftaran/$tampil";
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Mohon Maaf, Anda Dinyatakan Tidak Lulus!!</div></div>");
            redirect($abc);
   		}
   		 elseif ($cek == '') {
   			$abc = "info_lowongan/cek_data_pendaftaran/$tampil";
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Kode Pendaftaran Salah atau Tidak ada!!</div></div>");
            redirect($abc);
   		}


   
  }
		
		public function selesai($id)
	{
    	$this->load->helper('tgl_indonesia');
		$data['nama_lengkap'] = $this->input->post('nama_lengkap');  
		$data['isi'] 		  = $this->model_register->view_by($id);
		$data['content']	  ='tampilan_register_selesai';
		$this->load->view('tampilan_home',$data);
	}

				public function simpan_pendaftaran()
				  {
				    $awal = "AMI"; 
				    $data['kode_aktivasi']               = "$awal".time();
				    $data['nomor_ktp']                   = $this->input->post('nomor_ktp');  
				    $data['nama_pelamar']                = $this->input->post('nama_pelamar');  
				    $data['no_hp']                	     = $this->input->post('no_hp');  
				    $data['jenis_kelamin']               = $this->input->post('jk'); 
				    $data['alamat']             	     = $this->input->post('alamat'); 
				    $data['posisi'] 		             = $this->input->post('posisi');  
				    $data['tanggal_daftar']              = date('y-m-d'); 
				    $data['jam_daftar']                  = date("H:i:s", time()+60*60*5);

				    $this->load->model('model_register');

					  $this->model_register->getinsert($data);

				    //sms
				      $nama = $this->input->post('nama_pelamar'); 
				      $id_pendaftaran = "$awal".time();
				      $mobile = $this->input->post('no_hp');
				      $message = "(INFORMASI PENDAFTARAN), Registrasi PT. Andesta Mandiri Indonesia berhasil. Nama Anda : $nama. ID Registrasi : $id_pendaftaran. Silahkan Mengisi Form Formulir di e-hrm.com/daftar. (ADMIN)";
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
				    $tujuan = "info_lowongan/selesai/$lokasi";

				    redirect($tujuan);

				  }



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */