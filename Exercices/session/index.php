<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    C'est la page login <br>
    <a href="home.php"> Cela va sur la page Accueil</a><br>

    <form action="index.php" method="post">

        <label>Pseudo: </label><br>
        <input type="text" name="pseudo"><br>

        <label>Mot de passe : </label><br>
        <input type="password" name="mdp"><br>

        <input type="submit" name="login" value="Se connecter">
    </form>


</body>

</html>

<?php
if (isset($_POST["login"])) {

    if(!empty($_POST["pseudo"]) && !empty($_POST["mdp"])){
         
        $_SESSION["pseudo"] = $_POST["pseudo"];
        $_SESSION["mdp"] = $_POST["mdp"];

        header("Location: home.php");

        echo $_SESSION["pseudo"] . "<br>";
        echo $_SESSION["mdp"] . "<br>";
    }
    else{
        echo "Il y a un soucis avec votre identifiant et/ou votre mot de passe, merci de bien vouloir réssayer.";
    }
}
?>