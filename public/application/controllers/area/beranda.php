<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Beranda extends CI_Controller {

public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('masuk');
		}

		$this->load->helper('text');
		$this->load->library('leaflet');
	}

public function cek()
	{	
	$this->load->view('area/tampilan_peta');
	}

	public function index()
	{	
		$query = $this->model_data_user->login_area();
		$row = $query->row();
		$area = $row->id_area_kerja;
		$nama_area = $row->nama_area;
		$late = $row->late;
		$long = $row->long;
		$posisi = "$late , $long";
		$nama = $row->nama_area;


		$data['jumlah_man_power']		= $this->model_data_man_power->tampil_area($area);
		$data['jumlah_training']  		= $this->model_data_pelamar->tampil_training_area($nama_area);
		$data['ulang_tahun']			= $this->model_data_man_power->ulang_tahun_area($area);

		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['data']	= $this->model_data_user->login_area();

 $config = array(
 	'center'         => $posisi, // Center of the map
 	'zoom'           => 17, // Map zoom
 	);
 $this->leaflet->initialize($config);


 $marker = array(

 	'latlng' 		=>$posisi, // Marker Location
 	'popupContent' 	=> $nama, // Popup Content
 	);
 	$this->leaflet->add_marker($marker);

 

 $data['map'] =  $this->leaflet->create_map();


		$data['content']='area/tampilan_beranda';
		$this->load->view('area/tampilan_home_beranda',$data);
	}
		public function ubah()
	{
		$key = $this->input->post('id_user');
		$data['id_user']	 	= $this->input->post('id_user');
		$data['upload']	 		= $this->input->post('upload');
		$this->load->model('model_data_user');
		$query = $this->model_data_user->getdata($key);
		
		if ($query->num_rows()>0)
		{
			$this->model_data_user->getupdate($key,$data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Iklan Berhasil di Aktifkan!!</div></div>");
		}
		else
		{
			$this->model_data_user->getinsert($data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Di tambahkan!!</div></div>");
   
		}
	
		redirect('admin/home');

	}

		public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('beranda');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */