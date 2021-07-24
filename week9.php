<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kontak</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body{
                background-color: rgb(245, 246, 246);
            }
        </style>
    </head>
    <body>
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-xl-12">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
                        <div class="container">
                          <a class="navbar-brand" href="#">STIKOMAMBON</a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                              <a class="nav-link" aria-current="page" href="index.html">Home</a>
                              <a class="nav-link" href="profil.html">Profil</a>
                              <a class="nav-link active" href="kontak.html">Kontak</a>
                            </div>
                          </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            Kontak Kami
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Tahun Lahir</label>
                                    <input type="text" name="tl" class="form-control">
                                </div>
                                <div class="form-group mt-2">
                                    <button class="btn btn-primary" name="cetak">Cetak</button>
                                </div>
                            </form>
                            <?php
                                if(isset($_POST['cetak']))
                                {
                                    $nama = $_POST['nama'];
                                    $tahun_lahir = $_POST['tl'];
                                
                                    echo "$nama <br> $tahun_lahir";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>