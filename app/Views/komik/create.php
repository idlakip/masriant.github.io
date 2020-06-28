<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">

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
            <h2 class="my-3">Form Tambah Data</h2>
            <!-- <form class="quickForm" action="/komik/save" method="post"> -->
            <form class="form-horizontal" action="/komik/save" method="post">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul" autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Penulis">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Penerbit">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sampul" name="sampul" placeholder="Sampul" .jpg>
                    </div>
                </div>

        </div>
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-danger">Submit</button>
            </div>
        </div>
        </form>


    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Footer
    </div>
    <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
</div>
<?= $this->endSection(); ?>
<!-- /.content-wrapper -->