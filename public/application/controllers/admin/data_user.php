<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Data_user extends CI_Controller {

public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('masuk');
		} 

		$this->load->helper('text');
	}

	public function index()
	{	
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
    $data['isi'] = $this->model_data_user->admin_yayasan();
		$data['data']	= $this->model_data_user->login_admin_yayasan();
		$data['content']='admin_yayasan/data_user/tampilan_data_user';
		$this->load->view('admin_yayasan/tampilan_home',$data);
	}

 
		public function level()
	{	
		$key           = $this->input->post('level');
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['isi']	= $this->model_data_user->cari_level($key);
		$data['data']	= $this->model_data_user->login_admin_yayasan();
		$data['content']='admin_yayasan/data_user/tampilan_level_data_user';
		$this->load->view('admin_yayasan/tampilan_home',$data);
	}

		public function tambah_user()
	{	
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
    $data['siswa'] = $this->model_data_siswa->admin_sdit();
    $data['pegawai'] = $this->model_data_user->pegawai();
		$data['data']	= $this->model_data_user->login_admin_yayasan();
		$data['content']='admin_yayasan/data_user/tampilan_tambah_data_user';
		$this->load->view('admin_yayasan/tampilan_home',$data);
	}
	
    public function ubah($id)
  {
    $data['nama'] = $this->session->userdata('nama');
    $data['id_user'] = $this->session->userdata('id_user');
    $data['pegawai'] = $this->model_data_user->kepsek_sdit_edit();
    
    $data['data'] = $this->model_data_user->login_admin_yayasan();
    $data['edit'] = $this->model_data_user->view_by($id);
    $data['content']='admin_yayasan/data_user/ubah_data_user';
    $this->load->view('admin_yayasan/tampilan_home',$data);


  } 


/////////////////////////////simpan admin

public function simpan()
  {
    $key = $this->input->post('id_user');
    $data['id_user']       = $this->input->post('id_user'); 
    $data['id_sekolah']    = $this->input->post('level'); 
    $data['username']      = $this->input->post('username'); 
    $data['password']      = md5($this->input->post('password')); 
    $data['level']         = $this->input->post('level'); 
    $data['photo']         = 'profil_user.png'; 
   
    $this->load->model('model_data_user');

    $this->model_data_user->getinsert($data);    
   
    $id_update = $this->db->insert_id();
    $key1 = $this->input->post('id_pegawai');
    $data1['id_pegawai']  = $this->input->post('id_pegawai');
    $data1['id_user']     = $id_update;

    $this->model_data_user->update_user_kepsek_sdit($key1,$data1);

    $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Tambahkan!!</div></div>");
  
    redirect('admin_yayasan/data_user/');

  }


public function simpan_ubah()
  {
    $key = $this->input->post('id_user');
    $data['id_user']       = $this->input->post('id_user'); 
    $data['id_sekolah']    = $this->input->post('level'); 
    $data['username']      = $this->input->post('username'); 
    $data['password']      = md5($this->input->post('password')); 
    $data['level']         = $this->input->post('level'); 
    $data['photo']         = 'profil_user.png'; 
   
    $this->load->model('model_data_user');
    $query = $this->model_data_user->getdata($key);
    
    if ($query->num_rows()>0)
    {
      $this->model_data_user->getupdate($key,$data);
      $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Ubah!!</div></div>");
   
    }
    
    else
    {
      $this->model_data_user->getinsert($data);
      $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Tambahkan!!</div></div>");
   
    }
       redirect('admin_yayasan/data_user/');

  }

public function hapus($id){

     $this->db->where('id_user',$id);
     $query = $this->db->get('data_user');
     $row = $query->row();

     unlink("./style/images/user/$row->photo");

     $this->db->delete('data_user', array('id_user' => $id));
       $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\"><b>Data berhasil dihapus</b></div></div>");
     
     redirect('admin_yayasan/data_user');

}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */