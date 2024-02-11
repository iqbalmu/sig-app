@extends('layouts.front')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="row">
                <div class="col-xl-6">
                    <h1>Go Beyond Next</h1>
                    <h2>Halaman ini adalah layanan untuk pengajuan kerja praktik sesuai posisi jurusan masing-masing calon
                        peserta.</h2>
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-in">
                <div class="section-title">
                    <h2>Our Partners</h2>
                </div>

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide">
                            <img src="/assets/img/partners/its.png" class="img-fluid" alt="its logo" title="ITS">
                        </div>
                        <div class="swiper-slide">
                            <img src="/assets/img/partners/polinema.png" class="img-fluid" alt="polinema logo"
                                title="Polinema">
                        </div>
                        <div class="swiper-slide">
                            <img src="/assets/img/partners/trisakti.png" class="img-fluid" alt="trisakti logo"
                                title="Universitas Trisakti">
                        </div>
                        <div class="swiper-slide">
                            <img src="/assets/img/partners/ui.png" class="img-fluid" alt="ui logo"
                                title="Universitas Indonesia">
                        </div>
                        <div class="swiper-slide">
                            <img src="/assets/img/partners/uisi.png" class="img-fluid" alt="uisi" title="UISI">
                        </div>
                        <div class="swiper-slide">
                            <img src="/assets/img/partners/universitas_pertamina.png" class="img-fluid"
                                alt="univ pertamina logo" title="Universitas Pertamina">
                        </div>
                        <div class="swiper-slide">
                            <img src="/assets/img/partners/upn_jatim.png" class="img-fluid" alt="upn jatim logo"
                                title="UPN Jatim">
                        </div>
                    </div>
                    <div class="swiper-pagination mt-5"></div>
                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row no-gutters">
                    <div class="content col-xl-5 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Ketentuan Kerja Praktek</h3>
                            <p>
                                Pemberitahuan dan ketentuan yang perlu dipersiapkan oleh calon peserta untuk mengikuti
                                kegiatan Kerja Praktek di PT. Semen Gresik Indonesia
                            </p>
                            <a href="/lowongan" class="about-btn"><span>Liat Lowongan</span> <i
                                    class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-7 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bx bx-group"></i>
                                    <h4>Warga Negara Indonesia (WNI)</h4>
                                    <p>Terdaftar sebagai Warga Negara Indonesia, dapat dibuktikan dengan KTP
                                    </p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bx bx-id-card"></i>
                                    <h4>Berstatus Siswa/Mahasiswa Aktif</h4>
                                    <p>Masih terdaftar sebagai siswa/mahasiswa aktif, dapat dibuktikan dengan KTM atau Kartu
                                        Pelajar
                                    </p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bx bx-shield"></i>
                                    <h4>Mematuhi Peraturan dan Protokol Kesehatan Perusahaan</h4>
                                    <p>Bersedia mematuhi peraturan dan protokol kesehatan yang berlaku di perusahaan</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                    <i class="bx bx-first-aid"></i>
                                    <h4>Memiliki Asuransi Kesehatan Aktif</h4>
                                    <p>Sudah mengurus atau memiliki asuransi kesehatan seperti BPJS atau asuransi kesehatan
                                        lainnya</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                    <i class="bx bx-bell"></i>
                                    <h4>Pemberitahuan</h4>
                                    <p>Perusahaan tidak menyediakan sarana akomodasi (penginapan) & transportasi</p>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Tabs Section ======= -->
        <section id="tabs" class="tabs">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Alur Pendaftaran</h2>
                </div>
                <ul class="nav nav-tabs row d-flex">
                    <li class="nav-item col-3">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <i><strong>1</strong></i>
                            <h4 class="d-none d-lg-block">Membuat Akun</h4>
                        </a>
                    </li>
                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <i><strong>2</strong></i>
                            <h4 class="d-none d-lg-block">Melengkapi Data Diri</h4>
                        </a>
                    </li>
                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                            <i><strong>3</strong></i>
                            <h4 class="d-none d-lg-block">Daftar Lowongan</h4>
                        </a>
                    </li>
                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                            <i><strong>4</strong></i>
                            <h4 class="d-none d-lg-block">Menunggu Konfirmasi</h4>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up"
                                data-aos-delay="100">
                                <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</li>
                                    <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.</li>
                                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                        storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                                <img src="/assets/img/tabs-1.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-2">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>Neque exercitationem debitis soluta quos debitis quo mollitia officia est</h3>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum
                                </p>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</li>
                                    <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.</li>
                                    <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores
                                        dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                        storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="/assets/img/tabs-2.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-3">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>Voluptatibus commodi ut accusamus ea repudiandae ut autem dolor ut assumenda</h3>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum
                                </p>
                                <ul>
                                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</li>
                                    <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.</li>
                                    <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores
                                        dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                                </ul>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="/assets/img/tabs-3.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-4">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>Omnis fugiat ea explicabo sunt dolorum asperiores sequi inventore rerum</h3>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum
                                </p>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</li>
                                    <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.</li>
                                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                        storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="/assets/img/tabs-4.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Tabs Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg ">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Posisi Tersedia</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-briefcase"></i>
                            <h4><a href="#">Lorem Ipsum</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                                cupiditate non provident</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-card-checklist"></i>
                            <h4><a href="#">Dolor Sitema</a></h4>
                            <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat tarad limino ata</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-bar-chart"></i>
                            <h4><a href="#">Sed ut perspiciatis</a></h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-binoculars"></i>
                            <h4><a href="#">Nemo Enim</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                anim id est laborum</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-brightness-high"></i>
                            <h4><a href="#">Magni Dolore</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="600">
                            <i class="bi bi-calendar4-week"></i>
                            <h4><a href="#">Eiusmod Tempor</a></h4>
                            <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta
                                nobis est eligendi</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                </div>

                <ul class="faq-list accordion" data-aos="fade-up">

                    <li>
                        <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1">Non consectetur a erat nam
                            at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-x icon-close"></i></a>
                        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                                curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed">Feugiat scelerisque varius
                            morbi enim nunc faucibus a pellentesque? <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-x icon-close"></i></a>
                        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit
                                laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium.
                                Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa
                                tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-bs-toggle="collapse" data-bs-target="#faq3" class="collapsed">Dolor sit amet consectetur
                            adipiscing elit pellentesque habitant morbi? <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-x icon-close"></i></a>
                        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar
                                elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus
                                pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at
                                elementum eu facilisis sed odio morbi quis
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-bs-toggle="collapse" data-bs-target="#faq4" class="collapsed">Ac odio tempor orci
                            dapibus. Aliquam eleifend mi in nulla? <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-x icon-close"></i></a>
                        <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit
                                laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium.
                                Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa
                                tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-bs-toggle="collapse" data-bs-target="#faq5" class="collapsed">Tempus quam pellentesque
                            nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-x icon-close"></i></a>
                        <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est
                                ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing
                                bibendum est. Purus gravida quis blandit turpis cursus in
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-bs-toggle="collapse" data-bs-target="#faq6" class="collapsed">Tortor vitae purus faucibus
                            ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer
                                malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem
                                dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat
                                commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non
                                blandit massa enim nec.
                            </p>
                        </div>
                    </li>

                </ul>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

    </main><!-- End #main -->
@endsection
