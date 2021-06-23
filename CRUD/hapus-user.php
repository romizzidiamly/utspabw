<?php
require 'crud.php';

$koneksi = koneksiDatabase();
$id = $_GET["id"];

if (deleteUser($id) > 0){
    echo "<script>
    alert('User Berhasil Dihapus');
    window.location.href='user.php';
    </script>";
}

else{
    echo "<script>
    alert('User Gagal Dihapus');
    window.location.href='user.php';
    </script>";
    echo mysqli_error($koneksi);
}

?>