<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Data Pengajuan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item">Pengajuan Surat</li>
            <li class="breadcrumb-item active">Tambah Data Pengajuan</li>
        </ol>
        <br>
        <div class="card mb-4">  
            <div class="card-body">
            <h3 class="text-center mb-5"> Form Pengajuan Surat </h3>
            <form action="/PengajuanSurat/save" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="user_id" id="user_id" value="<?= session()->get('id')?>" hidden>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Jenis Surat</div>
                    <div class="col-sm-10">
                        <select name="jenissurat" id="selectOption" class="form-control" required>
                            <option value="" hidden>--- Pilih Surat ---</option>
                            <option value="Surat Pengantar" data-target="form1">Surat Pengantar</option>
                            <option value="Surat Keterangan Domisili" data-target="form2">Surat Keterangan Domisili</option>
                            <option value="Surat Izin Keramaian" data-target="form3">Surat Izin Keramaian</option>
                        </select>
                    </div>
                </div>
                <div class="form-group" id="form1" style="display: none;">
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Keperluan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="keperluan">
                        </div>
                    </div>
                </div>
                <div class="form-group" id="form2" style="display: none;">
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Keperluan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="perlu2">
                        </div>
                    </div>
                </div>
                <div class="form-group" id="form3" style="display: none;">
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Tanggal Acara</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tglacara">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Lampiran</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="lampiran" id="lampiran">
                        <small class="form-text text-muted">Mohon unggah fotokopi KTP, surat pernyataan, atau dokumen pendukung lainnya sesuai dengan persyaratan yang tercantum.</small>
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

<script>
    // Menggunakan event listener untuk menangani perubahan nilai select
    document.getElementById('selectOption').addEventListener('change', function() {
        var selectedOption = this.options[this.selectedIndex].getAttribute('data-target');

        // Menyembunyikan semua form
        var forms = document.querySelectorAll('[id^="form"]');
        forms.forEach(function(form) {
            form.style.display = 'none';
        });

        // Menampilkan form yang sesuai berdasarkan data-target pada select
        if (selectedOption) {
            var selectedForm = document.getElementById(selectedOption);
            if (selectedForm) {
                selectedForm.style.display = 'block';
            }
        }
    });
</script>
<?= $this->endSection(); ?>