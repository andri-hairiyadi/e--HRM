
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

              <div class="animated flipInY col-lg-6 col-md-3 col-sm-6 col-xs-12" >
                <div class="tile-stats" style="box-shadow: 0 0 2px 0 #2a3f54;">
                  <div class="icon"><i class="fa fa-user"></i></div>
                  <div class="count">
                    <?php echo $jumlah_man_power->num_rows() ?>

                  </div>
                  <h3>Man Power</h3>
                  <p align="right">

                  <a href="<?php echo base_url(); ?>area/data_man_power" class="btn btn-default btn-sm">Lihat Selengkapnya <i class="fa fa-arrow-right"></i></a>

                  </p>
                </div>
              </div>
               <div class="animated flipInY col-lg-6 col-md-3 col-sm-6 col-xs-12" >
                <div class="tile-stats" style="box-shadow: 0 0 2px 0 #2a3f54;">
                  <div class="icon"><i class="fa fa-user"></i></div>
                  <div class="count">
                    <?php echo $jumlah_training->num_rows() ?>

                  </div>
                  <h3>Data Training</h3>
                  <p align="right">

                  <a href="<?php echo base_url(); ?>area/data_training" class="btn btn-default btn-sm">Lihat Selengkapnya <i class="fa fa-arrow-right"></i></a>

                  </p>
                </div>
              </div>


            </div>

            <?php echo $map['html'];?>

    </div>
   </div>
  </div>
