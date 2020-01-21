<?php
$server="localhost";
$username="root";
$password="";
$database="db_keluarga_berencana";

$koneksi= mysqli_connect($server,$username,$password,$database) or die 
('tidak terkoneksi');
if($koneksi){
	
		$query= "INSERT INTO list_provinsi(id_provinsi,nama_provinsi) VALUES ('$_POST[id_provinsi]', '$_POST[nama_provinsi]')";



		$result=mysqli_query($koneksi,$query);
				if($result)
		{
			echo"<script>alert('Data Berhasil Ditambahkan..'); location.href='listpropinsi.php'</script>";
				}else{
				echo "<script>alert('Proses gagal..'); window.history.go(-1);</script>";
				}
}

?>