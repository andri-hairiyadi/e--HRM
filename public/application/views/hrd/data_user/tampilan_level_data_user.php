    <div class="right_col" role="main" style="background-image:url(<?php echo base_url();?>style/images/latar.jpg)" >
         <div class="">
                        <div class="page-title">
              <div class="title_left">
                <h3><i class="fa fa-book"></i> Data User</h3>
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
                     <h2>Total User : <?php echo $isi->num_rows() ?></h2>
                    <a href="<?php echo base_url();?>admin_yayasan/data_user/tambah_user" class="btn btn-dark pull-right" style="margin-right: 5px;"><i class="fa fa-plus"></i>&nbsp;Tambah Data</a>

  <form action="<?php echo site_url('admin_yayasan/data_user/level');?>" data-parsley-validate method="post" class="form-horizontal">
   
                     <div class="col-md-5 col-sm-5 col-xs-12 pull-right input-group">

                            <select class="form-control" name="level" required="required" >
                            <option value="">-- Cari Data User Berdasarkan Hak Akses --</option>
                             <option value="1">Admin TKI</option>
                            <option value="2">Admin SDIT</option>
                            <option value="3">Admin MTs</option>
                            <option value="4">Admin MA</option>
                            <option value="5">Admin SMK</option>
                            <option value="6">Admin Yayasan </option>
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
                          <th>Username</th>      
                          <th>Hak Akses / Jabatan</th>
                          <th>Nama Sekolah</th>
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
                          <td><?php echo $row->username; ?></td>

                          <td>
                            <?php
                          
                               
                                 if ($row->level == '1' )
                                {
                                 echo" Admin TKI";
                                }
                                 if ($row->level == '2' )
                                {
                                 echo"Admin SDIT";
                                }
                                 if ($row->level == '3' )
                                {
                                 echo"Admin MTs";
                                }
                                if ($row->level == '4' )
                                {
                                 echo"Admin MA";
                                }
                                 if ($row->level == '5' )
                                {
                                 echo"Admin SMK";
                                }
                                 if ($row->level == '6' )
                                {
                                 echo"Admin Yayasan";
                                }
                                 if ($row->level == '7' )
                                {
                                 echo" Kepala Sekolah TKI";
                                }
                                 if ($row->level == '8' )
                                {
                                 echo"Kepala Sekolah SDIT";
                                }
                                 if ($row->level == '9' )
                                {
                                 echo"Kepala Sekolah MTs";
                                }
                                if ($row->level == '10' )
                                {
                                echo"Kepala Sekolah MA";
                                }
                                if ($row->level == '11' )
                                {
                                echo"Kepala Sekolah SMK";
                                }
                                if ($row->level == '12' )
                                {
                                 echo" Wali Kelas TKI";
                                }
                                 if ($row->level == '13' )
                                {
                                 echo"Wali Kelas SDIT";
                                }
                                 if ($row->level == '14' )
                                {
                                 echo"Wali Kelas MTs";
                                }
                                if ($row->level == '15' )
                                {
                                echo"Wali Kelas MA";
                                }
                                if ($row->level == '16' )
                                {
                                echo"Wali Kelas SMK";
                                }
                                if ($row->level == '17' )
                                {
                                echo"Guru SDIT";
                                }
                                if ($row->level == '18' )
                                {
                                echo"Guru MTs";
                                }
                                if ($row->level == '19' )
                                {
                                echo"Guru MA";
                                }
                                if ($row->level == '20' )
                                {
                                echo"Guru SMK";
                                }
                                 if ($row->level == '21' )
                                {
                                echo"Guru SDIT";
                                }
                                if ($row->level == '22' )
                                {
                                echo"Guru MTs";
                                }
                                if ($row->level == '23' )
                                {
                                echo"Guru MA";
                                }
                                if ($row->level == '24' )
                                {
                                echo"Guru SMK";
                                }
                               
                                ?>
                          </td>
                            <td>
                            <?php
                          
                                if ($row->level == '1' )
                                {
                                 echo"DAR EL HIKMAH";
                                }
                                 if ($row->level == '2' )
                                {
                                 echo"TKI DAR EL HIKMAH";
                                }
                                 if ($row->level == '3' )
                                {
                                 echo"SDIT DAR EL HIKMAH";
                                }
                                 if ($row->level == '4' )
                                {
                                 echo"MTS DAR EL HIKMAH";
                                }
                                if ($row->level == '5' )
                                {
                                 echo"MA DAR EL HIKMAH";
                                }
                                 if ($row->level == '6' )
                                {
                                 echo"SMK DAR EL HIKMAH";
                                }
                                 if ($row->level == '7' )
                                {
                                  echo"TKI DAR EL HIKMAH";
                                }
                                 if ($row->level == '8' )
                                {
                                 echo"SDIT DAR EL HIKMAH";
                                }
                                 if ($row->level == '9' )
                                {
                                 echo"MTS DAR EL HIKMAH";
                                }
                                if ($row->level == '10' )
                                {
                                echo"MA DAR EL HIKMAH";
                                }
                                if ($row->level == '11' )
                                {
                                echo"SMK DAR EL HIKMAH";
                                }
                                if ($row->level == '12' )
                                {
                                  echo"TKI DAR EL HIKMAH";
                                }
                                 if ($row->level == '13' )
                                {
                                 echo"SDIT DAR EL HIKMAH";
                                }
                                 if ($row->level == '14' )
                                {
                                 echo"MTS DAR EL HIKMAH";
                                }
                                if ($row->level == '15' )
                                {
                                echo"MA DAR EL HIKMAH";
                                }
                                if ($row->level == '16' )
                                {
                                echo"SMK DAR EL HIKMAH";
                                }
                                if ($row->level == '17' )
                                {
                                echo"SDIT DAR EL HIKMAH";
                                }
                                if ($row->level == '18' )
                                {
                                echo"MTS DAR EL HIKMAH";
                                }
                                if ($row->level == '19' )
                                {
                                echo"MA DAR EL HIKMAH";
                                }
                                if ($row->level == '20' )
                                {
                                echo"SMK DAR EL HIKMAH";
                                }
                                 if ($row->level == '21' )
                                {
                                echo"SDIT DAR EL HIKMAH";
                                }
                                if ($row->level == '22' )
                                {
                                echo"MTS DAR EL HIKMAH";
                                }
                                if ($row->level == '23' )
                                {
                                echo"MA DAR EL HIKMAH";
                                }
                                if ($row->level == '24' )
                                {
                                echo"SMK DAR EL HIKMAH";
                                }
                               
                                ?>
                          </td>
                          <td>
                    
                         <a href="<?php echo base_url()?>admin_yayasan/data_user/ubah/<?php echo $row->id_user; ?>" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Ubah </a>
                            <a href="" data-toggle="modal" data-target="#hapus<?php echo $row->id_user; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a>
                          
                          </td>
                        
                  
                      
                        </tr>
    <div id="hapus<?php echo $row->id_user; ?>"  class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
            <a href="<?php echo base_url()?>admin_yayasan/data_user/hapus/<?php echo $row->id_user; ?>" class="btn btn-danger antosubmit"><i class="fa fa-trash-o"></i>&nbsp;Iya, Hapus</a>
           
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
