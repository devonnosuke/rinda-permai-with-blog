<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template -->
    <link href="<?= base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?= base_url(); ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Custom styles from Yura -->
    <link href="<?= base_url(); ?>/css/my-style.css" rel="stylesheet">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

</head>

<body id="page-top">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
                <div class="sidebar-brand-icon">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                    <img src="<?= base_url(); ?>/img/logo-baru.png" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">Rinda Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu Utama
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item  <?= ($title == 'Daftar Property') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?= base_url(); ?>/admin/property">
                    <i class="bi bi-houses-fill"></i>
                    <span>Property</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item <?= ($title == 'Daftar Public Facility') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?= base_url(); ?>/admin/public-facility">
                    <i class="bi bi-people-fill"></i>
                    <span>Public Facility</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item <?= ($title == 'Social Link') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?= base_url(); ?>/admin/sociallink">
                    <i class="bi bi-share-fill"></i>
                    <span>Social Link</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item <?= ($title == 'Daftar Contact 📃') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?= base_url(); ?>/admin/contact">
                    <i class="bi bi-telephone"></i>
                    <span>Contact</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item <?= ($title == 'Daftar About 📃') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?= base_url(); ?>/admin/about">
                    <i class="bi bi-info-circle"></i>
                    <span>About</span></a>
            </li>
            <!-- Heading -->
            <div class="sidebar-heading">
                Menu Blog
            </div>
            <!-- Nav Item - Tables -->
            <li class="nav-item <?= ($title == 'Daftar Post') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?= base_url(); ?>/admin/post">
                    <i class="bi bi-file-post"></i>
                    <span>Postingan</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item <?= ($title == 'Daftar Category') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?= base_url(); ?>/admin/category">
                    <i class="bi bi-card-checklist"></i>
                    <span>Category</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item  <?= ($title == 'Daftar Tags📃') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?= base_url(); ?>/admin/tags">
                    <i class="bi bi-bookmark-fill"></i>
                    <span>Tags</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item <?= ($title == 'Daftar Comment📃') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?= base_url(); ?>/admin/comment">
                    <i class="bi bi-chat-left-text-fill"></i>
                    <span>Comment</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
                                Logout
                            </a>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= session()->get('username'); ?></span>
                                <img class="img-profile rounded-circle" src="<?= base_url(); ?>/img/undraw_profile.svg">
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <?= $this->renderSection('kontenya'); ?>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Rinda Permai | Yura Company <?= date('Y'); ?></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url(); ?>/user/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url(); ?>/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url(); ?>/js/demo/datatables-demo.js"></script>

</body>

</html>