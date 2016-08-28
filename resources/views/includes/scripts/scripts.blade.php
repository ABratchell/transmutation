<!-- JS Global Compulsory -->
<script src="{{URL::to('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{URL::to('assets/plugins/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{URL::to('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- JS Implementing Plugins -->
<script src="{{URL::to('assets/plugins/smoothScroll.js')}}"></script>
<script src="{{URL::to('assets/plugins/jquery.easing.min.js')}}"></script>
<script src="{{URL::to('assets/plugins/pace/pace.min.js')}}"></script>
<script src="{{URL::to('assets/plugins/jquery.parallax.js')}}"></script>
<script src="{{URL::to('assets/plugins/counter/waypoints.min.js')}}"></script>
<script src="{{URL::to('assets/plugins/counter/jquery.counterup.min.js')}}"></script>
<script src="{{URL::to('assets/plugins/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{URL::to('assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js')}}"></script>
<script src="{{URL::to('assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js')}}"></script>
<script src="{{URL::to('assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{URL::to('assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{URL::to('assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js')}}"></script>
<!-- JS Page Level-->
<script src="{{URL::to('assets/js/one.app.js')}}"></script>
<script src="{{URL::to('assets/js/forms/login.js')}}"></script>
<script src="{{URL::to('assets/js/forms/contact.js')}}"></script>
<script src="{{URL::to('assets/js/plugins/pace-loader.js')}}"></script>
<script src="{{URL::to('assets/js/plugins/owl-carousel.js')}}"></script>
<script src="{{URL::to('assets/js/plugins/style-switcher.js')}}"></script>
<script src="{{URL::to('assets/js/plugins/revolution-slider.js')}}"></script>
<script src="{{URL::to('assets/js/plugins/cube-portfolio/cube-portfolio-lightbox.js')}}"></script>
<script>
    jQuery(document).ready(function() {
        App.init();
        App.initCounter();
        App.initParallaxBg();
        LoginForm.initLoginForm();
        ContactForm.initContactForm();
        OwlCarousel.initOwlCarousel();
        StyleSwitcher.initStyleSwitcher();
        RevolutionSlider.initRSfullScreen();
    });
</script>
<!--[if lt IE 9]>
<script src="{{URL::to('assets/plugins/respond.js')}}"></script>
<script src="{{URL::to('assets/plugins/html5shiv.js')}}"></script>
<script src="{{URL::to('assets/js/plugins/placeholder-IE-fixes.js')}}"></script>
<script src="{{URL::to('assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js')}}"></script>
<![endif]-->

<!--[if lt IE 10]>
<script src="{{URL::to('assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js')}}"></script>
<![endif]-->