<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Aiman Al Mahmud</title>
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

    <!-- About Section -->
    <main class="pt-24 pb-16 px-6">
        <div class="container mx-auto">
            <!-- Header -->
            <div class="text-center mb-16 animate-slideInUp">
                <h1 class="text-5xl md:text-6xl font-orbitron font-bold text-white mb-4">
                    About <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-400">Me</span>
                </h1>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    Discover my journey, passion, and vision for the future of technology
                </p>
            </div>

            <!-- Main Content -->
            <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
                <!-- Left - Profile Image -->
                <div class="animate-slideInLeft">
                    <div class="relative">
                        <div class="w-80 h-80 mx-auto rounded-full bg-gradient-to-r from-cyan-400 to-purple-400 p-2 animate-pulse-glow">
                            <div class="w-full h-full rounded-full bg-gray-800 flex items-center justify-center relative overflow-hidden">
                                <div class="w-72 h-72 rounded-full bg-gradient-to-br from-cyan-500 via-purple-500 to-emerald-500 flex items-center justify-center text-8xl font-orbitron font-bold text-white">
                                    <img src="images/portfolio_image1.jpg" alt="Aiman AL Mahmud" class="w-full h-full object-cover rounded-full">
                                </div>
                                <!-- Floating particles around the image -->
                                <div class="absolute top-4 left-4 w-3 h-3 bg-cyan-400 rounded-full animate-bounce-slow"></div>
                                <div class="absolute top-8 right-6 w-2 h-2 bg-purple-400 rounded-full animate-pulse"></div>
                                <div class="absolute bottom-6 left-8 w-2 h-2 bg-emerald-400 rounded-full animate-bounce-slow" style="animation-delay: 1s;"></div>
                                <div class="absolute bottom-4 right-4 w-3 h-3 bg-cyan-400 rounded-full animate-pulse" style="animation-delay: 2s;"></div>
                            </div>
                        </div>
                        <!-- Glowing ring effect -->
                        <div class="absolute inset-0 rounded-full bg-gradient-to-r from-cyan-400 to-purple-400 animate-spin" style="animation-duration: 10s; filter: blur(20px); opacity: 0.3;"></div>
                    </div>
                </div>

                <!-- Right - About Text -->
                <div class="animate-slideInRight space-y-8">
                    <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 hover:bg-white/15 transition-all duration-300">
                        <h2 class="text-3xl font-orbitron font-bold text-white mb-6">Who I Am</h2>
                        <p class="text-gray-300 leading-relaxed text-lg mb-6">
                            I'm <span class="text-cyan-400 font-semibold">Aiman Al Mahmud</span>, a passionate Software Engineer and AI Innovator dedicated to building modern, scalable, and user-friendly applications.
                        </p>
                        <p class="text-gray-300 leading-relaxed text-lg mb-6">
                            I specialize in <span class="text-purple-400 font-semibold">Laravel</span>, <span class="text-emerald-400 font-semibold">JavaScript</span>, <span class="text-cyan-400 font-semibold">Python </span>and I love creating futuristic designs with clean code.
                        </p>
                       <p class="text-gray-300 leading-relaxed text-lg mb-6">
                            I’m the creator of <span class="text-cyan-400 font-semibold">AIELTS</span>, an AI-powered <span class="text-purple-400 font-semibold">IELTS tutor</span> that personalizes learning and helps students improve faster.
                        </p>
                        <p class="text-gray-300 leading-relaxed text-lg">
                            My mission is to bridge the gap between complex technology and human needs, creating solutions that are not only functional but also intuitive and beautiful.
                        </p>
                    </div>

                    <!-- Quick Stats -->
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-6 text-center hover:scale-105 transition-transform duration-300">
                            <div class="text-3xl font-orbitron font-bold text-cyan-400 mb-2">50+</div>
                            <div class="text-gray-300">Projects Completed</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-6 text-center hover:scale-105 transition-transform duration-300">
                            <div class="text-3xl font-orbitron font-bold text-purple-400 mb-2">3+</div>
                            <div class="text-gray-300">Years Experience</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Milestone Journey -->
            <div class="animate-slideInUp">
                <h2 class="text-4xl font-orbitron font-bold text-white text-center mb-12">
                    My <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-400">Journey</span>
                </h2>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Milestone 1 -->
                    <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 hover:scale-105 transition-all duration-300 group">
                        <div class="w-16 h-16 bg-gradient-to-r from-cyan-400 to-purple-400 rounded-full flex items-center justify-center mb-6 mx-auto group-hover:animate-bounce-slow">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-orbitron font-bold text-white text-center mb-4">Foundation</h3>
                        <p class="text-gray-300 text-center">Started my journey in Computer Science, building strong fundamentals in programming and software development.</p>
                    </div>

                    <!-- Milestone 2 -->
                    <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 hover:scale-105 transition-all duration-300 group">
                        <div class="w-16 h-16 bg-gradient-to-r from-purple-400 to-emerald-400 rounded-full flex items-center justify-center mb-6 mx-auto group-hover:animate-bounce-slow">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-orbitron font-bold text-white text-center mb-4">Specialization</h3>
                        <p class="text-gray-300 text-center">Mastered modern web technologies including Laravel, React, and cloud platforms to create scalable solutions.</p>
                    </div>

                    <!-- Milestone 3 -->
                    <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 hover:scale-105 transition-all duration-300 group">
                        <div class="w-16 h-16 bg-gradient-to-r from-emerald-400 to-cyan-400 rounded-full flex items-center justify-center mb-6 mx-auto group-hover:animate-bounce-slow">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-orbitron font-bold text-white text-center mb-4">Innovation</h3>
                        <p class="text-gray-300 text-center">Now focused on creating cutting-edge applications with AI integration and futuristic user experiences.</p>
                    </div>
                </div>
            </div>

            <!-- Values Section -->
            <div class="mt-20 animate-slideInUp">
                <h2 class="text-4xl font-orbitron font-bold text-white text-center mb-12">
                    Core <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-400">Values</span>
                </h2>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-6 text-center hover:bg-white/15 transition-all duration-300">
                        <div class="text-4xl mb-4">🎯</div>
                        <h3 class="text-lg font-orbitron font-bold text-white mb-2">Precision</h3>
                        <p class="text-gray-300 text-sm">Every line of code matters</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-6 text-center hover:bg-white/15 transition-all duration-300">
                        <div class="text-4xl mb-4">🚀</div>
                        <h3 class="text-lg font-orbitron font-bold text-white mb-2">Innovation</h3>
                        <p class="text-gray-300 text-sm">Always pushing boundaries</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-6 text-center hover:bg-white/15 transition-all duration-300">
                        <div class="text-4xl mb-4">🤝</div>
                        <h3 class="text-lg font-orbitron font-bold text-white mb-2">Collaboration</h3>
                        <p class="text-gray-300 text-sm">Better together</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-6 text-center hover:bg-white/15 transition-all duration-300">
                        <div class="text-4xl mb-4">📚</div>
                        <h3 class="text-lg font-orbitron font-bold text-white mb-2">Learning</h3>
                        <p class="text-gray-300 text-sm">Never stop growing</p>
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

        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-slideInUp');
                }
            });
        }, observerOptions);

        // Observe all animatable elements
        document.querySelectorAll('.animate-slideInLeft, .animate-slideInRight, .animate-slideInUp').forEach(el => {
            observer.observe(el);
        });

        // Add loading animation
        window.addEventListener('load', () => {
            document.body.classList.add('animate-fadeIn');
        });

        // Smooth hover effects
        document.querySelectorAll('.group').forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.transform = 'translateY(-10px)';
            });
            
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>
</html>