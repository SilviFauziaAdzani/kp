<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Data Buku &mdash; yukNikah</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">

        <div class="section-header-back">
            <a href="<?= site_url('buku') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Sampah Buku</h1>
    </div>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" dats-dismiss="alert"></button>
                <b>Success !</b>
                <?= session()->getFlashdata('success') ?>
            </div>
        </div>

    <?php endif; ?>
    <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" dats-dismiss="alert">X</button>
                <b>Error !</b>
                <?= session()->getFlashdata('errors') ?>
            </div>
        </div>

    <?php endif; ?>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Data Buku - Sampah</h4>
                <div class="card-header-action">
                    <a href="buku/restore" class="btn btn-info">Restore All</a>
                    <form action="<?= site_url('buku/delete2') ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin Hapus data ?')">
                        <?= csrf_field() ?>
                        <button class="btn btn-danger btn-sm">
                            Delete All</a>
                        </button>
                    </form>
                </div>

            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-md">
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th>Judul Buku</th>
                            <th>Info</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach ($buku as $key => $value) : ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $value->name_group ?></td>
                                <td><?= $value->info_group ?></td>
                                <td class="text-center" style="width:15%">
                                    <a href="<?= site_url('buku/restore/' . $value->id_group) ?>" class="btn btn-info btn-sm">Restore</a>
                                    <form action="<?= site_url('buku/delete2/' . $value->id_group) ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin Hapus data ?')">
                                        <?= csrf_field() ?>
                                        <button class="btn btn-danger btn-sm">
                                            Delete</a>
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>