<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Update Pengunjung &mdash; Perpustakaan</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">

        <div class="section-header-back">
            <a href="<?= site_url('pengunjung') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Update Pengunjung</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Edit Pengunjung</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('pengunjung/' . $pengunjung->id_pengunjung) ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Nama Siswa *</label>
                        <input type="text" name="nama_pengunjung" value="<?= $pengunjung->nama_pengunjung ?>" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Kelas * </label>
                        <input type="text" name="kelas" value="<?= $pengunjung->kelas ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Judul Buku Bacaan </label>
                        <input type="text" name="judul_buku" value="<?= $pengunjung->judul_buku ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Kunjungan </label>
                        <input type="date" name="tanggal_kunjungan" value="<?= $pengunjung->tanggal_kunjungan ?>" class="form-control">
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