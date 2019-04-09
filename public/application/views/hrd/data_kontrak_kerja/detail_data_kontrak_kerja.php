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
                <h3><i class="fa fa-suitcase"></i>

            Data Kontrak Kerja&nbsp;<small><i class="fa fa-angle-double-right"></i> Detail</small></h3>
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
    foreach ($detail->result() as $data) {
    ?>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                  <ul class="nav navbar-right panel_toolbox">
                <a href="<?php echo base_url();?>hrd/data_kontrak_kerja" class="btn btn-dark pull-right" style="margin-right: 5px;"><i class="fa fa-arrow-left"></i>&nbsp;Kembali</a>
                <a href="<?php echo base_url();?>hrd/data_kontrak_kerja/cetak_surat_perjanjian/<?php echo $data->id_kontrak; ?>" target="__blank" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-print"></i>&nbsp;Surat Perjanjian</a>

                  </ul>

                  <div class="x_content">

                   <div class="col-md-2 col-sm-2 col-xs-12 profile_left">


                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <center>
                          <img class="img-responsive avatar-view" src="<?php echo base_url();?>style/dokumen_pelamar/<?php echo $data->file_photo;?>" width="300px" height="400px" alt="Avatar" >
                          </center>
                        </div>
                      </div>
                   <center>   <u><h4><?php echo $data->nomor_id; ?></h4></u></center>
                   <center>   <b><h3><?php echo $data->nama_mp; ?></h3></b></center>
                   <center>   <b><i><h4><?php echo $data->posisi_tugas; ?></h4></i></b></center>


                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-12">
<div class="well" style="overflow: auto">
 <div class="col-md-12">

                 <div class="x_title">
                    <h2>Informasi Kontrak</h2>

                    <div class="clearfix"></div>
                  </div>
                      <div class="form-group">


                        <table>
                                   <tr>
                                        <td width="29%">Nomor ID</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<b>
                                          <?php
                                             $status="$data->nomor_id";
                                            if ($status == ''){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo "$data->nomor_id";
                                            }

                                            ?>

                                        </b></td>
                                    </tr>
                                     <tr>

                                        <td width="29%">Nama Lengkap</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->nama_mp;?></td>
                                    </tr>
                                    <tr>
                                        <td width="29%">Jabatan</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->posisi_tugas;?></td>
                                    </tr>
                                    <tr>
                                        <td width="29%">Area</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->nama_area;?></td>
                                     </tr>
                                     
                                     <tr>
                                        <td width="29%">Tanggal Mulai</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo tgl_indo($data->tgl_mulai);?></td>
                                     </tr>
                                     <tr>
                                        <td width="29%">Tanggal Selesai</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo tgl_indo($data->tgl_selesai);?></td>
                                     </tr>
                                     <tr>
                                        <td width="29%">Status</td>
                                        <td width="1%">:</td>
                                        <td width="70%">
                                          <?php
                                                 $batas = $data->tgl_selesai;
                                                 $tgl_now = date("Y-m-d");
                                                if ($tgl_now > $batas) {
                                                  echo "<span class='label label-danger'>Tidak Aktif</span>";
                                                }
                                                else if ($tgl_now < $batas) {
                                                 echo "<span class='label label-success'>Aktif</span>";
                                                }




                                              ?>
                                        </td>
                                     </tr>

                                    <tr>
                                        <td width="29%">Efektifitas Bekerja</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php  echo periode(strtotime($data->tgl_mulai));?></td>
                                    </tr>
                                    <tr>
                                        <td width="29%">No. BPJS Ketenagakerjaan</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;
                                          <?php
                                             $status="$data->no_bpjs_ket";
                                            if ($status == ''){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo "$data->no_bpjs_ket";
                                            }

                                            ?>
                                    </td>
                                    </tr>
                                     <tr>
                                        <td width="29%">No. BPJS Kesehatan</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;
                                           <?php
                                             $status="$data->no_bpjs_ket";
                                            if ($status == ''){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo "$data->no_bpjs_ket";
                                            }

                                            ?>
                                       </td>
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
