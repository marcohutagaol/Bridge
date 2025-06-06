@extends('layouts.admin')

@section('content')
  <h1 class="mb-3 fw-bold">Daftar User</h1>
  <!-- Dropdown Level -->
  <div class="dropdown me-3 mb-3">
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
  <div class="overflow-x-auto">
    <table class="min-w-full rounded-lg">
    <thead class="bg-teal-600 text-white">
      <tr>
      <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">ID</th>
      <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">User Id</th>
      <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">User Name</th>
      <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Item Id</th>
      <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Item Name</th>
      <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Amount</th>
      <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Country</th>
      <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Method</th>

      </tr>
    </thead>
    <tbody class=" divide-y divide-gray-200">
      @foreach($checkouts as $checkout)
      <tr>
      <td class="px-6 py-4 text-sm text-gray-700">{{ $checkout->id }}</td>
      <td class="px-6 py-4 text-sm text-gray-700">{{ $checkout->user_id }}</td>
      <td class="px-6 py-4 text-sm text-gray-700">{{ $checkout->user->name ?? 'N/A' }}</td> 
      <td class="px-6 py-4 text-sm text-gray-700">{{ $checkout->item_id }}</td>
      <td class="px-6 py-4 text-sm text-gray-700">{{ $checkout->career->name }}</td>
      <td class="px-6 py-4 text-sm text-gray-700">{{ $checkout->payment_amount }}</td>
      <td class="px-6 py-4 text-sm text-gray-700">{{ $checkout->country }}</td>
      <td class="px-6 py-4 text-sm text-gray-700">{{ $checkout->payment_method }}</td>
      </tr>
    @endforeach
    </tbody>
    </table>
    <!-- Pagination Section -->
    <div class="col-11">
    <div class="row mt-4">
      <div class="col-11">
      <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
        <li class="page-item {{ $checkouts->onFirstPage() ? 'disabled' : '' }}" id="prevPageBtn">
          <a class="page-link" href="{{ $checkouts->previousPageUrl() }}" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span> Previous
          </a>
        </li>

        @for ($i = 1; $i <= $checkouts->lastPage(); $i++)
      <li class="page-item {{ $checkouts->currentPage() == $i ? 'active' : '' }}">
        <a class="page-link" href="{{ $checkouts->url($i) }}">{{ $i }}</a>
      </li>
      @endfor

        <li class="page-item {{ $checkouts->hasMorePages() ? '' : 'disabled' }}" id="nextPageBtn">
          <a class="page-link" href="{{ $checkouts->nextPageUrl() }}" aria-label="Next">
          Next <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
        </ul>
      </nav>
      </div>
    </div>
    </div>
  </div>
@endsection