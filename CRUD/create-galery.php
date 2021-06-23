<?php
require 'crud.php';

$koneksi = koneksiDatabase();

if(isset($_POST["create"])){
    if(createGalery($_POST) > 0){
        echo"<script>
        alert('Sukses Upload Gambar');
        document.location.href='galery.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Gagal Upload Gambar');
        document.location.href='galery.php';
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
                            <h1 class="m-0">Upload Gambar</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="container section">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Form Elements -->
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form role="form" method="POST" action="" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <input class="no-outline" type="file"
                                                        name="gambar" id="gambar" />
                                                </div>
                                                <div>
                                                    <input type="submit" name="create" value="Upload"
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