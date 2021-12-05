<?php 
//array
//variabel yang dapat memiliki  banyak nilai
// membuat array
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari nol // 

//cara lama
//elemen pada array boleh memiliki tipe data yang berbeda
$hari = array("Senin", "Selasa", "Rabu");

// cara baru
$bulan = ["Januari","Febuari", "Maret"];
$array1 = [1234, "tulisan", false];

// cara menampilkan array
// var_dump() / print_r()

// var_dump($hari);
// echo "<br>";
// print_r(($bulan));

//menampilkan 1 elemen pada array
echo "$array1[0]";


//menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
echo "<br>";
var_dump($hari);
 ?>