<style type="text/css">
 table{
  border-collapse:collapse;
  background:#ffffff;}


th, td{border:1px solid #999; color: black;}
th{padding:6px 0;background: #f0f0f0; text-align: center;}
td{padding:4px 8px; color:black; font-size: 13px;}

</style>

           <section class="site-section site-section-light site-section-top" style="background-image:url(<?php echo base_url();?>style/images/bg-awal.jpg); border-radius:6px; background-size:cover; ">
                    <div class="container">
                    <font color="#2d3b82">
                        <h1 class="text-center animation-slideDown"><strong>OPEN RECUITMENT</strong></h1>
                    </font>
                    <font color="#e5322e">
                     <h1 class="text-center animation-slideDown"><strong>PT. ANDESTA MANDIRI INDONESIA</strong></h1>
                        </font>
                        <font color="#000000">
                        <h4 class="text-center animation-slideDown">Dibutuhkan Tenaga Ahli Profesinal, Pekerja Keras disiplin dan Bertanggung jawab</h4>
                        </font>

                    </div>
                </section>

<!-- Product View -->

            <section class="site-content site-section">
                <div class="container">
                    <div class="row">
                        <!-- Sidebar -->
                        <div class="col-md-4 col-lg-3">
                            <aside class="sidebar site-block">

                                <!-- Store Menu functionality is initialized in js/app.js -->
                                <a href="<?php echo base_url()?>info_lowongan/cek_data_pendaftaran" class="btn btn-success btn-block" style="background-color:#2d3b82;">Cek Data Pedaftaran</a>
                                <div class="btn btn-success btn-block" style="background-color:#252525;" id="clock">Lowongan</div>
                                <div class="sidebar-block">

                                    <ul class="store-menu">
                                     <?php
                            $no = 1;
                            foreach ($lowongan->result() as $row) {
                            ?>


        <li><a href="<?php echo base_url()?>info_lowongan/pilih/<?php echo $row->id_lowongan; ?>"><i class="fa fa-check-square-o"></i> <?php echo $row->nama_lowongan; ?></a></li>

                            <?php } ?>
                                  </ul>


                                </div>

                            </aside>
                        </div>

                        <!-- END Sidebar -->

                        <!-- Product Details -->
                        <div class="col-md-6 col-lg-9">

                            <?php
                            if ($isi->result()) {

                            $no = 1;
                            foreach ($isi->result() as $row) {
                            ?>


                            <div class="row" data-toggle="lightbox-gallery">
                                <!-- Images -->
                                <div class="col-sm-6 push-bit">

                                <?php
                                    $tgl_now = date("Y-m-d");
                                    $tgl = $row->tanggal_akhir;
                                    if ($tgl > $tgl_now) {
                                ?>

                                        <?php
                                            $tgl_now = date("Y-m-d");
                                            $tgl = $row->tanggal_akhir;
                                            if ($tgl > $tgl_now) {
                                                echo "<div class='label label-success'>Pendaftaran di Buka</div>";
                                            }
                                            else{
                                               echo "<div class='label label-danger'>Pendaftaran di Tutup</div>";
                                            }
                                        ?>

                                    <p><b><i class="fa fa-calendar"></i> Batas Pendaftaran : <br><font color="#2d3b82"><i><?php echo tgl_indo($row->tanggal_awal);?></font> s/d <font color="#2d3b82"><?php echo tgl_indo($row->tanggal_akhir);?></i></font></b></p>
                           <?php
                                } else { echo "";}
                                    ?>
                                    <img src="<?php echo base_url();?>style/images/lowongan/<?php echo $row->gambar;?>" alt="" class="img-responsive push-bit">

                                       <?php
                                    $tgl_now = date("Y-m-d");
                                    $tgl = $row->tanggal_akhir;
                                    if ($tgl > $tgl_now) {
                                ?>
                                <?php echo "";?>

                                  <?php
                                } else { ?>

 <?php
                                            $tgl_now = date("Y-m-d");
                                            $tgl = $row->tanggal_akhir;
                                            if ($tgl > $tgl_now) {
                                                echo "<div class='label label-success'>Pendaftaran di Buka</div>";
                                            }
                                            else{
                                               echo "<div class='label label-danger'>Pendaftaran di Tutup</div>";
                                            }
                                        ?>

                                    <p><b><i class="fa fa-calendar"></i> Batas Pendaftaran : <br><font color="#2d3b82"><i><?php echo tgl_indo($row->tanggal_awal);?></font> s/d <font color="#2d3b82"><?php echo tgl_indo($row->tanggal_akhir);?></i></font></b></p>


                                <?php } ?>



                                        <?php
                                            $tgl_now = date("Y-m-d");
                                            $tgl = $row->tanggal_akhir;

                                             $nilai = ($tgl > $tgl_now) ? '&nbsp' : 'hidden' ;
                                             $disable = $nilai;
                                          ?>

                                    <a href="<?php echo base_url();?>info_lowongan/daftar/<?php echo $row->id_lowongan;?>" class="btn btn-lg btn-primary btn-block <?php echo $disable;?>"><i class="fa fa-sign-in"></i> Daftar</a>

                                </div>
                                <!-- END Images -->

                                <!-- Info -->
                                <div class="col-sm-6 push-bit">
                                    <div class="clearfix">
                                        <span class="h4"><strong><font color="#2d3b82"><?php echo $row->nama_lowongan;?></font></strong></span>
                                    </div>

                                  <br>
                                    <p align="justify">Dibutuhkan Tenaga Profesional <b><i><?php echo $row->nama_lowongan;?></i></b> di PT. Andesta Mandiri Indonesia. Berikut merupakan deskripsi pekerjaan dan persyaratan Sebagai berikut :</p>

                                    <p><b>Deskripsi Pekerjaan : </b></p>
                                    <p align="justify">
                                    <ul>
                                     <?php
                            $no = 1;
                            foreach ($deskripsi->result() as $row) {
                            ?>
                                        <li><?php echo $row->deskripsi; ?></li>

                            <?php } ?>

                                        </ul>
                                    </p>

                                </div>
                                <!-- END Info -->
                                  <!-- More Info Tabs -->
                                <div class="col-xs-12 site-block">

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="product-specs">
                                    <table width="100%" style="border-collapse:collapse;"border="1">
                                        <tr bgcolor="#252525">

                                                <td width="20px"><font color="white">No.</font></td>
                                                <td align="center"><font color="white">Persyaratan</font></td>

                                        </tr>
                                         <?php
                            $no = 1;
                            foreach ($persyaratan->result() as $row) {
                            ?>
                                        <tr>
                                            <td><?php echo $no++; ?>.</td>
                                            <td><?php echo $row->persyaratan; ?></td>
                                        </tr>

                            <?php } ?>



                                    </table>

                                        </div>

                                    </div>
                                </div>
                                <!-- END More Info Tabs -->

                            </div>


 <?php } } else{echo "<font color='red'><b>Belum Ada History Pembayaran</b></font>"; } ?>


                        </div>
                        <!-- END Product Details -->
                    </div>
                </div>
            </section>
            <!-- END Product View -->
