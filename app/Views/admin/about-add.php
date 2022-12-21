<!-- Begin Page Content -->
<?= $this->extend('tables'); ?>
<?= $this->section('kontenya'); ?>
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-white">Form Tambah About</h6>
        </div>
        <div class="card-body">
            <div class="container mt-5 form">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="h3 mb-2 text-gray-800"><i class="bi bi-plus-circle-dotted"></i> Isi data baru About disini:</h1>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="<?= base_url(); ?>/admin/about" class="btn btn-primary mb-2 ms-3">
                            < Kembali ke Daftar <i class="bi bi-card-list"></i>
                        </a>
                    </div>
                </div>


                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <form class="px-2 mb-5 user" action="<?= base_url(); ?>/admin/about/save" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name" class="form-label mt-4">Masukkan title baru</label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('title')) ? 'is-invalid' : ''; ?>" name="title" id="name" placeholder="masukkan title disini..." value="<?= old('title'); ?>" />
                                <div class="invalid-feedback"><?= $validation->getError('title'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="form-label mt-4">Masukkan subtitle baru</label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('subtitle')) ? 'is-invalid' : ''; ?>" name="subtitle" id="name" placeholder="masukkan subtitle disini..." value="<?= old('subtitle'); ?>" />
                                <div class="invalid-feedback"><?= $validation->getError('subtitle'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="form-label mt-4">Masukkan description baru</label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('description')) ? 'is-invalid' : ''; ?>" name="description" id="name" placeholder="masukkan description disini..." value="<?= old('description'); ?>" />
                                <div class="invalid-feedback"><?= $validation->getError('description'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="form-label mt-4">Masukkan visi baru</label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('visi')) ? 'is-invalid' : ''; ?>" name="visi" id="name" placeholder="masukkan visi disini..." value="<?= old('visi'); ?>" />
                                <div class="invalid-feedback"><?= $validation->getError('visi'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="form-label mt-4">Masukkan misi baru</label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('misi')) ? 'is-invalid' : ''; ?>" name="misi" id="name" placeholder="masukkan misi disini..." value="<?= old('misi'); ?>" />
                                <div class="invalid-feedback"><?= $validation->getError('misi'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="formFile" class="form-label mt-4">Input your thumbnail!</label>
                                <input class="form-control <?= ($validation->hasError('img_thumb')) ? 'is-invalid' : ''; ?>" type="file" id="formFile" name="img_thumb" />
                                <div class="invalid-feedback"><?= $validation->getError('img_thumb'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="formFile" class="form-label mt-4">Input your profile!</label>
                                <input class="form-control <?= ($validation->hasError('img_profile')) ? 'is-invalid' : ''; ?>" type="file" id="formFile" name="img_profile" />
                                <div class="invalid-feedback"><?= $validation->getError('img_profile'); ?></div>
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