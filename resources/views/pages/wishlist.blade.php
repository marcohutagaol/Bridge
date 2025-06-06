<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Topic Listing Page</title>
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-topic-listing.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">

</head>

<style>
    /* Wishlist Page CSS */
    
:root {
    --primary-tosca: #00bfa6;
    --secondary-tosca: #00695c;
    --light-tosca: #b2dfdb;
    --accent-tosca: #4db6ac;
    --dark-tosca: #004d40;
    --soft-white: #fafafa;
    --light-gray: #f5f7fa;
    --medium-gray: #e1e8ed;
    --dark-gray: #2c3e50;
    --text-primary: #2d3748;
    --text-secondary: #4a5568;
    --text-muted: #718096;
    --success-color: #48bb78;
    --warning-color: #ed8936;
    --danger-color: #f56565;
}

/* Base Styles */
body.topics-listing-page {
    background: linear-gradient(135deg, var(--soft-white) 0%, var(--light-gray) 100%);
    font-family: 'Open Sans', sans-serif;
    color: var(--text-primary);
    letter-spacing: 0.3px;
    line-height: 1.6;
}

@keyframes headerGlow {
    0% { transform: rotate(0deg) scale(1); }
    100% { transform: rotate(5deg) scale(1.05); }
}


/* Main Container */
.container.mt-5 {
    margin-top: 3rem !important;
    margin-bottom: 4rem;
}

/* Section Titles */
.section-title {
    color: var(--text-primary);
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    font-size: 1.8rem;
    margin-bottom: 2rem;
    position: relative;
    padding-bottom: 1rem;
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60px;
    height: 4px;
    background: linear-gradient(90deg, var(--primary-tosca), var(--accent-tosca));
    border-radius: 2px;
}

/* Filter Tabs */
.filter-tabs {
    display: flex;
    gap: 1rem;
    margin-bottom: 2.5rem;
    flex-wrap: wrap;
}

.filter-btn {
    background: white;
    border: 2px solid var(--medium-gray);
    color: var(--text-secondary);
    padding: 0.75rem 1.5rem;
    border-radius: 25px;
    font-weight: 600;
    font-size: 0.9rem;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

.filter-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(0, 191, 166, 0.1), transparent);
    transition: left 0.5s ease;
}

.filter-btn:hover::before {
    left: 100%;
}

.filter-btn:hover {
    border-color: var(--primary-tosca);
    color: var(--primary-tosca);
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0, 191, 166, 0.15);
}

.filter-btn.active {
    background: linear-gradient(135deg, var(--primary-tosca), var(--accent-tosca));
    border-color: var(--primary-tosca);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0, 191, 166, 0.25);
}

/* Wishlist Grid */
.wishlist-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

/* Wishlist Cards */
.wishlist-card {
    background: linear-gradient(145deg, #ffffff 0%, #fdfdfd 100%);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 8px 32px rgba(0, 191, 166, 0.08);
    border: 1px solid rgba(0, 191, 166, 0.05);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    animation: fadeInUp 0.6s ease forwards;
}

.wishlist-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 50px rgba(0, 191, 166, 0.15);
    border-color: var(--primary-tosca);
}

/* Card Image */
.card-image {
    position: relative;
    height: 200px;
    overflow: hidden;
}

.card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: all 0.4s ease;
}

.wishlist-card:hover .card-image img {
    transform: scale(1.05);
}

.card-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, rgba(0, 0, 0, 0.3) 0%, transparent 50%);
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 1rem;
}

/* Item Badge */
.item-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.badge-course {
    background: rgba(25, 118, 210, 0.9);
    color: white;
}

.badge-career {
    background: rgba(123, 31, 162, 0.9);
    color: white;
}

.badge-university {
    background: rgba(56, 142, 60, 0.9);
    color: white;
}

/* Card Body */
.card-body {
    padding: 1.5rem;
}

.card-title {
    color: var(--text-primary);
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    font-size: 1.2rem;
    margin-bottom: 1rem;
    line-height: 1.4;
    transition: color 0.3s ease;
}

