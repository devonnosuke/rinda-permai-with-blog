<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>BTN Rinda Permai | Home</title>
  <!-- <meta content="" name="description" /> -->
  <!-- <meta content="" name="keywords" /> -->
  <meta name="description" content="Dapatkan Rumah yang nyaman bersama BTN Rinda Permai. Perumahan Tondo di Kota Palu, Perumahan BTN di Kota Palu Serta salasatu perumahan terbaik." />
  <meta name="og:title" content="Perumahan BTN Rinda Permai palu" />
  <meta name="og:url" content="https://rindapermai.com" />
  <meta name="og:description" content="Perumahan BTN di Kota Palu Serta salasatu perumahan terbaik." />
  <meta name="og:image" content="<?= base_url(); ?>/img/rumah1.jpg" />

  <!-- Favicons -->
  <!-- <link href="<?= base_url(); ?>/img/favicon.png" rel="icon" />
    <link href="<?= base_url(); ?>/img/apple-touch-icon.png" rel="apple-touch-icon" /> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="<?= base_url(); ?>/vendor/animate.css/animate.min.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
  <!-- Template Main CSS File -->
  <link href="<?= base_url(); ?>/css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url(); ?>/css/wa-button.css" />
  <link rel="shortcut icon" href="<?= base_url(); ?>/img/favicon.ico" />
  <link rel="stylesheet" href="<?= base_url(); ?>/css/lightgallery.min.css" />
  <!-- Meta Pixel Code -->
  <script>
    !(function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) :
          n.queue.push(arguments);
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = "2.0";
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s);
    })(
      window,
      document,
      "script",
      "https://connect.facebook.net/en_US/fbevents.js"
    );
    fbq("init", "806080587199783");
    fbq("track", "PageView");
  </script>
  <noscript><img height="1" width="1" style="display: none" src="https://www.facebook.com/tr?id=806080587199783&ev=PageView&noscript=1" /></noscript>
  <!-- End Meta Pixel Code -->
</head>

