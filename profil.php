<?php
require 'koneksi_Database.php';

?>

<?php require 'head.php';?>

<title>Profil</title>
<?php require 'header.php';?>
<section class="container profil" id="profil">
        <!-- About Me -->
        <h2 class="text-center">About Me</h2>
        <hr>
        <div class="row">
            <div class="col-lg-8 deskripsi">
                <?php
                $koneksi = koneksiDatabase();
                $about_me = mysqli_query($koneksi, "SELECT * FROM about_me ORDER BY id ASC");
                $row = mysqli_fetch_array($about_me)
                ?>

                <?= $row['deskripsi'];?>
            </div>
            <div class="col-lg-4">
                <img src="crud/images/<?= $row['gambar'];?>" class="img-fluid rounded mx-auto d-block" alt="profil">
            </div>
        </div>
        <!-- Akhir About Me -->
</section>

<section class="container">
    <h2>Biodata</h2>
    <hr>
        <?php
            $koneksi = koneksiDatabase();
            $biodata = mysqli_query($koneksi, "SELECT * FROM biodata ORDER BY nim ASC");
            $row = mysqli_fetch_array($biodata)
            ?>
            <table>
                  <tr>
                    <th scope="col-6">Nama &emsp;</th>
                    <td ><?= $row['nama'];?></td>
                  </tr>
                  <tr>
                    <th scope="col-6">TTL &emsp;</th>
                    <td><?= $row['ttl'];?></td>
                  </tr>
                  <tr>
                    <th scope="col-6">Alamat &emsp;</th>
                    <td><?= $row['alamat'];?></td>
                  </tr>
                  <tr>
                    <th>HP/WA &emsp;</th>
                    <td><?= $row['hp'];?></td>
                  </tr>
                  <tr>
                    <th>Jurusan &emsp;</th>
                    <td><?= $row['jurusan'];?></td>
                  </tr>
                  <tr>
                    <th>Semester &emsp;</th>
                    <td><?= $row['semester'];?></td>
                  </tr>
                  <tr>
                    <th>NIM &emsp;</th>
                    <td><?= $row['nim'];?></td>
                  </tr>
                  <tr>
                    <th>Jenin Kelamin &emsp;</th>
                    <td><?= $row['jenis_kelamin'];?></td>
                  </tr>
                </table>
        <!-- Akhir Biodata -->
</section>

<?php require 'footer.php';?>
