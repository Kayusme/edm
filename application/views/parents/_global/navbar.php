<div class="header-top">
    <div class="top-menu">
        <div id="dd1" class="wrapper-dropdown-1 dr1" tabindex="1"><span><img src="<?=base_url("assets/parents/images/botton.png")?>"/></span>
            <ul class="dropdown">

                <li><a href="#">Home </a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Tv shows</a></li>
                <li><a href="#">calendar</a></li>
            </ul>
        </div>
        <script type="text/javascript">
            function DropDown(el) {
                this.dd1 = el;
                this.initEvents();
            }
            DropDown.prototype = {
                initEvents : function() {
                    var obj = this;

                    obj.dd.on('click', function(event){
                        $(this).toggleClass('active');
                        event.stopPropagation();
                    });
                }
            }
            $(function() {

                var dd = new DropDown( $('#dd1') );

                $(document).click(function() {
                    // all dropdowns
                    $('.wrapper-dropdown-1').removeClass('active');
                });

            });
        </script>

        <span class="menu"><img src="<?=base_url("assets/parents/images/botton.png")?>" alt=""/> </span>
        <ul>

            <li><a href="#"><img src="<?=base_url("assets/parents/images/Home.jpg")?>"></a></li>
<!--            <li><a href="#" class="scroll">about</a></li>-->
            <li><a href="#" class="scroll">Evenements</a></li>
            <li><a href="#stat" class="scroll">Statistique</a></li>
            <li><a href="#mom" class="scroll">Mes Enfants</a></li>
    </div>
    <!-- script for menu -->

    <script>
        $("span.menu").click(function(){
            $(".top-menu ul").slideToggle("slow" , function(){
            });
        });
    </script>
    <!-- //script for menu -->
    <div class="search">
        <div class="b-search">
            <form>
                <input type="text" value="" onfocus="this.value = ''" onblur="if (this.value == '') {this.value = 'Search';}">
                <input type="submit" value="">
            </form>
        </div>
        <div class="social-icons">
            <ul>
                <li><a href="#"><i class="fa"></i></a></li>
                <li><a href="#"><i class="tw"></i></a></li>
                <li><a href="#"><i class="pa"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
</div>