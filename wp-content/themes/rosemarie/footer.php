<footer>
    <h1>Footer</h1>
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
            effect: 'slideLeft'
        });
    });
</script>
<script type="text/javascript">
    (function($) {
        $(document).ready(function(){
            $(window).scroll(function(){
                if ($(this).scrollTop() > 200) {
                    $('#menu-item-27').fadeIn(500);
                    $('.transparent').delay(750).css('background-color', 'black');
                } else {
                    $('#menu-item-27').fadeOut(500);
                    $('.transparent').css('background-color', 'transparent');
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
<?php wp_footer(); ?>

</body>
</html>