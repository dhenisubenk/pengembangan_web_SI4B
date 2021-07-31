<?php
    require_once 'config/koneksi.php';

    $nim = filter_var($_POST['nim'], FILTER_SANITIZE_STRING);
    $nama = filter_var($_POST['nama'], FILTER_SANITIZE_STRING);
    $jurusan = filter_var($_POST['jurusan'], FILTER_SANITIZE_STRING);
    $jk = filter_var($_POST['jk'], FILTER_SANITIZE_STRING);
    $alamat = htmlspecialchars($_POST['alamat']);

    //cek kosong
    if (empty($nim) || empty($nama) || empty($alamat)) {
            echo "<script>
                    alert('Data Tidak Boleh Kosong!');
                    window.location.href = 'mahasiswa.php';
                </script>";
    }else{
        //simpan
        $update = mysqli_query($con, "UPDATE mahasiswa SET nama = '$nama', jurusan = '$jurusan', jk = '$jk', alamat = '$alamat' WHERE nim = '$nim'");

        if ($update) {
            echo "<script>
                    alert('Data Berhasil Diubah!');
                    window.location.href = 'mahasiswa.php';
                </script>";
        }else{
            echo "<script>
                    alert('Terjadi Kesahalan!');
                    window.location.href = 'mahasiswa.php';
                </script>";
        }
        
    }

?>