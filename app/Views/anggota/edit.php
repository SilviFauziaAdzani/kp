<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Update Anggota &mdash; Perpustakaan</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">

        <div class="section-header-back">
            <a href="<?= site_url(' anggota') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Update Anggota</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Edit Anggota</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('anggota/' . $anggota->id_anggota) ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <div class="form-group">
                            <label>No Anggota *</label>
                            <input type="text" name="no_anggota" value="<?= $anggota->no_anggota ?>" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label>Nama Siswa *</label>
                            <input type="text" name="nama_siswa" value="<?= $anggota->nama_siswa ?>" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label>Kelas *</label>
                            <input type="text" name="kelas" value="<?= $anggota->kelas ?>" class="form-control" required autofocus>
                        </div>

                        <div class="form-group">
                            <label>Info</label>
                            <textarea name="info_anggota" class="form-control"><?= $anggota->info_anggota ?></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Save</button>
                            <button type="reset" class="btn btn-secondary">Reset</i></button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>