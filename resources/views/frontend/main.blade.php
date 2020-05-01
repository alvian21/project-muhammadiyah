<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SMP Muhammadiyah 13 Surabaya</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
 <link href="{{asset('assets/img/logo.png')}}" rel="icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
    @include('frontend.include.css')
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-phone"></i> 031-3772661 &nbsp;
        <i class="icofont-envelope"></i><a href="mailto:smpmuh_13sby@yahoo.com">smpmuh_13sby@yahoo.com</a>
      </div>
      <div class="social-links">
        <a href="https://www.facebook.com/SMP-Muhammadiyah-13-Surabaya-1060051160727782/" class="facebook" target="blank"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/smpmuh13sby/" class="instagram" target="blank"><i class="icofont-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UCqTBxFnTPPQ1RIxiKTSrnOQ" class="youtube" target="blank"><i class="icofont-youtube"></i></a>
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
    @include('frontend.include.header')
  <!-- End Header -->

  @yield('main')
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">
        <div class="row">
          <div class="col-sm-4" align="left">
            <img src="{{asset('assets/img/logo-2.png')}}" class="img-fluid" alt="">
            <p>Hallo, Selamat Datang di SMP Muhammadiyah
              13 Surabaya. Sekolah islam memadukan nilai-nilai
              tauhid ke seluruh kurikulum dan aktivitasnya </p>

              <div class="social-links">
                <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                <a href="#" class="youtube"><i class="icofont-youtube"></i></a>
                <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
              </div><br><br>
          </div>
          <div class="col-sm-4" align="left">
            <h5>Menu</h5><br><br>
              <div class="row">
                <div class="col">
                  <a href="">Profil</a><br>
                  <a href="">Tentang Kami</a><br>
                  <a href="">Visi Misi</a><br>
                  <a href="">Akreditasi</a><br>
                  <a href="">Beasiswa</a><br>
                  <a href="">Staff dan Guru</a><br>
                  <a href="">Mars Muhammadiyah</a><br>

                </div>
                <div class="col">
                  <a href="">Ekstrakulikuler</a><br><br>
                  <a href="">Galeri</a><br><br>
                  <a href="">Berita</a><br><br>
                  <a href="">Pendaftaran</a><br><br>
                </div>
              </div>
          </div>
          <div class="col-sm-4" align="left">
            <h5>Informasi</h5>
            <p><i class="icofont-location-arrow"></i> Jl. Tambak Segaran No. 27 Surabaya<br/>
               <i class="icofont-phone"></i> 031-3772661 <br/>
               <i class="icofont-envelope"></i> smpmuh_13sby@yahoo.com</p>
          </div>
        </div>
      </div>

    </footer><!-- End Footer -->
        <div class="akhir" align="center">
          <small class="mt-1">2020 © All Rights Reserved Design By @Tim Elit</small>
        </div>

  <a href="#" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
        @include('frontend.include.js')

</body>

</html>
