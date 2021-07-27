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
                <div class="col-lg-12 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            Master Mahasiswa
                        </div>
                        <div class="card-body">
                            <form action="simpan_mahasiswa.php" method="POST">
                                <div class="form-group">
                                    <label for="">NIM</label>
                                    <input type="text" name="nim" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Jurusan</label>
                                    <select name="jurusan" class="form-control">
                                        <option>Sistem Informasi</option>
                                        <option>Teknik Informatika</option>
                                        <option>Manajemen Informatika</option>
                                        <option>Komputerisasi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <select name="jk" class="form-control">
                                        <option>Laki-laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" required>
                                </div>
                                <div class="form-group mt-2">
                                    <button class="btn btn-primary" name="cetak">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <div class="card mt-2">
                        <div class="card-header">Data Mahasiswa</div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Jurusan</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        require_once 'config/koneksi.php';
                                        $sql = mysqli_query($con, "SELECT * FROM mahasiswa");
                                        while ($r = mysqli_fetch_array($sql)) {
                    
                                            echo "<tr>
                                                    <td>$r[nim]</td>
                                                    <td>$r[nama]</td>
                                                    <td>$r[jurusan]</td>
                                                    <td>$r[jk]</td>
                                                    <td>$r[alamat]</td>
                                                    <td>
                                                        <a href='#' class='btn btn-sm btn-warning'>Edit</a>
                                                        <a href='#' class='btn btn-sm btn-danger'>Hapus</a>
                                                    </td>
                                                </tr>";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>