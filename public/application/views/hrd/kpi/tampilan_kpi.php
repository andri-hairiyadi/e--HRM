<?php echo $this->load->view('hrd/kpi/detail_penilaian');?> 

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
                
                    <a href="<?php echo base_url();?>hrd/kpi/cetak_data_kpi" target="_blank" class="btn btn-dark pull-right" style="margin-right: 5px;"><i class="fa fa-print"></i>&nbsp;Cetak Data </a>
                    <form action="<?php echo site_url('hrd/kpi/area');?>" data-parsley-validate method="post" class="form-horizontal">
   
                     <div class="col-md-5 col-sm-5 col-xs-12 pull-right input-group">

                            <select class="form-control" name="area" required="required" >
                            <option value="">-- Cari Data Berdasarkan Area Kerja --</option>
                                  <?php
                            $no = 1;
                            foreach ($area->result() as $row) {
                            ?>

                            <option value="<?php echo $row->nama_area;?>"><?php echo $row->nama_area;?></option>

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
                        
                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nomor ID</th>
                          <th>Nama </th>          
                          <th>Posisi</th>
                          <th>Nama Area</th>
                          <th>Hasil Akhir</th>
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
                          <td align="center"> <b>Total Keseluruhan : <?php echo $row->total_keseluruhan; ?> <br></b>
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
                          <td>
                          <a href="" data-toggle="modal" data-target="#detail_penilaian<?php echo $row->id_kpi; ?>"  class="btn btn-primary btn-xs"><i class="fa fa-search"></i> Detail </a>
                          
                            </td>
                    
                        </tr>



                 <?php  } } else{
                            echo "<tr><td colspan='7'><font color='red'>Data tidak ada</font></td></tr>";

                            } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>
</div>
