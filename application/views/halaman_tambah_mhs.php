<!DOCTYPE html>
<html>
<head>
    <title>Tampilan Data Mahasiswa</title>
</head>
<body> <h3>Tampilan Data Mahasiswa</h3>

    <a href="<?php echo base_url('/index.php/mahasiswa/')?>">Tambah Mahasiswa</a>
   
    <br>
    <br>
    <table border="1">
        <tr>
            <td>NO</td>    
            <td>NIM</td>
            <td>Nama</td>
            <td>Kelas</td>
            <td>Program Studi</td>
            <td>Email</td>
            <td>Pilih</td>
</tr>

<tr>
            <td>1</td>    
            <td>nim</td>
            <td>nama</td>
            <td>kelas</td>
            <td>prodi</td>
            <td>email</td>
            <td><a href ="<?php echo base_url('/mahasiswa/halaman_edit')?>">Edit</a> | 
            <a href="<?php echo base_url('/mahasiswa/fungsiDelete')?>">Hapus</a>
        </td>
        </tr>
       
    </table></form>
</body>
</html>