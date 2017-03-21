<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="contenu" content="contenu">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login-AEN</title>
</head>
<body>
	<?php require "navbar.php" ?>
	<div class="area-under-nav-register">
		<div class="col-xs-4 formulaire-photo-one"></div>
		<div class="col-xs-4 formulaire">
	<form method="POST" action="login_check.php">

		<legend class="text-center space-legend">Connexion</legend>
		<label class="space-label" for="texte">adresse mail: </label>

            <input type="text" name="mail"
                class="form-control space-input" placeholder="mail" value="<?php echo (isset($_POST["mail"]))?$_POST["mail"]:""; ?>" required><br>
<label class="space-label" for="texte">mot de passe: </label>
            <input type="password" name="password"
                class="form-control space-input" placeholder="mot de passe" value="" required><br>
            <input class="form-control space-input" type="submit" value="Enregistrer"><br>
		</form>
	</div>
</div>
	<?php require "js.php" ?>
</body>
</html>
