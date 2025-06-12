@extends('layouts.admin')

@section('content')
    <div class="user-list-container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold m-0">User List</h1>
        </div>

        <form method="GET" action="{{ route('admin.list.users') }}">
            <div class="p-4 bg-white rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <input type="text" name="user_name" value="{{ request('item_name') }}" placeholder="Search"
                        class="px-3 py-2 border rounded w-full" />
                </div>

                <div class="mt-4 items-center flex-wrap gap-2 d-flex justify-content-between">
                    <div class="gap-2 flex">
                        <button type="submit" class="bg-blue-500 px-4 py-2 rounded hover:bg-blue-600">
                            Apply Filter
                        </button>
                        <a href="{{ route('admin.list.users') }}" class="bg-blue-500 px-4 py-2 rounded hover:bg-blue-600">
                            Reset
                        </a>
                    </div>
                    <div class="relative">
                        <select name="per_page" onchange="this.form.submit()" class="px-3 py-2 border rounded">
                            <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25</option>
                            <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
                            <option value="100" {{ request('per_page') == 100 ? 'selected' : '' }}>100</option>
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
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $index => $user)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $user->id }}</td>
                                <td>
                                    <div class="name-cell">
                                        <div class="avatar-circle">{{ strtoupper(substr($user->name, 0, 1)) }}</div>
                                        <span class="user-name">{{ $user->name }}</span>
                                    </div>
                                </td>
                                <td>{{ $user->email }}</td>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item {{ $users->onFirstPage() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $users->previousPageUrl() }}">
                        <span aria-hidden="true">&laquo;</span> Previous
                    </a>
                </li>

                @for ($i = 1; $i <= $users->lastPage(); $i++)
                    <li class="page-item {{ $users->currentPage() == $i ? 'active' : '' }}">
                        <a class="page-link" href="{{ $users->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor

                <li class="page-item {{ $users->hasMorePages() ? '' : 'disabled' }}">
                    <a class="page-link" href="{{ $users->nextPageUrl() }}">
                        Next <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>


    <style>
        .user-list-container {
            background-color: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
        }

        .search-box {
            width: 300px;
        }

        .search-box .input-group-text {
            border-radius: 20px 0 0 20px;
        }

        .search-box .form-control {
            border-radius: 0 20px 20px 0;
            padding-left: 0;
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

        .avatar-circle {
            width: 35px;
            height: 35px;
            background: #e2e8f0;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            color: #64748b;
            font-size: 0.9rem;
        }

        .action-buttons {
            display: flex;
            gap: 8px;
        }

        .action-buttons .btn {
            padding: 6px 10px;
            transition: all 0.2s ease;
        }

        .btn-outline-info {
            color: #0ea5e9;
            border-color: #0ea5e9;
        }

        .btn-outline-info:hover {
            background-color: #0ea5e9;
            color: white;
        }

        .btn-outline-danger {
            color: #ef4444;
            border-color: #ef4444;
        }

        .btn-outline-danger:hover {
            background-color: #ef4444;
            color: white;
        }

        .name-cell {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            width: 100%;
        }

        .avatar-circle {
            flex: 0 0 35px;
            width: 35px;
            height: 35px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            color: white;
            font-size: 0.9rem;
        }

        .user-name {
            flex: 1;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            margin: 0;
            line-height: 35px;
            font-weight: 500;
        }

        .custom-table td {
            // ...existing code...
            white-space: nowrap;
        }

        .pagination {
            display: flex;
            list-style: none;
            padding: 0;
            border-radius: 8px;
            overflow: hidden;
        }

        .pagination li {
            margin: 0 2px;
        }

        .pagination a {
            display: block;
            padding: 8px 12px;
            text-decoration: none;
            color: #1f4e6c;
            /* biru gelap */
            border-radius: 4px;
            transition: background-color 0.2s ease;
        }

        .pagination a:hover {
            background-color: #e6f0f5;
        }

        .pagination .active a {
            background-color: #174d6d;
            /* biru tua */
            color: white;
            font-weight: bold;
        }
    </style>
@endsection