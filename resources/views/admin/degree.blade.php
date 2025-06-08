@extends('layouts.admin')

@section('content')
  <div class="list-container">
    <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="fw-bold m-0">Daftar Degree</h1>
    <div class="dropdown">
      <button class="btn btn-outline-primary dropdown-toggle" type="button" id="levelDropdown" data-bs-toggle="dropdown"
      aria-expanded="false">
      10
      </button>
      <ul class="dropdown-menu" aria-labelledby="levelDropdown">
      <li><a class="dropdown-item active" href="/checkout-data">10</a></li>
      <li><a class="dropdown-item" href="#">25</a></li>
      <li><a class="dropdown-item" href="#">40</a></li>
      </ul>
    </div>
    </div>

    <div class="table-container">
    <div class="table-responsive">
      <table class="table custom-table">
      <thead>
        <tr>
        <th>ID</th>
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
        @foreach($checkouts as $checkout)
      <tr>
      <td>{{ $checkout->id }}</td>
      <td>{{ $checkout->user_id }}</td>
      <td>{{ $checkout->user->name ?? 'N/A' }}</td>
      <td>{{ $checkout->item_id }}</td>
      <td>{{ $checkout->module->name }}</td>
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
  </style>
@endsection