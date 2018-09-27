
<div id="page-wrapper" style="background-color: #fff">
    <hr>
    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-sm-10"><h1>User Profil</h1></div>
            <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div>
        </div>
        <div class="row">
            <div class="col-sm-3"><!--left col-->


                <div class="text-center">
                    <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                    <h6>Upload a different photo...</h6>
                    <input type="file" class="text-center center-block file-upload">
                </div></hr><br>

                <ul class="list-group">
                    <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Messages</strong></span> 37</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Notifications</strong></span> 78</li>
                </ul>

            </div><!--/col-3-->
            <div class="col-sm-9">
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <hr>
                        <form class="form" action="##" method="post" id="registrationForm">
                            <div class="form-group">

                                <div class="col-xs-4">
                                    <label for="first_name"><h5>Nom</h5></label>
                                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Le nom" disabled>
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-4">
                                    <label for="last_name"><h5>Post-Nom</h5></label>
                                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Le nom" disabled>
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-xs-4">
                                    <label for="phone"><h5>Prenom</h5></label>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Le nom" disabled>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-4">
                                    <label for="mobile"><h5>Matricule</h5></label>
                                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Le nom" disabled>
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-4">
                                    <label for="email"><h5>Nationalite</h5></label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Le nom" disabled>
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-4">
                                    <label for="email"><h5>Adresse</h5></label>
                                    <input type="email" class="form-control" id="location" placeholder="Le nom" disabled>
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password"><h5>Date de Naissance</h5></label>
                                    <input type="text" class="form-control" name="password" id="password" placeholder="Kinshase, le 24 juillet 1993" disabled>
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password2"><h4>Ecole</h4></label>
                                    <input type="password" class="form-control" name="password2" id="password2" placeholder="M-Pasi" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn btn-lg btn-success" type="submit"><i class="fa fa-plus"></i> Modifier</button>
<!--                                    <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                                </div>
                            </div>
                        </form>

                        <hr>

                    </div><!--/tab-pane-->
                </div><!--/tab-pane-->
            </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
<!--	<div class="row">-->
<!--		<div class="col-md-2"></div>-->
<!--    <div class="col-md-8"  style="background-color: white; margin-top: 5%">-->
<!--       <div class="row">-->
<!--       		<div class="col-lg-5">-->
<!--				<br /><br /><img src="--><?//= $infos['img'] ?><!--" class="img-rounded" alt="Cinque Terre" 	width="300" height="300">-->
<!--			</div>-->
<!--			<div class="col-lg-1"></div>-->
<!--			<div class="col-lg-6">-->
<!--				<br /><br /><br /><p>Nom : --><?//= strtoupper($infos['nom']);?><!--</p><br />-->
<!--				<p>Post-nom : --><?//= strtoupper($infos['postnom']);?><!--</p><br />-->
<!--				<p>Prénom : --><?//= ucfirst($infos['prenom']);?><!--</p><br />-->
<!--				<p>Matricule : --><?//= ucfirst($infos['matricule']);?><!--</p><br />-->
<!--				<p>Promotion : 5è</p><br />-->
<!--				<p>Option : BIO-CHIMIE</p><br />-->
<!--				<p>Ecole : KIZITO</p><br />-->
<!--				<p>Sex : --><?//= strtoupper($infos['genre']);?><!--</p><br />-->
<!--				<p>Lieu de naissance :  --><?//= strtoupper($infos['lieuNaissance']);?><!--</p><br />-->
<!--				<p>Date de naissance :  --><?//= strtoupper($infos['dateNaissance']);?><!--</p><br />-->
<!--				<p>Nationnalité : --><?//= strtoupper($infos['nationnaliter']);?><!--   </p><br />-->
<!--				<p>Ville : Lubumbashi</p><br />-->
<!--				<p>Adresse : --><?//= strtoupper($infos['adresse']);?><!-- </p><br />-->
<!--			</div>	-->
<!--		</div>-->
<!--    </div>-->
<!--    <div class="col-md-2"></div>-->
<!--	</div>-->
</div>
<script>
    $(document).ready(function() {


        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.avatar').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }


        $(".file-upload").on('change', function(){
            readURL(this);
        });
    });
</script>