<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Setting extends CI_Controller {

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
		$data['username'] = $this->session->userdata('username');
		$data['upload'] = $this->session->userdata('upload');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['jabatan'] = $this->session->userdata('jabatan');
		$data['content']='hrd/setting/tampilan_setting';
		$data['data']	= $this->model_data_user->login_hrd();
		$this->load->view('hrd/tampilan_home',$data);
	}

	public function update(){
        
        $data = $this->input->post(null,true);
        
 $arr['nama_user']= $data['nama_user'];
        $arr['username']= $data['username'];
        if($data['password']!=''){
            
            $arr['password'] = md5($data['password']);
        }
        
        $update = $this->db->update('data_user',$arr,array('id_user'=>$this->session->userdata('id_user')));
        
        if($update){
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">username atau password berhasil diubah!!</div></div>");
            redirect('hrd/setting');
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */