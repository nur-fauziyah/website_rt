<?= $this->extend('layout/tampilan'); ?>

<?= $this->section('content'); ?>
    <div class="container" style="margin-top: 160px;">
        <div class="row">
            <div class="col">
            <div class="card-header mb-3">
              <h4 class="font-weight-bold text-secondary text-center">Struktur Organisasi RT 001</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Jabatan</th>
                  <th scope="col">Nama</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Ketua RT</td>
                  <td>namaketuaRT</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Sekretaris RT</td>
                  <td>namasekretaris</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Bendahara RT</td>
                  <td>namabendahara</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Bidang Keamanan</td>
                  <td>namapjbidangkeamanan</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Bidang Lingkungan</td>
                  <td>namapjbidanglingkungan</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Bidang Sosial</td>
                  <td>namapjbidangsosial</td>
                </tr>
              </tbody>
            </table>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>