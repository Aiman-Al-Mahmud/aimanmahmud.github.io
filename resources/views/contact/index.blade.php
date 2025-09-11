<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Aiman Al Mahmud</title>
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

 @include('components.navbar')

    <!-- Contact Section -->
    <main class="pt-24 pb-16 px-6">
        <div class="container mx-auto max-w-6xl">
            <!-- Header -->
            <div class="text-center mb-16 animate-slideInUp">
                <h1 class="text-5xl md:text-6xl font-orbitron font-bold text-white mb-4">
                    Get In <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-400">Touch</span>
                </h1>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    Ready to collaborate on your next project? Let's discuss how we can bring your ideas to life.
                </p>
            </div>

            <!-- Contact Content -->
            <div class="grid lg:grid-cols-2 gap-12 items-start">
                <!-- Left Column - Contact Info -->
                <div class="animate-slideInLeft">
                    <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 mb-8 hover:bg-white/15 transition-all duration-300">
                        <h2 class="text-3xl font-orbitron font-bold text-white mb-6">
                            Let's build something <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-400">amazing together!</span>
                        </h2>
                        <p class="text-gray-300 text-lg leading-relaxed mb-8">
                            I'm always excited to work on innovative projects and collaborate with like-minded individuals. 
                            Whether you have a specific project in mind or just want to discuss possibilities, I'd love to hear from you.
                        </p>

                        <!-- Contact Methods -->
                        <div class="space-y-6">
                            <div class="flex items-center group">
                                <div class="w-14 h-14 bg-gradient-to-r from-cyan-400 to-purple-400 rounded-full flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-white font-semibold text-lg">Email</h3>
                                    <p class="text-gray-300">aimanmahmud0ff01@gmail.com</p>
                                </div>
                            </div>

                            <div class="flex items-center group">
                                <div class="w-14 h-14 bg-gradient-to-r from-purple-400 to-emerald-400 rounded-full flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-white font-semibold text-lg">Phone</h3>
                                    <p class="text-gray-300">+880 1787-755330</p>
                                </div>
                            </div>

                            <div class="flex items-center group">
                                <div class="w-14 h-14 bg-gradient-to-r from-emerald-400 to-cyan-400 rounded-full flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-white font-semibold text-lg">Location</h3>
                                    <p class="text-gray-300">Khulna, Bangladesh</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Availability -->
                    <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-6 hover:bg-white/15 transition-all duration-300">
                        <h3 class="text-xl font-orbitron font-bold text-white mb-4 flex items-center">
                            <div class="w-3 h-3 bg-green-400 rounded-full mr-3 animate-pulse"></div>
                            Currently Available
                        </h3>
                        <p class="text-gray-300 text-sm">
                            I'm currently available for freelance projects and full-time opportunities. 
                            Expected response time: Within 24 hours.
                        </p>
                    </div>
                </div>

                <!-- Right Column - Contact Form -->
                <div class="animate-slideInRight">
                    <form action="{{ route('contact.store') }}" method="POST" class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 hover:bg-white/15 transition-all duration-300">
                        @csrf
                        <h3 class="text-2xl font-orbitron font-bold text-white mb-8 text-center">Send Me a Message</h3>
                        
                        <!-- Name Field -->
                        <div class="relative mb-6">
                            <input 
                                type="text" 
                                id="name" 
                                name="name"
                                class="w-full px-4 py-4 bg-white/10 border border-white/20 rounded-xl text-white placeholder-transparent focus:outline-none focus:border-cyan-400 focus:bg-white/15 transition-all duration-300 peer"
                                placeholder="Your Name"
                                required
                            >
                            <label 
                                for="name" 
                                class="absolute left-4 -top-6 text-sm text-gray-300 transition-all duration-300 peer-placeholder-shown:top-4 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:-top-6 peer-focus:text-sm peer-focus:text-cyan-400"
                            >
                                Your Name
                            </label>
                        </div>

                        <!-- Email Field -->
                        <div class="relative mb-6">
                            <input 
                                type="email" 
                                id="email" 
                                name="email"
                                class="w-full px-4 py-4 bg-white/10 border border-white/20 rounded-xl text-white placeholder-transparent focus:outline-none focus:border-cyan-400 focus:bg-white/15 transition-all duration-300 peer"
                                placeholder="Your Email"
                                required
                            >
                            <label 
                                for="email" 
                                class="absolute left-4 -top-6 text-sm text-gray-300 transition-all duration-300 peer-placeholder-shown:top-4 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:-top-6 peer-focus:text-sm peer-focus:text-cyan-400"
                            >
                                Your Email
                            </label>
                        </div>

                        <!-- Subject Field -->
                        <div class="relative mb-6">
                            <input 
                                type="text" 
                                id="subject" 
                                name="subject"
                                class="w-full px-4 py-4 bg-white/10 border border-white/20 rounded-xl text-white placeholder-transparent focus:outline-none focus:border-cyan-400 focus:bg-white/15 transition-all duration-300 peer"
                                placeholder="Subject"
                                required
                            >
                            <label 
                                for="subject" 
                                class="absolute left-4 -top-6 text-sm text-gray-300 transition-all duration-300 peer-placeholder-shown:top-4 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:-top-6 peer-focus:text-sm peer-focus:text-cyan-400"
                            >
                                Subject
                            </label>
                        </div>

                        <!-- Message Field -->
                        <div class="relative mb-8">
                            <textarea 
                                id="message" 
                                name="message"
                                rows="6"
                                class="w-full px-4 py-4 bg-white/10 border border-white/20 rounded-xl text-white placeholder-transparent focus:outline-none focus:border-cyan-400 focus:bg-white/15 transition-all duration-300 peer resize-none"
                                placeholder="Your Message"
                                required
                            ></textarea>
                            <label 
                                for="message" 
                                class="absolute left-4 -top-6 text-sm text-gray-300 transition-all duration-300 peer-placeholder-shown:top-4 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:-top-6 peer-focus:text-sm peer-focus:text-cyan-400"
                            >
                                Your Message
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <button 
                            type="submit"
                            class="w-full py-4 bg-gradient-to-r from-cyan-400 to-purple-400 text-white font-semibold rounded-xl transition-all duration-300 hover:scale-105 hover:shadow-lg hover:shadow-cyan-400/25 animate-pulse-glow"
                        >
                            Send Message
                        </button>
                    </form>
                </div>
            </div>

            <!-- Social Links Section -->
            <div class="mt-20 text-center animate-slideInUp">
                <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 hover:bg-white/15 transition-all duration-300">
                    <h2 class="text-3xl font-orbitron font-bold text-white mb-6">
                        Connect With <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-400">Me</span>
                    </h2>
                    <p class="text-gray-300 text-lg mb-8 max-w-2xl mx-auto">
                        Follow my journey and stay updated with my latest projects and insights across social platforms.
                    </p>
                    
                    <!-- Social Icons -->
                    <div class="flex justify-center space-x-8">
                        <a href="https://www.linkedin.com/in/aiman-al-mahmud-a7b333332/ class="group relative">
                            <div class="w-16 h-16 bg-gradient-to-r from-blue-600 to-blue-700 rounded-full flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:shadow-lg group-hover:shadow-blue-600/25">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </div>
                            <span class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 text-sm text-gray-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300">LinkedIn</span>
                        </a>

                        <a href="https://github.com/Aiman-Al-Mahmud" class="group relative">
                            <div class="w-16 h-16 bg-gradient-to-r from-gray-800 to-gray-900 rounded-full flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:shadow-lg group-hover:shadow-gray-800/25">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </div>
                            <span class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 text-sm text-gray-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300">GitHub</span>
                        </a>

                        <a href="https://x.com/aimanmahmud69" class="group relative">
                            <div class="w-16 h-16 bg-gradient-to-r from-blue-400 to-blue-500 rounded-full flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:shadow-lg group-hover:shadow-blue-400/25">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                            </div>
                            <span class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 text-sm text-gray-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Twitter</span>
                        </a>

                        <!-- <a href="#" class="group relative">
                            <div class="w-16 h-16 bg-gradient-to-r from-purple-600 to-pink-600 rounded-full flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:shadow-lg group-hover:shadow-purple-600/25">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.042-3.441.219-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738a.36.36 0 01.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.888-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.357-.631-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24c6.624 0 11.99-5.367 11.99-12C24.007 5.367 18.641.001 12.017.001z"/>
                                </svg>
                            </div>
                            <span class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 text-sm text-gray-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Portfolio</span>
                        </a> -->

                        <<a href="https://www.facebook.com/aimanmahmud69" class="group relative">
                             <div class="w-16 h-16 bg-gradient-to-r from-blue-600 to-blue-700 rounded-full flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:shadow-lg group-hover:shadow-blue-600/25">
                                    <!-- Facebook Icon -->
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.406.593 24 
                        1.325 24H12.82v-9.294H9.692V11.41h3.128V8.413c0-3.1 
                        1.894-4.788 4.659-4.788 1.325 0 2.464.099 
                        2.796.143v3.24h-1.918c-1.505 0-1.796.715-1.796 
                        1.764v2.309h3.587l-.467 3.296h-3.12V24h6.116C23.406 
                        24 24 23.406 24 22.676V1.325C24 
                        .593 23.406 0 22.675 0z"/>
                    </svg>
                            </div>
                        <span class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 text-sm text-gray-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Facebook
                        </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    
    <!-- footer -->
    @include('components.footer')

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Form handling and animations
        const form = document.querySelector('form');
        const inputs = document.querySelectorAll('input, textarea');

        // Enhanced input focus effects
        inputs.forEach(input => {
            input.addEventListener('focus', () => {
                input.style.transform = 'scale(1.02)';
                input.style.boxShadow = '0 0 20px rgba(34, 211, 238, 0.3)';
            });

            input.addEventListener('blur', () => {
                input.style.transform = 'scale(1)';
                input.style.boxShadow = 'none';
            });

            input.addEventListener('input', () => {
                if (input.value) {
                    input.classList.add('has-value');
                } else {
                    input.classList.remove('has-value');
                }
            });
        });

        // Form submission
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            
            // Animate button
            submitBtn.textContent = 'Sending...';
            submitBtn.style.background = 'linear-gradient(to right, #10b981, #06b6d4)';
            
            // Simulate form submission
            setTimeout(() => {
                submitBtn.textContent = 'Message Sent!';
                submitBtn.style.background = 'linear-gradient(to right, #059669, #0891b2)';
                
                setTimeout(() => {
                    submitBtn.textContent = originalText;
                    submitBtn.style.background = 'linear-gradient(to right, #06b6d4, #8b5cf6)';
                    form.reset();
                }, 2000);
            }, 2000);
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
                    entry.target.style.transform = 'translateX(0) translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all animatable elements
        document.querySelectorAll('.animate-slideInLeft, .animate-slideInRight, .animate-slideInUp').forEach(el => {
            el.style.opacity = '0';
            if (el.classList.contains('animate-slideInLeft')) {
                el.style.transform = 'translateX(-50px)';
            } else if (el.classList.contains('animate-slideInRight')) {
                el.style.transform = 'translateX(50px)';
            } else {
                el.style.transform = 'translateY(50px)';
            }
            el.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
            observer.observe(el);
        });

        // Add loading animation
        window.addEventListener('load', () => {
            document.body.classList.add('animate-fadeIn');
        });

        // Enhanced social icon interactions
        document.querySelectorAll('.group.relative').forEach(link => {
            link.addEventListener('mouseenter', () => {
                const icon = link.querySelector('div');
                icon.style.transform = 'scale(1.1) rotate(5deg)';
            });
            
            link.addEventListener('mouseleave', () => {
                const icon = link.querySelector('div');
                icon.style.transform = 'scale(1) rotate(0deg)';
            });
        });

        // Floating label animation
        inputs.forEach(input => {
            const label = input.nextElementSibling;
            
            input.addEventListener('focus', () => {
                label.style.color = '#06b6d4';
                label.style.fontWeight = '600';
            });
            
            input.addEventListener('blur', () => {
                if (!input.value) {
                    label.style.color = '#d1d5db';
                    label.style.fontWeight = '400';
                }
            });
        });

        // Particle animation in background
        function createParticle() {
            const particle = document.createElement('div');
            particle.className = 'fixed w-1 h-1 bg-cyan-400 rounded-full animate-pulse pointer-events-none';
            particle.style.left = Math.random() * window.innerWidth + 'px';
            particle.style.top = Math.random() * window.innerHeight + 'px';
            particle.style.zIndex = '1';
            
            document.body.appendChild(particle);
            
            setTimeout(() => {
                particle.remove();
            }, 4000);
        }

        // Create particles occasionally
        setInterval(createParticle, 3000);
    </script>
</body>
</html>