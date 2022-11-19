<?php
// date
// untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// time
// unix timestamp / epoch time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();

// melakukan pengecekan hari atau tanggal dengan menggabungkan dua fungsi date dan time
// menentukan 2 hari setelah hari ini, hari apa?
// echo date("l", time()+60*60*24*2);
// menentukan 2 hari sebelum hari ini, hari apa?
// echo date("l", time()-60*60*24*2);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// contoh menentukan hari dari tanggal lahir
// echo date("l", mktime(0,0,0,12,25,1999));

// strtotime
// fungsi ini mengubah format tanggal menjadi detik
echo date("l", strtotime("25 December 1999"))
?>