<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section id="heroo" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container " data-aos="fade-up">
      <h1 style="margin-right: 950px;">Kontak Kami</h1>
    </div>
  </section><!-- End Hero -->
  
  <br>

  <!-- ======= What We Do Section ======= -->
  <section id="what-we-do" class="what-we-do">
      <div class="container">

        <div class="section-title">
          <h2>Kontak Kami</h2>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" style="margin-left: 190px;">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              
              <p><h5>Gd. Plaza Mandiri lt.28</h5></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <p><h5>Gd. Plaza Mandiri lt.228</h5></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <p><h5>Gd. Plaza Mandiri lt.2238</h5></p>
            </div>
          </div>

        </div>

        <div class="row mt-5 justify-content-center">
          <div class="col-lg-5" style="margin-left: 450px">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Pesan" required>
              </div>
              
              <section id="contactt" class="contactt">
        <div class="php-email-form">
            <div class="text-center"><button type="submit">SUBMIT</button></div>
        </div>
    </section>
            </form>
          </div>

        </div>

        <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2945108211497!2d106.81224446476911!3d-6.2248445454939265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f156fbc7682d%3A0x5759a421311f05f5!2sPlaza%20Mandiri%2C%20Jl.%20Gatot%20Subroto%20No.Kav%2036-38%2C%20RT.7%2FRW.3%2C%20Senayan%2C%20Kec.%20Kby.%20Baru%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012190!5e0!3m2!1sid!2sid!4v1664358305269!5m2!1sid!2sid" width="1300" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

      </div>
    </section><!-- End What We Do Section -->


<?= $this->endSection(); ?>