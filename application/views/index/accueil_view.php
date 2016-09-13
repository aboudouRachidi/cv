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
							<a href="#"><?=$_SESSION['auth']['email']?></a><br>
							<abbr title = "Tel"><i class="fa fa-phone"></i></abbr> <?=$user->mobile?>
					</address>
					<a class="btn btn-primary btn-xm" href="<?=base_url('cv')?>">Créer un CV!</a>
				</div>

	
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
				
				<!-- .col-md-6 -->
	            <div class="col-md-6 jumbotron">
	            	<div class="well">
						<address>
							<strong><i class="fa fa-user" aria-hidden="true"></i>&nbsp;<?=$user->nom.' '.$user->prenom;?></strong><br>
									<i class="fa fa-calendar-check-o" aria-hidden="true"></i>&nbsp;<?php $bad_date = $cv->date_creation; echo $better_date = nice_date($bad_date, 'd-m-Y H:i:s')?><br>
						<i class="fa fa-cog" aria-hidden="true"> Version</i>&nbsp;<?=$cv->num_version?><br>
						</address>
						<label>Accroche</label>
						
						<i><?= $cv->accroche?></i>
					</div>
					<!-- /.well -->
	                <a class="btn btn-success btn-xs" href="<?=base_url('cv/viewCv/'.$cv->idcv)?>">Editer</a>
	            </div>
	            <!-- /.col-md-6 -->
			<?php endforeach; ?>
			<?php endif; ?>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
