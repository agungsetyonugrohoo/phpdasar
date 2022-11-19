<?php 
// $mahasiswa = [
//     ["Agung Setyo Nugroho", "1104183008", "agungsn94@gmail.com", "Teknik Fisika"],
//     ["Denny Febrianto Nugroho", "1104183009", "dennyfn94@gmail.com", "Teknik Fisika"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri\
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

// cara mengakses elemen array associative
// echo $mahasiswa[1]["nilai"][1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiwa</h1>
    
    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>"
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NIM : <?= $mhs["nim"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>