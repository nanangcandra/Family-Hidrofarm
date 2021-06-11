<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="<?php echo base_url()."index.php/hal_admin/tambah_data/"; ?>" method="POST">
        Nama Barang: <br><input type="text" name="NamaBarang"><br><br>
        Jenis Barang: <br><input type="text" name="JenisBarang"><br><br>
        Stok: <br><input type="text" name="Stok"><br><br>
        Harga: <br><input type="text" name="Harga"><br><br>
        <input type="submit"> <input type="reset">
    </form>
</body>
</html>
