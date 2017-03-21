<!DOCTYPE html>
<html>
<?php require 'header.php' ?>
<body>
	<?php require "navbar.php"; ?>
	<?php require'PHPMailer/class.phpmailer.php'; ?>
	<?php require 'fonction.php'; ?>
	<?php
		if(isset($_POST['comment'])){
			$mail = new PHPMailer();
			$mail->IsSMTP(); //TEST
			echo "test1<br>"; //TEST
			$mail->SMTPAuth = true;
	        $mail->Host = 'smtp.gmail.com';
	        $mail->Port = 25; // Par défaut
	        $mail->CharSet = "utf-8";
	        // Expéditeur
	        $mail->SetFrom( $_POST['send'], $_POST['name']);
	        // Destinataire
	        $mail->AddAddress('alexisbenard038@gmail.com');
	        // Objet
	        $mail->Subject = $_POST['objet'];
	        // Votre message
	        $mail->MsgHTML($_POST['comment']);

	        /*TEST VINCENT
	        $m = new PHPMailer;
            $m->isSMTP();
            $m->SMTPAuth = true;
            //$m->SMTPDebug = 2;
            $m->Host = 'smtp.gmail.com';
            $m->Username = "sportcrew.website@gmail.com";
            $m->Password = "Sportcrew123456";    
            $m->SMTPSecure = 'ssl';
            $m->Port = 465;
            $m->From = $_POST["email"];
            $m->FromName = $_POST["lastname"] . " " . $_POST["firstname"];
            $m->addReplyTo('replyto@example.com', 'First Last');
            $m->addAddress("sportcrew.website@gmail.com", "sportcrew");
            $m->Subject = $_POST["object"];
            $m->Body = "L'utilisateur " . $_POST["lastname"] . " " . $_POST["firstname"] . " (" . $_POST["email"] . ")envoyé le message suivant :<br><br>" . $_POST["message"];
            $m->AltBody = 'Email de confirmation';

	        if(!$mail->Send()) {
	        	echo $_POST['comment'];
	        	echo $_POST['objet'];
	        	echo $_POST['send'];
	        	echo $_POST['name'];
              echo 'Erreur : ' . $mail->ErrorInfo.'<br>';
            } else {
              ?> 
                  <meta charset="utf-8">
                  <p class='text-center'>Message envoyé avec succes</p>
                  <meta http-equiv="refresh" content="5;game.php">
                <?php
            }*/
		}
	?>
	<div class="contact">
		<div class="row">
			<div class="container">
				<div class="area-link col-md-6">
					<legend class="text-center contact-title"><b>Liens Utiles</b></legend>
	                <a href="#" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-facebook fa-2x"></i> <span class="network-name">Facebook</span></a><br><br>
	                <a href="#" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-twitter fa-2x"></i> <span class="network-name">Twitter</span></a><br><br>
	                <a href="http://www.esgi.fr/ecole-informatique.html" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-graduation-cap fa-2x"></i> <span class="network-name">ESGI</span></a>
				</div>
				<div class="area-contact col-md-6">
					<legend class="text-center contact-title"><b>Nous contacter</b></legend>
					<center>
						<form method="POST" action="">
							<div class="form-group">
	                            <label for="text"><b>Votre nom</b></label>
	                            <input name="name" type="text" class="form-control" placeholder="Votre nom">
	                        </div>

							<div class="form-group">
	                            <label for="text"><b>Votre adresse mail</b></label>
	                            <input name="send" type="mail" class="form-control" placeholder="Votre adresse mail">
	                        </div>

	                        <div class="form-group">
	                            <label for="text"><b>Objet</b></label>
	                            <input name="objet" type="text" class="form-control" placeholder="Objet de votre message">
	                        </div>

	                        <div class="form-group">
	                            <label for="text"><b>Message</b></label>
	                            <textarea name="comment" class="form-control" placeholder="Votre message"></textarea>
	                        </div>

	                        <button class="btn btn-primary">Envoyer</button>
	                    </form>
					</center>
				</div>
			</div>
		</div>
	</div>
	<?php require "footer.php" ?>
	<?php require "js.php" ?>
</body>
</html>