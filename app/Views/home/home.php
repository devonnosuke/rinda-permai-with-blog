<?= $this->extend('home/index'); ?>
<?= $this->section('konten'); ?>
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
<?= $this->endSection(); ?>