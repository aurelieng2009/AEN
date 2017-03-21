<?php require "init.php" ?>
<!DOCTYPE html>
<html>
<?php require 'header.php' ?>
<body>
	<?php require "navbar.php" ?>
	<div class="area-under-nav-register">
		<div class="col-xs-4 formulaire-photo-one"></div>
		<div class="col-xs-4 formulaire">
			<form method="POST" action="verify.php">
				<legend class="text-center space-legend">Inscription</legend>
				<label class="space-label" for="texte">Nom : </label>
				<input type="text" id="lastname" name="lastname" placeholder="Votre Nom" class="form-control space-input">
				<label class="space-label" for="texte">Prenom : </label>
				<input type="text" id="firstname" name="firstname" placeholder="Votre Prénom" class="form-control space-input">
				<label class="space-label" for="texte">Mail : </label>
				<input type="mail" id="mail" name="mail" placeholder="Votre Mail" class="form-control space-input">
				<label class="space-label" for="texte">Mot de passe : </label>
				<input type="password" id="password" name="password" placeholder="Votre Mot de passe" class="form-control space-input">
				<label class="space-label" for="texte">Vérification mot de passe : </label>
				<input type="password" id="password_verif" name="password_verif" placeholder="Vérification mot de passe" class="form-control space-input">
				<input type="checkbox" name="cgu" required><span class="cgu"> J'accepte les <a href="cgu.php">CGUs</a></span></br></br>

				<input type="date" name="birthday"
				placeholder="Votre email" value="<?php echo (isset($_POST["birthday"]))?$_POST["birthday"]:""; ?>" required><br>

				Genre :
							<?php
							foreach ($list_of_kind as $key => $value) {

								if( isset($_POST["genre"]) && $key == $_POST["genre"]){
									echo "<label><input type='radio' checked='checked' name='genre' value='".$key."'>".$value."</label>";
								}else{
									echo "<label><input type='radio' name='genre' value='".$key."'>".$value."</label>";
								}
							}
							?>


				<button class="btn btn-warning">Valider</button>
			</form>
		</div>
		<div class="col-xs-4 formulaire-photo-two"></div>
		<?php require "footer.php" ?>
	</div>
	<?php require "js.php" ?>
</body>
</html>
