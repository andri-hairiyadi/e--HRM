
<style>
#cetak{
    background-image: url(style/images/kartu_aktivasi.jpg);
    height:1070px;

}


.layout1{
    margin-top: 115px;
    margin-left: 90px;

    width:677px;
    height:216px;

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
                    
                         <table>

                                    <tr>
                                       
                                        <td>Kode Aktivasi</td>
                                        <td>:</td>
                                        <td>&nbsp;&nbsp;<b><?php echo $data->kode_aktivasi;?></b></td>
                                    </tr>
                                    <tr>
                                       
                                        <td>Posisi</td>
                                        <td>:</td>
                                        <td>&nbsp;&nbsp;<b><?php echo $data->posisi;?></b></td>
                                    </tr>
                                     <tr>
                                       
                                        <td>Nama Lengkap</td>
                                        <td>:</td>
                                        <td>&nbsp;&nbsp;<?php echo $data->nama_pelamar;?></td>
                                    </tr>
                                    <tr>
                                       
                                        <td>No. Hp</td>
                                        <td>:</td>
                                        <td>&nbsp;&nbsp;<?php echo $data->no_hp;?></td>
                                    </tr>
                                    <tr>
                                       
                                        <td>Waktu Daftar</td>
                                        <td>:</td>
                                        <td>&nbsp;&nbsp;<?php echo tgl_indo($data->tanggal_daftar);?>,  <?php echo $data->jam_daftar;?></td>
                                    </tr>
                                  
                                </table>
  
  <?php
    }
  ?>

  </div>
  </div>