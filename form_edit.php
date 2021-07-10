<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edit Barang - Family Hidrofarm</title>
        <link href="<?php echo base_url()."assets/css/styles.css" ?>" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
    <?php
        foreach($dataMu as $dat){
    ?>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Barang Penjualan</h3></div>
                                    <div class="card-body">
                                        <form action="<?php echo base_url()."index.php/hal_admin/update_data/" ?>" method="POST">
                                        <div class="row mb-3">
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="hidden" name="Nomor" value="<?php echo $dat['Nomor']; ?>">
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="NamaBarang" value="<?php echo $dat['NamaBarang']; ?>">
                                                <label>Nama Barang</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" type="text" name="JenisBarang" value="<?php echo $dat['JenisBarang']; ?>">
                                                    <label>Kategori</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" type="text" name="Volume" value="<?php echo $dat['Volume']; ?>">
                                                    <label>Volume</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" type="text" name="Harga" value="<?php echo $dat['Harga']; ?>">
                                                    <label>Harga</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" type="text" name="Stok" value="<?php echo $dat['Stok']; ?>">
                                                    <label>Stok</label>
                                                </div>
                                            </div>
                                            <div>
                                                <input type="submit" value="Update" class="btn btn-primary btn-block"> <input type="reset" class="btn btn-primary btn-block">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="<?php echo base_url()."index.php/hal_admin/"; ?>">Kembali Ke Menu</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url()."assets/js/scripts.js" ?>"></script>
    <?php } ?>
    </body>
</html>
