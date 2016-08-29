var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')

    .styles([

        <!-- CSS Global Compulsory -->
        'resources/assets/plugins/bootstrap/css/bootstrap.min.css',
        'resources/assets/css/one.style.css',

        <!-- CSS Footer -->
        'resources/assets/css/footers/footer-v7.css',

        <!-- CSS Implementing Plugins -->
        'resources/assets/plugins/animate.css',
        'resources/assets/plugins/line-icons/line-icons.css',
        'resources/assets/plugins/font-awesome/css/font-awesome.min.css',
        'resources/assets/plugins/pace/pace-flash.css',
        'resources/assets/plugins/owl-carousel/owl.carousel.css',
        'resources/assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css',
        'resources/assets/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css',
        'resources/assets/plugins/revolution-slider/rs-plugin/css/settings.css',
        'resources/assets/plugins/revolution-slider/rs-plugin/css/settings-ie8.css',

        <!-- Style Switcher -->
        'resources/assets/css/plugins/style-switcher.css',

        <!-- CSS Theme -->
        'resources/assets/css/theme-colors/default.css',
        'resources/assets/css/theme-skins/one.dark.css',

        <!-- CSS Customization -->
        'resources/assets/css/custom.css',

        <!-- MASTER SLIDER -->
        'resources/assets/masterslider/masterslider/style/masterslider.css',
        'resources/assets/masterslider/masterslider/skins/default/style.css',
        'resources/assets/masterslider/style/ms-videogallery.css'

    ], './public/css/libs.css', './resources/assets')

        .scripts([

                <!-- JS Global Compulsory -->
            'resources/assets/plugins/jquery/jquery.min.js',
            'resources/assets/plugins/jquery/jquery-migrate.min.js',
            'resources/assets/plugins/bootstrap/js/bootstrap.min.js',

                <!-- JS Implementing Plugins -->
            'resources/assets/plugins/smoothScroll.js',
            'resources/assets/plugins/jquery.easing.min.js',
            'resources/assets/plugins/pace/pace.min.js',
            'resources/assets/plugins/jquery.parallax.js',
            'resources/assets/plugins/counter/waypoints.min.js',
            'resources/assets/plugins/counter/jquery.counterup.min.js',
            'resources/assets/plugins/owl-carousel/owl.carousel.js',
            'resources/assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js',
            'resources/assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js',
            'resources/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js',
            'resources/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js',
            'resources/assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js',

                <!-- JS Page Level-->
            'resources/assets/js/one.app.js',
            'resources/assets/js/forms/login.js',
            'resources/assets/js/forms/contact.js',
            'resources/assets/js/plugins/pace-loader.js',
            'resources/assets/js/plugins/owl-carousel.js',
            'resources/assets/js/plugins/style-switcher.js',
            'resources/assets/js/plugins/revolution-slider.js',
            'resources/assets/js/plugins/cube-portfolio/cube-portfolio-lightbox.js',

        <!-- Less than IE9 -->
    'resources/assets/plugins/respond.js',
    'resources/assets/plugins/html5shiv.js',
    'resources/assets/plugins/placeholder-IE-fixes.js',
    'resources/assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js',

            <!-- Less than IE10 -->
    'resources/assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js'

        ], './public/js/libs.js', './resources/assets')


});
