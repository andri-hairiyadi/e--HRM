

 <!-- page content -->
       <div class="right_col" role="main" style="background-image:url(<?php echo base_url();?>style/images/latar.jpg)" >
  <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><i class="fa fa-book"></i> Data Pegawai&nbsp;<small><i class="fa fa-angle-double-right"></i> Tambah</small></h3>
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
                
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"  enctype="multipart/form-data" method="post"action="<?php echo base_url();?>admin_yayasan/data_pegawai/simpan">
<?=$this->session->flashdata('pesan')?>
                 <div class="well" style="overflow: auto">
           
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Sekolah
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" required="required" name="id_sekolah" tabindex="-1" required="required">
                            <option value="">-- Pilih Nama Sekolah --</option>
                            <?php
                              $sekolah = $this->db->get('data_sekolah');
                              foreach ($sekolah->result() as $row) {

                              ?>
                            <option value="<?php echo $row->id_sekolah; ?>" ><?php echo $row->nama_sekolah; ?></option>
                              <?php } ?>
                          </select>
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Pegawai
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="nama_pegawai" required="required" placeholder="Masukan Nama Pegawai" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">NIP
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="nip" required="required" placeholder="Masukan NIP" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tempat Lahir
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="tempat_lahir" required="required" placeholder="Masukan Tempat Lahir" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Lahir
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="tanggal_lahir" required="required" autocomplete="off" data-date-format="yyyy-mm-dd" placeholder="Masukan Tanggal Lahir" class="form-control col-md-7 col-xs-12 datepicker">
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jenis Kelamin
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                       		<div>
                               <label class="radio-inline" for="checkout-payment-prepaid">
                                <input type="radio" required="required" name="jenis_kelamin" value="Laki-Laki"> Laki-Laki
                               </label>
                               <label class="radio-inline" for="checkout-payment-cash">
                                   <input type="radio" required="required" name="jenis_kelamin" value="Perempuan"> Perempuan
                               </label>
                           </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                     <textarea id="message" required="required" placeholder="Masukan Alamat Lengkap" name="alamat" class="form-control"></textarea>

                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No. HP
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="no_hp" required="required" placeholder="Masukan Nomor Hp" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="email" required="required" placeholder="Masukan Alamat Email" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jabatan
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="jabatan" required="required" placeholder="Masukan Jabatan" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Status Kepegawaian
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="status_kepegawaian" required="required" placeholder="Masukan Status Kepegawaian" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Status Sertifikasi
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="status_sertifikasi" required="required" placeholder="Masukan Status Sertifikasi" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
           
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Pendidikan Terakhir
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="pendidikan_terakhir" required="required" placeholder="Masukan Pendidikan Terakhir" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                  
                
                     
                     
                </div>


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                      <ul class="nav navbar-right panel_toolbox">
                          <a href="<?php echo base_url();?>admin_yayasan/data_pegawai" class="btn btn-dark pull-right" style="margin-right: 5px;"><i class="fa fa-arrow-left"></i>&nbsp;Kembali</a>               
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
