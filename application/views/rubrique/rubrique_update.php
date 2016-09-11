<?php if(!empty($rubriques)):?>
<?php foreach ($rubriques as $rubrique):?>

<div class="container">
	<div class="jumbotron">	
	<form action="<?=base_url('rubrique/update_rubrique/'.$this->uri->segment(3).'/'.$this->uri->segment(4))?>" method="POST">
			 
        <!-- <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Champs requis</strong></div> -->
      			
                <div class="form-group">
                    <label for="titre">Titre : </label><?= form_error('titre', '<div class="alert alert-danger">','</div>');?>
                    <div class="input-group">
                        <input name="titre" type="text" value="<?= $rubrique->titre?>" class="form-control"  id="InputTitre" placeholder="Titre" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

             	<div class="form-group">
                    <label for="contenu">Contenu : </label><?= form_error('contenu', '<div class="alert alert-danger">','</div>');?>
                    <div class="input-group">
                    	<textarea name="contenu" rows="18" cols="" class="form-control"  id="InputAdresse" placeholder="Contenu" required><?= $rubrique->contenu?></textarea>
                    	            <script>
						                // Replace the <textarea id="editor1"> with a CKEditor
						                // instance, using default configuration.
						                CKEDITOR.replace( 'contenu' );
						            </script>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>                   
				
				<input type="submit" class="btn btn-primary" value="Modifier">
				<a class="btn btn-danger" href="<?= base_url('cv/viewCv/'.$this->uri->segment(4))?>">Retour</a>
			 
	</form>
	</div>
</div>

<?php endforeach; ?>
<?php endif; ?>
