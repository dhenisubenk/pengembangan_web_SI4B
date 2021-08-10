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
                            Master User
                        </div>
                        <div class="card-body">
                            <form action="user_simpan.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" name="username" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="text" name="password" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Level</label>
                                    <select name="level" class="form-control">
                                        <option>Admin</option>
                                        <option>User</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Foto</label>
                                    <input type="file" name="foto" class="form-control" required>
                                </div>
                                <div class="form-group mt-2">
                                    <button class="btn btn-primary" name="cetak">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <div class="card mt-2">
                        <div class="card-header">Data User</div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>Level</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  
                                        $no = 1;
                                        require_once 'config/koneksi.php';
                                        $sql = mysqli_query($con, "SELECT * FROM user");
                                        while ($r = mysqli_fetch_array($sql)) 
                                        {
                                            echo "<tr>
                                                    <td>$no</td>
                                                    <td><img src='img/user/$r[foto]' width='75' class='img-thumbnail'></td>
                                                    <td>$r[username]</td>
                                                    <td>$r[level]</td>
                                                    <td>
                                                        <a class='btn btn-sm btn-warning'>Edit</a>
                                                        <a class='btn btn-sm btn-danger'>Hapus</a>
                                                    </td>
                                            </tr>";
                                            $no++;
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
<?php } ?>