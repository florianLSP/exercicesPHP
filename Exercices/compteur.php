<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur</title>
</head>
<body>
    <form action="compteur.php" method="post">
        <label>Entre un nombre pour compter jusqu'à :</label>
        <input type="text" name="compteur">

        <input type="submit" value="Compter">

    </form>
    
</body>
</html>

<?php
    $compteur = $_POST["compteur"];
    //$compteur = $compteur+1;

    for($i = 1 ; $i <= $compteur ; $i++){
        echo "{$i}<br>";
    }
?>