.wishlist-card:hover .card-title {
    color: var(--secondary-tosca);
}

.card-description {
    color: var(--text-muted);
    font-size: 0.9rem;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

/* Card Meta */
.card-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    margin-bottom: 1.5rem;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 0.4rem;
    font-size: 0.85rem;
    color: var(--text-muted);
    font-weight: 500;
    transition: all 0.3s ease;
}

.meta-item:hover {
    color: var(--primary-tosca);
    transform: translateY(-1px);
}

.meta-item i {
    color: var(--accent-tosca);
    font-size: 0.9rem;
    transition: all 0.3s ease;
}

.meta-item:hover i {
    color: var(--secondary-tosca);
    transform: scale(1.1);
}

/* Card Footer */
.card-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 1rem;
    padding-top: 1rem;
    border-top: 1px solid var(--medium-gray);
}

.wishlist-date {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.8rem;
    color: var(--text-muted);
    font-weight: 500;
}

.wishlist-date i {
    color: var(--accent-tosca);
}

/* Card Actions */
.card-actions {
    display: flex;
    gap: 0.5rem;
    flex-wrap: wrap;
}

.btn {
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    border: 2px solid transparent;
    cursor: pointer;
}

.btn:hover {
    transform: translateY(-2px);
    text-decoration: none;
}

.btn-outline-primary {
    color: var(--primary-tosca);
    border-color: var(--primary-tosca);
    background: transparent;
}

.btn-outline-primary:hover {
    background: var(--primary-tosca);
    color: white;
    box-shadow: 0 8px 25px rgba(0, 191, 166, 0.25);
}

.btn-outline-danger {
    color: var(--danger-color);
    border-color: var(--danger-color);
    background: transparent;
}

.btn-outline-danger:hover {
    background: var(--danger-color);
    color: white;
    box-shadow: 0 8px 25px rgba(245, 101, 101, 0.25);
}

.btn-primary {
    background: linear-gradient(135deg, var(--primary-tosca), var(--accent-tosca));
    color: white;
    border-color: var(--primary-tosca);
}

.btn-primary:hover {
    background: linear-gradient(135deg, var(--secondary-tosca), var(--primary-tosca));
    box-shadow: 0 8px 25px rgba(0, 191, 166, 0.3);
}

/* Empty State */
.empty-state {
    text-align: center;
    padding: 4rem 2rem;
    background: linear-gradient(145deg, #ffffff 0%, #fefefe 100%);
    border-radius: 20px;
    border: 2px dashed var(--light-tosca);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.empty-state::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(0, 191, 166, 0.02) 0%, rgba(178, 223, 219, 0.05) 100%);
    opacity: 0;
    transition: all 0.3s ease;
}

.empty-state:hover::before {
    opacity: 1;
}

.empty-state:hover {
    border-color: var(--primary-tosca);
    transform: translateY(-4px);
    box-shadow: 0 12px 40px rgba(0, 191, 166, 0.1);
}

.empty-icon {
    margin-bottom: 2rem;
}

.empty-icon i {
    font-size: 4rem;
    color: var(--light-tosca);
    transition: all 0.4s ease;
}

.empty-state:hover .empty-icon i {
    color: var(--primary-tosca);
    transform: scale(1.1);
}

.empty-state h3 {
    color: var(--text-secondary);
    font-weight: 600;
    margin-bottom: 1rem;
    font-family: 'Montserrat', sans-serif;
    font-size: 1.5rem;
}

.empty-state p {
    color: var(--text-muted);
    font-size: 1rem;
    line-height: 1.6;
    margin-bottom: 2rem;
}

.empty-actions {
    display: flex;
    justify-content: center;
    gap: 1rem;
    flex-wrap: wrap;
}

.empty-actions .btn {
    padding: 0.75rem 1.5rem;
    font-size: 0.9rem;
}

