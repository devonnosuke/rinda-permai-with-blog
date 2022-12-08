<!-- Begin Page Content -->
<?= $this->extend('index'); ?>
<?= $this->section('kontenya'); ?>
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah [nama tabel]</h6>
        </div>
        <div class="card-body">
            <div class="container mt-5">
                <div class="page-title">
                    <h3>Add New Post</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="">Dashboard</a></li>
                            <li><a href="#">Post</a></li>
                            <li class="active">Add New</li>
                        </ol>
                    </div>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="panel panel-white">

                                <div class="panel-body">

                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control title" placeholder="Title" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="slug" class="form-control slug" placeholder="Permalink" style="background-color: #F8F8F8;outline-color: none;border:0;color:blue;" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Contents</label>
                                        <textarea name="contents" id="summernote"></textarea>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="panel panel-white">

                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="filefoto" class="dropify" data-height="190" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="form-control" name="category" required>
                                            <option value="">-Select Option-</option>

                                            <option value=""></option>

                                        </select>
                                    </div>
                                    <label>Tags</label>
                                    <div style="overflow-y:scroll;height:150px;margin-bottom:30px;">

                                        <div class="form-group">
                                            <label>
                                                <input type="checkbox" name="tag[]" value="">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <button type="submit" class="btn btn-primary btn-lg" style="width:100%"><span class="icon-cursor"></span> PUBLISH</button>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-white">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>Meta Description</label>
                                        <textarea name="description" cols="6" rows="6" class="form-control" placeholder="Meta Description"></textarea>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    <?= $this->endSection(); ?>