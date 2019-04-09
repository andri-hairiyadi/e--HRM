<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Model_data_kontrak_kerja extends CI_Model {

        function view_by($id){
        $query = $this->db->query("SELECT * FROM data_kontrak_kerja where id_kontrak='$id'");
        return ($query->num_rows() > 0)? $query->result():FALSE;
        }


      public function lihat_berdasarkan_area($key)
    {
        $tgl_now = date("Y-m-d");
        $this->db->select('*');
        $this->db->from('data_kontrak_kerja a');
        $this->db->join('data_man_power b','b.id_kontrak=a.id_kontrak');
        $this->db->join('data_area_kerja c','c.id_area_kerja=a.id_area_kerja');
        $this->db->where('a.id_area_kerja',$key);
          $this->db->where('a.tgl_selesai >', $tgl_now);
        // $this->db->order_by('a.id_kontrak','DESC');
        $query = $this->db->get();
        return $query;
    }



        public function kontrak_kerja_mp($id)
    {
        $this->db->select('*');
        $this->db->from('data_kontrak_kerja a');
        $this->db->join('data_man_power b','b.id_kontrak=a.id_kontrak');
        $this->db->join('data_area_kerja c','c.id_area_kerja=a.id_area_kerja');
        $this->db->where('a.id_man_power',$id);
        $this->db->order_by('a.id_kontrak','DESC');
        $query = $this->db->get();
        return $query;
    }

            public function kontrak_kerja_area($id)
    {
        $this->db->select('*');
        $this->db->from('data_kontrak_kerja a');
        $this->db->join('data_man_power b','b.id_kontrak=a.id_kontrak');
        $this->db->join('data_area_kerja c','c.id_area_kerja=a.id_area_kerja');
        $this->db->where('a.id_area_kerja',$id);
        $this->db->order_by('a.id_kontrak','DESC');
        $query = $this->db->get();
        return $query;
    }

        public function tampil()
    {
        $tgl_now = date("Y-m-d");
        $this->db->select('*');
        $this->db->from('data_kontrak_kerja a');
        $this->db->join('data_man_power b','b.id_kontrak=a.id_kontrak');
        $this->db->join('data_area_kerja c','c.id_area_kerja=a.id_area_kerja');
        $this->db->order_by('a.tgl_selesai','DESC');
        // $this->db->where('a.tgl_selesai >=', $tgl_now);
        $query = $this->db->get();
        return $query;
    }
            public function tampil_kontrak_area()
    {
        $this->db->select('*');
        $this->db->from('data_area_kerja');
        $this->db->where('mp_yang_ada >','0');
        $this->db->order_by('id_area_kerja','DESC');

        $query = $this->db->get();
        return $query;
    }


  public function detail_mp_area($id)
    {
        $this->db->select('*');
        $this->db->from('data_kontrak_kerja a');
        $this->db->join('data_man_power b','b.id_kontrak=a.id_kontrak');
        $this->db->join('data_area_kerja c','c.id_area_kerja=a.id_area_kerja');
        $this->db->order_by('a.id_area_kerja','DESC');
        $this->db->where('a.id_area_kerja', $id);
        $query = $this->db->get();
        return $query;
    }


  public function detail($id)
    {
        $this->db->select('*');
        $this->db->from('data_kontrak_kerja a');
        $this->db->join('data_man_power b','b.id_kontrak=a.id_kontrak');
        $this->db->join('data_area_kerja c','c.id_area_kerja=a.id_area_kerja');
        $this->db->order_by('a.id_area_kerja','DESC');
        $this->db->where('a.id_kontrak', $id);
        $query = $this->db->get();
        return $query;
    }



	public function getdata($key)
	{
		$this->db->where('id_kontrak',$key);
		$hasil = $this->db->get('data_kontrak_kerja');
		return $hasil;
	}

	public function getupdate($key, $data)
	{
		$this->db->where('id_kontrak',$key);
		$this->db->update('data_kontrak_kerja',$data);
	}


	public function getinsert($data)
	{
		$this->db->insert('data_kontrak_kerja',$data);
	}


	function delete($id) {
	$this->db->where('id_kontrak', $id);
	$this->db->delete('data_kontrak_kerja');
	}

}

?>
