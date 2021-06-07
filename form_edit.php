<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        foreach($dataMu as $dat){
    ?>
    <form action="<?php echo base_url()."index.php/hal_utama/update_data/" ?>" method="POST">
        <input type="hidden" name="Nomor" value="<?php echo $dat['Nomor']; ?>">
        Nama Alat: <br><input type="text" name="Alat" value="<?php echo $dat['Alat']; ?>"><br><br>
        Fungsi: <br><input type="text" name="Fungsi" value="<?php echo $dat['Fungsi']; ?>"><br><br>
        <input type="submit"> <input type="reset">
    </form>
    <?php } ?>
</body>
</html>
