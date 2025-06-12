@extends('layouts.admin')

@section('content')
<div class="create-container">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="fw-bold m-0">Edit Career</h1>
    <a href="/career-list" class="btn btn-outline-secondary">
      <i class="fas fa-arrow-left me-2"></i>Back to List
    </a>
  </div>

  <div class="card">
    <div class="card-body">
      <form action="{{ route('admin.list.edit.career_update', $career->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label>Career Name</label>
          <input type="text" name="name" class="form-control" value="{{ old('name', $career->name) }}">
        </div>

        <div class="mb-3">
          <label>Category</label>
          <select name="kategoris" class="form-control">
            <option value="bisnis" {{ $career->kategoris == 'bisnis' ? 'selected' : '' }}>Business</option>
            <option value="datascience" {{ $career->kategoris == 'datascience' ? 'selected' : '' }}>Data Science</option>
            <option value="healthcare" {{ $career->kategoris == 'healthcare' ? 'selected' : '' }}>Health Care</option>
            <option value="salesandmarketing" {{ $career->kategoris == 'salesandmarketing' ? 'selected' : '' }}>Sales &
              Marketing</option>
            <option value="softwareandedit" {{ $career->kategoris == 'softwareandedit' ? 'selected' : '' }}>Software & IT
            </option>
          </select>
        </div>

        <div class="mb-3">
          <label>Image URL</label>
          <input type="text" name="image" class="form-control" value="{{ old('image', $career->image) }}">
        </div>

        <div class="mb-3">
          <label>Description</label>
          <textarea name="description" class="form-control">{{ old('description', $career->description) }}</textarea>
        </div>

        <div class="mb-3">
          <label>Additional Description</label>
          <textarea name="description2" class="form-control">{{ old('description2', $career->description2) }}</textarea>
        </div>

        <div class="mb-3">
          <label>Median Salary</label>
          <input type="text" name="median_salary" class="form-control"
            value="{{ old('median_salary', $career->median_salary) }}">
        </div>

        <div class="mb-3">
          <label>Jobs Available</label>
          <input type="text" name="jobs_available" class="form-control"
            value="{{ old('jobs_available', $career->jobs_available) }}">
        </div>

        <div class="mb-3">
          <label>Required Credentials</label>
          <input type="text" name="credential" class="form-control"
            value="{{ old('credential', $career->credential) }}">
        </div>

        <div class="d-flex justify-content-end gap-2 mt-4">
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-save me-2"></i>Update Career
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<style>
  .create-container {
    max-width: 1200px;
    margin: 0 auto;
  }

  .card {
    background: white;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
    border: none;
  }

  .form-label {
    font-weight: 500;
    color: #2d3748;
    margin-bottom: 0.5rem;
  }

  .form-control {
    border: 1px solid #e2e8f0;
    border-radius: 0.375rem;
    padding: 0.5rem 1rem;
    transition: all 0.2s ease;
  }

  .form-control:focus {
    border-color: #13547a;
    box-shadow: 0 0 0 2px rgba(19, 84, 122, 0.1);
  }

  .btn {
    padding: 0.5rem 1.5rem;
    transition: all 0.2s ease;
  }

  .btn-primary {
    background: #13547a;
    border: none;
  }

  .btn-primary:hover {
    background: #0e405e;
    transform: translateY(-1px);
  }

  .btn-secondary {
    background: #718096;
    border: none;
  }

  .btn-outline-secondary {
    color: #718096;
    border-color: #718096;
  }

  .btn-outline-secondary:hover {
    background: #718096;
    color: white;
  }

  .input-group-text {
    background-color: #f8fafc;
    border-color: #e2e8f0;
  }
</style>
@endsection