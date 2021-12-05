<?php 
session_start();

if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}


require 'function.php';

// pagination
// konfigurasi
$jumlahDataPerHalaman = 2;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);

// sintax ternari pengganti if else untuk mempersingkat codingan
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;
// $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");


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
<br><br>
<!-- navigasi -->
<!-- menampilkan tombol next dan back -->
<?php if ( $halamanAktif > 1) : ?>
<a href="?halaman=<?php echo $halamanAktif-1; ?>">&laquo;</a>
<?php endif; ?>
<!-- sintax laquo diatas berfungsi sebagai simbol untuk mundur 1  halaman -->
<?php for( $i = 1; $i <= $jumlahHalaman; $i++) : ?>

	<!-- memberikan visual feedback pada user indikasi halaman yang sedang dilihat -->

	<?php if ( $i == $halamanAktif) :  ?>
	<a href="?halaman=<?php echo $i; ?>" style="font-weight: bold; color: red;"><?php echo $i; ?></a>
<?php else : ?>
	<a href="?halaman=<?= $i;?>"><?php echo $i; ?></a>
<?php endif; ?>

<?php endfor; ?>

<?php if ( $halamanAktif < $jumlahHalaman) : ?>
<a href="?halaman=<?php echo $halamanAktif+1; ?>">&raquo;</a>
<?php endif; ?>
<!-- sintax raquo diatas berfungsi sebagai simbol untuk maju 1  halaman -->




<br>


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


<!-- disuruh buat pagination yang menyesuaikan dengan fitur search (karna kalo ditekan sedikit bug) -->