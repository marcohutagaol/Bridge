@extends('layouts.admin')

@section('content')
  <div class="list-container">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="fw-bold m-0">Progress Learning</h1>
    </div>

    <!-- Statistics Cards -->
    <div class="row mb-4">
      <div class="col-md-3">
        <div class="stat-card stat-card-primary">
          <div class="stat-icon">
            <i class="fas fa-users"></i>
          </div>
          <div class="stat-content">
            <h3>{{ $totalUsers }}</h3>
            <p>Total Users</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="stat-card stat-card-warning">
          <div class="stat-icon">
            <i class="fas fa-clock"></i>
          </div>
          <div class="stat-content">
            <h3>{{ $stats['none'] }}</h3>
            <p>Belum Mulai</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="stat-card stat-card-info">
          <div class="stat-icon">
            <i class="fas fa-spinner"></i>
          </div>
          <div class="stat-content">
            <h3>{{ $stats['in_progress'] }}</h3>
            <p>Dalam Progress</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="stat-card stat-card-success">
          <div class="stat-icon">
            <i class="fas fa-check-circle"></i>
          </div>
          <div class="stat-content">
            <h3>{{ $stats['done'] }}</h3>
            <p>Selesai</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Charts Section -->
    <div class="row">
      <div class="col-md-6">
        <div class="chart-container">
          <h4 class="chart-title">Progress Distribution (Pie Chart)</h4>
          <canvas id="pieChart"></canvas>
        </div>
      </div>
      <div class="col-md-6">
        <div class="chart-container">
          <h4 class="chart-title">Progress Distribution (Bar Chart)</h4>
          <canvas id="barChart"></canvas>
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
  </style>

  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const stats = @json($stats);
      
      // Data untuk charts
      const labels = ['Belum Mulai', 'Dalam Progress', 'Selesai'];
      const data = [stats.none, stats.in_progress, stats.done];
      const colors = ['#f093fb', '#4facfe', '#43e97b'];
      const borderColors = ['#f5576c', '#00f2fe', '#38f9d7'];

      // Pie Chart
      const pieCtx = document.getElementById('pieChart').getContext('2d');
      new Chart(pieCtx, {
        type: 'pie',
        data: {
          labels: labels,
          datasets: [{
            data: data,
            backgroundColor: colors,
            borderColor: borderColors,
            borderWidth: 2
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: true,
          plugins: {
            legend: {
              position: 'bottom',
              labels: {
                padding: 20,
                font: {
                  size: 12
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

      // Bar Chart
      const barCtx = document.getElementById('barChart').getContext('2d');
      new Chart(barCtx, {
        type: 'bar',
        data: {
          labels: labels,
          datasets: [{
            label: 'Jumlah User',
            data: data,
            backgroundColor: colors.map(color => color + '80'), // Add transparency
            borderColor: borderColors,
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
    });
  </script>
@endsection