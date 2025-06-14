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
      <style>
        /* Body Background Enhancement */
        body {
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
            min-height: 100vh;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Main Container */
        .user-list-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 40px;
            box-shadow: 
                0 32px 64px rgba(0, 0, 0, 0.12),
                0 16px 32px rgba(0, 0, 0, 0.08),
                inset 0 1px 0 rgba(255, 255, 255, 0.9),
                0 0 0 1px rgba(255, 255, 255, 0.4);
            position: relative;
            overflow: hidden;
            margin: 20px auto;
            max-width: 1400px;
        }

        .user-list-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #667eea, #764ba2, #f093fb, #f5576c, #667eea);
            background-size: 300% 100%;
            animation: rainbow 4s linear infinite;
        }

        @keyframes rainbow {
            0% { background-position: 0% 50%; }
            100% { background-position: 300% 50%; }
        }

        .user-list-container::after {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #667eea, #764ba2, #f093fb, #f5576c);
            background-size: 200% 200%;
            animation: gradientBorder 8s ease infinite;
            border-radius: 26px;
            z-index: -1;
            opacity: 0.3;
        }

        @keyframes gradientBorder {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Header Styling */
        h1.fw-bold {
            background: linear-gradient(135deg, #2d3748 0%, #4a5568 50%, #667eea 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: 2.5rem;
            font-weight: 800;
            letter-spacing: -0.03em;
            margin-bottom: 0;
            position: relative;
        }

        h1.fw-bold::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            border-radius: 2px;
        }

        /* Search Form */
        .bg-white.rounded-lg {
            background: rgba(255, 255, 255, 0.9) !important;
            backdrop-filter: blur(15px) !important;
            border: 1px solid rgba(255, 255, 255, 0.4) !important;
            border-radius: 20px !important;
            box-shadow: 
                0 16px 40px rgba(0, 0, 0, 0.08),
                0 8px 16px rgba(0, 0, 0, 0.04),
                inset 0 1px 0 rgba(255, 255, 255, 0.9);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .bg-white.rounded-lg::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            transition: left 0.6s ease;
        }

        .bg-white.rounded-lg:hover::before {
            left: 100%;
        }

        .bg-white.rounded-lg:hover {
            transform: translateY(-4px);
            box-shadow: 
                0 24px 56px rgba(0, 0, 0, 0.12),
                0 12px 24px rgba(0, 0, 0, 0.08),
                inset 0 1px 0 rgba(255, 255, 255, 0.95);
        }

        /* Input Fields */
        input[type="text"], select {
            border: 2px solid rgba(226, 232, 240, 0.8) !important;
            border-radius: 16px !important;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            font-size: 0.95rem;
            font-weight: 500;
        }

        input[type="text"]:focus, select:focus {
            border-color: #667eea !important;
            box-shadow: 
                0 0 0 4px rgba(102, 126, 234, 0.15),
                0 8px 24px rgba(102, 126, 234, 0.2) !important;
            outline: none !important;
            transform: translateY(-2px);
            background: rgba(255, 255, 255, 0.98);
        }

        /* Buttons */
        .bg-blue-500 {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%) !important;
            border: none !important;
            border-radius: 16px !important;
            font-weight: 700;
            letter-spacing: 0.025em;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 
                0 8px 24px rgba(102, 126, 234, 0.4),
                inset 0 1px 0 rgba(255, 255, 255, 0.3);
            color: white !important;
            text-decoration: none !important;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .bg-blue-500::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }

        .bg-blue-500:hover::before {
            left: 100%;
        }

        .bg-blue-500:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 
                0 16px 40px rgba(102, 126, 234, 0.5),
                inset 0 1px 0 rgba(255, 255, 255, 0.4);
            background: linear-gradient(135deg, #5a67d8 0%, #6b46c1 50%, #ec4899 100%) !important;
        }

        /* Table Container */
        .table-container {
            background: rgba(255, 255, 255, 0.98);
            border-radius: 24px;
            box-shadow: 
                0 24px 48px rgba(0, 0, 0, 0.1),
                0 12px 24px rgba(0, 0, 0, 0.06),
                inset 0 1px 0 rgba(255, 255, 255, 0.95);
            overflow: hidden;
            backdrop-filter: blur(25px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            position: relative;
        }

        .table-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(102, 126, 234, 0.3), transparent);
        }

        .custom-table {
            margin: 0;
            border-collapse: separate;
            border-spacing: 0;
            background: transparent;
        }

        /* Table Header */
        .custom-table thead {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            position: relative;
        }

        .custom-table thead::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, transparent, #cbd5e0, transparent);
        }

        .custom-table th {
            border: none;
            padding: 28px 32px;
            font-weight: 800;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            color: #4a5568;
            background: transparent;
            position: relative;
        }

        /* Table Body */
        .custom-table td {
            padding: 28px 32px;
            border-top: 1px solid rgba(226, 232, 240, 0.4);
            color: #2d3748;
            font-size: 1rem;
            font-weight: 500;
            vertical-align: middle;
            white-space: nowrap;
            background: rgba(255, 255, 255, 0.6);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .custom-table tbody tr {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }

        .custom-table tbody tr:hover {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.08) 0%, rgba(118, 75, 162, 0.08) 50%, rgba(240, 147, 251, 0.08) 100%);
            transform: translateY(-3px) scale(1.01);
            box-shadow: 
                0 16px 40px rgba(0, 0, 0, 0.12),
                0 8px 16px rgba(102, 126, 234, 0.15);
        }

        .custom-table tbody tr:hover td {
            background: transparent;
            color: #1a202c;
        }

        /* Avatar */
        .avatar-circle {
            flex: 0 0 48px;
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 25%, #f093fb 75%, #f5576c 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            color: white;
            font-size: 1.1rem;
            box-shadow: 
                0 8px 24px rgba(102, 126, 234, 0.4),
                inset 0 2px 0 rgba(255, 255, 255, 0.4);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .avatar-circle::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, transparent 0%, rgba(255, 255, 255, 0.3) 50%, transparent 100%);
            transform: translateX(-100%) rotate(45deg);
            transition: transform 0.8s ease;
        }

        .custom-table tbody tr:hover .avatar-circle::before {
            transform: translateX(100%) rotate(45deg);
        }

        .custom-table tbody tr:hover .avatar-circle {
            transform: scale(1.15) rotate(5deg);
            box-shadow: 
                0 16px 40px rgba(102, 126, 234, 0.5),
                inset 0 2px 0 rgba(255, 255, 255, 0.5);
        }

        /* Name Cell */
        .name-cell {
            display: inline-flex;
            align-items: center;
            gap: 20px;
            width: 100%;
        }

        .user-name {
            flex: 1;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            margin: 0;
            line-height: 48px;
            font-weight: 700;
            color: #2d3748;
            transition: all 0.3s ease;
        }

        .custom-table tbody tr:hover .user-name {
            color: #667eea;
            text-shadow: 0 2px 4px rgba(102, 126, 234, 0.2);
        }

        /* Pagination */
        .pagination {
            display: flex;
            list-style: none;
            padding: 0;
            border-radius: 20px;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(15px);
            box-shadow: 
                0 16px 40px rgba(0, 0, 0, 0.1),
                0 8px 16px rgba(0, 0, 0, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.4);
        }

        .pagination li {
            margin: 0 3px;
        }

        .pagination a {
            display: block;
            padding: 16px 20px;
            text-decoration: none;
            color: #4a5568;
            border-radius: 12px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            font-weight: 600;
            position: relative;
            overflow: hidden;
        }

        .pagination a::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
            border-radius: 12px;
        }

        .pagination a:hover {
            transform: translateY(-3px) scale(1.05);
            color: white;
            box-shadow: 0 12px 32px rgba(102, 126, 234, 0.4);
        }

        .pagination a:hover::before {
            opacity: 1;
        }

        .pagination a span {
            position: relative;
            z-index: 1;
        }

        .pagination .active a {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            color: white;
            font-weight: 800;
            box-shadow: 
                0 8px 24px rgba(102, 126, 234, 0.5),
                inset 0 2px 0 rgba(255, 255, 255, 0.3);
        }

        /* Responsive Enhancements */
        @media (max-width: 768px) {
            .user-list-container {
                padding: 24px;
                border-radius: 20px;
                margin: 10px;
            }

            h1.fw-bold {
                font-size: 2rem;
            }

            .custom-table th,
            .custom-table td {
                padding: 20px 24px;
            }

            .avatar-circle {
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }

            .user-name {
                line-height: 40px;
            }
        }

        /* Smooth transitions for everything */
        * {
            scroll-behavior: smooth;
        }

        .table-responsive {
            border-radius: 24px;
            overflow: hidden;
        }

        /* Loading animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .user-list-container {
            animation: fadeInUp 0.8s ease-out;
        }

        .custom-table tbody tr {
            animation: fadeInUp 0.6s ease-out;
            animation-fill-mode: both;
        }

        .custom-table tbody tr:nth-child(1) { animation-delay: 0.1s; }
        .custom-table tbody tr:nth-child(2) { animation-delay: 0.2s; }
        .custom-table tbody tr:nth-child(3) { animation-delay: 0.3s; }
        .custom-table tbody tr:nth-child(4) { animation-delay: 0.4s; }
        .custom-table tbody tr:nth-child(5) { animation-delay: 0.5s; }

        /* Floating particles effect */
        .user-list-container::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: radial-gradient(circle at 20% 80%, rgba(102, 126, 234, 0.1) 0%, transparent 50%),
                        radial-gradient(circle at 80% 20%, rgba(118, 75, 162, 0.1) 0%, transparent 50%),
                        radial-gradient(circle at 40% 40%, rgba(240, 147, 251, 0.1) 0%, transparent 50%);
            pointer-events: none;
            z-index: -1;
        }
    </style>
@endsection