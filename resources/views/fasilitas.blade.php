@extends('layouts.app')

@section('content')

    <article class="container" style="margin-top: 8rem; margin-bottom: 5rem;">
        
        <div class="mb-5">
            <h1 class="fw-bold fs-2 text-dark mb-2">
                Fasilitas B-University
            </h1>
            <p class="text-secondary fw-semibold">
                Menciptakan lingkungan pembelajaran yang nyaman dan lengkap
            </p>
        </div>

        @if ($facilities->isEmpty())
            <div class="alert alert-light text-center text-secondary fw-medium py-5 rounded-4">
                No Data Available
            </div>
        @else
            <div class="mt-4">
                @foreach ($facilities as $facility)
                    <div class="row g-5 mb-5 align-items-start">
                        
                        <div class="col-lg-5">
                            <img
                                src="{{ asset('storage/' . $facility->image) }}"
                                alt="Fasilitas B-University"
                                class="w-100 shadow-sm"
                                style="border-radius: 30px; object-fit: cover;"
                            />
                        </div>

                        <div class="col-lg-7">
                            <div class="rich-content text-secondary lh-lg" style="text-align: justify;">
                                {!! $facility->content !!}
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        @endif

        <style>
            /* Kita batasi style ini hanya di dalam class .rich-content
               agar tidak merusak navbar atau footer */
            
            .rich-content h1, 
            .rich-content h2, 
            .rich-content h3, 
            .rich-content h4 {
                color: #1f2937; /* text-dark */
                font-family: 'Montserrat', sans-serif;
                font-weight: 700;
                margin-top: 1rem;
                margin-bottom: 0.5rem;
            }

            .rich-content ul {
                list-style-type: disc;
                padding-left: 1.5rem;
                margin-bottom: 1rem;
            }

            .rich-content ol {
                list-style-type: decimal;
                padding-left: 1.5rem;
                margin-bottom: 1rem;
            }

            .rich-content li {
                margin-bottom: 0.25rem;
            }

            .rich-content p {
                margin-bottom: 1rem;
                color: #6b7280; /* text-secondary */
            }
        </style>

    </article>

@endsection