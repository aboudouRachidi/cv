
<!-- login -->
<div class="container">
<?php if(isset($error)):?>
	<div class="alert alert-warning"> <?php echo $error;?></div>
<?php endif;?>
		<div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
			<h3>Connexion utilisateurs</h3>
			<p>Veuillez vous connecter s'il vous plaît.</p>
		<form action="login" method="POST">
			<div class="form-group">
				<label for="email">E-mail<span>*</span></label>
				<input name="email" type="email" value="<?php echo set_value('email')?>" class="form-control"> 
			</div>
			<div class="form-group">
				<label for="pwd">Password:<span>*</span></label>
				<input name="mdp" type="password" class="form-control" id="pwd">
			</div>
			
			<input type="submit" value="Connexion" class="btn btn-success">
		</form>
	</div>
</div>
<!-- login -->