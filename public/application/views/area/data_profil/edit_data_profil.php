    <?php
        foreach($edit as $data){
        ?>

 <!-- page content -->
       <div class="right_col" role="main" style="background-image:url(<?php echo base_url();?>style/images/latar.jpg)" >
  <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><i class="fa fa-bank"></i> Profil Area&nbsp;<small><i class="fa fa-angle-double-right"></i> Ubah</small></h3>
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
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"  enctype="multipart/form-data" method="post"action="<?php echo base_url();?>area/data_profil/simpan_profil">
<?=$this->session->flashdata('pesan')?>
                 <div class="well" style="overflow: auto">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Area Kerja
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" id="last-name" name="id_area_kerja" value="<?php echo $data->id_area_kerja; ?>" required="required" placeholder="Masukan Nama Guru" class="form-control col-md-7 col-xs-12">
                          <input type="text" id="last-name" name="nama_area" value="<?php echo $data->nama_area; ?>" required="required" placeholder="Masukan Nama Area Kerja" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                  
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat Area
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                     <textarea id="message" required="required" placeholder="Masukan Alamat Area" name="alamat_area" class="form-control"><?php echo $data->alamat_area; ?></textarea>

                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kota Area
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="kota_area" value="<?php echo $data->kota_area; ?>" required="required" placeholder="Masukan Kota Area" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email Area
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="email_area" value="<?php echo $data->email_area; ?>" required="required" placeholder="Masukan Email Area" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No. HP Area
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="no_hp_area" value="<?php echo $data->no_hp_area; ?>" required="required" placeholder="Masukan Nomor HP Area" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jenis Area
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="jenis_area" value="<?php echo $data->jenis_area; ?>" required="required" placeholder="Masukan Jenis Area" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Manager
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="nama_manajer" value="<?php echo $data->nama_manajer; ?>" required="required" placeholder="Masukan Nama Manager" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email Manager
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="email_manajer" value="<?php echo $data->email_manajer; ?>"required="required" placeholder="Masukan Email Manager" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No.HP Manager
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="no_manajer" value="<?php echo $data->no_manajer; ?>" required="required" placeholder="Masukan Nomor HP Manager" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Longitude
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="long" value="<?php echo $data->long; ?>" required="required" placeholder="Masukan Longitude" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Latitude
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="late" value="<?php echo $data->late; ?>" required="required" placeholder="Masukan Latitude" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                    

                
                     
                     
                </div>


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                      <ul class="nav navbar-right panel_toolbox">
                          <a href="<?php echo base_url();?>hrd/data_area_kerja" class="btn btn-dark pull-right" style="margin-right: 5px;"><i class="fa fa-arrow-left"></i>&nbsp;Kembali</a>               
                      </ul> 
                       <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i>&nbsp;Simpan</button>
                        

                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- /page content -->
<?php  }  ?>