<style>
    /* CSS Khusus Footer agar mirip desain asli */
    footer {
        font-family: 'Poppins', sans-serif;
    }
    .text-grey-soft { color: #6b7280; } /* Warna text abu */
    .text-dark-blue { color: #1f2937; } /* Warna judul kontak */
    
    /* Style untuk icon sosmed bulat */
    .social-icon {
        width: 35px;
        height: 35px;
        background-color: #1e1b4b; /* Warna Navy (primary-200) */
        color: white;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        text-decoration: none;
        transition: all 0.3s;
    }
    .social-icon:hover {
        background-color: #7c3aed; /* Berubah ungu saat hover */
        color: white;
        transform: translateY(-3px);
    }

    /* Style Tombol GMaps (Outline) */
    .btn-gmaps {
        border: 1px solid #1e1b4b;
        color: #1e1b4b;
        background-color: white;
        border-radius: 50px;
        padding: 12px 24px;
        font-weight: 600;
        font-family: 'Montserrat', sans-serif;
        width: 100%;
        display: block;
        text-align: center;
        text-decoration: none;
        transition: all 0.3s;
    }
    .btn-gmaps:hover {
        background-color: #1e1b4b;
        color: white;
    }
</style>

<footer class="w-100 mt-5 pt-5">
    <div class="container">
        <div class="row gy-5 gx-lg-5">
            
            <div class="col-md-6 col-lg-4">
                <img 
                    class="mb-4" 
                    src="{{ $datafooter->image ? Storage::url($datafooter->image) : asset('/assets/images/B-Uni.png') }}" 
                    alt="Logo B-Universitas" 
                    style="height: 50px; width: auto;"
                />
                <p class="text-grey-soft small mb-4">
                    Lihat Perkembangan kami di akun sosial media
                </p>
                <div class="d-flex gap-3">
                    <a href="{{ $datafooter->link_instagram ?? '#' }}" class="social-icon">
                        <i class="bi bi-instagram fs-6"></i>
                    </a>
                    <a href="{{ $datafooter->link_youtube ?? '#' }}" class="social-icon">
                        <i class="bi bi-youtube fs-6"></i>
                    </a>
                    <a href="{{ $datafooter->link_linkedin ?? '#' }}" class="social-icon">
                        <i class="bi bi-linkedin fs-6"></i>
                    </a>
                    <a href="{{ $datafooter->link_facebook ?? '#' }}" class="social-icon">
                        <i class="bi bi-facebook fs-6"></i>
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <h5 class="fw-bold text-dark-blue mb-4">Contact us</h5>
                <div class="d-flex flex-column gap-3">
                    <div class="d-flex gap-3 align-items-start">
                        <i class="bi bi-geo-alt-fill text-grey-soft mt-1"></i>
                        <p class="text-grey-soft small m-0">
                            {{ $datafooter->alamat ?? 'Alamat belum tersedia' }}
                        </p>
                    </div>
                    <div class="d-flex gap-3 align-items-center">
                        <i class="bi bi-envelope text-grey-soft"></i>
                        <p class="text-grey-soft small m-0">
                            {{ $datafooter->email ?? 'email@example.com' }}
                        </p>
                    </div>
                    <div class="d-flex gap-3 align-items-center">
                        <i class="bi bi-whatsapp text-grey-soft"></i>
                        <p class="text-grey-soft small m-0">
                            {{ $datafooter->wa ?? '-' }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-4">
                <h5 class="fw-bold text-dark-blue mb-4">Lokasi</h5>
                <div>
                    <a href="{{ $datafooter->link_gmaps ?? '#' }}" target="_blank" rel="noopener noreferrer" class="text-decoration-none">
                        <button class="btn-gmaps">
                            View GMaps
                        </button>
                    </a>
                </div>
            </div>

        </div>

        <hr class="mt-5 mb-4 border-secondary opacity-25" />
        <p class="text-center text-grey-soft small mb-4 pb-4">
            Copyright © {{ date('Y') }} | B University
        </p>
    </div>
</footer>