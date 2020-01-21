<?php
$id_list = $_POST ['id_list'];
$id_provinsi = $_POST ['id_provinsi'];
$id_kontrasepsi = $_POST ['id_kontrasepsi'];
$jumlah_pemakai = $_POST ['jumlah_pemakai'];

$host = "localhost";
$username = "root";
$password = "";
$database = "db_keluarga_berencana";

$koneksi = mysqli_connect($host,$username,$password,$database) or die('Tidak terhubung ke database');
	$query = ("UPDATE list_pemakai_kontrasepsi SET 
	id_list='$id_list',
	id_provinsi='$id_provinsi',
	id_kontrasepsi='$id_kontrasepsi',
	jumlah_pemakai='$jumlah_pemakai'
	WHERE id_list='$id_list'");

		$result = mysqli_query ($koneksi,$query);
		
		if($result)
		{
			echo"<script>alert('Data telah diubah'); location.href='listpemakai.php?'</script>";
			
		}else{
			echo "<script>alert('Data gagal diubah'); window.history.go(-1);</script>";
		}
		
?>