<?php
// ini adalah komentar satu baris
// ini juga komentar

/* 
ini komentar untuk banyak baris
ini juga komentar
*/

// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r khusus untuk mencetak hasil array
// var_dump untuk melihat isi variabel

echo "ini untuk perintah echo";
print "ini untuk perintah print";
print_r("ini perintah print_r");
var_dump("ini untuk var_dump");

// untuk angka tidak memerlukan kutip
echo 1104183008;

// untuk boolean true akan menghasilkan angka 1
echo true;

// untuk boolean false akan menghasilkan karakter kosong
echo false;

// untuk mencetak string echo dapat menggunakan tanda petik 2 atau tanda petik 1
echo 'Hello';

// penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
$nama = "Agung Setyo Nugroho";

// jikalau menggunakan tanda petik dua akan memanggil variabel dengan teknik interpolasi sedangkan jika menggunakan tanda petik satu tidak akan memanggil dan menghasilkan nama variabel tersebut
echo "Halo, nama saya $nama";
echo 'Halo, nama saya $nama';

// Operator
// aritmatika
// + - * / %
$x = 10;
$y = 20;
echo $x * $y;
echo 1 + 1;

// penggabung string / concatenation / concate
//  operatornya .
$nama_depan = "Agung";
$nama_belakang = "Setyo";
echo $nama_depan. " ". $nama_belakang;

// operator assignment
// =, +=, -=, *=, /=. %=, .=
$x = 1;
$x += 5;
echo $x;

$nama = "Agung";
$nama .= " ";
$nama .= "Setyo";
echo $nama;

// operator perbandingan
// <, >, <=, >=, ==, !=
var_dump(1 < 5);

// identitas
// ===, !==
var_dump(1 === "1");

// operator logika
// &&, ||, !
// &&
$x = 10;
var_dump($x < 20 && $x % 2 == 0);
// ||
$x = 30;
var_dump($x < 20 || $x % 2 == 0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <!-- PHP di dalam HTML -->
    <h1>Halo, Selamat Datang <?php echo $nama; ?></h1>
    <p><?php echo "ini adalah paragraf" ?></p>

    <!-- HTML di dalam PHP -->
    <?php
        echo "<h1>ini merupakan elemen h1 html dalam tag php</h1>";
    ?>
</body>
</html>