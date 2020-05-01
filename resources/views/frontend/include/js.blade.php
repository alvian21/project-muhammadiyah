<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<script src="https://cdn.jsdelivr.net/npm/uikit@3.4.2/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.4.2/dist/js/uikit-icons.min.js"></script>

<script>
  var sp = document.querySelector('.search-open');
  var searchbar = document.querySelector('.search-inline');
  var shclose = document.querySelector('.search-close');

  function changeClass() {
      searchbar.classList.add('search-visible');
  }

  function closesearch() {
      searchbar.classList.remove('search-visible');
  }

  sp.addEventListener('click', changeClass);
  shclose.addEventListener('click', closesearch);

</script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
