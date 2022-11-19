<?php 
// variable scope / lingkup variabel
// $x = 10; // variabel local yang hanya berfungsi untuk file latihan1.php

// function tampilX() {
//     // $x = 20; // variabel local yang hanya berfungsi dalam ruang lingkup fungsi tampilX()
//     global $x; // mencari variabel diluar fungsi bernama variabel x
//     echo $x;
// }

// tampilX();
// echo "<br>";
// echo $x;

// SUPERGLOBALS
// variabel global milik PHP
// merupakan array associative
// var_dump($_GET); echo "<br>";
// var_dump($_POST); echo "<br>";
// var_dump($_SERVER); echo "<br>"; // info tentang server yang digunakan
// echo $_SERVER["SERVER_NAME"]; echo "<br>";
// var_dump($_REQUEST); echo "<br>";
// var_dump($_SESSION); echo "<br>";
// var_dump($_COOKIE); echo "<br>";
// var_dump($_ENV);

// $_GET
// $_GET["nama"] = "Agung Setyo Nugroho";
// $_GET["nim"] = "1104183008";
$mahasiswa = [
    [
        "nama" => "Agung Setyo Nugroho",
        "nim" => "1104183008",
        "email" => "agungsn94@gmail.com",
        "jurusan" => "Teknik Fisika",
        "gambar" => "profile.jpeg"
    ],
    [
        "nama" => "Denny Febrianto Nugroho",
        "nim" => "1104183009",
        "email" => "dennyfn94@gmail.com",
        "jurusan" => "Teknik Fisika",
        "nilai" => [90, 80, 100],
        "gambar" => "profile.jpeg"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>