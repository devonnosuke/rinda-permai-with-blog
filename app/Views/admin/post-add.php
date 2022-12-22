<!-- Begin Page Content -->
<?= $this->extend('tables'); ?>
<?= $this->section('kontenya'); ?>
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-white">Form Tambah Post</h6>
        </div>
        <div class="card-body">
            <div class="container mt-5 form">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="h3 mb-2 text-gray-800"><i class="bi bi-plus-circle-dotted"></i> Isi data Post baru disini:</h1>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="<?= base_url(); ?>/admin/post" class="btn btn-primary mb-2 ms-3">
                            < Kembali ke Daftar <i class="bi bi-card-list"></i>
                        </a>
                    </div>
                </div>


                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <form class="px-2 mb-5 user" action="<?= base_url(); ?>/admin/post/save" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <label for="title" class="form-label mt-4">Masukkan Title</label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('title')) ? 'is-invalid' : ''; ?>" name="title" id="title" placeholder="masukkan title disini..." value="<?= old('title'); ?>" />
                                <div class="invalid-feedback"><?= $validation->getError('title'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="form-label mt-4">Masukkan Deskripsi</label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('description')) ? 'is-invalid' : ''; ?>" name="description" id="description" placeholder="masukkan Deskripsi disini..." value="<?= old('description'); ?>" />
                                <div class="invalid-feedback"><?= $validation->getError('description'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="content" class="form-label mt-4">Masukkan Content</label>
                                <textarea class="form-control form-control-user <?= ($validation->hasError('content')) ? 'is-invalid' : ''; ?>" name="content" id="content" placeholder="masukkan content disini..."><?= old('content'); ?></textarea>
                                <div class="invalid-feedback"><?= $validation->getError('content'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="formFile" class="form-label mt-4">Input your photos!</label>
                                <input class="form-control <?= ($validation->hasError('image')) ? 'is-invalid' : ''; ?>" type="file" id="formFile" name="image" multiple />
                                <div class="invalid-feedback"><?= $validation->getError('image'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="category" class="form-label mt-4">Masukkan Category</label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('category')) ? 'is-invalid' : ''; ?>" name="id_category" id="category" placeholder="masukkan category disini..." value="<?= old('category'); ?>" />
                                <div class="invalid-feedback"><?= $validation->getError('category'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="tags" class="form-label mt-4">Masukkan Tags</label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('tags')) ? 'is-invalid' : ''; ?>" name="post_tags" id="tags" placeholder="masukkan tags disini..." value="<?= old('tags'); ?>" />
                                <div class="invalid-feedback"><?= $validation->getError('tags'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="username" class="form-label mt-4">Masukkan Username</label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" name="id_user" id="username" placeholder="masukkan username disini..." value="<?= old('username'); ?>" />
                                <div class="invalid-feedback"><?= $validation->getError('username'); ?></div>
                            </div>
                            <fieldset class="form-group">
                                <legend class="mt-4">Status</legend>
                                <div class="form-check" style="display: inline-block">
                                    <input class="form-check-input" type="radio" id="male" name="status" value="1" />
                                    <label class="form-check-label" for="male">
                                        Aktif <i class="bi bi-check"></i>
                                    </label>
                                </div>
                                <div class="form-check ml-4" style="display: inline-block">
                                    <input class="form-check-input" type="radio" id="female" name="status" value="0" />
                                    <label class="form-check-label" for="female">
                                        Tidak Aktif <i class="bi bi-x"></i>
                                    </label>
                                </div>
                                <?php if ($error = $validation->getError('status')) {
                                    echo "<div style='color:#dc3545'>$error</div>";
                                } ?>
                            </fieldset>
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