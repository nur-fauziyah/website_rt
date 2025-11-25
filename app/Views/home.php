
<?= $this->extend('layout/tampilan'); ?>

<?= $this->section('content'); ?>
    <div class="container" style="margin-top: 160px;">
        <div class="row">
            <div class="col">
                <h4 class="text-center font-weight-bold"><marquee class="py-1">Selamat Datang Di Website Desa Gandoang RT 001 RW 003</marquee></h4>
                <br>
                <div class=" d-flex justify-content-center">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width: 80%;">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?php echo base_url('../kantordesa.png');?>" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo base_url('../gambardesa2.jpeg');?>" alt="Second slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="container">
                    <div class="card-header">
                        <h4 class="font-weight-bold text-secondary" style="margin-left: 5px;">SAMBUTAN KETUA RT</h4>
                    </div>
                    <hr>
                    <div class="card">
                        <div class="card-body border border-gray rounded-5">
                            <p><cite title="Source Title">Assalamu'alaikum warahmatullahi wabarakatuh,</cite></p>
                            <p><cite title="Source Title">Marilah kita bersama-sama mengucapkan salam sejahtera dan rahmat Allah SWT kepada kita semua.</cite></p>
                            <p><cite title="Source Title">Sesungguhnya, perubahan zaman telah mengubah dunia menjadi begitu terhubung. Informasi yang tepat, komunikasi yang cepat, dan pelayanan yang memuaskan menjadi kebutuhan dan tuntutan masyarakat modern.
                                Banyak kebaikan, program, dan perubahan yang perlu disampaikan dengan cepat dan akurat kepada masyarakat. Begitu pula banyak masukan, kritik, dan gagasan yang bisa disampaikan oleh masyarakat kepada Pemerintah Desa Gandoang di Kecamatan Cileungsi, Kabupaten Bogor. 
                                Kita semua memerlukan sarana yang dapat menjembatani hal-hal tersebut.</cite></p>
                            <p><cite title="Source Title">Inilah solusinya, di sinilah tempatnya... WEBSITE RT 001 RW 003. Sebuah jembatan yang akan menghubungkan komunikasi kita. Sebuah wadah yang akan menghimpun potensi kita. Dan sebuah kendaraan yang akan mempercepat perjalanan kita menuju visi kita: MEMBANGUN DAN BERBAUR.</cite></p>
                            <p><cite title="Source Title">Saya ingin menyampaikan terima kasih kepada seluruh pengelola yang terlibat dalam pembuatan dan pengelolaan website ini. Selamat kepada seluruh warga Desa Gandoang. Semoga Allah SWT, Tuhan Yang Maha Esa, senantiasa melapangkan jalan kita menuju kemajuan desa dan kesejahteraan masyarakatnya. </cite></p>
                            <p><cite title="Source Title"> Wassalamu'alaikum warahmatullahi wabarakatuh. </cite></p>
                            <p><cite title="Source Title"> Hormat Kami, </cite></p>
                            <p><cite title="Source Title"> Ketua RT 001</cite></p>
                        </div>
                    </div>
                </div>

                <br>
                <br>
                <div class="container">
                    <div class="card-header">
                        <h4 class="font-weight-bold text-secondary" style="margin-left: 5px;">PROFIL RT</h4>
                    </div>
                    <hr>
                    <div class="card">
                        <div class="card-body border border-gray rounded-5">
                            <div class="row align-items-center">
                                <div class="col align-self-start">
                                    <div class="card-header">
                                        VISI
                                    </div>
                                    <div class="card-body">
                                        <p class="font-weight-bold"><cite title="Source Title">“Bersama Kita Wujudkan Desa Gandoang Dengan Iman Dan Taqwa Serta Persatusan Yang Kokoh Dan Sejahtera”.</cite></p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-header">
                                        MISI
                                    </div>
                                    <div class="card-body">
                                        <p>1. Menyelenggarakan pemerintah yang bersih, amanah dan terbuka berorientasi pada optimalisasi pelayanan kepada masyarakat </p>
                                        <p>2. Mendorong berkembangnya kualitas sumber daya manusia Desa Gandoang yang dilandasi nilai-nilai agama dan nilai-nilai luhur budaya (Silih Asah, Silih Asih, Silih Asuh) untuk mewujudkan masyarakat anu Cageur, Bageur, Pinter tur Singer; </p>
                                        <p>3. Peningkatan sarana dan prasarana dasar untuk menunjang kesejahteraan dan meningkatkan pelayanan public dengan slogan Ramah, Senyum, Cepat, Tepat dan Akurat; </p>
                                        <p>4. Memanfaatkan potensi sumber daya alam yang berwawasan lingkungan; </p>
                                        <p>5. Memberdayakan potensi lembaga keuangan untuk mendorong usaha ekonomi rakyat; </p>
                                        <p>6. Memberdayakan masyarakat melalui partisipasi aktif dalam pembangunan; </p>
                                        <p>7. Mewujudkan lingkungan yang bersih, aman dan tertib; </p>
                                        <p>8. Peningkatan budaya gotong royong; </p>
                                        <p>9. Meningkatkan kerjasama dengan perusahaan yang ada di sekitar Desa Gandoang; </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>  
<?= $this->endSection(); ?>