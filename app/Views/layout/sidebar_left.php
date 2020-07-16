<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
            <a href="/" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                    <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
            </a>

        </li>
        <li class="nav-item">
            <a href="<?= base_url(); ?>/pages/contact" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Kontak
                    <!-- <span class="right badge badge-danger">New</span> -->
                </p>
            </a>
        </li>
        <li class="nav-item has-treeview">
            <a href="<?= base_url(); ?>/komik" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Komik
                    <!-- <i class="fas fa-angle-left right"></i>
                    <span class="badge badge-info right">6</span> -->
                </p>
            </a>

        </li>
        <li class="nav-item has-treeview">
            <a href="<?= base_url(); ?>/database" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                    Database
                    <!-- <i class="fas fa-angle-left right"></i> -->
                </p>
            </a>
        </li>
        <li class="nav-item has-treeview">
            <a href="<?= base_url(); ?>/database/invoice" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                    Invoice
                    <!-- <i class="fas fa-angle-left right"></i> -->
                </p>
            </a>
        </li>



        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                    Mailbox
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?= base_url(); ?>/database/invoice" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Invoice</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="<?= base_url(); ?>/pages" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                    Pages
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?= base_url(); ?>/pages/about" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>About</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url(); ?>/pages/contact" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Contacts</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url(); ?>/pages/profile" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Profile</p>
                    </a>
                </li>
            </ul>
        </li>


    </ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>