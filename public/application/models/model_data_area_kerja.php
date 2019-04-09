<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Model_data_area_kerja extends CI_Model {

        function view_by($id){
        $query = $this->db->query("SELECT * FROM data_area_kerja where id_area_kerja='$id'");
        return ($query->num_rows() > 0)? $query->result():FALSE;
        }


    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('data_area_kerja');
        $this->db->order_by('nama_area','ASC');
        $query = $this->db->get();
        return $query;
    }



	public function cek_area($key_area)
	{
		$this->db->where('id_area_kerja',$key_area);
		$hasil = $this->db->get('data_area_kerja');
		return $hasil;
	}


	public function getdata($key)
	{
		$this->db->where('id_area_kerja',$key);
		$hasil = $this->db->get('data_area_kerja');
		return $hasil;
	}

	public function ubah_jml_mp($key_area, $data_area)
	{
		$this->db->where('id_area_kerja',$key_area);
		$this->db->update('data_area_kerja',$data_area);
	}

	public function getupdate($key, $data)
	{
		$this->db->where('id_area_kerja',$key);
		$this->db->update('data_area_kerja',$data);
	}




	public function getinsert($data)
	{
		$this->db->insert('data_area_kerja',$data);
	}


	function delete($id) {
	$this->db->where('id_area_kerja', $id);
	$this->db->delete('data_area_kerja');
	}

}

?>
