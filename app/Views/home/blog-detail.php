<?= $this->extend('home/index'); ?>
<?= $this->section('konten'); ?>

<main id="main" class="container">
    <section class="intro-single">
    </section>

    <?= $this->include('home/search-category-nav'); ?>

    <div class="row g-5">
        <div class="col-md-12">
            <article class="blog-post">
                <h2 class="blog-post-title mb-1"><?= $post[0]['title']; ?></h2>
                <p class="blog-post-meta">
                    <?= (formatTanggal($post[0]['post_date'])) ?> <b><a href="#"><?= $post[0]['username']; ?></a></b>
                    <br>Category : <b><?= $post[0]['category_name']; ?></b>
                </p>
                <p class="text-center">
                    <img src="<?= base_url(); ?>/img/post/<?= $post[0]['image']; ?>" alt="<?= $post[0]['category_name']; ?>" class="img-fluid">
                </p>
                <p>
                    <?= $post[0]['description']; ?>
                </p>
                <hr />
                <p>
                    <textarea id="" readonly rows="90" style="
                        color: black;
                        width: -webkit-fill-available;
                        border: none;
                        cursor: text;
                        row-gap: auto;
                        height: auto;
                        overflow: hidden;"><?= $post[0]['content'];  ?>
                    </textarea>
                </p>
            </article>

            <!--POST TAG-->
            <div class="post-meta-section clearfix">

                <div class="float-left font-face1 post-meta-holder nomargin">TAGS &mdash;
                    <?php foreach ($tags as $t) : ?>
                        <a href="<?= base_url(); ?>/blog/tags/<?= $t; ?>"><?= $t; ?></a> &vert;
                    <?php endforeach; ?>
                </div>

                <div class="float-right">
                    <div class="SocialShareArticle" style="color: #fff;font-size: 10px;"></div>
                </div>

            </div>


            <!--POST COMMENT-->
            <div class="comments-heading text-center mb-30 mt-60">
                <hgroup>
                    <h2 class="font-face1 section-heading"><?= count($comment); ?> Comments</h2>

                </hgroup>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h5>Comments:</h5>
                    <?php foreach ($comment as $c) : ?>
                        <div class="card">
                            <div class="card-body">
                                <span class="badge me-2" style="border-radius:50px;height:2rem;line-height:1.5rem;background-color:#a05a2c"><?= getInitialD($c['email']) ?></span>
                                <b><?= $c['email']; ?> </b>
                                <?= $c['message']; ?>
                                <p><b><?= formatTanggal($c['comment_date']); ?></b></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
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
            <form action="<?= base_url(); ?>/admin/comment/save" method="post" role="form">
                <div class="row">
                    <input type="hidden" name="id_post" value="<?= $post[0]['id_post'] ?>" />
                    <input type="hidden" name="status" value="1" />
                    <input type="hidden" name="isbloG" value="<?= $post[0]['post_slug'] ?>" />

                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" cols="45" rows="8" placeholder="Comment Here ..." required></textarea>
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