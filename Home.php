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
    <p>Family Hidrofarm adalah toko online hidroponik yang menjual berbagai macam tanaman hidroponik, mulai dari menjual bibit atau benih dan perlengkapan-perlengkapan lain seperti alat atau media hidroponik.Tanaman hidroponik termasuk tanaman dengan memanfaatkan air sebagai media tumbuhnya dengan menekankan pada pemenuhan kebutuhan nutrisi bagi tanaman.Beli aneka produk di Toko online FAMILY HIDROFARM secara online sekarang. Kamu juga bisa beli produk dari Toko FAMILY HIDROFARM dengan aman & mudah. Beli aneka produk terbaru di Toko FAMILY HIDROFARM dengan mudah dari genggaman tangan Anda. Kami menjual dengan harga murah & lengkap di toko online FAMILY HIDROFARM. Cek terus juga Toko FAMILY HIDROFARM untuk update produk secara online<br><br>
    <div class="video">
        <video controls>
            <source src="hidroponik.mp4" type="video/mp4" />
            maaf Kuota anda habis
            
        </video>
        <marquee>
            <p>judul: <a href="https://www.youtube.com/watch?v=9l-ti-tT9xw">Belajar Menanam Tanaman Hidroponik</a></p>
        </marquee>
    </div>
    
    <center>
    <table border="1">
    <hr>Perlengkapan Barang<hr>
        <tr>
            <td>Nama Barang</td>
            <td>Jenis Barang</td>
            <td>Stok</td>
            <td>Harga</td>
            <td>Aksi</td>
        </tr>

        <?php
             foreach($dataMu as $dat){
        ?>
            <tr>
                <td><?php echo $dat['NamaBarang']; ?></td>
                <td><?php echo $dat['JenisBarang']; ?></td>
                <td><?php echo $dat['Stok']; ?></td>
                <td><?php echo $dat['Harga']; ?></td>
                <td>
                    <a href="<?php echo base_url()."index.php/hal_admin/hapus_data/".$dat['Nomor']; ?>">Delete</a> | 
                    <a href="<?php echo base_url()."index.php/hal_admin/ambil_dataWhere/".$dat['Nomor']; ?>">Edit</a>
                </td>
            </tr>
        <?php } ?>
    
    </table><br>
    <a href="<?php echo base_url()."index.php/hal_admin/baca_form"; ?>">Tambah Barang</a>
    </center><hr>
    <a href="<?php echo base_url()."index.php/hal_utama/logout/"; ?>">Logout</a>
</body>
</html>
