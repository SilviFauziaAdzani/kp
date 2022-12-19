<li class="menu-header">Dashboard</li>
<?php if (current_url() == base_url('home')) { ?>
    <li class="active"><a class="nav-link" href="<?= site_url('home') ?>"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
<?php } else { ?>
    <li><a class="nav-link" href="<?= site_url('home') ?>"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
<?php } ?>
<li class="menu-header">Buku</li>
<li><a class="nav-link" href="<?= site_url('buku') ?>"><i class="fas fa-book"></i> <span>Buku</span></a></li>
<li><a class="nav-link" href="<?= site_url('kategori') ?>"><i class="fas fa-th-large"></i> <span>Kategori</span></a></li>
<li class="menu-header">Transaksi</li>
<li><a class="nav-link" href="<?= site_url('peminjaman') ?>"><i class="fas fa-file-alt"></i> <span>Peminjaman</span></a></li>
<li class="menu-header">Anggota</li>
<li><a class="nav-link" href="<?= site_url('anggota') ?>"><i class="fas fa-user"></i> <span>Anggota</span></a></li>
<li><a class="nav-link" href="<?= site_url('pengunjung') ?>"><i class="fas fa-users"></i> <span>Pengunjung</span></a></li>