    <?php

    foreach ($isi->result() as $data) {
    ?>

    <div id="ubah_pasangan<?php echo $data->id_man_power;?>"  class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
      <div class="modal-dialog">
        <div class="modal-content" >

          <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>

                   <h4 class="modal-title" id="myModalLabel">Informasi Pasangan&nbsp;<small><i class="fa fa-angle-double-right"></i> Ubah</small></h4>
          </div>
        <div class="modal-body">
            
         <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post"action="<?php echo base_url();?>manpower/data_profil/ubah_informasi_pasangan">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Karyawan
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">

                          <input type="hidden" id="last-name" name="id_man_power" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $data->id_man_power; ?>" readonly="readonly">
                          <input type="text" id="last-name" autocomplete="off" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $data->nama_mp; ?>" readonly="readonly">
                        </div>
                      </div>
                      
                       

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Pasangan
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" name="nama_pasangan" value="<?php echo $data->nama_pasangan;?>" required="required" data-date-format="yyyy-mm-dd" placeholder="Masukan Nama Bank" class="form-control col-md-4 ">
                         
                        </div>
                       
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" name="alamat_pasangan" value="<?php echo $data->alamat_pasangan;?>" required="required" data-date-format="yyyy-mm-dd" placeholder="Masukan Nama Bank" class="form-control col-md-4 ">
                         
                        </div>
                       
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No.HP
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" name="no_hp_pasangan" value="<?php echo $data->no_hp_pasangan;?>" required="required" placeholder="Masukan No. HP Pasangan" class="form-control col-md-4 ">
                         
                        </div>
                       
                      </div>
                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Lahir
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" value="<?php echo $data->tanggal_lahir_pasangan;?>" name="tanggal_lahir_pasangan" required="required" data-date-format="yyyy-mm-dd" placeholder="Masukan Tanggal Lahir Pasangan" class="form-control col-md-4 datepicker">
                         
                        </div>
                       
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Pendidikan Terakhir
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                        <select class="form-control" name="pendidikan_pasangan" required="required" >
                            <option>-- Pilih Pendidikan Terakhir</option>
                            <option value="SD"<?php if ($data->pendidikan_pasangan == 'SD') { echo "selected"; };?>>SD</option>
                            <option value="SMP"<?php if ($data->pendidikan_pasangan == 'SMP') { echo "selected"; };?>>SMP</option>
                            <option value="SMA"<?php if ($data->pendidikan_pasangan == 'SMA') { echo "selected"; };?>>SMA</option>
                            <option value="S1"<?php if ($data->pendidikan_pasangan == 'S1') { echo "selected"; };?>>S1</option>
                          </select>
                        </div>
                       
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Pekerjaan
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" name="pekerjaan_pasangan" value="<?php echo $data->pekerjaan_pasangan;?>" required="required" data-date-format="yyyy-mm-dd" placeholder="Masukan Nama Bank" class="form-control col-md-4 ">
                         
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