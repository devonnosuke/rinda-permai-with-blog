<?= $this->extend('home/index'); ?>
<?= $this->section('konten'); ?>
<!-- ======= Intro Section ======= -->
<main id="main">
  <!-- ======= Intro Single ======= -->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single"><?= $property['type_name']; ?></h1>
            <span class="color-text-a"><?= $property['address']; ?></span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="property-single.html">Properties</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                TYPE <?= $property['type_name']; ?>
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- End Intro Single-->

  <!-- ======= Property Single ======= -->
  <section class="property-single nav-arrow-b">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div id="property-single-carousel" class="swiper">
            <div class="swiper-wrapper" id="property-single-slider">
              <div class="carousel-item-b swiper-slide" data-src="assets/img/Bag2/sampingrumah.jpg">
                <img src="assets/img/Bag2/sampingrumah.jpg" alt="" width="100%" />
              </div>
            </div>
          </div>
          <div class="property-single-carousel-pagination carousel-pagination"></div>
        </div>
      </div>

      <!-- <div class="row justify-content-center"></div> -->
      <!-- <div class="col-md-12 section-md-t3"> -->
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box-d section-t4">
            <h3 class="title-d">Home Specifications</h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div id="lightgallery">
            <a href="<?= base_url(); ?>/img/property/<?= $property['img_spec1']; ?>">
              <img src="<?= base_url(); ?>/img/property/<?= $property['img_spec1']; ?>" alt="denah-rumah" class="img-denah-dalam" style="padding: 3rem 1rem" />
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div id="lightgallery2">
            <a href="<?= base_url(); ?>/img/property/<?= $property['img_spec2']; ?>">
              <img src="<?= base_url(); ?>/img/property/<?= $property['img_spec2']; ?>" class="img-denah-dalam" style="padding: 3rem 1rem" />
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="summary-list">
            <ul class="list">
              <?php $spec = explode(',', $spec[0]['specification']) ?>
              <li class="d-flex justify-content-between">
                <strong>Pondasi:</strong>
                <span><?= $spec[0]; ?></span>
              </li>
              <li class="d-flex justify-content-between">
                <strong>Dinding:</strong>
                <span><?= $spec[1]; ?></span>
              </li>
              <li class="d-flex justify-content-between">
                <strong>Atap:</strong>
                <span><?= $spec[2]; ?></span>
              </li>
              <li class="d-flex justify-content-between">
                <strong>Plafond:</strong>
                <span><?= $spec[3]; ?></span>
              </li>
              <li class="d-flex justify-content-between">
                <strong>Lantai:</strong>
                <span><?= $spec[4]; ?></span>
              </li>
              <li class="d-flex justify-content-between">
                <strong>Kusen:</strong>
                <span><?= $spec[5]; ?></span>
              </li>
              <li class="d-flex justify-content-between">
                <strong>Daun Pintu:</strong>
                <span><?= $spec[6]; ?></span>
              </li>
              <li class="d-flex justify-content-between">
                <strong>Kamar Mandi:</strong>
                <span> <?= $spec[7]; ?></span>
              </li>
              <li class="d-flex justify-content-between">
                <strong>Kanopi:</strong>
                <span><?= $spec[8]; ?></span>
              </li>
              <li class="d-flex justify-content-between">
                <strong>Listrik:</strong>
                <span><?= $spec[9]; ?></span>
              </li>
              <li class="d-flex justify-content-between">
                <strong>Air:</strong>
                <span><?= $spec[10]; ?></span>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- </div> -->

      <div class="row">
        <div class="col-sm-12">
          <div class="row justify-content-between">
            <div class="col-md-7 col-lg-7 section-md-t3">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Property Description</h3>
                  </div>
                </div>
              </div>
              <div class="property-description">
                <p class="description color-text-a">
                  <?= $property['description']; ?>
                </p>
              </div>
              <div class="row section-t3">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Amenities</h3>
                  </div>
                </div>
              </div>
              <div class="amenities-list color-text-a">
                <ul class="list-a no-margin">
                  <?php $aminities = explode(',', $property['aminities']) ?>
                  <?php foreach ($aminities as $a) : ?>
                    <li><?= $a; ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="col-md-3"></div> -->
        <div class="col-md-12">
          <div class="row section-t3">
            <div class="col-sm-12">
              <div class="title-box-d">
                <h3 class="title-d">Contact Agent</h3>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5">
              <i class="bi bi-person-circle" style="font-size: 100px; padding: 50px"></i>
              <!-- <img src="assets/img/agent-4.jpg" alt="" class="img-fluid" /> -->
            </div>
            <div class="col-md-7">
              <div class="property-agent">
                <ul class="list-unstyled">
                  <li class="d-flex justify-content-between">
                    <strong>Phone 1:</strong>
                    <span class="color-text-a">+62 878-8801-7841</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Phone 2:</strong>
                    <span class="color-text-a">+62 812-9168-9083</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Email:</strong>
                    <span class="color-text-a">admin@rindapermai.com</span>
                  </li>
                </ul>
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Property Single-->
</main>
<!-- End #main -->
<?= $this->endSection(); ?>