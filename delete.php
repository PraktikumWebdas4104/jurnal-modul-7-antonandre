<?php
include 'koneksi.php';
$nim1 = $_GET['nim'];

	 $sql = mysqli_query($koneksi, "DELETE FROM data_mhs WHERE nim='$nim1'");
		 if($sql){
		 echo "DATA ANDA TELAH DIHAPUS"."<br>";
		 echo "<button name='kirim'><a href='menuawal.php'>Lihat Data</a></button>";
		 }
?>