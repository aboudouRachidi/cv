<?php foreach ($users as $user):?>

<div class="container">
<div class="col-md-4">
	<div class="jumbotron">
		<address>
			<strong><i class="fa fa-user" aria-hidden="true"></i>&nbsp; <?=$user->nom.' '.$user->prenom;?></strong><br>
					<i class="fa fa-home" aria-hidden="true"></i>&nbsp;<?=$user->adresse?><br>
					<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; <?=$user->cp.', '.$user->ville?><br>
		</address>
						
		<address>
			<strong><abbr title = "E-mail"><i class="fa fa-envelope" aria-hidden="true"></i></abbr></strong>
				<a href="#"><?=$_SESSION['auth']['email']?></a><br>
				<abbr title = "Tel"><i class="fa fa-phone"></i></abbr> <?=$user->mobile?>
		</address>
		<hr>
		<i class="fa fa-file-text-o" aria-hidden="true"></i> <strong><?=$total_cv?> CV créé(s)</strong>
	</div>
</div>

<div class="col-md-8">
	<div class="jumbotron">	
	<form action="<?=base_url('utilisateur/updateUser')?>" method="POST">

	<div class="col-md-4 well">
		<div class="form-group">
			<label for="nom">Nom : </label><?= form_error('nom', '<div class="alert alert-danger">','</div>');?>
			<div class="input-group">
				<input name="nom" type="text" value="<?=$user->nom?>" class="form-control"  id="InputName" placeholder="Nom" >
				<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
			</div>
		</div>
		                
		<div class="form-group">
			<label for="prenom">Prenom : </label><?= form_error('prenom', '<div class="alert alert-danger">','</div>');?>
			<div class="input-group">
				<input name="prenom" type="text" value="<?=$user->prenom?>" class="form-control"  id="InputFirstName" placeholder="Prenom" >
				<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
		 	</div>
		</div>
		<!--
		<div class="form-group">
			<label for="email">E-mail : </label><?= form_error('email', '<div class="alert alert-danger">','</div>');?>
			<div class="input-group">
				<span class="input-group-addon" id="sizing-addon2">@</span>
				<input name="email" type="email" value="<?=$user->email?>" class="form-control" disabled id="InputEmail" placeholder="Email">
			</div>
		</div>
        -->        
		<div class="form-group">
			<label for="pseudo">Pseudo : </label><?= form_error('pseudo', '<div class="alert alert-danger">','</div>');?>
			<div class="input-group">
				<input name="pseudo" type="text" value="<?=$user->pseudo?>" class="form-control" disabled id="InputPseudo" placeholder="Pseudo">
				<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
			</div>
		</div>
		<!-- Button update pass modal -->
		<a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#updatePassword">Modifier mot de passe</a>		
		

	</div>
	
	<div class="col-md-8 well">	                
		<div class="form-group">
			<label for="prenom">Adresse : </label><?= form_error('adresse', '<div class="alert alert-danger">','</div>');?>
			<div class="input-group">
				<textarea name="adresse" rows="5" cols="" class="form-control"  id="InputAdresse" placeholder="Adresse"><?=$user->adresse?></textarea>
				<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
			</div>
		</div>
		                
		<div class="form-group">
			<label for="cp">Code Postale : </label><?= form_error('cp', '<div class="alert alert-danger">','</div>');?>
			<div class="input-group">
				<input name="cp" type="text" value="<?=$user->cp?>" class="form-control"  id="InputCp" placeholder="Code postale" >
				<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
			</div>
		</div>
		                
		<div class="form-group">
			<label for="ville">Ville : </label><?= form_error('ville', '<div class="alert alert-danger">','</div>');?>
			<div class="input-group">
				<input name="ville" type="text" value="<?=$user->ville?>" class="form-control"  id="InputVille" placeholder="Ville" >
				<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
			</div>
		</div>
		                
		<div class="form-group">
			<label for="fixe">Fixe : </label><?= form_error('fixe', '<div class="alert alert-danger">','</div>');?>
			<div class="input-group">
				<input name="fixe" type="text" value="<?=$user->fixe?>" class="form-control"  id="InputFixe" placeholder="Tel fixe" >
				<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
			</div>
		</div>
		                
		<div class="form-group">
			<label for="mobile">Mobile : </label><?= form_error('mobile', '<div class="alert alert-danger">','</div>');?>
			<div class="input-group">
				<input name="mobile" type="text" value="<?=$user->mobile?>" class="form-control"  id="InputMobile" placeholder="Tel Mobile" >
				<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
			</div>
		</div>
                                 

		<input type="submit" class="btn btn-primary" value="Modifier">
	</div>
	<div class="clearfix"></div>		 
	</form>
	</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="updatePassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
	<form action="<?=base_url('utilisateur/updatePassword')?>" method="POST">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Nouveau Mot de passe</h4>
      </div>
      <div class="modal-body">
 		        
			<div class="form-group">
				<label for="mdp">Mot de passe : </label><?= form_error('mdp', '<div class="alert alert-danger">','</div>');?>
				<div class="input-group">
					<input name="mdp" type="password" class="form-control"  id="InputMdp" placeholder="Mot de passe" required>
					<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
				</div>
			</div>
		
			<div class="form-group">
				<label for="confirmMdp">Confirmer Mot de passe : </label><?= form_error('confirmMdp', '<div class="alert alert-danger">','</div>');?>
				<div class="input-group">
					<input name="confirmMdp" type="password" class="form-control"  id="InputConfirmMdp" placeholder="Confirmer Mot de passe" required>
					<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
				</div>
			</div>
		
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Modifier">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
      </div>
    </div>
    </form>
  </div>
</div>

<?php endforeach;?>