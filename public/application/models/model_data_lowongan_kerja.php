<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Model_data_lowongan_kerja extends CI_Model {


 
            function lihat_berdasarkan_lowongan($key)
    {
        $this->db->select('*');
        $this->db->from('data_pelamar');
        $this->db->where('posisi', $key);
        $this->db->order_by('id_pelamar','DESC');
        $this->db->where('status <','3');
        $query = $this->db->get();
        return $query;

    }
        public function tampil_lowongan()
    { 
        $this->db->select('*');
        $this->db->from('data_lowongan a');
        $this->db->join('data_deskripsi_lowongan b','a.id_lowongan=b.id_lowongan');
          $this->db->order_by('tanggal_akhir', "DESC");
        $query = $this->db->get();
        return $query;
    }  


     public function tampil_deskripsi_awal()
    { 
        $this->db->select('*');
        $this->db->from('data_deskripsi_lowongan a');
        $this->db->join('data_lowongan b','a.id_lowongan=b.id_lowongan');
        $this->db->group_by('a.id_lowongan');

//        $this->db->where('id_lowongan','1');
        $query = $this->db->get();
        return $query;
    } 

         public function tampil_persyaratan_awal()
    { 
        $this->db->select('*');
        $this->db->from('data_persyaratan_lowongan a');
        $this->db->join('data_lowongan b','a.id_lowongan=b.id_lowongan');
        $this->db->group_by('a.id_lowongan');
   //$this->db->where('id_lowongan','1');
        $query = $this->db->get();
        return $query;
    } 




        function view_by($id){
        $query = $this->db->query("SELECT * FROM data_lowongan_ where id_lowongan='$id'");
        return ($query->num_rows() > 0)? $query->result():FALSE;
        }

            public function view_by_add($id)
    { 
        $this->db->select('*');
        $this->db->from('data_lowongan');
        $this->db->where('id_lowongan',$id);
        $this->db->group_by('id_lowongan', $id); 
        $query = $this->db->get();
        return $query;
    } 


    public function tampil()
    { 
        $tgl_now = date("Y-m-d");
        $this->db->select('*');
        $this->db->from('data_lowongan');
        $this->db->order_by('tanggal_akhir', "DESC");
        $query = $this->db->get();
        return $query;
    } 

        public function tampil_halaman_lowongan($id)
    { 

        $this->db->select('*');
        $this->db->from('data_lowongan');
        $this->db->where('id_lowongan', $id);
        $this->db->order_by('id_lowongan','ASC');
        $query = $this->db->get();
        return $query;
    } 

    

        public function tampil_deskripsi($id)
    { 
        $this->db->select('*');
        $this->db->from('data_deskripsi_lowongan a');
        $this->db->join('data_lowongan b', 'b.id_lowongan=a.id_lowongan');
        $this->db->where('a.id_lowongan', $id);
        $this->db->order_by('a.id_deskripsi','DESC');
        $query = $this->db->get();
        return $query;
    } 

        public function tampil_persyaratan($id)
    { 
        $this->db->select('*');
        $this->db->from('data_persyaratan_lowongan a');
        $this->db->join('data_lowongan b', 'b.id_lowongan=a.id_lowongan');
        $this->db->where('a.id_lowongan', $id);
        $this->db->order_by('a.id_persyaratan','DESC');
        $query = $this->db->get();
        return $query;
    } 

    

    //////////////////

    public function getdatadeskripsi($key)
    {
        $this->db->where('id_deskripsi',$key);
        $hasil = $this->db->get('data_deskripsi_lowongan');
        return $hasil;
    }

    public function ubahdeskripsi($key, $data)
    {
        $this->db->where('id_deskripsi',$key);
        $this->db->update('data_deskripsi_lowongan',$data);
    } 


    public function simpandeskripsi($data)
    {
        $this->db->insert('data_deskripsi_lowongan',$data);
    }


////////////

    //////////////////

    public function getdatapersyaratan($key)
    {
        $this->db->where('id_persyaratan',$key);
        $hasil = $this->db->get('data_persyaratan_lowongan');
        return $hasil;
    }

    public function ubahpersyaratan($key, $data)
    {
        $this->db->where('id_persyaratan',$key);
        $this->db->update('data_persyaratan_lowongan',$data);
    } 

    public function simpanpersyaratan($data)
    {
        $this->db->insert('data_persyaratan_lowongan',$data);
    }



   //////////////////


    public function getdatalowongan($key)
    {
        $this->db->where('id_lowongan',$key);
        $hasil = $this->db->get('data_lowongan');
        return $hasil;
    }

    public function ubahlowongan($key, $data)
    {
        $this->db->where('id_lowongan',$key);
        $this->db->update('data_lowongan',$data);
    } 

    public function simpanlowongan($data)
    {
        $this->db->insert('data_lowongan',$data);
    }



    function hapus_lowongan($id) {
    $this->db->where('id_lowongan', $id);
    $this->db->delete('data_lowongan');
    }
        function hapus_deskripsi($id) {
    $this->db->where('id_deskripsi', $id);
    $this->db->delete('data_deskripsi_lowongan');
    }

     function hapus_persyaratan($id) {
    $this->db->where('id_persyaratan', $id);
    $this->db->delete('data_persyaratan_lowongan');
    }

////////////////////

      function get_update($data,$where){
       $this->db->where($where);
       $this->db->update('data_lowongan', $data);
       return TRUE;
    }



    public function update_lowongan($key1, $data1)
    {
        $this->db->where('id_lowongan',$key1);
        $this->db->update('data_lowongan',$data1);
    } 


}

?>