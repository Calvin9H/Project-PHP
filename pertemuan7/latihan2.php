

<?php 
// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) ||
 	!isset($_GET["nrp"]) ||
 	!isset($_GET["email"]) ||
 	!isset($_GET["jurusan"])) {
// redirect
	header("Location: latihan1.php");
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Detail Mahasiswa</title>
</head>
<body>


<ul>
	<li><?= $_GET["nama"]; ?></li>
	<li><?= $_GET["nrp"]; ?></li>
	<li><?= $_GET["email"]; ?></li>
	<li><?= $_GET["jurusan"]; ?></li>
</ul>
 <a href="latihan1.php">Kembali ke daftar mahasiswa</a>


</body>
</html>

<!-- lanjut di 32:30 -->