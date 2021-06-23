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
                            <h1 class="m-0">User</h1>
                            <a href="create-user.php" class="btn btn-primary" style="margin-bottom:5px;">Tambah User</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <form class="form-search" action="search-user.php" method="get">
                                    <label>Username :</label>
                                        <input placeholder="Search..." type="text" name="cari"
                                            value="<?php if (isset($_GET['username'])) {echo $_GET['username']; } ?>">
                                        <input type="submit" value="Search">
                                    </form>
                                    <br>
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Username</th>
                                                <th>Nama</th>
                                                <th>Password</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $i=1;
                                            $koneksi = koneksiDatabase();
                                            $data = mysqli_query($koneksi, "SELECT * FROM user");
                                            while ($row = mysqli_fetch_array($data)) {
                                            ?>

                                            <tr>
                                                <td><?= $row['username'];?></td>
                                                <td><?= $row['nama'];?></td>
                                                <td><?= $row['password'];?></td>
                                                <td>
                                                    <a href="update-user.php?&id=<?= $row["id"]; ?>"
                                                        class="btn btn-primary">Ubah</a>
                                                    <a href="hapus-user.php?&id=<?= $row["id"];?>"
                                                        class="btn btn-danger"
                                                        onclick="return confirm('Lanjut Hapus User');">Hapus</a>
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