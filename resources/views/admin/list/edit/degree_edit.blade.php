@extends('layouts.admin')

@section('content')
<div class="create-container">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="fw-bold m-0">Edit Degree</h1>
    <a href="/degree-list" class="btn btn-outline-secondary">
      <i class="fas fa-arrow-left me-2"></i>Back to List
    </a>
  </div>

  <div class="card">
    <div class="card-body">
      <form action="{{ route('admin.list.edit.degree_update', $degree->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
          <div class="col-md-6 mb-3">
            <label class="form-label">Degree Name</label>
            <input name="degree" type="text" class="form-control" placeholder="Enter degree name"
              value="{{ $degree->degree }}">
          </div>

          <div class="col-md-6 mb-3">
            <label class="form-label">Degree Level</label>
            <select name="tipe" class="form-control">
              <option value="">Select level</option>
              <option value="bachelor" {{ $degree->tipe == 'bachelor' ? 'selected' : '' }}>Bachelor's Degree</option>
              <option value="master" {{ $degree->tipe == 'master' ? 'selected' : '' }}>Master's Degree</option>
              <option value="doctorate" {{ $degree->tipe == 'doctorate' ? 'selected' : '' }}>Doctorate</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label class="form-label">University</label>
            <input name="name" type="text" class="form-control" placeholder="Enter university name"
              value="{{ $degree->name }}">
          </div>

          <div class="col-md-6 mb-3">
            <label class="form-label">Ranking of University</label>
            <input name="ranking" type="text" class="form-control" placeholder="Enter ranking of university"
              value="{{ $degree->ranking }}">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">University Logo</label>
          <div class="input-group">
            <input name="image_path" type="text" class="form-control" placeholder="Enter logo URL"
              value="{{ $degree->image_path }}">
            <button class="btn btn-outline-secondary" type="button">Preview</button>
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Application Deadline</label>
          <textarea name="application_deadline" class="form-control" rows="3"
            placeholder="Enter application deadline">{{ $degree->application_deadline }}</textarea>
        </div>

        <div class="d-flex justify-content-end gap-2 mt-4">
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-save me-2"></i>Update Degree
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

  .form-control,
  .form-select {
    border: 1px solid #e2e8f0;
    border-radius: 0.375rem;
    padding: 0.5rem 1rem;
    transition: all 0.2s ease;
  }

  .form-control:focus,
  .form-select:focus {
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

  .module-item {
    background: #f8fafc;
    transition: all 0.2s ease;
  }

  .module-item:hover {
    background: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
  }

  .btn-outline-primary {
    color: #13547a;
    border-color: #13547a;
  }

  .btn-outline-primary:hover {
    background: #13547a;
    color: white;
  }
</style>
@endsection