<nav class="fixed top-0 w-full z-50 bg-white/10 backdrop-blur-lg border-b border-white/20">
    <div class="container mx-auto px-6 py-4">
        <div class="flex justify-between items-center">
            <div class="text-white font-orbitron font-bold text-xl">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-cyan-400 hover:text-purple-400' : 'text-white hover:text-cyan-400' }} transition-colors duration-300">
                    <span class="text-cyan-400">Ai</span>man
                </a>
            </div>
            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-cyan-400 hover:text-purple-400' : 'text-white hover:text-cyan-400' }} transition-colors duration-300">Home</a>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-cyan-400 hover:text-purple-400' : 'text-white hover:text-cyan-400' }} transition-colors duration-300">About</a>
                <a href="{{ route('education') }}" class="{{ request()->routeIs('education') ? 'text-cyan-400 hover:text-purple-400' : 'text-white hover:text-cyan-400' }} transition-colors duration-300">Education</a>
                <a href="{{ route('skills') }}" class="{{ request()->routeIs('skills') ? 'text-cyan-400 hover:text-purple-400' : 'text-white hover:text-cyan-400' }} transition-colors duration-300">Skills</a>
                <a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'text-cyan-400 hover:text-purple-400' : 'text-white hover:text-cyan-400' }} transition-colors duration-300">Projects</a>
                <a href="{{ route('blogs') }}" class="{{ request()->routeIs('blogs') ? 'text-cyan-400 hover:text-purple-400' : 'text-white hover:text-cyan-400' }} transition-colors duration-300">Blogs</a>
                <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-cyan-400 hover:text-purple-400' : 'text-white hover:text-cyan-400' }} transition-colors duration-300">Contact</a>
            </div>
            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobileMenuBtn" class="text-white hover:text-cyan-400 transition-colors duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobileMenu" class="md:hidden hidden mt-4 pb-4">
            <div class="flex flex-col space-y-4">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-cyan-400 hover:text-purple-400' : 'text-white hover:text-cyan-400' }} transition-colors duration-300">Home</a>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-cyan-400 hover:text-purple-400' : 'text-white hover:text-cyan-400' }} transition-colors duration-300">About</a>
                <a href="{{ route('education') }}" class="{{ request()->routeIs('education') ? 'text-cyan-400 hover:text-purple-400' : 'text-white hover:text-cyan-400' }} transition-colors duration-300">Education</a>
                <a href="{{ route('skills') }}" class="{{ request()->routeIs('skills') ? 'text-cyan-400 hover:text-purple-400' : 'text-white hover:text-cyan-400' }} transition-colors duration-300">Skills</a>
                <a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'text-cyan-400 hover:text-purple-400' : 'text-white hover:text-cyan-400' }} transition-colors duration-300">Projects</a>
                <a href="{{ route('blogs') }}" class="{{ request()->routeIs('blogs') ? 'text-cyan-400 hover:text-purple-400' : 'text-white hover:text-cyan-400' }} transition-colors duration-300">Blogs</a>
                <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-cyan-400 hover:text-purple-400' : 'text-white hover:text-cyan-400' }} transition-colors duration-300">Contact</a>
            </div>
        </div>
    </div>
</nav>
