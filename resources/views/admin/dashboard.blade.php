@extends('layouts.admin')

@section('content')
    <div class="dashboard-header mb-4">
        <h1 class="fw-bold">Dashboard</h1>
        <p class="text-muted">Hai <strong>Admin</strong>, Welcome to Bridge!</p>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="stat-card">
                <i class="fas fa-graduation-cap stat-icon"></i>
                <div class="stat-number">{{ number_format($data['jumlah_course']) }}</div>
                <div class="stat-label">Total Course</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-card">
                <i class="fas fa-briefcase stat-icon"></i>
                <div class="stat-number">{{ number_format($data['jumlah_career']) }}</div>
                <div class="stat-label">Total Career</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-card">
                <i class="fas fa-user-graduate stat-icon"></i>
                <div class="stat-number">{{ number_format($data['jumlah_degree']) }}</div>
                <div class="stat-label">Total Degree</div>
            </div>
        </div>
    </div>

    <style>
        .dashboard-header {
            padding: 1rem 0;
        }

        .stat-card {
            background: linear-gradient(135deg, #13547a, #80d0c7);
            border-radius: 15px;
            padding: 25px;
            color: white;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(19, 84, 122, 0.2);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            position: relative;
            z-index: 1;
        }

        .stat-label {
            font-size: 1.1rem;
            font-weight: 500;
            opacity: 0.9;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            z-index: 1;
        }

        .stat-icon {
            font-size: 4rem;
            opacity: 0.2;
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>
@endsection