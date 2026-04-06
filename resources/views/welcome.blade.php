<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome - EDURAV</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        
        <!-- Bootstrap CSS for layout/consistency -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <style>
            :root {
                --primary-color: #4F46E5;
                --secondary-color: #818CF8;
                --text-main: #1F2937;
                --bg-color: #F9FAFB;
            }

            body {
                font-family: 'Plus Jakarta Sans', sans-serif;
                background-color: var(--bg-color);
                color: var(--text-main);
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }

            .welcome-card {
                background: white;
                border-radius: 20px;
                padding: 60px 40px;
                box-shadow: 0 20px 40px rgba(0,0,0,0.05);
                text-align: center;
                max-width: 600px;
                width: 100%;
                position: relative;
                overflow: hidden;
            }

            .welcome-card::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 6px;
                background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            }

            .logo-img {
                height: 80px;
                width: auto;
                margin-bottom: 30px;
                border-radius: 16px;
                box-shadow: 0 10px 25px rgba(79, 70, 229, 0.2);
            }

            h1 {
                font-weight: 800;
                font-size: 2.5rem;
                margin-bottom: 15px;
                background: linear-gradient(135deg, var(--text-main), var(--primary-color));
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            p {
                color: #6B7280;
                font-size: 1.1rem;
                line-height: 1.6;
                margin-bottom: 40px;
            }

            .btn-custom-solid {
                background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
                color: white;
                border: none;
                border-radius: 50px;
                padding: 14px 30px;
                font-weight: 600;
                font-size: 1.1rem;
                transition: all 0.3s ease;
                display: inline-flex;
                align-items: center;
                gap: 10px;
                text-decoration: none;
            }
            
            .btn-custom-solid:hover {
                color: white;
                transform: translateY(-3px);
                box-shadow: 0 10px 25px rgba(79, 70, 229, 0.3);
                background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            }

            .blob {
                position: absolute;
                width: 600px;
                height: 600px;
                background: radial-gradient(circle, rgba(129, 140, 248, 0.1) 0%, rgba(255,255,255,0) 70%);
                z-index: -1;
                border-radius: 50%;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
        </style>
    </head>
    <body>
        <div class="blob"></div>
        
        <div class="container d-flex justify-content-center">
            <div class="welcome-card">
                <img src="{{ asset('images/edurav-logo.png') }}" alt="EDURAV Logo" class="logo-img">
                
                <h1>Welcome to EDURAV</h1>
                
                <p>
                    Platform Sistem Aspirasi Digital SMKN 4 Tangerang. 
                    Suarakan ide, kritik, dan saran Anda untuk membangun sekolah yang lebih baik dan transparan.
                </p>
                
                <div class="d-flex flex-column align-items-center gap-3">
                    <a href="{{ url('/') }}" class="btn-custom-solid">
                        Mulai Jelajahi <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
                
                <div class="mt-5 text-muted small">
                    &copy; {{ date('Y') }} EDURAV Development. All rights reserved.
                </div>
            </div>
        </div>

    </body>
</html>
