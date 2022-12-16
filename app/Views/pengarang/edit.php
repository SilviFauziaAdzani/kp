<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Update Pengarang &mdash; Perpustakaan</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">

        <div class="section-header-back">
            <a href="<?= site_url(' pengarang') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Update Pengarang</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Edit Pengarang</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('pengarang/' . $pengarang->id_pengarang) ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label> Pengarang *</label>
                        <input type="text" name=" pengarang" value="<?= $pengarang->pengarang ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Info</label>
                        <textarea name="info_pengarang" class="form-control"><?= $pengarang->info_pengarang ?></textarea>
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