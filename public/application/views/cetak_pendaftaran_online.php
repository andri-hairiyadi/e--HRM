
<style>
#cetak{
    background-image: url(style/images/pendaftaran_online.jpg);
    height:1070px;

}


.layout1{
    margin-top: 168px;
    margin-left: 80px;
    width:600px;
    height:20px;

}
.layoutGG{
    margin-top: 17px;
    margin-left: 80px;
    width:600px;
    height:200px;

}
.layout2{
    width:150px;
    
    height:200px;

    float: left;

}
.layout3{

    width:280px;
    height:200px;
     float: left;

}


table{
font-size: 16px;

}
td, th { 
    padding: 5px; 
    text-align: left; 
    font-size: 16px;
    }


</style>

<div id="cetak">
    <div class="layout1">

    <?php
        foreach($isi as $data){
        ?>
                    
                                              <table >

                                    <tr>       
                                        <td width="250" align="center">
                                        <b><?php echo $data->no_pendaftaran;?></b></td>
                                        <td width="20" align="center"></td>
                                         <td width="270" align="center">

                                        <b><?php echo tgl_indo($data->tanggal_daftar);?>, <?php echo $data->jam_daftar;?></b></td>
                                    </tr>
                                  
                                </table>

  </div>
<div class="layoutGG">
<table>
    <tr>
        <td>
            <div class="layout2">
            <img src="<?php echo base_url();?>style/dokumen_pelamar/<?php echo $data->file_photo;?>" width="150" height="200">
            </div>
       </td>
        <td>
             <div class="layout3">
                <table>
                    <tr>
                        <td>Nomor KTP</td>
                        <td>:</td>
                        <td><?php echo $data->nomor_ktp;?></td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><?php echo $data->nama_pelamar;?></td>
                    </tr>
                    <tr>
                        <td>Tempat, Tgl Lahir</td>
                        <td>:</td>
                        <td><?php echo $data->tempat_lahir;?>, <?php echo tgl_indo($data->tanggal_lahir);?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><?php echo $data->jenis_kelamin;?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?php echo $data->alamat;?></td>
                    </tr>
         
                    <tr>
                        <td>Posisi</td>
                        <td>:</td>
                        <td><?php echo $data->posisi;?></td>
                    </tr>






                </table>
            </div>
        </td>
    </tr>
</table>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <?php echo $data->nama_pelamar;?>
     
  <?php
    }
  ?>

</div>
</div>