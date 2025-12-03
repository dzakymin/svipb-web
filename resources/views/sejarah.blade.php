@extends('layouts.app')

@section('content')

    {{-- Custom Style untuk hal-hal spesifik yang tidak dicover default Bootstrap --}}
    <style>
        .history-image {
            width: 100%;
            height: 400px; /* Default height */
            object-fit: cover;
            border-radius: 1.5rem; /* setara rounded-4 atau 5 */
        }
        
        /* Agar di layar besar gambar bisa lebih tinggi sesuai request awal, tapi tetap aman */
        @media (min-width: 992px) {
            .history-image {
                height: 550px;
            }
        }

        .text-justify {
            text-align: justify;
        }
    </style>

    {{-- Gunakan py-5 dan mt-5 untuk memberi jarak dari navbar tanpa inline style pixel yang kaku --}}
    <article class="container py-5 mt-5 mb-5">
        
        {{-- Header Section --}}
        <div class="mb-5 border-bottom pb-4">
            <h1 class="fw-bold display-5 text-dark mb-2">
                Sejarah Sekolah Vokasi IPB
            </h1>
            <p class="text-secondary fw-medium lead">
                Bersama mengembangkan pendidikan Negeri
            </p>
        </div>

        {{-- Content Section --}}
        @if ($historys->isEmpty())
            {{-- Empty State yang lebih menarik --}}
            <div class="d-flex flex-column align-items-center justify-content-center py-5 rounded-4 bg-light border border-dashed">
                <i class="bi bi-journal-x text-secondary mb-3" style="font-size: 3rem;"></i>
                <h5 class="fw-bold text-secondary">Belum Ada Data Sejarah</h5>
                <p class="text-muted small">Silakan tambahkan data melalui panel admin.</p>
            </div>
        @else
            <div class="d-flex flex-column gap-5">
                @foreach ($historys as $history)
                    <div class="row g-5 align-items-center">
                        
                        {{-- Kolom Gambar --}}
                        <div class="col-lg-5">
                            <div class="position-relative">
                                {{-- Background decorative (opsional, untuk estetika) --}}
                                <div class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-10 rounded-5 transform-translate-2" style="z-index: -1; transform: translate(10px, 10px);"></div>
                                
                                <img 
                                    src="{{ asset('storage/' . $history->image) }}" 
                                    alt="Sejarah Sekolah Vokasi"
                                    class="history-image shadow-sm"
                                />
                            </div>
                        </div>

                        {{-- Kolom Teks --}}
                        <div class="col-lg-7">
                            {{-- Jika ada judul spesifik per item history, bisa ditaruh disini --}}
                            {{-- <h3 class="fw-bold mb-3">{{ $history->title }}</h3> --}}
                            
                            <div class="text-secondary lh-lg text-justify">
                                {!! $history->content !!}
                            </div>
                        </div>

                    </div>
                    
                    {{-- Divider antar item (jika lebih dari 1) --}}
                    @if(!$loop->last)
                        <hr class="my-5 border-secondary opacity-10">
                    @endif

                @endforeach
            </div>
        @endif
    </article>

@endsection