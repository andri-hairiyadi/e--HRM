<script>
function readURL01(input) { // Mulai membaca inputan gambar
if (input.files && input.files[0]) {
var reader = new FileReader(); // Membuat variabel reader untuk API FileReader
 
reader.onload = function (e) { // Mulai pembacaan file
$('#preview1') // Tampilkan gambar yang dibaca ke area id #preview_gambar
.attr('src', e.target.result)
.width(300); // Menentukan lebar gambar preview (dalam pixel)
//.height(200); // Jika ingin menentukan lebar gambar silahkan aktifkan perintah pada baris ini
};


reader.readAsDataURL(input.files[0]);
}
}

</script>

    <?php

    foreach ($isi->result() as $data) {
    ?>

    <div id="ubah_photo<?php echo $data->id_man_power;?>"  class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
      <div class="modal-dialog">
        <div class="modal-content" >

          <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>

                   <h4 class="modal-title" id="myModalLabel">Photo&nbsp;<small><i class="fa fa-angle-double-right"></i> Ubah</small></h4>
          </div>
        <div class="modal-body">
            
         <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>manpower/data_profil/ubah_photo_profil">
                    
                      
                       

                               <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Photo 
                        </label>
                          <div class="col-md-7 col-sm-7 col-xs-12">
                          <input type="hidden" id="last-name" name="id_man_power" required="required" value="<?php echo $data->id_man_power?>" placeholder="Masukan Nama Anggota" class="form-control col-md-7 col-xs-12">
     
                          <input type="hidden" id="last-name" name="gbrlama" class="form-control col-md-7 col-xs-12" value="<?php echo $data->file_photo?>">
                   
                          <input type="file" id="last-name" name="filefoto" class="form-control col-md-7 col-xs-12" onchange="readURL01(this);">
                              <img src="<?php echo base_url();?>style/images/user/<?php echo $data->file_photo;?>" id="preview1" alt="Preview Image" style="width: 300px; height: 400px;" />
                       
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

    <?php  } ?>