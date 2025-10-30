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

        /* layout helpers to create left/center/right zones */
        /* use an inner wrapper so we don't override Bootstrap's .container globally */
        .navbar-custom .navbar-inner {
            display: flex;
            align-items: center;
            justify-content: space-between; /* separate left and right zones */
            gap: 8px;
            width: 100%;
            padding-left: 12px; /* smaller inset so items are closer to edge */
            padding-right: 12px; /* smaller inset */
        }

        .navbar-custom .collapse.navbar-collapse {
            display: flex;
            align-items: center;
            flex: 1 1 auto;
            gap: 16px;
            justify-content: space-between;
        }

        /* center area (nav list) — fills available space and centers nav items between brand and right controls */
        .nav-center {
            flex: 1 1 auto; /* take remaining space */
            display: flex;
            justify-content: center; /* center the nav items */
            min-width: 0;
            margin-left: 18px; /* tambahkan gap antara brand dan opsi navbar */
            gap: 5px;
        }

        /* ensure the brand and right controls keep their intrinsic sizes */
        .navbar-custom .navbar-brand {
            font-size: 20px; /* increased to match sample */
            font-weight: 700;
            color: white !important;
            letter-spacing: 0.8px;
            margin-right: 18px; /* lebih besar gap ke opsi navbar */
            display: flex;
            align-items: center;
            gap: 8px; /* bring logo and title closer */
            white-space: nowrap;
            flex: 0 0 auto; /* keep brand at intrinsic size */
        }

        /* ensure brand logo scales nicely */
        .navbar-custom .navbar-brand img {
            height: 44px; /* larger logo but proportional to header */
            width: auto;
            display: block;
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 36px; /* increase gap between search and button */
            justify-content: flex-end;
            flex: 0 0 auto; /* keep right controls from growing */
        }

        .navbar-custom .navbar-nav {
            align-items: center;
            gap: 13px; /* tighten gap between nav items so they appear closer */
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
            padding: 7px 4px !important;
            font-weight: 500;
            transition: all 0.22s;
            position: relative;
            border-bottom: 3px solid transparent;
            font-size: 16px;
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
            gap: 8px;
            background: transparent;
            padding: 4px 8px; /* smaller padding for a flatter box */
            border-radius: 4px; /* subtle rectangle corners */
            border-bottom: 2px solid rgba(255,255,255,0.22);
            width: 260px; /* narrower so it doesn't push items apart */
            transition: border-color 0.15s, background-color 0.15s;
            min-height: 36px;
            flex: 0 0 auto; /* keep search at intrinsic width */
            margin-right: 18px; /* gap antara searchbar dan tombol daftar */
        }

        /* make the left icon look like it's inside the box, keep it flat */
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
            font-size: 17px;
        }

        /* input should be visually flat (no inner borders) */
        .navbar-custom .search-wrapper .form-control {
            background: transparent;
            border: none;
            box-shadow: none;
            padding: 0;
            color: rgba(255,255,255,0.95);
        }

        .navbar-custom .search-wrapper .form-control:focus {
            outline: none;
            box-shadow: none;
        }

        /* stronger underline on focus */
        .navbar-custom .search-wrapper:focus-within {
            border-bottom-color: rgba(255,255,255,0.95);
        }

        .navbar-custom .btn-daftar {
            /* Blue pill with subtle inner dark gradient to mimic provided design */
            background: linear-gradient(180deg, #3b7bb3 0%, #265f94 100%);
            color: #ffffff;
            padding: 8px 20px;
            border-radius: 999px;
            border: 1.5px solid rgba(255,255,255,0.85); /* brighter border like sample */
            font-weight: 700;
            transition: transform 0.18s, box-shadow 0.18s, background 0.18s;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 0.6px;
            white-space: nowrap;
            box-shadow: inset 0 -8px 14px rgba(0,0,0,0.22), 0 6px 18px rgba(0,0,0,0.12);
        }

        .navbar-custom .btn-daftar:hover {
            transform: translateY(-3px);
            box-shadow: inset 0 -6px 12px rgba(0,0,0,0.28), 0 12px 30px rgba(0,0,0,0.18);
            /* small brighten on hover */
            background: linear-gradient(180deg, #4a89c8 0%, #2e6faa 100%);
        }

        @media (max-width: 1200px) {
            .navbar-custom .navbar-nav {
                gap: 14px;
                flex-wrap: wrap; /* allow wrapping on smaller screens */
            }
            .navbar-custom .search-wrapper {
                width: 100%;
                max-width: 250px;
                margin-right: 0;
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
            .nav-right {
                gap: 12px; /* reduce gap on medium/smaller screens to avoid overflow */
            }
        }

          .search-box::placeholder {
              color: rgba(255, 255, 255, 0.6);
              font-size: 15px;

          }

        /* Hero Section */
        .hero-section {
            position: relative;
            min-height: 1000px; 
            max-width: 100%;/* reduced to match screenshot height */
            display: flex;
            align-items: center; /* vertically center the hero box */
            padding: 40px 0; /* spacing above/below the box */
            background-size: cover;
            background-position: center;
            background-image: url('{{ asset("images/hero/hero-background.jpg") }}');
            background-repeat: no-repeat
        }

        /* hero box wrapper */
        .hero-box-content {
            display: flex;
            align-items: center;
            justify-content: space-between; /* text left, button right like the image */
            gap: 20px; /* small gap between text and button area */
            /* tune padding so heading sits closer to left edge and button near right */
            padding: 28px 44px;
            /* semi-transparent gradient box matching navbar hues */
            background: linear-gradient(90deg, rgba(74,26,92,0.92) 0%, rgba(46,90,143,0.78) 50%, rgba(91,141,184,0.65) 100%);
            color: #fff;
            width: 100%;
            max-width: 900px; /* slightly wider to better match screenshot proportions */
            margin: 0 auto; /* center the box inside hero-content */
            border-radius: 0px; /* ubah jadi kotak */
            box-shadow: 0 10px 30px rgba(0,0,0,0.25);
            backdrop-filter: none; /* avoid blurring background image by default */
    
        }

        /* thin vertical white bar at the left of the heading */
        .hero-decor {
            width: 2px; /* pertipis garis dekoratif */
            height: 96px;
            background: rgba(255,255,255,0.9);
            border-radius: 3px;
            margin-right: 18px;
            flex: 0 0 auto;
        }

        .hero-box-content h2 {
            margin: 0;
            flex: 0 1 auto;
            font-family: 'Poppins', sans-serif; /* gunakan font global agar konsisten */
            font-size: 25px; /* lebih kecil dan proporsional */
            font-weight: 600; /* tidak terlalu tebal */
            line-height: 1.25; /* spasi baris yang sedikit lebih longgar */
            letter-spacing: 0.2px; /* kurangi jarak huruf */
            text-transform: none; /* gunakan casing natural agar tampil mirip desain */
            text-align: left;
            max-width: 560px; /* keep line length reasonable */
            color: #ffffff; /* pastikan kontras tetap baik di atas gradien */
        }

        .hero-box-content .btn-selengkapnya {
            flex-shrink: 0;
            display: inline-flex;
            align-items: center;
            gap: 20px;
            background-color: transparent;
            border: 1px solid rgba(255,255,255,0.9); /* garis tombol dipertipis */
            color: white;
            padding: 14px 38px;
            border-radius: 999px;
            font-weight: 600;
            transition: all 0.28s;
            white-space: nowrap;
        }

        .hero-box-content .btn-selengkapnya:hover {
            background-color: rgba(255,255,255,0.95);
            color: #4a1a5c;
            transform: translateY(-3px);
        }

        /* small tweak for the chevron icon inside the hero button */
        .btn-selengkapnya .bi {
            font-size: 17px;
            opacity: 0.95;
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
            font-size: 24px;
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
            font-size: 24px;  
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
            font-size: 17px;
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
            font-size: 24px;
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
            font-size: 16px;
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
            font-size: 32px;
            font-weight: 700;
            color: #4a1a5c;
            margin-bottom: 10px;
        }

        .contact-subtitle {
            font-size: 21px;
            font-weight: 600;
            color: #2e5a8f;
            margin-bottom: 30px;
        }

        .contact-info {
            font-size: 16px;
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
                font-size: 19px;
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
        }
    </style>

    @yield('styles')
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <div class="navbar-inner">
                <!-- Left zone: Brand + Toggler + Nav options (collapsible) -->
                <div class="d-flex align-items-center nav-left">
                    <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                        <img src="{{ asset('images/navbar/logo_klug.png') }}" alt="Inaklug logo" class="me-2" loading="lazy">
                        <span>Inaklug</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="nav-center">
                            <ul class="navbar-nav align-items-center">
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
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Right zone: Search + Daftar On-line -->
                <div class="nav-right d-flex align-items-center">
                    <div class="search-wrapper">
                        <span class="input-group-text"><i class="bi bi-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control border-0 bg-transparent search-box" placeholder="Ketik pencarian" aria-label="Ketik pencarian">
                    </div>
                    <button class="btn btn-daftar">DAFTAR ON-LINE</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
            <div class="hero-box-content">
                <div class="d-flex align-items-start">
                    <div class="hero-decor" aria-hidden="true"></div>
                    <h2>INGIN KULIAH DAN BERKARIR<br>DI LUAR NEGERI ?</h2>
                </div>
                <button class="btn btn-selengkapnya">SELENGKAPNYA <i class="bi bi-chevron-down"></i></button>
            </div>
        </div>
    </section>

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