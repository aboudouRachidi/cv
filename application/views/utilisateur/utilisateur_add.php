

<div class="container">
	
	<form action="utilisateur" method="POST">
			 
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
                    <label for="prenom">Adresse : </label><?= form_error('adresse', '<div class="alert alert-danger">','</div>');?>
                    <div class="input-group">
                    	<textarea name="adresse" rows="" cols="" class="form-control"  id="InputAdresse" placeholder="Adresse" required><?=set_value('adresse')?></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="cp">Code Postale : </label><?= form_error('cp', '<div class="alert alert-danger">','</div>');?>
                    <div class="input-group">
                        <input name="cp" type="text" value="<?=set_value('cp')?>" class="form-control"  id="InputCp" placeholder="Code postale" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="ville">Ville : </label><?= form_error('ville', '<div class="alert alert-danger">','</div>');?>
                    <div class="input-group">
                        <input name="ville" type="text" value="<?=set_value('ville')?>" class="form-control"  id="InputVille" placeholder="Ville" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="fixe">Fixe : </label><?= form_error('fixe', '<div class="alert alert-danger">','</div>');?>
                    <div class="input-group">
                        <input name="fixe" type="text" value="<?=set_value('fixe')?>" class="form-control"  id="InputFixe" placeholder="Tel fixe" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="mobile">Mobile : </label><?= form_error('mobile', '<div class="alert alert-danger">','</div>');?>
                    <div class="input-group">
                        <input name="mobile" type="text" value="<?=set_value('mobile')?>" class="form-control"  id="InputMobile" placeholder="Tel Mobile" required>
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

				<input type="submit" class="btn btn-primary" value="VALIDER">
			 
	</form>
</div>


