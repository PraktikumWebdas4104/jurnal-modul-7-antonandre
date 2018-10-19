<h1><marquee>SELAMAT DATANG HALAMAN AWAL</marquee></h1>

<form method="POST">
	Cari(NIM):<input type="text" name="search">
	<input type="submit" name="cari">
</form>
<?php
include'koneksi.php';
	$query = mysqli_query($koneksi, "SELECT * FROM data_mhs");
	
	echo "<table border =1> 
			<tr align = 'center'>
							<th>NIM</th>
							<th>NAMA</th>
							<th>JENIS KELAMIN</th>
							<th>PROGRAM STUDI</th>
							<th>FAKULTAS</th>
							<th>ASAL</th>
							<th>MOTTO HIDUP</th>
							<th>ACTION</th>
						</tr>";
  					foreach ($query as $row) {
  						echo"<tr align = 'center'>
							<td>".$row['nim']."</td>
							<td>".$row['nama']."</td>
							<td>".$row['jk']."</td>
							<td>".$row['prodi']."</td>
							<td>".$row['fakultas']."</td>
							<td>".$row['asal']."</td>
							<td>".$row['motto']."</td>
							<td><a href = 'delete.php?nim=$row[nim]'>Delete</a>
						</tr>";
  					}
  	if (isset($_POST['cari'])) {
  		$search = $_POST['search'];
  		if ($search == $row['nim']) {
  			echo "Lihat< a href = 'cari.php?search=$row[nim]'>Data<a>";
  		}
  	}else{
  		echo "RA KETEMU";
  	}
?>
