<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

           <title>PT. Andesta Mandiri Indonesia</title>

        <link rel="icon" href="<?php echo base_url();?>style/images/logo-ami.png">
<link rel="stylesheet" href="<?php echo base_url();?>style/alert/css/sweetalert.css"> 
    <link href="<?php echo base_url();?>style/vendors/select2/dist/css/select2.min.css" rel="stylesheet">

    <link href="<?php echo base_url();?>style/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Bootstrap -->
     <link href="<?php echo base_url();?>style/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->

   <link href="<?php echo base_url()?>style/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

    <link href="<?php echo base_url();?>style/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>style/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
   <!-- jQuery custom content scroller -->
    <link href="<?php echo base_url();?>style/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url();?>style/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url();?>style/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
<!-- Datatables -->
    <link href="<?php echo base_url();?>style/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url();?>style/vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="<?php echo base_url();?>style/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="<?php echo base_url();?>style/vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

       <!-- bootstrap-wysiwyg -->
    <link href="<?php echo base_url();?>style/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>style/build/css/custom.min.css" rel="stylesheet">
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script> 

 <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />  

 <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>

  </head>

  <body class="nav-md">

    <div class="container body">
      <div class="main_container">
        
<?php echo $this->load->view('area/tampilan_menu');?>
        <!-- top navigation -->
        <div class="top_nav " >
          <div class="nav_menu">
            <nav>
             <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

            <!--    <img src="<?php //echo base_url(); ?>style/images/logo_sigap.jpg">
             -->

              <ul class="nav navbar-nav navbar-right">
               <!--    <li role="presentation" class="dropdown">
                  
                    <img src="<?php echo base_url(); ?>style/images/atas.jpg">
             
                </li> -->

           <li class="">
       
<?php
    foreach ($data->result() as $row) {
    ?>
       
          
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url();?>style/images/user/<?php echo $row->photo; ?>" alt=""><?php echo $row->nama_area; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
         <?php
       }
         ?>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
  
              
                    <li>
                      <a href="<?php echo base_url();?>area/setting">
                        <span class="badge bg-red pull-right">ubah Password</span>
                        <span>Pengaturan</span>
                      </a>
                    </li>
                    <li><a href="#" data-toggle="modal" data-target="#keluar"><i class="fa fa-power-off pull-right"></i> Keluar</a></li>
                  </ul>
                </li>           
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->


        <?php echo $this->load->view($content);?>
        <!-- /page content -->

        <!-- footer content -->
         <footer>
          <div class="pull-right">
             © 2018 - Electronik-Human Resource Management - PT. Andesta Mandiri Indonesia
          </div>
          <div class="clearfix"></div>
        </footer>

        <!-- /footer content -->
      </div>
    </div>


 <?php echo $map['js']; ?>
<?php echo $this->load->view('tampilan_home_JS-1');?>
<?php echo $this->load->view('tampilan_home_JS-2');?>
 
  </body>
</html>