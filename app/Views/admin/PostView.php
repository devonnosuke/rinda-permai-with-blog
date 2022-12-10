<!-- Begin Page Content -->
<?= $this->extend('index'); ?>
<?= $this->section('kontenya'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Post</h1>
    <?php d('post') ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Post</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Content</th>
                            <th>Image</th>
                            <th>Id_Category</th>
                            <th>Post_Tags</th>
                            <th>Post_Slug</th>
                            <th>Post_Status</th>
                            <th>Post_Views</th>
                            <th>Id_User</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?= $no = 1; ?>
                        <?php foreach ($post as $post) : ?> <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $post['title']; ?></td>
                                <td><?= $post['description']; ?></td>
                                <td><?= $post['content']; ?></td>
                                <td class="text-center">
                                    <img src="<?= base_url(); ?>/img/undraw_profile.svg" alt="" class="img-thumbnail img-fluid" style="width: 150px" />
                                </td>
                                <td><?= $post['id_category']; ?></td>
                                <td><?= $post['post_tags']; ?></td>
                                <td><?= $post['post_slug']; ?></td>
                                <td><?= $post['post_status']; ?></td>
                                <td><?= $post['post_views']; ?></td>
                                <td><?= $post['id_user']; ?></td>
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