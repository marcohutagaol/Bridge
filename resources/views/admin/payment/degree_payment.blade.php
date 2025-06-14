@extends('layouts.admin')

@section('content')
  <div class="career-purchases-container">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="page-title">Course Purchases List</h1>
    </div>

    <form method="GET" action="{{ route('admin.payment.course_payment') }}">
      <div class="filter-section">
        <h2 class="filter-title">Filter</h2>
        <div class="filter-grid">
          <input type="text" name="user_name" value="{{ request('user_name') }}" placeholder="Search by User Name"
            class="form-input" />

          <input type="text" name="item_name" value="{{ request('item_name') }}" placeholder="Search by Course Name"
            class="form-input" />

          <select name="method" class="form-select">
            <option value="">All Methods</option>
            <option value="paypal" {{ request('method') == 'paypal' ? 'selected' : '' }}>PayPal</option>
            <option value="creditcard" {{ request('method') == 'creditcard' ? 'selected' : '' }}>Credit Card</option>
          </select>
        </div>

        <div class="filter-actions">
          <div class="button-group">
            <button type="submit" class="btn btn-primary">Apply Filter</button>
            <a href="{{ route('admin.payment.course_payment') }}" class="btn btn-secondary">Reset</a>
          </div>
          <div class="per-page-select">
            <select name="per_page" onchange="this.form.submit()" class="form-select">
              <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25</option>
              <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
              <option value="100" {{ request('per_page') == 100 ? 'selected' : '' }}>100</option>
            </select>
          </div>
        </div>
      </div>
    </form>

    <div class="table-wrapper">
      <div class="table-responsive">
        <table class="data-table">
          <thead>
            <tr>
              <th>No.</th>
              <th>User ID</th>
              <th>User Name</th>
              <th>Item ID</th>
              <th>Item Name</th>
              <th>Amount</th>
              <th>Country</th>
              <th>Method</th>
            </tr>
          </thead>
          <tbody>
            @foreach($checkouts as $index => $checkout)
            <tr>
              <td>
                <span class="row-number">{{ $index + 1 }}</span>
              </td>
              <td>{{ $checkout->user_id }}</td>
              <td>
                <div class="user-info">
                  <div class="user-avatar">{{ substr($checkout->user->name ?? 'N', 0, 1) }}</div>
                  <span class="user-name">{{ $checkout->user->name ?? 'N/A' }}</span>
                </div>
              </td>
              <td>{{ $checkout->item_id }}</td>
              <td>
                <span class="course-name">{{ $checkout->course->name }}</span>
              </td>
              <td>
                <span class="amount">${{ number_format($checkout->payment_amount, 2) }}</span>
              </td>
              <td>
                <span class="country-badge">{{ $checkout->country }}</span>
              </td>
              <td>
                <span class="method-badge method-{{ strtolower($checkout->payment_method) }}">
                  {{ ucfirst($checkout->payment_method) }}
                </span>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

    <div class="pagination-wrapper">
      <nav aria-label="Page navigation">
        <ul class="pagination">
          <li class="page-item {{ $checkouts->onFirstPage() ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $checkouts->previousPageUrl() }}">
              <span aria-hidden="true">&laquo;</span> Previous
            </a>
          </li>

          @for ($i = 1; $i <= $checkouts->lastPage(); $i++)
          <li class="page-item {{ $checkouts->currentPage() == $i ? 'active' : '' }}">
            <a class="page-link" href="{{ $checkouts->url($i) }}">{{ $i }}</a>
          </li>
          @endfor

          <li class="page-item {{ $checkouts->hasMorePages() ? '' : 'disabled' }}">
            <a class="page-link" href="{{ $checkouts->nextPageUrl() }}">
              Next <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  <style>
    /* Base Styles */
    body {
      background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
      background-attachment: fixed;
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      min-height: 100vh;
    }

    /* Main Container */
    .career-purchases-container {
      max-width: 1400px;
      margin: 0 auto;
      padding: 32px;
      animation: fadeInUp 0.6s ease-out;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Page Title */
    .page-title {
      font-size: 2.25rem;
      font-weight: 700;
      background: linear-gradient(135deg, #1e293b 0%, #475569 50%, #64748b 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      margin: 0;
      letter-spacing: -0.02em;
      position: relative;
    }

    .page-title::after {
      content: '';
      position: absolute;
      bottom: -8px;
      left: 0;
      width: 60px;
      height: 3px;
      background: linear-gradient(135deg, #3b82f6, #8b5cf6);
      border-radius: 2px;
    }

    /* Filter Section */
    .filter-section {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
      border-radius: 16px;
      padding: 28px;
      margin-bottom: 28px;
      box-shadow: 
        0 10px 25px rgba(0, 0, 0, 0.08),
        0 4px 10px rgba(0, 0, 0, 0.04),
        0 0 0 1px rgba(255, 255, 255, 0.7);
      border: 1px solid rgba(226, 232, 240, 0.6);
      position: relative;
      overflow: hidden;
    }

    .filter-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 2px;
      background: linear-gradient(135deg, #3b82f6, #8b5cf6, #ec4899);
      background-size: 200% 100%;
      animation: shimmer 3s ease-in-out infinite;
    }

    @keyframes shimmer {
      0%, 100% { background-position: 200% 0; }
      50% { background-position: -200% 0; }
    }

    .filter-title {
      font-size: 1.25rem;
      font-weight: 600;
      color: #374151;
      margin-bottom: 20px;
    }

    .filter-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 18px;
      margin-bottom: 24px;
    }

    .filter-actions {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 16px;
    }

    .button-group {
      display: flex;
      gap: 12px;
    }

    /* Form Elements */
    .form-input, .form-select {
      width: 100%;
      padding: 12px 16px;
      border: 2px solid rgba(226, 232, 240, 0.8);
      border-radius: 12px;
      font-size: 14px;
      font-weight: 500;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(5px);
    }

    .form-input:focus, .form-select:focus {
      outline: none;
      border-color: #3b82f6;
      box-shadow: 
        0 0 0 4px rgba(59, 130, 246, 0.15),
        0 4px 12px rgba(59, 130, 246, 0.1);
      transform: translateY(-1px);
      background: rgba(255, 255, 255, 0.98);
    }

    /* Buttons */
    .btn {
      padding: 12px 24px;
      border-radius: 12px;
      font-weight: 600;
      text-decoration: none;
      border: none;
      cursor: pointer;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      position: relative;
      overflow: hidden;
    }

    .btn::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, transparent, rgba(255, 255, 255, 0.2), transparent);
      transition: left 0.5s ease;
    }

    .btn:hover::before {
      left: 100%;
    }

    .btn-primary {
      background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
      color: white;
      box-shadow: 0 4px 15px rgba(59, 130, 246, 0.3);
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
      background: linear-gradient(135deg, #2563eb 0%, #7c3aed 100%);
    }

    .btn-secondary {
      background: linear-gradient(135deg, #6b7280 0%, #9ca3af 100%);
      color: white;
      box-shadow: 0 4px 15px rgba(107, 114, 128, 0.3);
    }

    .btn-secondary:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(107, 114, 128, 0.4);
      background: linear-gradient(135deg, #4b5563 0%, #6b7280 100%);
    }

    /* Table Wrapper */
    .table-wrapper {
      background: rgba(255, 255, 255, 0.98);
      backdrop-filter: blur(15px);
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 
        0 20px 40px rgba(0, 0, 0, 0.08),
        0 8px 16px rgba(0, 0, 0, 0.04),
        0 0 0 1px rgba(255, 255, 255, 0.7);
      border: 1px solid rgba(226, 232, 240, 0.5);
      position: relative;
    }

    .table-wrapper::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 1px;
      background: linear-gradient(135deg, transparent, rgba(59, 130, 246, 0.3), transparent);
    }

    /* Table */
    .data-table {
      width: 100%;
      border-collapse: separate;
      border-spacing: 0;
      margin: 0;
    }

    .data-table thead {
      background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
      position: relative;
    }

    .data-table thead::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 2px;
      background: linear-gradient(135deg, transparent, #cbd5e0, transparent);
    }

    .data-table th {
      padding: 20px 24px;
      text-align: left;
      font-weight: 700;
      color: #374151;
      font-size: 13px;
      text-transform: uppercase;
      letter-spacing: 0.8px;
      border: none;
    }

    .data-table td {
      padding: 20px 24px;
      border-top: 1px solid rgba(226, 232, 240, 0.4);
      color: #1e293b;
      font-size: 14px;
      font-weight: 500;
      background: rgba(255, 255, 255, 0.6);
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .data-table tbody tr {
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      position: relative;
    }

    .data-table tbody tr:hover {
      background: linear-gradient(135deg, rgba(59, 130, 246, 0.05) 0%, rgba(139, 92, 246, 0.05) 100%);
      transform: translateY(-2px) scale(1.005);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    }

    .data-table tbody tr:hover td {
      background: transparent;
      color: #0f172a;
    }

    /* Table Elements */
    .row-number {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 32px;
      height: 32px;
      background: linear-gradient(135deg, #e2e8f0 0%, #cbd5e0 100%);
      border-radius: 50%;
      font-weight: 700;
      font-size: 12px;
      color: #374151;
      transition: all 0.3s ease;
    }

    .data-table tbody tr:hover .row-number {
      background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
      color: white;
      transform: scale(1.1);
    }

    .user-info {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .user-avatar {
      width: 40px;
      height: 40px;
      background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: 700;
      font-size: 14px;
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
    }

    .data-table tbody tr:hover .user-avatar {
      transform: scale(1.1) rotate(5deg);
      box-shadow: 0 6px 20px rgba(59, 130, 246, 0.4);
    }

    .user-name {
      font-weight: 600;
      color: #1e293b;
      transition: color 0.3s ease;
    }

    .data-table tbody tr:hover .user-name {
      color: #3b82f6;
    }

    .course-name {
      font-weight: 600;
      color: #1e293b;
      transition: color 0.3s ease;
    }

    .data-table tbody tr:hover .course-name {
      color: #8b5cf6;
    }

    .amount {
      font-weight: 700;
      color: #059669;
      font-size: 15px;
      transition: all 0.3s ease;
    }

    .data-table tbody tr:hover .amount {
      color: #047857;
      transform: scale(1.05);
    }

    .country-badge {
      background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
      color: #374151;
      padding: 6px 12px;
      border-radius: 8px;
      font-size: 11px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      transition: all 0.3s ease;
    }

    .data-table tbody tr:hover .country-badge {
      background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
      color: #1e40af;
      transform: scale(1.05);
    }

    .method-badge {
      padding: 6px 14px;
      border-radius: 8px;
      font-size: 11px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      transition: all 0.3s ease;
    }

    .method-paypal {
      background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
      color: #1e40af;
    }

    .method-creditcard {
      background: linear-gradient(135deg, #fed7aa 0%, #fdba74 100%);
      color: #c2410c;
    }

    .data-table tbody tr:hover .method-badge {
      transform: scale(1.05);
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    /* Pagination */
    .pagination-wrapper {
      margin-top: 32px;
      display: flex;
      justify-content: center;
    }

    .pagination {
      display: flex;
      list-style: none;
      padding: 0;
      margin: 0;
      gap: 6px;
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
      padding: 8px;
      border-radius: 16px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
      border: 1px solid rgba(226, 232, 240, 0.5);
    }

    .page-item {
      margin: 0;
    }

    .page-link {
      display: block;
      padding: 10px 16px;
      color: #374151;
      text-decoration: none;
      border-radius: 10px;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      font-weight: 600;
      position: relative;
      overflow: hidden;
    }

    .page-link::before {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
      opacity: 0;
      transition: opacity 0.3s ease;
      border-radius: 10px;
    }

    .page-link:hover {
      transform: translateY(-2px);
      color: white;
      box-shadow: 0 8px 20px rgba(59, 130, 246, 0.3);
    }

    .page-link:hover::before {
      opacity: 1;
    }

    .page-link span {
      position: relative;
      z-index: 1;
    }

    .page-item.active .page-link {
      background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
      color: white;
      box-shadow: 0 4px 15px rgba(59, 130, 246, 0.4);
    }

    .page-item.disabled .page-link {
      color: #9ca3af;
      cursor: not-allowed;
    }

    .page-item.disabled .page-link:hover {
      transform: none;
      box-shadow: none;
      color: #9ca3af;
    }

    .page-item.disabled .page-link:hover::before {
      opacity: 0;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .career-purchases-container {
        padding: 20px;
      }

      .page-title {
        font-size: 1.75rem;
      }

      .filter-section {
        padding: 20px;
      }

      .filter-grid {
        grid-template-columns: 1fr;
      }

      .filter-actions {
        flex-direction: column;
        align-items: stretch;
      }

      .data-table {
        font-size: 13px;
      }

      .data-table th,
      .data-table td {
        padding: 16px 20px;
      }

      .user-avatar {
        width: 36px;
        height: 36px;
        font-size: 13px;
      }

      .row-number {
        width: 28px;
        height: 28px;
        font-size: 11px;
      }

      .pagination {
        padding: 6px;
        gap: 4px;
      }

      .page-link {
        padding: 8px 12px;
        font-size: 13px;
      }
    }

    /* Loading animation for table rows */
    .data-table tbody tr {
      animation: fadeInRow 0.5s ease-out;
      animation-fill-mode: both;
    }

    .data-table tbody tr:nth-child(1) { animation-delay: 0.1s; }
    .data-table tbody tr:nth-child(2) { animation-delay: 0.15s; }
    .data-table tbody tr:nth-child(3) { animation-delay: 0.2s; }
    .data-table tbody tr:nth-child(4) { animation-delay: 0.25s; }
    .data-table tbody tr:nth-child(5) { animation-delay: 0.3s; }

    @keyframes fadeInRow {
      from {
        opacity: 0;
        transform: translateX(-20px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }
  </style>
@endsection