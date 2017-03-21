<?php

function connectBdd(){
	try{
		$bdd = new PDO("mysql:dbname=aen;host=localhost","root","");
	}catch(Exception $e){
		die("Erreur: ".$e->getMessage());
	}
	return $bdd;
}

function isConnected(){
	if (!isset($_SESSION['mail']))
		return false;
	$bdd=connectBdd();
	$query = $bdd -> prepare('SELECT mail,accesstoken FROM utilisateur WHERE mail = :email AND accesstoken= :access_token');
	$query-> execute([
		"email"=> $_SESSION['mail'],
		"access_token" => $_SESSION['access_token']]);
		return true;
}

	function generateAccessToken($email){
	$access_token =md5(uniqid());
	$bdd=connectBdd();
	$query= $bdd -> prepare("UPDATE utilisateur SET access_token = :email WHERE email=:access_token");
	$query -> execute(["email"=>$access_token, "access_token"=> $email]);
	return $access_token;
}
