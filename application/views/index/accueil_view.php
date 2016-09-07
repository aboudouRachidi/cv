<?php
var_dump($_SESSION);
?>
<!-- Page Content -->
<div class="container">

<!-- Heading Row -->
	<div class="row">
		<div class="col-md-8">
			<img class="img-responsive img-rounded" src="<?=base_url()?>assets/images/nature.jpg" alt="">
		</div>
<!-- /.col-md-8 -->

		<div class="col-md-4">
			<?php foreach ($users as $user):?>
			<h1></h1>
			
				<div class="well">
					<address>
						<strong><i class="fa fa-user" aria-hidden="true"></i>&nbsp;<?=$user->nom.' '.$user->prenom;?></strong><br>
								<?=$user->adresse?><br>
								<?=$user->cp.', '.$user->ville?><br>
					</address>
					
					<address>
						<strong>E-mail</strong><br>
							<a href="mailto:daxipol@gmail.com"><?=$_SESSION['auth']['email']?></a><br>
							<abbr title = "Tel"><i class="fa fa-phone"></i></abbr> <?=$user->mobile?>
					</address>
					<a class="btn btn-primary btn-xm" href="<?=base_url('cv')?>">Créer un CV!</a>
				</div>
			<p>
	
		</div>
            <!-- /.col-md-4 -->
            <?php endforeach;?>
    </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Well -->
        <div class="row">
            <div class="col-lg-12">
                <div class="well text-center">
                    Mes Curriculum vitae
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

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
    <!-- /.container -->
