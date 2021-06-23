<?php
    include('crud.php');

    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $hp = $_POST['hp'];
    $jurusan = $_POST['jurusan'];
    $semester = $_POST['semester'];
    $nim = $_POST['nim'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    $hasil = ubahBiodata($nama, $ttl, $alamat, $hp, $jurusan, $semester, $nim, $jenis_kelamin);

    if($hasil > 0) {
        header("Location: biodata.php");
    } else {
        header("Location: gagalubahbiodata.php");
    }

?>