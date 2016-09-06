

<div class="container">
			 
	<form action="cv" method="POST">
			 
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Champs requis</strong></div>
                
                <div class="form-group">
                    <label for="accroche">Accroche : </label><?= form_error('accroche', '<div class="alert alert-danger">','</div>');?>
                    <div class="input-group">
                        <input name="accroche" type="text" value="<?= set_value('accroche')?>" class="form-control"  id="InputAccroche" placeholder="Accroche" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="version">Version : </label><?= form_error('version', '<div class="alert alert-danger">','</div>');?>
                    <div class="input-group">
                        <input name="version" type="number"  value="0" class="form-control"  id="InputVersion" placeholder="Version" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>                    

				<input name="idUtilisateur" type="hidden" class="form-control" value="1" required>
				
				<input type="submit" class="btn btn-primary" value="VALIDER">
			 
	</form>
</div>


