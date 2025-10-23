@extends('layouts.app')

@section('title', 'Layanan Kami')

@section('content')
<!-- Hero Section -->
<section class="page-hero-layanan">
    <div class="hero-overlay-layanan">
        <div class="container">
            <h1 class="hero-title-layanan">LAYANAN KAMI</h1>
        </div>
    </div>
</section>

<!-- Layanan Cards Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            <!-- Studi S1 - Bachelor -->
            <div class="col-md-4">
                <div class="layanan-card-box">
                    <div class="layanan-image-container">
                        <img src="/images/layanankami/studi-s1.png" alt="Studi S1 - Bachelor">
                        <div class="layanan-image-overlay">
                            <h3 class="layanan-image-title">Studi S1 - Bachelor</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Studi S2 - Master -->
            <div class="col-md-4">
                <div class="layanan-card-box">
                    <div class="layanan-image-container">
                        <img src="/images/layanankami/bachelor.png" alt="Studi S2 - Master">
                        <div class="layanan-image-overlay">
                            <h3 class="layanan-image-title">Studi S2 - Master</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kursus Bahasa Asing -->
            <div class="col-md-4">
                <div class="layanan-card-box">
                    <div class="layanan-image-container">
                        <img src="/images/layanankami/kursus.png" alt="Kursus Bahasa Asing">
                        <div class="layanan-image-overlay">
                            <h3 class="layanan-image-title">Kursus Bahasa Asing</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Studi S3 - Ph.D -->
            <div class="col-md-4">
                <div class="layanan-card-box">
                    <div class="layanan-image-container">
                        <img src="/images/layanankami/phd.jpg" alt="Studi S3 - Ph.D">
                        <div class="layanan-image-overlay">
                            <h3 class="layanan-image-title">Studi S3 - Ph.D</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Study Tour -->
            <div class="col-md-4">
                <div class="layanan-card-box">
                    <div class="layanan-image-container">
                        <img src="/images/layanankami/studytour.png" alt="Study Tour">
                        <div class="layanan-image-overlay">
                            <h3 class="layanan-image-title">Study Tour</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ausbildung -->
            <div class="col-md-4">
                <div class="layanan-card-box">
                    <div class="layanan-image-container">
                        <img src="/images/layanankami/ausbildung.jpg" alt="Ausbildung">
                        <div class="layanan-image-overlay">
                            <h3 class="layanan-image-title">Ausbildung</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hubungi Kami Section -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title-contact text-center mb-5">HUBUNGI KAMI</h2>
        <h3 class="text-center mb-4 contact-subtitle">KANTOR PUSAT</h3>
        
        <div class="contact-info text-center">
            <p>Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
            <p>Phone : (+62 21) 398 38706 - Fax: (+62 21) 316 1701</p>
            <p>Hotline: +6281519040071 / +62811998167</p>
        </div>

        <div class="text-center mt-5">
            <button class="btn btn-lokasi-contact">LOKASI KAMI</button>
            <button class="btn btn-kirim-contact">KIRIM PESAN</button>
        </div>
    </div>
</section>

<style>
/* Hero Section */
.page-hero-layanan {
    background-image: linear-gradient(90deg,
        rgba(74,26,92,0.65) 0%,
        rgba(74,26,92,0.45) 30%,
        rgba(74,26,92,0.20) 55%,
        rgba(74,26,92,0) 100%),
        url('/images/layanankami/layanan.png');
    background-size: cover;
    background-position: center;
    height: 500px;
    display: flex;
    align-items: center;
    position: relative;
}

.hero-overlay-layanan {
    width: 100%;
}

.hero-title-layanan {
    color: white;
    font-size: 48px;
    font-weight: 700;
    letter-spacing: 2px;
    margin: 0;
}

/* Layanan Cards */

/* Layanan Cards (updated to match .service-card design) */
.layanan-card-box {
    position: relative;
    overflow: hidden;
    border-radius: 12px;
    box-shadow: 0 8px 26px rgba(0,0,0,0.10);
    transition: transform 0.28s ease, box-shadow 0.28s ease;
    min-height: 180px;
    background: #fff; /* fallback while image loads */
}

