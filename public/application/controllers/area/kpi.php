<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Kpi extends CI_Controller {

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

		$query = $this->model_data_user->login_area();
		$row = $query->row();
		$id = $row->id_area_kerja;


		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_area();
		$data['isi']	= $this->model_data_man_power->tampil_mp_area($id);
		$data['content']='area/kpi/tampilan_kpi';
		$this->load->view('area/tampilan_home',$data);
	}

	public function detail($id)
	{

		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_area();
		$data['detail']	= $this->model_data_man_power->detail($id);
		$data['area']	= $this->model_data_area_kerja->tampil();
  		$data['lowongan'] = $this->model_data_lowongan_kerja->tampil();
		$data['kpi']	= $this->model_data_man_power->kpi($id);
		$data['content']='area/kpi/tampil_detail_kpi';
		$this->load->view('area/tampilan_home',$data);

	}

   public function simpan_kpi()
    {
        $this->load->library('upload');
        $nmfile = "kpi-".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $path   = './style/images/kpi/'; //path folder
        $config['upload_path'] = './style/images/kpi/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg/pdf'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '689048'; //maksimum besar file 2M
        $config['max_width']  = '8888'; //lebar maksimum 1288 px
        $config['max_height']  = '8888'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
         
                  $key = $this->input->post('id_kpi');
                  $data['id_kpi']    = $this->input->post('id_kpi');

                    $data = array();

                     if($this->upload->do_upload('filefoto')) {   
                        $dataInfo = $this->upload->data();

 //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./style/images/kpi/'.$dataInfo['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 330;
                $config['height']= 430;
                $config['new_image']= './style/images/kpi/'.$dataInfo['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                        $data['gambar_kpi'] = $dataInfo['file_name'];
                     
                    }

   		 	$key = $this->input->post('id_kpi');
       		$data['id_kpi']        		 = $this->input->post('id_kpi');
       		$data['id_man_power']        = $this->input->post('id_man_power');
            $data['id_area_kerja']       = $this->input->post('id_area_kerja'); 
            $data['tgl_mulai_kpi']       = $this->input->post('tgl_mulai_kpi'); 
            $data['tgl_selesai_kpi']     = $this->input->post('tgl_selesai_kpi'); 
            $data['total_skill']         = $this->input->post('total_skill'); 
            $data['total_general']       = $this->input->post('total_general'); 
            $data['total_keseluruhan']   = $this->input->post('total_keseluruhan'); 

    $this->load->model('model_kpi');
    $query = $this->model_kpi->getdata($key); 
   
    $this->model_kpi->getinsert($data);
    $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Tambahkan!!</div></div>");
    
    $key1 = $this->input->post('id_man_power');
    $data1['id_man_power']           = $this->input->post('id_man_power');
    $data1['kpi']                    = $this->input->post('total_keseluruhan'); 
    
    $this->load->model('model_kpi');
    $query = $this->model_kpi->cek_mp($key1);
    
    $this->model_kpi->ubah_mp($key1,$data1);


    $iidd = $this->input->post('id_man_power');

    $back = "area/kpi/detail/$iidd";
    redirect($back);

      }


  public function ubah_kpi(){
        $this->load->library('upload');
        $nmfile = "kpi-".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $path   = './style/images/kpi/'; //path folder
        $config['upload_path'] = './style/images/kpi/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '689048'; //maksimum besar file 2M
        $config['max_width']  = '8888'; //lebar maksimum 1288 px
        $config['max_height']  = '8888'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
        
       $id_kpi      = $this->input->post('id_kpi'); /* variabel id gambar */
       $gbrlama     = $this->input->post('gbrlama'); /* variabel file gambar lama */
  
       if($_FILES['filefoto']['name'])
       {
           if ($this->upload->do_upload('filefoto'))
           {
               $gbr = $this->upload->data();

 //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./style/images/kpi/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
               $config['width']= 330;
                $config['height']= 430;
                $config['new_image']= './style/images/kpi/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

               $data = array(
                 'gambar_kpi' =>$gbr['file_name'],
               );
 
               @unlink($path.$gbrlama);//menghapus gambar lama, variabel dibawa dari form
 
               $where =array('id_kpi'=>$id_kpi); //array where query sebagai identitas pada saat query dijalankan
               $this->model_kpi->get_update($data,$where); //akses model untuk menyimpan ke database
            
                $key1 = $this->input->post('id_kpi');
                $data1['id_kpi']        		 = $this->input->post('id_kpi');
       			$data1['id_man_power']        = $this->input->post('id_man_power');
            	$data1['id_area_kerja']       = $this->input->post('id_area_kerja'); 
            	$data1['tgl_mulai_kpi']       = $this->input->post('tgl_mulai_kpi'); 
            	$data1['tgl_selesai_kpi']     = $this->input->post('tgl_selesai_kpi'); 
            	$data1['total_skill']         = $this->input->post('total_skill'); 
            	$data1['total_general']       = $this->input->post('total_general'); 
            	$data1['total_keseluruhan']   = $this->input->post('total_keseluruhan'); 

     
            $this->model_kpi->update_kpi($key1,$data1);

            $key9 = $this->input->post('id_man_power');
            $data9['id_man_power']           = $this->input->post('id_man_power');
            $data9['kpi']                    = $this->input->post('total_keseluruhan'); 
            
            $this->load->model('model_kpi');
            $query = $this->model_kpi->cek_mp9($key9);
            
            $this->model_kpi->ubah_mp9($key9,$data9);



               $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Profil Berhasil Diubah</div></div>"); //pesan yang muncul jika berhasil diupload pada session flashdata
             
			   $iidd = $this->input->post('id_man_power');
			   $back = "area/kpi/detail/$iidd";

               redirect($back); //jika berhasil maka akan ditampilkan view vupload
 

           }else{  /* jika upload gambar gagal maka akan menjalankan skrip ini */
               $er_upload=$this->upload->display_errors(); /* untuk melihat error uploadnya apa */
               //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
               $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">error !! ".$er_upload."</div></div>");
               $iidd = $this->input->post('id_man_power');
			   $back = "area/kpi/detail/$iidd";

               redirect($back); //jika gagal maka akan ditampilkan form upload
           }
       }else{ /* jika file foto tidak ada maka query yg dijalankan adalah skrip ini  */
 
                $key1 = $this->input->post('id_kpi');
                $data1['id_kpi']        		 = $this->input->post('id_kpi');
       			$data1['id_man_power']        = $this->input->post('id_man_power');
            	$data1['id_area_kerja']       = $this->input->post('id_area_kerja'); 
            	$data1['tgl_mulai_kpi']       = $this->input->post('tgl_mulai_kpi'); 
            	$data1['tgl_selesai_kpi']     = $this->input->post('tgl_selesai_kpi'); 
            	$data1['total_skill']         = $this->input->post('total_skill'); 
            	$data1['total_general']       = $this->input->post('total_general'); 
            	$data1['total_keseluruhan']   = $this->input->post('total_keseluruhan'); 
  
            $this->model_kpi->update_kpi($key1,$data1);

            $key9 = $this->input->post('id_man_power');
            $data9['id_man_power']           = $this->input->post('id_man_power');
            $data9['kpi']                    = $this->input->post('total_keseluruhan'); 
            
            $this->load->model('model_kpi');
            $query = $this->model_kpi->cek_mp9($key9);
            
            $this->model_kpi->ubah_mp9($key9,$data9);



           $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Profil Berhasil Diubah</div></div>");
          	$iidd = $this->input->post('id_man_power');
			 $back = "area/kpi/detail/$iidd";
           redirect($back);/* jika berhasil maka akan kembali ke home upload */
       }
   }



  public function hapus(){

  	$id = $this->input->post('id_kpi');
  	$back = $this->input->post('id_man_power');

     $this->db->where('id_kpi',$id);
     $query = $this->db->get('data_kpi');
     $row = $query->row();

     unlink("./style/images/kpi/$row->gambar_kpi");

     $this->db->delete('data_kpi', array('id_kpi' => $id));
     $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\"><b>Data Berhasil Di Hapus</b></div></div>");
     
     $key1 = $this->input->post('id_man_power');
    $data1['id_man_power']           = $this->input->post('id_man_power');
    $data1['kpi']                    = "0";
    
    $this->load->model('model_kpi');
    $query = $this->model_kpi->cek_mp($key1);
    
    $this->model_kpi->ubah_mp($key1,$data1);



     $kembali = "area/kpi/detail/$back";
     redirect($kembali);/* jika berhasil maka akan kembali ke home upload */

}

	


}
