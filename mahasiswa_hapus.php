<?php  
	require_once 'config/koneksi.php';

	if (isset($_GET['nim'])) 
	{
		$nim = $_GET['nim'];

		$sql = mysqli_query($con, "DELETE FROM mahasiswa WHERE nim = '$nim'");

		if ($sql) {
	        echo "<script>
	                alert('Data Berhasil Dihapus!');
	                window.location.href = 'mahasiswa.php';
	            </script>";
	    }else{
	        echo "<script>
	                alert('Terjadi Kesahalan!');
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