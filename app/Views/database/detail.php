<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Table <a href="/database" class="btn btn-sm btn-primary"> <i class="fas fa-undo-alt"></i> Back</a></h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                            <div class="card bg-light">
                                <div class="card-header text-muted border-bottom-0">
                                    Detail <?= $database['penerbit']; ?>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b><?= $database['judul']; ?></b></h2>
                                            <p class="text-muted text-sm"><b>About: </b> <?= $database['judul']; ?> </p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <b>Penerbit : </b><?= $database['penerbit']; ?> </li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-user-edit"></i></span> <b>Penulis : </b><?= $database['penulis']; ?> </li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <b>Slug : </b><?= $database['slug']; ?> </li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-user"></i></span> <b>Dibuat : </b><?= $database['created_at']; ?> </li>
                                                <li class="small"><span class="fa-li"><i class="far fa-calendar-check"></i></span> <b>Update : </b><?= $database['updated_at']; ?> </li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-user-slash"></i></span> <b>Delete : </b><?= $database['id']; ?> </li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-id-badge"></i></span> <b>ID : </b><?= $database['id']; ?> </li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img src="/images/<?= $database['sampul']; ?>" alt="user-avatar" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <a href="" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit </a>
                                        <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Delete</a>
                                        <a href="/database" class="btn btn-sm btn-primary"> <i class="fas fa-undo-alt"></i> Back</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card-body">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-8">
                                    <!-- <div class="card-body"> -->
                                    <div class="card-header text-muted border-bottom-0">
                                        Detail :
                                        <p class="text-muted text-sm"><b>Judul Buku: </b> <?= $database['judul']; ?> </p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <b>Penerbit : </b><?= $database['penerbit']; ?> </li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-user-edit"></i></span> <b>Penulis : </b><?= $database['penulis']; ?> </li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <b>Slug : </b><?= $database['slug']; ?> </li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-user"></i></span> <b>Dibuat : </b><?= $database['created_at']; ?> </li>
                                            <li class="small"><span class="fa-li"><i class="far fa-calendar-check"></i></span> <b>Update : </b><?= $database['updated_at']; ?> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <a href="" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit </a>
                                <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Delete</a>
                                <a href="/database" class="btn btn-sm btn-primary"> <i class="fas fa-undo-alt"></i> Back</a>

                            </div>
                        </div>



                    </div>


                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->



            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><?= $title; ?></h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="/images/<?= $database['sampul']; ?>" class="card-img" alt="">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $database['judul']; ?></h5>
                                    <br>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <b>Penulis : </b> <?= $database['penulis']; ?> </li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> <b>Penerbit : </b> <?= $database['penerbit']; ?> </li>
                                    </ul>

                                    <a href="" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit </a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Delete</a>
                                    <a href="/database" class="btn btn-sm btn-primary"> <i class="fas fa-undo-alt"></i> Back</a>
                                </div>
                            </div>
                        </div>
                    </div>







                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->




        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- </div> -->
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection(); ?>