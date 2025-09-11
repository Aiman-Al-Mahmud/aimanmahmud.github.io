<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills - Aiman Al Mahmud</title>
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
                        'progress': 'progress 2s ease-in-out forwards',
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
                        progress: {
                            '0%': { width: '0%' },
                            '100%': { width: 'var(--progress-width)' }
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

    <!-- Skills Section -->
    <main class="pt-24 pb-16 px-6">
        <div class="container mx-auto">
            <!-- Header -->
            <div class="text-center mb-16 animate-slideInUp">
                <h1 class="text-5xl md:text-6xl font-orbitron font-bold text-white mb-4">
                    My <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-400">Skills</span>
                </h1>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    A comprehensive overview of my technical expertise and proficiency levels
                </p>
            </div>

            <!-- Skills Grid -->
            <div class="grid lg:grid-cols-3 gap-8 mb-16">
                <!-- Languages -->
                <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 hover:bg-white/15 transition-all duration-300 animate-slideInLeft">
                    <div class="text-center mb-8">
                        <div class="w-20 h-20 bg-gradient-to-r from-cyan-400 to-purple-400 rounded-full flex items-center justify-center mx-auto mb-4 animate-pulse-glow">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-orbitron font-bold text-white mb-2">Languages</h2>
                        <p class="text-gray-300">Core programming languages I work with</p>
                    </div>
                    
                    <div class="space-y-6">
                        <div class="skill-item" data-skill="95">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-white font-semibold">JavaScript</span>
                                <span class="text-cyan-400 font-bold">95%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="progress-bar h-2 bg-gradient-to-r from-cyan-400 to-purple-400 rounded-full" style="width: 0%"></div>
                            </div>
                        </div>
                        
                        <div class="skill-item" data-skill="90">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-white font-semibold">PHP</span>
                                <span class="text-purple-400 font-bold">90%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="progress-bar h-2 bg-gradient-to-r from-purple-400 to-emerald-400 rounded-full" style="width: 0%"></div>
                            </div>
                        </div>
                        
                        <div class="skill-item" data-skill="85">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-white font-semibold">Python</span>
                                <span class="text-emerald-400 font-bold">85%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="progress-bar h-2 bg-gradient-to-r from-emerald-400 to-cyan-400 rounded-full" style="width: 0%"></div>
                            </div>
                        </div>
                        
                        <div class="skill-item" data-skill="80">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-white font-semibold">C++</span>
                                <span class="text-yellow-400 font-bold">80%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="progress-bar h-2 bg-gradient-to-r from-yellow-400 to-red-400 rounded-full" style="width: 0%"></div>
                            </div>
                        </div>
                        
                        <div class="skill-item" data-skill="75">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-white font-semibold">C</span>
                                <span class="text-red-400 font-bold">75%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="progress-bar h-2 bg-gradient-to-r from-red-400 to-pink-400 rounded-full" style="width: 0%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Frameworks -->
                <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 hover:bg-white/15 transition-all duration-300 animate-slideInUp">
                    <div class="text-center mb-8">
                        <div class="w-20 h-20 bg-gradient-to-r from-purple-400 to-emerald-400 rounded-full flex items-center justify-center mx-auto mb-4 animate-pulse-glow">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-orbitron font-bold text-white mb-2">Frameworks</h2>
                        <p class="text-gray-300">Modern frameworks and libraries I master</p>
                    </div>
                    
                    <div class="space-y-6">
                        <div class="skill-item" data-skill="95">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-white font-semibold">Laravel</span>
                                <span class="text-purple-400 font-bold">95%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="progress-bar h-2 bg-gradient-to-r from-purple-400 to-cyan-400 rounded-full" style="width: 0%"></div>
                            </div>
                        </div>
                        
                        <div class="skill-item" data-skill="90">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-white font-semibold">React</span>
                                <span class="text-cyan-400 font-bold">90%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="progress-bar h-2 bg-gradient-to-r from-cyan-400 to-blue-400 rounded-full" style="width: 0%"></div>
                            </div>
                        </div>
                        
                        <div class="skill-item" data-skill="85">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-white font-semibold">Node.js</span>
                                <span class="text-emerald-400 font-bold">85%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="progress-bar h-2 bg-gradient-to-r from-emerald-400 to-green-400 rounded-full" style="width: 0%"></div>
                            </div>
                        </div>
                        
                        <div class="skill-item" data-skill="88">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-white font-semibold">TailwindCSS</span>
                                <span class="text-teal-400 font-bold">88%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="progress-bar h-2 bg-gradient-to-r from-teal-400 to-cyan-400 rounded-full" style="width: 0%"></div>
                            </div>
                        </div>
                        
                        <div class="skill-item" data-skill="80">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-white font-semibold">Vue.js</span>
                                <span class="text-green-400 font-bold">80%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="progress-bar h-2 bg-gradient-to-r from-green-400 to-lime-400 rounded-full" style="width: 0%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tools -->
                <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 hover:bg-white/15 transition-all duration-300 animate-slideInRight">
                    <div class="text-center mb-8">
                        <div class="w-20 h-20 bg-gradient-to-r from-emerald-400 to-cyan-400 rounded-full flex items-center justify-center mx-auto mb-4 animate-pulse-glow">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-orbitron font-bold text-white mb-2">Tools</h2>
                        <p class="text-gray-300">Development tools and technologies I use</p>
                    </div>
                    
                    <div class="space-y-6">
                        <div class="skill-item" data-skill="92">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-white font-semibold">Git</span>
                                <span class="text-orange-400 font-bold">92%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="progress-bar h-2 bg-gradient-to-r from-orange-400 to-red-400 rounded-full" style="width: 0%"></div>
                            </div>
                        </div>
                        
                        <div class="skill-item" data-skill="88">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-white font-semibold">Docker</span>
                                <span class="text-blue-400 font-bold">88%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="progress-bar h-2 bg-gradient-to-r from-blue-400 to-indigo-400 rounded-full" style="width: 0%"></div>
                            </div>
                        </div>
                        
                        <div class="skill-item" data-skill="85">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-white font-semibold">AWS</span>
                                <span class="text-yellow-400 font-bold">85%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="progress-bar h-2 bg-gradient-to-r from-yellow-400 to-orange-400 rounded-full" style="width: 0%"></div>
                            </div>
                        </div>
                        
                        <div class="skill-item" data-skill="90">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-white font-semibold">MySQL</span>
                                <span class="text-indigo-400 font-bold">90%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="progress-bar h-2 bg-gradient-to-r from-indigo-400 to-purple-400 rounded-full" style="width: 0%"></div>
                            </div>
                        </div>
                        
                        <div class="skill-item" data-skill="80">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-white font-semibold">MongoDB</span>
                                <span class="text-green-400 font-bold">80%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="progress-bar h-2 bg-gradient-to-r from-green-400 to-emerald-400 rounded-full" style="width: 0%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Skills Section -->
            <div class="grid md:grid-cols-2 gap-8 mb-16">
                <!-- Soft Skills -->
                <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 hover:bg-white/15 transition-all duration-300 animate-slideInLeft">
                    <h3 class="text-2xl font-orbitron font-bold text-white mb-6 text-center">
                        Soft <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-400">Skills</span>
                    </h3>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div class="text-center p-4 bg-white/5 rounded-xl hover:scale-105 transition-transform duration-300">
                            <div class="text-3xl mb-2">🎯</div>
                            <div class="text-white font-semibold">Problem Solving</div>
                        </div>
                        <div class="text-center p-4 bg-white/5 rounded-xl hover:scale-105 transition-transform duration-300">
                            <div class="text-3xl mb-2">👥</div>
                            <div class="text-white font-semibold">Team Work</div>
                        </div>
                        <div class="text-center p-4 bg-white/5 rounded-xl hover:scale-105 transition-transform duration-300">
                            <div class="text-3xl mb-2">💬</div>
                            <div class="text-white font-semibold">Communication</div>
                        </div>
                        <div class="text-center p-4 bg-white/5 rounded-xl hover:scale-105 transition-transform duration-300">
                            <div class="text-3xl mb-2">⚡</div>
                            <div class="text-white font-semibold">Adaptability</div>
                        </div>
                        <div class="text-center p-4 bg-white/5 rounded-xl hover:scale-105 transition-transform duration-300">
                            <div class="text-3xl mb-2">🕐</div>
                            <div class="text-white font-semibold">Time Management</div>
                        </div>
                        <div class="text-center p-4 bg-white/5 rounded-xl hover:scale-105 transition-transform duration-300">
                            <div class="text-3xl mb-2">🎨</div>
                            <div class="text-white font-semibold">Creativity</div>
                        </div>
                    </div>
                </div>

                <!-- Interests -->
                <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 hover:bg-white/15 transition-all duration-300 animate-slideInRight">
                    <h3 class="text-2xl font-orbitron font-bold text-white mb-6 text-center">
                        Tech <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-400">Interests</span>
                    </h3>
                    
                    <div class="space-y-4">
                        <div class="flex items-center p-3 bg-white/5 rounded-xl hover:bg-white/10 transition-colors duration-300">
                            <div class="w-10 h-10 bg-gradient-to-r from-cyan-400 to-purple-400 rounded-full flex items-center justify-center mr-4">
                                <span class="text-white font-bold">AI</span>
                            </div>
                            <span class="text-white">Artificial Intelligence</span>
                        </div>
                        <div class="flex items-center p-3 bg-white/5 rounded-xl hover:bg-white/10 transition-colors duration-300">
                            <div class="w-10 h-10 bg-gradient-to-r from-purple-400 to-emerald-400 rounded-full flex items-center justify-center mr-4">
                                <span class="text-white font-bold">☁️</span>
                            </div>
                            <span class="text-white">Cloud Computing</span>
                        </div>
                        <div class="flex items-center p-3 bg-white/5 rounded-xl hover:bg-white/10 transition-colors duration-300">
                            <div class="w-10 h-10 bg-gradient-to-r from-emerald-400 to-cyan-400 rounded-full flex items-center justify-center mr-4">
                                <span class="text-white font-bold">⚡</span>
                            </div>
                            <span class="text-white">Web Performance</span>
                        </div>
                        <div class="flex items-center p-3 bg-white/5 rounded-xl hover:bg-white/10 transition-colors duration-300">
                            <div class="w-10 h-10 bg-gradient-to-r from-yellow-400 to-red-400 rounded-full flex items-center justify-center mr-4">
                                <span class="text-white font-bold">🔒</span>
                            </div>
                            <span class="text-white">Cybersecurity</span>
                        </div>
                        <div class="flex items-center p-3 bg-white/5 rounded-xl hover:bg-white/10 transition-colors duration-300">
                            <div class="w-10 h-10 bg-gradient-to-r from-blue-400 to-indigo-400 rounded-full flex items-center justify-center mr-4">
                                <span class="text-white font-bold">📱</span>
                            </div>
                            <span class="text-white">Mobile Development</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Skill Summary -->
            <div class="text-center animate-slideInUp">
                <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 hover:bg-white/15 transition-all duration-300">
                    <h2 class="text-3xl font-orbitron font-bold text-white mb-6">
                        Skill <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-400">Summary</span>
                    </h2>
                    <p class="text-gray-300 text-lg leading-relaxed mb-8">
                        With a strong foundation in modern web technologies and a passion for continuous learning, 
                        I bring a comprehensive skill set to every project. My expertise spans from frontend development 
                        with React and modern CSS frameworks to robust backend solutions using Laravel and Node.js.
                    </p>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                        <div class="text-center">
                            <div class="text-3xl font-orbitron font-bold text-cyan-400 mb-2">5+</div>
                            <div class="text-gray-400">Programming Languages</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-orbitron font-bold text-purple-400 mb-2">10+</div>
                            <div class="text-gray-400">Frameworks & Libraries</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-orbitron font-bold text-emerald-400 mb-2">15+</div>
                            <div class="text-gray-400">Tools & Technologies</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-orbitron font-bold text-yellow-400 mb-2">3+</div>
                            <div class="text-gray-400">Years Experience</div>
                        </div>
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

        // Progress bar animation
        function animateProgressBars() {
            const skillItems = document.querySelectorAll('.skill-item');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const skillLevel = entry.target.dataset.skill;
                        const progressBar = entry.target.querySelector('.progress-bar');
                        
                        setTimeout(() => {
                            progressBar.style.width = skillLevel + '%';
                            progressBar.style.transition = 'width 2s ease-in-out';
                        }, 200);
                        
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.5
            });

            skillItems.forEach(item => {
                observer.observe(item);
            });
        }

        // Initialize animations
        document.addEventListener('DOMContentLoaded', () => {
            animateProgressBars();
        });

        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0) translateX(0)';
                }
            });
        }, observerOptions);

        // Observe all animatable elements
        document.querySelectorAll('.animate-slideInLeft, .animate-slideInRight, .animate-slideInUp').forEach(el => {
            el.style.opacity = '0';
            observer.observe(el);
        });

        // Add loading animation
        window.addEventListener('load', () => {
            document.body.classList.add('animate-fadeIn');
        });

        // Enhanced hover effects
        document.querySelectorAll('.skill-item').forEach(item => {
            item.addEventListener('mouseenter', () => {
                item.style.transform = 'scale(1.02)';
                item.style.transition = 'transform 0.3s ease';
            });
            
            item.addEventListener('mouseleave', () => {
                item.style.transform = 'scale(1)';
            });
        });
    </script>
</body>
</html>