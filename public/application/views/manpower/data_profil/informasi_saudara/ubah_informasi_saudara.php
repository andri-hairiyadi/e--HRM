                         <?php
 
    foreach ($saudara->result() as $data) {
    ?>       
    <div id="ubah_saudara<?php echo $data->id_saudara;?>"  class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
      <div class="modal-dialog">
        <div class="modal-content" >

          <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>

                   <h4 class="modal-title" id="myModalLabel">Data Informasi Saudara&nbsp;<small><i class="fa fa-angle-double-right"></i> Ubah</small></h4>
          </div>
        <div class="modal-body">
            
         <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post"action="<?php echo base_url();?>manpower/data_profil/simpan_informasi_saudara">
  
                 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Karyawan
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="hidden" id="last-name" name="id_saudara" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $data->id_saudara; ?>" readonly="readonly">
                          <input type="hidden" id="last-name" name="id_man_power" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $data->id_man_power; ?>" readonly="readonly">
                          <input type="text" id="last-name" autocomplete="off" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $data->nama_mp; ?>" readonly="readonly">
                        </div>
                      </div>
                  
                    
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Saudara
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" value="<?php echo $data->nama_saudara;?>"  name="nama_saudara" required="required" placeholder="Masukan Nama Saudara" class="form-control col-md-4">
                         
                        </div>
                       
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jenis Kelamin
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                           <select class="form-control" name="jenis_kelamin" required="required" >
                            <option>-- Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki"<?php if ($data->jenis_kelamin == 'Laki-Laki') { echo "selected"; };?>>Laki-Laki</option>
                            <option value="Perempuan"<?php if ($data->jenis_kelamin == 'Perempuan') { echo "selected"; };?>>Perempuan</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Hubungan Saudara
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                           <select class="form-control" name="hubungan_saudara" required="required" >
                            <option>-- Pilih Hubungan Saudara</option>
                            <option value="Kandung"<?php if ($data->jenis_kelamin == 'Kandung') { echo "selected"; };?>>Kandung</option>
                            <option value="Tiri"<?php if ($data->jenis_kelamin == 'Tiri') { echo "selected"; };?>>Tiri</option>
                      
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Pekerjaan 
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" name="pekerjaan_saudara" value="<?php echo $data->pekerjaan_saudara;?>" required="required" placeholder="Masukan Pekerjaan Saudara" class="form-control col-md-4">
                         
                        </div>
                       
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No. HP
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" value="<?php echo $data->no_hp_saudara;?>" name="no_hp_saudara" required="required" placeholder="Masukan Nomor HP Saudara" class="form-control col-md-4">
                         
                        </div>
                       
                      </div>

                     

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <textarea id="message" rows="4" required="required" name="alamat_saudara" placeholder="Masukan Alamat Lengkap"  class="form-control"><?php echo $data->alamat_saudara;?></textarea>

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
                       