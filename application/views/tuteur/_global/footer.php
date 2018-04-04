
<!-- copyright -->
<div class="copyright">
    <p> © 2017. All rights reserved | Design by <a href="http://www.p-breakers.org" target="_blank">P-breakers</a></p>
</div>
<!-- //copyright -->
</div>

<!-- js -->
<script type="text/javascript" src="<?=base_url("assets/tuteur/js/jquery-2.1.4.min.js")?>"></script>

<!-- calendar -->
<script src="<?=base_url("assets/tuteur/js/monthly.js")?>"></script>

<script type="text/javascript">
    $(window).load( function() {

        $('#mycalendar').monthly({
            mode: 'event',

        });

        $('#mycalendar2').monthly({
            mode: 'picker',
            target: '#mytarget',
            setWidth: '250px',
            startHidden: true,
            showTrigger: '#mytarget',
            stylePast: true,
            disablePast: true
        });

        switch(window.location.protocol) {
            case 'http:':
            case 'https:':
                // running on a server, should be good.
                break;
            case 'file:':
//                alert('Just a heads-up, events will not work when run locally.');
        }

    });
    function afficherListe() {
        document.getElementById('liste').style.display = "block";
        document.getElementById('myprofil').style.display = "none";
    }
    function afficherProfil() {
        document.getElementById('liste').style.display = "none";
        document.getElementById('myprofil').style.display = "block";
    }
</script>
<!-- //calendar -->
<!-- //js -->
</body>
</html>