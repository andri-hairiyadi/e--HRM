    <script type="text/javascript" src="<?php echo base_url();?>style/jquery/cek.js"></script>

      <!-- page content -->


<div class="right_col" role="main" >

          <div class=""> 
            <div class="page-title">
              <div class="title_left"> 
                <h3><i class="fa fa-cog"></i> Pengaturan</h3>
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
                  <div class="x_title">
                      <h2>Pengaturan<small><i class="fa fa-angle-double-right"></i>  ubah username dan passwod</small></h2>
              
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <?=$this->session->flashdata('pesan')?>
                       <?php
    foreach ($data->result() as $row) { 
    ?>
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data" action="<?php echo base_url();?>admin/setting/update">
                      
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Lengkap<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="nama_user" required="required" value="<?php echo $row->nama_user;?>" placeholder="masukan nama lengkap " class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                        Username <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" placeholder="Masukan Username Anda" name="username" value="<?php echo $row->username; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">
                        Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="pass1" placeholder="Masukan Password Baru Anda" class="form-control col-md-7 col-xs-12" >
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">
                        Ulangi Password<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password"  id="pass2" name="password" placeholder="Ulangi Password Baru Anda" onkeyup="checkPass(); return false;"  class="form-control col-md-7 col-xs-12"> <span id="confirmMessage" class="confirmMessage"></span>
                        </div>
                      </div>
                            
               <p>*Kosongkan Password jika ingin mengubah username.</p>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                   
                          <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;Simpan</button>
                        </div>
                      </div>

                    </form>
    <?php } ?>
                  </div>
                </div>
              </div>
            </div>


          
          </div>
        </div>
        <!-- /page content -->


    



