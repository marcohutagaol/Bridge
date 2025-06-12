@extends('layouts.admin')

@section('content')
  <div class="list-container">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="fw-bold m-0">Grade Learning</h1>
    </div>

    <!-- Score Summary Cards -->
    <div class="row mb-4">
      <div class="col-md-3">
        <div class="stat-card stat-card-primary">
          <div class="stat-icon">
            <i class="fas fa-graduation-cap"></i>
          </div>
          <div class="stat-content">
            <h3>{{ $totalCompleted }}</h3>
            <p>Total Selesai</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="stat-card stat-card-success">
          <div class="stat-icon">
            <i class="fas fa-chart-line"></i>
          </div>
          <div class="stat-content">
            <h3>{{ number_format($averageScore ?? 0, 1) }}</h3>
            <p>Rata-rata Nilai</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="stat-card stat-card-warning">
          <div class="stat-icon">
            <i class="fas fa-trophy"></i>
          </div>
          <div class="stat-content">
            <h3>{{ $highestScore ?? 0 }}</h3>
            <p>Nilai Tertinggi</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="stat-card stat-card-info">
          <div class="stat-icon">
            <i class="fas fa-chart-bar"></i>
          </div>
          <div class="stat-content">
            <h3>{{ $lowestScore ?? 0 }}</h3>
            <p>Nilai Terendah</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Grade Distribution Cards -->
    <div class="row mb-4">
      <div class="col-md-12">
        <h4 class="mb-3">Distribusi Grade</h4>
      </div>
      @php
        $gradeColors = [
          'Excellent (90-100)' => ['bg' => 'linear-gradient(45deg, #56ab2f, #a8e6cf)', 'icon' => 'fas fa-star'],
          'Good (80-89)' => ['bg' => 'linear-gradient(45deg, #667eea, #764ba2)', 'icon' => 'fas fa-thumbs-up'],
          'Average (70-79)' => ['bg' => 'linear-gradient(45deg, #ffecd2, #fcb69f)', 'icon' => 'fas fa-equals'],
          'Below Average (60-69)' => ['bg' => 'linear-gradient(45deg, #ff9a9e, #fecfef)', 'icon' => 'fas fa-arrow-down'],
          'Poor (0-59)' => ['bg' => 'linear-gradient(45deg, #f093fb, #f5576c)', 'icon' => 'fas fa-exclamation-triangle']
        ];
      @endphp

      @foreach($gradeStats as $grade => $count)
      <div class="col-md-2-4">
        <div class="grade-card">
          <div class="grade-icon" style="background: {{ $gradeColors[$grade]['bg'] }}">
            <i class="{{ $gradeColors[$grade]['icon'] }}"></i>
          </div>
          <div class="grade-content">
            <h3>{{ $count }}</h3>
            <p>{{ $grade }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <!-- Charts Section -->
    <div class="row">
      <div class="col-md-6">
        <div class="chart-container">
          <h4 class="chart-title">Grade Distribution (Doughnut Chart)</h4>
          <canvas id="doughnutChart"></canvas>
        </div>
      </div>
      <div class="col-md-6">
        <div class="chart-container">
          <h4 class="chart-title">Score Distribution (Bar Chart)</h4>
          <canvas id="scoreBarChart"></canvas>
        </div>
      </div>
    </div>

    <!-- Score Range Chart -->
    <div class="row mt-4">
      <div class="col-md-12">
        <div class="chart-container">
          <h4 class="chart-title">Distribusi Nilai per Range (Line Chart)</h4>
          <canvas id="lineChart"></canvas>
        </div>
      </div>
    </div>
  </div>

  <style>
    .list-container {
      background-color: white;
      border-radius: 15px;
      padding: 25px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
    }

    /* Statistics Cards */
    .stat-card {
      background: white;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      transition: transform 0.2s ease;
    }

    .stat-card:hover {
      transform: translateY(-2px);
    }

    .stat-icon {
      width: 60px;
      height: 60px;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 15px;
      font-size: 24px;
      color: white;
    }

    .stat-card-primary .stat-icon {
      background: linear-gradient(45deg, #667eea, #764ba2);
    }

    .stat-card-warning .stat-icon {
      background: linear-gradient(45deg, #f093fb, #f5576c);
    }

    .stat-card-info .stat-icon {
      background: linear-gradient(45deg, #4facfe, #00f2fe);
    }

    .stat-card-success .stat-icon {
      background: linear-gradient(45deg, #43e97b, #38f9d7);
    }

    .stat-content h3 {
      margin: 0;
      font-size: 2rem;
      font-weight: bold;
      color: #2d3748;
    }

    .stat-content p {
      margin: 0;
      color: #718096;
      font-size: 0.9rem;
    }

    /* Grade Cards */
    .col-md-2-4 {
      flex: 0 0 20%;
      max-width: 20%;
    }

    .grade-card {
      background: white;
      border-radius: 10px;
      padding: 15px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      text-align: center;
      margin-bottom: 20px;
      transition: transform 0.2s ease;
    }

    .grade-card:hover {
      transform: translateY(-2px);
    }

    .grade-icon {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 10px;
      font-size: 20px;
      color: white;
    }

    .grade-content h3 {
      margin: 0;
      font-size: 1.8rem;
      font-weight: bold;
      color: #2d3748;
    }

    .grade-content p {
      margin: 0;
      color: #718096;
      font-size: 0.8rem;
      line-height: 1.2;
    }

    /* Chart Container */
    .chart-container {
      background: white;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }

    .chart-title {
      margin-bottom: 20px;
      color: #2d3748;
      font-weight: 600;
      text-align: center;
    }

    canvas {
      max-height: 300px;
    }

    @media (max-width: 768px) {
      .col-md-2-4 {
        flex: 0 0 50%;
        max-width: 50%;
      }
    }
  </style>

  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const gradeStats = @json($gradeStats);
      const scoreDistribution = @json($scoreDistribution);
      
      // Grade Distribution Data
      const gradeLabels = Object.keys(gradeStats);
      const gradeData = Object.values(gradeStats);
      const gradeColors = ['#56ab2f', '#667eea', '#ffecd2', '#ff9a9e', '#f093fb'];

      // Doughnut Chart
      const doughnutCtx = document.getElementById('doughnutChart').getContext('2d');
      new Chart(doughnutCtx, {
        type: 'doughnut',
        data: {
          labels: gradeLabels,
          datasets: [{
            data: gradeData,
            backgroundColor: gradeColors,
            borderWidth: 2,
            borderColor: '#fff'
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: true,
          plugins: {
            legend: {
              position: 'bottom',
              labels: {
                padding: 15,
                font: {
                  size: 10
                }
              }
            },
            tooltip: {
              callbacks: {
                label: function(context) {
                  const total = context.dataset.data.reduce((a, b) => a + b, 0);
                  const percentage = ((context.parsed * 100) / total).toFixed(1);
                  return context.label + ': ' + context.parsed + ' (' + percentage + '%)';
                }
              }
            }
          }
        }
      });

      // Score Bar Chart
      const scoreBarCtx = document.getElementById('scoreBarChart').getContext('2d');
      new Chart(scoreBarCtx, {
        type: 'bar',
        data: {
          labels: gradeLabels,
          datasets: [{
            label: 'Jumlah Siswa',
            data: gradeData,
            backgroundColor: gradeColors.map(color => color + '80'),
            borderColor: gradeColors,
            borderWidth: 2,
            borderRadius: 5
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: true,
          plugins: {
            legend: {
              display: false
            }
          },
          scales: {
            y: {
              beginAtZero: true,
              ticks: {
                stepSize: 1
              }
            }
          }
        }
      });

      // Line Chart untuk distribusi score
      const lineCtx = document.getElementById('lineChart').getContext('2d');
      const scoreRanges = scoreDistribution.map(item => item.score_range + '-' + (item.score_range + 9));
      const scoreCounts = scoreDistribution.map(item => item.count);

      new Chart(lineCtx, {
        type: 'line',
        data: {
          labels: scoreRanges,
          datasets: [{
            label: 'Jumlah Siswa',
            data: scoreCounts,
            borderColor: '#667eea',
            backgroundColor: 'rgba(102, 126, 234, 0.1)',
            borderWidth: 3,
            fill: true,
            tension: 0.4,
            pointBackgroundColor: '#667eea',
            pointBorderColor: '#fff',
            pointBorderWidth: 2,
            pointRadius: 6
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: true,
          plugins: {
            legend: {
              display: false
            }
          },
          scales: {
            y: {
              beginAtZero: true,
              ticks: {
                stepSize: 1
              }
            },
            x: {
              title: {
                display: true,
                text: 'Range Nilai'
              }
            }
          }
        }
      });
    });
  </script>
@endsection