<?php
require 'crud.php';
?>

<?php
    require_once 'koneksi_database.php';

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
                <div class="container section">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">About Me</h1>
                        </div>
                    </div>
                </div>

            <!-- Main content -->
            <section class="content">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Gambar</th>
                                                <th>Deskripsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                        $i=1;
                                        $koneksi = koneksiDatabase();
                                        $data = mysqli_query($koneksi, "SELECT * FROM about_me ORDER BY id ASC");
                                        while ($row = mysqli_fetch_array($data)){
                                        ?>

                                            <tr>
                                                <td><img src="images/<?= $row['gambar'];?>" alt="" height="400px">
                                                </td>
                                                <td><?= $row['deskripsi'];?></td>
                                                <a href="update-about-me.php?&id=<?= $row["id"]; ?>" class="btn btn-primary" style="margin-bottom:20px;">Ubah</a>
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