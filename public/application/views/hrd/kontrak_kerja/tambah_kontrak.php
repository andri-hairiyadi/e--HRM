     <?php
                      
                            foreach ($isi->result() as $row) {
                            ?>

   <div id="kontrak<?php echo $row->id_man_power; ?>"  class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
       <div class="modal-content"> 

            <div class="modal-header" style="background-image:url(<?php echo base_url();?>style/images/pop_atas.jpg)">
            
                        <center>  <h4 class="modal-title" id="myModalLabel"><b>Kontrak Kerja</b></h4> </center>
          </div>
       <div class="modal-body">
        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url();?>hrd/kontrak_kerja/simpan_kontrak">
     
     <div class="well" style="overflow: auto">

                <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Man Power
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="hidden" id="last-name" name="id_man_power" value="<?php echo $row->id_man_power; ?>" readonly="readonly" placeholder="Masukan Nama "  required="required" class="form-control col-md-7 col-xs-12">
                          <input type="text" id="last-name" value="<?php echo $row->nama_mp; ?>" readonly="readonly" placeholder="Masukan Nama "  required="required" class="form-control col-md-7 col-xs-12">
                         </div>
                </div> 
                     </div>
                   
                 <div class="well" style="overflow: auto">
   
                <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Posisi Pilihan
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                         <input type="text" id="last-name" value="<?php echo $row->posisi_pilihan; ?>" readonly="readonly" placeholder="Masukan Nama "  required="required" class="form-control col-md-7 col-xs-12">
                         </div>
                </div>
                <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Posisi Tugas
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                         
                           <input type="text" id="last-name" name="posisi_tugas" required="required" placeholder="Masukan Nomor Posisi" class="form-control col-md-7 col-xs-12">
                       	  
                        </div>
                </div>
                                 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Area
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                         <select class="form-control" name="id_area_kerja" required="required" >
                            <option>-- Pilih Data Area Kerja --</option>
                                  <?php
                            $no = 1;
                            foreach ($area->result() as $row) {
                            ?>

                            <option value="<?php echo $row->id_area_kerja;?>"><?php echo $row->nama_area;?></option>

                            <?php } ?>

                          </select>  
                        </div>
                </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Kontrak
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" name="tgl_mulai" required="required" data-date-format="yyyy-mm-dd" placeholder="Tanggal Mulai" class="form-control col-md-4 datepicker">
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" name="tgl_selesai" required="required" data-date-format="yyyy-mm-dd" placeholder="Tanggal Selesai" class="form-control col-md-4 datepicker">
                        </div>
                      </div>
                       
                  </div>
                      
          
          </div>
          


        <!-- /page content -->

          <div class="modal-footer" style="background-image:url(<?php echo base_url();?>style/images/pop_bawah.jpg)">
            <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary antosubmit"><i class="fa fa-save"></i>&nbsp;Simpan Kontrak Kerja</button>
    
          </div>
        </div>
      </div>
    </div>
    </form>

    <?php } ?>