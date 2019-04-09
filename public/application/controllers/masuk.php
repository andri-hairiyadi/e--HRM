<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {

	public function index()
	{
		$this->load->view('tampilan_masuk');
	}

		public function cek_login() {
	
		$data = array('username' => $this->input->post('username', TRUE),		  
					'password' => md5($this->input->post('password', TRUE))
			);
	
		$this->load->model('model_data_user'); // load model_user
		$hasil = $this->model_data_user->cek_user($data);
		
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['id_user'] = $sess->id_user;
				$sess_data['username'] = $sess->username;
				$sess_data['level'] = $sess->level;
				$sess_data['nama'] = $sess->nama;

				
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='1') {
				redirect('admin/beranda');
			}	
			if ($this->session->userdata('level')=='2') {
				redirect('hrd/beranda');
			}	
			elseif ($this->session->userdata('level')=='3') {
				redirect('area/beranda');
			}
			elseif ($this->session->userdata('level')=='4') {
				redirect('manpower/beranda');
			}
			elseif ($this->session->userdata('level')=='5') {
				redirect('manager/beranda');
			}	

		}
		else {
		  $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\"><b>username atau password salah</b></div></div> <br>");
  
    	redirect('masuk');
		}

	}
}
