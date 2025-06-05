@extends('layouts.admin')

@section('content')
    <h1 class="mb-3 fw-bold">Halaman Ranking</h1>

    <div class="row">
        <div class="bg-white rounded-md p-4 mx-4" style="width: 45%;">
            <h2 class="text-l mb-4">Checkout Chart</h2>
            <canvas id="checkoutGraph"></canvas>
        </div>


        <div class="bg-white rounded-md p-4 mx-4" style="width: 45%;">
            <h2 class="text-l mb-4">Top Users Chart</h2>
            <canvas id="topUsersChart"></canvas>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ctx = document.getElementById('checkoutGraph');
            const chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Course', 'Degree', 'Career'],
                    datasets: [{
                        data: [{{ $checkouts['pembelian_course'] }}, {{ $checkouts['pembelian_degree'] }}, {{ $checkouts['pembelian_career'] }}],
                        backgroundColor: ['#3b82f6', '#10b981', '#f59e0b'],
                        borderColor: '#fff',
                        borderWidth: 1,
                        barThickness: 70,
                        maxBarThickness: 100,
                    }]
                },
                options: {
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                precision: 0
                            }
                        }
                    }
                }
            });
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ctx = document.getElementById('topUsersChart');
            const chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: {!! json_encode($labels) !!},
                    datasets: [{
                        data: {!! json_encode($data) !!},
                        backgroundColor: ['#3b82f6', '#10b981', '#f59e0b', '#f87171'],
                    borderColor: '#fff',
                    borderWidth: 1,
                    barThickness: 70,
                    maxBarThickness: 100,
                }]
            },
                options: {
                plugins: {
                    legend: {
                        display: false
                    }
                },
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            precision: 0
                        }
                    }
                }
            }
                });
            });
    </script>


@endsection