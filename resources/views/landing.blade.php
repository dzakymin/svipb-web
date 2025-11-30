@extends('layouts.app')

@section('content')

{{-- 
    CUSTOM CSS 
    Diperlukan untuk menjaga tampilan agar PERSIS sama dengan desain asli (Tailwind),
    karena Bootstrap tidak memiliki warna/font custom Anda secara default.
--}}
<style>
    /* Font & Tipografi */
    .font-montserrat { font-family: 'Montserrat', sans-serif; }
    
    /* Warna Custom (Sesuaikan hex code ini dengan config tailwind Anda jika perlu) */
    .text-primary-200 { color: #0d6efd; /* Contoh biru primary */ }
    .text-secondary-purple { color: #6f42c1; }
    .text-secondary-pink { color: #d63384; }
    .text-xneutral-400 { color: #212529; /* Dark grey */ }
    .text-xneutral-200 { color: #6c757d; /* Grey */ }
    .text-xneutral-100 { color: #dee2e6; /* Light grey border */ }
    .text-xneutral-0 { color: #ffffff; }
    .bg-xneutral-0 { background-color: #ffffff; }

    /* Layout Spesifik */
    .hero-section { min-height: 90vh; margin-top: 7rem; position: relative; }
    .rounded-30 { border-radius: 30px; }
    .rounded-20 { border-radius: 20px; }
    .animate-fade { transition: opacity 0.5s ease-in-out; }
    
    /* Floating Card Cooperation */
    .cooperation-card {
        margin-top: -8rem;
        z-index: 10;
        position: relative;
        background: white;
        box-shadow: 0 .5rem 1rem rgba(0,0,0,.15);
    }

    /* Agar gambar responsif dan fit */
    .img-cover { object-fit: cover; width: 100%; height: 100%; }
    
    /* Decoration Blobs */
    .blob-1 { position: absolute; bottom: -8rem; left: -9rem; z-index: -1; }
    .blob-2 { position: absolute; top: -6rem; right: -4rem; z-index: -1; }
</style>

<section class="container hero-section">
    <div id="hero-1" class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column flex-lg-row align-items-center justify-content-center rounded-30 animate-fade">
        <div class="px-3 ps-md-5 col-12 col-lg-6">
            <h1 class="display-4 fw-bold font-montserrat text-white mb-4">
                Menyatukan Ilmu dan Iman untuk Masa Depan Cerah
            </h1>
            <span class="fs-5 text-white font-montserrat fw-medium">
                Kami berkomitmen mendidik generasi unggul yang menjunjung tinggi nilai agama dan kecemerlangan akademik.
            </span>
        </div>
        <div class="col-12 col-lg-6 text-center text-lg-end">
            <img src="../assets/images/hero-illustration-1.png" class="img-fluid z-0 w-100 w-lg-75 me-lg-4" alt="Hero Image">
        </div>
    </div>

    <div id="hero-2" class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column flex-lg-row align-items-center justify-content-center rounded-30 animate-fade">
        <div class="px-3 ps-md-5 col-12 col-lg-6">
            <h1 class="display-4 fw-bold font-montserrat text-white mb-4">
                Menuju Pendidikan Berdaya Saing Global
            </h1>
            <span class="fs-5 text-white font-montserrat fw-medium">
                Teknik pembelajaran yang memadukan tradisi keilmuan Agama dengan inovasi modern.
            </span>
        </div>
        <div class="col-12 col-lg-6 text-center text-lg-end">
            <img src="../assets/images/hero-illustration-2.png" class="img-fluid z-0 w-100 w-lg-75 me-lg-4" alt="Hero Image">
        </div>
    </div>

    <div id="hero-3" class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column flex-lg-row align-items-center justify-content-center rounded-30 animate-fade">
        <div class="px-3 ps-md-5 col-12 col-lg-6">
            <h1 class="display-4 fw-bold font-montserrat text-white mb-4">
                Menciptakan Generasi Berakhlak dan Berwawasan
            </h1>
            <span class="fs-5 text-white font-montserrat fw-medium">
                Kami hadir untuk membimbing Anda dalam meraih prestasi akademik dan menjadi agen perubahan di dunia.
            </span>
        </div>
        <div class="col-12 col-lg-6 text-center text-lg-end">
            <img src="../assets/images/hero-illustration-3.png" class="img-fluid z-0 w-100 w-lg-75 me-lg-4" alt="Hero Image">
        </div>
    </div>
</section>

<div class="container rounded-30 cooperation-card py-4 px-md-5 mx-auto" style="width: fit-content;">
    <h3 class="h4 text-center w-100 fw-bold font-montserrat mb-4">
        Bekerjasama Dengan
    </h3>
    <div class="d-flex overflow-auto gap-4 justify-content-center">
        @if ($cooperationImg->isEmpty())
            <p class="text-center text-xneutral-200 font-montserrat fs-5">
                No data available
            </p>
        @else
            @foreach ($cooperationImg as $image)
                {{-- FIX: Menambahkan tutup kurung pada asset() --}}
                <img class="d-block" style="width: 3rem;" src="{{ asset('storage/'. $image->image) }}" alt="cooperation" />
            @endforeach
        @endif
    </div>
</div>
<section class="w-100 overflow-hidden py-5 my-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-12 col-md-6 ps-lg-5 order-md-1">
                <h3 class="text-primary-200 fw-bold h4 font-montserrat mb-3">
                    TENTANG KAMI
                </h3>
                @if (empty($abouts->content) && empty($abouts->image)) 
                    <p class="font-montserrat fs-5 fw-bold text-xneutral-200">
                        No data available
                    </p>
                @else
                    <p class="font-montserrat display-6 fw-bold mb-3">
                        Membangun generasi
                        <span class="text-secondary-purple">unggul</span> dan
                        <span class="text-secondary-pink">berakhlak</span>
                    </p>
                    <p class="fs-5 fw-bold text-xneutral-200 font-montserrat mb-4">
                        {{ $about->content }}
                    </p>
                    <a href="{{ route('sejarah') }}" class="btn btn-outline-primary rounded-pill px-4 py-2 font-montserrat fw-bold d-inline-flex align-items-center gap-2">
                        <span>Tentang kami</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                @endif
            </div>

            <div class="col-12 col-md-6 position-relative order-md-2">
                <div class="row g-3 w-auto mx-auto">
                    @if (isset($abouts->image[0]))
                        <div class="col-6">
                            <img src="{{ asset('storage/' . $abouts->image[0]) }}" class="img-fluid rounded" alt="Illustration 1" />
                        </div>
                    @endif
                    @if (isset($abouts->image[1]))
                        <div class="col-6">
                            <img src="{{ asset('storage/' . $abouts->image[1]) }}" class="img-fluid rounded" alt="Illustration 2" />
                        </div>
                    @endif
                    @if (isset($abouts->image[2]))
                        <div class="col-12">
                            <img src="{{ asset('storage/' . $abouts->image[2]) }}" class="img-fluid rounded w-100" alt="Illustration 3" />
                        </div>
                    @endif
                </div>
                <img class="blob-1" src="/assets/images/elipse-1.svg" alt="" />
                <img class="blob-2" src="/assets/images/elipse-2.svg" alt="" />
            </div>
        </div>
    </div>
</section>
<section class="container position-relative py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold h4 font-montserrat text-xneutral-400">
                Berita terkini untuk Anda
            </h3>
            <p class="small text-xneutral-200 font-montserrat fw-bold">
                Temukan berita terbaru hari ini
            </p>
        </div>
        <div class="d-flex gap-2">
            <button class="btn btn-outline-secondary rounded-circle d-flex align-items-center justify-content-center p-0" style="width: 40px; height: 40px;">
                <i class="bi bi-arrow-left-short fs-3"></i>
            </button>
            <button class="btn btn-outline-secondary rounded-circle d-flex align-items-center justify-content-center p-0" style="width: 40px; height: 40px;">
                <i class="bi bi-arrow-right-short fs-3"></i>
            </button>
        </div>
    </div>

    <div class="row g-4">
        @foreach ( $news as $newslist )
            <div class="col-12 col-md-4">
                <div class="p-3 rounded-20 border border-light bg-white h-100">
                    <div class="rounded-3 overflow-hidden mb-3" style="max-height: 214px;">
                         {{-- FIX: Mengganti $newsList menjadi $newslist (case sensitive) --}}
                        <img src="{{ asset('storage/' . $newslist->image) }}" class="img-fluid w-100 object-fit-cover" alt="{{ $newslist->title }}">
                    </div>
                    <a href="{{ route('berita.show', $newslist->slug) }}" class="d-block fs-5 font-montserrat fw-bold text-xneutral-400 text-decoration-none text-truncate mb-2" style="max-width: 100%;">
                        {{ $newslist->title }}
                    </a>
                    <p class="font-montserrat small fw-bold text-xneutral-200">
                        {{ \Carbon\Carbon::parse($newslist->created_at)->format('d/m/y') }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="position-absolute top-0 start-0 translate-middle z-n1">
        <img src="/assets/images/elipse-1.svg" alt="" />
    </div>
</section>
<section class="container mt-5 pt-5">
    <div class="text-center mb-5">
        <h3 class="font-montserrat fw-bold text-xneutral-400 h3">
            Rektorat B-Universitas
        </h3>
        <p class="font-montserrat text-xneutral-200 fw-bold">
            Berkomitmen untuk meningkatkan kualitas Pendidikan
        </p>
    </div>
    
    <div class="row g-4 justify-content-center text-center">
        @if ($rectors->isEmpty())
            <div class="col-12">
                <p class="text-xneutral-200 font-montserrat fs-5">
                    No data available
                </p>
            </div>
        @else
            @foreach ($rectors as $rektor)
                <div class="col-6 col-lg-3 d-flex flex-col align-items-center">
                    <div class="rounded-circle overflow-hidden mb-3 d-inline-block" style="width: 150px; height: 150px;">
                        <img src="{{ asset('storage/'. $rektor->image) }}" class="w-100 h-100 object-fit-cover" alt="{{ $rektor->nama }}" />
                    </div>
                    <p class="mb-1 text-xneutral-400 fw-bold font-montserrat">
                        {{$rektor->nama}}
                    </p>
                    <p class="mb-0 small text-xneutral-200 fw-bold font-montserrat">
                        {{$rektor->jabatan}}
                    </p>
                </div>
            @endforeach
        @endif
    </div>
</section>
<section class="mt-5 w-100" style="background-color: #f8f9fa;"> <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h3 class="fw-bold h4 font-montserrat text-dark">
                    Pengumuman
                </h3>
                <p class="font-montserrat small fw-bold text-dark">
                    Dapatkan pengumuman terbaru
                </p>
            </div>
            <div class="d-flex gap-2">
                <button class="btn btn-outline-secondary rounded-circle d-flex align-items-center justify-content-center p-0" style="width: 40px; height: 40px;">
                    <i class="bi bi-arrow-left-short fs-3"></i>
                </button>
                <button class="btn btn-outline-secondary rounded-circle d-flex align-items-center justify-content-center p-0" style="width: 40px; height: 40px;">
                    <i class="bi bi-arrow-right-short fs-3"></i>
                </button>
            </div>
        </div>

        <div class="row g-4">
            {{-- FIX: Menggunakan @forelse untuk menangani kondisi data kosong dengan benar --}}
            @forelse ($announcements as $announcement)
                <div class="col-12 col-md-4">
                    <div class="p-4 rounded-20 border border-light bg-white h-100">
                        <a href="{{ route('pengumuman.show', $announcement->slug) }}" class="d-block fs-5 font-montserrat fw-bold text-xneutral-400 text-decoration-none text-truncate mb-3">
                            {{ $announcement->title }}
                        </a>
                        <p class="font-montserrat small fw-bold text-xneutral-200 mb-2">
                            {{ Str::limit($announcement->content, 100, '...') }}
                        </p>
                        <p class="font-montserrat small fw-bold text-xneutral-200 mb-0">
                            {{-- FIX: Menggunakan variabel yang benar $announcement, bukan $newsList --}}
                            {{ \Carbon\Carbon::parse($announcement->created_at)->format('d/m/y') }}
                        </p>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="p-4 rounded-20 border border-light bg-white text-center">
                        <p class="font-montserrat fs-5 fw-bold text-xneutral-400 mb-0">
                            No data available
                        </p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection