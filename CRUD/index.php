<?php
    require_once 'koneksi_database.php';

    session_start();
    if (!isset($_SESSION['username'])){
    header("Location: login.php");
    }
?>

<?php require 'head.php';?>

<title>ADMIN</title>
<?php require 'header.php';?>
    <div class="container section">
    <h1>Welcome</h1>
        <?php
            // Echo variabel sesi yang telah diset di halaman sebelumnya
            echo "Username: " . $_SESSION["username"]. ".<br>";
            echo "Nama: " . $_SESSION["namauser"]. ".<br>";
        ?>
        <a href="user.php" class="btn btn-primary btn-lg" style="margin-bottom:20px;">Lihat User</a>
        <a href="about-me.php" class="btn btn-primary btn-lg" style="margin-bottom:20px;">Lihat About Me</a>
        <a href="biodata.php" class="btn btn-primary btn-lg" style="margin-bottom:20px;">Lihat Biodata</a>
        <a href="galery.php" class="btn btn-primary btn-lg" style="margin-bottom:20px;">Lihat Galeri</a>
        <a href="news.php" class="btn btn-primary btn-lg" style="margin-bottom:20px;">Lihat News</a>
        <a href="contact.php" class="btn btn-primary btn-lg" style="margin-bottom:20px;">Lihat Contact</a>
        <a href="contact-me.php" class="btn btn-primary btn-lg" style="margin-bottom:20px;">Lihat Contact Me</a>
        <a href="footer.php" class="btn btn-primary btn-lg" style="margin-bottom:20px;">Footer</a>
    </div>
</body>
</html>