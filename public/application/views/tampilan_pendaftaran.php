<script>
function readURL01(input) { // Mulai membaca inputan gambar
if (input.files && input.files[0]) {
var reader = new FileReader(); // Membuat variabel reader untuk API FileReader

reader.onload = function (e) { // Mulai pembacaan file
$('#preview1') // Tampilkan gambar yang dibaca ke area id #preview_gambar
.attr('src', e.target.result)
.width(262); // Menentukan lebar gambar preview (dalam pixel)
//.height(200); // Jika ingin menentukan lebar gambar silahkan aktifkan perintah pada baris ini
};


reader.readAsDataURL(input.files[0]);
}
}

</script>

<script>
function readURL02(input) { // Mulai membaca inputan gambar
if (input.files && input.files[0]) {
var reader = new FileReader(); // Membuat variabel reader untuk API FileReader

reader.onload = function (e) { // Mulai pembacaan file
$('#preview2') // Tampilkan gambar yang dibaca ke area id #preview_gambar
.attr('src', e.target.result)
.width(362); // Menentukan lebar gambar preview (dalam pixel)
//.height(200); // Jika ingin menentukan lebar gambar silahkan aktifkan perintah pada baris ini
};


reader.readAsDataURL(input.files[0]);
}
}

</script>

<script>
function readURL03(input) { // Mulai membaca inputan gambar
if (input.files && input.files[0]) {
var reader = new FileReader(); // Membuat variabel reader untuk API FileReader

reader.onload = function (e) { // Mulai pembacaan file
$('#preview3') // Tampilkan gambar yang dibaca ke area id #preview_gambar
.attr('src', e.target.result)
.width(300); // Menentukan lebar gambar preview (dalam pixel)
//.height(400); // Jika ingin menentukan lebar gambar silahkan aktifkan perintah pada baris ini
};


reader.readAsDataURL(input.files[0]);
}
}

</script>

<script>
function readURL04(input) { // Mulai membaca inputan gambar
if (input.files && input.files[0]) {
var reader = new FileReader(); // Membuat variabel reader untuk API FileReader

reader.onload = function (e) { // Mulai pembacaan file
$('#preview4') // Tampilkan gambar yang dibaca ke area id #preview_gambar
.attr('src', e.target.result)
.width(262); // Menentukan lebar gambar preview (dalam pixel)
//.height(200); // Jika ingin menentukan lebar gambar silahkan aktifkan perintah pada baris ini
};


reader.readAsDataURL(input.files[0]);
}
}

</script>


<script>
function readURL05(input) { // Mulai membaca inputan gambar
if (input.files && input.files[0]) {
var reader = new FileReader(); // Membuat variabel reader untuk API FileReader

reader.onload = function (e) { // Mulai pembacaan file
$('#preview5') // Tampilkan gambar yang dibaca ke area id #preview_gambar
.attr('src', e.target.result)
.width(262); // Menentukan lebar gambar preview (dalam pixel)
//.height(200); // Jika ingin menentukan lebar gambar silahkan aktifkan perintah pada baris ini
};


reader.readAsDataURL(input.files[0]);
}
}

