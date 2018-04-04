        <div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
  	       <h3><?=$title?></h3>
  	         <div class="col-md-4 email-list1">
         <div class="content-box  mrg15B">
          <div class="content-box-wrapper text-center">
            <h4 class="content-box-header">
            Chat
            <small>(En ligne)</small>
            </h4>
            <div class="status-badge mrg10A">
                <img class="img-circle" width="40" src="<?=base_url("/assets/admin/images/1.png")?>" alt="">
                <div class="small-badge bg-red"></div>
            </div>
            <div class="status-badge mrg10A">
                <img class="img-circle" width="40" src="<?=base_url("/assets/admin/images/2.png")?>" alt="">
                <div class="small-badge bg-orange"></div>
            </div>
            <div class="status-badge mrg10A">
                <img class="img-circle" width="40" src="<?=base_url("/assets/eleve/images/3.png")?>" alt="">
                <div class="small-badge bg-red"></div>
            </div>
          </div>
        </div>
        </div>
        <div class="col-md-8 inbox_right">
        	<div class="Compose-Message">               
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Composer un message
                    </div>
                    <div class="panel-body">
                        <hr>
                        <label for="rec">Entrer le destinataire : </label>
                        <input id="rec" name="receiver" type="text" class="form-control1 control3">
                        <label for="sujet">Enter Subject :  </label>
                        <input id="sujet" name="sujet" type="text" class="form-control1 control3">
                        <label for="msg">Enter Message : </label>
                        <textarea id="msg" name="msg" rows="6" class="form-control1 control2"></textarea>
                        <hr>
                        <button type="submit" class="btn btn-warning btn-warng1"><span class="glyphicon glyphicon-envelope tag_02"></span> Envoyer </button>&nbsp;
                        </div>
                 </div>
              </div>
         </div>
         <div class="clearfix"> </div>
   </div>