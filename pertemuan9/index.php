<?php 

require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Halaman Admin</title>

</head>
<body>

<h1>Daftar Mahasiswa</h1>

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
		<a href="">ubah</a> |
		<a href="">hapus</a>	
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

<!-- Menit ke 35:00 -->