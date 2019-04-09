
    <div id="tambah_riwayat"  class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
      <div class="modal-dialog">
        <div class="modal-content" >

          <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>

                   <h4 class="modal-title" id="myModalLabel">Tambah Penilaian&nbsp;<small><i class="fa fa-angle-double-right"></i> Tambah</small></h4>
          </div>
        <div class="modal-body">

         <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post"action="<?php echo base_url();?>area/history_man_power/simpan_history">
                       <?php
    foreach ($detail->result() as $row) {
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Mulai
                        </label>
                        

                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Selesai
                        </label>
                        

                      </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Total Nilai Gineral
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" name="penghargaan" required="required" placeholder="Masukan Penghargaan" class="form-control col-md-4">

                        </div>

                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Total Nilai Skill
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" name="pelanggaran" required="required" placeholder="Masukan Pelanggaran" class="form-control col-md-4">

                        </div>

                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Total Keseluruhan
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" name="pelanggaran" required="required" placeholder="Masukan Pelanggaran" class="form-control col-md-4">

                        </div>

                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Upload File
                        </label>
                        

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
