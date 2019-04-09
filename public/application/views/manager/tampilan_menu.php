    <div id="keluar"  class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
      <div class="modal-dialog">
        <div class="modal-content" style="background-image:url(<?php echo base_url();?>style/images/pop_up.jpg)" >

          <div class="modal-header">

          </div>
        <div class="modal-body" >
          <center><h4 class="modal-title" id="myModalLabel"> <font color="#2a3f54"><b>Apakah anda yakin ingin keluar dari sistem?</b></font></h4></center>
         </div>

        <!-- /page content -->

          <div class="modal-footer" >
               <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Batal</button>
            <a href="<?php echo base_url();?>manager/beranda/logout" class="btn btn-danger antosubmit"><i class="fa fa-power-off"></i>&nbsp;Iya</a>


          </div>
        </div>
      </div>
    </div>



<div class="col-md-3 left_col menu_fixed" >
          <div class="left_col scroll-view" >
         <div class="navbar nav_title" style="border: 0;">

              <img src="<?php echo base_url(); ?>style/images/logo.jpg" width="100%">

            </div>
            <div class="clearfix"></div>
                     <div class="btn btn-primary btn-block" id="clock">&nbsp;
                      <script>
          function showTime() {
            var a_p = "";
            var today = new Date();
            var curr_hour = today.getHours();
            var curr_minute = today.getMinutes();
            var curr_second = today.getSeconds();
            if (curr_hour < 12) {
              a_p = "AM";
            } else {
              a_p = "PM";
            }
            if (curr_hour == 0) {
              curr_hour = 12;
            }
            if (curr_hour > 12) {
              curr_hour = curr_hour - 12;
            }
            curr_hour = checkTime(curr_hour);
            curr_minute = checkTime(curr_minute);
            curr_second = checkTime(curr_second);
           document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
            }

          function checkTime(i) {
            if (i < 10) {
              i = "0" + i;
            }
            return i;
          }
          setInterval(showTime, 500);
        </script>

             </div>
<?php
    foreach ($data->result() as $row) {
    ?>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">

             <img src="<?php echo base_url();?>style/images/user/<?php echo $row->photo; ?>"alt="..." class="img-circle profile_img">

              </div>
              <div class="profile_info">
                <span>Selamat Datang, </span>
                <h2><?php echo $row->nama_user; ?></h2>
              </div>
            </div>

<?php }?>
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3></h3>

                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url();?>manager/beranda"><i class="fa fa-home"></i>Beranda</a>

                  </li>
  <li><a href="<?php echo base_url();?>manager/persebaran_area"><i class="fa fa-map-marker"></i>Persebaran Area</a></li>


                  </li>
                  <li><a href="<?php echo base_url();?>manager/laporan_data_man_power"><i class="fa fa-user"></i>Laporan Data Man Power</a>

                  </li>
                    <li><a href="<?php echo base_url();?>manager/laporan_area_kerja"><i class="fa fa-bank"></i>Laporan Area Kerja</a>

                  </li>


                  <li><a href="<?php echo base_url();?>manager/kontrak_kerja"><i class="fa fa-briefcase"></i>Laporan Kontrak Kerja</a></li>
                   

                  <li><a href="#" data-toggle="modal" data-target="#keluar"><i class="fa fa-power-off"></i>Keluar</a></li>


                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->

            <!-- /menu footer buttons -->
          </div>
        </div>
