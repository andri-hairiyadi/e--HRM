<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
         <title>PT. Andesta Mandiri Indonesia</title>

        <link rel="icon" href="<?php echo base_url();?>style/images/logo-ami.png">
<link rel="stylesheet" href="<?php echo base_url();?>style/build/css/reset-login.css">
  <link rel="stylesheet" href="<?php echo base_url();?>style/build/css/login.css">
  <link rel="stylesheet" href="<?php echo base_url();?>style/build/css/login_style.css">

 
 
    
  </head>
<style type="text/css">
.kembali a{
  color: black;
  font-size: 14px;
}

.kembali a:hover{
  text-decoration: none; 
  color: #374487;
}

</style>
  <body> 

<div class="batas">

</div>


<div class="form-header"> 
  <div class="judul">
    <b>Electronik-Human Resource Management</b>
  </div>
</div>

<div class="form">
  <div class="thumbnail">
<img src="<?php echo base_url();?>style/images/logo-ami.png">
  </div>

 <form role="form" class="login-form" method="POST" action="<?php echo base_url();?>masuk/cek_login">
                                   
                           <!--  <font color="red"><p align="center"><b>sasa</b></p></font> -->
                                <font color="red"><p align="center"><b><?=$this->session->flashdata('pesan')?></b></p></font>
                                <div class="icon_user">
                              </div>
                                <input type="text" name="username" autocomplete="off" required="required" class="span12" placeholder="Masukan Username" />
                                  
                    
                                    <div class="icon_pass"></div>

                                <input type="password"class="span12" autocomplete="off" required="required" name="password"  placeholder="Masukan Password" />
                                
       
       <br>
       <br>
                           <button class="button tw" type="submit">
                              &nbsp;
                                Masuk
                              &nbsp;

                              </button> 
    <div class="kembali">
        <a href="<?php echo base_url();?>beranda"><< Kembali ke beranda</a>
    </div>  

                              
                            </div>

                         
                        </form>

</div>
<div class="line"></div>



<div class="form-button"> 
<b>
&copy 2018 - PT. Andesta Mandiri Indonesia
</b>
</div>
<div class="line-color"></div>


    
  </body>
</html>
