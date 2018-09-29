 
<div id="page-wrapper">
    <div class="col-md-2"></div>
<!--    <div class="col-md-8">-->
<!--        <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><h1>CONFER DISK DUR  DE AMPIRE</h1>-->
<!--    </div>-->
    <h1 class="">Journal de Classe</h1>
    <div class="col-md-8 inbox_right">
        <form action="#" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control1 input-search" placeholder="Search...">
                <span class="input-group-btn">
                        <button class="btn btn-success" type="button"><i class="fa fa-search"></i></button>
                    </span>
            </div><!-- Input Group -->
        </form>
        <div class="mailbox-content">

            <table class="table">
                <tbody>
                <?php
                foreach ($resultats as $resultat) {
                ?>
                <tr class="unread checked">
                    <td class="hidden-xs">
                        <i class="fa fa-star icon-state-warning"></i>
                    </td>
                    <td class="">
                        <?= $resultat['jour.nom']?>
                    </td>
                    <td>
                        De <?= $resultat['horaire.heureDebut']?> à <?= $resultat['horaire.heureFin']?>
                    </td>
                    <td>
                    <?= $resultat['matiere.nom']?>
                    </td>
                    <td>
                        <?= $resultat['horaire.date']?>
                    </td>
                </tr>
                <?php }?>
                <tr class="unread checked">
                    <td class="hidden-xs">
                        <i class="fa fa-star icon-state-warning"></i>
                    </td>
                    <td class="">
                        Mardi
                    </td>
                    <td>
                        6h de cours : de 7h 30 à 12h 50
                    </td>
                    <td>
                        Physique
                    </td>
                    <td>
                        13 septembre
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
    <div class="clearfix"></div>
<!--    <div class="col-md-2"></div>-->
</div>