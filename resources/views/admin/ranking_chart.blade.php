@extends('layouts.admin')

@section('content')
    <h1 class="mb-3 fw-bold">Ranking Charts</h1>

    <div class="row">
        <div class="chart-card mx-4" style="width: 45%;">
            <h2 class="text-l mb-4">Top Checkout</h2>
            <div class="chart-wrapper">
                <canvas id="checkoutChart"></canvas>
            </div>
        </div>

        <div class="chart-card mx-4" style="width: 45%;">
            <h2 class="text-l mb-4">Top Users on Checkout</h2>
            <div class="chart-wrapper">
                <canvas id="topUsersChart"></canvas>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="chart-card mx-4" style="width: 45%;">
            <h2 class="text-l mb-4">Top Course Rating</h2>
            <div class="chart-wrapper">
                <canvas id="ratingChart"></canvas>
            </div>
        </div>

        <div class="chart-card mx-4" style="width: 45%;">
            <h2 class="text-l mb-4">Top Career Chart</h2>
            <div class="chart-wrapper">
                <canvas id="careerChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Enhanced Styles -->
    <style>
        .chart-card {
            background: linear-gradient(145deg, #ffffff, #f8f9fa);
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .chart-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2, #4facfe, #00f2fe);
            border-radius: 15px 15px 0 0;
        }

        .chart-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .chart-card h2 {
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 20px;
            font-size: 1.25rem;
        }

        .chart-wrapper {
            background: rgba(255, 255, 255, 0.7);
            border-radius: 10px;
            padding: 15px;
            position: relative;
            min-height: 300px;
        }

        /* Enhanced page styling */
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }

        h1 {
            color: #2c3e50;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        /* Animation */
        .chart-card {
            animation: fadeInUp 0.6s ease-out;
        }

        .row:first-child .chart-card:first-child { animation-delay: 0.1s; }
        .row:first-child .chart-card:last-child { animation-delay: 0.2s; }
        .row:last-child .chart-card:first-child { animation-delay: 0.3s; }
        .row:last-child .chart-card:last-child { animation-delay: 0.4s; }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .chart-card {
                width: 95% !important;
                margin: 10px auto !important;
            }
            
            .row {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Enhanced chart defaults
            Chart.defaults.font.family = "'Segoe UI', Tahoma, Geneva, Verdana, sans-serif";
            Chart.defaults.font.size = 12;
            Chart.defaults.color = '#6c757d';

            const ctx = document.getElementById('checkoutChart');
            const chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Course', 'Degree', 'Career'],
                    datasets: [{
                        data: [{{ $checkouts['pembelian_course'] }}, {{ $checkouts['pembelian_degree'] }}, {{ $checkouts['pembelian_career'] }}],
                        backgroundColor: [
                            'rgba(102, 126, 234, 0.8)',
                            'rgba(79, 172, 254, 0.8)',
                            'rgba(67, 233, 123, 0.8)'
                        ],
                        borderColor: [
                            'rgba(102, 126, 234, 1)',
                            'rgba(79, 172, 254, 1)',
                            'rgba(67, 233, 123, 1)'
                        ],
                        borderWidth: 2,
                        borderRadius: 8,
                        borderSkipped: false,
                        barThickness: 60,
                        maxBarThickness: 80
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            backgroundColor: 'rgba(0,0,0,0.8)',
                            titleColor: '#fff',
                            bodyColor: '#fff',
                            cornerRadius: 8,
                            displayColors: true,
                            borderColor: 'rgba(255,255,255,0.2)',
                            borderWidth: 1
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(0,0,0,0.1)',
                                drawBorder: false
                            },
                            ticks: {
                                padding: 10,
                                color: '#6c757d'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                padding: 10,
                                color: '#6c757d'
                            }
                        }
                    },
                    animation: {
                        duration: 1500,
                        easing: 'easeInOutQuart'
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
                            'rgba(255, 99, 132, 0.8)',
                            'rgba(54, 162, 235, 0.8)',
                            'rgba(255, 206, 86, 0.8)',
                            'rgba(75, 192, 192, 0.8)',
                            'rgba(153, 102, 255, 0.8)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)'
                        ],
                        borderWidth: 2,
                        borderRadius: 8,
                        borderSkipped: false,
                        barThickness: 50,
                        maxBarThickness: 70
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            backgroundColor: 'rgba(0,0,0,0.8)',
                            titleColor: '#fff',
                            bodyColor: '#fff',
                            cornerRadius: 8,
                            displayColors: true,
                            borderColor: 'rgba(255,255,255,0.2)',
                            borderWidth: 1
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(0,0,0,0.1)',
                                drawBorder: false
                            },
                            ticks: {
                                padding: 10,
                                color: '#6c757d'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                padding: 10,
                                maxRotation: 45,
                                color: '#6c757d'
                            }
                        }
                    },
                    animation: {
                        duration: 1500,
                        easing: 'easeInOutQuart'
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
                        'rgba(76, 175, 80, 0.8)',
                        'rgba(139, 195, 74, 0.8)',
                        'rgba(255, 193, 7, 0.8)',
                        'rgba(255, 152, 0, 0.8)',
                        'rgba(244, 67, 54, 0.8)'
                    ],
                    borderColor: [
                        'rgba(76, 175, 80, 1)',
                        'rgba(139, 195, 74, 1)',
                        'rgba(255, 193, 7, 1)',
                        'rgba(255, 152, 0, 1)',
                        'rgba(244, 67, 54, 1)'
                    ],
                    borderWidth: 2,
                    borderRadius: 8,
                    borderSkipped: false,
                    barThickness: 50,
                    maxBarThickness: 70
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: 'rgba(0,0,0,0.8)',
                        titleColor: '#fff',
                        bodyColor: '#fff',
                        cornerRadius: 8,
                        displayColors: true,
                        borderColor: 'rgba(255,255,255,0.2)',
                        borderWidth: 1
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(0,0,0,0.1)',
                            drawBorder: false
                        },
                        ticks: {
                            padding: 10,
                            color: '#6c757d'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            padding: 10,
                            color: '#6c757d'
                        }
                    }
                },
                animation: {
                    duration: 1500,
                    easing: 'easeInOutQuart'
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
                            backgroundColor: 'rgba(75,192,192,0.8)',
                            borderColor: 'rgba(75,192,192,1)',
                            yAxisID: 'y1',
                            borderWidth: 2,
                            borderRadius: 8,
                            borderSkipped: false,
                            barThickness: 60,
                            maxBarThickness: 80
                        },
                        {
                            data: [null, careerData[1]],
                            backgroundColor: 'rgba(255,159,64,0.8)',
                            borderColor: 'rgba(255,159,64,1)',
                            yAxisID: 'y2',
                            borderWidth: 2,
                            borderRadius: 8,
                            borderSkipped: false,
                            barThickness: 60,
                            maxBarThickness: 80
                        }
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            backgroundColor: 'rgba(0,0,0,0.8)',
                            titleColor: '#fff',
                            bodyColor: '#fff',
                            cornerRadius: 8,
                            displayColors: true,
                            borderColor: 'rgba(255,255,255,0.2)',
                            borderWidth: 1
                        }
                    },
                    scales: {
                        y1: {
                            type: 'linear',
                            position: 'left',
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(0,0,0,0.1)',
                                drawBorder: false
                            },
                            ticks: {
                                padding: 10,
                                color: '#6c757d'
                            }
                        },
                        y2: {
                            type: 'linear',
                            position: 'right',
                            beginAtZero: true,
                            grid: {
                                drawOnChartArea: false,
                                drawBorder: false
                            },
                            ticks: {
                                padding: 10,
                                color: '#6c757d'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                padding: 10,
                                color: '#6c757d'
                            }
                        }
                    },
                    animation: {
                        duration: 1500,
                        easing: 'easeInOutQuart'
                    }
                }
            });
        });
    </script>

@endsection