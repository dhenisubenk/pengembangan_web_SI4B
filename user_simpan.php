<?php  
	require_once 'config/koneksi.php';

	$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
	$pass = filter_var($_POST['password'], FILTER_SANITIZE_STRING); //admin
	$level = filter_var($_POST['level'], FILTER_SANITIZE_STRING);
	// 2 arah -> encrypt -> decrypt
	// 1 arah -> hash
	$password = password_hash($pass, PASSWORD_DEFAULT); //234huiy7a8st9842437928y1923h

	$nama_file = $_FILES['foto']['name'];		//Gambar.PNG
	$tipe_file = $_FILES['foto']['type'];		
	$tmp_file = $_FILES['foto']['tmp_name'];
	$size_file = $_FILES['foto']['size']; // byte

	//cek tipe file
	$step1 = strtolower($nama_file);	// gambar.png
	$step2 = explode(".", $step1);		// ["gambar","png"]
	$tipe = end($step2);				// png

	//cek tipe file
	if ($tipe != "png" && $tipe != "jpg" && $tipe != "jpeg") 
	{
		echo "<script>
                    alert('File tidak support!');
                    window.location.href = 'user.php';
                </script>";
	}
	else if ($size_file > 2000000) // cek ukuran file
	{
		echo "<script>
                    alert('File tidak boleh lebih > 1MB!');
                    window.location.href = 'user.php';
                </script>";
	}
	else
	{
		//simpan
		$simpan = mysqli_query($con, "INSERT INTO user (username, password, level, foto) VALUES ('$username','$password','$level','$nama_file')");

		if ($simpan) {
			move_uploaded_file($tmp_file, "img/user/".$nama_file);
            echo "<script>
                    alert('Data Berhasil Ditambahkan!');
                    window.location.href = 'user.php';
                </script>";
        }else{
            echo "<script>
                    alert('Terjadi Kesahalan!');
                    window.location.href = 'user.php';
                </script>";
        }
	}

	// validasi file -> tipe file, ukuran file
	// nama file -> simpan di db
	// fisik file -> copy ke dir web 

?>