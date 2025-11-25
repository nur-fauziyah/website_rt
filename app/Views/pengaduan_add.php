<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Data Pengaduan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item">Pengaduan</li>
            <li class="breadcrumb-item active">Tambah Data Pengaduan</li>
        </ol>
        <br>
        <div class="card mb-4">  
            <div class="card-body">
            <h3 class="text-center mb-5"> Form Pengaduan </h3>
            <form action="/Pengaduan/save" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="user_id" id="user_id" value="<?= session()->get('id')?>" hidden>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="tanggal" id="tanggal">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Lokasi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="lokasi" id="lokasi">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Urgensi</div>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="urgensi" id="tinggi" value="Tinggi">
                            <label class="form-check-label">Tinggi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="urgensi" id="sedang" value="Sedang">
                            <label class="form-check-label">Sedang</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="urgensi" id="rendah" value="Rendah">
                            <label class="form-check-label">Rendah</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Lampiran</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="lampiran" id="lampiran">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="keterangan" id="keterangan">
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