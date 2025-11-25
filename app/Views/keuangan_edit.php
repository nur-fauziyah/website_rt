<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Data Keuangan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item">Keuangan</li>
            <li class="breadcrumb-item active">Edit Data Keuangan</li>
        </ol>
        <br>
        <div class="card mb-4">  
            <div class="card-body">
            <h3 class="text-center mb-5"> Form Edit Data Keuangan </h3>
            <form action="/Keuangan/update/<?= $keuangan['id']; ?>" method="post">
                <div class="form-group row">
                    <label for="pendapatan" class="col-sm-2 col-form-label">Pendapatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pendapatan" name="pendapatan" value="<?= $keuangan['pendapatan']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sumber" class="col-sm-2 col-form-label">Sumber Pemasukan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sumber" name="sumber" value="<?= $keuangan['sumber']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pengeluaran" class="col-sm-2 col-form-label">Pengeluaran</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pengeluaran" name="pengeluaran" value="<?= $keuangan['pengeluaran']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="saldokas" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $keuangan['tanggal']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $keuangan['keterangan']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">UPDATE DATA</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?= $this->endSection(); ?>