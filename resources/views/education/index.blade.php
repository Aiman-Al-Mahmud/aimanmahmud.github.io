<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education - Aiman Al Mahmud</title>
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
    
    <!-- Education Section -->
    <main class="pt-24 pb-16 px-6">
        <div class="container mx-auto max-w-4xl">
            <!-- Header -->
            <div class="text-center mb-16 animate-slideInUp">
                <h1 class="text-5xl md:text-6xl font-orbitron font-bold text-white mb-4">
                    Education <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-400">Timeline</span>
                </h1>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    My academic journey and professional certifications that shaped my expertise
                </p>
            </div>

            <!-- Timeline Container -->
            <div class="relative">
                <!-- Glowing Center Line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 w-1 bg-gradient-to-b from-cyan-400 via-purple-400 to-emerald-400 h-full rounded-full"></div>
                <div class="absolute left-1/2 transform -translate-x-1/2 w-3 bg-gradient-to-b from-cyan-400 via-purple-400 to-emerald-400 h-full rounded-full animate-pulse-glow"></div>

                <!-- Timeline Items -->
                <div class="space-y-16">
                    <!-- Education 1 - Right Side -->
                    <div class="timeline-item flex items-center justify-between animate-slideInRight" style="animation-delay: 0.2s;">
                        <div class="w-5/12"></div>
                        <div class="relative flex items-center justify-center">
                            <div class="w-6 h-6 bg-cyan-400 rounded-full z-10 animate-pulse"></div>
                            <div class="absolute w-12 h-12 bg-cyan-400/30 rounded-full animate-ping"></div>
                        </div>
                        <div class="w-5/12">
                            <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 ml-8 hover:scale-105 transition-all duration-300 hover:bg-white/15">
                                <div class="text-cyan-400 font-orbitron font-bold text-lg mb-2">2022 – 2026</div>
                                <h3 class="text-2xl font-orbitron font-bold text-white mb-4">Bachelor of Computer Science</h3>
                                <a href="https://nubtkhulna.ac.bd/" target="_blank" class="text-purple-400 font-semibold mb-4 hover:underline">
                                    Northern University of Business and Technology, Khulna
                                </a>

                                <p class="text-gray-300 mb-4">
                                    Graduated with honors, focusing on software engineering and web development.
                                </p>
                                
                            </div>
                        </div>
                    </div>

                    <!-- Education 2 - Left Side -->
                    <div class="timeline-item flex items-center justify-between animate-slideInLeft" style="animation-delay: 0.4s;">
                        <div class="w-5/12">
                            <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 mr-8 hover:scale-105 transition-all duration-300 hover:bg-white/15">
                                <div class="text-purple-400 font-orbitron font-bold text-lg mb-2">2021</div>
                                <h3 class="text-2xl font-orbitron font-bold text-white mb-4">Laravel Certification</h3>
                                <p class="text-emerald-400 font-semibold mb-4">Laravel Academy</p>
                                <p class="text-gray-300 mb-4">
                                    Completed advanced Laravel certification covering modern PHP development practices.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-purple-400/20 text-purple-300 rounded-full text-sm">MVC Architecture</span>
                                    <span class="px-3 py-1 bg-yellow-400/20 text-yellow-300 rounded-full text-sm">MySql</span>
                                    <span class="px-3 py-1 bg-emerald-400/20 text-emerald-300 rounded-full text-sm">Eloquent ORM</span>
                                    <span class="px-3 py-1 bg-cyan-400/20 text-cyan-300 rounded-full text-sm">API Development</span>
                                </div>
                            </div>
                        </div>
                        <div class="relative flex items-center justify-center">
                            <div class="w-6 h-6 bg-purple-400 rounded-full z-10 animate-pulse"></div>
                            <div class="absolute w-12 h-12 bg-purple-400/30 rounded-full animate-ping"></div>
                        </div>
                        <div class="w-5/12"></div>
                    </div>

                    <!-- Education 3 - Right Side -->
                    <div class="timeline-item flex items-center justify-between animate-slideInRight" style="animation-delay: 0.6s;">
                        <div class="w-5/12"></div>
                        <div class="relative flex items-center justify-center">
                            <div class="w-6 h-6 bg-emerald-400 rounded-full z-10 animate-pulse"></div>
                            <div class="absolute w-12 h-12 bg-emerald-400/30 rounded-full animate-ping"></div>
                        </div>
                        <div class="w-5/12">
                            <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 ml-8 hover:scale-105 transition-all duration-300 hover:bg-white/15">
                                <div class="text-emerald-400 font-orbitron font-bold text-lg mb-2">2022</div>
                                <h3 class="text-2xl font-orbitron font-bold text-white mb-4">AWS Solutions Architect</h3>
                                <p class="text-cyan-400 font-semibold mb-4">Amazon Web Services</p>
                                <p class="text-gray-300 mb-4">
                                    Certified in cloud architecture and deployment strategies using AWS services.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-emerald-400/20 text-emerald-300 rounded-full text-sm">EC2</span>
                                    <span class="px-3 py-1 bg-cyan-400/20 text-cyan-300 rounded-full text-sm">S3</span>
                                    <span class="px-3 py-1 bg-purple-400/20 text-purple-300 rounded-full text-sm">Lambda</span>
                                    <span class="px-3 py-1 bg-yellow-400/20 text-yellow-300 rounded-full text-sm">RDS</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Education 4 - Left Side -->
                    <div class="timeline-item flex items-center justify-between animate-slideInLeft" style="animation-delay: 0.8s;">
                        <div class="w-5/12">
                            <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 mr-8 hover:scale-105 transition-all duration-300 hover:bg-white/15">
                                <div class="text-yellow-400 font-orbitron font-bold text-lg mb-2">2022</div>
                                <h3 class="text-2xl font-orbitron font-bold text-white mb-4">Full Stack JavaScript</h3>
                                <p class="text-green-400 font-semibold mb-4">FreeCodeCamp</p>
                                <p class="text-gray-300 mb-4">
                                    Completed comprehensive full-stack JavaScript curriculum including React and Node.js.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-yellow-400/20 text-yellow-300 rounded-full text-sm">React</span>
                                    <span class="px-3 py-1 bg-green-400/20 text-green-300 rounded-full text-sm">Node.js</span>
                                    <span class="px-3 py-1 bg-blue-400/20 text-blue-300 rounded-full text-sm">MongoDB</span>
                                    <span class="px-3 py-1 bg-red-400/20 text-red-300 rounded-full text-sm">Express.js</span>
                                </div>
                            </div>
                        </div>
                        <div class="relative flex items-center justify-center">
                            <div class="w-6 h-6 bg-yellow-400 rounded-full z-10 animate-pulse"></div>
                            <div class="absolute w-12 h-12 bg-yellow-400/30 rounded-full animate-ping"></div>
                        </div>
                        <div class="w-5/12"></div>
                    </div>
                </div>

                <!-- Mobile Timeline -->
                <div class="md:hidden space-y-8">
                    <div class="relative pl-2">
                        <div class="absolute left-0 inset-y-0 w-1 bg-gradient-to-b from-cyan-400 to-purple-400 rounded-full"></div>
                        <div class="space-y-8">
                            <!-- Mobile Item 1 -->
                            <div class="relative">
                                <div class="absolute left-0 top-4 w-4 h-4 bg-cyan-400 rounded-full"></div>
                                <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-6 ml-6">
                                    <div class="text-cyan-400 font-orbitron font-bold text-sm mb-2">2016 – 2020</div>
                                    <h3 class="text-xl font-orbitron font-bold text-white mb-2">Bachelor of Computer Science</h3>
                                    <p class="text-purple-400 font-semibold text-sm mb-3">Northern University of Business and Technology</p>
                                    <p class="text-gray-300 text-sm">Graduated with honors, focusing on software engineering and web development.</p>
                                </div>
                            </div>

                            <!-- Mobile Item 2 -->
                            <div class="relative">
                                <div class="absolute left-0 top-4 w-4 h-4 bg-purple-400 rounded-full"></div>
                                <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-6 ml-6">
                                    <div class="text-purple-400 font-orbitron font-bold text-sm mb-2">2021</div>
                                    <h3 class="text-xl font-orbitron font-bold text-white mb-2">Laravel Certification</h3>
                                    <p class="text-emerald-400 font-semibold text-sm mb-3">Laravel Academy</p>
                                    <p class="text-gray-300 text-sm">Completed advanced Laravel certification covering modern PHP development practices.</p>
                                </div>
                            </div>

                            <!-- Mobile Item 3 -->
                            <div class="relative">
                                <div class="absolute left-0 top-4 w-4 h-4 bg-emerald-400 rounded-full"></div>
                                <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-6 ml-6">
                                    <div class="text-emerald-400 font-orbitron font-bold text-sm mb-2">2022</div>
                                    <h3 class="text-xl font-orbitron font-bold text-white mb-2">AWS Solutions Architect</h3>
                                    <p class="text-cyan-400 font-semibold text-sm mb-3">Amazon Web Services</p>
                                    <p class="text-gray-300 text-sm">Certified in cloud architecture and deployment strategies using AWS services.</p>
                                </div>
                            </div>

                            <!-- Mobile Item 4 -->
                            <div class="relative">
                                <div class="absolute left-0 top-4 w-4 h-4 bg-yellow-400 rounded-full"></div>
                                <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-6 ml-6">
                                    <div class="text-yellow-400 font-orbitron font-bold text-sm mb-2">2022</div>
                                    <h3 class="text-xl font-orbitron font-bold text-white mb-2">Full Stack JavaScript</h3>
                                    <p class="text-green-400 font-semibold text-sm mb-3">FreeCodeCamp</p>
                                    <p class="text-gray-300 text-sm">Completed comprehensive full-stack JavaScript curriculum including React and Node.js.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Info Section -->
            <div class="mt-20 text-center animate-slideInUp">
                <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 hover:bg-white/15 transition-all duration-300">
                    <h2 class="text-3xl font-orbitron font-bold text-white mb-6">
                        Continuous <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-400">Learning</span>
                    </h2>
                    <p class="text-gray-300 text-lg leading-relaxed mb-8">
                        Education never stops in the tech world. I'm constantly updating my skills through online courses, 
                        workshops, and hands-on projects to stay ahead of the curve in rapidly evolving technologies.
                    </p>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="text-center">
                            <div class="text-2xl font-orbitron font-bold text-cyan-400 mb-1">15+</div>
                            <div class="text-gray-400 text-sm">Online Courses</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-orbitron font-bold text-purple-400 mb-1">4</div>
                            <div class="text-gray-400 text-sm">Certifications</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-orbitron font-bold text-emerald-400 mb-1">100+</div>
                            <div class="text-gray-400 text-sm">Learning Hours</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-orbitron font-bold text-yellow-400 mb-1">∞</div>
                            <div class="text-gray-400 text-sm">Curiosity</div>
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

        // Timeline animation on scroll
        const observerOptions = {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateX(0) translateY(0)';
                    }, index * 200);
                }
            });
        }, observerOptions);

        // Observe timeline items
        document.querySelectorAll('.timeline-item').forEach(item => {
            item.style.opacity = '0';
            observer.observe(item);
        });

        // Add loading animation
        window.addEventListener('load', () => {
            document.body.classList.add('animate-fadeIn');
        });

        // Enhanced scroll animations
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallax = document.querySelector('.timeline-container');
            if (parallax) {
                parallax.style.transform = `translateY(${scrolled * 0.1}px)`;
            }
        });

        // Responsive timeline visibility
        function handleResponsive() {
            const isDesktop = window.innerWidth >= 768;
            const desktopTimeline = document.querySelector('.space-y-16');
            const mobileTimeline = document.querySelector('.md\\:hidden');
            
            if (isDesktop) {
                if (desktopTimeline) desktopTimeline.style.display = 'block';
                if (mobileTimeline) mobileTimeline.style.display = 'none';
            } else {
                if (desktopTimeline) desktopTimeline.style.display = 'none';
                if (mobileTimeline) mobileTimeline.style.display = 'block';
            }
        }

        window.addEventListener('resize', handleResponsive);
        handleResponsive();
    </script>
</body>
</html>