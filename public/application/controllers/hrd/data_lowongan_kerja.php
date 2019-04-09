<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Data_lowongan_kerja extends CI_Controller {

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
  		$data['isi'] = $this->model_data_lowongan_kerja->tampil();
		$data['content']='hrd/data_lowongan_kerja/tampilan_lowongan_kerja';
		$this->load->view('hrd/tampilan_home',$data);
	}


	public function deskripsi($id)
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_hrd();
  		$data['isi'] = $this->model_data_lowongan_kerja->tampil_deskripsi($id);
		$data['detail']	= $this->model_data_pelamar->view_by($id);
		$data['add']	= $this->model_data_lowongan_kerja->view_by_add($id);
		$data['content']='hrd/data_lowongan_kerja/tampilan_deskripsi_lowongan_kerja';
		$this->load->view('hrd/tampilan_home',$data);

	}

public function simpan_lowongan()
    {
     
        $this->load->library('upload');
        $nmfile = "lowongan-".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $path   = './style/images/lowongan/'; //path folder
        $config['upload_path'] = './style/images/lowongan'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg/pdf'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '689048'; //maksimum besar file 2M
        $config['max_width']  = '8888'; //lebar maksimum 1288 px
        $config['max_height']  = '8888'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
         
                  $key = $this->input->post('id_lowongan');
                  $data['id_lowongan']    = $this->input->post('id_lowongan');

                    $data = array();

                    if($this->upload->do_upload('filefoto')) {   
                        $dataInfo = $this->upload->data();
                        $data['gambar'] = $dataInfo['file_name'];
                    }

   			$key = $this->input->post('id_lowongan');
       		$data['id_lowongan']         = $this->input->post('id_lowongan');
            $data['nama_lowongan']       = $this->input->post('nama_lowongan'); 
            $data['tanggal_awal']        = $this->input->post('tanggal_awal'); 
            $data['tanggal_akhir']       = $this->input->post('tanggal_akhir'); 
           
    
    $this->load->model('model_data_lowongan_kerja');
    $query = $this->model_data_lowongan_kerja->getdatalowongan($key); 
   
    $this->model_data_lowongan_kerja->simpanlowongan($data);
    $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Tambahkan!!</div></div>");
    
    redirect("hrd/data_lowongan_kerja/");
    
      }



  public function simpan_ubah_lowongan(){
        $this->load->library('upload');
        $nmfile = "lowongan-".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $path   = './style/images/lowongan/'; //path folder
        $config['upload_path'] = './style/images/lowongan'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '689048'; //maksimum besar file 2M
        $config['max_width']  = '8888'; //lebar maksimum 1288 px
        $config['max_height']  = '8888'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
        
       $id_lowongan      = $this->input->post('id_lowongan'); /* variabel id gambar */
       $gbrlama     = $this->input->post('gbrlama'); /* variabel file gambar lama */
  
       if($_FILES['filefoto']['name'])
       {
           if ($this->upload->do_upload('filefoto'))
           {
               $gbr = $this->upload->data();
               $data = array(
                 'gambar' =>$gbr['file_name'],
               );
 
               @unlink($path.$gbrlama);//menghapus gambar lama, variabel dibawa dari form
 
               $where =array('id_lowongan'=>$id_lowongan); //array where query sebagai identitas pada saat query dijalankan
               $this->model_data_lowongan_kerja->get_update($data,$where); //akses model untuk menyimpan ke database
            
            $key1 = $this->input->post('id_lowongan');
       		$data1['id_lowongan']          = $this->input->post('id_lowongan');
            $data1['nama_lowongan']       = $this->input->post('nama_lowongan'); 
            $data1['tanggal_awal']        = $this->input->post('tanggal_awal'); 
            $data1['tanggal_akhir']       = $this->input->post('tanggal_akhir'); 
           
           
            $this->model_data_lowongan_kerja->update_lowongan($key1,$data1);


               $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Profil Berhasil Diubah</div></div>"); //pesan yang muncul jika berhasil diupload pada session flashdata
               redirect("hrd/data_lowongan_kerja/");//jika berhasil maka akan ditampilkan view vupload
 

           }else{  /* jika upload gambar gagal maka akan menjalankan skrip ini */
               $er_upload=$this->upload->display_errors(); /* untuk melihat error uploadnya apa */
               //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
               $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">error !! ".$er_upload."</div></div>");
                redirect("hrd/data_lowongan_kerja/");//jika gagal maka akan ditampilkan form upload
           }
       }else{ /* jika file foto tidak ada maka query yg dijalankan adalah skrip ini  */
 
            $key1 = $this->input->post('id_lowongan');
		   $data1['id_lowongan']          = $this->input->post('id_lowongan');
            $data1['nama_lowongan']       = $this->input->post('nama_lowongan'); 
            $data1['tanggal_awal']        = $this->input->post('tanggal_awal'); 
            $data1['tanggal_akhir']       = $this->input->post('tanggal_akhir'); 

  
            $this->model_data_lowongan_kerja->update_lowongan($key1,$data1);

           $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Profil Berhasil Diubah</div></div>");
     	   redirect("hrd/data_lowongan_kerja/");

       }
   }

		public function cek123ok()
	{
		$key = $this->input->post('id_lowongan');
		$data['id_lowongan']	 	= $this->input->post('id_lowongan');
		$data['nama_lowongan'] 	    = $this->input->post('nama_lowongan'); 
		$data['batas_pendaftaran'] 	    = $this->input->post('tanggal_batas'); 


		$this->load->model('model_data_lowongan_kerja');
		$query = $this->model_data_lowongan_kerja->getdatalowongan($key);
		
		if ($query->num_rows()>0)
		{
			$this->model_data_lowongan_kerja->ubahlowongan($key,$data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil Diubah!!</div></div>");
   
		}
		
		else
		{
			$this->model_data_lowongan_kerja->simpanlowongan($data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil DItambahkan!!</div></div>");
   
		}

		redirect("hrd/data_lowongan_kerja/");

	}

	public function hapus_lowongan($id) {

	$this->load->model('model_data_lowongan_kerja');
	$this->model_data_lowongan_kerja->hapus_lowongan($id);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil Di Hapus!!</div></div>");
   
	redirect("hrd/data_lowongan_kerja/");
	}


	public function simpan_deskripsi()
	{
		$back = $this->input->post('id_lowongan');
		$key = $this->input->post('id_deskripsi');
		$data['id_deskripsi']	 	= $this->input->post('id_deskripsi');
		$data['id_lowongan']	 	= $this->input->post('id_lowongan');
		$data['deskripsi'] 			= $this->input->post('deskripsi'); 


		$this->load->model('model_data_lowongan_kerja');
		$query = $this->model_data_lowongan_kerja->getdatadeskripsi($key);
		
		if ($query->num_rows()>0)
		{
			$this->model_data_lowongan_kerja->ubahdeskripsi($key,$data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil Diubah!!</div></div>");
   
		}
		
		else
		{
			$this->model_data_lowongan_kerja->simpandeskripsi($data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil DItambahkan!!</div></div>");
   
		}
	

		redirect("hrd/data_lowongan_kerja/deskripsi/$back");

	}

	
	public function hapus_deskripsi($id) {
	$back = $_GET['lowongan'];
	$this->load->model('model_data_lowongan_kerja');
	$this->model_data_lowongan_kerja->hapus_deskripsi($id);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil Di Hapus!!</div></div>");
	redirect("hrd/data_lowongan_kerja/deskripsi/$back");
	}

		public function persyaratan($id)
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_hrd();
  		$data['isi'] = $this->model_data_lowongan_kerja->tampil_persyaratan($id);
		$data['detail']	= $this->model_data_pelamar->view_by($id);
		$data['add']	= $this->model_data_lowongan_kerja->view_by_add($id);
		$data['content']='hrd/data_lowongan_kerja/tampilan_persyaratan_lowongan_kerja';
		$this->load->view('hrd/tampilan_home',$data);
	}

	public function simpan_persyaratan()
	{
		$back = $this->input->post('id_lowongan');
		$key = $this->input->post('id_persyaratan');
		$data['id_persyaratan']	 	= $this->input->post('id_persyaratan');
		$data['id_lowongan']	 	= $this->input->post('id_lowongan');
		$data['persyaratan'] 			= $this->input->post('persyaratan'); 


		$this->load->model('model_data_lowongan_kerja');
		$query = $this->model_data_lowongan_kerja->getdatapersyaratan($key);
		
		if ($query->num_rows()>0)
		{
			$this->model_data_lowongan_kerja->ubahpersyaratan($key,$data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil Diubah!!</div></div>");
   
		}
		
		else
		{
			$this->model_data_lowongan_kerja->simpanpersyaratan($data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil DItambahkan!!</div></div>");
   
		}
	

		redirect("hrd/data_lowongan_kerja/persyaratan/$back");

	}

	
	public function hapus_persyaratan($id) {
	$back = $_GET['lowongan'];
	$this->load->model('model_data_lowongan_kerja');
	$this->model_data_lowongan_kerja->hapus_persyaratan($id);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil Di Hapus!!</div></div>");
	redirect("hrd/data_lowongan_kerja/persyaratan/$back");
	}

	public function detail($id)
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_hrd();
		$data['detail']	= $this->model_data_pelamar->view_by($id);
		$data['content']='hrd/data_lowongan_kerja/tampilan_detail_data_lowongan_kerja';
		$this->load->view('hrd/tampilan_home',$data);

	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */