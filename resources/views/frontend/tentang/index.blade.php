@extends('frontend.main')
@section('main')
<section id="hero-1">
    <div class="hero1-container aos-init aos-animate" data-aos="fade-up">
        <div class="container align-self-center">
            <h1>Tentang SPEMGALAS</h1>
          </div>
    </div>



</section>
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb shadow p-3 mb-5 bg-white rounded">
          <li class="breadcrumb-item"><a href="#">Profile</a></li>
          <li class="breadcrumb-item active" aria-current="page">Tentang Sekolah</li>
        </ol>
      </nav>
</div>
<main id="main">

    <section id="content">

        <div class="container aos-init" data-aos="fade-up">

            <h4 align="center">Tentang Sekolah</h4>
            <div class="row" style="margin-top: 100px;">
              <div class="col-lg-6">
                <img src="./assets/img/misi.png" class="img-fluid" alt="">
              </div>

              <div class="col-lg-6">
                <p>
                  SMP Muhammadiyah 13 Surabaya berdiri sejak 1 Juli 1983 yang beralamatkan di Jl. Tambak Segaran No. 27 Surabaya, belakang KAZA (Kapas Krampung Plaza).<br><br>

                  SMP Muhammadiyah 13 Surabaya adalah sekolah yang memadukan nilai-nilai tauhid ke seluruh kurikulum dan aktivitasnya, yang terus menerus disempurnakan untuk membangun paradigma pendidikan yang ideal.<br>
                  Kita percaya bahwa solusi terbaik bagi pendidikan anak-anak adalah pendidikan yang didasari oleh nilai-nilai tauhid. Dengan cara itu, anak-anak diharapkan memiliki akidah yang kokoh, beribadah secara benar dan berakhlak mulia.<br><br>

                  SMP Muhammadiyah 13 Surabaya hadir untuk memberikan solusi terbaik bagi generasi pelanjut dengan pendidikan yang menumbuhkembangkan potensi fitrah; yang meliputi aspek akal, spiritual, fisik, sosial secara optimal dan berimbang.<br><br>

                  SMP Muhammadiyah 13 Surabaya mengintegrasikan keyakinan, pikiran dan tindakan ke dalam lingkungan belajar; baik di sekolah, masjid, keluarga dan masyarakat secara seimbang sehingga akan melahirkan lulusan yang berkualitas, cerdas, kreatif dan siap menghadapi tantangan ke depan serta memberikan pondasi pembentukan manusia seutuhnya, yakni manusia yang beriman, bertaqwa, menguasai IPTEK, berakhlak mulia, cerdas menuju ridha Allah SWT.
                </p>
              </div>
            </div>

            <br><br>


              <h4>Karakter Yang Dibangun</h4><br><br>
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-group visi">
                    <li class="list-group-item sejarah-list d-flex justify-content-between align-items-center" style="margin-top: 30px;">
                      <h5 class="mt-2 ml-3">Karakter Spiritual KeIslaman</h5>
                      <div class="dropdown-user" data-for=".cyruxx"><i class="fa fa-angle-down fa-2x text-muted"></i></div>
                    </li>

                    <div class="cyruxx" style="display: none;">
                        <div class="card shadow-sm p-3 mb-5 rounded">
                            <div class="card-body">
                                <p class="ml-3 mt-2" align="left">
                                    1. Tumbuh kesadaran menjalankan sholat dan ibadah sunnah sehari-hari<br>
                                    2. Senang dan terampil membaca Al-Quran serta hafal juz 30<br>
                                    3. Memiliki pemahaman Islamiyah yang benar<br>
                                    4. Memiliki bekal ilmu agama
                                </p>
                            </div>
                        </div>
                    </div>

                    <li class="list-group-item sejarah-list d-flex justify-content-between align-items-center" style="margin-top: 30px;">
                        <h5 class="mt-2 ml-3">Karakter Pembelajar</h5>
                        <div class="dropdown-user" data-for=".cyruxx-2"><i class="fa fa-angle-down fa-2x text-muted"></i></div>
                      </li>

                      <div class="cyruxx-2" style="display: none;">
                          <div class="card shadow-sm p-3 mb-5 rounded">
                              <div class="card-body">
                                  <p class="ml-3 mt-2" align="left">
                                    1. Tumbuh minat yang tinggi untuk mengerti dan senang belajar<br>
                                    2. Gemar membaca dan menulis<br>
                                    3. Lulus Ujian Nasional dengan nilai yang baik<br>
                                    4. Berfikir logis, kritis dan analitis<br>
                                    5. Memiliki kesiapan memasuki jenjang pendidikan berikutnya
                                  </p>
                              </div>
                          </div>
                      </div>

                      <br><li class="list-group-item sejarah-list d-flex justify-content-between align-items-center" style="margin-top: 30px;">
                        <h5 class="mt-2 ml-3">Karakter Life skill</h5>
                        <div class="dropdown-user" data-for=".cyruxx-3"><i class="fa fa-angle-down fa-2x text-muted"></i></div>
                      </li>

                      <div class="cyruxx-3" style="display: none;">
                          <div class="card shadow-sm p-3 mb-5 rounded">
                              <div class="card-body">
                                  <p class="ml-3 mt-2" align="left">
                                    1. Mampu menghasilkan karya sesuai dengan bakat dan minat siswa<br>
                                    2. Terampil bergaul dan berkomunikasi<br>
                                    3. Mandiri dalam mengurus diri sendiri
                                  </p>
                              </div>
                          </div>
                      </div>
                </ul></div>
                <div class="col-lg-6">
                  <img src="./assets/img/lala-3.png" class="img-fluid" alt="">
                </div>
              </div>
                <br><br>
        </div>

    </section>

  </main>
@endsection
