@extends('layouts.admin')

@section('content')


  <div class="list-container">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="fw-bold m-0">Analytics Pesan Pengguna</h1>
    </div>

    <!-- Message Summary Cards -->
    <div class="row mb-4">
      <div class="col-md-3">
        <div class="stat-card stat-card-primary">
          <div class="stat-icon">
            <i class="fas fa-envelope"></i>
          </div>
          <div class="stat-content">
            <h3>{{ $totalMessages }}</h3>
            <p>Total Pesan</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="stat-card stat-card-success">
          <div class="stat-icon">
            <i class="fas fa-check-circle"></i>
          </div>
          <div class="stat-content">
            <h3>{{ $readMessages }}</h3>
            <p>Pesan Terbaca</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="stat-card stat-card-warning">
          <div class="stat-icon">
            <i class="fas fa-clock"></i>
          </div>
          <div class="stat-content">
            <h3>{{ $unreadMessages }}</h3>
            <p>Pesan Belum Dibaca</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="stat-card stat-card-info">
          <div class="stat-icon">
            <i class="fas fa-reply"></i>
          </div>
          <div class="stat-content">
            <h3>{{ $repliedMessages }}</h3>
            <p>Pesan Dibalas</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Template Type Distribution Cards -->
    <div class="row mb-4">
      <div class="col-md-12">
        <h4 class="mb-3">Distribusi Jenis Pesan</h4>
      </div>
      @php
        $templateColors = [
          'career-guidance' => ['bg' => 'linear-gradient(45deg, #56ab2f, #a8e6cf)', 'icon' => 'fas fa-briefcase'],
          'academic-consultation' => ['bg' => 'linear-gradient(45deg, #667eea, #764ba2)', 'icon' => 'fas fa-graduation-cap'],
          'scholarship-info' => ['bg' => 'linear-gradient(45deg, #ffecd2, #fcb69f)', 'icon' => 'fas fa-dollar-sign'],
          'skill-development' => ['bg' => 'linear-gradient(45deg, #ff9a9e, #fecfef)', 'icon' => 'fas fa-cogs'],
          'internship-job' => ['bg' => 'linear-gradient(45deg, #f093fb, #f5576c)', 'icon' => 'fas fa-user-tie'],
          'research-thesis' => ['bg' => 'linear-gradient(45deg, #4facfe, #00f2fe)', 'icon' => 'fas fa-microscope'],
          'others' => ['bg' => 'linear-gradient(45deg, #a8caba, #5d4e75)', 'icon' => 'fas fa-question-circle']
        ];

        $templateLabels = [
          'career-guidance' => 'Bimbingan Karir',
          'academic-consultation' => 'Konsultasi Akademik',
          'scholarship-info' => 'Informasi Beasiswa',
          'skill-development' => 'Pengembangan Skill',
          'internship-job' => 'Magang & Kerja',
          'research-thesis' => 'Penelitian & Skripsi',
          'others' => 'Lainnya'
        ];
      @endphp

      @foreach($templateStats as $template => $count)
      <div class="col-md-2">
        <div class="template-card">
          <div class="template-icon" style="background: {{ $templateColors[$template]['bg'] ?? $templateColors['others']['bg'] }}">
            <i class="{{ $templateColors[$template]['icon'] ?? $templateColors['others']['icon'] }}"></i>
          </div>
          <div class="template-content">
            <h3>{{ $count }}</h3>
            <p>{{ $templateLabels[$template] ?? 'Tidak Ada Template' }}</p>
            @php
              $percentage = $totalMessages > 0 ? round(($count / $totalMessages) * 100, 1) : 0;
            @endphp
            <small class="text-muted">{{ $percentage }}%</small>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <!-- Charts Section -->
    <div class="row">
      <div class="col-md-6">
        <div class="chart-container">
          <h4 class="chart-title">Distribusi Jenis Pesan (Pie Chart)</h4>
          <canvas id="templatePieChart"></canvas>
        </div>
      </div>
      <div class="col-md-6">
        <div class="chart-container">
          <h4 class="chart-title">Status Pesan (Bar Chart)</h4>
          <canvas id="statusBarChart"></canvas>
        </div>
      </div>
    </div>

    <!-- Monthly Message Trend -->
    <div class="row mt-4">
      <div class="col-md-12">
        <div class="chart-container">
          <h4 class="chart-title">Trend Pesan Bulanan (Line Chart)</h4>
          <canvas id="monthlyTrendChart"></canvas>
        </div>
      </div>
    </div>

    <!-- Recent Messages Table -->
    <div class="row mt-4">
      <div class="col-md-12">
        <div class="chart-container">
          <h4 class="chart-title">Pesan Terbaru</h4>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead class="table-light">
                <tr>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Subjek</th>
                  <th>Jenis</th>
                  <th>Status</th>
                  <th>Tanggal</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($recentMessages as $message)
                <tr id="message-row-{{ $message->id }}">
                  <td>{{ $message->name }}</td>
                  <td>{{ $message->email }}</td>
                  <td>{{ Str::limit($message->subject, 30) }}</td>
                  <td>
                    <span class="badge bg-primary">
                      {{ $templateLabels[$message->template_type] ?? 'Tidak Ada Template' }}
                    </span>
                  </td>
                  <td>
                    <span id="status-badge-{{ $message->id }}">
                      @if($message->status == 'unread')
                        <span class="badge bg-warning">Belum Dibaca</span>
                      @elseif($message->status == 'read')
                        <span class="badge bg-info">Terbaca</span>
                      @else
                        <span class="badge bg-success">Dibalas</span>
                      @endif
                    </span>
                  </td>
                  <td>{{ $message->created_at->format('d/m/Y H:i') }}</td>
                  <td>
                    <div class="action-buttons">
                      @if($message->status == 'unread')
                        <button type="button" class="btn btn-sm btn-outline-success mark-read-btn" 
                                data-message-id="{{ $message->id }}" 
                                title="Tandai sebagai sudah dibaca">
                          <i class="fas fa-check"></i> Baca
                        </button>
                      @endif
                      
                      @if($message->status != 'replied')
                        <button type="button" class="btn btn-sm btn-outline-primary mark-replied-btn" 
                                data-message-id="{{ $message->id }}" 
                                title="Tandai sebagai sudah dibalas">
                          <i class="fas fa-reply"></i> Balas
                        </button>
                      @endif
                      
                      <a href="{{ route('admin.messages.show', $message->id) }}" 
                         class="btn btn-sm btn-outline-info" 
                         title="Lihat detail pesan">
                        <i class="fas fa-eye"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Loading Modal -->
  <div class="modal fade" id="loadingModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-sm modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body text-center">
          <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <p class="mt-2 mb-0">Memperbarui status...</p>
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

    /* Template Cards */
    .template-card {
      background: white;
      border-radius: 10px;
      padding: 15px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      text-align: center;
      margin-bottom: 20px;
      transition: transform 0.2s ease;
    }

    .template-card:hover {
      transform: translateY(-2px);
    }

    .template-icon {
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

    .template-content h3 {
      margin: 0;
      font-size: 1.8rem;
      font-weight: bold;
      color: #2d3748;
    }

    .template-content p {
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

    .table {
      margin-bottom: 0;
    }

    .table th {
      border-top: none;
      font-weight: 600;
      color: #2d3748;
    }

    /* Action Buttons */
    .action-buttons {
      display: flex;
      gap: 5px;
      flex-wrap: wrap;
    }

    .action-buttons .btn {
      font-size: 0.75rem;
      padding: 0.25rem 0.5rem;
    }

    /* Toast Notification */
    .toast-container {
      position: fixed;
      top: 20px;
      right: 20px;
      z-index: 1060;
    }

    .toast {
      min-width: 300px;
    }

    @media (max-width: 768px) {
      .col-md-2 {
        flex: 0 0 50%;
        max-width: 50%;
      }
      
      .action-buttons {
        flex-direction: column;
      }
      
      .action-buttons .btn {
        margin-bottom: 2px;
      }
    }
  </style>

  <!-- Toast Container -->
  <div class="toast-container"></div>

  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const templateStats = @json($templateStats);
      const statusStats = @json($statusStats);
      const monthlyData = @json($monthlyData);
      
      // Template Labels
      const templateLabels = {
        'career-guidance': 'Bimbingan Karir',
        'academic-consultation': 'Konsultasi Akademik',
        'scholarship-info': 'Informasi Beasiswa',
        'skill-development': 'Pengembangan Skill',
        'internship-job': 'Magang & Kerja',
        'research-thesis': 'Penelitian & Skripsi',
        'others': 'Lainnya'
      };

      // Template Data
      const templateChartLabels = Object.keys(templateStats).map(key => templateLabels[key] || 'Tidak Ada Template');
      const templateChartData = Object.values(templateStats);
      const templateColors = ['#56ab2f', '#667eea', '#ffecd2', '#ff9a9e', '#f093fb', '#4facfe', '#a8caba'];

      // Template Pie Chart
      const templatePieCtx = document.getElementById('templatePieChart').getContext('2d');
      new Chart(templatePieCtx, {
        type: 'pie',
        data: {
          labels: templateChartLabels,
          datasets: [{
            data: templateChartData,
            backgroundColor: templateColors,
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

      // Status Bar Chart
      const statusBarCtx = document.getElementById('statusBarChart').getContext('2d');
      const statusLabels = ['Belum Dibaca', 'Terbaca', 'Dibalas'];
      const statusColors = ['#ffc107', '#17a2b8', '#28a745'];
      
      new Chart(statusBarCtx, {
        type: 'bar',
        data: {
          labels: statusLabels,
          datasets: [{
            label: 'Jumlah Pesan',
            data: [statusStats.unread || 0, statusStats.read || 0, statusStats.replied || 0],
            backgroundColor: statusColors.map(color => color + '80'),
            borderColor: statusColors,
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

      // Monthly Trend Line Chart
      const monthlyTrendCtx = document.getElementById('monthlyTrendChart').getContext('2d');
      const monthlyLabels = monthlyData.map(item => item.month);
      const monthlyCounts = monthlyData.map(item => item.count);

      new Chart(monthlyTrendCtx, {
        type: 'line',
        data: {
          labels: monthlyLabels,
          datasets: [{
            label: 'Jumlah Pesan',
            data: monthlyCounts,
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
                text: 'Bulan'
              }
            }
          }
        }
      });

      // Status Update Functions
   // Status Update Functions with improved error handling
function showToast(message, type = 'success') {
  const toastContainer = document.querySelector('.toast-container');
  const toastId = 'toast-' + Date.now();
  const bgClass = type === 'success' ? 'bg-success' : 'bg-danger';
  
  const toastHtml = `
    <div id="${toastId}" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header ${bgClass} text-white">
        <strong class="me-auto">Notifikasi</strong>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast"></button>
      </div>
      <div class="toast-body">
        ${message}
      </div>
    </div>
  `;
  
  toastContainer.insertAdjacentHTML('beforeend', toastHtml);
  const toast = new bootstrap.Toast(document.getElementById(toastId));
  toast.show();
  
  // Remove toast element after it's hidden
  document.getElementById(toastId).addEventListener('hidden.bs.toast', function() {
    this.remove();
  });
}

function updateMessageStatus(messageId, status) {
  // Validate inputs
  if (!messageId || !status) {
    showToast('Parameter tidak valid.', 'error');
    return;
  }

  if (!['read', 'replied', 'unread'].includes(status)) {
    showToast('Status tidak valid.', 'error');
    return;
  }

  const loadingModal = new bootstrap.Modal(document.getElementById('loadingModal'));
  loadingModal.show();

  // Get CSRF token
  const csrfToken = document.querySelector('meta[name="csrf-token"]');
  if (!csrfToken) {
    loadingModal.hide();
    showToast('Token CSRF tidak ditemukan. Silakan refresh halaman.', 'error');
    return;
  }

  const url = `/admin/messages/${messageId}/status`;
  
  console.log('Sending request:', {
    url: url,
    method: 'PATCH',
    status: status,
    messageId: messageId
  });

  fetch(url, {
    method: 'PATCH',
    headers: {
      'Content-Type': 'application/json',
      'Accept': 'application/json',
      'X-CSRF-TOKEN': csrfToken.getAttribute('content'),
      'X-Requested-With': 'XMLHttpRequest'
    },
    body: JSON.stringify({ 
      status: status 
    })
  })
  .then(response => {
    console.log('Response status:', response.status);
    console.log('Response headers:', response.headers);
    
    // Check if response is ok
    if (!response.ok) {
      throw new Error(`HTTP error! status: ${response.status}`);
    }
    
    // Check if response is JSON
    const contentType = response.headers.get('content-type');
    if (!contentType || !contentType.includes('application/json')) {
      throw new Error('Response is not JSON');
    }
    
    return response.json();
  })
  .then(data => {
    loadingModal.hide();
    console.log('Response data:', data);
    
    if (data.success) {
      // Update status badge
      const statusBadge = document.getElementById(`status-badge-${messageId}`);
      if (statusBadge) {
        let badgeHtml = '';
        
        switch(status) {
          case 'read':
            badgeHtml = '<span class="badge bg-info">Terbaca</span>';
            break;
          case 'replied':
            badgeHtml = '<span class="badge bg-success">Dibalas</span>';
            break;
          case 'unread':
            badgeHtml = '<span class="badge bg-warning">Belum Dibaca</span>';
            break;
        }
        
        statusBadge.innerHTML = badgeHtml;
      }
      
      // Update action buttons
      const row = document.getElementById(`message-row-${messageId}`);
      if (row) {
        const actionButtons = row.querySelector('.action-buttons');
        
        if (status === 'read') {
          // Remove "Baca" button, keep "Balas" button
          const readBtn = actionButtons.querySelector('.mark-read-btn');
          if (readBtn) readBtn.remove();
        } else if (status === 'replied') {
          // Remove both "Baca" and "Balas" buttons
          const readBtn = actionButtons.querySelector('.mark-read-btn');
          const replyBtn = actionButtons.querySelector('.mark-replied-btn');
          if (readBtn) readBtn.remove();
          if (replyBtn) replyBtn.remove();
        }
      }
      
      showToast(data.message || 'Status berhasil diperbarui!', 'success');
    } else {
      throw new Error(data.message || 'Terjadi kesalahan saat memperbarui status.');
    }
  })
  .catch(error => {
    loadingModal.hide();
    console.error('Error details:', error);
    
    let errorMessage = 'Terjadi kesalahan saat memperbarui status.';
    
    if (error.message.includes('HTTP error')) {
      errorMessage = 'Server tidak dapat diakses. Silakan coba lagi.';
    } else if (error.message.includes('JSON')) {
      errorMessage = 'Respons server tidak valid. Silakan coba lagi.';
    } else if (error.message) {
      errorMessage = error.message;
    }
    
    showToast(errorMessage, 'error');
  });
}

// Event listeners for status update buttons
document.addEventListener('click', function(e) {
  if (e.target.closest('.mark-read-btn')) {
    e.preventDefault();
    const btn = e.target.closest('.mark-read-btn');
    const messageId = btn.getAttribute('data-message-id');
    
    if (!messageId) {
      showToast('ID pesan tidak ditemukan.', 'error');
      return;
    }
    
    // Disable button to prevent double-click
    btn.disabled = true;
    setTimeout(() => btn.disabled = false, 3000);
    
    updateMessageStatus(messageId, 'read');
  }
  
  if (e.target.closest('.mark-replied-btn')) {
    e.preventDefault();
    const btn = e.target.closest('.mark-replied-btn');
    const messageId = btn.getAttribute('data-message-id');
    
    if (!messageId) {
      showToast('ID pesan tidak ditemukan.', 'error');
      return;
    }
    
    // Disable button to prevent double-click
    btn.disabled = true;
    setTimeout(() => btn.disabled = false, 3000);
    
    updateMessageStatus(messageId, 'replied');
  }
});
      // Event listeners for status update buttons
      document.addEventListener('click', function(e) {
        if (e.target.closest('.mark-read-btn')) {
          e.preventDefault();
          const messageId = e.target.closest('.mark-read-btn').getAttribute('data-message-id');
          updateMessageStatus(messageId, 'read');
        }
        
        if (e.target.closest('.mark-replied-btn')) {
          e.preventDefault();
          const messageId = e.target.closest('.mark-replied-btn').getAttribute('data-message-id');
          updateMessageStatus(messageId, 'replied');
        }
      });
    });
  </script>
@endsection