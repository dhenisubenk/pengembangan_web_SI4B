<?php  
    session_start();
    if (empty($_SESSION['websi4b_user'])) {
        echo "<script>
                alert('Silahkan login terlebih dahulu!');
                window.location.href = 'login.php';
            </script>";
    }
    else
    {
        $user = $_SESSION['websi4b_user'];
        $level = $_SESSION['websi4b_level'];

        if ($level == "Admin") {
?>
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
                    <?php require_once 'config/menu.php'; ?>
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
                                        <option>Komputerisasi Akuntansi</option>
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
                                                        <a href='mahasiswa_edit.php?nim=$r[nim]' class='btn btn-sm btn-warning'>Edit</a>
                                                        <a href='mahasiswa_hapus.php?nim=$r[nim]' onclick=\"return confirm('Hapus Data?')\" class='btn btn-sm btn-danger'>Hapus</a>
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
<?php 
        } 
    } 
?>