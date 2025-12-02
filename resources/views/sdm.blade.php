@extends('layouts.app')

@section('content')

    <article class="container" style="margin-top: 8rem;">
        
        <div class="mb-5">
            <h1 class="fw-bold fs-2 text-dark mb-2">Data Dosen</h1>
            <p class="text-secondary fw-semibold">Dosen berkompeten dibidangnya</p>
        </div>

        @if ($lectures->isEmpty())
            <div class="alert alert-light text-center text-secondary fw-medium mt-5 py-5 rounded-4">
                No Data Available
            </div>
        @else
            <div class="mt-4">
                @foreach ($lectures as $lecture)
                    <div class="row align-items-center mb-5 pb-5 border-bottom border-light">
                        
                        <div class="col-md-3 col-sm-4 text-center mb-4 mb-sm-0">
                            <img 
                                src="{{ asset('storage/' . $lecture->image) }}" 
                                class="img-fluid rounded-4 shadow-sm"
                                style="max-height: 300px; width: 100%; object-fit: cover;" 
                                alt="{{ $lecture->nama }}"
                            />
                        </div>

                        <div class="col-md-9 col-sm-8 ps-md-5">
                            <h3 class="fw-bold fs-4 text-primary-dark mb-3">
                                {{ $lecture->nama }}
                            </h3>
                            
                            <table class="table table-borderless table-sm text-secondary" style="max-width: 600px;">
                                <tbody>
                                    <tr>
                                        <td class="fw-semibold" style="width: 140px;">NIDN</td>
                                        <td style="width: 20px;">:</td>
                                        <td>{{ $lecture->nidn }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">Pendidikan</td>
                                        <td>:</td>
                                        <td>{{ $lecture->pendidikan }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">Jabatan</td>
                                        <td>:</td>
                                        <td>{{ $lecture->jabatan }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">Email</td>
                                        <td>:</td>
                                        <td>{{ $lecture->email }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">Topik</td>
                                        <td>:</td>
                                        <td>{{ $lecture->topik }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </article>


    <article class="container" style="margin-top: 100px; margin-bottom: 100px;">
        
        <div class="mb-5">
            <h1 class="fw-bold fs-2 text-dark mb-2">Tenaga Kependidikan</h1>
            <p class="text-secondary fw-semibold">Tendik B-University</p>
        </div>

        @if ($admins->isEmpty())
            <div class="alert alert-light text-center text-secondary fw-medium mt-5 py-5 rounded-4">
                No Data Available
            </div>
        @else
            <div class="mt-4">
                @foreach ($admins as $admin)
                    <div class="row align-items-center mb-5 pb-5 border-bottom border-light">
                        
                        <div class="col-md-3 col-sm-4 text-center mb-4 mb-sm-0">
                            <img 
                                src="{{ asset('storage/' . $admin->image) }}" 
                                class="img-fluid rounded-4 shadow-sm"
                                style="max-height: 300px; width: 100%; object-fit: cover;" 
                                alt="{{ $admin->nama }}"
                            />
                        </div>

                        <div class="col-md-9 col-sm-8 ps-md-5">
                            <h3 class="fw-bold fs-4 text-primary-dark mb-3">
                                {{ $admin->nama }}
                            </h3>
                            
                            <table class="table table-borderless table-sm text-secondary" style="max-width: 600px;">
                                <tbody>
                                    <tr>
                                        <td class="fw-semibold" style="width: 140px;">NIP</td>
                                        <td style="width: 20px;">:</td>
                                        <td>{{ $admin->nip }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">Jabatan</td>
                                        <td>:</td>
                                        <td>{{ $admin->jabatan }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

    </article>
@endsection