// Variables to track scroll position
let lastScrollTop = 0;
const navbar = document.querySelector('.navbar');
const scrollThreshold = 100; // Adjust this value as needed

// Function to handle scroll
window.addEventListener('scroll', function () {
  let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

  // Add sticky class when scrolled past threshold
  if (currentScroll > scrollThreshold) {
    navbar.classList.add('sticky-top');

    // Check scroll direction
    if (currentScroll < lastScrollTop) {
      // Scrolling up - keep colored navbar
      navbar.classList.remove('fade-out');
    } else {
      // Scrolling down - after a certain point, return to original
      if (currentScroll > scrollThreshold + 200) { // Adjust this value as needed
        navbar.classList.add('fade-out');
      }
    }
  } else {
    // At the top of the page
    navbar.classList.remove('sticky-top');
    navbar.classList.remove('fade-out');
  }

  lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // For Mobile or negative scrolling
}, false);