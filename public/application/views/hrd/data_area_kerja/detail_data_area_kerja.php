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
                <h3><i class="fa fa-bank"></i> Data Area Kerja&nbsp;<small><i class="fa fa-angle-double-right"></i> Detail</small></h3>
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
    foreach ($detail as $row) {
    ?>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                     <ul class="nav navbar-right panel_toolbox">           
                        <a href="<?php echo base_url();?>hrd/data_area_kerja" class="btn btn-dark pull-right" style="margin-right: 5px;"><i class="fa fa-arrow-left"></i>&nbsp;Kembali</a>               
                        
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  
                    <div class="col-md-12 col-sm-12 col-xs-12">
<?=$this->session->flashdata('pesan')?>
<div class="well" style="overflow: auto">
 <div class="col-md-12">
                      <div class="form-group">
                        <table border="0" width="100%">
                              <tr>
                                <td width="150px">Nama Area Kerja</td>
                                <td width="15px">:</td>
                                <td>
                     
                                   <?php
                                
                                  echo "<b>$row->nama_area</b>";
                               

                                ?>

                                </td>
                            </tr>
                            <tr>
                                <td width="150px">Alamat Area Kerja</td>
                                <td width="15px">:</td>
                                <td>
                     
                                   <?php
                                
                                  echo "$row->alamat_area";
                               

                                ?>

                                </td>
                            </tr>
                             <tr>
                                <td width="150px">Kota Area Kerja</td>
                                <td width="15px">:</td>
                                <td>
                     
                                   <?php
                                
                                  echo "$row->kota_area";
                               

                                ?>

                                </td>
                            </tr>
                            <tr>
                                <td width="150px">Email Area Kerja</td>
                                <td width="15px">:</td>
                                <td>
                     
                                   <?php
                                
                                  echo "$row->email_area";
                               

                                ?>

                                </td>
                            </tr>
                            <tr>
                                <td width="150px">No. HP Area Kerja</td>
                                <td width="15px">:</td>
                                <td>
                     
                                   <?php
                                
                                  echo "$row->no_hp_area";
                               

                                ?>

                                </td>
                            </tr>
                            <tr>
                                <td width="150px">Jenis Area Kerja</td>
                                <td width="15px">:</td>
                                <td>
                     
                                   <?php
                                
                                  echo "$row->jenis_area";
                               

                                ?>

                                </td>
                            </tr>
                             <tr>
                                <td width="150px">Nama Manajer</td>
                                <td width="15px">:</td>
                                <td>
                     
                                   <?php
                                
                                  echo "$row->nama_manajer";
                               

                                ?>

                                </td>
                            </tr>
                            <tr>
                                <td width="150px">Email Manajer</td>
                                <td width="15px">:</td>
                                <td>
                     
                                   <?php
                                
                                  echo "$row->email_manajer";
                               

                                ?>

                                </td>
                            </tr>
                            <tr>
                                <td width="150px">No. HP Manajer</td>
                                <td width="15px">:</td>
                                <td>
                     
                                   <?php
                                
                                  echo "$row->no_manajer";
                               

                                ?>

                                </td>
                            </tr>
                             <tr>
                                <td width="150px">Longitude</td>
                                <td width="15px">:</td>
                                <td>
                     
                                   <?php
                                
                                  echo "$row->long";
                               

                                ?>

                                </td>
                            </tr>
                             <tr>
                                <td width="150px">Latitude</td>
                                <td width="15px">:</td>
                                <td>
                     
                                   <?php
                                
                                  echo "$row->late";
                               

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
