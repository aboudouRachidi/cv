

<div class="container">
	<div class="jumbotron">		 
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
                        <input name="version" readonly type="number"  value="0" class="form-control"  id="InputVersion" placeholder="Version" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>                    

				<input name="idUtilisateur" type="hidden" class="form-control" value="<?=$_SESSION['auth']['id']?>" required>
				
				<input type="submit" class="btn btn-primary" value="VALIDER">
			 
	</form>
	</div>
	
        <!-- Content Row -->
        <div class="row">
        	<?php if(!empty($cvs)):?>
			<?php foreach ($cvs as $cv):?>
				<!-- .col-md-4 -->
	            <div class="col-md-4 well">
	                <h3><i class="fa fa-file-text-o" aria-hidden="true"></i> <?= $cv->accroche?></h3>
						<i class="fa fa-calendar-check-o" aria-hidden="true"></i>&nbsp;<?php $bad_date = $cv->date_creation; echo $better_date = nice_date($bad_date, 'd-m-Y H:i:s')?><br>
						<i class="fa fa-cog" aria-hidden="true"> Version</i>&nbsp;<?=$cv->num_version?><br>
	                <a class="btn btn-success btn-xs" href="<?=base_url('cv/viewCv/'.$cv->idcv)?>">Afficher</a>
	            </div>
	            <!-- /.col-md-4 -->
			<?php endforeach; ?>
			<?php endif; ?>

        </div>
        <!-- /.row -->
</div>


