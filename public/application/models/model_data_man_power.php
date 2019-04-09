<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Model_data_man_power extends CI_Model {

        function view_by($id){
        $query = $this->db->query("SELECT * FROM data_man_power where id_man_power='$id'");
        return ($query->num_rows() > 0)? $query->result():FALSE;
        }


        public function bpjs_ket()
        {
              $tgl_now = date("Y-m-d");
            $this->db->select('*');
            $this->db->from('data_man_power a');
            $this->db->join('data_kontrak_kerja b','b.id_kontrak=a.id_kontrak');
            $this->db->join('data_area_kerja c','c.id_area_kerja=b.id_area_kerja');
            // $this->db->order_by('a.id_man_power','DESC');
            // $this->db->order_by('b.tgl_selesai','DESC');
            // $this->db->order_by('a.nama_mp','ASC');
            $this->db->where('b.tgl_selesai >=', $tgl_now);
            $this->db->where('a.no_bpjs_ket','' );
            $this->db->where('a.no_bpjs_ket < ','0' );

            $query = $this->db->get();
            return $query;
        }

        public function bpjs_kes()
        {
              $tgl_now = date("Y-m-d");
            $this->db->select('*');
            $this->db->from('data_man_power a');
            $this->db->join('data_kontrak_kerja b','b.id_kontrak=a.id_kontrak');
            $this->db->join('data_area_kerja c','c.id_area_kerja=b.id_area_kerja');
            // $this->db->order_by('a.id_man_power','DESC');
            // $this->db->order_by('b.tgl_selesai','DESC');
            // $this->db->order_by('a.nama_mp','ASC');
            $this->db->where('b.tgl_selesai >', $tgl_now);
            $this->db->where('a.no_bpjs_kes','' );
            $this->db->where('a.no_bpjs_kes < ','0' );
            $query = $this->db->get();
            return $query;
        }


        public function history_man_power()
    {
        $this->db->select('*');
        $this->db->from('data_man_power a');
        $this->db->join('data_riwayat_pekerjaan b','b.id_man_power=a.id_man_power');
        $this->db->join('data_area_kerja c','c.id_area_kerja=b.id_area_kerja');
        $this->db->group_by('a.id_man_power');
        $this->db->order_by('a.id_man_power','DESC');
        $query = $this->db->get();
        return $query;
    }


    public function tampil_mp()
    {
        $this->db->select('*');
        $this->db->from('data_man_power');
        $this->db->where('id_kontrak','0');
        $this->db->order_by('id_man_power','DESC');
        $query = $this->db->get();
        return $query;
    }


 public function ulang_tahun()
    {
        $tgl_now = date("Y-m-d");
        $this->db->select('*');
        $this->db->from('data_man_power a');
        $this->db->join('data_kontrak_kerja b','b.id_kontrak=a.id_kontrak');
        $this->db->join('data_area_kerja c','c.id_area_kerja=b.id_area_kerja');
        $this->db->order_by('a.id_man_power','DESC');
        $this->db->where('a.tanggal_lahir_mp =', $tgl_now);
        $query = $this->db->get();
        return $query;
    }

 public function ulang_tahun_area($area)
    {
        $tgl_now = date("Y-m-d");
        $this->db->select('*');
        $this->db->from('data_man_power a');
        $this->db->join('data_kontrak_kerja b','b.id_kontrak=a.id_kontrak');
        $this->db->join('data_area_kerja c','c.id_area_kerja=b.id_area_kerja');
        $this->db->order_by('a.id_man_power','DESC');
        $this->db->where('a.tanggal_lahir_mp =', $tgl_now);
        $this->db->where('c.id_area_kerja', $area);
        $query = $this->db->get();
        return $query;
    }




 public function limit()
    {
        $tgl_now = date("Y-m-d");
        $this->db->select('*');
        $this->db->from('data_man_power a');
        $this->db->join('data_kontrak_kerja b','b.id_kontrak=a.id_kontrak');
        $this->db->join('data_area_kerja c','c.id_area_kerja=b.id_area_kerja');
        $this->db->order_by('b.tgl_selesai','ASC  ');
        $this->db->where('b.tgl_selesai >=', $tgl_now);
        // $this->db->where('b.tgl_selesai =', $tgl_now);
        $query = $this->db->get();
        return $query;
    }
     public function limit_area($area)
    {
        $tgl_now = date("Y-m-d");
        $this->db->select('*');
        $this->db->from('data_man_power a');
        $this->db->join('data_kontrak_kerja b','b.id_kontrak=a.id_kontrak');
        $this->db->join('data_area_kerja c','c.id_area_kerja=b.id_area_kerja');
        $this->db->order_by('a.id_man_power','DESC');
        $this->db->where('b.tgl_selesai <', $tgl_now);
         $this->db->where('c.id_area_kerja', $area);
        $query = $this->db->get();
        return $query;
    }


    public function tampil_mp_area($id)
    {
        $tgl_now = date("Y-m-d");
        $this->db->select('*');
        $this->db->from('data_man_power a');
        $this->db->join('data_kontrak_kerja b','b.id_kontrak=a.id_kontrak');
        $this->db->join('data_area_kerja c','c.id_area_kerja=b.id_area_kerja');
        $this->db->where('b.id_area_kerja', $id);
        $this->db->where('b.tgl_selesai >', $tgl_now);
        $this->db->order_by('a.id_man_power','DESC');
        $query = $this->db->get();
        return $query;
    }

 public function tampil_mp_area_kpi($id)
    {
        $tgl_now = date("Y-m-d");
        $this->db->select('*');
        $this->db->from('data_man_power a');
        $this->db->join('data_kontrak_kerja b','b.id_kontrak=a.id_kontrak');
        $this->db->join('data_area_kerja c','c.id_area_kerja=b.id_area_kerja');
        $this->db->join('data_kpi d','d.id_man_power=a.id_man_power');
        $this->db->where('b.id_area_kerja', $id);
        $this->db->where('b.tgl_selesai >', $tgl_now);
        $this->db->order_by('a.id_man_power','DESC');
        $query = $this->db->get();
        return $query;
    }




    public function tampil_aktif()
    {
        $tgl_now = date("Y-m-d");
        $this->db->select('*');
        $this->db->from('data_man_power a');
        $this->db->join('data_kontrak_kerja b','b.id_kontrak=a.id_kontrak');
        $this->db->join('data_area_kerja c','c.id_area_kerja=b.id_area_kerja');
        $this->db->order_by('a.id_man_power','DESC');
        $this->db->where('b.tgl_selesai >', $tgl_now);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_non_aktif()
    {
        $tgl_now = date("Y-m-d");
        $this->db->select('*');
        $this->db->from('data_man_power a');
        $this->db->join('data_kontrak_kerja b','b.id_kontrak=a.id_kontrak');
        $this->db->join('data_area_kerja c','c.id_area_kerja=b.id_area_kerja');
        $this->db->order_by('a.id_man_power','DESC');
        $this->db->where('b.tgl_selesai <', $tgl_now);
        $query = $this->db->get();
        return $query;
    }

    public function tampil()
    {

        $this->db->select('*');
        $this->db->from('data_man_power a');
        $this->db->join('data_kontrak_kerja b','b.id_kontrak=a.id_kontrak');
        $this->db->join('data_area_kerja c','c.id_area_kerja=b.id_area_kerja');
        // $this->db->order_by('a.id_man_power','DESC');
        $this->db->order_by('b.tgl_selesai','DESC');
        // $this->db->order_by('a.nama_mp','ASC');
        $query = $this->db->get();
        return $query;
    }

        public function tampil_area($area)
    {
        $tgl_now = date("Y-m-d");
        $this->db->select('*');
        $this->db->from('data_man_power a');
        $this->db->join('data_kontrak_kerja b','b.id_kontrak=a.id_kontrak');
        $this->db->join('data_area_kerja c','c.id_area_kerja=b.id_area_kerja');
        $this->db->where('c.id_area_kerja', $area);
        $this->db->where('b.tgl_selesai >', $tgl_now);
        $this->db->order_by('a.id_man_power','DESC');
        $query = $this->db->get();
        return $query;
    }


    public function detail($id)
    {
        $this->db->select('*');
        $this->db->from('data_man_power a');
        $this->db->join('data_kontrak_kerja b','b.id_kontrak=a.id_kontrak');
        $this->db->join('data_area_kerja c','c.id_area_kerja=b.id_area_kerja');
        $this->db->where('a.id_man_power', $id);
        $this->db->order_by('a.id_man_power','DESC');
        $query = $this->db->get();
        return $query;
    }
        public function pendidikan($id)
    {
        $this->db->select('*');
        $this->db->from('data_man_power a');
        $this->db->join('data_pendidikan b','b.id_man_power=a.id_man_power');
        $this->db->where('a.id_man_power', $id);
        $this->db->order_by('a.id_man_power','DESC');
        $query = $this->db->get();
        return $query;
    }


        public function riwayat_area($id)
    {
        $this->db->select('*');
        $this->db->from('data_man_power a');
        $this->db->join('data_riwayat_pekerjaan b','b.id_man_power=a.id_man_power');
        $this->db->join('data_area_kerja c','c.id_area_kerja=b.id_area_kerja');
        $this->db->where('c.id_area_kerja', $id);
        $this->db->order_by('a.id_man_power','DESC');
        $query = $this->db->get();
        return $query;
    }

        public function detail_kpi($id)
    {
        $this->db->select('*');
        $this->db->from('data_man_power a');
        $this->db->join('data_kontrak_kerja b','b.id_kontrak=a.id_kontrak');
        $this->db->join('data_area_kerja c','c.id_area_kerja=b.id_area_kerja');
        $this->db->join('data_kpi d','d.id_man_power=a.id_man_power');
        $this->db->where('a.id_man_power', $id);
        $this->db->order_by('a.id_man_power','DESC');
        $query = $this->db->get();
        return $query;
    }

        public function kpi_tampil()
    {
        $this->db->select('*');
        $this->db->from('data_man_power a');
        $this->db->join('data_kpi b','b.id_man_power=a.id_man_power');
        $this->db->join('data_area_kerja c','c.id_area_kerja=b.id_area_kerja');
        $this->db->join('data_kontrak_kerja d','d.id_kontrak=a.id_kontrak');
        $this->db->order_by('b.id_kpi','DESC');
        $query = $this->db->get();
        return $query;
    }

        public function kpi_tampil_area($key)
    {
        $this->db->select('*');
        $this->db->from('data_man_power a');
        $this->db->join('data_kpi b','b.id_man_power=a.id_man_power');
        $this->db->join('data_area_kerja c','c.id_area_kerja=b.id_area_kerja');
        $this->db->join('data_kontrak_kerja d','d.id_kontrak=a.id_kontrak');
        $this->db->where('c.nama_area', $key);
        $this->db->order_by('b.id_kpi','DESC');
        $query = $this->db->get();
        return $query;
    }

    

 public function kpi($id)
    {
        $this->db->select('*');
        $this->db->from('data_man_power a');
        $this->db->join('data_kpi b','b.id_man_power=a.id_man_power');
        $this->db->join('data_area_kerja c','c.id_area_kerja=b.id_area_kerja');
        $this->db->where('a.id_man_power', $id);
        $this->db->order_by('b.id_kpi','DESC');
        $query = $this->db->get();
        return $query;
    }

        public function riwayat($id)
    {
        $this->db->select('*');
        $this->db->from('data_man_power a');
        $this->db->join('data_riwayat_pekerjaan b','b.id_man_power=a.id_man_power');
        $this->db->join('data_area_kerja c','c.id_area_kerja=b.id_area_kerja');
        $this->db->where('a.id_man_power', $id);
        $this->db->order_by('a.id_man_power','DESC');
        $query = $this->db->get();
        return $query;
    }

            public function cek_hapus_riwayat($id)
    {
        $this->db->select('*');
        $this->db->from('data_riwayat_pekerjaan a');
        $this->db->join('data_man_power b','b.id_man_power=a.id_man_power');
        $this->db->where('a.id_riwayat', $id);
        $query = $this->db->get();
        return $query;
    }

        public function pengalaman($id)
    {
        $this->db->select('*');
        $this->db->from('data_man_power a');
        $this->db->join('data_pengalaman_kerja b','b.id_man_power=a.id_man_power');
        $this->db->where('a.id_man_power', $id);
        $this->db->order_by('a.id_man_power','DESC');
        $query = $this->db->get();
        return $query;
    }

            public function anak($id)
    {
        $this->db->select('*');
        $this->db->from('data_man_power a');
        $this->db->join('data_anak b','b.id_man_power=a.id_man_power');
        $this->db->where('a.id_man_power', $id);
        $this->db->order_by('a.id_man_power','DESC');
        $query = $this->db->get();
        return $query;
    }

                public function saudara($id)
    {
        $this->db->select('*');
        $this->db->from('data_man_power a');
        $this->db->join('data_saudara b','b.id_man_power=a.id_man_power');
        $this->db->where('a.id_man_power', $id);
        $this->db->order_by('a.id_man_power','DESC');
        $query = $this->db->get();
        return $query;
    }

     public function tampil_kontrak_kerja_area($area)
    {
        $this->db->select('*');
        $this->db->from('data_kontrak_kerja a');
        $this->db->join('data_man_power b','b.id_kontrak=a.id_kontrak');
        $this->db->join('data_area_kerja c','c.id_area_kerja=a.id_area_kerja');
        $this->db->order_by('a.id_area_kerja','DESC');
        $this->db->where('c.id_area_kerja',$area);
        $query = $this->db->get();
        return $query;
    }




	public function getdata($key)
	{
		$this->db->where('id_man_power',$key);
		$hasil = $this->db->get('data_man_power');
		return $hasil;
	}

	public function getupdate($key, $data)
	{
		$this->db->where('id_man_power',$key);
		$this->db->update('data_man_power',$data);
	}


	public function getinsert($data)
	{
		$this->db->insert('data_man_power',$data);
	}


	function delete($id) {
	$this->db->where('id_man_power', $id);
	$this->db->delete('data_man_power');
	}



    public function getdata1($key1)
    {
        $this->db->where('id_man_power',$key1);
        $hasil = $this->db->get('data_man_power');
        return $hasil;
    }
    public function getinsert1($data1)
    {
        $this->db->insert('data_man_power',$data1);
    }

        public function update_kontrak($key1, $data1)
    {
        $this->db->where('id_man_power',$key1);
        $this->db->update('data_man_power',$data1);
    }


 function get_update($data,$where){
       $this->db->where($where);
       $this->db->update('data_man_power', $data);
       return TRUE;
    }



    public function update_man_power($key1, $data1)
    {
        $this->db->where('id_man_power',$key1);
        $this->db->update('data_man_power',$data1);
    }


/////////profil-----------------------------------

        public function cek_riwayatkerja($key)
    {
        $this->db->where('id_riwayat',$key);
        $hasil = $this->db->get('data_riwayat_pekerjaan');
        return $hasil;
    }

    public function ubah_riwayatkerja($key, $data)
    {
        $this->db->where('id_riwayat',$key);
        $this->db->update('data_riwayat_pekerjaan',$data);
    }


    public function simpan_riwayatkerja($data)
    {
        $this->db->insert('data_riwayat_pekerjaan',$data);
    }


    function hapus_riwayatkerja($id) {
    $this->db->where('id_riwayat', $id);
    $this->db->delete('data_riwayat_pekerjaan');
    }

///----------------------------------


        public function cek_pengalamankerja($key)
    {
        $this->db->where('id_pengalaman',$key);
        $hasil = $this->db->get('data_pengalaman_kerja');
        return $hasil;
    }

    public function ubah_pengalamankerja($key, $data)
    {
        $this->db->where('id_pengalaman',$key);
        $this->db->update('data_pengalaman_kerja',$data);
    }


    public function simpan_pengalamankerja($data)
    {
        $this->db->insert('data_pengalaman_kerja',$data);
    }


    function hapus_pengalamankerja($id) {
    $this->db->where('id_pengalaman', $id);
    $this->db->delete('data_pengalaman_kerja');
    }



///----------------------------------


        public function cek_informasianak($key)
    {
        $this->db->where('id_anak',$key);
        $hasil = $this->db->get('data_anak');
        return $hasil;
    }

    public function ubah_informasianak($key, $data)
    {
        $this->db->where('id_anak',$key);
        $this->db->update('data_anak',$data);
    }


    public function simpan_informasianak($data)
    {
        $this->db->insert('data_anak',$data);
    }

    function hapus_informasianak($id) {
    $this->db->where('id_anak', $id);
    $this->db->delete('data_anak');
    }


///----------------------------------


        public function cek_informasipendidikan($key)
    {
        $this->db->where('id_pendidikan',$key);
        $hasil = $this->db->get('data_pendidikan');
        return $hasil;
    }

    public function ubah_informasipendidikan($key, $data)
    {
        $this->db->where('id_pendidikan',$key);
        $this->db->update('data_pendidikan',$data);
    }


    public function simpan_informasipendidikan($data)
    {
        $this->db->insert('data_pendidikan',$data);
    }

    function hapus_informasipendidikan($id) {
    $this->db->where('id_pendidikan', $id);
    $this->db->delete('data_pendidikan');
    }

///----------------------------------


        public function cek_informasisaudara($key)
    {
        $this->db->where('id_saudara',$key);
        $hasil = $this->db->get('data_saudara');
        return $hasil;
    }

    public function ubah_informasisaudara($key, $data)
    {
        $this->db->where('id_saudara',$key);
        $this->db->update('data_saudara',$data);
    }


    public function simpan_informasisaudara($data)
    {
        $this->db->insert('data_saudara',$data);
    }

    function hapus_informasisaudara($id) {
    $this->db->where('id_saudara', $id);
    $this->db->delete('data_saudara');
    }



///----------------------------------


        public function cek_manpower($key)
    {
        $this->db->where('id_man_power',$key);
        $hasil = $this->db->get('data_man_power');
        return $hasil;
    }

    public function ubah_manpower($key, $data)
    {
        $this->db->where('id_man_power',$key);
        $this->db->update('data_man_power',$data);
    }



   function ubah_photo($data,$where){
       $this->db->where($where);
       $this->db->update('data_man_power', $data);
       return TRUE;
    }











}

?>
