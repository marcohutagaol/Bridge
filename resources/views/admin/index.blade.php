@extends('layouts.admin')

@section('content')
    <h1 class="mb-3 mt-5 fw-bold">Halaman Dashboard</h1>
    <p>Hai <strong>Admin</strong>, selamat datang di aplikasi Bridge!</p>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-4">
        <div class="col">
            <div class="p-4 rounded shadow-sm" style="background-color: #13547a;">1000 Jumlah Course
            </div>
        </div>
        <div class="col">
            <div class="p-4 rounded shadow-sm" style="background-color: #13547a;">500 Jumlah Course
                Bisnis</div>
        </div>
        <div class="col">
            <div class="p-4 rounded shadow-sm" style="background-color: #13547a;">150 Jumlah Course
                Data
                Analyst</div>
        </div>
        <div class="col">
            <div class="p-4 rounded shadow-sm" style="background-color: #13547a;">300 Jumlah Course
                Cyber Security</div>
        </div>
        <div class="col">
            <div class="p-4 rounded shadow-sm" style="background-color: #13547a;">150 Jumlah Course
            </div>
        </div>
    </div>
@endsection