<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Create Buku &mdash; Perpustakaan</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">

        <div class="section-header-back">
            <a href="<?= site_url('buku') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Create Buku</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Buat Buku</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('buku') ?>" method="POST" autocomplete="off">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label>Judul buku *</label>
                        <input type="text" name="judul_buku" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Pengarang </label>
                        <input type="text" name="pengarang" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Penerbit </label>
                        <input type="text" name="penerbit" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tahun Terbit </label>
                        <input type="number" name="tahun_terbit" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Kode Buku </label>
                        <input type="text" name="kode_buku" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>buku * </label>
                        <select name="id_buku" class="form-control" required>
                            <option value="" hidden></option>
                            <?php foreach ($buku as $key => $value) : ?>
                                <option value="<?= $value->id_buku ?>"><?= $value->judul_buku ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jumlah </label>
                        <input type="number" name="jumlah_buku" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Info</label>
                        <textarea name="info_buku" class="form-control"></textarea>
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