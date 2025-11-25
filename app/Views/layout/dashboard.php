<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shring-to-fit=no">

    <title>Dashboard</title>

    <!-- Link Font Awesome dari Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <header class="navbar navbar-expand-lg bg-secondary fixed-top py-3">
        <div class="row offset-lg-2">
            <button class="toggle-sidebar-btn"> Toggle </button>
        </div>    
    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-1 sidebar fixed-left" style="height: 100%; background-color: #5F9EA0;">
                <div class="pt-2 pb-2 border-bottom">
                    <a href="/Dashboard" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
                        <img src="<?php echo base_url('../public/logo-rt-012.jpg');?>" width="30" height="30" alt="">
                        <span class="fs-4 text-dark font-weight-bold" style="margin-left: 5px;">WEBSITE RT 001</span>
                    </a>
                </div>
                <div class="pt-3">
                    <nav class="nav flex-column">
                        <a class="nav-link text-dark" href="#"><i class="fas fa-tachometer-alt"></i>  Dashboard</a>
                        <a class="nav-link text-dark" href="#"><i class="fas fa-money-bill"></i>  Keuangan</a>
                        <a class="nav-link text-dark" href="#"><i class="fas fa-envelope"></i>   Pengajuan Surat</a>
                        <a class="nav-link text-dark" href="#"><i class="fas fa-exclamation-circle"></i>   Pengaduan</a>
                        <a class="nav-link text-dark" href="#"><i class="fas fa-tasks"></i>    Program Kerja</a>
                        <a class="nav-link text-dark" href="#"><i class="fas fa-users"></i>  Kependudukan</a>
                        <a class="nav-link text-dark" href="#"><i class="fas fa-user-cog"></i>  Kelola User</a>
                        <a class="nav-link text-dark" href="#"><i class="fas fa-key"></i>   Reset Password</a>
                        <a class="nav-link text-dark" href="#"><i class="fas fa-sign-out-alt"></i>   Logout</a>
                    </nav>
                </div>
                <br>
                    <br>
                    <br>
            </div>
        
            <div class="col-lg-10 col-md-10 offset-lg-2 main-content bg-success fixed-right" style="margin-top: 60px;">
                <>Halo</div>
            </div>
        </div>
    </div>

    <!-- <div class="row bg-success py-3">
        <div class="col text-light">col-sm-8</div>
    </div> -->
    <!-- <div class="row">
        <div class="col-2 col-md-2" style="background-color: #20B2AA;">
            <div class="d-flex flex-wrap">
                <div class="container-fluid">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link active text-white font-weight-bold" href="#"><i class="fas fa-gauge-min"></i><span>Dashboard</span></a></li>
                        <li class="nav-item"><a class="nav-link active text-white font-weight-bold" href="#"><span>Keuangan</span></a></li>
                        <li class="nav-item"><a class="nav-link active text-white font-weight-bold" href="#"><span>Pengajuan Surat</span></a></li>
                        <li class="nav-item"><a class="nav-link active text-white font-weight-bold" href="#"><span>Pengaduan</span></a></li>
                        <li class="nav-item"><a class="nav-link active text-white font-weight-bold" href="#"><span>Program Kerja</span></a></li>
                        <li class="nav-item"><a class="nav-link active text-white font-weight-bold" href="#"><span>Kependudukan</span></a></li>
                        <li class="nav-item"><a class="nav-link active text-white font-weight-bold" href="#"><span>Kelola User</span></a></li>
                        <li class="nav-item"><a class="nav-link active text-white font-weight-bold" href="#"><span>Reset Password</span></a></li>
                        <li class="nav-item"><a class="nav-link active text-white font-weight-bold" href="#"><span>Logout</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col bg-success">.col-12 .col-md-8</div>
    </div> -->
    <!-- <div class="row bg-light py-3">
        <div class="col">col-sm-8</div>
    </div> -->
    <!-- <main>
        <div class=”row”>
            <div class=”col-sm-2  bg-dark”>
                <div class=”d-flex flex-column”>
                    <div class=”container-fluid”>
                        <ul class=”nav flex-column”>
                            <li class=”nav-item border-bottom”><a class=”nav-link active text-white” aria-current=”page” href=”#”>Home</a></li>
                            <li class=”nav-item border-bottom”><a class=”nav-link active text-white” aria-current=”page” href=”#”>Dashboard</a></li>
                            <li class=”nav-item border-bottom”><a class=”nav-link active text-white” aria-current=”page” href=”#”>Menu</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main> -->
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
