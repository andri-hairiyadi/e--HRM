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
                <h3><i class="fa fa-user"></i> Data Profil</h3>
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
    foreach ($isi->result() as $row) {
    ?>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                     <ul class="nav navbar-right panel_toolbox">           
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>admin_yayasan/data_profil/ubah/<?php echo $row->id_user; ?>"><i class="fa fa-edit m-right-xs"></i> Ubah Data Profil</a>
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="<?php echo base_url();?>style/images/user/<?php echo $row->photo; ?>" alt="Avatar" >
                        </div>
                      </div>
                      <h3><?php echo $row->nama_pegawai; ?></h3>

                      <ul class="list-unstyled user_data">
                        <li><b>NIP : <?php echo $row->nip; ?></b>
                        </li>

                       

                      </ul>

                     <br />

          
 
                    </div>         
                    <div class="col-md-9 col-sm-9 col-xs-12">
<?=$this->session->flashdata('pesan')?>
<div class="well" style="overflow: auto">
 <div class="col-md-12">
                      <div class="form-group">
                        <table border="0" width="100%">
                            <tr>
                                <td width="150px">Nama Lengkap</td>
                                <td width="15px">:</td>
                                <td>
                     <?php
                                
                                  echo "<b>$row->nama_pegawai</b>";
                               

                                ?>

                                </td>
                            </tr>
                            <tr>
                              <td width="120px">NIP</td>
                                <td width="15px">:</td>
                                <td>
                     
                                   <?php
                                
                                  echo "$row->nip";
                               

                                ?>

                                </td>
                            </tr>
                             <tr>
                              <td width="120px">Tempat Lahir</td>
                                <td width="15px">:</td>
                                <td>
                     
                                   <?php
                                
                                  echo "$row->tempat_lahir";
                               

                                ?>

                                </td>
                            </tr>
                             <tr>
                              <td width="120px">Tanggal Lahir</td>
                                <td width="15px">:</td>
                                <td>
                     
                                   <?php
                                
                                  echo "$row->tanggal_lahir";
                               

                                ?>

                                </td>
                            </tr>
                             <tr>
                              <td width="120px">Jenis Kelamin</td>
                                <td width="15px">:</td>
                                <td>
                     
                                   <?php
                                
                                  echo "$row->jenis_kelamin";
                               

                                ?>

                                </td>
                            </tr>
                             <tr>
                              <td width="120px">Alamat</td>
                                <td width="15px">:</td>
                                <td>
                     
                                   <?php
                                
                                  echo "$row->alamat";
                               

                                ?>

                                </td>
                            </tr>
                             <tr>
                              <td width="120px">No. HP</td>
                                <td width="15px">:</td>
                                <td>
                     
                                   <?php
                                
                                  echo "$row->no_hp";
                               

                                ?>

                                </td>
                            </tr>
                             <tr>
                              <td width="120px">Email</td>
                                <td width="15px">:</td>
                                <td>
                     
                                   <?php
                                
                                  echo "$row->email";
                               

                                ?>

                                </td>
                            </tr>
                             <tr>
                              <td width="120px">Jabatan</td>
                                <td width="15px">:</td>
                                <td>
                     
                                   <?php
                                
                                  echo "$row->jabatan";
                               

                                ?>

                                </td>
                            </tr>
                             <tr>
                              <td width="120px">Status Kepegawaian</td>
                                <td width="15px">:</td>
                                <td>
                     
                                   <?php
                                
                                  echo "$row->status_kepegawaian";
                               

                                ?>

                                </td>
                            </tr>
                            <tr>
                              <td width="120px">Status Sertifikasi</td>
                                <td width="15px">:</td>
                                <td>
                     
                                   <?php
                                
                                  echo "$row->status_sertifikasi";
                               

                                ?>

                                </td>
                            </tr>
                        
                             <tr>
                              <td width="120px">Pendidikan Terakhir</td>
                                <td width="15px">:</td>
                                <td>
                     
                                   <?php
                                
                                  echo "$row->pendidikan_terakhir";
                               

                                ?>

                                </td>
                            </tr>

                          

                        </table>
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
        </div>
        <!-- /page content -->
