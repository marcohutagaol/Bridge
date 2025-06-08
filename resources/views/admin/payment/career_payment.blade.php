@extends('layouts.admin')

@section('content')
  <div class="list-container">
    <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="fw-bold m-0">Career Purcases List</h1>
    </div>

    <form method="GET" action="{{ route('admin.payment.career_payment') }}">
    <div class="p-4 bg-white rounded-lg">
      <h2 class="text-xl font-semibold mb-4">Filter</h2>
      <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
      <input type="text" name="user_name" value="{{ request('user_name') }}" placeholder="Search by User Name"
        class="px-3 py-2 border rounded w-full" />

      <input type="text" name="item_name" value="{{ request('item_name') }}" placeholder="Search by Career Name"
        class="px-3 py-2 border rounded w-full" />

      <select name="method" class="px-3 py-2 border rounded w-full">
        <option value="">All Methods</option>
        <option value="paypal" {{ request('method') == 'paypal' ? 'selected' : '' }}>PayPal</option>
        <option value="creditcard" {{ request('method') == 'creditcard' ? 'selected' : '' }}>Credit Card</option>
      </select>
      </div>

      <div class="mt-4 items-center flex-wrap gap-2 d-flex justify-content-between">
      <div class="gap-2 flex">
        <button type="submit" class="bg-blue-500 px-4 py-2 rounded hover:bg-blue-600">
        Apply Filter
        </button>
        <a href="{{ route('admin.payment.career_payment') }}" class="bg-blue-500 px-4 py-2 rounded hover:bg-blue-600">
        Reset
        </a>
      </div>
      <!-- Dropdown for Items per Page -->
      <div class="relative">
        <select name="per_page" onchange="this.form.submit()" class="px-3 py-2 border rounded">
        <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
        <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25</option>
        <option value="40" {{ request('per_page') == 40 ? 'selected' : '' }}>40</option>
        </select>
      </div>
      </div>
    </div>
    </form>

    <div class="table-container">
    <div class="table-responsive">
      <table class="table custom-table">
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
      <td>{{ $index + 1 }}</td>
      <td>{{ $checkout->user_id }}</td>
      <td>{{ $checkout->user->name ?? 'N/A' }}</td>
      <td>{{ $checkout->item_id }}</td>
      <td>{{ $checkout->career->name }}</td>
      <td>{{ $checkout->payment_amount }}</td>
      <td>{{ $checkout->country }}</td>
      <td>{{ $checkout->payment_method }}</td>
      </tr>
      @endforeach
      </tbody>
      </table>
    </div>
    </div>

    <div class="mt-4">
    <nav aria-label="Page navigation">
      <ul class="pagination justify-content-center">
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
    .list-container {
    background-color: white;
    border-radius: 15px;
    padding: 25px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
    }

    .table-container {
    background: white;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.02);
    overflow: hidden;
    }

    .custom-table {
    margin: 0;
    border-collapse: separate;
    border-spacing: 0;
    }

    .custom-table thead {
    background: #f8fafc;
    }

    .custom-table th {
    border: none;
    padding: 18px 25px;
    font-weight: 600;
    font-size: 0.85rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    color: #5c6c7c;
    background: #f8fafc;
    }

    .custom-table td {
    padding: 20px 25px;
    border-top: 1px solid #f1f4f8;
    color: #2d3748;
    font-size: 0.95rem;
    vertical-align: middle;
    }

    .custom-table tbody tr {
    transition: all 0.2s ease;
    }

    .custom-table tbody tr:hover {
    background-color: #f8fafc;
    transform: translateY(-1px);
    }

    .pagination {
    margin-bottom: 0;
    }

    .page-link {
    padding: 0.5rem 1rem;
    color: #13547a;
    background-color: #fff;
    border: 1px solid #dee2e6;
    transition: all 0.2s ease;
    }

    .page-item.active .page-link {
    background-color: #13547a;
    border-color: #13547a;
    }

    .page-item.disabled .page-link {
    color: #6c757d;
    pointer-events: none;
    background-color: #fff;
    border-color: #dee2e6;
    }

    .btn-outline-primary {
    color: #13547a;
    border-color: #13547a;
    }

    .btn-outline-primary:hover {
    background-color: #13547a;
    color: white;
    }

    .dropdown-menu {
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .dropdown-item {
    padding: 8px 20px;
    transition: background-color 0.2s ease;
    }

    .dropdown-item:hover {
    background-color: #f8fafc;
    }
  </style>
@endsection