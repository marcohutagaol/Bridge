@extends('layouts.admin')

@section('content')
  <h1 class="mb-3 fw-bold">Ranking Charts</h1>

  <div class="row mt-5">
    <div class="chart-card mx-4" style="width: 45%;">
      <h2 class="text-l mb-4">Career Insight Chart</h2>
      <div class="chart-wrapper">
        <canvas id="careerInsight"></canvas>
      </div>
    </div>

    <div class="chart-card mx-4" style="width: 45%;">
      <h2 class="text-l mb-4">Degree Insight Chart</h2>
      <div class="chart-wrapper">
        <canvas id="degreeInsight"></canvas>
      </div>
    </div>
  </div>

  <div class="row mt-5">
    <div class="chart-card mx-4" style="width: 93%;">
      <h2 class="text-l mb-4">Course Insight Chart</h2>
      <div class="chart-wrapper">
        <canvas id="courseInsight"></canvas>
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
    .row:last-child .chart-card { animation-delay: 0.3s; }

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
    // Enhanced chart defaults
    Chart.defaults.font.family = "'Segoe UI', Tahoma, Geneva, Verdana, sans-serif";
    Chart.defaults.font.size = 12;
    Chart.defaults.color = '#6c757d';

    const ctx = document.getElementById('careerInsight');
    const careerInsight = new Chart(ctx, {
      type: 'line',
      data: {
        labels: {!! json_encode($careerCategory) !!},
        datasets: [{
          label: 'Total Pembelian',
          data: {!! json_encode($career) !!},
          backgroundColor: 'rgba(102, 126, 234, 0.2)',
          borderColor: '#667eea',
          borderWidth: 3,
          fill: true,
          tension: 0.4,
          pointBackgroundColor: '#667eea',
          pointBorderColor: '#fff',
          pointBorderWidth: 2,
          pointRadius: 6,
          pointHoverRadius: 8,
          pointHoverBackgroundColor: '#667eea',
          pointHoverBorderColor: '#fff',
          pointHoverBorderWidth: 3
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: true,
            position: 'top',
            labels: {
              padding: 20,
              usePointStyle: true,
              font: {
                size: 13,
                weight: '500'
              }
            }
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
              color: 'rgba(0,0,0,0.05)'
            },
            ticks: {
              padding: 10,
              color: '#6c757d',
              maxRotation: 45
            }
          }
        },
        animation: {
          duration: 2000,
          easing: 'easeInOutQuart'
        },
        interaction: {
          intersect: false,
          mode: 'index'
        }
      }
    });
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const ctx = document.getElementById('degreeInsight');
      const chart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: {!! json_encode($degreeCategory) !!},
          datasets: [{
            label: 'Total Pembelian',
            data: {!! json_encode($degree) !!},
            backgroundColor: 'rgba(79, 172, 254, 0.2)',
            borderColor: '#4facfe',
            borderWidth: 3,
            fill: true,
            tension: 0.4,
            pointBackgroundColor: '#4facfe',
            pointBorderColor: '#fff',
            pointBorderWidth: 2,
            pointRadius: 6,
            pointHoverRadius: 8,
            pointHoverBackgroundColor: '#4facfe',
            pointHoverBorderColor: '#fff',
            pointHoverBorderWidth: 3
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: true,
              position: 'top',
              labels: {
                padding: 20,
                usePointStyle: true,
                font: {
                  size: 13,
                  weight: '500'
                }
              }
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
                color: 'rgba(0,0,0,0.05)'
              },
              ticks: {
                padding: 10,
                color: '#6c757d',
                maxRotation: 45
              }
            }
          },
          animation: {
            duration: 2000,
            easing: 'easeInOutQuart'
          },
          interaction: {
            intersect: false,
            mode: 'index'
          }
        }
      });
    });
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const ctx = document.getElementById('courseInsight');
      const chart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: {!! json_encode($courseCategory) !!},
          datasets: [{
            label: 'Total Pembelian',
            data: {!! json_encode($course) !!},
            backgroundColor: 'rgba(67, 233, 123, 0.2)',
            borderColor: '#43e97b',
            borderWidth: 3,
            fill: true,
            tension: 0.4,
            pointBackgroundColor: '#43e97b',
            pointBorderColor: '#fff',
            pointBorderWidth: 2,
            pointRadius: 6,
            pointHoverRadius: 8,
            pointHoverBackgroundColor: '#43e97b',
            pointHoverBorderColor: '#fff',
            pointHoverBorderWidth: 3
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: true,
              position: 'top',
              labels: {
                padding: 20,
                usePointStyle: true,
                font: {
                  size: 13,
                  weight: '500'
                }
              }
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
                color: 'rgba(0,0,0,0.05)'
              },
              ticks: {
                padding: 10,
                color: '#6c757d',
                maxRotation: 45
              }
            }
          },
          animation: {
            duration: 2000,
            easing: 'easeInOutQuart'
          },
          interaction: {
            intersect: false,
            mode: 'index'
          }
        }
      });
    });
  </script>
@endsection