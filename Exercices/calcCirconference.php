<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculer la circonférence d'un cercle</title>
</head>
<body>
    <form action="calcCirconference.php" method="post">
        <label>Radius: </label>
        <input type="text" name="radius">

        <input type="submit" name="Calculer">
    </form><br>
    
</body>
</html>

<?php
    $radius = $_POST["radius"];
    $circonference = null;
    $area = null;
    $volume = null;

    $circonference = 2 * pi() * $radius;
    $circonference = round($circonference, 2);

    $area = pi() * pow($radius, 2);
    $area = round($area, 2);

    $volume = 4/3 * pi() * pow($radius, 3);
    $volume = round($volume, 2);

    echo "Circonference = {$circonference}cm <br>";
    echo "Area = {$area}cm^2 <br>";
    echo "Volume = {$volume}cm^3 <br>"
?>