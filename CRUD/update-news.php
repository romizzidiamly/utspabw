<?php
require 'crud.php';

$id = $_GET["id"];
$koneksi = koneksiDatabase();
$sql = "SELECT * FROM news WHERE id=". $id;

$data = mysqli_query($koneksi,$sql);

if(isset($_POST["ubah"])){
    if(updateNews($_POST) > 0){
        echo"<script>
        alert('Sukses mengubah Berita');
        document.location.href='news.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Gagal Mengubah Berita');
        document.location.href='news.php';
        </script>";
        echo mysqli_error($koneksi);
    }
}
?>

<?php
    require_once 'koneksi_database.php';

    session_start();
    if (!isset($_SESSION['username'])){
    header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<?php require 'head.php';?>

<title>ADMIN</title>
<?php require 'header.php';?>

</head>

<body>
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container section">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Ubah Berita</h1>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Form Elements -->
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form role="form" method="POST" action="" enctype="multipart/form-data">
                                                <?php
                                            while($sql = mysqli_fetch_array($data)) {
                                            ?>
                                                <input type="hidden" name="id" value="<?=$sql["id"];?>" />
                                                <div class="form-group">
                                                    <img src="images/<?= $sql["gambar"];?>" style="width: 20%;" alt="">
                                                    <br>
                                                    <input style="margin-top: 12px;" class="no-outline" type="file"
                                                        name="gambar" id="gambar" value="<?=$sql["gambar"];?>"
                                                        required />
                                                </div>
                                                <div class="form-group">
                                                    <label>Judul</label>
                                                    <input class="form-control" name="judul" id="judul"
                                                        value="<?=$sql["judul"];?>" required />
                                                </div>
                                                <div class="form-group">
                                                    <label>Penulis</label>
                                                    <input class="form-control" name="penulis" id="penulis"
                                                        value="<?=$sql["penulis"];?>" required />
                                                </div>
                                                <div class="form-group">
                                                    <label>Tanggal</label>
                                                    <input class="no-outline" type="date" name="tanggal" id="tanggal"
                                                        value="<?=$sql["tanggal"];?>" required />
                                                </div>
                                                <div class="form-group">
                                                    <label>Deskripsi</label>
                                                    <textarea class="ckeditor" name="deskripsi" id="deskripsi" cols="30"
                                                        rows="10" required><?=$sql["deskripsi"];?></textarea>
                                                </div>
                                                <div>
                                                    <input class="btn btn-primary" type="submit" name="ubah"
                                                        Value="Ubah" onclick="return confirm('Lanjut mengubah Berita?');"
                                                        class="btn btn-primary">
                                                </div>
                                                <?php
                                                }
                                                ?>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>

    <!-- Ckeditor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</body>

</html>