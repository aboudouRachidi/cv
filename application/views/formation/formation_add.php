

<div class="container">
			 
	<form action="formation" method="POST">
			 
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Champs requis</strong></div>
                
                <div class="form-group">
                    <label for="libelle">Libelle : </label><?= form_error('libelle', '<div class="alert alert-danger">','</div>');?>
                    <div class="input-group">
                        <input name="libelle" type="text" value="<?= set_value('libelle')?>" class="form-control"  id="InputLibelle" placeholder="Libelle" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="anneeD">Annee Debut: </label><?= form_error('anneeD', '<div class="alert alert-danger">','</div>');?>
                    <div class="input-group">
                        <input name="anneeD" type="date" value="<?=set_value('anneeD')?>" class="form-control"  id="InputAnneeD" placeholder="Annee debut" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="anneeD">Annee Fin: </label><?= form_error('anneeF', '<div class="alert alert-danger">','</div>');?>
                    <div class="input-group">
                        <input name="anneeF" type="date" value="<?=set_value('anneeD')?>" class="form-control"  id="InputAnneeF" placeholder="Annee Fin" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="nom">Etablissement : </label><?= form_error('etablissement', '<div class="alert alert-danger">','</div>');?>
                    <div class="input-group">
                        <input name="etablissement" type="text" value="<?= set_value('etablissement')?>" class="form-control"  id="InputEtablissement" placeholder="Etablissement" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="ville">Lieu : </label><?= form_error('lieu', '<div class="alert alert-danger">','</div>');?>
                    <div class="input-group">
                        <input name="lieu" type="text" value="<?=set_value('lieu')?>" class="form-control"  id="InputLieu" placeholder="Lieu" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>                    


				<input type="submit" class="btn btn-primary" value="VALIDER">
			 
	</form>
</div>


