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
        <meta name="keyword" content="web,stikom,ambon">
        <meta name="author" content="Shubhan R">
        <meta name="description" content="Dokument HTML Pertama Saya">
        <!-- <meta http-equiv="refresh" content="60"> -->
        <title>Pengembangan Web | WEEK 3</title>
        <!-- <link rel="stylesheet" href="style.css"> -->
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
                <div class="col-lg-4">
                    <div class="card p-3">
                        <div class="card-body">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum, similique! Inventore vitae, exercitationem nostrum rem ipsa ducimus voluptate nesciunt consectetur esse provident quis eius consequatur iste, doloribus quia omnis dolores.

                            <address>
                                Jl. AY Patty, Ambon <br>
                                Maluku
                            </address>
                            <hr>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalLogin">
                                Launch demo modal
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card p-3">
                        <div class="card-body">
                            <h1>Pemrograman Web</h1>
                            <p class="text-success">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque adipisci pariatur impedit eveniet earum eius perspiciatis voluptate odio sit autem incidunt accusamus error odit omnis libero, voluptas blanditiis mollitia tempore! Coca&nbsp;Cola</p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit illum nesciunt vero fugiat itaque eum. Quia vitae possimus consequuntur nostrum nobis voluptates alias nesciunt? Ab aut cum ex repudiandae ipsa!
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
        <!-- Modal -->
        <div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group row">
                            <label for="" class="col-3">Username</label>
                            <div class="col-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="" class="col-3">Password</label>
                            <div class="col-9">
                                <input type="password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <div class="col-9 offset-3">
                                <button type="submit" class="btn btn-primary">Login</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
  
        
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>
<?php 
    }
?>