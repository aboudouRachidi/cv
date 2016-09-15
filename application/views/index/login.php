
<!-- login -->
<div class="container">
<?php if(isset($error)):?>
	<div class="alert alert-warning"> <?php echo $error;?></div>
<?php endif;?>
		<div class="col-md-6" data-wow-delay="0.4s">
			<h3>Connexion utilisateurs</h3>
			<p>Veuillez vous connecter s'il vous plaît.</p>
		<div class="jumbotron">
		<form action="login" method="POST">
			<div class="form-group">
				<label for="email">E-mail :<span>*</span></label>
				<input name="email" type="email" value="<?php echo set_value('email')?>" placeholder="Email" class="form-control"> 
			</div>
			<div class="form-group">
				<label for="pwd">Mot de passe :<span>*</span></label>
				<input name="mdp" type="password" placeholder="Mot de passe" class="form-control" id="pwd">
			</div>
			
			<input type="submit" value="Connexion" class="btn btn-success">
		</form>
		</div>
	</div>
	
	
	<div class="col-md-6">
			<h3>Inscription utilisateurS</h3>
			<p>Pas encore inscrit ? Inscrivez-vous dès maintenant pour créer votre CV en ligne.</p>
		<div class="jumbotron">	
	<form action="<?=base_url('utilisateur/newUser')?>" method="POST">
			 
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Champs requis</strong></div>
                
                <div class="form-group">
                    <label for="nom">Nom : </label><?= form_error('nom', '<div class="alert alert-danger">','</div>');?>
                    <div class="input-group">
                        <input name="nom" type="text" value="<?= set_value('nom')?>" class="form-control"  id="InputName" placeholder="Nom" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="prenom">Prenom : </label><?= form_error('prenom', '<div class="alert alert-danger">','</div>');?>
                    <div class="input-group">
                        <input name="prenom" type="text" value="<?=set_value('prenom')?>" class="form-control"  id="InputFirstName" placeholder="Prenom" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
				<div class="form-group">
                    <label for="email">E-mail : </label><?= form_error('email', '<div class="alert alert-danger">','</div>');?>
                    <div class="input-group">
                        <input name="email" type="email" value="<?= set_value('email')?>" class="form-control" id="InputEmailFirst" placeholder="Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="pseudo">Pseudo : </label><?= form_error('pseudo', '<div class="alert alert-danger">','</div>');?>
                    <div class="input-group">
                        <input name="pseudo" type="text" value="<?=set_value('pseudo')?>" class="form-control"  id="InputPseudo" placeholder="Pseudo" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
               <div class="form-group">
                    <label for="mdp">Mot de passe : </label><?= form_error('mdp', '<div class="alert alert-danger">','</div>');?>
                    <div class="input-group">
                        <input name="mdp" type="password" class="form-control"  id="InputMdp" placeholder="Mot de passe" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
               </div>
               
               <div class="form-group">
                    <label for="mdp">Confirmer Mot de passe : </label><?= form_error('confirmMdp', '<div class="alert alert-danger">','</div>');?>
                    <div class="input-group">
                        <input name="confirmMdp" type="password" class="form-control"  id="InputMdp" placeholder="Confirmer Mot de passe" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
               </div>

				<input type="submit" class="btn btn-primary" value="Inscription">
    </form>
    </div>	
	</div>
</div>
<!-- login -->