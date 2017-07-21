<?php


/* 	Design Theme's Header

	Copyright: 2012-2013, D5 Creation, www.d5creation.com

	Based on the Simplest D5 Framework for WordPress

	Since Design 1.0

*/


?>


<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

    <meta name="google-site-verification" content="R_bN0zkpZio_vDw74Mk0_DxRbjb7XsT-P6kLu-7wfr0"/>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <title><?php wp_title() ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <?PHP

        if ( ! wp_script_is( 'jquery', 'enqueued' )) {
            //Enqueue
            wp_enqueue_script( 'jquery',  get_stylesheet_directory_uri() . '/js/jquery-3.2.1.min.js');
            wp_enqueue_script( 'validate',  get_stylesheet_directory_uri() . '/js/jquery.validate.pack.js', array('jquery'));
            wp_enqueue_script( 'fancy',  get_stylesheet_directory_uri() . '/js/jquery.fancybox-1.3.6.pack.js', array('jquery'));
            wp_enqueue_script( 'main',  get_stylesheet_directory_uri() . '/js/main.min.js', array('jquery'));
            wp_enqueue_script( 'menu',  get_stylesheet_directory_uri() . '/js/menu.js', array('jquery'));
            wp_enqueue_script( 'share',  get_stylesheet_directory_uri() . '/js/share.js', array('jquery'));
        }

    ?>

    <!--[if lt IE 9]>

    <script async src="<?= get_stylesheet_directory_uri() ?>/js/html5.js"></script>

    <![endif]-->

    <link rel="shortcut icon" href="<?= get_stylesheet_directory_uri() ?>/favicon.ico"/>

    <?php if (is_page_template("bad_monkey.php")) { ?>

        <?php the_post(); ?>

        <?php $img = wp_get_attachment_image_src(get_post_meta($post->ID, $_GET["blade"] . "_" . $_GET["handle"] . "_" . $_GET["finish"], true), 'full-size'); ?>

        <?php if ($img) { ?>

            <meta property="og:image" content="<?php echo $img[0]; ?>"/>

        <?php } ?>

        <meta property="og:type" content="website"/>

        <meta property="og:url" content="<?php echo 'http://' . $_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI]; ?>"/>

        <meta property="og:title" content="Build A Bad Monkey"/>

        <meta property="og:description" content="See my custom Bad Monkey knife I designed on Southern Grind"/>

    <?php } ?>


    <script type="text/javascript">


        var _gaq = _gaq || [];

        _gaq.push(['_setAccount', 'UA-54746522-1']);

        _gaq.push(['_trackPageview']);


        (function () {

            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;

            ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';

            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);

        })();


    </script>


    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >

<!-- FB Loading and Init -->

<div id="fb-root"></div>

<script>

    (function (d, s, id) {

        var js, fjs = d.getElementsByTagName(s)[0];

        if (d.getElementById(id)) return;

        js = d.createElement(s);
        js.id = id;

        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=113248342166051";

        fjs.parentNode.insertBefore(js, fjs);

    }(document, 'script', 'facebook-jssdk'));

</script>

<!-- End FB Loading and Init -->

<!-- begin email capture + socials -->
<!-- <div id="top-menu-container"> -->
<!-- </div> -->

<div id="header">

    <div id="header-content">

        <!-- Site Title and Description Goes Here    -->

        <div class="social_icons">

            <a class="social_icon" href="https://www.facebook.com/pages/Southern-Grind/321500161203398?fref=ts"
               target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/socialFB.png"></a>

            <a class="social_icon" href="https://www.youtube.com/channel/UCQt4nB_PPmAjvom-AU05CtA" target="_blank"><img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/images/socialYT.png"></a>

            <a class="social_icon" href="http://instagram.com/southerngrind" target="_blank"><img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/images/socialIG.png"></a>

        </div>

        <div class="headerEmailForm">

            <span class="email_cta">GET OUR NEWSLETTER</span>

            <link href="https://app.e2ma.net/css/signup.sml.css" rel="stylesheet" type="text/css">

            <script type="text/javascript"
                    src="https://app.e2ma.net/app2/audience/tts_signup/1768867/dfe0c474460985f24ad931dc0a05aeff/1721589/?v=a"></script>

            <span id="load_check"></span>

            <script type="text/javascript">signupFormObj.drawForm();</script>

            <script type="text/javascript">

                $(function () {

                    $('#id_email').attr("placeholder", "Enter your email address");

                    $('#e2ma_signup_submit_button').attr("value", "Sign Up");

                });

            </script>

        </div>

        <a class="become_dealer_link" href="<?php echo get_permalink(get_page_by_title('Dealers')->ID); ?>">Become A
            Grind Dealer</a>


        <!-- End email capture + socials -->

        <a href="<?php echo esc_url(home_url('/')); ?>">

            <img class="site-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"/>

        </a>


        <!-- Site Main Menu Goes Here -->

        <nav id="design-main-menu">

            <?php if (has_nav_menu('main-menu')) : wp_nav_menu(array('theme_location' => 'main-menu'));
            else: wp_page_menu(); endif; ?>

        </nav>

    </div><!-- header-content -->

</div><!-- header -->















