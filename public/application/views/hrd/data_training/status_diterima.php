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
        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url();?>hrd/data_training/status_diterima">
          <input type="hidden" id="first-name" placeholder="" class="form-control col-md-7 col-xs-12" name="id_pelamar" value="<?php echo $data->id_pelamar; ?>">       
     <div class="well" style="overflow: auto">

           <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Pelamar
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" name="nama_pelamar" value="<?php echo $data->nama_pelamar; ?>" readonly="readonly" placeholder="Masukan Nama "  required="required" class="form-control col-md-7 col-xs-12">
                          <input type="hidden" id="last-name" name="nomor_ktp" value="<?php echo $data->nomor_ktp; ?>" class="form-control col-md-7 col-xs-12">
                          <input type="hidden" id="last-name" name="no_pendaftaran" value="<?php echo $data->no_pendaftaran; ?>" class="form-control col-md-7 col-xs-12">
                          <input type="hidden" id="last-name" name="tempat_lahir" value="<?php echo $data->tempat_lahir; ?>" class="form-control col-md-7 col-xs-12">
                          <input type="hidden" id="last-name" name="tanggal_lahir" value="<?php echo $data->tanggal_lahir; ?>" class="form-control col-md-7 col-xs-12">
                          <input type="hidden" id="last-name" name="jenis_kelamin" value="<?php echo $data->jenis_kelamin; ?>"  class="form-control col-md-7 col-xs-12">
                          <input type="hidden" id="last-name" name="agama" value="<?php echo $data->agama; ?>"  class="form-control col-md-7 col-xs-12">
                         <input type="hidden" id="last-name" name="no_hp" value="<?php echo $data->no_hp; ?>"  class="form-control col-md-7 col-xs-12">
                          <input type="hidden" id="last-name" name="alamat" value="<?php echo $data->alamat; ?>"  class="form-control col-md-7 col-xs-12">
                          <input type="hidden" id="last-name" name="hobi" value="<?php echo $data->hobi; ?>"  class="form-control col-md-7 col-xs-12">
                          <input type="hidden" id="last-name" name="golongan_darah" value="<?php echo $data->golongan_darah; ?>" class="form-control col-md-7 col-xs-12">
                          <input type="hidden" id="last-name" name="tinggi_badan" value="<?php echo $data->tinggi_badan; ?>" class="form-control col-md-7 col-xs-12">
                          <input type="hidden" id="last-name" name="berat_badan" value="<?php echo $data->berat_badan; ?>" class="form-control col-md-7 col-xs-12">
                          <input type="hidden" id="last-name" name="penyakit" value="<?php echo $data->penyakit; ?>" class="form-control col-md-7 col-xs-12">
                          <input type="hidden" id="last-name" name="berat_badan" value="<?php echo $data->berat_badan; ?>" class="form-control col-md-7 col-xs-12">
                       <input type="hidden" id="last-name" name="no_rekening" value="<?php echo $data->no_rekening; ?>" class="form-control col-md-7 col-xs-12">
                          <input type="hidden" id="last-name" name="nama_bank" value="<?php echo $data->nama_bank; ?>" class="form-control col-md-7 col-xs-12">
                          <input type="hidden" id="last-name" name="posisi" value="<?php echo $data->posisi; ?>" class="form-control col-md-7 col-xs-12">
                          <input type="hidden" id="last-name" name="file_photo" value="<?php echo $data->file_photo; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> 
                     </div>
                   
                 <div class="well" style="overflow: auto">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Keterangan
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <textarea id="message" required="required" placeholder="Masukan Catatan Untuk Pelamar" rows="6" name="keterangan" class="form-control">Anda Dinyatakan Diterima Di PT. Andesta Mandiri Indonesia</textarea>

                        </div>
                       
                      </div>
                       
                  </div>
                      
          
          </div>
     


        <!-- /page content -->

          <div class="modal-footer" style="background-image:url(<?php echo base_url();?>style/images/pop_bawah.jpg)">
            <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary antosubmit"><i class="fa fa-check"></i>&nbsp;Konfirmasi Status Penerimaan </button>
    
          </div>
        </div>
      </div>
    </div>
         </form>

    <?php } ?>