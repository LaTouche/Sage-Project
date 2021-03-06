<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<body>
<footer>
    <div id="footer-container">


        <div class="email small-4 large-2 columns">

            <label class="strong-text">MAILING LIST </label>

            <input class="email-box" type="email" name="EMAIL" placeholder="Email Address" required/>
            <input class="email-btn" type="submit" value="Subscription"/>
        </div>

        <div id="address-text">

            <h6 class="strong-text">ADDRESS</h6>

            <p>341 Yonge St. 3F</p>
            <p>Toronto, ON</p>
            <p>M5B 1S1</p>

        </div>

        <div id="footer">


            <a href="https://www.facebook.com/SAGECanada/" class="icon-button facebook">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>

            <a href="https://twitter.com/sagecanada" class="icon-button twitter">
                <i class="fi-social-twitter"></i>
            </a>
            <a href="https://www.instagram.com/sage_canada/" class="icon-button instagram">
                <i class="fi-social-instagram"></i>
            </a>
            <a href="https://www.youtube.com/channel/UCC-dfHJ_grG433pAvW2Jp5Q" class="icon-button youtube">
                <i class="fa fa-youtube" aria-hidden="true"></i>
            </a>

            <a href="https://www.linkedin.com/sage-canada" class="icon-button linkedin">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
        </div>


        <div id="heart-text">

            <p>We <i class="fa fa-heart" aria-hidden="true"></i> creativity</p>
            <p>We <i class="fa fa-heart" aria-hidden="true"></i>entrepreneurship</p>
            <p>We <i class="fa fa-heart" aria-hidden="true"></i> competition
            </p>
        </div>

    </div>

    <?php do_action('foundationpress_layout_end'); ?>

    <?php if (get_theme_mod('wpt_mobile_menu_layout') === 'offcanvas') : ?>
    <?php endif; ?>


    <?php wp_footer(); ?>
    <?php do_action('foundationpress_before_closing_body'); ?>

</footer>
</body>
