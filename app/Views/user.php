<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Kelola User</li>
                        </ol>
                        <hr>
                        <a href="/User/add" class="btn btn-primary mb-3"><i class="fas fa-plus-circle"></i> Tambah Data User </a>
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
                                            <th>Username</th>
                                            <th>Nama</th>
                                            <th>Role</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Nama</th>
                                            <th>Role</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($user as $u) : ?>
                                            <?php if(session()->get('role') == 'Pengurus' && $u['role'] == 'Warga') : ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $u['username']; ?></td>
                                                <td><?= $u['penduduk_id']; ?></td>
                                                <td><?= $u['role']; ?></td>
                                                <td>
                                                    <a href="/User/edit/<?= $u['id']; ?>"><button class="btn btn-danger" title="Edit Data"><i class="fas fa-edit"></i></button></a>
                                                    <a href="/User/delete/<?= $u['id']; ?>"><button class="btn btn-warning" title="Hapus Data" onclick="return confirm('Apakah anda yakin ?')"><i class="fas fa-trash-alt"></i></button></a>
                                                </td>
                                            </tr>
                                            <?php elseif(session()->get('role') == 'Admin') : ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $u['username']; ?></td>
                                                <td><?= $u['penduduk_id']; ?></td>
                                                <td><?= $u['role']; ?></td>
                                                <td>
                                                    <a href="/User/edit/<?= $u['id']; ?>"><button class="btn btn-danger" title="Edit Data"><i class="fas fa-edit"></i></button></a>
                                                    <a href="/User/delete/<?= $u['id']; ?>"><button class="btn btn-warning" title="Hapus Data" onclick="return confirm('Apakah anda yakin ?')"><i class="fas fa-trash-alt"></i></button></a>
                                                </td>
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