<?php echo $this->load->view('manpower/kpi/detail_penilaian');?> 

    <div class="right_col" role="main" style="background-image:url(<?php echo base_url();?>style/images/latar.jpg)" >
         <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><i class="fa fa-book"></i> Key Performance Indicator
                </h3>
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
                              <td width="20%" align="center">Priode </td>
                              <td width="20%" align="center">Nama Area</td>
                              <td width="20%" align="center">Total Gineral</td>
                              <td width="20%" align="center">Total Skil</td>
                              <td width="20%" align="center">Total Keseluruhan</td>
                              <td width="20%" align="center">Catatan</td>
                              <td width="20%" align="center">Aksi</td>
       </tr>
                      </thead>


                      <tbody>
                        <tr>
    <?php
        if ($kpi->result()) {

    foreach ($kpi->result() as $data) {
    ?>
                              <td><?php echo tgl_indo($data->tgl_mulai_kpi); ?> - <?php echo tgl_indo($data->tgl_selesai_kpi); ?></td>
  
                              <td align="center"><?php echo $data->nama_area; ?> </td>
                              <td align="center"><?php echo $data->total_general; ?> </td>
                              <td align="center"><?php echo $data->total_skill; ?> </td>
                              <td align="center"><?php echo $data->total_keseluruhan; ?> </td>
                              <td align="center">
                                <?php
                               $cek =$data->total_keseluruhan;
                                if ($cek <= '4' )
                                {
                                  echo"<span class='label label-danger'>Gagal Dalam Menjalankan <br> Keseluruhan Jobdesc</span>";
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
                              <td>
                         <a href="" data-toggle="modal" data-target="#detail_penilaian<?php echo $data->id_kpi; ?>"  class="btn btn-primary btn-xs"><i class="fa fa-search"></i> Detail </a>
                              </td>



                        </tr>
                        </tbody>


                          <?php  } } else{
                            echo "<tr><td colspan='5'><font color='red'>Data Tidak Ada</font></td></tr>";

                            } ?>
                          </table>

                  </div>
                </div>
              </div>
            </div>
</div>
</div>
