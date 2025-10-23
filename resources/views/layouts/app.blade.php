<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inaklug - @yield('title')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Boootstrap Icon --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        /* Navbar Styling */
        .navbar-custom {
            background: linear-gradient(90deg, #4a1a5c 0%, #2e5a8f 50%, #5b8db8 100%);
            padding: 10px 0;
        }

        .navbar-custom .navbar-brand {
            font-size: 1.75rem;
            font-weight: 700;
            color: white !important;
            letter-spacing: 2px;
            margin-right: 1.25rem;
            white-space: nowrap;
        }

        .navbar-custom .navbar-nav {
            align-items: center;
            gap: 1.2rem; /* adjust gap between nav items */
            flex-wrap: nowrap;
            white-space: nowrap;
        }

        .navbar-custom .nav-item {
            display: flex;
            align-items: center;
            margin: 0;
        }

        .navbar-custom .nav-link {
            color: rgba(255, 255, 255, 0.95) !important;
            margin: 0; /* remove extra margins, rely on gap */
            padding: 0.45rem 0.25rem !important;
            font-weight: 500;
            transition: all 0.22s;
            position: relative;
            border-bottom: 3px solid transparent;
            font-size: 1rem;
            white-space: nowrap;
        }

        .navbar-custom .nav-link:hover {
            color: #ffffff !important;
            border-bottom-color: rgba(255, 255, 255, 0.45);
        }

        .navbar-custom .nav-link.active {
            color: #ffffff !important;
            border-bottom-color: #ffffff;
            font-weight: 600;
        }

        .navbar-custom .flex-grow-1 {
            flex: 1 1 auto;
            min-width: 0;
            height: 0; /* invisible spacer */
        }

        .navbar-custom .search-wrapper {
            display: flex;
            align-items: center;
            gap: 10px;
            background: transparent;
            padding: 6px 10px;
            border-radius: 999px;
            border-bottom: 2px solid rgba(255,255,255,0.22);
            width: 260px;
            transition: border-color 0.15s, background-color 0.15s;
            min-height: 36px;
        }

       .navbar-custom .search-wrapper .input-group-text {
           background: transparent;
           border: none;
           padding: 0;
           margin: 0;
           color: rgba(255,255,255,0.95);
           display: flex;
           align-items: center;
        }

       .navbar-custom .search-wrapper .bi-search {
            font-size: 1.05rem;
        }

        .navbar-custom .btn-daftar {
             background-color: rgba(255,255,255,0.12);
             color: white;
             padding: 8px 22px;
             border-radius: 999px;
             border: 1px solid rgba(255,255,255,0.08);
             font-weight: 700;
             transition: transform 0.18s, background-color 0.18s;
             text-transform: uppercase;
             font-size: 0.86rem;
             letter-spacing: 0.6px;
             white-space: nowrap;
        }

        .navbar-custom .btn-daftar:hover {
            background-color: #ffffff;
            color: #4a1a5c;
            transform: translateY(-3px);
            box-shadow: 0 6px 18px rgba(0,0,0,0.15);
        }

        @media (max-width: 992px) {
            .navbar-custom .navbar-nav {
                gap: 0.9rem;
                flex-wrap: wrap; /* allow wrapping on smaller screens */
            }
            .navbar-custom .flex-grow-1 {
                display: none; /* hide spacer so items stack naturally */
            }
            .navbar-custom .nav-item .search-box {
                width: 100%;
                margin: 8px 0;
            }
            .navbar-custom .btn-daftar {
                padding: 8px 18px;
                width: 100%;
            }
        }

        .search-box::placeholder {
           color: rgba(255, 255, 255, 0.6);
           font-size: 0.95rem;

        }

        /* Hero Section */
        .hero-section {
            position: relative;
            min-height: 1000px;
            display: flex;
            align-items: flex-end;
            padding-bottom: 50px;
            background-size: cover;
            background-position: center;
            background-image: url('{{ asset("images/hero/hero-background.jpg") }}');
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(74, 26, 92, 0.25) 0%, rgba(46, 90, 143, 0.2) 100%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 600px;
        }

        .hero-box {
            background: linear-gradient(135deg, rgba(74, 26, 92, 0.92) 0%, rgba(46, 90, 143, 0.92) 100%);
            padding: 35px 40px;
            border-radius: 10px;
            color: white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .hero-box-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
        }

        .hero-box-content h2 {
            margin: 0;
            flex: 1;
            font-size: 1.4rem;
            font-weight: 600;
            line-height: 1.5;
        }

        .hero-box-content .btn-selengkapnya {
            flex-shrink: 0;
            background-color: transparent;
            border: 2px solid white;
            color: white;
            padding: 10px 30px;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s;
            white-space: nowrap;
        }

        .hero-box-content .btn-selengkapnya:hover {
            background-color: white;
            color: #4a1a5c;
        }

        /* Footer */
        .footer-custom {
            background: linear-gradient(90deg, #4a1a5c 0%, #2e5a8f 100%);
            color: white;
            padding: 20px 0;
            margin-top: 50px;
        }

        /* Article Section */
        .section-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #333;
            text-align: center;
            margin: 60px 0 40px;
            letter-spacing: 1px;
        }

        .section-content {
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
            color: #555;
            font-size: 1.5rem;  
            line-height: 1.8;
            margin-bottom: 60px;
        }

        /* Service Cards (new styling) */
        .service-card {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 8px 26px rgba(0,0,0,0.10);
            transition: transform 0.28s ease, box-shadow 0.28s ease;
            min-height: 180px;
            background: #fff; /* fallback while image loads */
        }

        .service-card img {
            display: block;
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: transform 0.6s ease;
            -webkit-backface-visibility: hidden;
        }

        /* static half-gradient overlay (left colored, right transparent) */
        .service-card::before {
            content: "";
            position: absolute;
            inset: 0;
            pointer-events: none;
            z-index: 2;
            background: linear-gradient(90deg,
                rgba(74,26,92,0.42) 0%,
                rgba(74,26,92,0.30) 35%,
                rgba(74,26,92,0.12) 48%,
                rgba(255,255,255,0) 52%,
                rgba(255,255,255,0) 100%);
        }

        /* short vertical white bar at left-top corner */
        .service-card::after {
            content: "";
            position: absolute;
            left: 14px;
            top: 14px;
            bottom: 86px; /* berhenti di atas area title (title-bg height 56px + gap) */
            width: 4px;
            background: rgba(255,255,255,0.22);
            border-radius: 3px;
            pointer-events: none;
            z-index: 4;
            box-shadow: 0 2px 6px rgba(0,0,0,0.08);
        }

        /* bottom-left half-gradient block behind title */
        .service-card .title-bg {
            position: absolute;
            left: 0;
            bottom: 10px;
            z-index: 3;
            width: 46%;
            max-width: 280px;
            height: 56px;
            background: linear-gradient(90deg, rgba(74,26,92,0.95) 0%, rgba(74,26,92,0.45) 65%, rgba(74,26,92,0.12) 100%);
            border-top-right-radius: 18px;
            border-bottom-right-radius: 18px;
            box-shadow: 0 8px 22px rgba(74,26,92,0.08);
            pointer-events: none;
        }

        .service-card .service-card-overlay {
            position: absolute;
            left: 14px;
            bottom: 16px;
            z-index: 5;
            color: #fff;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .service-card-title {
            font-size: 1.05rem;
            font-weight: 700;
            margin: 0;
            color: #fff;
            text-shadow: 0 6px 18px rgba(0,0,0,0.45);
            letter-spacing: 0.2px;
            padding-left: 8px;
        }

        /* keep gradient static on hover; only lift card + scale image */
        .service-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 46px rgba(0,0,0,0.18);
        }

        .service-card:hover img {
            transform: scale(1.04);
        }

        /* responsiveness */
        @media (max-width: 767px) {
            .service-card::after {
                left: 10px;
                top: 12px;
                bottom: 72px; /* title-bg height 48px + gap */
                width: 3.5px;
            }
        }

        /* Partner Logos */
        .partner-section {
            background-color: #f8f9fa;
            padding: 40px 0;
            margin: 60px 0;
        }

        .partner-logos {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 40px;
        }

        .partner-logo {
            height: 200px;
            max-width: 220px;
            object-fit: contain;
            opacity: 0.85;
            transition: all 0.3s;
            border: none !important;  
            box-shadow: none !important;  
            background: transparent !important;  
            padding: 0;
        }

        .partner-logo:hover {
        opacity: 1;
        transform: scale(1.05);
        }

        /* Consultation Box */
        .consultation-box {
            background: linear-gradient(135deg, #4a1a5c 0%, #2e5a8f 100%);
            padding: 40px;
            border-radius: 10px;
            color: white;
            text-align: center;
            margin: 60px 0;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .consultation-box h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .consultation-box p {
            margin-bottom: 20px;
            opacity: 0.9;
        }

        .consultation-box .btn {
            background-color: transparent;
            border: 2px solid white;
            color: white;
            padding: 10px 35px;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .consultation-box .btn:hover {
            background-color: white;
            color: #4a1a5c;
        }

        /* Article Grid */
        .article-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            margin-bottom: 60px;
        }

        .article-item {
            text-decoration: none;
            color: inherit;
            transition: all 0.3s;
        }

        .article-item:hover {
            transform: translateY(-5px);
        }

        .article-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .article-title {
            font-size: 1rem;
            font-weight: 600;
            color: #333;
            line-height: 1.5;
            text-align: center;
        }

        .btn-artikel-lainnya {
            background-color: transparent;
            border: 2px solid #2e5a8f;
            color: #2e5a8f;
            padding: 10px 40px;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s;
            display: block;
            margin: 40px auto;
            width: fit-content;
        }

        .btn-artikel-lainnya:hover {
            background-color: #2e5a8f;
            color: white;
        }

        /* Contact Section */
        .contact-section {
            padding: 80px 0;
        }

        .contact-title {
            font-size: 2rem;
            font-weight: 700;
            color: #4a1a5c;
            margin-bottom: 10px;
        }

        .contact-subtitle {
            font-size: 1.3rem;
            font-weight: 600;
            color: #2e5a8f;
            margin-bottom: 30px;
        }

        .contact-info {
            font-size: 1rem;
            color: #555;
            line-height: 2;
        }

        .btn-contact {
            padding: 12px 40px;
            border-radius: 25px;
            font-weight: 600;
            margin: 10px;
            transition: all 0.3s;
        }

        .btn-lokasi {
            background: linear-gradient(90deg, #4a1a5c 0%, #2e5a8f 100%);
            color: white;
            border: none;
        }

        .btn-lokasi:hover {
            background: linear-gradient(90deg, #3a0a4c 0%, #1e4a7f 100%);
            transform: translateY(-3px);
        }

        .btn-kirim {
            background-color: transparent;
            color: #2e5a8f;
            border: 2px solid #2e5a8f;
        }

        .btn-kirim:hover {
            background-color: #2e5a8f;
            color: white;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .article-grid {
                grid-template-columns: 1fr;
            }
            
            .hero-box-content {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .hero-box-content h2 {
                font-size: 1.2rem;
            }
            
            .hero-box-content .btn-selengkapnya {
                margin-top: 15px;
                width: 100%;
            }
            
            .service-card {
                height: 250px;
            }

            .navbar-custom .nav-link {
                margin: 10px 0;
                border-bottom: none;
            }

            .search-box {
                width: 100%;
                margin: 15px 0;
            }
        }
    </style>

    @yield('styles')
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Inaklug</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('tentang-kami') ? 'active' : '' }}" href="{{ route('tentang') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('layanan-kami') ? 'active' : '' }}" href="{{ route('layanan') }}">Layanan Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('artikel') ? 'active' : '' }}" href="{{ route('artikel') }}">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('hubungi-kami') ? 'active' : '' }}" href="{{ route('hubungi') }}">Hubungi Kami</a>
                    </li>
                    <li class="nav-item ms-3">
                        <input type="text" class="form-control search-box" placeholder="Ketik pencarian">
                    </li>
                    <li class="nav-item ms-2">
                        <button class="btn btn-daftar">DAFTAR ON-LINE</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="footer-custom text-center">
        <div class="container">
            <p class="mb-0">Copyright © 2020 - Inaklug Indonesia | Hak cipta dilindungi undang-undang</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>