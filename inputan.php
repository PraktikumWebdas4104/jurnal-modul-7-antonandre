<body bgcolor="#a55454">
<form method="POST">
	<h1><marquee>SELAMAT DATANG DI MENU REGRISTRASI</marquee></h1>
	<table align="center" style=" background-color: #f2c6c6; border: 4px solid; border-radius: 8px; height: 150px; width: 700px;padding: 10px 20px ">
		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><input type="number" name="nim" length = "10" placeholder="Maksimal 10 Karakter"></td>
		</tr>

		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" length ="35" placeholder="Maksimal 35 Karakter"></td>
		</tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<input type="radio" name="jk" value="Laki-laki">Laki-Laki
				<input type="radio" name="jk" value="Perempuan">Perempuan
			</td>
		</tr>

		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td><select name="prodi">
				<option value="0">Pilih Program Studi</option>
				<option value="D3 - SISTEM INFORMASI">D3 - SISTEM INFORMASI</option>
				<option value="S1 - TEKNIK FISIKA">S1 - TEKNIK FISIKA</option>
				<option value="S1 -  MBTI">S1 -  MBTI</option>
			</select>
			</td>
		</tr>


		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fak">
				<option value="0">Pilih Fakultas</option>
				<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
				<option value="Fakultas Teknik Elektro">Fakultas Teknik Elektro</option>
				<option value="Fakultas Ekonomi Bisnis">Fakultas Ekonomi Bisnis</option>
			</select>
			</td>
		</tr>

		<tr>
			<td>Asal</td>
			<td>:</td>
			<td><input type="text" name="asal"></td>
		</tr>

		<tr>
			<td>Motto Hidup</td>
			<td>:</td>
			<td><textarea name="moto"></textarea></td>
		</tr>

		<tr>
			<td colspan=3 align="center"><input type="submit" name="kirim" value="SIGN UP" style="width:80px; height:40px " ></td>
		</tr>
	</table>
</form>
</body>
<?php
	if (isset($_POST['kirim'])) {
		include('prosesinput.php');
	}
?>