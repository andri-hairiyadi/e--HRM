    <div class="right_col" role="main" style="background-image:url(<?php echo base_url();?>style/images/latar.jpg)" >
         <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><i class="fa fa-times-circle"></i> Man Power Non Aktif
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

                    <a href="<?php echo base_url();?>hrd/data_man_power/cetak_man_power" target="__blank" class="btn btn-dark pull-right" style="margin-right: 5px;"><i class="fa fa-print"></i>&nbsp;Cetak Data Man Power</a>

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
                          <th>No</th>
                          <th>Nomor ID</th>
                          <th>Nama </th>
                          <th>Posisi</th>
                          <th>Nama Area</th>
                          <th>Status</th>
                          <th>Aksi</th>


                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                            <?php
                            $no = 1;
                            foreach ($isi->result() as $row) {
                            ?>
                          <td><?php echo $no++; ?></td>
                          <td>
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
                          <td><?php echo $row->nama_mp; ?></td>
                          <td><?php echo $row->posisi_tugas; ?></td>
                          <td><?php echo $row->nama_area; ?></td>
                          <td>
                            <?php
                             $batas = $row->tgl_selesai;
                             $tgl_now = date("Y-m-d");
                            if ($tgl_now > $batas) {
                              echo "<span class='label label-danger'>Tidak Aktif</span>";
                            }
                            else if ($tgl_now <= $batas) {
                             echo "<span class='label label-success'>Aktif</span>";
                            }

                          ?>
                          </td>
                          <td>
                          <a href="<?php echo base_url()?>manager/laporan_data_man_power/detail/<?php echo $row->id_man_power; ?>" class="btn btn-success btn-xs"><i class="fa fa-search"></i> Detail </a>

                          </td>

                        </tr>



                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>
</div>