</script>



            <!-- Intro -->
       <section class="site-section site-section-light site-section-top themed-background-dark" style="background-image:url(<?php echo base_url();?>style/images/bg-awal.jpg)">
                      <div class="container text-center">
                    <h1 class="animation-slideDown"><strong><font color="#364387"><i class="fa fa-check-square-o"></i> Pendaftaran</font></strong></h1>
                </div>
            </section>
            <!-- END Intro -->
 <!-- Step 1 Header -->
     <?php
        foreach($isi as $data){
        ?> 

   <form id="checkout-wizard" enctype="multipart/form-data" method="post"action="<?php echo base_url();?>pendaftaran/simpan">

            <section class="site-content site-section site-section-light" style="background-color:#364387;">
                <div class="container">
                    <div class="site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                        <h1 class="site-heading"><i class="fa fa-list"></i> <strong>Data Diri</strong></h1>
                    </div>
                </div>
            </section>
            <!-- END Step 1 Header -->

            <!-- Step 1 -->
            <section class="site-content site-section site-slide-content">
                <div class="container">
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label for="checkout-username">Nomor Identitas (KTP)</label>
                                            <input type="text" name="nomor_ktp" class="form-control" value="<?php echo $data->nomor_ktp;?>"  maxlength="16" onkeypress="return isNumberKey(event)" onkeyup="this.value=this.value.replace(/[^\d]/,'')"  placeholder="Masukan Nama Lengkap">
                                            <input type="hidden" name="id_pelamar" class="form-control" value="<?php echo $data->id_pelamar;?>" >
                                        </div>
                                          <div class="form-group">
                                            <label for="checkout-username">Nama Lengkap</label>
                                            <input type="text" name="nama_pelamar" class="form-control" value="<?php echo $data->nama_pelamar;?>" placeholder="Masukan Nama Lengkap">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                              <div>
                                                <label class="radio-inline" for="checkout-payment-prepaid">
                                                 <input type="radio" required="required" name="jenis_kelamin"<?php if($data->jenis_kelamin == 'Laki-Laki' ) { echo 'checked'; } ?> value="Laki-Laki"> Laki-Laki
                                                </label>
                                                <label class="radio-inline" for="checkout-payment-cash">
                                                    <input type="radio" required="required" name="jenis_kelamin"<?php if($data->jenis_kelamin == 'Perempuan' ) { echo 'checked'; } ?> value="Perempuan"> Perempuan
                                                </label>
                                            </div>
                                        </div>
                                          <div class="form-group">
                                            <label>No. Hp</label>
                                            <input type="text" name="no_hp" autocomplete="off" value="<?php echo $data->no_hp;?>" maxlength="12" onkeypress="return isNumberKey(event)" onkeyup="this.value=this.value.replace(/[^\d]/,'')" class="form-control" required="required" value="" placeholder="Masukan Nomor HP">
                                        </div>


                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" autocomplete="off" class="form-control" required="required"placeholder="Masukan Tempat Lahir">
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" name="tanggal_lahir"autocomplete="off" class="form-control" required="required" placeholder="Masukan Tanggal Lahir">

                                        </div>


                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Agama</label>
                                             <select class="form-control" name="agama" >
                                                <option value="">--pilih agama --</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Kunghucu">Kunghucu</option>
                                            </select>
                                            </div>


                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text"  name="alamat" autocomplete="off" class="form-control" required="required" placeholder="Masukan Alamat Lengkap">
                                        </div>
                                        <div class="form-group">
                                            <label>RT</label>
                                            <input type="text"  name="rt" maxlength="10" onkeypress="return isNumberKey(event)" onkeyup="this.value=this.value.replace(/[^\d]/,'')"autocomplete="off" class="form-control" required="required" placeholder="Masukan Nama RT">

                                        </div>
                                         <div class="form-group">
                                            <label>RW</label>
                                            <input type="text"  name="rw" maxlength="10" onkeypress="return isNumberKey(event)" onkeyup="this.value=this.value.replace(/[^\d]/,'')"autocomplete="off" class="form-control" required="required" placeholder="Masukan Nama RW">

                                        </div>
                                         <div class="form-group">
                                            <label>Kelurahan</label>
                                            <input type="text"  name="kelurahan" autocomplete="off" class="form-control" required="required" placeholder="Masukan Nama Kelurahan">

                                        </div>
                                        <div class="form-group">
                                            <label>Hobi</label>
                                            <input type="text"  name="hobi"autocomplete="off" class="form-control" required="required" placeholder="Masukan Hobi">

                                        </div>


                                    </div>

                </div>
                <br>
            </section>
            <!-- END Step 1 -->

             <!-- END Step 2 Header -->
             <section class="site-content site-section site-section-light" style="background-color:#364387;">
                <div class="container">
                    <div class="site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                        <h1 class="site-heading"><i class="fa fa-graduation-cap"></i> <strong>Data Pendidikan</strong></h1>
                    </div>
                </div>
            </section>
            <!-- END Step 1 Header -->

        <section class="site-content site-section site-slide-content">
                <div class="container">
                                   <div class="row">
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label>Pendidikan Terakhir</label>
                                            <select class="form-control" name="pendidikan_terakhir" >
                                                <option value="">--Pilih Pendidikan --</option>
                                                <option value="Tidak Sekolah">Tidak Sekolah</option>
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP</option>
                                                <option value="SMA">SMA</option>
                                                <option value="S1">S1</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Sekolah / Perguruan Tinggi</label>
                                            <input type="text" autocomplete="off" name="nama_sekolah" class="form-control" required="required" placeholder="Masukan Nama Sekolah">
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun Lulus</label>
                                            <input type="text" autocomplete="off" name="tahun_lulus" maxlength="4" onkeypress="return isNumberKey(event)" onkeyup="this.value=this.value.replace(/[^\d]/,'')"class="form-control" required="required" placeholder="Masukan Tahun Lulus">
                                        </div>

                                    </div>
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label>Nomor Ijazah</label>
                                            <input type="text" autocomplete="off"  name="nomor_ijazah" class="form-control" placeholder="Masukan Nomor Ijazah">
                                        </div>
                                         <div class="form-group">
                                            <label>Pendidikan Informal</label>
                                            <input type="text" autocomplete="off" name="informal" class="form-control" placeholder="Masukan Pendidikan Informal">
                                        </div>
                                        <div class="form-group">
                                            <label>Skill dan Keahlian</label>
                                            <input type="text" autocomplete="off" name="skill" class="form-control" placeholder="Masukan Skill dan Keahlian">
                                        </div>



                                    </div>
                                </div>

                </div>
                <br>
            </section>


             <section class="site-content site-section site-section-light" style="background-color:#364387;">
                <div class="container">
                    <div class="site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                        <h1 class="site-heading"><i class="fa fa-medkit"></i> <strong>Data Kesehatan</strong></h1>
                    </div>
                </div>
            </section>


      <section class="site-content site-section site-slide-content">
                <div class="container">
                                   <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Golongan Darah</label>
                                             <select class="form-control" name="golongan_darah" >
                                                <option value="">--Masukan Golongan Darah --</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="AB">AB</option>
                                                <option value="O">O</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tinggi Badan</label>
                                            <input type="text" autocomplete="off" name="tinggi_badan" maxlength="3" onkeypress="return isNumberKey(event)" onkeyup="this.value=this.value.replace(/[^\d]/,'')" class="form-control" placeholder="Masukan Tinggi Badan">
                                        </div>

                                    </div>
                                    <div class="col-sm-6">


                                        <div class="form-group">
                                            <label>Berat Badan</label>
                                            <input type="text" autocomplete="off" name="berat_badan" maxlength="2" onkeypress="return isNumberKey(event)" onkeyup="this.value=this.value.replace(/[^\d]/,'')" class="form-control" placeholder="Masukan Berat Badan">
                                        </div>
                                        <div class="form-group">
                                            <label>Penyakit Yang Pernah Diderita</label>
                                            <input type="text" autocomplete="off" name="penyakit" class="form-control" placeholder="Masukan Nama Penyakit">
                                        </div>


                                    </div>
                                </div>

                </div>
                <br>
            </section>


      <section class="site-content site-section site-section-light" style="background-color:#364387;">
                <div class="container">
                    <div class="site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                        <h1 class="site-heading"><i class="fa fa-child"></i> <strong>Data Pengalaman Kerja</strong></h1>
                    </div>
                </div>
            </section>

      <section class="site-content site-section site-slide-content">
                <div class="container">
                         <div class="row">
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label>Nama Perusahaan</label>
                                            <input type="text" autocomplete="off" name="nama_perusahaan" class="form-control" placeholder="Masukan Nama Perusahaan">
                                        </div>
                                        <div class="form-group">
                                            <label>Masa Kerja</label>
                                            <input type="text" autocomplete="off" name="masa_kerja" maxlength="4" onkeypress="return isNumberKey(event)" onkeyup="this.value=this.value.replace(/[^\d]/,'')"class="form-control" placeholder="Masukan Masa Kerja">
                                        </div>

                                    </div>
                                    <div class="col-sm-6">


                                        <div class="form-group">
                                            <label>Jabatan</label>
                                            <input type="text" autocomplete="off" name="jabatan" class="form-control" placeholder="Masukan Nama Jabatan">
                                        </div>
                                         <div class="form-group">
                                            <label>Alasan Keluar</label>
                                            <input type="text" autocomplete="off" name="alasan_keluar" class="form-control" placeholder="Masukan Alasan Keluar">
                                        </div>



                                    </div>
                                </div>
                </div>
                <br>
            </section>


      <section class="site-content site-section site-section-light"  style="background-color:#364387;">
                <div class="container">
                    <div class="site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                        <h1 class="site-heading"><i class="fa fa-user"></i> <strong>Informasi Konpensasi dan Benefit</strong></h1>
                    </div>
                </div>
            </section>


  <section class="site-content site-section site-slide-content">
                <div class="container">
                                   <div class="row">
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label>Nomor BPJS</label>
                                            <input type="text" autocomplete="off" name="no_bpjs" maxlength="13" onkeypress="return isNumberKey(event)" onkeyup="this.value=this.value.replace(/[^\d]/,'')" class="form-control" placeholder="Masukan Nomor BPJS">
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Rekening</label>
                                            <input type="text" autocomplete="off" name="no_rekening" maxlength="15" onkeypress="return isNumberKey(event)" onkeyup="this.value=this.value.replace(/[^\d]/,'')" class="form-control" placeholder="Masukan Nomor Rekening">
                                        </div>


                                    </div>
                                    <div class="col-sm-6">
                                          <div class="form-group">
                                            <label>Nama Bank</label>
                                            <input type="text" autocomplete="off" name="nama_bank" class="form-control" placeholder="Masukan Nama Bank">
                                        </div>
                                        <div class="form-group">
                                            <label>Gaji yang diinginkan</label>
                                             <select class="form-control" name="gaji" >
                                                <option value="">--Pilih Gaji yang diinginkan --</option>
                                                <option value="Rp. 1.000.000 s/d Rp. 1.500.000">Rp. 1.000.000 s/d Rp. 1.500.000</option>
                                                <option value="Rp. 1.500.000 s/d Rp. 2.500.000">Rp. 1.500.000 s/d Rp. 2.500.000</option>
                                                <option value="Rp. 2.500.000 s/d Rp. 3.500.000">Rp. 2.500.000 s/d Rp. 3.500.000</option>
                                                <option value="Rp. 3.500.000 s/d Rp. 5.000.000">Rp. 3.500.000 s/d Rp. 5.000.000</option>
                                                <option value="Di atas Rp. 5.000.000">Di atas Rp. 5.000.000</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                </div>
                <br>
            </section>

  <section class="site-content site-section site-section-light"  style="background-color:#364387;">
                <div class="container">
                    <div class="site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                        <h1 class="site-heading"><i class="fa fa-file-image-o"></i> <strong>Data Lampiran</strong></h1>
                    </div>
                </div>
            </section>

      <section class="site-content site-section site-slide-content">

                <div class="container">
                    <div class="col-sm-6">
                                  <div class="form-group">
                                            <label>Poto 3 x 4 <i>(*Format JPG)</i></label>
                                            <input type="file" name="filename1" required="required" class="form-control" onchange="readURL03(this);">
                                        <center>

                                            <img src="<?php echo base_url();?>style/images/gambar_kosong.jpg" id="preview3" alt="Preview Image" style="width: 300px; height: 400px; " />
                                        </center> 
                                        </div>
                                    </div>


                                    <div class="col-sm-6">
                                    <div class="form-group">
                                            <label>KTP/SIM <i>(*File Format PDF)</i></label>
                                             <input type="file" name="filename2" class="form-control" onchange="readURL02(this);">

                                        </div>
                                        <div class="form-group">
                                            <label>Kartu Keluarga (KK) <i>(*File Format PDF)</i></label>
                                            <input type="file" name="filename3" class="form-control" onchange="readURL04(this);">

                                        </div>
                                        <div class="form-group">
                                            <label>Ijazah Terakhir <i>(*File Format PDF)</i></label>

                                             <input type="file" name="filename4" class="form-control" onchange="readURL05(this);">

                                        </div>

                                    </div>
                                </div>

                </div>
                <br>
            </section>

    
  <section class="site-content site-section site-section-light" style="background-color:#eaeaea;">
                <div class="container">
              <input type="checkbox" required="required"> <font color="black"><b>*Apakah Anda Yakin Data Tersebut Benar ?,  Jika Sudah Benar Tekan Tombol Simpan Untuk Melanjutkan Pendaftaran. </b></font> <br><br>
                    <div class="site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">

                    <button type="submit" class="btn btn-primary upload-result"><i class="fa fa-save"></i>&nbsp;Simpan</button>

                   </div>
                </div>
            </section>




                        </form>
                        <!-- END Checkout Wizard Content -->
    <?php } ?>
