    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?= base_url('accueil')?>">Curriculum vitae</a>
        </div>
	
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	        <ul class="nav navbar-nav">
		        
		        <li><a href="<?= base_url('accueil')?>" >Accueil</a></li>
		        
		        <li><a href="<?= base_url('utilisateur')?>" >Mon profil</a></li>
		        
		        <li><a href="<?= base_url('cv')?>" >CV</a></li>
		        
		        <li><a href="<?= base_url('accueil/logout')?>" >Deconnexion</a></li>
		        
	        </ul>
	    </div>
			<!-- si on a un message d'information quelconque on l'affiche dans cette <div> -->
			<?php if(isset($_SESSION['info'])):?>
				<div class="alert alert-success text-center" id="alert-message">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<span class="MsgInfo"><?=$_SESSION['info'];?></span>
				</div>
			<?php endif;?>
			<?php if(isset($_SESSION['erreur'])):?>
				<div class="alert alert-danger text-center" id="alert-message">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<span class="MsgErreur"><?=$_SESSION['erreur'];?></span>
				</div>
			<?php endif;?>
			<!-- fin de message -->
      </div>
    </nav>
<div class="clearfix"></div>
