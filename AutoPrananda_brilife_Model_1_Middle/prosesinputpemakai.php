<?php
$server="localhost";
$username="root";
$password="";
$database="db_keluarga_berencana";

$koneksi= mysqli_connect($server,$username,$password,$database) or die 
('tidak terkoneksi');
if($koneksi){
	
		$query= "INSERT INTO list_pemakai_kontrasepsi(id_list,id_provinsi,id_kontrasepsi,jumlah_pemakai) VALUES ('$_POST[id_list]', '$_POST[id_provinsi]', '$_POST[id_kontrasepsi]'
		, '$_POST[jumlah_pemakai]')";



		$result=mysqli_query($koneksi,$query);
				if($result)
		{
			echo"<script>alert('Data Berhasil Ditambahkan..'); location.href='listpemakai.php'</script>";
				}else{
				echo "<script>alert('Proses gagal..'); window.history.go(-1);</script>";
				}
}

?>