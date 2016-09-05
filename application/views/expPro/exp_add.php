

<div class="container">
			 
	<form action="exppro" method="POST">
			 
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Champs requis</strong></div>
                
                <div class="form-group">
                    <label for="entreprise">Entreprise : </label><?= form_error('entreprise', '<div class="alert alert-danger">','</div>');?>
                    <div class="input-group">
                        <input name="entreprise" type="text" value="<?= set_value('entreprise')?>" class="form-control"  id="InputEntreprise" placeholder="Entreprise" required>
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
                    <label for="ville">Poste : </label><?= form_error('poste', '<div class="alert alert-danger">','</div>');?>
                    <div class="input-group">
                        <input name="poste" type="text" value="<?=set_value('poste')?>" class="form-control"  id="InputPoste" placeholder="Poste" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>                    

				<input type="submit" class="btn btn-primary" value="VALIDER">
			 
	</form>
</div>


