<!-- Begin Page Content -->
<?= $this->extend('index'); ?>
<?= $this->section('kontenya'); ?>
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah [nama tabel]</h6>
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
                                <label for="name" class="form-label mt-4"> Full Name </label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('student_name')) ? 'is-invalid' : ''; ?>" name="student_name" id="name" placeholder="Fill with fullname..." value="<?= old('student_name'); ?>" />
                                <div class="invalid-feedback"><?= $validation->getError('student_name'); ?></div>
                            </div>
                            <fieldset class="form-group">
                                <legend class="mt-4">Gender</legend>
                                <div class="form-check me-3" style="display: inline-block">
                                    <input class="form-check-input" type="radio" id="male" name="student_gender" value="male" />
                                    <label class="form-check-label" for="male">
                                        Male <i class="bi bi-gender-male"></i>
                                    </label>
                                </div>
                                <div class="form-check" style="display: inline-block">
                                    <input class="form-check-input" type="radio" id="female" name="student_gender" value="female" />
                                    <label class="form-check-label" for="female">
                                        Female <i class="bi bi-gender-female"></i>
                                    </label>
                                </div>
                                <?php if ($error = $validation->getError('student_gender')) {
                                    echo "<div style='color:#dc3545'>$error</div>";
                                } ?>
                            </fieldset>
                            <div class="form-group">
                                <label for="address" class="form-label mt-4"> Address </label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('student_address')) ? 'is-invalid' : ''; ?>" id="address" placeholder="Fill with the address" name="student_address" />
                                <div class="invalid-feedback"><?= $validation->getError('student_address'); ?></div>
                            </div>
                            <fieldset class="form-group">
                                <legend class="mt-4">Class</legend>
                                <div class="form-check me-3" style="display: inline-block">
                                    <input class="form-check-input" type="radio" id="10RPLA" name="student_class" value="10 RPL A" />
                                    <label class="form-check-label" for="10RPLA">
                                        10 RPL A <i class="bi bi-journal-bookmark"></i>
                                    </label>
                                </div>
                                <div class="form-check me-3" style="display: inline-block">
                                    <input class="form-check-input" type="radio" id="11RPLA" name="student_class" value="11 RPL A" />
                                    <label class="form-check-label" for="11RPLA">
                                        11 RPL A <i class="bi bi-journal-bookmark-fill"></i>
                                    </label>
                                </div>
                                <div class="form-check me-3" style="display: inline-block">
                                    <input class="form-check-input" type="radio" id="12RPLA" name="student_class" value="12 RPL A" />
                                    <label class="form-check-label" for="12RPLA">
                                        12 RPL A <i class="bi bi-journal-check"></i>
                                    </label>
                                </div>
                                <?php if ($error = $validation->getError('student_class')) {
                                    echo "<div style='color:#dc3545'>$error</div>";
                                } ?>
                            </fieldset>
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