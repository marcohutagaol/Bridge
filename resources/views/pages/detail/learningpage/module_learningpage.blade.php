<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Module Learning Page">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Learning page-Module</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-topic-listing.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/learningpage.css') }}" rel="stylesheet">


</head>

<style>
    :root {
        --primary-color: #00b894;
        --primary-dark: #00a085;
        --primary-light: #00d4aa;
        --secondary-color: #74d9c5;
        --accent-color: #0dccaa;
        --text-dark: #2d3436;
        --text-light: #636e72;
        --text-muted: #95a5a6;
        --border-color: #e1e8ed;
        --bg-light: #f8fdfc;
        --bg-white: #ffffff;
        --shadow-light: 0 2px 12px rgba(0, 184, 148, 0.08);
        --shadow-medium: 0 4px 24px rgba(0, 184, 148, 0.12);
        --shadow-heavy: 0 8px 32px rgba(0, 184, 148, 0.16);
        --glass-bg: rgba(255, 255, 255, 0.95);
        --glass-border: rgba(255, 255, 255, 0.2);
    }

    .course-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem 1rem;
        background: linear-gradient(135deg, #f8fdfc 0%, #ffffff 100%);
        min-height: calc(100vh - 200px);
    }

    /* Enhanced Course Content */
    .course-content {
        background: var(--glass-bg);
        backdrop-filter: blur(10px);
        border-radius: 16px;
        box-shadow: var(--shadow-medium);
        overflow: hidden;
        border: 1px solid var(--glass-border);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
    }

    .course-content::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color) 0%, var(--accent-color) 50%, var(--secondary-color) 100%);
    }

    .course-content:hover {
        transform: translateY(-4px);
        box-shadow: var(--shadow-heavy);
    }

    /* Enhanced Video Section */
    .video-section {
        position: relative;
        background: linear-gradient(135deg, var(--primary-dark) 0%, var(--accent-color) 100%);
        aspect-ratio: 16/9;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .video-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background:
            radial-gradient(circle at 30% 70%, rgba(0, 184, 148, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 70% 30%, rgba(116, 217, 197, 0.1) 0%, transparent 50%);
        pointer-events: none;
    }

    .play-button {
        width: 90px;
        height: 90px;
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-light) 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        box-shadow: 0 8px 32px rgba(0, 184, 148, 0.3);
    }

    .play-button::before {
        content: '';
        position: absolute;
        top: -8px;
        left: -8px;
        right: -8px;
        bottom: -8px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: -1;
    }

    .play-button:hover {
        transform: scale(1.15);
        box-shadow: 0 12px 48px rgba(0, 184, 148, 0.4);
    }

    .play-button:hover::before {
        opacity: 0.2;
    }

    .play-button i {
        color: white;
        font-size: 2.2rem;
        margin-left: 6px;
        filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.2));
    }

    /* Video End Overlay */
    .video-end-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.8);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10;
    }

    .video-end-content {
        text-align: center;
        color: white;
        padding: 2rem;
    }

    .video-end-content h3 {
        font-size: 1.5rem;
        margin-bottom: 1rem;
        color: white;
    }

    .start-quiz-btn {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        border: none;
        padding: 1rem 2rem;
        border-radius: 25px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        margin: 0 auto;
    }

    .start-quiz-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(0, 184, 148, 0.3);
    }

    /* Enhanced Course Info */
    .course-info {
        padding: 2rem;
        background: linear-gradient(135deg, rgba(248, 253, 252, 0.8) 0%, rgba(255, 255, 255, 0.9) 100%);
    }

    .course-title {
        font-size: 2rem;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 1rem;
        line-height: 1.3;
        background: linear-gradient(135deg, var(--text-dark) 0%, var(--primary-dark) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .course-meta {
        display: flex;
        align-items: center;
        gap: 1.2rem;
        margin-bottom: 1.5rem;
        font-size: 0.95rem;
        color: var(--text-light);
        flex-wrap: wrap;
    }

    .rating {
        display: flex;
        align-items: center;
        gap: 0.4rem;
        padding: 0.4rem 0.8rem;
        background: linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%);
        border-radius: 20px;
        font-weight: 600;
    }

    .stars {
        color: #f39c12;
        font-size: 1.1rem;
        filter: drop-shadow(0 1px 2px rgba(243, 156, 18, 0.3));
    }

    /* Enhanced Tabs */
    .tabs-section {
        border-top: 1px solid var(--border-color);
        margin-top: 1rem;
    }

    .tabs-nav {
        display: flex;
        background: var(--bg-light);
        border-bottom: 1px solid var(--border-color);
        overflow-x: auto;
        scrollbar-width: none;
        -ms-overflow-style: none;
    }

    .tabs-nav::-webkit-scrollbar {
        display: none;
    }

    .tab-btn {
        padding: 1.2rem 1.8rem;
        background: none;
        border: none;
        font-weight: 600;
        color: var(--text-light);
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        border-bottom: 3px solid transparent;
        position: relative;
        white-space: nowrap;
        font-size: 0.95rem;
    }

    .tab-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .tab-btn:hover {
        color: var(--primary-color);
        background: rgba(0, 184, 148, 0.05);
    }

    .tab-btn.active {
        color: var(--primary-color);
        border-bottom-color: var(--primary-color);
        background: var(--bg-white);
        box-shadow: 0 -2px 8px rgba(0, 184, 148, 0.1);
        font-weight: 700;
    }

    .tab-content {
        padding: 2rem;
        display: none;
        background: var(--bg-white);
        border-radius: 0 0 12px 12px;
    }

    .tab-content.active {
        display: block;
        animation: fadeInUp 0.4s ease-out;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .tab-content h3 {
        color: var(--text-dark);
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 1.2rem;
        position: relative;
        padding-bottom: 0.5rem;
    }

    .tab-content h3::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 40px;
        height: 3px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        border-radius: 2px;
    }

    .tab-content h4 {
        color: var(--text-dark);
        font-size: 1.2rem;
        font-weight: 600;
        margin: 1.5rem 0 1rem 0;
    }

    /* Enhanced Sidebar */
    .sidebar {
        position: sticky;
        top: 2rem;
        height: fit-content;
    }

    .course-card {
        background: var(--glass-bg);
        backdrop-filter: blur(15px);
        border-radius: 16px;
        box-shadow: var(--shadow-medium);
        overflow: hidden;
        border: 1px solid var(--glass-border);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .course-card:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-heavy);
    }

    /* Enhanced Progress Section */
    .course-progress {
        padding: 2rem;
        background: linear-gradient(135deg, var(--bg-light) 0%, rgba(116, 217, 197, 0.1) 100%);
        border-bottom: 1px solid var(--border-color);
        position: relative;
    }

    .course-progress::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
    }

    .progress-header h4 {
        color: var(--text-dark);
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .progress-text {
        font-size: 0.95rem;
        color: var(--text-light);
        margin-bottom: 0.8rem;
        font-weight: 500;
    }

    .progress-bar {
        width: 100%;
        height: 10px;
        background: #e1e8ed;
        border-radius: 8px;
        overflow: hidden;
        position: relative;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .progress-fill {
        height: 100%;
        background: linear-gradient(90deg, var(--primary-color) 0%, var(--accent-color) 100%);
        width: 0%;
        transition: width 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        border-radius: 8px;
    }

    .progress-fill::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(90deg, transparent 0%, rgba(255, 255, 255, 0.3) 50%, transparent 100%);
        animation: shimmer 2s infinite;
    }

    @keyframes shimmer {
        0% {
            transform: translateX(-100%);
        }

        100% {
            transform: translateX(100%);
        }
    }

    /* Total Nilai Career */
    .total-nilai-career {
        background: linear-gradient(135deg, #e8f5e8 0%, #f0f8f0 100%);
        border: 1px solid var(--secondary-color);
    }

    .total-nilai-career h4 {
        color: var(--text-dark);
        font-size: 1.1rem;
    }

    /* Enhanced Course Sections */
    .course-sections {
        max-height: 500px;
        overflow-y: auto;
        scrollbar-width: thin;
        scrollbar-color: var(--primary-color) var(--bg-light);
    }

    .course-sections::-webkit-scrollbar {
        width: 6px;
    }

    .course-sections::-webkit-scrollbar-track {
        background: var(--bg-light);
    }

    .course-sections::-webkit-scrollbar-thumb {
        background: var(--primary-color);
        border-radius: 3px;
    }

    .section {
        border-bottom: 1px solid var(--border-color);
        transition: all 0.3s ease;
    }

    .section:last-child {
        border-bottom: none;
    }

    .section-header {
        padding: 1.5rem;
        background: var(--bg-light);
        font-weight: 600;
        color: var(--text-dark);
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        font-size: 0.95rem;
    }

    .section-header::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 4px;
        background: var(--primary-color);
        transform: scaleY(0);
        transition: transform 0.3s ease;
        transform-origin: bottom;
    }

    .section-header:hover {
        background: linear-gradient(135deg, #f1f9f7 0%, rgba(0, 184, 148, 0.08) 100%);
        color: var(--primary-dark);
        padding-left: 2rem;
    }

    .section-header:hover::before {
        transform: scaleY(1);
    }

    .section.open .section-header {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
        color: white;
    }

    .section.open .section-header::before {
        transform: scaleY(1);
        background: white;
    }

    /* Section Quiz Button */
    .section-quiz-btn {
        margin-right: 1rem;
        padding: 0.4rem 0.8rem;
        font-size: 0.8rem;
        border-radius: 15px;
        transition: all 0.3s ease;
    }

    .section-quiz-btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(0, 184, 148, 0.2);
    }

    .section-lessons {
        display: none;
        background: var(--bg-white);
    }

    .section.open .section-lessons {
        display: block;
        animation: slideDown 0.3s ease-out;
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            max-height: 0;
        }

        to {
            opacity: 1;
            max-height: 500px;
        }
    }

    .section.open .section-toggle {
        transform: rotate(180deg);
    }

    .lesson-item {
        padding: 1rem 1.5rem;
        border-bottom: 1px solid #f8f9fa;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        align-items: center;
        gap: 1rem;
        position: relative;
        background: var(--bg-white);
    }

    .lesson-item::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 3px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        transform: scaleX(0);
        transition: transform 0.3s ease;
        transform-origin: left;
    }

    .lesson-item:hover {
        background: linear-gradient(135deg, var(--bg-light) 0%, rgba(0, 184, 148, 0.05) 100%);
        transform: translateX(5px);
        box-shadow: 0 2px 8px rgba(0, 184, 148, 0.1);
    }

    .lesson-item:hover::before {
        transform: scaleX(1);
    }

    .lesson-item.active {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
        color: white;
        transform: translateX(5px);
        box-shadow: 0 4px 16px rgba(0, 184, 148, 0.2);
    }

    .lesson-item.active::before {
        transform: scaleX(1);
        background: white;
    }

    .lesson-icon {
        width: 18px;
        height: 18px;
        flex-shrink: 0;
        opacity: 0.8;
        transition: all 0.3s ease;
    }

    .lesson-item:hover .lesson-icon,
    .lesson-item.active .lesson-icon {
        opacity: 1;
        transform: scale(1.1);
    }

    .lesson-title {
        flex: 1;
        font-size: 0.9rem;
        font-weight: 500;
        line-height: 1.4;
    }

    .lesson-duration {
        font-size: 0.8rem;
        opacity: 0.8;
        background: rgba(255, 255, 255, 0.1);
        padding: 0.2rem 0.6rem;
        border-radius: 12px;
        font-weight: 500;
    }

    .lesson-item:not(.active) .lesson-duration {
        background: var(--bg-light);
        color: var(--text-muted);
    }

    .section-toggle {
        transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        color: var(--primary-color);
        font-size: 1.2rem;
    }

    /* Nilai Display Group */
    .nilai-display-group {
        padding: 0 1.5rem;
    }

    .nilai-display-group label {
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 0.5rem;
    }

    /* Status Buttons Group */
    .status-buttons-group {
        padding: 0 1.5rem;
        margin-bottom: 1rem;
    }

    .status-buttons-group label {
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 0.5rem;
    }

    .status-btn {
        margin-right: 0.5rem;
        margin-bottom: 0.5rem;
        font-size: 0.8rem;
        padding: 0.4rem 0.8rem;
        border-radius: 15px;
        transition: all 0.3s ease;
    }

    .status-btn:hover {
        transform: translateY(-1px);
    }

    /* Course Info Card */
    .course-info-card h6 {
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .course-info-card p {
        font-size: 0.9rem;
        color: var(--text-light);
    }

    /* Quiz Modal Styles */
    .quiz-modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(5px);
    }

    .quiz-content {
        background: linear-gradient(135deg, #ffffff 0%, #f8fdfc 100%);
        margin: 5% auto;
        padding: 0;
        border-radius: 16px;
        width: 90%;
        max-width: 600px;
        max-height: 80vh;
        overflow-y: auto;
        box-shadow: 0 20px 60px rgba(0, 184, 148, 0.2);
        position: relative;
        animation: slideIn 0.3s ease-out;
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(-50px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .quiz-header {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
        color: white;
        padding: 2rem;
        border-radius: 16px 16px 0 0;
        position: relative;
    }

    .quiz-header::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-light), var(--secondary-color));
    }

    .quiz-close {
        position: absolute;
        right: 1.5rem;
        top: 1.5rem;
        color: white;
        font-size: 1.5rem;
        cursor: pointer;
        padding: 0.5rem;
        border-radius: 50%;
        transition: all 0.3s ease;
        background: rgba(255, 255, 255, 0.1);
    }

    .quiz-close:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: rotate(90deg);
    }

    .quiz-title {
        font-size: 1.5rem;
        font-weight: 700;
        margin: 0;
        margin-bottom: 0.5rem;
    }

    .quiz-subtitle {
        opacity: 0.9;
        margin: 0;
    }

    .quiz-body {
        padding: 2rem;
    }

    .quiz-questions-container {
        margin-bottom: 2rem;
    }

    .quiz-questions-container .mb-2 {
        margin-bottom: 1.5rem;
        padding: 1.5rem;
        background: var(--bg-light);
        border-radius: 12px;
        border-left: 4px solid var(--primary-color);
    }

    .quiz-questions-container p {
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 1rem;
    }

    .quiz-questions-container input[type="radio"] {
        margin-right: 0.5rem;
        margin-bottom: 0.5rem;
    }

    .quiz-navigation {
        padding: 1.5rem 2rem;
        border-top: 1px solid var(--border-color);
        text-align: center;
    }

    .quiz-btn.primary {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        border: none;
        padding: 1rem 2rem;
        border-radius: 25px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 1rem;
    }

    .quiz-btn.primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(0, 184, 148, 0.3);
    }

    /* Enhanced List Styles */
    .tab-content ul {
        list-style: none;
        padding: 0;
        margin: 1rem 0;
    }

    .tab-content ul li {
        padding: 0.8rem 0;
        padding-left: 2rem;
        position: relative;
        color: var(--text-light);
        line-height: 1.6;
        transition: all 0.3s ease;
    }

    .tab-content ul li::before {
        content: '✓';
        position: absolute;
        left: 0;
        top: 0.8rem;
        width: 20px;
        height: 20px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 0.8rem;
        font-weight: bold;
    }

    .tab-content ul li:hover {
        color: var(--text-dark);
        transform: translateX(4px);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .course-container {
            padding: 1rem 0.5rem;
        }

        .d-flex.flex-wrap {
            flex-direction: column;
        }

        .course-content {
            flex-basis: 100% !important;
            padding-right: 0 !important;
            margin-bottom: 1.5rem;
        }

        .sidebar {
            flex-basis: 100% !important;
            max-width: 100% !important;
            position: static;
        }

        .course-sections {
            max-height: 400px;
        }

        .course-title {
            font-size: 1.6rem;
        }

        .course-meta {
            flex-direction: column;
            align-items: flex-start;
            gap: 0.8rem;
        }

        .tabs-nav {
            gap: 0;
        }

        .tab-btn {
            padding: 1rem 1.2rem;
            font-size: 0.9rem;
        }

        .play-button {
            width: 70px;
            height: 70px;
        }

        .play-button i {
            font-size: 1.8rem;
        }
    }

    @media (max-width: 480px) {
        .course-info {
            padding: 1.5rem;
        }

        .tab-content {
            padding: 1.5rem;
        }

        .course-progress {
            padding: 1.5rem;
        }

        .section-header {
            padding: 1.2rem;
            font-size: 0.9rem;
        }

        .lesson-item {
            padding: 0.8rem 1.2rem;
        }

        .quiz-content {
            width: 95%;
            margin: 2% auto;
        }

        .quiz-header {
            padding: 1.5rem;
        }

        .quiz-body {
            padding: 1.5rem;
        }
    }
