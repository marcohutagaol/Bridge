@extends('layouts.admin')

@section('content')
  <h1 class="mb-3 fw-bold">Daftar User</h1>
  <div class="overflow-x-auto">
    <table class="min-w-full rounded-lg">
    <thead class="bg-teal-600 text-white">
      <tr>
      <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">ID</th>
      <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Name</th>
      <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Rating</th>
      <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Category</th>
      <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Image</th>

      </tr>
    </thead>
    <tbody class=" divide-y divide-gray-200">
      @foreach($courses as $course)
      <tr>
      <td class="px-6 py-4 text-sm text-gray-700">{{ $course->id }}</td>
      <td class="px-6 py-4 text-sm text-gray-700">{{ $course->name }}</td>
      <td class="px-6 py-4 text-sm text-gray-700">{{ $course->rating }}</td>
      <td class="px-6 py-4 text-sm text-gray-700">{{ $course->kategori }}</td>
      <td class="px-6 py-4 text-sm text-gray-700"><img src="{{ $course->institution_logo }}" alt=""></td>
      </tr>
    @endforeach
    </tbody>
    </table>
  </div>
@endsection