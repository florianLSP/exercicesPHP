<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    C'est la page d'accueil <br>
    <form action="home.php" method="post">

        <input type="submit" name="logout" value="Déconnexion">
    </form>

</body>

</html>

<?php
    if(isset($_POST["logout"])){
        session_destroy();
        header("Location: index.php");
    }

    echo $_SESSION["pseudo"] . "<br>";
    echo $_SESSION["mdp"] . "<br>";
?>