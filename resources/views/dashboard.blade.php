<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - EDURAV | Aspirasi SMKN 4 Tangerang</title>
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

        /* Typography */
        h2 {
            font-weight: 800;
            font-size: 2rem;
            color: var(--text-main);
            margin-bottom: 5px;
        }
        
        h3 {
            font-weight: 700;
            font-size: 1.3rem;
            color: var(--text-main);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Buttons */
        .btn-custom-solid {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            border-radius: 12px;
            padding: 10px 20px;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .btn-custom-solid:hover {
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(79, 70, 229, 0.3);
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
        }

        .btn-custom-outline {
            color: var(--text-main);
            background: white;
            border: 1px solid #E5E7EB;
            border-radius: 12px;
            padding: 8px 16px;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .btn-custom-outline:hover {
            background: #F3F4F6;
            color: var(--primary-color);
            border-color: #D1D5DB;
        }
        
        .btn-danger-outline {
            color: #EF4444;
            background: rgba(239, 68, 68, 0.05);
            border: 1px solid rgba(239, 68, 68, 0.2);
            border-radius: 12px;
            padding: 8px 16px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-danger-outline:hover {
            background: #EF4444;
            color: white;
        }

        /* Card container */
        .dashboard-card { 
            background: white; 
            border: 1px solid #F3F4F6; 
            border-radius: 16px; 
            box-shadow: 0 10px 30px rgba(0,0,0,0.02);
            padding: 24px;
            margin-top: 24px;
            position: relative;
            overflow: hidden;
        }
        
        .dashboard-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        }

        /* Filter Form */
        .filter-form {
            background: white;
            padding: 16px;
            border-radius: 16px;
            border: 1px solid #F3F4F6;
            box-shadow: 0 4px 15px rgba(0,0,0,0.02);
        }

        .form-select {
            border-radius: 10px;
            border: 1px solid #E5E7EB;
            padding: 10px 15px;
            font-weight: 500;
            background-color: #F9FAFB;
        }
        
        .form-select:focus {
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.1);
        }

        /* Table Styling */
        .table {
            margin-bottom: 0;
        }
        
        .table th {
            font-weight: 600;
            color: var(--text-light);
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 0.5px;
            border-bottom: 1px solid #E5E7EB;
            padding: 15px;
            background: #F9FAFB;
        }
        
        .table td {
            padding: 15px;
            vertical-align: middle;
            color: var(--text-main);
            border-bottom: 1px solid #F3F4F6;
        }

        .table-hover tbody tr:hover {
            background-color: #F9FAFB;
        }
        
        /* Status Badges */
        .badge-status {
            padding: 6px 12px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.85rem;
        }
        
        .status-baru { background: rgba(79, 70, 229, 0.1); color: var(--primary-color); }
        .status-proses { background: rgba(250, 204, 21, 0.1); color: #B45309; }
        .status-selesai { background: rgba(16, 185, 129, 0.1); color: #059669; }

        /* User badge */
        .user-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: rgba(79, 70, 229, 0.05);
            padding: 8px 16px;
            border-radius: 50px;
            font-weight: 600;
            color: var(--primary-color);
        }
        
        .avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/edurav-logo.png') }}" alt="EDURAV Logo">
                EDURAV
            </a>
            
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <div class="d-flex align-items-center gap-3 mt-3 mt-lg-0">
                    <div class="user-badge d-none d-lg-flex">
                        <div class="avatar">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        {{ $role == 'admin' ? 'Administrator' : 'Siswa' }}
                    </div>
                    <a href="{{ route('logout') }}" class="btn btn-danger-outline">
                        <i class="fa-solid fa-arrow-right-from-bracket me-2"></i>Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container pb-5">
        <!-- Header Section -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mt-5 mb-4 border-bottom pb-4 border-light-subtle">
            <div>
                <span class="badge bg-primary bg-opacity-10 text-primary mb-2 px-3 py-2 rounded-pill font-monospace">Workspace</span>
                <h2>Dashboard {{ ucfirst($role) }}</h2>
                <p class="text-muted mb-0">Selamat datang kembali! Berikut adalah ringkasan aspirasi masuk.</p>
            </div>
            
            <div class="mt-3 mt-md-0 d-flex gap-2">
                @if($role == 'siswa')
                    <a href="{{ route('aspirasi.create') }}" class="btn btn-custom-solid">
                        <i class="fa-solid fa-plus"></i> Buat Aspirasi
                    </a>
                @endif
                @if($role == 'admin')
                    <a href="{{ route('siswa.create') }}" class="btn btn-custom-solid">
                        <i class="fa-solid fa-user-plus"></i> Tambah Akun Siswa
                    </a>
                @endif
            </div>
        </div>

        <!-- Filter Area -->
        <div class="filter-form mb-4">
            <form method="GET" action="{{ route('dashboard') }}" class="d-flex flex-column flex-md-row gap-3 align-items-md-center">
                <div class="flex-grow-1">
                    <label class="form-label text-muted small fw-bold mb-1">Filter Kategori</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0">
                            <i class="fa-solid fa-filter text-muted"></i>
                        </span>
                        <select name="search" class="form-select border-start-0 ps-0">
                            <option value="">Semua Kategori Aspirasi</option>
                            <option value="Fasilitas" {{ request('search') == 'Fasilitas' ? 'selected' : '' }}>Fasilitas</option>
                            <option value="Kebersihan" {{ request('search') == 'Kebersihan' ? 'selected' : '' }}>Kebersihan</option>
                            <option value="Keamanan" {{ request('search') == 'Keamanan' ? 'selected' : '' }}>Keamanan</option>
                            <option value="Lainnya" {{ request('search') == 'Lainnya' ? 'selected' : '' }}>Lainnya...</option>
                        </select>
                    </div>
                </div>
                <div class="mt-md-4">
                    <button type="submit" class="btn btn-custom-outline w-100">
                        Terapkan Filter
                    </button>
                </div>
            </form>
        </div>

        <!-- Data Table Card -->
        <div class="dashboard-card">
            <h3><i class="fa-solid fa-list-check text-primary"></i> Daftar Aspirasi</h3>
            
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            @if($role == 'admin')
                                <th>Nama Siswa</th>
                            @endif
                            <th>Foto</th>
                            <th>Kategori & Lokasi</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                            <th>Feedback Admin</th>
                            <th>Tanggal</th>
                            @if($role == 'admin')
                                <th class="text-center">Aksi</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($aspirasi as $item)
                        <tr>
                            @if($role == 'admin')
                                <td class="fw-bold">{{ $item->user->name }}</td>
                            @endif
                            <td>
                                @if($item->foto)
                                    <div style="width: 60px; height: 60px; border-radius: 8px; overflow: hidden; border: 1px solid #E5E7EB;">
                                        <img src="{{ asset('storage/'.$item->foto) }}" alt="Lampiran" style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                @else
                                    <div style="width: 60px; height: 60px; border-radius: 8px; background: #F3F4F6; display: flex; align-items: center; justify-content: center; color: #9CA3AF;">
                                        <i class="fa-regular fa-image"></i>
                                    </div>
                                @endif
                            </td>
                            <td>
                                <span class="d-block fw-bold text-dark">{{ $item->kategori }}</span>
                                <span class="d-block small text-muted"><i class="fa-solid fa-location-dot me-1"></i>{{ $item->lokasi }}</span>
                            </td>
                            <td>
                                <div style="max-height: 60px; overflow-y: auto; font-size: 0.9rem;">
                                    {{ $item->keterangan }}
                                </div>
                            </td>
                            <td>
                                @php
                                    $statusClass = 'status-baru';
                                    if(strtolower($item->status) == 'diproses') $statusClass = 'status-proses';
                                    if(strtolower($item->status) == 'selesai') $statusClass = 'status-selesai';
                                @endphp
                                <span class="badge-status {{ $statusClass }}">
                                    {{ $item->status }}
                                </span>
                            </td>
                            <td>
                                @if($item->feedback)
                                    <div class="bg-light p-2 rounded small border" style="max-height: 80px; overflow-y: auto;">
                                        {{ $item->feedback }}
                                    </div>
                                @else
                                    <span class="text-muted small fst-italic">Belum ada tanggapan</span>
                                @endif
                            </td>
                            <td class="small text-muted text-nowrap">
                                <i class="fa-regular fa-calendar me-1"></i>{{ $item->created_at->format('d M Y') }}<br>
                                <i class="fa-regular fa-clock me-1"></i>{{ $item->created_at->format('H:i') }}
                            </td>
                            @if($role == 'admin')
                                <td class="text-center">
                                    <a href="{{ route('aspirasi.feedback.form', $item->id) }}" class="btn btn-sm btn-custom-outline" style="border-radius: 8px;">
                                        Tanggapi
                                    </a> 
                                </td>
                            @endif
                        </tr>
                        @empty
                        <tr>
                            <td colspan="{{ $role == 'admin' ? 8 : 7 }}" class="text-center py-5">
                                <div class="text-muted mb-3 d-flex flex-column align-items-center">
                                    <div style="width: 80px; height: 80px; background: #F3F4F6; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 30px; margin-bottom: 15px;">
                                        <i class="fa-solid fa-inbox text-secondary text-opacity-50"></i>
                                    </div>
                                    <span class="fw-bold">Belum Ada Aspirasi</span>
                                    <p class="small mb-0 mt-1">Belum ada data aspirasi yang ditemukan atau sesuai dengan filter.</p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
