
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
                <h3><i class="fa fa-sign-in"></i> Data Training&nbsp;<small><i class="fa fa-angle-double-right"></i> Detail</small></h3>
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
                <a href="<?php echo base_url();?>area/data_training" class="btn btn-dark pull-right" style="margin-right: 5px;"><i class="fa fa-arrow-left"></i>&nbsp;Kembali</a>
                  </ul>

                  <div class="x_content">

                   <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="well" style="overflow: auto">
                  <table border="0" width="100%">


                    <tr>
                      <td width="15%" colspan="3" style="background-color:#4b5f71; color:#ffffff;"><b>Data Training Man Power</b></td>
                    </tr>
                    <tr>
                      <td width="15%">Lokasi Training : </td>
                      <td width="2%">:</td>
                      <td width="88%">
                        <?php

                            if ($data->status < '5') {
                             echo "<span class='label label-danger'>belum ada</span>";
                            }
                             if ($data->status == '5') {
                             echo "<span class='label label-danger'>belum ada</span>";
                            }
                            elseif ($data->status > '5'){
                             echo "$data->nama_area_tahap2";
                            }

                          ?>
                      </td>
                    </tr>
                    <tr>
                      <td width="15%">Tanggal Training : </td>
                      <td width="2%">:</td>
                      <td width="88%">
                        <?php
                      $tgl1 = tgl_indo($data->tanggal_training);
                      $tgl2 = tgl_indo($data->tanggal_training_selesai);

                            if ($data->status < '5') {
                             echo "<span class='label label-danger'>belum ada</span>";
                            }
                             if ($data->status == '5') {
                             echo "<span class='label label-danger'>belum ada</span>";
                            }
                            elseif ($data->status > '5'){
                             echo "$tgl1  s/d  $tgl2";
                            }

                          ?>
                      </td>
                    </tr>
                     <tr>
                      <td width="15%">Jam Training : </td>
                      <td width="2%">:</td>
                      <td width="88%">
                        <?php
                      $jam = $data->jam_training;

                            if ($data->status < '5') {
                             echo "<span class='label label-danger'>belum ada</span>";
                            }
                             if ($data->status == '5') {
                             echo "<span class='label label-danger'>belum ada</span>";
                            }
                            elseif ($data->status > '5'){
                             echo "$jam";
                            }

                          ?>
                      </td>
                    </tr>
                  </table>

                  </div>
                </div>

                   <div class="col-md-4 col-sm-4 col-xs-12 profile_left">


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
