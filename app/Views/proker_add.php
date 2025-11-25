<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Berita</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item">Berita</li>
            <li class="breadcrumb-item active">Tambah Berita</li>
        </ol>
        <br>
        <div class="card mb-4">  
            <div class="card-body">
            <h3 class="text-center mb-5"> Form Tambah Berita </h3>
            <form action="/Berita/save" method="post"  enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="namaprogram" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="judul" name="judul">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tujuan" class="col-sm-2 col-form-label">Isi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="isi" name="isi">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="waktupel" class="col-sm-2 col-form-label">Penulis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penulis" name="penulis">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="penanggungjawab" class="col-sm-2 col-form-label">Tanggal Publikasi</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="keterangan" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="gambar" name="gambar">
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