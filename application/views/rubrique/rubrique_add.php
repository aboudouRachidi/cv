

<div class="container">
	<div class="jumbotron">			 
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
                    	<textarea name="contenu" rows="18" cols="" class="form-control"  id="InputAdresse" placeholder="Contenu" required><?=set_value('contenu')?></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>                   
				
				<input type="submit" class="btn btn-primary" value="VALIDER">
			 
	</form>
	</div>
	
		        <!-- Content Row -->
	        <div class="row">
	        	<?php if(!empty($rubriques)):?>
				<?php foreach ($rubriques as $rubrique):?>
					<!-- .col-md-4 -->
		            <div class="col-md-4">
		                <h2><?= $rubrique->titre?></h2>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
		                <a class="btn btn-success btn-xs" href="<?=base_url('cv/update_cv/'.$cv->idcv)?>">Modifier</a>
		            </div>
		            <!-- /.col-md-4 -->
				<?php endforeach; ?>
				<?php endif; ?>
	
	        </div>
	        <!-- /.row -->
</div>


