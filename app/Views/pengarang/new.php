<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Create Pengarang &mdash; Perpustakaan</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">

        <div class="section-header-back">
            <a href="<?= site_url('pengarang') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Create Pengarang</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Buat Pengarang</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('pengarang') ?>" method="POST" autocomplete="off">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label>Nama Pengarang *</label>
                        <input type="text" name="pengarang" class="form-control" required autofocus>
                    </div>

                    <div class="form-group">
                        <label>Info</label>
                        <textarea name="info_pengarang" class="form-control"></textarea>
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