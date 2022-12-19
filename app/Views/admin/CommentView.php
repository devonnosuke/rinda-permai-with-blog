<!-- Begin Page Content -->
<?= $this->extend('tables'); ?>
<?= $this->section('kontenya'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Comment</h1>
    <?php d($comment) ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar comment</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>no</th>
                            <th>email</th>
                            <th>message</th>
                            <th>status</th>
                            <th>comment_parent</th>
                            <th>id_post</th>
                            <th>image</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($comment as $comment) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $comment['email']; ?></td>
                                <td><?= $comment['message']; ?></td>
                                <td><?= $comment['status']; ?></td>
                                <td><?= $comment['comment_parent']; ?></td>
                                <td><?= $comment['id_post']; ?></td>
                                <td class="text-center">
                                    <img src="<?= base_url(); ?>/img/undraw_profile.svg" alt="" class="img-thumbnail img-fluid" style="width: 150px" />
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