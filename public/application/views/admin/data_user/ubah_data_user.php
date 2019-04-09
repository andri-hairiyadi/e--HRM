    <script type="text/javascript" src="<?php echo base_url();?>style/jquery/cek.js"></script>
 
    <?php
        foreach($edit as $data){
        ?>

 <!-- page content -->
       <div class="right_col" role="main" style="background-image:url(<?php echo base_url();?>style/images/latar.jpg)" >
  <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><i class="fa fa-book"></i> Data User&nbsp;<small><i class="fa fa-angle-double-right"></i> Ubah</small></h3>
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
                
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"  enctype="multipart/form-data" method="post"action="<?php echo base_url();?>admin_yayasan/data_user/simpan_ubah">
<?=$this->session->flashdata('pesan')?>
                 <div class="well" style="overflow: auto">

                      <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Pilih Level User<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" name="level" required="required" >
                            <option value="">-- Pilih Level User --</option>
                            <option value="1"<?php if($data->level == '1' ) { echo 'selected'; } ?>>Admin TKI</option>
                            <option value="2"<?php if($data->level == '2' ) { echo 'selected'; } ?>>Admin SDIT</option>
                            <option value="3"<?php if($data->level == '3' ) { echo 'selected'; } ?>>Admin MTs</option>
                            <option value="4"<?php if($data->level == '4' ) { echo 'selected'; } ?>>Admin MA</option>
                            <option value="5"<?php if($data->level == '5' ) { echo 'selected'; } ?>>Admin SMK</option>
                            <option value="6"<?php if($data->level == '6' ) { echo 'selected'; } ?>>Admin Yayasan </option>
                          </select>      
                        </div>
                      </div>

                <div class="form-group">

                       <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Pilih Nama User<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           
                           <select class="form-control" required="required" name="id_pegawai" tabindex="-1" required="required">
                            <option value="">-- Pilih Nama User --</option>
                            <?php
                           
                              foreach ($pegawai->result() as $row) {

                              ?>
                            <option value="<?php echo $row->id_pegawai; ?>" <?php if($data->id_user == $row->id_user ) { echo 'selected'; } ?>><?php echo $row->nama_pegawai; ?></option>
                              <?php } ?>
                          </select>      
                        </div>
                      </div>
                      
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Username<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" id="last-name" name="id_user" value="<?php echo $data->id_user?>" required="required" class="form-control col-md-7 col-xs-12">

                          <input type="text" id="last-name" name="username" value="<?php echo $data->username?>" required="required" placeholder="masukan username" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">
                        Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="pass1" required="required" value="<?php echo $data->password?>" placeholder="masukan password" class="form-control col-md-7 col-xs-12" >
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">
                        Ulangi Password<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password"  id="pass2" required="required" placeholder="masukan kembali password" name="password" onkeyup="checkPass(); return false;"  class="form-control col-md-7 col-xs-12"> <span id="confirmMessage" class="confirmMessage"></span>
                        </div>
                      </div>
                   
 
               
                </div>


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                      <ul class="nav navbar-right panel_toolbox">
                          <a href="<?php echo base_url();?>admin_yayasan/data_user" class="btn btn-dark pull-right" style="margin-right: 5px;"><i class="fa fa-arrow-left"></i>&nbsp;Kembali</a>               
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

<?php 
}
?>