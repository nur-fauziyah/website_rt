<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Program Kerja</li>
                        </ol>
                        <hr>
                        <?php if(session()->get('role')!='Warga') : ?>
                        <a href="/Berita/add" class="btn btn-primary mb-3"><i class="fas fa-plus-circle"></i> Tambah Berita </a>
                        <?php endif;?>
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
                                            <th>Judul</th>
                                            <th>Penulis</th>
                                            <th>Tanggal</th>
                                            <?php if(session()->get('role')!='Warga') : ?>
                                            <th>Aksi</th>
                                            <?php endif; ?>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Penulis</th>
                                            <th>Tanggal</th>
                                            <?php if(session()->get('role')!='Warga') : ?>
                                            <th>Aksi</th>
                                            <?php endif; ?>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($proker as $pk) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $pk['judul']; ?></td>
                                            <td><?= $pk['penulis']; ?></td>
                                            <td><?= $pk['tanggal']; ?></td>
                                            <?php if(session()->get('role')!='Warga') : ?>
                                            <td>
                                                <!-- <a href="/Berita/edit/<?= $pk['id']; ?>"><button class="btn btn-warning" title="Edit Data"><i class="fas fa-edit"></i></button></a> -->
                                                <a href="/Berita/delete/<?= $pk['id']; ?>"><button class="btn btn-danger" title="Hapus Data" onclick="return confirm('Apakah anda yakin ?')"><i class="fas fa-trash-alt"></i></button></a>
                                            </td>
                                            <?php endif; ?>
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