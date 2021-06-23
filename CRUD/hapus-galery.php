<?php
require 'crud.php';

$koneksi = koneksiDatabase();
$id_file = $_GET["id_file"];

if (deleteGalery($id_file) > 0){
    echo "<script>
    alert('Sukses Hapus Gambar');
    window.location.href='galery.php';
    </script>";
}

else{
    echo "<script>
    alert('Gagal Hapus Gambar');
    window.location.href='galery.php';
    </script>";
    echo mysqli_error($koneksi);
}

?>