<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Family Hidrofarm</h2>
    <p>Family Hidrofarm adalah toko online hidroponik yang menjual berbagai macam tanaman hidroponik, mulai dari menjual bibit atau benih dan perlengkapan-perlengkapan lain seperti alat atau media hidroponik<br><br>
    
    <center>
    <table border="1">
    <hr>Perlengkapan Alat<hr>
        <tr>
            <td>Nama Alat</td>
            <td>Fungsi</td>
            <td>Aksi</td>
        </tr>

        <?php
             foreach($dataMu as $dat){
        ?>
            <tr>
                <td><?php echo $dat['Alat']; ?></td>
                <td><?php echo $dat['Fungsi']; ?></td>
                <td>
                    <a href="<?php echo base_url()."index.php/hal_utama/hapus_data/".$dat['Nomor']; ?>">Delete</a> | 
                    <a href="<?php echo base_url()."index.php/hal_utama/ambil_dataWhere/".$dat['Nomor']; ?>">Edit</a>
                </td>
            </tr>
        <?php } ?>
    
    </table><br>
    <a href="<?php echo base_url()."index.php/hal_utama/baca_form"; ?>">Tambah Alat</a>
    </center><hr>
</body>
</html>
