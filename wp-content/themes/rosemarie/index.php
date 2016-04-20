<?php get_header(); ?>

    <div id="container">
        <div id="content">

            <?php
            echo do_shortcode('[print_responsive_slider_plus_lightbox]');
            ?>

            <?php
            /* Boucle pour afficher les posts du blog */
            get_template_part( 'loop', 'index' );
            ?>
        </div><!-- #content -->

    </div><!-- #container -->

<?php get_footer(); ?>