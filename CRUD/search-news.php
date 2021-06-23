<?php
    include('crud.php');

    if (isset($_GET['cari'])) {
        $cari = $_GET['cari'];

        $data = searchNewsWithPenulis($cari);
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
                            <h1 class="m-0">Kumpulan Berita</h1>
                            <a href="create-news.php" class="btn btn-primary" style="margin-bottom:5px;">Tambah Berita</a>
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
                                    <form class="form-search" action="search-news.php" method="get">
                                    <label for="">Penulis :</label>
                                        <input type="text" name="cari"
                                            value="<?php if (isset($_GET['cari'])) {echo $_GET['cari']; } ?>">
                                        <input type="submit" value="search">
                                    </form>
                                    <br>
                                
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Gambar</th>
                                                <th scope="col">Judul</th>
                                                <th scope="col">Penulis</th>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Deskripsi</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>

                                        <?php
                                        if ($data == null) {
                                            echo "<p style='color:red;'>Berita tidak ditemukan!</p>";
                                        } else {
                                        ?>

                                        <tbody>

                                        <?php
                                            foreach ($data as $user) {
                                                $id = $user['id'];
                                                $gambar = $user['gambar'];
                                                $judul = $user['judul'];
                                                $penulis = $user['penulis'];
                                                $tanggal = $user['tanggal'];
                                                $deskripsi = $user['deskripsi'];

                                                echo "
                                                <tr>
                                                    <td><img src='images/$gambar' alt='' height='100px'></td>
                                                    <td>$judul</td>
                                                    <td>$penulis</td>
                                                    <td>$tanggal</td>
                                                    <td>$deskripsi</td>
                                                    <td>
                                                    <a href='update-news.php?&id=$id'
                                                        class='btn btn-primary'>Ubah</a>
                                                    <a href='hapus-news.php?&id=$id'
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
                            <a href="news.php" class='btn btn-primary'>Lihat Semua Berita</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Ckeditor -->
            <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</body>

</html>