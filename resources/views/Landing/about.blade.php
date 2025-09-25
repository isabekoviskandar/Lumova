<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Lumova - Connecting Creative Minds in Central Asia</title>
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
                        <a href="about.html" class="text-white">About</a>
                        <a href="features.html" class="text-gray-light hover:text-white transition-colors">Features</a>
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
                About <span class="accent-blue">Lumova</span>
            </h1>
            <p class="text-xl text-gray-light max-w-3xl mx-auto fade-in">
                We're building the future of creative collaboration across Central Asia, connecting talent, fostering innovation, and driving regional growth.
            </p>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-20 bg-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="fade-in">
                    <h2 class="text-4xl font-bold mb-6">Our Mission</h2>
                    <p class="text-lg text-gray-light mb-6 leading-relaxed">
                        Lumova was born from a simple observation: Central Asia's creative ecosystem is rich with talent, but fragmented by geography and limited networking opportunities. We bridge these gaps by creating a digital platform where creators, developers, and entrepreneurs can discover each other and collaborate seamlessly.
                    </p>
                    <p class="text-lg text-gray-light mb-6 leading-relaxed">
                        Our platform serves the entire Central Asian region, from the tech hubs of Almaty and Astana to the creative communities of Tashkent and Bishkek. We're not just connecting people – we're building the infrastructure for a thriving regional creative economy.
                    </p>
                </div>
                <div class="fade-in">
                    <div class="bg-gray-dark p-8 rounded-lg">
                        <h3 class="text-2xl font-bold mb-4 accent-blue">Our Vision</h3>
                        <p class="text-gray-light mb-4">
                            To become the premier platform for creative collaboration in Central Asia, fostering innovation that respects traditional craftsmanship while embracing cutting-edge technology.
                        </p>
                        <p class="text-gray-light">
                            We envision a connected ecosystem where a designer in Astana can seamlessly collaborate with a developer in Tashkent, and an entrepreneur in Bishkek can find their perfect co-founder in Almaty.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-20 bg-gray-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-4xl font-bold mb-6">Our Values</h2>
                <p class="text-xl text-gray-light max-w-3xl mx-auto">
                    The principles that guide everything we do at Lumova
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center fade-in">
                    <div class="w-16 h-16 bg-accent-blue rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl">🤝</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Collaboration First</h3>
                    <p class="text-gray-light">
                        We believe that the best innovations come from diverse minds working together. Our platform is designed to facilitate meaningful connections and productive partnerships.
                    </p>
                </div>
                
                <div class="text-center fade-in">
                    <div class="w-16 h-16 bg-accent-blue rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl">🌟</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Cultural Authenticity</h3>
                    <p class="text-gray-light">
                        We celebrate the rich cultural heritage of Central Asia while embracing modern innovation. Our platform respects and promotes regional diversity.
                    </p>
                </div>
                
                <div class="text-center fade-in">
                    <div class="w-16 h-16 bg-accent-blue rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl">🚀</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Innovation Driven</h3>
                    <p class="text-gray-light">
                        We're constantly evolving our platform to meet the changing needs of the creative community, leveraging technology to enhance collaboration.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 bg-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-4xl font-bold mb-6">Meet the Team</h2>
                <p class="text-xl text-gray-light max-w-3xl mx-auto">
                    The passionate individuals building Lumova's future
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center fade-in">
                    <div class="w-32 h-32 bg-gray-dark rounded-full mx-auto mb-6 flex items-center justify-center">
                        <span class="text-4xl">👨‍💼</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Almas Zhanabayev</h3>
                    <p class="accent-blue mb-4">Founder & CEO</p>
                    <p class="text-gray-light">
                        Former product manager at Kazakhstan's leading tech companies, passionate about connecting Central Asian talent.
                    </p>
                </div>
                
                <div class="text-center fade-in">
                    <div class="w-32 h-32 bg-gray-dark rounded-full mx-auto mb-6 flex items-center justify-center">
                        <span class="text-4xl">👩‍💻</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Aigerim Tursynbayeva</h3>
                    <p class="accent-blue mb-4">CTO</p>
                    <p class="text-gray-light">
                        Full-stack developer with experience building scalable platforms for the Central Asian market.
                    </p>
                </div>
                
                <div class="text-center fade-in">
                    <div class="w-32 h-32 bg-gray-dark rounded-full mx-auto mb-6 flex items-center justify-center">
                        <span class="text-4xl">🎨</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Diana Kassymbekova</h3>
                    <p class="accent-blue mb-4">Head of Design</p>
                    <p class="text-gray-light">
                        UX/UI designer specializing in cross-cultural design and accessibility for diverse user bases.
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
                    Ready to Connect?
                </h2>
                <p class="text-xl text-white mb-12 max-w-2xl mx-auto opacity-90">
                    Join thousands of creators, developers, and entrepreneurs who are already collaborating on Lumova.
                </p>
                <a href="signup.html" class="bg-white text-accent-blue px-12 py-4 rounded-lg text-xl font-semibold hover:bg-gray-100 transition-colors">
                    Get Started Today
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
                    <a href="about.html" class="text-white">About</a>
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