<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- MyCSS style -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<!-- <body class="hold-transition sidebar-mini"> -->
<!-- <body class="hold-transition sidebar-mini layout-footer-fixed"> -->
<!-- <body class="hold-transition sidebar-mini layout-navbar-fixed"> -->

<body class="hold-transition sidebar-mini sidebar-collapse layout-footer-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url('/'); ?>" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url('/pages/about'); ?>" class="nav-link">About</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url('/pages/contact'); ?>" class="nav-link">Contact</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url('/pages/profile'); ?>" class="nav-link">Profile</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url('/komik'); ?>" class="nav-link">Komik</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <?= $this->include('layout/sidebar_right'); ?>
            <?= $this->include('layout/main_sidebar'); ?>
            <?= $this->include('layout/sidebar_left'); ?>
            <?= $this->include('layout/content_wrapper'); ?>
            <?= $this->renderSection('content'); ?>

            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    Rendered in {elapsed_time} seconds <b>Version</b> 1.0.0-Environment: <?= ENVIRONMENT ?> : Masrianto
                </div>
                <strong>Copyright &copy; 2018-<?= date('Y') ?> <a href="https://www.lakip.co.id">Admin LAKIP</a>.</strong> All rights reserved.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
</body>

</html>