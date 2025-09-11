<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - Aiman Al Mahmud</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'orbitron': ['Orbitron', 'sans-serif'],
                        'inter': ['Inter', 'sans-serif'],
                    },
                    animation: {
                        'fadeIn': 'fadeIn 1s ease-in-out',
                        'slideInLeft': 'slideInLeft 1s ease-out',
                        'slideInRight': 'slideInRight 1s ease-out',
                        'slideInUp': 'slideInUp 1s ease-out',
                        'bounce-slow': 'bounce 2s infinite',
                        'pulse-glow': 'pulse-glow 2s infinite',
                        'float': 'float 3s ease-in-out infinite',
                        'staggered-fade': 'staggered-fade 0.8s ease-out forwards',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' }
                        },
                        slideInLeft: {
                            '0%': { transform: 'translateX(-100px)', opacity: '0' },
                            '100%': { transform: 'translateX(0)', opacity: '1' }
                        },
                        slideInRight: {
                            '0%': { transform: 'translateX(100px)', opacity: '0' },
                            '100%': { transform: 'translateX(0)', opacity: '1' }
                        },
                        slideInUp: {
                            '0%': { transform: 'translateY(50px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' }
                        },
                        'pulse-glow': {
                            '0%, 100%': { boxShadow: '0 0 20px rgba(34, 211, 238, 0.4)' },
                            '50%': { boxShadow: '0 0 40px rgba(34, 211, 238, 0.8)' }
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-20px)' }
                        },
                        'staggered-fade': {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gradient-to-br from-gray-900 via-gray-800 to-black min-h-screen font-inter">
    <!-- Navbar -->
    @include('components.navbar')

    <!-- Projects Section -->
    <main class="pt-24 pb-16 px-6">
        <div class="container mx-auto">
            <!-- Header -->
            <div class="text-center mb-16 animate-slideInUp">
                <h1 class="text-5xl md:text-6xl font-orbitron font-bold text-white mb-4">
                    My <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-400">Projects</span>
                </h1>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    Explore my portfolio of innovative web applications and software solutions
                </p>
            </div>

            <!-- Projects Grid -->
            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8 mb-16">
                <!-- Project 1 -->
                <div class="project-card group bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl overflow-hidden hover:scale-105 transition-all duration-300 hover:bg-white/15 hover:border-cyan-400/50">
                    <div class="relative overflow-hidden">
                        <div class="w-full h-48 bg-gradient-to-br from-cyan-500 to-purple-500 flex items-center justify-center">
                            <div class="text-white text-4xl font-orbitron font-bold">E-Shop</div>
                        </div>
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="transform scale-0 group-hover:scale-100 transition-transform duration-300">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-orbitron font-bold text-white mb-3">E-Commerce Platform</h3>
                        <p class="text-gray-300 mb-4 text-sm leading-relaxed">
                            A full-featured e-commerce platform built with Laravel and React. Features include product management, shopping cart, payment integration, and admin dashboard.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-cyan-400/20 text-cyan-300 rounded-full text-xs">Laravel</span>
                            <span class="px-3 py-1 bg-purple-400/20 text-purple-300 rounded-full text-xs">React</span>
                            <span class="px-3 py-1 bg-emerald-400/20 text-emerald-300 rounded-full text-xs">MySQL</span>
                            <span class="px-3 py-1 bg-yellow-400/20 text-yellow-300 rounded-full text-xs">Stripe</span>
                        </div>
                        <div class="flex gap-3">
                            <a href="#" class="flex-1 bg-gradient-to-r from-cyan-400 to-purple-400 text-white px-4 py-2 rounded-lg text-sm font-semibold text-center hover:shadow-lg hover:shadow-cyan-400/25 transition-shadow duration-300">
                                Live Demo
                            </a>
                            <a href="#" class="flex-1 bg-white/10 border border-white/20 text-white px-4 py-2 rounded-lg text-sm font-semibold text-center hover:bg-white/20 transition-colors duration-300">
                                GitHub
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="project-card group bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl overflow-hidden hover:scale-105 transition-all duration-300 hover:bg-white/15 hover:border-purple-400/50">
                    <div class="relative overflow-hidden">
                        <div class="w-full h-48 bg-gradient-to-br from-purple-500 to-emerald-500 flex items-center justify-center">
                            <div class="text-white text-4xl font-orbitron font-bold">TaskFlow</div>
                        </div>
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="transform scale-0 group-hover:scale-100 transition-transform duration-300">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-orbitron font-bold text-white mb-3">Task Management App</h3>
                        <p class="text-gray-300 mb-4 text-sm leading-relaxed">
                            A comprehensive task management application with real-time collaboration, project tracking, time management, and team productivity analytics.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-purple-400/20 text-purple-300 rounded-full text-xs">Node.js</span>
                            <span class="px-3 py-1 bg-emerald-400/20 text-emerald-300 rounded-full text-xs">Vue.js</span>
                            <span class="px-3 py-1 bg-blue-400/20 text-blue-300 rounded-full text-xs">Socket.io</span>
                            <span class="px-3 py-1 bg-green-400/20 text-green-300 rounded-full text-xs">MongoDB</span>
                        </div>
                        <div class="flex gap-3">
                            <a href="#" class="flex-1 bg-gradient-to-r from-purple-400 to-emerald-400 text-white px-4 py-2 rounded-lg text-sm font-semibold text-center hover:shadow-lg hover:shadow-purple-400/25 transition-shadow duration-300">
                                Live Demo
                            </a>
                            <a href="#" class="flex-1 bg-white/10 border border-white/20 text-white px-4 py-2 rounded-lg text-sm font-semibold text-center hover:bg-white/20 transition-colors duration-300">
                                GitHub
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="project-card group bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl overflow-hidden hover:scale-105 transition-all duration-300 hover:bg-white/15 hover:border-emerald-400/50">
                    <div class="relative overflow-hidden">
                        <div class="w-full h-48 bg-gradient-to-br from-emerald-500 to-cyan-500 flex items-center justify-center">
                            <div class="text-white text-4xl font-orbitron font-bold">WeatherAI</div>
                        </div>
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="transform scale-0 group-hover:scale-100 transition-transform duration-300">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-orbitron font-bold text-white mb-3">AI Weather Predictor</h3>
                        <p class="text-gray-300 mb-4 text-sm leading-relaxed">
                            An intelligent weather prediction system using machine learning algorithms with real-time data visualization and location-based forecasting.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-emerald-400/20 text-emerald-300 rounded-full text-xs">Python</span>
                            <span class="px-3 py-1 bg-cyan-400/20 text-cyan-300 rounded-full text-xs">React</span>
                            <span class="px-3 py-1 bg-blue-400/20 text-blue-300 rounded-full text-xs">TensorFlow</span>
                            <span class="px-3 py-1 bg-orange-400/20 text-orange-300 rounded-full text-xs">AWS</span>
                        </div>
                        <div class="flex gap-3">
                            <a href="#" class="flex-1 bg-gradient-to-r from-emerald-400 to-cyan-400 text-white px-4 py-2 rounded-lg text-sm font-semibold text-center hover:shadow-lg hover:shadow-emerald-400/25 transition-shadow duration-300">
                                Live Demo
                            </a>
                            <a href="#" class="flex-1 bg-white/10 border border-white/20 text-white px-4 py-2 rounded-lg text-sm font-semibold text-center hover:bg-white/20 transition-colors duration-300">
                                GitHub
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="project-card group bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl overflow-hidden hover:scale-105 transition-all duration-300 hover:bg-white/15 hover:border-yellow-400/50">
                    <div class="relative overflow-hidden">
                        <div class="w-full h-48 bg-gradient-to-br from-yellow-500 to-orange-500 flex items-center justify-center">
                            <div class="text-white text-4xl font-orbitron font-bold">CryptoTrack</div>
                        </div>
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="transform scale-0 group-hover:scale-100 transition-transform duration-300">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-orbitron font-bold text-white mb-3">Crypto Portfolio Tracker</h3>
                        <p class="text-gray-300 mb-4 text-sm leading-relaxed">
                            Real-time cryptocurrency portfolio tracking with advanced analytics, price alerts, and market sentiment analysis using blockchain APIs.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-yellow-400/20 text-yellow-300 rounded-full text-xs">React</span>
                            <span class="px-3 py-1 bg-orange-400/20 text-orange-300 rounded-full text-xs">Node.js</span>
                            <span class="px-3 py-1 bg-red-400/20 text-red-300 rounded-full text-xs">Chart.js</span>
                            <span class="px-3 py-1 bg-purple-400/20 text-purple-300 rounded-full text-xs">WebSocket</span>
                        </div>
                        <div class="flex gap-3">
                            <a href="#" class="flex-1 bg-gradient-to-r from-yellow-400 to-orange-400 text-white px-4 py-2 rounded-lg text-sm font-semibold text-center hover:shadow-lg hover:shadow-yellow-400/25 transition-shadow duration-300">
                                Live Demo
                            </a>
                            <a href="#" class="flex-1 bg-white/10 border border-white/20 text-white px-4 py-2 rounded-lg text-sm font-semibold text-center hover:bg-white/20 transition-colors duration-300">
                                GitHub
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="project-card group bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl overflow-hidden hover:scale-105 transition-all duration-300 hover:bg-white/15 hover:border-pink-400/50">
                    <div class="relative overflow-hidden">
                        <div class="w-full h-48 bg-gradient-to-br from-pink-500 to-purple-500 flex items-center justify-center">
                            <div class="text-white text-4xl font-orbitron font-bold">SocialHub</div>
                        </div>
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="transform scale-0 group-hover:scale-100 transition-transform duration-300">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-orbitron font-bold text-white mb-3">Social Media Dashboard</h3>
                        <p class="text-gray-300 mb-4 text-sm leading-relaxed">
                            Unified social media management platform with post scheduling, analytics, engagement tracking, and multi-platform content distribution.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-pink-400/20 text-pink-300 rounded-full text-xs">Laravel</span>
                            <span class="px-3 py-1 bg-purple-400/20 text-purple-300 rounded-full text-xs">Vue.js</span>
                            <span class="px-3 py-1 bg-indigo-400/20 text-indigo-300 rounded-full text-xs">Redis</span>
                            <span class="px-3 py-1 bg-blue-400/20 text-blue-300 rounded-full text-xs">API Integration</span>
                        </div>
                        <div class="flex gap-3">
                            <a href="#" class="flex-1 bg-gradient-to-r from-pink-400 to-purple-400 text-white px-4 py-2 rounded-lg text-sm font-semibold text-center hover:shadow-lg hover:shadow-pink-400/25 transition-shadow duration-300">
                                Live Demo
                            </a>
                            <a href="#" class="flex-1 bg-white/10 border border-white/20 text-white px-4 py-2 rounded-lg text-sm font-semibold text-center hover:bg-white/20 transition-colors duration-300">
                                GitHub
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 6 -->
                <div class="project-card group bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl overflow-hidden hover:scale-105 transition-all duration-300 hover:bg-white/15 hover:border-indigo-400/50">
                    <div class="relative overflow-hidden">
                        <div class="w-full h-48 bg-gradient-to-br from-indigo-500 to-blue-500 flex items-center justify-center">
                            <div class="text-white text-4xl font-orbitron font-bold">DevTools</div>
                        </div>
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="transform scale-0 group-hover:scale-100 transition-transform duration-300">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-orbitron font-bold text-white mb-3">Developer Tools Suite</h3>
                        <p class="text-gray-300 mb-4 text-sm leading-relaxed">
                            A comprehensive collection of web development tools including code formatters, API testers, performance analyzers, and deployment utilities.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-indigo-400/20 text-indigo-300 rounded-full text-xs">JavaScript</span>
                            <span class="px-3 py-1 bg-blue-400/20 text-blue-300 rounded-full text-xs">Electron</span>
                            <span class="px-3 py-1 bg-teal-400/20 text-teal-300 rounded-full text-xs">Express.js</span>
                            <span class="px-3 py-1 bg-gray-400/20 text-gray-300 rounded-full text-xs">PWA</span>
                        </div>
                        <div class="flex gap-3">
                            <a href="#" class="flex-1 bg-gradient-to-r from-indigo-400 to-blue-400 text-white px-4 py-2 rounded-lg text-sm font-semibold text-center hover:shadow-lg hover:shadow-indigo-400/25 transition-shadow duration-300">
                                Live Demo
                            </a>
                            <a href="#" class="flex-1 bg-white/10 border border-white/20 text-white px-4 py-2 rounded-lg text-sm font-semibold text-center hover:bg-white/20 transition-colors duration-300">
                                GitHub
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- More Projects Button -->
            <div class="text-center animate-slideInUp">
                <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 hover:bg-white/15 transition-all duration-300">
                    <h2 class="text-3xl font-orbitron font-bold text-white mb-6">
                        Want to See <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-400">More?</span>
                    </h2>
                    <p class="text-gray-300 text-lg mb-8 max-w-2xl mx-auto">
                        These are just highlights from my portfolio. I have many more projects ranging from mobile apps 
                        to enterprise solutions. Check out my GitHub for the complete collection.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                        <a href="#" class="group relative px-8 py-4 bg-gradient-to-r from-cyan-400 to-purple-400 text-white font-semibold rounded-full transition-all duration-300 hover:scale-105 hover:shadow-lg hover:shadow-cyan-400/25">
                            <span class="relative z-10">View All Projects</span>
                            <div class="absolute inset-0 bg-white/20 rounded-full scale-0 group-hover:scale-100 transition-transform duration-300"></div>
                        </a>
                        <a href="contact.html" class="group px-8 py-4 bg-white/10 backdrop-blur-lg border border-white/20 text-white font-semibold rounded-full transition-all duration-300 hover:scale-105 hover:bg-white/20 hover:border-cyan-400/50">
                            Let's Collaborate
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

     <!-- Footer -->
    @include('components.footer')

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Staggered animation for project cards
        function animateProjects() {
            const projectCards = document.querySelectorAll('.project-card');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateY(0) scale(1)';
                        }, index * 150);
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            projectCards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(50px) scale(0.9)';
                card.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
                observer.observe(card);
            });
        }

        // Initialize animations
        document.addEventListener('DOMContentLoaded', () => {
            animateProjects();
        });

        // Enhanced hover effects
        document.querySelectorAll('.project-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.transform = 'translateY(-10px) scale(1.02)';
                card.style.boxShadow = '0 25px 50px rgba(0, 0, 0, 0.3)';
            });
            
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'translateY(0) scale(1)';
                card.style.boxShadow = 'none';
            });
        });

        // Scroll animations for other elements
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe header and other elements
        document.querySelectorAll('.animate-slideInUp').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(50px)';
            el.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
            observer.observe(el);
        });

        // Add loading animation
        window.addEventListener('load', () => {
            document.body.classList.add('animate-fadeIn');
        });

        // Parallax effect for background
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallax = document.querySelector('.container');
            if (parallax) {
                parallax.style.transform = `translateY(${scrolled * 0.02}px)`;
            }
        });
    </script>
</body>
</html>