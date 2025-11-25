<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>RT 001</title>

        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="<?= base_urL()?>/assets/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="/Dashboard">Web RT 001 RW 003</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <!-- <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div> -->
            </form>

            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i> <?= session()->get('username') ?> </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <!-- <li><a class="dropdown-item" href="#!"><i class="fas fa-key mr-3"></i>Password</a></li>
                        <li><hr class="dropdown-divider" /></li> -->
                        <li><a class="dropdown-item" href="/Logout"><i class="fas fa-sign-out-alt mr-3"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                        <?php if(session()->get('role')=='Admin' || session()->get('role')=='Pengurus') : ?>
                            <a class="nav-link" href="/Dashboard">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="/Keuangan">
                                <div class="sb-nav-link-icon"><i class="fas fa-money-bill"></i></div>
                                Keuangan
                            </a>
                            <a class="nav-link" href="/PengajuanSurat">
                                <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                                Pengajuan Surat
                            </a>
                            <a class="nav-link" href="/Pengaduan">
                                <div class="sb-nav-link-icon"><i class="fas fa-exclamation-circle"></i></div>
                                Pengaduan
                            </a>
                            <a class="nav-link" href="/Berita">
                                <div class="sb-nav-link-icon"><i class="fas fa-tasks"></i></div>
                                Berita
                            </a>
                            <a class="nav-link" href="/Penduduk">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Kependudukan
                            </a>
                            <a class="nav-link" href="/User">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-cog"></i></div>
                                Kelola User
                            </a>
                        <?php elseif(session()->get('role')=='Warga') : ?>
                            <a class="nav-link" href="/Dashboard">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="/Keuangan">
                                <div class="sb-nav-link-icon"><i class="fas fa-money-bill"></i></div>
                                Keuangan
                            </a>
                            <a class="nav-link" href="/PengajuanSurat">
                                <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                                Pengajuan Surat
                            </a>
                            <a class="nav-link" href="/Pengaduan">
                                <div class="sb-nav-link-icon"><i class="fas fa-exclamation-circle"></i></div>
                                Pengaduan
                            </a>
                        <?php endif; ?>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?= session()->get('role'); ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content" class="bg-light">
                <main>
                    <?= $this->renderSection('content'); ?>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src= "<?= base_urL()?>/assets/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_urL()?>/assets/demo/chart-area-demo.js"></script>
        <script src="<?= base_urL()?>/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_urL()?>/assets/js/datatables-simple-demo.js"></script>
    </body>
</html>
