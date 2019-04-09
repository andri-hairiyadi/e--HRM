
<style>
#cetak{
    background-image: url(style/images/cetak_area_kerja.jpg);
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
                          <th>Nama Area</th>          
                          <th>Alamat</th>
                          <th>Kota Area</th>
                          <th>Email Area</th>
                          <th>No. Hp Area</th>
                        </tr>
                      </thead>


                      <tbody>
                                                  <?php
                            $no = 1;
                            foreach ($isi->result() as $row) {
                            ?>
                        <tr>
 
                          <td width="10"><?php echo $no++; ?>.</td>
                          <td width="150"><?php echo $row->nama_area; ?></td>
                          <td width="180"><?php echo $row->alamat_area; ?></td>
                          <td width="150"><?php echo $row->kota_area; ?></td>
                          <td width="150"><?php echo $row->email_area; ?></td>
                          <td width="120"><?php echo $row->no_hp_area; ?></td>
                 
                        </tr>


                      <?php } ?>
                      </tbody>
                    </table>

</div>
</div>