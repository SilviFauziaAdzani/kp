<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Data Pengarang &mdash; Perpustakaan</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Pengarang</h1>
        <div class="section-header-button">
            <a href="<?= site_url('pengarang/new') ?>" class="btn btn-primary">Tambah</a>
        </div>
    </div>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" dats-dismiss="alert">X</button>
                <b>Berhasi !</b>
                <?= session()->getFlashdata('success') ?>
            </div>
        </div>

    <?php endif; ?>
    <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" dats-dismiss="alert">X</button>
                <b>Gagal !</b>
                <?= session()->getFlashdata('errors') ?>
            </div>
        </div>

    <?php endif; ?>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Data Pengarang</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-md">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Pengarang</th>
                            <th>Info</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pengarang as $key => $value) : ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $value->pengarang ?></td>
                                <td><?= $value->info_pengarang ?></td>
                                <td class="text-center" style="width:15%">
                                    <a href="<?= site_url('pengarang/' . $value->id_pengarang . '/edit') ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                    <form action="<?= site_url('pengarang/' . $value->id_pengarang) ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin Hapus data ?')">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash-alt"></i></a>
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    </tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>