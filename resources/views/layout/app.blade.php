
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{isset($title) ? $title : 'Sultan ADN Travel'}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('template/assets/img/favicon.png')}}" rel="icon">
  <link href="{{url('template/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('template/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('template/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{url('template/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{url('template/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{url('template/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{url('template/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{url('template/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

  <!-- Template Main CSS File -->
  <link href="template/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Hidayah - v2.3.0
  * Template URL: https://bootstrapmade.com/hidayah-free-simple-html-template-for-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
    .services .icon-box {
        margin-bottom: 50px;
        margin-right: 10px;
        background-color:azure
    }
    .row .services{
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
        justify-content: center
    }
    .services .icon-box {
        margin-bottom: 50px;
        margin-right: 20px;
        background-color: azure;
        /* box-shadow: 10px 10px blue; */
        box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        transition: all 0.3s cubic-bezier(.25,.8,.25,1);
        padding: 20px;
        border-radius: 10px;
    }
    .services .icon-box:hover {
        margin-bottom: 50px;
        margin-right: 20px;
        background-color: azure;
        /* box-shadow: 10px 10px blue; */
        box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
        padding: 20px;
        border-radius: 10px;
    }
    .portfolio-info{
        border-radius: 10px;
    }
    .box {
        position: relative;
        max-width: 600px;
        width: 90%;
        height: 200px;
        margin-right: 20px;
        background-color: #fff;
        /* box-shadow: 10px 10px blue; */
        box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        transition: all 0.3s cubic-bezier(.25,.8,.25,1);
        padding: 20px;
        border-radius: 10px;
    }
    .box:hover{
        position: relative;
        max-width: 600px;
        width: 90%;
        height: 200px;
        margin-right: 20px;
        background-color: #fff;
        /* box-shadow: 10px 10px blue; */
        box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        transition: all 0.3s cubic-bezier(.25,.8,.25,1);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
        padding: 20px;
        border-radius: 10px;
    }

    /* common */
    .ribbon {
    width: 150px;
    height: 150px;
    overflow: hidden;
    position: absolute;
    }
    .ribbon::before,
    .ribbon::after {
    position: absolute;
    z-index: -1;
    content: '';
    display: block;
    border: 5px solid #2980b9;
    }
    .ribbon span {
    position: absolute;
    display: block;
    width: 225px;
    padding: 15px 0;
    background-color: #3498db;
    box-shadow: 0 5px 10px rgba(0,0,0,.1);
    color: #fff;
    font: 700 18px/1 'Lato', sans-serif;
    text-shadow: 0 1px 1px rgba(0,0,0,.2);
    text-transform: uppercase;
    text-align: center;
    }

    /* top left*/
    .ribbon-top-left {
    top: -10px;
    left: -10px;
    }
    .ribbon-top-left::before,
    .ribbon-top-left::after {
    border-top-color: transparent;
    border-left-color: transparent;
    }
    .ribbon-top-left::before {
    top: 0;
    right: 0;
    }
    .ribbon-top-left::after {
    bottom: 0;
    left: 0;
    }
    .ribbon-top-left span {
    right: -25px;
    top: 30px;
    transform: rotate(-45deg);
    }

    /* top right*/
    .ribbon-top-right {
    top: -10px;
    right: -10px;
    }
    .ribbon-top-right::before,
    .ribbon-top-right::after {
    border-top-color: transparent;
    border-right-color: transparent;
    }
    .ribbon-top-right::before {
    top: 0;
    left: 0;
    }
    .ribbon-top-right::after {
    bottom: 0;
    right: 0;
    }
    .ribbon-top-right span {
    left: -25px;
    top: 30px;
    transform: rotate(45deg);
    }

    /* bottom left*/
    .ribbon-bottom-left {
    bottom: -10px;
    left: -10px;
    }
    .ribbon-bottom-left::before,
    .ribbon-bottom-left::after {
    border-bottom-color: transparent;
    border-left-color: transparent;
    }
    .ribbon-bottom-left::before {
    bottom: 0;
    right: 0;
    }
    .ribbon-bottom-left::after {
    top: 0;
    left: 0;
    }
    .ribbon-bottom-left span {
    right: -25px;
    bottom: 30px;
    transform: rotate(225deg);
    }

    /* bottom right*/
    .ribbon-bottom-right {
    bottom: -10px;
    right: -10px;
    }
    .ribbon-bottom-right::before,
    .ribbon-bottom-right::after {
    border-bottom-color: transparent;
    border-right-color: transparent;
    }
    .ribbon-bottom-right::before {
    bottom: 0;
    left: 0;
    }
    .ribbon-bottom-right::after {
    top: 0;
    right: 0;
    }
    .ribbon-bottom-right span {
    left: -25px;
    bottom: 30px;
    transform: rotate(-225deg);
    }
    #hero .carousel{
      width: 50%;
      /* margin: 35px; */
      top: 80px;
      left: 55px;
      right: 55px;
      bottom: 55px;
    }
    .nav-menu a:hover, .nav-menu .active > a, .nav-menu li:hover > a {
      color: #fdf498;
    }
    #header.header-scrolled, #header.header-inner-pages {
    background: #058716;
}

    </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-10 d-flex align-items-center justify-content-end">

          <h1 class="logo mr-auto"><a href="index.html">{{isset($header) ? $header : 'Sultan ADN Travel' }}</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="index.html">Beranda</a></li>
              <li><a href="#services">Service Kami</a></li>
              <li><a href="#rute">Rute</a></li>
              <li><a href="#promo">Promo</a></li>
              <li><a href="#contact">Pemesanan</a></li>
            </ul>
          </nav><!-- .nav-menu -->

        </div>
      </div>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div>
      <div class="section_carousel">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
  
          <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
    
          <div class="carousel-inner" role="listbox">
    
            <!-- Slide 1 -->
            <div class="carousel-item active">
              <div class="carousel-container">
                <img src="http://placehold.it/1000x800&amp;text=First+Slide">
              </div>
            </div>
    
            <!-- Slide 2 -->
            <div class="carousel-item">
              <div class="carousel-container">
                <img src="http://placehold.it/1000x800&amp;text=Second+Slide">
              </div>
            </div>
    
            <!-- Slide 3 -->
            <div class="carousel-item">
              <div class="carousel-container">
                <img src="http://placehold.it/1000x800&amp;text=Third+Slide">
              </div>
            </div>
    
          </div>
    
          <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
    
          <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    
        </div>
      </div>
 
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Services</h2>
          <h3>Apa Saja <span> Yang Kami Tawarkan</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row services">
              @foreach ($kategori as $item)
              <div class="col-md-5 icon-box">
                <div class="icon"><i class="ri-pie-chart-line"></i></div>
                <h4 class="title"><a href="">{{$item->nama}}</a></h4>
                <p class="description">{{$item->deskripsi}}</p>
              </div>    
              @endforeach
              
              {{-- <div class="col-md-5 icon-box">
                <div class="icon"><i class="ri-stack-line"></i></div>
                <h4 class="title"><a href="">Dolor Sitema</a></h4>
                <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
              </div>
              <div class="col-md-5 icon-box">
                <div class="icon"><i class="ri-markup-line"></i></div>
                <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
              </div>
              <div class="col-md-5 icon-box">
                <div class="icon"><i class="ri-shape-line"></i></div>
                <h4 class="title"><a href="">Magni Dolores</a></h4>
                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              </div>
              <div class="col-md-5 icon-box">
                <div class="icon"><i class="ri-fingerprint-line"></i></div>
                <h4 class="title"><a href="">Nemo Enim</a></h4>
                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
              </div>
              <div class="col-md-5 icon-box">
                <div class="icon"><i class="ri-body-scan-line"></i></div>
                <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
              </div> --}}
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

     <!-- ======= About Section ======= -->
     <section id="about" class="about">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Kota Tujuan</h2>
          <h3>Check our <span>Services</span></h3>
          <p>Kami menawarkan tujuan dari beberapa kota besa.</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-xl-5 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <div id="accordion">
              <h3>Semarang</h3>
              <div>
                <p>
                Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                </p>
              </div>
              <h3>Temanggung</h3>
              <div>
                <p>
                Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                </p>
              </div>
              <h3>Banjarnegara</h3>
              <div>
                <p>
                Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                suscipit faucibus urna.
                </p>
              </div>
              <h3>Kudus</h3>
              <div>
                <p>
                Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                </p>
                <ul>
                  <li>List item one</li>
                  <li>List item two</li>
                  <li>List item three</li>
                </ul>
              </div>
              <h3>Pati</h3>
              <div>
                <p>
                Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                mauris vel est.
                </p>
                <p>
                Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                inceptos himenaeos.
                </p>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    {{-- <!-- ======= Testimonials Section ======= -->
    <section id="rute" class="testimonials section-bg">
        <div class="container-fluid">
  
          <div class="section-title">
            <h2>Rute Armada</h2>
            <h3>Kemana Aja<span> Sultan ADN Travel</span> Mengantarkanmu?</h3>
          </div>
  
          <div class="row justify-content-center">
            <div class="col-xl-10">
  
              <div class="row">
  
                <div class="col-lg-6">
                  <div class="testimonial-item">
                    <img src="template/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial-item -->
  
                <div class="col-lg-6">
                  <div class="testimonial-item mt-4 mt-lg-0">
                    <img src="template/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial-item -->
  
                <div class="col-lg-6">
                  <div class="testimonial-item mt-4">
                    <img src="template/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial-item -->
  
                <div class="col-lg-6">
                  <div class="testimonial-item mt-4">
                    <img src="template/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial-item -->
  
                <div class="col-lg-6">
                  <div class="testimonial-item mt-4">
                    <img src="template/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial-item -->
  
                <div class="col-lg-6">
                  <div class="testimonial-item mt-4">
                    <img src="template/assets/img/testimonials/testimonials-6.jpg" class="testimonial-img" alt="">
                    <h3>Emily Harison</h3>
                    <h4>Store Owner</h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Eius ipsam praesentium dolor quaerat inventore rerum odio. Quos laudantium adipisci eius. Accusamus qui iste cupiditate sed temporibus est aspernatur. Sequi officiis ea et quia quidem.
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial-item -->
  
              </div>
            </div>
          </div>
  
        </div>
      </section><!-- End Testimonials Section --> --}}

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center">
          <h3>Ingin Memesan Tiket</h3>
          <p> Pesan Tiket sekarang dapatkan promo menarik dari Sultan ADN Travel</p>
          <a class="cta-btn" href="#">Pesan Sekarang</a>
        </div>

      </div>
    </section><!-- End Cta Section -->
    <!-- ======= Testimonials Section ======= -->
    <section id="promo" class="testimonials section-bg">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Promo</h2>
          <h3>Apa Saja <span>Promo</span> Bulan Ini</h3>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">

            <div class="row">

            <div class="box">
                <div class="ribbon ribbon-top-right"><span>DISC 50%</span></div>
                <div>
                    <h4>Rute Jakarta - Semarang</h4>
                </div>
                <div>
                    <h5>Harga Tiket Awal : Rp 100.000</h5>
                </div>
                <div>
                    <h5>Kini Hanya : Rp 50.000</h5>
                </div>
                <a class="cta-btn" href="#"><p>Pesan Sekarang</p></a>
            </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Armada</h2>
          <h3>Top<span> Armada</span></h3>
          <p>Siap mengantar ke tujuan anda dengan aman dan nyaman.</p>
        </div>

        @php
         $url = "http://localhost/travel/public/storage/"   
        @endphp

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">
              @foreach ($armada as $item)             
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="member">
                  <img src="{{$url . $item->url_gambar}}" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>{{$item->nama}}</h4>
                      <span>{{$item->kategori->deskripsi}}</span>
                    </div>
                    <div class="social">
                      <a href=""><i class="icofont-twitter"></i></a>
                      <a href=""><i class="icofont-facebook"></i></a>
                      <a href=""><i class="icofont-instagram"></i></a>
                      <a href=""><i class="icofont-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div> <!-- End Member Item -->
              @endforeach
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Contact</h2>
          <h3>Get In Touch With <span>Us</span></h3>
          <p>Jika ada pertanyaan jangan sungkan, kami layani dengan yang terbaik.</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">

              <div class="col-lg-6">

                <div class="row justify-content-center">

                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-map"></i>
                    <h4>Address</h4>
                    <p>A108 Adam Street,<br>New York, NY 535022</p>
                  </div>
                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-phone"></i>
                    <h4>Call Us</h4>
                    <p>+1 5589 55488 55<br>+1 5589 22548 64</p>
                  </div>
                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-envelope"></i>
                    <h4>Email Us</h4>
                    <p>contact@example.com<br>info@example.com</p>
                  </div>
                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-time-five"></i>
                    <h4>Working Hours</h4>
                    <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>
                  </div>

                </div>

              </div>

              <div class="col-lg-6">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="form-row">
                    <div class="col-md-6 form-group">
                      <label for="name">Your Name</label>
                      <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                      <div class="validate"></div>
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="email">Your Email</label>
                      <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                      <div class="validate"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" rows="8" data-rule="required" data-msg="Please write something for us"></textarea>
                    <div class="validate"></div>
                  </div>
                  <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">

              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Cabang Kami</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Purwokerto</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Semarang</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Wonosobo</a></li>
                </ul>
              </div>

              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Antar Kota</a></li>
                  {{-- <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li> --}}
                </ul>
              </div>

              <div class="col-lg-3 col-md-6 footer-contact">
                <h4>Contact Us</h4>
                <p>
                  A108 Adam Street <br>
                  New York, NY 535022<br>
                  United States <br><br>
                  <strong>Phone:</strong> +1 5589 55488 55<br>
                  <strong>Email:</strong> info@example.com<br>
                </p>

              </div>

              <div class="col-lg-3 col-md-6 footer-info">
                <h3>Sultan ADN Travel</h3>
                <p>Siap mengantar perjalanan anda dengan aman dan nyaman.</p>
                <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Hidayah</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/hidayah-free-simple-html-template-for-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{url('template/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('template/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{url('template/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{url('template/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{url('template/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{url('template/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{url('template/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{url('template/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <!-- Template Main JS File -->
  <script src="{{url('template/assets/js/main.js')}}"></script>

  <script>
    $( function() {
      $( "#accordion" ).accordion();
    } );
    </script>
</body>

</html>