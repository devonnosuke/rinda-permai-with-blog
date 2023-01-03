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
                        <form class="d-flex" action="<?= base_url(); ?>/blog/cari" method="get" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
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
                <h2 class="blog-post-title mb-1">Sample blog post</h2>
                <p class="blog-post-meta">
                    January 1, 2021 by <a href="#">Mark</a>
                </p>

                <p>
                    This blog post shows a few different types of content that’s
                    supported and styled with Bootstrap. Basic typography, lists,
                    tables, images, code, and more are all supported as expected.
                </p>
                <hr />
                <p>
                    This is some additional paragraph placeholder content. It has been
                    written to fill the available space and show how a longer snippet
                    of text affects the surrounding content. We'll repeat it often to
                    keep the demonstration flowing, so be on the lookout for this
                    exact same string of text.
                </p>
                <h2>Blockquotes</h2>
                <p>This is an example blockquote in action:</p>
                <blockquote class="blockquote">
                    <p>Quoted text goes here.</p>
                </blockquote>
                <p>
                    This is some additional paragraph placeholder content. It has been
                    written to fill the available space and show how a longer snippet
                    of text affects the surrounding content. We'll repeat it often to
                    keep the demonstration flowing, so be on the lookout for this
                    exact same string of text.
                </p>
                <h3>Example lists</h3>
                <p>
                    This is some additional paragraph placeholder content. It's a
                    slightly shorter version of the other highly repetitive body text
                    used throughout. This is an example unordered list:
                </p>
                <ul>
                    <li>First list item</li>
                    <li>Second list item with a longer description</li>
                    <li>Third list item to close it out</li>
                </ul>
                <p>And this is an ordered list:</p>
                <ol>
                    <li>First list item</li>
                    <li>Second list item with a longer description</li>
                    <li>Third list item to close it out</li>
                </ol>
                <p>And this is a definition list:</p>
                <dl>
                    <dt>HyperText Markup Language (HTML)</dt>
                    <dd>
                        The language used to describe and define the content of a Web
                        page
                    </dd>
                    <dt>Cascading Style Sheets (CSS)</dt>
                    <dd>Used to describe the appearance of Web content</dd>
                    <dt>JavaScript (JS)</dt>
                    <dd>
                        The programming language used to build advanced Web sites and
                        applications
                    </dd>
                </dl>
                <h2>Inline HTML elements</h2>
                <p>
                    HTML defines a long list of available inline tags, a complete list
                    of which can be found on the
                    <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element">Mozilla Developer Network</a>.
                </p>
                <ul>
                    <li>
                        <strong>To bold text</strong>, use
                        <code class="language-plaintext highlighter-rouge">&lt;strong&gt;</code>.
                    </li>
                    <li>
                        <em>To italicize text</em>, use
                        <code class="language-plaintext highlighter-rouge">&lt;em&gt;</code>.
                    </li>
                    <li>
                        Abbreviations, like
                        <abbr title="HyperText Markup Language">HTML</abbr> should use
                        <code class="language-plaintext highlighter-rouge">&lt;abbr&gt;</code>, with an optional
                        <code class="language-plaintext highlighter-rouge">title</code>
                        attribute for the full phrase.
                    </li>
                    <li>
                        Citations, like <cite>— Mark Otto</cite>, should use
                        <code class="language-plaintext highlighter-rouge">&lt;cite&gt;</code>.
                    </li>
                    <li>
                        <del>Deleted</del> text should use
                        <code class="language-plaintext highlighter-rouge">&lt;del&gt;</code>
                        and <ins>inserted</ins> text should use
                        <code class="language-plaintext highlighter-rouge">&lt;ins&gt;</code>.
                    </li>
                    <li>
                        Superscript <sup>text</sup> uses
                        <code class="language-plaintext highlighter-rouge">&lt;sup&gt;</code>
                        and subscript <sub>text</sub> uses
                        <code class="language-plaintext highlighter-rouge">&lt;sub&gt;</code>.
                    </li>
                </ul>
                <p>
                    Most of these elements are styled by browsers with few
                    modifications on our part.
                </p>
                <h2>Heading</h2>
                <p>
                    This is some additional paragraph placeholder content. It has been
                    written to fill the available space and show how a longer snippet
                    of text affects the surrounding content. We'll repeat it often to
                    keep the demonstration flowing, so be on the lookout for this
                    exact same string of text.
                </p>
                <h3>Sub-heading</h3>
                <p>
                    This is some additional paragraph placeholder content. It has been
                    written to fill the available space and show how a longer snippet
                    of text affects the surrounding content. We'll repeat it often to
                    keep the demonstration flowing, so be on the lookout for this
                    exact same string of text.
                </p>
                <pre><code>Example code block</code></pre>
                <p>
                    This is some additional paragraph placeholder content. It's a
                    slightly shorter version of the other highly repetitive body text
                    used throughout.
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