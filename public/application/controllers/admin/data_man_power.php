<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Data_man_power extends CI_Controller {

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
		$data['data']	= $this->model_data_user->login_admin();
		$data['isi']	= $this->model_data_man_power->tampil();
		$data['content']='admin/data_man_power/tampilan_data_man_power';
		$this->load->view('admin/tampilan_home',$data);
	}

	public function aktif()
	{
	$data['nama'] = $this->session->userdata('nama');
	$data['id_user'] = $this->session->userdata('id_user');
	$data['data'] = $this->model_data_user->login_hrd();
	$data['isi']  = $this->model_data_man_power->tampil_aktif();
	$data['content']='hrd/data_man_power/tampilan_data_man_power_aktif';
	$this->load->view('hrd/tampilan_home',$data);
	}
		public function non_aktif()
	{
	$data['nama'] = $this->session->userdata('nama');
	$data['id_user'] = $this->session->userdata('id_user');
	$data['data'] = $this->model_data_user->login_hrd();
	$data['isi']  = $this->model_data_man_power->tampil_non_aktif();
	$data['content']='hrd/data_man_power/tampilan_data_man_power_non_aktif';
	$this->load->view('hrd/tampilan_home',$data);
	}
	public function tambah()
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_admin();
		$data['content']='admin/data_man_power/tampilan_tambah_data_man_power';
		$this->load->view('admin/tampilan_home',$data);
	}

		public function ubah($id)
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_admin();
		$data['edit']	= $this->model_data_man_power->view_by($id);
		$data['content']='admin/data_man_power/ubah_data_man_power';
		$this->load->view('admin/tampilan_home',$data);

	}

		public function detail($id)
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_admin();
		$data['pendidikan']	= $this->model_data_man_power->pendidikan($id);
		$data['riwayat']	= $this->model_data_man_power->riwayat($id);
		$data['pengalaman']	= $this->model_data_man_power->pengalaman($id);
		$data['anak']	= $this->model_data_man_power->anak($id);
		$data['saudara']	= $this->model_data_man_power->saudara($id);
		$data['detail']	= $this->model_data_man_power->detail($id);
		$data['content']='admin/data_man_power/detail_data_man_power';
		$this->load->view('admin/tampilan_home',$data);

	}



      public function hapus($id){

     $this->db->where('id_man_power',$id);
     $query = $this->db->get('data_man_power');
     $row = $query->row();

     unlink("./style/images/user/$row->file_photo");

     $this->db->delete('data_man_power', array('id_man_power' => $id));
     $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\"><b>Data Berhasil Di Hapus</b></div></div>");

    redirect('admin/data_man_power/');

}

  public function simpan()
    {

        $this->load->library('upload');
        $nmfile = "manpower-".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $path   = './style/dokumen_pelamar/'; //path folder
        $config['upload_path'] = './style/dokumen_pelamar'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg/pdf'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '689048'; //maksimum besar file 2M
        $config['max_width']  = '8888'; //lebar maksimum 1288 px
        $config['max_height']  = '8888'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

                  $key = $this->input->post('id_man_power');
                  $data['id_man_power']    = $this->input->post('id_man_power');

                    $data = array();

                    if($this->upload->do_upload('filefoto')) {
                        $dataInfo = $this->upload->data();
                        $data['file_photo'] = $dataInfo['file_name'];

                    }

    		$key = $this->input->post('id_man_power');
       		$data['id_man_power']           = $this->input->post('id_man_power');
            $data['nomor_id']       	    = $this->input->post('nomor_id');
            $data['no_identitas']           = $this->input->post('no_identitas');
            $data['nama_mp']                = $this->input->post('nama_mp');
            $data['no_hp_mp']               = $this->input->post('no_hp_mp');
            $data['alamat_mp']       	    = $this->input->post('alamat_mp');
            $data['jk_mp']                  = $this->input->post('jk_mp');
            $data['tempat_lahir_mp']        = $this->input->post('tempat_lahir_mp');
            $data['tanggal_lahir_mp']       = $this->input->post('tanggal_lahir_mp');
            $data['status_menikah']              = $this->input->post('status_menikah');
            $data['agama']             	    = $this->input->post('agama');
            $data['gol_darah']              = $this->input->post('gol_darah');
            $data['hoby_mp']                = $this->input->post('hoby_mp');
            $data['tinggi_badan']           = $this->input->post('tinggi_badan');
            $data['berat_badan']            = $this->input->post('berat_badan');
            $data['penyakit']               = $this->input->post('penyakit');
            $data['nama_bank']              = $this->input->post('nama_bank');
            $data['no_rekening']            = $this->input->post('no_rekening');
            $data['nama_buku']              = $this->input->post('nama_buku');
            $data['no_bpjs_ket']            = $this->input->post('no_bpjs_ket');
            $data['no_bpjs_kes']            = $this->input->post('no_bpjs_kes');
            $data['no_pkwt']                = $this->input->post('no_pkwt');
            $data['nama_pasangan']          = $this->input->post('nama_pasangan');
            $data['alamat_pasangan']        = $this->input->post('alamat_pasangan');
            $data['no_hp_pasangan']         = $this->input->post('no_hp_pasangan');
            $data['tanggal_lahir_pasangan'] = $this->input->post('tanggal_lahir_pasangan');
            $data['pendidikan_pasangan']    = $this->input->post('pendidikan_pasangan');
            $data['pekerjaan_pasangan']     = $this->input->post('pekerjaan_pasangan');
            $data['nama_ayah']          	= $this->input->post('nama_ayah');
            $data['alamat_ayah']            = $this->input->post('alamat_ayah');
            $data['no_hp_ayah']          	= $this->input->post('no_hp_ayah');
            $data['nama_ibu']          	 	= $this->input->post('nama_ibu');
            $data['alamat_ibu']          	= $this->input->post('alamat_ibu');
            $data['no_hp_ibu']          	= $this->input->post('no_hp_ibu');

    $this->load->model('model_data_man_power');
    $query = $this->model_data_man_power->getdata($key);

    $this->model_data_man_power->getinsert($data);
    $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Tambahkan!!</div></div>");

    redirect('admin/data_man_power');
      }


  public function ubah_simpan(){

        $this->load->library('upload');
        $nmfile = "manpower-".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $path   = './style/dokumen_pelamar/'; //path folder
        $config['upload_path'] = './style/dokumen_pelamar'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg/pdf'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '689048'; //maksimum besar file 2M
        $config['max_width']  = '8888'; //lebar maksimum 1288 px
        $config['max_height']  = '8888'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

       $id_man_power      = $this->input->post('id_man_power'); /* variabel id gambar */
       $gbrlama     = $this->input->post('gbrlama'); /* variabel file gambar lama */

       if($_FILES['filefoto']['name'])
       {
           if ($this->upload->do_upload('filefoto'))
           {
               $gbr = $this->upload->data();
               $data = array(
                 'file_photo' =>$gbr['file_name'],
               );

               @unlink($path.$gbrlama);//menghapus gambar lama, variabel dibawa dari form

               $where =array('id_man_power'=>$id_man_power); //array where query sebagai identitas pada saat query dijalankan
               $this->model_data_man_power->get_update($data,$where); //akses model untuk menyimpan ke database

                        $key1 = $this->input->post('id_man_power');
            $data1['id_man_power']           = $this->input->post('id_man_power');
            $data1['nomor_id']               = $this->input->post('nomor_id');
            $data1['no_identitas']           = $this->input->post('no_identitas');
            $data1['nama_mp']                = $this->input->post('nama_mp');
            $data1['no_hp_mp']               = $this->input->post('no_hp_mp');
            $data1['alamat_mp']              = $this->input->post('alamat_mp');
            $data1['jk_mp']                  = $this->input->post('jk_mp');
            $data1['tempat_lahir_mp']        = $this->input->post('tempat_lahir_mp');
            $data1['tanggal_lahir_mp']       = $this->input->post('tanggal_lahir_mp');
            $data1['status_menikah']              = $this->input->post('status_menikah');
            $data1['agama']                  = $this->input->post('agama');
            $data1['gol_darah']              = $this->input->post('gol_darah');
            $data1['hoby_mp']                = $this->input->post('hoby_mp');
            $data1['tinggi_badan']           = $this->input->post('tinggi_badan');
            $data1['berat_badan']            = $this->input->post('berat_badan');
            $data1['penyakit']               = $this->input->post('penyakit');
            $data1['nama_bank']              = $this->input->post('nama_bank');
            $data1['no_rekening']            = $this->input->post('no_rekening');
            $data1['nama_buku']              = $this->input->post('nama_buku');
            $data1['no_bpjs_ket']            = $this->input->post('no_bpjs_ket');
            $data1['no_bpjs_kes']            = $this->input->post('no_bpjs_kes');
            $data1['no_pkwt']                = $this->input->post('no_pkwt');
            $data1['nama_pasangan']          = $this->input->post('nama_pasangan');
            $data1['alamat_pasangan']        = $this->input->post('alamat_pasangan');
            $data1['no_hp_pasangan']         = $this->input->post('no_hp_pasangan');
            $data1['tanggal_lahir_pasangan'] = $this->input->post('tanggal_lahir_pasangan');
            $data1['pendidikan_pasangan']    = $this->input->post('pendidikan_pasangan');
            $data1['pekerjaan_pasangan']     = $this->input->post('pekerjaan_pasangan');
            $data1['nama_ayah']              = $this->input->post('nama_ayah');
            $data1['alamat_ayah']            = $this->input->post('alamat_ayah');
            $data1['no_hp_ayah']             = $this->input->post('no_hp_ayah');
            $data1['nama_ibu']               = $this->input->post('nama_ibu');
            $data1['alamat_ibu']             = $this->input->post('alamat_ibu');
            $data1['no_hp_ibu']              = $this->input->post('no_hp_ibu');

            $this->model_data_man_power->update_man_power($key1,$data1);

               $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Profil Berhasil Diubah</div></div>"); //pesan yang muncul jika berhasil diupload pada session flashdata
               redirect('admin/data_man_power'); //jika berhasil maka akan ditampilkan view vupload


           }else{  /* jika upload gambar gagal maka akan menjalankan skrip ini */
               $er_upload=$this->upload->display_errors(); /* untuk melihat error uploadnya apa */
               //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
               $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">error !! ".$er_upload."</div></div>");
               redirect('admin/data_man_power'); //jika gagal maka akan ditampilkan form upload
           }
       }else{ /* jika file foto tidak ada maka query yg dijalankan adalah skrip ini  */

            $key1 = $this->input->post('id_man_power');
            $data1['id_man_power']           = $this->input->post('id_man_power');
            $data1['nomor_id']               = $this->input->post('nomor_id');
            $data1['no_identitas']           = $this->input->post('no_identitas');
            $data1['nama_mp']                = $this->input->post('nama_mp');
            $data1['no_hp_mp']               = $this->input->post('no_hp_mp');
            $data1['alamat_mp']              = $this->input->post('alamat_mp');
            $data1['jk_mp']                  = $this->input->post('jk_mp');
            $data1['tempat_lahir_mp']        = $this->input->post('tempat_lahir_mp');
            $data1['tanggal_lahir_mp']       = $this->input->post('tanggal_lahir_mp');
            $data1['status_menikah']              = $this->input->post('status_menikah');
            $data1['agama']                  = $this->input->post('agama');
            $data1['gol_darah']              = $this->input->post('gol_darah');
            $data1['hoby_mp']                = $this->input->post('hoby_mp');
            $data1['tinggi_badan']           = $this->input->post('tinggi_badan');
            $data1['berat_badan']            = $this->input->post('berat_badan');
            $data1['penyakit']               = $this->input->post('penyakit');
            $data1['nama_bank']              = $this->input->post('nama_bank');
            $data1['no_rekening']            = $this->input->post('no_rekening');
            $data1['nama_buku']              = $this->input->post('nama_buku');
            $data1['no_bpjs_ket']            = $this->input->post('no_bpjs_ket');
            $data1['no_bpjs_kes']            = $this->input->post('no_bpjs_kes');
            $data1['no_pkwt']                = $this->input->post('no_pkwt');
            $data1['nama_pasangan']          = $this->input->post('nama_pasangan');
            $data1['alamat_pasangan']        = $this->input->post('alamat_pasangan');
            $data1['no_hp_pasangan']         = $this->input->post('no_hp_pasangan');
            $data1['tanggal_lahir_pasangan'] = $this->input->post('tanggal_lahir_pasangan');
            $data1['pendidikan_pasangan']    = $this->input->post('pendidikan_pasangan');
            $data1['pekerjaan_pasangan']     = $this->input->post('pekerjaan_pasangan');
            $data1['nama_ayah']              = $this->input->post('nama_ayah');
            $data1['alamat_ayah']            = $this->input->post('alamat_ayah');
            $data1['no_hp_ayah']             = $this->input->post('no_hp_ayah');
            $data1['nama_ibu']               = $this->input->post('nama_ibu');
            $data1['alamat_ibu']             = $this->input->post('alamat_ibu');
            $data1['no_hp_ibu']              = $this->input->post('no_hp_ibu');

            $this->model_data_man_power->update_man_power($key1,$data1);

           $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Profil Berhasil Diubah</div></div>");
           redirect('admin/data_man_power'); /* jika berhasil maka akan kembali ke home upload */
       }
   }


 public function cetak_man_power()
  {
     $data['isi']    = $this->model_data_man_power->tampil();


    ob_start();
    $content = $this->load->view('admin/data_man_power/tampilan_cetak_data_man_power',$data);
    $content = ob_get_clean();
    $this->load->library('html2pdf');
    try
    {
      $html2pdf = new HTML2PDF('L', 'A4', 'fr');
      $html2pdf->pdf->SetDisplayMode('fullpage');
      $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
      $html2pdf->Output('Data_Man_Power.pdf');
    }
    catch(HTML2PDF_exception $e) {
      echo $e;
      exit;
    }
  }


}
