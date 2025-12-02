@extends('layouts.app')

@section('content')

<article class="container" style="margin-top: 8rem; margin-bottom: 6rem;">
    
    <div class="mb-5">
        <h1 class="fw-bold fs-3 text-dark mb-1">
            Pengumuman
        </h1>
        <p class="text-secondary fw-semibold m-0">
            Dapatkan Pengumuman terbaru
        </p>
    </div>

    <div class="mt-5">
        <div class="mb-4">
            <h2 class="text-uppercase fw-bold text-dark mb-3 display-6" style="font-size: 1.75rem;">
                {{ $announcement->title }}
            </h2>
            
            <div class="d-flex align-items-center gap-3 small text-secondary fw-semibold">
                <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-person-circle text-secondary"></i>
                    <span>by <span class="text-dark">{{ $announcement->user->name }}</span></span>
                </div>
                <span class="text-secondary opacity-50">|</span>
                <span>{{ \Carbon\Carbon::parse($announcement->created_at)->format('d F Y') }}</span>
            </div>
        </div>

        <hr class="text-secondary opacity-25 my-4">

        <div class="fs-6 text-secondary text-justify lh-lg">
            {!! $announcement->content !!}
        </div>
    </div>
</article>

@endsection