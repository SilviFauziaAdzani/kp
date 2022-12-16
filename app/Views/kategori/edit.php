<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Update Kategori &mdash; Perpustakaan</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">

        <div class="section-header-back">
            <a href="<?= site_url('kategori') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Update Kategori</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Edit Kategori</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('kategori/' . $kategori->id_kategori) ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Kategori *</label>
                        <input type="text" name="kategori" value="<?= $kategori->kategori ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Info</label>
                        <textarea name="info_kategori" class="form-control"><?= $kategori->info_kategori ?></textarea>
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