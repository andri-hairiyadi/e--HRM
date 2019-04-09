                 <?php
    foreach ($isi->result() as $data) {
    ?>



        <!-- page content -->
        <div class="right_col" role="main" style="background-image:url(<?php echo base_url();?>style/images/bg-login.jpgl); background-size:cover;">
            <div class="row" >
              <div class="col-md-12 col-sm-12 col-xs-12" >
                <div class="x_panel" style="background-image:url(<?php echo base_url();?>style/images/beranda_line.jpg); border-radius:6px; background-size:cover; " >
                  <div class="x_content" >
                  <center>
                 <h3><font color="#ffffff">Electronik-Human Resource Management<b> <font color="#ff3833">PT. Andesta Mandiri Indonesia</font></b> </font> </h3>
                </center>




                  </div>
                </div>
              </div>
            </div>


                    <div class="clearfix"></div>

     <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <tr style="background-color:#e8e8e8;">

                                        <td width="29%">Nomor ID</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<b><?php echo $data->nomor_id;?></b></td>
                                    </tr>
                                     <tr>

                                        <td width="29%">Nama Lengkap</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->nama_mp;?></td>
                                    </tr>
                                    <tr style="background-color:#e8e8e8;">
                                        <td width="29%">Jabatan</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->posisi_tugas;?></td>
                                    </tr>
                                    <tr>
                                        <td width="29%">Area</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->nama_area;?></td>
                                     </tr>
                                     <tr style="background-color:#e8e8e8;">
                                        <td width="29%">Tanggal Mulai</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo tgl_indo($data->tgl_mulai);?></td>
                                     </tr>
                                     <tr>
                                        <td width="29%">Tanggal Selesai</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo tgl_indo($data->tgl_selesai);?></td>
                                     </tr>
                                     <tr style="background-color:#e8e8e8;">
                                        <td width="29%">Status</td>
                                        <td width="1%">:</td>
                                        <td width="70%">
                                          <?php
                                                 $batas = $data->tgl_selesai;
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

                                    <tr>
                                        <td width="29%">Efektifitas Bekerja</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php  echo periode(strtotime($data->tgl_mulai));?></td>
                                    </tr>
                                    <tr style="background-color:#e8e8e8;">
                                        <td width="29%">No. BPJS Ketenagakerjaan</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->no_bpjs_ket;?></td>
                                    </tr>
                                     <tr>
                                        <td width="29%">No. BPJS Kesehatan</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->no_bpjs_ket;?></td>
                                    </tr>
                                     







                       </table>

    </div>
   </div>
  </div>

 <?php } ?>
