<!-- Begin Page Content -->
<?= $this->extend('tables'); ?>
<?= $this->section('kontenya'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Category</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-white">Daftar Category</h6>
        </div>
        <div class="card-body">
            <a href="<?= base_url(); ?>/admin/category/tambah" class="btn btn-primary mb-4">Tambah Category <i class="bi bi-plus"></i></a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center no-width">No</th>
                            <th>Category Name</th>
                            <th>Category Slug</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($category as $category) : ?>
                            <tr>
                                <td class="text-center"><?= $no++; ?></td>
                                <td><?= $category['category_name']; ?></td>
                                <td><?= $category['category_slug']; ?></td>

                                <td class="text-center">
                                    <a href="<?= base_url(); ?>/admin/category/edit/<?= $category['id_category']; ?>" class="btn btn-warning btn-circle me-2">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="<?= base_url(); ?>/admin/category/delete/<?= $category['id_category']; ?>" method="post" style="display: inline">
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