<?php echo $this->load->view('hrd/data_lowongan_kerja/tambah_data_lowongan_kerja');?>
<?php echo $this->load->view('hrd/data_lowongan_kerja/ubah_data_lowongan_kerja');?>

    <div class="right_col" role="main" style="background-image:url(<?php echo base_url();?>style/images/latar.jpg)" >
         <div class="">
                        <div class="page-title">
              <div class="title_left">
                <h3><i class="fa fa-bullhorn"></i> Lowongan Kerja </h3>
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
                
                    <a href="#" data-toggle="modal" data-target="#tambah_lowongan" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-plus"></i>&nbsp;Tambah Data</a>

            
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
                          <th>Nama Lowongan</th>          
                          <th>Deskripsi</th>          
                          <th>Persyaratan</th>          
                          <th>Batas Pendaftran</th>     
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
                          <td><?php echo $row->nama_lowongan; ?></td>
                          <td>
                            <a href="<?php echo base_url()?>hrd/data_lowongan_kerja/deskripsi/<?php echo $row->id_lowongan; ?>" class="btn btn-primary btn-xs"><i class="fa fa-list"></i> Lihat Deskripsi Lowongan </a>
                          </td>
                           <td>
                            <a href="<?php echo base_url()?>hrd/data_lowongan_kerja/persyaratan/<?php echo $row->id_lowongan; ?>" class="btn btn-primary btn-xs"><i class="fa fa-list"></i> Lihat Persyaratan Lowongan </a>
                          </td>
                          <td><?php echo tgl_indo($row->tanggal_awal); ?> - <?php echo tgl_indo($row->tanggal_akhir); ?>
        <br>
 <?php
 
                                            $tgl_now = date("Y-m-d");
                                            $tgl = $row->tanggal_akhir;
                                            if ($tgl > $tgl_now) {
                                                echo "<div class='label label-success'>Pendaftaran di Buka</div>";
                                            }
                                            else{
                                               echo "<div class='label label-danger'>Pendaftaran di Tutup</div>";
                                            }
                                        ?>
                          </td>
                          

  
                          <td>
                    
                           <a href="#" data-toggle="modal" data-target="#ubah_lowongan<?php echo $row->id_lowongan; ?>" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Ubah </a>
                       
                                 <a href="" data-toggle="modal" data-target="#hapus<?php echo $row->id_lowongan; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a>
                        
                          </td>
                    
                        </tr>

    <div id="hapus<?php echo $row->id_lowongan; ?>"  class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
       <div class="modal-content" style="background-image:url(<?php echo base_url();?>style/images/pop_up.jpg)" >

          <div class="modal-header">

          </div>
        <div class="modal-body">
          <center><h4 class="modal-title" id="myModalLabel"> <font color="#274490"><b>Apakah anda yakin ingin menghapus data ini?</b></font></h4></center> 
         </div>

        <!-- /page content -->

          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Cancel</button>
            <a href="<?php echo base_url()?>hrd/data_lowongan_kerja/hapus_lowongan/<?php echo $row->id_lowongan; ?>" class="btn btn-danger antosubmit"><i class="fa fa-trash-o"></i>&nbsp;Iya, Hapus</a>
           
          </div>
        </div>
      </div>
    </div>
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>
</div>
