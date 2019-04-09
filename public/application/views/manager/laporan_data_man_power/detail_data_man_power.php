<style>

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
                <h3><i class="fa fa-user"></i> Data Man Power&nbsp;<small><i class="fa fa-angle-double-right"></i> Detail</small></h3>
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
                <a href="<?php echo base_url();?>manager/laporan_data_man_power" class="btn btn-dark pull-right" style="margin-right: 5px;"><i class="fa fa-arrow-left"></i>&nbsp;Kembali</a>               
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
                                   <td width="70%">&nbsp;&nbsp;
                                            <?php
                                             $status="$data->nomor_id";
                                            if ($status == ''){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo "$data->nomor_id";
                                            }

                                            ?>

                                        </td> 
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
                                     <tr>
                                        <td width="29%">No. PKWT</td>
                                        <td width="1%">:</td>
                                     <td width="70%">&nbsp;&nbsp;
                                            <?php
                                             $status="$data->no_pkwt";
                                            if ($status == ''){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo "$data->no_pkwt";
                                            }

                                            ?>

                                        </td> 
                                    </tr>
                         
                         
                                   
                                 
                                   
                                    
                                    
                       </table>
                       </div>
                    </div>
          </div>
</div>

 <div class="col-md-12 col-sm-12 col-xs-12" >
