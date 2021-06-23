<!-- Footer -->
<footer>
        <div class="footer-top">
          <div class="container">
            <div class="row">
            <?php
                $koneksi = koneksiDatabase();
                $contact = mysqli_query($koneksi, "SELECT * FROM contact");
                $row = mysqli_fetch_array($contact)
                ?>
              <div class="col-md-5 footer-contact wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                <h3>Contact</h3>
                  <div class="row justify-content-start">
                    <div class="col-1">
                      <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="col-11">
                      <?= $row['alamat'];?>
                    </div>
                  </div>
                  <div class="row justify-content-start">
                    <div class="col-1">
                      <i class="fas fa-phone"></i>
                    </div>
                    <div class="col-11">
                      <?= $row['phone'];?>
                    </div>
                  </div>
                  <div class="row justify-content-start" style="margin-top: 20px;">
                    <div class="col-1">
                      <i class="fas fa-envelope"></i>
                    </div>
                    <div class="col-11">
                      <?= $row['email'];?>
                    </div>
                  </div>
              </div>
              <div class="col-md-5 footer-links wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                <div class="row">
                  <div class="col">
                    <h3>Links</h3>
                </div>
                  </div>
  
                <div class="row">
                  <div class="col-md-4">
                    <p><a class="scroll-link" href="index.php">Beranda</a></p>
                    <p><a href="profil.php">Profil</a></p>
                    <p><a href="news.php">Berita</a></p>
                  </div>
                  <div class="col-md-4">
                    <p><a href="galery.php">Galeri</a></p>
                    <p><a href="contact.php">Kontak</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          <div class="footer-bottom">
            <div class="container">
              <div class="row">
              <?php
                $koneksi = koneksiDatabase();
                $footer = mysqli_query($koneksi, "SELECT * FROM footer");
                $row = mysqli_fetch_array($footer)
                ?>
                  <div class="col-md-6 footer-copyright">
                    Copyright © <?= $row['copyright'];?>
                  </div>
                  <div class="col-md-6 footer-social">
                    <a href="<?= $row['fb'];?>"><i class="fab fa-facebook-f"></i></a> 
                    <a href="<?= $row['twitter'];?>"><i class="fab fa-twitter"></i></a> 
                    <a href="<?= $row['yt'];?>"><i class="fab fa-youtube"></i></a> 
                    <a href="<?= $row['ig'];?>"><i class="fab fa-instagram"></i></a> 
                  </div>
                </div>
              </div>
            </div>
          </footer>
      <!-- akhir footer -->

      <script>
      $(document).on("click", '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
      });
      </script>

     
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
  
      <script type="text/javascript">
          $('.owl-carousel').owlCarousel({
            loop:true,
            margin:20,
            autoplay:true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                },
                600:{
                    items:3,
                },
                1000:{
                    items:5
                }
            }
          })
  
      </script>

      <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");
        
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
            }
        }
        
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>
    </body>
</html>