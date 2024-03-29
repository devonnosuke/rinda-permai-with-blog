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

                            <th class="text-center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($About as $About) : ?>
                            <tr>
                                <td class="text-center"><?= $no++; ?></td>
                                <td><?= $About['title']; ?></td>
                                <td><?= $About['subtitle']; ?></td>
                                <td><?= $About['description']; ?></td>
                                <td><?= $About['visi']; ?></td>
                                <td><?= $About['misi']; ?></td>

                                <td class="text-center">
                                    <a href="<?= base_url(); ?>/admin/about/edit/<?= $About['id_about']; ?>" class="btn btn-warning btn-circle me-2">
                                        <i class="fas fa-edit"></i>
                                    </a>

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