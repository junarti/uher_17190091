<!DOCTYPE html>
<html >
<head>
   
    <title>Edit Data Mahasiswa</title>
</head>
<body>
  <center>
    <h3> Edit Data Mahasiswa</h3>
      <from action="<?php echo base_url('index.php/mahasiswa/fungsiEdit')?>" method="post">
    <table>
       
       <tr>
           <th colspan="3"></th>
           </th>
           <tr>
               <td colspan="3">
                   <hr>
               </td>
           </tr>
           <tr>
               <th>NIM</th>
               <td>:</td>
               <td>
                   <input type="text" name ="nim" value="<?php echo $queryMhsDetail -> nim ?>" readonly>
               </td>
           </tr>
           <tr>
               <th>Nama</th>
               <td>:</td>
               <td>
                   <input type="text" name="nama" value="<?php echo $queryMhsDetail -> nama?>">
               </td>
           </tr>
           <tr>
               <th>Kelas</th>
               <td>:</td>
               <td>
                   <input type="text" name="kelas" value="<?php echo $queryMhsDetail -> kelas?>" >
               </td>
           </tr>
           <tr>
               <th>Program Studi</th>
               <td>:</td>
               <td>
                   <input type="text" name="prodi" value="<?php echo $queryMhsDetail -> prodi?>">
               </td>
           </tr>
           <tr>
               <th>Email</th>
               <td>:</td>
               <td>
                   <input type="text" name="email" value="<?php echo $queryMhsDetail -> email ?>" >
               </td>
           </tr>
           <tr>
           
           <tr>
               <td colspan="3" align="center">
                  <button type="submit"><a href="<?= base_url('/mahasiswa/halaman_tambah/');?>"> Update Data</button>
               </td>
           </tr>
       </tr>
       
   </table></form>
   </center>
    
</body>
</html>