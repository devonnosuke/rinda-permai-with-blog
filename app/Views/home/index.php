<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title><?= $title; ?> | BTN Rinda Permai</title>
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

  <!-- Custom styles for this template -->
  <link href="<?= base_url(); ?>/css/blog.css" rel="stylesheet" />
</head>

<body>

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
          <li class="nav-item <?= ($title == 'Home') ? 'active' : '' ?>">
            <a class="nav-link <?= ($title == 'Home') ? 'active' : '' ?>" href="<?= base_url(); ?>">Home</a>
          </li>

          <li class="nav-item <?= ($title == 'About') ? 'active' : '' ?>">
            <a class="nav-link <?= ($title == 'About') ? 'active' : '' ?>" href="<?= base_url(); ?>/about">About</a>
          </li>

          <li class="nav-item <?= ($title == 'Property') ? 'active' : '' ?>">
            <a class="nav-link <?= ($title == 'Property') ? 'active' : '' ?>" href="<?= base_url(); ?>/property/grid">Property</a>
          </li>

          <li class="nav-item <?= ($title == 'Contact') ? 'active' : '' ?>">
            <a class="nav-link <?= ($title == 'Contact') ? 'active' : '' ?>" href="<?= base_url(); ?>/contact">Contact</a>
          </li>
          <li class="nav-item <?= ($title == 'Blog') ? 'active' : '' ?>">
            <a class="nav-link <?= ($title == 'Blog') ? 'active' : '' ?>" href="<?= base_url(); ?>/blog">Blog</a>
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

  <?= $this->renderSection('konten'); ?>

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
                  <?= $contact[0]['phone']; ?>
                </li>
                <li class="color-a">
                  <span class="color-text-a">Email .</span>
                  <?= $contact[0]['email']; ?>
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
              <?php foreach ($link as $l) : ?>
                <li class="list-inline-item">
                  <a href="<?= $l['link']; ?>" target="_blank">
                    <i class="bi bi-<?= $l['type']; ?>" aria-hidden="true"></i>
                  </a>
                </li>
              <?php endforeach; ?>
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
  <script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
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