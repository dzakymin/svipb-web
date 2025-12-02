@extends('layouts.app')

@section('content')

<article class="container" style="margin-top: 8rem; margin-bottom: 5rem;">
    <div class="mb-5">
        <h1 class="fw-bold fs-2 text-dark mb-2">
            Pengumuman
        </h1>
        <p class="text-secondary fw-semibold">
            Dapatkan Pengumuman terbaru
        </p>
    </div>

    <div class="row g-4">
        @forelse($announcements as $announcement)
        <div class="col-md-4 col-sm-6">
            <div class="card h-100 border-0 shadow-sm rounded-4 p-4">
                <div class="card-body p-0 d-flex flex-column">
                    <a href="{{ route('pengumuman.show', $announcement->slug) }}"
                        class="text-decoration-none text-dark fw-bold fs-5 mb-3 stretched-link"
                        style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                        {{ $announcement->title }}
                    </a>
                    
                    <p class="text-secondary small fw-semibold mb-3">
                        {{ Str::limit(strip_tags(html_entity_decode($announcement->content)), 100, '...') }}
                    </p>
                    
                    <p class="text-secondary small fw-bold m-0 mt-auto">
                        {{ \Carbon\Carbon::parse($announcement->created_at)->format('d/m/Y') }}
                    </p>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="card border-0 shadow-sm rounded-4 p-4">
                <p class="text-secondary fw-bold m-0">
                    No data available
                </p>
            </div>
        </div>
        @endforelse
    </div>
</article>

@endsection