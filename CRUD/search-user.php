<?php
    include('crud.php');

    if (isset($_GET['cari'])) {
        $cari = $_GET['cari'];

        $data = searchUserWithUsername($cari);
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

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container section">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Pengguna</h1>
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
                                    <label for="">Username :</label>
                                        <input type="text" name="cari"
                                            value="<?php if (isset($_GET['cari'])) {echo $_GET['cari']; } ?>">
                                        <input type="submit" value="search">
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

                                        <?php
                                        if ($data == null) {
                                            echo "<p style='color:red;'>User tidak ditemukan!</p>";
                                        } else {
                                        ?>

                                        <tbody>

                                        <?php
                                            foreach ($data as $user) {
                                                $username = $user['username'];
                                                $password = $user['password'];
                                                $nama = $user['nama'];

                                                echo "
                                                <tr>
                                                    <td>$username</td>
                                                    <td>$nama</td>
                                                    <td>$password</td>
                                                    <td>
                                                    <a href='update-user.php?&username=$username'
                                                        class='btn btn-primary'>Ubah</a>
                                                    <a href='hapus-user.php?&username=$username'
                                                        class='btn btn-danger'
                                                        onclick='return confirm('yakin data dihapus');'>Hapus</a>
                                                </tr>
                                                ";
                                            }

                                                echo '</table>';
                                        }
                                    }
                                    ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <a href="user.php" class='btn btn-primary'>Lihat Semua User</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Ckeditor -->
            <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</body>

</html>