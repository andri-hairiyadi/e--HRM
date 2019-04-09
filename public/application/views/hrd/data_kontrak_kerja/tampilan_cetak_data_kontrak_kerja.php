
<style>
#cetak{
    background-image: url(style/images/cetak_kontrak_kerja.jpg);
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
                          <th>Nama </th>          
                          <th>Posisi</th>
                          <th>Nama Area</th>
                          <th>Tanggal Mulai</th>
                          <th>Tanggal Selesai</th>
                          <th>Status</th>
                       
                       
                     
                        </tr>  
                      </thead>


                      <tbody>
                        <?php
                            $no = 1;
                            foreach ($isi->result() as $row) {
                            ?>
                        <tr>
                          
                          <td width="10" align="center"><?php echo $no++; ?>.</td>

                          <td width="150"><?php echo $row->nama_mp; ?></td>
                          <td width="100"><?php echo $row->posisi_tugas; ?></td>
                          <td width="150"><?php echo $row->nama_area; ?></td>
                          <td width="120"><?php echo tgl_indo($row->tgl_mulai); ?></td>
                          <td width="120"><?php echo tgl_indo($row->tgl_selesai); ?></td>
                          <td width="70" align="center">
                            <?php 
                             $batas = $row->tgl_selesai;
                             $tgl_now = date("Y-m-d");
                            if ($tgl_now > $batas) {
                              echo "<span class='label label-danger'>Tidak Aktif</span>";
                            }
                            else if ($tgl_now < $batas) {
                             echo "<span class='label label-success'>Aktif</span>";
                            }

                          ?>
                          </td>  
                        </tr>


                      <?php } ?>
                      </tbody>
                    </table>

</div>
</div>