<?php
include "../includes/functions.php";
?>
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TPE IA </title>
    <meta name="author" content="FABBRO">
    <meta name="description" content="Page de maintenance du TPE">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- Fonts -->
    <!-- Lato -->
    <link href="http://fonts.googleapis.com/css?family=Lato:400,300,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- CSS -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body id="body">

<div id="preloader" style="display: none;">
    <div class="book">
        <div class="book__page"></div>
        <div class="book__page"></div>
        <div class="book__page"></div>
    </div>
</div>

<!--
Header start
==================== -->

<section id="hero-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="content-block">
                    <h1 class="wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;"><?= get_lang('LANDING__HEADING') ?></h1>
                    <p class="wow fadeInDown" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
                        <?= get_lang('LANDING__CONTENT') ?>
                    </p>
                    <div class="wow fadeInDown" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">

                    </div>
                </div>
            </div>
            <div class="col-md-6 wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                <div class="block">
                    <div class="counter">
                        <h2><?= get_lang('LANDING__SECTION_BUILDING_HEADING') ?></h2>
                        <ul id="countdown_dashboard">
                            <li>
                                <div class="dash days_dash">
                                    <div class="digit">0</div>
                                    <div class="digit">0</div>
                                    <div class="digit">0</div>
                                    <span class="dash_title"><?= get_lang('LANDING__SECTION_BUILDING_DAYS') ?></span>
                                </div>
                            </li>
                            <li>
                                <div class="dash hours_dash">
                                    <div class="digit">0</div>
                                    <div class="digit">0</div>
                                    <span class="dash_title"><?= get_lang('LANDING__SECTION_BUILDING_HOURS') ?></span>
                                </div>
                            </li>
                            <li>
                                <div class="dash minutes_dash">
                                    <div class="digit">0</div>
                                    <div class="digit">0</div>
                                    <span class="dash_title"><?= get_lang('LANDING__SECTION_BUILDING_MINUTES') ?></span>
                                </div>
                            </li>
                            <li>
                                <div class="dash seconds_dash">
                                    <div class="digit">0</div>
                                    <div class="digit">0</div>
                                    <span class="dash_title"><?= get_lang('LANDING__SECTION_BUILDING_SECONDS') ?></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- .row close -->
    </div><!-- .container close -->
</section><!-- header close -->



<!--
About start
==================== -->
<!-- #about close -->
<!--
About start
==================== -->

<!--
Service start
==================== -->
<!-- #service close -->

<!-- #call-to-action close -->

<!--
Contact start
==================== -->


<section class="wow fadeInUp">
    <div class="map-wrapper">
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <?= str_replace('YEAR', date('Y'), get_lang('LANDING__FOOTER')) ?>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Js -->
<script src="js/vendor/modernizr-2.6.2.min.js"></script>
<script src="js/vendor/jquery-1.10.2.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="js/jquery.lwtCountdown-1.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/plugins.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/main.js"></script>



<span class="_hsShareImage hsShareImage" style="display: none;">&nbsp;</span></body></html>