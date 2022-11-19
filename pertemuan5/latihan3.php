<?php 
$mahasiswa = [
    ["Agung Setyo Nugroho", "1104183008", "Teknik Fisika", "agungsn94@gmail.com"],
    ["Denny Febrianto Nugroho", "1104183009", "Teknik Fisika", "dennyfn94@gmail.com"],
    ["Lili Sugeng Diko Nugroho", "1104183010", "Teknik Fisika", "lilisugngdn@gmail.com"]
];
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
    <h1>Daftar Mahasiswa</h1>

    <!-- menggunakan perulangan foreach -->
    <!-- <ul>
        <?php foreach( $mahasiswa as $mhs ) : ?>
            <li><?= $mhs ?></li>
        <?php endforeach; ?>
    </ul> -->

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <!-- menggunakan metode konvensional -->
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NIM : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>