<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">

          <title>PT. Andesta Mandiri Indonesia</title>

        <link rel="icon" href="<?php echo base_url();?>style/images/logo-ami.png">

        <meta name="description" content="ProUI Frontend is a Responsive Bootstrap Site Template created by pixelcave and added as a bonus in ProUI Admin Template package which is published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered --> 
        <link rel="stylesheet" href="<?php echo base_url();?>style/frontend/css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="<?php echo base_url();?>style/frontend/css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="<?php echo base_url();?>style/frontend/css/main.css">

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="<?php echo base_url();?>style/frontend/css/themes.css">
        <!-- END Stylesheets -->
   <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
  <script src="http://demo.itsolutionstuff.com/plugin/croppie.js"></script>
  <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
  <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/croppie.css">
  


        <!-- Modernizr (browser feature detection library) -->
        <script src="<?php echo base_url();?>style/frontend/js/vendor/modernizr.min.js"></script>
    </head>

<style type="text/css">
.abc{
    background-color: red;
    width: 100%;
    height: 40px;

}
</style>
    <body>
        <!-- Page Container -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!-- 'boxed' class for a boxed layout -->
        <div id="page-container" >
            <!-- Site Header -->
            <header>
       
                <div class="container" >
                    <!-- Site Logo -->
                    <a href="<?php echo base_url();?>beranda" class="site-logo">

                        <img src="<?php echo base_url();?>style/images/logo-awal.png">
                    </a>
                    <!-- Site Logo -->

                    <!-- Site Navigation -->
                    <nav>
                        <!-- Menu Toggle -->
                        <!-- Toggles menu on small screens -->
                        <a href="javascript:void(0)" class="btn btn-default site-menu-toggle visible-xs visible-sm">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- END Menu Toggle -->

                        <!-- Main Menu -->
                        <ul class="site-nav">
                            <!-- Toggles menu on small screens -->
                            <li class="visible-xs visible-sm">
                                <a href="javascript:void(0)" class="site-menu-toggle text-center">
                                    <i class="fa fa-times"></i>
                                </a>
                            </li>
                            <!-- END Menu Toggle -->
                           
                               <li>
                                        <a href="<?php echo base_url();?>beranda">Beranda</a>
                                    </li>
                           

                            <li>
                                <a href="<?php echo base_url(); ?>profil">Profil</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>kontak">Contact Us</a>
                            </li>
                          
                            <li>
                                <a href="<?php echo base_url(); ?>info_lowongan">Info Lowongan</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>daftar" class="btn btn-primary"> <i class="fa fa-list-alt"></i>&nbsp;Daftar</a>
                            </li>
                      
                            
                              <li>
                                <a href="<?php echo base_url(); ?>masuk" class="btn btn-primary"><i class="fa fa-user"></i>&nbsp;Masuk</a>
                            </li>
                            
                        </ul>
                        <!-- END Main Menu -->
                    </nav>
                    <!-- END Site Navigation -->
                </div>
            </header>
            <!-- END Site Header -->

          <?php echo $this->load->view($content);?>  

            <!-- Footer -->
            <footer class="site-footer site-section">
                <div class="container">
                    <!-- Footer Links -->
                    <div class="row">
                        <center>
                        &copy  2018 - Electronik-Human Resource Management - PT. Andesta Mandiri Indonesia
                        </center>
                    </div>
                    <!-- END Footer Links -->
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-up"></i></a>


        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="<?php echo base_url();?>style/frontend/js/vendor/jquery.min.js"></script>
        <script src="<?php echo base_url();?>style/frontend/js/vendor/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>style/frontend/js/plugins.js"></script>
        <script src="<?php echo base_url();?>style/frontend/js/app.js"></script>



    </body>
</html>