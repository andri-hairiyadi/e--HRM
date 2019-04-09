<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_kpi extends CI_Model {


		function view_by($id){
	    $query = $this->db->query("SELECT * FROM data_kpi where id_kpi='$id'");
	    return ($query->num_rows() > 0)? $query->result():FALSE;
		}



	public function getdata($key)
	{
		$this->db->where('id_kpi',$key);
		$hasil = $this->db->get('data_kpi');
		return $hasil;
	}

	public function getupdate($key, $data)
	{
		$this->db->where('id_kpi',$key);
		$this->db->update('data_kpi',$data);
	} 

	     function get_update($data,$where){
       $this->db->where($where);
       $this->db->update('data_kpi', $data);
       return TRUE;
    }



	public function getinsert($data)
	{
		$this->db->insert('data_kpi',$data);
	}
	
	    public function update_kpi($key1, $data1)
	{
		$this->db->where('id_kpi',$key1);
		$this->db->update('data_kpi',$data1);
	} 

	function delete($id) {
	$this->db->where('id_kpi', $id);
	$this->db->delete('data_kpi');
	}

	public function cek_mp($key1)
    {
        $this->db->where('id_man_power',$key1);
        $hasil = $this->db->get('data_man_power');
        return $hasil;
    }

    public function ubah_mp($key1, $data1)
    {
        $this->db->where('id_man_power',$key1);
        $this->db->update('data_man_power',$data1);
    } 

	public function cek_mp9($key9)
    {
        $this->db->where('id_man_power',$key9);
        $hasil = $this->db->get('data_man_power');
        return $hasil;
    }

    public function ubah_mp9($key9, $data9)
    {
        $this->db->where('id_man_power',$key9);
        $this->db->update('data_man_power',$data9);
    } 



}

?>