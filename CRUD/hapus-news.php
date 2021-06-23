<?php
require 'crud.php';

$koneksi = koneksiDatabase();
$id = $_GET["id"];

if (deleteNews($id) > 0){
    echo "<script>
    alert('Sukses Hapus Berita');
    window.location.href='news.php';
    </script>";
}

else{
    echo "<script>
    alert('Gagal Hapus Berita');
    window.location.href='news.php';
    </script>";
    echo mysqli_error($koneksi);
}

?>