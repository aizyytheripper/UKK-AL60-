<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aspirasi - SMKN 4 Tangerang | EDURAV</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4F46E5;
            --secondary-color: #818CF8;
            --accent-color: #FACC15;
            --text-main: #1F2937;
            --text-light: #6B7280;
            --bg-color: #F9FAFB;
        }

        body { 
            background-color: var(--bg-color); 
            color: var(--text-main); 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            overflow-x: hidden;
        }

        /* Glassmorphism Navbar */
        .navbar-custom { 
            background: rgba(255, 255, 255, 0.85); 
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            padding: 15px 0;
            transition: all 0.3s ease;
        }
        
        .navbar-brand { 
            font-weight: 800; 
            font-size: 24px; 
            color: var(--primary-color);
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .navbar-brand img {
            height: 40px;
            width: auto;
            border-radius: 8px;
        }

        /* Modern Gradient Buttons */
        .btn-custom-outline {
            color: var(--primary-color);
            background: transparent;
            border: 2px solid var(--primary-color);
            border-radius: 50px;
            padding: 10px 24px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-custom-outline:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(79, 70, 229, 0.2);
        }

        .btn-custom-solid {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            border-radius: 50px;
            padding: 10px 24px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-custom-solid:hover {
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(79, 70, 229, 0.3);
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
        }

        /* Hero Section with abstract shapes */
        .hero-section {
            padding: 120px 0 80px;
            position: relative;
            z-index: 1;
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 24px;
            background: linear-gradient(to right, #1F2937, var(--primary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            color: var(--text-light);
            margin-bottom: 40px;
            line-height: 1.6;
            max-width: 600px;
        }
        
        /* Decorative Blobs */
        .blob-1 {
            position: absolute;
            top: -10%;
            right: -5%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(129, 140, 248, 0.2) 0%, rgba(255,255,255,0) 70%);
            z-index: -1;
            border-radius: 50%;
        }

        .blob-2 {
            position: absolute;
            bottom: -20%;
            left: -10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(250, 204, 21, 0.15) 0%, rgba(255,255,255,0) 70%);
            z-index: -1;
            border-radius: 50%;
        }

        /* Feature Cards */
        .feature-card { 
            background: white; 
            border: none; 
            border-radius: 20px; 
            padding: 40px 30px;
            height: 100%;
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(79, 70, 229, 0.1);
        }
        
        .feature-card:hover::before {
            transform: scaleX(1);
        }

        .icon-box {
            width: 60px;
            height: 60px;
            border-radius: 15px;
            background: rgba(79, 70, 229, 0.1);
            color: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 24px;
            transition: all 0.3s ease;
        }

        .feature-card:hover .icon-box {
            background: var(--primary-color);
            color: white;
            transform: rotate(5deg) scale(1.1);
        }

        .feature-card h3 { 
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .feature-card p {
            color: var(--text-light);
            line-height: 1.6;
            margin: 0;
        }

        /* Info Section */
        .info-section {
            padding: 100px 0;
            background: white;
            position: relative;
        }

        .info-title {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 30px;
            position: relative;
            display: inline-block;
        }

        .info-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: var(--accent-color);
            border-radius: 2px;
        }

        .benefit-list {
            list-style: none;
            padding: 0;
        }
        
        .benefit-list li {
            position: relative;
            padding-left: 35px;
            margin-bottom: 16px;
            font-size: 1.1rem;
            color: var(--text-main);
        }

        .benefit-list li::before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 2px;
            color: var(--primary-color);
            background: rgba(79, 70, 229, 0.1);
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }

        /* Footer */
        footer { 
            background: #111827; 
            color: white;
            padding: 60px 0 30px;
            position: relative;
        }
        
        .footer-brand {
            font-size: 1.5rem;
            font-weight: 800;
            color: white;
            margin-bottom: 20px;
            display: inline-block;
        }

        .footer-text {
            color: #9CA3AF;
            line-height: 1.6;
        }

        .footer-divider {
            height: 1px;
            background: rgba(255,255,255,0.1);
            margin: 30px 0;
        }

        .footer-bottom {
            color: #6B7280;
            font-size: 0.9rem;
        }
        
        /* Floating Animation */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        
        .hero-image {
            animation: float 6s ease-in-out infinite;
            max-width: 100%;
            height: auto;
            filter: drop-shadow(0 20px 30px rgba(0,0,0,0.1));
        }

        /* Responsive typography */
        @media (max-width: 768px) {
            .hero-title { font-size: 2.5rem; }
            .hero-section { padding: 100px 0 60px; text-align: center; }
            .hero-subtitle { margin: 0 auto 30px; }
            .action-buttons { justify-content: center; }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/edurav-logo.png') }}" alt="EDURAV Logo">
                EDURAV
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <div class="d-flex gap-3 mt-3 mt-lg-0">
                    <a href="{{ url('/login/siswa') }}" class="btn btn-custom-outline">
                        <i class="fa-solid fa-user-graduate me-2"></i>Login Siswa
                    </a>
                    <a href="{{ url('/login/admin') }}" class="btn btn-custom-solid">
                        <i class="fa-solid fa-shield-halved me-2"></i>Login Admin
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="blob-1"></div>
        <div class="blob-2"></div>
        
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0 mt-5 mt-lg-0">
                    <span class="badge bg-primary bg-opacity-10 text-primary mb-3 px-3 py-2 rounded-pill font-monospace">Sistem Aspirasi Digital</span>
                    <h1 class="hero-title">Suara Anda, Kemajuan Kita Bersama.</h1>
                    <p class="hero-subtitle">Sampaikan aspirasi, kritik, dan saran untuk SMKN 4 Tangerang menjadi lebih baik. Transparan, cepat, dan berdampak nyata bagi lingkungan sekolah kita.</p>
                    
                    <div class="action-buttons d-flex gap-3 flex-wrap">
                        <a href="{{ url('/login/siswa') }}" class="btn btn-custom-solid btn-lg">
                            Mulai Suarakan <i class="fa-solid fa-arrow-right ms-2"></i>
                        </a>
                        <a href="#tentang" class="btn btn-custom-outline btn-lg">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('images/edurav-logo.png') }}" alt="Hero Illustration" class="hero-image" style="max-height: 400px; width: auto; object-fit: contain;">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="tentang" class="py-5" style="background: #ffffff; position: relative;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold" style="font-size: 2rem;">Pilar Utama Kami</h2>
                <p class="text-muted">Landasan Sistem Aspirasi EDURAV</p>
            </div>
            
            <div class="row g-4">
                <!-- Visi -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="icon-box">
                            <i class="fa-solid fa-eye"></i>
                        </div>
                        <h3>Visi</h3>
                        <p>Mewujudkan lingkungan sekolah yang modern, nyaman, aman, dan mendukung penuh aktivitas pembelajaran siswa secara inklusif.</p>
                    </div>
                </div>
                
                <!-- Misi -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="icon-box" style="background: rgba(250, 204, 21, 0.1); color: #ca8a04;">
                            <i class="fa-solid fa-bullseye"></i>
                        </div>
                        <h3>Misi</h3>
                        <p>Memberikan wadah digital bagi seluruh elemen siswa untuk menyampaikan aspirasi secara transparan, mudah, dan terstruktur.</p>
                    </div>
                </div>
                
                <!-- Kolaborasi -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="icon-box" style="background: rgba(16, 185, 129, 0.1); color: #059669;">
                            <i class="fa-solid fa-handshake"></i>
                        </div>
                        <h3>Kolaborasi</h3>
                        <p>Membangun sinergi yang kuat antara admin, guru, dan siswa melalui komunikasi aktif untuk membangun sekolah yang lebih baik.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Info Section -->
    <section class="info-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0 order-2 order-lg-1">
                    <div class="position-relative">
                        <div style="background: linear-gradient(135deg, #EEF2FF, #E0E7FF); border-radius: 30px; padding: 40px; position: relative; z-index: 1;">
                            <img src="{{ asset('images/edurav-logo.png') }}" class="img-fluid rounded shadow-sm" alt="Aspirasi Penting" style="mix-blend-mode: multiply; filter: contrast(1.1);">
                        </div>
                        <!-- Decorative background element -->
                        <div style="position: absolute; top: 20px; right: -20px; width: 100%; height: 100%; border: 2px dashed var(--secondary-color); border-radius: 30px; z-index: 0;"></div>
                    </div>
                </div>
                
                <div class="col-lg-6 ps-lg-5 order-1 order-lg-2">
                    <h2 class="info-title">Kenapa Aspirasi Itu Penting?</h2>
                    <p class="text-muted mb-4" style="font-size: 1.1rem; line-height: 1.8;">
                        Aspirasi adalah suara dari siswa untuk menciptakan perubahan positif. 
                        Dengan adanya <strong>EDURAV</strong>, setiap ide, kritik, maupun saran akan tercatat 
                        dan ditindaklanjuti oleh pihak sekolah secara profesional. 
                    </p>
                    <p class="text-muted mb-4" style="font-size: 1.1rem; line-height: 1.8;">
                        Transparansi menjadi kunci agar semua pihak merasa didengar dan dihargai dalam proses pengambilan keputusan. Melalui platform ini, kita bisa:
                    </p>
                    
                    <ul class="benefit-list">
                        <li>Meningkatkan kualitas fasilitas sekolah secara tepat sasaran</li>
                        <li>Menciptakan lingkungan belajar yang lebih nyaman & kondusif</li>
                        <li>Memperkuat budaya komunikasi yang baik antara siswa dan guru</li>
                        <li>Menumbuhkan rasa kepemilikan dan kepedulian terhadap sekolah</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center text-lg-start">
        <div class="container">
            <div class="row align-items-center mb-4">
                <div class="col-lg-6 text-center text-lg-start mb-4 mb-lg-0">
                    <a href="#" class="footer-brand text-decoration-none d-flex align-items-center justify-content-center justify-content-lg-start">
                        <img src="{{ asset('images/edurav-logo.png') }}" alt="Logo" height="30" class="me-2 rounded bg-white p-1">
                        EDURAV
                    </a>
                    <p class="footer-text mb-0 mt-3 mx-auto mx-lg-0" style="max-width: 400px;">
                        Sistem Aspirasi SMKN 4 Tangerang. Wadah inovatif untuk menampung ide, kritik, dan saran siswa demi kemajuan dan masa depan sekolah.
                    </p>
                </div>
                <div class="col-lg-6 text-center text-lg-end">
                    <div class="d-flex justify-content-center justify-content-lg-end gap-3 mb-3 mt-4 mt-lg-0">
                        <a href="mailto:Smkn4kotatng@yahoo.co.id" class="btn btn-outline-light rounded-circle" style="width: 45px; height: 45px; display: inline-flex; align-items: center; justify-content: center;">
                            <i class="fa-solid fa-envelope"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light rounded-circle" style="width: 45px; height: 45px; display: inline-flex; align-items: center; justify-content: center;">
                            <i class="fa-solid fa-globe"></i>
                        </a>
                    </div>
                    <p class="text-white-50 mb-0">Hubungi Admin atau Kunjungi Website Resmi.</p>
                </div>
            </div>
            
            <div class="footer-divider"></div>
            
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center footer-bottom">
                <span>&copy; {{ date('Y') }} EDURAV - Aspirasi SMKN 4 Tangerang. All rights reserved.</span>
                <span class="mt-2 mt-md-0">Made with ❤️ by AL Fakhri, for Better Education.</span>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Change navbar background on scroll
        window.addEventListener('scroll', function() {
            var navbar = document.querySelector('.navbar-custom');
            if (window.scrollY > 50) {
                navbar.style.background = 'rgba(255, 255, 255, 0.95)';
                navbar.style.boxShadow = '0 4px 20px rgba(0,0,0,0.05)';
            } else {
                navbar.style.background = 'rgba(255, 255, 255, 0.85)';
                navbar.style.boxShadow = 'none';
            }
        });
    </script>
</body>
</html>
