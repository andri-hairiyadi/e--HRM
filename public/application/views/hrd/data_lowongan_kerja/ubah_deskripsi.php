
     <?php
                            $no = 1;
                            foreach ($isi->result() as $row) {
                            ?>
    <div id="ubah_deskripsi<?php echo $row->id_deskripsi; ?>"  class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
      <div class="modal-dialog">
        <div class="modal-content" >

          <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>

                   <h4 class="modal-title" id="myModalLabel">Deskripsi&nbsp;<small><i class="fa fa-angle-double-right"></i> Tambah</small></h4>
          </div>
        <div class="modal-body">
            
         <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post"action="<?php echo base_url();?>hrd/data_lowongan_kerja/simpan_deskripsi">
            
                 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Lowongan
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="hidden" id="last-name" name="id_deskripsi" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row->id_deskripsi; ?>" readonly="readonly">
                          <input type="hidden" id="last-name" name="id_lowongan" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row->id_lowongan; ?>" readonly="readonly">
                          <input type="text" id="last-name" autocomplete="off" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row->nama_lowongan; ?>" readonly="readonly">
                        </div>
                      </div>
                   

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Deskripsi
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <textarea id="message" rows="10" required="required" name="deskripsi" placeholder="Masukan Deskripsi Lowongan"  class="form-control"><?php echo $row->deskripsi; ?></textarea>

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

    <?php } ?>