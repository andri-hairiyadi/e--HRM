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

     $query = $this->model_data_user->login_manpower();
     $row = $query->row();
     $id = $row->id_man_power;

		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_manpower();
		$data['isi']	= $this->model_data_user->login_manpower();
		$data['pendidikan']	= $this->model_data_man_power->pendidikan($id);
		$data['riwayat']	= $this->model_data_man_power->riwayat($id);
		$data['pengalaman']	= $this->model_data_man_power->pengalaman($id);
		$data['anak']	= $this->model_data_man_power->anak($id);
		$data['saudara']	= $this->model_data_man_power->saudara($id);
		$data['content']='manpower/data_profil/tampilan_data_profil';
		$this->load->view('manpower/tampilan_home',$data);
	}
	

	public function riwayat()
	{	
	$query = $this->model_data_user->login_manpower();
     $row = $query->row();
     $id = $row->id_man_power;
		$data['riwayat']	= $this->model_data_man_power->riwayat($id);

		$data['nama'] = $this->session->userdata('nama');
		$data['area']	= $this->model_data_area_kerja->tampil();
  		$data['lowongan'] = $this->model_data_lowongan_kerja->tampil();
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_manpower();
		$data['content']='manpower/data_profil/riwayat_pekerjaan/tampil_riwayat_pekerjaan';
		$this->load->view('manpower/tampilan_home',$data);
	}
	
	public function pengalaman()
	{	
	$query = $this->model_data_user->login_manpower();
     $row = $query->row();
     $id = $row->id_man_power;
		$data['pengalaman']	= $this->model_data_man_power->pengalaman($id);

		$data['nama'] = $this->session->userdata('nama');
		$data['area']	= $this->model_data_area_kerja->tampil();
  		$data['lowongan'] = $this->model_data_lowongan_kerja->tampil();
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_manpower();
		$data['content']='manpower/data_profil/pengalaman_kerja/tampil_pengalaman_kerja';
		$this->load->view('manpower/tampilan_home',$data);
	}
	
		public function informasi_anak()
	{	
	$query = $this->model_data_user->login_manpower();
     $row = $query->row();
     $id = $row->id_man_power;
			$data['anak']	= $this->model_data_man_power->anak($id);

		$data['nama'] = $this->session->userdata('nama');
		$data['area']	= $this->model_data_area_kerja->tampil();
  		$data['lowongan'] = $this->model_data_lowongan_kerja->tampil();
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_manpower();
		$data['content']='manpower/data_profil/informasi_anak/tampil_infromasi_anak';
		$this->load->view('manpower/tampilan_home',$data);
	}
			public function informasi_saudara()
	{	
	    $query = $this->model_data_user->login_manpower();
        $row = $query->row();
        $id = $row->id_man_power;
		$data['saudara']	= $this->model_data_man_power->saudara($id);

		$data['nama'] = $this->session->userdata('nama');
		$data['area']	= $this->model_data_area_kerja->tampil();
  		$data['lowongan'] = $this->model_data_lowongan_kerja->tampil();
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_manpower();
		$data['content']='manpower/data_profil/informasi_saudara/tampil_informasi_saudara';
		$this->load->view('manpower/tampilan_home',$data);
	}
	
		public function informasi_pendidikan()
	{	
	    $query = $this->model_data_user->login_manpower();
        $row = $query->row();
        $id = $row->id_man_power;
		$data['pendidikan']	= $this->model_data_man_power->pendidikan($id);
		$data['nama'] = $this->session->userdata('nama');
		$data['area']	= $this->model_data_area_kerja->tampil();
  		$data['lowongan'] = $this->model_data_lowongan_kerja->tampil();
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_manpower();
		$data['content']='manpower/data_profil/informasi_pendidikan/tampil_informasi_pendidikan';
		$this->load->view('manpower/tampilan_home',$data);
	}
	

		public function ubah($id)
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_manpower();
		$data['edit']	= $this->model_data_user->view_by($id);
		$data['content']='manpower/data_profil/ubah_data_profil';
		$this->load->view('manpower/tampilan_home',$data);

	}
	
		public function detail($id)
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_manpower();
		$data['detail']	= $this->model_data_user->view_by($id);
		$data['content']='manpower/data_profil/detail_data_profil';
		$this->load->view('manpower/tampilan_home',$data);

	}




