<script>
function readURL02(input) { // Mulai membaca inputan gambar
if (input.files && input.files[0]) {
var reader = new FileReader(); // Membuat variabel reader untuk API FileReader
 
reader.onload = function (e) { // Mulai pembacaan file
$('#preview2') // Tampilkan gambar yang dibaca ke area id #preview_gambar
.attr('src', e.target.result)
.width(355); // Menentukan lebar gambar preview (dalam pixel)
//.height(200); // Jika ingin menentukan lebar gambar silahkan aktifkan perintah pada baris ini
};


reader.readAsDataURL(input.files[0]);
}
}

</script>




     <?php
       $no = 1;
      foreach ($isi->result() as $row) {
      ?>

    <div id="ubah_lowongan<?php echo $row->id_lowongan; ?>"  class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
      <div class="modal-dialog">
        <div class="modal-content" >

          <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>

                   <h4 class="modal-title" id="myModalLabel">Lowongan Kerja&nbsp;<small><i class="fa fa-angle-double-right"></i> Ubah</small></h4>
          </div>
        <div class="modal-body">
            
         <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>hrd/data_lowongan_kerja/simpan_ubah_lowongan">
            
                 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Lowongan
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="hidden" id="last-name" name="id_lowongan" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row->id_lowongan; ?>" readonly="readonly">
                          <input type="text" id="last-name" name="nama_lowongan" autocomplete="off" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row->nama_lowongan; ?>">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Batas Pendaftaran
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" name="tanggal_awal" value="<?php echo $row->tanggal_awal; ?>"required="required" data-date-format="yyyy-mm-dd" placeholder="Masukan Tanggal Awal" class="form-control col-md-4 datepicker">
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="text" id="last-name" autocomplete="off" name="tanggal_akhir" value="<?php echo $row->tanggal_akhir; ?>" required="required" data-date-format="yyyy-mm-dd" placeholder="Masukan Tanggal Akhir" class="form-control col-md-4 datepicker">
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Photo 
                        </label>
                          <div class="col-md-8 col-sm-8 col-xs-12">
                    
                          <input type="hidden" id="last-name" name="gbrlama" class="form-control col-md-7 col-xs-12" value="<?php echo $row->gambar;?>">
                   
                          <input type="file" id="last-name" name="filefoto" class="form-control col-md-7 col-xs-12" onchange="readURL02(this);">
                              <img src="<?php echo base_url();?>style/images/lowongan/<?php echo $row->gambar;?>" id="preview2" alt="Preview Image" style="width: 355px; height: 230px;" />
                       
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