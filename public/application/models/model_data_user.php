<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_data_user extends CI_Model {



	public function tampil_pengguna_sistem_admin()
	{ 
		$this->db->select('*');
		$this->db->from('data_user');
		$this->db->where('level','1');
		$query = $this->db->get();
		return $query;
	} 
		public function tampil_pengguna_sistem_admin_ubah($id)
	{ 
		$this->db->select('*');
		$this->db->from('data_user');
		$this->db->where('level','1');
		$this->db->where('id_user',$id);
		$query = $this->db->get();
		return $query;
	} 

	



		public function tampil_pengguna_sistem_hrd()
	{ 
		$this->db->select('*');
		$this->db->from('data_user');
		$this->db->where('level','2');
		$query = $this->db->get();
		return $query;
	} 
		
		public function tampil_pengguna_sistem_hrd_ubah($id)
	{ 
		$this->db->select('*');
		$this->db->from('data_user');
		$this->db->where('level','2');
		$this->db->where('id_user',$id);
		$query = $this->db->get();
		return $query;
	} 

	

		public function tampil_pengguna_sistem_area()
	{ 
		$this->db->select('*');
		$this->db->from('data_user');
		$this->db->where('level','3');
		$query = $this->db->get();
		return $query;
	} 

		public function tampil_pengguna_sistem_area_ubah($id)
	{ 
		$this->db->select('*');
		$this->db->from('data_user');
		$this->db->where('level','3');
		$this->db->where('id_user',$id);
		$query = $this->db->get();
		return $query;
	} 



		public function tampil_pengguna_sistem_manpower()
	{ 
		$this->db->select('*');
		$this->db->from('data_user');
		$this->db->where('level','4');
		$query = $this->db->get();
		return $query;
	} 

		public function tampil_pengguna_sistem_manpower_ubah($id)
	{ 
		$this->db->select('*');
		$this->db->from('data_user');
		$this->db->where('level','4');
		$this->db->where('id_user',$id);
		$query = $this->db->get();
		return $query;
	} 



		public function tampil_pengguna_sistem_manager()
	{ 
		$this->db->select('*');
		$this->db->from('data_user');
		$this->db->where('level','5');
		$query = $this->db->get();
		return $query;
	} 

		public function tampil_pengguna_sistem_manager_ubah($id)
	{ 
		$this->db->select('*');
		$this->db->from('data_user');
		$this->db->where('level','5');
		$this->db->where('id_user',$id);
		$query = $this->db->get();
		return $query;
	} 




	public function tampil_pengguna_sistem()
	{ 
		$this->db->select('*');
		$this->db->from('data_user');
        $this->db->order_by('level','ASC');
		$query = $this->db->get();
		return $query;
	} 

	public function login_admin()
	{ 
		$this->db->select('*');
		$this->db->from('data_user');
		$this->db->where('id_user', $this->session->userdata('id_user'));
		$query = $this->db->get();
		return $query;
	} 

	public function login_hrd()
	{ 
		$this->db->select('*');
		$this->db->from('data_user');
		$this->db->where('id_user', $this->session->userdata('id_user'));
		$query = $this->db->get();
		return $query;
	} 
		public function login_area()
	{ 
		$this->db->select('*');
		$this->db->from('data_user a');
		$this->db->join('data_area_kerja b','b.id_user=a.id_user');
		$this->db->where('a.id_user', $this->session->userdata('id_user'));
		$query = $this->db->get();
		return $query;
	} 

		public function login_manpower()
	{ 
		$this->db->select('*');
		$this->db->from('data_user a');
		$this->db->join('data_man_power b','b.id_user=a.id_user');
		$this->db->join('data_kontrak_kerja c','c.id_kontrak=b.id_kontrak');
        $this->db->join('data_area_kerja d','d.id_area_kerja=c.id_area_kerja');
		$this->db->where('a.id_user', $this->session->userdata('id_user'));
		$query = $this->db->get();
		return $query;
	} 
	   
		public function login_manager()
	{ 
		$this->db->select('*');
		$this->db->from('data_user');
		$this->db->where('id_user', $this->session->userdata('id_user'));
		$query = $this->db->get();
		return $query;
	} 

			public function profil_hrd()
	{ 
		$user =$this->session->userdata('id_user');
		$this->db->select('*');
		$this->db->from('data_user a');
		$this->db->join('data_pegawai b','b.id_user=a.id_user');
//		$this->db->where('b.id_sekolah','6');
		$this->db->where('a.id_user',$user);
		$query = $this->db->get();
		return $query;
	} 










///////////profil admin yayasan/////////
	
	public function update_admin($key1, $data1)
	{
		$this->db->where('id_anggota',$key1);
		$this->db->update('data_anggota',$data1);
	} 

		public function profil_admin()
	{ 
		$user =$this->session->userdata('id_user');
		$this->db->select('*');
		$this->db->from('data_user a');
		$this->db->join('data_anggota b','b.id_user=a.id_user');
//		$this->db->where('b.id_sekolah','6');
		$this->db->where('a.id_user',$user);
		$query = $this->db->get();
		return $query;
	} 

		public function edit_profil_admin($Id)
	{ 
		$user =$this->session->userdata('id_user');
		$this->db->select('*');
		$this->db->from('data_user a');
		$this->db->join('data_anggota b','b.id_user=a.id_user');
	//	$this->db->where('b.id_sekolah','6');
		$this->db->where('a.id_user',$user);
		$this->db->where('a.id_user',$Id);
		$query = $this->db->get();
		return $query;
	} 


//batas

        function cari_level($key)
    {
        $this->db->select('*');
        $this->db->from('data_user');
        $this->db->like('level', $key);
        $query = $this->db->get();
        return $query;

    }


		public function cek_user($data) {
		$query = $this->db->get_where('data_user', $data);
		return $query;
		}
	
		function view_by($id){
	    $query = $this->db->query("SELECT * FROM data_user where id_user='$id'");
	    return ($query->num_rows() > 0)? $query->result():FALSE;
		}

			public function getdata($key)
	{
		$this->db->where('id_user',$key);
		$hasil = $this->db->get('data_user');
		return $hasil;

	}
//fungsi update ke database
     function get_update($data,$where){
       $this->db->where($where);
       $this->db->update('data_user', $data);
       return TRUE;
    }

    	public function getupdate($key, $data)
	{
		$this->db->where('id_user',$key);
		$this->db->update('data_user',$data);
	} 



	public function getinsert($data)
	{
		$this->db->insert('data_user',$data);
	}
	public function login()
	{ 
		$this->db->select('*');
		$this->db->from('data_user a');
		$this->db->join('data_anggota b','b.id_user=a.id_user');
		$this->db->like('a.id_user', $this->session->userdata('id_user'));
		$query = $this->db->get();
		return $query;
	} 

	function delete($id) {
	$this->db->where('id_user', $id);
	$this->db->delete('data_user');
	}

  //fungsi delete ke database
  function get_delete($where){
       $this->db->where($where);
       $this->db->delete($this->tabel);
       return TRUE;
    }


    public function update_user_man_power($key1, $data1)
	{
		$this->db->where('id_man_power',$key1);
		$this->db->update('data_man_power',$data1);
	} 

    public function update_user_area($key1, $data1)
	{
		$this->db->where('id_area_kerja',$key1);
		$this->db->update('data_area_kerja',$data1);
	} 

 function ubah_photo($data,$where){
       $this->db->where($where);
       $this->db->update('data_user', $data);
       return TRUE;
    }


}

?>