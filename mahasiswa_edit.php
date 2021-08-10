<?php  
    require_once 'config/koneksi.php';

    if (isset($_GET['nim'])) 
    {
        $nim = $_GET['nim'];
        $sql = mysqli_query($con, "SELECT * FROM mahasiswa WHERE nim = '$nim'");
        $jml = mysqli_num_rows($sql);   // mengembalikan jml row/baris dari hasil queri

        if($jml > 0){
            $r = mysqli_fetch_array($sql);
        }else{
             echo "<script>
                alert('Data tidak ditemukan');
                window.location.href = 'mahasiswa.php';
            </script>";
        }
        
    }
    else
    {
        echo "<script>
                window.location.href = 'mahasiswa.php';
            </script>";
    }
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
                            <strong>Edit Data Mahasiswa</strong>
                        </div>
                        <div class="card-body">
                            <form action="update_mahasiswa.php" method="POST">
                                <div class="form-group">
                                    <label for="">NIM</label>
                                    <input type="text" name="nim" value="<?= $r['nim']; ?>" class="form-control" readonly="" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" value="<?= $r['nama']; ?>" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Jurusan</label>
                                    <select name="jurusan" class="form-control">
                                        <option <?php if($r['jurusan'] == "Sistem Informasi"){ echo "selected"; } ?> >Sistem Informasi</option>
                                        <option <?php if($r['jurusan'] == "Teknik Informatika"){ echo "selected"; } ?>>Teknik Informatika</option>
                                        <option <?php if($r['jurusan'] == "Manajemen Informatika"){ echo "selected"; } ?>>Manajemen Informatika</option>
                                        <option <?php if($r['jurusan'] == "Komputerisasi Akuntansi"){ echo "selected"; } ?>>Komputerisasi Akuntansi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <select name="jk" class="form-control">
                                        <option <?php if($r['jk'] == "Laki-laki"){ echo "selected"; } ?>>Laki-laki</option>
                                        <option <?php if($r['jk'] == "Perempuan"){ echo "selected"; } ?>>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" value="<?= $r['alamat']; ?>" class="form-control" required>
                                </div>
                                <div class="form-group mt-2">
                                    <button class="btn btn-primary" name="cetak">Update</button>
                                    <a href="mahasiswa.php" class="btn btn-secondary">Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>