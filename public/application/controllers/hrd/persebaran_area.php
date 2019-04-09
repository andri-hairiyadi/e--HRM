<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Persebaran_area extends CI_Controller {

public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('masuk');
		}
	$this->load->library('leaflet');
		$this->load->helper('text');
	}
 
	public function index()
	{	
		$awal = $this->model_data_area_kerja->tampil();
		$row = $awal->row();
		$area = $row->id_area_kerja;
		$latet = $row->late;
		$longi = $row->long;
		$posisi_center = "$latet , $longi";
	
		$config = array(
 		'center'         => $posisi_center, // Center of the map
 	    'zoom'           => 15, // Map zoom
 		 );
 
 	$this->leaflet->initialize($config);

		$query = $this->model_data_area_kerja->tampil();
		$row = $query->row();
		
	


 		foreach ($query->result() as $row) {
 			
			$nama = $row->nama_area;
		$late = $row->late;
		$long = $row->long;
		$posisi = "$late , $long";

	 $marker = array(

 	'latlng' 		=>$posisi, // Marker Location
 	'popupContent' 	=> $nama, // Popup Content
 	);
 	
 	$this->leaflet->add_marker($marker);
			
		}





	$data['map'] =  $this->leaflet->create_map();



		$data['jumlah_man_power']	= $this->model_data_man_power->tampil();
		$data['jumlah_area_kerja']	= $this->model_data_area_kerja->tampil();
		$data['limit_man_power']	= $this->model_data_man_power->limit();
		$data['lowongan_kerja']		= $this->model_data_lowongan_kerja->tampil();
		$data['lamaran_masuk']		= $this->model_data_pelamar->jumlah_lamaran_masuk();
		$data['interview']			= $this->model_data_pelamar->jumlah_interview();
		$data['training']			= $this->model_data_pelamar->jumlah_training();
		$data['ulang_tahun']		= $this->model_data_man_power->ulang_tahun();
		$data['nama'] 				= $this->session->userdata('nama');
		$data['id_user']			= $this->session->userdata('id_user');
		$data['data']				= $this->model_data_user->login_hrd();
		$data['content']			='hrd/tampilan_persebaran_area';
		$this->load->view('hrd/tampilan_home_beranda',$data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */