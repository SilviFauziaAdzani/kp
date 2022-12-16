<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Update Buku &mdash; Perpustakaan</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">

        <div class="section-header-back">
            <a href="<?= site_url('buku') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Update Buku</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Edit Buku</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('buku/' . $buku->id_buku) ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Judul buku *</label>
                        <input type="text" name="judul_buku" value="<?= $buku->judul_buku ?>" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Pengarang *</label>
                        <select name="id_pengarang" class="form-control" required>
                            <option value="" hidden></option>
                            <?php foreach ($pengarang as $key => $value) : ?>
                                <option value="<?= $value->id_pengarang ?>" <?= $buku->id_pengarang == $value->id_pengarang ? 'selected' : null ?>><?= $value->pengarang ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Penerbit *</label>
                        <input type="text" name="penerbit" value="<?= $buku->penerbit ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tahun Terbit *</label>
                        <input type="number" name="tahun_terbit" value="<?= $buku->tahun_terbit ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Kode Buku *</label>
                        <input type="text" name="kode_buku" value="<?= $buku->kode_buku ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Kategori *</label>
                        <select name="id_kategori" class="form-control" required>
                            <option value="" hidden></option>
                            <?php foreach ($kategori as $key => $value) : ?>
                                <option value="<?= $value->id_kategori ?>" <?= $buku->id_kategori == $value->id_kategori ? 'selected' : null ?>><?= $value->kategori ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jumlah *</label>
                        <input type="text" name="jumlah_buku" value="<?= $buku->jumlah_buku ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Status *</label>
                        <input type="text" name="status_ketersediaan" value="<?= $buku->status_ketersediaan ?>" class="form-control" required>
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