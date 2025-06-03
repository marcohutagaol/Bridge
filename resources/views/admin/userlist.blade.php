@extends('layouts.admin')

@section('content')
    <h1 class="mb-3 fw-bold">Daftar User</h1>
    <div class="overflow-x-auto">
        <table class="min-w-full rounded-lg">
            <thead class="bg-teal-600 text-white">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">No.</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Email</th>

                </tr>
            </thead>
            <tbody class=" divide-y divide-gray-200">
                <!-- {{ $i = 1 }} -->
                @foreach($users as $user)
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-700">{{ $i++ }}</td>
                        <td class="px-6 py-4 text-sm text-gray-700">{{ $user->id }}</td>
                        <td class="px-6 py-4 text-sm text-gray-700">{{ $user->name }}</td>
                        <td class="px-6 py-4 text-sm text-gray-700">{{ $user->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection