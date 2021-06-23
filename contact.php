<?php
require 'crud/crud.php';

$koneksi = koneksiDatabase();

if(isset($_POST["submit"])){
    if(createContactMe($_POST) > 0){
        echo"<script>
        alert('Pesan berhasil dikirim!');
        document.location.href='contact.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Pesan gagal dikirim!');
        document.location.href='/contact.php';
        </script>";
        echo mysqli_error($koneksi);
    }
}

?>
<?php require 'head.php';?>

<title>Contact</title>
<?php require 'header.php';?>

    <section id="kontak">
        <div class="container">
           <h2 class="text-center">Contact Me</h2>
            <hr>
                  <small>
                    Silahkan tinggalkan pesan anda, pada kolom yang tersedia.
                  </small>
            <div class="row">
                <div class="col-lg-6 ">
                  <form role="form" method="POST" action="" enctype="multipart/form-data">
                     
                    <div class="form-group">
                      <label for="">Nama Anda:</label>
                      <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
                    </div>
              
                    <div class="form-group" style="margin-top:10px;">
                      <label for="">E-mail Anda:</label>
                      <input type="email" class="form-control" name="email" placeholder="Masukkan Email">
                    </div>
              
                    <div class="form-group" style="margin-top:10px;">
                      <label for="">Pesan Anda:</label>
                      <textarea name="pesan" class="form-control" cols="30" rows="7" placeholder="Pesan Anda"></textarea>
                    </div>
              
                    <input class="btn btn-secondary" name="submit" id="submit" type="submit" style="margin-top:20px;"value="Submit">
              
                  </form>
                </div>
              
                <div class="col-lg-6">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                        <div class="row">
                        <?php
                            $koneksi = koneksiDatabase();
                            $contact = mysqli_query($koneksi, "SELECT * FROM contact");
                            $row = mysqli_fetch_array($contact)
                        ?>
                            <div class="col-lg-12 icon">
                                <i class="fas fa-map-marker-alt" style="font-size: 3rem; color: #15477A;"></i>
                                  <h4 style="color: black;">Alamat</h4>
                                <p style="color: black;"><?= $row['alamat'];?></p>
                                
                              </div> 
                              <div class="col-lg-12 icon">
                                <i class="fas fa-phone-alt" style="font-size: 3rem; color: #15477A;"></i>
                                <h4 style="color: black;">Telepon</h4>
                                <p style="color: black;"><?= $row['phone'];?></p>
                                
                              </div>
                              <div class="col-lg-12 icon">
                                <i class="fas fa-envelope" style="font-size: 3rem; color:#15477A;"></i>
                                <h4 style="color: black;">Email</h4>
                                <p style="color: black;"><?= $row['email'];?></p>
                                
                          </div>
                        </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>


  
<?php require 'footer.php';?>
