<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "web_si4b";

    $con = mysqli_connect($host,$user,$pass,$db);

    if (mysqli_connect_errno()) {
        echo "Koneksi Gagal : ". mysqli_connect_error();
    }

?>