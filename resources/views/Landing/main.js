// Main JavaScript functionality for Lumova landing page

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all components
    initTypewriter();
    initScrollAnimations();
    initTestimonialSlider();
    initSmoothScrolling();
    initNavigation();
});

// Typewriter effect for hero headline
function initTypewriter() {
    const typed = new Typed('#typed-text', {
        strings: [
            'Connecting Creative Minds in Central Asia',
            'Building Bridges Between Creators',
            'Fostering Innovation Across Borders'
        ],
        typeSpeed: 60,
        backSpeed: 30,
        backDelay: 2000,
        startDelay: 500,
        loop: true,
        showCursor: true,
        cursorChar: '|',
        autoInsertCss: true
    });
}

// Scroll animations with intersection observer
function initScrollAnimations() {
    const observerOptions = {
        threshold: 0.3,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);

    // Observe all fade-in elements
    document.querySelectorAll('.fade-in').forEach(el => {
        observer.observe(el);
    });
}

// Testimonial slider initialization
function initTestimonialSlider() {
    const splide = new Splide('#testimonial-slider', {
        type: 'loop',
        autoplay: true,
        interval: 5000,
        pauseOnHover: true,
        arrows: false,
        pagination: true,
        gap: '2rem',
        breakpoints: {
            768: {
                gap: '1rem'
            }
        }
    });

    splide.mount();
}

// Smooth scrolling for navigation links
function initSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const offsetTop = target.offsetTop - 80; // Account for fixed nav
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// Navigation functionality
function initNavigation() {
    const nav = document.querySelector('nav');
    let lastScrollY = window.scrollY;

    // Add blur effect on scroll
    window.addEventListener('scroll', () => {
        const currentScrollY = window.scrollY;
        
        if (currentScrollY > 100) {
            nav.classList.add('nav-blur');
        } else {
            nav.classList.remove('nav-blur');
        }

        lastScrollY = currentScrollY;
    });

    // Mobile menu toggle (if needed)
    const mobileMenuButton = document.querySelector('.md\\:hidden button');
    if (mobileMenuButton) {
        mobileMenuButton.addEventListener('click', function() {
            // Mobile menu functionality can be added here
            console.log('Mobile menu clicked');
        });
    }
}

// Button click handlers
document.addEventListener('click', function(e) {
    // Handle CTA buttons
    if (e.target.textContent.includes('Get Started') || 
        e.target.textContent.includes('Sign Up') || 
        e.target.textContent.includes('Sign Up Free')) {
        e.preventDefault();
        
        // Add click animation
        anime({
            targets: e.target,
            scale: [1, 0.95, 1],
            duration: 200,
            easing: 'easeInOutQuad'
        });

        // Redirect to signup page after animation
        setTimeout(() => {
            window.location.href = 'signup.html';
        }, 200);
    }

    // Handle Learn More button
    if (e.target.textContent.includes('Learn More')) {
        e.preventDefault();
        
        // Add click animation
        anime({
            targets: e.target,
            scale: [1, 0.95, 1],
            duration: 200,
            easing: 'easeInOutQuad'
        });

        // Scroll to about section
        setTimeout(() => {
            const aboutSection = document.querySelector('#about');
            if (aboutSection) {
                aboutSection.scrollIntoView({ behavior: 'smooth' });
            }
        }, 200);
    }

    // Handle Discover Our Story button
    if (e.target.textContent.includes('Discover Our Story')) {
        e.preventDefault();
        
        // Add click animation
        anime({
            targets: e.target,
            scale: [1, 0.95, 1],
            duration: 200,
            easing: 'easeInOutQuad'
        });

        // Redirect to about page
        setTimeout(() => {
            window.location.href = 'about.html';
        }, 200);
    }
});

// Add loading animation for page entrance
window.addEventListener('load', function() {
    // Animate hero elements on load
    anime.timeline({
        easing: 'easeOutExpo',
        duration: 1000
    })
    .add({
        targets: '.hero-content h1',
        opacity: [0, 1],
        translateY: [50, 0],
        delay: 300
    })
    .add({
        targets: '.hero-content p',
        opacity: [0, 1],
        translateY: [30, 0],
        delay: 200
    }, '-=800')
    .add({
        targets: '.hero-content .flex',
        opacity: [0, 1],
        translateY: [20, 0],
        delay: 100
    }, '-=600');
});

// Utility function for creating notifications (if needed)
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `fixed top-20 right-4 p-4 rounded-lg text-white z-50 ${
        type === 'success' ? 'bg-green-600' : 
        type === 'error' ? 'bg-red-600' : 
        'bg-blue-600'
    }`;
    notification.textContent = message;
    
    document.body.appendChild(notification);
    
    // Animate in
    anime({
        targets: notification,
        translateX: [300, 0],
        opacity: [0, 1],
        duration: 300,
        easing: 'easeOutQuad'
    });
    
    // Remove after 3 seconds
    setTimeout(() => {
        anime({
            targets: notification,
            translateX: [0, 300],
            opacity: [1, 0],
            duration: 300,
            easing: 'easeInQuad',
            complete: () => {
                document.body.removeChild(notification);
            }
        });
    }, 3000);
}