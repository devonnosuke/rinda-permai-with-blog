<!-- Begin Page Content -->
<?= $this->extend('tables'); ?>
<?= $this->section('kontenya'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Property</h1>
    <?= d($property); ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar [property]</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>type_name</th>
                            <th>address</th>
                            <th>post_number</th>
                            <th>lt</th>
                            <th>lb</th>
                            <th>area</th>
                            <th>bads</th>
                            <th>baths</th>
                            <th>garages</th>
                            <th>description</th>
                            <th>aminities</th>
                            <th>video</th>
                            <th>img_card</th>
                            <th>img_card_spec1</th>
                            <th>img_card_spec2</th>
                            <th>id_property_spec</th>
                            <th>id_property_gallery</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($property as $property) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td>Tiger Nixon</td>
                                <td><?= $property['address']; ?></td>
                                <td><?= $property['post_number']; ?></td>
                                <td><?= $property['lt']; ?></td>
                                <td><?= $property['lb']; ?></td>
                                <td><?= $property['area']; ?></td>
                                <td><?= $property['bads']; ?></td>
                                <td><?= $property['baths']; ?></td>
                                <td><?= $property['garages']; ?></td>
                                <td><?= $property['description']; ?></td>
                                <td><?= $property['aminities']; ?></td>
                                <td><?= $property['video']; ?></td>

                                <td class="text-center">
                                    <img src="<?= base_url(); ?>/img/undraw_profile.svg" alt="" class="img-thumbnail img-fluid" style="width: 150px" />
                                </td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
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