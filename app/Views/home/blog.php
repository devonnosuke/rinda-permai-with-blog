<?= $this->extend('home/index'); ?>
<?= $this->section('konten'); ?>

<main id="main" class="container">
    <section class="intro-single">
        <div class="p-4 p-md-5 mb-4 text-bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 fst-italic text-light">
                    <?= $post[0]['title']; ?>
                </h1>
                <p class="lead my-3">
                    <?= $post[0]['description']; ?>
                </p>
                <p class="lead mb-0">
                    <a href="<?= base_url(); ?>/blog/<?= $post[0]['post_slug']; ?>" class="text-white fw-bold">Continue reading...</a>
                </p>
            </div>
        </div>
    </section>
    <!-- ======= Intro Single ======= -->
    <section class="intro-single" style="padding-top: 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">
                            Menambah Wawasan Dengan Artikel Kami
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
                                Blog
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <?= $this->include('home/search-category-nav'); ?>

    <div class="row mb-2 mt-3">
        <?php foreach ($post as $p) : ?>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body">
                                <!-- <h5 class="card-title">Card title</h5> -->
                                <strong class="d-inline-block mb-2 text-primary"><?= $p['category_name']; ?></strong>
                                <h3 class="mb-0 card-title"><?= $p['title']; ?></h3>
                                <div class="mb-1 text-muted"><?= formatTanggal($p['post_date']); ?></div>
                                <p class="card-text mb-auto">
                                    <?= $p['description']; ?>
                                </p>
                                <a href="<?= base_url(); ?>/blog/<?= $p['post_slug']; ?>" class="stretched-link card-text">Lanjutkan Membaca</a>
                                <p class="card-text"><small class="text-muted">Update terakhir <?= formatTanggal($p['post_last_update']); ?></small></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="<?= base_url(); ?>/img/post/<?= $p['image']; ?>" class="img-fluid rounded" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


</main>
<!-- End #main -->
<?= $this->endSection(); ?>