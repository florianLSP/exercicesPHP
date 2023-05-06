<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validerDataFormulaire</title>
</head>
<body>
    <form action="validerDataFormulaire.php" method="post">
        <label">Pseudo:</label>
        <input type="text" name="pseudo"><br>

        <label">Age:</label>
        <input type="text" name="age"><br>

        <label">Email:</label>
        <input type="text" name="email"><br>


        <input type="submit" name="login" value="Se connecter"><br>


    </form>
    
</body>
</html>

<?php
    if(isset($_POST["login"])){

        $pseudo = filter_input(INPUT_POST, "pseudo", FILTER_SANITIZE_SPECIAL_CHARS);

        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

        if(empty($pseudo)){
            echo "Le pseudo n'est pas valide <br>";
        }
        else{
            echo "Bonjour {$pseudo} ! <br>";
        }

        if(empty($age)){
            echo "L'age n'était pas valide. <br>";
        }
        else{
            echo "Tu as {$age} ans. <br>";
        }

        if(empty($email)){
            echo "L'email n'est pas valide.";
        }
        else{
            echo "Ton email est {$email}";
        }


        
    }

?> 