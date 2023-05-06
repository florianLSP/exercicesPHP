<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questionnaireNourriture</title>
</head>
<body>
    <form action="questionnaireNourriture.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">
        Pizza<br>

        <form action="pasdetitre.php" method="post">
        <input type="checkbox" name="hamburger" value="Hamburger">
        Hamburger<br>

        <form action="pasdetitre.php" method="post">
        <input type="checkbox" name="hotdog" value="Hotdog">
        Hotdog<br>

        <form action="pasdetitre.php" method="post">
        <input type="checkbox" name="taco" value="Taco">
        Taco<br>

        <input type="submit" name="valider" value="Valider">
    </form>
    
</body>
</html>

<?php
    if(isset($_POST["valider"])){

        if(isset($_POST["pizza"])){
            echo "Tu aimes la pizza !<br>";
        }
        if(isset($_POST["hamburger"])){
            echo "Tu aimes les hamburgers !<br>";
        }
        if(isset($_POST["hotdog"])){
            echo "Tu aimes les hot dogs !<br>";
        }
        if(isset($_POST["taco"])){
            echo "Tu aimes les tacos !<br>";
        }

        if(empty($_POST["pizza"])){
            echo "Tu n'aimes pas la pizza !<br>";
        }
        if(empty($_POST["hamburger"])){
            echo "Tu n'aimes pas les hamburgers !<br>";
        }
        if(empty($_POST["hotdog"])){
            echo "Tu n'aimes pas les hot dogs !<br>";
        }
        if(empty($_POST["taco"])){
            echo "Tu n'aimes pas les tacos !<br>";
        }

    }
?>