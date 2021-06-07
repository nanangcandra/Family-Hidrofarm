<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="<?php echo base_url()."index.php/hal_utama/tambah_data/" ?>" method="POST">
        Nama Alat: <br><input type="text" name="Alat"><br><br>
        Fungsi: <br><input type="text" name="Fungsi"><br><br>
        <input type="submit"> <input type="reset">
    </form>
</body>
</html>