</style>

<body id="top">
    <main>
        <x-navbar></x-navbar>

        <header class="site-header d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/home">Homepage</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('my.learning') }}">My Learning</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Module Learning</li>
                            </ol>
                        </nav>
                        <h2 class="text-white">Module Learning</h2>
                    </div>
                </div>
            </div>
        </header>

        <div class="course-container">
            <div class="d-flex flex-wrap">
                <div class="course-content flex-grow-1" style="flex-basis: 70%; padding-right: 2px;">
                    <div class="video-section">
                        <div class="play-button" onclick="playVideo()" id="playBtn">
                            <i class="bi bi-play-fill"></i>
                        </div>
                        <div id="videoContainer" style="display: none; position: relative;">
                            <iframe width="850" height="470" src="https://www.youtube.com/embed/lajF0A942-Y"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen id="videoFrame">
                            </iframe>

                        </div>
                    </div>


                    <div class="course-info mt-4">
                        <h1 class="course-title">{{ $item->name }}</h1>
                        @if(isset($checkout) && $checkout->order_id)
                            <span class="order-badge">
                                <i class="bi bi-receipt"></i> Order ID: #{{ $checkout->order_id }}
                            </span>
                        @endif


                        <div class="course-meta">
                            <div class="rating">
                                @if($item->rating)
                                    <span class="stars">
                                        @for($i = 1; $i <= 5; $i++)
                                            @if($i <= floor($item->rating))
                                                ★
                                            @elseif($i - 0.5 <= $item->rating)
                                                ☆
                                            @else
                                                ☆
                                            @endif
                                        @endfor
                                    </span>
                                    <span>{{ number_format($item->rating, 1) }}</span>
                                @endif
                            </div>
                            @if($item->duration_r)
                                <span>•</span>
                                <span>{{ $item->duration_r }} jam</span>
                            @endif
                            @if($item->institution)
                                <span>•</span>
                                <span>{{ $item->institution }}</span>
                            @endif
                            <span>•</span>
                            <span>Terakhir diperbarui {{ now()->format('F Y') }}</span>
                        </div>

                        <div class="tabs-section mt-4">
                            <div class="tabs-nav">
                                <button class="tab-btn active" data-tab="overview">Gambaran Umum</button>
                                <button class="tab-btn" data-tab="notes">T&J</button>
                                <button class="tab-btn" data-tab="announcements">Catatan</button>
                                <button class="tab-btn" data-tab="reviews">Pengumuman</button>
                            </div>

                            <div id="overview" class="tab-content active">
                                <h3>Tentang Career Path Ini</h3>
                                <p>{{ $item->description ?? 'Pelajari konsep-konsep penting dalam career path ini yang dirancang khusus untuk meningkatkan kemampuan dan pengetahuan Anda.' }}
                                </p>

                                <h4>Yang Akan Anda Pelajari:</h4>
                                <ul>
                                    <li>Konsep dasar dan fundamental</li>
                                    <li>Penerapan praktis dalam kehidupan sehari-hari</li>
                                    <li>Teknik dan metodologi terkini</li>
                                    <li>Studi kasus dan contoh nyata</li>
                                    <li>Pengembangan skill yang relevan</li>
                                </ul>

                                @if($item->institution)
                                    <h4>Institusi:</h4>
                                    <p>{{ $item->institution }}</p>
                                @endif
                            </div>

                            <div id="notes" class="tab-content">
                                <h3>Tanya & Jawab</h3>
                                <p>Belum ada pertanyaan untuk career path ini. Jadilah yang pertama bertanya!</p>
                            </div>

                            <div id="announcements" class="tab-content">
                                <h3>Catatan Anda</h3>
                                <p>Anda belum membuat catatan untuk career path ini.</p>
                            </div>

                            <div id="reviews" class="tab-content">
                                <h3>Pengumuman</h3>
                                <p>Tidak ada pengumuman terbaru.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sidebar" style="flex-basis: 30%; max-width: 30%;">
                    <div class="course-card">
                        <div class="course-progress">
                            <div class="progress-header">
                                <h4>Program Progress</h4>
                            </div>
                            <div class="progress-text"><span id="completed-sections-count">0</span> dari <span
                                    id="total-sections-count">3</span> selesai</div>
                            <div class="progress-bar">
                                <div class="progress-fill" id="overall-progress-bar" style="width: 0%"></div>
                            </div>
                        </div>

                        <div class="total-nilai-career mt-3 p-3 bg-light rounded">
                            <h4 class="mb-0">Total Nilai Career: <span id="total-career-nilai"
                                    class="badge bg-success">0 / 300</span></h4>
                        </div>

                        <div class="course-sections mt-4">
                            <div class="section" data-section-id="1">
                                <div class="section-header">
                                    <span class="section-title-text">Tahun 1: Foundation Level</span>
                                    <button class="section-quiz-btn btn btn-sm btn-info" data-section="1">
                                        <i class="bi bi-pencil-square"></i> Kuis
                                    </button>
                                    <i class="bi bi-chevron-down section-toggle"></i>
                                </div>
                                <div class="section-lessons">
                                    <div class="lesson-item active" data-video-id="lajF0A942-Y" data-section="1"
                                        data-description="Video pengantar untuk Bagian 1.">
                                        <i class="bi bi-play-circle lesson-icon"></i>
                                        <span class="lesson-title">Pengenalan Career Path</span>
                                        <span class="lesson-duration">8m</span>
                                    </div>
                                    <div class="lesson-item" data-video-id="anotherVideoId" data-section="1"
                                        data-description="Materi dasar yang perlu dipahami.">
                                        <i class="bi bi-file-text lesson-icon"></i>
                                        <span class="lesson-title">Dasar-dasar Bidang Ini</span>
                                        <span class="lesson-duration">15m</span>
                                    </div>
                                    <div class="nilai-display-group mt-2 mb-2">
                                        <label class="d-block">Nilai Kuis:</label>
                                        <span id="quiz-nilai-section-1" class="badge bg-primary">Belum
                                            Mengerjakan</span>
                                        <input type="hidden" id="hidden-nilai-section-1" name="hidden-nilai-section-1"
                                            value="0">
                                    </div>
                                    <div class="status-buttons-group">
                                        <label class="d-block">Status Bagian ini:</label>
                                        <button type="button" class="btn btn-sm btn-outline-secondary status-btn"
                                            data-section="1" data-status="none">None</button>
                                        <button type="button" class="btn btn-sm btn-outline-info status-btn"
                                            data-section="1" data-status="in_progress">In Progress</button>
                                        <button type="button" class="btn btn-sm btn-outline-success status-btn"
                                            data-section="1" data-status="done">Done</button>
                                        <div style="display:none;">
                                            <input type="radio" name="status-section-1" id="radio-status-none-1"
                                                value="none" checked>
                                            <input type="radio" name="status-section-1" id="radio-status-in_progress-1"
                                                value="in_progress">
                                            <input type="radio" name="status-section-1" id="radio-status-done-1"
                                                value="done">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="section" data-section-id="2">
                                <div class="section-header">
                                    <span class="section-title-text">Tahun 2: Core Studies</span>
                                    <button class="section-quiz-btn btn btn-sm btn-info" data-section="2">
                                        <i class="bi bi-pencil-square"></i> Kuis
                                    </button>
                                    <i class="bi bi-chevron-down section-toggle"></i>
                                </div>
                                <div class="section-lessons">
                                    <div class="lesson-item" data-video-id="kJQP7kiw5Fk" data-section="2"
                                        data-description="Video untuk konsep inti.">
                                        <i class="bi bi-play-circle lesson-icon"></i>
                                        <span class="lesson-title">Konsep Inti Bidang</span>
                                        <span class="lesson-duration">12m</span>
                                    </div>
                                    <div class="nilai-display-group mt-2 mb-2">
                                        <label class="d-block">Nilai Kuis:</label>
                                        <span id="quiz-nilai-section-2" class="badge bg-primary">Belum
                                            Mengerjakan</span>
                                        <input type="hidden" id="hidden-nilai-section-2" name="hidden-nilai-section-2"
                                            value="0">
                                    </div>
                                    <div class="status-buttons-group">
                                        <label class="d-block">Status Bagian ini:</label>
                                        <button type="button" class="btn btn-sm btn-outline-secondary status-btn"
                                            data-section="2" data-status="none">None</button>
                                        <button type="button" class="btn btn-sm btn-outline-info status-btn"
                                            data-section="2" data-status="in_progress">In Progress</button>
                                        <button type="button" class="btn btn-sm btn-outline-success status-btn"
                                            data-section="2" data-status="done">Done</button>
                                        <div style="display:none;">
                                            <input type="radio" name="status-section-2" id="radio-status-none-2"
                                                value="none" checked>
                                            <input type="radio" name="status-section-2" id="radio-status-in_progress-2"
                                                value="in_progress">
                                            <input type="radio" name="status-section-2" id="radio-status-done-2"
                                                value="done">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="section" data-section-id="3">
                                <div class="section-header">
                                    <span class="section-title-text">Tahun 3: Specialization</span>
                                    <button class="section-quiz-btn btn btn-sm btn-info" data-section="3">
                                        <i class="bi bi-pencil-square"></i> Kuis
                                    </button>
                                    <i class="bi bi-chevron-down section-toggle"></i>
                                </div>
                                <div class="section-lessons">
                                    <div class="lesson-item" data-video-id="fJ9rUzIMcZQ" data-section="3"
                                        data-description="Video untuk spesialisasi.">
                                        <i class="bi bi-play-circle lesson-icon"></i>
                                        <span class="lesson-title">Spesialisasi Tingkat Lanjut</span>
                                        <span class="lesson-duration">20m</span>
                                    </div>
                                    <div class="nilai-display-group mt-2 mb-2">
                                        <label class="d-block">Nilai Kuis:</label>
                                        <span id="quiz-nilai-section-3" class="badge bg-primary">Belum
                                            Mengerjakan</span>
                                        <input type="hidden" id="hidden-nilai-section-3" name="hidden-nilai-section-3"
                                            value="0">
                                    </div>
                                    <div class="status-buttons-group">
                                        <label class="d-block">Status Bagian ini:</label>
                                        <button type="button" class="btn btn-sm btn-outline-secondary status-btn"
                                            data-section="3" data-status="none">None</button>
                                        <button type="button" class="btn btn-sm btn-outline-info status-btn"
                                            data-section="3" data-status="in_progress">In Progress</button>
                                        <button type="button" class="btn btn-sm btn-outline-success status-btn"
                                            data-section="3" data-status="done">Done</button>
                                        <div style="display:none;">
                                            <input type="radio" name="status-section-3" id="radio-status-none-3"
                                                value="none" checked>
                                            <input type="radio" name="status-section-3" id="radio-status-in_progress-3"
                                                value="in_progress">
                                            <input type="radio" name="status-section-3" id="radio-status-done-3"
                                                value="done">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="course-info-card mt-4 p-3" style="background: #f8f9fa; border-radius: 10px;">
                                <h6 class="text-primary">Informasi Career Path</h6>
                                @if($item->duration_r)
                                    <p class="mb-2"><strong>Durasi:</strong> {{ $item->duration_r }} jam</p>
                                @endif
                                @if($item->rating)
                                    <p class="mb-2"><strong>Rating:</strong> {{ number_format($item->rating, 1) }}/5</p>
                                @endif
                                @if($item->kategori)
                                    <p class="mb-0"><strong>Kategori:</strong> {{ $item->kategori }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="quizModal" class="quiz-modal" style="display: none;">
            <div class="quiz-content">
                <div class="quiz-header">
                    <span class="quiz-close" onclick="closeQuiz()">×</span>
                    <h2 class="quiz-title">Kuis - <span id="quizSectionModalTitle"></span></h2>
                    <p class="quiz-subtitle">Jawab pertanyaan berikut untuk mendapatkan nilai.</p>
                </div>
                <div class="quiz-body">
                    <div class="quiz-questions-container" id="quizQuestionsContainer">
                    </div>
                </div>
                <div class="quiz-navigation">
                    <button class="quiz-btn primary" id="submitQuizModalBtn">Submit Kuis</button>
                </div>
            </div>
        </div>

        <x-fotter></x-fotter>

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('js/click-scroll.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <script src="{{ asset('js/all.js') }}"></script>

        <script>
            // Global variable to store the currently active section (for modal context)
            let currentActiveSectionId = '1'; // Default to 1

            // Objek untuk menyimpan nilai kuis per bagian
            const sectionScores = {
                '1': 0,
                '2': 0,
                '3': 0
            };
            const totalSections = 3; // Total sections in your career path

            // Fungsi untuk menghitung dan mengupdate total nilai career
            function updateOverallCareerScore() {
                let totalScore = 0;
                let completedSections = 0;
                for (const sectionId in sectionScores) {
                    totalScore += sectionScores[sectionId];
                    // Jika nilai kuis > 0 atau status adalah 'done', anggap selesai
                    if (sectionScores[sectionId] > 0 || document.getElementById(`radio-status-done-${sectionId}`)?.checked) {
                        completedSections++;
                    }
                }
                document.getElementById('total-career-nilai').textContent = `${totalScore} / 300`;

                // Update progress bar
                const progressPercentage = (completedSections / totalSections) * 100;
                document.getElementById('completed-sections-count').textContent = completedSections;
                document.getElementById('total-sections-count').textContent = totalSections;
                document.getElementById('overall-progress-bar').style.width = `${progressPercentage}%`;
            }

            // Fungsi untuk mengupdate status tombol secara visual dan hidden radio
            function updateStatus(sectionId, status) {
                // Remove active classes from all buttons for this section
                document.querySelectorAll(`.status-buttons-group .status-btn[data-section="${sectionId}"]`).forEach(btn => {
                    btn.classList.remove('btn-secondary', 'btn-info', 'btn-success');
                    btn.classList.add('btn-outline-secondary', 'btn-outline-info', 'btn-outline-success'); // Reset to outline
                });

                // Add active class to the target button
                const targetButton = document.querySelector(`.status-buttons-group .status-btn[data-section="${sectionId}"][data-status="${status}"]`);
                if (targetButton) {
                    targetButton.classList.remove('btn-outline-secondary', 'btn-outline-info', 'btn-outline-success');
                    if (status === 'none') {
                        targetButton.classList.add('btn-secondary');
                    } else if (status === 'in_progress') {
                        targetButton.classList.add('btn-info');
                    } else if (status === 'done') {
                        targetButton.classList.add('btn-success');
                    }
                }

                // Set hidden radio button
                document.getElementById(`radio-status-${status}-${sectionId}`).checked = true;

                // Update overall progress bar
                updateOverallCareerScore();
            }

            // Fungsi untuk submit kuis dari modal
            function submitQuizModal(sectionId) {
                let modalScore = 0;
                // Logika penilaian kuis untuk modal (ganti dengan pertanyaan dan jawaban sebenarnya)
                if (sectionId == '1') {
                    if (document.querySelector('input[name="q_modal_1_s1"]:checked')?.value === 'a') modalScore += 50;
                    if (document.querySelector('input[name="q_modal_2_s1"]:checked')?.value === 'b') modalScore += 50;
                } else if (sectionId == '2') {
                    if (document.querySelector('input[name="q_modal_1_s2"]:checked')?.value === 'b') modalScore += 50;
                    if (document.querySelector('input[name="q_modal_2_s2"]:checked')?.value === 'c') modalScore += 50;
                } else if (sectionId == '3') {
                    if (document.querySelector('input[name="q_modal_1_s3"]:checked')?.value === 'b') modalScore += 50;
                    if (document.querySelector('input[name="q_modal_2_s3"]:checked')?.value === 'b') modalScore += 50;
                }

                sectionScores[sectionId] = modalScore; // Simpan nilai ke objek
                document.getElementById(`quiz-nilai-section-${sectionId}`).textContent = `${modalScore} / 100`;
                document.getElementById(`hidden-nilai-section-${sectionId}`).value = modalScore;

                updateStatus(sectionId, 'done'); // Set status ke done setelah submit kuis
                // Hidden radio sudah diatur oleh updateStatus

                updateOverallCareerScore(); // Update total nilai career

                const orderId = '{{ $checkout->order_id ?? '' }}';
                const progress = 'done'; // Always 'done' after quiz submission
                const nilai = modalScore;

                fetch('{{ route('learning-progress.store') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        order_id: orderId + '-' + sectionId,
                        progress: progress,
                        nilai: nilai
                    })
                })
                    .then(res => res.json())
                    .then(data => {
                        console.log(`Progress untuk Bagian ${sectionId} dari modal berhasil disimpan:`, data.message);
                        alert(`Nilai Kuis Bagian ${sectionId} Anda: ${modalScore}/100. Progress disimpan!`);
                        closeQuiz();
                    })
                    .catch(err => console.error('Error saving progress from modal quiz:', err));
            }

            // Fungsi untuk membuka modal kuis
            function openQuizModal(sectionId) {
                currentActiveSectionId = sectionId; // Set active section for modal
                document.getElementById('quizSectionModalTitle').textContent = `Bagian ${sectionId}`;
                // Load dummy questions for now. In a real app, fetch questions from DB.
                document.getElementById('quizQuestionsContainer').innerHTML = `
                    <div class="mb-2">
                        <p>1. Pertanyaan Kuis Bagian ${sectionId} Pertama?</p>
                        <input type="radio" name="q_modal_1_s${sectionId}" value="a"> Jawaban A<br>
                        <input type="radio" name="q_modal_1_s${sectionId}" value="b"> Jawaban B<br>
                        <input type="radio" name="q_modal_1_s${sectionId}" value="c"> Jawaban C<br>
                    </div>
                    <div class="mb-2">
                        <p>2. Pertanyaan Kuis Bagian ${sectionId} Kedua?</p>
                        <input type="radio" name="q_modal_2_s${sectionId}" value="a"> Jawaban X<br>
                        <input type="radio" name="q_modal_2_s${sectionId}" value="b"> Jawaban Y<br>
                        <input type="radio" name="q_modal_2_s${sectionId}" value="c"> Jawaban Z<br>
                    </div>
                `;
                document.getElementById('submitQuizModalBtn').onclick = () => submitQuizModal(sectionId);
                document.getElementById('quizModal').style.display = 'block';
            }

            // Fungsi untuk menutup modal kuis
            function closeQuiz() {
                document.getElementById('quizModal').style.display = 'none';
            }

            // Fungsi yang dipanggil saat tombol "Mulai Kuis" dari overlay video diklik
            function openQuizModalForCurrentSection() {
                openQuizModal(currentActiveSectionId); // Use the currently active section
                document.getElementById('videoEndOverlay').style.display = 'none'; // Hide overlay
            }

            // Event listener untuk tombol "Kuis" di sidebar
            document.querySelectorAll('.section-quiz-btn').forEach(button => {
                button.addEventListener('click', function () {
                    const sectionId = this.dataset.section;
                    openQuizModal(sectionId);
                });
            });

            // Event listener untuk tombol status
            document.querySelectorAll('.status-buttons-group .status-btn').forEach(button => {
                button.addEventListener('click', function () {
                    const sectionId = this.dataset.section;
                    const status = this.dataset.status;

                    updateStatus(sectionId, status); // Update visual dan hidden radio

                    const nilai = document.getElementById(`hidden-nilai-section-${sectionId}`)?.value || null;
                    const orderId = '{{ $checkout->order_id ?? '' }}';

                    fetch('{{ route('learning-progress.store') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({
                            order_id: orderId + '-' + sectionId,
                            progress: status,
                            nilai: nilai
                        })
                    })
                        .then(res => res.json())
                        .then(data => console.log(`Progress untuk Bagian ${sectionId} diperbarui:`, data.message))
                        .catch(err => console.error('Error saving progress:', err));
                });
            });

            // --- Video Player Logic (adapted from Course page) ---
            const videoFrame = document.getElementById('videoFrame');
            const playBtn = document.getElementById('playBtn');
            const videoContainer = document.getElementById('videoContainer');
            const videoEndOverlay = document.getElementById('videoEndOverlay');
            let player; // YouTube Player object

            // Function to initialize YouTube player (called when video is played)
            function initializeYouTubePlayer(videoId) {
                // Ensure the YouTube IFrame API script is loaded
                if (typeof (YT) == 'undefined' || typeof (YT.Player) == 'undefined') {
                    const tag = document.createElement('script');
                    tag.src = "https://www.youtube.com/iframe_api";
                    const firstScriptTag = document.getElementsByTagName('script')[0];
                    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
                }

                window.onYouTubeIframeAPIReady = function () {
                    player = new YT.Player('videoFrame', {
                        videoId: videoId,
                        events: {
                            'onReady': onPlayerReady,
                            'onStateChange': onPlayerStateChange
                        }
                    });
                };

                // If API is already loaded, just create the player
                if (typeof (YT) !== 'undefined' && typeof (YT.Player) !== 'undefined' && window.YT.loaded) {
                    player = new YT.Player('videoFrame', {
                        videoId: videoId,
                        events: {
                            'onReady': onPlayerReady,
                            'onStateChange': onPlayerStateChange
                        }
                    });
                }
            }

            function onPlayerReady(event) {
                // console.log("YouTube Player is ready.");
                event.target.playVideo(); // Auto-play when ready
            }

            function onPlayerStateChange(event) {
                if (event.data == YT.PlayerState.ENDED) {
                    videoEndOverlay.style.display = 'flex'; // Show overlay when video ends
                } else {
                    videoEndOverlay.style.display = 'none'; // Hide overlay otherwise
                }
            }

            // Function to play video (called by play button or lesson item)
            function playVideo(videoId, sectionId, description) {
                playBtn.style.display = 'none';
                videoContainer.style.display = 'block';
                videoFrame.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0&showinfo=0`;

                if (sectionId) {
                    currentActiveSectionId = sectionId; // Update global active section
                }
                if (description) {
                    // Update main learning description if needed, or simply for visual feedback
                    // document.getElementById('learningDescription').textContent = description;
                }
                initializeYouTubePlayer(videoId);
            }

            // Event listener for lesson items to change video
            document.querySelectorAll('.lesson-item').forEach(item => {
                item.addEventListener('click', function () {
                    const videoId = this.dataset.videoId;
                    const sectionId = this.dataset.section;
                    const description = this.dataset.description;
                    playVideo(videoId, sectionId, description);

                    // Remove active class from all lessons
                    document.querySelectorAll('.lesson-item').forEach(lesson => lesson.classList.remove('active'));
                    // Add active class to the clicked lesson
                    this.classList.add('active');
                });
            });

            // Initial setup on page load
            document.addEventListener('DOMContentLoaded', function () {
                // Initialize overall progress bar (all 0 initially)
                updateOverallCareerScore();

                // Set initial status of all sections to 'none' and update buttons
                // In a real application, you'd fetch user's actual progress from the database
                // and update the buttons and scores accordingly.
                updateStatus('1', 'none');
                updateStatus('2', 'none');
                updateStatus('3', 'none');

                // Activate the first lesson of the first section by default
                const firstLesson = document.querySelector('.lesson-item.active');
                if (firstLesson) {
                    const videoId = firstLesson.dataset.videoId;
                    const sectionId = firstLesson.dataset.section;
                    const description = firstLesson.dataset.description;
                    playVideo(videoId, sectionId, description);
                } else {
                    // If no active lesson, just hide the play button and show container with default video
                    playBtn.style.display = 'none';
                    videoContainer.style.display = 'block';
                }

                // Section toggle functionality (expand/collapse)
                document.querySelectorAll('.section-toggle').forEach(toggle => {
                    toggle.addEventListener('click', function () {
                        const section = this.closest('.section');
                        section.classList.toggle('open');
                        this.classList.toggle('bi-chevron-down');
                        this.classList.toggle('bi-chevron-up');
                    });
                });

                // Initially open the first section and set Chevron direction
                const firstSection = document.querySelector('.section[data-section-id="1"]');
                if (firstSection) {
                    firstSection.classList.add('open');
                    firstSection.querySelector('.section-toggle').classList.remove('bi-chevron-down');
                    firstSection.querySelector('.section-toggle').classList.add('bi-chevron-up');
                }
            });
        </script>
        <style>

        </style>
    </main>
</body>

</html>