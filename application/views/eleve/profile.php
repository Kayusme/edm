
<div id="page-wrapper" style="background-color: #fff">
    <hr>
    <div class="container-fluid bootstrap snippet">
        <div class="row">
            <div class="col-sm-10"><h1>User Profil</h1></div>
            <div class="col-sm-2"><img title="profile image" class="img-circle img-responsive" src="<?= $eleve['img'];?>"></div>
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
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Devoirs</strong></span> 2</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Messages</strong></span> 0</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Notifications</strong></span> <?=$count?></li>
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
                                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="<?= strtoupper($eleve['nom']);?>" disabled>
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-4">
                                    <label for="last_name"><h5>Post-Nom</h5></label>
                                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="<?= strtoupper($eleve['postnom']);?>" disabled>
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-xs-4">
                                    <label for="phone"><h5>Prenom</h5></label>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="<?= strtoupper($eleve['prenom']);?>" disabled>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-4">
                                    <label for="mobile"><h5>Matricule</h5></label>
                                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="<?= strtoupper($eleve['matricule']);?>" disabled>
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-4">
                                    <label for="email"><h5>Nationalite</h5></label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="<?= strtoupper($eleve['nationnaliter']);?>" disabled>
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-4">
                                    <label for="email"><h5>Adresse</h5></label>
                                    <input type="email" class="form-control" id="location" placeholder="<?= strtoupper($eleve['adresse']);?>" disabled>
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password"><h5>Date de Naissance</h5></label>
                                    <input type="text" class="form-control" name="password" id="password" placeholder="<?= strtoupper($eleve['lieuNaissance']).', le '.strtoupper($eleve['dateNaissance']);?>" disabled>
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password2"><h4>Ecole</h4></label>
                                    <input type="password" class="form-control" name="password2" id="password2" placeholder="" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn btn-lg btn-success" type="submit"><i class="fa fa-plus"></i> Modifier</button>
                                </div>
                            </div>
                        </form>
                        <hr>
                    </div><!--/tab-pane-->
                </div><!--/tab-pane-->
            </div><!--/tab-content-->
        </div><!--/col-9-->
    </div>
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