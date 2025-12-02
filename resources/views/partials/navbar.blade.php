<style>
    /* CSS Khusus Navbar */
    .navbar-brand img {
        height: 50px;
        width: auto;
    }
    
    .nav-link {
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        color: #1f2937 !important;
        font-size: 0.95rem;
        padding: 0.5rem 1rem !important;
        transition: color 0.3s;
    }

    .nav-link:hover {
        color: #7c3aed !important;
    }

    /* Tombol Pendaftaran */
    .btn-register {
        background-color: #1e1b4b;
        color: white;
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        border-radius: 50px;
        padding: 10px 25px;
        transition: all 0.3s;
    }

    .btn-register:hover {
        background-color: #7c3aed;
        color: white;
    }

    /* MEGA MENU CONFIG */
    @media (min-width: 992px) {
        .dropdown-mega {
            position: static;
        }
        .dropdown-menu-mega {
            width: 100%;
            left: 0;
            right: 0;
            padding: 20px;
            border-radius: 15px;
            border: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-top: 15px;
        }
        /* Garis pemisah antar kolom di desktop */
        .border-end-lg {
            border-right: 1px solid #e5e7eb;
        }
    }

    .dropdown-item {
        font-size: 0.9rem;
        font-weight: 500;
        color: #4b5563;
        padding: 8px 15px;
        border-radius: 8px;
        white-space: normal; /* Agar teks panjang bisa turun baris */
    }
    .dropdown-item:hover {
        background-color: #f3f4f6;
        color: #7c3aed;
    }
</style>

<nav class="navbar navbar-expand-lg fixed-top bg-white shadow-sm py-3">
  <div class="container">
    
    <a class="navbar-brand" href="{{ route('index') }}">
        <img src="{{ $datafooter->image ? Storage::url($datafooter->image) : asset('/assets/images/B-Uni.png') }}" alt="B-University Logo">
    </a>

    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto align-items-lg-center gap-1 gap-lg-4 mt-3 mt-lg-0">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tentang Kami
          </a>
          <ul class="dropdown-menu border-0 shadow-lg rounded-4 p-3">
            <li><a class="dropdown-item" href="{{ route('sejarah') }}">Sejarah</a></li>
            <li><a class="dropdown-item" href="{{ route('visimisi') }}">Visi & Misi</a></li>
            <li><a class="dropdown-item" href="{{ route('sambutan') }}">Sambutan Dekan</a></li>
            <li><a class="dropdown-item" href="{{ route('fasilitas') }}">Fasilitas</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('sdm') }}">SDM</a>
        </li>

        <li class="nav-item dropdown dropdown-mega">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Jurusan
          </a>
          <div class="dropdown-menu dropdown-menu-mega">
            <div class="container">
                <div class="row g-4">
                    
                    <div class="col-lg-6 border-end-lg">
                        <ul class="list-unstyled mb-0">
                            <li><a class="dropdown-item" href="#">D4 Teknologi Rekayasa Komputer</a></li>
                            <li><a class="dropdown-item" href="#">D4 Teknologi Rekayasa Perangkat Lunak</a></li>
                            <li><a class="dropdown-item" href="#">D4 Komunikasi Media dan Digital</a></li>
                            <li><a class="dropdown-item" href="#">D4 Manajemen Agribisnis</a></li>
                            <li><a class="dropdown-item" href="#">D4 Manajemen Industri</a></li>
                            <li><a class="dropdown-item" href="#">D4 Supervisor Jaminan Mutu Pangan</a></li>
                            <li><a class="dropdown-item" href="#">D4 Paramedik Veteriner</a></li>
                            <li><a class="dropdown-item" href="#">D4 Manajemen Industri Jasa Makanan dan Gizi</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-6">
                        <ul class="list-unstyled mb-0">
                            <li><a class="dropdown-item" href="#">D4 Teknologi Produksi dan Pengembangan Masyarakat Pertanian</a></li>
                            <li><a class="dropdown-item" href="#">D4 Teknologi dan Manajemen Ternak</a></li>
                            <li><a class="dropdown-item" href="#">D4 Teknologi dan Manajemen Pembenihan Ikan</a></li>
                            <li><a class="dropdown-item" href="#">D4 Teknik dan Manajemen Lingkungan</a></li>
                            <li><a class="dropdown-item" href="#">D4 Teknologi dan Manajemen Produksi Perkebunan</a></li>
                            <li><a class="dropdown-item" href="#">D4 Ekowisata</a></li>
                            <li><a class="dropdown-item" href="#">D4 Akuntansi</a></li>
                            <li><a class="dropdown-item" href="#">D4 Analis Kimia</a></li>
                        </ul>
                    </div>

                </div>
            </div>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('pengumuman') }}">Pengumuman</a>
        </li>

      </ul>

      <div class="d-flex mt-3 mt-lg-0">
        <a href="{{ route('pendaftaran') }}" class="btn-register text-decoration-none">
            Pendaftaran
        </a>
      </div>

    </div>
  </div>
</nav>