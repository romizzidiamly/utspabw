<?php
require 'crud.php';

$koneksi = koneksiDatabase();

if(isset($_POST["create"])){
    if(createNews($_POST) > 0){
        echo"<script>
        alert('Sukses Tambah Berita');
        document.location.href='news.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Gagal Tambah Berita');
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

<!doctype html>
<html>
<?php require 'head.php';?>

<title>ADMIN</title>
<?php require 'header.php';?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin WEB</title>

</head>

<body>
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container section">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Tambah Berita</h1>
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
                                                <div class="form-group">
                                                    <input style="margin-top: 12px;" class="no-outline" type="file"
                                                        name="gambar" id="gambar" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Judul</label>
                                                    <input class="form-control" name="judul" id="judul" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Penulis</label>
                                                    <input class="form-control" name="penulis" id="penulis" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Tanggal</label>
                                                    <input class="no-outline" type="date" name="tanggal" id="tanggal" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Deskripsi</label>
                                                    <textarea class="ckeditor" name="deskripsi" id="deskripsi" cols="30"
                                                        rows="10"></textarea>
                                                </div>
                                                <div>
                                                    <input type="submit" name="create" value="Tambah"
                                                        class="btn btn-primary">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Ckeditor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</body>

</html>