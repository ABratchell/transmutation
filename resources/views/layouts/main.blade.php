<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Transmutation.Global </title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    @include('includes.styles.main-styles')

</head>

<!-- Web Fonts -->
<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

<!--
The #page-top ID is part of the scrolling feature.
The data-spy and data-target are part of the built-in Bootstrap scrollspy function.
-->
<body id="body" data-spy="scroll" data-target=".one-page-header" class="demo-lightbox-gallery">

<!--=== Header ===-->
@include('includes.nav.main-nav')
<!--=== End Header ===-->

<!-- Intro Section -->
@include('includes.intro.intro-section')
<!-- End Intro Section -->


<!-- Intro About Me Video -->

<!-- End Intro About Me Video -->


<!-- Intro Transformation Video Series -->
@include('includes.intro.intro-masterslider-video')
<!-- Intro Transformation Video Series -->



<!--  About Section -->
<section id="about" class="about-section section-first">

    @include('includes.intro.intro-3block')

    @include('includes.intro.intro-image')

    @include('includes.intro.intro-vision')

    @include('includes.intro.intro-parallax')

    @include('includes.intro.intro-team')

    @include('includes.intro.intro-parallax-counter')

</section> <!--  About Section -->

<!-- Services Section -->
<section id="services">

    @include('includes.services.services')

</section> <!-- End Services Section -->


<!-- News Section -->
<section id="news" class="news-section">

    @include('includes.news.news-update')
    @include('includes.news.news-parallax')

</section> <!-- End News Section -->

<!-- Portfolio Section -->
<section id="portfolio" class="about-section">

    @include('includes.portfolio.portfolio-items')

    @include('includes.portfolio.portfolio-parallax')

    @include('includes.portfolio.portfolio-testimonials')

</section> <!-- End Portfolio Section -->


<!-- Contact Section -->
<section id="contact" class="contacts-section">

    @include('includes.contact.contact')

    @include('includes.contact.footer')

</section> <!-- End Contact Section -->

@include('includes.scripts.scripts')

</body>
</html>
