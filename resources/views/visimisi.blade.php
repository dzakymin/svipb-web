@extends('layouts.app')

@section('content')

    <article class="container" style="margin-top: 8rem; margin-bottom: 5rem;">
        
        <div class="mb-5">
            <h1 class="fw-bold fs-2 text-dark mb-2">
                Visi Misi Sekolah Vokasi IPB
            </h1>
            <p class="text-secondary fw-semibold">
                Bersama mengembangkan pendidikan Negeri
            </p>
        </div>

        <div class="row g-5 mt-2 mb-5">
            <div class="col-md-6">
                <div class="d-flex flex-column gap-3 h-100">
                    <h3 class="fw-bold text-primary text-center">
                        VISI
                    </h3>
                    <div class="fs-4 fw-bold text-secondary text-center text-uppercase border rounded-4 p-4 h-100 d-flex align-items-center justify-content-center bg-light">
                        {!! $visi ?? 'No Data Available' !!}
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="d-flex flex-column gap-3 h-100">
                    <h3 class="fw-bold text-primary text-center">
                        MISI
                    </h3>
                    <div class="text-secondary fw-medium p-3" style="text-align: justify;">
                        <ol class="ps-3">
                            {!! $misi ?? 'No Data Available' !!}
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <div class="border rounded-4 overflow-hidden shadow-sm mt-5">
            <div class="row g-0">
                
                <div class="col-md-4 bg-white p-4 p-lg-5 border-end border-bottom">
                    <h4 class="fw-bold text-dark mb-3">Inovatif</h4>
                    <p class="text-secondary small fw-medium m-0">
                        Makna ”Inovatif” dalam visi universitas adalah Lulusan mempunyai kemampuan dalam berfikir untuk menciptakan pengetahuan dan teknologi baru yang tepat guna di bidang industri dan kesehatan untuk kemaslahatan ummat.
                    </p>
                </div>

                <div class="col-md-4 border-end border-bottom bg-light">
                    @if(isset($visimisiImg[0]))
                        <img src="{{ asset('storage/'. $visimisiImg[0]) }}" class="w-100 h-100" style="object-fit: cover; min-height: 250px;" alt="Inovatif" />
                    @else
                        <div class="d-flex align-items-center justify-content-center h-100 text-muted p-5">No Image</div>
                    @endif
                </div>

                <div class="col-md-4 bg-white p-4 p-lg-5 border-bottom">
                    <h4 class="fw-bold text-dark mb-3">Profesional</h4>
                    <p class="text-secondary small fw-medium m-0">
                        Makna ”Profesional” dalam visi universitas adalah lulusan mempunyai kompetensi sesuai dengan profesinya masing-masing baik dalam aspek pengetahuan, sikap maupun keterampilan serta berpegang teguh pada nilai moral yang mengarahkan serta mendasari perbuatan.
                    </p>
                </div>

                <div class="col-md-4 border-end bg-light">
                    @if(isset($visimisiImg[1]))
                        <img src="{{ asset('storage/'. $visimisiImg[1]) }}" class="w-100 h-100" style="object-fit: cover; min-height: 250px;" alt="Profesional" />
                    @else
                        <div class="d-flex align-items-center justify-content-center h-100 text-muted p-5">No Image</div>
                    @endif
                </div>

                <div class="col-md-4 bg-white p-4 p-lg-5 border-end">
                    <h4 class="fw-bold text-dark mb-3">Islami</h4>
                    <p class="text-secondary small fw-medium m-0">
                        Makna ”Islami” dalam visi universitas adalah lulusan mempunyai integritas menjunjung tinggi nilai-nilai keislaman (Islamic values) dalam setiap perilaku dan peduli terhadap kesejahteraan masyarakat serta perubahan dalam setiap aspek kehidupan di lingkungannya.
                    </p>
                </div>

                <div class="col-md-4 bg-light">
                    @if(isset($visimisiImg[2]))
                        <img src="{{ asset('storage/'. $visimisiImg[2]) }}" class="w-100 h-100" style="object-fit: cover; min-height: 250px;" alt="Islami" />
                    @else
                        <div class="d-flex align-items-center justify-content-center h-100 text-muted p-5">No Image</div>
                    @endif
                </div>

            </div>
        </div>

    </article>
@endsection