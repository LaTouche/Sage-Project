<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">


    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php do_action('foundationpress_after_body'); ?>

<?php if (get_theme_mod('wpt_mobile_menu_layout') === 'offcanvas') : ?>
<div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
        <?php get_template_part('template-parts/mobile-off-canvas'); ?>
        <?php endif; ?>

        <?php do_action('foundationpress_layout_start'); ?>
    </div>
    <header id="masthead" class="site-header" role="banner">
        <div class="title-bar" data-responsive-toggle="site-navigation">
            <button class="" type="button" data-toggle="mobile-menu"></button>
            <div class="title-bar-title">SAGE
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                </a>
            </div>
        </div>

        <!--                                 NAV                                      -->
        <div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">
            <button class="menu-icon" type="button" data-toggle></button>
            <div class="title-bar-title"></div>
        </div>
        <!--                                 NAVBAR                                      -->

        <nav class="top-bar" id="main-menu">
            <div class="top-bar-left">
                <ul class="dropdown-menu" data-dropdown-menu>
                </ul>
            </div>
            <div class="top-bar-right">
                <ul class="menu" data-responsive-menu="drilldown medium-dropdown">
                    <li class="has-dropdown">
                        <a href="#">About</a>
                        <ul class="submenu menu vertical" data-submenu>
                            <li><a href="#">About SAGE</a></li>
                            <li><a href="#">Become a mentor or partner</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Program</a></li>
                    <li class="has-dropdown">
                        <a href="#">Community</a>
                        <ul class="submenu menu vertical" data-submenu>
                            <li><a href="#">Entrepreneur Spotlight</a></li>
                            <li><a href="#">SAGE & Industry News</a></li>
                            <li><a href="#">SAGE Events</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#" class="apply-text">APPLY</a></li>

            </div>
        </nav>
</div>
<?php foundationpress_top_bar_r(); ?>

<?php if (!get_theme_mod('wpt_mobile_menu_layout') || get_theme_mod('wpt_mobile_menu_layout') === 'topbar') : ?>
    <?php get_template_part('template-parts/mobile-top-bar'); ?>
<?php endif; ?>

</div>
</header>


<section class="container">
    <?php do_action('foundationpress_after_header'); ?>
</section>

</div>

</body>
