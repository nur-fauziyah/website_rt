<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Data User</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item">Kependudukan</li>
            <li class="breadcrumb-item active">Tambah Data User</li>
        </ol>
        <br>
        <div class="card mb-4">  
            <div class="card-body">
            <h3 class="text-center mb-5"> Form Tambah Data User </h3>
            <form action="/User/save" method="post">
                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <select name="nama" id="nama" class="form-control" required>
                            <option value="" hidden></option>
                            <?php foreach ($penduduk as $p) : ?>
                                <option value="<?=$p['id']?>"><?=$p['nama']?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Role</div>
                    <div class="col-sm-10">
                        <?php if(session()->get('role') == 'Admin') : ?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="Admin" value="Admin">
                            <label class="form-check-label" for="role">Admin</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="Pengurus" value="Pengurus">
                            <label class="form-check-label" for="role">Pengurus</label>
                        </div>
                        <?php endif; ?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="Warga" value="Warga">
                            <label class="form-check-label" for="role">Warga</label>
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