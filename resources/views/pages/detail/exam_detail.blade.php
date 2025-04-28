<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="Exam detail page for Topic Listing Template">
        <meta name="author" content="">

        <title>Exam Detail - Topic Listing</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">
        <link href="css/templatemo-topic-listing.css" rel="stylesheet">
        <link href="css/navbar.css" rel="stylesheet">     

    </head>
    
    <body id="top">
        <main>
        <x-navbar></x-navbar>


            <!-- Exam Detail Header -->
            <section class="hero-section d-flex justify-content-center align-items-center" style="padding: 80px 0;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-12 mx-auto">
                            <h1 class="text-white text-center">Comprehensive Exam</h1>
                            <h6 class="text-center">Test your understanding with our comprehensive exam</h6>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Exam Content Section -->
            <section class="section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="custom-block bg-white shadow-lg">
                                <div class="d-flex">
                                    <div>
                                        <h3 class="mb-2">Exam Overview</h3>
                                        <span class="badge bg-education rounded-pill mb-3">75 Questions</span>
                                    </div>
                                </div>
                                
                                <img src="images/topics/undraw_Educator_re_ju47.png" class="img-fluid mb-4" alt="">
                                
                                <h4>Exam Description</h4>
                                <p>This comprehensive exam is designed to test your understanding of key concepts and your ability to apply them to real-world scenarios. The exam covers all material presented in the modules and provides an excellent way to assess your progress.</p>
                                
                                <h4 class="mt-4">Exam Details</h4>
                                <ul class="mt-3">
                                    <li><strong>Duration:</strong> 120 minutes</li>
                                    <li><strong>Format:</strong> Multiple choice, short answer, and case studies</li>
                                    <li><strong>Passing score:</strong> 70%</li>
                                    <li><strong>Attempts allowed:</strong> 3</li>
                                    <li><strong>Certificate:</strong> Provided upon successful completion</li>
                                </ul>
                                
                                <h4 class="mt-4">Exam Sections</h4>
                                <div class="accordion mt-3" id="examAccordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Section 1: Fundamentals (25 questions)
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#examAccordion">
                                            <div class="accordion-body">
                                                <p>This section tests your knowledge of basic concepts, terminology, and principles covered in the introductory modules.</p>
                                                <p><strong>Topics covered:</strong> Core concepts, basic principles, terminology, and frameworks</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Section 2: Application (30 questions)
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#examAccordion">
                                            <div class="accordion-body">
                                                <p>This section focuses on your ability to apply concepts to practical situations and solve problems using the techniques learned.</p>
                                                <p><strong>Topics covered:</strong> Practical applications, case scenarios, problem-solving techniques</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Section 3: Advanced Analysis (20 questions)
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#examAccordion">
                                            <div class="accordion-body">
                                                <p>This section assesses your ability to analyze complex situations, identify patterns, and make informed decisions based on the available information.</p>
                                                <p><strong>Topics covered:</strong> Critical analysis, decision making, complex problem solving</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <h4 class="mt-4">Preparation Tips</h4>
                                <ul class="mt-3">
                                    <li>Review all module materials thoroughly</li>
                                    <li>Practice with sample questions</li>
                                    <li>Focus on understanding concepts rather than memorization</li>
                                    <li>Allocate time for each section based on question count</li>
                                    <li>Take advantage of practice exams to familiarize yourself with the format</li>
                                </ul>
                                
                                <div class="d-flex justify-content-between mt-4">
                                    <a href="\home#section_2" class="btn custom-btn">Back to Topics</a>
                                    <a href="#" class="btn custom-btn">Start Exam</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
<!-- fotter -->
        <x-fotter></x-fotter>
        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>