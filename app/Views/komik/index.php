<?= $this->extend('layout/templates/tables'); ?>

<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DataTable with minimal features & hover style</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Sampul</th>
                                    <th>Judul</th>
                                    <th>Aksi</th>
                                    <th>Link</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><img src="/images/bg-title-02.jpg" class="sampul"></td>
                                    <td>Naruto</td>
                                    <td> 4</td>
                                    <td>
                                        <a href="#" class="btn btn-success">Detail</a>
                                    </td>
                                </tr>


                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Sampul</th>
                                    <th>Judul</th>
                                    <th>Aksi</th>
                                    <th>Link</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DataTable with default features</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Sampul</th>
                                    <th>Judul</th>
                                    <th>Aksi</th>
                                    <th>Link</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td><img src="/images/bg-title-01.jpg" class="sampul"></td>
                                    <td>Naruto</td>
                                    <td> 4</td>
                                    <td>
                                        <a href="#" class="btn btn-success">Detail</a>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Sampul</th>
                                    <th>Judul</th>
                                    <th>Aksi</th>
                                    <th>Link</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection(); ?>