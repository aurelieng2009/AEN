<?php
require "init.php";

date_default_timezone_set('Etc/UTC');

$error = FALSE;

if( isset($_POST['lastname']) &&
	isset($_POST['firstname']) &&
	isset($_POST['mail']) &&
	isset($_POST["password"]) &&
	isset($_POST["password_verif"]) &&
	isset($_POST["cgu"]) ){

		echo "lol";

	$_POST['firstname'] = trim($_POST['firstname']);
	$_POST['lastname'] = trim($_POST['lastname']);
	$_POST['mail'] = strtolower($_POST['mail']);

	if($error){
		header("Location: register.php");
		echo "salut";
	}
	else{
		$bdd = connectBdd();
		$access_token=md5(uniqid());
	}

	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);


	$query = $bdd->prepare(" INSERT INTO member (lastname,firstname,mail,password,rank,birthday,kind,country,active,accesstoken)
	VALUES ( :lastname , :firstname , :mail , :password ,'0', :birth , '0' , 'fr' ,'0', :accesstoken)");

	echo $query->execute([
		"lastname" => $_POST["lastname"],
		"firstname" => $_POST["firstname"],
		"mail" => $_POST["mail"],
		"password"=>$password,
		"birth"=>$_POST["birthday"],
		"accesstoken"=>$access_token
		]);

		echo " lol ";
	//header("Location: index.php");
}
