</main>
<!-- <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{url('assets/js/navbar.js')}}"></script>

<footer class="bg-[#181828]/90 backdrop-blur border-t border-white/10 text-white py-6">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-center gap-4">
            <!-- Social Media Icons -->
            <div class="flex space-x-6">
                <a href="https://github.com/MilanVW1" target="_blank" class="hover:text-[#6EE7B7] transition-colors duration-300">
                    <!-- GitHub icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                        <path d="M12 .5C5.73.5.5 5.73.5 12c0 5.08 3.29 9.38 7.86 10.91.58.11.79-.25.79-.56 0-.28-.01-1.02-.01-2-3.2.7-3.88-1.54-3.88-1.54-.53-1.34-1.3-1.7-1.3-1.7-1.06-.73.08-.72.08-.72 1.17.08 1.78 1.2 1.78 1.2 1.04 1.77 2.74 1.26 3.41.96.11-.75.41-1.26.74-1.55-2.55-.29-5.24-1.28-5.24-5.7 0-1.26.45-2.3 1.2-3.11-.12-.3-.52-1.5.12-3.12 0 0 .98-.31 3.2 1.19.93-.26 1.93-.39 2.92-.39.99 0 1.99.13 2.92.39 2.22-1.5 3.2-1.19 3.2-1.19.64 1.62.24 2.82.12 3.12.75.81 1.2 1.85 1.2 3.11 0 4.43-2.7 5.41-5.27 5.69.42.36.8 1.1.8 2.22 0 1.61-.01 2.91-.01 3.31 0 .31.21.68.8.56A10.99 10.99 0 0 0 23.5 12C23.5 5.73 18.27.5 12 .5z"/>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/in/milan-vw-0b7a34277/" target="_blank" class="hover:text-[#6EE7B7] transition-colors duration-300">
                    <!-- LinkedIn icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-6 w-6" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                    </svg>
                </a>
            </div>

            <!-- Copyright -->
            <div class="text-sm text-gray-400 text-center md:text-left">
                &copy; {{ date('Y') }} Milan Van Winkel. Alle rechten voorbehouden.
            </div>
        </div>
    </div>
</footer>
</body>
</html>
