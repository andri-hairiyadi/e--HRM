<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	public function index()
	{
		//$data['isi'] 		  = $this->model_register->view_by($id);
		$data['content']='tampilan_pendaftaran';
		$this->load->view('tampilan_home',$data);
	}
		public function isi($id)
	{
  		$this->load->helper('tgl_indonesia');
		$data['nama_lengkap'] = $this->input->post('nama_lengkap');  
		$data['isi'] 		  = $this->model_register->view_by($id);
		$data['content']='tampilan_pendaftaran';
		$this->load->view('tampilan_home_pendaftaran',$data);
	}

		public function selesai($id)
	{
        
  		$this->load->helper('tgl_indonesia');
		$data['nama_lengkap'] = $this->input->post('nama_lengkap');  
		$data['isi'] 		  = $this->model_register->view_by($id);
		$data['content']='tampilan_pendaftaran_selesai';
		$this->load->view('tampilan_home',$data);
	}

 public function cetak($id)
  { 
     $this->load->helper('tgl_indonesia');
    $this->load->model('model_register');
    $data['isi'] = $this->model_register->view_by($id);

    ob_start();
    $content = $this->load->view('cetak_pendaftaran_online',$data);
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

	
   public function simpan()
    {
     
        $this->load->library('upload');
        $nmfile = "dokumen_pelamar-".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $path   = './style/dokumen_pelamar/'; //path folder
        $config['upload_path'] = './style/dokumen_pelamar'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '689048'; //maksimum besar file 2M
        $config['max_width']  = '8888'; //lebar maksimum 1288 px
        $config['max_height']  = '8888'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

 
        $this->upload->initialize($config);
                           $key = $this->input->post('id_pelamar');
                  $data['id_pelamar']    = $this->input->post('id_pelamar');
   
                    $data = array();

                    if($this->upload->do_upload('filename1')) {   
                        $dataInfo = $this->upload->data();

                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./style/dokumen_pelamar/'.$dataInfo['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 300;
                $config['height']= 400;
                $config['new_image']= './style/dokumen_pelamar/'.$dataInfo['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                
                $data['file_photo'] = $dataInfo['file_name'];          
        

                        
                      

                    }

                    if($this->upload->do_upload('filename2')) {   
                        $dataInfo = $this->upload->data();
                        $data['file_ktp_sim'] = $dataInfo['file_name'];
                 
                    }

                    if($this->upload->do_upload('filename3')) {   
                        $dataInfo = $this->upload->data();
                        $data['file_kk'] = $dataInfo['file_name'];
                    
                    } 
                    if($this->upload->do_upload('filename4')) {   
                        $dataInfo = $this->upload->data();
                        $data['file_ijazah'] = $dataInfo['file_name'];
                    
                    } 

                  
 
    $kode_awal = "AMI"; 
    $data['no_pendaftaran']           = "$kode_awal".time();  
    $data['nomor_ktp']                = $this->input->post('nomor_ktp');  
    $data['nama_pelamar']             = $this->input->post('nama_pelamar');  
//  $data['posisi']                   = $this->input->post('posisi'); 
    $data['tempat_lahir']             = $this->input->post('tempat_lahir'); 
    $data['tanggal_lahir']            = $this->input->post('tanggal_lahir'); 
    $data['jenis_kelamin']            = $this->input->post('jenis_kelamin'); 
    $data['agama']                    = $this->input->post('agama'); 

    $data['no_hp']                    = $this->input->post('no_hp'); 
    $data['alamat']                   = $this->input->post('alamat'); 
    $data['rt']                       = $this->input->post('rt'); 
    $data['rw']                       = $this->input->post('rw'); 
    $data['kelurahan']                = $this->input->post('kelurahan'); 
    $data['hobi']                     = $this->input->post('hobi'); 
    $data['pendidikan_terakhir']      = $this->input->post('pendidikan_terakhir'); 
    $data['nama_sekolah']             = $this->input->post('nama_sekolah'); 
    $data['tahun_lulus']              = $this->input->post('tahun_lulus'); 
    $data['nomor_ijazah']             = $this->input->post('nomor_ijazah'); 
    $data['pendidikan_informal']      = $this->input->post('informal'); 
    $data['skill']                    = $this->input->post('skill'); 
    $data['golongan_darah']           = $this->input->post('golongan_darah'); 
    $data['tinggi_badan']             = $this->input->post('tinggi_badan'); 
    $data['berat_badan']              = $this->input->post('berat_badan'); 
    $data['penyakit']                 = $this->input->post('penyakit'); 
    $data['nama_perusahaan']          = $this->input->post('nama_perusahaan'); 
    $data['masa_kerja']               = $this->input->post('masa_kerja'); 
    $data['jabatan']                  = $this->input->post('jabatan'); 
    $data['alasan_keluar']            = $this->input->post('alasan_keluar'); 
    $data['no_bpjs']                  = $this->input->post('no_bpjs'); 
    $data['no_rekening']              = $this->input->post('no_rekening'); 
    $data['nama_bank']                = $this->input->post('nama_bank'); 
    $data['gaji']                     = $this->input->post('gaji'); 
    $data['status']                   = '0';  

    $this->load->model('model_register');
    $query = $this->model_register->get_data($key); 
   
    $this->model_register->ubah($key,$data);
    $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Ubah!!</div></div>");
   
    $tujuan = "pendaftaran/selesai/$key";

    redirect($tujuan);

      }



	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */