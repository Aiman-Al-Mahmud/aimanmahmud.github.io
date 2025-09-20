@extends('layouts.app')

@section('content')

    <!-- Navbar -->
     @include('components.navbar')

    <!-- Hero Section -->
    <main class="min-h-screen flex items-center justify-center px-6 pt-20">
        <div class="container mx-auto text-center">
            <!-- Animated Particles Background -->
            <div class="absolute inset-0 overflow-hidden">
                <div class="particle absolute w-2 h-2 bg-cyan-400 rounded-full animate-pulse" style="top: 20%; left: 10%; animation-delay: 0s;"></div>
                <div class="particle absolute w-1 h-1 bg-purple-400 rounded-full animate-pulse" style="top: 30%; left: 80%; animation-delay: 1s;"></div>
                <div class="particle absolute w-3 h-3 bg-emerald-400 rounded-full animate-pulse" style="top: 60%; left: 15%; animation-delay: 2s;"></div>
                <div class="particle absolute w-1 h-1 bg-cyan-400 rounded-full animate-pulse" style="top: 80%; left: 70%; animation-delay: 3s;"></div>
                <div class="particle absolute w-2 h-2 bg-purple-400 rounded-full animate-pulse" style="top: 15%; left: 60%; animation-delay: 4s;"></div>
            </div>

            <!-- Profile Image -->
            <div class="mb-8 animate-fadeIn">
                <div class="relative inline-block">
                    <div class="w-48 h-48 mx-auto rounded-full bg-gradient-to-r from-cyan-400 to-purple-400 p-1 animate-float">
                        <div class="w-full h-full rounded-full bg-gray-800 flex items-center justify-center">
                            <div class="w-40 h-40 rounded-full bg-gradient-to-br from-cyan-500 to-purple-500 flex items-center justify-center text-6xl font-orbitron font-bold text-white">
                                <img src="images/portfolio_image1.jpg" alt="Aiman AL Mahmud" class="w-full h-full object-cover rounded-full">
                            </div>
                        </div>
                    </div>
                    <div class="absolute inset-0 rounded-full bg-gradient-to-r from-cyan-400 to-purple-400 animate-pulse-glow -z-10"></div>
                </div>
            </div>

            <!-- Hero Content -->
            <div class="animate-slideInUp">
                <h1 class="text-5xl md:text-7xl font-orbitron font-bold text-white mb-4">
                    Hi, I'm <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-400">Aiman Al Mahmud</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-300 mb-8 font-inter">
                    Software Engineer | Problem Solver | AI Solutions Architect
                </p>
                <p class="text-lg text-gray-400 mb-12 max-w-2xl mx-auto leading-relaxed">
                    Passionate about creating innovative solutions that bridge technology and human needs. 
                    From scalable applications to AI-powered education tools like AIELTS,I build scalable applications with clean code and futuristic design
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <a href="{{ route('projects') }}" class="group relative px-8 py-4 bg-gradient-to-r from-cyan-400 to-purple-400 text-white font-semibold rounded-full transition-all duration-300 hover:scale-105 hover:shadow-lg hover:shadow-cyan-400/25">
                        <span class="relative z-10">View Projects</span>
                        <div class="absolute inset-0 bg-white/20 rounded-full scale-0 group-hover:scale-100 transition-transform duration-300"></div>
                    </a>
                    <a href="{{ route('contact') }}" class="group px-8 py-4 bg-white/10 backdrop-blur-lg border border-white/20 text-white font-semibold rounded-full transition-all duration-300 hover:scale-105 hover:bg-white/20 hover:border-cyan-400/50">
                        Contact Me
                    </a>
                </div>
            </div>

            <!-- Floating Icons -->
            <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce-slow">
                <div class="w-6 h-6 border-2 border-cyan-400 rounded-full flex items-center justify-center">
                    <div class="w-2 h-2 bg-cyan-400 rounded-full animate-pulse"></div>
                </div>
            </div>
        </div>
    </main>

        <!-- ========================= -->
    <!-- Featured Works Section -->
    <!-- ========================= -->
    <section class="py-20 px-6">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-orbitron font-bold text-white mb-12 animate-slideInUp">
                Featured <span class="text-cyan-400">Works</span>
            </h2>
            <div class="grid gap-8 md:grid-cols-3">
                <!-- Project Card -->
                <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-6 transform transition duration-500 hover:scale-105 hover:shadow-xl hover:shadow-cyan-400/20 animate-slideInUp">
                    <div class="h-40 bg-gradient-to-br from-cyan-400/20 to-purple-400/20 rounded-xl mb-4"></div>
                    <h3 class="text-xl font-semibold text-white mb-2">Project One</h3>
                    <p class="text-gray-400 mb-4">A short description of your project goes here.</p>
                    <a href="{{ route('projects') }}" class="text-cyan-400 hover:text-purple-400 transition-colors">View More →</a>
                </div>
                <!-- Project Card -->
                <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-6 transform transition duration-500 hover:scale-105 hover:shadow-xl hover:shadow-cyan-400/20 animate-slideInUp">
                    <div class="h-40 bg-gradient-to-br from-purple-400/20 to-emerald-400/20 rounded-xl mb-4"></div>
                    <h3 class="text-xl font-semibold text-white mb-2">Project Two</h3>
                    <p class="text-gray-400 mb-4">Another project highlight can go here.</p>
                    <a href="{{ route('projects') }}" class="text-cyan-400 hover:text-purple-400 transition-colors">View More →</a>
                </div>
                <!-- Project Card -->
                <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-6 transform transition duration-500 hover:scale-105 hover:shadow-xl hover:shadow-cyan-400/20 animate-slideInUp">
                    <div class="h-40 bg-gradient-to-br from-emerald-400/20 to-cyan-400/20 rounded-xl mb-4"></div>
                    <h3 class="text-xl font-semibold text-white mb-2">Project Three</h3>
                    <p class="text-gray-400 mb-4">One more project teaser in this section.</p>
                    <a href="{{ route('projects') }}" class="text-cyan-400 hover:text-purple-400 transition-colors">View More →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================= -->
    <!-- Featured Blog Section -->
    <!-- ========================= -->
    <section class="py-20 px-6 bg-white/5 backdrop-blur-lg border-t border-white/10">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-orbitron font-bold text-white mb-12 animate-slideInUp">
                Featured <span class="text-purple-400">Blogs</span>
            </h2>
            <div class="grid gap-8 md:grid-cols-3">
                <!-- Blog Card -->
                <div class="bg-white/10 border border-white/20 rounded-2xl overflow-hidden hover:scale-105 transform transition duration-500 animate-slideInUp">
                    <div class="h-40 bg-gradient-to-br from-purple-400/20 to-cyan-400/20"></div>
                    <div class="p-6 text-left">
                    <h3 class="text-xl font-semibold text-white mb-2">Blog Title One</h3>
                    <p class="text-gray-400 mb-4">A short teaser of your blog article goes here.</p>
                    <a href="{{ route('blogs') }}" class="text-purple-400 hover:text-cyan-400 transition-colors">Read More →</a>
                    </div>
                </div>
                <!-- Blog Card -->
                <div class="bg-white/10 border border-white/20 rounded-2xl overflow-hidden hover:scale-105 transform transition duration-500 animate-slideInUp">
                    <div class="h-40 bg-gradient-to-br from-cyan-400/20 to-emerald-400/20"></div>
                    <div class="p-6 text-left">
                        <h3 class="text-xl font-semibold text-white mb-2">Blog Title Two</h3>
                        <p class="text-gray-400 mb-4">Another highlight from your blog list.</p>
                        <a href="blogs.html" class="text-purple-400 hover:text-cyan-400 transition-colors">Read More →</a>
                    </div>
                </div>
                <!-- Blog Card -->
                <div class="bg-white/10 border border-white/20 rounded-2xl overflow-hidden hover:scale-105 transform transition duration-500 animate-slideInUp">
                    <div class="h-40 bg-gradient-to-br from-emerald-400/20 to-purple-400/20"></div>
                    <div class="p-6 text-left">
                        <h3 class="text-xl font-semibold text-white mb-2">Blog Title Three</h3>
                        <p class="text-gray-400 mb-4">One more article preview can be shown here.</p>
                        <a href="blogs.html" class="text-purple-400 hover:text-cyan-400 transition-colors">Read More →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================= -->
    <!-- Contact CTA Section -->
    <!-- ========================= -->
    <section class="py-20 px-6">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-orbitron font-bold text-white mb-6 animate-slideInUp">
                Let’s <span class="text-emerald-400">Build</span> Something Amazing Together
            </h2>
            <p class="text-lg text-gray-400 mb-8 max-w-2xl mx-auto animate-slideInUp">
                I’m always excited to collaborate on meaningful projects.  
                Let’s connect and bring your ideas to life with clean code and futuristic design.
            </p>
            <a href="contact.html" class="inline-block px-8 py-4 bg-gradient-to-r from-cyan-400 to-purple-400 text-white font-semibold rounded-full transition-transform transform hover:scale-105 hover:shadow-lg hover:shadow-cyan-400/30 animate-slideInUp">
                Contact Me
            </a>
        </div>
    </section>

    <!-- Footer -->
    @include('components.footer')

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Add scroll animations
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

        // Animate particles
        function animateParticles() {
            const particles = document.querySelectorAll('.particle');
            particles.forEach(particle => {
                const randomX = Math.random() * window.innerWidth;
                const randomY = Math.random() * window.innerHeight;
                
                particle.style.transform = `translate(${Math.sin(Date.now() * 0.001) * 50}px, ${Math.cos(Date.now() * 0.001) * 30}px)`;
            });
            requestAnimationFrame(animateParticles);
        }

        // Start particle animation
        animateParticles();

        // Add loading animation
        window.addEventListener('load', () => {
            document.body.classList.add('animate-fadeIn');
        });
    </script>
@endsection
