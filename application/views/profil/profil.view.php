

<div class="container">
			 
	<form action="register" method="POST">
			 
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
                    	<textarea name="adresse" type="text" rows="" cols="" class="form-control"  id="InputAdresse" placeholder="Prenom" required>
                    		value="<?=set_value('prenom')?>"
                    	</textarea>
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
                    <label for="ville">Ville : </label><?= form_error('prenom', '<div class="alert alert-danger">','</div>');?>
                    <div class="input-group">
                        <input name="ville" type="text" value="<?=set_value('ville')?>" class="form-control"  id="InputVille" placeholder="Ville" required>
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

				<input type="submit" value="VALIDER">
			 
	</form>
</div>