public function ubah_informasi_kontrak()
  {
    $key = $this->input->post('id_man_power');
    $data['id_man_power']     = $this->input->post('id_man_power');
    $data['no_bpjs_ket']     	  = $this->input->post('no_bpjs_ket');
    $data['no_bpjs_kes']   = $this->input->post('no_bpjs_kes');
    $data['no_pkwt']    	  = $this->input->post('no_pkwt'); 
  
    $this->load->model('model_data_man_power');
    $query = $this->model_data_man_power->cek_manpower($key);
		
			$this->model_data_man_power->ubah_manpower($key,$data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Ubah!!</div></div>");
   
		
    redirect('manpower/data_profil/');

  }

  
public function ubah_informasi_payroll()
  {
    $key = $this->input->post('id_man_power');
    $data['id_man_power']     = $this->input->post('id_man_power');
    $data['nama_bank']     	  = $this->input->post('nama_bank');
    $data['no_rekening']   = $this->input->post('nomor_rekening');
    $data['nama_buku']    	  = $this->input->post('nama_buku'); 
  
    $this->load->model('model_data_man_power');
    $query = $this->model_data_man_power->cek_manpower($key);
		
			$this->model_data_man_power->ubah_manpower($key,$data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Ubah!!</div></div>");
   
		
    redirect('manpower/data_profil/');

  }

public function ubah_informasi_orangtua()
  {
    $key = $this->input->post('id_man_power');
    $data['id_man_power']     = $this->input->post('id_man_power');
    $data['nama_ayah']     	  = $this->input->post('nama_ayah');
    $data['alamat_ayah']  	 = $this->input->post('alamat_ayah');
    $data['no_hp_ayah']    	  = $this->input->post('no_hp_ayah'); 
    $data['nama_ibu']     	  = $this->input->post('nama_ibu');
    $data['alamat_ibu']  	 = $this->input->post('alamat_ibu');
    $data['no_hp_ibu']    	  = $this->input->post('no_hp_ibu'); 
  
    $this->load->model('model_data_man_power');
    $query = $this->model_data_man_power->cek_manpower($key);
		
			$this->model_data_man_power->ubah_manpower($key,$data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Ubah!!</div></div>");
   
		
    redirect('manpower/data_profil/');

  }


public function ubah_informasi_pasangan()
  {
    $key = $this->input->post('id_man_power');
    $data['id_man_power']   		  = $this->input->post('id_man_power');
    $data['nama_pasangan']     	  	  = $this->input->post('nama_pasangan');
    $data['alamat_pasangan']  	 	  = $this->input->post('alamat_pasangan');
    $data['no_hp_pasangan']    	  	  = $this->input->post('no_hp_pasangan'); 
    $data['tanggal_lahir_pasangan']   = $this->input->post('tanggal_lahir_pasangan');
    $data['pendidikan_pasangan']  	  = $this->input->post('pendidikan_pasangan');
    $data['pekerjaan_pasangan']    	  = $this->input->post('pekerjaan_pasangan'); 
  
    $this->load->model('model_data_man_power');
    $query = $this->model_data_man_power->cek_manpower($key);
		
			$this->model_data_man_power->ubah_manpower($key,$data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Ubah!!</div></div>");
   
		
    redirect('manpower/data_profil/');

  }


public function ubah_informasi_profil()
  {
    $key = $this->input->post('id_man_power');
    $data['id_man_power']   	= $this->input->post('id_man_power');
    $data['no_identitas']     	= $this->input->post('no_identitas');
    $data['no_hp_mp']  	 	  	= $this->input->post('no_hp_mp');
    $data['alamat_mp']    	  	= $this->input->post('alamat_mp'); 
    $data['jk_mp']   			= $this->input->post('jk_mp');
    $data['tempat_lahir_mp']  	= $this->input->post('tempat_lahir_mp');
    $data['tanggal_lahir_mp']   = $this->input->post('tanggal_lahir_mp'); 
    $data['status_menikah']     = $this->input->post('status_menikah'); 
    $data['agama']   			= $this->input->post('agama'); 
    $data['gol_darah']   		= $this->input->post('gol_darah'); 
    $data['hoby_mp']  		    = $this->input->post('hoby_mp'); 
    $data['tinggi_badan']   	= $this->input->post('tinggi_badan'); 
    $data['berat_badan'] 	    = $this->input->post('berat_badan'); 
    $data['penyakit']   	    = $this->input->post('penyakit'); 
  
    $this->load->model('model_data_man_power');
    $query = $this->model_data_man_power->cek_manpower($key);
		
			$this->model_data_man_power->ubah_manpower($key,$data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Ubah!!</div></div>");
   
		
    redirect('manpower/data_profil/');

  }




		public function simpan_riwayat_pekerjaan()
  {
    $key = $this->input->post('id_riwayat');
    $data['id_riwayat']       = $this->input->post('id_riwayat');
    $data['id_man_power']     = $this->input->post('id_man_power');
    $data['id_area_kerja']    = $this->input->post('id_area_kerja');
    $data['status']    		  = $this->input->post('status'); 
    $data['jabatan']     	  = $this->input->post('jabatan'); 
    $data['tanggal_efektif']  = $this->input->post('tanggal_efektif'); 
    $data['keterangan']       = $this->input->post('keterangan'); 
  
    $this->load->model('model_data_man_power');
    $query = $this->model_data_man_power->cek_riwayatkerja($key);
		
		if ($query->num_rows()>0)
		{
			$this->model_data_man_power->ubah_riwayatkerja($key,$data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Ubah!!</div></div>");
   
		}
		
		else
		{
			$this->model_data_man_power->simpan_riwayatkerja($data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Tambahkan!!</div></div>");
   
		}
    redirect('manpower/data_profil/riwayat');

  }

  	    public function hapus_riwayat_pekerjaan($id) {
	$this->load->model('model_data_man_power');
	$this->model_data_man_power->hapus_riwayatkerja($id);
	$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\"><b>Data berhasil di hapus</b></div></div>");
     
    redirect('manpower/data_profil/riwayat');
	}


///////////////////////////////////////////////////


	public function simpan_pengalaman_kerja()
  {
    $key = $this->input->post('id_pengalaman');
    $data['id_pengalaman']       = $this->input->post('id_pengalaman');
    $data['id_man_power']     	 = $this->input->post('id_man_power');
    $data['nama_perusahaan']     = $this->input->post('nama_perusahaan');
    $data['masa_kerja']    		 = $this->input->post('masa_kerja'); 
    $data['jabatan']     	     = $this->input->post('jabatan'); 
    $data['alasan_keluar']       = $this->input->post('alasan_keluar'); 

    $this->load->model('model_data_man_power');
    $query = $this->model_data_man_power->cek_pengalamankerja($key);
		
		if ($query->num_rows()>0)
		{
			$this->model_data_man_power->ubah_pengalamankerja($key,$data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Ubah!!</div></div>");
   
		}
		
		else
		{
			$this->model_data_man_power->simpan_pengalamankerja($data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Tambahkan!!</div></div>");
   
		}
    redirect('manpower/data_profil/pengalaman');

  }

  	    public function hapus_pengalaman_kerja($id) {
	$this->load->model('model_data_man_power');
	$this->model_data_man_power->hapus_pengalamankerja($id);
	$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\"><b>Data berhasil di hapus</b></div></div>");
     
    redirect('manpower/data_profil/pengalaman');
	}

///////////////////////////////////////////////////


	public function simpan_informasi_anak()
  {
    $key = $this->input->post('id_anak');
    $data['id_anak']    		= $this->input->post('id_anak');
    $data['id_man_power']     	= $this->input->post('id_man_power');
    $data['nama_anak']     		= $this->input->post('nama_anak');
    $data['jenis_kelamin']    	= $this->input->post('jenis_kelamin'); 
    $data['tempat_lahir']     	= $this->input->post('tempat_lahir'); 
    $data['tanggal_lahir']      = $this->input->post('tanggal_lahir'); 
    $data['pekerjaan']       	= $this->input->post('pekerjaan'); 
    $data['alamat']       		= $this->input->post('alamat'); 

    $this->load->model('model_data_man_power');
    $query = $this->model_data_man_power->cek_informasianak($key);
		
		if ($query->num_rows()>0)
		{
			$this->model_data_man_power->ubah_informasianak($key,$data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Ubah!!</div></div>");
   
		}
		
		else
		{
			$this->model_data_man_power->simpan_informasianak($data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Tambahkan!!</div></div>");
   
		}
    redirect('manpower/data_profil/informasi_anak');

  }

  	    public function hapus_informasi_anak($id) {
	$this->load->model('model_data_man_power');
	$this->model_data_man_power->hapus_informasianak($id);
	$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\"><b>Data berhasil di hapus</b></div></div>");
     
    redirect('manpower/data_profil/informasi_anak');
	}

///////////////////////////////////////////////////

	public function simpan_informasi_pendidikan()
  {
    $key = $this->input->post('id_pendidikan');
    $data['id_pendidikan']    	 = $this->input->post('id_pendidikan');
    $data['id_man_power']     	 = $this->input->post('id_man_power');
    $data['tingkat_pendidikan']  = $this->input->post('tingkat_pendidikan');
    $data['nama_sekolah']    	 = $this->input->post('nama_sekolah'); 
    $data['tahun_lulus']     	 = $this->input->post('tahun_lulus'); 
    $data['nomor_ijazah']        = $this->input->post('nomor_ijazah'); 
  
    $this->load->model('model_data_man_power');
    $query = $this->model_data_man_power->cek_informasipendidikan($key);
		
		if ($query->num_rows()>0)
		{
			$this->model_data_man_power->ubah_informasipendidikan($key,$data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Ubah!!</div></div>");
   
		}
		
		else
		{
			$this->model_data_man_power->simpan_informasipendidikan($data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Tambahkan!!</div></div>");
   
		}
    redirect('manpower/data_profil/informasi_pendidikan');

  }

  	    public function hapus_informasi_pendidikan($id) {
	$this->load->model('model_data_man_power');
	$this->model_data_man_power->hapus_informasipendidikan($id);
	$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\"><b>Data berhasil di hapus</b></div></div>");
     
    redirect('manpower/data_profil/informasi_pendidikan');
	}

///////////////////////////////////////////////////

	public function simpan_informasi_saudara()
  {
    $key = $this->input->post('id_saudara');
    $data['id_saudara']    	   = $this->input->post('id_saudara');
    $data['id_man_power']      = $this->input->post('id_man_power');
    $data['nama_saudara']  	   = $this->input->post('nama_saudara');
    $data['jenis_kelamin']     = $this->input->post('jenis_kelamin'); 
    $data['hubungan_saudara']  = $this->input->post('hubungan_saudara'); 
    $data['pekerjaan_saudara'] = $this->input->post('pekerjaan_saudara'); 
    $data['no_hp_saudara']     = $this->input->post('no_hp_saudara'); 
    $data['alamat_saudara']    = $this->input->post('alamat_saudara'); 
  
    $this->load->model('model_data_man_power');
    $query = $this->model_data_man_power->cek_informasisaudara($key);
		
		if ($query->num_rows()>0)
		{
			$this->model_data_man_power->ubah_informasisaudara($key,$data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Ubah!!</div></div>");
   
		}
		
		else
		{
			$this->model_data_man_power->simpan_informasisaudara($data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Tambahkan!!</div></div>");
   
		}
    redirect('manpower/data_profil/informasi_saudara');

  }

  	    public function hapus_informasi_saudara($id) {
	$this->load->model('model_data_man_power');
	$this->model_data_man_power->hapus_informasisaudara($id);
	$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\"><b>Data berhasil di hapus</b></div></div>");
     
    redirect('manpower/data_profil/informasi_saudara');
	}



  public function ubah_photo_profil(){
        $this->load->library('upload');
        $nmfile = "manpower-".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $path   = './style/images/user/'; //path folder
        $config['upload_path'] = './style/images/user'; //path folder
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
               $this->model_data_man_power->ubah_photo($data,$where); //akses model untuk menyimpan ke database

               $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Profil Berhasil Diubah</div></div>"); //pesan yang muncul jika berhasil diupload pada session flashdata
               redirect('manpower/data_profil'); //jika berhasil maka akan ditampilkan view vupload
 

           }else{  /* jika upload gambar gagal maka akan menjalankan skrip ini */
               $er_upload=$this->upload->display_errors(); /* untuk melihat error uploadnya apa */
               //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
               $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">error !! ".$er_upload."</div></div>");
               redirect('manpower/data_profil'); //jika gagal maka akan ditampilkan form upload
           }
       }else{ /* jika file foto tidak ada maka query yg dijalankan adalah skrip ini  */
 
            

           $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Profil Berhasil Diubah</div></div>");
           redirect('manpower/data_profil'); /* jika berhasil maka akan kembali ke home upload */
       }
   }


}

