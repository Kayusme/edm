<!-- Register -->
<div class="register-wthree">
    <div class="container">
        <div class="col-md-6 regstr-l-w3-agileits">
            <h3 class="tittle-agileits-w3layouts white-w3ls">Avoir <span>des cours gratuits</span> en ligne</h3>
            <h4>Se connecter</h4>
            <!--timer-->
            <section class="examples">
                <div class="simply-countdown-losange" id="simply-countdown-losange"></div>
                <div class="clear"></div>
            </section>
            <div class="clearfix"></div>
            <!--//timer-->
        </div>
        <div class="col-md-6 regstr-r-w3-agileits">
            <div class="form-bg-w3ls">
                <h3>Remplir le formulaire</h3>
                <p class="para-w3-agile white-w3ls">Connectez-vous directement à votre compte.</p>
                <?=form_open("eduquemoi/login")?>
                    <input type="text"  name="Name" placeholder="Pseudo" required="" />
                    <input type="password"  name="Pwd" placeholder="Mot de Passe" required="" />
                    <select title="" class="form-control">
                        <option disabled>Connecter en tant que</option>
                        <option value="1">Eleves</option>
                        <option value="2">Professeur</option>
                        <option value="3">Parents</option>
                        <option value="4">Tuteurs</option>
                    </select>
                    <input type="submit" value="Connexion" class="button-w3layouts hvr-rectangle-out">
                <?=form_close()?>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //Register -->
