
<style>
#cetak{
    background-image: url(style/images/surat_perjanjian.jpg);
    height: 300px;
}



.layout1{

    margin-left: 60px;
    width:660px;
    height:20px;


}


.spasi{ 
  line-height:30px;}



table{
font-size: 15px;


}
td, th { 
  
    text-align: left; 
    font-size: 16px;
    }



</style>

<div id="cetak">
    <div class="layout1">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <table>
          <tr>
            <td width="610" align="center"><b><u>KONTRAK KERJA</u></b></td>
          </tr>
          <tr>
            <td width="610" align="center">No. ........ /HRD-AMI/I/
      

             Januari / 2019</td>
          </tr>
    </table>


    <br>
    <table>
        <tr>
          <td width="610" align="justify">
            <p class="spasi">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pada hari ini, <?php 
$tgl_now=date("Y-m-d");
echo tgl_indo($tgl_now); 
?>&nbsp;&nbsp;telah dibuat dan disepakati perjanjian kerja antara :
    </p>
          </td>
        </tr>

    </table>
    <br>
        <table>
        <tr>
          <td height="25" width="40" align="justify"> I</td>
          <td width="150" align="justify"> Nama</td>
          <td width="10" align="justify"> :</td>
          <td width="350" align="justify"> Tengku Rini Yulianti</td>
        </tr>
         <tr>
          <td height="25" width="40" align="justify"> </td>
          <td width="150" align="justify"> Jabatan</td>
          <td width="10" align="justify"> :</td>
          <td width="350" align="justify"> Direktur </td>
        </tr>


    </table>
 <table>
        <tr>
          <td width="610" align="justify">
            <p class="spasi">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Dalam hal ini bertindak untuk dan atas nama PT. Andesta Mandiri Indonesia yang selanjutnya disebut sebagai PIHAK PERTAMA.
    </p>
          </td>
        </tr>

    </table>
<br>


            <table>
            <?php
    foreach ($detail->result() as $data) {
    ?>
        <tr>
          <td height="25" width="40" align="justify"> II</td>
          <td width="150" align="justify"> Nama</td>
          <td width="10" align="justify"> :</td>
          <td width="350" align="justify"> <?php echo $data->nama_mp;?></td>
        </tr>
        <tr>
          <td height="25" width="40" align="justify"> </td>
          <td width="150" align="justify"> Tempat/Tgl lahir</td>
          <td width="10" align="justify"> :</td>
          <td width="350" align="justify"> <?php echo $data->tempat_lahir_mp;?> / <?php echo tgl_indo($data->tanggal_lahir_mp);?></td>
        </tr>
         <tr>
          <td height="25" width="40" align="justify"> </td>
          <td width="150" align="justify"> Alamat</td>
          <td width="10" align="justify"> :</td>
          <td width="350" align="justify"> <?php echo $data->alamat_mp;?></td>
        </tr>
<?php } ?>

    </table>

 <table>
        <tr>
          <td width="610" align="justify">
            <p class="spasi">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Dalam hal ini bertindak untuk dan atas nama diri sendiri, yang selanjutnya disebut sebagai PIHAK KEDUA. 
    </p>
          </td>
        </tr>

    </table>

     <table>
        <tr>
          <td width="610" align="justify">
            <p class="spasi">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           Kedua belah pihak sepakat untuk mengikatkan diri dalam Perjanjian Kerja Untuk Waktu Tertentu ( PKWT ) dengan ketentuan-ketentuan sebagai berikut :  
    </p>
          </td>
        </tr>

    </table>
    <br>
         <table>
        <tr>
          <td width="610" align="center">
           <b>PASAL 1</b>
          </td>
        </tr>
        <tr>
          <td width="610" align="justify">
           <p align="justify">
           PIHAK PERTAMA menerima dan mempekerjakan PIHAK KEDUA sebagai:
           </p>
          </td>
        </tr>

    </table>

       <table>
   <?php
    foreach ($detail->result() as $data) {
    ?>
        <tr>
          <td height="25" width="40" align="justify"> </td>
          <td width="150" align="justify"> Status</td>
          <td width="10" align="justify"> :</td>
          <td width="350" align="justify"> Kontrak</td>
        </tr>
        <tr>
          <td height="25" width="40" align="justify"> </td>
          <td width="150" align="justify"> Masa Kontrak</td>
          <td width="10" align="justify"> :</td>
          <td width="350" align="justify"> <?php echo tgl_indo($data->tgl_mulai);?> - <?php echo tgl_indo($data->tgl_selesai);?> </td>
        </tr>
         <tr>
          <td height="25" width="40" align="justify"> </td>
          <td width="150" align="justify"> Jabatan / Unit kerja </td>
          <td width="10" align="justify"> :</td>
          <td width="350" align="justify"> <?php echo $data->posisi_tugas;?></td>
        </tr>
<?php  } ?>

    </table>

    <br>
        <br>
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
</div>









    <div class="layout1">

