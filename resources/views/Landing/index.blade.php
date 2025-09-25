<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lumova - Connecting Creative Minds in Central Asia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="https://unpkg.com/splitting@1.0.6/dist/splitting.js"></script>
    <link href="https://unpkg.com/splitting@1.0.6/dist/splitting.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        
        body {
            background-color: #000000;
            color: #FFFFFF;
            overflow-x: hidden;
        }
        
        .hero-bg {
            background: linear-gradient(135deg, #000000 0%, #1a1a2e 50%, #16213e 100%);
            position: relative;
        }
        
        .hero-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('./resources/hero-abstract.jpg');
            background-size: cover;
            background-position: center;
            opacity: 0.4;
            z-index: 0;
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
        }
        
        .accent-blue {
            color: #64B5F6;
        }
        
        .bg-accent-blue {
            background-color: #64B5F6;
        }
        
        .border-accent-blue {
            border-color: #64B5F6;
        }
        
        .text-gray-light {
            color: #B3B3B3;
        }
        
        .bg-gray-dark {
            background-color: #1A1A1A;
        }
        
        .border-gray-dark {
            border-color: #333333;
        }
        
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .hover-lift {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .hover-lift:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(100, 181, 246, 0.2);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #64B5F6 0%, #42A5F5 100%);
            color: white;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .btn-primary:hover::before {
            left: 100%;
        }
        
        .btn-primary:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(100, 181, 246, 0.4);
        }
        
        .btn-secondary {
            background: transparent;
            border: 2px solid #64B5F6;
            color: #64B5F6;
            transition: all 0.3s ease;
        }
        
        .btn-secondary:hover {
            background: #64B5F6;
            color: white;
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(100, 181, 246, 0.4);
        }
        
        .nav-blur {
            backdrop-filter: blur(10px);
            background-color: rgba(0, 0, 0, 0.8);
        }
        
        .splide__arrow {
            background: #64B5F6;
        }
        
        .splide__pagination__page.is-active {
            background: #64B5F6;
        }
        
        .icon-placeholder {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #64B5F6 0%, #42A5F5 100%);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            font-weight: bold;
            box-shadow: 0 8px 25px rgba(100, 181, 246, 0.3);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #64B5F6 0%, #42A5F5 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .feature-card {
            background: linear-gradient(135deg, #1a1a1a 0%, #2a2a2a 100%);
            border: 1px solid #333333;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .feature-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 25px 50px rgba(100, 181, 246, 0.25);
            border-color: #64B5F6;
        }
        
        .testimonial-card {
            background: linear-gradient(135deg, #1a1a1a 0%, #2a2a2a 100%);
            border: 1px solid #333333;
        }
        
        .floating-element {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite alternate;
        }
        
        @keyframes pulse-glow {
            from { box-shadow: 0 0 20px rgba(100, 181, 246, 0.3); }
            to { box-shadow: 0 0 40px rgba(100, 181, 246, 0.6); }
        }
        
        .section-divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, #64B5F6, transparent);
            margin: 4rem 0;
        }
        
        .loaded {
            overflow-y: auto;
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        /* Fix for iOS Safari */
        @supports (-webkit-touch-callout: none) {
            .hero-bg {
                background-attachment: scroll;
            }
        }
        
        .playfair {
            font-family: 'Playfair Display', serif;
        }
        
        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: #64B5F6;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .stats-counter {
            font-size: 3rem;
            font-weight: 800;
            color: #64B5F6;
        }
        
        .parallax-bg {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
<base href="https://sa63d5v4kkl2y.ok.kimi.link">
</head>
<body>
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 nav-blur">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0">
                    <h1 class="text-3xl font-bold gradient-text playfair">Lumova</h1>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="#home" class="nav-link text-gray-light hover:text-white">Home</a>
                        <a href="#about" class="nav-link text-gray-light hover:text-white">About</a>
                        <a href="#features" class="nav-link text-gray-light hover:text-white">Features</a>
                        <a href="#community" class="nav-link text-gray-light hover:text-white">Community</a>
                        <button onclick="showSignupModal()" class="btn-primary px-6 py-2 rounded-lg text-sm font-medium pulse-glow">
                            Join Now
                        </button>
                    </div>
                </div>
                <div class="md:hidden">
                    <button class="text-gray-light hover:text-white">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-bg min-h-screen flex items-center justify-center pt-16">
        <div class="hero-content max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="floating-element">
                <h1 class="text-6xl md:text-8xl font-bold mb-8 playfair">
                    <span id="typed-text"></span>
                </h1>
            </div>
            <p class="text-2xl md:text-3xl text-gray-light mb-12 max-w-4xl mx-auto leading-relaxed">
                Lumova helps creators, developers, and entrepreneurs find co-founders, projects, and opportunities across Central Asia's vibrant creative ecosystem.
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <button onclick="showSignupModal()" class="btn-primary px-10 py-5 rounded-xl text-xl font-semibold hover-lift">
                    Start Creating
                </button>
                <button onclick="scrollToSection('about')" class="btn-secondary px-10 py-5 rounded-xl text-xl font-semibold hover-lift">
                    Discover More
                </button>
            </div>
            
            <!-- Stats -->
            <div class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="fade-in">
                    <div class="stats-counter" data-count="2500">0</div>
                    <p class="text-gray-light text-lg">Active Creators</p>
                </div>
                <div class="fade-in">
                    <div class="stats-counter" data-count="850">0</div>
                    <p class="text-gray-light text-lg">Projects Completed</p>
                </div>
                <div class="fade-in">
                    <div class="stats-counter" data-count="15">0</div>
                    <p class="text-gray-light text-lg">Countries Connected</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-32 bg-gray-dark parallax-bg" style="background-image: linear-gradient(rgba(26, 26, 26, 0.9), rgba(26, 26, 26, 0.9)), url('./resources/collaboration.jpg');">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="fade-in">
                    <h2 class="text-5xl md:text-6xl font-bold mb-8 playfair">
                        Born in Central Asia,<br>
                        <span class="gradient-text">Built for Collaboration</span>
                    </h2>
                    <p class="text-xl text-gray-light mb-8 leading-relaxed">
                        Lumova emerged from the vibrant creative ecosystem of Central Asia, where traditional craftsmanship meets cutting-edge innovation. We recognized the need for a platform that connects the region's diverse creative talent.
                    </p>
                    <p class="text-xl text-gray-light mb-12 leading-relaxed">
                        Our mission is to bridge the gap between creators, developers, and entrepreneurs, fostering collaboration that drives both cultural preservation and technological advancement across Kazakhstan, Uzbekistan, Kyrgyzstan, and beyond.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <button onclick="showSignupModal()" class="btn-primary px-8 py-4 rounded-lg font-semibold hover-lift">
                            Join Our Community
                        </button>
                        <button onclick="scrollToSection('features')" class="btn-secondary px-8 py-4 rounded-lg font-semibold hover-lift">
                            Explore Features
                        </button>
                    </div>
                </div>
                <div class="fade-in">
                    <div class="bg-black bg-opacity-50 p-8 rounded-2xl backdrop-blur-sm">
                        <h3 class="text-3xl font-bold mb-6 gradient-text playfair">Our Impact</h3>
                        <div class="space-y-6">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-accent-blue rounded-lg flex items-center justify-center mr-4">
                                    <span class="text-xl">🚀</span>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold">500+ Startups Launched</h4>
                                    <p class="text-gray-light">Successful collaborations across the region</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-accent-blue rounded-lg flex items-center justify-center mr-4">
                                    <span class="text-xl">💰</span>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold">$2.5M+ Funding Raised</h4>
                                    <p class="text-gray-light">Through our platform connections</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-accent-blue rounded-lg flex items-center justify-center mr-4">
                                    <span class="text-xl">🌟</span>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold">95% Satisfaction Rate</h4>
                                    <p class="text-gray-light">From our community members</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-32 bg-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20 fade-in">
                <h2 class="text-5xl md:text-6xl font-bold mb-8 playfair">How It Works</h2>
                <p class="text-2xl text-gray-light max-w-3xl mx-auto">
                    Three simple steps to connect with Central Asia's creative community
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="text-center fade-in hover-lift">
                    <div class="icon-placeholder mx-auto mb-8">1</div>
                    <h3 class="text-3xl font-bold mb-6">Create Profile</h3>
                    <p class="text-gray-light text-lg leading-relaxed">
                        Showcase your skills, experience, and creative vision to the community. Add your portfolio and set your collaboration preferences.
                    </p>
                </div>
                
                <div class="text-center fade-in hover-lift">
                    <div class="icon-placeholder mx-auto mb-8">2</div>
                    <h3 class="text-3xl font-bold mb-6">Discover Projects</h3>
                    <p class="text-gray-light text-lg leading-relaxed">
                        Explore opportunities that match your expertise. Our AI-powered matching system suggests the most relevant projects for you.
                    </p>
                </div>
                
                <div class="text-center fade-in hover-lift">
                    <div class="icon-placeholder mx-auto mb-8">3</div>
                    <h3 class="text-3xl font-bold mb-6">Start Collaborating</h3>
                    <p class="text-gray-light text-lg leading-relaxed">
                        Connect with like-minded creators and bring ideas to life. Use our built-in tools for seamless collaboration.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-32 bg-gray-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20 fade-in">
                <h2 class="text-5xl md:text-6xl font-bold mb-8 playfair">Powerful Features</h2>
                <p class="text-2xl text-gray-light max-w-3xl mx-auto">
                    Everything you need to connect, collaborate, and create in Central Asia
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="feature-card p-8 rounded-2xl fade-in">
                    <div class="icon-placeholder mb-8">⚡</div>
                    <h3 class="text-2xl font-bold mb-6">AI-Powered Matching</h3>
                    <p class="text-gray-light text-lg leading-relaxed">
                        Our advanced algorithm connects you with projects and people that complement your expertise perfectly.
                    </p>
                </div>
                
                <div class="feature-card p-8 rounded-2xl fade-in">
                    <div class="icon-placeholder mb-8">📋</div>
                    <h3 class="text-2xl font-bold mb-6">Smart Project Boards</h3>
                    <p class="text-gray-light text-lg leading-relaxed">
                        Browse and post projects with detailed requirements, budget tracking, and milestone management.
                    </p>
                </div>
                
                <div class="feature-card p-8 rounded-2xl fade-in">
                    <div class="icon-placeholder mb-8">🤝</div>
                    <h3 class="text-2xl font-bold mb-6">Real-time Collaboration</h3>
                    <p class="text-gray-light text-lg leading-relaxed">
                        Built-in messaging, file sharing, video calls, and project management tools for seamless teamwork.
                    </p>
                </div>
                
                <div class="feature-card p-8 rounded-2xl fade-in">
                    <div class="icon-placeholder mb-8">🌐</div>
                    <h3 class="text-2xl font-bold mb-6">Regional Network</h3>
                    <p class="text-gray-light text-lg leading-relaxed">
                        Connect with the vibrant creative ecosystem across Kazakhstan, Uzbekistan, Kyrgyzstan, and beyond.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Community Testimonials -->
    <section id="community" class="py-32 bg-black">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20 fade-in">
                <h2 class="text-5xl md:text-6xl font-bold mb-8 playfair">What Our Community Says</h2>
                <p class="text-2xl text-gray-light">
                    Hear from creators who've found success through Lumova
                </p>
            </div>
            
            <div class="splide" id="testimonial-slider">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="testimonial-card p-12 rounded-2xl text-center fade-in">
                                <img src="./resources/testimonial-1.jpg" alt="Aigerim" class="w-24 h-24 rounded-full mx-auto mb-8 object-cover border-4 border-accent-blue">
                                <blockquote class="text-2xl text-gray-light mb-8 italic leading-relaxed">
                                    "Lumova connected me with incredible developers from Almaty who helped bring my design vision to life. The collaboration was seamless and professional."
                                </blockquote>
                                <cite class="text-white font-bold text-xl">Aigerim T.</cite>
                                <p class="text-gray-light text-lg">UI/UX Designer, Astana</p>
                                <div class="flex justify-center mt-6">
                                    <div class="flex space-x-1">
                                        <span class="text-accent-blue text-xl">★★★★★</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="testimonial-card p-12 rounded-2xl text-center fade-in">
                                <img src="./resources/testimonial-2.jpg" alt="Bakyt" class="w-24 h-24 rounded-full mx-auto mb-8 object-cover border-4 border-accent-blue">
                                <blockquote class="text-2xl text-gray-light mb-8 italic leading-relaxed">
                                    "Found my co-founder through Lumova and we've already secured our first investment. The platform's matching algorithm is incredibly accurate."
                                </blockquote>
                                <cite class="text-white font-bold text-xl">Bakyt N.</cite>
                                <p class="text-gray-light text-lg">Tech Entrepreneur, Bishkek</p>
                                <div class="flex justify-center mt-6">
                                    <div class="flex space-x-1">
                                        <span class="text-accent-blue text-xl">★★★★★</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="testimonial-card p-12 rounded-2xl text-center fade-in">
                                <img src="./resources/testimonial-3.jpg" alt="Diana" class="w-24 h-24 rounded-full mx-auto mb-8 object-cover border-4 border-accent-blue">
                                <blockquote class="text-2xl text-gray-light mb-8 italic leading-relaxed">
                                    "The regional networking opportunities are unmatched. I've collaborated with creators from three different Central Asian countries through Lumova."
                                </blockquote>
                                <cite class="text-white font-bold text-xl">Diana K.</cite>
                                <p class="text-gray-light text-lg">Creative Director, Tashkent</p>
                                <div class="flex justify-center mt-6">
                                    <div class="flex space-x-1">
                                        <span class="text-accent-blue text-xl">★★★★★</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-32 bg-gradient-to-br from-gray-dark to-black">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="fade-in">
                <h2 class="text-6xl md:text-7xl font-bold mb-8 playfair gradient-text">
                    Ready to Create?
                </h2>
                <p class="text-2xl text-gray-light mb-16 max-w-4xl mx-auto leading-relaxed">
                    Join thousands of creators, developers, and entrepreneurs who are already collaborating on Lumova. Your next project partner is just a click away.
                </p>
                <div class="flex flex-col sm:flex-row gap-8 justify-center items-center">
                    <button onclick="showSignupModal()" class="btn-primary px-16 py-6 rounded-2xl text-2xl font-bold hover-lift pulse-glow">
                        Join Lumova Free
                    </button>
                    <button onclick="scrollToSection('features')" class="btn-secondary px-16 py-6 rounded-2xl text-2xl font-bold hover-lift">
                        Explore Features
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black py-20 border-t border-gray-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
                <div class="col-span-1 md:col-span-2">
                    <h3 class="text-4xl font-bold gradient-text playfair mb-4">Lumova</h3>
                    <p class="text-gray-light text-lg mb-6">Connecting Creative Minds in Central Asia</p>
                    <p class="text-gray-light">Building bridges between creators, developers, and entrepreneurs across the region.</p>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-6">Platform</h4>
                    <div class="space-y-3">
                        <a href="#features" class="block text-gray-light hover:text-white transition-colors">Features</a>
                        <a href="#about" class="block text-gray-light hover:text-white transition-colors">How It Works</a>
                        <a href="#community" class="block text-gray-light hover:text-white transition-colors">Community</a>
                        <a href="#" class="block text-gray-light hover:text-white transition-colors">Success Stories</a>
                    </div>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-6">Support</h4>
                    <div class="space-y-3">
                        <a href="#" class="block text-gray-light hover:text-white transition-colors">Help Center</a>
                        <a href="#" class="block text-gray-light hover:text-white transition-colors">Contact Us</a>
                        <a href="#" class="block text-gray-light hover:text-white transition-colors">Privacy Policy</a>
                        <a href="#" class="block text-gray-light hover:text-white transition-colors">Terms of Service</a>
                    </div>
                </div>
            </div>
            <div class="pt-12 border-t border-gray-dark text-center">
                <p class="text-gray-light text-lg">&copy; 2025 Lumova. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Signup Modal -->
    <div id="signup-modal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 hidden" style="overflow-y: auto;" onclick="if(event.target===this) hideSignupModal()">
        <div class="bg-gray-dark p-12 rounded-2xl max-w-md w-full mx-4 border border-gray-700">
            <h3 class="text-3xl font-bold mb-8 text-center gradient-text playfair">Join Lumova</h3>
            <form id="quick-signup-form" class="space-y-6">
                <div>
                    <input type="text" placeholder="Full Name" class="w-full px-4 py-3 bg-black border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:border-accent-blue focus:outline-none" required>
                </div>
                <div>
                    <input type="email" placeholder="Email Address" class="w-full px-4 py-3 bg-black border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:border-accent-blue focus:outline-none" required>
                </div>
                <div>
                    <select class="w-full px-4 py-3 bg-black border border-gray-600 rounded-lg text-white focus:border-accent-blue focus:outline-none" required>
                        <option value="">Select Your Role</option>
                        <option value="designer">Designer</option>
                        <option value="developer">Developer</option>
                        <option value="entrepreneur">Entrepreneur</option>
                        <option value="marketer">Marketer</option>
                        <option value="writer">Writer</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <button type="submit" class="btn-primary w-full py-4 rounded-lg text-lg font-semibold">
                    Join Now Free
                </button>
            </form>
            <button onclick="hideSignupModal()" class="absolute top-4 right-4 text-gray-400 hover:text-white text-2xl">
                ×
            </button>
        </div>
    </div>

    <script src="main.js"></script>
</body>
</html>