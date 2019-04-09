        <!-- page content -->
        <div class="right_col" role="main" style="background-image:url(<?php echo base_url();?>style/images/bg-login.jpgl); background-size:cover;">
            <div class="row" >
              <div class="col-md-12 col-sm-12 col-xs-12" >
                <div class="x_panel" style="background-image:url(<?php echo base_url();?>style/images/beranda_line.jpg); border-radius:6px; background-size:cover; " >
                  <div class="x_content" >
                  <center>
                 <h3><font color="#ffffff">Electronik-Human Resource Management<b> <font color="#ff3833">PT. Andesta Mandiri Indonesia</font></b> </font> </h3>
                </center>




                  </div>
                </div>
              </div>
            </div>


                    <div class="clearfix"></div>



  <div class="row top_tiles" >

                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12" >
                <div class="tile-stats" style="box-shadow: 0 0 2px 0 #2a3f54;">
                  <div class="icon"><i class="fa fa-user"></i></div>
                  <div class="count">
                    <?php echo $jumlah_man_power->num_rows() ?>

                  </div>
                  <h3>Man Power Aktif</h3>
                  <p align="right">

                  <a href="<?php echo base_url(); ?>hrd/data_man_power/aktif" class="btn btn-default btn-sm">Lihat Selengkapnya <i class="fa fa-arrow-right"></i></a>

                  </p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12" >
              <div class="tile-stats" style="box-shadow: 0 0 2px 0 #2a3f54;">
                <div class="icon"><i class="fa fa-times-circle"></i></div>
                <div class="count">
                   <?php echo $limit_man_power->num_rows() ?>

                </div>
                <h3>Man Power Non Aktif</h3>
                <p align="right">

                <a href="<?php echo base_url(); ?>hrd/data_man_power/non_aktif" class="btn btn-default btn-sm">Lihat Selengkapnya <i class="fa fa-arrow-right"></i></a>

                </p>
              </div>
            </div>
                             <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12" >
                <div class="tile-stats" style="box-shadow: 0 0 2px 0 #2a3f54;">
                  <div class="icon"><i class="fa fa-map-marker"></i></div>
                  <div class="count">
                    <?php echo $jumlah_area_kerja->num_rows() ?>

                  </div>
                  <h3>Area Kerja</h3>
                  <p align="right">

                  <a href="<?php echo base_url(); ?>hrd/data_area_kerja" class="btn btn-default btn-sm">Lihat Selengkapnya <i class="fa fa-arrow-right"></i></a>

                  </p>
                </div>
              </div>
                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12" >
                <div class="tile-stats" style="box-shadow: 0 0 2px 0 #2a3f54;">
                  <div class="icon"><i class="fa fa-calendar"></i></div>
                  <div class="count">
                     <?php echo $jumlah_man_power->num_rows() ?>

                  </div>
                  <h3>Limit Kontrak</h3>
                  <p align="right">

                  <a href="<?php echo base_url(); ?>hrd/limit_kerja" class="btn btn-default btn-sm">Lihat Selengkapnya <i class="fa fa-arrow-right"></i></a>

                  </p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats" style="box-shadow: 0 0 2px 0 #2a3f54;">
                  <div class="icon"><i class="fa fa-edit"></i></div>
                  <div class="count">
                   <?php echo $lowongan_kerja->num_rows() ?>
                  </div>
                  <h3>Lowongan Kerja</h3>
                   <p align="right">

                   <a href="<?php echo base_url(); ?>hrd/data_lowongan_kerja" class="btn btn-default btn-sm">Lihat Selengkapnya <i class="fa fa-arrow-right"></i></a>

                  </p>
                </div>
              </div>

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats" style="box-shadow: 0 0 2px 0 #2a3f54;">
                  <div class="icon"><i class="fa fa-envelope"></i></div>
                  <div class="count">
                   <?php echo $lamaran_masuk->num_rows() ?>
                  </div>
                  <h3>Lamaran Masuk</h3>
                   <p align="right">

                    <a href="<?php echo base_url(); ?>hrd/data_lamaran_masuk" class="btn btn-default btn-sm">Lihat Selengkapnya <i class="fa fa-arrow-right"></i></a>

                  </p>
                </div>
              </div>
               <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats" style="box-shadow: 0 0 2px 0 #2a3f54;">
                  <div class="icon"><i class="fa fa-comment"></i></div>
                  <div class="count">
                    <?php echo $interview->num_rows() ?>
                  </div>
                  <h3>Interview</h3>
                   <p align="right">

                    <a href="<?php echo base_url(); ?>hrd/data_interview" class="btn btn-default btn-sm">Lihat Selengkapnya <i class="fa fa-arrow-right"></i></a>

                  </p>
                </div>
              </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats" style="box-shadow: 0 0 2px 0 #2a3f54;">
                  <div class="icon"><i class="fa fa-child"></i></div>
                  <div class="count">
                   <?php echo $training->num_rows() ?>
                  </div>
                  <h3>Training</h3>
                   <p align="right">

                    <a href="<?php echo base_url(); ?>hrd/data_training" class="btn btn-default btn-sm">Lihat Selengkapnya <i class="fa fa-arrow-right"></i></a>

                  </p>
                </div>
              </div>

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats" style="box-shadow: 0 0 2px 0 #2a3f54;">
                <div class="icon"><i class="fa fa-book"></i></div>
                <div class="count">
                 <?php echo $bpjs_ket->num_rows() ?>
                </div>
                <h3>BPJS Ket</h3>
                 <p align="right">

                  <a href="<?php echo base_url(); ?>hrd/data_jaminan" class="btn btn-default btn-sm">Lihat Selengkapnya <i class="fa fa-arrow-right"></i></a>

                </p>
              </div>
            </div>

            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats" style="box-shadow: 0 0 2px 0 #2a3f54;">
              <div class="icon"><i class="fa fa-child"></i></div>
              <div class="count">
               <?php echo $bpjs_kes->num_rows() ?>
              </div>
              <h3>BPJS Kes</h3>
               <p align="right">

                <a href="<?php echo base_url(); ?>hrd/data_jaminan/bpjs_kes" class="btn btn-default btn-sm">Lihat Selengkapnya <i class="fa fa-arrow-right"></i></a>

              </p>
            </div>
          </div>


            </div>


    </div>
   </div>
  </div>
