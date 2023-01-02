<!-- Begin Page Content -->
<?= $this->extend('tables'); ?>
<?= $this->section('kontenya'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Post</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-white">Daftar Post</h6>
        </div>
        <div class="card-body">
            <a href="<?= base_url(); ?>/admin/post/tambah" class="btn btn-primary mb-4">Tambah Post <i class="bi bi-plus"></i></a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>

                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Tanggal</th>
                            <th>Content</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Tags</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th>Views</th>
                            <th>Username</th>
                            <th class="text-center">Opsi</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($post as $post) : ?>
                            <?php if ($post['post_status'] == 0) {
                                $post_status = 'tidak aktif';
                            } else {
                                $post_status = 'aktif';
                            } ?>
                            <tr>
                                <td class="text-center"><?= $no++; ?></td>
                                <td><?= $post['title']; ?></td>
                                <td><?= formatTanggal($post['post_last_update']); ?></td>
                                <td><?= $post['content']; ?></td>
                                <td><?= $post['description']; ?></td>
                                <td class="text-center">
                                    <img src="<?= base_url(); ?>/img/post/<?= $post['image']; ?>" alt="" class="img-thumbnail img-fluid" style="width: 150px" />
                                </td>
                                <td><?= $post['category_name']; ?></td>
                                <td><?= $post['post_tags']; ?></td>
                                <td><?= $post['post_slug']; ?></td>
                                <td><?= $post_status; ?></td>
                                <td><?= $post['post_views']; ?></td>
                                <td><?= $post['username']; ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url(); ?>/admin/post/edit/<?= $post['id_post']; ?>" class="btn btn-warning btn-circle me-2">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="<?= base_url(); ?>/admin/post/delete/<?= $post['id_post']; ?>" method="post" style="display: inline">
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