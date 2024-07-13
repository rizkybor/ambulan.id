@extends('layouts.templates.main')
@section('content')
    
    <!-- Hero Section -->
    <div id="hero" class="hero section dark-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>Pelayanan Ambulans Terpercaya</h1>
            <p>Kami siap memberikan bantuan medis cepat dan terpercaya kapan pun Anda membutuhkannya. </p>
            <div class="d-flex">
              <a href="#about" class="btn-get-started">Get Started</a>
              {{-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/hero-ambulance.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </div><!-- /Hero Section -->

    <!-- Clients Section -->
    <div id="clients" class="clients section light-background">

      <div class="container" data-aos="zoom-in">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>

    </div><!-- /Clients Section -->



    <!-- Services Section -->
    <div id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Kami menyediakan layanan ambulan berkualitas tinggi dengan prioritas utama pada respons cepat dan perawatan medis yang terampil. Tim terlatih kami siap memberikan bantuan medis dalam situasi darurat, membawa Anda dengan aman ke fasilitas kesehatan terdekat untuk perawatan lebih lanjut.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-activity icon"></i></div>
              <h4><a href="" class="stretched-link">Respons Cepat 24/7</a></h4>
              <p>Kami tersedia sepanjang waktu untuk merespons panggilan darurat medis dengan cepat dan efisien, membawa bantuan langsung ke tempat Anda.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
              <h4><a href="" class="stretched-link">Tenaga Medis Terlatih</a></h4>
              <p>Dilengkapi dengan paramedis berpengalaman dan terlatih yang siap memberikan perawatan medis lanjutan di dalam ambulans.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
              <h4><a href="" class="stretched-link">Peralatan Medis Modern</a></h4>
              <p>Ambulans dilengkapi dengan peralatan medis canggih untuk menangani berbagai kondisi darurat, memastikan perawatan awal yang tepat sebelum mencapai fasilitas kesehatan.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-broadcast icon"></i></div>
              <h4><a href="" class="stretched-link">Transportasi Aman dan Nyaman</a></h4>
              <p>Kami menyediakan transportasi medis yang aman dan nyaman, dengan peralatan pendukung untuk memastikan kenyamanan pasien selama perjalanan menuju perawatan medis lebih lanjut.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </div><!-- /Services Section -->

    <!-- Call To Action Section -->
    <div id="call-to-action" class="call-to-action section dark-background">

      <img src="assets/img/cta-bg.jpg" alt="">

      <div class="container">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-9 text-center text-xl-start">
            <h3>Segera Hubungi Layanan Darurat Medis Kami</h3>
            <p>Panggilan darurat ke ambulans adalah langkah kunci dalam situasi medis mendesak.</p>
          </div>
          <div class="col-xl-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Panggilan Darurat</a>
          </div>
        </div>

      </div>

    </div><!-- /Call To Action Section -->


    <!-- Services -->
    <div id="pricing" class="pricing section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="pricing-item featured">
              <h3>Business Plan</h3>
              <ul style="display: flex; justify-content: center">
                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                
              </ul>
              <a href="#" class="buy-btn">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="pricing-item featured">
              <h3>Business Plan</h3>
              <ul style="display: flex; justify-content: center">
                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                
              </ul>
              <a href="#" class="buy-btn">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="pricing-item featured">
              <h3>Business Plan</h3>
              <ul style="display: flex; justify-content: center">
                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                
              </ul>
              <a href="#" class="buy-btn">Buy Now</a>
            </div>
          </div>
        </div>

      </div>
    

    </div><!-- /Team Section -->
    @endsection