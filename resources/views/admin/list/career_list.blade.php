@extends('layouts.admin')

@section('content')
    <div class="list-container">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold m-0">Career List</h1>

            <a href="/career-create" class="bg-blue-500 px-4 py-2 rounded hover:bg-blue-600">
                Create New
            </a>
        </div>

        <form method="GET" action="{{ route('admin.list.career_list') }}">
            <div class="p-4 bg-white rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <input type="text" name="item_name" value="{{ request('item_name') }}" placeholder="Search"
                        class="px-3 py-2 border rounded w-full" />
                </div>

                <div class="mt-4 items-center flex-wrap gap-2 d-flex justify-content-between">
                    <div class="gap-2 flex">
                        <button type="submit" class="bg-blue-500 px-4 py-2 rounded hover:bg-blue-600">
                            Apply Filter
                        </button>
                        <a href="{{ route('admin.list.career_list') }}"
                            class="bg-blue-500 px-4 py-2 rounded hover:bg-blue-600">
                            Reset
                        </a>
                    </div>
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
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Salary</th>
                            <th>Jobs</th>
                            <th>Credential</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($careers as $career)
                            <tr>
                                <td>{{ $career->id }}</td>
                                <td>{{ $career->name }}</td>
                                <td>{{ $career->image }}</td>
                                <td>{{ $career->description }}</td>
                                <td>{{ $career->kategoris }}</td>
                                <td>{{ $career->median_salary }}</td>
                                <td>{{ $career->credential }}</td>
                                <td>{{ $career->jobs_available }}</td>
                                <td>
                                    <div class="action-buttons d-flex gap-2">
                                        <a href="/career-edit/{{ $career->id }}">
                                            <button class="btn btn-outline-info btn-sm" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </a>
                                        <form action="{{ route('admin.list.career_destroy', $career->id) }}" method="POST"
                                            onsubmit="return confirm('Are you sure want to delete this career?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-4">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item {{ $careers->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $careers->previousPageUrl() }}">
                            <span aria-hidden="true">&laquo;</span> Previous
                        </a>
                    </li>

                    @for ($i = 1; $i <= $careers->lastPage(); $i++)
                        <li class="page-item {{ $careers->currentPage() == $i ? 'active' : '' }}">
                            <a class="page-link" href="{{ $careers->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor

                    <li class="page-item {{ $careers->hasMorePages() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $careers->nextPageUrl() }}">
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
            overflow-x: auto;
        }

        .custom-table {
            margin: 0;
            border-collapse: separate;
            border-spacing: 0;
            width: 100%;
            table-layout: fixed;
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
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .custom-table td {
            padding: 20px 25px;
            border-top: 1px solid #f1f4f8;
            color: #2d3748;
            font-size: 0.95rem;
            vertical-align: middle;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
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