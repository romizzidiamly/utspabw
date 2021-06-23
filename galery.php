<?php
require_once "koneksi_Database.php";
?>
<?php require 'head.php';?>

<title>Galeri</title>
<?php require 'header.php';?>

<section class="container galeri" id="galeri">
        <!-- About Me -->
        <h2 class="text-center">Galeri</h2>
        <hr>
        <div class = "row text-center gallery">
			<?php
                $i = 1;
                $koneksi = koneksiDatabase();
                $galery = mysqli_query($koneksi, "SELECT * FROM galery");
                while ($row = mysqli_fetch_array($galery)) {
            ?>
            <div class = "col-lg-3">
                <a href = "crud/images/<?= $row['nama_file'];?>" data-toggle = "lightbox" data-gallery="gallery">
                    <img src="crud/images/<?= $row['nama_file'];?>" style="margin-bottom: 20px; height: 200px;" class="galeri img-fluid img-thumbnail" alt="">
                </a>
			</div>
            <?php
                $i++;
            } ?>

		</div>
        <!-- Akhir About Me -->
</section>

  
<?php require 'footer.php';?>
