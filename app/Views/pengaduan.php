<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Pengaduan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Pengaduan</li>
                        </ol>
                        <hr>
                        <?php if(session()->get('role') == 'Warga') : ?>
                        <a href="/Pengaduan/add" class="btn btn-primary mb-3"><i class="fas fa-plus-circle"></i> Tambah Data Pengaduan </a>
                        <?php endif; ?>
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
                                            <?php if(session()->get('role') != 'Warga') : ?>
                                            <th>User Id</th>
                                            <?php endif; ?>
                                            <th>Tanggal</th>
                                            <th>Urgensi</th>
                                            <th>Lampiran</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                            <?php if(session()->get('role') != 'Warga') : ?>
                                            <th>Aksi</th>
                                            <?php endif; ?>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <?php if(session()->get('role') != 'Warga') : ?>
                                            <th>User Id</th>
                                            <?php endif; ?>
                                            <th>Tanggal</th>
                                            <th>Urgensi</th>
                                            <th>Lampiran</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                            <?php if(session()->get('role') != 'Warga') : ?>
                                            <th>Aksi</th>
                                            <?php endif; ?>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($pengaduan as $p) : ?>
                                        <?php if (session()->get('role') == 'Warga' && $p['user_id'] == session()->get('id')) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <?php if(session()->get('role') != 'Warga') : ?>
                                            <td><?= $p['user_id'];?></td>
                                            <?php endif; ?>
                                            <td><?= $p['tanggal'];?></td>
                                            <td><?= $p['urgensi'];?></td>
                                            <td><img src="img/<?= $p['lampiran'];?>"></td>
                                            <td><?= $p['keterangan'];?></td>
                                            <td><?= $p['status'];?></td>
                                            <?php if(session()->get('role') != 'Warga') : ?>
                                            <td>
                                                <a href="/Pengaduan/edit/<?= $p['id']; ?>"><button class="btn btn-warning" title="Edit Data"><i class="fas fa-edit"></i></button></a>
                                            </td>
                                            <?php endif; ?>
                                        </tr>
                                        <?php endif; ?>
                                        <?php if(session()->get('role') == 'Admin' || session()->get('role') == 'Pengurus') : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <?php if(session()->get('role') != 'Warga') : ?>
                                            <td><?= $p['user_id'];?></td>
                                            <?php endif; ?>
                                            <td><?= $p['tanggal'];?></td>
                                            <td><?= $p['urgensi'];?></td>
                                            <td><img src="img/<?= $p['lampiran'];?>"></td>
                                            <td><?= $p['keterangan'];?></td>
                                            <td><?= $p['status'];?></td>
                                            <?php if(session()->get('role') != 'Warga') : ?>
                                            <td>
                                                <a href="/Pengaduan/edit/<?= $p['id']; ?>"><button class="btn btn-warning" title="Edit Data"><i class="fas fa-edit"></i></button></a>
                                            </td>
                                            <?php endif; ?>
                                        </tr>
                                        <?php endif; ?>
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