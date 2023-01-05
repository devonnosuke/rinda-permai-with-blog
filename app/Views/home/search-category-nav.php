<!-- End Intro Single-->
<div class="container">
    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <div class="row">
                <div class="col-md-8" style="overflow-x: auto;overflow-y: hidden;">
                    <a class="p-2 link-secondary" href="#"><b>Kategori :</b></a>
                    <?php foreach ($category as $c) : ?>
                        <a class="p-2 link-secondary" href="<?= base_url(); ?>/blog/category/<?= $c['category_slug']; ?>"><?= $c['category_name']; ?></a>
                    <?php endforeach; ?>
                </div>
                <div class="col-md-4">
                    <div class="container-fluid">
                        <form class="d-flex" role="search" action="<?= base_url(); ?>/blog" method="get">
                            <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Cari</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>