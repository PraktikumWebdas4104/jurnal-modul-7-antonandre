<?php
include'koneksi.php';
$search = $_GET['search'];
$qry =  mysqli_query($koneksi, "SELECT nama, nim FROM data_mhs WHERE nim='$search'");
echo "<table border =1> 
			<tr align = 'center'>
							<th>NIM</th>
							<th>NAMA</th>
							<th>ACTION</th>
						</tr>";
  					foreach ($query as $row) {
  						echo"<tr align = 'center'>
							<td>".$row['nim']."</td>
							<td>".$row['nama']."</td>
							<td><a href = 'delete.php?nim=$row[nim]'>Delete</a>
						</tr>";
  					}
?>