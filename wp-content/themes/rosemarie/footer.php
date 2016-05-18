<footer>
    <h4>Corsicana Furesta - 20230 Linguizzetta - Corse</h4>
    <h5>06.23.88.66.04</h5>
    <ul id="logo-footer">
        <li>
            <a href="#">
                <img src="<?php bloginfo('template_directory') ?>/images/facebook.png" alt="...">
            </a>
        </li>
        <li>
            <a href="#">
                <img src="<?php bloginfo('template_directory') ?>/images/instagram.png" alt="...">
            </a>
        </li>
        <li>
            <a href="#">
                <img src="<?php bloginfo('template_directory') ?>/images/tripodvasor_footer.png" alt="...">
            </a>
        </li>
    </ul>
</footer>
<script src="<?php bloginfo('template_directory'); ?>/library/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/library/js/bootstrap.min.js" ></script>
<script src="<?php bloginfo('template_directory'); ?>/library/js/jquery.hoverdir.js" ></script>
<script src="<?php bloginfo('template_directory'); ?>/library/js/modernizr.custom.97074.js" ></script>
<script src="<?php bloginfo('template_directory'); ?>/library/js/jquery.easing.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/library/js/jquery.slidorion.min.js"></script>
<script type="text/javascript">
    $(function() {

        $(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

    });
</script>
<script>$(document).ready(function(){
        $('#slidorion').slidorion({
            speed: 1000,
            interval: 4000,
            effect: 'overLeft'
        });
    });
</script>
<script type="text/javascript">
    (function($) {
        $(document).ready(function(){
            var state = 0;
            $(window).scroll(function(){
                if ($(this).scrollTop() > 200) {
                    if (state == 0){
                        $('#menu-item-56').css("display","inline-block").fadeIn(2000);
                        $('#menu-item-56').css("margin","0 1%").fadeIn(2000);
                        $('.navbar-nav li a').css("padding-top","8px").fadeIn(2000);
                        //$('.transparent').animate({backgroundColor: "black"});
                        $('.transparent').css("background-color", 'black');
                        console.log("animate");
                        state = 1;
                    }
                } else {
                    if (state == 1){
                        $('#menu-item-56').css("display","none").fadeOut(2000);
                        $('#menu-item-56').css("margin","0 0%").fadeOut(2000);
                        $('.navbar-nav li a').css("padding-top","8px");
                        $('.transparent').css('background-color', 'inherit').fadeIn(1000);
                        console.log("transparent");
                        state = 0;
                    }

                }
            });
        });
    })(jQuery);
</script>
<script>
    $("html, body").delay(2000).animate({scrollTop: $('#carte').offset().top }, 2000);
</script>
<script>
    $(function(){
        var divs = $(".selection");
        divs.not("#plats").hide();
        $("a.cible").click(function(){
            divs.filter(":visible").hide();
            $($(this).attr("href")).show();
            return false;
        });
    });
</script>
<script>
    var cf7input = $( ".wpcf7-form-control" );
    if ( cf7input.parent().is( "span" ) ) {
        cf7input.unwrap();
    } else {
        cf7input.wrap( "<div></div>" );
    }
    jQuery('.form-group br').remove();

    jQuery('.form-control').focusout(function(){
        var text_value=jQuery(this).val();
        if(text_value!='')
        {

//  alert(1);
            jQuery(this).addClass("wariya");
        }else{jQuery(this).removeClass("wariya");}
    });
</script>
<?php wp_footer(); ?>

</body>
</html>