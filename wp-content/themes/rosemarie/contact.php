<?php
/*
    Template Name: Contact
*/
?>

<?php get_header(); ?>

    <div id="header">
        <h2 class="titre-contact">Contact</h2>
    </div>
    <h2>Désireux de nous trouver ? C'est tout simple !</h2>
    <div class="text-contact">
        Chez Rose-Marie est situé à mi-chemin de Moriani et d'Aléria, sur la route T 10 (ex-RN 198) longeant la côte est de la corse.
    </div>
    <div class="sud-nord">
        <img src="<?php bloginfo('template_directory') ?>/images/Nord_block2.png" alt="" class="nord-sud"/>
        <img src="<?php bloginfo('template_directory') ?>/images/Sud2.png" alt="" class="nord-sud"/>
    </div>
    <div class="text-contact">
        Au fond de cette route à 400 mètres, continuez à droite, et 150 mètres plus loin prenez la piste sur la gauche.
        <br>Un vaste parking vous attend à quelques mètres du restaurant.
        <br><br>Réservations conseillées !
        <br><br>Téléphone : 04 95 38 09 45
    </div>

    <?php echo do_shortcode('[wpgmza id="1"]'); ?>

    <div class="bloc">
        <div class="bloc-info-contact">
            <h2 class="info-contact">Nous Ecrire</h2>
            <p class="info-contact"><img src="<?php bloginfo('template_directory') ?>/images/icon_lieu.png" alt="" class="icone"/><span style="font-size: 18px">A furesta, 20230 Linguizzeta.</span></p>
            <p class="info-contact"><img src="<?php bloginfo('template_directory') ?>/images/icon_tel.png" alt="" class="icone"/><span style="font-size: 18px">Tel.:(0)6 23 88 04.</span></p>
            <p class="info-contact"><img src="<?php bloginfo('template_directory') ?>/images/icon_mail.png" alt="" class="icone"/><span style="font-size: 18px">Contact@chezrosemarie.net</span></p>
            <h2 class="info-contact">Horaires</h2>
            <p class="info-contact"><img src="<?php bloginfo('template_directory') ?>/images/icon_horloge.png" alt="" class="icone"/><span style="font-size: 18px; text-decoration: underline">Du lundi au dimanche.</span></p>
            <p class="info-contact"><img src="<?php bloginfo('template_directory') ?>/images/icon_soleil.png" alt="" class="icone" style="margin-right: 2%"/><span style="font-size: 18px; text-decoration: underline">La journée:</span> 12h00 - 15h00.</p>
            <p class="info-contact"><img src="<?php bloginfo('template_directory') ?>/images/icon_lune.png" alt="" class="icone"/><span style="font-size: 18px; text-decoration: underline">Le soir:</span> 19h00 - 22h00.</p>
            <h2 class="info-contact">Suivez-Nous</h2>
            <div class="logo">
                <a href="#">
                <img src="<?php bloginfo('template_directory') ?>/images/logo-facebook.png" alt="" class="logo">
                </a>
                <a href="#">
                <img src="<?php bloginfo('template_directory') ?>/images/logo-instagram.png" alt="" class="logo">
                </a>
                <a href="#">
                <img src="<?php bloginfo('template_directory') ?>/images/logo-tripadvisor.png" alt="" class="logo">
                </a>
            </div>
        </div>
        <div class="bloc-form-contact">
            <?php echo do_shortcode('[contact-form-7 id="47" title="Contact form 1"]'); ?>
        </div>
    </div>

<?php get_footer(); ?>
