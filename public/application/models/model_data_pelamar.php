<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Model_data_pelamar extends CI_Model {

        function view_by($id){
        $query = $this->db->query("SELECT * FROM data_pelamar where id_pelamar='$id'");
        return ($query->num_rows() > 0)? $query->result():FALSE;
        }


        public function tampil_training_area($nama_area)
     {
            $tgl_now = date("Y-m-d");
         $this->db->select('*');
         $this->db->from('data_pelamar');
         $this->db->where('nama_area_tahap2',$nama_area);
         $this->db->where('tanggal_training_selesai >=', $tgl_now);
           
         $query = $this->db->get();
         return $query;
     }


    public function getdata($key)
    {
        $this->db->where('id_pelamar',$key);
        $hasil = $this->db->get('data_pelamar');
        return $hasil;
    }

    public function diterima($key, $data)
    {
        $this->db->where('id_pelamar',$key);
        $this->db->update('data_pelamar',$data);
    }

    public function ditolak($key, $data)
    {
        $this->db->where('id_pelamar',$key);
        $this->db->update('data_pelamar',$data);
    }


    public function jumlah_lamaran_masuk()
    {
        $this->db->select('*');
        $this->db->from('data_pelamar');
        $this->db->order_by('id_pelamar','DESC');
        $this->db->where('status','0');
        $query = $this->db->get();
        return $query;
    }

    public function jumlah_interview()
    {
        $this->db->select('*');
        $this->db->from('data_pelamar');
        $this->db->order_by('id_pelamar','DESC');
        $this->db->where('status','2');
        $query = $this->db->get();
        return $query;
    }

    public function jumlah_training()
    {
        $this->db->select('*');
        $this->db->from('data_pelamar');
        $this->db->order_by('id_pelamar','DESC');
        $this->db->where('status','3');
        $query = $this->db->get();
        return $query;
    }

    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('data_pelamar');
        $this->db->order_by('status','DESC');
        $this->db->where('status <','2');

        $query = $this->db->get();
        return $query;
    }

    public function tampil_interview()
    {
        $this->db->select('*');
        $this->db->from('data_pelamar');
        $this->db->order_by('status','DESC');
        $this->db->where('status >','1');
        $this->db->where('status <','4');
        $query = $this->db->get();
        return $query;
    }
        public function tampil_training()
    {
        $this->db->select('*');
        $this->db->from('data_pelamar');
        $this->db->order_by('status','DESC');
        $this->db->where('status >','3');
        $this->db->where('status <','7');


        $query = $this->db->get();
        return $query;
    }
     public function tampil_kontrak()
    {
        $this->db->select('*');
        $this->db->from('data_pelamar');
        $this->db->order_by('id_pelamar','DESC');
        $this->db->where('status','5');

        $query = $this->db->get();
        return $query;
    }




    function hapus($id) {
    $this->db->where('id_pelamar', $id);
    $this->db->delete('data_pelamar');
    }


        public function konfirmasi($key, $data)
    {
        $this->db->where('id_pelamar',$key);
        $this->db->update('data_pelamar',$data);
    }




}

?>
