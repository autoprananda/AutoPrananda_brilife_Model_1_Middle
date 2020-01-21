<?php
$id_kontrasepsi = $_POST ['id_kontrasepsi'];
$nama_kontrasepsi = $_POST ['nama_kontrasepsi'];

$host = "localhost";
$username = "root";
$password = "";
$database = "db_keluarga_berencana";

$koneksi = mysqli_connect($host,$username,$password,$database) or die('Tidak terhubung ke database');
	$query = ("UPDATE list_kontrasepsi SET id_kontrasepsi='$id_kontrasepsi',
	nama_kontrasepsi='$nama_kontrasepsi'
	WHERE id_kontrasepsi='$id_kontrasepsi'");

		$result = mysqli_query ($koneksi,$query);
		
		if($result)
		{
			echo"<script>alert('Data telah diubah'); location.href='listkontrasepsi.php?'</script>";
			
		}else{
			echo "<script>alert('Data gagal diubah'); window.history.go(-1);</script>";
		}
		
?>