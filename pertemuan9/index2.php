<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "","phpdasar");

// ambila data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");var_dump($result);
// ambil data (fetch) dari object result
// mysqli_fetch_row()
// mysqli_fetch_assoc()
// mysqli_fetch_array()
// mysqli_fetch_object()

// while ($mhs = mysqli_fetch_assoc($result) ) {
// var_dump($mhs);
// }
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
	<?php while ( $row = mysqli_fetch_assoc($result)) : 
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
<?php endwhile;
 ?>
</table>

</body>
</html>

<!-- Menit ke 35:00 -->