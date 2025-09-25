<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features - Lumova</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        
        body {
            background-color: #000000;
            color: #FFFFFF;
        }
        
        .accent-blue {
            color: #4A90E2;
        }
        
        .bg-accent-blue {
            background-color: #4A90E2;
        }
        
        .text-gray-light {
            color: #B3B3B3;
        }
        
        .bg-gray-dark {
            background-color: #1A1A1A;
        }
        
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease-out;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .nav-blur {
            backdrop-filter: blur(10px);
            background-color: rgba(0, 0, 0, 0.8);
        }
        
        .feature-card {
            transition: all 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(74, 144, 226, 0.1);
        }
    </style>
<base target="_blank">
</head>
<body>
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 nav-blur">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0">
                    <a href="index.html" class="text-2xl font-bold accent-blue">Lumova</a>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="index.html" class="text-gray-light hover:text-white transition-colors">Home</a>
                        <a href="about.html" class="text-gray-light hover:text-white transition-colors">About</a>
                        <a href="features.html" class="text-white">Features</a>
                        <a href="signup.html" class="bg-accent-blue px-4 py-2 rounded-lg text-sm font-medium hover:bg-blue-600 transition-colors">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-24 pb-16 bg-gray-dark">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 fade-in">
                Powerful <span class="accent-blue">Features</span>
            </h1>
            <p class="text-xl text-gray-light max-w-3xl mx-auto fade-in">
                Everything you need to connect, collaborate, and create in Central Asia's vibrant creative ecosystem.
            </p>
        </div>
    </section>

    <!-- Features Grid -->
    <section class="py-20 bg-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Skill-based Matching -->
                <div class="bg-gray-dark p-8 rounded-lg feature-card fade-in">
                    <div class="w-16 h-16 bg-accent-blue rounded-lg flex items-center justify-center mb-6">
                        <span class="text-2xl">⚡</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">AI-Powered Matching</h3>
                    <p class="text-gray-light mb-6">
                        Our advanced algorithm analyzes your skills, experience, and creative preferences to connect you with the most relevant projects and collaborators across Central Asia.
                    </p>
                    <ul class="space-y-2 text-gray-light">
                        <li class="flex items-center">
                            <span class="accent-blue mr-2">•</span>
                            Skill-based project recommendations
                        </li>
                        <li class="flex items-center">
                            <span class="accent-blue mr-2">•</span>
                            Compatibility scoring system
                        </li>
                        <li class="flex items-center">
                            <span class="accent-blue mr-2">•</span>
                            Real-time matching notifications
                        </li>
                    </ul>
                </div>

                <!-- Project Boards -->
                <div class="bg-gray-dark p-8 rounded-lg feature-card fade-in">
                    <div class="w-16 h-16 bg-accent-blue rounded-lg flex items-center justify-center mb-6">
                        <span class="text-2xl">📋</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Project Boards</h3>
                    <p class="text-gray-light mb-6">
                        Browse, filter, and discover projects that match your expertise. Post your own projects and attract the right talent from across the region.
                    </p>
                    <ul class="space-y-2 text-gray-light">
                        <li class="flex items-center">
                            <span class="accent-blue mr-2">•</span>
                            Advanced filtering options
                        </li>
                        <li class="flex items-center">
                            <span class="accent-blue mr-2">•</span>
                            Project milestone tracking
                        </li>
                        <li class="flex items-center">
                            <span class="accent-blue mr-2">•</span>
                            Budget and timeline management
                        </li>
                    </ul>
                </div>

                <!-- Collaboration Tools -->
                <div class="bg-gray-dark p-8 rounded-lg feature-card fade-in">
                    <div class="w-16 h-16 bg-accent-blue rounded-lg flex items-center justify-center mb-6">
                        <span class="text-2xl">🤝</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Collaboration Tools</h3>
                    <p class="text-gray-light mb-6">
                        Built-in communication and project management tools designed specifically for creative teams working across different time zones and languages.
                    </p>
                    <ul class="space-y-2 text-gray-light">
                        <li class="flex items-center">
                            <span class="accent-blue mr-2">•</span>
                            Real-time messaging
                        </li>
                        <li class="flex items-center">
                            <span class="accent-blue mr-2">•</span>
                            File sharing and version control
                        </li>
                        <li class="flex items-center">
                            <span class="accent-blue mr-2">•</span>
                            Video conferencing integration
                        </li>
                    </ul>
                </div>

                <!-- Regional Networking -->
                <div class="bg-gray-dark p-8 rounded-lg feature-card fade-in">
                    <div class="w-16 h-16 bg-accent-blue rounded-lg flex items-center justify-center mb-6">
                        <span class="text-2xl">🌐</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Regional Networking</h3>
                    <p class="text-gray-light mb-6">
                        Connect with the vibrant creative ecosystem across Kazakhstan, Uzbekistan, Kyrgyzstan, and beyond. Build relationships that transcend borders.
                    </p>
                    <ul class="space-y-2 text-gray-light">
                        <li class="flex items-center">
                            <span class="accent-blue mr-2">•</span>
                            Location-based networking
                        </li>
                        <li class="flex items-center">
                            <span class="accent-blue mr-2">•</span>
                            Cultural event integration
                        </li>
                        <li class="flex items-center">
                            <span class="accent-blue mr-2">•</span>
                            Language preference settings
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Features -->
    <section class="py-20 bg-gray-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-4xl font-bold mb-6">More Features</h2>
                <p class="text-xl text-gray-light max-w-3xl mx-auto">
                    Additional tools and capabilities to enhance your creative collaboration experience
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center fade-in">
                    <div class="w-16 h-16 bg-accent-blue rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl">💼</span>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Portfolio Showcase</h3>
                    <p class="text-gray-light">
                        Create stunning portfolios that highlight your best work and attract potential collaborators.
                    </p>
                </div>
                
                <div class="text-center fade-in">
                    <div class="w-16 h-16 bg-accent-blue rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl">🎯</span>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Skill Verification</h3>
                    <p class="text-gray-light">
                        Get your skills verified through our certification system to build trust with potential partners.
                    </p>
                </div>
                
                <div class="text-center fade-in">
                    <div class="w-16 h-16 bg-accent-blue rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl">📊</span>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Analytics Dashboard</h3>
                    <p class="text-gray-light">
                        Track your collaboration success with detailed analytics and performance insights.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-accent-blue">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="fade-in">
                <h2 class="text-4xl md:text-5xl font-bold mb-8 text-white">
                    Ready to Start Collaborating?
                </h2>
                <p class="text-xl text-white mb-12 max-w-2xl mx-auto opacity-90">
                    Join thousands of creators, developers, and entrepreneurs who are already using Lumova to build amazing things together.
                </p>
                <a href="signup.html" class="bg-white text-accent-blue px-12 py-4 rounded-lg text-xl font-semibold hover:bg-gray-100 transition-colors">
                    Get Started Now
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black py-12 border-t border-gray-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <h3 class="text-2xl font-bold accent-blue">Lumova</h3>
                    <p class="text-gray-light mt-2">Connecting Creative Minds in Central Asia</p>
                </div>
                <div class="flex space-x-8">
                    <a href="about.html" class="text-gray-light hover:text-white transition-colors">About</a>
                    <a href="#" class="text-gray-light hover:text-white transition-colors">Contact</a>
                    <a href="#" class="text-gray-light hover:text-white transition-colors">Privacy</a>
                    <a href="#" class="text-gray-light hover:text-white transition-colors">Terms</a>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-dark text-center">
                <p class="text-gray-light">&copy; 2025 Lumova. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Initialize scroll animations
        document.addEventListener('DOMContentLoaded', function() {
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

            document.querySelectorAll('.fade-in').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
</body>
</html>