

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
	            <div class="col-md-4">
	                <h2><?= $cv->accroche?></h2>
	                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
	                <a class="btn btn-success btn-xs" href="<?=base_url('cv/update_cv/'.$cv->idcv)?>">Modifier</a>
	            </div>
	            <!-- /.col-md-4 -->
			<?php endforeach; ?>
			<?php endif; ?>

        </div>
        <!-- /.row -->
</div>


