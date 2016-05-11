<?php
/*
    Template Name: Contact
*/
?>

<?php get_header(); ?>

<div id="contact">
    <a name="contact">
        <h2>Contact</h2>
    </a>
    <?php echo do_shortcode('[wpgmza id="1"]'); ?>
    <div class="bloc-gauche">
        <?php echo do_shortcode('[contact-form-7 id="25" title="Formulaire"]'); ?>
    </div>
</div>