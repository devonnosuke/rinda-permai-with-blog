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
    <!-- End Intro Single-->
    <div class="container">
        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 link-secondary" href="#"><b>Kategori :</b></a>
                <a class="p-2 link-secondary" href="#">World</a>
                <a class="p-2 link-secondary" href="#">U.S.</a>
                <a class="p-2 link-secondary" href="#">Technology</a>
                <a class="p-2 link-secondary" href="#">Design</a>
                <a class="p-2 link-secondary" href="#">Culture</a>
                <a class="p-2 link-secondary" href="#">Business</a>
                <a class="p-2 link-secondary" href="#">Politics</a>
                <a class="p-2 link-secondary" href="#">Opinion</a>
                <a class="p-2 link-secondary" href="#">Science</a>
                <div class="container-fluid">
                    <form class="d-flex" role="search" action="<?= base_url(); ?>/blog" method="get">
                        <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Cari</button>
                    </form>
                </div>
            </nav>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-8">
            <div class="card mb-3">
                <div class="row">
                    <?php foreach ($post as $post) : ?>
                        <div class="col-md-6">
                            <div class="row card">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- <h5 class="card-title">Card title</h5> -->
                                        <strong class="d-inline-block mb-2 text-primary"><?= $post['category_name']; ?></strong>
                                        <h3 class="mb-0 card-title"><?= $post['title']; ?></h3>
                                        <div class="mb-1 text-muted"><?= formatTanggal($post['post_date']); ?></div>
                                        <p class="card-text mb-auto">
                                            <?= $post['description']; ?>
                                        </p>
                                        <a href="<?= base_url(); ?>/blog/<?= $post['post_slug']; ?>" class="stretched-link card-text">Lanjutkan Membaca</a>
                                        <p class="card-text"><small class="text-muted">Update terakhir <?= $post['post_last_update']; ?></small></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="<?= base_url(); ?>/img/post/<?= $post['image']; ?>" class="img-fluid rounded" alt="...">
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="fst-italic">About</h4>
                    <p class="mb-0">
                        Customize this section to tell your visitors a little bit about
                        your publication, writers, content, or something else entirely.
                        Totally up to you.
                    </p>
                </div>

                <div class="p-4">
                    <h4 class="fst-italic">Archives</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">March 2021</a></li>
                        <li><a href="#">February 2021</a></li>
                        <li><a href="#">January 2021</a></li>
                        <li><a href="#">December 2020</a></li>
                        <li><a href="#">November 2020</a></li>
                        <li><a href="#">October 2020</a></li>
                        <li><a href="#">September 2020</a></li>
                        <li><a href="#">August 2020</a></li>
                        <li><a href="#">July 2020</a></li>
                        <li><a href="#">June 2020</a></li>
                        <li><a href="#">May 2020</a></li>
                        <li><a href="#">April 2020</a></li>
                    </ol>
                </div>

                <div class="p-4">
                    <h4 class="fst-italic">Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


</main>
<!-- End #main -->
<?= $this->endSection(); ?>