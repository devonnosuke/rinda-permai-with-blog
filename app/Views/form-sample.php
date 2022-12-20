<!-- Begin Page Content -->
<?= $this->extend('tables'); ?>
<?= $this->section('kontenya'); ?>
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-white">Form Tambah [nama tabel]</h6>
        </div>
        <div class="card-body">
            <div class="container mt-5 form">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="h3 mb-2 text-gray-800"><i class="bi bi-plus-circle-dotted"></i> Isi data baru [nama tabel] disini:</h1>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="/" class="btn btn-primary mb-2 ms-3">
                            < Kembali ke Daftar <i class="bi bi-card-list"></i>
                        </a>
                    </div>
                </div>


                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <form class="px-2 mb-5 user" action="<?= base_url(); ?>/save" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name" class="form-label mt-4">Contoh input type text</label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('nama_kolom')) ? 'is-invalid' : ''; ?>" name="nama_kolom" id="name" placeholder="Contoh input type text..." value="<?= old('nama_kolom'); ?>" />
                                <div class="invalid-feedback"><?= $validation->getError('nama_kolom'); ?></div>
                            </div>
                            <fieldset class="form-group">
                                <legend class="mt-4">Contoh input type Pilihan</legend>
                                <div class="form-check me-3" style="display: inline-block">
                                    <input class="form-check-input" type="radio" id="male" name="nama_kolom" value="male" />
                                    <label class="form-check-label" for="male">
                                        Pilihan 1 <i class="bi bi-gender-male"></i>
                                    </label>
                                </div>
                                <div class="form-check" style="display: inline-block">
                                    <input class="form-check-input" type="radio" id="female" name="nama_kolom" value="female" />
                                    <label class="form-check-label" for="female">
                                        Pilihan 2 <i class="bi bi-gender-female"></i>
                                    </label>
                                </div>
                                <?php if ($error = $validation->getError('nama_kolom')) {
                                    echo "<div style='color:#dc3545'>$error</div>";
                                } ?>
                            </fieldset>
                            <div class="form-group">
                                <label for="address" class="form-label mt-4"> Address </label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('student_address')) ? 'is-invalid' : ''; ?>" id="address" placeholder="Fill with the address" name="student_address" />
                                <div class="invalid-feedback"><?= $validation->getError('student_address'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="formFile" class="form-label mt-4">Input your photos!</label>
                                <input class="form-control <?= ($validation->hasError('student_pic')) ? 'is-invalid' : ''; ?>" type="file" id="formFile" name="student_pic" />
                                <div class="invalid-feedback"><?= $validation->getError('student_pic'); ?></div>
                            </div>
                            <div class="d-grid gap-2 mt-5">
                                <button type="submit" class="btn btn-success">Save it!</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>