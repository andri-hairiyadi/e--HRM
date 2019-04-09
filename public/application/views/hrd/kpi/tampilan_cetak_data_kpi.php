
<style>
#cetak{
    background-image: url(style/images/cetak_kpi.jpg);
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
                          <th>No</th>
                          <th>Nomor ID</th>
                          <th>Nama </th>          
                          <th>Posisi</th>
                          <th>Nama Area</th>
                          <th>Hasil Akhir</th>
                          <th>Keterangan</th>
                          
               
                        </tr>
                      </thead>


                      <tbody>
                     
                            <?php
     
                            $no = 1;
                            foreach ($isi->result() as $row) {
                            ?>
                         <tr>
                          <td width="10" align="center"><?php echo $no++; ?>.</td>
                          <td width="60" align="center">
                             <?php
                          $nomor = $row->nomor_id;
                          if ($nomor == '') {
                             echo "<span class='label label-danger'>Belum Nomor ID</span>";
                          }
                          else{
                            echo $nomor;
                          }


                          ?>
                          </td>
                          <td width="130" align="center"><?php echo $row->nama_mp; ?></td>
                          
                          <td width="100" align="center"><?php echo $row->posisi_tugas; ?></td>
                          <td width="200" align="center"><?php echo $row->nama_area; ?></td>
                          <td width="60" align="center"><?php echo $row->total_keseluruhan; ?></td>
                          <td width="160" align="center">
                                                        <?php
                               $cek =$row->total_keseluruhan;
                                if ($cek <= '4' )
                                {
                                  echo"<span class='label label-danger'>Gagal Dalam Menjalankan Keseluruhan Jobdesc</span>";
                                }
                                else if ($cek <= '6') {
                                 echo"<span class='label label-warning'>Kurang Mampu Menjalankan Keseluruhan Jobdesc</span>";
                                }
                                 else if ($cek <= '8') {
                                 echo"<span class='label label-primary'>Mampu Menjalankan Keseluruhan Jobdesc</span>";
                                }
                                else if ($cek <= '10') {
                                 echo"<span class='label label-success'>Menguasai Keseluruhan Jobdesc</span>";
                                }
                                else if ($cek > '10') {
                                 echo"<span class='label label-success'>Menguasai Keseluruhan Jobdesc</span>";
                                }
                               
                                ?>
                          </td>

                         
                    
                        </tr>


                       
                      <?php } ?>

                      </tbody>
                    </table>

</div>
</div>