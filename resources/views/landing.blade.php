@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="hero-section shadow">
            <div id="heroCarousel" class="carousel slide w-100" data-bs-ride="carousel">
                <div class="carousel-inner">
                    
                    <div class="carousel-item active">
                        <div class="row align-items-center px-4 px-md-5 py-5">
                            <div class="col-lg-6 text-white text-center text-lg-start z-2">
                                <h1 class="fw-bold display-5 mb-4" style="line-height: 1.2;">Menyatukan Ilmu dan Iman untuk Masa Depan Cerah</h1>
                                <p class="fs-5 fw-medium opacity-75">Kami berkomitmen mendidik generasi unggul yang menjunjung tinggi nilai agama dan kecemerlangan akademik.</p>
                            </div>
                            <div class="col-lg-6 position-relative text-center">
                                <img src="../assets/images/hero-illustration-1.png" class="img-fluid" style="max-height: 450px;" alt="Hero 1">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row align-items-center px-4 px-md-5 py-5">
                            <div class="col-lg-6 text-white text-center text-lg-start z-2">
                                <h1 class="fw-bold display-5 mb-4">Menciptakan Generasi Berakhlak dan Berwawasan</h1>
                                <p class="fs-5 fw-medium opacity-75">Kami hadir untuk membimbing Anda dalam meraih prestasi akademik dan menjadi agen perubahan di dunia.</p>
                            </div>
                            <div class="col-lg-6 position-relative text-center">
                                <img src="../assets/images/hero-illustration-3.png" class="img-fluid" style="max-height: 450px;" alt="Hero 3">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="floating-card">
            <h4 class="text-center fw-bold mb-4">Bekerjasama Dengan</h4>
            <div class="d-flex overflow-auto gap-5 align-items-center justify-content-center no-scrollbar px-3">
                @if($cooperationImg->isEmpty())
                    <p class="text-center text-muted">No data available</p>
                @else
                    @foreach ($cooperationImg as $image)
                        <img src="{{ asset('storage/' . $image->image) }}" style="height: 50px; width: auto; object-fit: contain;" alt="Partner">
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <section class="py-5 my-5 overflow-hidden">
        <div class="container py-5">
            <div class="row align-items-center gy-5">
                
                <div class="col-lg-6 pe-lg-5">
                    <h5 class="text-primary-dark fw-bold text-uppercase mb-3">TENTANG KAMI</h5>
                    
                    @if (empty($abouts->content) && empty($abouts->image))
                        <p class="fs-5 text-muted">No data available</p>
                    @else
                        <h2 class="display-6 fw-bold mb-3 text-dark">
                            Membangun generasi <span class="text-purple">unggul</span> dan <span class="text-pink">berakhlak</span>
                        </h2>
                        <p class="text-grey-soft fs-5 mb-4 lh-base">
                            {{ $abouts->content }}
                        </p>
                        <a href="{{ route('sejarah') }}" class="btn-custom-outline">
                            <span>Tentang kami</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    @endif
                </div>

                <div class="col-lg-6">
                    <div class="row g-3">
                        @if (isset($abouts->image[0]))
                            <div class="col-6">
                                <img src="{{ asset('storage/'. $abouts->image[0]) }}" class="img-fluid rounded-4 shadow-sm w-100 object-fit-cover" style="height: 200px;" alt="Img 1">
                            </div>
                        @endif
                        @if (isset($abouts->image[1]))
                            <div class="col-6">
                                <img src="{{ asset('storage/'. $abouts->image[1]) }}" class="img-fluid rounded-4 shadow-sm w-100 object-fit-cover" style="height: 200px;" alt="Img 2">
                            </div>
                        @endif
                        @if (isset($abouts->image[2]))
                            <div class="col-12">
                                <img src="{{ asset('storage/'. $abouts->image[2]) }}" class="img-fluid rounded-4 shadow-sm w-100 object-fit-cover" style="height: 250px;" alt="Img 3">
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="container py-5">
        <div class="d-flex justify-content-between align-items-end mb-5">
            <div>
                <h3 class="fw-bold fs-2 mb-1">Berita terkini untuk Anda</h3>
                <p class="text-grey-soft fw-medium m-0">Temukan berita terbaru hari ini</p>
            </div>
            <div class="d-none d-md-block">
                <button class="btn btn-light rounded-circle shadow-sm me-2" style="width: 45px; height: 45px;"><i class="bi bi-arrow-left"></i></button>
                <button class="btn btn-light rounded-circle shadow-sm" style="width: 45px; height: 45px;"><i class="bi bi-arrow-right"></i></button>
            </div>
        </div>

        <div class="row g-4">
            @forelse($news as $newslist)
                <div class="col-md-4">
                    <div class="card h-100 border rounded-4 p-3 shadow-sm bg-white">
                        <div class="ratio ratio-16x9 rounded-4 overflow-hidden mb-3">
                            <img src="{{ asset('storage/' . $newslist->image) }}" class="object-fit-cover" alt="{{ $newslist->title }}">
                        </div>
                        <div class="card-body p-0 d-flex flex-column">
                            <a href="{{ route('berita.show', $newslist->slug) }}" class="text-dark fw-bold fs-5 text-decoration-none mb-2 stretched-link hover-primary">
                                {{ $newslist->title }}
                            </a>
                            <p class="text-grey-soft small fw-bold mt-auto">
                                {{ \Carbon\Carbon::parse($newslist->created_at)->format('d/m/y') }}
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12"><p class="text-muted">No news available.</p></div>
            @endforelse
        </div>
    </section>


    <section class="container py-5 mt-4">
        <div class="text-center mb-5">
            <h3 class="fw-bold fs-2 text-dark">Rektorat B-Universitas</h3>
            <p class="text-grey-soft fw-medium">Berkomitmen untuk meningkatkan kualitas Pendidikan</p>
        </div>

        <div class="row gy-5 justify-content-center text-center">
            @forelse($rectors as $rektor)
                <div class="col-6 col-lg-3">
                    <div class="mx-auto mb-3 position-relative" style="width: 160px; height: 160px;">
                        <img src="{{ asset('storage/' . $rektor->image) }}" class="rounded-circle w-100 h-100 object-fit-cover shadow-sm" alt="{{ $rektor->nama }}">
                    </div>
                    <h5 class="fw-bold text-dark mb-1">{{ $rektor->nama }}</h5>
                    <p class="text-grey-soft small fw-semibold">{{ $rektor->jabatan }}</p>
                </div>
            @empty
                <div class="col-12"><p class="text-muted">No data available</p></div>
            @endforelse
        </div>
    </section>


    <section class="announcement-bg mt-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-5 text-white">
                <div>
                    <h3 class="fw-bold fs-2">Pengumuman</h3>
                    <p class="fw-medium opacity-75">Dapatkan pengumuman terbaru</p>
                </div>
                <div>
                    <button class="btn btn-outline-light rounded-circle me-2" style="width: 45px; height: 45px;"><i class="bi bi-arrow-left"></i></button>
                    <button class="btn btn-light rounded-circle" style="width: 45px; height: 45px;"><i class="bi bi-arrow-right"></i></button>
                </div>
            </div>

            <div class="row g-4">
                @forelse($announcements as $announcement)
                    <div class="col-md-4">
                        <div class="card h-100 border-0 rounded-4 p-4 shadow-sm">
                            <div class="card-body p-0">
                                <a href="{{ route('pengumuman.show', $announcement->slug) }}" class="text-dark fw-bold fs-5 text-decoration-none d-block mb-3">
                                    {{ $announcement->title }}
                                </a>
                                <p class="text-grey-soft small mb-3">
                                    {{ Str::limit(strip_tags(html_entity_decode($announcement->content)), 100, '...') }}
                                </p>
                                <p class="text-grey-soft extra-small fw-bold m-0">
                                    {{ \Carbon\Carbon::parse($announcement->created_at)->format('d/m/y') }}
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="card border-0 rounded-4 p-4 bg-white/10 text-white">
                            <p class="m-0 fw-bold">Belum ada pengumuman.</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

@endsection