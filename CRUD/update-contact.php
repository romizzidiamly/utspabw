<?php
require 'crud.php';

$id = $_GET["id"];
$koneksi = koneksiDatabase();
$sql = "SELECT * FROM contact WHERE id=". $id;

$data = mysqli_query($koneksi,$sql);

if(isset($_POST["ubah"])){
    if(updateContact($_POST) > 0){
        echo"<script>
        alert('Sukses mengubah Contact');
        document.location.href='contact.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Gagal mengubah Contact');
        document.location.href='contact.php';
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
                            <h1 class="m-0">Ubah Contact</h1>
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
                                                    <label>Alamat</label>
                                                    <textarea class="ckeditor" name="alamat" id="alamat" cols="30" rows="10"
                                                         required><?=$sql["alamat"];?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>No Hp</label>
                                                    <input class="form-control" name="phone" id="phone"
                                                        value="<?=$sql["phone"];?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" name="email" id="email"
                                                        value="<?=$sql["email"];?>" required>
                                                </div>
                                                <div>
                                                    <input type="submit" name="ubah" value="Ubah"
                                                        class="btn btn-primary" onclick="return confirm('Lanjut mengubah Contact?');">
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