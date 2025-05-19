document.addEventListener('DOMContentLoaded', function() {
    // Testimonial Carousel
    const slides = document.querySelectorAll('.testimonial-slide');
    const indicators = document.querySelectorAll('.testimonial-indicators button');
    const prevBtn = document.getElementById('testimonialPrev');
    const nextBtn = document.getElementById('testimonialNext');
    let currentSlide = 0;
    
    function showSlide(index) {
        // Hide all slides
        slides.forEach(slide => {
            slide.classList.remove('active');
        });
        
        // Remove active class from all indicators
        indicators.forEach(indicator => {
            indicator.classList.remove('active');
            indicator.setAttribute('aria-current', 'false');
        });
        
        // Show the current slide and set active indicator
        slides[index].classList.add('active');
        indicators[index].classList.add('active');
        indicators[index].setAttribute('aria-current', 'true');
        
        // Pause all videos when changing slides
        const videos = document.querySelectorAll('video');
        videos.forEach(video => {
            video.pause();
            // Reset play overlay
            const videoContainer = video.closest('.testimonial-video');
            if (videoContainer) {
                videoContainer.classList.remove('playing');
            }
        });
        
        currentSlide = index;
    }
    
    // Next slide
    function nextSlide() {
        const newIndex = (currentSlide + 1) % slides.length;
        showSlide(newIndex);
    }
    
    // Previous slide
    function prevSlide() {
        const newIndex = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(newIndex);
    }
    
    // Add event listeners for controls
    if (prevBtn) prevBtn.addEventListener('click', prevSlide);
    if (nextBtn) nextBtn.addEventListener('click', nextSlide);
    
    // Add event listeners for indicators
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            showSlide(index);
        });
    });
    
    // Auto play (optional) - commented out but can be enabled if needed
    // let slideInterval = setInterval(nextSlide, 6000);
    
    // Pause on hover (for auto play if enabled)
    const testimonialCarousel = document.querySelector('.testimonials-carousel');
    if (testimonialCarousel) {
        testimonialCarousel.addEventListener('mouseenter', () => {
            // clearInterval(slideInterval);
        });
        
        testimonialCarousel.addEventListener('mouseleave', () => {
            // slideInterval = setInterval(nextSlide, 6000);
        });
    }
    
    // Custom video play functionality
    const playButtons = document.querySelectorAll('.video-play-btn');
    playButtons.forEach(button => {
        button.addEventListener('click', function() {
            const videoContainer = this.closest('.testimonial-video');
            const video = videoContainer.querySelector('video');
            
            if (video) {
                videoContainer.classList.add('playing');
                video.play();
                
                // Pause all other videos
                const allVideos = document.querySelectorAll('video');
                allVideos.forEach(otherVideo => {
                    if (otherVideo !== video && !otherVideo.paused) {
                        otherVideo.pause();
                        const otherContainer = otherVideo.closest('.testimonial-video');
                        if (otherContainer) {
                            otherContainer.classList.remove('playing');
                        }
                    }
                });
            }
        });
    });
    
    // When a video ends
    const allVideos = document.querySelectorAll('video');
    allVideos.forEach(video => {
        video.addEventListener('ended', function() {
            const videoContainer = this.closest('.testimonial-video');
            if (videoContainer) {
                videoContainer.classList.remove('playing');
            }
        });
        
        // When video is paused
        video.addEventListener('pause', function() {
            const videoContainer = this.closest('.testimonial-video');
            if (videoContainer) {
                videoContainer.classList.remove('playing');
            }
        });
        
        // When video is playing
        video.addEventListener('play', function() {
            const videoContainer = this.closest('.testimonial-video');
            if (videoContainer) {
                videoContainer.classList.add('playing');
            }
            
            // Pause all other videos
            allVideos.forEach(otherVideo => {
                if (otherVideo !== video && !otherVideo.paused) {
                    otherVideo.pause();
                    const otherContainer = otherVideo.closest('.testimonial-video');
                    if (otherContainer) {
                        otherContainer.classList.remove('playing');
                    }
                }
            });
        });
    });
});
/* Add Animation Trigger */
document.addEventListener('DOMContentLoaded', function() {
  const animatedElements = document.querySelectorAll('.section-title, .horizontal-card, .partner-logo, .certificate-image, .accordion-item');
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate');
      }
    });
  }, { threshold: 0.1 });
  
  animatedElements.forEach(element => {
    observer.observe(element);
  });
});

  // Add JavaScript for filtering functionality
  document.addEventListener('DOMContentLoaded', function () {
    // Program level dropdown functionality
    const programItems = document.querySelectorAll('#programLevelDropdown + .dropdown-menu .dropdown-item');
    programItems.forEach(item => {
        item.addEventListener('click', function () {
            document.getElementById('programLevelDropdown').textContent = this.textContent;
        });
    });

    // Subject dropdown functionality
    const subjectItems = document.querySelectorAll('#subjectDropdown + .dropdown-menu .dropdown-item');
    subjectItems.forEach(item => {
        item.addEventListener('click', function () {
            document.getElementById('subjectDropdown').textContent = this.textContent;
        });
    });

    // Pagination functionality
    const pages = document.querySelectorAll('.pagination .page-link[data-page]');
    const prevBtn = document.getElementById('prevPageBtn');
    const nextBtn = document.getElementById('nextPageBtn');
    let currentPage = 1;
    const totalPages = pages.length;

    // Function to update pagination state
    function updatePagination() {
        // Update active page indicator
        pages.forEach(page => {
            const pageNum = parseInt(page.getAttribute('data-page'));
            if (pageNum === currentPage) {
                page.parentElement.classList.add('active');
            } else {
                page.parentElement.classList.remove('active');
            }
        });

        // Update prev/next button states
        if (currentPage === 1) {
            prevBtn.classList.add('disabled');
        } else {
            prevBtn.classList.remove('disabled');
        }

        if (currentPage === totalPages) {
            nextBtn.classList.add('disabled');
        } else {
            nextBtn.classList.remove('disabled');
        }

        // In a real application, you would fetch new content here
        // For demo purposes, we'll just scroll to top
        window.scrollTo(0, document.getElementById('degreesList').offsetTop - 100);
    }

    // Add click handlers to page numbers
    pages.forEach(page => {
        page.addEventListener('click', function (e) {
            e.preventDefault();
            currentPage = parseInt(this.getAttribute('data-page'));
            updatePagination();
            // In a real application, you would load page content here
            console.log(`Loading page ${currentPage}`);
        });
    });

    // Add click handler for prev button
    prevBtn.querySelector('a').addEventListener('click', function (e) {
        e.preventDefault();
        if (currentPage > 1) {
            currentPage--;
            updatePagination();
            // In a real application, you would load page content here
            console.log(`Loading page ${currentPage}`);
        }
    });

    // Add click handler for next button
    nextBtn.querySelector('a').addEventListener('click', function (e) {
        e.preventDefault();
        if (currentPage < totalPages) {
            currentPage++;
            updatePagination();
            // In a real application, you would load page content here
            console.log(`Loading page ${currentPage}`);
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
// Testimonial Carousel
const slides = document.querySelectorAll('.testimonial-slide');
const indicators = document.querySelectorAll('.testimonial-indicators button');
const prevBtn = document.getElementById('testimonialPrev');
const nextBtn = document.getElementById('testimonialNext');
let currentSlide = 0;

function showSlide(index) {
// Hide all slides
slides.forEach(slide => {
    slide.classList.remove('active');
});

// Remove active class from all indicators
indicators.forEach(indicator => {
    indicator.classList.remove('active');
    indicator.setAttribute('aria-current', 'false');
});

// Show the current slide and set active indicator
slides[index].classList.add('active');
indicators[index].classList.add('active');
indicators[index].setAttribute('aria-current', 'true');

currentSlide = index;
}

// Next slide
function nextSlide() {
const newIndex = (currentSlide + 1) % slides.length;
showSlide(newIndex);
}

// Previous slide
function prevSlide() {
const newIndex = (currentSlide - 1 + slides.length) % slides.length;
showSlide(newIndex);
}

// Add event listeners for controls
if (prevBtn) prevBtn.addEventListener('click', prevSlide);
if (nextBtn) nextBtn.addEventListener('click', nextSlide);

// Add event listeners for indicators
indicators.forEach((indicator, index) => {
indicator.addEventListener('click', () => {
    showSlide(index);
});
});

// Auto play (optional)
let slideInterval = setInterval(nextSlide, 6000);

// Pause on hover
const testimonialCarousel = document.querySelector('.testimonials-carousel');
testimonialCarousel.addEventListener('mouseenter', () => {
clearInterval(slideInterval);
});

testimonialCarousel.addEventListener('mouseleave', () => {
slideInterval = setInterval(nextSlide, 6000);
});

// Play button functionality (in a real implementation this would play a video)
const playButtons = document.querySelectorAll('.play-button');
playButtons.forEach(button => {
button.addEventListener('click', function() {
    alert('Video would play here in a real implementation');
});
});
});






document.addEventListener('DOMContentLoaded', function() {
// Testimonial Carousel
const slides = document.querySelectorAll('.testimonial-slide');
const indicators = document.querySelectorAll('.testimonial-indicators button');
const prevBtn = document.getElementById('testimonialPrev');
const nextBtn = document.getElementById('testimonialNext');
let currentSlide = 0;

function showSlide(index) {
// Hide all slides
slides.forEach(slide => {
slide.classList.remove('active');
});

// Remove active class from all indicators
indicators.forEach(indicator => {
indicator.classList.remove('active');
indicator.setAttribute('aria-current', 'false');
});

// Show the current slide and set active indicator
slides[index].classList.add('active');
indicators[index].classList.add('active');
indicators[index].setAttribute('aria-current', 'true');

// Pause all videos when changing slides
const videos = document.querySelectorAll('video');
videos.forEach(video => {
video.pause();
// Reset play overlay
const videoContainer = video.closest('.testimonial-video');
if (videoContainer) {
    videoContainer.classList.remove('playing');
}
});

currentSlide = index;
}

// Next slide
function nextSlide() {
const newIndex = (currentSlide + 1) % slides.length;
showSlide(newIndex);
}

// Previous slide
function prevSlide() {
const newIndex = (currentSlide - 1 + slides.length) % slides.length;
showSlide(newIndex);
}

// Add event listeners for controls
if (prevBtn) prevBtn.addEventListener('click', prevSlide);
if (nextBtn) nextBtn.addEventListener('click', nextSlide);

// Add event listeners for indicators
indicators.forEach((indicator, index) => {
indicator.addEventListener('click', () => {
showSlide(index);
});
});

// Auto play (optional) - commented out but can be enabled if needed
// let slideInterval = setInterval(nextSlide, 6000);

// Pause on hover (for auto play if enabled)
const testimonialCarousel = document.querySelector('.testimonials-carousel');
if (testimonialCarousel) {
testimonialCarousel.addEventListener('mouseenter', () => {
// clearInterval(slideInterval);
});

testimonialCarousel.addEventListener('mouseleave', () => {
// slideInterval = setInterval(nextSlide, 6000);
});
}

// Custom video play functionality
const playButtons = document.querySelectorAll('.video-play-btn');
playButtons.forEach(button => {
button.addEventListener('click', function() {
const videoContainer = this.closest('.testimonial-video');
const video = videoContainer.querySelector('video');

if (video) {
    videoContainer.classList.add('playing');
    video.play();
    
    // Pause all other videos
    const allVideos = document.querySelectorAll('video');
    allVideos.forEach(otherVideo => {
        if (otherVideo !== video && !otherVideo.paused) {
            otherVideo.pause();
            const otherContainer = otherVideo.closest('.testimonial-video');
            if (otherContainer) {
                otherContainer.classList.remove('playing');
            }
        }
    });
}
});
});

// When a video ends
const allVideos = document.querySelectorAll('video');
allVideos.forEach(video => {
video.addEventListener('ended', function() {
const videoContainer = this.closest('.testimonial-video');
if (videoContainer) {
    videoContainer.classList.remove('playing');
}
});

// When video is paused
video.addEventListener('pause', function() {
const videoContainer = this.closest('.testimonial-video');
if (videoContainer) {
    videoContainer.classList.remove('playing');
}
});

// When video is playing
video.addEventListener('play', function() {
const videoContainer = this.closest('.testimonial-video');
if (videoContainer) {
    videoContainer.classList.add('playing');
}

// Pause all other videos
allVideos.forEach(otherVideo => {
    if (otherVideo !== video && !otherVideo.paused) {
        otherVideo.pause();
        const otherContainer = otherVideo.closest('.testimonial-video');
        if (otherContainer) {
            otherContainer.classList.remove('playing');
        }
    }
});
});
});
});

   // Add JavaScript for filtering functionality
            document.addEventListener('DOMContentLoaded', function () {
                // Program level dropdown functionality
                const programItems = document.querySelectorAll('#programLevelDropdown + .dropdown-menu .dropdown-item');
                programItems.forEach(item => {
                    item.addEventListener('click', function () {
                        document.getElementById('programLevelDropdown').textContent = this.textContent;
                    });
                });

                // Subject dropdown functionality
                const subjectItems = document.querySelectorAll('#subjectDropdown + .dropdown-menu .dropdown-item');
                subjectItems.forEach(item => {
                    item.addEventListener('click', function () {
                        document.getElementById('subjectDropdown').textContent = this.textContent;
                    });
                });

                // Pagination functionality
                const pages = document.querySelectorAll('.pagination .page-link[data-page]');
                const prevBtn = document.getElementById('prevPageBtn');
                const nextBtn = document.getElementById('nextPageBtn');
                let currentPage = 1;
                const totalPages = pages.length;

                // Function to update pagination state
                function updatePagination() {
                    // Update active page indicator
                    pages.forEach(page => {
                        const pageNum = parseInt(page.getAttribute('data-page'));
                        if (pageNum === currentPage) {
                            page.parentElement.classList.add('active');
                        } else {
                            page.parentElement.classList.remove('active');
                        }
                    });

                    // Update prev/next button states
                    if (currentPage === 1) {
                        prevBtn.classList.add('disabled');
                    } else {
                        prevBtn.classList.remove('disabled');
                    }

                    if (currentPage === totalPages) {
                        nextBtn.classList.add('disabled');
                    } else {
                        nextBtn.classList.remove('disabled');
                    }

                    // In a real application, you would fetch new content here
                    // For demo purposes, we'll just scroll to top
                    window.scrollTo(0, document.getElementById('degreesList').offsetTop - 100);
                }

                // Add click handlers to page numbers
                pages.forEach(page => {
                    page.addEventListener('click', function (e) {
                        e.preventDefault();
                        currentPage = parseInt(this.getAttribute('data-page'));
                        updatePagination();
                        // In a real application, you would load page content here
                        console.log(`Loading page ${currentPage}`);
                    });
                });

                // Add click handler for prev button
                prevBtn.querySelector('a').addEventListener('click', function (e) {
                    e.preventDefault();
                    if (currentPage > 1) {
                        currentPage--;
                        updatePagination();
                        // In a real application, you would load page content here
                        console.log(`Loading page ${currentPage}`);
                    }
                });

                // Add click handler for next button
                nextBtn.querySelector('a').addEventListener('click', function (e) {
                    e.preventDefault();
                    if (currentPage < totalPages) {
                        currentPage++;
                        updatePagination();
                        // In a real application, you would load page content here
                        console.log(`Loading page ${currentPage}`);
                    }
                });
            });

            document.addEventListener('DOMContentLoaded', function() {
        // Testimonial Carousel
        const slides = document.querySelectorAll('.testimonial-slide');
        const indicators = document.querySelectorAll('.testimonial-indicators button');
        const prevBtn = document.getElementById('testimonialPrev');
        const nextBtn = document.getElementById('testimonialNext');
        let currentSlide = 0;
        
        function showSlide(index) {
            // Hide all slides
            slides.forEach(slide => {
                slide.classList.remove('active');
            });
            
            // Remove active class from all indicators
            indicators.forEach(indicator => {
                indicator.classList.remove('active');
                indicator.setAttribute('aria-current', 'false');
            });
            
            // Show the current slide and set active indicator
            slides[index].classList.add('active');
            indicators[index].classList.add('active');
            indicators[index].setAttribute('aria-current', 'true');
            
            currentSlide = index;
        }
        
        // Next slide
        function nextSlide() {
            const newIndex = (currentSlide + 1) % slides.length;
            showSlide(newIndex);
        }
        
        // Previous slide
        function prevSlide() {
            const newIndex = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(newIndex);
        }
        
        // Add event listeners for controls
        if (prevBtn) prevBtn.addEventListener('click', prevSlide);
        if (nextBtn) nextBtn.addEventListener('click', nextSlide);
        
        // Add event listeners for indicators
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                showSlide(index);
            });
        });
        
        // Auto play (optional)
        let slideInterval = setInterval(nextSlide, 6000);
        
        // Pause on hover
        const testimonialCarousel = document.querySelector('.testimonials-carousel');
        testimonialCarousel.addEventListener('mouseenter', () => {
            clearInterval(slideInterval);
        });
        
        testimonialCarousel.addEventListener('mouseleave', () => {
            slideInterval = setInterval(nextSlide, 6000);
        });
        
        // Play button functionality (in a real implementation this would play a video)
        const playButtons = document.querySelectorAll('.play-button');
        playButtons.forEach(button => {
            button.addEventListener('click', function() {
                alert('Video would play here in a real implementation');
            });
        });
    });

      document.addEventListener('DOMContentLoaded', function() {
    // Testimonial Carousel
    const slides = document.querySelectorAll('.testimonial-slide');
    const indicators = document.querySelectorAll('.testimonial-indicators button');
    const prevBtn = document.getElementById('testimonialPrev');
    const nextBtn = document.getElementById('testimonialNext');
    let currentSlide = 0;
    
    function showSlide(index) {
        // Hide all slides
        slides.forEach(slide => {
            slide.classList.remove('active');
        });
        
        // Remove active class from all indicators
        indicators.forEach(indicator => {
            indicator.classList.remove('active');
            indicator.setAttribute('aria-current', 'false');
        });
        
        // Show the current slide and set active indicator
        slides[index].classList.add('active');
        indicators[index].classList.add('active');
        indicators[index].setAttribute('aria-current', 'true');
        
        // Pause all videos when changing slides
        const videos = document.querySelectorAll('video');
        videos.forEach(video => {
            video.pause();
            // Reset play overlay
            const videoContainer = video.closest('.testimonial-video');
            if (videoContainer) {
                videoContainer.classList.remove('playing');
            }
        });
        
        currentSlide = index;
    }
    
    // Next slide
    function nextSlide() {
        const newIndex = (currentSlide + 1) % slides.length;
        showSlide(newIndex);
    }
    
    // Previous slide
    function prevSlide() {
        const newIndex = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(newIndex);
    }
    
    // Add event listeners for controls
    if (prevBtn) prevBtn.addEventListener('click', prevSlide);
    if (nextBtn) nextBtn.addEventListener('click', nextSlide);
    
    // Add event listeners for indicators
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            showSlide(index);
        });
    });
    
    // Auto play (optional) - commented out but can be enabled if needed
    // let slideInterval = setInterval(nextSlide, 6000);
    
    // Pause on hover (for auto play if enabled)
    const testimonialCarousel = document.querySelector('.testimonials-carousel');
    if (testimonialCarousel) {
        testimonialCarousel.addEventListener('mouseenter', () => {
            // clearInterval(slideInterval);
        });
        
        testimonialCarousel.addEventListener('mouseleave', () => {
            // slideInterval = setInterval(nextSlide, 6000);
        });
    }
    
    // Custom video play functionality
    const playButtons = document.querySelectorAll('.video-play-btn');
    playButtons.forEach(button => {
        button.addEventListener('click', function() {
            const videoContainer = this.closest('.testimonial-video');
            const video = videoContainer.querySelector('video');
            
            if (video) {
                videoContainer.classList.add('playing');
                video.play();
                
                // Pause all other videos
                const allVideos = document.querySelectorAll('video');
                allVideos.forEach(otherVideo => {
                    if (otherVideo !== video && !otherVideo.paused) {
                        otherVideo.pause();
                        const otherContainer = otherVideo.closest('.testimonial-video');
                        if (otherContainer) {
                            otherContainer.classList.remove('playing');
                        }
                    }
                });
            }
        });
    });
    
    // When a video ends
    const allVideos = document.querySelectorAll('video');
    allVideos.forEach(video => {
        video.addEventListener('ended', function() {
            const videoContainer = this.closest('.testimonial-video');
            if (videoContainer) {
                videoContainer.classList.remove('playing');
            }
        });
        
        // When video is paused
        video.addEventListener('pause', function() {
            const videoContainer = this.closest('.testimonial-video');
            if (videoContainer) {
                videoContainer.classList.remove('playing');
            }
        });
        
        // When video is playing
        video.addEventListener('play', function() {
            const videoContainer = this.closest('.testimonial-video');
            if (videoContainer) {
                videoContainer.classList.add('playing');
            }
            
            // Pause all other videos
            allVideos.forEach(otherVideo => {
                if (otherVideo !== video && !otherVideo.paused) {
                    otherVideo.pause();
                    const otherContainer = otherVideo.closest('.testimonial-video');
                    if (otherContainer) {
                        otherContainer.classList.remove('playing');
                    }
                }
            });
        });
    });
});


    document.getElementById('applySubjectFilter').addEventListener('click', function () {
        const checked = document.querySelectorAll('input[name="subject"]:checked');
        let query = [];

        checked.forEach(cb => {
            if (cb.value !== 'semua') {
                query.push('subjects[]=' + cb.value);
            }
        });

        window.location.href = `/module?${query.join('&')}`;
    });
