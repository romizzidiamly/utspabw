<!doctype html>

<?php
    include('crud.php');
    $sql="select * from biodata";
    $data = bacaBiodata($sql);
?>

<?php
    require_once 'koneksi_database.php';

    session_start();
    if (!isset($_SESSION['username'])){
    header("Location: login.php");
    }
?>

<?php require 'head.php';?>

<title>Ubah Biodata</title>
<?php require 'header.php';?>
    
    <div class="container section">
        <h1>Biodata</h1>
        <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">TTL</th>
                <th scope="col">Alamat</th>
                <th scope="col">HP/WA</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Semester</th>
                <th scope="col">NIM</th>
                <th scope="col">Jenis Kelamin</th>
            </tr>

            <?php
                foreach($data as $biodata){
                    $nama = $biodata['nama'];
                    $ttl = $biodata['ttl'];
                    $alamat = $biodata['alamat'];
                    $hp = $biodata['hp'];
                    $jurusan = $biodata['jurusan'];
                    $semester = $biodata['semester'];
                    $nim = $biodata['nim'];
                    $jenis_kelamin = $biodata['jenis_kelamin'];

                    echo "
                    <tr>
                    <td>$nama</td>
                    <td>$ttl</td>
                    <td>$alamat</td>
                    <td>$hp</td>
                    <td>$jurusan</td>
                    <td>$semester</td>
                    <td>$nim</td>
                    <td>$jenis_kelamin</td>
                    <a class='btn btn-primary' href='update-biodata.php?nim=$nim' style='margin-bottom:20px;'>Ubah</a>
                    </tr>
                    ";
                }
            ?>
        </table>
        </div>
        </div>
    </body>

</html>