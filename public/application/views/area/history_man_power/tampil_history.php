<?php echo $this->load->view('admin/history_man_power/tambah_riwayat_pekerjaan');?> 
    <div class="right_col" role="main" style="background-image:url(<?php echo base_url();?>style/images/latar.jpg)" >
         <div class="">
            <div class="page-title">
              <div class="title_left">
              <?php
    foreach ($detail->result() as $row) {
    ?>
                <h3><i class="fa fa-history"></i> History Man Power &nbsp;<small><i class="fa fa-angle-double-right"></i> <?php echo $row->nama_mp; ?></small>
                </h3>
                <?php } ?>
              </div>
                 <div class="title_right">
                <div class="col-md-4 col-sm-4 col-xs-12 form-group pull-right top_search">

                  <div class="input-group">
                 <div class="btn btn-round btn-default btn-block"><i class="fa fa-calendar"></i>&nbsp;

        <script>
          var bln=['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
          var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
          var tgl= new Date();
          var hari=tgl.getDate();
          var bulan=tgl.getMonth();
          var hariini=tgl.getDay();
          hariini=myDays[hariini];
          var yy=tgl.getYear();
          var tahun=(yy<1000)?yy+1900:yy;
          document.write(hariini+', '+hari+" "+bln[bulan]+" "+tahun)
        </script>
             </div>
                  </div>
                </div>
              </div>

            </div>

            </div>

<div class="clearfix"></div>
          <div class="row">

 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">

                     <ul class="nav navbar-right panel_toolbox">
                       <a href="#" data-toggle="modal" data-target="#tambah_riwayat" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-plus"></i>&nbsp;Tambah Data</a>

                 <a href="<?php echo base_url();?>area/history_man_power/" class="btn btn-dark pull-right" style="margin-right: 5px;"><i class="fa fa-arrow-left"></i>&nbsp;Kembali</a>


                   </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
               <!--     <p class="text-muted font-13 m-b-30">
                      The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>-->
<?=$this->session->flashdata('pesan')?>

                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                              <td width="20%" align="center">Nama Man Power </td>
                              <td width="20%" align="center">Area Kerja</td>
                              <td width="20%" align="center">Pelanggaran</td>
                              <td width="20%" align="center">Penghargaan</td>
                              <td width="20%" align="center">Keterangan</td>
       </tr>
                      </thead>


                      <tbody>
                        <tr>
    <?php
        if ($riwayat->result()) {

    foreach ($riwayat->result() as $data) {
    ?>
                              <td><?php echo $data->nama_mp;?></td>
                              <td><?php echo $data->nama_area;?></td>
                              <td><?php echo $data->pelanggaran;?></td>
                              <td><?php echo $data->penghargaan;?></td>

                              <td><?php echo $data->keterangan;?></td>



                        </tr>
                        </tbody>


                          <?php  } } else{
                            echo "<tr><td colspan='5'><font color='red'>Data tidak ada, Silahkan di Lengkapi / Di Isi</font></td></tr>";

                            } ?>
                          </table>

                  </div>
                </div>
              </div>
            </div>
</div>
</div>
