<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Daftar Hadir &mdash; Perpustakaan</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">

    <!-- CSS Libraries -->
    <!-- <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/selectiric/public/selectric.css"> -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/components.css">
    <!-- Start GA 
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
     /END GA -->
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">
                            <img src="<?= base_url() ?>/template/assets/img/avatar/avatar-1.png" alt="logo" width="100" class="shadow-light rounded-circle" alt="logo" width="100" class="shadow-light rounded-circle">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Daftar Hadir</h4>
                            </div>

                            <div class="card-body">
                                <form action="<?= site_url('pengunjung') ?>" method="POST" autocomplete="off">
                                    <?= csrf_field() ?>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label>Nama Siswa *</label>
                                            <input type="text" class="form-control" name="nama_pengunjung" required autofocus>
                                        </div>
                                        <div class="form-group col-6">
                                            <label>Kelas *</label>
                                            <input type="text" class="form-control" name="kelas" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Judul Buku Bacaan</label>
                                        <input type="text" class="form-control" name="judul_buku">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Kunjungan</label>
                                        <input type="DATE" class="form-control" name="tanggal_kunjungan" required>
                                    </div>


                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Selesai
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="simple-footer">
                            Copyright &copy; Group KP UNSAP Sumedang 2022
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= base_url() ?>/template/node_modules/jquery/dist/jquery.min.js"></script>
    <!-- <script src="<?= base_url() ?>/template/node_modules/dist/popper.js"></script> -->
    <!-- <script src="<?= base_url() ?>/template/node_modules/dist/tooltip.js"></script> -->
    <script src="<?= base_url() ?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/moment/min/moment.min.js"></script>
    <script src="<?= base_url() ?>/template/assets/js/stisla.js"></script>
    <!-- JS Libraies -->
    <script src="<?= base_url() ?>/template/node_modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
    <!-- <script src="<?= base_url() ?>/template/node_modules/selectiric/public/selectric.css"></script> -->

    <!-- Page Specific JS File -->
    <script src="<?= base_url() ?>/template/assets/js/page/auth-register.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url() ?>/template/assets/js/scripts.js"></script>
    <script src="<?= base_url() ?>/template/assets/js/custom.js"></script>
</body>

</html>