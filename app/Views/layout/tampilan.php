<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shring-to-fit=no">

    <title>RT 001</title>

    <!-- Link Font Awesome dari Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body class="bg-light">
    <div class="container-fluid fixed-top bg-light">
        <header class="py-2 mb-2">
            <div class="container-fluid d-flex flex-wrap justify-content-left bg-light">
                <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
                        <img src="<?php echo base_url('../logo-rt-012.jpg');?>" width="30" height="30" alt="">
                    <span class="fs-4 text-dark font-weight-bold" style="margin-left: 5px;">WEBSITE RT 001 RW 003</span>
                </a>
            </div>
            <br>
            <nav class="navbar navbar-dark bg-dark">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="/" class="nav-link px-2 text-white">Home</a></li>
                        <li><a href="/Proker/tampil" class="nav-link px-2 text-white">Program Kerja</a></li>
                        <li><a href="/strukturOrg" class="nav-link px-2 text-white">Struktur Organisasi</a></li>
                        <li><a href="/siskamling" class="nav-link px-2 text-white">Siskamling</a></li>
                        <!-- <li class="dropdown"><a href="#" class="nav-link px-2 text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Visi Misi dan Tujuan</a>
                                <a class="dropdown-item" href="#">Struktur Organisasi</a>
                            </div>
                        </li> -->
                    </ul>
                </div>
                <div class="text-end">
                    <a href="/Login"><button type="button" class="btn btn-warning">Login</button></a>
                </div>
            </nav>
        </header>
    </div>

    <?= $this->renderSection('content'); ?>

    <div id="footer">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 bg-dark">
            <div class="container">
                <div class="col-md-15 d-flex justify-content-center align-items-center">
                    <span class="mb-3 mb-md-0 text-white">&copy; 2023 Company, Hak Cipta Dilindungi</span>
                    <ul class="nav col-md-8 justify-content-end list-unstyled d-flex">
                        <li class="ms-3"><a class="text-secondary px-2" href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                        <li class="ms-3"><a class="text-secondary px-2" href="#" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                        <li class="ms-3"><a class="text-secondary px-2" href="#" target="_blank"><i class="far fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>