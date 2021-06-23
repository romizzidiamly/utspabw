<?php
require 'crud.php';

$koneksi = koneksiDatabase();
$id = $_GET["id"];

if (deleteContactMe($id) > 0){
    echo "<script>
    alert('Sukses Hapus Pesan');
    window.location.href='contact.php';
    </script>";
}

else{
    echo "<script>
    alert('Pesan Gagal Dihapus');
    window.location.href='contact.php';
    </script>";
    echo mysqli_error($koneksi);
}

?>