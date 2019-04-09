<style type="text/css">
 table{
  border-collapse:collapse;
  background:#ffffff;}


th, td{border:1px solid #999; color: black;}
th{padding:6px 0;background: #f0f0f0; text-align: center;}
td{padding:4px 8px; color:black; font-size: 16px;}

</style>

           <section class="site-section site-section-light site-section-top" style="background-image:url(<?php echo base_url();?>style/images/bg-awal.jpg)">
                    <div class="container">
                        <h1 class="text-center animation-slideDown"><font color="#364387"><i class="fa fa-check"></i> <strong>Pendaftaran Selesai</strong></font></h1>
                        <h2 class="text-center animation-slideDown"><font color="#364387"></i> <strong>SILAHKAN CETAK BUKTI PENDAFTARAN ONLINE</strong></font></h2>
                    </div>
                </section>

     <!-- Company Info -->
            <section class="site-content site-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="site-block">
         <?php
        foreach($isi as $data){
        ?>

                            <table width="100%">
                                <tr>
                                    <td colspan="2" style="background-color:#364387; color:white;">
                                        <center><b>
                                        <h4>PENDAFTARAN KARYAWAN </h4>
                                        <h5>PT. ANDESTA MANDIRI INDONESIA</h5>
                                        </b></center>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="20%" valign="top">
                                        <p class="text-center">
                                    <img src="<?php echo base_url();?>style/dokumen_pelamar/<?php echo $data->file_photo;?>" width="220px" alt="Avatar">
                                </p>
                                    </td>
                                    <td>
                                         <table width="100%">

                                    <tr>


                                        <td colspan="3" align="right"><a href="<?php echo base_url(); ?>pendaftaran/cetak/<?php echo $data->id_pelamar;?>" target="_blank"class="btn btn-primary"><i class="fa fa-print"></i>&nbsp;Cetak Kartu</a></td>
                                    </tr>
                                    <tr>

                                        <td width="29%">Nomor Pendaftaran</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<b><?php echo $data->no_pendaftaran;?></b></td>
                                    </tr>
                                    <tr>

                                        <td width="29%">Nomor Identitas (KTP)</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<b><?php echo $data->nomor_ktp;?></b></td>
                                    </tr>
                                     <tr>

                                        <td width="29%">Nama Lengkap</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->nama_pelamar;?></td>
                                    </tr>
                                    <tr>
                                        <td width="29%">No. Hp</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->no_hp;?></td>
                                    </tr>
                                    <tr>
                                        <td width="29%">Jenis Kelamin</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->jenis_kelamin;?></td>
                                    </tr>

                                     <tr>
                                        <td width="29%">Tanggal Daftar</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo tgl_indo($data->tanggal_daftar);?></td>
                                    </tr>
                                    <tr>
                                        <td width="29%">Jam Daftar</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->jam_daftar;?></td>
                                    </tr>
                                     <tr>
                                        <td width="29%">Tempat, Tanggal Lahir</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->tempat_lahir;?>, <?php echo tgl_indo($data->tanggal_lahir);?></td>
                                    </tr>
                                    <tr>
                                        <td width="29%">Alamat</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->alamat;?></td>
                                    </tr>
                                    <tr>
                                        <td width="29%">RT/ RW/ Kelurahan</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->rt;?>/ <?php echo $data->rw;?>/ <?php echo $data->kelurahan;?></td>
                                    </tr>
                                     <tr>
                                        <td width="29%">Agama</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->agama;?></td>
                                    </tr>

                                    <tr>
                                        <td width="29%">Hobi</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->hobi;?></td>
                                    </tr>
                                     <tr>
                                        <td width="29%">Pendidikan Terakhir</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->pendidikan_terakhir;?></td>
                                    </tr>
                                    <tr>
                                        <td width="29%">Nama Sekolah</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->nama_sekolah;?></td>
                                    </tr>
                                    <tr>
                                        <td width="29%">Tahun Lulus</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->tahun_lulus;?></td>
                                    </tr>
                                    <tr>
                                        <td width="29%">Nomor Ijazah</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->nomor_ijazah;?></td>
                                    </tr>
                                    <tr>
                                        <td width="29%">Golongan Darah</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->golongan_darah;?> </td>
                                    </tr>
                                    <tr>
                                        <td width="29%">Tinggi Badan</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->tinggi_badan;?></td>
                                    </tr>
                                    <tr>
                                        <td width="29%">Berat Badan</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->berat_badan;?></td>
                                    </tr>
                                    <tr>
                                        <td width="29%">Penyakit</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->penyakit;?></td>
                                    </tr>

                                    <tr>
                                        <td width="29%">Nomor BPJS</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->no_bpjs;?></td>
                                    </tr>
                                    <tr>
                                        <td width="29%">Nomor Rekening</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->no_rekening;?></td>
                                    </tr>
                                     <tr>
                                        <td width="29%">Nama Bank</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->nama_bank;?></td>
                                    </tr>

                                        <tr>
                                        <td width="29%">Gaji</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<?php echo $data->gaji;?></td>
                                    </tr>



                                    <tr>
                                        <td colspan="3"><b>Data Dokumen</b></td>
                                    </tr>

                                    <tr>
                                        <td width="29%">File Photo</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<a href="<?php echo base_url('style/dokumen_pelamar/'.$data->file_photo); ?>" target="_blank"><i class="fa fa-file-image-o"></i> Lihat Data</a> </td>
                                    </tr>
                                    <tr>
                                        <td width="29%">File KTP/ SIM</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<a href="<?php echo base_url('style/dokumen_pelamar/'.$data->file_ktp_sim); ?>" target="_blank"><i class="fa fa-file-o"></i> Lihat Data</a> </td>
                                    </tr>
                                    <tr>
                                        <td width="29%">File KK</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<a href="<?php echo base_url('style/dokumen_pelamar/'.$data->file_kk); ?>" target="_blank"><i class="fa fa-file-o"></i> Lihat Data</a> </td>
                                    </tr>
                                    <tr>
                                        <td width="29%">File Ijazah</td>
                                        <td width="1%">:</td>
                                        <td width="70%">&nbsp;&nbsp;<a href="<?php echo base_url('style/dokumen_pelamar/'.$data->file_ijazah); ?>" target="_blank"><i class="fa fa-file-o"></i> Lihat Data</a> </td>
                                    </tr>








                                </table>



                                   </td>
                                </tr>

                            </table>
 <?php
        }
   ?>
                            </div>

                        </div>


                    </div>
                </div>
            </section>
            <!-- END Company Info -->
