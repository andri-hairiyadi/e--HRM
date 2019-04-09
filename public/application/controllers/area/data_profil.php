<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Data_profil extends CI_Controller {

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
		$data['data']	= $this->model_data_user->login_area();
		$data['isi']	= $this->model_data_user->login_area();
		$data['content']='area/data_profil/tampilan_data_profil';
		$this->load->view('area/tampilan_home',$data);
	}
	

	public function tambah()
	{	
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_area();
		$data['content']='area/data_profil/tampilan_tambah_data_profil';
		$this->load->view('area/tampilan_home',$data);
	}
	
		public function ubah($id)
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_area();
		$data['edit']	= $this->model_data_area_kerja->view_by($id);
		$data['content']='area/data_profil/edit_data_profil';
		$this->load->view('area/tampilan_home',$data);

	}
	
		public function detail($id)
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_area();
		$data['detail']	= $this->model_data_user->view_by($id);
		$data['content']='area/data_profil/detail_data_profil';
		$this->load->view('area/tampilan_home',$data);

	}

	    public function hapus($id) {
	$this->load->model('model_data_user');
	$this->model_data_user->delete($id);
	$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\"><b>Data berhasil di hapus</b></div></div>");
     
	redirect('area/data_profil/');
	}



		
		public function simpan_profil()
  {
    $key = $this->input->post('id_area_kerja');
    $data['id_area_kerja']    = $this->input->post('id_area_kerja');
    $data['nama_area']        = $this->input->post('nama_area');
    $data['alamat_area']      = $this->input->post('alamat_area'); 
    $data['kota_area']     	  = $this->input->post('kota_area'); 
    $data['email_area']       = $this->input->post('email_area'); 
    $data['no_hp_area']       = $this->input->post('no_hp_area'); 
    $data['jenis_area']       = $this->input->post('jenis_area'); 
    $data['nama_manajer']     = $this->input->post('nama_manajer'); 
    $data['email_manajer']    = $this->input->post('email_manajer'); 
    $data['no_manajer']       = $this->input->post('no_manajer'); 
    $data['long']             = $this->input->post('long'); 
    $data['late']             = $this->input->post('late'); 
  
    $this->load->model('model_data_area_kerja');
    $query = $this->model_data_area_kerja->getdata($key);
		
		if ($query->num_rows()>0)
		{
			$this->model_data_area_kerja->getupdate($key,$data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Ubah!!</div></div>");
   
		}
		
		else
		{
			$this->model_data_area_kerja->getinsert($data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Tambahkan!!</div></div>");
   
		}
    redirect('area/data_profil');

  }



  public function ubah_photo_profil(){
        $this->load->library('upload');
        $nmfile = "user-".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $path   = './style/images/user/'; //path folder
        $config['upload_path'] = './style/images/user'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg/pdf'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '689048'; //maksimum besar file 2M
        $config['max_width']  = '8888'; //lebar maksimum 1288 px
        $config['max_height']  = '8888'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
        $this->upload->initialize($config);
        
       $id_user      = $this->input->post('id_user'); /* variabel id gambar */
       $gbrlama     = $this->input->post('gbrlama'); /* variabel file gambar lama */
  
       if($_FILES['filefoto']['name'])
       {
           if ($this->upload->do_upload('filefoto'))
           {
               $gbr = $this->upload->data();
               $data = array(
                 'photo' =>$gbr['file_name'],
               );
 
               @unlink($path.$gbrlama);//menghapus gambar lama, variabel dibawa dari form
 
               $where =array('id_user'=>$id_user); //array where query sebagai identitas pada saat query dijalankan
               $this->model_data_user->ubah_photo($data,$where); //akses model untuk menyimpan ke database

               $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Profil Berhasil Diubah</div></div>"); //pesan yang muncul jika berhasil diupload pada session flashdata
               redirect('area/data_profil'); //jika berhasil maka akan ditampilkan view vupload
 

           }else{  /* jika upload gambar gagal maka akan menjalankan skrip ini */
               $er_upload=$this->upload->display_errors(); /* untuk melihat error uploadnya apa */
               //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
               $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">error !! ".$er_upload."</div></div>");
               redirect('area/data_profil'); //jika gagal maka akan ditampilkan form upload
           }
       }else{ /* jika file foto tidak ada maka query yg dijalankan adalah skrip ini  */
 
            

           $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Profil Berhasil Diubah</div></div>");
           redirect('area/data_profil'); /* jika berhasil maka akan kembali ke home upload */
       }
   }
}

