<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Data Pengajuan Surat</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item">Pengajuan Surat</li>
            <li class="breadcrumb-item active">Edit Data Pengajuan Surat</li>
        </ol>
        <br>
        <div class="card mb-4">  
            <div class="card-body">
            <h3 class="text-center mb-5"> Form Edit Pengajuan Surat </h3>
            <form action="/PengajuanSurat/update/<?= $pengajuan['id'] ?>" method="post">
                <div class="form-group row">
                    <div class="col-sm-2">Status Pengajuan</div>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="setujui" value="Disetujui" <?php if($pengajuan['status']=='Disetujui') : ?> checked <?php endif; ?>>
                            <label class="form-check-label">Disetujui</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="ditolak" value="Ditolak" <?php if($pengajuan['status']=='Ditolak') : ?> checked <?php endif; ?>>
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