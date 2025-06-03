<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Payment Success - Course Enrollment Complete">
    <meta name="author" content="">

    <title>Payment Successful - Course Enrollment</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-topic-listing.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">

    <!-- Success Page Styles -->
    <style>
        :root {
            --success-primary: #10B981;
            --success-secondary: #059669;
            --success-light: #D1FAE5;
            --blue-primary: #3B82F6;
            --text-primary: #1F2937;
            --text-secondary: #6B7280;
            --bg-light: #F9FAFB;
            --border-light: #E5E7EB;
        }

        body {
            font-family: 'Inter', 'Segoe UI', sans-serif;
            background: white;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .success-container {
            min-height: calc(100vh - 80px);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
            position: relative;
            margin-top: 80px;
        }

        .success-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            max-width: 650px;
            width: 100%;
            padding: 3rem 2.5rem;
            text-align: center;
            position: relative;
            animation: slideUp 0.8s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .success-icon {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, var(--success-primary), var(--success-secondary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
            box-shadow: 0 0 30px rgba(16, 185, 129, 0.3);
            animation: bounceIn 1s ease-out 0.3s both;
        }

        @keyframes bounceIn {
            0% {
                opacity: 0;
                transform: scale(0.3);
            }
            50% {
                opacity: 1;
                transform: scale(1.05);
            }
            70% {
                transform: scale(0.9);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        .success-icon i {
            font-size: 3rem;
            color: white;
        }

        .main-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
            animation: fadeIn 1s ease-out 0.6s both;
        }

        .sub-title {
            font-size: 1.125rem;
            font-weight: 500;
            color: var(--text-secondary);
            margin-bottom: 2.5rem;
            animation: fadeIn 1s ease-out 0.8s both;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .course-info {
            background: var(--bg-light);
            border-radius: 12px;
            padding: 1.5rem;
            margin: 2rem 0;
            display: flex;
            align-items: center;
            text-align: left;
            border: 1px solid var(--border-light);
            animation: fadeIn 1s ease-out 1s both;
        }

        .course-image {
            width: 80px;
            height: 80px;
            border-radius: 12px;
            object-fit: cover;
            margin-right: 1rem;
            flex-shrink: 0;
        }

        .course-details h4 {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.25rem;
        }

        .course-details p {
            color: var(--text-secondary);
            margin: 0;
            font-size: 0.9rem;
        }

        .transaction-details {
            background: white;
            border: 1px solid var(--border-light);
            border-radius: 12px;
            padding: 1.5rem;
            margin: 2rem 0;
            animation: fadeIn 1s ease-out 1.2s both;
        }

        .detail-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.5rem 0;
            border-bottom: 1px solid #f3f4f6;
        }

        .detail-row:last-child {
            border-bottom: none;
            font-weight: 600;
            color: var(--success-primary);
        }

        .detail-label {
            color: var(--text-secondary);
            font-size: 0.9rem;
        }

        .detail-value {
            color: var(--text-primary);
            font-weight: 500;
        }

        .copy-btn {
            background: none;
            border: none;
            color: var(--blue-primary);
            cursor: pointer;
            font-size: 0.8rem;
            margin-left: 0.5rem;
        }

        .next-steps {
            text-align: left;
            margin: 2rem 0;
            animation: fadeIn 1s ease-out 1.4s both;
        }

        .next-steps h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 1rem;
        }

        .step-item {
            display: flex;
            align-items: center;
            padding: 0.75rem 0;
        }

        .step-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--blue-primary), #2563eb);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            flex-shrink: 0;
        }

        .step-icon i {
            color: white;
            font-size: 1rem;
        }

        .step-text {
            color: var(--text-primary);
            font-weight: 500;
        }

        .action-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin: 2.5rem 0 1.5rem;
            animation: fadeIn 1s ease-out 1.6s both;
        }

        .btn-primary-success {
            background: linear-gradient(135deg, var(--success-primary), var(--success-secondary));
            border: none;
            color: white;
            padding: 0.75rem 2rem;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn-primary-success:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(16, 185, 129, 0.3);
            color: white;
        }

        .btn-secondary-outline {
            border: 2px solid var(--border-light);
            color: var(--text-primary);
            background: white;
            padding: 0.75rem 2rem;
            border-radius: 8px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn-secondary-outline:hover {
            border-color: var(--blue-primary);
            color: var(--blue-primary);
            transform: translateY(-2px);
        }

        .support-info {
            color: var(--text-secondary);
            font-size: 0.9rem;
            margin-top: 1.5rem;
            animation: fadeIn 1s ease-out 1.8s both;
        }

        .support-info a {
            color: var(--blue-primary);
            text-decoration: none;
        }

        .email-confirmation {
            background: var(--success-light);
            color: var(--success-secondary);
            padding: 0.75rem 1rem;
            border-radius: 8px;
            font-size: 0.9rem;
            margin-bottom: 1rem;
            animation: fadeIn 1s ease-out 2s both;
        }

        /* Confetti Animation */
        .confetti {
            position: fixed;
            top: -10px;
            left: 0;
            width: 100vw;
            height: 100vh;
            pointer-events: none;
            overflow: hidden;
            z-index: 1000;
        }

        .confetti-piece {
            position: absolute;
            width: 10px;
            height: 10px;
            background: var(--success-primary);
            animation: confetti-fall linear infinite;
        }

        .confetti-piece:nth-child(odd) {
            background: var(--blue-primary);
            animation-duration: 3s;
            animation-delay: 0s;
        }

        .confetti-piece:nth-child(even) {
            background: #fbbf24;
            animation-duration: 2.5s;
            animation-delay: 0.5s;
        }

        @keyframes confetti-fall {
            0% {
                transform: translateY(-100vh) rotate(0deg);
                opacity: 1;
            }
            100% {
                transform: translateY(100vh) rotate(720deg);
                opacity: 0;
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .success-container {
                margin-top: 60px;
                min-height: calc(100vh - 60px);
            }

            .success-card {
                padding: 2rem 1.5rem;
                margin: 1rem;
            }

            .main-title {
                font-size: 2rem;
            }

            .course-info {
                flex-direction: column;
                text-align: center;
            }

            .course-image {
                margin-right: 0;
                margin-bottom: 1rem;
            }

            .action-buttons {
                flex-direction: column;
                align-items: center;
            }

            .action-buttons a {
                width: 100%;
                max-width: 300px;
                text-align: center;
                display: block;
            }
        }

        @media (max-width: 480px) {
            .success-container {
                padding: 1rem 0.5rem;
                margin-top: 50px;
            }

            .success-card {
                padding: 1.5rem 1rem;
            }

            .main-title {
                font-size: 1.75rem;
            }

            .detail-row {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.25rem;
            }
        }
    </style>
</head>

<body id="top">
    <main>
        <x-navbar></x-navbar>

        <!-- Confetti Animation -->
        <div class="confetti" id="confetti">
            <!-- Confetti pieces will be generated by JavaScript -->
        </div>

        <div class="success-container">
            <div class="success-card">
                <!-- Success Icon -->
                <div class="success-icon">
                    <i class="bi bi-check-lg"></i>
                </div>

                <!-- Main Messages -->
                <h1 class="main-title">Payment Successful!</h1>
                <p class="sub-title">Welcome to your learning journey!</p>

                <!-- Email Confirmation -->
                <div class="email-confirmation">
                    <i class="bi bi-envelope-check me-2"></i>
                    Confirmation sent to student@example.com
                </div>

                <!-- Course Information -->
                <div class="course-info">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" 
                         alt="Course Image" class="course-image">
                    <div class="course-details">
                        <h4>Complete Web Development Bootcamp</h4>
                        <p>TechAcademy Pro • 12 weeks • Certificate included</p>
                        <small class="text-muted">Full Stack Development with React & Node.js</small>
                    </div>
                </div>

                <!-- Transaction Details -->
                <div class="transaction-details">
                    <div class="detail-row">
                        <span class="detail-label">Order ID</span>
                        <span class="detail-value">
                            #BRG-2024-5847
                            <button class="copy-btn" onclick="copyOrderId()">
                                <i class="bi bi-copy"></i> Copy
                            </button>
                        </span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Payment Method</span>
                        <span class="detail-value">
                            <i class="bi bi-credit-card me-1"></i>
                            Card ending in ****4242
                        </span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Date</span>
                        <span class="detail-value">June 3, 2025 at 2:30 PM</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Total Amount</span>
                        <span class="detail-value">$299.00</span>
                    </div>
                </div>

                <!-- Next Steps -->
                <div class="next-steps">
                    <h3>What's Next?</h3>
                    <div class="step-item">
                        <div class="step-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="step-text">Check your email for course access details</div>
                    </div>
                    <div class="step-item">
                        <div class="step-icon">
                            <i class="bi bi-phone"></i>
                        </div>
                        <div class="step-text">Download our mobile app for learning on-the-go</div>
                    </div>
                    <div class="step-item">
                        <div class="step-icon">
                            <i class="bi bi-play-circle"></i>
                        </div>
                        <div class="step-text">Start with your first lesson and introduction module</div>
                    </div>
                    <div class="step-item">
                        <div class="step-icon">
                            <i class="bi bi-people"></i>
                        </div>
                        <div class="step-text">Join our exclusive student community</div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="action-buttons">
                    <a href="#" class="btn-primary-success">Start Learning Now</a>
                    <a href="#" class="btn-secondary-outline">Download Receipt</a>
                </div>

                <div class="text-center">
                    <a href="#" style="color: var(--blue-primary); text-decoration: none; font-weight: 500;">
                        Go to Dashboard →
                    </a>
                </div>

                <!-- Support Information -->
                <div class="support-info">
                    Need help? <a href="#">Contact our support team</a> - we're here 24/7
                </div>
            </div>
        </div>

        <x-fotter></x-fotter>

        <!-- JAVASCRIPT FILES -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('js/click-scroll.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <script src="{{ asset('js/all.js') }}"></script>

        <!-- Success Page JavaScript -->
        <script>
            // Generate confetti animation
            function createConfetti() {
                const confettiContainer = document.getElementById('confetti');
                const colors = ['#10B981', '#3B82F6', '#fbbf24', '#ef4444', '#8b5cf6'];
                
                for (let i = 0; i < 50; i++) {
                    const confettiPiece = document.createElement('div');
                    confettiPiece.className = 'confetti-piece';
                    confettiPiece.style.left = Math.random() * 100 + 'vw';
                    confettiPiece.style.animationDelay = Math.random() * 3 + 's';
                    confettiPiece.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
                    confettiContainer.appendChild(confettiPiece);
                }

                // Remove confetti after animation
                setTimeout(() => {
                    confettiContainer.innerHTML = '';
                }, 5000);
            }

            // Copy order ID function
            function copyOrderId() {
                const orderId = '#BRG-2024-5847';
                navigator.clipboard.writeText(orderId).then(() => {
                    // Show temporary feedback
                    const btn = event.target.closest('.copy-btn');
                    const originalHTML = btn.innerHTML;
                    btn.innerHTML = '<i class="bi bi-check"></i> Copied!';
                    btn.style.color = '#10B981';
                    
                    setTimeout(() => {
                        btn.innerHTML = originalHTML;
                        btn.style.color = '#3B82F6';
                    }, 2000);
                });
            }

            // Initialize animations on page load
            document.addEventListener('DOMContentLoaded', function() {
                // Start confetti animation
                setTimeout(createConfetti, 500);
                
                // Add additional entrance animations for elements
                const animatedElements = document.querySelectorAll('.success-card > *');
                animatedElements.forEach((element, index) => {
                    element.style.opacity = '0';
                    element.style.transform = 'translateY(20px)';
                    
                    setTimeout(() => {
                        element.style.transition = 'all 0.6s ease-out';
                        element.style.opacity = '1';
                        element.style.transform = 'translateY(0)';
                    }, index * 100 + 200);
                });
            });

            // Add smooth hover effects for buttons
            document.querySelectorAll('.btn-primary-success, .btn-secondary-outline').forEach(btn => {
                btn.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-2px)';
                });
                
                btn.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
        </script>
    </main>
</body>

</html>