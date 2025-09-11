<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs - Aiman Al Mahmud</title>
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

    <!-- Blogs Section -->
    <main class="pt-24 pb-16 px-6">
        <div class="container mx-auto">
            <!-- Header -->
            <div class="text-center mb-16 animate-slideInUp">
                <h1 class="text-5xl md:text-6xl font-orbitron font-bold text-white mb-4">
                    Tech <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-400">Blog</span>
                </h1>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    Insights, tutorials, and thoughts on modern web development and emerging technologies
                </p>
            </div>

            <div class="grid lg:grid-cols-4 gap-8">
                <!-- Sidebar -->
                <div class="lg:col-span-1 space-y-8">
                    <!-- Categories -->
                    <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-6 animate-slideInLeft">
                        <h3 class="text-xl font-orbitron font-bold text-white mb-4">Categories</h3>
                        <div class="space-y-3">
                            <a href="#" class="block text-gray-300 hover:text-cyan-400 transition-colors duration-300 flex justify-between">
                                <span>Web Development</span>
                                <span class="text-cyan-400">12</span>
                            </a>
                            <a href="#" class="block text-gray-300 hover:text-cyan-400 transition-colors duration-300 flex justify-between">
                                <span>JavaScript</span>
                                <span class="text-purple-400">8</span>
                            </a>
                            <a href="#" class="block text-gray-300 hover:text-cyan-400 transition-colors duration-300 flex justify-between">
                                <span>Laravel</span>
                                <span class="text-emerald-400">6</span>
                            </a>
                            <a href="#" class="block text-gray-300 hover:text-cyan-400 transition-colors duration-300 flex justify-between">
                                <span>Cloud Computing</span>
                                <span class="text-yellow-400">4</span>
                            </a>
                            <a href="#" class="block text-gray-300 hover:text-cyan-400 transition-colors duration-300 flex justify-between">
                                <span>AI & ML</span>
                                <span class="text-pink-400">3</span>
                            </a>
                        </div>
                    </div>

                    <!-- Popular Tags -->
                    <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-6 animate-slideInLeft">
                        <h3 class="text-xl font-orbitron font-bold text-white mb-4">Popular Tags</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-cyan-400/20 text-cyan-300 rounded-full text-sm hover:bg-cyan-400/30 transition-colors cursor-pointer">#react</span>
                            <span class="px-3 py-1 bg-purple-400/20 text-purple-300 rounded-full text-sm hover:bg-purple-400/30 transition-colors cursor-pointer">#laravel</span>
                            <span class="px-3 py-1 bg-emerald-400/20 text-emerald-300 rounded-full text-sm hover:bg-emerald-400/30 transition-colors cursor-pointer">#nodejs</span>
                            <span class="px-3 py-1 bg-yellow-400/20 text-yellow-300 rounded-full text-sm hover:bg-yellow-400/30 transition-colors cursor-pointer">#aws</span>
                            <span class="px-3 py-1 bg-pink-400/20 text-pink-300 rounded-full text-sm hover:bg-pink-400/30 transition-colors cursor-pointer">#api</span>
                            <span class="px-3 py-1 bg-indigo-400/20 text-indigo-300 rounded-full text-sm hover:bg-indigo-400/30 transition-colors cursor-pointer">#database</span>
                            <span class="px-3 py-1 bg-teal-400/20 text-teal-300 rounded-full text-sm hover:bg-teal-400/30 transition-colors cursor-pointer">#tailwind</span>
                            <span class="px-3 py-1 bg-orange-400/20 text-orange-300 rounded-full text-sm hover:bg-orange-400/30 transition-colors cursor-pointer">#performance</span>
                        </div>
                    </div>

                    <!-- Recent Posts -->
                    <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-6 animate-slideInLeft">
                        <h3 class="text-xl font-orbitron font-bold text-white mb-4">Recent Posts</h3>
                        <div class="space-y-4">
                            <a href="#" class="block group">
                                <h4 class="text-sm font-semibold text-white group-hover:text-cyan-400 transition-colors duration-300 mb-1">
                                    Building Scalable APIs with Laravel
                                </h4>
                                <p class="text-xs text-gray-400">Jan 15, 2025</p>
                            </a>
                            <a href="#" class="block group">
                                <h4 class="text-sm font-semibold text-white group-hover:text-cyan-400 transition-colors duration-300 mb-1">
                                    React Performance Optimization
                                </h4>
                                <p class="text-xs text-gray-400">Jan 10, 2025</p>
                            </a>
                            <a href="#" class="block group">
                                <h4 class="text-sm font-semibold text-white group-hover:text-cyan-400 transition-colors duration-300 mb-1">
                                    AWS Deployment Strategies
                                </h4>
                                <p class="text-xs text-gray-400">Jan 05, 2025</p>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Blog Posts Grid -->
                <div class="lg:col-span-3">
                    <div class="grid md:grid-cols-2 gap-8">
                        <!-- Blog Post 1 -->
                        <article class="blog-card group bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl overflow-hidden hover:bg-white/15 transition-all duration-300 hover:scale-105">
                            <div class="relative overflow-hidden">
                                <div class="w-full h-48 bg-gradient-to-br from-cyan-500 to-purple-500 flex items-center justify-center">
                                    <div class="text-white text-2xl font-orbitron font-bold">Laravel 11</div>
                                </div>
                                <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
                                <div class="absolute top-4 left-4">
                                    <span class="px-3 py-1 bg-cyan-400 text-white rounded-full text-xs font-semibold">Web Development</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center text-gray-400 text-sm mb-3">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    January 18, 2025
                                    <span class="mx-2">•</span>
                                    <span>5 min read</span>
                                </div>
                                <h2 class="text-xl font-orbitron font-bold text-white mb-3 group-hover:text-cyan-400 transition-colors duration-300">
                                    What's New in Laravel 11: A Complete Guide
                                </h2>
                                <p class="text-gray-300 text-sm leading-relaxed mb-4">
                                    Explore the latest features and improvements in Laravel 11, including enhanced performance, 
                                    new artisan commands, and developer experience enhancements that will revolutionize your workflow.
                                </p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="px-2 py-1 bg-purple-400/20 text-purple-300 rounded-full text-xs">#laravel</span>
                                    <span class="px-2 py-1 bg-emerald-400/20 text-emerald-300 rounded-full text-xs">#php</span>
                                    <span class="px-2 py-1 bg-cyan-400/20 text-cyan-300 rounded-full text-xs">#backend</span>
                                </div>
                                <a href="#" class="inline-flex items-center text-cyan-400 hover:text-purple-400 transition-colors duration-300 font-semibold text-sm">
                                    Read More
                                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>

                        <!-- Blog Post 2 -->
                        <article class="blog-card group bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl overflow-hidden hover:bg-white/15 transition-all duration-300 hover:scale-105">
                            <div class="relative overflow-hidden">
                                <div class="w-full h-48 bg-gradient-to-br from-purple-500 to-emerald-500 flex items-center justify-center">
                                    <div class="text-white text-2xl font-orbitron font-bold">React 18</div>
                                </div>
                                <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
                                <div class="absolute top-4 left-4">
                                    <span class="px-3 py-1 bg-purple-400 text-white rounded-full text-xs font-semibold">JavaScript</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center text-gray-400 text-sm mb-3">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    January 15, 2025
                                    <span class="mx-2">•</span>
                                    <span>7 min read</span>
                                </div>
                                <h2 class="text-xl font-orbitron font-bold text-white mb-3 group-hover:text-purple-400 transition-colors duration-300">
                                    React 18 Concurrent Features Deep Dive
                                </h2>
                                <p class="text-gray-300 text-sm leading-relaxed mb-4">
                                    Master React 18's concurrent features including Suspense, useTransition, and automatic batching. 
                                    Learn how these features can dramatically improve your app's user experience.
                                </p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="px-2 py-1 bg-cyan-400/20 text-cyan-300 rounded-full text-xs">#react</span>
                                    <span class="px-2 py-1 bg-yellow-400/20 text-yellow-300 rounded-full text-xs">#javascript</span>
                                    <span class="px-2 py-1 bg-emerald-400/20 text-emerald-300 rounded-full text-xs">#frontend</span>
                                </div>
                                <a href="#" class="inline-flex items-center text-purple-400 hover:text-cyan-400 transition-colors duration-300 font-semibold text-sm">
                                    Read More
                                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>

                        <!-- Blog Post 3 -->
                        <article class="blog-card group bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl overflow-hidden hover:bg-white/15 transition-all duration-300 hover:scale-105">
                            <div class="relative overflow-hidden">
                                <div class="w-full h-48 bg-gradient-to-br from-emerald-500 to-cyan-500 flex items-center justify-center">
                                    <div class="text-white text-2xl font-orbitron font-bold">Node.js</div>
                                </div>
                                <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
                                <div class="absolute top-4 left-4">
                                    <span class="px-3 py-1 bg-emerald-400 text-white rounded-full text-xs font-semibold">Backend</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center text-gray-400 text-sm mb-3">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    January 12, 2025
                                    <span class="mx-2">•</span>
                                    <span>6 min read</span>
                                </div>
                                <h2 class="text-xl font-orbitron font-bold text-white mb-3 group-hover:text-emerald-400 transition-colors duration-300">
                                    Building High-Performance APIs with Node.js
                                </h2>
                                <p class="text-gray-300 text-sm leading-relaxed mb-4">
                                    Learn advanced techniques for building scalable and high-performance APIs using Node.js, 
                                    including clustering, caching strategies, and database optimization techniques.
                                </p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="px-2 py-1 bg-emerald-400/20 text-emerald-300 rounded-full text-xs">#nodejs</span>
                                    <span class="px-2 py-1 bg-blue-400/20 text-blue-300 rounded-full text-xs">#api</span>
                                    <span class="px-2 py-1 bg-orange-400/20 text-orange-300 rounded-full text-xs">#performance</span>
                                </div>
                                <a href="#" class="inline-flex items-center text-emerald-400 hover:text-cyan-400 transition-colors duration-300 font-semibold text-sm">
                                    Read More
                                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>

                        <!-- Blog Post 4 -->
                        <article class="blog-card group bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl overflow-hidden hover:bg-white/15 transition-all duration-300 hover:scale-105">
                            <div class="relative overflow-hidden">
                                <div class="w-full h-48 bg-gradient-to-br from-yellow-500 to-orange-500 flex items-center justify-center">
                                    <div class="text-white text-2xl font-orbitron font-bold">AWS</div>
                                </div>
                                <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
                                <div class="absolute top-4 left-4">
                                    <span class="px-3 py-1 bg-yellow-400 text-black rounded-full text-xs font-semibold">Cloud</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center text-gray-400 text-sm mb-3">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    January 10, 2025
                                    <span class="mx-2">•</span>
                                    <span>8 min read</span>
                                </div>
                                <h2 class="text-xl font-orbitron font-bold text-white mb-3 group-hover:text-yellow-400 transition-colors duration-300">
                                    AWS Lambda vs EC2: Choosing the Right Service
                                </h2>
                                <p class="text-gray-300 text-sm leading-relaxed mb-4">
                                    A comprehensive comparison of AWS Lambda and EC2 services, helping you make informed decisions 
                                    about which service fits your specific use case and budget requirements.
                                </p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="px-2 py-1 bg-yellow-400/20 text-yellow-300 rounded-full text-xs">#aws</span>
                                    <span class="px-2 py-1 bg-orange-400/20 text-orange-300 rounded-full text-xs">#serverless</span>
                                    <span class="px-2 py-1 bg-red-400/20 text-red-300 rounded-full text-xs">#cloud</span>
                                </div>
                                <a href="#" class="inline-flex items-center text-yellow-400 hover:text-orange-400 transition-colors duration-300 font-semibold text-sm">
                                    Read More
                                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>

                        <!-- Blog Post 5 -->
                        <article class="blog-card group bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl overflow-hidden hover:bg-white/15 transition-all duration-300 hover:scale-105">
                            <div class="relative overflow-hidden">
                                <div class="w-full h-48 bg-gradient-to-br from-pink-500 to-purple-500 flex items-center justify-center">
                                    <div class="text-white text-2xl font-orbitron font-bold">TailwindCSS</div>
                                </div>
                                <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
                                <div class="absolute top-4 left-4">
                                    <span class="px-3 py-1 bg-pink-400 text-white rounded-full text-xs font-semibold">CSS</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center text-gray-400 text-sm mb-3">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    January 08, 2025
                                    <span class="mx-2">•</span>
                                    <span>4 min read</span>
                                </div>
                                <h2 class="text-xl font-orbitron font-bold text-white mb-3 group-hover:text-pink-400 transition-colors duration-300">
                                    Advanced TailwindCSS Techniques and Best Practices
                                </h2>
                                <p class="text-gray-300 text-sm leading-relaxed mb-4">
                                    Master advanced TailwindCSS techniques including custom utilities, component patterns, 
                                    and optimization strategies for building maintainable and scalable stylesheets.
                                </p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="px-2 py-1 bg-pink-400/20 text-pink-300 rounded-full text-xs">#tailwind</span>
                                    <span class="px-2 py-1 bg-purple-400/20 text-purple-300 rounded-full text-xs">#css</span>
                                    <span class="px-2 py-1 bg-indigo-400/20 text-indigo-300 rounded-full text-xs">#design</span>
                                </div>
                                <a href="#" class="inline-flex items-center text-pink-400 hover:text-purple-400 transition-colors duration-300 font-semibold text-sm">
                                    Read More
                                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>

                        <!-- Blog Post 6 -->
                        <article class="blog-card group bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl overflow-hidden hover:bg-white/15 transition-all duration-300 hover:scale-105">
                            <div class="relative overflow-hidden">
                                <div class="w-full h-48 bg-gradient-to-br from-indigo-500 to-blue-500 flex items-center justify-center">
                                    <div class="text-white text-2xl font-orbitron font-bold">DevOps</div>
                                </div>
                                <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
                                <div class="absolute top-4 left-4">
                                    <span class="px-3 py-1 bg-indigo-400 text-white rounded-full text-xs font-semibold">DevOps</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center text-gray-400 text-sm mb-3">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    January 05, 2025
                                    <span class="mx-2">•</span>
                                    <span>9 min read</span>
                                </div>
                                <h2 class="text-xl font-orbitron font-bold text-white mb-3 group-hover:text-indigo-400 transition-colors duration-300">
                                    Docker and Kubernetes: A Developer's Guide
                                </h2>
                                <p class="text-gray-300 text-sm leading-relaxed mb-4">
                                    Complete guide to containerization with Docker and orchestration with Kubernetes. 
                                    Learn how to deploy and manage scalable applications in production environments.
                                </p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="px-2 py-1 bg-indigo-400/20 text-indigo-300 rounded-full text-xs">#docker</span>
                                    <span class="px-2 py-1 bg-blue-400/20 text-blue-300 rounded-full text-xs">#kubernetes</span>
                                    <span class="px-2 py-1 bg-teal-400/20 text-teal-300 rounded-full text-xs">#devops</span>
                                </div>
                                <a href="#" class="inline-flex items-center text-indigo-400 hover:text-blue-400 transition-colors duration-300 font-semibold text-sm">
                                    Read More
                                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>
                    </div>

                    <!-- Load More Button -->
                    <div class="text-center mt-12">
                        <button class="px-8 py-4 bg-gradient-to-r from-cyan-400 to-purple-400 text-white font-semibold rounded-full transition-all duration-300 hover:scale-105 hover:shadow-lg hover:shadow-cyan-400/25">
                            Load More Articles
                        </button>
                    </div>
                </div>
            </div>

            <!-- Newsletter Section -->
            <div class="mt-20 text-center animate-slideInUp">
                <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 hover:bg-white/15 transition-all duration-300">
                    <h2 class="text-3xl font-orbitron font-bold text-white mb-6">
                        Subscribe to My <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-400">Newsletter</span>
                    </h2>
                    <p class="text-gray-300 text-lg mb-8 max-w-2xl mx-auto">
                        Get the latest articles, tutorials, and insights delivered straight to your inbox. 
                        No spam, just valuable content for developers.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center max-w-md mx-auto">
                        <input 
                            type="email" 
                            placeholder="Enter your email" 
                            class="flex-1 px-6 py-3 bg-white/10 border border-white/20 rounded-full text-white placeholder-gray-400 focus:outline-none focus:border-cyan-400 transition-colors duration-300"
                        >
                        <button class="px-8 py-3 bg-gradient-to-r from-cyan-400 to-purple-400 text-white font-semibold rounded-full transition-all duration-300 hover:scale-105 hover:shadow-lg hover:shadow-cyan-400/25">
                            Subscribe
                        </button>
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

        // Staggered animation for blog cards
        function animateBlogs() {
            const blogCards = document.querySelectorAll('.blog-card');
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

            blogCards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px) scale(0.95)';
                card.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
                observer.observe(card);
            });
        }

        // Initialize animations
        document.addEventListener('DOMContentLoaded', () => {
            animateBlogs();
        });

        // Enhanced hover effects
        document.querySelectorAll('.blog-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                const image = card.querySelector('div[class*="bg-gradient"]');
                if (image) {
                    image.style.transform = 'scale(1.1)';
                }
            });
            
            card.addEventListener('mouseleave', () => {
                const image = card.querySelector('div[class*="bg-gradient"]');
                if (image) {
                    image.style.transform = 'scale(1)';
                }
            });
        });

        // Scroll animations for sidebar and other elements
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

        // Observe sidebar and header elements
        document.querySelectorAll('.animate-slideInLeft, .animate-slideInUp').forEach(el => {
            el.style.opacity = '0';
            if (el.classList.contains('animate-slideInLeft')) {
                el.style.transform = 'translateX(-50px)';
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

        // Newsletter form interaction
        const emailInput = document.querySelector('input[type="email"]');
        emailInput.addEventListener('focus', () => {
            emailInput.style.transform = 'scale(1.02)';
            emailInput.style.boxShadow = '0 0 20px rgba(34, 211, 238, 0.3)';
        });

        emailInput.addEventListener('blur', () => {
            emailInput.style.transform = 'scale(1)';
            emailInput.style.boxShadow = 'none';
        });
    </script>
</body>
</html>