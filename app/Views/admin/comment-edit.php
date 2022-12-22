<!-- Begin Page Content -->
<?= $this->extend('tables'); ?>
<?= $this->section('kontenya'); ?>
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-white">Form Edit Comment</h6>
        </div>
        <div class="card-body">
            <div class="container mt-5 form">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="h3 mb-2 text-gray-800"><i class="bi bi-plus-circle-dotted"></i> Isi data baru Comment disini:</h1>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="<?= base_url(); ?>/admin/comment" class="btn btn-primary mb-2 ms-3">
                            < Kembali ke Daftar <i class="bi bi-card-list"></i>
                        </a>
                    </div>
                </div>


                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <form class="px-2 mb-5 user" action="<?= base_url(); ?>/admin/comment/save/<?= $comment['id_comment']; ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name" class="form-label mt-4">Masukkan email baru </label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" name="email" id="name" placeholder="masukkan email disini..." value="<?= $comment['email']; ?>" />
                                <div class="invalid-feedback"><?= $validation->getError('email'); ?></div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="form-label mt-4">Masukkan message baru </label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('message')) ? 'is-invalid' : ''; ?>" name="message" id="name" placeholder="masukkan message disini..." value="<?= $comment['message']; ?>" />
                                <div class="invalid-feedback"><?= $validation->getError('message'); ?></div>
                            </div>

                            <fieldset class="form-group">
                                <legend class="mt-4">Status</legend>
                                <div class="form-check" style="display: inline-block">
                                    <input class="form-check-input" type="radio" id="aktif" name="status" value="1" <?= ($comment['status'] == '1') ? 'checked' : '' ?> />
                                    <label class="form-check-label" for="aktif">
                                        Aktif <i class="bi bi-check"></i>
                                    </label>
                                </div>
                                <div class="form-check ml-4" style="display: inline-block">
                                    <input class="form-check-input" type="radio" id="tidak" name="status" value="0" <?= ($comment['status'] == '0') ? 'checked' : ''; ?> />
                                    <label class="form-check-label" for="tidak">
                                        Tidak Aktif <i class="bi bi-x"></i>
                                    </label>
                                </div>
                                <?php if ($error = $validation->getError('status')) {
                                    echo "<div style='color:#dc3545'>$error</div>";
                                } ?>
                            </fieldset>

                            <div class="form-group">
                                <label for="name" class="form-label mt-4">Masukkan id_post </label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('id_post')) ? 'is-invalid' : ''; ?>" name="id_post" id="name" placeholder="masukkan id_post disini..." value="<?= $comment['id_post']; ?>" />
                                <div class="invalid-feedback"><?= $validation->getError('id_post'); ?></div>
                            </div>

                            <div class="form-group">
                                <label for="formFile" class="form-label mt-4">Input your photos!</label>
                                <input class="form-control <?= ($validation->hasError('image')) ? 'is-invalid' : ''; ?>" type="file" id="formFile" name="image" />
                                <div class="invalid-feedback"><?= $validation->getError('image'); ?></div>
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