              <section class="site-section site-section-light site-section-top themed-background-dark" style="background-image:url(<?php echo base_url();?>style/images/bg-awal.jpg)">
               <div class="container text-center">
                    <h1 class="animation-slideDown"><strong><font color="#364387"><i class="fa fa-check-square-o"></i> Register</font></strong></h1>
                </div>
            </section>

    <section class="site-content site-section">
                <div class="container">
                    <div class="site-block">

                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"  enctype="multipart/form-data" method="post"action="<?php echo base_url();?>info_lowongan/simpan_pendaftaran">

                            <!-- First Step -->
                            <!-- Third Step -->
                            <div id="checkout-third" class="step">
                                <!-- Step Info -->
                                                         <!-- END Step Info -->
                                <div class="row">

                                    <div class="col-sm-6">
                                        <h4 class="page-header"><i class="fa fa-list-ol"></i> <b>Keterangan</b></h4>
                                        <div class="form-group">
                                            <ol>
                                                <li>Isilah Dengan <b>Benar</b>.</li>
                                                <li>Isi kolom <b>Nomor HP yang Masih Aktif</b>.</li>
                                                <li>Setelah selesai mengisi form kemudian akan mendapatkan <b>SMS</b> notifikasi dan <br>Kartu Registrasi berupa <b>ID Registrasi</b>.</li>
                                                <li>Buka Halaman <a href="<?php echo base_url();?>daftar"><b>Daftar</b></a> dan masukan <b>ID Registrasi</b>.</li>
                                                <li>Isi form Pendaftaran sampai Selesai.</li>
                                                <li>Setelah selesai maka akan mendapatkan <b>Kartu Bukti Pendaftaran Online</b>.</li>

                                            </ol>
                                        </div>
                                    </div>
                                     <div class="col-sm-6">
                                        <h4 class="page-header"><i class="fa fa-list"></i> <b>Biodata</b></h4>
                                           <?php
                                        $no = 1;
                                        foreach ($isi->result() as $row) {
                                        ?>
                                        <div class="form-group">
                                            <label>Posisi</label>
                                           <input type="text"  name="posisi" required="required" class="form-control" value="<?php echo $row->nama_lowongan;?>" readonly="readonly">
                                        </div>
                                       <?php } ?>
                                        <div class="form-group">
                                            <label>Nomor Identitas (KTP/SIM)</label>
                                           <input type="text"  name="nomor_ktp" maxlength="16" onkeypress="return isNumberKey(event)" onkeyup="this.value=this.value.replace(/[^\d]/,'')" required="required" class="form-control" placeholder="Masukan Nomor Indentitas (KTP/SIM)">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                           <input type="text"  name="nama_pelamar" required="required" class="form-control" placeholder="Masukan Nama Lengkap">
                                        </div>

                                         <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <div>

                                                <label class="radio-inline" for="checkout-payment-prepaid">
                                                    <input type="radio" required="required" id="checkout-payment-prepaid" name="jk" value="Laki-Laki"> Laki-Laki
                                                </label>
                                                <label class="radio-inline" for="checkout-payment-cash">
                                                    <input type="radio" required="required" id="checkout-payment-cash" name="jk" value="Perempuan"> Perempuan
                                                </label>
                                            </div>
                                       </div>


                                       <div class="form-group">
                                            <label>No. HP</label>
                                           <input type="tel" name="no_hp" maxlength="12" onkeypress="return isNumberKey(event)" onkeyup="this.value=this.value.replace(/[^\d]/,'')" required="required" class="form-control" placeholder="Masukan Nomor HP">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                           <input type="text"  name="alamat" required="required" class="form-control" placeholder="Masukan Alamat Lengkap">
                                        </div>


                                         <div class="form-group">

                                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;Simpan</button>

                                          </div>


                                    </div>
                                </div>
                            </div>
                            <!-- END Third Step -->
                        </form>
                    </div>
                </div>
            </section>
