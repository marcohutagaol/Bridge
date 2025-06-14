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
      <form action="{{ route('admin.list.create.career_store') }}" method="POST">
        @csrf
        <div class="row">
          <div class="col-md-6 mb-3">
            <label class="form-label">Career Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter career name">
          </div>

          <div class="col-md-6 mb-3">
            <label class="form-label">Category</label>
            <select name="kategoris" class="form-control">
              <option value="">Select category</option>
              <option value="bisnis">Business</option>
              <option value="datascience">Data Science</option>
              <option value="healthcare">Health Care</option>
              <option value="salesandmarketing">Sales & Marketing</option>
              <option value="softwareandedit">Software & IT</option>
            </select>
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Image URL</label>
          <div class="input-group">
            <input name="image" type="text" class="form-control" placeholder="Enter image URL">
            <button class="btn btn-outline-secondary" type="button">Preview</button>
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Description</label>
          <textarea name="description" class="form-control" rows="3" placeholder="Enter career description"></textarea>
        </div>

        <div class="mb-3">
          <label class="form-label">Additional Description</label>
          <textarea name="description2" class="form-control" rows="2" placeholder="Enter additional details"></textarea>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label class="form-label">Median Salary</label>
            <div class="input-group">
              <span class="input-group-text">IDR</span>
              <input name="median_salary" type="text" class="form-control" placeholder="Enter median salary">
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label class="form-label">Jobs Available</label>
            <input name="jobs_available" type="text" class="form-control" placeholder="Enter number of available jobs">
          </div>
        </div>

        <div class="row">
          <div class="col-12 mb-3">
            <label class="form-label">Required Credentials</label>
            <input name="credential" type="text" class="form-control" placeholder="Enter required credentials (separate with commas)">
          </div>
        </div>

        <div class="row">
          <div class="col-12 mb-3">
            <label class="form-label">Credentials Logo Url</label>
            <input name="credential_logo" type="text" class="form-control" placeholder="Enter credentials logo url (separate with commas)">
          </div>
        </div>

        <div class="d-flex justify-content-end gap-2 mt-4">
          <button type="reset" class="btn btn-secondary">
            <i class="fas fa-undo me-2"></i>Reset
          </button>
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-save me-2"></i>Create Career
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<style>
  /* Original styles (kept intact) */
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

  /* Enhanced styles from reference */
  /* Body Background Enhancement */
  body {
    background: linear-gradient(-45deg, #667eea, #764ba2, #f093fb, #f5576c, #4facfe, #00f2fe);
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

  /* Enhanced Create Container */
  .create-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
  }

  /* Enhanced Header */
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

  /* Enhanced Card */
  .card {
    background: rgba(255, 255, 255, 0.95) !important;
    backdrop-filter: blur(20px);
    border-radius: 24px !important;
    padding: 20px;
    box-shadow: 
      0 32px 64px rgba(0, 0, 0, 0.12),
      0 16px 32px rgba(0, 0, 0, 0.08),
      inset 0 1px 0 rgba(255, 255, 255, 0.9),
      0 0 0 1px rgba(255, 255, 255, 0.4) !important;
    position: relative;
    overflow: hidden;
    border: none !important;
    animation: fadeInUp 0.8s ease-out;
  }

  .card::before {
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

  .card::after {
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

  /* Enhanced Form Labels */
  .form-label {
    font-weight: 700 !important;
    color: #2d3748 !important;
    margin-bottom: 0.75rem !important;
    font-size: 0.95rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }

  /* Enhanced Form Controls */
  .form-control, select {
    border: 2px solid rgba(226, 232, 240, 0.8) !important;
    border-radius: 16px !important;
    padding: 0.75rem 1.25rem !important;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
    background: rgba(255, 255, 255, 0.9) !important;
    backdrop-filter: blur(10px);
    font-size: 0.95rem;
    font-weight: 500;
  }

  .form-control:focus, select:focus {
    border-color: #667eea !important;
    box-shadow: 
      0 0 0 4px rgba(102, 126, 234, 0.15),
      0 8px 24px rgba(102, 126, 234, 0.2) !important;
    outline: none !important;
    transform: translateY(-2px);
    background: rgba(255, 255, 255, 0.98) !important;
  }

  /* Enhanced Input Groups */
  .input-group-text {
    background: rgba(248, 250, 252, 0.9) !important;
    border: 2px solid rgba(226, 232, 240, 0.8) !important;
    border-radius: 16px 0 0 16px !important;
    font-weight: 600;
    color: #4a5568;
    backdrop-filter: blur(10px);
  }

  .input-group .form-control {
    border-left: none !important;
    border-radius: 0 16px 16px 0 !important;
  }

  .input-group .btn {
    border-radius: 0 16px 16px 0 !important;
  }

  /* Enhanced Buttons */
  .btn-primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%) !important;
    border: none !important;
    border-radius: 16px !important;
    font-weight: 700 !important;
    letter-spacing: 0.025em;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1) !important;
    box-shadow: 
      0 8px 24px rgba(102, 126, 234, 0.4),
      inset 0 1px 0 rgba(255, 255, 255, 0.3) !important;
    color: white !important;
    text-decoration: none !important;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
    padding: 0.75rem 2rem !important;
  }

  .btn-primary::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
    transition: left 0.6s ease;
  }

  .btn-primary:hover::before {
    left: 100%;
  }

  .btn-primary:hover {
    transform: translateY(-3px) scale(1.02) !important;
    box-shadow: 
      0 16px 40px rgba(102, 126, 234, 0.5),
      inset 0 1px 0 rgba(255, 255, 255, 0.4) !important;
    background: linear-gradient(135deg, #5a67d8 0%, #6b46c1 50%, #ec4899 100%) !important;
  }

  .btn-secondary {
    background: linear-gradient(135deg, #718096 0%, #4a5568 50%, #2d3748 100%) !important;
    border: none !important;
    border-radius: 16px !important;
    font-weight: 700 !important;
    letter-spacing: 0.025em;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1) !important;
    box-shadow: 
      0 8px 24px rgba(113, 128, 150, 0.4),
      inset 0 1px 0 rgba(255, 255, 255, 0.3) !important;
    color: white !important;
    padding: 0.75rem 2rem !important;
    position: relative;
    overflow: hidden;
  }

  .btn-secondary::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
    transition: left 0.6s ease;
  }

  .btn-secondary:hover::before {
    left: 100%;
  }

  .btn-secondary:hover {
    transform: translateY(-3px) scale(1.02) !important;
    box-shadow: 
      0 16px 40px rgba(113, 128, 150, 0.5),
      inset 0 1px 0 rgba(255, 255, 255, 0.4) !important;
    background: linear-gradient(135deg, #4a5568 0%, #2d3748 50%, #1a202c 100%) !important;
  }

  .btn-outline-secondary {
    color: #718096 !important;
    border: 2px solid #718096 !important;
    border-radius: 16px !important;
    font-weight: 700 !important;
    padding: 0.75rem 2rem !important;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1) !important;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    position: relative;
    overflow: hidden;
  }

  .btn-outline-secondary::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(113, 128, 150, 0.1), transparent);
    transition: left 0.6s ease;
  }

  .btn-outline-secondary:hover::before {
    left: 100%;
  }

  .btn-outline-secondary:hover {
    background: linear-gradient(135deg, #718096 0%, #4a5568 100%) !important;
    color: white !important;
    transform: translateY(-3px) scale(1.02);
    box-shadow: 0 12px 32px rgba(113, 128, 150, 0.4);
    border-color: #718096 !important;
  }

  /* Floating particles effect */
  .card-body {
    position: relative;
    z-index: 1;
  }

  .card-body::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: radial-gradient(circle at 20% 80%, rgba(102, 126, 234, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(118, 75, 162, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(240, 147, 251, 0.05) 0%, transparent 50%);
    pointer-events: none;
    z-index: -1;
    border-radius: 20px;
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

  /* Form row animations */
  .row {
    animation: fadeInUp 0.6s ease-out;
    animation-fill-mode: both;
  }

  .row:nth-child(1) { animation-delay: 0.1s; }
  .row:nth-child(2) { animation-delay: 0.2s; }
  .row:nth-child(3) { animation-delay: 0.3s; }
  .row:nth-child(4) { animation-delay: 0.4s; }
  .row:nth-child(5) { animation-delay: 0.5s; }

  .mb-3 {
    animation: fadeInUp 0.6s ease-out;
    animation-fill-mode: both;
  }

  .mb-3:nth-child(1) { animation-delay: 0.1s; }
  .mb-3:nth-child(2) { animation-delay: 0.2s; }
  .mb-3:nth-child(3) { animation-delay: 0.3s; }
  .mb-3:nth-child(4) { animation-delay: 0.4s; }
  .mb-3:nth-child(5) { animation-delay: 0.5s; }

  /* Responsive Enhancements */
  @media (max-width: 768px) {
    .create-container {
      padding: 16px;
      margin: 10px;
    }

    .card {
      padding: 16px;
      border-radius: 20px;
    }

    h1.fw-bold {
      font-size: 2rem;
    }

    .form-control, select {
      padding: 0.625rem 1rem !important;
    }

    .btn {
      padding: 0.625rem 1.5rem !important;
    }
  }

  /* Smooth transitions for everything */
  * {
    scroll-behavior: smooth;
  }
</style>
@endsection