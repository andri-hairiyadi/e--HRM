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
        foreach($edit as $data){
        ?>

 <!-- page content -->
       <div class="right_col" role="main" style="background-image:url(<?php echo base_url();?>style/images/latar.jpg)" >
  <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><i class="fa fa-user"></i> Data Man Power&nbsp;<small><i class="fa fa-angle-double-right"></i> Ubah</small></h3>
              </div>
                 <div class="title_right">
                <div class="col-md-4 col-sm-4 col-xs-12 form-group pull-right top_search">

                  <div class="input-group">
                 <div class="btn btn-round btn-default btn-block"><i class="fa fa-calendar"></i>&nbsp;
            
        <script>
          var bln=['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
          var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
          var tgl= new Date();
          var hari=tgl.getDate();
          var bulan=tgl.getMonth();
          var hariini=tgl.getDay();
          hariini=myDays[hariini];
          var yy=tgl.getYear();
          var tahun=(yy<1000)?yy+1900:yy;
          document.write(hariini+', '+hari+" "+bln[bulan]+" "+tahun)
        </script>          
             </div>
                  </div>
                </div>
              </div>

            </div>

         
              
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"  enctype="multipart/form-data" method="post"action="<?php echo base_url();?>admin/data_man_power/ubah_simpan">
<?=$this->session->flashdata('pesan')?>
 
 <div class="well" style="overflow: auto">        
                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Photo 
                        </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="hidden" id="last-name" name="id_man_power" required="required" value="<?php echo $data->id_man_power?>" class="form-control col-md-7 col-xs-12">
     
                          <input type="hidden" id="last-name" name="gbrlama" class="form-control col-md-7 col-xs-12" value="<?php echo $data->file_photo?>">
                   
                          <input type="file" id="last-name" name="filefoto" class="form-control col-md-7 col-xs-12" onchange="readURL01(this);">
                              <img src="<?php echo base_url();?>style/images/user/<?php echo $data->file_photo;?>" id="preview1" alt="Preview Image" style="width: 300px; height: 400px;" />
                       
                        </div>
                      </div>
  </div>

  <div class="well" style="overflow: auto">                    
                          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Lengkap
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        
                          <input type="text" id="last-name" name="nama_mp" value="<?php echo $data->nama_mp; ?>" required="required" placeholder="Masukan Nama Man Power" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nomor Identitas (KTP) / SIM
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="no_identitas" value="<?php echo $data->no_identitas; ?>" required="required" placeholder="Masukan Nomor Identitas (KTP) / SIM" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nomor ID
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="nomor_id" value="<?php echo $data->nomor_id; ?>" required="required" placeholder="Masukan Nomor ID" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tempat Lahir
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="tempat_lahir_mp" value="<?php echo $data->tempat_lahir_mp; ?>"required="required" placeholder="Masukan Tempat Lahir" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Lahir
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="tanggal_lahir_mp" value="<?php echo $data->tanggal_lahir_mp; ?>" required="required" autocomplete="off" data-date-format="yyyy-mm-dd" placeholder="Masukan Tanggal Lahir" class="form-control col-md-7 col-xs-12 datepicker">
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jenis Kelamin
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div>
                               <label class="radio-inline" for="checkout-payment-prepaid">
                                <input type="radio" required="required" name="jk_mp"<?php if($data->jk_mp == 'Laki-Laki' ) { echo 'checked'; } ?> value="Laki-Laki"> Laki-Laki
                               </label>
                               <label class="radio-inline" for="checkout-payment-cash">
                                   <input type="radio" required="required" name="jk_mp"<?php if($data->jk_mp == 'Perempuan' ) { echo 'checked'; } ?> value="Perempuan"> Perempuan
                               </label>
                           </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                     <textarea id="message" required="required" placeholder="Masukan Alamat Lengkap" name="alamat_mp" class="form-control"><?php echo $data->alamat_mp; ?></textarea>

                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No. HP
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="no_hp_mp" value="<?php echo $data->no_hp_mp; ?>"  required="required" placeholder="Masukan Nomor Hp" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Agama
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" name="agama" >
                                                <option value="">--Pilih Agama --</option>
                                                <option value="Islam"<?php if($data->agama == 'Islam' ) { echo 'selected'; } ?>>Islam</option>
                                                <option value="Kristen"<?php if($data->agama == 'Kristen' ) { echo 'selected'; } ?>>Kristen</option>
                                                <option value="Hindu"<?php if($data->agama == 'Hindu' ) { echo 'selected'; } ?>>Hindu</option>
                                                <option value="Budha"<?php if($data->agama == 'Budha' ) { echo 'selected'; } ?>>Budha</option>
                                                <option value="Kunghucu"<?php if($data->agama == 'Kunghucu' ) { echo 'selected'; } ?>>Kunghucu</option>
                              </select>  
                        </div>
                      </div>
                      <div class="form-group"> 
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Golongan Darah
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <select class="form-control" name="gol_darah" >
                                                <option value="">--Masukan Golongan Darah --</option>
                                                <option value="A"<?php if($data->gol_darah == 'A' ) { echo 'selected'; } ?>>A</option>
                                                <option value="B"<?php if($data->gol_darah == 'B' ) { echo 'selected'; } ?>>B</option>
                                                <option value="AB"<?php if($data->gol_darah == 'AB' ) { echo 'selected'; } ?>>AB</option>
                                                <option value="O"<?php if($data->gol_darah == 'O' ) { echo 'selected'; } ?>>O</option>
                                            </select>
                           </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Hobi
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="hoby_mp" value="<?php echo $data->hoby_mp; ?>" required="required" autocomplete="off" placeholder="Masukan Nama Hobi" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
</div>

<div class="well" style="overflow: auto">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tinggi Badan
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="tinggi_badan" value="<?php echo $data->tinggi_badan; ?>" required="required" autocomplete="off" placeholder="Masukan Tinggi Badan" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Berat Badan
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="berat_badan" value="<?php echo $data->berat_badan; ?>"  required="required" autocomplete="off" placeholder="Masukan Berat Badan" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Penyakit
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="penyakit" value="<?php echo $data->penyakit; ?>"  required="required" autocomplete="off" placeholder="Masukan Nama penyakit" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
</div>


<div class="well" style="overflow: auto">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Bank
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="nama_bank" value="<?php echo $data->nama_bank; ?>" required="required" autocomplete="off" placeholder="Masukan Nama Bank" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nomor Rekening
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="no_rekening" value="<?php echo $data->no_rekening; ?>" required="required" autocomplete="off" placeholder="Masukan Nomor Rekening" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Sesuai Buku Rekening Bank
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="nama_buku" value="<?php echo $data->nama_buku; ?>" required="required" autocomplete="off" placeholder="Masukan Sesuai Buku Rekening Bank" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
</div>


<div class="well" style="overflow: auto">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nomor PBJS Ketenagakerjaan
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="bpjs_ketenagakerjaan" value="<?php echo $data->no_bpjs_kes; ?>"required="required" autocomplete="off" placeholder="Masukan Nomor BPJS Ketenagakerjaan" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nomor BPJS Kesehatan
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="bpjs_kesehatan" value="<?php echo $data->no_bpjs_kes; ?>" required="required" autocomplete="off" placeholder="Masukan Nomor BPJS Kesehatan" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nomor PKWT
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="nomor_pkwt" value="<?php echo $data->no_pkwt; ?>" required="required" autocomplete="off" placeholder="Masukan Nomor PKWT" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
</div>









<div class="well" style="overflow: auto">
                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Status Menikah
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="status_menikah" value="<?php echo $data->status_menikah; ?>"required="required" autocomplete="off" placeholder="Masukan Status Menikah" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Pasangan
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="nama_pasangan" value="<?php echo $data->nama_pasangan; ?>"required="required" autocomplete="off" placeholder="Masukan Nama Pasangan" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat Pasangan
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                             <textarea id="message" required="required" placeholder="Masukan Alamat Pasangan" name="alamat_pasangan" class="form-control"><?php echo $data->alamat_pasangan; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No. HP Pasangan
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="no_hp_pasangan" value="<?php echo $data->no_hp_pasangan; ?>" required="required" autocomplete="off" placeholder="Masukan Nomor HP Pasangan" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Lahir Pasangan
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="last-name" name="tanggal_lahir_pasangan" value="<?php echo $data->tanggal_lahir_pasangan; ?>" required="required" autocomplete="off" data-date-format="yyyy-mm-dd" placeholder="Masukan Tanggal Lahir Pasangan" class="form-control col-md-7 col-xs-12 datepicker">
                      
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Pendidikan Pasangan
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="pendidikan_pasangan" value="<?php echo $data->pendidikan_pasangan; ?>"required="required" autocomplete="off" placeholder="Masukan Pendidikan Pasangan" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Pekerjaan Pasangan
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="pekerjaan_pasangan" value="<?php echo $data->pekerjaan_pasangan; ?>" required="required" autocomplete="off" placeholder="Masukan Pekerjaan Pasangan" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                  </div>

             <div class="well" style="overflow: auto">
           
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Ayah
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="nama_ayah" value="<?php echo $data->nama_ayah; ?>"  required="required" autocomplete="off" placeholder="Masukan Nama Ayah" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No. Hp Ayah
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="no_hp_ayah" value="<?php echo $data->no_hp_ayah; ?>"  required="required" autocomplete="off" placeholder="Masukan Nomor HP Ayah" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat Ayah
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                             <textarea id="message" required="required" placeholder="Masukan Alamat Ayah" name="alamat_ayah" class="form-control"><?php echo $data->alamat_ayah; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Ibu
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="nama_ibu" value="<?php echo $data->nama_ibu; ?>" required="required" autocomplete="off" placeholder="Masukan Nama Lengkap Ibu" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No. Hp Ibu
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="no_hp_ibu" value="<?php echo $data->no_hp_ibu; ?>"  required="required" autocomplete="off" placeholder="Masukan Nomor HP Ibu" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat Ibu
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                             <textarea id="message" required="required" placeholder="Masukan Alamat Ibu" name="alamat_ibu" class="form-control"><?php echo $data->alamat_ibu; ?></textarea>
                        </div>
                      </div>
               
                
                     
                     
                </div>


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                      <ul class="nav navbar-right panel_toolbox">
                          <a href="<?php echo base_url();?>admin/data_man_power" class="btn btn-dark pull-right" style="margin-right: 5px;"><i class="fa fa-arrow-left"></i>&nbsp;Kembali</a>               
                      </ul> 
                       <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i>&nbsp;Simpan</button>
                        

                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- /page content -->
<?php } ?>