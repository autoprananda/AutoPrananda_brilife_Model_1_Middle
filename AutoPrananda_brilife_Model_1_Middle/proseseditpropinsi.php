<?php
$id_provinsi = $_POST ['id_provinsi'];
$nama_provinsi = $_POST ['nama_provinsi'];

$host = "localhost";
$username = "root";
$password = "";
$database = "db_keluarga_berencana";

$koneksi = mysqli_connect($host,$username,$password,$database) or die('Tidak terhubung ke database');
	$query = ("UPDATE list_provinsi SET id_provinsi='$id_provinsi',
	nama_provinsi='$nama_provinsi'
	WHERE id_provinsi='$id_provinsi'");

		$result = mysqli_query ($koneksi,$query);
		
		if($result)
		{
			echo"<script>alert('Data telah diubah'); location.href='listpropinsi.php?'</script>";
			
		}else{
			echo "<script>alert('Data gagal diubah'); window.history.go(-1);</script>";
		}
		
?>