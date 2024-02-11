@extends('layouts.front')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Lowongan</li>
                </ol>
                <h2>Lowongan Tersedia</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container" data-aos="fade-up">
                <div class="row">

                    {{-- Form Filter --}}
                    <div class="col-md-4">
                        <h5>Cari Berdasarkan :</h5>
                        <div class="card p-4">
                            <form action="">
                                <div class="mb-3">
                                    <label for="search" class="form-label">Pencarian :</label>
                                    <input type="text" class="form-control" id="search" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Kantor Cabang :</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>No Selected</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Jurusan :</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>No Selected</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <button class="btn btn-danger w-100 mt-3">Tampilkan</button>
                            </form>
                        </div>
                    </div>

                    {{-- Lowongan Card List --}}
                    <div class="col-md-8">
                        <h5>16 Lowongan Ditemukan</h5>
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://placehold.co/600x400" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body pb-0">
                                        <h3 class="card-title mb-4">Card title</h3>
                                        <p class="card-subtitle">
                                            <b>Lokasi:</b> Gresik <br>
                                            <b>Batas Pendaftaran:</b> 01 Maret 2024
                                        </p>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between px-3 m-0">
                                        <small class="text-body-secondary">
                                            Last updated 3 mins
                                            ago
                                        </small>
                                        <a href="/lowongan/detail">Lihat Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://placehold.co/600x400" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body pb-0">
                                        <h3 class="card-title mb-4">Card title</h3>
                                        <p class="card-subtitle">
                                            <b>Lokasi:</b> Gresik <br>
                                            <b>Batas Pendaftaran:</b> 01 Maret 2024
                                        </p>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between px-3 m-0">
                                        <small class="text-body-secondary">
                                            Last updated 3 mins
                                            ago
                                        </small>
                                        <a href="/lowongan/detail">Lihat Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://placehold.co/600x400" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body pb-0">
                                        <h3 class="card-title mb-4">Card title</h3>
                                        <p class="card-subtitle">
                                            <b>Lokasi:</b> Gresik <br>
                                            <b>Batas Pendaftaran:</b> 01 Maret 2024
                                        </p>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between px-3 m-0">
                                        <small class="text-body-secondary">
                                            Last updated 3 mins
                                            ago
                                        </small>
                                        <a href="/lowongan/detail">Lihat Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://placehold.co/600x400" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body pb-0">
                                        <h3 class="card-title mb-4">Card title</h3>
                                        <p class="card-subtitle">
                                            <b>Lokasi:</b> Gresik <br>
                                            <b>Batas Pendaftaran:</b> 01 Maret 2024
                                        </p>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between px-3 m-0">
                                        <small class="text-body-secondary">
                                            Last updated 3 mins
                                            ago
                                        </small>
                                        <a href="/lowongan/detail">Lihat Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
