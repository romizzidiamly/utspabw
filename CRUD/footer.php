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
                            <h1 class="m-0">Footer</h1>
                        </div>
                    </div>
                </div>

            <!-- Main content -->s
            <section class="content">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Copyright</th>
                                                <th scope="col">Facebook</th>
                                                <th scope="col">Twitter</th>
                                                <th scope="col">Youtube</th>
                                                <th scope="col">Instagram</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                        $i=1;
                                        $koneksi = koneksiDatabase();
                                        $data = mysqli_query($koneksi, "SELECT * FROM footer");
                                        while ($row = mysqli_fetch_array($data)){
                                        ?>

                                            <tr>
                                                <td><?= $row['copyright'];?></td>
                                                <td><?= $row['fb'];?></td>
                                                <td><?= $row['twitter'];?></td>
                                                <td><?= $row['yt'];?></td>
                                                <td><?= $row['ig'];?></td>
                                                <a href="update-footer.php?&id=<?= $row["id"]; ?>" class="btn btn-primary" style="margin-bottom:20px;">Ubah</a>
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