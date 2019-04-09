<style type="text/css">
 table{
  border-collapse:collapse;
  background:#ffffff;}


th, td{border:1px solid #999; color: black;}
th{padding:6px 0;background: #f0f0f0; text-align: center;}
td{padding:4px 8px; color:black; font-size: 16px;}

</style>

           <section class="site-section site-section-light site-section-top" style="background-image:url(<?php echo base_url();?>style/images/bg-awal.jpg)">
                    <div class="container">
                    <font color="#2d3b82">
                        <h1 class="text-center animation-slideDown"><i class="fa fa-check"></i> <strong>Register Selesai</strong></h1>
                        <h1 class="text-center animation-slideDown"></i> <strong>SILAHKAN LANJUTKAN KE MENU DAFTAR</strong></h1>

                    </font>
                    </div>
                </section>

     <!-- Company Info -->
            <section class="site-content site-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="site-block">
         <?php
        foreach($isi as $data){
        ?>

                            <table width="100%">
                                <tr>
                                    <td colspan="2" style="background-color:#2d3b82; color:white;"><center><b><h4>KARTU AKTIVASI PENDAFTARAN PT. ANDESTA MANDIRI INDONESIA</h3></b></center></td>
                                </tr>
                                <tr>
                                    <td width="20%">
                                        <p class="text-center">
                                    <img src="<?php echo base_url();?>style/images/logo-ami.png" width="220px" alt="Avatar">
                                </p>
                                    </td>
                                    <td>
                                         <table width="100%">

                                    <tr>

                                        <td width="29%">Kode Aktivasi</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<b><?php echo $data->kode_aktivasi;?></b></td>
                                    </tr>
                                     <tr>

                                        <td width="29%">Posisi</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<b><?php echo $data->posisi;?></b></td>
                                    </tr>
                                     <tr>

                                        <td width="29%">Nama Lengkap</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->nama_pelamar;?></td>
                                    </tr>
                                    <tr>

                                        <td width="29%">No. Hp</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->no_hp;?></td>
                                    </tr>
                                    <tr>

                                        <td width="29%">Waktu Daftar</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo tgl_indo($data->tanggal_daftar);?>,  <?php echo $data->jam_daftar;?></td>
                                    </tr>

                                </table>

                                <br>
                                <a href="<?php echo base_url(); ?>register/cetak/<?php echo $data->id_pelamar;?>" target="_blank"class="btn btn-primary"><i class="fa fa-print"></i>&nbsp;Cetak Kartu</a>
                                  <table width="100%">
                                    <tr>

                                        <td width="29%">Keterangan</td>
                                        <td width="1%">:</td>
                                        <td width="70%">
                                            <ol>
                                                <li> Pendaftaran di halaman <a href="<?php echo base_url();?>daftar">daftar</a></li>
                                                <li>Saat berada di halaman pendaftaran, masukan kode aktivasi yang tertera pada kartu ini</li>
                                                <li>Kartu aktivasi hanya di gunakan untuk satu kali pendaftaran saja</li>
                                            </ol>
                                        </td>
                                    </tr>
                                  </table>
                                   </td>
                                </tr>

                            </table>
 <?php
        }
   ?>
                            </div>

                        </div>


                    </div>
                </div>
            </section>
            <!-- END Company Info -->
