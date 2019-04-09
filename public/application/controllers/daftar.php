<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function index()
	{
	
		$data['content']='tampilan_daftar';
		$this->load->view('tampilan_home',$data);
	}

        public function cek_kode()
    {

        $key            = $this->input->post('kode_aktivasi');
       
        $query = $this->model_register->cari_key($key);
   

       if ($query->num_rows()>0)
        {
            $id_pelamar         = $this->input->post('id_pelamar');
            $row = $query->row();
            $tampil = $row->id_pelamar;
            $nama_pelamar = $row->nama_pelamar;
            $abc = "pendaftaran/isi/$tampil";
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Isi form pendaftaran!!</div></div>");
            redirect($abc);
        }
        else
        {
             $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Kode Aktivasi Yang Anda Masukan Salah / Tidak Ada!!</div></div>");
             redirect('daftar');
        }
  }




	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */