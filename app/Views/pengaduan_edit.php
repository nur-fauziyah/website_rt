<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Data Pengaduan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item">Pengaduan</li>
            <li class="breadcrumb-item active">Edit Data Pengaduan</li>
        </ol>
        <br>
        <div class="card mb-4">  
            <div class="card-body">
            <h3 class="text-center mb-5"> Form Edit Pengaduan </h3>
            <form action="/Pengaduan/update/<?= $pengaduan['id'] ?>" method="post">
                <div class="form-group row">
                    <div class="col-sm-2">Status Pengaduan</div>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="proses" value="Dalam Proses" <?php if($pengaduan['status']=='Dalam Proses') : ?> checked <?php endif; ?>>
                            <label class="form-check-label">Dalam Proses</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="selesai" value="Selesai" <?php if($pengaduan['status']=='Selesai') : ?> checked <?php endif; ?>>
                            <label class="form-check-label">Selesai</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="ditolak" value="Ditolak" <?php if($pengaduan['status']=='Ditolak') : ?> checked <?php endif; ?>>
                            <label class="form-check-label">Ditolak</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">SIMPAN DATA</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?= $this->endSection(); ?>