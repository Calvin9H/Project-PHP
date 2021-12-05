<!-- 
<?php 
$mahasiswa = [
	["Calvin", "682018111", "Sistem Informasi", "calvin9h@gmail.com"],
	["Jack", "682018111", "Sistem Informasi", "calvin9h@gmail.com"]
];
?> 
-->

<!--  Array Associative
 defeneisi yang sama seperti array numerik, kecuali key-nya adalah string yang kita buat sendiri -->

<?php 
 $mahasiswa = 	[
 			[
 				"nama" 		=> "Calvin",
  				"nrp" 		=> "682018111",
   				"email"		=> "calvin9h@gmail.com",
  				"jurusan" 	=> "Sistem Informasi",
  				// "gambar"	=> "calvin.img"
			],
			[
 				"nama" 		=> "Jack",
  				"nrp" 		=> "682018111",
   				"email"		=> "calvin9h@gmail.com",
  				"jurusan" 	=> "Sistem Informasi",
  				// "gambar"	=> "calvin.img"
			]
];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Daftar Mahasiswa</title>
 </head>
 <body>
  	<h1>Daftar Mahasiswa</h1>
 	<?php foreach($mahasiswa as $mhs) :?>
 	<ul>
<!--  		<li>
 			<img src="img/<?php $mhs["gambar"]; ?>">
 		</li> 
 -->
 		<li>Nama	: <?php echo $mhs["nama"]; ?></li>
 		<li>NIM		: <?php echo $mhs["nrp"]; ?></li>
 		<li>Email	: <?php echo $mhs["email"]; ?></li>
 		<li>Jurusan	: <?php echo $mhs["jurusan"]; ?></li>

<!-- 
coba tambahin foto profil, tambahin folder img, perhatikan nama, dan format file ( capek, malas sy =_=)


 -->



 	</ul>
 <?php endforeach ?>
 </body>
 </html>