
<?php echo $this->load->view('hrd/data_kontrak_kerja/ubah_data_kontrak_kerja');?>

    <div class="right_col" role="main" style="background-image:url(<?php echo base_url();?>style/images/latar.jpg)" >
         <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><i class="fa fa-suitcase"></i> Data Kontrak Kerja
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

                    <a href="<?php echo base_url();?>hrd/data_kontrak_kerja/cetak_kontrak_kerja" target="__blank" class="btn btn-dark pull-right" style="margin-right: 5px;"><i class="fa fa-print"></i>&nbsp;Cetak Data Kontrak Kerja</a>

             <form action="<?php echo site_url('hrd/data_kontrak_kerja/area');?>" data-parsley-validate method="post" class="form-horizontal">

                     <div class="col-md-5 col-sm-5 col-xs-12 pull-right input-group">

                            <select class="form-control" name="id_area_kerja" required="required" >
                            <option>-- Cari Data Berdasarkan Area Kerja --</option>
                                  <?php
                            $no = 1;
                            foreach ($area->result() as $row) {
                            ?>

                            <option value="<?php echo $row->id_area_kerja;?>"><?php echo $row->nama_area;?></option>

                            <?php } ?>

                          </select>

                            <span class="input-group-btn">
                           <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>&nbsp;Cari Data</button>
                                          </span>
                          </div>
                </form>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
               <!--     <p class="text-muted font-13 m-b-30">
                      The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>-->
<?=$this->session->flashdata('pesan')?>

                  <table id="datatable-responsive" style="background-color:white;" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>No ID</th>
                          <th>Nama </th>
                          <th>Posisi</th>
                          <th>Nama Area</th>
                          <th>Limit Kontrak</th>

                          <th>aksi</th>
                        </tr>
                      </thead>
                      <tbody>

                            <?php
                            $no = 1;
                            foreach ($isi->result() as $row) {
                            ?>
              <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $row->nomor_id; ?></td>
                          <td><?php echo $row->nama_mp; ?></td>
                          <td><?php echo $row->posisi_tugas; ?></td>
                          <td><?php echo $row->nama_area; ?></td>
                          <td>
                            <?php
                            $tgl_now=date("Y-m-d");
                            $batas = $row->tgl_selesai;
                            if ($tgl_now > $batas){
                               echo "<span class='label label-danger'>TIDAK AKTIF</span>";
                            }
                            // elseif ($tgl_now = $batas) {
                              // echo "hari ini";

                            elseif($tgl_now < $batas){
                              echo "<span class='label label-success'>". dateDiff("$batas 00:00:00", "$tgl_now 00:00:00",3) . "</span>";
                            }

                            else {
                              echo "<span class='label label-info'>HABIS HARI INI</span>";

                                                }
                            ?>
                          </td>
                          <td>
                            <a href="<?php echo base_url()?>hrd/data_kontrak_kerja/detail/<?php echo $row->id_kontrak; ?>" class="btn btn-success btn-xs"><i class="fa fa-search"></i> Detail </a>
                            <a href="" data-toggle="modal" data-target="#kontrak<?php echo $row->id_kontrak; ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit Kontrak </a>

                             <a href="" data-toggle="modal" data-target="#hapus<?php echo $row->id_kontrak; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a>

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
