<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Data_pengguna extends CI_Controller {

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
    $data['content']='admin/data_pengguna/tampilan_data_pengguna';
    $data['data'] = $this->model_data_user->login_admin();
    $data['isi']  = $this->model_data_user->tampil_pengguna_sistem();
      $data['lowongan'] = $this->model_data_lowongan_kerja->tampil();

    $this->load->view('admin/tampilan_home',$data);
  }

  public function admin()
  { 
    $data['nama'] = $this->session->userdata('nama');
    $data['id_user'] = $this->session->userdata('id_user');
    $data['data'] = $this->model_data_user->login_admin();
    $data['isi']  = $this->model_data_user->tampil_pengguna_sistem_admin();
    $data['content']='admin/data_pengguna/tampilan_data_admin';
    $this->load->view('admin/tampilan_home',$data);
  }
    public function hrd()
  { 
    $data['nama'] = $this->session->userdata('nama');
    $data['id_user'] = $this->session->userdata('id_user');
    $data['data'] = $this->model_data_user->login_admin();
    $data['isi']  = $this->model_data_user->tampil_pengguna_sistem_hrd();
    $data['content']='admin/data_pengguna/tampilan_data_hrd';
    $this->load->view('admin/tampilan_home',$data);
  }
    public function area()
  { 
    $data['nama'] = $this->session->userdata('nama');
    $data['id_user'] = $this->session->userdata('id_user');
    $data['data'] = $this->model_data_user->login_admin();
    $data['isi']  = $this->model_data_user->tampil_pengguna_sistem_area();
    $data['content']='admin/data_pengguna/tampilan_data_area';
    $this->load->view('admin/tampilan_home',$data);
  }
      public function man_power()
  { 
    $data['nama'] = $this->session->userdata('nama');
    $data['id_user'] = $this->session->userdata('id_user');
    $data['data'] = $this->model_data_user->login_admin();
    $data['isi']  = $this->model_data_user->tampil_pengguna_sistem_manpower();
    $data['content']='admin/data_pengguna/tampilan_data_manpower';
    $this->load->view('admin/tampilan_home',$data);
  }
      public function manager()
  { 
    $data['nama'] = $this->session->userdata('nama');
    $data['id_user'] = $this->session->userdata('id_user');
    $data['data'] = $this->model_data_user->login_admin();
    $data['isi']  = $this->model_data_user->tampil_pengguna_sistem_manager();
    $data['content']='admin/data_pengguna/tampilan_data_manager';
    $this->load->view('admin/tampilan_home',$data);
  }



  public function tambah_admin()
  { 
    $data['nama'] = $this->session->userdata('nama');
    $data['id_user'] = $this->session->userdata('id_user');
    $data['data'] = $this->model_data_user->login_admin();
    $data['content']='admin/data_pengguna/tampilan_tambah_data_admin';
    $data['isi']  = $this->model_data_user->tampil_pengguna_sistem_admin();

    $this->load->view('admin/tampilan_home',$data);
  }
    public function ubah_admin($id)
  { 
    $data['nama'] = $this->session->userdata('nama');
    $data['id_user'] = $this->session->userdata('id_user');
    $data['data'] = $this->model_data_user->login_admin();
    $data['content']='admin/data_pengguna/tampilan_ubah_data_admin';
    $data['isi']  = $this->model_data_user->tampil_pengguna_sistem_admin_ubah($id);
    $this->load->view('admin/tampilan_home',$data);
  }

  public function update_admin(){
        $key = $this->input->post('id_user');
        $data = $this->input->post(null,true);
        

        $arr['nama_user']= $data['nama_user'];
        $arr['username']= $data['username'];
        if($data['password']!=''){
            
       
            $arr['password'] = md5($data['password']);
        }
        
        $update = $this->db->update('data_user',$arr,array('id_user'=>$key));
        
        if($update){
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">username atau password berhasil diubah!!</div></div>");
            redirect('admin/data_pengguna/admin');
        }
    }

       public function hapus_admin($id) {
  $this->load->model('model_data_user');
  $this->model_data_user->delete($id);
  $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\"><b>Data berhasil di hapus</b></div></div>");
     
  redirect('admin/data_pengguna/admin');
  }