<br>  
<br>  
<br>  
<br>  
<br>  
<br>  
      <table>
        <tr>
          <td width="610" align="center">
           <b>PASAL 2</b>
          </td>
        </tr>

    </table>
          <table>
        <tr>
          <td height="25" width="20" align="justify"> <p class="spasi">1.</p></td>
          <td width="585" align="justify">
           <p class="spasi">
            PIHAK KEDUA bersedia menerima dan melaksanakan tugas dan tenggung jawab tersebut serta tugas-tugas lain yang diberikan PIHAK PERTAMA dengan sebaik-baiknya dan rasa tanggung-jawab.
            </p>
          </td>
        </tr>
        <tr>
          <td height="25" width="20" align="justify"> <p class="spasi">2.</p></td>
          <td width="585" align="justify">
          <p class="spasi">
           PIHAK KEDUA bersedia tunduk dan melaksanakan seluruh ketentuan yang telah diatur baik dalam Pedoman Peraturan dan Tata Tertib Karyawan maupun ketentuan lain yang menjadi Keputusan Direksi dan Managemen Perusahaan.
          </p>
          </td>
        </tr>
        <tr>
          <td height="25" width="20" align="justify"> <p class="spasi">3.</p></td>
          <td width="585" align="justify">
          <p class="spasi">
            PIHAK KEDUA bersedia menyimpan dan menjaga kerahasiaan baik dokumen maupun informasi milik PIHAK PERTAMA dan tidak dibenarkan memberikan dokumen atau informasi yang diketahui baik secara lisan maupun tertulis kepada pihak lain.
          </p>
          </td>
        </tr>
        <tr>
          <td height="25" width="20" align="justify"><p class="spasi"> 4.</p></td>
          <td width="585" align="justify">
          <p class="spasi">
            Waktu kerja PIHAK KEDUA adalah sesuai dengan kebijakan, dengan ketentuan seprti tercantum dalam peraturan perusahaan atau kalender kerja perusahaan pengguna jasa.
          </p>
          </td>
        </tr>
        <tr>
          <td height="25" width="20" align="justify"> <p class="spasi">5.</p></td>
          <td width="585" align="justify">
          <p class="spasi">
            PIHAK KEDUA  wajib  menggunakan perlengkapan K3L selama menjalankan tugas pekerjaannya.
         </p>
          </td>
        </tr>
        <tr>
          <td height="25" width="20" align="justify"><p class="spasi"> 6.</p></td>
          <td width="585" align="justify">
          <p class="spasi">
           PIHAK KEDUA bersedia ditempatkan dimana saja apabila sewaktu-waktu ditugaskan oleh Perusahaan.
          </p>
          </td>
        </tr>
        <tr>
          <td height="25" width="20" align="justify"> <p class="spasi">7.</p></td>
          <td width="585" align="justify">
          <p class="spasi">
            PIHAK KEDUA bertanggung jawab penuh terhadap peralatan kerja PIHAK PERTAMA dan wajib menjaganya dengan sebaik mungkin.
          </p>
          </td>
        </tr>
      

    </table>

    <br>
        <br>
          <table>
        <tr>
          <td width="610" align="center">
           <b>PASAL 3</b>
          </td>
        </tr>
        <tr>
          <td width="610" align="justify">
          
           <p class="spasi">
           Selama Kontrak berlangsung PIHAK PERTAMA dapat memutuskan hubungan kerja dengan PIHAK KEDUA secara sepihak apabila ternyata :
           
           </p>
          </td>
        </tr>

    </table>
          <table>
        <tr>
          <td height="25" width="20" align="justify"> <p class="spasi">1.</p></td>
          <td width="585" align="justify">
          <p class="spasi">
             PIHAK KEDUA melakukan pelanggaran dari ketentuan pasal 2 Surat Perjanjian Kerja ini setelah sebelumnya mendapat tegoran dan peringatan secara patut sesuai dengan prosedur dan ketentuan perusahaan. 
          </p>
          </td>
        </tr>
        <tr>
          <td height="25" width="20" align="justify"><p class="spasi"> 2.</p></td>
          <td width="585" align="justify">
          <p class="spasi">
           PIHAK KEDUA tidak dapat menjalankan tugas, target atau sasaran kerja yang telah ditetapkan oleh PIHAK PERTAMA. 
          </p>
          </td>
        </tr>
       
       

    </table>
    <br>
    <br>


