<?php
require_once 'koneksi_database.php';

// uploud image
function upload(){
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpname =$_FILES['gambar']['tmp_name'];

    if( $error === 4 ) {
        echo "<script>
        alert('Pilih gambar!');
        </script>";
        return false;
    }

    $ekstesigamabarvalid = ['jpg', 'jpeg', 'png'];
    $ekstesigamabar = explode('.', $namafile);
    $ekstesigamabar = strtolower(end($ekstesigamabar));

    if( !in_array($ekstesigamabar, $ekstesigamabarvalid)){
        echo "<script>
        alert('Format tidak valid!');
        </script>";
        return false;
    }

    if ( $ukuranfile > 10000000) {
        echo "<script>
        alert('Size maksimal 5Mb!');
        </script>";
        return false;
    }

    $namafilebaru = uniqid();
    $namafilebaru .='.';
    $namafilebaru .= $ekstesigamabar;

    move_uploaded_file($tmpname, 'images/' . $namafilebaru);
    return $namafilebaru;
}

// update About Me
function updateAboutMe($data) {
    $koneksi = koneksiDatabase();
    $id = $data["id"];
    $gambar = upload();
    if(!$gambar){
        return false;
    }
    $deskripsi = $data["deskripsi"];

    $sql = "UPDATE about_me SET gambar='$gambar', deskripsi='$deskripsi' WHERE id=$id";

    mysqli_query($koneksi,$sql);
    return mysqli_affected_rows($koneksi);

}

function bacaBiodata($sql) {
    $data = array();
    $koneksi = koneksiDatabase();
    $hasil = mysqli_query($koneksi, $sql);

    // jika tidak ada record, hasil berupa null
    if (mysqli_num_rows($hasil) == 0) {
        mysqli_close($koneksi);
        return null;
    }   

    $i=0;
    while($baris = mysqli_fetch_assoc($hasil)) {
        $data[$i]['nama']= $baris['nama'];
        $data[$i]['ttl'] = $baris['ttl'];
        $data[$i]['alamat'] = $baris['alamat'];
        $data[$i]['hp']= $baris['hp'];
        $data[$i]['jurusan'] = $baris['jurusan'];
        $data[$i]['semester']= $baris['semester'];
        $data[$i]['nim'] = $baris['nim'];
        $data[$i]['jenis_kelamin'] = $baris['jenis_kelamin'];
        $i++;
    }

    mysqli_close($koneksi);
    return $data;
}

function cariBiodata($nim) {
    $koneksi = koneksiDatabase();
    $sql = "select * from biodata where nim='$nim'";
    $hasil = mysqli_query($koneksi, $sql);

    if(mysqli_num_rows($hasil)>0) {
        $baris=mysqli_fetch_assoc($hasil);

        $data['nama']=$baris['nama'];
        $data['ttl'] = $baris['ttl'];
        $data['alamat'] = $baris['alamat'];
        $data['hp']=$baris['hp'];
        $data['jurusan'] = $baris['jurusan'];
        $data['semester']=$baris['semester'];
        $data['nim'] = $baris['nim'];
        $data['jenis_kelamin'] = $baris['jenis_kelamin'];

        mysqli_close($koneksi);
        return $data;
    } else {
        mysqli_close($koneksi);
        return null;
    }
}

function ubahBiodata($nama, $ttl, $alamat, $hp, $jurusan, $semester, $nim, $jenis_kelamin) {
    $koneksi = koneksiDatabase();

    $sql = "UPDATE biodata
    SET nama = '$nama', ttl = '$ttl', alamat = '$alamat', hp = '$hp', jurusan = '$jurusan', semester = '$semester', nim = '$nim', jenis_kelamin = '$jenis_kelamin'
    WHERE nim = '$nim'";

    if (mysqli_query($koneksi, $sql)) {
        $hasil = true;
    } else {
        $hasil = "Error mengubah record: " . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
    return $hasil;
}

function bacaAboutme($sql) {
    $data = array();
    $koneksi = koneksiDatabase();
    $hasil = mysqli_query($koneksi, $sql);

    // jika tidak ada record, hasil berupa null
    if (mysqli_num_rows($hasil) == 0) {
        mysqli_close($koneksi);
        return null;
    }   

    $i=0;
    while($baris = mysqli_fetch_assoc($hasil)) {
        $data[$i]['id']= $baris['id'];
        $data[$i]['deskripsi'] = $baris['deskripsi'];
        $data[$i]['gambar'] = $baris['gambar'];
        $i++;
    }

    mysqli_close($koneksi);
    return $data;
}

function cariAboutme($nim) {
    $koneksi = koneksiDatabase();
    $sql = "select * from biodata where nim='$nim'";
    $hasil = mysqli_query($koneksi, $sql);

    if(mysqli_num_rows($hasil)>0) {
        $baris=mysqli_fetch_assoc($hasil);

        $data['nama']=$baris['nama'];
        $data['ttl'] = $baris['ttl'];
        $data['alamat'] = $baris['alamat'];
        $data['hp']=$baris['hp'];
        $data['jurusan'] = $baris['jurusan'];
        $data['semester']=$baris['semester'];
        $data['nim'] = $baris['nim'];
        $data['jenis_kelamin'] = $baris['jenis_kelamin'];

        mysqli_close($koneksi);
        return $data;
    } else {
        mysqli_close($koneksi);
        return null;
    }
}

function ubahAboutme($deskripsi) {
    $koneksi = koneksiDatabase();

    $sql = "UPDATE deskripsi = '$deskripsi'";

    if (mysqli_query($koneksi, $sql)) {
        $hasil = true;
    } else {
        $hasil = "Error mengubah record: " . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
    return $hasil;
}

// create Galery
function createGalery($data){
    $gambar = upload();
    if(!$gambar){
        return false;
    }

    $koneksi = koneksiDatabase();
    $sql = "INSERT INTO galery VALUES ('','$gambar')";

    mysqli_query($koneksi,$sql);
    return mysqli_affected_rows($koneksi);
}

// delete Galery
function deleteGalery($id_file){
    $koneksi = koneksiDatabase();
    $sql = "DELETE FROM galery WHERE id_file=$id_file";

    mysqli_query($koneksi,$sql);
    return mysqli_affected_rows($koneksi);
}

// read News
function readNews($sql) {
    $data = array();
    $koneksi = koneksiDatabase();
    $hasil = mysqli_query($koneksi, $sql);

    // jika tidak ada record, hasil berupa null
    if (mysqli_num_rows($hasil) == 0) {
        mysqli_close($koneksi);
        return null;
    }

    $i=0;
    while($baris = mysqli_fetch_assoc($hasil)) {
        $data[$i]['id'] = $baris['id'];
        $data[$i]['gambar'] = $baris['gambar'];
        $data[$i]['penulis'] = $baris['penulis'];
        $data[$i]['judul']= $baris['judul'];
        $data[$i]['tanggal']= $baris['tanggal'];
        $data[$i]['deskripsi']= $baris['deskripsi'];
        $i++;
    }

    mysqli_close($koneksi);
    return $data;
}

// search News With Penulis
function searchNewsWithPenulis($penulis) {
    $sql ="select * from news where penulis='$penulis'";
    $data = readNews($sql);

    return $data;
}

// create News
function createNews($data){
    $gambar = upload();
    if(!$gambar){
        return false;
    }
    $penulis = $data["penulis"];
    $judul = $data["judul"];
    $tanggal = $data["tanggal"];
    $deskripsi = $data["deskripsi"];

    $koneksi = koneksiDatabase();
    $sql = "INSERT INTO news VALUES ('','$gambar','$penulis','$judul','$tanggal', '$deskripsi')";

    mysqli_query($koneksi,$sql);
    return mysqli_affected_rows($koneksi);
}
// update News
function updateNews($data) {
    $koneksi = koneksiDatabase();
    $id = $data["id"];
    $gambar = upload();
    if(!$gambar){
        return false;
    }
    $judul = $data["judul"];
    $deskripsi = $data["deskripsi"];
    $tanggal = $data["tanggal"];
    $penulis = $data["penulis"];

    $sql = "UPDATE news SET
            gambar='$gambar',
            judul='$judul',
            deskripsi='$deskripsi',
            tanggal='$tanggal',
            penulis='$penulis'
            WHERE id=$id
            ";

    mysqli_query($koneksi,$sql);
    return mysqli_affected_rows($koneksi);

}
// delete News
function deleteNews($id){
    $koneksi = koneksiDatabase();
    $sql = "DELETE FROM news WHERE id=$id";

    mysqli_query($koneksi,$sql);
    return mysqli_affected_rows($koneksi);
}

// update Contact
function updateContact($data) {
    $koneksi = koneksiDatabase();
    $id = $data["id"];
    $alamat = $data["alamat"];
    $phone = $data["phone"];
    $email = $data["email"];

    $sql = "UPDATE contact SET alamat='$alamat', phone='$phone', email='$email' WHERE id=$id";

    mysqli_query($koneksi,$sql);
    return mysqli_affected_rows($koneksi);
}

function createContactMe($data){
    $nama = $data["nama"];
    $email = $data["email"];
    $pesan = $data["pesan"];

    $koneksi = koneksiDatabase();
    $sql = "INSERT INTO contact_me VALUES ('','$nama','$email','$pesan')";

    mysqli_query($koneksi,$sql);
    return mysqli_affected_rows($koneksi);
}
// delete Faq
function deleteContactMe($id){
    $koneksi = koneksiDatabase();
    $sql = "DELETE FROM contact_me WHERE id=$id";

    mysqli_query($koneksi,$sql);
    return mysqli_affected_rows($koneksi);
}

// read User
function readUser($sql) {
    $data = array();
    $koneksi = koneksiDatabase();
    $hasil = mysqli_query($koneksi, $sql);

    // jika tidak ada record, hasil berupa null
    if (mysqli_num_rows($hasil) == 0) {
        mysqli_close($koneksi);
        return null;
    }

    $i=0;
    while($baris = mysqli_fetch_assoc($hasil)) {
        $data[$i]['id']= $baris['id'];
        $data[$i]['username'] = $baris['username'];
        $data[$i]['password'] = $baris['password'];
        $data[$i]['nama']= $baris['nama'];
        $i++;
    }

    mysqli_close($koneksi);
    return $data;
}

// search User With Name
function searchUserWithUsername($username) {
    $sql ="select * from user where username='$username'";
    $data = readUser($sql);

    return $data;
}

// create User
function createUser($data){
    $username = $data["username"];
    $password = $data["password"];
    $nama = $data["nama"];
    $password_md5 = md5 ($password);

    $koneksi = koneksiDatabase();
    $sql = "INSERT INTO user VALUES ('','$username', '$password_md5', '$nama')";

    mysqli_query($koneksi,$sql);
    return mysqli_affected_rows($koneksi);
}
// update User
function updateUser($data) {
    $koneksi = koneksiDatabase();
    $id = $data["id"];
    $username = $data["username"];
    $password = $data["password"];
    $nama = $data["nama"];
    $password_md5 = md5 ($password);

    $sql = "UPDATE user SET username='$username',password='$password_md5', nama='$nama' WHERE id=$id";

    mysqli_query($koneksi,$sql);
    return mysqli_affected_rows($koneksi);

}
// delete User
function deleteUser($id){
    $koneksi = koneksiDatabase();
    $sql = "DELETE FROM user WHERE id=$id";

    mysqli_query($koneksi,$sql);
    return mysqli_affected_rows($koneksi);
}

// update footer
function updateFooter($data) {
    $koneksi = koneksiDatabase();
    $id = $data["id"];
    $copyright = $data["copyright"];
    $fb = $data["fb"];
    $twitter = $data["twitter"];
    $yt = $data["yt"];
    $ig = $data["ig"];

    $sql = "UPDATE footer SET copyright='$copyright',fb='$fb', twitter='$twitter', yt='$yt', ig='$ig' WHERE id=$id";

    mysqli_query($koneksi,$sql);
    return mysqli_affected_rows($koneksi);

}