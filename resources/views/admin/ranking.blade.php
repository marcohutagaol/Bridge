@extends('layouts.admin')

@section('content')
    <h1 class="mb-3 fw-bold">Halaman Ranking</h1>

    <div class="row">
        <div class="bg-white rounded-md p-4 mx-4" style="width: 45%;">
            <h2 class="text-l mb-4">Checkout Chart</h2>
            <canvas id="checkoutChart"></canvas>
        </div>


        <div class="bg-white rounded-md p-4 mx-4" style="width: 45%;">
            <h2 class="text-l mb-4">Top Users Chart</h2>
            <canvas id="topUsersChart"></canvas>
        </div>
    </div>

    <div class="row mt-5">
        <div class="bg-white rounded-md p-4 mx-4" style="width: 45%;">
            <h2 class="text-l mb-4">Course Rating Chart</h2>
            <canvas id="ratingChart"></canvas>
        </div>

        <div class="bg-white rounded-md p-4 mx-4" style="width: 45%;">
            <h2 class="text-l mb-4">Top Career Chart</h2>
            <canvas id="careerChart"></canvas>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ctx = document.getElementById('checkoutChart');
            const chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Course', 'Degree', 'Career'],
                    datasets: [{
                        data: [{{ $checkouts['pembelian_course'] }}, {{ $checkouts['pembelian_degree'] }}, {{ $checkouts['pembelian_career'] }}],
                        backgroundColor: [
                            '#4caf50',
                            '#8bc34a',
                            '#ffc107',
                            '#ff9800',
                            '#f44336'
                        ],
                        borderColor: '#fff',
                        borderWidth: 1,
                        barThickness: 70,
                        maxBarThickness: 100,
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
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
                    labels: {!! json_encode($topUsers_labels) !!},
                    datasets: [{
                        data: {!! json_encode($topUsers_data) !!},
                        backgroundColor: [
                            '#4caf50',
                            '#8bc34a',
                            '#ffc107',
                            '#ff9800',
                            '#f44336'
                        ],
                        borderColor: '#fff',
                        borderWidth: 1,
                        barThickness: 70,
                        maxBarThickness: 100,
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>

    <script>
        const ctx = document.getElementById('ratingChart');
        const ratingChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['4.7 - 5.0', '4.4 - 4.6', '4.1 - 4.3', '3.0 - 4.0', '0.5 - 2.0'],
                datasets: [{
                    data: [{{ $course_rating['first'] }}, {{ $course_rating['second'] }}, {{ $course_rating['third'] }}, {{ $course_rating['fourth'] }}, {{ $course_rating['fifth'] }}],
                    backgroundColor: [
                        '#4caf50',
                        '#8bc34a',
                        '#ffc107',
                        '#ff9800',
                        '#f44336'
                    ],
                    borderRadius: 8
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const rawCareerData = {!! json_encode($career_data) !!};
            const careerData = rawCareerData.map(value => Number(value) || 0);

            const ctx = document.getElementById('careerChart');
            const chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Highest Salary", "Most Jobs Available"],
                    datasets: [
                        {
                            data: [careerData[0], null],
                            backgroundColor: 'rgba(75,192,192,0.6)',
                            yAxisID: 'y1'
                        },
                        {
                            data: [null, careerData[1]],
                            backgroundColor: 'rgba(255,159,64,0.6)',
                            yAxisID: 'y2'
                        }
                    ]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y1: {
                            type: 'linear',
                            position: 'left',
                            beginAtZero: true
                        },
                        y2: {
                            type: 'linear',
                            position: 'right',
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>

@endsection