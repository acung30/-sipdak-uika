<section class="content-header">
    <h1>
        Data Pengurus
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Data Pengurus</a></li>

    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-tittle">Tambah Data Pengurus</h3>
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
                        <div class="form-group <?= form_error('tahun_akademik') ? 'has-error' : null ?>">
                            <label>Tahun Akademik</label>
                            <input type="hidden" name="id_ukm" value="<?= $row->id_ukm ?>">

                            <!-- <input type="text" value="<?= $this->input->post('tahun_akademik') ?? $row->tahun_akademik ?>" class="form-control">  -->

                            <select name="tahun_akademik" id="tahun_akademik" class="form-control">
                                <option value="">Pilih Tahun Akademik</option>
                                <?php foreach ($tahun_akademik as $thn) : ?>
                                    <option value="<?= $thn->id_tahun_akademik ?>"><?= $thn->tahun_akademik ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('tahun_akademik') ?>
                        </div>



                        <div class="form-group <?= form_error('pembina_ukm') ? 'has-error' : null ?>">
                            <label>Nama Pembina UKM</label>
                            <input type="text" name="pembina_ukm" value="<?= $row->pembina_ukm ?>" class="form-control">
                            <?= form_error('pembina_ukm') ?>
                        </div>
                        <div class="form-group <?= form_error('ketua_ukm') ? 'has-error' : null ?>">
                            <label>Nama Ketua UKM</label>
                            <input type="text" name="ketua_ukm" value="<?= $row->ketua_ukm ?>" class="form-control">
                            <?= form_error('ketua_ukm') ?>
                        </div>

                        <div class="form-group <?= form_error('sekretaris_ukm') ? 'has-error' : null ?>">
                            <label>Sekretaris</label>
                            <input type="text" name="sekretaris_ukm" value="<?= $row->sekretaris_ukm ?>" class="form-control">
                            <?= form_error('sekretaris_ukm') ?>
                        </div>

                        <div class="form-group <?= form_error('bendahara_ukm') ? 'has-error' : null ?>">
                            <label>Bendahara</label>
                            <input type="text" name="bendahara_ukm" value="<?= $row->bendahara_ukm ?>" class="form-control">
                            <?= form_error('bendahara_ukm') ?>
                        </div>

                        <div class="form-group <?= form_error('koodirnator_pengembangan_sdm') ? 'has-error' : null ?>">
                            <label>Koordinator Pengembangan SDM</label>
                            <input type="text" name="koodirnator_pengembangan_sdm" value="<?= $row->koodirnator_pengembangan_sdm ?>" class="form-control">
                            <?= form_error('koodirnator_pengembangan_sdm') ?>
                        </div>

                        <div class="form-group <?= form_error('sekretaris_pengembangan_sdm') ? 'has-error' : null ?>">
                            <label>Sekretaris Pengembangan SDM</label>
                            <input type="text" name="sekretaris_pengembangan_sdm" value="<?= $row->sekretaris_pengembangan_sdm ?>" class="form-control">
                            <?= form_error('sekretaris_pengembangan_sdm') ?>
                        </div>

                        <div class="form-group <?= form_error('anggota_pengembangan_sdm') ? 'has-error' : null ?>">
                            <label>Anggota Pengembangan SDM</label>
                            <input type="text" name="anggota_pengembangan_sdm" value="<?= $row->anggota_pengembangan_sdm ?>" class="form-control">
                            <?= form_error('anggota_pengembangan_sdm') ?>
                        </div>

                        <div class="form-group <?= form_error('koordinator_kominfo') ? 'has-error' : null ?>">
                            <label>Koordinator Kominfo</label>
                            <input type="text" name="koordinator_kominfo" value="<?= $row->koordinator_kominfo ?>" class="form-control">
                            <?= form_error('koordinator_kominfo') ?>
                        </div>

                        <div class="form-group <?= form_error('sekretaris_kominfo') ? 'has-error' : null ?>">
                            <label>Sekretaris Kominfo</label>
                            <input type="text" name="sekretaris_kominfo" value="<?= $row->sekretaris_kominfo ?>" class="form-control">
                            <?= form_error('sekretaris_kominfo') ?>
                        </div>

                        <div class="form-group <?= form_error('anggota_kominfo') ? 'has-error' : null ?>">
                            <label>Anggota Kominfo</label>
                            <input type="text" name="anggota_kominfo" value="<?= $row->anggota_kominfo ?>" class="form-control">
                            <?= form_error('anggota_kominfo') ?>
                        </div>

                        <div class="form-group <?= form_error('koordinato_riset_dan_teknologi') ? 'has-error' : null ?>">
                            <label>Koordinator Riset dan Teknologi</label>
                            <input type="text" name="koordinato_riset_dan_teknologi" value="<?= $row->koordinato_riset_dan_teknologi ?>" class="form-control">
                            <?= form_error('koordinato_riset_dan_teknologi') ?>
                        </div>

                        <div class="form-group <?= form_error('sekretaris_riset_dan_teknologi') ? 'has-error' : null ?>">
                            <label>Sekretaris Riset dan Teknologi</label>
                            <input type="text" name="sekretaris_riset_dan_teknologi" value="<?= $row->sekretaris_riset_dan_teknologi ?>" class="form-control">
                            <?= form_error('sekretaris_riset_dan_teknologi') ?>
                        </div>

                        <div class="form-group <?= form_error('anggota_riset_dan_teknologi') ? 'has-error' : null ?>">
                            <label>Anggota Riset dan Teknologi</label>
                            <input type="text" name="anggota_riset_dan_teknologi" value="<?= $row->anggota_riset_dan_teknologi ?>" class="form-control">
                            <?= form_error('anggota_riset_dan_teknologi') ?>
                        </div>

                        <div class="form-group <?= form_error('koordinator_sospolma') ? 'has-error' : null ?>">
                            <label>Koordinator Sospolma</label>
                            <input type="text" name="koordinator_sospolma" value="<?= $row->koordinator_sospolma ?>" class="form-control">
                            <?= form_error('koordinator_sospolma') ?>
                        </div>

                        <div class="form-group <?= form_error('sekretaris_sospolma') ? 'has-error' : null ?>">
                            <label>Sekretaris Sospolma</label>
                            <input type="text" name="sekretaris_sospolma" value="<?= $row->sekretaris_sospolma ?>" class="form-control">
                            <?= form_error('sekretaris_sospolma') ?>
                        </div>

                        <div class="form-group <?= form_error('anggota_sospolma') ? 'has-error' : null ?>">
                            <label>Anggota Sospolma</label>
                            <input type="text" name="anggota_sospolma" value="<?= $row->anggota_sospolma ?>" class="form-control">
                            <?= form_error('anggota_sospolma') ?>
                        </div>

                        <div class="form-group <?= form_error('koordinator_sora') ? 'has-error' : null ?>">
                            <label>Koordinator Sora</label>
                            <input type="text" name="koordinator_sora" value="<?= $row->koordinator_sora ?>" class="form-control">
                            <?= form_error('koordinator_sora') ?>
                        </div>

                        <div class="form-group <?= form_error('sekretaris_sora') ? 'has-error' : null ?>">
                            <label>Sekretaris Sora</label>
                            <input type="text" name="sekretaris_sora" value="<?= $row->sekretaris_sora ?>" class="form-control">
                            <?= form_error('sekretaris_sora') ?>
                        </div>

                        <div class="form-group <?= form_error('anggota_sora') ? 'has-error' : null ?>">
                            <label>Anggota Sora</label>
                            <input type="text" name="anggota_sora" value="<?= $row->anggota_sora ?>" class="form-control">
                            <?= form_error('anggota_sora') ?>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-flat">
                                <i class="fa fa-paper-plane"></i> Save
                            </button>
                            <button type="reset" class="btn btn-flat">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section><!-- /.content -->