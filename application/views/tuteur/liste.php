<!-- Profile-form -->
<div class="top-grids" id="liste">
    <div class="profile-agile">
        <h2>Listes Eleves</h2>
<!--        <label class="lineb"></label>-->
<!--        <div class="profile-w3">-->
<!--            <img src="--><?//=base_url("assets/tuteur/images/bgp.jpg")?><!--" alt="">-->
<!--        </div>-->
        <div class="w3layouts right">
<!--            <img src="--><?//=base_url("assets/tuteur/images/pro.jpg")?><!--" alt=" " />-->
            <?php for ($i=0;$i<=5;$i++){?>
                <a href="<?=site_url("tuteur/accueil")?>"><label class="lineb"></label>
                    <h5 style="color: darkgrey">Jonathan YOMBO</h5>
                        <p>Histoire</p>
                </a>

            <?php };?>

        </div>
        <div class="agileits-w3layouts">
            <div class="w3l">
                <h4>Cours Dispensés</h4>
                <h5>5</h5>
            </div>
            <div class="w3-agile">
                <h4><a href="javascript:afficherProfil()" style="color:black;">Profil</a></h4>
                <h5></h5>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!-- //Profile-form -->