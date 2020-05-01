@extends('frontend.main')
@section('main')
<section id="hero">

    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <h1>Hallo, Selamat Datang di SPEMGALAS</h1>
          <p>Sekolah islam memadukan nilai-nilai tauhid ke seluruh kurikulum dan aktivitasnya </p>
          <a href="ppdb.html" class="btn-home">Pendaftaran</a>&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="berita.html" class="btn-home2">Berita Terkini</a><br><br>
        </div>
        <div class="col-lg-6">
          <img src="{{asset('assets/img/banner.png')}}" class="img-fluid" alt="">
        </div>

      </div>
    </div>

  </section>
<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-xl-6 col-lg-6 d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <div class="box-heading" data-aos="fade-up">
              <img src="{{asset('assets/img/lala-1.png')}}" class="img-fluid" alt="">

            </div>
          </div>
          <div class="col-xl-6 col-lg-6 video-box d-flex justify-content-center align-items-center py-5 px-lg-5" data-aos="zoom-in">
            <div class="box-heading" data-aos="fade-up">
              <h3>Kenal Lebih Dekat  </h3>
              <p>SPEMGALAS atau SMP Muhamaad 13 Surabaya
                berdiri sejak 1 Juli 1983 yang beralamatkan di
                Jl. Tambak Segaran No. 27 Surabaya, belakang
                KAZA (Kapas Krampung Plaza). </p> <br>

                <a href="tentang.html" class="about btn-about">Baca Selanjutnya</a>
            </div>
          </div>
        </div>

          <div class="row">
            <div class="col-xl-6 col-lg-6 video-box d-flex justify-content-center align-items-center py-5 px-lg-5" data-aos="zoom-in">
              <div class="box-heading" data-aos="fade-up">
                <h3>Gudang Prestasi</h3>
                <p>SPEMGALAS menunjang lahirnya bakat dan
                  kecerdasan siswanya. Prestasi datang dari dukungan
                  dan doa dari berbagai pihak untuk meraih
                  kemenangan dan kejuaraan dengan sepenuh hati </p> <br>

                </div>
              </div>
              <div class="col-xl-6 col-lg-6 d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                <div class="box-heading" data-aos="fade-up">
                  <img src="{{asset('assets/img/lala.png')}}" class="img-fluid" alt="">

                </div>
              </div>
            </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Informasi Section ======= -->
    <section id="berita" class="berita">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h3 align="center">
            Berita Terkini
            <div class="border1 mt-2" style="border-bottom: 7px solid #3B519C; width: 220px;"></div>
          </h3>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up">
            <div class="card" style="width: 20rem;">
              <img src="{{asset('assets/img/info-1.png')}}" class="card-img-top" alt="Informasi Spemgalas">
              <div class="card-body">
                <h6 class="card-title">PELAKSANAAN USBN BK </h6>
                <p class="card-text">Pelaksanaan Ujian Sekolah Berbasis Nasional –
                  Berbasis Komputer (USBN-BK) kelas IX sedang
                  berlangsung mulai tanggal 25 Maret – 9 April ....</p>
                  <hr>
                <span class="text-muted"><i class="icofont-calendar" style="color: #3B519C;"></i>&nbsp; February, 19 september 2020</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="card" style="width: 20rem;">
              <img src="{{asset('assets/img/info-2.png')}}" class="card-img-top" alt="Informasi Spemgalas">
              <div class="card-body">
                <h6 class="card-title">Penilaian Akhir Semester</h6>
                <p class="card-text">Pelaksanaan Ujian Sekolah Berbasis Nasional –
                  Berbasis Komputer (USBN-BK) kelas IX sedang
                  berlangsung mulai tanggal 25 Maret – 9 April .... </p>
                  <hr>
                <span class="text-muted"><i class="icofont-calendar" style="color: #3B519C;"></i>&nbsp; February, 19 september 2020</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="card" style="width: 20rem;">
              <img src="{{asset('assets/img/info-3.png')}}" class="card-img-top" alt="Informasi Spemgalas">
              <div class="card-body">
                <h6 class="card-title">SIMULASI UNBK 2019</h6>
                <p class="card-text">Pelaksanaan Ujian Sekolah Berbasis Nasional –
                  Berbasis Komputer (USBN-BK) kelas IX sedang
                  berlangsung mulai tanggal 25 Maret – 9 April ....</p>
                  <hr>
                <span class="text-muted"><i class="icofont-calendar" style="color: #3B519C;"></i>&nbsp; February, 19 september 2020</span>
              </div>
            </div>
          </div>

        </div>
        <div class="lainnya" data-aos="fade-up" style="margin-top: 40px;" align="center">
          <a href="berita.html" class="btn-berita">Lihat Lainnya</a>
        </div>

      </div>
    </section><!-- End Why Us Section -->

      <section id="bagian">
          <div class="container">
            <div class="row">
              <div class="col" data-aos="fade-left">
                <h3>Jadi Bagian dari SPEMGALAS</h3>
              </div>
              <div class="col" align="right" data-aos="fade-right">
                <a href="ppdb.html" class="btn btn-bagian">Daftar Sekarang</a>
              </div>
            </div>
          </div>
      </section>


  </main>


@endsection