</div>












    <div class="layout1">

<br>  
<br>  
<br>  
<br>  
<br>  
 

          <table>
        <tr>
          <td height="25" width="20" align="justify"> <p class="spasi">3.</p></td>
          <td width="585" align="justify">
           <p class="spasi">
          PIHAK KEDUA terlibat baik langsung maupun tidak langsung dalam tindak pencurian dan atau penggelapan harta / aset perusahaan maupun tindak kejahatan yang diancam dengan Hukum Pidana dan atau Hukum Perdata Republik Indonesia.
            </p>
          </td>
        </tr>

        <tr>
          <td height="25" width="20" align="justify"> <p class="spasi">4.</p></td>
          <td width="585" align="justify">
          <p class="spasi">
        PIHAK PERTAMA dalam hal ini Perusahaan berada dalam situasi dan kondisi yang tidak memungkinkan lagi untuk mempekerjakan PIHAK KEDUA akibat memburuknya kinerja Perusahaan.
          </p>
          </td>
        </tr>
           
      

    </table>

    <br>
   
          <table>
        <tr>
          <td width="610" align="center">
           <b>PASAL 4</b>
          </td>
        </tr>
        <tr>
          <td width="610" align="justify">
          
           <p class="spasi">
          PIHAK PERTAMA wajib membayarkan upah / gaji kepada PIHAK KEDUA sebagaimana tersebut yang dilaksanakan per-bulan sesuai dengan ketentuan PT. Andesta Mandiri Indonesia dengan tidak mengesampingkan kondisi-kondisi tertentu yang mungkin terjadi dimana PIHAK PERTAMA membutuhkan kerjasama dan kesadaran PIHAK KEDUA demi kesinambungan perusahaan.
           </p>
          </td>
        </tr>

    </table>
     <br>
        <br>
          <table>
        <tr>
          <td width="610" align="center">
           <b>PASAL 5</b>
          </td>
        </tr>
   

    </table>
          <table>
        <tr>
          <td height="25" width="20" align="justify"> <p class="spasi">1.</p></td>
          <td width="585" align="justify">
          <p class="spasi">
         Surat Perjanjian Kerja ini berlaku sejak tanggal (tanggal pembuatan kontrak) hingga berakhirnya seluruh proses kegiatan dan keikut sertaan PT. Andesta Mandiri Indonesia.
          </p>
          </td>
        </tr>
        <tr>
          <td height="25" width="20" align="justify"><p class="spasi"> 2.</p></td>
          <td width="585" align="justify">
          <p class="spasi">
          Surat Perjanjian Kerja ini dapat dibatalkan dan atau menjadi tidak berlaku antara lain karena :
          </p>
          </td>
        </tr>
        <tr>
          <td height="25" width="20" align="justify"><p class="spasi"> </p></td>
          <td width="585" align="justify">

          <p class="spasi">
          a.  Jangka waktu yang diperjanjikan sebagaimana tersebut dalam ayat 1 telah &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;berakhir.</p>
          </td>
        </tr>
        <tr>
          <td height="25" width="20" align="justify"><p class="spasi"> </p></td>
          <td width="585" align="justify">

          <p class="spasi">
          b.  Diakhiri oleh kedua belah pihak walaupun jangka waktu belum berakhir.</p>
          </td>
        </tr>
         <tr>
          <td height="25" width="20" align="justify"><p class="spasi"> </p></td>
          <td width="585" align="justify">

          <p class="spasi">
          c.  Dilakukannya pemutusan hubungan kerja oleh PIHAK PERTAMA karena hal-hal &nbsp;&nbsp;&nbsp;&nbsp;sebagaimana diatur dalam Pasal 3 Surat Perjanjian Kerja ini.
          </p>
          </td>
        </tr>
        <tr>
          <td height="25" width="20" align="justify"><p class="spasi"> </p></td>
          <td width="585" align="justify">

          <p class="spasi">
          d. PIHAK KEDUA  meninggal dunia.</p>
          </td>
        </tr>
       <tr>
          <td height="25" width="20" align="justify"><p class="spasi"> 3.</p></td>
          <td width="585" align="justify">
          <p class="spasi">
         Apabila PIHAK KEDUA berniat untuk mengundurkan diri maka Ia wajib mengajukan surat pengunduran diri kepada PIHAK PERTAMA sekurang-kurangnya 1 ( satu ) bulan sebelumnya.
          </p>
          </td>
        </tr>
       

    </table>
    <br>
    <br>

