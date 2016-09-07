    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Curriculum vitae</a>
        </div>
	
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	        <ul class="nav navbar-nav">
		        
		        <li><a href="<?= base_url('accueil')?>" >Accueil</a></li>
		        
		        <li><a href="<?= base_url('utilisateur')?>" >Utilisateur</a></li>
		        
		        <li><a href="<?= base_url('cv')?>" >CV</a></li>
		        
		        <li><a href="<?= base_url('rubrique')?>" >Rubrique du CV</a></li>
		        
		        <li><a href="<?= base_url('accueil/logout')?>" >Deconnexion</a></li>
		        
	        </ul>
	    </div>

      </div>
    </nav>
<br>
<div class="clearfix"></div>
<!-- si on a un message d'information quelconque on l'affiche dans cette <div> -->
<?php if(isset($_SESSION['info'])):?>
	<div class="alert alert-success text-center" id="alert-message"><span class="MsgInfo"><?=$_SESSION['info'];?></span></div>
<?php endif;?>

	    