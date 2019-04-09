
<style>
#cetak{
    background-image: url(style/images/cetak_history_man_power.jpg);
    height: 300px;
}


.layout1{

    margin-left: 50px;
    width:600px;
    height:20px;

}




table{
      margin-top: 20px;
font-size: 14px;

}


th, td{border:1px solid #000000; color: white;}
th{padding:6px 0;background: #000000; text-align: center;}
td{padding:4px 8px; color:black; font-size: 13px;}




</style>

<div id="cetak">
    <div class="layout1">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <font size="14px" ><b>Pekanbaru, 
<?php 
$tgl_now=date("Y-m-d");
echo tgl_indo($tgl_now); 
?></b></font>

                 <table>
                      <thead>
                        <tr>
                              <th width="180" align="center">Nama Man Power </th>
                              <th width="200" align="center">Area Kerja</th>
                              <th width="200" align="center">Pelanggaran</th>
                              <th width="200" align="center">Penghargaan</th>
                              <th width="180" align="center">Keterangan</th>
       </tr>  
                      </thead>


                      <tbody>
                       
    <?php
        if ($riwayat->result()) { 

    foreach ($riwayat->result() as $data) {
    ?>
     <tr>
                              <td><?php echo $data->nama_mp;?></td>
                              <td><?php echo $data->nama_area;?></td>
                              <td><?php echo $data->pelanggaran;?></td>
                              <td><?php echo $data->penghargaan;?></td>
            
                              <td align="center"><?php echo $data->keterangan;?></td>
                     
          
                    
                        </tr>
                           <?php  } } else{
                            echo "<tr><td colspan='5'><font color='red'>Data tidak ada, Silahkan di Lengkapi / Di Isi</font></td></tr>";

                            } ?>
                        </tbody>


                       
                          </table>

</div>
</div>