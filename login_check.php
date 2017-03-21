        <?php require "init.php" ?>
        <?php



 $error=FALSE;

            if(  isset($_POST["mail"]) &&
                isset($_POST["password"])){



                $_POST["mail"] = strtolower(trim($_POST["mail"]));



                $pdo=connectBdd();
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                $login = $_POST["mail"];

                // Vérification des identifiants
                $req = $pdo->prepare('SELECT * FROM member WHERE mail = :mail AND active = 1 ');
                $req->execute(['mail' => $_POST['mail']]);
                $user = $req->fetchAll(PDO::FETCH_ASSOC);

                foreach($user as $key => $log) {
                if(password_verify($_POST['password'], $log['password']))
                {
                    $_SESSION['mail']=$login;
                    $_SESSION['access_token']= generateAccessToken($login);
                    header("Location: index.php");
                }
                else
                {
                  //header("Location: index.php");

                }
                }


            // $pwd = password-hash($_POST["pwd1"], PASSWORD_DEFAULT);

            //$query = $bdd->prepare("SELECT id FROM login_admin WHERE login = '$login'");
            //$query -> execute(["titi"=>$email]);
            //$result = $query->fetch();
            // if(empty($resultat)){
            //  return false
            //}













                }







?>
