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
                            Hitung BMI
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <select name="jk" class="form-control">
                                        <option>Laki-laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Tahun Lahir</label>
                                    <input type="text" name="tl" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Tinggi Badan (m)</label>
                                    <input type="text" name="tb" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Berat Badan (Kg)</label>
                                    <input type="text" name="bb" class="form-control">
                                </div>
                                <div class="form-group mt-2">
                                    <button class="btn btn-primary" name="cetak">Hitung</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php
                        if(isset($_POST['cetak']))
                        {
                            $nama = $_POST['nama'];
                            $tahun_lahir = $_POST['tl'];
                            $jk = $_POST['jk'];
                            $bb = $_POST['bb'];
                            $tb = $_POST['tb'];
                            $kategori = "";
                            $bmi = round($bb / ($tb * $tb));

                            if ($jk == "Perempuan") {
                                # perempuan
                                if ($bmi >= 27) {
                                    $kategori = "Obesitas";
                                }else if ($bmi >= 25) {
                                    $kategori = "Gemuk";
                                }else if ($bmi >= 18) {
                                    $kategori = "Normal";
                                }else {
                                    $kategori = "Kurus";
                                }
                            }
                            else
                            {
                                # laki2
                                if ($bmi >= 27) {
                                    $kategori = "Obesitas";
                                }else if ($bmi >= 23) {
                                    $kategori = "Gemuk";
                                }else if ($bmi >= 17) {
                                    $kategori = "Normal";
                                }else {
                                    $kategori = "Kurus";
                                }
                            }
                            
                    ?>
                    <div class="card mt-2">
                        <div class="card-header">Hasil</div>
                        <div class="card-body">
                            <table class="table table-borderless">
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td><?= $nama ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td><?= $jk ?></td>
                                </tr>
                                <tr>
                                    <td>Umur</td>
                                    <td>:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>BMI</td>
                                    <td>:</td>
                                    <td><?= $bmi ?></td>
                                </tr>
                                <tr>
                                    <td>Kategori</td>
                                    <td>:</td>
                                    <td><?= $kategori ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
        </div>

        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>