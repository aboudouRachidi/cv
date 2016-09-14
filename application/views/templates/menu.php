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
		        
		        <li><a href="<?= base_url('accueil')?>" ><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Accueil</a></li>
		     
		     <?php if(isset($_SESSION['auth']['id'])){?>   
		        <li><a href="<?= base_url('utilisateur')?>" ><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Mon profil</a></li>
		        
		        <li><a href="<?= base_url('cv')?>" ><i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp;Cv</a></li>
		        
		        
		      
				<li role="presentation" class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
						<?=$_SESSION['auth']['email']?> <span class="caret"></span>
					</a>
				<ul class="dropdown-menu">
				      <li><a href="<?= base_url('accueil/logout')?>" ><i class="fa fa-power-off" aria-hidden="true"></i>&nbsp;Deconnexion</a></li>
				</ul>
				</li>
		      <?php }?>  
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
