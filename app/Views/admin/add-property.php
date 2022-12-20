<!-- Begin Page Content -->
<?= $this->extend('tables'); ?>
<?= $this->section('kontenya'); ?>
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-white">Form Tambah [Property]</h6>
        </div>
        <div class="card-body">
            <div class="container mt-5 form">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="h3 mb-2 text-gray-800"><i class="bi bi-plus-circle-dotted"></i> Isi data baru [Property] disini:</h1>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="/" class="btn btn-primary mb-2 ms-3">
                            < Kembali ke Daftar Property <i class="bi bi-card-list"></i>
                        </a>
                    </div>
                </div>


                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <form class="px-2 mb-5 user" action="<?= base_url(); ?>/save" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name" class="form-label mt-4"> input type name</label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('type_name')) ? 'is-invalid' : ''; ?>" name="type_name" id="name" placeholder="Contoh input type name..." value="<?= old('type_name'); ?>" />
                                <div class="invalid-feedback"><?= $validation->getError('type_name'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="form-label mt-4"> Address </label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('address')) ? 'is-invalid' : ''; ?>" id="address" placeholder="Fill with the address" name="address" />
                                <div class="invalid-feedback"><?= $validation->getError('address'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="form-label mt-4"> post number (kode pos) </label>
                                <input type="number" class="form-control form-control-user <?= ($validation->hasError('post_number')) ? 'is-invalid' : ''; ?>" id="post_number" placeholder="Contoh input kode pos..." name="post_number" />
                                <div class="invalid-feedback"><?= $validation->getError('post_number'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="form-label mt-4"> LT </label>
                                <input type="number" class="form-control form-control-user <?= ($validation->hasError('lt')) ? 'is-invalid' : ''; ?>" id="lt" placeholder="Contoh input LT..." name="lt" />
                                <div class="invalid-feedback"><?= $validation->getError('lt'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="form-label mt-4"> LB </label>
                                <input type="number" class="form-control form-control-user <?= ($validation->hasError('lb')) ? 'is-invalid' : ''; ?>" id="lb" placeholder="Contoh input LB..." name="lb" />
                                <div class="invalid-feedback"><?= $validation->getError('lb'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="form-label mt-4"> Area </label>
                                <input type="number" class="form-control form-control-user <?= ($validation->hasError('area')) ? 'is-invalid' : ''; ?>" id="area" placeholder="Contoh input Area..." name="area" />
                                <div class="invalid-feedback"><?= $validation->getError('area'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="form-label mt-4"> Beds </label>
                                <input type="number" class="form-control form-control-user <?= ($validation->hasError('bads')) ? 'is-invalid' : ''; ?>" id="bads" placeholder="Contoh input Bedsroom..." name="bads" />
                                <div class="invalid-feedback"><?= $validation->getError('bads'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="form-label mt-4"> Baths </label>
                                <input type="number" class="form-control form-control-user <?= ($validation->hasError('baths')) ? 'is-invalid' : ''; ?>" id="baths" placeholder="Contoh input Bathsroom..." name="baths" />
                                <div class="invalid-feedback"><?= $validation->getError('baths'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="form-label mt-4"> Garages </label>
                                <input type="number" class="form-control form-control-user <?= ($validation->hasError('garages')) ? 'is-invalid' : ''; ?>" id="garages" placeholder="Contoh input Garages..." name="garages" />
                                <div class="invalid-feedback"><?= $validation->getError('garages'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="form-label mt-4"> Description </label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('description')) ? 'is-invalid' : ''; ?>" id="description" placeholder="Contoh input Description..." name="description" />
                                <div class="invalid-feedback"><?= $validation->getError('description'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="form-label mt-4"> Aminities </label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('aminities')) ? 'is-invalid' : ''; ?>" id="aminities" placeholder="Contoh input Aminities..." name="aminities" />
                                <div class="invalid-feedback"><?= $validation->getError('aminities'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="formFile" class="form-label mt-4">Video!</label>
                                <input class="form-control <?= ($validation->hasError('video')) ? 'is-invalid' : ''; ?>" type="file" id="formFile" name="video" />
                                <div class="invalid-feedback"><?= $validation->getError('video'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="formFile" class="form-label mt-4">img card!</label>
                                <input class="form-control <?= ($validation->hasError('img_card')) ? 'is-invalid' : ''; ?>" type="file" id="formFile" name="img_card" />
                                <div class="invalid-feedback"><?= $validation->getError('img_card'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="formFile" class="form-label mt-4">img spec1!</label>
                                <input class="form-control <?= ($validation->hasError('img_spec1')) ? 'is-invalid' : ''; ?>" type="file" id="formFile" name="img_spec1" />
                                <div class="invalid-feedback"><?= $validation->getError('img_spec1'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="formFile" class="form-label mt-4">img spec2!</label>
                                <input class="form-control <?= ($validation->hasError('img_spec2')) ? 'is-invalid' : ''; ?>" type="file" id="formFile" name="img_spec2" />
                                <div class="invalid-feedback"><?= $validation->getError('img_spec2'); ?></div>
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