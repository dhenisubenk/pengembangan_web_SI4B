<?php 
    session_start(); 
    require_once 'config/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body{
                background-color: rgb(245, 246, 246);
            }
        </style>
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-5 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <strong>Login Page</strong>
                        </div>
                        <div class="card-body">
                            <?php  
                                if (isset($_POST['login'])) 
                                {
                                    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
                                    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

                                    if (empty($username) || empty($password)) {
                                        echo '<div class="text-danger">Username / Password Kosong!</div>';
                                    }else
                                    {
                                        # cek username
                                        $sql = mysqli_query($con, "SELECT * FROM user WHERE username = '$username'");
                                        $jml = mysqli_num_rows($sql);

                                        if ($jml > 0) {
                                            # username ada...
                                            $r = mysqli_fetch_array($sql);
                                            if (password_verify($password, $r['password'])) {
                                                # true...
                                                # buat session
                                                $_SESSION['websi4b_user'] = $r['username'];
                                                $_SESSION['websi4b_level'] = $r['level'];
                                                echo "<meta http-equiv='refresh' content='0; url=index.php'>";
                                                //echo '<div class="text-success">Password Benar!</div>';
                                            }else{
                                                # false ..
                                                echo '<div class="text-danger">Password Salah!</div>';
                                            }
                                            # cek password
                                        }else{
                                            # username tidak ada..
                                            echo '<div class="text-danger">Username Salah!</div>';
                                        }
                                    }
                                }
                            ?>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" name="username" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                                <div class="form-group mt-2">
                                    <button class="btn btn-primary" name="login">Login</button>
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