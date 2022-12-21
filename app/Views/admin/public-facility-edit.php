<!-- Begin Page Content -->
<?= $this->extend('tables'); ?>
<?= $this->section('kontenya'); ?>
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-white">Form Tambah Public Facility</h6>
        </div>
        <div class="card-body">
            <div class="container mt-5 form">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="h3 mb-2 text-gray-800"><i class="bi bi-plus-circle-dotted"></i> Isi data Public Facility baru disini:</h1>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="/" class="btn btn-primary mb-2 ms-3">
                            < Kembali ke Daftar <i class="bi bi-card-list"></i>
                        </a>
                    </div>
                </div>


                <div class="card bg-light mb-3">
                    <div class="card-body">

                        <form class="px-2 mb-5 user" action="<?= base_url(); ?>/admin/public-facility/save/<?= $public_facility['id_public_facility']; ?>" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <label for="name" class="form-label mt-4">Masukkan nama baru</label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" name="name" id="name" placeholder="masukkan nama disini..." value="<?= $public_facility['name']; ?>" />
                                <div class="invalid-feedback"><?= $validation->getError('name'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="form-label mt-4">Masukkan Deskripsi</label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('description')) ? 'is-invalid' : ''; ?>" name="description" id="name" placeholder="masukkan Deskripsi disini..." value="<?= $public_facility['description']; ?>" />
                                <div class="invalid-feedback"><?= $validation->getError('description'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="form-label mt-4">Masukkan Icon</label>
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('icon')) ? 'is-invalid' : ''; ?>" name="icon" id="name" placeholder="masukkan icon disini..." value="<?= $public_facility['icon']; ?>" />
                                <div class="invalid-feedback"><?= $validation->getError('icon'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="formFile" class="form-label mt-4">Input your photos!</label>
                                <input class="form-control <?= ($validation->hasError('image')) ? 'is-invalid' : ''; ?>" type="file" id="formFile" name="image[]" multiple />
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