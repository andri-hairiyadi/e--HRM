    <?php

    foreach ($isi->result() as $data) {
    ?>

    <div id="ubah_orangtua<?php echo $data->id_man_power;?>"  class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
      <div class="modal-dialog">
        <div class="modal-content" >

          <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>

                   <h4 class="modal-title" id="myModalLabel">Informasi Orang Tua&nbsp;<small><i class="fa fa-angle-double-right"></i> Ubah</small></h4>
          </div>
        <div class="modal-body">
            
         <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post"action="<?php echo base_url();?>manpower/data_profil/ubah_informasi_orangtua">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Karyawan
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">

                          <input type="hidden" id="last-name" name="id_man_power" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $data->id_man_power; ?>" readonly="readonly">
                          <input type="text" id="last-name" autocomplete="off" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $data->nama_mp; ?>" readonly="readonly">
                        </div>
                      </div>
                      
                       

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Ayah
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" name="nama_ayah" value="<?php echo $data->nama_ayah;?>" required="required" data-date-format="yyyy-mm-dd" placeholder="Masukan Nama Bank" class="form-control col-md-4 ">
                         
                        </div>
                       
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat Ayah
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" name="alamat_ayah" value="<?php echo $data->alamat_ayah;?>" required="required" data-date-format="yyyy-mm-dd" placeholder="Masukan Nama Bank" class="form-control col-md-4 ">
                         
                        </div>
                       
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No. HP Ayah
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" name="no_hp_ayah" value="<?php echo $data->no_hp_ayah;?>" required="required" data-date-format="yyyy-mm-dd" placeholder="Masukan Nama Bank" class="form-control col-md-4 ">
                         
                        </div>
                       
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Ibu
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" name="nama_ibu" value="<?php echo $data->nama_ibu;?>" required="required" data-date-format="yyyy-mm-dd" placeholder="Masukan Nama Bank" class="form-control col-md-4 ">
                         
                        </div>
                       
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat Ibu
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" name="alamat_ibu" value="<?php echo $data->alamat_ibu;?>" required="required" data-date-format="yyyy-mm-dd" placeholder="Masukan Nama Bank" class="form-control col-md-4 ">
                         
                        </div>
                       
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No. HP Ibu
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" name="no_hp_ibu" value="<?php echo $data->no_hp_ibu;?>" required="required" data-date-format="yyyy-mm-dd" placeholder="Masukan Nama Bank" class="form-control col-md-4 ">
                         
                        </div>
                       
                      </div>
                      

                  
         </div> 

        <!-- /page content -->

          <div class="modal-footer" style="background-image:url(<?php echo base_url();?>style/images/pop2.jpg)">
               <button class="btn btn-default antoclose" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary antosubmit"><i class="fa fa-save"></i>&nbsp;Simpan</button>
  
           
          </div>
          </form>
        </div>
      </div>
    </div>

    <?php  } ?>