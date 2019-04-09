    <?php

    foreach ($isi->result() as $data) {
    ?>

    <div id="ubah_profil<?php echo $data->id_man_power;?>"  class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
      <div class="modal-dialog">
        <div class="modal-content" >

          <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>

                   <h4 class="modal-title" id="myModalLabel">Informasi Profil&nbsp;<small><i class="fa fa-angle-double-right"></i> Ubah</small></h4>
          </div>
        <div class="modal-body">
            
         <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post"action="<?php echo base_url();?>manpower/data_profil/ubah_informasi_profil">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Karyawan
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">

                          <input type="hidden" id="last-name" name="id_man_power" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $data->id_man_power; ?>" readonly="readonly">
                          <input type="text" id="last-name" autocomplete="off" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $data->nama_mp; ?>" readonly="readonly">
                        </div>
                      </div>
                      
                       

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nomor KTP / SIM
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" name="no_identitas" value="<?php echo $data->no_identitas;?>" required="required" data-date-format="yyyy-mm-dd" placeholder="Masukan Nomor KTP / SIM" class="form-control col-md-4 ">
                         
                        </div>
                       
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nomor Handpone
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" name="no_hp_mp" value="<?php echo $data->no_hp_mp;?>" required="required" data-date-format="yyyy-mm-dd" placeholder="Masukan Nomor Handpone" class="form-control col-md-4 ">
                         
                        </div>
                       
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" name="alamat_mp" value="<?php echo $data->alamat_mp;?>" required="required" data-date-format="yyyy-mm-dd" placeholder="Masukan Alamat Lengkap" class="form-control col-md-4 ">
                         
                        </div>
                       
                      </div>
                          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jenis Kelamin
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                           <select class="form-control" name="jk_mp" required="required" >
                            <option>-- Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki"<?php if ($data->jk_mp == 'Laki-Laki') { echo "selected"; };?>>Laki-Laki</option>
                            <option value="Perempuan"<?php if ($data->jk_mp == 'Perempuan') { echo "selected"; };?>>Perempuan</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tempat Lahir
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" value="<?php echo $data->tempat_lahir_mp;?>" name="tempat_lahir_mp" required="required" placeholder="Masukan Tempat Lahir" class="form-control col-md-4">
                         
                        </div>
                       
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Lahir
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                              <input type="text" id="last-name" autocomplete="off" value="<?php echo $data->tanggal_lahir_mp;?>" name="tanggal_lahir_mp" required="required" data-date-format="yyyy-mm-dd" placeholder="Masukan Tanggal Lahir" class="form-control col-md-4 datepicker">
                         
                        </div>
                       
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Status Menikah
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                           <select class="form-control" name="status_menikah" required="required" >
                            <option>-- Pilih Status Menikah</option>
                            <option value="menikah"<?php if ($data->status_menikah == 'menikah') { echo "selected"; };?>>Menikah</option>
                            <option value="belum menikah"<?php if ($data->status_menikah == 'belum menikah') { echo "selected"; };?>>Belum Menikah</option>
                          </select>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Agama
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" value="<?php echo $data->agama;?>" name="agama" required="required" placeholder="Masukan Agama" class="form-control col-md-4">
                         
                        </div>
                       
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Golongan Darah
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" value="<?php echo $data->gol_darah;?>" name="gol_darah" required="required" placeholder="Masukan Tempat Lahir" class="form-control col-md-4">
                         
                        </div>
                       
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Hobi
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" value="<?php echo $data->hoby_mp;?>" name="hoby_mp" required="required" placeholder="Masukan Tempat Lahir" class="form-control col-md-4">
                         
                        </div>
                       
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tinggi Badan
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" value="<?php echo $data->tinggi_badan;?>" name="tinggi_badan" required="required" placeholder="Masukan Tempat Lahir" class="form-control col-md-4">
                         
                        </div>
                       
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Berat Badan
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" value="<?php echo $data->berat_badan;?>" name="berat_badan" required="required" placeholder="Masukan Tempat Lahir" class="form-control col-md-4">
                         
                        </div>
                       
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Penyakit
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" value="<?php echo $data->penyakit;?>" name="penyakit" required="required" placeholder="Masukan Tempat Lahir" class="form-control col-md-4">
                         
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