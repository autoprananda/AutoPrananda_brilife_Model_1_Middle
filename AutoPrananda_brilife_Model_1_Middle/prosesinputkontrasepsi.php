<?php
$server="localhost";
$username="root";
$password="";
$database="db_keluarga_berencana";

$koneksi= mysqli_connect($server,$username,$password,$database) or die 
('tidak terkoneksi');
if($koneksi){
	
		$query= "INSERT INTO list_kontrasepsi(id_kontrasepsi,nama_kontrasepsi) VALUES ('$_POST[id_kontrasepsi]', '$_POST[nama_kontrasepsi]')";



		$result=mysqli_query($koneksi,$query);
				if($result)
		{
			echo"<script>alert('Data Berhasil Ditambahkan..'); location.href='listkontrasepsi.php'</script>";
				}else{
				echo "<script>alert('Proses gagal..'); window.history.go(-1);</script>";
				}
}

?>