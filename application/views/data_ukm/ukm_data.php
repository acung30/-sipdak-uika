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
            <h3 class="box-tittle">Daftar Nama UKM</h3>
            <div class="pull-right">
                <a href="<?= site_url('data_ukm/add') ?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-user-plus"></i> Create
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama UKM</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?= $no++ ?>.</td>
                            <td><?= $data->nama_ukm ?></td>
                            <td class="text-center" width="px">
                                <form action="" method="post">
                                    <a href="<?= site_url('data_ukm/add_pengurus/' . $data->id_ukm) ?>" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i> Input Data Pengurus
                                    </a>
                                    <a href="<?= site_url('data_ukm/detail/' . $data->id_ukm) ?>" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i> Detail Data Pengurus
                                    </a>
                                </form>
                            </td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
    </div>

</section><!-- /.content -->