</div>













 <div class="layout1">

<br>  
<br>  
<br>  
<br>  
<br>  

          <table>
      
  
       <tr>
          <td height="25" width="20" align="justify"><p class="spasi"> 4.</p></td>
          <td width="585" align="justify">
          <p class="spasi">
            PIHAK PERTAMA tidak berkewajiban untuk memberikan uang pesangon, uang jasa, atau ganti kerugian apapun kepada PIHAK KEDUA setelah berakhirnya masa kerja untuk waktu tertentu (kontrak).
          </p>
          </td>
        </tr>
        <tr>
          <td height="25" width="20" align="justify"><p class="spasi"> 5.</p></td>
          <td width="585" align="justify">
          <p class="spasi">
        PIHAK KEDUA wajib mengembalikan seluruh sarana dan prasarana kerja milik PIHAK PERTAMA dalam keadaan baik serta menyelesaikan seluruh tanggung jawab yang diemban PIHAK KEDUA kepada PIHAK PERTAMA pada saat berakhirnya masa kerja waktu tertentu ( kontrak ) dan atau berakhirnya hubungan kerja.
           </p>
          </td>
        </tr>
       
      
    </table>

    <br>
  
          <table>
        <tr>
          <td width="610" align="center">
           <b>PASAL 6</b>
          </td>
        </tr>
        

    </table>
     
          <table>
      
         <tr>
          <td height="25" width="20" align="justify"><p class="spasi"> 1.</p></td>
          <td width="585" align="justify">
          <p class="spasi">
      Surat Perjanjian Kerja untuk Waktu Tertentu ini dibuat dan ditandatangani oleh kedua belah pihak dengan tanpa ada pengaruh dan atau paksaan dari siapapun serta mengikat kedua belah pihak untuk mentaati dan melaksanakannya dengan penuh tanggung jawab.
          </p>
          </td>
        </tr>
       <tr>
          <td height="25" width="20" align="justify"><p class="spasi"> 2.</p></td>
          <td width="585" align="justify">
          <p class="spasi">
         Apabila dikemudian hari Surat Perjanjian Kerja ini ternyata masih terdapat hal-hal yang sekiranya bertentangan dengan Peraturan Perundang-undangan Ketenagakerjaan Republik Indonesia dan atau perkembangan Peraturan PT. Andesta Mandiri Indonesia, maka akan diadakan peninjauan dan penyesuaian atas persetujuan kedua belah pihak.
           </p>
          </td>
        </tr>
        <tr>
          <td height="25" width="20" align="justify"><p class="spasi"> 3.</p></td>
          <td width="585" align="justify">
          <p class="spasi">
       Surat Perjanjian ini dibuat dan ditandatangani oleh kedua belah pihak di Pekanbaru pada tanggal, bulan dan tahun seperti tersebut diatas dalam rangkap 2 ( dua ) yang memiliki kekuatan hukum yang sama dan dipegang oleh masing-masing pihak.
           </p>
          </td>
        </tr>
       
       

    </table>
    <br>
    <br>
    <br>
    <br>
    <br>
    <table>
      <tr>
        <td width="300">
          PIHAK PERTAMA 
        </td>
        <td width="150">
          &nbsp;
        </td>
        <td width="200">
          PIHAK KEDUA 
        </td>
      </tr>
      <tr>
        <td>
          PT. Andesta Mandiri Indonesia
        </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><u>Tengku Rini Yulianti</u></td>
        <td>&nbsp;</td>
                   <?php
    foreach ($detail->result() as $data) {
    ?>
         <td><u><?php echo $data->nama_mp;?></u></td>

         <?php } ?>
      </tr>
    </table>

</div>

