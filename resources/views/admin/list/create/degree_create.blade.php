@extends('layouts.admin')

@section('content')
    <div class="create-container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold m-0">Create Degree</h1>
            <a href="/degree-list" class="btn btn-outline-secondary">
                <i class="fas fa-arrow-left me-2"></i>Back to List
            </a>
        </div>

        <div class="card">
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Degree Name</label>
                            <input type="text" class="form-control" placeholder="Enter degree name">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Degree Level</label>
                            <select class="form-control">
                                <option value="">Select level</option>
                                <option value="bachelor">Bachelor's Degree</option>
                                <option value="master">Master's Degree</option>
                                <option value="doctorate">Doctorate</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">University</label>
                            <input type="text" class="form-control" placeholder="Enter university name">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Field of Study</label>
                            <input type="text" class="form-control" placeholder="Enter field of study">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">University Logo</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter logo URL">
                            <button class="btn btn-outline-secondary" type="button">Preview</button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Program Description</label>
                        <textarea class="form-control" rows="3" placeholder="Enter program description"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Duration</label>
                            <div class="input-group">
                                <input type="number" class="form-control" placeholder="Enter duration">
                                <select class="form-select" style="max-width: 120px;">
                                    <option value="years">Years</option>
                                    <option value="semesters">Semesters</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Language</label>
                            <select class="form-control">
                                <option value="">Select language</option>
                                <option value="english">English</option>
                                <option value="indonesian">Indonesian</option>
                                <option value="bilingual">Bilingual</option>
                            </select>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Tuition Fee (IDR/year)</label>
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input type="number" class="form-control" placeholder="Enter tuition fee">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Entry Requirements</label>
                            <textarea class="form-control" rows="3"
                                placeholder="Enter entry requirements (e.g., High school diploma, minimum GPA)"></textarea>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Career Opportunities</label>
                            <textarea class="form-control" rows="3"
                                placeholder="Enter potential career paths for graduates"></textarea>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Curriculum Overview</label>
                        <div class="course-modules">
                            <div class="module-item border rounded p-3 mb-2">
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <input type="text" class="form-control" placeholder="Course/Module name">
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <input type="text" class="form-control" placeholder="Credits">
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <select class="form-control">
                                            <option value="">Select semester</option>
                                            <option value="1">Semester 1</option>
                                            <option value="2">Semester 2</option>
                                            <option value="3">Semester 3</option>
                                            <option value="4">Semester 4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-outline-primary btn-sm mt-2">
                                <i class="fas fa-plus me-1"></i>Add Course
                            </button>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2 mt-4">
                        <button type="reset" class="btn btn-secondary">
                            <i class="fas fa-undo me-2"></i>Reset
                        </button>
                        <button type="button" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i>Create Degree
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