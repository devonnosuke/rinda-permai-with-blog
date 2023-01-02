<!-- Begin Page Content -->
<?= $this->extend('tables'); ?>
<?= $this->section('kontenya'); ?>
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-white">Form Edit Category</h6>
        </div>
        <div class="card-body">
            <div class="container mt-5 form">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="h3 mb-2 text-gray-800"><i class="bi bi-plus-circle-dotted"></i> Isi data baru Category disini:</h1>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="<?= base_url(); ?>/admin/category" class="btn btn-primary mb-2 ms-3">
                            < Kembali ke Daftar <i class="bi bi-card-list"></i>
                        </a>
                    </div>
                </div>


                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <form class="px-2 mb-5 user" action="<?= base_url(); ?>/admin/sociallink/save/<?= $sociallink['id_socialLink']; ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="type" class="form-label mt-4">Masukkan Type</label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('type')) ? 'is-invalid' : ''; ?>" name="type" id="type" placeholder="masukkan type disini..." value="<?= $sociallink['type']; ?>" />
                                <div class="invalid-feedback"><?= $validation->getError('type'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="link" class="form-label mt-4">Masukkan Link</label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('link')) ? 'is-invalid' : ''; ?>" name="link" id="link" placeholder="masukkan link disini..." value="<?= $sociallink['link']; ?>" />
                                <div class="invalid-feedback"><?= $validation->getError('link'); ?></div>
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