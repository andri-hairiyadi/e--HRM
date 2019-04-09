       <?php
             foreach ($isi->result() as $row) {
        ?>

     <div id="tahap2<?php echo $row->id_pelamar; ?>"  class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
       <div class="modal-content"> 

           <div class="modal-header" style="background-image:url(<?php echo base_url();?>style/images/pop_atas.jpg)">
            
                        <center>  <h4 class="modal-title" id="myModalLabel"><b>Status Training Tahap 2</b></h4> </center>
          </div>
       <div class="modal-body">
        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url();?>hrd/data_training/tahap_2">
          <input type="hidden" id="first-name" placeholder="" class="form-control col-md-7 col-xs-12" name="id_pelamar" value="<?php echo $row->id_pelamar; ?>">       
          <input type="hidden" id="first-name" placeholder="" class="form-control col-md-7 col-xs-12" name="nama_pelamar" value="<?php echo $row->nama_pelamar; ?>">       
          <input type="hidden" id="first-name" placeholder="" class="form-control col-md-7 col-xs-12" name="no_pendaftaran" value="<?php echo $row->no_pendaftaran; ?>">       
          <input type="hidden" id="first-name" placeholder="" class="form-control col-md-7 col-xs-12" name="no_hp" value="<?php echo $row->no_hp; ?>">       
  
     <div class="well" style="overflow: auto">

           <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Pelamar
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" name="nama_pelamar" value="<?php echo $row->nama_pelamar; ?>" readonly="readonly" placeholder="Masukan Nama "  required="required" class="form-control col-md-7 col-xs-12">
           
                        </div>
                      </div> 
                     </div>
                   
                         <div class="well" style="overflow: auto">

                                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Area
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                         <select class="form-control" name="nama_area" required="required" >
                            <option>-- Pilih Data Area Kerja --</option>
                                  <?php
                            $no = 1;
                            foreach ($area->result() as $row) {
                            ?>

                            <option value="<?php echo $row->nama_area;?>"><?php echo $row->nama_area;?></option>

                            <?php } ?>

                          </select>  
                        </div>
                </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Training
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" name="tanggal_training" required="required" data-date-format="yyyy-mm-dd" placeholder="Masukan Tanggal Mulai Training" class="form-control col-md-4 datepicker">
                         </div>
                         </div>
                         <div class="form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"></label>
                         <div class="col-md-8 col-sm-8 col-xs-12"> 
                          <input type="text" id="last-name" autocomplete="off" name="tanggal_training_selesai" required="required" data-date-format="yyyy-mm-dd" placeholder="Masukan Tanggal Selesai Training" class="form-control col-md-4 datepicker">
                        </div>
                       
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jam Training
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <div class="input-group clockpicker" data-placement="buttom" data-align="left" data-donetext="Selesai">
                              <input type="text" class="form-control" name="jam_training" value="00:00">
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
          <button type="submit" class="btn btn-primary antosubmit"><i class="fa fa-save"></i>&nbsp; Selesai </button>
    
          </div>
        </div>
      </div>
    </div>
         </form>

    <?php } ?>