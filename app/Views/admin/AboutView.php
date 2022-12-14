<!-- Begin Page Content -->
<?= $this->extend('tables'); ?>
<?= $this->section('kontenya'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data About</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-white">Daftar About</h6>
        </div>
        <div class="card-body">
            <a href="<?= base_url(); ?>/admin/about/tambah" class="btn btn-primary mb-4">Tambah About <i class="bi bi-plus"></i></a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Subtitle</th>
                            <th>Description</th>
                            <th>Visi</th>
                            <th>Misi</th>
                            <th>Img Thumb</th>
                            <th>Img Profile</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?= $no = 1; ?>
                        <?php foreach ($About as $About) : ?>
                            <tr>
                                <td class="text-center"><?= $no++; ?></td>
                                <td><?= $About['title']; ?></td>
                                <td><?= $About['subtitle']; ?></td>
                                <td><?= $About['description']; ?></td>
                                <td><?= $About['visi']; ?></td>
                                <td><?= $About['misi']; ?></td>
                                <td>
                                    <img src="<?php base_url(); ?>/img/<?= $About['img_thumb']; ?>" alt="" class="img-thumbnail img-fluid" style="width: 150px" />
                                </td>
                                <td><img src="<?php base_url(); ?>/img/<?= $About['img_profile']; ?>" alt="" class="img-thumbnail img-fluid" style="width: 150px" /></td>
                                <td class="text-center">
                                    <a href="<?= base_url(); ?>nama_tabel/edit/" class="btn btn-warning btn-circle me-2">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="<?= base_url(); ?>/admin/about/delete/<?= $About['id_about']; ?>" method="post" style="display: inline">
                                        <button class="btn btn-danger ms-2 btn-circle">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <input type="hidden" name="_method" value="DELETE" />
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>