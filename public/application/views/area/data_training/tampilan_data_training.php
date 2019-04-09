    <div class="right_col" role="main" style="background-image:url(<?php echo base_url();?>style/images/latar.jpg)" >
         <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><i class="fa fa-sign-in"></i> Data Training
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

                    <a href="<?php echo base_url();?>hrd/data_training/cetak_data_training" target="_blank" class="btn btn-dark pull-right" style="margin-right: 5px;"><i class="fa fa-print"></i>&nbsp;Cetak Data Training</a>

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
                          <th>Nama Lengkap</th>
                          <th>Jenis Kelamin</th>
                          <th>Posisi</th>
                          <th>Waktu Training</th>
                          <th>Status</th>
                          <th>Aksi</th>



                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                            <?php
                            if ($isi->result()) {

                            $no = 1;
                            foreach ($isi->result() as $row) {
                            ?>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $row->nama_pelamar; ?></td>
                          <td><?php echo $row->jenis_kelamin; ?></td>

                          <td><?php echo $row->posisi; ?></td>
                          <td><?php echo tgl_indo($row->tanggal_training); ?> - <?php echo tgl_indo($row->tanggal_training_selesai); ?>, <?php echo $row->jam_training; ?>
                          <?php
                            if ($row->status == '6') {
                              echo "<br> Lokasi : <b> $row->nama_area_tahap2 </b>";
                            }
                            else{
                              echo "";
                            }
                          ?>
                          </td>
                          <td>
                            <?php
                             $batas = $row->tanggal_training_selesai;
                             $tgl_now = date("Y-m-d");
                            if ($tgl_now < $batas) {
                              echo "<span class='label label-success'>Proses Training</span>";
                            }
                            else if ($tgl_now = $batas) {
                             echo "<span class='label label-warning'>Hari Terakhir</span>";
                            }
                            else {

                               echo "<span class='label label-danger'>Training Selesai</span>";
                            }

                          ?>
                          <?php
                            $id = $row->id_pelamar;
                            if ($row->status == '0') {
                              echo "<span class='label label-danger'>belum di cek</span>";
                            }
                            else if ($row->status == '1') {
                             echo "<span class='label label-warning'>Di Tolak</span>";
                            }
                            else if ($row->status == '3') {
                             echo "<span class='label label-success'>Interview</span>";
                            }
                            else if ($row->status == '4') {
                             echo "<a href='' data-toggle='modal' data-target='#tahap1$id' class='btn btn-primary btn-xs' ><i class='fa fa-tasks'></i> Training Tahap 1 </a>'";
                            }

                          else if ($row->status == '5') {
                             echo "<a href='' data-toggle='modal' data-target='#tahap2$id' class='btn btn-primary btn-xs' ><i class='fa fa-tasks'></i> Training Tahap 2 </a>'";
                            }
                             else if ($row->status == '6') {
                             echo "<span class='label label-primary' ><i class='fa fa-tasks'></i> Training Tahap 2 </span>'";
                            }




                          ?>
                          <?php
                             $nilai = ($row->status == '') ? 'hidden' : '&nbsp';
                             $disable = $nilai;
                          ?>


                          </td>
                          <td>
                             <a href="<?php echo base_url()?>area/data_training/detail/<?php echo $row->id_pelamar; ?>" class="btn btn-info btn-xs <?php echo $disable;?>" ><i class="fa fa-search"></i> Detail </a>
                          </td>

                        </tr>


   <?php } } else{
                          echo "<tr><td colspan='7'><font color='red'>Data Tidak Ada!</font></td></tr>";

                        } ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>
</div>
