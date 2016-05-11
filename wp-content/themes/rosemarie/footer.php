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
                        $('#menu-item-27').css("display","inline-block").fadeIn(2000);
                        $('#menu-item-27').css("margin","0 1%").fadeIn(2000);
                        //$('.transparent').animate({backgroundColor: "black"});
                        $('.transparent').css("background-color", 'black')
                        console.log("animate")
                        state = 1;
                    }
                } else {
                    if (state == 1){
                        $('#menu-item-27').fadeOut(500);
                        $('#menu-item-27').css("margin","0 0").fadeOut(2000);

                        $('.transparent').css('background-color', 'transparent');
                        console.log("transparent")
                        state = 0;
                    }

                }
            });
        });
    })(jQuery);
</script>
<script>
    $(function(){
        var divs = $(".selection");
        divs.not("#desserts").hide();
        $("a.cible").click(function(){
            divs.filter(":visible").hide();
            $($(this).attr("href")).show();
            return false;
        });
    });
</script>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '566226623547461',
            xfbml      : true,
            version    : 'v2.6'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<?php wp_footer(); ?>

</body>
</html>