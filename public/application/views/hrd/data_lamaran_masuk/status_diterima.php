       <?php
        foreach($detail as $data){
        ?>

     <div id="terima<?php echo $data->id_pelamar; ?>"  class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
       <div class="modal-content"> 

            <div class="modal-header" style="background-image:url(<?php echo base_url();?>style/images/pop_atas.jpg)">
            
                        <center>  <h4 class="modal-title" id="myModalLabel"><b>Status Penerimaan</b></h4> </center>
          </div>
       <div class="modal-body">
        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url();?>hrd/data_lamaran_masuk/status_diterima">
          <input type="hidden" id="first-name" placeholder="" class="form-control col-md-7 col-xs-12" name="id_pelamar" value="<?php echo $data->id_pelamar; ?>">       
          <input type="hidden" id="first-name" placeholder="" class="form-control col-md-7 col-xs-12" name="no_pendaftaran" value="<?php echo $data->no_pendaftaran; ?>">       
          <input type="hidden" id="first-name" placeholder="" class="form-control col-md-7 col-xs-12" name="nama_pelamar" value="<?php echo $data->nama_pelamar; ?>">       
          <input type="hidden" id="first-name" placeholder="" class="form-control col-md-7 col-xs-12" name="no_hp" value="<?php echo $data->no_hp; ?>">       
     <div class="well" style="overflow: auto">

           <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Pelamar
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" value="<?php echo $data->nama_pelamar; ?>" readonly="readonly" placeholder="Masukan Nama "  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> 
                     </div>
                   
                 <div class="well" style="overflow: auto">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Interview
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" name="tanggal_interview" required="required" data-date-format="yyyy-mm-dd" placeholder="Masukan Tanggal Interview" class="form-control col-md-4 datepicker">
                         
                        </div>
                       
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jam Interview
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <div class="input-group clockpicker" data-placement="buttom" data-align="left" data-donetext="Selesai">
                              <input type="text" class="form-control" name="jam_interview" value="00:00">
                              <span class="input-group-addon">
                                <span class="glyphicon glyphicon-time"></span>
                              </span>
                            </div>
                         </div>
                       
                      </div>
                  </div>
                      
          
          </div>

        <!-- /page content -->

          <div class="modal-footer" style="background-image:url(<?php echo base_url();?>style/images/pop_bawah.jpg)">
            <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary antosubmit"><i class="fa fa-check"></i>&nbsp;Konfirmasi Jadwal Interview</button>
    
          </div>
        </div>
      </div>
    </div>

</form>
    <?php } ?>