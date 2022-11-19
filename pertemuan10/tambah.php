<?php 
require 'functions.php';

// koneksi ke DBMS
// $conn = mysqli_connect("localhost", "root", "", "phpdasar");

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    // var_dump($_POST); // mengecek apakah data berhasil dikirim

    // ambil data dari tiap elemen dalam form
    // $nim = $_POST["nim"];
    // $nama = $_POST["nama"];
    // $email = $_POST["email"];
    // $jurusan = $_POST["jurusan"];
    // $gambar = $_POST["gambar"];

    // query insert data
    // INSERT INTO workorders (column1, column2) VALUES (?, ?)
    // $query = "INSERT INTO mahasiswa
    //             (nim, nama, email, jurusan, gambar')
    //             VALUES
    //             ('$nim', '$nama', '$email', '$jurusan', '$gambar')
    //             ";
    // mysqli_query($conn, $query);

    // cek apakah data berhasil di tambahkan atau tidak
    // var_dump(mysqli_affected_rows($conn)); // untuk melihat status data bertambah, terhapus atau terupdate seperti "Query OK! Affected rows ..."
    // if (mysqli_affected_rows($conn) > 0 ) {
    //     echo "berhasil";
    // } else {
    //     echo "gagal!";
    //     echo "<br>";
    //     echo mysqli_error($conn);
    // }

    if ( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href ='index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan');
                document.location.href ='index.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim" required>
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>
    </form>
</body>
</html>