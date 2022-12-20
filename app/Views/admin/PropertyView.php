<!-- Begin Page Content -->
<?= $this->extend('tables'); ?>
<?= $this->section('kontenya'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Property</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-white">Daftar [property]</h6>
        </div>
        <div class="card-body">
            <a href="<?= base_url(); ?>/admin/property/add" class="btn btn-primary mb-4">Tambah Property <i class="bi bi-plus"></i></a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th>Type Name</th>
                            <th>address</th>
                            <th>Post Number</th>
                            <th>Area</th>
                            <th class="text-center">Img Card</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($property as $property) : ?>
                            <tr>
                                <td class="text-center"><?= $no++; ?></td>
                                <td><?= $property['type_name']; ?></td>
                                <td><?= $property['address']; ?></td>
                                <td><?= $property['post_number']; ?></td>
                                <td><?= $property['area']; ?></td>
                                <td class="text-center">
                                    <img src="<?= base_url(); ?>/img/<?= $property['img_card']; ?>" alt="" class="img-thumbnail img-fluid" style="width: 150px" />
                                </td>
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