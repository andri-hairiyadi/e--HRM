
    <div id="tambah_pendidikan"  class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
      <div class="modal-dialog">
        <div class="modal-content" >

          <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>

                   <h4 class="modal-title" id="myModalLabel">Data Informasi Pendidikan&nbsp;<small><i class="fa fa-angle-double-right"></i> Tambah</small></h4>
          </div>
        <div class="modal-body">
            
         <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post"action="<?php echo base_url();?>manpower/data_profil/simpan_informasi_pendidikan">
                       <?php
    foreach ($data->result() as $row) {
    ?>
                 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Karyawan
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="hidden" id="last-name" name="id_man_power" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row->id_man_power; ?>" readonly="readonly">
                          <input type="text" id="last-name" autocomplete="off" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row->nama_mp; ?>" readonly="readonly">
                        </div>
                      </div>
                      <?php  } ?>
                       

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tingkat Pendidikan 
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                           <select class="form-control" name="tingkat_pendidikan" required="required" >
                            <option>-- Pilih Tingkat Pendidikan</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="S1">S1</option>
                          </select>
                        </div>
                      </div>
   
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Sekolah 
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" name="nama_sekolah" required="required" placeholder="Masukan Nama Sekolah" class="form-control col-md-4">
                         
                        </div>
                       
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tahun Lulus
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" name="tahun_lulus" required="required" placeholder="Masukan Tahun Lulus" class="form-control col-md-4">
                         
                        </div>
                       
                      </div>

<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No. Ijazah
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" name="nomor_ijazah" required="required" placeholder="Masukan Nomor Ijazah" class="form-control col-md-4">
                         
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