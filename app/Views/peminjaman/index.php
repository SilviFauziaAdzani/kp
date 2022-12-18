<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Data Pinjaman &mdash; Perpustakaan</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Peminjaman</h1>
        <div class="section-header-button">
            <a href="<?= site_url('peminjaman/new') ?>" class="btn btn-primary">Tambah</a>
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
                <h4>Data Peminjaman</h4>
                <div class="card-header-action">
                    <a href="peminjaman/trash" class="btn btn-danger"><i class="fa fa-trash"></i> Sampah</a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-md">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>No Anggota</th>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>Judul Buku</th>
                            <th>Pengarang</th>
                            <th>Pinjaman</th>
                            <th>Kembali</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($peminjaman as $key => $value) : ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $value->no_anggota ?></td>
                                <td><?= $value->nama_siswa ?></td>
                                <td><?= $value->kelas ?></td>
                                <td><?= $value->judul_buku ?></td>
                                <td><?= $value->pengarang ?></td>
                                <td><?= $value->pinjaman ?></td>
                                <td><?= $value->kembali ?></td>

                                <td class="text-center" style="width:15%">
                                    <a href="<?= site_url('peminjaman/' . $value->id_peminjaman . '/edit') ?>" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                    <form action="<?= site_url('peminjaman/' . $value->id_peminjaman) ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin Hapus data ?')">
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