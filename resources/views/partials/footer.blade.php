</main>
    <footer id="footer" class="footer position-relative light-background">

        <div class="container">
            <div class="copyright text-center ">
                <p>© <span>Copyright</span> {{ date("Y") }}<strong class="px-1 sitename">Milan Van Winkel</strong> <span>Alle rechten voorbehouden</span></p>
            </div>
            <div class="credits">
                Gemaakt in Laravel,
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>, Distributed by <a href="https://themewagon.com">ThemeWagon</a>
            </div>
            <div class="credits text-center justify-evenly">
                <a href="{{url("/privacy")}}">Privacybeleid</a>
                <span> | </span>
                <a href="{{url("/cookies")}}">Cookiebeleid</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    @include("partials.cookiebanner")

    <!-- Vendor JS Files -->
    <script src="{{ url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ url("assets/vendor/php-email-form/validate.js") }}"></script>
    <script src="{{ url("assets/vendor/aos/aos.js") }}"></script>
    <script src="{{ url("assets/vendor/typed.js/typed.umd.js") }}"></script>
    <script src="{{ url("assets/vendor/purecounter/purecounter_vanilla.js") }}"></script>
    <script src="{{ url("assets/vendor/waypoints/noframework.waypoints.js") }}"></script>
    <script src="{{ url("assets/vendor/glightbox/js/glightbox.min.js") }}"></script>
    <script src="{{ url("assets/vendor/imagesloaded/imagesloaded.pkgd.min.js") }}"></script>
    <script src="{{ url("assets/vendor/isotope-layout/isotope.pkgd.min.js") }}"></script>

    <!-- Main JS File -->
    <script src="{{ url("assets/js/main.js") }}"></script>
    <script src="{{ url("assets/js/hide-cookiebanner.js") }}"></script>
    <script src="{{ url("assets/js/modal.js") }}"></script>
  </body>
</html>