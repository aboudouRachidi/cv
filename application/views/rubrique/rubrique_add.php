<?php if(!empty($cvs)):?>
<?php foreach ($cvs as $cv):?>
<div class="container">
	<div class="jumbotron">			 
	<form action="<?=base_url('rubrique/index/'.$this->uri->segment(3))?>" method="POST">
			 
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Champs requis</strong></div>
                
				<div class="form-group">
					<label for="cv">Accroche cv:</label>
					<input type="hidden" class="form-control" name="idcv" id="idcv" value="<?=$cv->idcv?>">
					<input type="text" class="form-control" name="accroche" readonly="readonly" value="<?= $cv->accroche?>">

      			</div>
      			
                <div class="form-group">
                    <label for="titre">Titre rubrique : </label><?= form_error('titre', '<div class="alert alert-danger">','</div>');?>
                    <div class="input-group">
                        <input name="titre" type="text" value="<?= set_value('titre')?>" class="form-control"  id="InputTitre" placeholder="Titre" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

             	<div class="form-group">
                    <label for="contenu">Contenu : </label><?= form_error('contenu', '<div class="alert alert-danger">','</div>');?>
                    <div class="input-group">
                    	<textarea name="contenu" rows="18" cols="" class="form-control"  id="InputAdresse" placeholder="Contenu" required><?=set_value('contenu')?></textarea>
                    	            <script>
						                // Replace the <textarea id="editor1"> with a CKEditor
						                // instance, using default configuration.
						                CKEDITOR.replace( 'contenu' );
						            </script>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>                   
				
				<input type="submit" class="btn btn-primary" value="VALIDER">
			 
	</form>
	</div>
</div>
<?php endforeach; ?>
<?php endif; ?>

