<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Lumova</title>
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
        
        .nav-blur {
            backdrop-filter: blur(10px);
            background-color: rgba(0, 0, 0, 0.8);
        }
        
        .form-input {
            background-color: #1A1A1A;
            border: 2px solid #333333;
            color: #FFFFFF;
            transition: all 0.3s ease;
        }
        
        .form-input:focus {
            border-color: #4A90E2;
            outline: none;
            box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.1);
        }
        
        .form-input::placeholder {
            color: #666666;
        }
        
        .btn-primary {
            background-color: #4A90E2;
            color: white;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: #3A7BC8;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(74, 144, 226, 0.3);
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
                        <a href="features.html" class="text-gray-light hover:text-white transition-colors">Features</a>
                        <a href="signup.html" class="text-white">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <section class="pt-24 pb-16 min-h-screen flex items-center">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Side - Content -->
                <div class="fade-in">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">
                        Join <span class="accent-blue">Lumova</span>
                    </h1>
                    <p class="text-xl text-gray-light mb-8">
                        Connect with Central Asia's creative community. Start collaborating on amazing projects today.
                    </p>
                    
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center">
                            <div class="w-6 h-6 bg-accent-blue rounded-full flex items-center justify-center mr-4">
                                <span class="text-white text-sm">✓</span>
                            </div>
                            <span class="text-gray-light">Connect with creators across Central Asia</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-6 h-6 bg-accent-blue rounded-full flex items-center justify-center mr-4">
                                <span class="text-white text-sm">✓</span>
                            </div>
                            <span class="text-gray-light">Find projects that match your skills</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-6 h-6 bg-accent-blue rounded-full flex items-center justify-center mr-4">
                                <span class="text-white text-sm">✓</span>
                            </div>
                            <span class="text-gray-light">Collaborate with like-minded professionals</span>
                        </div>
                    </div>
                </div>

                <!-- Right Side - Form -->
                <div class="bg-gray-dark p-8 rounded-lg fade-in">
                    <h2 class="text-2xl font-bold mb-6 text-center">Create Your Account</h2>
                    
                    <form id="signup-form" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium mb-2">First Name</label>
                                <input type="text" class="form-input w-full px-4 py-3 rounded-lg" placeholder="Enter your first name" required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-2">Last Name</label>
                                <input type="text" class="form-input w-full px-4 py-3 rounded-lg" placeholder="Enter your last name" required>
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium mb-2">Email Address</label>
                            <input type="email" class="form-input w-full px-4 py-3 rounded-lg" placeholder="Enter your email" required>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium mb-2">Password</label>
                            <input type="password" class="form-input w-full px-4 py-3 rounded-lg" placeholder="Create a password" required>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium mb-2">Primary Role</label>
                            <select class="form-input w-full px-4 py-3 rounded-lg" required>
                                <option value="">Select your role</option>
                                <option value="designer">Designer</option>
                                <option value="developer">Developer</option>
                                <option value="entrepreneur">Entrepreneur</option>
                                <option value="marketer">Marketer</option>
                                <option value="writer">Writer</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium mb-2">Location</label>
                            <select class="form-input w-full px-4 py-3 rounded-lg" required>
                                <option value="">Select your country</option>
                                <option value="kazakhstan">Kazakhstan</option>
                                <option value="uzbekistan">Uzbekistan</option>
                                <option value="kyrgyzstan">Kyrgyzstan</option>
                                <option value="tajikistan">Tajikistan</option>
                                <option value="turkmenistan">Turkmenistan</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="flex items-start">
                            <input type="checkbox" class="mt-1 mr-3" required>
                            <label class="text-sm text-gray-light">
                                I agree to the <a href="#" class="accent-blue hover:underline">Terms of Service</a> and <a href="#" class="accent-blue hover:underline">Privacy Policy</a>
                            </label>
                        </div>
                        
                        <button type="submit" class="btn-primary w-full py-4 rounded-lg text-lg font-semibold">
                            Create Account
                        </button>
                    </form>
                    
                    <div class="mt-6 text-center">
                        <p class="text-gray-light mb-4">Or sign up with</p>
                        <div class="flex space-x-4">
                            <button class="flex-1 bg-gray-dark hover:bg-gray-700 px-4 py-3 rounded-lg transition-colors">
                                Google
                            </button>
                            <button class="flex-1 bg-gray-dark hover:bg-gray-700 px-4 py-3 rounded-lg transition-colors">
                                LinkedIn
                            </button>
                        </div>
                    </div>
                    
                    <div class="mt-6 text-center">
                        <p class="text-gray-light">
                            Already have an account? 
                            <a href="#" class="accent-blue hover:underline">Sign in</a>
                        </p>
                    </div>
                </div>
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
        // Initialize fade-in animations
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

        // Form submission handler
        document.getElementById('signup-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Add loading animation
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'Creating Account...';
            submitBtn.disabled = true;
            
            // Simulate form submission
            setTimeout(() => {
                submitBtn.textContent = 'Account Created!';
                submitBtn.style.backgroundColor = '#10B981';
                
                setTimeout(() => {
                    alert('Welcome to Lumova! Your account has been created. Check your email for verification.');
                    this.reset();
                    submitBtn.textContent = originalText;
                    submitBtn.disabled = false;
                    submitBtn.style.backgroundColor = '#4A90E2';
                }, 1500);
            }, 2000);
        });
    </script>
</body>
</html>