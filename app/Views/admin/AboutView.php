<!-- Begin Page Content -->
<?= $this->extend('tables'); ?>
<?= $this->section('kontenya'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data About</h1>
    <?php d($About) ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar About</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>No</td>
                            <th>title</th>
                            <th>subtitle</th>
                            <th>description</th>
                            <th>visi</th>
                            <th>misi</th>
                            <th>img_thumb</th>
                            <th>img_profile</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?= $no = 1; ?>
                        <?php foreach ($About as $About) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $About['title']; ?></td>
                                <td><?= $About['subtitle']; ?></td>
                                <td><?= $About['description']; ?></td>
                                <td><?= $About['visi']; ?></td>
                                <td><?= $About['misi']; ?></td>
                                <td>
                                    <img src="<?php base_url(); ?>/img/undraw_profile.svg" alt="" class="img-thumbnail img-fluid" style="width: 150px" />
                                </td>
                                <td><img src="<?php base_url(); ?>/img/undraw_profile.svg" alt="" class="img-thumbnail img-fluid" style="width: 150px" /></td>
                                <td class="text-center">
                                    <a href="<?= base_url(); ?>nama_tabel/edit/" class="btn btn-warning btn-circle me-2">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="<?= base_url(); ?>nama_tabel/delete/" method="post" style="display: inline">
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