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
    $data['content']='hrd/profil/tampilan_profil';
    $data['isi']  = $this->model_data_user->profil_hrd();
    $data['data'] = $this->model_data_user->login_hrd();
    $this->load->view('hrd/tampilan_home',$data);
  }

  public function ubah_profil(){
        $this->load->library('upload');
        $nmfile = "profil_-".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $path   = './style/images/user/'; //path folder
        $config['upload_path'] = './style/images/user'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
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
                  'level'      =>'1'
               );
 
               @unlink($path.$gbrlama);//menghapus gambar lama, variabel dibawa dari form
 
               $where =array('id_user'=>$id_user); //array where query sebagai identitas pada saat query dijalankan
               $this->model_data_user->get_update($data,$where); //akses model untuk menyimpan ke database
 
            $key1 = $this->input->post('id_pegawai');
            $data1['id_pegawai']          = $this->input->post('id_pegawai');
            $data1['nama_pegawai']        = $this->input->post('nama_pegawai'); 
            $data1['nip']                 = $this->input->post('nip'); 
            $data1['jenis_kelamin']       = $this->input->post('jenis_kelamin'); 
            $data1['pendidikan_terakhir'] = $this->input->post('pendidikan_terakhir'); 
            $data1['status_kepegawaian']  = $this->input->post('status_kepegawaian'); 
            $data1['jabatan']             = $this->input->post('jabatan'); 
            $data1['status_sertifikasi']  = $this->input->post('status_sertifikasi'); 
            $data1['no_hp']               = $this->input->post('no_hp'); 
            $data1['alamat']              = $this->input->post('alamat'); 
            $data1['email']               = $this->input->post('email'); 
            $data1['tempat_lahir']        = $this->input->post('tempat_lahir'); 
            $data1['tanggal_lahir']       = $this->input->post('tanggal_lahir'); 
   
         
            $this->model_data_user->update_hrd($key1,$data1);


               $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Profil Berhasil Diubah</div></div>"); //pesan yang muncul jika berhasil diupload pada session flashdata
               redirect('hrd/data_profil'); //jika berhasil maka akan ditampilkan view vupload
 

           }else{  /* jika upload gambar gagal maka akan menjalankan skrip ini */
               $er_upload=$this->upload->display_errors(); /* untuk melihat error uploadnya apa */
               //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
               $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">error !! ".$er_upload."</div></div>");
               redirect('hrd/data_profil'); //jika gagal maka akan ditampilkan form upload
           }
       }else{ /* jika file foto tidak ada maka query yg dijalankan adalah skrip ini  */
 
            $key1 = $this->input->post('id_pegawai');
            $data1['id_pegawai']          = $this->input->post('id_pegawai');
            $data1['nama_pegawai']        = $this->input->post('nama_pegawai'); 
            $data1['nip']                 = $this->input->post('nip'); 
            $data1['jenis_kelamin']       = $this->input->post('jenis_kelamin'); 
            $data1['pendidikan_terakhir'] = $this->input->post('pendidikan_terakhir'); 
            $data1['status_kepegawaian']  = $this->input->post('status_kepegawaian'); 
            $data1['jabatan']             = $this->input->post('jabatan'); 
            $data1['status_sertifikasi']  = $this->input->post('status_sertifikasi'); 
            $data1['no_hp']               = $this->input->post('no_hp'); 
            $data1['alamat']              = $this->input->post('alamat'); 
            $data1['email']               = $this->input->post('email'); 
            $data1['tempat_lahir']        = $this->input->post('tempat_lahir'); 
            $data1['tanggal_lahir']       = $this->input->post('tanggal_lahir'); 
   
         
            $this->model_data_user->update_hrd($key1,$data1);

           $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Profil Berhasil Diubah</div></div>");
           redirect('hrd/data_profil'); /* jika berhasil maka akan kembali ke home upload */
       }
   }

  public function ubah($Id)
  {

    $data['nama'] = $this->session->userdata('nama');
    $data['upload'] = $this->session->userdata('upload');
    $data['id_user'] = $this->session->userdata('id_user');
    $data['content']='hrd/profil/edit_data_profil';
    $data['data'] = $this->model_data_user->login_admin();
    $data['edit'] = $this->model_data_user->edit_profil_hrd($Id);
    $this->load->view('hrd/tampilan_home',$data);

  }


      public function hapus($id){

     $this->db->where('id_user',$id);
     $query = $this->db->get('data_user');
     $row = $query->row();

     unlink("./style/images/user/$row->upload");

     $this->db->delete('data_user', array('id_user' => $id));
       $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\"><b>Data Success to Delete</b></div></div>");
     
     redirect('admin/profile/user/');

}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */