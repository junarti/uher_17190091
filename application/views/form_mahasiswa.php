<!DOCTYPE html>
<html>

<head>
    <title> Form Input Mahasiswa</title>
</head>
<body>
    <center>
       <form action="<?php echo base_url ('mahasiswa/fungsiTambah'); ?>" method="post">
    <table>
       
        <tr>
            <th colspan="3"></th>
                Form Input Data Mahasiswa
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
                    <input type="text" name="nim" id="nim" >
                </td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>:</td>
                <td>
                    <input type="text" name="nama" id="nama" >
                </td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>:</td>
                <td>
                    <input type="text" name="kelas" id="kelas" >
                </td>
            </tr>
            <tr>
                <th>Program Studi</th>
                <td>:</td>
                <td>
                    <input type="text" name="prodi" id="prodi" >
                </td>
            </tr>
            <tr>
                <th>Email</th>
                <td>:</td>
                <td>
                    <input type="text" name="email" id="email" >
                </td>
            </tr>
            <tr>
            
            <tr>
                <td colspan="3" align="center">
                    <input type="submit"  value="Simpan"?>
                    <input type="reset" value="Batal">
                </td>
            </tr>
        </tr>
        
    </table></form>
    </center>
</body>
</html>