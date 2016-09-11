<?php if(!empty($cvs)):?>
<?php foreach ($cvs as $cv):?>
						      


<div class="container">
	<div class="jumbotron">	
		<?php foreach ($users as $user):?>
		<fieldset>
		<legend class="bg-success">Informations Personnel</legend>
		<div class="well">
			<address>
				<strong><i class="fa fa-user" aria-hidden="true"></i>&nbsp;<?=$user->nom.' '.$user->prenom;?></strong>
				<a class="btn btn-info btn-xs" href="#">Modifier les informations</a><br>
						<i class="fa fa-calendar-check-o" aria-hidden="true"></i>&nbsp;<?php $bad_date = $cv->date_creation; echo $better_date = nice_date($bad_date, 'd-m-Y H:i:s')?><br>
						<i class="fa fa-cog" aria-hidden="true"> Version</i>&nbsp;<?=$cv->num_version?><br>
						<p id="accroche" class="text-center"><?= $cv->accroche?>
						<a href="<?=base_url('cv/update_cv/'.$this->uri->segment(3))?>" class="text-center">
						<i class="fa fa-pencil-square-o" aria-hidden="true" ></i></a>
						
						</p>
						
			</address>
		</div>
		</fieldset>
		<?php endforeach;?>	

		<form action="<?=base_url('cv/update_cv/'.$this->uri->segment(3))?>" method="POST">
	                <!-- 
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
					-->
				
					<fieldset>
					<legend class="bg-success">Rubriques</legend>
					<span>
						<a class="btn btn-warning btn-xs" href="<?=base_url('rubrique/index/'.$cv->idcv)?>">Ajouter une rubrique</a>
					</span>
				<div class="well">
						<?php if(!empty($rubriques)):?>
						<?php foreach ($rubriques as $rubrique):?>
							<p class="col-md-12 bg-primary"><?= $rubrique->titre?></p>
					
							<div class="col-md-8">
								<?= $rubrique->contenu?>
							</div>
							
							<div class="col-md-4">
								<a href="#" type="button" class="btn btn-default btn-xs" title='Rubrique "<?= $rubrique->titre?>" Position +1'>
									<i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>
								<a href="#" type="button" class="btn btn-default btn-xs" title='Rubrique "<?= $rubrique->titre?>" Position -1'>
									<i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
								<a href="<?=base_url('rubrique/update_rubrique/'.$rubrique->idrubrique.'/'.$rubrique->idcv)?>" type="button" class="btn btn-success btn-xs" title="Modifier">
									<i class="fa fa-pencil-square" aria-hidden="true" ></i></a>
								<a href="#" type="button" class="btn btn-danger btn-xs" title="Supprimer">
									<i class="fa fa-times" aria-hidden="true"></i></a>
							</div>
						<?php endforeach;?>
						<?php endif;?>
						<div class="clearfix"></div>
				</div>
					
					</fieldset>	
		
					<input name="idUtilisateur" type="hidden" class="form-control" value="1" required>
					
					<!-- <input type="submit" class="btn btn-primary" value="Modifier"> -->
					<a class="btn btn-danger" href="<?= base_url('cv')?>">Retour</a>
				 
		</form>
	</div>
</div>


<?php endforeach; ?>
<?php endif; ?>