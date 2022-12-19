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
                            <th>No</th>
                            <th>Comment Date</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Post Slug</th>
                            <th class="text-center">Image</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($comment as $comment) : ?>
                            <?php if ($comment['status'] == 0) {
                                $status =  'tidak aktif';
                            } else {
                                $status = 'aktif';
                            } ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= formatTanggal($comment['comment_date']); ?></td>
                                <td><?= $comment['email']; ?></td>
                                <td><?= $comment['message']; ?></td>
                                <td><?= $status ?></td>
                                <td><?= $comment['post_slug']; ?></td>
                                <td class="text-center">
                                    <img src="<?= base_url(); ?>/img/comment/<?= $comment['image']; ?>" alt="" class="img-thumbnail img-fluid" style="width: 150px" />
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