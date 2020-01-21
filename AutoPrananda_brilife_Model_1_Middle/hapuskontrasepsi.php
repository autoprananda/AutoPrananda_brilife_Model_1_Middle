<?php
	$id_kontrasepsi = $_GET['id_kontrasepsi'];
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
				$query="delete from list_kontrasepsi where id_kontrasepsi ='$id_kontrasepsi'";
				$result=mysqli_query($conn,$query);
				if($query){
				echo"<script>alert('Data Berita Berhasil Dihapus..'); location.href='listkontrasepsi.php?'</script>";
				}else{
				echo "<script>alert('Proses gagal..'); window.history.go(-1);</script>";
				}
				}



?>