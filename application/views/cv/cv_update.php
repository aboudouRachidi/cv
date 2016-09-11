<?php if(!empty($cvs)):?>
<?php foreach ($cvs as $cv):?>
						      


<div class="container">
	<div class="jumbotron">	
		<?php foreach ($users as $user):?>
		<div class="well">
			<address>
				<strong><i class="fa fa-user" aria-hidden="true"></i>&nbsp;<?=$user->nom.' '.$user->prenom;?></strong><br>
						<i>Version </i><?=$cv->num_version?><br>
						<i></i><?=$cv->date_creation?><br>
			</address>
			<label>Accroche</label>
			
			<i><?= $cv->accroche?></i> 
		</div>
		<?php endforeach;?>	 
		<form action="<?=base_url('cv/update_cv/'.$this->uri->segment(3))?>" method="POST">
	                
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
					<a class="btn btn-danger" href="<?= base_url('cv/viewCv/'.$this->uri->segment(3))?>">Retour</a>
				 
		</form>
	</div>
</div>


<?php endforeach; ?>
<?php endif; ?>