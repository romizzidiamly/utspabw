<?php
require_once "koneksi_Database.php";
?>
<?php require 'head.php';?>

<title>News</title>
<?php require 'header.php';?>

<div class="container">
  <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <!-- Section -->
        <div class="section">
          <h4>Berita Terbaru</h4>
        </div>

        <!-- Daftar Berita -->
        <div class="row isiberita">
            <?php
                $i = 1;
                $koneksi = koneksiDatabase();
                $news = mysqli_query($koneksi, "SELECT * FROM news ORDER BY id DESC LIMIT 6");
                while ($row = mysqli_fetch_array($news)) {
            ?>
                <div class="col-md-4">
                    <a href="detail-news.php?id=<?=$row['id']?>"><img src="crud/images/<?= $row['gambar'];?>" alt="" class="img-fluid"></a>
                </div>
                <div class="col-md-8 ">
                    <h5>
                    <a href="detail-news.php?id=<?=$row['id']?>" class="text-decoration-none text-body"><?= $row['judul'];?></a>
                    </h5>
                    <small><?= $row['penulis'];?><br></small>
                    <small style="text-size: 10px;"><i class="fa fa-clock-o"></i> <?= $row['tanggal'];?></small><br>
                    <a href="detail-news.php?id=<?=$row['id']?>" class="btn btn-secondary" style="margin-top: 20px;">Read More</a>
                </div>
                <hr style="margin-top: 20px;">
                <?php
                    $i++;
                } ?>
        </div>
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
