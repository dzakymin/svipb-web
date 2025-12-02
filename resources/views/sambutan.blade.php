@extends('layouts.app')

@section('content')

    <!-- MAIN SECTION -->
    <!-- margin-top: 8rem agar turun dari navbar fixed -->
    <article class="container" style="margin-top: 8rem; margin-bottom: 5rem;">
        
        <!-- Header -->
        <div class="mb-5">
            <h1 class="fw-bold fs-2 text-dark mb-2">
                Sambutan Dekan Sekolah Vokasi IPB
            </h1>
            <p class="text-secondary fw-semibold">
                Meraih Masa Depan dengan Semangat Kebersamaan
            </p>
        </div>

        @if ($greetings->isEmpty())
            <div class="alert alert-light text-center text-secondary fw-medium py-5 rounded-4">
                No Data Available
            </div>
        @else

            @foreach ($greetings as $greeting)
                <div class="row g-5 align-items-start mt-2">
                    
                    <!-- Kolom Gambar (Lebar 4 dari 12) -->
                    <div class="col-lg-4">
                        <img
                            src="{{ asset('storage/' . $greeting->image) }}"
                            alt="Rektor B-University"
                            class="w-100 shadow-sm"
                            style="border-radius: 30px; object-fit: cover;"
                        />
                    </div>

                    <!-- Kolom Konten (Lebar 8 dari 12) -->
                    <div class="col-lg-8">
                        <!-- Text Justify & Line Height Renggang -->
                        <div class="text-secondary lh-lg" style="text-align: justify;">
                            {!! $greeting->content !!}
                        </div>
                    </div>

                </div>
            @endforeach

        @endif

    </article>

@endsection