<div class="well" style="overflow: auto;" >
 <div class="col-md-6" >

                 <div class="x_title">
                    <h2>Informasi Profil</h2>

                    <div class="clearfix"></div>
                  </div>
                      <div class="form-group">

                       
                       <table>
                                   <tr>
                                        <td width="35%">Nomor KTP / SIM</td>
                                        <td width="1%">:</td>
                                     <td width="70%">&nbsp;&nbsp;
                                            <?php
                                             $status="$data->no_identitas";
                                            if ($status == ''){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo "$data->no_identitas";
                                            }

                                            ?>

                                        </td> 
                                    </tr>

                                    <tr>
                                        <td width="35%">Nomor Hanphone</td>
                                        <td width="1%">:</td>
                                   <td width="70%">&nbsp;&nbsp;
                                            <?php
                                             $status="$data->no_hp_mp";
                                            if ($status == ''){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo "$data->no_hp_mp";
                                            }

                                            ?>

                                        </td> 
                                    </tr>
                                    <tr>
                                        <td width="35%">Alamat</td>
                                        <td width="1%">:</td>
                                     <td width="70%">&nbsp;&nbsp;
                                            <?php
                                             $status="$data->alamat_mp";
                                            if ($status == ''){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo "$data->alamat_mp";
                                            }

                                            ?>

                                        </td> 
                                    </tr>
                                    <tr>
                                        <td width="35%">Jenis Kelamin</td>
                                        <td width="1%">:</td>
                                    <td width="70%">&nbsp;&nbsp;
                                            <?php
                                             $status="$data->jk_mp";
                                            if ($status == ''){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo "$data->jk_mp";
                                            }

                                            ?>

                                        </td> 
                                    </tr>
                                    <tr>
                                        <td width="35%">Tempat, Tanggal Lahir</td>
                                        <td width="1%">:</td>
                                    <td width="70%">&nbsp;&nbsp;
                                            <?php
                                             $status="$data->tempat_lahir_mp";
                                            if ($status == ''){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo "$data->tempat_lahir_mp";
                                            }

                                            ?>

                                        </td> 
                                    </tr>
                                  
                                  <tr>
                                        <td width="35%">Umur</td>
                                        <td width="1%">:</td>
                                        <td width="64%">&nbsp;&nbsp;<?php  echo umur(strtotime($data->tanggal_lahir_mp));?></td>
                                         <td width="70%">&nbsp;&nbsp;
                                   

                                        </td> 
                                    </tr>
                                  
                         
                         
                                   
                                 
                                   
                                    
                                    
                       </table>
                       </div>
                    </div>

                     <div class="col-md-6">

                 <div class="x_title">
                    <h2>&nbsp;</h2>

                    <div class="clearfix"></div>
                  </div>
                      <div class="form-group">

                       
                       <table>
                                   <tr>
                                        <td width="35%">Status Menikah</td>
                                        <td width="1%">:</td>
                                      <td width="70%">&nbsp;&nbsp;
                                            <?php
                                             $status="$data->status_menikah";
                                            if ($status == ''){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo "$data->status_menikah";
                                            }

                                            ?>

                                        </td> 

                                    </tr>
                                     <tr>
                                       
                                        <td width="35%">Agama</td>
                                        <td width="1%">:</td>
           
                                        <td width="70%">&nbsp;&nbsp;
                                            <?php
                                             $status="$data->agama";
                                            if ($status == ''){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo "$data->agama";
                                            }

                                            ?>

                                        </td> 
                                    </tr>
                                    <tr>
                                        <td width="35%">Golongan Darah</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;
                                            <?php
                                             $status="$data->gol_darah";
                                            if ($status == ''){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo "$data->gol_darah";
                                            }

                                            ?>

                                        </td> 
                                    </tr>
                                    <tr>
                                        <td width="35%">Hobby</td>
                                        <td width="1%">:</td>

                                      <td width="70%">&nbsp;&nbsp;
                                            <?php
                                             $status="$data->hoby_mp";
                                            if ($status == ''){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo "$data->hoby_mp";
                                            }

                                            ?>

                                        </td> 

                                    </tr>
                                    <tr>
                                        <td width="35%">Tinggi Badan</td>
                                        <td width="1%">:</td>

                                      <td width="70%">&nbsp;&nbsp;
                                            <?php
                                             $status="$data->tinggi_badan";
                                            if ($status == ''){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo "$data->tinggi_badan";
                                            }

                                            ?>

                                        </td> 
                                    </tr>
                                    <tr>
                                        <td width="35%">Berat Badan</td>
                                        <td width="1%">:</td>
   
                                        <td width="70%">&nbsp;&nbsp;
                                            <?php
                                             $status="$data->berat_badan";
                                            if ($status == ''){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo "$data->berat_badan";
                                            }

                                            ?>

                                        </td> 
                                    </tr>
                                  
                                  <tr>
                                        <td width="35%">Riwayat Penyakit</td>
                                        <td width="1%">:</td>
      
                                        <td width="70%">&nbsp;&nbsp;
                                            <?php
                                             $status="$data->penyakit";
                                            if ($status == ''){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo "$data->penyakit";
                                            }

                                            ?>

                                        </td> 
                                    </tr>
                                  
                         
                         
                                   
                                 
                                   
                                    
                                    
                       </table>
                       </div>
                    </div>
          </div>
                




                    </div>


 <div class="col-md-12 col-sm-12 col-xs-12">
<div class="well" style="overflow: auto">
 <div class="col-md-12">

                 <div class="x_title">
                    <h2>Informasi Payroll</h2>

                    <div class="clearfix"></div>
                  </div>
                      <div class="form-group">

                       
                       <table>
                                   <tr>
                                        <td width="35%">Nama Bank</td>
                                        <td width="1%">:</td>
                                       <td width="70%">&nbsp;&nbsp;
                                            <?php
                                             $status="$data->nama_bank";
                                            if ($status == ''){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo "$data->nama_bank";
                                            }

                                            ?>

                                        </td> 
                                    </tr>
                                     <tr>
                                       
                                        <td width="35%">Nomor Rekening</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;
                                            <?php
                                             $status="$data->no_rekening";
                                            if ($status == ''){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo "$data->no_rekening";
                                            }

                                            ?>

                                        </td> 
                                    </tr>
                                    <tr>
                                        <td width="35%">Nama Sesuai Buku Tabungan</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;
                                            <?php
                                             $status="$data->nama_buku";
                                            if ($status == ''){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo "$data->nama_buku";
                                            }

                                            ?>

                                        </td> 
                                    </tr>
                                    
                       </table>
                       </div>
                    </div>
          </div>
                




                    </div>


<div class="col-md-12 col-sm-12 col-xs-12">
<div class="well" style="overflow: auto">
 <div class="col-md-12">

                 <div class="x_title">
                    <h2>Informasi Pendidikan</h2>

                    <div class="clearfix"></div>
                  </div>
                      <div class="form-group">
                        <table class="table table-bordered">
                            <tr style="background-color:#4b5f71; color:#ffffff; ">
                       
                              <td width="25%" align="center">Tingkat Pendidikan</td>
                              <td width="25%" align="center">Nama Sekolah</td>
                              <td width="25%" align="center">Tahun Lulus</td>
                              <td width="25%" align="center">Nomor Ijazah</td>
   
                            </tr>
                            <tr>
                             <?php
                             if ($pendidikan->result()) {

    foreach ($pendidikan->result() as $data) {
    ?>
                              <td><?php echo $data->tingkat_pendidikan;?></td>
                              <td><?php echo $data->nama_sekolah;?></td>
                              <td><?php echo $data->tahun_lulus;?></td>
                              <td><?php echo $data->nomor_ijazah;?></td>
                            </tr>
 <?php  } } else{
                            echo "<tr><td colspan='4'><font color='red'>Data tidak ada / Belum Di Isi</font></td></tr>";

                            } ?>

                          </table>


                       
                       </div>
                    </div>
          </div>
 </div>


 <div class="col-md-6 col-sm-6 col-xs-12">
<div class="well" style="overflow: auto">
 <div class="col-md-12">

                 <div class="x_title">
                    <h2>Informasi Pasangan</h2>

                    <div class="clearfix"></div>
                  </div>
                      <div class="form-group">

                       
                       <table>
                                   <tr>
                                        <td width="35%">Nama</td>
                                        <td width="1%">:</td>
                                       <td width="70%">&nbsp;&nbsp;
                                            <?php
                                             $status="$data->nama_pasangan";
                                            if ($status == ''){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo "$data->nama_pasangan";
                                            }

                                            ?>

                                        </td> 
                                    </tr>
                                     <tr>
                                       
                                        <td width="35%">Alamat</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;
                                            <?php
                                             $status="$data->alamat_pasangan";
                                            if ($status == ''){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo "$data->alamat_pasangan";
                                            }

                                            ?>

                                        </td> 
                                    </tr>
                                    <tr>
                                        <td width="35%">Nomor Hanphone</td>
                                        <td width="1%">:</td>
                                       <td width="70%">&nbsp;&nbsp;
                                            <?php
                                             $status="$data->no_hp_pasangan";
                                            if ($status == ''){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo "$data->no_hp_pasangan";
                                            }

                                            ?>

                                        </td>                                    
                                    </tr>
                                    <tr>
                                        <td width="35%">Umur</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;
                                            <?php
                                             $status="$data->tanggal_lahir_pasangan";
                                            if ($status == '0000-00-00'){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo umur(strtotime($data->tanggal_lahir_pasangan));
                                            }

                                            ?>

                                        </td>   
                                    </tr>
                                    <tr>
                                        <td width="35%">Pendidikan Terakhir</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;
                                            <?php
                                             $status="$data->pendidikan_pasangan";
                                            if ($status == ''){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo "$data->pendidikan_pasangan";
                                            }

                                            ?>

                                        </td> 
                                    </tr>
                                    <tr>
                                        <td width="35%">Pekerjaan</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;
                                            <?php
                                             $status="$data->pekerjaan_pasangan";
                                            if ($status == ''){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo "$data->pekerjaan_pasangan";
                                            }

                                            ?>

                                        </td> 
                                    </tr>
                                  
                         
                         
                                   
                                 
                                   
                                    
                                    
                       </table>
                       </div>
                    </div>
          </div>
                




                    </div>

