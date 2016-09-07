<?php if(!empty($cvs)):?>
<?php foreach ($cvs as $cv):?>
						      


<div class="container">
	<div class="jumbotron">			 
	<form action="<?=base_url('cv/update_cv/'.$this->uri->segment(3))?>" method="POST">
			 
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Champs requis</strong></div>
                
                <div class="form-group">
                    <label for="accroche">Accroche : </label><?= form_error('accroche', '<div class="alert alert-danger">','</div>');?>
                    <div class="input-group">
                        <input name="accroche" type="text" value="<?= $cv->accroche?>" class="form-control"  id="InputAccroche" placeholder="Accroche" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="version">Version : </label><?= form_error('version', '<div class="alert alert-danger">','</div>');?>
                    <div class="input-group">
                        <input name="version" type="number"  readonly value="<?=$cv->num_version + 1 ?>" class="form-control"  id="InputVersion" placeholder="Version" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>                    

				<input name="idUtilisateur" type="hidden" class="form-control" value="1" required>
				
				<input type="submit" class="btn btn-primary" value="Modifier">
				<a class="btn btn-danger" href="<?= base_url('cv')?>">Retour</a>
			 
	</form>
	</div>
</div>


<?php endforeach; ?>
<?php endif; ?>