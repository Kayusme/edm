<!--footer-->
<div class="footer w3layouts">
    <div class="container">
        <div class="footer-row w3layouts-agile">
            <div class="col-md-4 footer-grids w3l-agileits">
                <h6><a href="<?=base_url()?>">Eduque-moi</a></h6>
                <p class="footer-one-w3ls">Votre enfant peut devenir un g&eacute;nie.</p>
                <div class="top-header-agile-right">
                    <ul>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-2 footer-grids w3l-agileits">
                <h3>Menu</h3>
                <ul class="b-nav">
                    <li><a href="<?=site_url('eduquemoi/index')?>">Accueil</a></li>
                    <li><a href="<?=site_url('eduquemoi/about')?>">A Propos</a></li>
                    <li><a href="<?=site_url('eduquemoi/blog')?>">Blog</a></li>
                    <li><a href="<?=site_url('eduquemoi/contact')?>">Contactez Nous</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-grids w3l-agileits">
                <h3>Pour tous contact</h3>
                <p>Lubumbashi, RDC</p>
                <p>+243 991 888 702</p>
                <p>Av. Du 30 juin, Lubumbashi Haut-Katanga</p>
                <p><a href="mailto:info@eduquemoi.com">info@eduquemoi.com</a></p>
            </div>
            <div class="col-md-3 footer-grids w3l-agileits">
                <h3>Newsletter</h3>
                <p>Restez au courant de toutes nos nouveaut&eacute;s. <p>
                <?=form_open("eduquemoi/newsletter")?>
                    <input title="moncompte@email.fr" type="email" class="text" required="" />
                    <input type="submit" value="Go" />
                <?=form_close()?>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--//footer-->
<!-- copy-right -->
<div class="copyright-wthree">
    <p>&copy; <?=date('Y')?> Eduque-Moi Inc . Tous droits reserv&eacute;s | Design by <a target="_blank" href="http://p-breaker.org/">P-Breakers</a></p>
</div>
<!-- //copy-right -->

<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->


<script type="text/javascript" src="<?=base_url("assets/eduquemoi/js/jquery-2.1.4.min.js")?>"></script>
<!-- flexSlider -->
<script defer src="<?=base_url("assets/eduquemoi/js/jquery.flexslider.js")?>"></script>
<script type="text/javascript">
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- //flexSlider -->
<?php if ($_SERVER['REQUEST_URI'] == "/eduquemoi/gallery.html"){?>
    <script src="<?=base_url("assets/eduquemoi/js/main.js")?>"></script>
    <script src="<?=base_url("assets/eduquemoi/js/lsb.min.js")?>"></script>
   <?php }?>
<script>
    $(window).load(function() {
        $.fn.lightspeedBox();
    });
</script>
<!-- responsiveslides -->
<script src="<?=base_url("assets/eduquemoi/js/responsiveslides.min.js")?>"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider3").responsiveSlides({
            auto: true,
            pager: false,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });
    });
</script>
<!-- //responsiveslides -->
<!-- requried-jsfiles-for owl -->
<script src="<?=base_url("assets/eduquemoi/js/owl.carousel.js")?>"></script>
<script>
    $(document).ready(function() {
        $("#owl-demo2").owlCarousel({
            items : 1,
            lazyLoad : false,
            autoPlay : true,
            navigation : false,
            navigationText :  false,
            pagination : true,
        });
    });
</script>
<!-- //requried-jsfiles-for owl -->
<script src="<?=base_url("assets/eduquemoi/js/classie.js")?>"></script>
<script>
    (function() {
        // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
        if (!String.prototype.trim) {
            (function() {
                // Make sure we trim BOM and NBSP
                var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                String.prototype.trim = function() {
                    return this.replace(rtrim, '');
                };
            })();
        }

        [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
            // in case the input is already filled..
            if( inputEl.value.trim() !== '' ) {
                classie.add( inputEl.parentNode, 'input--filled' );
            }

            // events:
            inputEl.addEventListener( 'focus', onInputFocus );
            inputEl.addEventListener( 'blur', onInputBlur );
        } );

        function onInputFocus( ev ) {
            classie.add( ev.target.parentNode, 'input--filled' );
        }

        function onInputBlur( ev ) {
            if( ev.target.value.trim() === '' ) {
                classie.remove( ev.target.parentNode, 'input--filled' );
            }
        }
    })();
</script>
<!-- //contact-effect -->
<!-- Countdown-Timer-JavaScript -->
<script src="<?=base_url("assets/eduquemoi/js/simplyCountdown.js")?>"></script>
<script>
    var d = new Date(new Date().getTime() + 948 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    // inline example
    simplyCountdown('.simply-countdown-inline', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        inline: true
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
</script>
<!-- //Countdown-Timer-JavaScript -->


<!--search-bar-->
<script src="<?=base_url("assets/eduquemoi/js/main.js")?>"></script>
<!--//search-bar-->


<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?=base_url("assets/eduquemoi/js/move-top.js")?>"></script>
<script type="text/javascript" src="<?=base_url("assets/eduquemoi/js/easing.js")?>"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
<!--js for bootstrap working-->
<script src="<?=base_url("assets/eduquemoi/js/bootstrap.js")?>"></script>
<!-- //for bootstrap working -->
</html>