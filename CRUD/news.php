<?php
require 'crud.php';

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
                        </div>
                    </div>
                    <a href="create-news.php" class="btn btn-primary" style="margin-bottom:20px;">Tambah Berita</a>
                    
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel-body">
                                <div class="table-responsive">
                                <form class="form-search" action="search-news.php" method="get"style="margin-bottom:20px;" >
                                <label>Penulis :</label>
                                        <input placeholder="Search..." type="text" name="cari"
                                            value="<?php if (isset($_GET['penulis'])) {echo $_GET['penulis']; } ?>">
                                        <input type="submit" value="search">
                                    </form>
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
                                        <tbody>

                                            <?php
                                        $i=1;
                                        $koneksi = koneksiDatabase();
                                        $data = mysqli_query($koneksi, "SELECT * FROM news ORDER BY id DESC");
                                        while ($row = mysqli_fetch_array($data)){
                                        ?>

                                            <tr>
                                                <td><img src="images/<?= $row['gambar'];?>" alt="" height="100px">
                                                </td>
                                                <td scope="row"><?= $row['judul'];?></td>
                                                <td scope="row"><?= $row['penulis'];?></td>
                                                <td scope="row"><?= $row['tanggal'];?></td>
                                                <td scope="row-4"><?= $row['deskripsi'];?></td>
                                                <td scope="row">
                                                    <a href="update-news.php?&id=<?= $row["id"]; ?>"
                                                        class="btn btn-primary">Ubah</a>
                                                    <a href="hapus-news.php?&id=<?= $row["id"];?>"
                                                        class="btn btn-danger"
                                                        onclick="return confirm('Lanjut Hapus Berita?');">Hapus</a>
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