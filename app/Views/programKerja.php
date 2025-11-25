<?= $this->extend('layout/tampilan'); ?>

<?= $this->section('content'); ?>
    <div class="container" style="margin-top: 160px;">
        <div class="row">
            <div class="col">
            <div class="card-header mb-3">
              <h4 class="font-weight-bold text-secondary text-center">Program Kerja RT 001</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Program</th>
                  <th scope="col">Tujuan</th>
                  <th scope="col">Waktu Pelaksanaan</th>
                  <th scope="col">Penanggung Jawab</th>
                  <th scope="col">Keterangan</th>
                </tr>
              </thead>
              <tbody>
              <?php $i = 1; ?>
              <?php foreach ($proker as $pk) : ?>
                <tr>
                  <td><?= $i++; ?></td>
                  <td><?= $pk['nama_program']; ?></td>
                  <td><?= $pk['tujuan']; ?></td>
                  <td><?= $pk['waktu_pel']; ?></td>
                  <td><?= $pk['penanggung_jawab']; ?></td>
                  <td><?= $pk['keterangan']; ?></td>
                </tr>
              <?php endforeach; ?>
              </tbody>
            </table>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>