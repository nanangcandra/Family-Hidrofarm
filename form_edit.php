<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hydrofarm Update</title>
</head>
<body>
    <?php
        foreach($dataMu as $dat){
    ?>
    <form action="<?php echo base_url()."index.php/hal_admin/update_data/" ?>" method="POST">
        <input type="hidden" name="Nomor" value="<?php echo $dat['Nomor']; ?>">
        Nama Barang: <br><input type="text" name="NamaBarang" value="<?php echo $dat['NamaBarang']; ?>"><br><br>
        Jenis Barang: <br><input type="text" name="JenisBarang" value="<?php echo $dat['JenisBarang']; ?>"><br><br>
        Stok: <br><input type="text" name="Stok" value="<?php echo $dat['Stok']; ?>"><br><br>
        Harga: <br><input type="text" name="Harga" value="<?php echo $dat['Harga']; ?>"><br><br>
        <input type="submit"> <input type="reset">
    </form>
    <?php } ?>
</body>
</html>
