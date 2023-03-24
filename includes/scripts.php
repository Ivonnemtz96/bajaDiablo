<!-- FOOTER SCRIPTS ============================================= -->
<script src="/js/jquery.3.5.1.min.js"></script>
<script src="/js/main.js"></script>
<script src="/js/countdown-dugem.js"></script>
<script src="/js/dugem-lightbox.js"></script>
<script src="/js/dugem-carousel.js"></script>
<script type="/js/aos.js"></script>
<script src="/js/demo1.js"></script>
<script src="/js/jquery.smartmenus.min.js"></script>
<script src="/js/swiper-bundle.min.js"></script>
<script src="/js/lightgallery.min.js"></script>
<script src="/js/aos.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.magnific-popup/1.0.0/jquery.magnific-popup.min.js"></script>

<script>
        $('.open-popup-link').magnificPopup({
  type: 'inline',
  midClick: true,
  mainClass: 'mfp-fade'
});
$(document).on('click', '.popup-modal-dismiss', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
	});
    </script>