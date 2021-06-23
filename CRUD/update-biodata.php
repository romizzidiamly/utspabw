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
    
    <?php
        $koneksi = koneksiDatabase();
        $kode = $_GET['nim'];
        $data = mysqli_query($koneksi, "select * from biodata where nim='$kode'");
        $edit = mysqli_fetch_array($data);
        ?>
    <div class="container section">
        <h1>Ubah Biodata</h1>
    <form action="prosesubahbiodata.php" method="post">
    <?php
			$nim = $_GET['nim'];
			$data = cariBiodata($nim);
			function cekkelamin ($jenis_kelamin, $kel){
				if ($jenis_kelamin == $kel){
					echo "checked = 'checked'";
				}
			}
			function cekjurusan ($jurusan, $jur){
				if ($jurusan == $jur){
					echo "checked = 'checked'";
				}
			}
		?>
        <table cellpadding="10">
            <tr>
                <td>Nama</td>
                <td><input type=" text" name="nama" value="<?php echo $edit['nama']; ?>"></td>
            </tr>
            <tr>
                <td>TTL</td>
                <td><input type=" text" name="ttl" value="<?php echo $edit['ttl']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                <textarea class="ckeditor" cols="50" rows="5" aria-label="With textarea" name="alamat"><?php echo $edit['alamat']; ?></textarea>
                </td>
            </tr>
            <tr>
                <td>HP/WA</td>
                <td><input type=" text" name="hp" value="<?php echo $edit['hp']; ?>"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>
                    <input type="radio"  name="jurusan" value="Teknik Informatika" <?php cekjurusan($data['jurusan'],'Teknik Informatika');?>>TIF
                    <input type="radio"  name="jurusan" value="Teknik Industri" <?php cekjurusan($data['jurusan'],'Teknik Industri');?>>TIN
                    <input type="radio"  name="jurusan" value="Teknik Elektro" <?php cekjurusan($data['jurusan'],'Teknik Elektro');?>>TEL
                    <input type="radio"  name="jurusan" value="Matematika" <?php cekjurusan($data['jurusan'],'Matematika');?>>MTK
                    <input type="radio"  name="jurusan" value="Sistem Informasi" <?php cekjurusan($data['jurusan'],'Sistem Informasi');?>>SIF
                </td>
            </tr>
            <tr>
                <td>Semester</td>
                <td><input type=" text" name="semester" value="<?php echo $edit['semester']; ?>"></td>
            </tr>
            <tr>
                <td>Nim</td>
                <td><input type=" text" name="nim" value="<?php echo $edit['nim']; ?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="Laki-Laki" <?php cekkelamin($data['jenis_kelamin'],'Laki-Laki');?>>Laki-Laki
                    <input type="radio" name="jenis_kelamin" value="Perempuan" <?php cekkelamin($data['jenis_kelamin'],'Perempuan');?>>Perempuan
                </td>
            </tr>
        </table>
            <input type="submit" class="btn btn-primary" aria-describedby="button-addon2" value="Ubah" onclick="return confirm('Lanjut mengubah Biodata?');">
            <a href="biodata.php"><input type="button" class="btn btn-primary" aria-describedby="button-addon2" value="Batal"></a>
    </form>
    </div>
</body>

</html>