<div class="col-md-6 col-sm-6 col-xs-12">
<div class="well" style="overflow: auto">
 <div class="col-md-12">

                 <div class="x_title">
                    <h2>Informasi Orang Tua</h2>

                    <div class="clearfix"></div>
                  </div>
                      <div class="form-group">

                       
                       <table>
                                   <tr>
                                        <td width="29%">Nama Ayah</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;
                                            <?php
                                             $status="$data->nama_ayah";
                                            if ($status == ''){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo "$data->nama_ayah";
                                            }

                                            ?>

                                        </td> 
                                    </tr>
                                     <tr>
                                       
                                        <td width="29%">Alamat Ayah</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;
                                            <?php
                                             $status="$data->alamat_ayah";
                                            if ($status == ''){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo "$data->alamat_ayah";
                                            }

                                            ?>

                                        </td>  
                                    </tr>
                                    <tr>
                                        <td width="29%">Nomor HP Ayah</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;
                                            <?php
                                             $status="$data->no_hp_ayah";
                                            if ($status == ''){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo "$data->no_hp_ayah";
                                            }

                                            ?>

                                        </td>                                   
                                    </tr>
                                    <tr>
                                        <td width="29%">Nama Ibu</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;
                                            <?php
                                             $status="$data->nama_ibu";
                                            if ($status == ''){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo "$data->nama_ibu";
                                            }

                                            ?>

                                        </td>                                    
                                    </tr>
                                    <tr>
                                        <td width="29%">Alamat Ibu</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;
                                            <?php
                                             $status="$data->alamat_ibu";
                                            if ($status == ''){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo "$data->alamat_ibu";
                                            }

                                            ?>

                                        </td>                                    
                                    </tr>
                                    <tr>
                                        <td width="29%">Nomor HP Ibu</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;
                                            <?php
                                             $status="$data->no_hp_ibu";
                                            if ($status == ''){
                                              echo "<span class='label label-danger'>Belum Di Isi</span>";
                                            }
                                            else{
                                              echo "$data->no_hp_ibu";
                                            }

                                            ?>

                                        </td>
                                    </tr>
                                   
                                   
                                 
                                   
                                    
                                    
                       </table>
                       </div>
                    </div>
          </div>
 </div>

<div class="col-md-12 col-sm-12 col-xs-12">
<div class="well" style="overflow: auto">
 <div class="col-md-12">

                 <div class="x_title">
                    <h2>Informasi Saudara Tidak Serumah</h2>

                    <div class="clearfix"></div>
                  </div>
                      <div class="form-group">
                        <table class="table table-bordered">
                            <tr style="background-color:#4b5f71; color:#ffffff;">
                       
                              <td width="16,7%" align="center">Nama Saudara</td>
                              <td width="16,7%" align="center">Jenis Kelamin</td>
                              <td width="16,7%" align="center">Hubungan Saudara</td>
                              <td width="16,7%" align="center">Pekerjaan</td>
                              <td width="16,7%" align="center">No. HP</td>
                              <td width="16,7%" align="center">Alamat</td>
                            </tr>
                            <tr>
                             <?php
                             if ($saudara->result()) {

    foreach ($saudara->result() as $data) {
    ?>       
                              <td><?php echo $data->nama_saudara;?></td>
                              <td><?php echo $data->jenis_kelamin;?></td>
                              <td><?php echo $data->hubungan_saudara;?></td>
                              <td><?php echo $data->pekerjaan_saudara;?></td>
                              <td><?php echo $data->no_hp_saudara;?></td>
                              <td><?php echo $data->alamat_saudara;?></td>
                            </tr>
                             <?php  } } else{
                            echo "<tr><td colspan='6'><font color='red'>Data tidak ada / Belum Di Isi</font></td></tr>";

                            } ?>
                          </table>


                       
                       </div>
                    </div>
          </div>
 </div>


