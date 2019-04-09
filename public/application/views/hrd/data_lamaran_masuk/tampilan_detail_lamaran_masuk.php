

<?php echo $this->load->view('hrd/data_lamaran_masuk/status_ditolak');?>
<?php echo $this->load->view('hrd/data_lamaran_masuk/status_diterima');?>

<style>
.detail_foto1{
  background-color: #fff;
  width:190px;
  height:240px;
  float:left;
  box-shadow: 0 0 1px 0 #333;
}

.detail_foto2{
  background-color: #fff;
  width:120px;
  height:240px;
  float:left;
  margin-left: 10px; 
  box-shadow: 0 0 1px 0 #333;

} 

.detail_foto3{
  background-color: #fff;
  width:120px;
  height:240px;
  float:left;
  margin-left: 10px;
  box-shadow: 0 0 1px 0 #333;

}
.batas{
  width: 80px;
  height: 5px;
}
table{
font-size: 15px;

}
td, th { 
    padding: 5px; 
    text-align: left; 
    font-size: 14px;
    }

</style>
   <!-- page content -->
        <div class="right_col" role="main" style="background-image:url(<?php echo base_url();?>style/images/latar.jpg)" >

          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><i class="fa fa-envelope"></i> Data Lamaran Masuk&nbsp;<small><i class="fa fa-angle-double-right"></i> Detail</small></h3>
              </div>
                 <div class="title_right">
                <div class="col-md-4 col-sm-4 col-xs-12 form-group pull-right top_search">

                  <div class="input-group">
                 <div class="btn btn-round btn-default btn-block"><i class="fa fa-calendar"></i>&nbsp;
            
        <script>
          var bln=['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
          var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
          var tgl= new Date();
          var hari=tgl.getDate();
          var bulan=tgl.getMonth();
          var hariini=tgl.getDay();
          hariini=myDays[hariini];
          var yy=tgl.getYear();
          var tahun=(yy<1000)?yy+1900:yy;
          document.write(hariini+', '+hari+" "+bln[bulan]+" "+tahun)
        </script>          
             </div>
                  </div>
                </div>
              </div>

            </div>
 
            </div>
            
            <div class="clearfix"></div>
            
<?php
    foreach ($detail as $data) {
    ?>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">
           
                  <ul class="nav navbar-right panel_toolbox">
                <a href="<?php echo base_url();?>hrd/data_lamaran_masuk" class="btn btn-dark pull-right" style="margin-right: 5px;"><i class="fa fa-arrow-left"></i>&nbsp;Kembali</a>               
                  </ul>
                    
                  <div class="x_content">
               
                   <div class="col-md-4 col-sm-4 col-xs-12 profile_left">
                   
                   <div class="col-md-6 col-sm-6 col-xs-12">

                           <a href="" data-toggle="modal" data-target="#tolak<?php echo $data->id_pelamar; ?>" class="btn btn-danger btn-block"><i class="fa fa-close"></i> Di Tolak</a>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                           <a href="" data-toggle="modal" data-target="#terima<?php echo $data->id_pelamar; ?>" class="btn btn-success btn-block"><i class="fa fa-check"></i> Di Terima</a>
                    </div>
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <center>
                          <img class="img-responsive avatar-view" src="<?php echo base_url();?>style/dokumen_pelamar/<?php echo $data->file_photo;?>" width="300px" height="400px" alt="Avatar" >
                          </center>
                        </div>
                      </div>
                   <center>   <b><h3><?php echo $data->nama_pelamar; ?></h3></b></center>
                   <center>   <u><h4><?php echo $data->no_pendaftaran; ?></h4></u></center>
                      <a href="<?php echo base_url('style/dokumen_pelamar/'.$data->file_ktp_sim); ?>" target="_blank" class="btn btn-primary btn-block"><i class="fa fa-file"></i> File Kartu Tanda Penduduk (KTP) / (SIM)</a>
                      <a href="<?php echo base_url('style/dokumen_pelamar/'.$data->file_kk); ?>" target="_blank" class="btn btn-primary btn-block"><i class="fa fa-file"></i> File Kartu Keluarga (KK)</a>
                      <a href="<?php echo base_url('style/dokumen_pelamar/'.$data->file_ijazah); ?>" target="_blank" class="btn btn-primary btn-block"><i class="fa fa-file"></i> File Kartu Ijazah Terakhir</a>

                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
<div class="well" style="overflow: auto">
 <div class="col-md-12">
  <?=$this->session->flashdata('pesan')?>
                      <div class="form-group">
                       
                       <table>
                           <tr>
                                       
                                        <td width="29%">Posisi Pelamar</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<b><?php echo $data->posisi;?></b></td>
                                    </tr>
                                      <tr>
                                       
                                        <td width="29%">Nama Lengkap</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<b><?php echo $data->nama_pelamar;?></b></td>
                                    </tr>
                                    <tr>
                                       
                                        <td width="29%">Nomor Identitas (KTP)</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->nomor_ktp;?></td>
                                    </tr>
                                   
                                    <tr>
                                        <td width="29%">No. Hp</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->no_hp;?></td>
                                    </tr>
                                    <tr>
                                        <td width="29%">Jenis Kelamin</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->jenis_kelamin;?></td>
                                    </tr>
                         
                                     <tr>
                                        <td width="29%">Tanggal Daftar</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo tgl_indo($data->tanggal_daftar);?></td>
                                    </tr>
                                    <tr>
                                        <td width="29%">Jam Daftar</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->jam_daftar;?></td>
                                    </tr>
                                     <tr>
                                        <td width="29%">Tempat, Tanggal Lahir</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->tempat_lahir;?>, <?php echo tgl_indo($data->tanggal_lahir);?></td>
                                    </tr>
                                    <tr>
                                        <td width="29%">Alamat</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->alamat;?></td>
                                    </tr>
                                    <tr>
                                        <td width="29%">RT/ RW/ Kelurahan</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->rt;?>/ <?php echo $data->rw;?>/ <?php echo $data->kelurahan;?></td>
                                    </tr>
                                     <tr>
                                        <td width="29%">Agama</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->agama;?></td>
                                    </tr>
                                   
                                    <tr>
                                        <td width="29%">Hobi</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->hobi;?></td>
                                    </tr>
                                     <tr>
                                        <td width="29%">Pendidikan Terakhir</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->pendidikan_terakhir;?></td>
                                    </tr>
                                    <tr>
                                        <td width="29%">Nama Sekolah</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->nama_sekolah;?></td>
                                    </tr>
                                    <tr>
                                        <td width="29%">Tahun Lulus</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->tahun_lulus;?></td>
                                    </tr>
                                    <tr>
                                        <td width="29%">Nomor Ijazah</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->nomor_ijazah;?></td>
                                    </tr>
                                    <tr>
                                        <td width="29%">Golongan Darah</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->golongan_darah;?> </td>
                                    </tr>
                                    <tr>
                                        <td width="29%">Tinggi Badan</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->tinggi_badan;?> Cm</td>
                                    </tr>
                                    <tr>
                                        <td width="29%">Berat Badan</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->berat_badan;?> Kg</td>
                                    </tr>
                                    <tr>
                                        <td width="29%">Penyakit</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->penyakit;?></td>
                                    </tr>
                                    <tr>
                                        <td width="29%">Nama Perusahaan</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->nama_perusahaan;?> </td>
                                    </tr>
                                    <tr>
                                        <td width="29%">Masa Kerja</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->masa_kerja;?> Tahun</td>
                                    </tr>
                                    <tr>
                                        <td width="29%">Jabatan</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->jabatan;?></td>
                                    </tr>
                                    <tr>
                                        <td width="29%">Alasan Keluar</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->alasan_keluar;?></td>
                                    </tr>
                                    
                                    <tr>
                                        <td width="29%">Nomor BPJS</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->no_bpjs;?></td>
                                    </tr>
                                    <tr>
                                        <td width="29%">Nomor Rekening</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->no_rekening;?></td>
                                    </tr>
                                     <tr>
                                        <td width="29%">Nama Bank</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->nama_bank;?></td>
                                    </tr>

                                        <tr>
                                        <td width="29%">Gaji Yang Di Inginkan</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->gaji;?></td>
                                    </tr>
                                 
                                   
                                    
                                    
                       </table>
                       </div>
                    </div>
          </div>
                




                    </div>

                    <?php }?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
