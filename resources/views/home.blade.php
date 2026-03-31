@extends('layouts.main')

@section('content')
    <!-- Hero Section with Carousel -->
    <section class="hero-section">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/download (1).jpg') }}" class="d-block w-100"
                        alt="Welcome to {{ $nama_sistem }}">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Selamat Datang di {{ $nama_sistem }}</h5>
                        <p>Sistem monitoring pelanggaran siswa yang efisien dan akurat.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('images/download (1).jpg') }}" class="d-block w-100" alt="Real-time Monitoring">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Monitoring Real-time</h5>
                        <p>Pantau pelanggaran siswa secara langsung dan akurat.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('images/download (1).jpg') }}" class="d-block w-100" alt="Integrated Reports">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Laporan Terintegrasi</h5>
                        <p>Generate laporan pelanggaran dengan mudah dan cepat.</p>
                    </div>
                </div>
    </section>

    <!-- About Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2>Tentang {{ $nama_sistem }}</h2>
                    <p class="lead">Sistem monitoring pelanggaran siswa yang dirancang untuk membantu sekolah dalam
                        mengelola dan memantau perilaku siswa secara efektif.</p>
                    <p>Dikembangkan oleh SMK Negeri Banjai 2 untuk memudahkan proses monitoring dan pelaporan pelanggaran
                        siswa.</p>
                    <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/Anime Oki.jpg') }}" 
                        class="img-fluid rounded w-50">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h2>Fitur Utama</h2>
                    <p class="lead">Berbagai fitur yang memudahkan monitoring pelanggaran siswa</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="bi bi-eye-fill fs-1 text-primary mb-3"></i>
                            <h5 class="card-title">Monitoring Real-time</h5>
                            <p class="card-text">Pantau pelanggaran siswa secara langsung dengan data yang selalu terupdate.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="bi bi-file-earmark-text-fill fs-1 text-success mb-3"></i>
                            <h5 class="card-title">Laporan Otomatis</h5>
                            <p class="card-text">Generate laporan pelanggaran secara otomatis dengan format yang mudah
                                dibaca.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="bi bi-shield-check fs-1 text-warning mb-3"></i>
                            <h5 class="card-title">Keamanan Data</h5>
                            <p class="card-text">Data siswa dan pelanggaran tersimpan dengan aman dan terenkripsi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 mb-4">
                    <h3 class="display-4">{{ $total_siswa ?? 1250 }}</h3>
                    <p>Total Siswa</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h3 class="display-4">{{ $total_pelanggaran ?? 45 }}</h3>
                    <p>Pelanggaran Bulan Ini</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h3 class="display-4">{{ $total_laporan ?? 12 }}</h3>
                    <p>Laporan Dihasilkan</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h3 class="display-4">{{ $tingkat_kepatuhan ?? 95 }}</h3>
                    <p>% Tingkat Kepatuhan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2>Hubungi Kami</h2>
                    <p class="lead">Untuk informasi lebih lanjut tentang {{ $nama_sistem }}</p>
                    <div class="row mt-4">
                        <div class="col-md-4">
                            <i class="bi bi-telephone-fill fs-2 text-primary mb-2"></i>
                            <p>{{ $kontak_telepon ?? '+62 123 456 7890' }}</p>
                        </div>
                        <div class="col-md-4">
                            <i class="bi bi-envelope-fill fs-2 text-primary mb-2"></i>
                            <p>{{ $kontak_email ?? 'info@smkbanjai2.sch.id' }}</p>
                        </div>
                        <div class="col-md-4">
                            <i class="bi bi-geo-alt-fill fs-2 text-primary mb-2"></i>
                            <p>{{ $alamat_sekolah ?? 'Jl. Pendidikan No. 1, Banjai' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection