<?php
require 'crud.php';
?>
<?php
    session_start();
    if (!isset($_SESSION['username'])){
    header("Location: login.php");
    }
?>
<!doctype html>
<?php require 'head.php';?>

<title>ADMIN</title>
<?php require 'header.php';?>

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container section">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">My Galeri</h1>
                        </div>
                    </div>
                    <a href="create-galery.php" class="btn btn-primary" style="margin-bottom:20px;">Upload Gambar</a>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Gambar</th>
                                                <th>Nama File</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                        $i=1;
                                        $koneksi = koneksiDatabase();
                                        $data = mysqli_query($koneksi, "SELECT * FROM galery ORDER BY id_file DESC");
                                        while ($row = mysqli_fetch_array($data)){
                                        ?>

                                            <tr>
                                                <td><img src="images/<?= $row['nama_file'];?>" alt="" height="100px">
                                                </td>
                                                <td><?= $row['nama_file'];?></td>
                                                <td>
                                                    <a href="hapus-galery.php?&id_file=<?= $row["id_file"];?>"
                                                        class="btn btn-danger"
                                                        onclick="return confirm('Lanjut Hapus Gambar?');">Hapus</a>
                                                </td>
                                            </tr>
                                            <?php $i++;
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

</body>

</html>