<?php 
session_start();

if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}


require 'function.php';

$mahasiswa = query("SELECT * FROM mahasiswa");


// tombol cari ditekan
if (isset($_POST["cari"])) {
	$mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Halaman Admin</title>

</head>
<body>
	<a href="logout.php">Logout</a>

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php"> Tambah data mahasiswa</a>
<br><br>

<form action="" method="post">

<input type="text" name="keyword" size="40" autofocus placeholder="masukan keyword pencarian.." autocomplete="off">
<button type="submit" name="cari">Cari!</button>

</form>

<table border="1" cellpadding="10" cellspacing="0">
	

	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>NRP</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Jurusan</th>
	</tr>

<tr>
<?php $i = 1; ?>
	<?php foreach ($mahasiswa as $row) :
	 ?>

	<td><?php echo$i; ?></td>
	<td>
		<a href="ubah.php?id=<?php echo$row["id"];?>">ubah</a> |
		<a href="hapus.php?id=<?php echo$row["id"];?>" onclick="return confirm('yakin?');">hapus</a>	
	</td>
	<td><img src="img/<?php echo$row["gambar"]; ?>" width="50"></td>
	<td><?php echo$row["nrp"]; ?></td>
	<td><?php echo$row["nama"]; ?></td>
	<td><?php echo$row["email"]; ?></td>
	<td><?php echo$row["jurusan"]; ?></td>

</tr>
<?php $i++; ?>
<?php endforeach;
 ?>
</table>

</body>
</html>


<!-- belajar java script dengam dom dlu. Kalo sdh, lanjut menit ke 11:43 -->