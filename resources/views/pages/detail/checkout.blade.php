<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bridge - Course Checkout">
    <meta name="author" content="">
    <title>Checkout - Bridge Learning Platform</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-topic-listing.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/degree-programs.css') }}" rel="stylesheet">
    <link href="{{ asset('css/checkout.css') }}" rel="stylesheet">

    <style>
        /* Custom styles for different image types */
        .course-image-container {
            width: 80px;
            height: 80px;
            border-radius: 8px;
            overflow: hidden;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f8f9fa;
        }

        /* Course style - default small logo style */
        .course-image-container.course-type .provider-logo {
            width: 60px;
            height: 60px;
            object-fit: contain;
            border-radius: 4px;
        }

        /* Career style - larger cover image style */
        .course-image-container.career-type {
            width: 100px;
            height: 80px;
            border-radius: 12px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        .course-image-container.career-type .provider-logo {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 12px;
        }

        /* Module style - rounded with border */
        .course-image-container.module-type {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            border: 3px solid #fff;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        }

        .course-image-container.module-type .provider-logo {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 50%;
        }
    </style>
   
</head>

<body>
    <x-navbar></x-navbar>

  <div class="checkout-page">
    <main class="main-content">
        <div class="checkout-container">
            <div class="checkout-header">
                <h1 class="checkout-title">Checkout</h1>
                <p class="checkout-subtitle">
                    Complete your 
                    @if($itemType === 'course')
                        course enrollment
                    @elseif($itemType === 'career')
                        career program enrollment
                    @else
                        module enrollment
                    @endif
                </p>
                <p class="required-notice">All fields are required</p>
            </div>

            @if(session('success'))
                <div id="alertMessage" class="alert-custom alert-success-custom">
                    <i class="bi bi-check-circle alert-icon"></i> {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div id="alertMessage" class="alert-custom alert-danger-custom">
                    <i class="bi bi-x-circle alert-icon"></i> {{ session('error') }}
                </div>
            @endif

            <div class="total-payment-summary">
                <div class="total-payment-title">Total Payment</div>
                <div class="total-payment-amount" id="totalAmount">
                    @if($itemType === 'course')
                        IDR 234,505
                    @elseif($itemType === 'career')
                        IDR 199,000
                    @else
                        IDR 99,000
                    @endif
                </div>
                <div class="total-payment-note">Monthly subscription after trial period</div>
            </div>

            <div class="checkout-grid">
                <div class="checkout-form">
                    <form action="{{ route('checkout.store') }}" method="POST" id="checkoutForm">
                        @csrf
                        <input type="hidden" name="item_type" value="{{ $itemType }}">
                        <input type="hidden" name="item_id" value="{{ $itemType === 'course' ? $course->id : ($itemType === 'career' ? $career->id : $module->id) }}">

                        <div class="billing-section">
                            <h2 class="section-title">Billing Information</h2>

                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input type="text" id="customerName" name="customer_name" class="form-control"
                                    placeholder="Enter your full name" value="{{ Auth::user()->name }}" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Organization Type</label>
                                <input type="hidden" name="organization_type" id="organizationType" value="individual">
                                <div class="org-type-selection">
                                    <div class="org-type-option active" data-type="individual">
                                        <div class="org-type-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                        <div class="org-type-label">Individual</div>
                                    </div>
                                    <div class="org-type-option" data-type="corporation">
                                        <div class="org-type-icon">
                                            <i class="bi bi-building"></i>
                                        </div>
                                        <div class="org-type-label">Corporation</div>
                                    </div>
                                    <div class="org-type-option" data-type="school">
                                        <div class="org-type-icon">
                                            <i class="bi bi-mortarboard"></i>
                                        </div>
                                        <div class="org-type-label">School</div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group org-name-field" id="corporationField">
                                <label class="form-label">Corporation Name</label>
                                <input type="text" id="corporationName" name="corporation_name" class="form-control"
                                    placeholder="Enter corporation name">
                            </div>

                            <div class="form-group org-name-field" id="schoolField">
                                <label class="form-label">School Name</label>
                                <input type="text" id="schoolName" name="school_name" class="form-control"
                                    placeholder="Enter school name">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Country</label>
                                <select id="country" name="country" class="form-control form-select" required>
                                    <option value="">Select your country</option>
                                    <option value="ID" selected>Indonesia</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="SG">Singapore</option>
                                    <option value="TH">Thailand</option>
                                    <option value="PH">Philippines</option>
                                    <option value="VN">Vietnam</option>
                                </select>
                            </div>
                        </div>

                        <div class="payment-section">
                            <h2 class="section-title">Payment Methods</h2>
                            <input type="hidden" name="payment_method" id="paymentMethod" value="card">

                            <div class="payment-methods">
                                <div class="payment-option active" data-payment="card">
                                    <div class="payment-header">
                                        <i class="bi bi-credit-card payment-icon"></i>
                                        <span class="payment-title">Card</span>
                                    </div>

                                    <div class="card-form active">
                                        <div class="form-group">
                                            <label class="form-label">Card Number</label>
                                            <input type="text" id="cardNumber" name="card_number" class="form-control"
                                                placeholder="1234 1234 1234 1234" maxlength="19">
                                            <div class="card-icons">
                                                <div class="card-icon visa">VISA</div>
                                                <div class="card-icon mastercard">MC</div>
                                                <div class="card-icon jcb">JCB</div>
                                                <div class="card-icon amex">AMEX</div>
                                            </div>
                                        </div>

                                        <div class="card-row">
                                            <div class="form-group">
                                                <label class="form-label">Expiration Date</label>
                                                <input type="text" id="expiryDate" name="expiry_date" class="form-control"
                                                    placeholder="MM / YY" maxlength="7">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Security Code</label>
                                                <input type="text" id="cvc" name="cvc" class="form-control" placeholder="CVC"
                                                    maxlength="4">
                                            </div>
                                        </div>

                                        <div class="card-disclaimer">
                                            By providing your card information, you allow Bridge, Inc. to charge
                                            your card for future payments in accordance with their terms.
                                        </div>
                                    </div>
                                </div>

                                <div class="payment-option" data-payment="paypal">
                                    <div class="payment-header">
                                        <i class="bi bi-paypal payment-icon"></i>
                                        <span class="payment-title">PayPal</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="cta-button primary" id="checkoutBtn" name="checkoutBtn" value="1">Checkout Now</button>
                        <button type="submit" class="cta-button secondary" id="trialBtn" name="trialBtn" value="1">Start Free Trial</button>

                        <p class="no-charge-text">Free trial won't be charged today</p>

                        <div class="terms-text">
                            I agree to the <a href="#">Terms of Use</a>, <a href="#">Refund Policy</a>, and <a
                                href="#">Privacy Policy</a>.
                        </div>
                    </form>
                </div>

                <div class="order-summary">
                    <div class="course-item">
                        <div class="course-image-container 
                            @if($itemType === 'course')
                                course-type
                            @elseif($itemType === 'career')
                                career-type
                            @else
                                module-type
                            @endif">
                            @if($itemType === 'course')
                                <img src="{{ $course->institution_logo }}" alt="{{ $course->institution }}" class="provider-logo">
                            @elseif($itemType === 'career')
                                <img src="{{ $career->image }}" alt="{{ $career->name }}" class="provider-logo">
                            @else
                                <img src="{{ $module->image }}" alt="{{ $module->name }}" class="provider-logo">
                            @endif
                        </div>
                        <div class="course-details">
                            <h3>
                                @if($itemType === 'course')
                                    {{ $course->name }}
                                @elseif($itemType === 'career')
                                    {{ $career->name }}
                                @else
                                    {{ $module->name }}
                                @endif
                            </h3>
                            <p class="course-provider">
                                @if($itemType === 'course')
                                    {{ $course->institution }}
                                @elseif($itemType === 'career')
                                    Career Program
                                @else
                                    Learning Module
                                @endif
                            </p>
                            <a href="#" class="remove-link" id="removeFromCart">Remove from cart</a>
                        </div>
                    </div>

                    <div class="trial-info">
                        <div class="trial-badge">7-Day Free Trial</div>
                        <p class="trial-text">No commitment. Cancel anytime.</p>
                    </div>

                    <div class="pricing-details">
                        <div class="pricing-row">
                            <span>Monthly subscription</span>
                            <span class="price">
                                @if($itemType === 'course')
                                    then IDR 234,505/mo
                                @elseif($itemType === 'career')
                                    then IDR 199,000/mo
                                @else
                                    then IDR 99,000/mo
                                @endif
                            </span>
                        </div>
                        <div class="pricing-row total">
                            <span>Today's Total:</span>
                            <span class="price">IDR 0</span>
                        </div>
                    </div>

                    <div class="trial-details">
                        Your subscription begins today with a 7-day free trial. If you decide to stop during the
                        trial period, visit My Purchases to cancel before June 06, 2025 and your card won't be charged. We
                        can't issue refunds once your card is charged.
                    </div>

                    <div class="testimonial-section">
                        <div class="testimonial-content">
                            @if($itemType === 'course')
                                "The courses I took taught me how to turn theory into concrete & systematic practice. Bridge has been paramount to the advancement of my career."
                            @elseif($itemType === 'career')
                                "The career program helped me transition into my dream job. The structured approach and mentorship were invaluable."
                            @else
                                "These focused modules allowed me to quickly learn specific skills I needed for my current projects."
                            @endif
                        </div>
                        <div class="testimonial-author">
                            <img src="{{ asset('images/instructors/cowo1.jpg') }}"
                                alt="Ana C." class="author-avatar">
                            <div class="author-info">
                                <div class="author-name">— Ana.C.</div>
                            </div>
                        </div>
                    </div>

                    <div class="stats-section">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-people"></i>
                            </div>
                            <span class="stat-number">140 Million+</span>
                            <span class="stat-label">Learners</span>
                        </div>
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-book"></i>
                            </div>
                            <span class="stat-number">10,000+</span>
                            <span class="stat-label">
                                @if($itemType === 'course')
                                    Courses
                                @elseif($itemType === 'career')
                                    Career Programs
                                @else
                                    Modules
                                @endif
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

    <x-fotter></x-fotter>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/click-scroll.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/all.js') }}"></script>

    <script>

        
        $(document).ready(function() {
            $('.org-type-option').on('click', function() {
                $('.org-type-option').removeClass('active');
                $(this).addClass('active');
                var orgType = $(this).data('type');
                $('#organizationType').val(orgType);

                $('.org-name-field').removeClass('show');
                $('#corporationName').removeAttr('required');
                $('#schoolName').removeAttr('required');

                // Show the relevant field and make it required
                if (orgType === 'corporation') {
                    $('#corporationField').addClass('show');
                    $('#corporationName').attr('required', 'required');
                } else if (orgType === 'school') {
                    $('#schoolField').addClass('show');
                    $('#schoolName').attr('required', 'required');
                }
            });

            // Payment Option Selection Logic (from second blade)
            $('.payment-option').on('click', function() {
                $('.payment-option').removeClass('active');
                $(this).addClass('active');
                var paymentMethod = $(this).data('payment');
                $('#paymentMethod').val(paymentMethod);

                // Show/hide card form based on selection
                if (paymentMethod === 'card') {
                    $('.card-form').addClass('active');
                    // Add 'required' to card fields when card is selected
                    $('#cardNumber').attr('required', 'required');
                    $('#expiryDate').attr('required', 'required');
                    $('#cvc').attr('required', 'required');
                } else {
                    $('.card-form').removeClass('active');
                    // Remove 'required' from card fields when card is not selected
                    $('#cardNumber').removeAttr('required');
                    $('#expiryDate').removeAttr('required');
                    $('#cvc').removeAttr('required');
                }
            });

            // Auto-hide session alerts after a few seconds (from first blade)
            var alertMessage = $('#alertMessage');
            if (alertMessage.length) {
                setTimeout(function() {
                    alertMessage.addClass('fade-out');
                    alertMessage.on('transitionend', function() {
                        $(this).remove();
                    });
                }, 5000); // 5 seconds
            }

            // Remove from cart link - (Assuming this is a placeholder and needs backend logic)
            $('#removeFromCart').on('click', function(e) {
                e.preventDefault(); // Prevent default link behavior
                // Add your logic here to remove the course from the cart,
                // potentially via an AJAX call or redirect.
                alert('Course removed from cart (frontend action only).');
                // You'd typically refresh the page or update the UI
                // window.location.reload();
            });

            // Button Submission Logic (Reverted to original first blade's structure for clarity)
            // Both buttons are now type="submit" and differentiate by 'name' attribute
            // No specific JS click handler needed unless you have other client-side validation
            // or AJAX submission.
            // If you click checkoutBtn, it will send checkoutBtn=1
            // If you click trialBtn, it will send trialBtn=1
            // Your Laravel controller can then check for request()->has('checkoutBtn') or request()->has('trialBtn')
            // No need for separate .on('click') listeners for submitting the form.
        });
    </script>
</body>

</html>