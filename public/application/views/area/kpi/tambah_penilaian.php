<script>
function readURL03(input) { // Mulai membaca inputan gambar
if (input.files && input.files[0]) {
var reader = new FileReader(); // Membuat variabel reader untuk API FileReader

reader.onload = function (e) { // Mulai pembacaan file
$('#preview3') // Tampilkan gambar yang dibaca ke area id #preview_gambar
.attr('src', e.target.result)
.width(330); // Menentukan lebar gambar preview (dalam pixel)
//.height(400); // Jika ingin menentukan lebar gambar silahkan aktifkan perintah pada baris ini
};


reader.readAsDataURL(input.files[0]);
}
}

</script>

    <div id="tambah_penilaian"  class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
      <div class="modal-dialog">
        <div class="modal-content" >

          <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button> 

                   <h4 class="modal-title" id="myModalLabel">Key Performance Indicator  &nbsp;<small><i class="fa fa-angle-double-right"></i> Tambah</small></h4>
          </div>
        <div class="modal-body">

         <form id="demo-form2" enctype="multipart/form-data"  data-parsley-validate class="form-horizontal form-label-left" method="post"action="<?php echo base_url();?>area/kpi/simpan_kpi">
                      

                       <?php
    foreach ($detail->result() as $row) {
    ?>    <div class="well" style="overflow: auto">
                 <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="last-name">Nama Karyawan
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="hidden" id="last-name" name="id_man_power" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row->id_man_power; ?>" readonly="readonly">
                          <input type="hidden" id="last-name" name="id_area_kerja" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row->id_area_kerja; ?>" readonly="readonly">
                          <input type="text" id="last-name" autocomplete="off" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row->nama_mp; ?>" readonly="readonly">
                        </div>
                      </div>
                      <?php  } ?>

                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="last-name">Nama Area
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row->nama_area; ?>" readonly="readonly">
                       
                        </div>
                </div>
                </div>
                  <div class="well" style="overflow: auto">

                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="last-name">Tanggal Mulai
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" name="tgl_mulai_kpi" required="required" data-date-format="yyyy-mm-dd" placeholder="Masukan Tanggal Mulai Mulai" class="form-control col-md-4 datepicker">
                         </div>
                         </div>

                          <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="last-name">Tanggal Selesai
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" name="tgl_selesai_kpi" required="required" data-date-format="yyyy-mm-dd" placeholder="Masukan Tanggal Mulai Selesai" class="form-control col-md-4 datepicker">
                         </div>
                         </div>

                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="last-name">Total Nilai General
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" name="total_general" maxlength="2" onkeypress="return isNumberKey(event)" onkeyup="this.value=this.value.replace(/[^\d]/,'')" required="required" placeholder="Masukan Total Nilai Gineral" class="form-control col-md-4">

                        </div>

                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="last-name">Total Nilai Skill
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" name="total_skill" maxlength="2" onkeypress="return isNumberKey(event)" onkeyup="this.value=this.value.replace(/[^\d]/,'')" required="required" placeholder="Masukan Total Nilai Skill" class="form-control col-md-4">

                        </div>

                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="last-name">Total Keseluruhan
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" name="total_keseluruhan" maxlength="2" onkeypress="return isNumberKey(event)" onkeyup="this.value=this.value.replace(/[^\d]/,'')" required="required" placeholder="Masukan Total Keseluruhan" class="form-control col-md-4">

                        </div>

                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="last-name">Upload File
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input type="file" name="filefoto" required="required" class="form-control" onchange="readURL03(this);">
                               <center>
                             <img src="<?php echo base_url();?>style/images/gambar_upload.jpg" id="preview3" alt="Preview Image" style="width: 330px; height: 430px; " />
                          </center>

                        </div>
                         

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
