
       <!-- Intro -->
             <section class="site-section site-section-light site-section-top themed-background-dark" style="background-image:url(<?php echo base_url();?>style/images/bg-awal.jpg); background-size:cover;">
                        <div class="container">
                        <br> 
                        <br>
                    <h1 class="text-center animation-slideDown"><font color="#364387"><i class="fa fa-check-square-o"></i> <strong>VALIDASI PENDAFTARAN</font></strong></h1>
                    <h2 class="h3 text-center animation-slideUp push"><font color="#000000">Masukan Kode Pendaftaran!</font></h2>
                      <center><?=$this->session->flashdata('pesan')?></center>
                    <div class="text-center">
                         <form action="<?php echo site_url('daftar/cek_kode');?>" data-parsley-validate method="post" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2">
                                    <label class="sr-only" for="helpdesk-question">Search</label>
                  
                                    <div class="input-group input-group-lg">
                                        <input type="text" name="kode_aktivasi" onkeyup="this.value = this.value.toUpperCase()" class="form-control" autocomplete="off" required="required" placeholder="Masukan Kode Pendaftaran disini">
                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Proses Kode</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
                </div>
            </section>
            <!-- END Intro -->
