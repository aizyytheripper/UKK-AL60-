<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Aspirasi - EDURAV | SMKN 4 Tangerang</title>
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

        /* Details Section */
        .details-box {
            background: rgba(249, 250, 251, 0.5);
            border: 1px solid #E5E7EB;
            border-radius: 16px;
            padding: 24px;
        }

        .detail-item {
            margin-bottom: 15px;
        }
        
        .detail-label {
            font-size: 0.85rem;
            color: var(--text-light);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 700;
            margin-bottom: 2px;
            display: block;
        }

        .detail-value {
            font-size: 1rem;
            font-weight: 600;
            color: var(--text-main);
        }

        .aspirasi-image {
            width: 100%;
            max-width: 250px;
            border-radius: 12px;
            border: 1px solid #E5E7EB;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            margin-top: 10px;
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
            color: white;
            background: linear-gradient(135deg, #10B981, #059669); /* Emerald green for feedback */
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            font-size: 1.2rem;
            box-shadow: 0 4px 10px rgba(16, 185, 129, 0.3);
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
                                    <i class="fa-regular fa-comment-dots"></i>
                                </div>
                                Feedback Aspirasi
                            </h4>
                        </div>
                        
                        <!-- Rincian Aspirasi Box -->
                        <div class="details-box mb-4">
                            <h5 class="fw-bold mb-3 d-flex align-items-center gap-2">
                                <i class="fa-solid fa-file-invoice text-primary"></i> Detail Aspirasi Siswa
                            </h5>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-item">
                                        <span class="detail-label">Pengirim (Siswa)</span>
                                        <span class="detail-value text-primary"><i class="fa-solid fa-user-circle me-1"></i>{{ $aspirasi->user->name }}</span>
                                    </div>
                                    <div class="detail-item">
                                        <span class="detail-label">Kategori Laporan</span>
                                        <span class="detail-value">{{ $aspirasi->kategori }}</span>
                                    </div>
                                    <div class="detail-item">
                                        <span class="detail-label">Lokasi Kejadian</span>
                                        <span class="detail-value"><i class="fa-solid fa-location-dot text-danger me-1"></i>{{ $aspirasi->lokasi }}</span>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 mt-3 mt-md-0">
                                    <div class="detail-item h-100">
                                        <span class="detail-label">Keterangan/Isi Laporan</span>
                                        <div class="bg-white p-3 rounded-3 border" style="font-size: 0.95rem; min-height: 80px;">
                                            {{ $aspirasi->keterangan }}
                                        </div>
                                    </div>
                                </div>
                                
                                @if($aspirasi->foto)
                                <div class="col-12 mt-3">
                                    <span class="detail-label">Lampiran Bukti (Foto)</span>
                                    <img src="{{ asset('storage/'.$aspirasi->foto) }}" class="aspirasi-image" alt="Lampiran Bukti Aspirasi">
                                </div>
                                @endif
                            </div>
                        </div>

                        <!-- Form Feedback -->
                        <form method="POST" action="{{ route('aspirasi.feedback',$aspirasi->id) }}">
                            @csrf
                            
                            <div class="alert alert-warning border-0 rounded-4 mb-4" style="background: rgba(250, 204, 21, 0.1);">
                                <div class="d-flex align-items-center">
                                    <i class="fa-solid fa-bell text-warning me-3 fs-5"></i>
                                    <p class="small text-dark mb-0 fw-medium">Tanggapan yang Anda berikan akan langsung terlihat oleh siswa bersangkutan.</p>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Isi Tanggapan Admin / Evaluasi</label>
                                <textarea name="feedback" class="form-control" rows="4" placeholder="Tuliskan respons, tindak lanjut, atau penyelesaian atas aspirasi ini..." style="border-radius: 16px;">{{ old('feedback',$aspirasi->feedback) }}</textarea>
                            </div>
                            
                            <div class="mb-5">
                                <label class="form-label">Ubah Status Aspirasi</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0 rounded-start-4">
                                        <i class="fa-solid fa-spinner text-muted"></i>
                                    </span>
                                    <select name="status" class="form-select border-start-0 ps-0 fw-bold">
                                        <option value="Pending" {{ $aspirasi->status == 'Pending' ? 'selected' : '' }} class="text-danger">Pending (Menunggu)</option>
                                        <option value="Diproses" {{ $aspirasi->status == 'Diproses' ? 'selected' : '' }} class="text-warning">Diproses (Sedang Ditindaklanjuti)</option>
                                        <option value="Selesai" {{ $aspirasi->status == 'Selesai' ? 'selected' : '' }} class="text-success">Selesai (Sudah Terselesaikan)</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="d-flex flex-column flex-md-row gap-3 pt-2 border-top">
                                <a href="{{ route('dashboard') }}" class="btn btn-custom-outline order-2 order-md-1 d-md-none">
                                    Batalkan
                                </a>
                                <button type="submit" class="btn btn-custom-solid flex-grow-1 order-1 order-md-2" style="background: linear-gradient(135deg, #10B981, #059669); box-shadow: 0 4px 15px rgba(16, 185, 129, 0.2);">
                                    <i class="fa-solid fa-floppy-disk"></i> Simpan Tanggapan
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
