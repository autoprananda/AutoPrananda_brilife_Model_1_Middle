<?php
	$id_list = $_GET['id_list'];
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
				$query="delete from list_pemakai_kontrasepsi where id_list ='$id_list'";
				$result=mysqli_query($conn,$query);
				if($query){
				echo"<script>alert('Data Berita Berhasil Dihapus..'); location.href='listpemakai.php?'</script>";
				}else{
				echo "<script>alert('Proses gagal..'); window.history.go(-1);</script>";
				}
				}



?>