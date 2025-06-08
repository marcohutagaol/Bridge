@extends('layouts.admin')

@section('content')
    <div class="create-container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold m-0">Create Career</h1>
            <a href="/career-list" class="btn btn-outline-secondary">
                <i class="fas fa-arrow-left me-2"></i>Back to List
            </a>
        </div>

        <div class="card">
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Career Name</label>
                            <input type="text" class="form-control" placeholder="Enter career name">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Category</label>
                            <select class="form-control">
                                <option value="">Select category</option>
                                <option value="datascience">Data Science</option>
                                <option value="bisnis">Business</option>
                                <option value="salesandmarketing">Sales & Marketing</option>
                                <option value="softwareandedit">Software & IT</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Image URL</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter image URL">
                            <button class="btn btn-outline-secondary" type="button">Preview</button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" rows="3" placeholder="Enter career description"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Additional Description</label>
                        <textarea class="form-control" rows="2" placeholder="Enter additional details"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Median Salary</label>
                            <div class="input-group">
                                <span class="input-group-text">IDR</span>
                                <input type="text" class="form-control" placeholder="Enter median salary">
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Jobs Available</label>
                            <input type="number" class="form-control" placeholder="Enter number of available jobs">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label class="form-label">Required Credentials</label>
                            <input type="text" class="form-control"
                                placeholder="Enter required credentials (separate with commas)">
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2 mt-4">
                        <button type="reset" class="btn btn-secondary">
                            <i class="fas fa-undo me-2"></i>Reset
                        </button>
                        <button type="button" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i>Create Career
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