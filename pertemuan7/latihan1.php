<!-- <?php 
// Variabel Scope / lingkup variabel
$x = 10;


// function tampilX() {
//  GLOBAL $x;
//  echo $x;
// }

// tampilX();
// echo "<br>";


 ?> -->

 <!-- <?php 
// // SUPERGLOBALS
//  variable global milik PHP
//  merupakan Array Assisiative
//  echo $_SERVER["SERVERNAME"];
  ?> -->

<?php 
// GET

// $_GET["nama"] = "Calvin";
// $_GET["nim"] = "682018111";
// var_dump($_GET);


 ?>


<?php 
 $mahasiswa =   [
      [
        "nama"    => "Calvin",
          "nrp"     => "682018111",
          "email"   => "calvin9h@gmail.com",
          "jurusan"   => "Sistem Informasi",
          // "gambar" => "calvin.img"
      ],
      [
        "nama"    => "Jack",
          "nrp"     => "682018111",
          "email"   => "calvin9h@gmail.com",
          "jurusan"   => "Sistem Informasi",
          // "gambar" => "calvin.img"
      ]
];
?>





 <!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
  <title>GET</title>
 </head>
 <body>

<h1>Daftar Mahasiswa</h1>

<ul>
<?php foreach( $mahasiswa as $mhs) : ?>
  <li>
  <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>"><?= $mhs["nama"]; ?></a>
</li>
<?php endforeach; ?>

</body>
</html>


<!-- lanjut di 32:30 -->
