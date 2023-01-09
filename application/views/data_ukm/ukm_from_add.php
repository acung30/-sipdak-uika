<section class="content-header">
    <h1>
        Data UKM
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Data UKM</a></li>

    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-tittle">Tambah Data UKM</h3>
            <div class="pull-right">
                <a href="<?= site_url('data_ukm') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4">
                    <?php //echo validation_errors(); 
                    ?>
                    <form action="" method="post">
                        <div class="form-group <?= form_error('nama_ukm') ? 'has-error' : null ?>">
                            <label>Nama UKM Baru</label>
                            <input type="text" name="nama_ukm" value="<?= set_value('nama_ukm') ?>" class="form-control">
                            <?= form_error('nama_ukm') ?>
                        </div>
                        <div class="form-group">
                            <button type="Submit" class="btn btn-success btn-flat">
                                <i class="fa fa-paper-plane"></i> Tambah
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section><!-- /.content -->