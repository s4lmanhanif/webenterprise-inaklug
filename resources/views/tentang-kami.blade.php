@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<!-- Hero Section -->
<section class="page-hero">
    <div class="hero-overlay">
        <div class="container">
            <h1 class="hero-title">TENTANG KAMI</h1>
        </div>
    </div>
</section>

<!-- Profile Section -->
    <section class="py-5">
        <div class="container style ">
            <h2 class="section-subtitle">PROFIL</h2>
            <div class="profile-content">
                <p>Didirikan pada tahun 2018, Ini membuktikan bahwa INAKLUG merupakan konsultan pendidikan internasional yang berpengalaman, terbesar, terpercaya dan juga memiliki jam terbang tinggi untuk melayani para anak-anak muda Indonesia untuk menuntut ilmu di berbagai negara maju dunia.</p>
            </div>
        </div>
    </section>

<!-- Visi Misi Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <!-- Visi -->
            <div class="col-md-6 mb-4">
                <div class="visi-misi-card">
                    <div class="visi-misi-image">
                        <img src="/images/tentangkami/visi.png" alt="Visi">
                    </div>
                    <div class="visi-misi-content">
                        <h3 class="visi-misi-title">VISI</h3>
                        <p class="visi-misi-text">Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara internasional untuk menghadapi persaingan di era globalisasi serta membangun karakter pemimpin Indonesia masa depan yang tangguh, mandiri, dan profesional</p>
                    </div>
                </div>
            </div>

            <!-- Misi -->
            <div class="col-md-6 mb-4">
                <div class="visi-misi-card">
                    <div class="visi-misi-image">
                        <img src="/images/tentangkami/misi.png" alt="Misi">
                    </div>
                    <div class="visi-misi-content">
                        <h3 class="visi-misi-title">MISI</h3>
                        <p class="visi-misi-text">Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara internasional untuk menghadapi persaingan di era globalisasi serta membangun karakter pemimpin indonesia masa depan yang tangguh, mandiri, dan profesional.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="{{ route('layanan') }}" class="btn btn-layanan">LAYANAN KAMI</a>
        </div>
    </div>
</section>

<!-- Hubungi Kami Section -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">HUBUNGI KAMI</h2>
        <h3 class="text-center mb-4" style="color: #2e5a8f; font-weight: 600; font-size: 20px;">KANTOR PUSAT</h3>
        
        <div class="contact-info text-center" style="color: #555; line-height: 2; font-size: 15px;">
            <p>Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
            <p>Phone : (+62 21) 398 38706 - Fax: (+62 21) 316 1701</p>
            <p>Hotline: +6281519040071 / +62811998167</p>
        </div>

        <div class="text-center mt-5">
            <button class="btn btn-lokasi-kami">LOKASI KAMI</button>
            <button class="btn btn-kirim-pesan">KIRIM PESAN</button>
        </div>
    </div>
</section>

<style>
/* Hero Section */
.page-hero {
    /* gradien halus dari #4a1a5c di kiri ke transparan ke kanan */
    background-image: linear-gradient(90deg,
        rgba(74,26,92,0.65) 0%,
        rgba(74,26,92,0.45) 30%,
        rgba(74,26,92,0.20) 55%,
        rgba(74,26,92,0) 100%),
        url('/images/layanankami/studytour.png');
    background-size: cover;
    background-position: center;
    height: 500px;
    display: flex;
    align-items: center;
    position: relative;
}

.hero-overlay {
    width: 100%;
}

.hero-title {
    color: white;
    font-size: 48px;
    font-weight: 700;
    letter-spacing: 2px;
    margin: 0;
}

/* Profile Section */
.section-subtitle {
    color: #2e5a8f;
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 30px;
    text-align: left;
}

.profile-content {
    max-width: 900px;
}

.profile-content p {
    color: #555;
    font-size: 16px;
    line-height: 1.8;
}

/* Visi Misi Cards */
.visi-misi-card {
    background: white;
    border-radius: 0;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    height: 100%;
}

.visi-misi-image {
    width: 100%;
    height: 250px;
    overflow: hidden;
}

.visi-misi-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.visi-misi-content {
    padding: 30px;
}

.visi-misi-title {
    color: #2e5a8f;
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 20px;
}

.visi-misi-text {
    color: #555;
    font-size: 15px;
    line-height: 1.8;
    margin-bottom: 0;
}

/* Buttons */
.btn-layanan {
    background: transparent;
    color: #2e5a8f;
    border: 2px solid #2e5a8f;
    padding: 12px 50px;
    border-radius: 25px;
    font-weight: 600;
    font-size: 16px;
    letter-spacing: 1px;
    transition: all 0.3s ease;
}

.btn-layanan:hover {
    background: #2e5a8f;
    color: white;
    text-decoration: none;
}

.btn-lokasi-kami {
    background: linear-gradient(90deg, #4a1a5c 0%, #2e5a8f 100%);
    color: white;
    border: none;
    padding: 12px 40px;
    border-radius: 25px;
    margin: 10px;
    font-weight: 600;
    font-size: 16px;
    transition: all 0.3s ease;
}

.btn-lokasi-kami:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(74, 26, 92, 0.3);
}

.btn-kirim-pesan {
    background-color: transparent;
    color: #2e5a8f;
    border: 2px solid #2e5a8f;
    padding: 12px 40px;
    border-radius: 25px;
    margin: 10px;
    font-weight: 600;
    font-size: 16px;
    transition: all 0.3s ease;
}

.btn-kirim-pesan:hover {
    background: #2e5a8f;
    color: white;
}

/* Section Title */
.section-title {
    color: #2e5a8f;
    font-size: 32px;
    font-weight: 700;
    letter-spacing: 1px;
}

/* Responsive */
@media (max-width: 768px) {
    .hero-title {
        font-size: 36px;
    }
    
    .page-hero {
        height: 250px;
    }
    
    .visi-misi-image {
        height: 200px;
    }
    
    .btn-lokasi-kami,
    .btn-kirim-pesan {
        display: block;
        width: 100%;
        max-width: 300px;
        margin: 10px auto;
    }
}
</style>
@endsection