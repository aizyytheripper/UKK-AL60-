<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Aspirasi - EDURAV | SMKN 4 Tangerang</title>
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
            background: rgba(255, 255, 255, 0.9); 
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            padding: 15px 0;
            box-shadow: 0 4px 20px rgba(0,0,0,0.03);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        .navbar-brand { 
            font-weight: 800; 
            font-size: 22px; 
            color: var(--primary-color);
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .navbar-brand img {
            height: 35px;
            width: auto;
            border-radius: 6px;
        }

        /* General container / card layout */
        .page-container {
            flex-grow: 1;
            display: flex;
            align-items: flex-start;
            justify-content: center;
            padding: 40px 15px;
            position: relative;
        }

        /* Decorative Background */
        .bg-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 300px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            z-index: 0;
            clip-path: polygon(0 0, 100% 0, 100% 60%, 0% 100%);
        }

        .card-custom { 
            background: white; 
            border: none; 
            border-radius: 20px; 
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
            z-index: 1;
            position: relative;
            overflow: hidden;
            padding: 40px;
        }

        .card-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        }

        /* Form Styling */
        .form-label { 
            color: var(--text-main); 
            font-weight: 600; 
            font-size: 0.95rem;
            margin-bottom: 8px;
        }

        .form-control, .form-select {
            border: 1px solid #E5E7EB;
            border-radius: 12px;
            padding: 12px 15px;
            transition: all 0.3s ease;
            background: #F9FAFB;
            color: var(--text-main);
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.1);
            background: white;
        }
        
        .form-text-custom {
            color: var(--text-light);
            font-size: 0.85rem;
            margin-top: 6px;
            display: block;
        }

        /* Buttons */
        .btn-custom-solid {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            border-radius: 50px;
            padding: 14px 24px;
            font-weight: 600;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            font-size: 1.05rem;
        }
        .btn-custom-solid:hover {
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(79, 70, 229, 0.3);
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
        }

        .btn-custom-outline {
            color: var(--text-main);
            background: white;
            border: 1px solid #E5E7EB;
            border-radius: 50px;
            padding: 10px 24px;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        .btn-custom-outline:hover {
            background: #F3F4F6;
            color: var(--primary-color);
            border-color: #D1D5DB;
        }

        .page-title { 
            font-weight: 800;
            font-size: 1.8rem;
            color: var(--text-main);
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .title-icon {
            color: var(--primary-color);
            background: rgba(79, 70, 229, 0.1);
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            font-size: 1.2rem;
        }
        
        /* Custom file input styling */
        input[type="file"]::file-selector-button {
            border: 1px solid var(--secondary-color);
            border-radius: 8px;
            padding: 6px 12px;
            background-color: rgba(79, 70, 229, 0.05);
            color: var(--primary-color);
            font-weight: 600;
            margin-right: 15px;
            cursor: pointer;
            transition: all 0.2s;
        }
        
        input[type="file"]::file-selector-button:hover {
            background-color: var(--primary-color);
            color: white;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="{{ route('dashboard') }}">
                <img src="{{ asset('images/edurav-logo.png') }}" alt="EDURAV Logo">
                EDURAV
            </a>
            <div class="d-none d-lg-block">
                <a href="{{ route('dashboard') }}" class="btn btn-custom-outline btn-sm">
                    <i class="fa-solid fa-arrow-left me-2"></i>Kembali ke Dashboard
                </a>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="bg-pattern"></div>
    <div class="page-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="card-custom">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h4 class="page-title mb-0">
                                <div class="title-icon">
                                    <i class="fa-solid fa-bullhorn"></i>
                                </div>
                                Sampaikan Aspirasimu
                            </h4>
                        </div>
                        
                        <div class="alert alert-info border-0 rounded-4 mb-4" style="background: rgba(79, 70, 229, 0.05);">
                            <div class="d-flex">
                                <i class="fa-solid fa-circle-info text-primary mt-1 me-3 fs-5"></i>
                                <div>
                                    <h6 class="fw-bold text-dark mb-1">Panduan Pengisian</h6>
                                    <p class="small text-muted mb-0">Pastikan informasi diisi dengan jelas dan sopan. Lampirkan foto jika diperlukan untuk mempermudah tindak lanjut oleh pihak sekolah.</p>
                                </div>
                            </div>
                        </div>

                        <form action="{{ route('aspirasi.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="row g-4 mb-4">
                                <!-- Kategori -->
                                <div class="col-md-6">
                                    <label class="form-label">Kategori Laporan <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-end-0 rounded-start-4">
                                            <i class="fa-solid fa-tag text-muted"></i>
                                        </span>
                                        <select name="kategori" class="form-select border-start-0 ps-0" required>
                                            <option value="" disabled selected>-- Pilih Kategori --</option>
                                            <option value="Fasilitas">Fasilitas</option>
                                            <option value="Kebersihan">Kebersihan</option>
                                            <option value="Keamanan">Keamanan</option>
                                            <option value="Lainnya">Lainnya...</option>
                                        </select>
                                    </div>
                                    <span class="form-text-custom">Pilih kategori yang paling sesuai.</span>
                                </div>
                                
                                <!-- Lokasi -->
                                <div class="col-md-6">
                                    <label class="form-label">Lokasi Kejadian/Penemuan <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-end-0 rounded-start-4">
                                            <i class="fa-solid fa-location-dot text-muted"></i>
                                        </span>
                                        <input type="text" name="lokasi" class="form-control border-start-0 ps-0" placeholder="Contoh: Toilet, Ruang Kelas" required>
                                    </div>
                                    <span class="form-text-custom">Tulis spesifik agar mudah ditemukan.</span>
                                </div>
                            </div>

                            <!-- Keterangan -->
                            <div class="mb-4">
                                <label class="form-label">Detail Keterangan <span class="text-danger">*</span></label>
                                <textarea name="keterangan" class="form-control" rows="5" placeholder="Jelaskan aspirasi, keluhan, atau saran kamu secara rinci di sini..." required style="border-radius: 16px;"></textarea>
                                <span class="form-text-custom">Berikan kronologi atau penjelasan komprehensif.</span>
                            </div>

                            <!-- Foto -->
                            <div class="mb-5">
                                <label class="form-label">Lampiran Foto Pendukung (Opsional)</label>
                                <div class="border rounded-4 p-3 bg-light border-dashed" style="border-style: dashed !important; border-width: 2px !important;">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-white p-3 rounded-circle shadow-sm me-3 text-primary">
                                            <i class="fa-solid fa-image fa-lg"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <input type="file" name="foto" class="form-control border-0 bg-transparent p-0" accept="image/jpeg,image/png,image/jpg">
                                            <span class="form-text-custom mt-1">Format: JPG, JPEG, PNG. Maksimal 2MB.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex flex-column flex-md-row gap-3 pt-2 border-top">
                                <a href="{{ route('dashboard') }}" class="btn btn-custom-outline order-2 order-md-1 d-md-none">
                                    Batalkan
                                </a>
                                <button type="submit" class="btn btn-custom-solid flex-grow-1 order-1 order-md-2">
                                    <i class="fa-regular fa-paper-plane"></i> Kirim Aspirasi Sekarang
                                </button>
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
