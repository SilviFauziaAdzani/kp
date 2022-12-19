<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Update Peminjaman &mdash; Perpustakaan</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">

        <div class="section-header-back">
            <a href="<?= site_url('peminjaman') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Update Peminjaman</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Edit Peminjaman</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('peminjaman/' . $peminjaman->id_peminjaman) ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>No Anggota *</label>
                        <select name="id_anggota" class="form-control" required>
                            <option value="" hidden></option>
                            <?php foreach ($anggota as $key => $value) : ?>
                                <option value="<?= $value->id_anggota ?>" <?= $peminjaman->id_anggota == $value->id_anggota ? 'selected' : null ?>><?= $value->no_anggota ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Siswa * </label>
                        <select name="id_anggota" class="form-control" required>
                            <option value="" hidden></option>
                            <?php foreach ($anggota as $key => $value) : ?>
                                <option value="<?= $value->id_anggota ?>" <?= $peminjaman->id_anggota == $value->id_anggota ? 'selected' : null ?>><?= $value->nama_siswa ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kelas * </label>
                        <select name="id_anggota" class="form-control" required>
                            <option value="" hidden></option>
                            <?php foreach ($anggota as $key => $value) : ?>
                                <option value="<?= $value->id_anggota ?>" <?= $peminjaman->id_anggota == $value->id_anggota ? 'selected' : null ?>><?= $value->kelas ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Judul Buku * </label>
                        <select name="id_buku" class="form-control" required>
                            <option value="" hidden></option>
                            <?php foreach ($buku as $key => $value) : ?>
                                <option value="<?= $value->id_buku ?>" <?= $peminjaman->id_buku == $value->id_buku ? 'selected' : null ?>><?= $value->judul_buku ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Pengarang * </label>
                        <select name="id_buku" class="form-control" required>
                            <option value="" hidden></option>
                            <?php foreach ($buku as $key => $value) : ?>
                                <option value="<?= $value->id_buku ?>" <?= $peminjaman->id_buku == $value->id_buku ? 'selected' : null ?>><?= $value->pengarang ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Pinjaman * </label>
                        <input type="date" name="pinjaman" value="<?= $peminjaman->pinjaman ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Kembali * </label>
                        <input type="date" name="kembali" value="<?= $peminjaman->kembali ?>" class="form-control">
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