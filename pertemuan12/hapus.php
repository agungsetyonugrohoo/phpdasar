<?php
require 'functions.php';

// menyimpan variabel id dari url melalui metode request get
$id = $_GET["id"];

if( hapus($id) > 0) {
    echo "
        <script>
            alert('data berhasil dihapuskan');
            document.location.href ='index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('data gagal dihapuskan');
            document.location.href ='index.php';
        </script>
    ";
}
?>