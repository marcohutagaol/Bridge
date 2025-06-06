@extends('layouts.admin')

@section('content')
    <h1 class="mb-3 mt-5 fw-bold">Halaman Dashboard</h1>
    <p>Hai <strong>Admin</strong>, selamat datang di aplikasi Bridge!</p>

    <div class="row g-4 mt-4">
        <div class="col">
            <div class="p-4 rounded shadow-sm py-5" style="background-color: #13547a;">
                <h1 class="text-xl">{{ $data['jumlah_course'] }} Total Course</h1>
            </div>
        </div>
        <div class="col">
            <div class="p-4 rounded shadow-sm py-5" style="background-color: #13547a;">
                <h1 class="text-xl">{{ $data['jumlah_career'] }} Total Career</h1>
            </div>
        </div>
        <div class="col">
            <div class="p-4 rounded shadow-sm py-5" style="background-color: #13547a;">
                <h1 class="text-xl">{{ $data['jumlah_degree'] }} Total Degree</h1>
            </div>
        </div>
    </div>
@endsection