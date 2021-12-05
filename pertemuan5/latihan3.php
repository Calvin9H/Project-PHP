<?php 
$mahasiswa = [
	["Calvin", "682018111", "Sistem Informasi", "calvin9h@gmail.com"],
	["Jack", "682018111", "Sistem Informasi", "calvin9h@gmail.com"]
];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title></title>
 </head>
 <body>
 <h1>Daftar Mahasiswa</h1>
<!-- tintaks ini td bisa untuk array berisi 1 mahasiswa -->

 <ul>
 	<?php foreach($mahasiswa as $mhs) : ?>
 		<li><?php echo $mhs; ?></li>
 	<?php endforeach; ?>


 </ul>
 </body>
 </html>