@extends('layouts.admin')

@section('content')
    <div class="create-container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold m-0">Create Course</h1>
            <a href="/course-list" class="btn btn-outline-secondary">
                <i class="fas fa-arrow-left me-2"></i>Back to List
            </a>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.list.create.course_store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Course Name</label>
                            <input name="name" type="text" class="form-control" placeholder="Enter course name">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Category</label>
                            <select name="kategori" class="form-control">
                                <option value="">Select category</option>
                                <option value="programming">Programming</option>
                                <option value="design">Design</option>
                                <option value="business">Business</option>
                                <option value="marketing">Marketing</option>
                                <option value="technology">Technology</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Institution</label>
                            <input name="institution" type="text" class="form-control" placeholder="Enter institution name">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Institution Logo</label>
                            <input name="institution_logo" type="text" class="form-control" placeholder="Enter institution name">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Course Image</label>
                        <div class="input-group">
                            <input name="image" type="text" class="form-control" placeholder="Enter image URL">
                            <button class="btn btn-outline-secondary" type="button">Preview</button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="3"
                            placeholder="Enter course description"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Duration</label>
                            <div class="input-group">
                                <input name="duration_r" type="text" class="form-control" placeholder="Enter duration">
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2 mt-4">
                        <button type="reset" class="btn btn-secondary">
                            <i class="fas fa-undo me-2"></i>Reset
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i>Create Course
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