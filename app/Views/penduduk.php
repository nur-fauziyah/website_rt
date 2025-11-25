<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Kependudukan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Kependudukan</li>
                        </ol>
                        <hr>
                        <a href="/Penduduk/add" class="btn btn-primary mb-3"><i class="fas fa-plus-circle"></i> Tambah Data Penduduk </a>
                        <?php if (session()->getFlashdata('pesanT')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('pesanT'); ?>
                            </div>
                        <?php elseif (session()->getFlashdata('pesanH')) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= session()->getFlashdata('pesanH'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="card mb-4">
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIK</th>
                                            <th>No. KK</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Email</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>NIK</th>
                                            <th>No. KK</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Email</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($penduduk as $p) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $p['nik'];?></td>
                                            <td><?= $p['no_kk'];?></td>
                                            <td><?= $p['nama'];?></td>
                                            <td><?= $p['alamat'];?></td>
                                            <td><?= $p['email'];?></td>
                                            <td>
                                                <a href=""><button class="btn btn-primary" title="Detail"><i class="fas fa-info-circle"></i></button></a>
                                                <a href="/Penduduk/edit/<?= $p['id']; ?>"><button class="btn btn-danger" title="Edit Data"><i class="fas fa-edit"></i></button></a>
                                                <a href="/Penduduk/delete/<?= $p['id']; ?>"><button class="btn btn-warning" title="Hapus Data" onclick="return confirm('Apakah anda yakin ?')"><i class="fas fa-trash-alt"></i></button></a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <script>
                        setTimeout(function() {
                            document.querySelector('.alert').style.display = 'none';
                        }, 7000);
                    </script>
<?= $this->endSection(); ?>