///////////

    public function tambah_hrd()
  { 
    $data['nama'] = $this->session->userdata('nama');
    $data['id_user'] = $this->session->userdata('id_user');
    $data['data'] = $this->model_data_user->login_admin();
    $data['content']='admin/data_pengguna/tampilan_tambah_data_hrd';
    $this->load->view('admin/tampilan_home',$data);
  }
  
  public function ubah_hrd($id)
  { 
    $data['nama'] = $this->session->userdata('nama');
    $data['id_user'] = $this->session->userdata('id_user');
    $data['data'] = $this->model_data_user->login_admin();
    $data['content']='admin/data_pengguna/tampilan_ubah_data_hrd';
    $data['isi']  = $this->model_data_user->tampil_pengguna_sistem_hrd_ubah($id);
    $this->load->view('admin/tampilan_home',$data);
  }

  public function update_hrd(){
        $key = $this->input->post('id_user');
        $data = $this->input->post(null,true);
        

        $arr['nama_user']= $data['nama_user'];
        $arr['username']= $data['username'];
        if($data['password']!=''){
            

            $arr['password'] = md5($data['password']);
        }
        
        $update = $this->db->update('data_user',$arr,array('id_user'=>$key));
        
        if($update){
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">username atau password berhasil diubah!!</div></div>");
            redirect('admin/data_pengguna/hrd');
        }
    }

       public function hapus_hrd($id) {
  $this->load->model('model_data_user');
  $this->model_data_user->delete($id);
  $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\"><b>Data berhasil di hapus</b></div></div>");
     
  redirect('admin/data_pengguna/hrd');
  }



 /////// 
    public function tambah_area()
  { 
    $data['nama'] = $this->session->userdata('nama');
    $data['id_user'] = $this->session->userdata('id_user');
    $data['data'] = $this->model_data_user->login_admin();
    $data['area']  = $this->model_data_area_kerja->tampil();

    $data['content']='admin/data_pengguna/tampilan_tambah_data_area';
    $this->load->view('admin/tampilan_home',$data);
  }

  public function ubah_area($id)
  { 
    $data['nama'] = $this->session->userdata('nama');
    $data['id_user'] = $this->session->userdata('id_user');
    $data['data'] = $this->model_data_user->login_admin();
        $data['area']  = $this->model_data_area_kerja->tampil();

    $data['content']='admin/data_pengguna/tampilan_ubah_data_area';
    $data['isi']  = $this->model_data_user->tampil_pengguna_sistem_area_ubah($id);
    $this->load->view('admin/tampilan_home',$data);
  }

  public function update_area(){
        
        $key = $this->input->post('id_user');
        $data = $this->input->post(null,true);
        

        $arr['nama_user']= $data['nama_user'];
        $arr['username']= $data['username'];
        if($data['password']!=''){
            

            $arr['password'] = md5($data['password']);
        }
        
        $update = $this->db->update('data_user',$arr,array('id_user'=>$key));
        
        if($update){
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">username atau password berhasil diubah!!</div></div>");
            redirect('admin/data_pengguna/area');
        }
    }

       public function hapus_area($id) {
  $this->load->model('model_data_user');
  $this->model_data_user->delete($id);
  $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\"><b>Data berhasil di hapus</b></div></div>");
     
  redirect('admin/data_pengguna/area');
  }



    public function tambah_man_power()
  { 
    $data['nama'] = $this->session->userdata('nama');
    $data['id_user'] = $this->session->userdata('id_user');
    $data['data'] = $this->model_data_user->login_admin();
    $data['manpower']  = $this->model_data_man_power->tampil(); 

    $data['content']='admin/data_pengguna/tampilan_tambah_data_man_power';
    $this->load->view('admin/tampilan_home',$data);
  }

 public function ubah_manpower($id)
  { 
    $data['nama'] = $this->session->userdata('nama');
    $data['id_user'] = $this->session->userdata('id_user');
    $data['data'] = $this->model_data_user->login_admin();
    $data['content']='admin/data_pengguna/tampilan_ubah_data_manpower';
    $data['isi']  = $this->model_data_user->tampil_pengguna_sistem_manpower_ubah($id);
    $this->load->view('admin/tampilan_home',$data);
  }

  public function update_manpower(){
         $key = $this->input->post('id_user');
        $data = $this->input->post(null,true);
        

        $arr['nama_user']= $data['nama_user'];
        $arr['username']= $data['username'];
        if($data['password']!=''){
            

            $arr['password'] = md5($data['password']);
        }
        
        $update = $this->db->update('data_user',$arr,array('id_user'=>$key));
        
        if($update){
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">username atau password berhasil diubah!!</div></div>");
            redirect('admin/data_pengguna/man_power');
        }
    }

       public function hapus_manpower($id) {
  $this->load->model('model_data_user');
  $this->model_data_user->delete($id);
  $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\"><b>Data berhasil di hapus</b></div></div>");
     
  redirect('admin/data_pengguna/man_power');
  }


    public function tambah_manager()
  { 
    $data['nama'] = $this->session->userdata('nama');
    $data['id_user'] = $this->session->userdata('id_user');
    $data['data'] = $this->model_data_user->login_admin();
    $data['content']='admin/data_pengguna/tampilan_tambah_data_manager';
    $this->load->view('admin/tampilan_home',$data);
  }

 public function ubah_manager($id)
  { 
    $data['nama'] = $this->session->userdata('nama');
    $data['id_user'] = $this->session->userdata('id_user');
    $data['data'] = $this->model_data_user->login_admin();
    $data['content']='admin/data_pengguna/tampilan_ubah_data_manager';
    $data['isi']  = $this->model_data_user->tampil_pengguna_sistem_manager_ubah($id);
    $this->load->view('admin/tampilan_home',$data);
  }

  public function update_manager(){
         $key = $this->input->post('id_user');
        $data = $this->input->post(null,true);
        

        $arr['nama_user']= $data['nama_user'];
        $arr['username']= $data['username'];
        if($data['password']!=''){
 
            $arr['password'] = md5($data['password']);
        }
        
        $update = $this->db->update('data_user',$arr,array('id_user'=>$key));
        
        if($update){
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">username atau password berhasil diubah!!</div></div>");
            redirect('admin/data_pengguna/manager');
        }
    }

       public function hapus_manager($id) {
  $this->load->model('model_data_user');
  $this->model_data_user->delete($id);
  $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\"><b>Data berhasil di hapus</b></div></div>");
     
  redirect('admin/data_pengguna/manager');
  }










  public function ubah($Id)
  {

    $data['nama'] = $this->session->userdata('nama');
    $data['upload'] = $this->session->userdata('upload');
    $data['id_user'] = $this->session->userdata('id_user');
    $data['content']='admin/data_pengguna/edit_data_data_pengguna';
    $data['data'] = $this->model_data_user->login_admin();
    $data['edit'] = $this->model_data_user->edit_login_admin($Id);
    $this->load->view('admin/tampilan_home',$data);

  }



