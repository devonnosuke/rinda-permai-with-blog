<!-- Begin Page Content -->
<?= $this->extend('tables'); ?>
<?= $this->section('kontenya'); ?>
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-white">Form Edit Contact</h6>
        </div>
        <div class="card-body">
            <div class="container mt-5 form">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="h3 mb-2 text-gray-800"><i class="bi bi-plus-circle-dotted"></i> Edit data Contact disini:</h1>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="<?= base_url(); ?>/admin/contact" class="btn btn-primary mb-2 ms-3">
                            < Kembali ke Daftar <i class="bi bi-card-list"></i>
                        </a>
                    </div>
                </div>


                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <form class="px-2 mb-5 user" action="<?= base_url(); ?>/admin/contact/save/<?= $contact['id_contact']; ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="email" class="form-label mt-4">Masukkan contact Email</label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" name="email" id="id_name" placeholder="masukkan contact disini..." value="<?= $contact['email']; ?>" />
                                <div class="invalid-feedback"><?= $validation->getError('email'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="form-label mt-4">Masukkan Phone </label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('phone')) ? 'is-invalid' : ''; ?>" name="phone" id="id_name" placeholder="masukkan contact disini..." value="<?= $contact['phone']; ?>" />
                                <div class="invalid-feedback"><?= $validation->getError('phone'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="form-label mt-4">Masukkan contact Address</label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('address')) ? 'is-invalid' : ''; ?>" name="address" id="id_name" placeholder="masukkan contact disini..." value="<?= $contact['address']; ?>" />
                                <div class="invalid-feedback"><?= $validation->getError('address'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="name_residence" class="form-label mt-4">Masukkan contact Name Residence</label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('name_residence')) ? 'is-invalid' : ''; ?>" name="name_residence" id="id_name" placeholder="masukkan contact disini..." value="<?= $contact['name_residence']; ?>" />
                                <div class="invalid-feedback"><?= $validation->getError('name_residence'); ?></div>
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