

<div class="container">
			 
	<form action="langue" method="POST">
			 
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Champs requis</strong></div>
                
                <div class="form-group">
                    <label for="libelle">Libelle : </label><?= form_error('libelle', '<div class="alert alert-danger">','</div>');?>
                    <div class="input-group">
                        <input name="libelle" type="text" value="<?= set_value('libelle')?>" class="form-control"  id="InputLibelle" placeholder="Libelle" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                                
                <div class="form-group">
                    <label for="niveau">Niveau : </label><?= form_error('niveau', '<div class="alert alert-danger">','</div>');?>
                    <div class="input-group">
                        <input name="niveau" type="text" value="<?= set_value('niveau')?>" class="form-control"  id="InputNiveau" placeholder="Niveau" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                

				<input type="submit" class="btn btn-primary" value="VALIDER">
			 
	</form>
</div>


