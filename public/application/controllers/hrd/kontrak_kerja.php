<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Kontrak_kerja extends CI_Controller {

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
		$data['isi']	= $this->model_data_man_power->tampil_mp();
		$data['area']	= $this->model_data_area_kerja->tampil();

  		$data['lowongan'] = $this->model_data_lowongan_kerja->tampil();
		$data['content']='hrd/kontrak_kerja/tampilan_kontrak_kerja';
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
    $data['content']='hrd/data_lamaran_masuk/tampilan_posisi_data_lamaran_masuk';
    $this->load->view('hrd/tampilan_home',$data);
  }
	public function detail($id)
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_hrd();
		$data['detail']	= $this->model_data_man_power->detail($id);
		$data['content']='hrd/kontrak_kerja/tampilan_detail_kontrak_kerja';
		$this->load->view('hrd/tampilan_home',$data);

	}

	public function simpan_kontrak()
  {
      $key = $this->input->post('id_kontrak');
      $data['id_kontrak']      = $this->input->post('id_kontrak');
      $data['id_area_kerja']   = $this->input->post('id_area_kerja');
      $data['id_man_power']    = $this->input->post('id_man_power');
      $data['tgl_mulai']       = $this->input->post('tgl_mulai');
      $data['tgl_selesai']     = $this->input->post('tgl_selesai'); 
      $data['posisi_tugas']    = $this->input->post('posisi_tugas'); 
  
      $this->load->model('model_data_kontrak_kerja');
      $query = $this->model_data_kontrak_kerja->getdata($key);

  		$this->model_data_kontrak_kerja->getinsert($data);  
   

     $id_update = $this->db->insert_id();
      $key1 = $this->input->post('id_man_power');
      $data1['id_man_power']  = $this->input->post('id_man_power');
      $data1['id_kontrak']     = $id_update;

     $this->model_data_man_power->update_kontrak($key1,$data1);
     
/////////////////////

    $key_area = $this->input->post('id_area_kerja');

    $query = $this->model_data_area_kerja->cek_area($key_area);

    $row = $query->row();
    $jumlah = $row->mp_yang_ada;
    $kontrak_mp = $jumlah + 1;

    echo $kontrak_mp;
      
    $data_area['id_area_kerja']    = $this->input->post('id_area_kerja');
    $data_area['mp_yang_ada']       = $kontrak_mp; 
  
    $this->load->model('model_data_area_kerja');
   $query = $this->model_data_area_kerja->cek_area($key_area);
 
    $this->model_data_area_kerja->ubah_jml_mp($key_area,$data_area);

/////////////////////   

 		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Tambahkan!!</div></div>");
   
		
     redirect('hrd/data_kontrak_kerja');

  }

      public function hapus($id){

     $this->db->where('id_man_power',$id);
     $query = $this->db->get('data_man_power');
     $row = $query->row();

     unlink("./style/images/user/$row->file_photo");

     $this->db->delete('data_man_power', array('id_man_power' => $id));
     $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\"><b>Data Berhasil Di Hapus</b></div></div>");
     
    redirect('hrd/kontrak_kerja/');

}




}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */