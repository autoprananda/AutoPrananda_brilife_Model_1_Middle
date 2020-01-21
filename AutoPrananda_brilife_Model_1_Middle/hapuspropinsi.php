<?php
	$id_provinsi = $_GET['id_provinsi'];
    $host="localhost";
    $username="root";
    $passwords="";
    $database="db_keluarga_berencana";
// Create connection
$conn = mysqli_connect($host, $username, $passwords, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
  //echo "sukses";
}
if($conn)
				{
				$query="delete from list_provinsi where id_provinsi ='$id_provinsi'";
				$result=mysqli_query($conn,$query);
				if($query){
				echo"<script>alert('Data Berita Berhasil Dihapus..'); location.href='listpropinsi.php?'</script>";
				}else{
				echo "<script>alert('Proses gagal..'); window.history.go(-1);</script>";
				}
				}



?>