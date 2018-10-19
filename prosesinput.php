<?php

$host = "localhost";
$root = "root";
$pass = "";
$database = "mahasiswa";
$conn = new mysqli($host, $root, $pass, $database);

if (isset($_POST['kirim'])) {
	$nim1 = $_POST['nim'];
	$nama1 = $_POST['nama'];
	$jk1 = $_POST['jk'];
	$prodi1 = $_POST['prodi'];
	$fak1 =$_POST['fak'];
	$asal1 = $_POST['asal'];
	$motto1 = $_POST['moto'];

	$qry = $conn->query("INSERT INTO data_mhs VALUES ('$nim1','$nama1', '$jk1','$prodi1', '$fak1', '$asal1', '$motto1')");
				if ($qry) {
					header("location: menuawal.php");
					echo "Regristrasi Telah Berhasil.";
				}else{
				echo "Regristrasi Gagal";
				}
}
?>