<div class="col-md-12 col-sm-12 col-xs-12">
<div class="well" style="overflow: auto">
 <div class="col-md-12">

                 <div class="x_title">
                    <h2>Informasi Anak</h2>

                    <div class="clearfix"></div>
                  </div>
                      <div class="form-group">
                        <table class="table table-bordered">
                            <tr style="background-color:#4b5f71; color:#ffffff;">
                       
                              <td width="20%" align="center">Nama Anak</td>
                              <td width="20%" align="center">Jenis Kelamin</td>
                              <td width="20%" align="center">Tempat, Tanggal Lahir</td>
                              <td width="20%" align="center">Pekerjaan</td>
                              <td width="20%" align="center">Alamat</td>
                            </tr>
                            <tr>
    <?php
    if ($anak->result()) {

    foreach ($anak->result() as $data) {
    ?>   
                              <td><?php echo $data->nama_anak;?></td>
                              <td><?php echo $data->jenis_kelamin;?></td>
                              <td><?php echo $data->tempat_lahir;?>,<?php echo tgl_indo($data->tanggal_lahir);?></td>
                              <td><?php echo $data->pekerjaan;?></td>
                              <td><?php echo $data->alamat;?></td>
                            </tr>
                         <?php  } } else{
                            echo "<tr><td colspan='5'><font color='red'>Data tidak ada / Belum Di Isi</font></td></tr>";

                            } ?>
                          </table>


                       
                       </div>
                    </div>
          </div>
 </div>



<div class="col-md-12 col-sm-12 col-xs-12">
<div class="well" style="overflow: auto">
 <div class="col-md-12">

                 <div class="x_title">
                    <h2>Pengalaman dan Referensi Kerja</h2>

                    <div class="clearfix"></div>
                  </div>
                      <div class="form-group">
                        <table class="table table-bordered">
                            <tr style="background-color:#4b5f71; color:#ffffff;">
                       
                              <td width="25%" align="center">Masa Kerja</td>
                              <td width="25%" align="center">Nama Perusahaan</td>
                              <td width="25%" align="center">Jabatan</td>
                              <td width="25%" align="center">Alasan Keluar</td>
                            </tr>
                            <tr>
                            <?php
   if ($pengalaman->result()) {

    foreach ($pengalaman->result() as $data) {
    ?>   
                              <td><?php echo $data->masa_kerja;?></td>
                              <td><?php echo $data->nama_perusahaan;?></td>
                              <td><?php echo $data->jabatan;?></td>
                              <td><?php echo $data->alasan_keluar;?></td>
                            </tr>
                           <?php  } } else{
                            echo "<tr><td colspan='4'><font color='red'>Data tidak ada / Belum Di Isi</font></td></tr>";

                            } ?>
                          </table>


                       
                       </div>
                    </div>
          </div>
 </div>



<div class="col-md-12 col-sm-12 col-xs-12">
<div class="well" style="overflow: auto">
 <div class="col-md-12">

                 <div class="x_title">
                    <h2>Riwayat Pekerjaan</h2>

                    <div class="clearfix"></div>
                  </div>
                      <div class="form-group">
                        <table class="table table-bordered">
                            <tr style="background-color:#4b5f71; color:#ffffff;">
                       
                              <td width="20%" align="center">Status (M / P / D) </td>
                              <td width="20%" align="center">Nama Area</td>
                              <td width="20%" align="center">Jabatan</td>
                              <td width="20%" align="center">Efektif Date</td>
                              <td width="20%" align="center">Keterangan</td>
                            </tr>
                            <tr>
    <?php
    if ($riwayat->result()) {
    foreach ($riwayat->result() as $data) {
    ?>
                              <td><?php echo $data->status;?></td>
                              <td><?php echo $data->nama_area;?></td>
                              <td><?php echo $data->jabatan;?></td>
                              <td><?php echo tgl_indo($data->tanggal_efektif);?></td>
                              <td><?php echo $data->keterangan;?></td>
                            </tr>

                         <?php  } } else{
                            echo "<tr><td colspan='5'><font color='red'>Data tidak ada / Belum Di Isi</font></td></tr>";

                            } ?>
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
