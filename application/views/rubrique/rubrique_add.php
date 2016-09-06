

<div class="container">
			 
	<form action="rubrique" method="POST">
			 
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Champs requis</strong></div>
                
				<div class="form-group">
					<label for="cv">Selectionner le cv:</label>
					<select class="form-control" name="cv" id="cv">
						<?php if(!empty($cvs)):?>
						<?php foreach ($cvs as $cv):?>
						      <option value="<?=$cv->idcv?>"><?= $cv->accroche?></option>
						<?php endforeach; ?>
						<?php endif; ?>
					</select>
      			</div>
      			
                <div class="form-group">
                    <label for="titre">Titre : </label><?= form_error('titre', '<div class="alert alert-danger">','</div>');?>
                    <div class="input-group">
                        <input name="titre" type="text" value="<?= set_value('titre')?>" class="form-control"  id="InputTitre" placeholder="Titre" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

             	<div class="form-group">
                    <label for="contenu">Contenu : </label><?= form_error('contenu', '<div class="alert alert-danger">','</div>');?>
                    <div class="input-group">
                    	<textarea name="contenu" rows="" cols="" class="form-control"  id="InputAdresse" placeholder="Contenu" required><?=set_value('contenu')?></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>                   
				
				<input type="submit" class="btn btn-primary" value="VALIDER">
			 
	</form>
</div>


