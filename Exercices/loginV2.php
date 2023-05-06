<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="loginV2.php" method="post">
        <label>Pseudo: </label>
        <input type="text" name="pseudo"><br>

        <label>Mot de passe:</label>
        <input type="password" name="mdp"><br>

        <input type="submit" name="login" value="Se connecter"><br>


    </form>
    
</body>
</html>

<?php

    foreach($_POST as $key => $value){
        echo "{$key} = {$value} <br>";
    }

    if(isset($_POST["login"])){

        $pseudo = $_POST["pseudo"];
        $mdp = $_POST["mdp"];
        
        if(empty($pseudo)){
            echo "Le pseudo est pas renseigné. <br>";
        }
        elseif(empty($mdp)){
            echo "Le mot de passe n'a pas été renseigné.";
        }
        else{
            echo "Bonjour {$pseudo}";
        }
    }



?>