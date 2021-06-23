<?php
require 'koneksi_Database.php';
$koneksi = koneksiDatabase();

if (isset($_GET['id'])){
    $id = $_GET['id'];
}
else {
    die ("ERROR!");
}
?>
<?php require 'head.php';?>

<title>News</title>
<?php require 'header.php';?>

<div class="container">
    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">
        <!-- Section -->
        <section id="news-main">

                <div class="row">
                    <?php
                    $i = 1;
                    $koneksi = koneksiDatabase();
                    $news = mysqli_query($koneksi, "SELECT * FROM news WHERE id='$id'");
                    while ($row = mysqli_fetch_array($news)) {
                    ?>
                    <div class="col-lg-12 col-md-3 col-xs-12 col-sm-12">
                        <div class="col-news">
                            <h2 style="font-size: 28px;"><?=($row['judul']);?></h2>
                            <div class="row ">
                                <div class="col-10">
                                <small><?= $row['penulis'];?></small>
                                </div>
                                <div class="col-2">
                                <small><i class="fa fa-clock-o"></i> <?= $row['tanggal'];?></small>
                                </div>
                            </div>
                            <hr>
                            <img style="width: 100%; height:350px " src="crud/images/<?= $row['gambar'];?>" alt="">
                            <p style="margin-top: 44px; text-align: justify;"><?= $row['deskripsi'];?></p>
                        </div>
                    </div>
                    <?php
                    $i++;
                    } ?>
                </div>
            </section>
      </div>
      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Terpopuler -->
        <div class="terpopuler">
          <div class="section">
            <h5>Terpopuler</h5>
          </div>
          <?php
                $i = 1;
                $koneksi = koneksiDatabase();
                $news = mysqli_query($koneksi, "SELECT * FROM news LIMIT 5 ");
                while ($row = mysqli_fetch_array($news)) {
          ?>
          <div style="margin-bottom: 20px;"></div>
          <h6>
            <a class="link-dark" href="detail-news.php?id=<?=$row['id']?>" style="text-decoration: none"><?= $row['judul'];?></a>
          </h6>
          <?php
                $i++;
            } ?>
        </div>

        </div>
    </div>
    <!-- /.row -->
    </div>
  
<?php require 'footer.php';?>
