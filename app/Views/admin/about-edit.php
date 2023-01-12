<!-- Begin Page Content -->
<?= $this->extend('tables'); ?>
<?= $this->section('kontenya'); ?>
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-white">Form Edit Post</h6>
        </div>
        <div class="card-body">
            <div class="container mt-5 form">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="h3 mb-2 text-gray-800"><i class="bi bi-plus-circle-dotted"></i> Edit Post disini:</h1>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="<?= base_url(); ?>/admin/post" class="btn btn-primary mb-2 ms-3">
                            < Kembali ke Daftar <i class="bi bi-card-list"></i>
                        </a>
                    </div>
                </div>


                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <form class="px-2 mb-5 user" action="<?= base_url(); ?>/admin/about/save/<?= $about['id_about']; ?>/<?= $about['img_thumb']; ?>" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <label for="title" class="form-label mt-4">Edit Title</label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('title')) ? 'is-invalid' : ''; ?>" name="title" id="title" placeholder="Edit title disini..." value="<?= $about['title']; ?>" />
                                <div class="invalid-feedback"><?= $validation->getError('title'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="subtitle" class="form-label mt-4">Edit Subtitle</label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('subtitle')) ? 'is-invalid' : ''; ?>" name="subtitle" id="subtitle" placeholder="Edit Deskripsi disini..." value="<?= $about['subtitle']; ?>" />
                                <div class="invalid-feedback"><?= $validation->getError('subtitle'); ?></div>
                            </div>

                            <div class="form-group">
                                <label for="description" class="form-label mt-4">Edit Description</label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('description')) ? 'is-invalid' : ''; ?>" name="description" id="description" placeholder="Edit description disini..." value="<?= $about['description']; ?>" />
                                <div class="invalid-feedback"><?= $validation->getError('description'); ?></div>
                            </div>

                            <div class="form-group">
                                <label for="visi" class="form-label mt-4">Edit Visi</label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('visi')) ? 'is-invalid' : ''; ?>" name="visi" id="visi" placeholder="Edit visi disini..." value="<?= $about['visi']; ?>" />
                                <div class="invalid-feedback"><?= $validation->getError('visi'); ?></div>
                            </div>

                            <div class="form-group">
                                <label for="misi" class="form-label mt-4">Edit Misi</label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('misi')) ? 'is-invalid' : ''; ?>" name="misi" id="misi" placeholder="Edit misi disini..." value="<?= $about['misi']; ?>" />
                                <div class="invalid-feedback"><?= $validation->getError('misi'); ?></div>
                            </div>



                            <button class="btn btn-primary float-right" type="submit"><i class="bi bi-save me-2"></i> simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>