<?php
    session_start();
    include('cruduser.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(otentik($username, $password)){
        // Set variabel sesi
        $_SESSION['username'] = $username;
        $dataUser = array(); // deklarasi var array
        $dataUser = cariUserDariUserName($username); // mencari user(nama)
        $_SESSION['namauser'] = $dataUser['nama'];
        // file hapusmhs.php sudah dibuat di pertemuan sebelumnya
        header("Location: index.php");
    }else{
        header("Location: login.php?error");
    }
?>