<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Data Buku &mdash; Perpustakaan</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Buku</h1>
        <div class="section-header-button">
            <a href="<?= site_url('buku/new') ?>" class="btn btn-primary">Tambah</a>
        </div>
    </div>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" dats-dismiss="alert">X</button>
                <b>Berhasil !</b>
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
                <h4>Data Buku</h4>
                <div class="card-header-action">
                    <a href="buku/trash" class="btn btn-danger"><i class="fa fa-trash"></i> Sampah</a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-md">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul buku</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Kode Buku</th>
                            <th>Kategori</th>
                            <th>Jumlah</th>
                            <!-- <th>Status</th> -->
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($buku as $key => $value) : ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $value->judul_buku ?></td>
                                <td><?= $value->pengarang ?></td>
                                <td><?= $value->penerbit ?></td>
                                <td><?= $value->tahun_terbit ?></td>
                                <td><?= $value->kode_buku ?></td>
                                <td><?= $value->kategori ?></td>
                                <td><?= $value->jumlah_buku ?></td>

                                <td class="text-center" style="width:15%">
                                    <a href="<?= site_url('buku/' . $value->id_buku . '/edit') ?>" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                    <form action="<?= site_url('buku/' . $value->id_buku) ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin Hapus data ?')">
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
                </table>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>