.btn-success {
    background: linear-gradient(135deg, var(--success-color), #38a169);
    color: white;
    border-color: var(--success-color);
}

.btn-success:hover {
    background: linear-gradient(135deg, #38a169, #2f855a);
    box-shadow: 0 8px 25px rgba(72, 187, 120, 0.3);
}

.btn-info {
    background: linear-gradient(135deg, #3182ce, #2c5282);
    color: white;
    border-color: #3182ce;
}

.btn-info:hover {
    background: linear-gradient(135deg, #2c5282, #2a4365);
    box-shadow: 0 8px 25px rgba(49, 130, 206, 0.3);
}

/* Sidebar Section */
.sidebar-section {
    display: flex;
    flex-direction: column;
    gap: 2rem;
}

/* Greeting Card */
.greeting-card {
    background: linear-gradient(135deg, var(--primary-tosca) 0%, var(--secondary-tosca) 50%, var(--dark-tosca) 100%);
    border-radius: 20px;
    padding: 2rem 1.5rem;
    color: white;
    text-align: center;
    position: relative;
    overflow: hidden;
    transition: all 0.4s ease;
}

.greeting-card::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
    transition: all 0.4s ease;
    opacity: 0;
}

.greeting-card:hover::before {
    opacity: 1;
    transform: scale(1.1);
}

.greeting-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 20px 50px rgba(0, 191, 166, 0.25);
}

.greeting-header h3 {
    font-size: 1.1rem;
    opacity: 0.95;
    margin-bottom: 0.5rem;
    font-weight: 500;
    letter-spacing: 0.5px;
}

.greeting-header h4 {
    font-size: 1.8rem;
    font-weight: 700;
    font-family: 'Montserrat', sans-serif;
    margin-bottom: 1rem;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.greeting-message {
    font-size: 0.9rem;
    line-height: 1.6;
    opacity: 0.9;
    margin: 0;
}

/* Stats Card */
.stats-card {
    background: linear-gradient(145deg, #ffffff 0%, #fdfdfd 100%);
    border-radius: 20px;
    padding: 2rem;
    box-shadow: 0 8px 32px rgba(0, 191, 166, 0.08);
    border: 1px solid rgba(0, 191, 166, 0.05);
    transition: all 0.3s ease;
}

.stats-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 16px 40px rgba(0, 191, 166, 0.12);
}

.stats-title {
    color: var(--text-primary);
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    font-size: 1.1rem;
    margin-bottom: 1.5rem;
    text-align: center;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1rem;
}

.stat-item {
    text-align: center;
    padding: 1rem;
    background: linear-gradient(135deg, rgba(0, 191, 166, 0.05), rgba(0, 191, 166, 0.02));
    border-radius: 12px;
    transition: all 0.3s ease;
    border: 1px solid rgba(0, 191, 166, 0.1);
}

.stat-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0, 191, 166, 0.15);
    background: linear-gradient(135deg, rgba(0, 191, 166, 0.1), rgba(0, 191, 166, 0.05));
}

.stat-number {
    display: block;
    font-size: 1.8rem;
    font-weight: 700;
    color: var(--primary-tosca);
    font-family: 'Montserrat', sans-serif;
    margin-bottom: 0.25rem;
}

.stat-label {
    font-size: 0.8rem;
    color: var(--text-muted);
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* Quick Actions Card */
.quick-actions-card {
    background: linear-gradient(145deg, #ffffff 0%, #fdfdfd 100%);
    border-radius: 20px;
    padding: 2rem;
    box-shadow: 0 8px 32px rgba(0, 191, 166, 0.08);
    border: 1px solid rgba(0, 191, 166, 0.05);
    transition: all 0.3s ease;
}

.quick-actions-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 16px 40px rgba(0, 191, 166, 0.12);
}

.actions-title {
    color: var(--text-primary);
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    font-size: 1.1rem;
    margin-bottom: 1.5rem;
    text-align: center;
}

.actions-list {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
}

.action-link {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 1rem 1.25rem;
    background: linear-gradient(135deg, rgba(0, 191, 166, 0.05), rgba(0, 191, 166, 0.02));
    border: 1px solid rgba(0, 191, 166, 0.1);
    border-radius: 12px;
    color: var(--text-secondary);
    text-decoration: none;
    font-weight: 600;
    font-size: 0.9rem;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

.action-link::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(0, 191, 166, 0.1), transparent);
    transition: left 0.5s ease;
}

.action-link:hover::before {
    left: 100%;
}

.action-link:hover {
    background: linear-gradient(135deg, rgba(0, 191, 166, 0.1), rgba(0, 191, 166, 0.05));
    border-color: var(--primary-tosca);
    color: var(--primary-tosca);
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0, 191, 166, 0.15);
    text-decoration: none;
}

.action-link i {
    color: var(--accent-tosca);
    font-size: 1rem;
    transition: all 0.3s ease;
}

.action-link:hover i {
    color: var(--secondary-tosca);
    transform: scale(1.1);
}

/* Loading Animation */
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

.wishlist-card:nth-child(1) { animation-delay: 0.1s; }
.wishlist-card:nth-child(2) { animation-delay: 0.2s; }
.wishlist-card:nth-child(3) { animation-delay: 0.3s; }
.wishlist-card:nth-child(4) { animation-delay: 0.4s; }
.wishlist-card:nth-child(5) { animation-delay: 0.5s; }
.wishlist-card:nth-child(6) { animation-delay: 0.6s; }

/* Responsive Design */
@media (max-width: 1200px) {
    .wishlist-grid {
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 1.5rem;
    }
}

@media (max-width: 992px) {
    .site-header {
        padding: 3rem 0;
    }
    
    .site-header h2 {
        font-size: 2rem;
    }
    
    .wishlist-grid {
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    }
    
    .stats-grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 0.75rem;
    }
    
    .stat-item {
        padding: 0.75rem;
    }
    
    .stat-number {
        font-size: 1.5rem;
    }
}

@media (max-width: 768px) {
    .site-header {
        padding: 2rem 0;
    }
    
    .site-header h2 {
        font-size: 1.75rem;
    }
    
    .filter-tabs {
        justify-content: center;
    }
    
    .wishlist-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .card-footer {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
    }
    
    .card-actions {
        width: 100%;
        justify-content: space-between;
    }
    
    .empty-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .empty-actions .btn {
        width: 100%;
        max-width: 200px;
    }
    
    .stats-grid {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
}

@media (max-width: 576px) {
    .container {
        padding-left: 1rem;
        padding-right: 1rem;
    }
    
    .site-header {
        padding: 1.5rem 0;
    }
    
    .site-header h2 {
        font-size: 1.5rem;
    }
    
    .section-title {
        font-size: 1.5rem;
    }
    
    .filter-btn {
        padding: 0.6rem 1.2rem;
        font-size: 0.85rem;
    }
    
    .card-body {
        padding: 1.25rem;
    }
    
    .card-title {
        font-size: 1.1rem;
    }
    
    .meta-item {
        font-size: 0.8rem;
    }
    
    .btn {
        padding: 0.4rem 0.8rem;
        font-size: 0.8rem;
    }
    
    .greeting-card {
        padding: 1.5rem 1.25rem;
    }
    
    .greeting-header h4 {
        font-size: 1.5rem;
    }
    
    .stats-card,
    .quick-actions-card {
        padding: 1.5rem;
    }
}

/* Focus states for accessibility */
.filter-btn:focus,
.btn:focus,
.action-link:focus {
    outline: 2px solid var(--primary-tosca);
    outline-offset: 2px;
}

/* Smooth scrolling */
html {
    scroll-behavior: smooth;
}

/* Print styles */
@media print {
    .site-header,
    .filter-tabs,
    .card-actions,
    .quick-actions-card {
        display: none;
    }
    
    .wishlist-card {
        break-inside: avoid;
        box-shadow: none;
        border: 1px solid #ddd;
    }
}
</style>
<body class="topics-listing-page" id="top">
<main>
    <x-navbar></x-navbar>
    
    <!-- Header Section -->
    <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/home">Homepage</a></li>
                            <li class="breadcrumb-item active" aria-current="page">My Wishlist</li>
                        </ol>
                    </nav>
                    <h2 class="text-white">My Wishlist</h2>
                </div>
            </div>
        </div>
    </header>
    
    <!-- Main Content -->
    <div class="container mt-5">
        <div class="row">
            <!-- Left Section - Wishlist Items -->
            <div class="col-lg-8 col-md-12">
                <div class="wishlist-section">
                    <!-- Filter Tabs -->
                    <div class="filter-tabs mb-4">
                        <button class="filter-btn active" data-type="all">All Items</button>
                        <button class="filter-btn" data-type="university">Universities</button>
                        <button class="filter-btn" data-type="course">Courses</button>
                        <button class="filter-btn" data-type="career">Careers</button>
                    </div>
                    
                    @if($wishlistItems->count() > 0)
                        <div class="wishlist-grid">
                            @foreach ($wishlistItems as $wishlistItem)
                                @php 
                                    $item = $wishlistItem->wishlistable;
                                    $itemType = class_basename($wishlistItem->wishlistable_type);
                                    $itemTypeSlug = strtolower($itemType);
                                    
                                    $itemName = $item->name ?? $item->title ?? 'Unknown Item';
                                    $itemImage = $item->image ?? $item->image_path ?? '/images/default-image.jpg';
                                @endphp
                                
                                @if ($item)
                                    <div class="wishlist-card d-flex flex-column" data-type="{{ $itemTypeSlug }}">
                                        <!-- Card Image -->
                                        <div class="card-image">
                                            <img src="{{ $itemImage }}" 
                                                 alt="{{ $itemName }}"
                                                 onerror="this.src='/images/default-image.jpg'">
                                            <div class="card-overlay">
                                                <span class="item-badge badge-{{ $itemTypeSlug }}">
                                                    @if($itemTypeSlug === 'course')
                                                        <i class="bi bi-play-circle"></i> Course
                                                    @elseif($itemTypeSlug === 'career')
                                                        <i class="bi bi-briefcase"></i> Career
                                                    @elseif($itemTypeSlug === 'university')
                                                        <i class="bi bi-mortarboard"></i> University
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                        
                                        <!-- Card Content -->
                                        <div class="card-body flex-grow-1 d-flex flex-column">
                                            <h5 class="card-title">{{ $itemName }}</h5>
                                            
                                            <div class="flex-grow-1">
                                                @if(isset($item->description))
                                                    <p class="card-description">{{ Str::limit($item->description, 100) }}</p>
                                                @elseif(isset($item->description2))
                                                    <p class="card-description">{{ Str::limit($item->description2, 100) }}</p>
                                                @endif
                                                
                                                <div class="card-meta">
                                                    @if($itemTypeSlug === 'course')
                                                        @if(isset($item->duration_r))
                                                            <span class="meta-item">
                                                                <i class="bi bi-clock"></i> {{ $item->duration_r }} hours
                                                            </span>
                                                        @endif
                                                        @if(isset($item->rating))
                                                            <span class="meta-item">
                                                                <i class="bi bi-star-fill"></i> {{ $item->rating }}
                                                            </span>
                                                        @endif
                                                    @elseif($itemTypeSlug === 'career')
                                                        @if(isset($item->median_salary))
                                                            <span class="meta-item">
                                                                <i class="bi bi-currency-dollar"></i> {{ $item->median_salary }}
                                                            </span>
                                                        @endif
                                                        @if(isset($item->jobs_available))
                                                            <span class="meta-item">
                                                                <i class="bi bi-briefcase"></i> {{ $item->jobs_available }} Jobs
                                                            </span>
                                                        @endif
                                                    @elseif($itemTypeSlug === 'university')
                                                        @if(isset($item->tipe))
                                                            <span class="meta-item">
                                                                <i class="bi bi-mortarboard"></i> {{ ucfirst($item->tipe) }}
                                                            </span>
                                                        @endif
                                                        @if(isset($item->ranking))
                                                            <span class="meta-item">
                                                                <i class="bi bi-trophy"></i> Rank #{{ $item->ranking }}
                                                            </span>
                                                        @endif
                                                    @endif
                                                </div>
                                            </div>
                                            
                                            <div class="card-footer mt-auto">
                                                <span class="wishlist-date">
                                                    <i class="bi bi-calendar-plus"></i> 
                                                    Added {{ $wishlistItem->created_at->diffForHumans() }}
                                                </span>
                                                
                                                 
<div class="card-actions">
    <!-- View Button dengan kondisi route sesuai type -->
    @if($itemTypeSlug === 'university')
        <a href="{{ route('module.show', $item->id) }}" class="btn btn-outline-primary btn-sm text-decoration-none text-dark">
            <i class="bi bi-eye"></i> View
        </a>
    @elseif($itemTypeSlug === 'career')
        <a href="{{ route('career.detail', $item->id) }}" class="btn btn-outline-primary btn-sm text-decoration-none text-dark">
            <i class="bi bi-eye"></i> View
        </a>
    @elseif($itemTypeSlug === 'course')
        <a href="{{ route('certificate.detail.show', $item->id) }}" class="btn btn-outline-primary btn-sm text-decoration-none text-dark">
            <i class="bi bi-eye"></i> View
        </a>
    @endif
    
    <!-- Remove Button dengan AJAX functionality -->
    <button class="btn btn-outline-danger btn-sm remove-wishlist" 
            data-item-id="{{ $item->id }}" 
            data-item-type="{{ $itemTypeSlug }}">
        <i class="bi bi-heart-fill"></i> Remove
    </button>
    
    <!-- Enroll Button dengan kondisi route sesuai type -->
    @if($itemTypeSlug === 'university')
        <a href="{{ route('module.checkout', $item->id) }}" class="btn btn-primary btn-sm">
            <i class="bi bi-cart-plus"></i> Enroll
        </a>
    @elseif($itemTypeSlug === 'career')
        <a href="{{ route('career.checkout', $item->id) }}" class="btn btn-primary btn-sm">
            <i class="bi bi-cart-plus"></i> Enroll
        </a>
    @elseif($itemTypeSlug === 'course')
        <a href="{{ route('course.checkout', $item->id) }}" class="btn btn-primary btn-sm">
            <i class="bi bi-cart-plus"></i> Enroll
        </a>
    @endif
</div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @else
                        <div class="empty-state">
                            <div class="empty-icon">
                                <i class="bi bi-heart"></i>
                            </div>
                            <h3>Your Wishlist is Empty</h3>
                            <p>Start exploring and add items you're interested in!</p>
                            <div class="empty-actions">
                                <a href="/courses" class="btn btn-primary">
                                    <i class="bi bi-play-circle"></i> Browse Courses
                                </a>
                                <a href="/careers" class="btn btn-success">
                                    <i class="bi bi-briefcase"></i> Explore Careers
                                </a>
                                <a href="/universities" class="btn btn-info">
                                    <i class="bi bi-mortarboard"></i> Find Universities
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            
            <!-- Right Section - Greeting & Stats -->
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-section">
                    <!-- Greeting Card -->
<!-- Option 1: Using inline styles -->
<div class="greeting-card" style="color: white;">
    <div class="greeting-header">
        <h3 id="greeting-text" style="color: white;">Good Morning</h3>
        <h4 class="user-namecolor" style="color: white;">{{ Auth::user()->name }}</h4>
    </div>
    <p class="greeting-message" style="color: white;">
        Keep track of all the amazing things you want to learn and explore. Your wishlist helps you organize your learning journey!
    </p>
</div>
                    
                    <!-- Wishlist Statistics -->
                    <div class="stats-card">
                        <h5 class="stats-title">Your Wishlist Summary</h5>
                        <div class="stats-grid">
                            <div class="stat-item">
                                <div class="stat-number">{{ $wishlistItems->where('wishlistable_type', 'App\\Models\\Course')->count() }}</div>
                                <div class="stat-label">Courses</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">{{ $wishlistItems->where('wishlistable_type', 'App\\Models\\Career')->count() }}</div>
                                <div class="stat-label">Careers</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">{{ $wishlistItems->where('wishlistable_type', 'App\\Models\\University')->count() }}</div>
                                <div class="stat-label">Universities</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Quick Actions -->
                    <div class="quick-actions-card">
                        <h5 class="actions-title">Quick Actions</h5>
                        <div class="actions-list">
                            <a href="/courses" class="action-link">
                                <i class="bi bi-search"></i> Browse Courses
                            </a>
                            <a href="/careers" class="action-link">
                                <i class="bi bi-briefcase"></i> Explore Careers
                            </a>
                            <a href="/universities" class="action-link">
                                <i class="bi bi-mortarboard"></i> Find Universities
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // Dynamic greeting based on time
        function updateGreeting() {
            const now = new Date();
            const hour = now.getHours();
            const greetingElement = document.getElementById('greeting-text');
            
            if (hour < 12) {
                greetingElement.textContent = 'Good Morning';
            } else if (hour < 17) {
                greetingElement.textContent = 'Good Afternoon';
            } else {
                greetingElement.textContent = 'Good Evening';
            }
        }
        
        // Filter functionality
        function initializeFilters() {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const wishlistCards = document.querySelectorAll('.wishlist-card');
            
            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const filterType = this.getAttribute('data-type');
                    
                    // Update active filter button
                    filterBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Filter cards
                    wishlistCards.forEach(card => {
                        const cardType = card.getAttribute('data-type');
                        if (filterType === 'all' || cardType === filterType) {
                            card.style.display = 'block';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
        }
        
        // Remove from wishlist functionality
        function initializeRemoveWishlist() {
            const removeButtons = document.querySelectorAll('.remove-wishlist');
            
            removeButtons.forEach(btn => {
                btn.addEventListener('click', function() {
                    const itemId = this.getAttribute('data-item-id');
                    const itemType = this.getAttribute('data-item-type');
                    
                    if (confirm('Are you sure you want to remove this item from your wishlist?')) {
                        // Add your AJAX call here to remove from wishlist
                        console.log('Removing item:', itemId, itemType);
                        // For now, just hide the card
                        this.closest('.wishlist-card').style.display = 'none';
                    }
                });
            });
        }
        
        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            updateGreeting();
            initializeFilters();
            initializeRemoveWishlist();
        });

   
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.remove-wishlist').forEach(button => {
        button.addEventListener('click', function () {
            const itemId = this.getAttribute('data-item-id');
            const itemType = this.getAttribute('data-item-type');
            const card = this.closest('.wishlist-card');

            fetch("{{ route('wishlist.remove') }}", {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    item_id: itemId,
                    item_type: itemType
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    card.remove();
                } else {
                    alert(data.message || 'Failed to remove item.');
                }
            })
            .catch(() => alert('Error processing your request.'));
        });
    });
});


    </script>
</main>
    
    <x-fotter></x-fotter>
    
    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/custom.js"></script>
    
    <script>
        // Function to update greeting based on time
        function updateGreeting() {
            const now = new Date();
            const hour = now.getHours();
            const greetingElement = document.getElementById('greeting-time');
            
            let greeting;
            if (hour >= 5 && hour < 12) {
                greeting = "Good Morning";
            } else if (hour >= 12 && hour < 17) {
                greeting = "Good Afternoon";
            } else if (hour >= 17 && hour < 21) {
                greeting = "Good Evening";
            } else {
                greeting = "Good Night";
            }
            
            greetingElement.textContent = greeting;
        }
        
        // Update greeting when page loads
        document.addEventListener('DOMContentLoaded', function() {
            updateGreeting();
            // Update greeting every minute
            setInterval(updateGreeting, 60000);
        });
    </script>
</body>
</html>