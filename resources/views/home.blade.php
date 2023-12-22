@extends('layouts.index')

@section('hero')
  @include('sections.hero')
@endsection

@section('content')
<!-- ======= About Section ======= -->
<section id="about" class="about bg-black">
  <div class="container" data-aos="fade-up">

    <div class="row">
      <div class="col-lg-3 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
        <img src="/assets/img/logo-himatemi.png" class="img-fluid" alt="">
      </div>
      <div class="col-lg-8 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
        <h3 class="text-warning">Sejarah HIMATEMI</h3>
        <p class="text-light">
          Organisasi Himpunan Mahasiwa Teknik Elektromedik Se-Indonesia atau dikenal dengan HIMATEMI diresmikan pada tanggal 28 Maret 2015. HIMATEMI merupakan lembaga kemahasiswaan tertinggi di seluruh institusi teknik elektromedik yang mempunyai hubungan koordinatif,dan  konsultatif. Kedudukan HIMATEMI adalah organisasi independen yang bermitra pada Asosiasi Pendidikan Tinggi Elektromedik (APTEMI) dan Organisasi Profesi Ikatan Elektromedis Indonesia (IKATEMI).
        </p>
      </div>
    </div>

  </div>
</section><!-- End About Section -->

<!-- ======= Features Section ======= -->
<section id="features" class="features bg-warning">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <p class="text-center">VISI & MISI</p>
    </div>

    <div class="row">
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
        <h3 class="text-black fst-italic text-center">VISI :</h3>
        <p class="text-black text-center fs-5">
          <i class="bx bxs-quote-alt-left"></i>
          Membangun sumber daya manusia elektromedik yang profesional beintegritas dan bermartabat serta memberikan manfaat dan meningkatkan kesejahteraan pada masyarakat.
          <i class="bx bxs-quote-alt-right"></i>
        </p>
      </div>
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
        <h3 class="text-black fst-italic text-center">MISI :</h3>
        <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
          <i class="bx bx-check"></i>
          <p class="text-black">Menumbuhkan jiwa HIMATEMI kepada mahasiswa elektromedik Indonesia.</p>
        </div>
        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
          <i class="bx bx-check"></i>
          <p class="text-black">Meningkatkan sumber daya manusia mahasiswa teknik elektromedik yang berkelanjutan, berkualitas, dan merata.</p>
        </div>
        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
          <i class="bx bx-check"></i>
          <p class="text-black">Meningkatkan kualitas pengurus HIMATEMI.</p>
        </div>
        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
          <i class="bx bx-check"></i>
          <p class="text-black">Memperjuangkan hak serta kewajiban mahasiswa teknik elektromedik.</p>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Features Section -->

<style>
  .member-img img{aspect-ratio: 16/9;object-fit: cover}
  .member-info{background-color: var(--bs-warning);}
  .member-info span{color: var(--bs-dark) !important}
</style>

<!-- ======= Team Section ======= -->
<section id="team" class="team bg-black">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Dokumentasi</h2>
      <p class="text-warning">Program Kerja</p>
    </div>

    <div class="row">

      <div class="col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="100">
          <div class="member-img">
            <img src="/assets/img/documentation/documentation1.jpg" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <h4>RAKERNAS PERIODE 2023/2024</h4>
            <span>28 Oktober 2023</span>
          </div>
        </div>
      </div>

      <div class="col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="100">
          <div class="member-img">
            <img src="/assets/img/documentation/documentation2.jpg" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <h4>RAKERWIL DPW 1 PERIODE 2023/2024</h4>
            <span>16 Oktober 2023</span>
          </div>
        </div>
      </div>

      <div class="col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="100">
          <div class="member-img">
            <img src="/assets/img/documentation/documentation3.jpg" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <h4>RAKERWIL DPW 2 PERIODE 2023/2024</h4>
            <span>15 Oktober 2023</span>
          </div>
        </div>
      </div>

      <div class="col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="100">
          <div class="member-img">
            <img src="/assets/img/documentation/documentation4.jpg" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <h4>RAKERWIL DPW 3 PERIODE 2023/2024</h4>
            <span>24 September 2023</span>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Team Section -->

@endsection