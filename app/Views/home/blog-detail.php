<?= $this->extend('home/index'); ?>
<?= $this->section('konten'); ?>

<main id="main" class="container">
    <section class="intro-single">
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
    </section>

    <div class="row g-5">
        <div class="col-md-8">
            <article class="blog-post">
                <h2 class="blog-post-title mb-1"><?= $post[0]['title']; ?></h2>
                <p class="blog-post-meta">
                    <?= (formatTanggal($post[0]['post_date'])) ?> <b><a href="#"><?= $post[0]['username']; ?></a></b>
                </p>

                <p>
                    <?= $post[0]['description']; ?>
                </p>
                <hr />
                <p>
                    <?= $post[0]['content']; ?>
                </p>
            </article>

            <!--POST TAG-->
            <div class="post-meta-section clearfix">

                <div class="float-left font-face1 post-meta-holder nomargin">TAGS &mdash;
                    <a href="http://localhost/mblog/tag/Psikologi">Psikologi</a> &vert;
                    <a href="http://localhost/mblog/tag/Motivasi">Motivasi</a> &vert;
                </div>

                <div class="float-right">
                    <div class="SocialShareArticle" style="color: #fff;font-size: 10px;"></div>
                </div>

            </div>


            <!--POST COMMENT-->
            <div class="comments-heading text-center mb-30 mt-60">
                <hgroup>
                    <h2 class="font-face1 section-heading">1 Comments</h2>

                </hgroup>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h5>Comments:</h5>
                    <div class="card">
                        <div class="card-body">
                            <span class="badge me-2" style="border-radius:50px;height:2rem;line-height:1.5rem;background-color:#a05a2c"><?= getInisial('Devon Pradha') ?></span>
                            <b>devonpradha@gmail.com: </b>
                            This is some text within a card body.
                        </div>
                    </div>
                </div>
            </div>

            <hr />
            <!-- End Comment First level -->

            <!--POST LEAVE COMMENT-->
            <div class="comments-heading text-center mb-30">
                <hgroup>
                    <h2 class="font-face1 section-heading">Leave a comment</h2>
                </hgroup>
            </div>
            <!-- <div class="col-md-7"> -->
            <form action="<?= base_url(); ?>" method="post" role="form">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Your Name" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea name="comment" class="form-control" name="comment" cols="45" rows="8" placeholder="Comment Here ..." required></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 my-3" id="loading" style="display:none;">
                        <div class="mb-3">
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                    </div>

                    <div class="col-md-12 my-3 text-center">
                        <button type="submit" onclick="showLoading()" class="btn btn-a">Send Comment</button>
                    </div>
                </div>
            </form>
            <!-- </div> -->
            <!--END POST LEAVE COMMENT-->
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
<script>
    function showLoading() {
        let thanks = document.getElementById('loading');
        thanks.style.display = 'block';
    }
</script>
<!-- End #main -->
<?= $this->endSection(); ?>