@extends('layouts.app')

@section('content')

    <style>
        .form-label {
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 0.5rem;
        }
        .form-control, .form-select {
            padding: 18px 24px;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
            font-weight: 500;
        }
        .form-control::placeholder {
            color: #9ca3af;
            font-weight: 600;
        }
        .form-control:focus, .form-select:focus {
            border-color: #1e1b4b;
            box-shadow: 0 0 0 0.25rem rgba(30, 27, 75, 0.1);
        }
        .text-error {
            color: #ef4444;
        }
        
        /* Button Styles */
        .btn-register-submit {
            background-color: #1e1b4b;
            color: white;
            border: 1px solid #1e1b4b;
            width: 100%;
            padding: 14px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s;
        }
        .btn-register-submit:hover {
            background-color: #7c3aed;
            border-color: #7c3aed;
            color: white;
        }

        .btn-register-back {
            background-color: white;
            color: #1e1b4b;
            border: 1px solid #1e1b4b;
            width: 100%;
            padding: 14px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s;
            display: block;
            text-align: center;
            text-decoration: none;
        }
        .btn-register-back:hover {
            background-color: #f3f4f6;
            color: #1e1b4b;
        }

        /* Style Khusus Modal Sukses */
        .modal-success-icon {
            font-size: 4rem;
            color: #10b981; /* Hijau Sukses */
        }
        .modal-content {
            border-radius: 20px;
            border: none;
            padding: 20px;
        }
    </style>

    <article class="container" style="margin-top: 8rem; margin-bottom: 5rem;">
        
        <div class="mb-5">
            <h1 class="fw-bold fs-2 text-dark mb-2">
                Pendaftaran
            </h1>
            <p class="text-secondary fw-semibold">
                Bergabung bersama kami untuk Masa Depan yang gemilang
            </p>
        </div>

        @if (session('success'))
            <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content text-center shadow-lg">
                        <div class="modal-body">
                            <div class="mb-3">
                                <i class="bi bi-check-circle-fill modal-success-icon"></i>
                            </div>
                            
                            <h3 class="fw-bold text-dark mb-3">Pendaftaran Berhasil!</h3>
                            
                            <p class="text-secondary mb-4 fs-5">
                                {{ session('success') }} <br>
                                <span class="fs-6 mt-2 d-block">Mohon cek email Anda secara berkala untuk informasi selanjutnya.</span>
                            </p>
                            
                            <button type="button" class="btn btn-register-submit w-50 mx-auto" data-bs-dismiss="modal">
                                OK, Mengerti
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var myModal = new bootstrap.Modal(document.getElementById('successModal'));
                    myModal.show();
                });
            </script>
        @endif
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops! Ada kesalahan input:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('pendaftaran.store') }}" method="post" enctype="multipart/form-data" class="mt-5">
            @csrf
            
            <div class="row g-5">
                <div class="col-md-6">
                    <div class="d-flex flex-column gap-4">
                        
                        <div>
                            <label for="nama-lengkap" class="form-label">Nama Lengkap <span class="text-error">*</span></label>
                            <input type="text" id="nama-lengkap" name="nama_lengkap" class="form-control" placeholder="Masukan Nama Lengkap Anda" required>
                        </div>

                        <div>
                            <label for="email" class="form-label">Email <span class="text-error">*</span></label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Masukan Email Anda" required>
                        </div>

                        <div>
                            <label for="jalur" class="form-label">Jalur <span class="text-error">*</span></label>
                            <select id="jalur" name="jalur" class="form-select" required>
                                <option value="KIP-K">KIP-K</option>
                                <option value="Reguler">Reguler</option>
                            </select>
                        </div>

                        <div>
                            <label for="foto" class="form-label">Foto <span class="text-error">*</span></label>
                            <input type="file" id="foto" name="image" class="form-control" accept="image/*" required>
                            <div class="form-text text-muted">Upload foto formal terbaru Anda.</div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex flex-column gap-4">
                        
                        <div>
                            <label for="nama-panggilan" class="form-label">Nama Panggilan <span class="text-error">*</span></label>
                            <input type="text" id="nama-panggilan" name="nama_panggilan" class="form-control" placeholder="Masukan Nama Panggilan Anda" required>
                        </div>

                        <div>
                            <label for="nomor-hp" class="form-label">Nomor HP <span class="text-error">*</span></label>
                            <input type="tel" id="nomor-hp" name="nomor_hp" class="form-control" placeholder="Masukan Nomor HP Anda" required>
                        </div>

                        <div>
                            <label for="program-studi-1" class="form-label">Program Studi 1 <span class="text-error">*</span></label>
                            <select id="program-studi-1" name="program_studi_1" class="form-select" required>
                                <option value="">Pilih Program Studi 1</option>
                                <option value="S1 KEPERAWATAN">S1 KEPERAWATAN</option>
                                <option value="S1 KEBIDANAN">S1 KEBIDANAN</option>
                                <option value="S1 FARMASI">S1 FARMASI</option>
                                <option value="S1 ADMINISTRASI RUMAH SAKIT">S1 ADMINISTRASI RUMAH SAKIT</option>
                                <option value="D3 KEBIDANAN">D3 KEBIDANAN</option>
                                <option value="D3 FISIOTERAPI">D3 FISIOTERAPI</option>
                                <option value="D3 FARMASI">D3 FARMASI</option>
                                <option value="S1 MANAJEMEN">S1 MANAJEMEN</option>
                                <option value="S1 AKUNTANSI">S1 AKUNTANSI</option>
                                <option value="S1 EKONOMI SYARIAH">S1 EKONOMI SYARIAH</option>
                                <option value="S1 KEWIRAUSAHAAN">S1 KEWIRAUSAHAAN</option>
                                <option value="S1 PENDIDIKAN GURU SD">S1 PENDIDIKAN GURU SD</option>
                                <option value="S1 BIOLOGI">S1 BIOLOGI</option>
                                <option value="S1 FISIKA">S1 FISIKA</option>
                                <option value="S1 TEKNIK KOMPUTER">S1 TEKNIK KOMPUTER</option>
                                <option value="S1 TEKNIK INDUSTRI">S1 TEKNIK INDUSTRI</option>
                                <option value="S1 TEKNIK INFORMATIKA">S1 TEKNIK INFORMATIKA</option>
                            </select>
                        </div>

                        <div>
                            <label for="program-studi-2" class="form-label">Program Studi 2 <span class="text-error">*</span></label>
                            <select id="program-studi-2" name="program_studi_2" class="form-select" required>
                                <option value="">Pilih Program Studi 2</option>
                                <option value="S1 KEPERAWATAN">S1 KEPERAWATAN</option>
                                <option value="S1 KEBIDANAN">S1 KEBIDANAN</option>
                                <option value="S1 FARMASI">S1 FARMASI</option>
                                <option value="S1 ADMINISTRASI RUMAH SAKIT">S1 ADMINISTRASI RUMAH SAKIT</option>
                                <option value="D3 KEBIDANAN">D3 KEBIDANAN</option>
                                <option value="D3 FISIOTERAPI">D3 FISIOTERAPI</option>
                                <option value="D3 FARMASI">D3 FARMASI</option>
                                <option value="S1 MANAJEMEN">S1 MANAJEMEN</option>
                                <option value="S1 AKUNTANSI">S1 AKUNTANSI</option>
                                <option value="S1 EKONOMI SYARIAH">S1 EKONOMI SYARIAH</option>
                                <option value="S1 KEWIRAUSAHAAN">S1 KEWIRAUSAHAAN</option>
                                <option value="S1 PENDIDIKAN GURU SD">S1 PENDIDIKAN GURU SD</option>
                                <option value="S1 BIOLOGI">S1 BIOLOGI</option>
                                <option value="S1 FISIKA">S1 FISIKA</option>
                                <option value="S1 TEKNIK KOMPUTER">S1 TEKNIK KOMPUTER</option>
                                <option value="S1 TEKNIK INDUSTRI">S1 TEKNIK INDUSTRI</option>
                                <option value="S1 TEKNIK INFORMATIKA">S1 TEKNIK INFORMATIKA</option>
                            </select>
                        </div>

                    </div>
                </div>

            </div>

            <div class="row mt-5 pt-4">
                <div class="col-md-6 mb-3 mb-md-0">
                    <a href="/" class="btn-register-back">
                        Kembali Ke Homepage
                    </a>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn-register-submit">
                        Daftar
                    </button>
                </div>
            </div>

        </form>
    </article>
@endsection