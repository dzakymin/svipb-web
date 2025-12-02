@extends('layouts.app')

@section('content')

    <article class="container" style="margin-top: 8rem; margin-bottom: 5rem;">
        
        <div class="mb-5">
            <h1 class="fw-bold fs-2 text-dark mb-2">
                Sejarah Sekolah Vokasi IPB
            </h1>
            <p class="text-secondary fw-semibold">
                Bersama mengembangkan pendidikan Negeri
            </p>
        </div>

        @if ($historys->isEmpty())
            <div class="alert alert-light text-center text-secondary fw-medium py-5 rounded-4">
                No Data Available
            </div>
        @else
            <div class="mt-4">
                @foreach ($historys as $history)
                <div class="row g-5 align-items-start">
                    
                    <div class="col-lg-5">
                        <div class="rounded-5 overflow-hidden shadow-sm position-relative bg-light" style="height: 600px;">
                            <img 
                                src="{{ asset('storage/' . $history->image) }}" 
                                alt="Sejarah B-University"
                                class="w-100 h-100"
                                style="object-fit: cover; object-position: center;"
                            />
                            </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="text-secondary lh-lg" style="text-align: justify;">
                            {!! $history->content !!}
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        @endif
    </article>

@endsection