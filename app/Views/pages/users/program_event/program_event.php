<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<section id="heroo" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container " data-aos="fade-up">
      <h1 style="margin-right: 950px;">Program & Event</h1>
    </div>
  </section><!-- End Hero -->
  
  <br><br><br><br>

<!-- ======= About Section ======= -->
<section id="aboutt" class="aboutt">
    <div class="container">

        <div class="row">
          
          <div class="col-lg-6 pt-4 pt-lg-0" style="margin-top: 100px;">
            <h3 style="margin-right: 100px; margin-left: 120px"><a href="" style="color: gold;"> 21.966 Mahasiswa</a> Sudah Magang Melalui Kami.</h3>
            <br><br>
            <p style="font-size: 15px; margin-left: 120px; margin-right: 80px;">
            Untuk menjawab tantangan SDM BUMN dimanas yang akan datang. menciptakan SDM unggul dengan kompetensi yang mumpuni melalui Pemagangan di BUMN dan Mencetak SDM yang berdaya saing global. FHCI Menghadirkan Sinergi melalui BUMN Hadir Untuk Menciptakan SDM yang berjiwa Entreprenuer sesuai dengan kebutuhan BUMN.
            </p>
          </div>

            <div class="col-lg-6">
                <img src="Lumia/assets/img/1.jpg" width="60%" height="35%" style="margin-left: 110px;" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End About Section -->
    <br><br>

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Program Unggulan</h2>
          <p>Program Unggulan yang terdapat dalam FHCI</p>
        </div>

        

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="Lumia/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Magang Mahasiswa Bersertifikat</h3>
                <a>
                  Memberikan kesempatan kepada mahasiswa untuk menyalurkan potensi dan menggali pengalaman di BUMN.
                </a>
                <br><br><br>
                <button class="btn btn-outline-warning">LEBIH LANJUT -></button>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="Lumia/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>BUMN People Analytics</h3>
                <a>
                  Membantu BUMN dalam mengambil keputusan dalam perencanaan, pengelolaan dan pengembangan karyawan.
                </a>
                <br><br><br>
                <button class="btn btn-outline-warning">LEBIH LANJUT -></button>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="Lumia/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Talent Internship & Advancement</h3>
                <a>
                Berbagi pengetahuan dan best practices (sinergi) antar perusahaan baik domestik maupun global untuk meningkatkan daya saing dalam industri.
                </a>
                <br><br><br>
                <button class="btn btn-outline-warning">LEBIH LANJUT -></button>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="Lumia/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Sharing Best Practice BUMN</h3>
                <a>
                Sarana berbagi pengetahuan, berinteraksi, bersinergi dan saling belajar best practice di lingkungan BUMN.
                </a>
                <br><br><br>
                <button class="btn btn-outline-warning">LEBIH LANJUT -></button>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="Lumia/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Lembaga Sertifikasi Profesional</h3>
                <a>
                Meningkatkan kesiapan skill & knowledge tenaga kerja menuju Globalisasi dan Standarisasi kompetensi di lingkungan BUMN.
                </a>
                <br><br><br>
                <button class="btn btn-outline-warning">LEBIH LANJUT -></button>
              </div>
            </div>
            <!-- End testimonial item -->
            

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <section id="contactt" class="contactt">
        <div class="php-email-form">
            <div class="text-center"><button type="submit">Cari Event</button></div>
        </div>
    </section>


<?= $this->endSection(); ?>
