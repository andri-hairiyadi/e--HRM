
<style>
#cetak{
    background-image: url(style/images/cetak_data_interview.jpg);
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
                          <th>No.</th>
                          <th>Nama Lengkap</th>          
                          <th>Jenis Kelamin</th>
                          <th>Posisi</th>
                          <th>Tanggal Interview</th>
                          <th>Jam Interview</th>
                          <th>No HP</th>
               
                        </tr>
                      </thead>


                      <tbody>
                     
                            <?php
     
                            $no = 1;
                            foreach ($isi->result() as $row) {
                            ?>
                         <tr>
                          <td width="10" align="center"><?php echo $no++; ?>.</td>
                          <td width="150" align="center"><?php echo $row->nama_pelamar; ?></td>
                          <td width="100" align="center"><?php echo $row->jenis_kelamin; ?></td>
                          
                          <td width="100" align="center"><?php echo $row->posisi; ?></td>
                          <td width="150" align="center"><?php echo tgl_indo($row->tanggal_interview); ?></td>
                          <td width="100" align="center"><?php echo $row->jam_interview; ?></td>

                          <td width="100" align="center">
               <?php echo $row->no_hp; ?>
                     

                          </td>
                         
                    
                        </tr>


                       
                      <?php } ?>

                      </tbody>
                    </table>

</div>
</div>