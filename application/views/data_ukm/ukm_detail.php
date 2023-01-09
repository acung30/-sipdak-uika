<section class="content-header">
    <h1>
        Data UKM
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Data Pengurus UKM</a></li>

    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-tittle">Data Nama Pengurus</h3>
            <div class="pull-right">
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tahun Akademik</th>
                        <th>Nama Pembina UKM</th>
                        <th>Nama Ketua UKM</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?= $no++ ?>.</td>
                            <td><?= $data->tahun_akademik ?></td>
                            <td><?= $data->pembina_ukm ?></td>
                            <td><?= $data->ketua_ukm ?></td>
                            <td class="text-center" width="px">
                                <a href="<?= site_url('data_ukm/data_lengkap_pengurus/' . $data->id_ukm) ?>" class="btn btn-primary btn-xs">
                                    <i class="fa fa-pencil"></i> Data Lengkap Pengurus
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