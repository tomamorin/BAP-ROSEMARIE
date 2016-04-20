<?php
/*
    Template Name: One Page
*/
?>

<?php get_header(); ?>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="<?php bloginfo('template_directory') ?>/images/corse.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/images/corse.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/images/corse.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
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
            <h2>Cartes</h2>
        </a>
        <ul>
            <li><a class="cible" href="#entrees">Entrées</a></li>
            <li><a class="cible" href="#plats">Plats</a></li>
            <li><a class="cible" href="#desserts">Desserts</a></li>
            <li><a class="cible" href="#boissons">Boissons</a></li>
        </ul>
        <div id="desserts" class="selection">
            <ul id="da-thumbs" class="da-thumbs">
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/desserts.jpg" alt="...">
                        <div><span>DESSERTS</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/desserts.jpg" alt="...">
                        <div><span>DESSERTS</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/desserts.jpg" alt="...">
                        <div><span>DESSERTS</span></div>
                    </a>
                </li>
            </ul>
            <ul id="da-thumbs" class="da-thumbs">
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/desserts.jpg" alt="...">
                        <div><span>DESSERTS</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/desserts.jpg" alt="...">
                        <div><span>DESSERTS</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/desserts.jpg" alt="...">
                        <div><span>DESSERTS</span></div>
                    </a>
                </li>
            </ul>
        </div>
        <div id="boissons" class="selection">
            <ul id="da-thumbs" class="da-thumbs">
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/boissons.jpg" alt="...">
                        <div><span>BOISSONS</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/boissons.jpg" alt="...">
                        <div><span>BOISSONS</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/boissons.jpg" alt="...">
                        <div><span>BOISSONS</span></div>
                    </a>
                </li>
            </ul>
            <ul id="da-thumbs" class="da-thumbs">
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/boissons.jpg" alt="...">
                        <div><span>BOISSONS</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/boissons.jpg" alt="...">
                        <div><span>BOISSONS</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/boissons.jpg" alt="...">
                        <div><span>BOISSONS</span></div>
                    </a>
                </li>
            </ul>
        </div>
        <div id="entrees" class="selection">
            <ul id="da-thumbs" class="da-thumbs">
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/entrees.jpg" alt="...">
                        <div><span>ENTREES</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/entrees.jpg" alt="...">
                        <div><span>ENTREES</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/entrees.jpg" alt="...">
                        <div><span>ENTREES</span></div>
                    </a>
                </li>
            </ul>
            <ul id="da-thumbs" class="da-thumbs">
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/entrees.jpg" alt="...">
                        <div><span>ENTREES</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/entrees.jpg" alt="...">
                        <div><span>ENTREES</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/entrees.jpg" alt="...">
                        <div><span>ENTREES</span></div>
                    </a>
                </li>
            </ul>
        </div>
        <div id="plats" class="selection">
            <ul id="da-thumbs" class="da-thumbs">
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/plats.jpg" alt="...">
                        <div><span>PLATS</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/plats.jpg" alt="...">
                        <div><span>PLATS</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/plats.jpg" alt="...">
                        <div><span>PLATS</span></div>
                    </a>
                </li>
            </ul>
            <ul id="da-thumbs" class="da-thumbs">
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/plats.jpg" alt="...">
                        <div><span>PLATS</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/plats.jpg" alt="...">
                        <div><span>PLATS</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php bloginfo('template_directory') ?>/images/plats.jpg" alt="...">
                        <div><span>PLATS</span></div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div id="evenements">
        <a name="evenement">
            <h2>Evenements</h2>
        </a>
        <div id="slidorion" class="slidorion">
            <div class="accordion">
                <div class="header">Muhammad Ali</div>
                <div class="content"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consectetur dolorem illo, in laboriosam minima neque nisi numquam praesentium quam quidem quo quos reiciendis. Dignissimos ipsa magni officia porro quo?</p></div>
                <div class="header">Usain Bolt</div>
                <div class="content"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt explicabo laborum maiores maxime nesciunt quaerat veniam. Ad culpa earum necessitatibus nulla sapiente voluptate? Aspernatur cum harum, quae sit unde voluptatibus?</p></div>
                <div class="header">Michael Jordan</div>
                <div class="content"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ipsa numquam quibusdam? Alias aperiam dolor eos facere illum inventore necessitatibus, nihil nobis non provident quaerat, quia quis voluptas voluptates voluptatibus.</p></div>
            </div>
            <div class="slider">
                <div class="slide"><img src="<?php bloginfo('template_directory') ?>/images/drapeau_corse.jpg" /></div>
                <div class="slide"><img src="<?php bloginfo('template_directory') ?>/images/drapeau_corse.jpg" /></div>
                <div class="slide"><img src="<?php bloginfo('template_directory') ?>/images/drapeau_corse.jpg" /></div>
            </div>
        </div>
        <div class="sous-evenements">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
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
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
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
    <div id="histoire">
        <div class="histoire">
            <a name="histoire">
                <h2>Qui Sommes-Nous ?</h2>
            </a>
            <p class="texte-histoire">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                qui officia deserunt mollit anim id est laborum. Donec elementum ligula
                eu sapien consequat eleifend. Donec nec dolor erat, condimentum sagittis sem.
                Praesent porttitor porttitor risus, dapibus rutrum ipsum gravida et. Integer
                lectus nisi, facilisis sit amet eleifend nec, pharetra ut augue. Integer quam
                nunc, consequat nec egestas ac, volutpat ac nisi. Sed consectetur
            </p>
         </div>
    </div>
    <div id="equipe">
        <h2>Équipe</h2>
        <div class="row">
            <div class="col-md-6">
                <img src="<?php bloginfo('template_directory') ?>/images/corse.jpg" class="img-circle img-responsive"  alt=""/>
                <h3>Lorem Ipsum</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias amet, consectetur corporis cumque debitis delectus id ipsum iure, maiores minus mollitia non quaerat quod rerum, saepe similique sint velit voluptatem?</p>
            </div>
            <div class="col-md-6">
                <img src="<?php bloginfo('template_directory') ?>/images/corse.jpg" class="img-circle img-responsive" alt=""/>
                <h3>Lorem Ipsum</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad consequatur ipsum iusto magnam nam, nemo, odit provident quo reiciendis rem similique voluptatum. Delectus excepturi libero nihil non qui ratione sint.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <button class="btn btn-primary">Lorem Ipsum</button></div>
            <div class="wow bounceInLeft"></div>
            <div class="col-md-6">
                <button class="btn btn-primary">Lorem Ipsum</button></div>
            <div class="wow bounceInRight"></div>
        </div>
    </div>
    <div class="instagram">
        <?php echo do_shortcode('[instagram-feed]');?>
    </div>
    <div id="TA_selfserveprop797" class="TA_selfserveprop">
        <ul id="WbJ9qOGjl" class="TA_links XmHfKhm">
            <li id="aErxNR7" class="gzrF6r">
                <a target="_blank" href="https://www.tripadvisor.fr/"><img src="https://www.tripadvisor.fr/img/cdsi/img2/branding/150_logo-11900-2.png" alt="TripAdvisor"/></a>
            </li>
        </ul>
    </div>
    <script src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=797&amp;locationId=7002100&amp;lang=fr&amp;rating=true&amp;nreviews=4&amp;writereviewlink=false&amp;popIdx=true&amp;iswide=true&amp;border=true&amp;display_version=2"></script>
    <div id="contact">
        <a name="contact">
            <h2>Contact</h2>
        </a>
        <?php echo do_shortcode('[wpgmza id="1"]'); ?>
        <div class="bloc-gauche">
            <?php echo do_shortcode('[contact-form-7 id="25" title="Formulaire"]'); ?>
        </div>
    </div>

<?php get_footer(); ?>