public function simpan_admin()
  {
    $key = $this->input->post('id_user');
    $data['id_user']       = $this->input->post('id_user'); 
    $data['nama_user']      = $this->input->post('nama_user'); 
    $data['username']      = $this->input->post('username'); 
    $data['password']      = md5($this->input->post('password')); 
    $data['level']         = '1'; 
    $data['photo']         = 'profil_user.png'; 
   
     $this->load->model('model_data_user');

      $this->model_data_user->getinsert($data);
    

    $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Tambahkan!!</div></div>");
  

    redirect('admin/data_pengguna/admin');

  }


public function simpan_hrd()
  {
    $key = $this->input->post('id_user');
    $data['id_user']       = $this->input->post('id_user'); 
    $data['nama_user']      = $this->input->post('nama_user'); 
    $data['username']      = $this->input->post('username'); 
    $data['password']      = md5($this->input->post('password')); 
    $data['level']         = '2'; 
    $data['photo']         = 'profil_user.png'; 
   
     $this->load->model('model_data_user');

      $this->model_data_user->getinsert($data);
    

    $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Tambahkan!!</div></div>");
  

    redirect('admin/data_pengguna/hrd');

  }

  public function simpan_area()
  {
    $key = $this->input->post('id_user');
    $data['id_user']       = $this->input->post('id_user'); 
    $data['nama_user']      = $this->input->post('nama_user'); 
    $data['username']      = $this->input->post('username'); 
    $data['password']      = md5($this->input->post('password')); 
    $data['level']         = '3'; 
    $data['photo']         = 'profil_user.png'; 
   
     $this->load->model('model_data_user');

      $this->model_data_user->getinsert($data);
      
   
    $id_update = $this->db->insert_id();
    $key1 = $this->input->post('id_area_kerja');
    $data1['id_area_kerja']  = $this->input->post('id_area_kerja');
    $data1['id_user']   = $id_update;

    $this->model_data_user->update_user_area($key1,$data1);

    $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Tambahkan!!</div></div>");
  

    redirect('admin/data_pengguna/hrd');

  }

    public function simpan_man_power()
  {
    $key = $this->input->post('id_user');
    $data['id_user']       = $this->input->post('id_user'); 
    $data['nama_user']      = $this->input->post('nama_user'); 
    $data['username']      = $this->input->post('username'); 
    $data['password']      = md5($this->input->post('password')); 
    $data['level']         = '4'; 
    $data['photo']         = 'profil_user.png'; 
   
     $this->load->model('model_data_user');

      $this->model_data_user->getinsert($data);
      
   
    $id_update = $this->db->insert_id();
    $key1 = $this->input->post('id_man_power');
    $data1['id_man_power']  = $this->input->post('id_man_power');
    $data1['id_user']   = $id_update;

    $this->model_data_user->update_user_man_power($key1,$data1);

    $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Tambahkan!!</div></div>");
  

    redirect('admin/data_pengguna/man_power');

  }
 



public function simpan_manager()
  {
    $key = $this->input->post('id_user');
    $data['id_user']       = $this->input->post('id_user'); 
    $data['nama_user']      = $this->input->post('nama_user'); 
    $data['username']      = $this->input->post('username'); 
    $data['password']      = md5($this->input->post('password')); 
    $data['level']         = '5'; 
    $data['photo']         = 'profil_user.png'; 
   
     $this->load->model('model_data_user');

      $this->model_data_user->getinsert($data);
    

    $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Tambahkan!!</div></div>");
  

    redirect('admin/data_pengguna/manager');

  }

      public function hapus($id){

     $this->db->where('id_user',$id);
     $query = $this->db->get('data_user');
     $row = $query->row();

     unlink("./style/images/user/$row->upload");

     $this->db->delete('data_user', array('id_user' => $id));
       $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\"><b>Data Success to Delete</b></div></div>");
     
     redirect('admin/data_penggunae/user/');

}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */