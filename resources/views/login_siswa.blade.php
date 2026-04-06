<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Siswa - Aspirasi SMKN 4 Tangerang | EDURAV</title>
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
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Glassmorphism Navbar */
        .navbar-custom { 
            background: rgba(255, 255, 255, 0.85); 
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            padding: 15px 0;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
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

        /* Card & Forms */
        .auth-container {
            flex-grow: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 15px;
            position: relative;
        }

        /* Decorative Blobs (Background) */
        .blob-1 {
            position: absolute;
            top: 10%;
            right: 15%;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(129, 140, 248, 0.2) 0%, rgba(255,255,255,0) 70%);
            z-index: 0;
            border-radius: 50%;
        }

        .blob-2 {
            position: absolute;
            bottom: 10%;
            left: 15%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(250, 204, 21, 0.15) 0%, rgba(255,255,255,0) 70%);
            z-index: 0;
            border-radius: 50%;
        }

        .card { 
            background: white; 
            border: none; 
            border-radius: 20px; 
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
            z-index: 1;
            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        }

        .form-label { 
            color: var(--text-main); 
            font-weight: 600; 
            font-size: 0.95rem;
        }

        .form-control {
            border: 1px solid #E5E7EB;
            border-radius: 10px;
            padding: 12px 15px;
            transition: all 0.3s ease;
            background: #F9FAFB;
        }

        .form-control:focus {
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.1);
            background: white;
        }

        .btn-custom-solid {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            border-radius: 50px;
            padding: 12px 24px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-custom-solid:hover {
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(79, 70, 229, 0.3);
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
        }

        .btn-outline-custom {
            color: var(--text-light);
            border: 1px solid #E5E7EB;
            border-radius: 50px;
            padding: 10px 24px;
            font-weight: 500;
            transition: all 0.3s;
            background: white;
        }

        .btn-outline-custom:hover {
            background: #F3F4F6;
            color: var(--text-main);
        }

        .auth-title { 
            font-weight: 800;
            font-size: 1.8rem;
            color: var(--text-main);
            margin-bottom: 5px;
        }

        .auth-subtitle {
            color: var(--text-light);
            font-size: 0.95rem;
            margin-bottom: 30px;
        }

        /* Icon Wrapper */
        .icon-wrapper {
            width: 60px;
            height: 60px;
            border-radius: 15px;
            background: rgba(79, 70, 229, 0.1);
            color: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin: 0 auto 20px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/edurav-logo.png') }}" alt="EDURAV Logo">
                EDURAV
            </a>
            <div class="d-none d-lg-block">
                <a href="{{ url('/') }}" class="btn btn-outline-custom btn-sm">
                    <i class="fa-solid fa-house me-2"></i>Kembali ke Beranda
                </a>
            </div>
        </div>
    </nav>

    <!-- Auth Container -->
    <div class="auth-container">
        <div class="blob-1"></div>
        <div class="blob-2"></div>
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-5">
                    <div class="card p-4 p-sm-5">
                        <div class="text-center">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-user-graduate"></i>
                            </div>
                            <h3 class="auth-title">Login Siswa</h3>
                            <p class="auth-subtitle">Masuk untuk menyampaikan aspirasi untuk sekolah tercinta.</p>
                        </div>
                        
                        <form method="POST" action="{{ route('login.siswa') }}">
                            @csrf
                            <div class="mb-4">
                                <label class="form-label">NISN</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0" style="border-radius: 10px 0 0 10px; border-color: #E5E7EB;">
                                        <i class="fa-regular fa-id-card text-muted"></i>
                                    </span>
                                    <input type="text" name="nisn" class="form-control border-start-0 ps-0" placeholder="Nomor Induk Siswa Nasional" required>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <label class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0" style="border-radius: 10px 0 0 10px; border-color: #E5E7EB;">
                                        <i class="fa-solid fa-lock text-muted"></i>
                                    </span>
                                    <input type="password" name="password" class="form-control border-start-0 ps-0"  required>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-custom-solid w-100 mt-2 mb-3">
                                Masuk <i class="fa-solid fa-arrow-right ms-2"></i>
                            </button>
                            
                            <div class="text-center d-lg-none mt-3">
                                <a href="{{ url('/') }}" class="text-decoration-none text-muted" style="font-size: 0.9rem;">
                                    <i class="fa-solid fa-arrow-left me-1"></i> Kembali ke Beranda
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
