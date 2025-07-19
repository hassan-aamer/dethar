  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
          class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('web/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('web/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('web/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('web/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('web/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('web/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('web/js/app.js') }}"></script>


  @include('admin.layouts.sweetalert')
  @yield('js')

  {{-- <script>
      document.addEventListener('contextmenu', function(e) {
          e.preventDefault();
      });

      document.addEventListener('keydown', function(e) {
          if (e.key === 'F12' || (e.ctrlKey && e.shiftKey && e.key === 'I')) {
              e.preventDefault();
          }
      });
  </script> --}}
