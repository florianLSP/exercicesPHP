<?php
    include("database.php");

    $username = "evamafemme";
    $mdp = "bonjkour";
    $hash = password_hash($mdp, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";

    try{
        mysqli_query($conn, $sql);
        echo "L'utilisateur {$username} est enregistré. <br>";
    }
    catch(mysqli_sql_exception){
        echo "Erreur lors de l'insert d'utilisateur. <br>";

    }
    mysqli_close($conn);
?>