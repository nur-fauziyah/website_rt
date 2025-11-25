<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Edit Data Penduduk</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item">Kependudukan</li>
                        <li class="breadcrumb-item active">Edit Data Penduduk</li>
                    </ol>
                    <br>
                    <div class="card mb-4">  
                        <div class="card-body">
                        <h3 class="text-center mb-5"> Form Edit Data Penduduk </h3>
                        <form action="/Penduduk/update/<?= $penduduk['id']; ?>" method="post">
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="id" name="id" value="<?= $penduduk['id']; ?>" hidden>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control <?= session('validation_errors.nik') ? 'is-invalid' : ''; ?>" id="nik" name="nik" placeholder="Masukkan NIK Penduduk" autofocus value="<?= $penduduk['nik']; ?>">
                                    <?php if(session('validation_errors.nik')) : ?>
                                        <div class="invalid-feedback"><?= session('validation_errors.nik') ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" value="<?= $penduduk['nama']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" placeholder="Masukkan Tempat Lahir" value="<?= $penduduk['tempat_lahir']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" value="<?= $penduduk['tanggal_lahir']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2">Jenis Kelamin</div>
                                    <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jeniskelamin" id="lakilaki" value="Laki-Laki" <?php if($penduduk['jenis_kelamin']=='Laki-Laki') : ?> checked <?php endif; ?>>
                                        <label class="form-check-label" for="lakilaki">Laki- Laki</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jeniskelamin" id="perempuan" value="Perempuan" <?php if($penduduk['jenis_kelamin']=='Perempuan') : ?> checked <?php endif; ?>>
                                        <label class="form-check-label" for="perempuan">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="warganegara" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="warganegara" name="warganegara" placeholder="Masukkan Kewarganegaraan" value="<?= $penduduk['warga_negara']?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="agama" name="agama" placeholder="Masukkan Agama Penduduk" value="<?= $penduduk['agama']?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2">Status Pernikahan</div>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="statusnikah" id="menikah" value="Menikah" <?php if($penduduk['status_nikah']=='Menikah') : ?> checked <?php endif; ?>>
                                        <label class="form-check-label" for="menikah">Menikah</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="statusnikah" id="belum" value="Belum Menikah" <?php if($penduduk['status_nikah']=='Belum Menikah') : ?> checked <?php endif; ?>>
                                        <label class="form-check-label" for="belum">Belum Menikah</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" value="<?= $penduduk['alamat'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="notelp" class="col-sm-2 col-form-label">Nomor Telepon</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="notelp" name="notelp" placeholder="Masukkan Nomor Telepon" value="<?= $penduduk['no_telp'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" value="<?= $penduduk['email'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="Masukkan Pendidikan Terakhir" value="<?= $penduduk['pendidikan_terakhir'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Masukkan Pekerjaan" value="<?= $penduduk['pekerjaan'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nokk" class="col-sm-2 col-form-label">Nomor KK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nokk" name="nokk" placeholder="Masukkan Nomor Kartu Keluarga" value="<?= $penduduk['no_kk'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="namaayah" class="col-sm-2 col-form-label">Nama Ayah</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="namaayah" name="namaayah" placeholder="Masukkan Nama Ayah" value="<?= $penduduk['nama_ayah'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="namaibu" class="col-sm-2 col-form-label">Nama Ibu</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="namaibu" name="namaibu" placeholder="Masukkan Nama Ibu" value="<?= $penduduk['nama_ibu'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">UPDATE DATA</button>
                                </div>
                            </div>
                        </form>
                            <!-- <div class="text-right"><a href="/Penduduk/"><button class="btn btn-success">KEMBALI</button></a></div> -->
                        </div>
                    </div>
                </div>
                
<?= $this->endSection(); ?>