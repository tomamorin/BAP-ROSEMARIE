<?php
/*
    Template Name: One Page
*/
?>

<?php get_header(); ?>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <!--<ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>-->
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="<?php bloginfo('template_directory') ?>/images/Header_slider_photo1.png" alt="...">
                <div class="carousel-caption">Plage, détente, cordialité et cuisine savoureuse, Chez Rose-Marie offre le cadre idéal du plaisir et d’un
                    moment d’exception pour un déjeuner, un dîner, ou simplement un verre, sur sa vaste terrasse à quelques
                    mètres de la mer.
                </div>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/images/Header_slider_photo2.png" alt="...">
                <div class="carousel-caption">Situé sur une plage du village de Linguizzetta sur la côte Est de la Corse, cet établissement renommé vous
                    accueille 7 jours sur 7 d’avril à octobre.
                </div>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/images/Header_slider_photo3.png" alt="...">
                <div class="carousel-caption">Et durant tout l’été, Chez Rose-Marie organise des soirées spéciales : groupes musicaux (musiques corse
                    et internationale), soirées DJ…
                </div>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/images/Header_slider_photo4.png" alt="...">
                <div class="carousel-caption">Réservations conseillées ! Tel. 04 95 38 09 45
                    A prestu ! :-) »
                </div>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/images/Header_slider_photo5.png" alt="...">
                <div class="carousel-caption">Plage, détente, cordialité et cuisine savoureuse, Chez Rose-Marie offre le cadre idéal du plaisir et d’un
                    moment d’exception pour un déjeuner, un dîner, ou simplement un verre, sur sa vaste terrasse à quelques
                    mètres de la mer.
                </div>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/images/Header_slider_photo6.png" alt="...">
                <div class="carousel-caption">Situé sur une plage du village de Linguizzetta sur la côte Est de la Corse, cet établissement renommé vous
                    accueille 7 jours sur 7 d’avril à octobre.
                </div>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/images/Header_slider_photo7.png" alt="...">
                <div class="carousel-caption">Et durant tout l’été, Chez Rose-Marie organise des soirées spéciales : groupes musicaux (musiques corse
                    et internationale), soirées DJ…
                </div>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/images/Header_slider_photo8.png" alt="...">
                <div class="carousel-caption">Réservations conseillées ! Tel. 04 95 38 09 45
                    A prestu ! :-) »
                </div>
            </div>
        </div>
        <div class="main-text hidden-xs">
            <div class="col-md-12 text-center">
                <img src="<?php bloginfo('template_directory') ?>/images/Logo.png" alt="...">
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div id="cartes">
        <a name="carte">
            <div class="titre">
                <img src="<?php bloginfo('template_directory') ?>/images/barre.png" alt="..." class="bordure-titre">
                <h2>Suggestions</h2>
            </div>
        </a>
        <ul>
            <li><a class="cible" href="#entrees">Entrées</a></li>
            <li><a class="cible" href="#plats">Plats</a></li>
            <li><a class="cible" href="#desserts">Desserts</a></li>
            <!--<li><a class="cible" href="#boissons">Boissons</a></li>-->
        </ul>
        <div id="plats" class="selection">
            <ul id="da-thumbs" class="da-thumbs">
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/IMG_4852.JPG" alt="...">
                        <div><span>Les Rougets de Méditerranée</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/IMG_4780.JPG" alt="...">
                        <div><span>Le Cabillaud en chemise</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/IMG_4786.JPG" alt="...">
                        <div><span>Les Pâtes du pêcheur</span></div>
                    </a>
                </li>
            </ul>
            <ul id="da-thumbs" class="da-thumbs">
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/IMG_4804.JPG" alt="...">
                        <div><span>Le Burger Rose-Marie</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/IMG_4811.JPG" alt="...">
                        <div><span>Le Magret de canard</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/IMG_4812.JPG" alt="...">
                        <div><span>Les Côtes d’agneau</span></div>
                    </a>
                </li>
            </ul>
        </div>
        <div id="desserts" class="selection">
            <ul id="da-thumbs" class="da-thumbs">
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/plat_1.png" alt="...">
                        <div><span>DESSERTS</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/plat_1.png" alt="...">
                        <div><span>DESSERTS</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/plat_1.png" alt="...">
                        <div><span>DESSERTS</span></div>
                    </a>
                </li>
            </ul>
            <ul id="da-thumbs" class="da-thumbs">
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/plat_1.png" alt="...">
                        <div><span>DESSERTS</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/plat_1.png" alt="...">
                        <div><span>DESSERTS</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/plat_1.png" alt="...">
                        <div><span>DESSERTS</span></div>
                    </a>
                </li>
            </ul>
        </div>
        <div id="entrees" class="selection">
            <ul id="da-thumbs" class="da-thumbs">
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/IMG_4839.JPG" alt="...">
                        <div><span>Le coin du pizzaiolo : <br>large choix de pizzas au feu de bois</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/IMG_4843.JPG" alt="...">
                        <div><span>L’assiette de montagne : <br>coppa, lonzu, salciccia, prizuttu</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/IMG_4815.JPG" alt="...">
                        <div><span>La salade de la plaine</span></div>
                    </a>
                </li>
            </ul>
            <ul id="da-thumbs" class="da-thumbs">
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/IMG_4816.JPG" alt="...">
                        <div><span>La salade paese</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/IMG_4819.JPG" alt="...">
                        <div><span>La salade Capra</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/IMG_4838.JPG" alt="...">
                        <div><span>Les moules de diane</span></div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div id="evenements">
        <a name="evenement">
            <div class="titre">
                <img src="<?php bloginfo('template_directory') ?>/images/barre.png" alt="..." class="bordure-titre">
                <h2>Evenements</h2>
            </div>
        </a>

        <div id="slidorion" class="slidorion">
            <div class="accordion">
                <?php

                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post();

                        ?>
                        <div class="header"><?php the_title(); ?></div>
                        <div class="content"><p><?php the_content();  ?></p></div>

                    <?php     } // end while
                } // end if
                ?>
            </div>
            <div class="slider">
                <?php
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); ?>

                        <div class="slide"><?php the_post_thumbnail(array('class'=>'img-responsive')) ?></div>
                    <?php     } // end while
                } // end if
                ?>

            </div>
        </div>
        <div class="sous-evenements">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default event">
                            <div class="panel-heading title-event" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Collapsible Group Item #1
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <a href="#">Lorem Ipsum</a>
                                    <a href="#">Lorem Ipsum</a>
                                    <a href="#">Lorem Ipsum</a>
                                    <a href="#">Lorem Ipsum</a>
                                    <a href="#">Lorem Ipsum</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default event">
                            <div class="panel-heading title-event" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Collapsible Group Item #2
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <a href="#">Lorem Ipsum</a>
                                    <a href="#">Lorem Ipsum</a>
                                    <a href="#">Lorem Ipsum</a>
                                    <a href="#">Lorem Ipsum</a>
                                    <a href="#">Lorem Ipsum</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a name="direction">
        <div class="titre">
            <img src="<?php bloginfo('template_directory') ?>/images/barre.png" alt="..." class="bordure-titre">
            <h2>Direction</h2>
        </div>
        <div class="text-direction">
            <p>Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Ali Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Ali</p>
        </div>
    </a>
    <div id="equipe">
        <img src="<?php bloginfo('template_directory') ?>/images/Photo_Direction.png" alt="" class="direction"/>
    </div>
    <a name="contact">
        <div class="titre">
            <img src="<?php bloginfo('template_directory') ?>/images/barre.png" alt="..." class="bordure-titre">
            <h2>Au Gout du Jour</h2>
        </div>
    </a>
    <div class="nous-suivre">
        <h3>Nous Suivre</h3>
    </div>
        <div class="widget">
            <ul>
                <li class="facebook">
                    <div class="fb-page"
                         data-href="https://www.facebook.com/BeYouniqueByRoxane/?fref=ts"
                         data-width="500px"
                         data-height="450px"
                         data-tabs="timeline"
                         data-small-header="false"
                         data-adapt-container-width="false"
                         data-hide-cover="false"
                         data-show-facepile="true">
                        <div class="fb-xfbml-parse-ignore">
                            <blockquote cite="https://www.facebook.com/BeYouniqueByRoxane/?fref=ts">
                                <a href="https://www.facebook.com/BeYouniqueByRoxane/?fref=ts">Be Younique by Roxane</a>
                            </blockquote>
                        </div>
                    </div>
                </li>
                <li class="tripadvisor">
                    <div id="TA_selfserveprop797" class="TA_selfserveprop">
                        <ul id="WbJ9qOGjl" class="TA_links XmHfKhm">
                            <li id="aErxNR7" class="gzrF6r">
                                <a target="_blank" href="https://www.tripadvisor.fr/"><img src="https://www.tripadvisor.fr/img/cdsi/img2/branding/150_logo-11900-2.png" alt="TripAdvisor"/></a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    <script src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=797&amp;locationId=7002100&amp;lang=fr&amp;rating=true&amp;nreviews=4&amp;writereviewlink=false&amp;popIdx=true&amp;iswide=true&amp;border=true&amp;display_version=2"></script>

<?php get_footer(); ?>