<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Tambah Data Penduduk</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item">Kependudukan</li>
                        <li class="breadcrumb-item active">Tambah Data Penduduk</li>
                    </ol>
                    <br>
                    <div class="card mb-4">  
                        <div class="card-body">
                        <h3 class="text-center mb-5"> Form Tambah Data Penduduk </h3>
                        <form action="/Penduduk/save" method="post">
                            <div class="form-group row">
                                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control <?= session('validation_errors.nik') ? 'is-invalid' : ''; ?>" id="nik" name="nik" placeholder="Masukkan NIK Penduduk" autofocus>
                                    <?php if(session('validation_errors.nik')) : ?>
                                        <div class="invalid-feedback"><?= session('validation_errors.nik') ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" placeholder="Masukkan Tempat Lahir">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="tanggallahir" name="tanggallahir">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2">Jenis Kelamin</div>
                                    <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jeniskelamin" id="lakilaki" value="Laki-Laki">
                                        <label class="form-check-label" for="lakilaki">Laki- Laki</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jeniskelamin" id="perempuan" value="Perempuan">
                                        <label class="form-check-label" for="perempuan">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="warganegara" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="warganegara" name="warganegara" placeholder="Masukkan Kewarganegaraan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="agama" name="agama" placeholder="Masukkan Agama Penduduk">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2">Status Pernikahan</div>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="statusnikah" id="menikah" value="Menikah">
                                        <label class="form-check-label" for="menikah">Menikah</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="statusnikah" id="belum" value="Belum Menikah">
                                        <label class="form-check-label" for="belum">Belum Menikah</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="notelp" class="col-sm-2 col-form-label">Nomor Telepon</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="notelp" name="notelp" placeholder="Masukkan Nomor Telepon ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="Masukkan Pendidikan Terakhir ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Masukkan Pekerjaan ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nokk" class="col-sm-2 col-form-label">Nomor KK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nokk" name="nokk" placeholder="Masukkan Nomor Kartu Keluarga ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="namaayah" class="col-sm-2 col-form-label">Nama Ayah</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="namaayah" name="namaayah" placeholder="Masukkan Nama Ayah">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="namaibu" class="col-sm-2 col-form-label">Nama Ibu</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="namaibu" name="namaibu" placeholder="Masukkan Nama Ibu">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                                </div>
                            </div>
                        </form>
                            <div class="text-right"><a href="/Penduduk/"><button class="btn btn-success">KEMBALI</button></a></div>
                        </div>
                    </div>
                </div>
                
<?= $this->endSection(); ?>