.layanan-image-container img {
    display: block;
    width: 100%;
    height: 220px;
    object-fit: cover;
    transition: transform 0.6s ease;
    -webkit-backface-visibility: hidden;
}

/* static half-gradient overlay (left colored, right transparent) */
.layanan-card-box::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 50%; /* hanya setengah card */
    pointer-events: none;
    z-index: 2; /* di bawah konten teks */
    background: linear-gradient(90deg,
        rgba(74,26,92,0.42) 0%,
        rgba(74,26,92,0.30) 35%,
        rgba(74,26,92,0.12) 60%,
        rgba(74,26,92,0) 100%);
    /* tidak gunakan mix-blend-mode sehingga tidak mempengaruhi warna teks */
}

/* pastikan overlay teks berada di atas pseudo-gradient */
.layanan-image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: flex;
    align-items: flex-end;
    padding: 25px;
    z-index: 6; /* lebih tinggi dari ::before */
}

/* teks card tetap murni putih tanpa gradient */
.layanan-image-overlay .layanan-image-title {
    position: relative;
    z-index: 7;
    color: #fff;
    -webkit-text-fill-color: #fff;
    text-shadow: 0 6px 18px rgba(0,0,0,0.45);
}

/* keep gradient static on hover; only lift card + scale image */
.layanan-card-box:hover {
    transform: translateY(-6px);
    box-shadow: 0 18px 46px rgba(0,0,0,0.18);
}

.layanan-card-box:hover .layanan-image-container img {
    transform: scale(1.04);
}

/* responsiveness */
@media (max-width: 767px) {
    .layanan-card-box::after {
        left: 10px;
        top: 12px;
        bottom: 72px; /* title-bg height 48px + gap */
        width: 3.5px;
    }

    .layanan-image-container img {
        height: 200px;
    }

    .layanan-image-overlay::before {
        height: 48px;
        bottom: 8px;
    }
}

/* Contact Section */
.section-title-contact {
    color: #2e5a8f;
    font-size: 36px;
    font-weight: 700;
    letter-spacing: 1px;
}

.contact-subtitle {
    color: #2e5a8f;
    font-weight: 600;
    font-size: 20px;
}

.contact-info {
    color: #555;
    line-height: 2;
    font-size: 15px;
}

.contact-info p {
    margin-bottom: 8px;
}

/* Buttons */
.btn-lokasi-contact {
    background: linear-gradient(90deg, #4a1a5c 0%, #2e5a8f 100%);
    color: white;
    border: none;
    padding: 14px 45px;
    border-radius: 30px;
    margin: 10px;
    font-weight: 600;
    font-size: 16px;
    transition: all 0.3s ease;
    cursor: pointer;
}

.btn-lokasi-contact:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(74, 26, 92, 0.4);
}

.btn-kirim-contact {
    background-color: transparent;
    color: #2e5a8f;
    border: 2px solid #2e5a8f;
    padding: 14px 45px;
    border-radius: 30px;
    margin: 10px;
    font-weight: 600;
    font-size: 16px;
    transition: all 0.3s ease;
    cursor: pointer;
}

.btn-kirim-contact:hover {
    background: #2e5a8f;
    color: white;
    transform: translateY(-2px);
}

/* Background Section */
.bg-light {
    background-color: #f8f9fa !important;
}

/* Responsive */
@media (max-width: 768px) {
    .hero-title-layanan {
        font-size: 36px;
    }
    
    .page-hero-layanan {
        height: 300px;
    }
    
    .layanan-card-box {
        height: 240px;
        margin-bottom: 20px;
    }
    
    .layanan-image-title {
        font-size: 18px;
    }
    
    .btn-lokasi-contact,
    .btn-kirim-contact {
        display: block;
        width: 100%;
        max-width: 320px;
        margin: 10px auto;
    }
    
    .section-title-contact {
        font-size: 28px;
    }
}

@media (max-width: 576px) {
    .hero-title-layanan {
        font-size: 28px;
    }
    
    .layanan-card-box {
        height: 220px;
    }
    
    .contact-info {
        font-size: 14px;
    }
}
</style>
@endsection