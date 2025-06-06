@extends('layouts.admin')

@section('content')
  <h1 class="mb-3 fw-bold">Ranking Charts</h1>

  <div class="row mt-5">
    <div class="bg-white rounded-md p-4 mx-4" style="width: 45%;">
    <h2 class="text-l mb-4">Career Insight Chart</h2>
    <canvas id="careerInsight"></canvas>
    </div>

    <div class="bg-white rounded-md p-4 mx-4" style="width: 45%;">
    <h2 class="text-l mb-4">Degree Insight Chart</h2>
    <canvas id="degreeInsight"></canvas>
    </div>
  </div>

  <div class="row mt-5">
    <div class="bg-white rounded-md p-4 mx-4" style="width: 93%;">
    <h2 class="text-l mb-4">Course Insight Chart</h2>
    <canvas id="courseInsight"></canvas>
    </div>
  </div>

  <script>
    const ctx = document.getElementById('careerInsight');
    const careerInsight = new Chart(ctx, {
    type: 'line',
    data: {
      labels: {!! json_encode($careerCategory) !!},
      datasets: [{
      label: 'Total Pembelian',
      data: {!! json_encode($career) !!},
      backgroundColor: 'rgba(76, 175, 80, 0.2)',
      borderColor: '#4caf50',
      borderWidth: 2,
      fill: true,
      tension: 0.3,
      pointBackgroundColor: '#4caf50',
      pointBorderColor: '#fff',
      pointRadius: 5
      }]
    },
    options: {
      responsive: true,
      plugins: {
      legend: {
        display: true
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
    const ctx = document.getElementById('degreeInsight');
    const chart = new Chart(ctx, {
      type: 'line',
      data: {
      labels: {!! json_encode($degreeCategory) !!},
      datasets: [{
        label: 'Total Pembelian',
        data: {!! json_encode($degree) !!},
        backgroundColor: 'rgba(76, 175, 80, 0.2)',
        borderColor: '#4caf50',
        borderWidth: 2,
        fill: true,
        tension: 0.3,
        pointBackgroundColor: '#4caf50',
        pointBorderColor: '#fff',
        pointRadius: 5
      }]
      },
      options: {
      responsive: true,
      plugins: {
        legend: {
        display: true
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
    const ctx = document.getElementById('courseInsight');
    const chart = new Chart(ctx, {
      type: 'line',
      data: {
      labels: {!! json_encode($courseCategory) !!},
      datasets: [{
        label: 'Total Pembelian',
        data: {!! json_encode($course) !!},
        backgroundColor: 'rgba(76, 175, 80, 0.2)',
        borderColor: '#4caf50',
        borderWidth: 2,
        fill: true,
        tension: 0.3,
        pointBackgroundColor: '#4caf50',
        pointBorderColor: '#fff',
        pointRadius: 5
      }]
      },
      options: {
      responsive: true,
      plugins: {
        legend: {
        display: true
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
@endsection