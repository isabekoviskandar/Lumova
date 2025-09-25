<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lumova - Connecting Creative Minds in Central Asia</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Inter', system-ui, sans-serif;
            background-color: #0a0a0a;
            color: #e5e5e5;
            line-height: 1.6;
            overflow-x: hidden;
            position: relative;
        }

        /* Animated starfield background */
        .starfield {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: radial-gradient(circle at 20% 80%, rgba(120, 119, 198, 0.05) 0%, transparent 50%),
                        radial-gradient(circle at 80% 20%, rgba(255, 119, 198, 0.05) 0%, transparent 50%),
                        radial-gradient(circle at 40% 40%, rgba(120, 219, 255, 0.05) 0%, transparent 50%),
                        linear-gradient(135deg, #0a0a0a 0%, #111111 100%);
        }

        .star {
            position: absolute;
            background: #fff;
            border-radius: 50%;
            animation: twinkle 3s infinite alternate;
        }

        .star.small { width: 1px; height: 1px; opacity: 0.4; }
        .star.medium { width: 2px; height: 2px; opacity: 0.6; }
        .star.large { width: 3px; height: 3px; opacity: 0.8; }

        @keyframes twinkle {
            0% { opacity: 0.2; transform: scale(0.8); }
            100% { opacity: 1; transform: scale(1.1); }
        }

        /* Container and Layout */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section {
            padding: 5rem 0;
        }

        /* Navigation */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(10, 10, 10, 0.8);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: #fff;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            color: #a0a0a0;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: #fff;
        }

        .nav-cta {
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            color: #fff;
            padding: 0.5rem 1.5rem;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .nav-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(99, 102, 241, 0.3);
        }

        /* Hero Section - Cluely Style */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding-top: 6rem;
        }

        .hero-content {
            max-width: 900px;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            background: rgba(99, 102, 241, 0.1);
            border: 1px solid rgba(99, 102, 241, 0.2);
            color: #a5b4fc;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.875rem;
            font-weight: 500;
            margin-bottom: 2rem;
        }

        .hero h1 {
            font-size: 4rem;
            font-weight: 800;
            color: #fff;
            margin-bottom: 1.5rem;
            letter-spacing: -0.02em;
            line-height: 1.1;
        }

        .hero h1 .gradient-text {
            background: linear-gradient(135deg, #6366f1 0%, #a855f7 50%, #ec4899 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero p {
            font-size: 1.25rem;
            color: #a0a0a0;
            margin-bottom: 3rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.5;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 3rem;
        }

        .btn {
            padding: 0.875rem 2rem;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-primary {
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            color: #fff;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 20px 40px rgba(99, 102, 241, 0.4);
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.05);
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
        }

        .hero-stats {
            display: flex;
            justify-content: center;
            gap: 3rem;
            margin-top: 2rem;
        }

        .stat {
            text-align: center;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: #6366f1;
        }

        .stat-label {
            font-size: 0.875rem;
            color: #a0a0a0;
            margin-top: 0.25rem;
        }

        /* Features Section - Cluely Style */
        .features {
            background: linear-gradient(180deg, rgba(10, 10, 10, 0) 0%, rgba(15, 15, 15, 1) 100%);
        }

        .features-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .features h2 {
            font-size: 3rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .features p {
            font-size: 1.125rem;
            color: #a0a0a0;
            max-width: 600px;
            margin: 0 auto;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 2rem;
            border-radius: 16px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.1), rgba(139, 92, 246, 0.1));
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .feature-card:hover::before {
            opacity: 1;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            border-color: rgba(99, 102, 241, 0.3);
        }

        .feature-icon {
            width: 3rem;
            height: 3rem;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
        }

        .feature-card h3 {
            font-size: 1.25rem;
            font-weight: 600;
            color: #fff;
            margin-bottom: 0.75rem;
        }

        .feature-card p {
            color: #a0a0a0;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* How It Works */
        .how-it-works {
            background: #0f0f0f;
        }

        .steps-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .step {
            display: flex;
            gap: 2rem;
            padding: 2rem 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .step:last-child {
            border-bottom: none;
        }

        .step-number {
            flex-shrink: 0;
            width: 3rem;
            height: 3rem;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: 700;
            font-size: 1.125rem;
        }

        .step-content h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #fff;
            margin-bottom: 0.5rem;
        }

        .step-content p {
            color: #a0a0a0;
            font-size: 1rem;
        }

        /* Testimonials */
        .testimonials {
            background: linear-gradient(180deg, #0f0f0f 0%, #0a0a0a 100%);
            text-align: center;
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .testimonial {
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 2rem;
            border-radius: 16px;
        }

        .testimonial blockquote {
            font-size: 1.125rem;
            color: #e5e5e5;
            font-style: italic;
            margin-bottom: 1.5rem;
            line-height: 1.5;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }

        .author-avatar {
            width: 3rem;
            height: 3rem;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: 600;
        }

        .author-info h4 {
            color: #fff;
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .author-info p {
            color: #a0a0a0;
            font-size: 0.875rem;
        }

        /* CTA Section */
        .cta {
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.1), rgba(139, 92, 246, 0.1));
            border: 1px solid rgba(99, 102, 241, 0.2);
            border-radius: 24px;
            padding: 4rem 2rem;
            text-align: center;
            margin: 5rem auto;
            max-width: 800px;
        }

        .cta h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 1rem;
        }

        .cta p {
            font-size: 1.125rem;
            color: #a0a0a0;
            margin-bottom: 2rem;
        }

        /* Footer */
        footer {
            background: #0a0a0a;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding: 3rem 0 2rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-brand h3 {
            color: #fff;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .footer-brand p {
            color: #a0a0a0;
            font-size: 0.95rem;
        }

        .footer-links h4 {
            color: #fff;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 0.5rem;
        }

        .footer-links a {
            color: #a0a0a0;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #6366f1;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 2rem;
            text-align: center;
        }

        .footer-bottom p {
            color: #a0a0a0;
            font-size: 0.875rem;
        }

        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero-stats {
                flex-direction: column;
                gap: 1.5rem;
            }

            .features h2 {
                font-size: 2rem;
            }

            .step {
                flex-direction: column;
                text-align: center;
                gap: 1rem;
            }

            .nav-links {
                display: none;
            }

            .container {
                padding: 0 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Animated Background -->
    <div class="starfield" id="starfield"></div>

    <!-- Navigation -->
    <nav>
        <div class="nav-container">
            <a href="#" class="logo">Lumova</a>
            <ul class="nav-links">
                <li><a href="#features">Features</a></li>
                <li><a href="#how-it-works">How it Works</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#about">About</a></li>
            </ul>
            <a href="#" class="nav-cta">Get Started</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content fade-in">
                <div class="hero-badge">
                    🚀 Built for Central Asia • Join 1,000+ creators
                </div>
                <h1>
                    Connect. Create. <span class="gradient-text">Collaborate.</span>
                </h1>
                <p>
                    The platform where Central Asia's most ambitious creators, developers, and entrepreneurs find their perfect co-founders and bring game-changing ideas to life.
                </p>
                <div class="hero-buttons">
                    <a href="#" class="btn btn-primary">
                        Start Building Today →
                    </a>
                    <a href="#" class="btn btn-secondary">
                        Watch Demo
                    </a>
                </div>
                <div class="hero-stats">
                    <div class="stat">
                        <div class="stat-number">1,000+</div>
                        <div class="stat-label">Active Creators</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">500+</div>
                        <div class="stat-label">Projects Launched</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">50+</div>
                        <div class="stat-label">Successful Startups</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features section" id="features">
        <div class="container">
            <div class="features-header fade-in">
                <h2>Everything you need to build together</h2>
                <p>From idea to execution, Lumova provides the tools and connections to turn your vision into reality.</p>
            </div>
            <div class="features-grid">
                <div class="feature-card fade-in">
                    <div class="feature-icon">🎯</div>
                    <h3>Smart Matching</h3>
                    <p>Our AI-powered algorithm connects you with co-founders and collaborators who complement your skills and share your vision.</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon">📋</div>
                    <h3>Project Boards</h3>
                    <p>Organize ideas, track progress, and manage your team's workflow with intuitive project management tools.</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon">💬</div>
                    <h3>Real-time Collaboration</h3>
                    <p>Built-in messaging, file sharing, and video calls keep your team connected and productive.</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon">🌍</div>
                    <h3>Regional Focus</h3>
                    <p>Connect with talent across Central Asia and tap into the region's growing entrepreneurial ecosystem.</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon">📊</div>
                    <h3>Success Analytics</h3>
                    <p>Track your project's progress and measure success with detailed analytics and insights.</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon">🤝</div>
                    <h3>Mentor Network</h3>
                    <p>Get guidance from experienced entrepreneurs and industry experts in your field.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="how-it-works section" id="how-it-works">
        <div class="container">
            <div class="features-header fade-in">
                <h2>How it works</h2>
                <p>Get started in minutes and find your perfect collaborators today.</p>
            </div>
            <div class="steps-container">
                <div class="step fade-in">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Create your profile</h3>
                        <p>Tell us about your skills, interests, and the type of projects you want to work on. Our smart matching system will learn your preferences.</p>
                    </div>
                </div>
                <div class="step fade-in">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Discover matches</h3>
                        <p>Browse through curated matches of potential co-founders, collaborators, and projects that align with your goals and expertise.</p>
                    </div>
                </div>
                <div class="step fade-in">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Start collaborating</h3>
                        <p>Connect with your matches, join projects, and start building. Use our built-in tools to manage everything from idea to launch.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials section" id="testimonials">
        <div class="container">
            <div class="features-header fade-in">
                <h2>Loved by creators across Central Asia</h2>
                <p>See what our community has to say about building on Lumova.</p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial fade-in">
                    <blockquote>"Lumova helped me find the perfect technical co-founder for my fintech startup. We launched in 6 months and just raised our seed round."</blockquote>
                    <div class="testimonial-author">
                        <div class="author-avatar">AK</div>
                        <div class="author-info">
                            <h4>Aida Kasymova</h4>
                            <p>CEO, PayTengri • Almaty</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial fade-in">
                    <blockquote>"The regional focus is incredible. I connected with developers who actually understand the Central Asian market and our unique challenges."</blockquote>
                    <div class="testimonial-author">
                        <div class="author-avatar">DS</div>
                        <div class="author-info">
                            <h4>Dmitry Smirnov</h4>
                            <p>Founder, LocalCommerce • Tashkent</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial fade-in">
                    <blockquote>"Found my dream team on Lumova. We're building the next big social impact platform for Central Asia. The collaboration tools are amazing."</blockquote>
                    <div class="testimonial-author">
                        <div class="author-avatar">NM</div>
                        <div class="author-info">
                            <h4>Nargiza Muratova</h4>
                            <p>Co-founder, SocialBridge • Bishkek</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="section">
        <div class="container">
            <div class="cta fade-in">
                <h2>Ready to build something amazing?</h2>
                <p>Join thousands of creators, developers, and entrepreneurs who are already building the future of Central Asia.</p>
                <a href="#" class="btn btn-primary">Get Started Free →</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <h3>Lumova</h3>
                    <p>Connecting creative minds across Central Asia to build the next generation of innovative solutions.</p>
                </div>
                <div class="footer-links">
                    <h4>Product</h4>
                    <ul>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">API</a></li>
                        <li><a href="#">Integrations</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Community</a></li>
                        <li><a href="#">Guides</a></li>
                        <li><a href="#">Status</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Lumova. All rights reserved. Built with ❤️ in Central Asia.</p>
            </div>
        </div>
    </footer>

    <script>
        // Create starfield background
        function createStarfield() {
            const starfield = document.getElementById('starfield');
            const numberOfStars = 100;

            for (let i = 0; i < numberOfStars; i++) {
                const star = document.createElement('div');
                star.classList.add('star');
                
                const size = Math.random();
                if (size < 0.7) {
                    star.classList.add('small');
                } else if (size < 0.9) {
                    star.classList.add('medium');
                } else {
                    star.classList.add('large');
                }

                star.style.left = Math.random() * 100 + '%';
                star.style.top = Math.random() * 100 + '%';
                star.style.animationDelay = Math.random() * 3 + 's';

                starfield.appendChild(star);
            }
        }

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Initialize everything
        document.addEventListener('DOMContentLoaded', function() {
            createStarfield();
            
            // Observe all fade-in elements
            document.querySelectorAll('.fade-in').forEach(el => {
                observer.observe(el);
            });
        });

        // Hero section loads immediately
        window.addEventListener('load', () => {
            document.querySelector('.hero .fade-in').classList.add('visible');
        });

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>