<body>
  <!-- ======= Property Search Section ======= -->
  <!-- <div class="click-closed"></div> -->
  <!--/ Form Search Star /-->
  <!-- <div class="box-collapse">
      <div class="title-box-d">
        <h3 class="title-d">Search Property</h3>
      </div>
      <span class="close-box-collapse right-boxed bi bi-x"></span>
      <div class="box-collapse-wrap form">
        <form class="form-a">
          <div class="row">
            <div class="col-md-12 mb-2">
              <div class="form-group">
                <label class="pb-2" for="Type">Keyword</label>
                <input
                  type="text"
                  class="form-control form-control-lg form-control-a"
                  placeholder="Keyword"
                />
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="Type">Type</label>
                <select
                  class="form-control form-select form-control-a"
                  id="Type"
                >
                  <option>All Type</option>
                  <option>For Rent</option>
                  <option>For Sale</option>
                  <option>Open House</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="city">City</label>
                <select
                  class="form-control form-select form-control-a"
                  id="city"
                >
                  <option>All City</option>
                  <option>Alabama</option>
                  <option>Arizona</option>
                  <option>California</option>
                  <option>Colorado</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="bedrooms">Bedrooms</label>
                <select
                  class="form-control form-select form-control-a"
                  id="bedrooms"
                >
                  <option>Any</option>
                  <option>01</option>
                  <option>02</option>
                  <option>03</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="garages">Garages</label>
                <select
                  class="form-control form-select form-control-a"
                  id="garages"
                >
                  <option>Any</option>
                  <option>01</option>
                  <option>02</option>
                  <option>03</option>
                  <option>04</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="bathrooms">Bathrooms</label>
                <select
                  class="form-control form-select form-control-a"
                  id="bathrooms"
                >
                  <option>Any</option>
                  <option>01</option>
                  <option>02</option>
                  <option>03</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="price">Min Price</label>
                <select
                  class="form-control form-select form-control-a"
                  id="price"
                >
                  <option>Unlimite</option>
                  <option>$50,000</option>
                  <option>$100,000</option>
                  <option>$150,000</option>
                  <option>$200,000</option>
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <button type="submit" class="btn btn-b">Search Property</button>
            </div>
          </div>
        </form>
      </div>
    </div> -->
  <!-- End Property Search Section -->

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html">
        <img src="<?= base_url(); ?>/img/logo-horizontal-rinda-permai.png" alt="#" style="width: 300px; padding: 20px; padding-left: 5px" />
      </a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link active" href="index.html">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="property-grid.html">Property</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
        </ul>
      </div>
      <!-- 
        <button
          type="button"
          class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse"
          data-bs-toggle="collapse"
          data-bs-target="#navbarTogglerDemo01"
        >
          <i class="bi bi-search"></i>
        </button> -->
    </div>
  </nav>
  <!-- End Header/Navbar -->

  <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel swiper position-relative">
    <div class="swiper-wrapper">
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(<?= base_url(); ?>/img/rumah1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">
                      Tondo, Palu City <br />
                      94119
                    </p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b"></span> Type <br />
                      Magnolia
                    </h1>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">LT 105 | LB 45</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(<?= base_url(); ?>/img/rumah2.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">
                      Tondo, Palu City <br />
                      94119
                    </p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b"></span> Type <br />
                      Magnolia
                    </h1>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">LT 105 | LB 45</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(<?= base_url(); ?>/img/rumah3.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">
                      Tondo, Palu City <br />
                      94119
                    </p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b"></span> Type <br />
                      Magnolia
                    </h1>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">LT 105 | LB 45</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
  <!-- End Intro Section -->

  <main id="main">
    <!-- ======= Facility Section ======= -->
    <section class="section-services section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 style="text-align: center">Promo!</h1>
            <h1 style="text-align: center">
              Cashback <b>5%</b> dan <b>Free Biaya Notaris Hingga BPHTB</b>
            </h1>
            <h2 id="countDown"></h2>
            <a href="https://api.whatsapp.com/send?phone=%2B6287888017841&text=Hallo,%20saya telah%20mengunjungi%20rindapermai.com%20dan%20saya%20ingin%20bertanya" target="_blank" style="
                  margin: 0 auto;
                  display: block;
                  width: fit-content;
                  font-size: 1.6rem;
                  padding: 0.6rem 0;
                "><span class="price-a call-now">Call Now <i class="bi bi-whatsapp icon-ml"></i> </span></a>
          </div>
        </div>
      </div>
    </section>
    <section class="section-services section-t8" style="background-color: beige; margin-top: 6rem; padding-bottom: 8rem">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Map location</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12" id="maplokasi">
            <a href="<?= base_url(); ?>/img/anim/Map-lokasi.png">
              <img class="fasilitas-img" src="<?= base_url(); ?>/img/anim/Map-lokasi.png" />
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- ======= Facility Section ======= -->
    <section class="section-services section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Public Facilities</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12" id="anim">
            <a href="<?= base_url(); ?>/img/anim/Animation-Map-FINAL.gif">
              <img class="fasilitas-img" src="<?= base_url(); ?>/img/anim/Animation-Map-FINAL.gif" alt="" />
            </a>
          </div>
          <div class="col-md-12">
            <div id="public-thumbnials" class="row pt-5">
              <a href="<?= base_url(); ?>/img/property/prop5.jpg" class="col-md-2">
                <img class="img-fluid" src="<?= base_url(); ?>/img/property/prop5.jpg" />
              </a>
              <a href="<?= base_url(); ?>/img/property/prop4.jpg" class="col-md-2">
                <img class="img-fluid" src="<?= base_url(); ?>/img/property/prop4.jpg" />
              </a>
              <a href="<?= base_url(); ?>/img/property/prop2.jpg" class="col-md-2">
                <img class="img-fluid" src="<?= base_url(); ?>/img/property/prop2.jpg" />
              </a>
              <a href="<?= base_url(); ?>/img/property/prop3.jpg" class="col-md-2">
                <img class="img-fluid" src="<?= base_url(); ?>/img/property/prop3.jpg" />
              </a>
              <a href="<?= base_url(); ?>/img/property/prop1.jpg" class="col-md-2">
                <img class="img-fluid" src="<?= base_url(); ?>/img/property/prop1.jpg" />
              </a>
              <a href="<?= base_url(); ?>/img/property/prop6.jpg" class="col-md-2">
                <img class="img-fluid" src="<?= base_url(); ?>/img/property/prop6.jpg" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Facility Section -->

    <!-- ======= Services Section ======= -->
    <section class="section-services section-t8" style="background-color: beige; margin-top: 6rem; padding-bottom: 8rem">
      <div class="container">
        <div class="row">
          <div class="col-md-6 facility">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-people"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">JOGGING TRACK</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Jogging Track is the perfect place for a daily walk or
                  run.<br />
                  The smooth,non-skid surface, makes jogging safe and easy for
                  everyone.<br />
                  Adorable streetlamps add to the atmosphere at night.
                </p>
              </div>
              <div class="card-footer-c">
                <button class="link-c link-icon fac" id="facility-1">
                  See Photos
                  <span class="bi bi-image"></span>
                </button>
              </div>
            </div>
          </div>
          <div class="col-md-6 facility">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-fast-forward"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">PLAY GROUND</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  This Playground for Family is the best place for your child
                  to develop essential life skills and have fun at the same
                  time. Your kids will learn how to play safely and
                  responsibly, focus on their strength and coordination, share
                  their ideas and opinions, and follow.<br />
                </p>
              </div>
              <div class="card-footer-c">
                <button class="link-c link-icon fac" id="facility-2">
                  See Photos
                  <span class="bi bi-image"></span>
                </button>
              </div>
            </div>
          </div>
          <div class="col-md-6 facility">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-tree"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">COMMUNAL SPACE</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Create a place of comfort, relaxation and reflection in your
                  heart with the,,<br />
                  Communal Space park bench by architect Ryan Ryaldi.
                  Featuring concrate and weatherproof upholstery, this elegant
                  outdoor seating option, is perfect for parks, public squares
                  and other urban settings.
                </p>
              </div>
              <div class="card-footer-c">
                <button class="link-c link-icon fac" id="facility-3">
                  See Photos
                  <span class="bi bi-image"></span>
                </button>
              </div>
            </div>
          </div>
          <div class="col-md-6 facility">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-square-half"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">BADMINTON COURTS</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Play, Renew and Recapture. that s the simple approach to
                  badminton from Badmintons Courts.,<br />
                  On a court in your backyard or neighborhood court at your
                  local rec center or community center, you can practice and
                  play with friends and family for free.
                </p>
              </div>
              <div class="card-footer-c">
                <button class="link-c link-icon fac" id="facility-4">
                  See Photos
                  <span class="bi bi-image"></span>
                </button>
              </div>
            </div>
          </div>
          <div class="col-md-12 facility">
            <div class="card-box-c foo mosque">
              <div class="card-header-c d-flex title-mosque">
                <div class="card-box-ico">
                  <img src="<?= base_url(); ?>/mosque-solid.svg" style="width: 4rem; height: 4rem" />
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">MOSQUE (MASJID)</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  The Masjid Ghaizan Al-Ghazali is the largest place of
                  worship. It has a comfortable, quiet and spacious parking
                  next to it with plenty of space for all your vehicles. If
                  you want to get sure about any time of day, MOSQUE will have
                  the perfect light that works best for you.
                </p>
              </div>
              <div class="card-footer-c">
                <button class="link-c link-icon fac" id="facility-5">
                  See Photos
                  <span class="bi bi-image"></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Latest Properties Section ======= -->
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Latest Properties</h2>
              </div>
              <div class="title-link">
                <a href="property-single.html">All Property
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="property-carousel" class="swiper">
          <div class="swiper-wrapper">
            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="<?= base_url(); ?>/img/property/IMG-7246.jpg" alt="" class="img-a img-fluid" />
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="property-single.html">TYPE<br />
                          MAGNOLIA (HOOK)</a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <a href="https://api.whatsapp.com/send?phone=%2B6287888017841&text=Hallo,%20saya telah%20mengunjungi%20rindapermai.com%20dan%20saya%20ingin%20bertanya" target="_blank">
                          <span class="price-a">Call Now
                            <i class="bi bi-whatsapp icon-ml"></i> </span></a>
                      </div>
                      <a href="property-single.html" class="link-a">Click here to view
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Area</h4>
                          <span>142m<sup>2</sup> </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Beds</h4>
                          <span>2</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Baths</h4>
                          <span>1</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garages</h4>
                          <span>1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End carousel item -->

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="<?= base_url(); ?>/img/property/IMG-7257.jpg" alt="" class="img-a img-fluid" />
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="property-single.html">TYPE<br />
                          MAGNOLIA (MID)</a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <a href="https://api.whatsapp.com/send?phone=%2B6287888017841&text=Hallo,%20saya telah%20mengunjungi%20rindapermai.com%20dan%20saya%20ingin%20bertanya" target="_blank">
                          <span class="price-a">Call Now
                            <i class="bi bi-whatsapp icon-ml"></i> </span></a>
                      </div>
                      <a href="property-single.html" class="link-a">Click here to view
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Area</h4>
                          <span>105m
                            <sup>2</sup>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Beds</h4>
                          <span>2</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Baths</h4>
                          <span>1</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garages</h4>
                          <span>1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End carousel item -->
          </div>
        </div>
        <div class="propery-carousel-pagination carousel-pagination"></div>
      </div>
    </section>
    <!-- End Latest Properties Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- <section class="section-testimonials section-t8 nav-arrow-a">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box">
                  <h2 class="title-a">Testimonials</h2>
                </div>
              </div>
            </div>
          </div>

          <div id="testimonial-carousel" class="swiper">
            <div class="swiper-wrapper">
              <div class="carousel-item-a swiper-slide">
                <div class="testimonials-box">
                  <div class="row">
                    <div class="col-sm-12 col-md-6">
                      <div class="testimonial-img">
                        <img
                          src="<?= base_url(); ?>/img/testimonial-1.jpg"
                          alt=""
                          class="img-fluid"
                        />
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                      <div class="testimonial-ico">
                        <i class="bi bi-chat-quote-fill"></i>
                      </div>
                      <div class="testimonials-content">
                        <p class="testimonial-text">
                          Lorem ipsum dolor sit amet, consectetur adipisicing
                          elit. Omnis, cupiditate ea nam praesentium debitis hic
                          ber quibusdam voluptatibus officia expedita corpori.
                        </p>
                      </div>
                      <div class="testimonial-author-box">
                        <img
                          src="<?= base_url(); ?>/img/mini-testimonial-1.jpg"
                          alt=""
                          class="testimonial-avatar"
                        />
                        <h5 class="testimonial-author">Albert & Erika</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
    <!-- End carousel item -->

    <!-- <div class="carousel-item-a swiper-slide">
                <div class="testimonials-box">
                  <div class="row">
                    <div class="col-sm-12 col-md-6">
                      <div class="testimonial-img">
                        <img
                          src="<?= base_url(); ?>/img/testimonial-2.jpg"
                          alt=""
                          class="img-fluid"
                        />
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                      <div class="testimonial-ico">
                        <i class="bi bi-chat-quote-fill"></i>
                      </div>
                      <div class="testimonials-content">
                        <p class="testimonial-text">
                          Lorem ipsum dolor sit amet, consectetur adipisicing
                          elit. Omnis, cupiditate ea nam praesentium debitis hic
                          ber quibusdam voluptatibus officia expedita corpori.
                        </p>
                      </div>
                      <div class="testimonial-author-box">
                        <img
                          src="<?= base_url(); ?>/img/mini-testimonial-2.jpg"
                          alt=""
                          class="testimonial-avatar"
                        />
                        <h5 class="testimonial-author">Pablo & Emma</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
    <!-- End carousel item -->
    <!-- </div>
          </div>
          <div
            class="testimonial-carousel-pagination carousel-pagination"
          ></div>
        </div>
      </section>  -->
    <!-- End Testimonials Section -->
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Rinda Permai Residence</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                PT.Baliem Indah Property (BIP),Bergerak dalam bidang
                konstruksi dan developer yang berkomitmen memberikan mutu
                kualitas yang diharapkan oleh para penggunanya.
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Phone .</span>
                  +6287888017841
                </li>
                <li class="color-a">
                  <span class="color-text-a">Email .</span>
                  admin@rindapermai.com
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Our Links</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i>
                    <a href="index.html">Home</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i>
                    <a href="about.html">About</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i>
                    <a href="property-single.html">Property</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i>
                    <a href="contact.html">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="index.html">Home</a>
              </li>
              <li class="list-inline-item">
                <a href="about.html">About</a>
              </li>
              <li class="list-inline-item">
                <a href="property-single.html">Property</a>
              </li>
              <li class="list-inline-item">
                <a href="contact.html">Contact</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href=" https://www.facebook.com/profile.php?id=100067486944729" target="_blank">
                  <i class="bi bi-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://api.whatsapp.com/send?phone=%2B6287888017841&text=Hallo,%20saya telah%20mengunjungi%20rindapermai.com%20dan%20saya%20ingin%20bertanya" target="_blank">
                  <i class="bi bi-whatsapp" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href=" https://instagram.com/rinda_permai?igshid=YmMyMTA2M2Y=" target="_blank">
                  <i class="bi bi-instagram" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright 2022
              <span class="color-a">RindaPermai</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
          -->
            Created by <a href="https://yuracompany.com/">YuraCompany</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <input class="chatMenu hidden" id="offchatMenu" type="checkbox" />
  <label class="chatButton" for="offchatMenu">
    <svg class="svg-1" viewBox="0 0 32 32">
      <g>
        <path d="M16,2A13,13,0,0,0,8,25.23V29a1,1,0,0,0,.51.87A1,1,0,0,0,9,30a1,1,0,0,0,.51-.14l3.65-2.19A12.64,12.64,0,0,0,16,28,13,13,0,0,0,16,2Zm0,24a11.13,11.13,0,0,1-2.76-.36,1,1,0,0,0-.76.11L10,27.23v-2.5a1,1,0,0,0-.42-.81A11,11,0,1,1,16,26Z"></path>
        <path d="M19.86,15.18a1.9,1.9,0,0,0-2.64,0l-.09.09-1.4-1.4.09-.09a1.86,1.86,0,0,0,0-2.64L14.23,9.55a1.9,1.9,0,0,0-2.64,0l-.8.79a3.56,3.56,0,0,0-.5,3.76,10.64,10.64,0,0,0,2.62,4A8.7,8.7,0,0,0,18.56,21a2.92,2.92,0,0,0,2.1-.79l.79-.8a1.86,1.86,0,0,0,0-2.64Zm-.62,3.61c-.57.58-2.78,0-4.92-2.11a8.88,8.88,0,0,1-2.13-3.21c-.26-.79-.25-1.44,0-1.71l.7-.7,1.4,1.4-.7.7a1,1,0,0,0,0,1.41l2.82,2.82a1,1,0,0,0,1.41,0l.7-.7,1.4,1.4Z"></path>
      </g>
    </svg>
    <svg class="svg-2" viewBox="0 0 512 512">
      <path d="M278.6 256l68.2-68.2c6.2-6.2 6.2-16.4 0-22.6-6.2-6.2-16.4-6.2-22.6 0L256 233.4l-68.2-68.2c-6.2-6.2-16.4-6.2-22.6 0-3.1 3.1-4.7 7.2-4.7 11.3 0 4.1 1.6 8.2 4.7 11.3l68.2 68.2-68.2 68.2c-3.1 3.1-4.7 7.2-4.7 11.3 0 4.1 1.6 8.2 4.7 11.3 6.2 6.2 16.4 6.2 22.6 0l68.2-68.2 68.2 68.2c6.2 6.2 16.4 6.2 22.6 0 6.2-6.2 6.2-16.4 0-22.6L278.6 256z"></path>
    </svg>
  </label>

  <div class="chatBox">
    <div class="chatContent">
      <div class="chatHeader">
        <svg viewbox="0 0 32 32">
          <path d="M24,22a1,1,0,0,1-.64-.23L18.84,18H17A8,8,0,0,1,17,2h6a8,8,0,0,1,2,15.74V21a1,1,0,0,1-.58.91A1,1,0,0,1,24,22ZM17,4a6,6,0,0,0,0,12h2.2a1,1,0,0,1,.64.23L23,18.86V16.92a1,1,0,0,1,.86-1A6,6,0,0,0,23,4Z"></path>
          <rect height="2" width="2" x="19" y="9"></rect>
          <rect height="2" width="2" x="14" y="9"></rect>
          <rect height="2" width="2" x="24" y="9"></rect>
          <path d="M8,30a1,1,0,0,1-.42-.09A1,1,0,0,1,7,29V25.74a8,8,0,0,1-1.28-15,1,1,0,1,1,.82,1.82,6,6,0,0,0,1.6,11.4,1,1,0,0,1,.86,1v1.94l3.16-2.63A1,1,0,0,1,12.8,24H15a5.94,5.94,0,0,0,4.29-1.82,1,1,0,0,1,1.44,1.4A8,8,0,0,1,15,26H13.16L8.64,29.77A1,1,0,0,1,8,30Z"></path>
        </svg>
        <div class="chatTitle">
          Silahkan chat dengan tim kami
          <span>Admin akan membalas dalam beberapa menit</span>
        </div>
      </div>
      <div class="chatText">
        <span>Halo, Ada yang bisa kami bantu?</span>
        <span class="typing">...</span>
      </div>
    </div>

    <a class="chatStart" href="https://api.whatsapp.com/send?phone=%2B6287888017841&text=Hallo,%20saya telah%20mengunjungi%20rindapermai.com%20dan%20saya%20ingin%20bertanya" rel="nofollow noreferrer" target="_blank">
      <span>Mulai chat...</span>
    </a>
  </div>

  <!-- Vendor JS Files -->
  <script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url(); ?>/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url(); ?>/js/lightgallery.min.js"></script>
  <script src="<?= base_url(); ?>/js/lg-fullscreen.min.js"></script>
  <script src="<?= base_url(); ?>/js/lg-zoom.min.js"></script>
  <script src="<?= base_url(); ?>/js/lg-thumbnail.min.js"></script>
  <script src="<?= base_url(); ?>/js/main.js"></script>
</body>

</html>