<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_register extends CI_Model {

		        function cari_key($key)
    {
        $this->db->select('*');
        $this->db->from('data_pelamar');
        $this->db->where('kode_aktivasi', $key);
        $hasil = $this->db->get();
		return $hasil;
    }

        function cek_pendaftaran($key)
    {
        $this->db->select('*');
        $this->db->from('data_pelamar');
        $this->db->where('no_pendaftaran', $key);
        $hasil = $this->db->get();
		return $hasil;
    }
 

		function view_by($id){
	    $query = $this->db->query("SELECT * FROM data_pelamar where id_pelamar='$id'");
	    return ($query->num_rows() > 0)? $query->result():FALSE;
		}

	public function get_data($key)
	{
		$this->db->where('id_pelamar',$key);
		$hasil = $this->db->get('data_pelamar');
		return $hasil;
	}

    	public function ubah($key, $data)
	{
		$this->db->where('id_pelamar',$key);
		$this->db->update('data_pelamar',$data);
	} 

	public function getinsert($data)
	{
		$this->db->insert('data_pelamar',$data);
	}




}

?>