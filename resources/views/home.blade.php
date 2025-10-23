@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<!-- Hero Section with Building Background -->
<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="hero-content">
                    <div class="hero-box">
                        <h2>INGIN KULIAH DAN BERKARIR<br>DI LUAR NEGERI ?</h2>
                        <button class="btn btn-selengkapnya">SELENGKAPNYA ▼</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tentang Kami Section -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title">TENTANG KAMI</h2>
        <div class="section-content">
            <p>INAKLUG adalah Konsultan Pendidikan Internasional di Indonesia yang sudah memberbangkatkan lebih dari 3000 mahasiswa Indonesia yang ingin kuliah, perjalanan wisata dan bekerja di negara maju di dunia.</p>
        </div>
    </div>
</section>

<!-- Layanan Kami Section -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title">LAYANAN KAMI</h2>
        
        <div class="row">
            <!-- Studi S1 - Bachelor -->
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="/images/layanankami/studi-s1.png" alt="Studi S1">
                    <div class="service-card-overlay">
                        <h3 class="service-card-title">Studi S1 - Bachelor</h3>
                    </div>
                </div>
            </div>

            <!-- Studi S2 - Master -->
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="/images/layanankami/bachelor.png" alt="Studi S2">
                    <div class="service-card-overlay">
                        <h3 class="service-card-title">Studi S2 - Master</h3>
                    </div>
                </div>
            </div>

            <!-- Studi S3 - Ph.D -->
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="/images/layanankami/phd.jpg" alt="Studi S3">
                    <div class="service-card-overlay">
                        <h3 class="service-card-title">Studi S3 - Ph.D</h3>
                    </div>
                </div>
            </div>

            <!-- Kursus Bahasa Asing -->
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="/images/layanankami/kursus.png" alt="Kursus Bahasa">
                    <div class="service-card-overlay">
                        <h3 class="service-card-title">Kursus Bahasa Asing</h3>
                    </div>
                </div>
            </div>

            <!-- Study Tour -->
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="/images/layanankami/studytour.png" alt="Study Tour">
                    <div class="service-card-overlay">
                        <h3 class="service-card-title">Study Tour</h3>
                    </div>
                </div>
            </div>

            <!-- Ausbildung -->
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="images/layanankami/ausbildung.jpg" alt="Ausbildung">
                    <div class="service-card-overlay">
                        <h3 class="service-card-title">Ausbildung</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partner Logos Section -->
<section class="partner-section">
    <div class="container">
        <h2 class="section-title">MITRA KAMI</h2>        
        <div class="partner-logos">
            <img src="{{ asset('images/partners/goaviation.png') }}" alt="GoAviation" class="partner-logo">
            <img src="{{ asset('images/partners/st-andrews.png') }}" alt="St. Andrew's College" class="partner-logo">
            <img src="{{ asset('images/partners/ntu-singapore.png') }}" alt="NTU Singapore" class="partner-logo">
            <img src="{{ asset('images/partners/study-group.png') }}" alt="Study Group" class="partner-logo">
        </div>
    </div>
</section>

<!-- Consultation Box -->
<section>
    <div class="container">
        <div class="consultation-box">
            <h3>GRATIS KONSELING STUDI DI LUAR NEGERI !!!</h3>
            <p>Konsultasi sepuas kuliah / bekerja di Luar Negeri</p>
            <button class="btn">MULAI KONSULTASI ▼</button>
        </div>
    </div>
</section>

<!-- Artikel Terbaru Section -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title">ARTIKEL TERBARU</h2>
        
        <div class="article-grid">
            <!-- Article 1 -->
            <a href="#" class="article-item">
                <img src="/images/artikel/studijerman.png" alt="Artikel" class="article-image">
                <p class="article-title">5 Fakta yang Harus Kamu Ketahui Sebelum Studi ke Jerman</p>
            </a>

            <!-- Article 2 -->
            <a href="#" class="article-item">
                <img src="/images/artikel/korona.png" alt="Artikel" class="article-image">
                <p class="article-title">Uni Eropa Menghadapi Virus Korona</p>
            </a>

            <!-- Article 3 -->
            <a href="#" class="article-item">
                <img src="/images/artikel/bahasajerman.png" alt="Artikel" class="article-image">
                <p class="article-title">Belajar Bahasa Jerman Bersama Goethe Institut</p>
            </a>

            <!-- Article 4 -->
            <a href="#" class="article-item">
                <img src="/images/artikel/gatescambride.png" alt="Artikel" class="article-image">
                <p class="article-title">Apa itu Gates Cambridge? Yuk Cari Tahu</p>
            </a>
        </div>

        <button class="btn btn-artikel-lainnya">ARTIKEL LAINNYA</button>
    </div>
</section>

<!-- Hubungi Kami Section -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title">HUBUNGI KAMI</h2>
        <h3 class="text-center mb-4" style="color: #2e5a8f; font-weight: 600;">KANTOR PUSAT</h3>
        
        <div class="text-center" style="color: #555; line-height: 2;">
            <p>Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
            <p>Phone : (+62 21) 398 38706 - Fax: (+62 21) 316 1701</p>
            <p>Hotline: +6281519040071 / +62811998167</p>
        </div>

        <div class="text-center mt-4">
            <button class="btn btn-lokasi btn-contact" style="background: linear-gradient(90deg, #4a1a5c 0%, #2e5a8f 100%); color: white; border: none; padding: 12px 40px; border-radius: 25px; margin: 10px; font-weight: 600;">LOKASI KAMI</button>
            <button class="btn btn-kirim btn-contact" style="background-color: transparent; color: #2e5a8f; border: 2px solid #2e5a8f; padding: 12px 40px; border-radius: 25px; margin: 10px; font-weight: 600;">KIRIM PESAN</button>
        </div>
    </div>
</section>
@endsection