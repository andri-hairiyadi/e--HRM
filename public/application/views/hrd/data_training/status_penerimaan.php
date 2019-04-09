       <?php
        foreach($isi->result() as $row){
        ?>

     <div id="status<?php echo $row->id_pelamar; ?>"  class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
       <div class="modal-content">

            <div class="modal-header" >
            
                        <center>  <h4 class="modal-title" id="myModalLabel"><b>Status Penerimaan</b></h4> </center>
          </div>
       <div class="modal-body">
        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url();?>admin_yayasan/data_psb/status_penerimaan">
          <input type="hidden" id="first-name" placeholder="" class="form-control col-md-7 col-xs-12" name="id_psb" value="<?php echo $row->id_pelamar; ?>">       
          <input type="hidden" id="first-name" placeholder="" class="form-control col-md-7 col-xs-12" name="no_hp" value="<?php echo $row->no_hp; ?>">       
          <input type="hidden" id="first-name" placeholder="" class="form-control col-md-7 col-xs-12" name="nama_lengkap" value="<?php echo $row->nama_pelamar; ?>">       
          <input type="hidden" id="first-name" placeholder="" class="form-control col-md-7 col-xs-12" name="sekolah" value="<?php echo $row->posisi; ?>">       
          <input type="hidden" id="first-name" placeholder="" class="form-control col-md-7 col-xs-12" name="no_pendaftaran" value="<?php echo $row->no_pendaftaran; ?>">       
          <input type="hidden" id="first-name" placeholder="" class="form-control col-md-7 col-xs-12" name="jenis_kelamin" value="<?php echo $row->jenis_kelamin; ?>">       

           <div class="form-group">
              <div class="col-md-2">&nbsp;</div>
              <div class="col-md-4 col-sm-7 col-xs-12">  
                  <input type="radio" class="flat" name="status" value="Diterima"> Diterima
              </div>
               <div class="col-md-5 col-sm-5 col-xs-12">  
                       <input type="radio" class="flat" name="status" value="Tidak Diterima"> Tidak Diterima
                </div>
            </div>
       
          
          </div>

        <!-- /page content -->

          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-success antosubmit"><i class="fa fa-check"></i>&nbsp;Konfirmasi Status Penerimaan </button>
    
          </div>
        </div>
      </div>
    </div>

</form>
    <?php } ?>