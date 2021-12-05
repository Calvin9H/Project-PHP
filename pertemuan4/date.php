<?php 
// Date
// echo date("l, d-M-Y"); 
// Time
// UNIX Timestamp / EPOCH time
// detik yang berlalu sejak 1 Januari 1970
// echo time();
// echo date("d-M-Y", time()+(60*60*24*100));
// mk time
// // membuat sendiri detik
// mk time(0,0,0,0,0,0,0)
// jam,menit,detik,bulan,tanggal, tahun
// echo date("l", mktime(0,0,0,26,11,2000));
echo date("l",strtotime("26,11,2000"));

?>