<?= $this->extend('home/index'); ?>
<?= $this->section('konten'); ?>
<main id="main">
  <!-- ======= Intro Single ======= -->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">
              Quality Is Number One
            </h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                About
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- End Intro Single-->

  <!-- ======= About Section ======= -->
  <section class="section-about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 position-relative">
          <div class="about-img-box">
            <img src="<?= base_url(); ?>/img/slide-about-1.jpg" alt="" class="img-fluid" />
          </div>
          <div class="sinse-box">
            <h3 class="sinse-title">
              <?= $about[0]['title']; ?>
            </h3>
            <p><?= $about[0]['subtitle']; ?></p>
          </div>
        </div>
        <div class="col-md-12 section-t8 position-relative">
          <div class="row">
            <div class="col-md-6 col-lg-5">
              <img src="<?= base_url(); ?>/img/rumah2.jpg" alt="" class="img-fluid" />
            </div>
            <div class="col-lg-2 d-none d-lg-block position-relative">
            </div>
            <div class="col-md-6 col-lg-5 section-md-t3">
              <div class="title-box-d">
                <h3 class="title-d">
                  Profile Perusahaan
                </h3>
              </div>
              <p class="color-text-a">
                <?= $about[0]['description']; ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =======Team Section ======= -->
  <section class="section-agents section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">VISI DAN MISI</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <h4>VISI</h4>
          <p style="font-size: 17px;"><?= $about[0]['visi']; ?></p>
        </div>
        <div class="col-md-6">
          <h4>MISI</h4>
          <p style="font-size: 17px;"><?= $about[0]['misi']; ?></p>
        </div>
      </div>
    </div>
  </section>
  <!-- End About Section-->
</main>
<!-- End #main -->
<?= $this->endSection(); ?>