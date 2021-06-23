<?php
  require_once "koneksi_Database.php";
?>
<?php require 'head.php';?>

<title>Home</title>
  <?php require 'header.php';?>

<!-- Jumbotron -->
<style>
        .showcase {
            width: 100%;
            min-height: 93vh;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: 0.5s;
        }

        .showcase video {
            position: absolute;
            width: 100%;
            height: 93vh;
            object-fit: cover;
        }
        .overlay {
            position: absolute;
            left: 0;
            width: 100%;
            height: 100%;
            mix-blend-mode: overlay;
        }
        .text {
            position: relative;
            z-index: 10;
            color: #fff;
        }

        .text h3 {
            font-size: 4em;
            font-weight: 700;
            text-transform: uppercase;
        }
        .text h5 {
            font-weight: 400;
        }

        @media (max-width: 991px) {
            .showcase, .showcase header {
                padding: 40px;
            }
            .text h3 {
                font-size: 2em;
            }
        }
</style>
    <section class="showcase">
        <video src="crud/video/bandung.mp4" muted loop autoplay></video>
        <div class="overlay"></div>
          <div class="text" style="text-align: center;">
              <h3>WELCOME</h3>
              <hr class="my-4">
              <h5 class="lead">I'am Mar'iy Romizzidi Amly. Informatics Engineering Student In UIN SUSKA Riau</h5>
              <a class="btn btn-secondary btn-lg" href="profil.php" role="button" style="margin-top:10px;">Know More</a>
          </div>
    </section>
    <!-- Akhir Jumbotron -->

<div class="container">
  <div class="section">
    <h5>GALERI PHOTO</h5>
  </div>
  <div class="owl-carousel owl-theme text-center">
    <?php
      $i = 1;
      $koneksi = koneksiDatabase();
      $galery = mysqli_query($koneksi, "SELECT * FROM galery");
      while ($row = mysqli_fetch_array($galery)) {
    ?>
      <img src="crud/images/<?= $row['nama_file'];?>" class="galeri img-thumbnail" style="height: 150px;" alt="">
    <?php
      $i++;
    } ?>
  </div>
  <div class="text-center">
    <a href="galery.php" class="btn btn-secondary">Lihat Semua Galeri Photo</a>
  </div>
</div>


<?php require 'footer.php';?>


