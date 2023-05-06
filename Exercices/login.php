<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
        <label>Nom Utilisateur: </label><br>
        <input type="text" name="username"><br>

        <label>Mot de passe: </label><br>
        <input type="password" name="password"><br>

        <input type="submit" value="Se connecter">
    </form>   
</body>
</html>

<?php
    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>";
?> 