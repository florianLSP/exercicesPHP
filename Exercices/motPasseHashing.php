<?php
    $password = "motdepasse123";

    $hash = password_hash($password, PASSWORD_DEFAULT);
    
    if(password_verify("hamburger666", $hash)){
        echo "Tu es connecté.";
    }
    else{
        echo "Tu n'es pas connecté, le mot de passe ne correspond pas.";
    }

    // echo $password . "<br>";
    // echo $hash;
?>