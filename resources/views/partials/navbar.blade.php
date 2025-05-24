<nav class="w-full fixed top-0 z-50 bg-[#2e3546]/80 backdrop-blur-sm
text-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center lg:ml-[-225px] logoDiv">
                <span class="text-xl font-bold">Portfolio Milan Van Winkel</span>
            </div>
            <!-- Desktop menu -->
            <div class="hidden md:flex gap-[60px] space-x-6 mr-[-225px]">
                <a href="/" class="hover:text-gray-300">Home</a>
                <a href="/cv" class="hover:text-gray-300">CV</a>
                <a href="/projects" class="hover:text-gray-300">Projecten</a>
                <a href="/over-mij" class="hover:text-gray-300">Over Mij</a>
                <a href="/contact" class="hover:text-gray-300">Contact</a>
            </div>
            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button id="menu-toggle" class="focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div id="mobile-menu" class="hidden md:hidden mt-2 space-y-2 pb-4">
        <a href="/" class="block px-4 py-2 hover:bg-slate-700 rounded">Home</a>
        <a href="/cv" class="block px-4 py-2 hover:bg-slate-700 rounded">CV</a>
        <a href="/projects" class="block px-4 py-2 hover:bg-slate-700 rounded">Projecten</a>
        <a href="/over-mij" class="block px-4 py-2 hover:bg-slate-700 rounded">Over Mij</a>
        <a href="/contact" class="block px-4 py-2 hover:bg-slate-700 rounded">Contact</a>
    </div>
</nav>
