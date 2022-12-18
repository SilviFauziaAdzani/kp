<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Create Peminjaman &mdash; Perpustakaan</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">

        <div class="section-header-back">
            <a href="<?= site_url('peminjaman') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Create Peminjaman</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Buat Peminjaman</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('peminjaman') ?>" method="POST" autocomplete="off">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label>No Anggota *</label>
                        <select name="id_anggota" class="form-control" required>
                            <option value="" hidden></option>
                            <?php foreach ($anggota as $key => $value) : ?>
                                <option value="<?= $value->id_anggota ?>"><?= $value->no_anggota ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Siswa *</label>
                        <select name="id_anggota" class="form-control" required>
                            <option value="" hidden></option>
                            <?php foreach ($anggota as $key => $value) : ?>
                                <option value="<?= $value->id_anggota ?>"><?= $value->nama_siswa ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kelas *</label>
                        <select name="id_anggota" class="form-control" required>
                            <option value="" hidden></option>
                            <?php foreach ($anggota as $key => $value) : ?>
                                <option value="<?= $value->id_anggota ?>"><?= $value->kelas ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Judul Buku *</label>
                        <select name="id_buku" class="form-control" required>
                            <option value="" hidden></option>
                            <?php foreach ($buku as $key => $value) : ?>
                                <option value="<?= $value->id_buku ?>"><?= $value->judul_buku ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Pengarang *</label>
                        <select name="id_buku" class="form-control" required>
                            <option value="" hidden></option>
                            <?php foreach ($buku as $key => $value) : ?>
                                <option value="<?= $value->id_buku ?>"><?= $value->pengarang ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pinjam </label>
                        <input type="date" name="pinjaman" class="form-control">
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